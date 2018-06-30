<?php
$str="999999";
echo "\n数据类型：" . gettype($str); //gettype:获取变量的类型
$str = (int)$str;
echo "\n数据类型：" . gettype($str);
$strfloat="999.999";
$strfloat = (float)$strfloat;
echo "\n数据类型：" . gettype($strfloat);
$int2bool = 50;
$int2bool = (bool)$int2bool;
echo "\n数据类型：" . gettype($int2bool);
var_dump("\n", $int2bool);
$int2bool = 0;
$int2bool = (bool)$int2bool;
echo "\n数据类型：" . gettype($int2bool);
var_dump("\n",$int2bool);

$num2str = 987;
$num2str = (string)$num2str;
echo "\n数据类型：" . gettype($num2str);

$num2str = (array)$num2str;
echo "\n数据类型：" . gettype($num2str);
echo "\n";
var_dump($num2str);

$num2str=987;
$num2str = (object)$num2str;
echo "\n数据类型：" . gettype($num2str);
echo "\n";
var_dump($num2str);

