<?php
	//如果连接MySQL数据库失败则使用exit()函数输出错误消息，并退出当前脚本
	$conn = mysql_connect("localhost", "root", "123456") or exit("连接数据库失败!");
	
	//如果连接后选择数据库失败则使用die()函数输出错误消息，并退出当前脚本
	mysql_select_db("db") or die("选择数据库失败!");

	$result = mysql_query("select * from table");
	if(!$result){
		echo "SQL语句执行失败!";    
		//直接退出当前脚本		
		exit;                        	
	}

