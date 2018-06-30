<?php
$arr = [1,"XVI"=>"16","fifty"=>15,7,10,"11",5];
myprint($arr); //排序前，混合类型数组
//sort($arr);      //值，从小到大排序
//rsort($arr);//值，从大到小排序
//myprint($arr);//排序后，索引数组

//$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
////ksort($fruits);
//krsort($fruits);
//myprint($fruits);

//asort($arr);//保留下标值，与sort的区别：保留数组类型
//arsort($arr);
//myprint($arr);

$array1 = $array2= array("img12.png", "img10.png", "img2.png", "img1.png");
myprint($array1);
asort($array1);
myprint($array1);
natsort($array2);
myprint($array2);


function myprint($parr){
    foreach($parr as $k=>$v){
        echo "$k=>$v\t";
    }
    echo "\n";
}
