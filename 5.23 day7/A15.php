<?php
function myprint($parr){
    foreach($parr as $k=>$v){
        echo "$k=>$v\t";
    }
    echo "\n";
}

$huiwen =[];
for ($i=0;$i<1000;$i++){
    $var = strval($i);
    if( strlen($var)==1 ){
        continue;
    }
    $rev = strrev($var);
    if ($rev != $var){
    continue;
}
array_push($huiwen,$i);
}
myprint($huiwen);