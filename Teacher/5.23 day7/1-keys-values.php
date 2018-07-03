<?php
$assoc_arr = ["goods_id"=>1,"goods_name"=>"iphone","price"=>8000,"sellnum"=>50];
$keys_arr = array_keys($assoc_arr);//形成新索引数组
//var_dump("分离组合的键名称：",$keys_arr);
var_dump($keys_arr[1]);
$vals_arr = array_values($assoc_arr);
//var_dump("分离数组的值：",$vals_arr);//形成了新索引数组
var_dump($vals_arr[1]);