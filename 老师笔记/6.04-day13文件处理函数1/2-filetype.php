<?php
//echo filetype("./dirssss")."\n";
//echo filetype("./dirssss/filessss.txt")."\n";
//echo filetype("./dirssss/qq.lnk")."\n";
//echo filetype("./dirssss/chrome.exe")."\n";

//测试结果：window下: file类型，dir类型；

echo is_dir("./dirssss")?"是 目录类型\n":"不是 目录类型\n";
echo is_file("./dirssss/filessss.txt")?"是 普通文件类型\n":"不是 普通文件类型\n";
echo is_executable("./dirssss/chrome.exe")
    ?"是 可执行文件类型\n":"不是 可执行文件类型\n";
echo is_file("./dirssss/exec.bat")
    ?"是 普通文件类型\n":"不是 普通文件类型\n";

echo is_link("./dirssss/qq.lnk")
    ?"是 链接类型\n":"不是 链接类型\n";

echo is_readable("./dirssss/filessss.txt")
    ?"是 可读文件\n":"不是 可读文件\n";

echo is_writable("./dirssss/filessss.txt")
    ?"是 可写文件\n":"不是 可写文件\n";

echo "文件创建时间：".date("Y-m-d H:i:s",
        filectime("./dirssss/filessss.txt")); //create
echo "\n文件修改时间：".date("Y-m-d H:i:s",
        filemtime("./dirssss/qq.lnk"));//modify
echo "\n文件访问时间：".date("Y-m-d H:i:s",
        fileatime("./dirssss/chrome.exe"));//access

//date("Y-m-d H:i:s",time());
//练习：将上述filectime filemtime fileatime
// 获得的时间戳格式化（Y-m-d H:i:s）
//
$isread = is_readable("./dirssss/readonly.txt");
$iswrite = is_writable("./dirssss/readonly.txt");
if($iswrite && $isread){
    echo "\n是一个可读写文件！";
}else{
    echo "\n是一个只读文件！";
}

//date_default_timezone_set("Asia/Shanghai");//设置系统默认时区
$fileprops = stat("./dirssss/readonly.txt");
var_dump($fileprops);