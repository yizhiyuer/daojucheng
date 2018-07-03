<?php
$fileurl = "./4-file_exists_size.php";
$info_arr = pathinfo($fileurl,1);
$info_arr = pathinfo($fileurl,2);
$info_arr = pathinfo($fileurl,4);
$info_arr = pathinfo($fileurl,8);
var_dump( $info_arr );

$absUrl = realpath($fileurl);
echo "绝对路径为：".$absUrl;
echo "\n";
//练习：
//1.先判断文件是否存在；
//2.获取文件的绝对路径；
//3.分离出文件 绝对路径 的 目录路径，文件名，扩展名；
$is_exists = file_exists($fileurl);
if(!$is_exists){
    exit("文件不存在！\n");
}
$absurl = realpath($fileurl); //绝对路径
$info = pathinfo($absurl); //分解出路径信息数组
//var_dump($info);
echo "文件所在的目录路径：".$info["dirname"]."\n";
echo "文件basename：".$info["basename"]."\n";
echo "文件filename：".$info["filename"]."\n";
echo "文件扩展名（后缀）：".$info["extension"]."\n";




