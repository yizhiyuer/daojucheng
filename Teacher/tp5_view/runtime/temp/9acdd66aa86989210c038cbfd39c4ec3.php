<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"E:\web04php\PHPTutorial\WWW\tp5_view/application/index\view\index\index.html";i:1532055800;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <link rel="stylesheet" href="/tp5_view/public/static/home/css/style.css">
</head>
<body>
<h1 style="color:red">首页</h1>
<h2>输出替换：/public/static/home/ , /public/static/admin/ ,/public/static/common/js/jquery.js</h2>
<h2 class="bdblack"><?php echo $key; ?></h2>
<h2>九宫格循环案例</h2>
    <div class="homebox">
        <div class="leftbox" >
            <a href="<?php echo $pcads['adslink']; ?>" target="_blank">
                <img src="<?php echo $pcads['adspic']; ?>" style="width: 100%" alt="">
            </a>
        </div>
        <div class="rightbox" >
            <?php if(is_array($plist) || $plist instanceof \think\Collection || $plist instanceof \think\Paginator): $k = 0; $__LIST__ = $plist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pvo): $mod = ($k % 2 );++$k;if(($k%4) != 0): ?>
                    <div class="grid mb" >
                        <div class="innerbox">
                            <img src="<?php echo $pvo['pic']; ?>"
                                 style="width: 75%" alt="">
                            <p class="fs16"><?php echo $pvo['gname']; ?></p>
                            <p class="fs12 fcaaa"><?php echo test($pvo['intro'] ); ?></p>
                            <p class="fs16 fcred"><?php echo $pvo['price_new']; ?>元
                                <del class="fs12 fcaaa"><?php echo $pvo['price_old']; ?>元</del></p>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="grid mb mr0" >
                        <div class="innerbox">
                            <img src="<?php echo $pvo['pic']; ?>"
                                 style="width: 75%" alt="">
                            <p class="fs16"><?php echo $pvo['gname']; ?></p>
                            <p class="fs12 fcaaa"><?php echo test2($pvo['intro'] ); ?></p>
                            <p class="fs16 fcred"><?php echo $pvo['price_new']; ?>元
                                <del class="fs12 fcaaa"><?php echo $pvo['price_old']; ?>元</del></p>
                        </div>
                    </div>
                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            <!--<div class="grid mb mr0" ></div>-->
        </div>
    </div>
<script src="/tp5_view/public/static/common/js/jquery.js"></script>
<script>
    console.log($);
</script>
</body>
</html>