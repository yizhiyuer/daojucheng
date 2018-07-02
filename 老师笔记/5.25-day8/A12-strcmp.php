<?php
$str1="hello";
$str2="hello";

echo strchr($str1,$str2);
echo "\n";
echo ($str1 === $str2);
echo "\n";
if (strcmp($str1,$str2)==0){
    echo "字符串相等";
}else{
    echo "字符串不相等";
}

$str1 = "hello";
$str2 = "hello";

echo "\n".strcmp($str1,$str2);
//在计算机中，小写的英文ASCII码 值 大于 大写的英文ASCII码
echo "\n".strcmp($str2,$str1);