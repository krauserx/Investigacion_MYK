<?php

$serv1 = json_decode(file_get_contents("http://worldtimeapi.org/api/timezone/america/New_York"),true);
print_r($serv1);


$serv2 = json_decode(file_get_contents("http://worldtimeapi.org/api/timezone/Europe/Belgrade"),true);
print_r($serv2);


$serv3 = json_decode(file_get_contents("http://worldtimeapi.org/api/timezone/America/Costa_rica"),true);
print_r($serv3);
?>