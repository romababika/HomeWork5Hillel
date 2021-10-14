<?php

class FirstLevelOne extends SubsidiaryOne
{
    public $num1=5;

    public function __construct($numberSubsid1,$num1)
    {
        parent::__construct($numberSubsid1);
        $this->num1=$num1;
    }

    public function getSumma()
    {
        $sum=$num1+$numberSubsid1;
        return $sum;
    }

    public function getNum1(): int
    {
        return $this->num1;
    }


    public function setNum1(int $num1): void
    {
        $this->num1 = $num1;
    }


}