<?php
$assoc_arr = [ "goods_id"=>1,"goods_name"=>"iphone","price"=>8000,"sellnum"=>50,
                "attr"=>["color"=>"hongse","inner"=>"32G"]
    ];
echo in_array( "iphone" , $assoc_arr );
echo "\n";
$attr = ["color"=>"hongse","inner"=>"64G"];
echo in_array( $attr , $assoc_arr )?"yes":"no";

echo "\n";
echo array_search( "iphone" , $assoc_arr );
echo "\n";
echo array_search( "8000" , $assoc_arr );
echo "\n";
echo array_search( "32G" , $assoc_arr )?"yes":"no";//找不到信息，返回false
echo "\n";
$attr = ["color"=>"hongse","inner"=>"32G"];
$key = array_search( $attr , $assoc_arr );
echo $key?$key:"no";

