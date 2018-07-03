<?php
$myvar = "变量内容";
$emvar; //空变量
echo  isset($myvar);//boolean   true=>1 ;  false=>null
echo "\n";
echo  isset($emvar);
echo "\n";
echo  empty($emvar);//空是真值
echo "\n";

unset($myvar); //销毁变量，释放内存
echo  isset($myvar);

//////////////////////////////

$年龄 = 28; //变量允许中文命名，但是建议不要这么做；
echo "\n";
echo $年龄;

$age;
$uname;
$ugender;

$nianling;//拼音容易误解

