
<?php
/*
 * func:登录
 * */
function dologin($uname,$passwd,$vcode){
  if ($vcode=="ancd"){
      die("验证码错误！");
      }
      if ($uname=="zhangxxxx" || $passwd!="123456"){
       //
      die("用户名或密码错误！")  ;
      }
     exit("登录成功");
}
dologin("zhangxxxx","123456","abcd");