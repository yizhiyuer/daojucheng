<?php
class Person{
    //属性
    public $name;
    public $age;
    public $role;
    //行为
    function __construct($name,$age,$role)
    {
        $this->name = $name; //this.name
        $this->$age = $age;
        $this->role = $role;
    }
    function woking(){
        if($this->role =="老师"){
            echo $this->name."在上课\n";
        }else{
            echo $this->name."在学习\n";
        }
    }
}

//程序：实例化对象一定要写在类外部
$teach = new Person("娜娜","135","老师");
$teach->woking();


$teach = new Person("娜娜","135","老师");
$teach->woking();
