<?php
class Person{
    //属性；
    public $name;
    public $age;
    public $role;
    //行为；
    function __construct($name,$age,$role)
    { //构造函数由 new 关键字去触发；
        $this->name = $name;  //this.name
        $this->age = $age;
        $this->role = $role;
    }
    function working(){
        if($this->role =="老师"){
            echo $this->name."在上课\n";
        }else{
            echo $this->name."在学习\n";
        }
    }
}
//程序：实例化对象一定要写在类外部
$teach = new Person("张三丰","135","老师");
$teach->working();

$student = new Person("张无忌","25","学生");
$student->working();