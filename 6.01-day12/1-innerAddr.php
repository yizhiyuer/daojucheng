<?php
$abc = "123";
//$def = $abc; //拷贝赋值
$def = &$abc; //引用赋值
$abc=789;
echo $abc."\t".$def;