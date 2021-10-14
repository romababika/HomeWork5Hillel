<?php

//  Создать родительский (главный класс)
//
//Класс должен содержать 2 свойства
//
//Каждое свойство должно иметь геттеры и сеттеры
class Parental

{
    public $number;
    public $number2;

    public  function __construct($number,$number2)
    {
        $this->number=$number;
        $this->number2=$number2;
    }

//    abstract public function Exponentiation();

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @param int $number
     */
    public function setNumber(int $number): void
    {
        $this->number = $number;
    }

    /**
     * @return int
     */
    public function getNumber2(): int
    {
        return $this->number2;
    }

    /**
     * @param int $number2
     */
    public function setNumber2(int $number2): void
    {
        $this->number2 = $number2;
    }


}