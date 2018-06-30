<?php

class UParent{
    function func1(){
        echo __CLASS__.",".__METHOD__."\n";
    }
    function func2(){
        echo __CLASS__.",".__METHOD__."\n";
    }
    function func3(){
        echo __CLASS__.",".__METHOD__."\n";
    }
}
class UChild extends UParent {
    function func1(){  //重写
        echo __CLASS__.",".__METHOD__."\n";
    }
    function func2(){ //重写
        //要求使用父类同名方法中的功能：重载
        parent::func2();
        echo __CLASS__.",".__METHOD__."\n";
    }
}

$uchild  = new UChild();
$uchild->func1();
$uchild->func2();
$uchild->func3();