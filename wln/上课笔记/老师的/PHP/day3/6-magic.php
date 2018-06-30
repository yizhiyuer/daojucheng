<?php
echo "行号：". __LINE__ ;
echo "\n行号：". __LINE__ ;
echo "\n行号：". __LINE__ ;
echo  "\n在PHP中，凡是系统给出带两个下划线( __ )的量或函数，都属于魔术系列";
echo "\n文件路径：". __FILE__ ;

function a(){
    echo "\n函数名称：".__FUNCTION__;
}
function b(){
    echo "\n函数名称：".__FUNCTION__;
}

a();b();

/*
 * 练习： 使用PHP 循环在控制台中输出 九九乘法表
 * */