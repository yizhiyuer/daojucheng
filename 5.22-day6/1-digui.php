<?php
$arr=array('January','February','March','April','May',
    'June','July','August','September','October','November','December');
//递归遍历数组；
function checkArr($arr){
    static $i=0;
    //主要业务-start
    echo $arr[$i]."\t";
    $i++;
    //主要业务-end
    if($i>=count($arr)){ //1.结束条件
        return ;
    }
    checkArr($arr); //2.调用函数本身
}
checkArr($arr); //启动递归
