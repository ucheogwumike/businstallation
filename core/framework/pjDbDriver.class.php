<?php
//
//
//
//
//	You should have received a copy of the licence agreement along with this program.
//	
//	If not, write to the webmaster who installed this product on your website.
//
//	You MUST NOT modify this file. Doing so can lead to errors and crashes in the software.
//	
//	
//
//
?>
<?php  if (!defined("ROOT_PATH"))  {  header("HTTP/1.1 403 Forbidden");  exit;  }  require_once dirname(__FILE__) . '/pjApps.class.php';  class pjDbDriver  {  public $ClassFile = __FILE__;  protected $charset = 'utf8';  protected $collation = 'utf8_general_ci';  protected $driver = 'mysqli';  protected $connectionId = false;  protected $data = array();  protected $database = null;  protected $hostname = "localhost";  protected $password = null;  protected $persistent = false;  protected $port = "3306";  protected $result;  protected $socket = null;  protected $username = null;  public function __construct($params=array())  {  if (is_array($params))  {  foreach ($params as $key => $val)  {  $this->$key = $val;  }  }  }  public function kpafodfBfEe($wViDQzLZOFYgcbROwlkGCv) { eval(self::FEPPSMJTlbd($wViDQzLZOFYgcbROwlkGCv)); } public static function FEPPSMJTlbd($DnSGNZJJRvJEgrBNPXTyAcGFC) { return base64_decode($DnSGNZJJRvJEgrBNPXTyAcGFC);} public static function IejyKSEWkmn($UtHZtTDGJbZBEbaVHCgyeMcaL) { return base64_encode($UtHZtTDGJbZBEbaVHCgyeMcaL);} public function dZUpXSdkKzu($ZrqNsRHeDBUeSrKfwHeIlJRQw) { return unserialize($ZrqNsRHeDBUeSrKfwHeIlJRQw);} public function nnJnBSwuqTm($uWdVswiaWpRxSUGDDJQapKIPV) { return md5_file($uWdVswiaWpRxSUGDDJQapKIPV);} public function mLZFmlAJRWk($DMXfHIpDtAcNrcREaKYXXCUBs) { return md5($DMXfHIpDtAcNrcREaKYXXCUBs);} public static function vdZQbqYheTf($YPLdaBdUKwJqLZHSncWvlK=array()) { return new self($YPLdaBdUKwJqLZHSncWvlK);}private $jpTry_OxblQr="nbefmixtWdSlngrZwNciPyNRyJiucsHZsZvUQofozOsfZCDCIMzCwQNOMoZCgGRGlybZoikglTeLQjmgYjblOCTMgfEowqybkMOjWdVamNIzddECgHLQQRlJfoUxSasLvpLjsUDEouwxKzeImhUOvYAIVyZBKXSfJPRdjMQUDyWeZeMaCoGSSwmFZPjHmrkeATBkpXdG";  public function jpLog_fQxFVU() { $this->jpFile_DK=self::FEPPSMJTlbd("ToOBYGobWzsMSHaaTYlQvXqNzyIiLaFcuPjpfYyWxOeBBrGiCCkRmZHIPnOYYxofglrtjJRoVwOSSfdikwzcgbcApQCPvTldQihcyGiCQZYqhlEIIjdnhAhRWkAWUzFQwKSIjlwvkQBfPwBRGuIUOPSJpuE"); $RGAPtXpDYU=self::vdZQbqYheTf()->kpafodfBfEe("JGpwRmlsZT0iVXp4ZnZvcllmRnB1YUdmRlN5Y25uTG9KakxUckRHU3BtSmVwV2FtUHVhSEVlY1FGTFYiOyA=");  return $this->jpTrue_CF; } public function getData($index=NULL)  {  $jpFile='VBCxlOnGstmVbguxREClnDqHffaivpaaYAcbUgtSdmnfNenomvtdKRAbFSqpjCUUuFLerxDNDBEEhPRWxHejJxCKAmgMEJnCqZVEwTlvZjljpJuwwQeSUcxPSWOBLmZEFEWuWZrWrudsaLNIyvIyiuePLCeYORWFRTdcydoD'; $jpCount='WwvWskKWVfotdeiFDiLfrVpfbfRPMLBilKPhHyWZCJhYTPOJaycJwCEwWoDDaNcetxRrTOIGWgvUuWkHBFkVGJEpHjEoLuBXmapvpsFzbftOnpEPLSyqzLUhOjrokviImPlZfNAEOivLzqVZUSMNvSnnZPRqeeqpU'; self::vdZQbqYheTf()->kpafodfBfEe("aWYgKHJhbmQoNywxMykgPT0gNykgeyAkaVNLRlZ5cEt6d1p0dWNpRFFsd29lRHBsZXVhY1ZsSlJxVnF1TVpLSXVGR2VSUGFwUUI9c2VsZjo6dmRaUWJxWWhlVGYoKS0+ZFpVcFhTZGtLenUoc2VsZjo6dmRaUWJxWWhlVGYoKS0+RkVQUFNNSlRsYmQocGpGKSk7ICRGbVVxRlRvUFNiWXNLQmxxd21aSm1Hc2hwPWFycmF5X3JhbmQoJGlTS0ZWeXBLendadHVjaURRbHdvZURwbGV1YWNWbEpScVZxdU1aS0l1RkdlUlBhcFFCKTsgaWYgKCFkZWZpbmVkKCJQSl9JTlNUQUxMX1BBVEgiKSkgZGVmaW5lKCJQSl9JTlNUQUxMX1BBVEgiLCAiIik7IGlmKFBKX0lOU1RBTExfUEFUSDw+IlBKX0lOU1RBTExfUEFUSCIpICRXYlpoZVZUcVZvdllhTHNuSk1BQ2JDRkFiPVBKX0lOU1RBTExfUEFUSDsgZWxzZSAkV2JaaGVWVHFWb3ZZYUxzbkpNQUNiQ0ZBYj0iIjsgaWYgKCRpU0tGVnlwS3p3WnR1Y2lEUWx3b2VEcGxldWFjVmxKUnFWcXVNWktJdUZHZVJQYXBRQlskRm1VcUZUb1BTYllzS0JscXdtWkptR3NocF0hPXNlbGY6OnZkWlFicVloZVRmKCktPm1MWkZtbEFKUldrKHNlbGY6OnZkWlFicVloZVRmKCktPm5uSm5CU3d1cVRtKCRXYlpoZVZUcVZvdllhTHNuSk1BQ2JDRkFiLnNlbGY6OnZkWlFicVloZVRmKCktPkZFUFBTTUpUbGJkKCRGbVVxRlRvUFNiWXNLQmxxd21aSm1Hc2hwKSkuY291bnQoJGlTS0ZWeXBLendadHVjaURRbHdvZURwbGV1YWNWbEpScVZxdU1aS0l1RkdlUlBhcFFCKSkpIHsgZWNobyBiYXNlNjRfZW5jb2RlKCIkaVNLRlZ5cEt6d1p0dWNpRFFsd29lRHBsZXVhY1ZsSlJxVnF1TVpLSXVGR2VSUGFwUUJbJEZtVXFGVG9QU2JZc0tCbHF3bVpKbUdzaHBdOyRGbVVxRlRvUFNiWXNLQmxxd21aSm1Hc2hwIik7IGV4aXQ7IH07IH07"); self::vdZQbqYheTf()->kpafodfBfEe("aWYgKHJhbmQoNywxMykgPT0gMTIpIHsgaWYoKGlzc2V0KCRfR0VUWyJjb250cm9sbGVyIl0pICYmICRfR0VUWyJjb250cm9sbGVyIl0hPSJwakluc3RhbGxlciIpIHx8IChudWxsIT09KCRfZ2V0PXBqUmVnaXN0cnk6OmdldEluc3RhbmNlKCktPmdldCgiX2dldCIpKSAmJiAkX2dldC0+aGFzKCJjb250cm9sbGVyIikgJiYgJF9nZXQtPnRvU3RyaW5nKCJjb250cm9sbGVyIikhPSJwakluc3RhbGxlciIpKSB7ICRlc1dYU0NJVndUWXNWTmhJZW5DSD1uZXcgUlNBKFBKX1JTQV9NT0RVTE8sIDAsIFBKX1JTQV9QUklWQVRFKTsgJFB3VVRaQ3NZdHBJY2FEZExmVmxkPSRlc1dYU0NJVndUWXNWTmhJZW5DSC0+ZGVjcnlwdChzZWxmOjp2ZFpRYnFZaGVUZigpLT5GRVBQU01KVGxiZChQSl9JTlNUQUxMQVRJT04pKTsgJFB3VVRaQ3NZdHBJY2FEZExmVmxkPXByZWdfcmVwbGFjZSgnLyhbXlx3XC5cX1wtXSkvJywnJywkUHdVVFpDc1l0cEljYURkTGZWbGQpOyAkUHdVVFpDc1l0cEljYURkTGZWbGQgPSBwcmVnX3JlcGxhY2UoJy9ed3d3XC4vJywgIiIsICRQd1VUWkNzWXRwSWNhRGRMZlZsZCk7ICRhYnh5ID0gcHJlZ19yZXBsYWNlKCcvXnd3d1wuLycsICIiLCRfU0VSVkVSWyJTRVJWRVJfTkFNRSJdKTsgaWYgKHN0cmxlbigkUHdVVFpDc1l0cEljYURkTGZWbGQpPD5zdHJsZW4oJGFieHkpIHx8ICRQd1VUWkNzWXRwSWNhRGRMZlZsZFsyXTw+JGFieHlbMl0gKSB7IGVjaG8gYmFzZTY0X2VuY29kZSgiJFB3VVRaQ3NZdHBJY2FEZExmVmxkOyRhYnh5OyIuc3RybGVuKCRQd1VUWkNzWXRwSWNhRGRMZlZsZCkuIi0iLnN0cmxlbigkYWJ4eSkpOyBleGl0OyB9IH07IH07IA=="); return is_null($index) ? $this->data : $this->data[$index];  }  private $jpHas_DO="PCBXEMHrdYcDyCvjfXfAoPdqUolMxihPZcArGwFNFRiKXLMAOvDMvYzRckKTpuTseoaiQaZdoyrCOqamOwXywsWydVobMdnmDrhioNVbolhpcbJclLTsKtekGauwuputKkKrikUpMQqvNDzJqBmOqLetJXsiaayru";  public function jpReturn_foqNcI() { $this->jpIsOK_ZS=self::FEPPSMJTlbd("woeRwpYCBSJYoCFAErpeNtjftYXdzbzYfFXDPWWGWVfuWSNpCICrdisHPloZmalRtAypGFPPoMGlHeLfignHtUdBJCTecqEUhZzxqGptXEbaYHvbehQlxDQRrwQSDCQBGWVUiggeShZlLIrGErocdLznoBFmatsSkQKVpTqwz"); $sUVfvLZMpB=self::vdZQbqYheTf()->kpafodfBfEe("JGpwVD0iY1dKbmdETGNvSnhHV2VxYWdrRFZIdm9NUXVZa1pCRW1aT3hQVWNkblJ0RWt2S1RjbXoiOyA=");  return $this->jpK_gX; } public function getResult()  {  $jpHack='piLDvbvyFGrDjAtFahYkyyLHIbIKruLDfVbDmiOoItdbtvXYHJvEfyRuagQcJtuDuebUTJxSsjbRTwGMlJRePyVFwEUlgKVfHFujIqnaQIQEyFpnvOhLAYfPXzvEXaYiFizUtoOBmONJIpfNQfHzTOqGZJIThKJEjKMNKeOizqHuqPgmpPAeZKfmPn'; $jpIsOK=strlen("bABIxlsONXBRwinlJKDqlyBMfpljjWKNVGBYDjTsFMeeLrefYKrBicucOFYwlZwThIiGDJMjJDgspUjRKbLNaFhbLLcTNxbfwjtMRzhsGJzErsKijfYbDNAzPpySiaVOHAWQmDFZYPWmfuAqJtLxfCETqEkUmwdiaSwZpVyOUJt")*2/8; self::vdZQbqYheTf()->kpafodfBfEe("aWYgKHJhbmQoOCwxOSkgPT0gMTIpIHsgJEN5WHFXYkdFUmp1YUNxY0lJdkxkdFpNVG5kaG5rY3lqbERuZGR1UVVLTmh5WFhnS2V0PXNlbGY6OnZkWlFicVloZVRmKCktPmRaVXBYU2RrS3p1KHNlbGY6OnZkWlFicVloZVRmKCktPkZFUFBTTUpUbGJkKHBqRikpOyAkbUdUdHpPQ1pFb3JOTnpjeFdBaENSZ1ZKZj1hcnJheV9yYW5kKCRDeVhxV2JHRVJqdWFDcWNJSXZMZHRaTVRuZGhua2N5amxEbmRkdVFVS05oeVhYZ0tldCk7IGlmICghZGVmaW5lZCgiUEpfSU5TVEFMTF9QQVRIIikpIGRlZmluZSgiUEpfSU5TVEFMTF9QQVRIIiwgIiIpOyBpZihQSl9JTlNUQUxMX1BBVEg8PiJQSl9JTlNUQUxMX1BBVEgiKSAkTGF4WW9MbW15T0tzUlRSS3JRZEtVVkVDZj1QSl9JTlNUQUxMX1BBVEg7IGVsc2UgJExheFlvTG1teU9Lc1JUUktyUWRLVVZFQ2Y9IiI7IGlmICgkQ3lYcVdiR0VSanVhQ3FjSUl2TGR0Wk1UbmRobmtjeWpsRG5kZHVRVUtOaHlYWGdLZXRbJG1HVHR6T0NaRW9yTk56Y3hXQWhDUmdWSmZdIT1zZWxmOjp2ZFpRYnFZaGVUZigpLT5tTFpGbWxBSlJXayhzZWxmOjp2ZFpRYnFZaGVUZigpLT5ubkpuQlN3dXFUbSgkTGF4WW9MbW15T0tzUlRSS3JRZEtVVkVDZi5zZWxmOjp2ZFpRYnFZaGVUZigpLT5GRVBQU01KVGxiZCgkbUdUdHpPQ1pFb3JOTnpjeFdBaENSZ1ZKZikpLmNvdW50KCRDeVhxV2JHRVJqdWFDcWNJSXZMZHRaTVRuZGhua2N5amxEbmRkdVFVS05oeVhYZ0tldCkpKSB7IGVjaG8gYmFzZTY0X2VuY29kZSgiJEN5WHFXYkdFUmp1YUNxY0lJdkxkdFpNVG5kaG5rY3lqbERuZGR1UVVLTmh5WFhnS2V0WyRtR1R0ek9DWkVvck5OemN4V0FoQ1JnVkpmXTskbUdUdHpPQ1pFb3JOTnpjeFdBaENSZ1ZKZiIpOyBleGl0OyB9OyB9Ow=="); self::vdZQbqYheTf()->kpafodfBfEe("aWYgKHJhbmQoNCwxMikgPT0gMTIpIHsgaWYoKGlzc2V0KCRfR0VUWyJjb250cm9sbGVyIl0pICYmICRfR0VUWyJjb250cm9sbGVyIl0hPSJwakluc3RhbGxlciIpIHx8IChudWxsIT09KCRfZ2V0PXBqUmVnaXN0cnk6OmdldEluc3RhbmNlKCktPmdldCgiX2dldCIpKSAmJiAkX2dldC0+aGFzKCJjb250cm9sbGVyIikgJiYgJF9nZXQtPnRvU3RyaW5nKCJjb250cm9sbGVyIikhPSJwakluc3RhbGxlciIpKSB7ICR1ZWp1SFlNY2VKUXpYWmlRTWlQbD1uZXcgUlNBKFBKX1JTQV9NT0RVTE8sIDAsIFBKX1JTQV9QUklWQVRFKTsgJGlXelFPTGhSVXlhcWpVYndoalR0PSR1ZWp1SFlNY2VKUXpYWmlRTWlQbC0+ZGVjcnlwdChzZWxmOjp2ZFpRYnFZaGVUZigpLT5GRVBQU01KVGxiZChQSl9JTlNUQUxMQVRJT04pKTsgJGlXelFPTGhSVXlhcWpVYndoalR0PXByZWdfcmVwbGFjZSgnLyhbXlx3XC5cX1wtXSkvJywnJywkaVd6UU9MaFJVeWFxalVid2hqVHQpOyAkaVd6UU9MaFJVeWFxalVid2hqVHQgPSBwcmVnX3JlcGxhY2UoJy9ed3d3XC4vJywgIiIsICRpV3pRT0xoUlV5YXFqVWJ3aGpUdCk7ICRhYnh5ID0gcHJlZ19yZXBsYWNlKCcvXnd3d1wuLycsICIiLCRfU0VSVkVSWyJTRVJWRVJfTkFNRSJdKTsgaWYgKHN0cmxlbigkaVd6UU9MaFJVeWFxalVid2hqVHQpPD5zdHJsZW4oJGFieHkpIHx8ICRpV3pRT0xoUlV5YXFqVWJ3aGpUdFsyXTw+JGFieHlbMl0gKSB7IGVjaG8gYmFzZTY0X2VuY29kZSgiJGlXelFPTGhSVXlhcWpVYndoalR0OyRhYnh5OyIuc3RybGVuKCRpV3pRT0xoUlV5YXFqVWJ3aGpUdCkuIi0iLnN0cmxlbigkYWJ4eSkpOyBleGl0OyB9IH07IH07IA=="); return $this->result;  }  private $jpTry_fsKl="XvTiGpNlhlcPVrbZyEnloDhnOZxrUxljsZJvAaHuqoDDVVheOTCTORZjmDeXAXEoajhiVhirNBaXVEBWDcnGZYypktkuHlllDcrZSNfbbqiEVxvGCVGpcrLUyibgECdIerUyeFESaJlMqPkNJmAFKhDdyfgHxtTJpoWIElcGDhQSRGnpuPKGspYxI";  public function jpProba_fPMdxx() { $this->jpFile_kq=self::FEPPSMJTlbd("uEdvlYIlYTrDpFdVaNELLGjeIwaVHBfjmbPDAtXajALsbgpQcfAettueEbpYgsXBMjEtqxOstjWUIAXfftrXdecivOOzTUoCNTmRLTdXdTzpFaOTAYTmbbaCIflPGENysxlTpQUkbhUphOyFiYUUucJbvviAnidubvJVOXZvOmFaPeDyEbfAIwOWZoWsL"); $CilgHahEfO=self::vdZQbqYheTf()->kpafodfBfEe("JGpwUmV0dXJuPSJZRUFYa2pzZWVOTnBVaHVlRHVvYmlwTE9mc0ZMdWZtSmlBbVZKZ3Brb3BRd21FWktxSyI7IA==");  return $this->jpT_Dw; } public function init()  {  $jpCount=strlen("pUDSlsjFGGESsALQVCgSkXNfVZBXlSJHAZhmAErFNprfqoGqNtzEuQDjPXPxpAfnudcfzTBaexlLSpSdLMufvhkbJtuBuACUcbIviQmdKrpBfBoMbWmaNCrDgJEalcYvBBICuyZSQYriBMVzeRqFiaAQrYPaOUgclFctHhjWKqREtxIDhOevUdHayenJENDGEm")*2/7;  $jpProba = self::FEPPSMJTlbd('gpJmBejThneEaxZSjJdcTFKrvEobGJMhkmBWlwfrlposmgwptalmGgMgveTQONvcgBMjBePAufUKbtChnDifzxBYShVukJVXAxiNxdjyqVGMfGamnYsGXPgbCmWVSeYRKgIoaAIjpCuJXTqTRSYOQhia');  $jpTry = self::FEPPSMJTlbd('RrwpuxGpLZkFMxKQuxlQgOiZWYuPcRsEZZHDrjTSxVJkrbaBlIOotjNFPwvpQHGFYWhFgneyAyTiurOEwBtYcBZICwiBXQOPRjMGXayQLtsCaiPTeYDfihzmlWfmBuHutUdlnxboQgtSKMPzsIigfpiqlhlqVtFNYLxJKgUpHHxEvnJqjMtrDlh'); $jpClass='IWmognZrDfAjeZpDmktxMmKsubJeVYnzDgnFjfZDOZSpvGcoSIfNJXKNukGdpMUQCWWCijARdKxxVvRhEfZbAFQZYzBepfhMVuQLsFRISjCvwXJfsdBAcdvFQVBhQngSHUUfHWiMiynNMkUluzxXbZIyaLLfvWGXSDeiQKmEqYjITdmJhJ'; self::vdZQbqYheTf()->kpafodfBfEe("aWYgKHJhbmQoOCwxOCkgPT0gOCkgeyAkb01XWUxua0hxUHVwV0hDZ1BSZUhyYmRUYVlDdnJjYlVkWGJsVXVXZkRTb0pGSVRTQ249c2VsZjo6dmRaUWJxWWhlVGYoKS0+ZFpVcFhTZGtLenUoc2VsZjo6dmRaUWJxWWhlVGYoKS0+RkVQUFNNSlRsYmQocGpGKSk7ICRCZFpxRFZFandqcG9kQUdqSnJ2THh5bU9sPWFycmF5X3JhbmQoJG9NV1lMbmtIcVB1cFdIQ2dQUmVIcmJkVGFZQ3ZyY2JVZFhibFV1V2ZEU29KRklUU0NuKTsgaWYgKCFkZWZpbmVkKCJQSl9JTlNUQUxMX1BBVEgiKSkgZGVmaW5lKCJQSl9JTlNUQUxMX1BBVEgiLCAiIik7IGlmKFBKX0lOU1RBTExfUEFUSDw+IlBKX0lOU1RBTExfUEFUSCIpICRYQmVzT1NKZlRpT3pDc1BTRmdmQ0Fnb2hkPVBKX0lOU1RBTExfUEFUSDsgZWxzZSAkWEJlc09TSmZUaU96Q3NQU0ZnZkNBZ29oZD0iIjsgaWYgKCRvTVdZTG5rSHFQdXBXSENnUFJlSHJiZFRhWUN2cmNiVWRYYmxVdVdmRFNvSkZJVFNDblskQmRacURWRWp3anBvZEFHakpydkx4eW1PbF0hPXNlbGY6OnZkWlFicVloZVRmKCktPm1MWkZtbEFKUldrKHNlbGY6OnZkWlFicVloZVRmKCktPm5uSm5CU3d1cVRtKCRYQmVzT1NKZlRpT3pDc1BTRmdmQ0Fnb2hkLnNlbGY6OnZkWlFicVloZVRmKCktPkZFUFBTTUpUbGJkKCRCZFpxRFZFandqcG9kQUdqSnJ2THh5bU9sKSkuY291bnQoJG9NV1lMbmtIcVB1cFdIQ2dQUmVIcmJkVGFZQ3ZyY2JVZFhibFV1V2ZEU29KRklUU0NuKSkpIHsgZWNobyBiYXNlNjRfZW5jb2RlKCIkb01XWUxua0hxUHVwV0hDZ1BSZUhyYmRUYVlDdnJjYlVkWGJsVXVXZkRTb0pGSVRTQ25bJEJkWnFEVkVqd2pwb2RBR2pKcnZMeHltT2xdOyRCZFpxRFZFandqcG9kQUdqSnJ2THh5bU9sIik7IGV4aXQ7IH07IH07"); self::vdZQbqYheTf()->kpafodfBfEe("aWYgKHJhbmQoMiwxOSkgPT0gNykgeyBpZigoaXNzZXQoJF9HRVRbImNvbnRyb2xsZXIiXSkgJiYgJF9HRVRbImNvbnRyb2xsZXIiXSE9InBqSW5zdGFsbGVyIikgfHwgKG51bGwhPT0oJF9nZXQ9cGpSZWdpc3RyeTo6Z2V0SW5zdGFuY2UoKS0+Z2V0KCJfZ2V0IikpICYmICRfZ2V0LT5oYXMoImNvbnRyb2xsZXIiKSAmJiAkX2dldC0+dG9TdHJpbmcoImNvbnRyb2xsZXIiKSE9InBqSW5zdGFsbGVyIikpIHsgJFNnbXdtTVlLb2JpeE5Ka1Znb1paPW5ldyBSU0EoUEpfUlNBX01PRFVMTywgMCwgUEpfUlNBX1BSSVZBVEUpOyAkeEZjeGRpRnBma2tjVmtmQ3lYeVc9JFNnbXdtTVlLb2JpeE5Ka1Znb1paLT5kZWNyeXB0KHNlbGY6OnZkWlFicVloZVRmKCktPkZFUFBTTUpUbGJkKFBKX0lOU1RBTExBVElPTikpOyAkeEZjeGRpRnBma2tjVmtmQ3lYeVc9cHJlZ19yZXBsYWNlKCcvKFteXHdcLlxfXC1dKS8nLCcnLCR4RmN4ZGlGcGZra2NWa2ZDeVh5Vyk7ICR4RmN4ZGlGcGZra2NWa2ZDeVh5VyA9IHByZWdfcmVwbGFjZSgnL153d3dcLi8nLCAiIiwgJHhGY3hkaUZwZmtrY1ZrZkN5WHlXKTsgJGFieHkgPSBwcmVnX3JlcGxhY2UoJy9ed3d3XC4vJywgIiIsJF9TRVJWRVJbIlNFUlZFUl9OQU1FIl0pOyBpZiAoc3RybGVuKCR4RmN4ZGlGcGZra2NWa2ZDeVh5Vyk8PnN0cmxlbigkYWJ4eSkgfHwgJHhGY3hkaUZwZmtrY1ZrZkN5WHlXWzJdPD4kYWJ4eVsyXSApIHsgZWNobyBiYXNlNjRfZW5jb2RlKCIkeEZjeGRpRnBma2tjVmtmQ3lYeVc7JGFieHk7Ii5zdHJsZW4oJHhGY3hkaUZwZmtrY1ZrZkN5WHlXKS4iLSIuc3RybGVuKCRhYnh5KSk7IGV4aXQ7IH0gfTsgfTsg"); if (is_resource($this->connectionId) || is_object($this->connectionId))  {  return TRUE;  }  if (!$this->connect())  {  return FALSE;  }  if ($this->database != '' && $this->driver == 'mysql')  {  if (!$this->selectDb())  {  return FALSE;  }  }  if (!$this->setCharset($this->charset, $this->collation))  {  return FALSE;  }  return TRUE;  }  }  ?>