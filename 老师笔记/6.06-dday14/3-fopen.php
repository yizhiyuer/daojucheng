<?php
//---------r 模式---------------
$filename = ".empty/r-file.txt";
$res = fopen($filename,"r");//r模式是在已有文件的前提下；
var_dump($res);
$rstr = fread($res,filesize($filename));
echo "r模式读取的文件内容：".$rstr."\n";
$wres = fwrite($res,date("Y-m-d H:i:s"));
echo $wres?"写入成功\n":"写入失败\n";
fclose($res);//销毁资源
//-------------r+模式--------------------

$filename ="./empty/rplus-file.txt";
$res = fopen($filename,"r+");//r模式是在已有文件的前提下；
var_dump($res);
$rstr = fread($res,filesize($filename));
echo "r+ 模式读取的文件内容：".$rstr."\n";
$wres = fwrite($res, date("Y-m-d H:i:s")."r+模式，可以读取和写入\r");
echo $wres?"写入成功\n":"写入失败\n";
fclose($res);//销毁资源



