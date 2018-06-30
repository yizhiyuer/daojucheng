<?php
$dirurl = "./Upload-bk";
truncate_dir($dirurl);
function truncate_dir($dirurl){
//1.先判断是否为目录；
    $res1 = is_dir($dirurl);
    if(!$res1){
        echo "非目录类型";
        return ;
    }
//目录类型 往下执行；
//echo filesize("./remove");
//2.先判断是否为空目录；
    if( @rmdir($dirurl) ){
        echo "删除成功！";
        return ;
    }
//echo "非空目录";
//3.目录文件遍历，并删除目录中所有文件
    $filekey = opendir($dirurl);
    while( $filename = readdir($filekey) ){
        if($filename == "." || $filename == ".."){
            continue;
        }
        echo "$filename \n";
        $url = $dirurl."/".$filename;
        if(is_dir($url)) {
            truncate_dir($url);//递归：函数调用自己本身；
        }
        if(file_exists($url)){
            if(!unlink($url)){
                echo "删除失败";
                return ;
            }
        }
    }
    closedir($filekey); //释放资源
    echo rmdir($dirurl) ? "成功移除目录":
        "非空目录：".filesize($dirurl);
    return ;
}


/*
 * 练习：如何清空非空文件夹（子文件夹）；
 */