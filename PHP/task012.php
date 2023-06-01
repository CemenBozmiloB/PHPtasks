<?php
//12
$layout = ["html","css","php","js","jq"];
foreach($layout as $i){
    if($i=="jq"){
    echo $i."<br>";  
    }
    else echo $i.",";
}
