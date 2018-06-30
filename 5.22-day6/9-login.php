<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>9-login.php</title>
</head>
<body>
<form action="" method="post">
    <p><input type="text" name="uname" ></p>
    <p><input type="text" name="passwd" ></p>
    <button>提交</button>
</form>
</body>
</html>
<?php
if(!isset($_POST["uname"]) || !isset($_POST["passwd"])){
    exit();
}
if($_POST["uname"] == "abcdef" && $_POST["passwd"]=="123456" ){
    echo "<h3>登录成功</h3>";
}else{
    echo "<h3>登录失败</h3>";
}


?>