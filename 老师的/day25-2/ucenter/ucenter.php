<?php
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION["uid"]) || !isset($_SESSION["uname"])){
    header("Location:../login/login.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>修改密码</title>
</head>
<body>

<form action="./doupw.php" method="post">
    <p>
        用户ID：
        <input type="text" name="id" value="<?php echo $_SESSION["uid"] ?>" disabled>
    </p>
    <p>
        用户名：
        <input type="text" name="uname" value="<?php echo $_SESSION["uname"] ?>" disabled>
    </p>
    <p>
        原密码：
        <input type="text" name="upw_old">
    </p>
    <p>
        新密码：
        <input type="text" name="upw_new">
    </p>
    <p>
        <button>保存</button>
    </p>

</form>

</body>
</html>
