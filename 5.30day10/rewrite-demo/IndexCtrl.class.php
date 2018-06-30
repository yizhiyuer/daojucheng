<?php
require_once "./Controller.class.php";
//首页控制器：
class IndexCtrl extends Controller{
    private $name;
    //重写：子类中拥有与父类中同名方法时，
    //父类的方法不发生作用
    //注意：__construct() 也会 重写
    public function __construct($name)
    {
        parent::__construct();//重载：重新调用父级的方法；
        $this->name = $name;
    }
    function index(){
        echo "<h1>首页控制器访问！---{$this->name}</h1>";
    }
}