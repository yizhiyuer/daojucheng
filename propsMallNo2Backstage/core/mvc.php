<?php
/**
 * Created by PhpStorm.
 * User: adger.lai
 * Date: 2018/7/6
 * Time: 10:29
 */
session_start();
$ctrl = isset($_SESSION["act"]) ? $_SESSION["act"] : $_SESSION["act"] = "login";
//$ctrl= isset($_GET["act"])?$_GET["act"]:"login";
$ctrl_url = "./app/" . app . "/ctrl/" . $ctrl . "Ctrl.php";

$view = isset($_SESSION["view"]) ? $_SESSION["view"] : $_SESSION["view"] = "login";
//$view= isset($_GET["view"])?$_GET["view"]:"login";
$view_url = "./app/" . app . "/view/$view.php";

$page = isset($_SESSION["page"]) ? $_SESSION["page"] : $_SESSION["page"] = "home";
//$page= isset($_GET["page"])?$_GET["page"]:"home";
$page_url = "./app/" . app . "/view/$page.php";




