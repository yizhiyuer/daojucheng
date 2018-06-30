<?php
function myprint($parr){
    foreach($parr as $k=>$v){
        echo "$k=>$v\t";
    }
    echo "\n";
}

$arr1= array("pic1", "pic2", "pic3", "indexkey"=>"pic4","pic5"); //键和值两个数组必须长度一致
$arr2= array("img12.png", "img10.png", "img2.png", "indexkey"=>"img1.png","pic4","pic2");
$arr3= array("img12.png", "img10.png", "img2.png", "indexkey"=>"img1.png","pic2");
$inst =  array_intersect($arr1,$arr2,$arr3);
//计算多个数组的交集，并返回第一个数组的交集元素
myprint($inst);
//---------------------------------------------------
$diff = array_diff($arr1,$arr2,$arr3);
//计算多个数组的差集，并返回第一个数组的差集元素
myprint($diff);