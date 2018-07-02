<?php
$str = "Don't forget to move on"; //Do not
//strstr（strchar） 查找子串，并截取子串前面或者后面的内容返回；
$afterstr = strstr($str,"get");
echo "strstr返回get后方部分内容：".$afterstr;
$beforestr = strstr($str,"get",TRUE);
echo "\nstrstr返回get前方部分内容：".$beforestr;
$nostr = strstr($str,"gets"); //检测子串是否存在
echo "\nstrstr搜索子串不存在时：".$nostr;

$opos = strpos($str,"o");//strrpos:返回子串最后一次的位置：
echo "\n字符o首次出现的位置：".$opos;
//练习：判断 'D’ 是否存在于字符串$str中；
$res = strpos($str,"a");
if($res>=0 && $res!=false){
    echo "\n存在：".$res;
}else{
    echo "\n不存在:".$res;
}
//判断子串是否存在时，应该首先使用 strstr()

