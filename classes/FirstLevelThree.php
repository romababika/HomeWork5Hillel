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


class FirstLevelThree extends SubsidiaryThree
{
    public $num;

    public function __construct($number,$number2,$numberSubsid3,$num)
    {
        parent::__construct($number,$number2,$numberSubsid3);
        $this->num=$num;
    }

    public function getSubtractionOneLevel()
    {
        $subtraction=$this->numberSubsid3-$this->num;
        return $subtraction;
    }

    public function getSubtractionOneLevelParent()
    {
        $subtraction=$this->number-$this->number2-$this->num;
        return $subtraction;
    }


    public function getNum(): int
    {
        return $this->num;
    }


    public function setNum(int $num): void
    {
        $this->num = $num;
    }


}