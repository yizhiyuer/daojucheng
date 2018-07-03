<?php
//$var = 1;
//$sum = 0;
//for(;$var<=100;){
//    $sum += $var;
//    $var++;
//}
//echo $sum;

$sum = 0;
for($i=1;$i<=100;$i++){
    $sum += $i;
}
echo $sum;
echo "\n";
$sum = 0;
$var = 1;

for(;;){
    if($var<=102){
        $sum += $var;
        $var++;
    }else{
        break;
    }
}
echo $sum;
