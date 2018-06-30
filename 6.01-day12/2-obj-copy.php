<?php
class UseCopy{
    public $value="12345";
}
$uc = new UseCopy();
$uc2 = $uc;
$uc2->value = 67890;
echo $uc->value."\t".$uc2->value;
//对象赋值，默认是引用赋值；
