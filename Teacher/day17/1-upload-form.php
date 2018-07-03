<?php
//    var_dump($_GET);
    $imgurl = isset($_GET["img"])?$_GET["img"]:false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>1-upload-form.html</title>
</head>
<body>
<form action="2-fileup.php"
      method="post"
      enctype="multipart/form-data">
    <p>
        选择上传文件：
        <br>
        <input type="file" name="fupload">
    </p>
    <?php  if($imgurl){ ?>
    <p><img src="<?php echo $imgurl; ?>" width="100px" alt=""></p>
    <?php } ?>
    <p>
        <button>提交</button>
    </p>
</form>

</body>
</html>