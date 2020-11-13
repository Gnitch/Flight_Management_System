<?php


$issue = '60';
$delay_time = gmdate('h:i:s',(int)$issue*60);
$date_time_dep = '2020-11-13 23:49:00';
$date_dep = substr($date_time_dep,0,10);
$time_dep = substr($date_time_dep,10,6) ;    
$date_time_arr = '2020-11-13 08:49:00';
$date_arr = substr($date_time_arr,0,10);
$time_arr = substr($date_time_arr,10,6) ;   

$time = new DateTime($date_time_dep);
$time->add(new DateInterval('PT' . $issue . 'M'));

$stamp = $time->format('Y-m-d H:i:s');

echo $date_time_dep;
echo '<br>';
echo $stamp;