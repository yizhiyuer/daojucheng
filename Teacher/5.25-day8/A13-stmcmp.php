<?php
$str1="hello World";
$str2="hello PHP";
echo "比较字符串($str1,$str2)：".strcmp($str1,$str2);
echo "\n指定长度比较字符串($str1,$str2)：".strncmp($str1,$str2,6);
//前6位的子串是一致的内容: strncmp($str1,$str2,6)
$str2="hello PHP";
$str3="hello php";
echo "\n不区分大小写比较字符串($str2,$str3)：".strcasecmp($str2,$str3);
//不区分大小写比较 strcasecmp($str2,$str3)
