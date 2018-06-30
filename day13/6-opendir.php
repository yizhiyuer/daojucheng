<?php
//打开文件夹、文件目录
$dirkey = opendir("./dirssss");
//var_dump($dirkey);

/*echo readdir($dirkey)."\n"; //每次读完，文件指针往下运动；
echo readdir($dirkey)."\n";
echo readdir($dirkey)."\n";
echo readdir($dirkey)."\n";
echo readdir($dirkey)."\n";
echo readdir($dirkey)."\n";
echo readdir($dirkey)."\n";
echo readdir($dirkey).""; *///资源结尾已经没有文件，返回false;

//练习：while 循环 打印输出文件夹中的所有文件名
//排除 . 和 ..
//读到文件结尾时结束；

while($filename = readdir($dirkey)){
    if($filename == '.' || $filename =='..'
        || is_dir("./dirssss/".$filename)){
        continue;
    }
    $filesize=filesize("./dirssss/".$filename);//文件大小
    echo "文件名称：$filename,文件大小：$filesize 字节 \n";
}