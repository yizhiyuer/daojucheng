<?php
//打开文件夹、文件目录
$dirkey = opendir("./dirssss");
/*练习：while 循环 打印输出文件夹中的所有文件名
排除 . 和 ..
读到文件结尾时结束；*/
while($filename = readdir($dirkey)){
    if($filename == '.' || $filename =='..'
        || is_dir("./dirssss/".$filename)){
        continue;
    }
    $filesize=filesize("./dirssss/".$filename);//文件大小
    echo "文件名称：$filename,文件大小：$filesize 字节 \n";
}
//得到第一个文件名输出，返回文件指针开头；
rewinddir($dirkey);//rewinddir($dirkey); 文件指针返回开始位置
readdir($dirkey);
readdir($dirkey);
echo "读取文件指针第一个值：".readdir($dirkey)."\n";
//资源类的 内容/句柄 ，在使用完后，应该及时销毁；
closedir($dirkey);//销毁资源
//unset($dirkey);//销毁资源
/*echo "下一个文件：".readdir($dirkey)."\n";
echo "下一个文件：".readdir($dirkey)."\n";
echo "下一个文件：".readdir($dirkey)."\n";*/