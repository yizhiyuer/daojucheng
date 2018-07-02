<?php
class UseClone{
    public $value="12345";
    function test(){
        echo "\n克隆的对象也可以调用函数\n";
    }
}
$obj_1 = new UseClone();
//var_dump($obj_1);
$obj_2 = clone $obj_1;
//克隆后，就是内存不同位置的两个对象
//var_dump($obj_2);
$obj_2->value="7890";
echo $obj_1->value."\t".$obj_2->value;
//克隆的对象去改变值，不会影响原来的对象值
$obj_2->test();