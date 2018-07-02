<meta charset="UTF-8">
<?php
$var_g = "全局变量";
$var_g1 = "全局变量1";
$var_g2 = "全局变量2";
function func(){
    //1.全局变量在函数中的使用
    //global $var_g,$var_g1,$var_g2;
    //echo $var_g."\n";
    //echo $var_g1."\n";
   // echo $var_g2."\n";
    //2.通过超全局数组$GLOBALS取出全局变量
    echo $GLOBALS["var_g"]."\n";
    echo $GLOBALS["var_g1"]."\n";
    echo $GLOBALS["var_g2"]."\n";
    $var_part = "局部变量";
}





