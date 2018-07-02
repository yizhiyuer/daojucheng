<?php
$str = "Don't forget to move on"; //Do not
$new = str_replace("n't"," not",$str);
echo $new;
$str = "abcdefghijklmnopqrstuvwxyz";
$searchArr=['a','e','i','o','u'];
$newstr = str_replace($searchArr,"++",$str);
//第二个参数如果写成空字符串，则有删除子串的作用
echo "\n".$newstr;
//练习：将一个手机号码的中间四位设置为 '*' ?

$phoneStr = "18135595623";
//substr();
$seachStr = substr($phoneStr,3,4);
//利用字符串截取手机号中间部分
$newstr = str_replace($seachStr,"****",$phoneStr);

echo "\n".$newstr;

