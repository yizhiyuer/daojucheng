<?php
class MyStatic
{
    const PI = 3.141592657; //类中定义常量
    function access_const(){
        return self::PI;//类内部使用self访问常量(静态)
    }
    static function staticfunc(){
        echo "\n这是静态方法，在类外部需要 类名:: 去访问";
    }

    function staticfunc_inner(){
        self::staticfunc();
        echo ",类内部需要 self:: 去访问";
    }
}
echo "在类外部使用类内部定义的常量：".MyStatic::PI;
$ms = new MyStatic();
echo "\n".$ms->access_const();
MyStatic::staticfunc();
$ms->staticfunc_inner();
