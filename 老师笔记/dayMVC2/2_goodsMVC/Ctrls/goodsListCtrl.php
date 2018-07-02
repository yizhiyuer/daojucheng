<?php
require_once "../Models/DBModel.class.php";
$dbm = new DBModel();
$sql = "select * from goods order by id desc";
$glist = $dbm->gets($sql);
if(!$glist){
    die("查询失败！");
}
require_once "gcSelect.php";
//引入视图层文件；
include "../Views/goodsList.php";
