<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册</title>
</head>
<body>
<form action="doreg.php" method="post">
   <p>
       用户名：
       <input type="text" name="uname">
   </p>
    <p>
        密码：
        <input type="password" name="upasswd">
    </p>
    <p>
        确认密码：
        <input type="password" name="upasswd2">
    </p>
    <p>
        验证码：
        <input type="text" name="vcode">
        <img src="../vcode/vcodeImg.php" alt="">
    </p>
    <p>
        <button>注册</button>
    </p>
</form>
</body>
</html>