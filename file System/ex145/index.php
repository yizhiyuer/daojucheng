﻿<?php
	//以只读模式打开文件
	$fp = fopen('data.txt', 'r') or die("文件打开失败");  
	
	echo ftell($fp)."<br>";      	//输出刚打开文件的指针默认位置，指针在文件的开头位置为0
	echo fread($fp, 10)."<br>";   	//读取文件中的前10个字符输出，指针位置发生了变化
	echo ftell($fp)."<br>";      	//读取文件的前10个字符之后，指针移动的位置在第10个字节处

	fseek($fp, 100, SEEK_CUR); 		//将文件指针的位置，由当前位置向后移动100个字节数
	echo ftell($fp)."<br>";       	//文件位置在110个字节处
	echo fread($fp, 10)."<br>";   	//读取110到120字节数位置的字符串，读取后指针的位置为120

	fseek($fp, -10, SEEK_END); 		//又将指针移动到倒数10个字节位置处
	echo fread($fp, 10)."<br>";   	//输出文件中最后10个字符	

	rewind($fp);              		//又移动文件指针到文件的开头
	echo ftell($fp)."<br>";      	//指针在文件的开头位置，输出0

	fclose($fp);              		//关闭文件资源
?>
