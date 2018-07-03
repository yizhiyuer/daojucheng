<?php

class Single
{
    public $change = "没有变化！！！";
    static $obj;

    private function __construct(){}
    //private 修饰后，构造函数失效
    static function getInstance(){
        if (is_null(self::$obj)){//如果为空
         self::$obj = new self();//实例化对象
        }
        return self::$obj;
    }

    function test()
    {
        echo "单调模式调用\n";
    }
}

//new Single();
//1.让new 关键字失效，补鞥同过new实例化对象；
//2.定义能在外部访问的方法；
//3.在类内部的句柄函数中 返回对象 new self（）；
//4.在类的外部通过句柄函数调用获取单一对象；
$single = Single::getInstance();
$single->test();
////////////////////////////////////////////
//5.在句柄函数中写判断：保证 new self()只发生一次
$Single2 = Single::getInstance();
$single2->change="改变属性内容\n";
//单例模式中$single 和single2指向一个对象；
echo '$single->change的值是什么：'.$single->change;