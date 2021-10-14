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

class FirstLevelFour extends SubsidiaryThree
{
    public $num4;

    public function __construct($number,$number2,$numberSubsid3,$num4)
    {
        parent::__construct($number,$number2,$numberSubsid3);
        $this->num4=$num4;
    }

    public function getDivisionOneLevel()
    {
        $division=$this->numberSubsid3/$this->num4;
        if(($this->num4)===0)
        {
            echo "Деление на 0";
            return  false;
        }else return $division;

    }

    public function getDivisionOneLevelParent()
    {
        $division=($this->number/$this->number2)/$this->num4;
        if(($this->num4)===0)
        {
            echo "Деление на 0";
            return  false;
        }else return $division;

    }

    public function getNum4(): int
    {
        return $this->num4;
    }


    public function setNum4(int $num4): void
    {
        $this->num4 = $num4;
    }


}