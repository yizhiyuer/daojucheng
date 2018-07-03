<?php
$dir = 'E:/课件/PHP/9_第九章_PHP文件系统处理/3-imgjpeg.jpg';
echo  basename($dir);//返回路径中的文件名（最后一个路径符 (斜杠) 的右边部分）；
echo "\n";
echo  basename($dir,".jpg");

//练习1：使用字符串分隔explode()的方式获取文件名;

$pices = explode("/",$dir);
echo "\n取出路径文件名称：" .$pices[count($pices)-1];

echo "\n文件所在的目录路径：".dirname($dir);
//练习2：使用字符串分隔explode()的方式实现dirname;
//出栈 array_pop()方式去掉数组中最后一个
//join()
$pices = explode("/",$dir);
array_pop($pices);
echo "\n文件所在的目录路径：".join("/",$pices);





