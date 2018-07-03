<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/30
 * Time: 10:41
 */

class MyPublic
{
    public $var_1;   //不写修饰符，默认为公有权限
//    public 可以不写
    function test(){
        echo "输出:".$this->var_1;
    }
}
$mypublic = new MyPublic();
$mypublic->var_1 = "成员属性-111111\n";//给公有的属性赋值
$mypublic->test(); //调用公有方法