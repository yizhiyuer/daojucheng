<?php
	/**
		自定义函数递归的删除整个目录
		@param	string	$directory 目录名称
	*/
	function delDir($directory) {       	
		if(file_exists($directory)) {    						//如果不存在rmdir()函数会出错
			if($dir_handle = @opendir($directory)) {      		//打开目录并判断是否成功
				while($filename = readdir($dir_handle)) {  		//循环遍历目录
					if($filename != "." && $filename != "..") {	//一定要排除两个特殊的目录
						$subFile = $directory."/".$filename;	//将目录下的文件和当前目录相连
						if(is_dir($subFile))           			//如果是目录条件则成立
							delDir($subFile);       			//递归调用自己删除子目录
						if(is_file($subFile))           		//如果是文件条件则成立
							unlink($subFile);      				//直接删除这个文件
					}
				}
				closedir($dir_handle);                  		//关闭目录资源
				rmdir($directory);                     			//删除空目录
			}
		}
	}
	
	delDir("phpMyAdmin");  		//调用delDir()函数，将程序所在目录中的“phpMyAdmin”文件夹删除
?>
