<?php
	//返回关于文件的信息数组，是关联和索引混合的数组
	$filePro = stat("file.php"); 
	//只打印其中的关联数组，第个13元素之后为关联数组
	print_r( array_slice($filePro, 13) ); 		
?>
