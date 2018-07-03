<?php
//判断一个文件是否存在；
is_exists("./3-dir-func.php");
is_exists("./4-dir-func.php");
function is_exists($fileUrl){
    $is_exists = file_exists($fileUrl);
    if($is_exists){
        echo "$fileUrl 存在\n";
    }else{
        echo "$fileUrl 不存在\n";
    }
}

echo "文件大小为：".filesize("./3-dir-func.php")."字节\n";
//var_dump(filesize("./4-dir-func.php"));

//练习：判断一个文件是否存在，
//如果存在则求出文件的大小，
//不存在则输出“文件不存在”

$fileUrl = "./2-filetype.php";

$res = file_exists($fileUrl);

if($res){
    echo "$fileUrl 文件大小为：".filesize($fileUrl)."字节\n";
}else{
    echo "$fileUrl 不存在";
}