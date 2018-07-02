<?php
class Myobj{};
echo "索引数组：数字下标的数组；\n";
$arr_1 = [123,33.3333,true,false,$_GET,"ArrayStr",new Myobj(),[true,false]];
//print_r($arr_1);
var_dump("数组最大下标:",$arr_1[ count($arr_1)-1 ]);
echo "关联数组：键值对数组(下标是非数字符串)；\n";

$arr_assoc = array("uname"=>"jack","score"=>99,"lesson"=>"数学");
// key => value
var_dump($arr_assoc);
var_dump($arr_assoc["lesson"]);