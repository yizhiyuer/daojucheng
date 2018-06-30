<?php
	//获取Linux系统下文件类型
	echo filetype('E:\\wamp\\bin\\apache\\');   		//输出file，/etc/passwd为普通文件
	echo filetype('E:\\wamp\\bin\\apache\\apache2.4.9\\conf\\httpd.conf'); 		

	//获取Windows系统下文件类型
	echo filetype("E:\\wamp\\unins000.dat");  //输出file，C:\WINDOWS\php.ini为一个普通文件
	echo filetype("C:\\WINDOWS");         	//输出dir，C:\WINDOWS为一个文件夹（目录）
?>
