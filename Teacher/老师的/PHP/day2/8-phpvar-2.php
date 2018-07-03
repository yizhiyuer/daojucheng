<?php
$hi = "hello";
$$hi = "world"; //$hello
echo $hi ." ".$hello;
echo "\n";
$你好= "您好！";
$hi = "你好"; //改变原有变量名称；
echo $hi ." ".$$hi; //$你好

//////////////////////////////////////////////

$a = "9090";
$b = $a;    //拷贝赋值，产生新变量；
echo "\n拷贝赋值\n";
$a = 8080;
echo $a.",".$b;

$a = "9090";
$b = &$a;    //引用赋值，给原来变量一个别名；
echo "\n引用赋值\n";
$a = 8081;
echo $a.",".$b;

$addrs = "北海市";
function chage( &$addr ){ //$addr = &$addrs
    $addr.="海城区0779";
//    return $addr;
}
echo "\n";
chage($addrs );
echo $addrs;





