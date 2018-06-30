<?php
$filename = "./files/2-gets-getc";
$res  =  fopen($filename,"r+");
//读取每一行
echo fgets($res);
echo fgets($res);
echo fgets($res);
echo fgets($res);
//读取每个字
echo "\n";
rewind($res);//让文件指针回到头部
echo fgetc($res);//读到行结束
echo fgetc($res);
echo fgetc($res);
echo fgetc($res);
echo fgetc($res);
echo fgetc($res);
