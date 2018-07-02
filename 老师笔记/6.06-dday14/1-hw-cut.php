<?php
//作业
//1.对 文件 进行 剪切；
//2.将 重命名 与 剪切 形成函数，并调用测试

$srcFile="../day13/A10-unlink.php";//源文件
$destFile="./A10-unlink-4.php";//目标文件
//
//if (copy($srcFile,$destFile)){//拷贝
//    unlink($srcFile);
//}

function my_cut($srcFile,$destFile){
    if (!file_exists($srcFile)){
        return false;//源文件不存在
    }
    if (file_exists($destFile)){
        return false;//目标文件已经存在
    }
    copy($srcFile,$destFile);//拷贝
    unlink($srcFile);//删除源文件
    return true;
}
$res = my_cut($srcFile,$destFile);
echo $res?"suc":"faild";