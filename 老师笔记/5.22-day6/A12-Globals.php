<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A11-file-upload.php</title>
</head>
<body>
<form action="./A12-Globals.php?p1=11111&p2=2222&p3=1234656" method="post"
      enctype="multipart/form-data">
    <p><input type="text" name="uname"></p>
    <p><input type="text" name="passwd"></p>
    <input type="file" name="photo">
    <br>
    <br>
    <button>确认上传</button>
</form>
</body>
</html>
<pre>
<?php
var_dump("超全局数组：",$GLOBALS);
//var_dump( $_FILES ); //$_FILES 二维数组
if(isset($_FILES["photo"]["tmp_name"])){
    //move_uploaded_file 将临时存放的文件，传输到指定位置
    $dest = "./".time().".png";
    $suc = move_uploaded_file($_FILES["photo"]["tmp_name"],$dest);
    if($suc){
        echo $dest;
    }else{
        echo "错误";
    }
}
?>
</pre>

