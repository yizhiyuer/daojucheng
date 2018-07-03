<?php
//重命名；
$oldname = "./msgbox-file/5-rename-ftruncate.txt";
$newname = "./5-rename-ftruncate.docx";
rename($oldname,$newname);
//rename,在目录相同是重命名，目录不同的时候剪切；
$filesize = filesize($newname);
echo "当前文件大小：$filesize 字节\n";
//ftruname 截断文件；

$res = fopen($newname,"r+");
ftruncate($res,100);//截断

$filesize = filesize($newname);
echo "当前文件大小：$filesize 字节\n";

//练习：测试在指针相应的位置进行截断；
//1.fseek 去设置文件在300处；
//2.在300处，进行文件截断，截断长度为100；

