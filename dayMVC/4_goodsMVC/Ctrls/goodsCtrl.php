<?php
require_once "../Models/AuthModel.php";// 访问权限控制：
require_once "../Models/DBModel.class.php";
require_once "./commonCtrl.php";//与视图相关的公共处理函数
$dbm = new DBModel();
//-----以上代码去执行公共语句：模型引入，对象实例化，公用模块等等----
$act_view = isset($_GET["actview"])?$_GET["actview"]:"index";
//路由分发
if($act_view==="index"){
    //todo:首页显示
    $sql = "select * from goods order by id desc";
    $glist = $dbm->gets($sql);
    if(!$glist){
        die("查询失败！");
    }
    require_once "./gcSelect.php";
//引入视图层文件；
    include "../Views/goods/goodsList.php";
}

if($act_view==="addform"){
    //todo:显示添加表单
    require_once "./gcSelect.php";
    include "../Views/goods/goodsAdd.php";
}

if($act_view==="doadd"){
    //todo:接收添加表单提交的参数，并执型插入操作
    $sql = $dbm->addStr("goods",$_POST);//addStr产生可用的insert 语句
    $res = $dbm->mkexe($sql);
    if($res){
//        echo "suc";
//        header("Location:./goodsCtrl.php?actview=index");
        jump("./goodsCtrl.php?actview=index","添加成功",3);
    }else{
//        echo "faild";
        jump("./goodsCtrl.php?actview=addform","添加失败",3);
//        header("Location:./goodsCtrl.php?actview=addform");
    }
}

if($act_view==="dodel"){
    //todo:删除操作
    $pk = $_GET["id"];//获取操作参数
    $sql = "delete from goods where id=$pk";
    $res = $dbm->mkexe($sql);
    if(!$res){
        jump("./goodsCtrl.php","删除失败！",3);
//        die("删除失败");
        die ;
    }
    jump("./goodsCtrl.php","删除成功！",3);
//    header("Location:./goodsCtrl.php");
}

//showupd
if($act_view==="showupd"){
    $pk=$_GET['id'];//接收请求参数
    $sql = "select * from goods where id = $pk";
    $goods = $dbm->getOne($sql);
    if(!$goods){
        die("没有该记录！");
    }
    require_once "./gcSelect.php";
//引入分类信息查询
    include "../Views/goods/goodsUpd.php";
}

if($act_view==="doupd"){
    $pkname =$_GET["pk"];//1.取出pk主键的名称
    $sql=$dbm->updStr("goods",$_POST,$pkname); //2.产生按条件更新sql
    $res = $dbm->mkexe($sql);//3.执行更新
    if(!$res){
//        die("修改失败");
        jump("./goodsCtrl.php?actview=showupd&id=".$_POST[$pkname],"修改失败",3);
        die ;
    }
//    header("Location:./goodsCtrl.php");
    jump("./goodsCtrl.php","修改成功",3);
}

/**
 * 练习：
 * 1.将登录注册写入到MVC结构中；
 * 2.为添加、修改、删除 动作 增加页面提示；
 */