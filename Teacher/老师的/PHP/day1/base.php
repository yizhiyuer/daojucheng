<?php
//变量： $  类似 var
$_var1 = "999\n";
$_var2 = 9999;
echo $_var1;
echo $_var2;
echo "\t";
echo 99+1-200*4;
echo "\n";
echo "你好".$_var1;
echo "你好$_var2";
echo "\n";
echo '你好$_var2';
if(3>2){
    echo "\n";
    echo '3>2';
}else{
    echo "\n";
    echo '2>3';
}
echo "\n";
echo (5>6)?"5>6":"5<6";
echo "\n";
$varArr = [0,"sdfsdf" ,true ,false ,null ,
    [0,"sdfsdf" ,true ,false ,null ],
    ["name"=>"webxxx","age"=>23]];

//js : { key:value}  Obj.func();
//php: [ key=>value ]   Obj->func();

var_dump($varArr);//打印复杂数据：数组=>索引数组，关联数组（键值对）

for($i=0;$i<2;$i++){
    echo "{$i}次\n";
}

$j=0;
while($j<2){
    echo "-{$j}次\n";
    $j++;
}
?>