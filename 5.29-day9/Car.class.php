<?php

class Car
{
    var $brand;
    var $color;
    var $cardNo;
    var $length;
    var $power;

    function __construct($brand, $color, $cardNo,
                         $length, $power)
    {//构造函数
        $this->brand=$brand;
        $this->color=$color;
        $this->cardNo=$cardNo;
        $this->length=$length;
        $this->power=$power;
    }

    function describe()
    {
        $info = "车辆品牌：%s,车身长度：%s,
       车牌号:%s,车身长度：%f米，运载能力：%f吨\n";
        echo sprintf($info, $this->brand, $this->color,
            $this->cardNo, $this->length, $this->power);
    }
}

//实例化对象 new
$car_1 = new Car("奔驰","黑色",
    "京000000",5,5);
$car_1->describe();
$car_2 = new Car("法拉利","红色",
    "京000000",3,3);
$car_2->describe();