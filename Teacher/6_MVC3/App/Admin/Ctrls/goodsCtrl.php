<?php
$dbm = new DBModel();
if($view=="index"){
    //todo:操作相关代码；
    //todo:首页显示
    $sql = "select * from goods order by id desc";
    $glist = $dbm->gets($sql);
    if(!$glist){
        die("查询失败！");
    }
    $gcm = new GoodsCateModel();
    ////////固定/////////
    include $view_url;//视图
    /////////固定///////
}