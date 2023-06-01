<?php

$Year = date('Y');
$newYear = mktime(0, 0, 0, 1, 1, $Year + 1);
$d = $newYear - time();
$days = round($d/(60*60*24));

echo "До нового года остался ".$days ." день"."<br>";

$Year = date('L');
if($Year == 1){
    $days = 366-date('z');
    echo 'До нового года остался '.$days.' день.';
}else{
    $days = 365 - date('z');
    echo 'До нового года остался '.$days.' день.';
}