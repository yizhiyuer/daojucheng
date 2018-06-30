<?php
$str = "{uname:jack,age:12,gender:man,school:eight middle}";
$str = trim($str,"{");
$str = trim($str,"}");
echo $str."\n";
$strArr = explode(",",$str);
//var_dump($strArr);
//练习：在 $strArr 基础上再次 分离出每个元素的键 与 值
$assoc_arr = [];
foreach ($strArr as $value){
    $temp = explode(":",$value);  //ex ：export
//    echo $temp[0]."=>".$temp[1]."\n";
    $assoc_arr[$temp[0]] = $temp[1];
}
var_dump($assoc_arr);
////////////////join/implode数组的值合并成字符串，指定分隔符//////////////////
//echo join("<---->",$assoc_arr);
echo implode("<---->",$assoc_arr);