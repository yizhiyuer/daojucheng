<?php
class UseConst{
    const E=10;//12E == >12*10*10

    function calc($dnum,$znum){
        $i=0;
        while ($i<$znum){
            $dnum*=self::E;
        }
        return $dnum;
    }

}

echo "在类外部方位E常量：".UseConst::E;
$uc = new UseConst();
echo "\n12E2 结果是什么：".$uc->calc(12,2);