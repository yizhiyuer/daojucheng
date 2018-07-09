<?php
/**
 * Created by PhpStorm.
 * User: adger.lai
 * Date: 2018/7/9
 * Time: 10:41
 */

session_start();
$errorMsg = $_SESSION[$_GET['error']];
