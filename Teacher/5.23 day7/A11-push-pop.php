<?php
function myprint($parr){
    foreach($parr as $k=>$v){
        echo "$k=>$v\t,";
    }
    echo "\n";
}
$i=1;
$arr=[];
echo "入栈开始：\n";
while($i<=5){
//    $num = array_push($arr,"物品$i");
    $arr[count($arr)]="物品$i";
//    echo "$i 入栈后数组长度为：$num ,";
    echo "$i 入栈后数组长度为： ".count($arr).",";
    myprint($arr);
    $i++;
}
echo "入栈结束：\n";
echo "出栈开始：\n";
$out = 1;
while($out<=3){
//    $whitch =array_pop($arr);
    $whitch = $arr[count($arr)-1];
    unset($arr[count($arr)-1]);
    echo "出栈数组元素是：$whitch ,";
    myprint($arr);
    $out++;
}
echo "出栈结束：\n";

//练习：要删除数组最后一个元素 ：
//unset($arr[count($arr)-1])