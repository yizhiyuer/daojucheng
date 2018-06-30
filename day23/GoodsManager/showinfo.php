<?php
require_once "./DBModel.class.php";
//var_dump($_GET);
$pk=$_GET['id'];//接收请求参数
$sql = "select * from goods where id = $pk";
$dbm = new DBModel();
$goods = $dbm->getOne($sql);
if(!$goods){
    die("没有该记录！");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>编辑</title>
</head>
<body>
<form action="doupd.php?pk=id" method="post">
    <p>商品编号：
        <input type="text" name="id" id="" readonly value="<?php echo $goods['id'] ?>">
    </p>
    <p>商品名称：
        <input type="text" name="sname" id="" value="<?php echo $goods['sname'] ?>">
    </p>
    <p>商品价格：
        <input type="text" name="price" id="" value="<?php echo $goods['price'] ?>"></p>
    <p>商品数量：
        <input type="text" name="storenum" id="" value="<?php echo $goods['storenum'] ?>"></p>
    <p>商品详情：
        <textarea name="detail" id="" cols="30" rows="10"
        ><?php echo $goods['detail'] ?></textarea>
    </p>
    <p>
        <button>确认保存</button>
    </p>
</form>
</body>
</html>
