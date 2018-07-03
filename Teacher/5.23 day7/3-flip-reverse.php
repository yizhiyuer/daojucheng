<?php
$assoc_arr = [ "goods_id"=>1,"goods_name"=>"iphone","price"=>8000,"sellnum"=>50,
                "attr"=>["color"=>"hongse","inner"=>"32G"]
    ];
$newarr = @array_flip($assoc_arr);
//array_flip：交换数组中键与值位置，多维数组会报警告；
var_dump($newarr);
echo $newarr["iphone"];

echo "\n";
$keys = array_keys($assoc_arr);
$arrnew = array_flip($keys);
var_dump($arrnew);
echo $arrnew["goods_id"];

echo "\n";

$resv_Arr = array_reverse($assoc_arr);
var_dump("顺序反转后的新数组：",$resv_Arr);





