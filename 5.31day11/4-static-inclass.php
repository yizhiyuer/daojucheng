<?php
class UseStatic{
    static $count=0;
    function __construct()
    {
        self::$count=0;//初始化一次，后续的调用都跳过该语句；
    }
    function asc(){
     self::$count++;
     echo "\n静态属性自增后：".self::$count;
      $this->count_1++;
     echo "\n非静态属性自增后：".$this->count_1;

    }
}

new UseStatic();
new UseStatic();
new UseStatic();
new UseStatic();
new UseStatic();