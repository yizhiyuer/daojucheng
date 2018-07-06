<?php
$dbm = new DBModel();
if($view==="index"){
    //todo:操作相关代码；
    $sql = "select * from goods order by id desc";
    $glist = $dbm->gets($sql);
    if(!$glist){
        die("查询失败！");
    }
    $gcm = new GoodsCateModel();
    include display();
//    display();//产生视图路径
    //display()默认不写参数，则去找Views/index/main.php
    //display("goods/index")写参数，则去找Views/goods/main.php
}

if($view==="addform"){
    $gcm = new GoodsCateModel();
    $cateList = $gcm->cateList;
    include display("index/add");
}

if($view==="doadd"){
//    var_dump($_POST);
    //todo:接收添加表单提交的参数，并执型插入操作
    $sql = $dbm->addStr("goods",$_POST);//addStr产生可用的insert 语句
    $res = $dbm->mkexe($sql);
    if($res){
//        echo "suc";
        jump("./admin.php?act=index&view=index","添加成功",3);
//        header("Location:./goodsCtrl.php?actview=index");
    }else{
//        echo "faild";
        jump("-1","添加失败",3);//失败返回
//        header("Location:./goodsCtrl.php?actview=addform");
    }
}

if($view==="dodel"){
    //todo:删除操作
    $pk = $_GET["id"];//获取操作参数
    $sql = "delete from goods where id=$pk";
    $res = $dbm->mkexe($sql);
    if(!$res){
        jump("-1","删除失败！",3);
        die ;
    }
    jump("./admin.php?act=index&view=index","删除成功！",3);
}

if($view==="showupd"){
    $pk=$_GET['id'];//接收请求参数
    $sql = "select * from goods where id = $pk";
    $goods = $dbm->getOne($sql);
    if(!$goods){
        die("没有该记录！");
    }
    $gcm = new GoodsCateModel();
    $cateList = $gcm->cateList;
//引入分类信息查询
    include display("index/showinfo");
}

if($view==="doupd"){
    $pkname =$_GET["pk"];//1.取出pk主键的名称
    $sql=$dbm->updStr("goods",$_POST,$pkname); //2.产生按条件更新sql
    $res = $dbm->mkexe($sql);//3.执行更新
    if(!$res){
//        die("修改失败");
        jump("-1","修改失败",3);
        die ;
    }
//    header("Location:./goodsCtrl.php");
    jump("./admin.php?act=index&view=index","修改成功",3);
}


