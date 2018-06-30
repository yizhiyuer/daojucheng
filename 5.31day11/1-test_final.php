<?php

 class One
{
    final function test()
    {
        echo "Tow 成功继承 One";
    }
}

class Tow extends One
{
    function __construct()
    {
        echo "证明e:final 修饰的class 不能被继承！";
    }
}

$tow = new Tow();
//$tow->test();错误