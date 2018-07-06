<?php
session_start();
//1.如果在登录成功时使用cookie保存信息，也需要让cookie过期
//setcookie("PHPSESSID","",time()-1);
unset($_SESSION);
session_destroy();//删除当前会话在服务端保留session文件中内容
header("Location:../main.php");