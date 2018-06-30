<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>留言</title>
</head>
<body>
<form action="./2-savemsg.php" method="post">
    <p>留言内容：
    <br>
        <textarea  name="msg" id="" cols="30" rows="10"></textarea>
    </p>
    </p>
    <p>留言人姓名：
        <br>
        <input type="text" name="uname" id="">
    </p>
    </p>
    <p>联系方式（QQ/微信/手机号码/E-mail）：
        <br>
        <input type="text" name="ulias" id="">
    </p>
    <p><button>提交</button></p>
</form>
</body>
</html>
<?php
//练习：实现留言板；
//1.要求有html实现的界面；
//2.要求表单提交留言信息；
//3.要求提交的留言信息保存到一个文件中（换行 /r/n）
//4.要求用 table 表格实现 留言信息分行显示；
//5.最好使用 bootstrap 美化界面
?>