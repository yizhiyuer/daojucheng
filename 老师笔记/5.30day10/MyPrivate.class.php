<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/30
 * Time: 10:41
 */

class MyPrivate
{
    public $var_1;   //不写修饰符，默认为公有权限
//    public 可以不写
    private $var_secret;
    function test(){
        echo "输出:".$this->var_1;
    }
    function setVarSecret($var){
        $var= $var.",随机数：".rand(1000,9999);//js : Math.random()
        $this->var_secret = $var;
    }
    function getVarSecret(){
        $var = $this->var_secret.",日期时间格式：".date("Y-m-d H:i:s",time());
        return $var;
    }
}
$mypriv = new MyPrivate();
//$mypriv->var_secret = "私有成员不允许外部程序直接访问";
//私有成员通过公有方法进行设置 与 获取；
$mypriv->setVarSecret("设置私有权限属性的值\n");
echo "获取：".$mypriv->getVarSecret();
//练习：补充写出能够设置 和 访问私有属性$var_secret的方法
