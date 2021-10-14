<?php

class FirstLevelFour extends SubsidiaryThree
{
    public $num4=50;


    public function getNum4(): int
    {
        return $this->num4;
    }


    public function setNum4(int $num4): void
    {
        $this->num4 = $num4;
    }


}