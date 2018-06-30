
<?php
$index_arr=["one","2","三","IV","伍"];

foreach ($index_arr as $key=>$val){
    echo $key."=>".$val."\t";
}
echo "\n";
$assoc_arr=["I"=>"one","II"=>"two","III"=>"three","IV"=>"four","v"=>"five"];
foreach ($index_arr as $k=>$v){
    echo $k."=>".$v."\t";
}

//练习：将$assoc_arr数组的 键 与 值 分离，并分别存放在两个数组中；
$i=0;
$keyarr=[];
$valarr=[];
foreach ( $assoc_arr as  $k=>$v){
    //static $i=0;
    $keyarr[$i] = $k;
    $valarr[$i] = $k;
    $i++;
}
var_dump($keyarr,$valarr);

$foo = array("bob", "fred", "jussi", "jouni", "egon", "marliese");
$bar = each($foo);
$fred = each($foo);
var_dump($bar,$fred);



$info = array('coffee', 'brown', 'caffeine');

// 列出所有变量
list($drink, $color, $power) = $info;
echo "$drink is $color and $power makes it special.\n";

