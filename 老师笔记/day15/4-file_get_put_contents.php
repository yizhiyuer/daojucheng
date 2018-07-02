<?php

$contents = file_get_contents("./files/3-file-readfile.txt");
echo $contents;

////////写入//////////
$newfile ="./files/4-file-contents";
$issuc = file_put_contents($newfile,"85202456\r\n",FILE_APPEND );
//第三个参数为：FILE_APPEND 的时候，以追加的形式写入，如果不写，默认以覆盖形式写入
echo "\n写入：".($issuc?"$issuc 字节":"失败！");


