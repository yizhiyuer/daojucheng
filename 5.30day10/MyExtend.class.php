<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/30
 * Time: 14:31
 */

class Person
{
    public $name;
    public $age;
    function getInfo(){
        echo sprintf("姓名：%s,年龄:%d\n"
            ,$this->name,$this->age);
    }
}
class Student extends Person{
    public $school;
    public function __construct($name,$age,$school)
    {
        $this->school = $school;
        $this->age = $age;
        $this->name = $name;
    }
    function study(){
        echo sprintf("姓名：%s,年龄:%d，
        的学生在%s学校学习！\n",
            $this->name,$this->age,$this->school);
    }
}

$stud_1 = new Student("vic",30,
    "第一中学");
$stud_1->getInfo();
$stud_1->study();
