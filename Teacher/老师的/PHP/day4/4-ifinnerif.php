<?php
$a=88;
echo "数学成绩:  $a \n";
if($a>=60){
    if($a>=70){
        if($a>=90){
            echo "不错喔!!这次数学成绩甲等!!";
        }else{
            echo "还可以...这次数学成绩乙等!!";
        }
    }else{
        echo "勉勉强强及格边缘...这次数学成绩丙等!!";
    }
}else{
    echo "有待下次努力...数学成绩不及格!!";
}