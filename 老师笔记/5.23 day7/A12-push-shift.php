<?php
function myprint($parr){
    foreach($parr as $k=>$v){
        echo "$k=>$v\t,";
    }
    echo "\n";
}
$i=1;
$arr=[];
echo "入队开始：\n";
while($i<=5){
    $num = array_push($arr,"物品$i");
    echo "$i 入队后数组长度为：$num ,";
    myprint($arr);
    $i++;
}
echo "入队结束：\n";
echo "出队开始：\n";
$out = 1;
while($out<=3){
    $whitch =array_shift($arr);
    echo "出队数组元素是：$whitch ,";
    myprint($arr);
    $out++;
}
echo "出队结束：\n";
//练习：要删除数组第一个元素 ：
//unset($arr[0])