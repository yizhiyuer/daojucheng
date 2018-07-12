<?php
/**
 * Created by PhpStorm.
 * User: adger
 * Date: 2018-07-12
 * Time: 0:58
 */
require_once "../models/autoDetection.php";//对应页面内引入控制器
require_once "../models/DBModel.class.php";//对应页面内引入控制器
$dbAct = new DBModel();


$act = isset($_GET['goods_act']) ? $_GET['goods_act'] : 'add';

/* *
 * 编辑
 * 获取数据库[指定]商品
 * */
if ($act === 'edit') {
    $goodsAct = '编辑商品';
    $goodsId = $_GET['goods_id'];
    $sql = "select * from goods WHERE id='$goodsId'";// 查询数据库语句
    $goodsInfo = $dbAct->gets($sql);//数据库执行语句 并返回结果
}

/* *
 * 添加
 * 插入相关信息
 * */
if ($act === 'add') {
    $goodsAct = '添加商品';
    $goodsInfo = array(array(
        "name" => "",
        "introduction" => "",
        "images" => "",
        "number" => "",
        "weight" => "",
        "price" => "",
        "details" => "",
        "sort" => "",
        "shelves" => ""
    ));
}


echo "<script>console.log('goodsEditAddCtrl')</script>";

