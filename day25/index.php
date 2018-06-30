<meta charset="UTF-8">
<?php
session_start();//开启会话
echo "<h1>首页</h1>";
if (!isset($_SESSION["uid"]) | !isset($_SESSION["uname"])){
    //取出登录后保存的会话信息，进行登录状态判断
?>
<a href="./login/reg.php">注册</a>
<a href="login/login.php">登录</a>
<?php }else{ ?>
   用户编号：<?php echo $_SESSION["uid"];?>
<a href="#"><?php echo $_SESSION["uid"];?></a>
<a href="./login.php/loginout.php">退出</a>
<?php } ?>
