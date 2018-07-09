<?php
/**
 * Created by PhpStorm.
 * User: adger.lai
 * Date: 2018/7/6
 * Time: 10:33
 */
require_once "./app/admin/models/autoDetection.php";

$name = 'wln';
$password = '956555';
//session::set($name, $password);
echo session::get('wln'); // 未过期，输出


if($view=="main"){
    //todo:操作相关代码；
    include $view_url;
}

