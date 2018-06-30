<?php
function myprint($parr){
    foreach($parr as $k=>$v){
        echo "$k=>$v\t";
    }
    echo "\n";
}
$index_arr= array("img12.png", "img10.png", "img2.png", "img1.png");
$newarr = array_slice($index_arr,1,2,true);
myprint($newarr);
$newarr_revse =  array_slice($index_arr,-2,2);
//offset 为负数，起点位置从右边往左数，length一定为整数
myprint($newarr_revse);
