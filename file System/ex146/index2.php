<?php
	$file = fopen("test.txt","w+");       	//以读写的模式打开文件
	flock($file, LOCK_EX+LOCK_NB); 			//独占锁定加上附加锁定
  
	fwrite($file, "Write something");     	//向文件中写放数据
  	flock($file, LOCK_UN+LOCK_NB); 			//释放锁定也加上了附加锁定

	fclose($file);                   	  	//关闭文件资源
?>
