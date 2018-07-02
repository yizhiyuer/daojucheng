<?php
$str = "中文字符串处理";

echo "中文字符串长度strlen()：".strlen($str); //一个汉字占3位字符
echo "\n中文字符串长度mb_strlen()：".mb_strlen($str,"UTF-8");

echo "\n中文字符串长度substr()：".substr($str,0,2);
echo "\n中文字符串长度mb_substr()：".mb_substr($str,0,2,"UTF-8");

//作业：根据中文手册测试：
// mb_split ，mb_stripos ，mb_stristr，mb_strstr，
//mb_strpos ，mb_strrpos，mb_strpos，mb_substr_count
//并提交测试案例；



