<?php
function request($callback)
{
    $response = "请求的结果";
    $response = file_get_contents("http://qq.com");
//    $callback($response); // 直接调用
//    call_user_func($callback,$response); //调用函数，传参；
    call_user_func_array($callback, [$response]);//调用函数，以数组形式传参；
}

request( //request的调用
    function ($res) {  //把函数当作实际参数
        var_dump(__LINE__, $res);
        echo "得到内容的字符串长度为：" . strlen($res);
    }
);
//call_user_func_array("request");
