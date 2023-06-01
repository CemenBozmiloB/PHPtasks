<?php
//13
$mass = [10,20,15,17,24,35];
$result = 0;
for($i=0;$i<=count($mass)-1;$i++){
    $result += $mass[$i];
}
echo $result."<br>";
