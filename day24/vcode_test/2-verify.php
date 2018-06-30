<meta charset="UTF-8">
<?php
session_start();
//var_dump($_POST);
//var_dump($_SESSION);

if(strtolower($_POST["vcode"]) == $_SESSION["vcode"]){
    echo "输入的验证码通过，可以执行登录操作！";
}else{
    echo "输入的验证码不通过！";
}
