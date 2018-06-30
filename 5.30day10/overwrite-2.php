<?php

class UParent{
    public $name="UParent";
    function func1(){
        echo __CLASS__.",".__METHOD__."\n";
        echo "属性：$this->name\n";
    }
}
class UChild extends UParent {
    public $name="UChild";
    function func2(){
        echo __CLASS__.",".__METHOD__."\n";
//        echo "父级属性：".parent::$name."\n";//错误，parent::静态
        echo "属性：$this->name\n";
    }
}

$uchild  = new UChild();
$uchild->func1();
$uchild->func2();