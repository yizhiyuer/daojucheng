<?php
$money=9999;

echo  $money;

echo "\n";

echo  "1个参数：".number_format($money);//number_format()格式输出数字

echo "\n";

echo  "2个参数：".number_format($money,2); //js: number.tofixed(2)

echo "\n";

echo  "第3、4个参数一起使用："
    .number_format($money,2,"-","");

