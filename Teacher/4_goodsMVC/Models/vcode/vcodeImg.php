<?php
session_start();
require './ValidateCode.class.php';  //先把类包含进来，实际路径根据实际情况进行修改。
$_vc = new ValidateCode();		//实例化一个对象
$_vc->doimg();	  //生成图片
$_SESSION['vcode_prod'] = $_vc->getCode();//验证码保存到SESSION中
?>