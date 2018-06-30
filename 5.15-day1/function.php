<meta charset="UTF-8">
<?php
function myfunc($a,$b){
    return $a+$b;
}

echo "结果：".myfunc(3,9);

$nick = function (){
    echo "\n";
    echo "匿名函数";
};
