<meta charset="utf-8">
<?php
$info = "toDay iS fiRDay";
$info_trans = "\n今天是周五\n"; //在 \n前面加上<br/>
$info_trans = nl2br($info_trans);
echo $info.$info_trans;
echo "&lt;";
$html = "<h2 style='color:#f00'>将&nbsp;特殊&nbsp;符号&nbsp;转义</h2>";
$html_en = htmlspecialchars($html);//html2entity
echo $html_en;
echo "解码后：".htmlspecialchars_decode($html_en);//entity2html
echo "<br>";
$html_en = htmlentities($html);
echo $html_en;
echo "解码后：".html_entity_decode($html_en); //encode 编码 ， decode 解码
