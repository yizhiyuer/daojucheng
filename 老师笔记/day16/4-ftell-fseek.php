<meta charset="UTF-8">
<?php
$filename = "./msgbox-file/4-ftell-fseek";
$res = fopen($filename,"r+");
echo $res;
echo "文件指针所在的位置：".ftell($res)."\n";
echo fgetc($res)."\n";
//EOF:End Of File;
echo "文件指针所在的位置：".ftell($res)."\n";
echo fgetc($res)."\n";
echo "文件指针所在的位置：".ftell($res)."\n";
echo fgetc($res)."\n";
echo "文件指针所在的位置：".ftell($res)."\n";
echo fgetc($res)."\n";
/////////设定指针所在位置///////////
echo "fseek移动指针位置后：";
fseek($res,-20,SEEK_END);
//SEEK_SET: 直接移动到 offset;SEEK_CUR:在当前位置基础上往后移动10个位置；
//SEEK_SET: 在文件结尾的基础上，往前（负数），往后（整数） offset个位置；
echo "文件指针所在的位置：".ftell($res)."\n";
//练习：
//1.将文件指针移动到20的位置，并写入中文内容：二十；
fseek($res,20);
fwrite($res,"二十");
//2.将文件指针移动到结尾向前30的位置，并写入中文内容：三十；
fseek($res,-30,SEEK_END);
fwrite($res,"三十");

fseek($res,20,SEEK_CUR);
echo "从50文件指数读取：".fread($res,5)."\n";
fseek($res,-50.,SEEK_END);
echo "从结尾-50文件指针读取：".fread($res,5)."\n";




