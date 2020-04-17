<?php

class tiemposform {

	public static function hor1($num1){
$serv1 = json_decode(file_get_contents("http://worldtimeapi.org/api/timezone/america/New_York"),true);
if ($num1==1) {
	return($serv1['timezone']);
}else
  return ($serv1['datetime']);
}
public static function hor2($num2){
$serv2 = json_decode(file_get_contents("http://worldtimeapi.org/api/timezone/Europe/Belgrade"),true);
if ($num2==1) {
	return($serv2['timezone']);
}else
  return ($serv2['datetime']);
}

public static function hor3($num3){
$serv3 = json_decode(file_get_contents("http://worldtimeapi.org/api/timezone/America/Costa_rica"),true);
if ($num3==1) {
	return($serv3['timezone']);
}else
  return ($serv3['datetime']);
}
}

?>