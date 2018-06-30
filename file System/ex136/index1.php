<?php
	/**
		声明一个函数，通过传入一个文件名称获取文件大部分属性
		@param	string	$fileName	文件名称
	*/
	function getFilePro($fileName) { 
		//如果提供的文件或目录不存在，则直接退出函数
		if(!file_exists($fileName)) {   	
			echo "目标文件不存在！！<br>";
			return;
		}
		
		//判断是否是一个普通文件，如果是则条件成立
		if(is_file($fileName))        
			echo $fileName."是一个文件<br>";
			
		//判断是否是一个目录，如果是则条件成立，输出下面语句
		if(is_dir($fileName))        	
			echo $fileName."是一个目录<br>";

		//用定义的函数输出文件型态
		echo "文件型态：".getFileType($fileName)."<br>";   
		//获取文件大小，并自定义转换单位
		echo "文件大小：".getFileSize(filesize($fileName))."<br>"; 
		
		if(is_readable($fileName))    	//判断提供的文件是否可以读取内容
			echo "文件可读<br>";
	  	if(is_writable($fileName))     	//判断提供的文件是否可以改写
			echo "文件可写<br>";
		if(is_executable($fileName))   	//判断提供的文件是否有执行的权限
			echo "文件可执行<br>";

	  	echo "文件建立时间: ".date("Y 年 m 月 j 日",filectime($fileName))."<br>";
		echo "文件最后更动时间: ".date("Y 年 m 月 j 日",filemtime($fileName))."<br>";
		echo "文件最后打开时间: ".date("Y 年 m 月 j 日",fileatime($fileName))."<br>";		
	}

	/**
		声明一个函数用来返回文件的类型
		@param	string	$fileName	文件名称
	*/
	function getFileType($fileName) { 
		//通过filetype()函数返回的文件类型作为选择的条件
		switch(filetype($fileName)){  	
			case 'file':    $type .= "普通文件"; 	 break;
			case 'dir':     $type .= "目录文件"; 	 break;
			case 'block':   $type .= "块设备文件";	 break;
			case 'char':    $type .= "字符设备文件"; break;
			case 'fifo':    $type .= "命名管道文件"; break;			
			case 'link':    $type .= "符号链接";	 break;			
			case 'unknown': $type .= "未知类型";	 break;	
			default: 		$type .= "没有检测到类型";		
		}
		return $type;        							//返回转换后的类型
	}

	/**
		自定义一个文件大小单位转换函数
		@param	int	$bytes	文件大小的字节数
		@return	string		转换后带有单位的尺寸字符串
	*/
	function getFileSize($bytes) {      	
		if ($bytes >= pow(2,40)) {    					//如果提供的字节数大于等于2的40次方
			$return = round($bytes / pow(1024,4), 2); 	//将字节大小转换为同等的T大小
			$suffix = "TB";                      		//单位为TB
		} elseif ($bytes >= pow(2,30)) {				//如果提供的字节数大于等于2的30次方
			$return = round($bytes / pow(1024,3), 2); 	//将字节大小转换为同等的G大小
			$suffix = "GB";                      		//单位为GB
		} elseif ($bytes >= pow(2,20)) {				//如果提供的字节数大于等于2的20次方
			$return = round($bytes / pow(1024,2), 2); 	//将字节大小转换为同等的M大小
			$suffix = "MB";                      		//单位为MB
		} elseif ($bytes >= pow(2,10)) {				//如果提供的字节数大于等于2的10次方
			$return = round($bytes / pow(1024,1), 2); 	//将字节大小转换为同等的K大小
			$suffix = "KB";                      		//单位为KB
		} else {                   						//否则提供的字节数小于2的10次方
			$return = $bytes;                   		//字节大小单位不变
			$suffix = "Byte";                     		//单位为Byte
		}
		return $return ." " . $suffix;                 	//返回合适的文件大小和单位
	}
	
	//调用自定义函数，将当前目录下的file.php文件传入，获取属性
	getFilePro("file.php");		
?>
