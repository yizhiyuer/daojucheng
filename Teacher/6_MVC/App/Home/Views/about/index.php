<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>关于页面</title>
</head>
<body>
<h1>这是关于页面</h1>
<h2><?php echo $about_data ?></h2>
<?php foreach($arrList as $v){?>
<h5><?php echo $v ?></h5>
<?php }?>
</body>
</html>