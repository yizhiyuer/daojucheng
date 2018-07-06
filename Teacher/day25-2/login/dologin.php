<meta charset="UTF-8">
<?php

session_start();
//var_dum($_POST);
if(strtolower($_POST["vcode"]) != $_SESSION["vcode_prod"]){
 die("验证码错误，请返回确认");
}

$sql = "select * from users
 where uname='".$_POST["uname"]."'
 and upasswd='".$_POST["upasswd"]."'";

require_once "../Models/DBModel.class.php";
$dbm = new DBModel();
$resArr = $dbm->getOne($sql);
if(!$resArr){
    include "./login.php";//显示登录界面
    die("登录失败！");
}
//登录成功
$_SESSION["uid"] = $resArr["id"];
$_SESSION["uname"] = $resArr["uname"];
//跳转之前
header("Location:../main.php");


//练习:
//1.在登录成功后，将用户编号，用户名称存入session;
//2.在首页将登陆注册隐匿，并显示 用户编号，用户名称；




