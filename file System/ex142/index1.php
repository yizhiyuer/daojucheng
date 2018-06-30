<?php
    //使用绝对路径打开file.txt文件，选择只读模式，并返回资源$handle
	$handle = fopen("./file.txt", "r");
    //访问文档根目录下的文件，也以只读模式打开
	$handle = fopen("{$_SERVER['DOCUMENT_ROOT']}/data/info.txt", "r");
    //在 Windows 平台上，转义文件路径中的每个反斜线，或者用斜线，以二进制和只写模式组合
	$handle = fopen("E:\\data\\filetttt.gif", "wb");
    //使用相对路径打开file.txt文件，选择只读模式，并返回资源$handle
	$handle = fopen("../data/info.txt", "r");
    //打开远程文件， 使用HTTP协议只能以只读的模式打开
	$handle = fopen("http://www.example.com/", "r");
    //使用FTP协议打开远程文件，如果FTP服务器可写，则可以以写的模式打开
	$handle = fopen("ooo.txt", "w");
?>
