<?php
/**
函数课后作业：

定义一个数组类型的全局变量（如下$arr），分别用 传参数 和 全局引用 两种方式传入2个函数，
函数功能：
1.函数1：正序输出数组中所有元素(for循环实现)；
2.函数2：倒序输出数组中所有元素(while循环实现)；
提示:
$arr=array('January','February','March','April','May',
'June','July','August','September','October','November','December');

数组长度: count($arr)

 */
$arr = array('刘一', '陈二', '张三', '李四', '王五', '赵六', '孙七', '周八', '吴九', '郑十');

//for循环--正序输出
function arrFor($name){
    for ($i = 0; $i < count($name); $i++) {
        echo $name[$i];
    }
    echo '<br>';
}
arrFor($arr);

//while循环--倒序输出
function arrWhile() {
    $arrLength = count($GLOBALS['arr'])-1;
    while($arrLength >= 0) {
        echo $GLOBALS['arr'][$arrLength];
        $arrLength--;
    }

}
arrWhile();
?>