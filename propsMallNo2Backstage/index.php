<?php
/**
 * Created by PhpStorm.
 * User: adger.lai
 * Date: 2018/7/6
 * Time: 10:25
 */
define("app","admin");//定义一个应用常量
//访问控制器；
//var_dump($_GET);
require_once "./core/mvc.php";
include $ctrl_url;//引入控制器
echo "<script>console.log('被调用')</script>";