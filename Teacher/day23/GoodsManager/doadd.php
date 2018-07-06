<?php
require_once "./DBModel.class.php";
$dbm = new DBModel();
$sql = $dbm->addStr("goods",$_POST);//addStr产生可用的insert 语句
$res = $dbm->mkexe($sql);
if($res){
    echo "suc";
    header("Location:./main.php");
}else{
    echo "faild";
    header("Location:./add.php");
}

