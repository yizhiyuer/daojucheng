<meta charset="UTF-8">
<!--文件编码-->
<?php
var_dump( $_POST );//收集表单数据：$_POST数组  、 $_GET数组
var_dump( $_GET );
echo "字符串长度：".strlen($_POST["uname"]);
if( $_POST["uname"]=="web04"
    &&  $_POST["passwd"] == "123456"){
    echo "<script>alert('登录成功')</script>";
}else{
    echo "<script>alert('登录失败')</script>";
}