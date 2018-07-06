<?php
/**
 * Created by PhpStorm.
 * User: adger.lai
 * Date: 2018/7/6
 * Time: 10:29
 */
$ctrl= isset($_GET["act"])?$_GET["act"]:"main";
$ctrl_url = "./app/".app."/ctrl/".$ctrl."Ctrl.php";

$view= isset($_GET["view"])?$_GET["view"]:"main";
$view_url = "./app/".app."/view/$view.php";

$page= isset($_GET["page"])?$_GET["page"]:"home";
$page_url = "./app/".app."/view/$page.php";




