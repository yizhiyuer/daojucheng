<?php
require_once "./DBModel.class.php";
$dbm = new DBModel();
$sql ="select * from students limit 1";
//$resArr = $dbm->gets($sql);
//var_dump($resArr);
$resArr = $dbm->getOne($sql);
if($resArr){
//    echo "执行成功";
    var_dump($resArr);
}else{
    echo "执行失败";
}


//练习：利用fetch() 封装一个getone方法，观察返回数组的维度