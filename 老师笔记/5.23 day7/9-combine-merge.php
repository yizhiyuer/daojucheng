<?php
function myprint($parr){
    foreach($parr as $k=>$v){
        echo "$k=>$v\t";
    }
    echo "\n";
}
$keys_arr= array("pic1", "pic2", "pic3", "indexkey"=>"pic4"); //键和值两个数组必须长度一致
$values_arr= array("img12.png", "img10.png", "img2.png", "indexkey"=>"img1.png");
$newarr = array_combine($keys_arr,$values_arr); //会产生新数组 ，长度4个
myprint($newarr);

$newarr = array_merge($keys_arr,$values_arr); //数组的拼接
myprint($newarr);
echo "拼接后数组长度：".count($newarr);
//有下标相同两个关联数组拼接的时候，只保留一个值




