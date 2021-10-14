<?php

//  Создать родительский (главный класс)
//
//Класс должен содержать 2 свойства
//
//Каждое свойство должно иметь геттеры и сеттеры
class Parental

{
    public $number = 100;
    public $number2 = 25;

    public  function __construct($number,$number2)
    {
        $this->number=$number;
        $this->number2=$number2;
    }

//    abstract public function Exponentiation();

    public function getNumber()
    {
        return $this->number;
    }


    public function getNumber2()
    {
        return $this->number2;
    }


    public function setNumber($number)
    {
        $this->number = $number;
    }


    public function setNumber2($number2)
    {
        $this->number2 = $number2;
    }

}