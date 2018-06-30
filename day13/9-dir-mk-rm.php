<?php
//创建文件夹\目录
$newdir = "newfold";
//echo mkdir($newdir)?"成功！\n":"失败！\n"; //makedir
//echo rmdir($newdir)?"成功！\n":"失败！\n"; //removedir

if(!file_exists($newdir)){
    echo mkdir($newdir)?"创建成功！\n":"创建失败！\n";
}else{
    echo "目录已存在！";
}
//sleep(30);
if(file_exists($newdir)){
    echo rmdir($newdir)?"删除成功！\n":"删除失败！\n";
}else{
    echo "目录不存在！";
}

rmdir("./dirssss");