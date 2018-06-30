<?php
class UseCopy{
    public $value="12345";
}
$uc = new UseCopy();
//$uc2 = $uc;
$uc2 = serialize($uc) ; //序列化 //JSON.stringify
$uc2 = unserialize($uc2);//反序列化//JSON.parse
$uc2->value = 67890;
echo $uc->value."\t".$uc2->value;
//对象赋值，默认是引用赋值；
//序列化和JSON.stringify 不能保存成员方法；
