<?php
$arr=[1,2,[3,4,[5,6,[7,8]]]];//多维
echo $arr[2][2][2][1];
echo "\n";
//$assoc_arr = ["uname"=>"unamexxx","passwd"=>"123456","age"=>15];
$assoc_arr = array("uname"=>"unamexxx","passwd"=>"123456","age"=>15);
echo $assoc_arr["age"];

echo "\n";
//数据库数据表(字段域:值)  => 关联数组（字符串下标：值） => json（key:value）

$assoc_arr_2=array();
$assoc_arr_2[0]="0下标";
var_dump($assoc_arr_2);

$arr = [99,88,"score"=>"66"];//混合数组；

$A = array(0=>array(0,1),"String"=>array("Zreo","One"));

echo  $A[0][1]."\n";
echo $A["String"][1]."\n";

