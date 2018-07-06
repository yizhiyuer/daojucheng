<?php
require_once "./DBModel.class.php";
//var_dump($_POST);
$dbm  = new DBModel();
$pkname =$_GET["pk"];//1.取出pk主键的名称
$sql=$dbm->updStr("goods",$_POST,$pkname); //2.产生按条件更新sql
$res = $dbm->mkexe($sql);//3.执行更新
if(!$res){
    die("修改失败");
}
header("Location:./main.php");

