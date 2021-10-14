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

class SubsidiaryOne extends Parental

{
    public  $numberSubsid1=4;

    public function __construct($number,$number2,$numberSubsid1)
    {
        parent::__construct($number,$number2);

        $this->numberSubsid1=$numberSubsid1;
    }

    public function getSupplement($number,$number2,$numberSubsid1)
    {
        $sum=$number+$number2+$numberSubsid1;
        return $sum;
    }


    public function getNumberSubsid1()
    {
        return $this->numberSubsid1;
    }


    public function setNumberSubsid1($numberSubsid1)
    {
        $this->numberSubsid1 = $numberSubsid1;
    }

}