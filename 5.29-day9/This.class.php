<?php

class This
{
    public $objName;

    function __construct($objName)
    {
        $this->objName = $objName;
    }

    function this_return()
    {
        return $this;
        //返回$this 继续调用，可以证明 $this 是某个具体对象在类内部的代号
    }
}

$zhang3 = new This("张三");
//$obj = $zhang3->this_return();
echo "返回对象的名称：".$zhang3->this_return()->objName."\n";

$li4 = new This("李四");
//$li4->this_return();
echo "返回对象的个名称：".$li4->this_return()->objName."\n";
