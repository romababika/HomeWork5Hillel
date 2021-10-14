<?php

class FirstLevelTwo extends SubsidiaryOne
{
    public $num2=10;


    public function getNum2(): int
    {
        return $this->num2;
    }


    public function setNum2(int $num2): void
    {
        $this->num2 = $num2;
    }


}