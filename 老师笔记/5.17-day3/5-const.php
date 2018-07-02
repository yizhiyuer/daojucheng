
<?php
$issuc = define("MYCONST","常量的值");
//define有boolean 类型的返回值
echo $issuc;
echo "\n";
echo MYCONST;
echo "\n";
echo myconst;//define定义时，第三个参数为true的时候，常量名称大小写敏感

define("PI",3.14592657);
echo "\n";
echo PI;
echo "\n";
echo "半径为10的面积：".(PI*10*10);


