<?php
	echo file_get_contents("data.txt");            			//读取文本文件中的内容并输出
	echo file_get_contents("c:\\files\\somepic.gif");  		//读取二进制文件中的内容并输出

	$handle = fopen("data.txt", "r")  or die("文件打开失败"); //以只读模式打开文件
	while (!feof($handle)) {                				  //循环读取第一行
  		$buffer = fgets($handle, 4096);     				  //一次读取一行内容
   		echo $buffer."<br>";             					  //输出每一行
	}	
	fclose($handle);                      					 //关闭打开的文件资源

	$fp = fopen('data.txt', 'r') or die("文件打开失败"); 	//以只读模式打开文件
	while (false !== ($char = fgetc($fp))) {      			//在文件中每次循环读取一个字节符
   		 echo $char."<br>";                 				//输出单个字符
	}

	//将文件test.txt中的内容读入到一个数组中，并输出
	print_r( file("test.txt") );     

	//直接将文件data.txt中的数据读出并输出到浏览器
	readfile("data.txt");       
?>
