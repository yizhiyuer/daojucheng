<?php

class One
{
    final function test()
    {
        echo "Tow 成功继承 One\n";
        echo "如果不希望父类中的方法被重用（覆盖），使用final修饰";
    }
}

class Tow extends One
{
    function __construct()
    {
        //echo "证明e:final 修饰的class 不能被继承！";
    }

    //final:修饰的方法不能被重用
    final function test_1()
    {
        echo "子类不能重写父类中的final修饰的方法";
    }
}

$tow = new Tow();
$tow->test();//
$tow->test_1();//