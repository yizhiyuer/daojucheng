<?php
require_once "../Models/DBModel.class.php";
$dbm = new DBModel();
//-----以上代码去执行公共语句：模型引入，对象实例化，公用模块等等----
$act_view = isset($_GET["actview"])?$_GET["actview"]:"login";
//访问控制器时，默认给出的视图；
if($act_view === "login"){
    //todo: 显示登录界面
    include "../Views/users/login.html";
}

if($act_view === "dologin"){
    //todo:接收页面传递数据，并处理；
    session_start();
//var_dump($_POST);
    if( strtolower($_POST["vcode"]) != $_SESSION["vcode_prod"] ){
        include "./login.php";//显示登录界面
        die("验证码错误，请返回确认");
    }
//练习：判断用户名是否存在，不存在，中断程序并给出提示；
    $sql = "select * from users 
where uname='".$_POST["uname"]."' 
and upasswd='".$_POST["upasswd"]."'";
    $resArr = $dbm->getOne($sql);
    if(!$resArr){
        include "../Views/users/login.html";//显示登录界面
        die("登录失败！");
    }
//登录成功
    $_SESSION["uid"] = $resArr["id"];
    $_SESSION["uname"] = $resArr["uname"];
//跳转
    header("Location:./goodsCtrl.php");
}
if($act_view === "reg"){
    //todo: 显示注册界面
    include "../Views/users/reg.html";
}
if($act_view === "doreg"){
    //todo: 处理注册数据
    session_start();
    if( strtolower($_POST["vcode"]) != $_SESSION["vcode_prod"] ){
        include "../Views/users/reg.html";
        die("验证码错误，请返回确认");
    }
    if(strlen($_POST["upasswd"])<6 || strlen($_POST["upasswd2"])<6){
        include "../Views/users/reg.html";
        die("密码不足6位");
    }
    if( $_POST["upasswd"] != $_POST["upasswd2"]){
        include "../Views/users/reg.html";
        die("两次密码不一致，请返回确认");
    }
//注册：往users中新增记录
    $sql = "insert into users(uname,upasswd) 
values('".$_POST["uname"]."','".$_POST["upasswd"]."')";
    $res = $dbm->mkexe($sql);
    if($res){
        header("Location:./usersCtrl.php");
    }else{
        include "../Views/users/reg.html";
        die("注册失败，请联系管理员!");
    }
}

