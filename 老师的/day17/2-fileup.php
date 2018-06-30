<?php
header("Content-type:text/html;charset=utf-8");
//判断tmp_name 是否通过上传方式到达临时文件中的
if(!is_uploaded_file($_FILES["fupload"]["tmp_name"])){
    die("不是有效的上传文件");
}
$maindir = "./Upload";//上传文件存放主目录
if(!file_exists($maindir)){
    mkdir($maindir);
}
$dir = $maindir."/".date("Ymd"); //上传文件存放日期目录
if(!file_exists($dir)){
    mkdir($dir);
}
/*echo "<pre>";
var_dump($_FILES);//$_FILES:预定义数组，专门用于接收文件传递的信息；
echo "</pre>";*/
$filename = $_FILES["fupload"]["name"];
$info = pathinfo($filename); //分离出扩展名称
$ext = $info["extension"];//分离出扩展名称
//xxxx.JPG  xxxx.GIF  xxxx.PNG
$ext = strtolower($ext);//转小写，统一格式
$canpost = ["jpg","jpeg","png","gif","svg","bmp"];
if(!in_array($ext,$canpost)){ //判断是否为允许上传的文件
    exit("服务器不允许该类型文件上传");
}
//readfile($_FILES["fupload"]["tmp_name"]);
//$str = file_get_contents($_FILES["fupload"]["tmp_name"]);
//file_put_contents("./111.png",$str);
$desf= date("YmdHis")."_".rand(1000,9999).".$ext";//目标
$upres = move_uploaded_file($_FILES["fupload"]["tmp_name"],"$dir/$desf");
if($upres){
    header("Location:./1-upload-form.php?img=$dir/$desf");
}else{
    echo "上传错误码：".$_FILES["fupload"]["error"];
}
/*练习：
把上传的文件存放到指定目录Upload中，
没有目录则先创建
穿件当前日期的子目录*/
/*练习：将$_FILES["fupload"]["name"]文件名的后缀进行分隔
0.转化小写；
1.判断是否为图片文件，如果不是图片文件，则终止程序；
["jpg","jpeg","png","gif","svg","bmp","doc","docx","txt","mp4"]
2.将后缀名称 拼接到 $desf 结尾；*/

//练习：判断上传操作是否成功，
//成功则跳转回1-upload-form.html，
//错误则打印错误信息