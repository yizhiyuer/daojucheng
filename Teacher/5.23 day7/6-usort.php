<?php
function myprint($parr){
    foreach($parr as $k=>$v){
        echo "$k=>$v\t";
    }
    echo "\n";
}
$arr = [1,5,2,5,4];
//myprint($arr);
usort($arr,function($a,$b){
    if ($a == $b) {
//        echo " 比较：$a,$b";
        return 0;
    }
//    echo " 比较：$a,$b";
    return ($a < $b) ? -1 : 1;
    //返回  boolean  : true false;
});
myprint($arr);


$fruits[0]["fruit"] = "lemons";
$fruits[1]["fruit"] = "apples";
$fruits[2]["fruit"] = "grapes";
function cmp($a,$b){
    return strcmp($a["fruit"], $b["fruit"]);
}
usort($fruits,"cmp");
var_dump($fruits);

