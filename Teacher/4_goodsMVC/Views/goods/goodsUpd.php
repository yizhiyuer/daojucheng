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
<form action="./goodsCtrl.php?actview=doupd&pk=id" method="post">
    <p>商品编号：
        <input type="text" name="id" id="" readonly value="<?php echo $goods['id'] ?>">
    </p>
    <p>商品名称：
        <input type="text" name="sname" id="" value="<?php echo $goods['sname'] ?>">
    </p>
    <p>商品分类：
        <select name="cid" id="cate">
            <?php foreach ($cateList as $opt){?>
                <option value="<?php echo $opt["cid"] ?>">
                    <?php echo $opt["cname"] ?>
                </option>
            <?php }?>
        </select>
        <script>
            cate = document.getElementById("cate");
            console.log(cate.children);
            for(i=0;i<cate.children.length;i++){
                if(cate.children[i].value ==
                    "<?php echo $goods['cid'] ?>"){
                    cate.children[i].selected = true;
                }else{
                    cate.children[i].selected = false;
                }
            }
        </script>
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