<?php

$fileArr = file("./files/3-file-readfile.txt");
//将文件中每一行读入数组中；
var_dump($fileArr);

$filesize = readfile("./files/3-file-readfile.txt");
//readfile函数具有打印输出功能，返回字节数
echo "\n文件大小：".$filesize."字节";



