<?php

$date_a = new DateTime('2018-12-26 07:30:00');
$date_b = new DateTime('2018-12-26 12:05:00');

$interval = date_diff($date_a,$date_b);

echo $interval->format('%h:%i:%s')."\n";

?>