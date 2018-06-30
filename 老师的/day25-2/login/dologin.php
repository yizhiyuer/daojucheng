<meta charset="UTF-8">
<?php
session_start();
//var_dump($_POST);
if( strtolower($_POST["vcode"]) != $_SESSION["vcode_prod"] ){
    include "./login.php";//显示登录界面
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
header("Location:../index.php");
