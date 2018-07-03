<?php
class GoodsCateModel
{
    private $cateList;
    function __construct()
    {
        $dbm = new DBModel();
        $sql = "select cid,cname from goods_cate";
        $this->cateList = $dbm->gets($sql);
        if(!$this->cateList){
            die("分类查询错误！");
        }
    }

    function getCnameByCid($cid){
        foreach ($this->cateList as $item){
            if($item["cid"] == $cid){
                return $item["cname"];
                break;
            }else{
                continue;
            }
        }
        return "无分类从属";
    }
}