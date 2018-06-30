<?php
class Life{
    public $title ="2.对象的生命周期\n";
    function __construct()
    {
     echo "1.实例化对象，调用\n";
     //unset($this)
        //exit("强制终止程序，也会销毁对象")；//销毁

    }
    function __destruct()
    {
        // 析构函数：销毁对象，
        //或程序结束的时候，被自动调用
        echo "3.对象销毁的时候，调用\n";
    }
}
$life = new Life();
sleep(10);//让程序暂停10秒
echo $life->title;
unset($life);
echo $life->title;
sleep(10);
echo "程序终止";
