<?php
function myprint($parr){
    foreach($parr as $k=>$v){
        echo "$k=>$v\t";
    }
    echo "\n";
}
$keys_arr= array("pic1", "pic2",
    "pic3", "indexkey"=>"pic4");

$rand_index = array_rand($keys_arr,2);
//随机返回数组的下标
// array_rand ,随机选取数量=1,
//返回的是数字或字符串，随机选取数量 >1,返回数组
if(is_array($rand_index)){
//    var_dump($rand_index);
    foreach ($rand_index as $v){
        echo $keys_arr[$v]."\t";
    }
}else{
//    echo $rand_index;
    echo $keys_arr[$rand_index];
}


