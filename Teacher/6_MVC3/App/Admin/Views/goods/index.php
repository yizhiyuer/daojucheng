<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Assets/index.css">
    <!--  此处使用静态资源文件(css,js,图片)时，应该立足于控制器所在的文件路径上  -->
    <title>商品管理</title>
</head>
<body>
<a href="./goodsCtrl.php?actview=addform">添加</a>
<table border="1">
    <thead>
    <th>商品编号</th>
    <th>商品名称</th>
    <th>商品价格</th>
    <th>商品数量</th>
    <th>商品分类</th>
    <!--    <th>商品分类2</th>-->
    <th>商品详情</th>
    <th>操作</th>
    </thead>
    <tbody>
    <?php foreach ($glist as $val){ ?>
        <tr>
            <td><?php echo $val["id"] ?></td>
            <td><?php echo $val["sname"] ?></td>
            <td class="redfont"><?php echo $val["price"] ?></td>
            <td><?php echo $val["storenum"] ?></td>
            <!--            <td>--><?php //echo $val["cname"] ?><!--</td>-->
            <td><?php echo $gcm->getCnameByCid($val["cid"]) ?></td>
            <td><?php echo $val["detail"] ?></td>
            <td>
                <a href="./goodsCtrl.php?actview=showupd&id=<?php echo $val['id'] ?>">编辑</a> |
                <a href="./goodsCtrl.php?actview=dodel&id=<?php echo $val['id'] ?>">删除</a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>