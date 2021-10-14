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

class FirstLevelTwo extends SubsidiaryOne
{
    public $num2;

    public function __construct($number,$number2,$numberSubsid1,$num2)
    {
        parent::__construct($number,$number2,$numberSubsid1);
        $this->num2=$num2;
    }

    public function getMultiplicationOneLevel()
    {
        $sum=$this->numberSubsid1*$this->num2;
        return $sum;
    }

    public function getMultiplicationOneLevelParent()
    {
        $sum=$this->number*$this->number2*$this->num2;
        return $sum;
    }

    public function getNum2(): int
    {
        return $this->num2;
    }


    public function setNum2(int $num2): void
    {
        $this->num2 = $num2;
    }


}