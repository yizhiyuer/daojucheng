<?php

//把$_POST数组键值对分离，再分别组装 keys 和 values
$keys = array_keys($_POST);
$keys_str = join(",",$keys);
$values = array_values($_POST);
$values_str = join("','",$values);

//$sql = "insert into goods(sname,price,storenum,detail)
//        values('".$_POST['sname']."','".$_POST['price']."',
//        '".$_POST['storenum']."','".$_POST['detail']."')";
$sql="insert into goods($keys_str) values('$values_str')";

//练习：把上述insert的处理代码封装到DBModel
// 的一个addstr($table,$fields) 方法中,
//返回一个完整的 insert 语句；

//var_dump($_POST);
require_once "./DBModel.class.php";
//echo $sql;
$dbm = new DBModel();
$res = $dbm->mkexe($sql);
if($res){
    echo "suc";
}else{
    echo "faild";
}

