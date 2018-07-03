<?php
$arr2str = [1,2,3,4,5];
$arr2str = @strval($arr2str);//
echo "\n";
echo @$arr2str;
//在表达式前面加 @ 符号 可以屏蔽警告

$str2num = "666六六六";
