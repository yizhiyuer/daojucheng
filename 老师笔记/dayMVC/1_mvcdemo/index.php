<?php
require_once "./RModel.php";
//引入模型层文件，并调用其中的函数
$crtl_var1  = '控制层数据'.myRand();
//控制层中不要写前端代码；
include "./view_index.php";
//通过include 引入视图文件；