<?php
class UParent{
    private $money="\$五百万";
    protected $house="二小学区房";
    protected function showUMoeny(){
        return $this->money;
    }
    //受保护的权限，类内部（$this）及子类内部（$this）可以访问
}
class UChild extends UParent{
    public function getFromPar(){
        echo $this->house."\n";
        echo $this->showUMoeny()."\n";
    }
}
$uchild = new UChild();
$uchild->getFromPar();

