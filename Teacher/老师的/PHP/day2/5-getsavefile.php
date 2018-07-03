<?php
$htmlstr = file_get_contents("http://qq.com");
echo $htmlstr;
file_put_contents("qq.html",$htmlstr);
?>
