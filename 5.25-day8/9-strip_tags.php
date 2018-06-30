<meta charset="UTF-8">
<?php
$html= "<h2>
        标题：...
    <div>
    摘要：....
</div>
<ul>
    <li>内容1</li><li><b>内容1</b></li>
</ul>
</h2>";
echo $html;
echo strip_tags($html,"<li><b>");
//第二个参数是，允许保留的标签