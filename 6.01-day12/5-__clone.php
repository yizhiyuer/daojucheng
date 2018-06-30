<?php
class UseClone{
    public $value="12345";
    public function __construct($value)
    {
        $this->value = $value;
    }
    function test(){
        echo "\n克隆的对象也可以调用函数\n";
    }
    function __clone()
    {
        echo "\n对象被克隆了，在类中设定的__clone()被触发\n";
        $this->value = $this->value."的副本"; //$this 代表克隆后的对象
    }
}  //克隆后的对象属性值的改变 并不会 影响 原来对象
$uc = new UseClone("111111");
echo $uc->value;
$uc_clo = clone $uc;
echo $uc_clo->value;       echo "\n";       echo $uc->value;