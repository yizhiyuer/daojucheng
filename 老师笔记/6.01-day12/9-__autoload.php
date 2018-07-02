<?php
//require_once "./Class/One.class.php";
//include_once "./Class/Six.class.php";
function __autoload($classname){
    echo $classname."类文件不存在，需要引入\n";
    //实现自动加载；
//    echo "引入返回：".require_once("./Class/".$classname.".class.php");
    if(file_exists("./Class/".$classname.".class.php")){
        require_once("./Class/".$classname.".class.php");
    }elseif(file_exists("./SecClass/".$classname.".class.php")){
        require_once("./SecClass/".$classname.".class.php");
    }
}
$one  =  new One();
echo "\n".$one->value."\n";
$six  =  new Six();
echo "\n".$six->value."\n";
$two  =  new Two();
echo "\n".$two->value."\n";
$eight  =  new Eight();
echo "\n".$eight->value."\n";