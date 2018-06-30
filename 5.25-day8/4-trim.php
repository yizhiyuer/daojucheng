<?php
$passwd = "123456";
echo "长度：".strlen($passwd);
$passwd = rtrim(ltrim($passwd));
//trim() //默认是去除字符串两端的空格
echo "\n去除空格后长度：".strlen($passwd);

$passwd = "t123456p";
$passwd = trim($passwd,'p');
//默认是去除字符串两端的指定字符
$passwd = trim($passwd,'t');
echo "\n",$passwd;