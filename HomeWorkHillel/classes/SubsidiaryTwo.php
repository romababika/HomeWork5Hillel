<?php

// Создать 3 наследника родительского класса
//
//Каждый наследник должен содержать одно свойство
//
//Каждое свойство должно иметь геттер и сеттер
//
//Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными
//
//Один наследник не должен быть наследуемым
//
//Один из наследников должен содержать абстрактную функцию возведения в степень

class SubsidiaryTwo extends Parental

{
    public $numberSubsid2=63;

    public function __construct($number, $number2,$numberSubsid2)
    {
        parent::__construct($number, $number2);
        $this->numberSubsid2=$numberSubsid2;
    }

     public function getMultiplication($number,$number2,$numbersubsid2)
 {
     $multiplication=$number*$number2*$numbersubsid2;
     return $multiplication;
 }

    public function getNumberSubsid2()
    {
        return $this->numberSubsid2;
    }


    public function setNumberSubsid2($numberSubsid2)
    {
        $this->numberSubsid2 = $numberSubsid2;
    }


}