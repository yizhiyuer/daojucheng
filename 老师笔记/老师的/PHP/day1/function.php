<?php
function myfunc($a,$b){
    return $a+$b;
}
echo "结果：".myfunc(3,9);

$nick = function(){
    echo "\n";
    echo "匿名函数";
};
$nick();
$varArr = [
    0,"sdfsdf" ,true ,false ,null ,
    [0,"sdfsdf" ,true ,false ,null ],
    ["name"=>"webxxx","age"=>23]
];
echo "\n数组长度:".count($varArr);
class people{
    function report(){
        echo "\n report one";
    }
}
$p = new people();
$p->report();
$showinhtml = "PHP 变量在html中使用";
include './phphtml.html';
