<?php
$env = "wamp";
echo "长度:".strlen($env);
$env = str_pad($env,10);
echo "\n填充后的长度：".strlen($env);
//$env = str_pad（$env,3）;//无效
//echo "\n填充后的长度：".strlen($env);
$env = "wamp";
$env = str_pad($env,10,"-",
    STR_PAD_BOTH);
//第四个参数可以是：STR_PAD_BOTH
//STR_PAD_LEFT ， STR_PAD_RIGHT
echo "\n";
echo $env;


