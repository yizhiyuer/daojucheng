<?php
$ctrl= isset($_GET["act"])?$_GET["act"]:"index";
$ctrl_url = "./App/".APP."/Ctrls/".$ctrl."Ctrl.php";
$view= isset($_GET["view"])?$_GET["view"]:"index";
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

function display($ctrl_view=null){//将设定的视图文件引入，取代控制器中的include
    global $view_url;
    if($ctrl_view==null){
        return $view_url;//返回视图路径字符串
    }
    //返回视图路径字符串
    return "./App/".APP."/Views/$ctrl_view.php";
}

function jump($url,$msg,$sec=0){
    include "./Core/jump.php";
}

