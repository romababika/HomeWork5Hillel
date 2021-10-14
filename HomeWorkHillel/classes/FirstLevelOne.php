<?php

//Создать по 2 наследника от наследников первого уровня
//
//Каждое свойство должно иметь геттер и сеттер
//
//Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными
//
//И по одному методу который выполняет любое математическое действие со свойством корневого класса и своим свойством
//
//
//
//В случае если реализован наследник класса содержащего абстрактную функцию то класс должен содержать реализацию абстракции

class FirstLevelOne extends SubsidiaryOne
{
    public $num1;

    public function __construct($number,$number2,$numberSubsid1,$num1)
    {
        parent::__construct($number,$number2,$numberSubsid1);
        $this->num1=$num1;
    }

    public function getSummaOneLevel()
    {
        $sum=$this->numberSubsid1+$this->num1;
        return $sum;
    }

    public function getSummaOneLevelParent()
    {
        $sum=$this->number+$this->number2+$this->num1;
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