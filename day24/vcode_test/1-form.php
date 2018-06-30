<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>验证码测试</title>
</head>
<body>
<form action="./2-verify.php" method="post">
    <p>验证码：
        <input type="text" name="vcode">
        <img src="./captcha.php" style="height: 100px">
    </p>
    <p>点击图片，更换验证码图片</p>
    <p>
        <button>提交验证</button>
    </p>
</form>
</body>
</html>