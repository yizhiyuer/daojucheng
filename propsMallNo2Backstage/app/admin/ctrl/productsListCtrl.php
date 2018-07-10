<?php
/**
 * Created by PhpStorm.
 * User: adger.lai
 * Date: 2018/7/10
 * Time: 14:08
 */


require_once "../models/autoDetection.php";//对应页面内引入控制器
require_once "../models/DBModel.class.php";//对应页面内引入控制器
//require_once "./app/admin/models/autoDetection.php";//main控制器内引入
//require_once "./app/admin/models/DBModel.class.php";//main控制器内引入
$dbAct = new DBModel();

/* *
 * 获取数据库所有商品
 * */
$sql = "select * from goods";// 查询数据库语句
$goodsList = $dbAct->gets($sql);//数据库执行语句 并返回结果
//echo "<pre>";
//print_r($goodsList);
//echo "</pre>";



/*商品修改*/

/*商品删除*/

/*商品上下架*/


//
//$page = isset($_GET["page"]) ? $_GET["page"] : "home";
//$page_url = "../app/" . app . "/view/$page.php";

echo "<script>console.log('productsListCtrl')</script>";
