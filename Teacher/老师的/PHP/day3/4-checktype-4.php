<?php
$arr = [1,2,3,4];
if(is_array($arr)){
    echo "变量是一个数组类型的\n";
}
if( gettype($arr) =="array"){
    echo "变量是一个数组类型的\n";
}
$varnull = NULL;
echo is_null($varnull)?"空类型":"非空类型";
echo "\n";
echo gettype($varnull)=="NULL"?"空类型":"非空类型";

