<?php
	//声明一个变量用来保存文件名	
	$fileName = "data.txt";    	
    //使用fopen()函数以只写的模式打开文件，如果不存在则创建它，打开失败则通过程序
	$handle = fopen($fileName, 'w') or die('打开<b>'.$fileName.'</b>文件失败!!');
	
	//循环10次写入10行数据到文件中
	for($row=0; $row<10; $row++)     
		//写入文件 
		fwrite($handle, $row.": www.lampbrother.net\n");	
	
	//关闭由fopen()打开的文件指针资源
	fclose($handle);	        
?>
