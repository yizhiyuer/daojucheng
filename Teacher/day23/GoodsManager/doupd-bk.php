<?php
require_once "./DBModel.class.php";
//var_dump($_POST);

$sql = "update goods set 
        sname='".$_POST["sname"]."',
        price='".$_POST["price"]."',
        storenum='".$_POST["storenum"]."',
        detail='".$_POST["detail"]."'
        where id = '".$_POST["id"]."'";
//die($sql);
$dbm  = new DBModel();
$res = $dbm->mkexe($sql);
if(!$res){
    die("修改失败");
}
header("Location:./main.php");

