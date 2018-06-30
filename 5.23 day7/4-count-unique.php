<meta charset="UTF-8">
<?php
$assoc_arr = [ "goods_id"=>1,"goods_name"=>"iphone",
    "market_price"=>8000,"shop_price"=>8000,"sellnum"=>50,"store"=>50];
echo "<pre>";

var_dump("数组长度：",count($assoc_arr));

$count_val = array_count_values($assoc_arr);
var_dump("统计数组中所有值出现的次数：",$count_val);

$new_uniq = array_unique($assoc_arr);
var_dump("去除重复后的新数组：",$new_uniq);

echo "</pre>";







