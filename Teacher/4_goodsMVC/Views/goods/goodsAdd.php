<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Assets/index.css">
    <title>添加商品信息</title>
</head>
<body>
<form action="./goodsCtrl.php?actview=doadd" method="post">
    <p>商品名称：
        <input type="text" name="sname" id="">
    </p>
    <p class="redfont">商品分类：
        <select name="cid" id="">
            <?php foreach ($cateList as $opt){?>
                <option value="<?php echo $opt["cid"] ?>">
                    <?php echo $opt["cname"] ?>
                </option>
            <?php }?>
        </select>
    </p>
    <p>商品价格：
        <input type="text" name="price" id=""></p>
    <p>商品数量：
        <input type="text" name="storenum" id=""></p>
    <p>商品详情：
        <textarea name="detail" id="" cols="30" rows="10"></textarea>
    </p>
    <p>
        <button>确认保存</button>
    </p>
</form>
</body>
</html>