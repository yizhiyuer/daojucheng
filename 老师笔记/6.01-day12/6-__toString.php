<?php
class UseToString{
    function __toString()
    {
        return "这是一个对象类型变量，
        不能使用echo 或 print 打印，
        可尝试var_dump,print_r \n";
    }
}
$uts = new UseToString();
echo $uts;
print $uts;
////----------------------------------
var_dump($uts);
print_r($uts);