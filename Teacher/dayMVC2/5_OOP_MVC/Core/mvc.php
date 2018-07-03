<?php
$ctrl= isset($_GET["act"])?$_GET["act"]:"index";
$ctrl_url = "./App/".APP."/Ctrls/".$ctrl."Ctrl.php";//（Ctrls/indexCtrl.php）
$view= isset($_GET["view"])?$_GET["view"]:"index";//(Views/index)
$view_url = "./App/".APP."/Views/$ctrl/$view.php";
// 处理模型类的引入
function __autoload($classname){
    $model_url="./App/".APP."/Models/$classname.class.php";
    if(file_exists($model_url)){
        require_once $model_url;
    }else{
        die($model_url."文件路径不存在");
    }
}

