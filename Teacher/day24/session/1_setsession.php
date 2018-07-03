<?php
session_start();//开启会话权限，启动新会话或者重用现有会话
$_SESSION["mySessInfo"] = "session保存的全局信息！".rand(1000,9999);
//session 是有时长，设置php.ini 去设置，默认的时长为 1440秒；