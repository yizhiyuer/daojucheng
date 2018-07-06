<?php
require_once "./DBModel.class.php";
$dbm = new DBModel();
$pk = $_GET["id"];//获取操作参数
$sql = "delete from goods where id=$pk";
$res = $dbm->mkexe($sql);
if(!$res){
    die("删除失败");
}
header("Location:./main.php");

//练习：尝试实现编辑功能：
/*1.<a href="showinfo.php?id=<?php echo $val["id"] ?>">编辑</a>*/
/*2.showinfo.php 查询 $arr = getOne(...)，
并显示记录在表单元素中 value="<?php echo $arr["sname"] ?>"*/
/*3.提交编辑表单：doupd.php ,执行update*/