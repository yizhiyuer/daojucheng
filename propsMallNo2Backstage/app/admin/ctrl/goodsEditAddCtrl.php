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
    $imgSrcList = s($goodsId);
}

function s($goodsId)
{
    $goodsImgSrc = "../../../uploads/" . $goodsId;
    if (is_dir($goodsImgSrc) !== true) {
        return null;
    } else {
        $file = scandir($goodsImgSrc);
        $imgSrcList = array();
        foreach ($file as $key => $img) {
            if ($img != "." && $img != "..") {
                $imgSrcList[$key - 2]["id"] = $goodsId . "-" . ($key - 2);
                $imgSrcList[$key - 2]["name"] = $img;
                $imgSrcList[$key - 2]["src"] = $goodsImgSrc . "/" . $img;
            }
        }

    }
    return $imgSrcList;
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

/* *
 * 上传图片
 * */
if ($act === "image_upload") {
    $goods_id = $_GET['goods_id']; /*获取商品的ID*/

    /*1.创建存放上传文件的[主目录]*/
    $mainDir = "../../../uploads";
    if (!file_exists($mainDir)) {
        mkdir($mainDir);
    }

    /*2.创建[商品]目录；*/
    /*date_default_timezone_set("Asia/Shanghai");*/
    /*$dateDir = date("Y-m-d");*/
    if (!file_exists("./$mainDir/$goods_id")) {
        mkdir("./$mainDir/$goods_id");
    }

    /*3.用时间戳加随机数命名文件;*/
    $houzui = explode('.', $_FILES["files"]["name"]);
    $houzui = $houzui[count($houzui) - 1];

    $filename = $goods_id . "_" . rand(10000, 99999) . ".$houzui";
    /*4.转移文件：将临时的文件转移到指定的文件夹中；*/

    $issuc = move_uploaded_file($_FILES["files"]["tmp_name"], "./$mainDir/$goods_id/$filename");

    /*5.返回数据接口*/
    if ($issuc) {
        $imgSrcList = s($goods_id);
        echo json_encode(["code" => 1, "msg" => "文件上传成功", "filepath" => "./$mainDir/$goods_id/$filename", "goods_id" => "$goods_id", "file" => $imgSrcList]);
    } else {
        echo json_encode(["code" => 0, "msg" => "文件上传失败", "filepath" => "./$mainDir/$goods_id/$filename"]);
    }
}
/* *
 * 删除图片
 * */
if ($act === "image_delete") {
    $deleteData = $_POST['deleteData'];

    $goods_id = $deleteData['goodsId'];
    $deleteImgSrc = $deleteData['deleteImgSrc'];
    if (file_exists($deleteImgSrc)) {
        if (!unlink($deleteImgSrc)) {
            echo json_encode(["code" => 0, "msg" => "未知原因，删除失败"]);
        } else {
            $imgSrcList = s($goods_id);
            echo json_encode(["code" => 1, "msg" => "文件删除成功", "goods_id" => "$goods_id", "file" => $imgSrcList]);
        }
    } else {
        echo json_encode(["code" => 0, "msg" => "文件不存在"]);
    }
}

//echo "<script>console.log('goodsEditAddCtrl')</script>";

