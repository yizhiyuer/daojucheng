<?php
function unknow_args_func(){
 var_dump( func_get_args());
}

//练习：实现任意多个数字的累加；
function plus_nums(){
    //可变参数个数的定义，不写形参
    $args = func_get_args();
    //func_get_args() php内设置函数：接收函数调用时传递的参数
    //for ($i=0;$i<count($args);$i++)
    for ($i=0;$i<func_num_args();$i++){//func_num_args()==count($args)
        static $sum=0;
        //$sum+= $args[$i];
        $sum+= func_get_arg($i);//func_get_arg($i) === $args[$i]
    }
    echo $sum;
}
plus_nums(1,2,3,4,5);