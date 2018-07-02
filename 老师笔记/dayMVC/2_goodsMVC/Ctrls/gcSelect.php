<?php
require_once "../Models/DBModel.class.php";
$dbm = new DBModel();
$sql = "select cid,cname from goods_cate";
$cateList = $dbm->gets($sql);
if(!$cateList){
    die("分类查询错误！");
}
function getCnameByCid($cid){
    global $cateList;
    foreach ($cateList as $item){
        if($item["cid"] == $cid){
            return $item["cname"];
            break;
        }else{
            continue;
        }
    }
    return "无分类从属";
}