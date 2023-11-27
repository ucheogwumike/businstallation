<?php
if(count($tpl['location_arr']) > 0)
{
	$time_format = $tpl['option_arr']['o_time_format'];
	if((strpos($tpl['option_arr']['o_time_format'], 'a') > -1 || strpos($tpl['option_arr']['o_time_format'], 'A') > -1))
	{
		$time_format = "h:i A";
	}
	$week_start = isset($tpl['option_arr']['o_week_start']) && in_array((int) $tpl['option_arr']['o_week_start'], range(0,6)) ? (int) $tpl['option_arr']['o_week_start'] : 0;
	$jqDateFormat = pjUtil::jqDateFormat($tpl['option_arr']['o_date_format']);
	$jqTimeFormat = pjUtil::jqTimeFormat($tpl['option_arr']['o_time_format']);
	foreach($tpl['location_arr'] as $k => $v)
	{
		$arrival_hour = $arrival_minute = null;
		$departure_hour = $departure_minute = null;
		$arrival_time = null;
		$departure_time = null;
		if(isset($tpl['sl_arr']))
		{
			if(isset($tpl['sl_arr'][$v['city_id']]))
			{
				if(!empty($tpl['sl_arr'][$v['city_id']]['departure_time']))
				{
					list($departure_hour, $departure_minute,) = explode(":", $tpl['sl_arr'][$v['city_id']]['departure_time']);
					$departure_time = date($time_format, strtotime(date('Y-m-d'). ' '. $tpl['sl_arr'][$v['city_id']]['departure_time']));
				}
				if(!empty($tpl['sl_arr'][$v['city_id']]['arrival_time']))
				{
					list($arrival_hour, $arrival_minute,) = explode(":", $tpl['sl_arr'][$v['city_id']]['arrival_time']);
					$arrival_time = date($time_format, strtotime(date('Y-m-d'). ' '. $tpl['sl_arr'][$v['city_id']]['arrival_time']));
				}
			}
		}
		
		?>
			<p>
				<label class="title"><?php echo pjSanitize::clean($v['name']); ?>:</label>
				<span class="inline_block">
					<?php 
					if($k > 0)
					{
						?>
						<span class="block b3">
							<label class="block float_left t5 w100"><?php __('lblArrivalTime'); ?>: </label>
							<input type="text" name="arrival_time_<?php echo $v['city_id']?>" value="<?php echo $arrival_time;?>" class="pj-form-field w80 timepick" rel="<?php echo $week_start; ?>" rev="<?php echo $jqDateFormat; ?>" lang="<?php echo $jqTimeFormat; ?>"/>
						</span>
						<?php
					}
					if($k < count($tpl['location_arr']) - 1)
					{
						?>
						<span class="block b3">
							<label class="block float_left t5 w100"><?php __('lblDepartureTime'); ?>: </label>
							<input type="text" name="departure_time_<?php echo $v['city_id']?>" value="<?php echo $departure_time;?>" class="pj-form-field w80 timepick" rel="<?php echo $week_start; ?>" rev="<?php echo $jqDateFormat; ?>" lang="<?php echo $jqTimeFormat; ?>"/>
						</span>
						<?php
					} 
					?>
				</span>
			</p>
		<?php
	}
}
?>