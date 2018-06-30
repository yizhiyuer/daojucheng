<?php
function sum10(){
    for ($i=0;$i<+10;$i++){
      //$sum=0;//无法累加，因为每次都会还原为0；
        Static $sum=0;//
        $sum+=$i;
    }
    return $sum;
}
echo sum10();