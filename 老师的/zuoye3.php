
<?php
/**
函数课后作业：
定义一个数组类型的全局变量（如下$arr），分别用 传参数 和 全局引用 两种方式传入2个函数，
函数功能：
1.函数1：正序输出数组中所有元素(for循环实现)；
2.函数2：倒序输出数组中所有元素(while循环实现)；
提示:
$arr=array('January','February','March','April','May',
'June','July','August','September','October','November','December');
数组长度: count($arr)
 */

$arr=array('January','February','March','April','May',
    'June','July','August','September','October','November','December');

function arreach($arr){
    for($i=0;$i<count($arr);$i++){
        echo $arr[$i]."\t";
    }
    echo "\n";
}
arreach($arr);
function arreach_reverse(){
    global  $arr;
//    $GLOBALS['arr'];
    for($i=count($arr)-1;$i>=0;$i--){
        echo $arr[$i]."\t";
    }
    echo "\n";
}
arreach_reverse();


