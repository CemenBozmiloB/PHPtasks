<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//1
$mar = "maria";
if($mar !="Bot"){
    echo"Верно <br>";
}

//2
define("CONSTANT", "7");
echo CONSTANT."<br>";

//3
$a=17;
$b=10;
$c = $a-$b;
$d = 7;
$result = $c+$d;
echo $result."<br>";

//4
$array = ["Мир, ","труд","май","!"];
echo $array[0].$array[1].", ".$array[2].$array[3]."<br>";


//5
$array = ["Привет, ","мир","!"];
$array[0]="Пока, ";
echo(implode($array))."<br>";

//6
$arr = ["Петя"=>12,"Коля"=>24,"Иван"=>4325];
echo $arr["Петя"]." ".$arr["Коля"]."<br>";

//7
$arr = ["Петя"=>12,"Коля"=>24,"Иван"=>4325];
echo array_sum($arr)."<br>";

//8
$week= array("ru"=> array ("пн","вт","ср","чт","пт","сб","вс"),"en"=> array ("mo","tu","we","th","fr","sa","su"));
echo $week["ru"][2]."<br>";
echo $week["en"][2]."<br>";

//9
$arr=[2,5,3,9];
echo $result = $arr[0]*$arr[1]+$arr[2]*$arr[3]."<br>";

//10
$min = mt_rand(0,59);
echo $min;
if($min<=15)echo " первая четверть часа"."<br>";
else if($min>15&&$min<=30)echo " вторая четверть часа"."<br>";
else if($min>30&&$min<=45)echo " третья четверть часа"."<br>";
else echo" четвертая четверть часа"."<br>";

//11

//12
$layout = ["html","css","php","js","jq"];
foreach($layout as $i){
    if($i=="jq"){
    echo $i."<br>";  
    }
    else echo $i.",";
}

//13
$mass = [10,20,15,17,24,35];
$result = 0;
for($i=0;$i<=count($mass)-1;$i++){
    $result += $mass[$i];
}
echo $result."<br>";

//14
$arr= array("Коля"=>200,"Вася"=>300,"Петя"=>400);
foreach ($arr as $key => $value) {
    echo $key." - зарплата ".$value." долларов"."<br>";
}

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
?>
</body>
</html>
