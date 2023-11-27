<?php
if (!defined("ROOT_PATH"))
{
	header("HTTP/1.1 403 Forbidden");
	exit;
}
class pjBusModel extends pjAppModel
{
	protected $primaryKey = 'id';
	
	protected $table = 'buses';
	
	protected $schema = array(
		array('name' => 'id', 'type' => 'int', 'default' => ':NULL'),
		array('name' => 'route_id', 'type' => 'int', 'default' => ':NULL'),
		array('name' => 'bus_type_id', 'type' => 'int', 'default' => ':NULL'),
		array('name' => 'start_date', 'type' => 'date', 'default' => ':NULL'),
		array('name' => 'end_date', 'type' => 'date', 'default' => ':NULL'),
		array('name' => 'departure_time', 'type' => 'time', 'default' => ':NULL'),
		array('name' => 'arrival_time', 'type' => 'time', 'default' => ':NULL'),
		array('name' => 'recurring', 'type' => 'varchar', 'default' => ':NULL'),
		array('name' => 'set_seats_count', 'type' => 'enum', 'default' => 'F'),
		array('name' => 'discount', 'type' => 'decimal', 'default' => '0')
	);
	
	public static function factory($attr=array())
	{
		return new pjBusModel($attr);
	}
	
	public function getBusIds($date, $pickup_id, $return_id, $booking_id=null)
	{
		$bus_id_arr = array();
		$day_of_week = strtolower(date('l', strtotime($date)));
		$week_start = date('w', strtotime($date.' -1 day'));
		$week_range_arr = pjUtil::getWeekRangeOfGiveDate($date, $week_start);
		$arr = $this
		->reset()
		->where("(t1.start_date <= '$date' AND '$date' <= t1.end_date) AND t1.id NOT IN (SELECT TSD.bus_id FROM `".pjBusDateModel::factory()->getTable()."` AS TSD WHERE TSD.`date` = '$date')")
		->where("(t1.route_id IN(SELECT TRD.route_id FROM `".pjRouteDetailModel::factory()->getTable()."` AS TRD WHERE TRD.from_location_id = $pickup_id AND TRD.to_location_id = $return_id))")
		->where("(t1.route_id IN(SELECT `TR`.id FROM `".pjRouteModel::factory()->getTable()."` AS `TR` WHERE `TR`.status='T'))")
		->findAll()
		->getData();
		
		$pjRouteCityModel = pjRouteCityModel::factory();
		$pjBusLocationModel = pjBusLocationModel::factory();
		foreach($arr as $k => $v)
		{
		    $departure_time = $v['departure_time'];
		    $bus_id = $v['id'];
		    $locations = $pjRouteCityModel
		    ->reset ()
		    ->join ( 'pjBusLocation', "t2.bus_id='" . $bus_id . "' AND t2.location_id=t1.city_id", 'inner' )
		    ->select ( "t1.*, t2.departure_time, t2.arrival_time" )
		    ->where ( 't1.route_id', $v ['route_id'] )
		    ->orderBy ( "`order` ASC" )
		    ->findAll ()->getData ();
		   
		    $week_day_arr = explode("|", $v['recurring']);
		    $week_day_bus_arr = array();
		    foreach($week_day_arr as $wday)
		    {
		        if(array_key_exists($wday, $week_range_arr))
		        {
		            $week_day_bus_arr[] = $week_range_arr[$wday];
		        }
		    }
		    $bus_time_arr = array();
		    foreach($week_day_bus_arr as $iso_date)
		    {
		        foreach($locations as $location)
		        {
		            if(!empty($location['departure_time']))
		            {
		                if($locations[0]['departure_time'] > $location['departure_time'])
    		            {
    		                $bus_time_arr[] = date('Y-m-d', strtotime($iso_date. ' + 1 days')) . ' ' . $location['departure_time'];
    		            }else{
    		                $bus_time_arr[] = $iso_date . ' ' . $location['departure_time'];
    		            }
		            }
		        }
		    }
			$pickup_arr = $pjBusLocationModel->reset ()->where ( 'bus_id', $v['id'] )->where ( "location_id", $pickup_id )->limit ( 1 )->findAll ()->getData ();
			if (! empty ( $pickup_arr )) {
			    $departure_dt = $date . ' ' . $pickup_arr [0] ['departure_time'];
			    if(in_array($departure_dt, $bus_time_arr))
			    {
			        if($booking_id == null)
			        {
			            if($departure_dt > date('Y-m-d H:i:s'))
			            {
			                $bus_id_arr[] = $v['id'];
			            }
			        }else{
			            $bus_id_arr[] = $v['id'];
			        }
			    }
			}
			
		}
		return $bus_id_arr;
	}
}
?>