<?php
/*
 *Class Person
 * 定义文件
 * 1.类文件名字 首字母大写; Person , Student , MyCity/myCity
 * 2.类文件名中间部分 .class.
 * 3.类的名称要与文件名称一致（__autoload）
 * */
class  Person{
var $name;
var $age;
var $gender;
var $weight;
var $height;
var $hoby;
var $carrer;//职业
//构造函数：初始化属性值;在对象实例化的时候调用（）

function introSelf(){
    return "$this->name,$this->age,$this->hoby,$this->carrer";
//js:return "$this.name,$this.age,$this.hoby,$this.carrer"
}
}

$cavin = new Person();
echo  $cavin->introSelf();
$cavin->name="jack";
echo $cavin->introSelf();