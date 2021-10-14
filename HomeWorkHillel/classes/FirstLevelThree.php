<?php

class FirstLevelThree extends SubsidiaryThree
{
    public $num=15;


    public function getNum(): int
    {
        return $this->num;
    }


    public function setNum(int $num): void
    {
        $this->num = $num;
    }


}