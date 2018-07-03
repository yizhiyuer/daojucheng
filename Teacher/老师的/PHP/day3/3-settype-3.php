<?php
$num2str = 33.33;
$newvar = strval($num2str); //产生新的变量
echo "\n数据（old）类型：" . gettype($num2str);
echo "\n数据（new）类型：" . gettype($newvar);
echo "\n";

settype($num2str,"string"); //settype:改变变量本身的类型，不会产生新变量
echo "\n数据（old）类型：" . gettype($num2str);
echo "\n";
echo gettype(33);

