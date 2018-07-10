<link rel="icon" href="./assets/images/icon-1.png"/>

<?php
/**
 * Created by PhpStorm.
 * User: adger.lai
 * Date: 2018/7/6
 * Time: 10:25
 */
define("app","admin");//定义一个应用常量
require_once "./core/mvc.php";//访问控制器；
include $ctrl_url;//引入控制器
//echo "<script>console.log('被调用')</script>";