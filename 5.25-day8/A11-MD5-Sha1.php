<?php
$passwd = "123456111111111111111111111111111111111";
echo "加密后的字符串：". md5($passwd);
echo "\n加密后长度：".strlen(md5($passwd));

echo "\n16位加密后的字符串：". md5($passwd,true);
echo "\n16位加密后长度：".strlen(md5($passwd,true));

echo "\nsha1加密后的字符串：". sha1($passwd);
echo "\nsha1加密后长度：".strlen(sha1($passwd));

echo "\nsha1加密后的字符串(20位)：". sha1($passwd,true);
echo "\nsha1加密后长度(20位)：".strlen(sha1($passwd,true));

//数据库里的密码字段长度预留：32(md5)  / 40(sha1)