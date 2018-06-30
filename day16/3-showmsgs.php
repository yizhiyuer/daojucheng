<?php
$filename = "./msgbox-file/msbox-file.txt";
//$res = file_get_contents($filename);//字符串
$resArr = file($filename);//按行读取到数组中的每个元素
echo "<pre>";
//var_dump($res);
//var_dump($resArr);
//echo "</pre>";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<ul>
    <!--开始--><?php foreach ($resArr as $value) {
        if (!strstr($value, "-@*@*@*@*@-")){ continue;//处理非法数据
    }
        $arr = explode("-@*@*@*@*@-",$value);//分隔字符
          //explode 分隔字符串，形成数组；
        ?>
       <li>
           姓名：<?php echo $arr[1] ?>
           联系方式：<?php echo $arr[2] ?>
           留言信息：<?php echo $arr[0] ?>
           留言时间：<?php echo $arr[3] ?>
       </li>
        <!--结束--><?php } ?>
</ul>
</body>
</html>
