<?php
require_once "./IndexCtrl.class.php";
//入口文件：
$index = new IndexCtrl("index");
$index->index();//调用控制器中的函数，显示html
