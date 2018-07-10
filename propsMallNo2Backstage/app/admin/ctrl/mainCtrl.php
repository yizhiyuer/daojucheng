<?php
/**
 * Created by PhpStorm.
 * User: adger.lai
 * Date: 2018/7/6
 * Time: 10:33
 */

require_once "./app/admin/models/autoDetection.php";
session::get('user');



if ($view === "main") {

    $page = isset($_GET["page"]) ? $_GET["page"] : "home";
    $page_url = "../app/" . app . "/view/$page.php";
//    $page_ctrl = "./app/" . app . "/ctrl/" . $page . "Ctrl.php";//
//    include $page_ctrl;//引入相应页面控制器


    //todo:操作相关代码；
    include $view_url;
    echo "<script>console.log('Main')</script>";
}


