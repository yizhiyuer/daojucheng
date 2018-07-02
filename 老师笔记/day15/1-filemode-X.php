<?php
$filename = "./files/1-new.txt";
$res = @fopen($filename,"x+");
if($res){
    //写入内容；
    fwrite($res,"x+ 模式,在没有文件的时候,创建文件并写入,如果文件存在则返回false");
//    sleep(10);
//    echo fread($res,1000);
    fclose($res);
}else{
    echo "文件已经存在，无法创建";
}
