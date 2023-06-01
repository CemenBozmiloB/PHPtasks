<?php
//15
$array = range(0,9);
$a=0;
$b=0;
for ($i=0; $i <=count($array)-1 ; $i++) { 
    $array[$i]=mt_rand(-100,100);
    if($array[$i]>0)$a+=$array[$i];
    if($array[$i]<0)$b+=$array[$i];
}
echo "сумма всех положительных чисел ".$a."<br>";
echo "сумма всех отрицательных чисел ".$b."<br>";