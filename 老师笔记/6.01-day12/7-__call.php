<?php
class UseCall{
    function __call($name, $arguments)
    {
        echo "调用错误，没有该成员方法:$name";
    }
}
$ucall = new UseCall();
$ucall->table();
echo "\n继续执行代码";