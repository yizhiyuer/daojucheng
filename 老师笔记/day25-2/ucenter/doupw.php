<?php
session_start();
if(!isset($_SESSION["uid"]) || !isset($_SESSION["uname"])){
    header("Location:../login/login.php");
}
if(strlen($_POST["upw_old"])<6 || strlen($_POST["upw_new"])<6){
    include "./ucenter.php";
    die("密码不足6位");
}
//判断新密码不能为空；
require_once "../Models/DBModel.class.php";
$dbm = new DBModel();
//1.根据旧密码及uid和uname去查询数据表匹配；
$sql="select * from users 
where id='".$_SESSION["uid"]."' and uname='".$_SESSION["uname"]."' 
and upasswd='".$_POST["upw_old"]."'";
$resArr = $dbm->getOne($sql);
if(!$resArr){
    include "./ucenter.php";
    die("原密码不正确！");
}
//2.配后才去更新密码；
$sql = "update users set upasswd='".$_POST["upw_new"]."' 
where id='".$_SESSION["uid"]."'";

$res = $dbm->mkexe($sql);
if(!res){
    include "./ucenter.php";
    die("修改失败！");
}
echo "修改成功,退出";
header("Location:../login/loginout.php");

