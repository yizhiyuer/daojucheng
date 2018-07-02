<?php

$var="a";
echo ++$var;
echo ++$var;
echo --$var;

echo "\n";

$nullvar = null;
echo --$nullvar;
echo ++$nullvar;
echo ++$nullvar;

echo "\n";

echo "3"==3 ?"值相等":"值不相等" ;
echo "\n";
echo 3.00===3 ?"值相等，类型相等":"值相等，但类型不同" ;
echo "\n";
echo  (true xor true)*10;
echo "\n";
echo  (false xor false)*10;
echo "\n";
echo  (false xor true)*10;

echo "\n位运算：\n";
echo  ( 1 & 2 );
//0001
//0010
//----------
//0000
echo "\n位运算：\n";
echo  ( 1 | 2 );
//0001
//0010
//----------
//0011

echo "\n逻辑运算符的短路问题：\n";
//  and :  （假）第一个表达式为假时，不去计算后面的表达式；
//  or  :  （真）第一个表达式为真时，不去计算后面的表达式；

$org = 100;
if( 2>3 && $org=200){}
echo $org;
echo "\n";
if( 2<3 || $org=300){}
echo $org;

echo "\n位运算：\n";
$var = 1;
echo $var<<1; //0001  0010

echo "\n位运算：\n";
$var = 1;
echo ~$var; //0 01   //1 10

echo "\n执行运算：\n";

echo `dir`;

echo @$und;