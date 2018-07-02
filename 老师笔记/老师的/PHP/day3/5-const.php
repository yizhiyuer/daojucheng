<?php
$issuc =  define("MYCONST","常量的值",true);
//define有boolean 类型的返回值
echo $issuc;
echo "\n";
echo MYCONST;
echo "\n";
echo myconst; //define定义时，第三个参数为true的时候，常量名称大小写不敏感
define("PI",3.141592657);
echo "\n";
echo PI;
echo "\n";
echo "半径为10的圆形面积：".(PI*10*10);

true;
TRue;
Null;
nULL;
null;
echo "\n";
echo "当前系统：".PHP_OS;
echo "\n";
echo "当前PHP 版本号：".PHP_VERSION;
echo "\n";
echo DIRECTORY_SEPARATOR;

echo "\n文件路径：". __FILE__ ;