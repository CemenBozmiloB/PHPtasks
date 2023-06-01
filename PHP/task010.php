<?php
//10
$min = mt_rand(0,59);
echo $min;
if($min<=15)echo " первая четверть часа"."<br>";
else if($min>15&&$min<=30)echo " вторая четверть часа"."<br>";
else if($min>30&&$min<=45)echo " третья четверть часа"."<br>";
else echo" четвертая четверть часа"."<br>";
