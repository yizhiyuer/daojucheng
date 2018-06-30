﻿<?php
    //从文件中读取指定字节数的内容存入到一个变量中
	$filename = "data.txt";                               		//将本地文件名保存在变量中
	$handle = fopen($filename, "r") or die("文件打开失败");   	//以只读的方式打开文件
	$contents = fread($handle, 100);                       		//从文件中读取前100个字节
	fclose($handle);                                    		//关闭文件资源
	echo $contents;                                    			//将从文件中读取的内容输出
	
    //从文件中读取全部内容存入到一个变量中，每次读取一部分，循环读取
	$filename = "somepic.gif";                      	//二进制文件的文件
	$handle = fopen ($filename, "rb") or die("文件打开失败");  	//以只读的方式，模式加了’b’
	$contents = "";                           	
	while (!feof($handle)) {                    				//使用feof()判断文件结尾
 		$contents .= fread($handle, 1024);       				//每次读取1024个字节
	}
	fclose($handle);                            				//关闭文件资源
	echo $contents;                            					//将从文件中读取的全部内容输出

    //另一种从文件中读取全部内容的方法
	$filename = "data.txt";                              		//将本地文件名保存在变量中
	$handle = fopen($filename, "r") or die("文件打开失败");  	//以只读的方式打开文件，
	$contents = fread($handle, filesize ($filename));  			//使用filesize()函数一起读出
	fclose($handle);                           					//关闭文件资源
	echo $contents;                            					//将从文件中读取的全部内容输出
?>
