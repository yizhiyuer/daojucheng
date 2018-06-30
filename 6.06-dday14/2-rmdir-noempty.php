<?php
$dirurl = "./remove";

//1.先判断是否为目录；
$resl = is_dir($dirurl);
if (!$resl){
    exit("非目录类型");
}
//目录类型 往下执行；
if (rmdir($dirurl) == 0){
    rmdir($dirurl);
exit("删除成功！");
}
echo "非空目录";
//目录文件遍历
$filekey = opendir($dirurl);
while ($filename = readdir($filekey)){
    if ($filename == "."|| $filename == ".."){
        continue;
    }
}