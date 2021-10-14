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


 class SubsidiaryThree extends Parental

{
    public $numberSubsid3;


    public function __construct($number, $number2,$numberSubsid3)
    {
        parent::__construct($number, $number2);
        $this->numberSubsid3=$numberSubsid3;
    }

      public function getDivision()
  {
      $division=($this->number/$this->number2)/$this->numberSubsid3;
      return $division;
  }

    /*abstract public function Exponentiation()
    {

    }*/


     public function getNumberSubsid3()
    {
        return $this->numberSubsid3;
    }


    public function setNumberSubsid3($numberSubsid3)
    {
        $this->numberSubsid3 = $numberSubsid3;
    }

}