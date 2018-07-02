<?php
echo 200*NULL; //NULL 参与数学运算的时候 => 0;
echo "\n";
echo 200*(TRUE  + 10);
echo "\n";
echo "200"+200; //与js不同，字符串自动转成数值运算； js:200200
echo "\n";
echo "2.2zxc"+9.9;//与js不同，字符串自动转成数值运算； js:2.29.9
//字符串 连接符  . (点号)
echo "\n";
echo "zxc2.2"*9.9; // zxc2.2 转化数字失败 ==》 0

