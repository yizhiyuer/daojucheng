<meta charset="UTF-8">
<?php
//echo "<pre>";
////var_dump(  $_SERVER  ); //服务器信息数组
//echo "</pre>";

echo "<h2>网络访问路径：".$_SERVER["PHP_SELF"]."</h2>";
echo "<h2>文件存放路径".$_SERVER["DOCUMENT_ROOT"]."</h2>";
echo "<h2>端口：".$_SERVER["SERVER_PORT"]."</h2>";

//var_dump($_ENV);