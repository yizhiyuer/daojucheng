
<?php
function myfunc(){
    echo "Hello";
    return;
    echo "上方执行了return,此处代码无效";
}
function callfunc($funcname){
    $isfunc = function_exists($funcname);//function_exists(参数)；//
    if ($isfunc){
        $funcname();//myfunc()//此处函数名称能否写成变量$funcname
    }else{
        echo "函数不存在";
    }
}
callfunc("myfunc_3");