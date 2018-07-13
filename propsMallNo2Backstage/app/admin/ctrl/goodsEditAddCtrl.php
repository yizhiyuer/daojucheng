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

/*
 * 上传图片
 * */
if ($act === "image_upload") {
//    echo "<script>console.log('图片上传');</script>";
    $mainDir = "../../../uploads";
    if (!file_exists($mainDir)) {
        mkdir($mainDir); //1.创建存放上传文件的主目录
    }
    date_default_timezone_set("Asia/Shanghai");//校正时区
    $dateDir = date("Y-m-d");//2.创建日期目录；
    if (!file_exists("./$mainDir/$dateDir")) {
        mkdir("./$mainDir/$dateDir");
    }
//3.用时间戳加随机数命名文件;
    $houzui = explode('.', $_FILES["files"]["name"]);
//var_dump($houzui);
    $houzui = $houzui[count($houzui) - 1];
//var_dump($houzui);
    $filename = time() . "_" . rand(10000, 99999) . ".$houzui";
//4.转移文件：将临时的文件转移到指定的文件夹中；
    $issuc = move_uploaded_file
    ($_FILES["files"]["tmp_name"], "./$mainDir/$dateDir/$filename");

//5.返回数据接口
    if ($issuc) {
        echo json_encode(["code" => 1, "msg" => "文件上传成功", "filepath" => "./$mainDir/$dateDir/$filename"]);
    } else {
        echo json_encode(["code" => 0, "msg" => "文件上传失败", "filepath" => "./$mainDir/$dateDir/$filename"]);
    }
}


//echo "<script>console.log('goodsEditAddCtrl')</script>";

