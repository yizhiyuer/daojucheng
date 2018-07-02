<?php
$str1="11";
$str2="2";
echo "字符比较结果：".strcmp($str1,$str2);
echo "\n自然规则比较结果：".strnatcmp($str1,$str2);
//按自然顺序比较:strnatcmp($str1,$str2);