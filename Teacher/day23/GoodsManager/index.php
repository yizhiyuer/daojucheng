<?php
require_once "./DBModel.class.php";
$dbm = new DBModel();
//$sql = "select * from goods order by id desc";
$sql ="select * from goods order by id desc";
$glist = $dbm->gets($sql);
if(!$glist){
    die("查询失败！");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>商品管理</title>
</head>
<body>
<a href="./add.php">添加</a>
<table border="1">
    <thead>
    <th>商品编号</th>
    <th>商品名称</th>
    <th>商品价格</th>
    <th>商品数量</th>
    <th>商品分类</th>
    <th>商品详情</th>
    <th>操作</th>
    </thead>
    <tbody>
    <?php foreach ($glist as $val){ ?>
        <tr>
            <td><?php echo $val["id"] ?></td>
            <td><?php echo $val["sname"] ?></td>
            <td><?php echo $val["price"] ?></td>
            <td><?php echo $val["storenum"] ?></td>
            <td><?php echo $val["cid"] ?></td>
            <td><?php echo $val["detail"] ?></td>
            <td>
                <a href="./showinfo.php?id=<?php echo $val["id"] ?>">编辑</a> |
                <a href="./dodel.php?id=<?php echo $val["id"] ?>">删除</a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>
