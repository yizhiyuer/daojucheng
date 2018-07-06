<?php
session_start();
if(!isset($_SESSION["uid"]) || !isset($_SESSION["uname"])){
    header("Location:./usersCtrl.php");
    //未登录，不允许访问，跳转到登录界面；
}