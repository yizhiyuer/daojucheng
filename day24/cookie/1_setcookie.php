<meta charset="UTF-8">
<?php
//$issuc = setcookie("myname","通过cookie存放名字",time()+(5));
$issuc = setcookie("myname",
    "通过cookie存放名字".rand(1000,9999),time()+90);
//键值对，保留时间；
echo  $issuc?"suc":"faild";