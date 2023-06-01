<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <p>Введите год <input type="text" name="age"></p>
        <p><input type="submit" name="sub"></p>
        
    </form>
</body>
</html>

<?php 
// $Year = date('Y');
// $newYear = mktime(0, 0, 0, 1, 1, $Year + 1);
// $d = $newYear - time();
// $days = round($d/(60*60*24));

// echo "До нового года остался ".$days ." день"."<br>";

// $Year = date('L');
// if($Year == 1){
//     $days = 366-date('z');
//     echo 'До нового года остался '.$days.' день.';
// }else{
//     $days = 365 - date('z');
//     echo 'До нового года остался '.$days.' день.';
// }

$Year = $_POST['age'];
if($Year!=""){
   if(is_numeric($Year)){
    if (date('L', mktime(0, 0, 0, 1, 1, $Year)))
    echo "год ".$Year." високостный";
    else
    echo "год ".$Year." не високостный";
   }
   else echo "Неверный тип данных";
}
else echo "Дата не введена";
?>


