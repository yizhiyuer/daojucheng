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
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="phpto">
    <br>
    <br>
    <button>确认上传</button>
</form>
</body>
</html>
<?php
var_dump($_FILES);//$_FILES 二维数组
if (isset($_FILES["phpto"]["tmp_name"])){
    // move_uploaded_file 讲=将临时存放的文件，传输到指定位置
    $dest = "./".time().".png";
    $suc = move_uploaded_file($_FILES["phpto"]["tmp_name"],$dest);
    if ($suc){
        echo $dest;
    }else{
        echo "错误";
    }
}
?>