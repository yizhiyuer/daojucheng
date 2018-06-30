<meta charset="UTF-8">
<?php
echo "取出Cookie中保留的信息：".$_COOKIE["myname"];
//var_dump($_COOKIE);
echo "<br><a href='3_mktimeout.php' target='_blank'>cookie强制过期</a>";