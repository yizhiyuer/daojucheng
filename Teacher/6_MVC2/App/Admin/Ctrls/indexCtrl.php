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

