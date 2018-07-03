<?php
/*定义一个 车辆信息类：
1.具有属性：品牌，颜色，车牌号，车身长度，运载能力（例如：2吨）；
2.具有方法：打印描述车辆信息；
3.实例化对象并传入 对象信息；
4.对象去调用 打印描述 的行为
 */

class Car
{

    var $brand;
    var $color;
    var $cardNo;
    var $length;
    var $power;

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param mixed $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getCardNo()
    {
        return $this->cardNo;
    }

    /**
     * @param mixed $cardNo
     */
    public function setCardNo($cardNo)
    {
        $this->cardNo = $cardNo;
    }

    /**
     * @return mixed
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param mixed $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     * @return mixed
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * @param mixed $power
     */
    public function setPower($power)
    {
        $this->power = $power;
    }
    //可以为每个成员属性生成一组set 和 get 方法

    function describe(){
        $info = "车辆品牌：%s,车身颜色：%s,
        车牌号：%s,车身长度：%f米,运载能力:%f吨\n";
        echo sprintf($info,$this->getBrand(),$this->getColor(),
            $this->getCardNo(),$this->getLength(),$this->getPower());
    }
}
//实例化对象 new
$car_1 = new Car();
$car_1->setBrand("法拉第");
$car_1->setColor("灰色");
$car_1->setCardNo("贵0008");
$car_1->setLength(4.5);
$car_1->setPower(4.5);
$car_1->describe();
$car_2 = new Car();
//补充对象属性设置
$car_2->describe();
