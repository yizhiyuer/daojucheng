<?php
define("APP","Home");//定义一个应用常量
//访问控制器；
//var_dump($_GET);
require_once "./Core/mvc.php";
include $ctrl_url;//引入控制器
//Ctrls/goodsCtrl.php?actview=showupd
//1.一个控制器控制多个视图；
//2.所有的操作功能都从index.php,唯一入口;
// main.php?act=index&view=index
//路由参数：act的作用是选择控制器，view的作用是选择视图
