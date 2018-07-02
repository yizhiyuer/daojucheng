<?php
header("Content-type:text/html;charset=utf-8");
if(file_exists("./test")){
    unlink("./test");//删除文件
}

//$filename = "readonly.txt";
//copy("./dirssss/".$filename , "./dirssss/newdir/888.jpg");

//var_dump(iconv_get_encoding()) ; //获取文件编码值
//如何对文件进行重命名？
//1.选择文件 路径；
$sfilename = "./dirssss/exec.bat";
//2.copy()
//$dest =iconv("ISO-8859-1","UTF-8","执行");
copy($sfilename,"./dirssss/today.bat");
//3.unlink()  删除原文件
unlink($sfilename);
//作业：
//1.对 文件 进行 剪切；
//2.将 重命名 与 剪切 形成功能函数，并调用测试

