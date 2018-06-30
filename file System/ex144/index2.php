<?php
    //在ftp.lampbrother.net的远程服务器上创建文件，以写的模式打开
	$file = fopen ("ftp://user:password@ftp.lampbrother.net/path/to/file", "w");  
	//将一个字符串写入到远程文件中去
	fwrite ($file, "Linux+Apache+MySQL+PHP");  
	//关闭文件资源
	fclose ($file);                               	
?>
