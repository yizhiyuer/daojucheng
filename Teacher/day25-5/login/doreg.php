<meta charset="UTF-8">
<?php
//var_dump($_POST);

session_start();
if(strtolower($_POST["vcode"])!=$_SESSION["vcode_prod"]){
    die("验证码错误，请返回确认");
}
if($_POST["upasswd"]!=$_POST["upasswd2"]){
    die("两次密码不一致，请返回确认");
}
//注册：往users中新增记录
require_once "../Models/DBModel.class.php";

$sql = "insert into users(uname,upasswd)
values('".$_POST["uname"]."','".$_POST["upasswd"]."')";
$dbm = new DBModel();
$res = $dbm->mkexe($sql);
if($res){
    header("Location:login.php");
}else{
   echo $sql;
    die("注册失败，请联系管理员");
}


