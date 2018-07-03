<?php
function myprint($parr){
    foreach($parr as $k=>$v){
        echo "$k=>$v\t";
    }
    echo "\n";
}
$even_arr = range(0,100,2);
//生成值为0到100范围的数组，可以设置步长
myprint($even_arr);
//100内的偶数求和；
echo  "100内的偶数求和:".array_sum($even_arr);
//array_sum让数组内所有的值累加
echo "\n";
//100内奇数求和；
$num_arr = range(0,100,1);
$odd_arr = array_diff($num_arr,$even_arr);
myprint($odd_arr);
echo  "100内奇数求和:".array_sum($odd_arr);


