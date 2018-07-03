<?php
$arr2str = [1,2,3,4,5];
$arr2str = @strval($arr2str); //数组转字符串会报警告
echo "\n数据类型：" . gettype($arr2str);
echo "\n";
echo @$arr2str;
//在表达式前面加 @ 符号 可以屏蔽警告

$str2num = "666六六六";
$str2num = intval($str2num);
echo "\n数据类型：" . gettype($str2num);
echo $str2num;
echo "\n";

