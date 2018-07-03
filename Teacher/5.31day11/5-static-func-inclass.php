<?php
class UseStatic
{
    public $name = "成员属性";//动态

    function noStaticFunc()
    {
        echo "只是一个成员方法：" . __METHOD__ . "\n";
    }

    static function staticFunc()
    {
        echo "这是一个静态方法：" . __METHOD__ . "\n";
        //$this->name;//在静态资源中不允许存在动态的属性和方法
        //$this->noStaticFunc();//错误
        //self::noStaticFunc();//noStaticFunc没有static修饰，不能使用：：访问
    }

    function useInClass()
    {//成员方法（动态）可以使用静态方法
        $this->noStaticFunc();
        self::staticFunc();
    }

}
$staticTest = new UseStatic();
$staticTest->useInClass();
echo "\n";
//类外部调用成员方法；
$staticTest->noStaticFunc();
UseStatic::staticFunc();
//类外部调用静态方法；