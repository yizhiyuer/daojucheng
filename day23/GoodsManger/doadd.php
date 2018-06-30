<?php
//var_dump($_POST);
require_once "./DBModel.class.php";

$sql = "insert into goods(sname,price,storenum,detail) 
        values('".$_POST['sname']."','".$_POST['price']."',
        '".$_POST['storenum']."','".$_POST['detail']."')";

$dbm = new DBModel();

$res = $dbm->mkexe($sql);

if($res){
    echo "suc";
}else{
    echo "faild";
}



