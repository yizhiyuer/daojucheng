<?php
/**
 * Created by PhpStorm.
 * User: adger.lai
 * Date: 2018/7/6
 * Time: 10:29
 */

session_start();
$ctrl = isset($_SESSION["act"]) ? $_SESSION["act"] : $_SESSION["act"] = "login";
$ctrl_url = "./app/" . app . "/ctrl/" . $ctrl . "Ctrl.php";

$view = isset($_SESSION["view"]) ? $_SESSION["view"] : $_SESSION["view"] = "login";
$view_url = "./app/" . app . "/view/$view.php";






