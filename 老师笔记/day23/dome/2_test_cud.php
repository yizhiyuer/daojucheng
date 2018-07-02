<?php
require_once "./DBModel.class.php";
$dbm = new DBModel();
//$sql = "insert into students values(null,'carry luo')";
//$sql = "update students set stuname='carry wang' where stuname ='carry luo'";//删除
$sql = "delete from students where students where stuid=6";
$res = $dbm->mkexe($sql);
if($res){
    echo "执行成功";
}else{
    echo "执行失败";
}
