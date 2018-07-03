<?php
function myprint($parr){
    foreach($parr as $k=>$v){
        echo "$k=>$v\t";
    }
    echo "\n";
}
$index_arr= array("img12.png", "img10.png", "img2.png", "img1.png");
//$rmarr = array_splice($index_arr ,1,2);
$rmarr = array_splice($index_arr ,1,2,["img22.jpg","img23.gif"]);
myprint($index_arr);//$index_arr是原数组，被截断后留下的
myprint($rmarr);//$rmarr，在原数组中被截取的部分

