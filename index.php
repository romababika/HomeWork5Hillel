<?php

error_reporting(-1);

require_once 'classes/Parental.php';
require_once 'classes/SubsidiaryOne.php';
require_once 'classes/SubsidiaryTwo.php';
require_once 'classes/SubsidiaryThree.php';
require_once 'classes/FirstLevelOne.php';
require_once 'classes/FirstLevelTwo.php';
require_once 'classes/FirstLevelThree.php';
require_once 'classes/FirstLevelFour.php';




$summary=new SubsidiaryOne(1,5,6);
echo "Додавання первого наследуемого класса : "." ". $summary->getSupplement(1,5,6);
echo '<br>';

$multiplication=new SubsidiaryTwo(100,25,4);
echo "Умножение второго наследуемого класса : "." ".$multiplication->getMultiplication(100,25,4);
echo '<br>';

$division=new SubsidiaryThree(100,2,2);
echo "Деление третего наследуемого класса : "." ".$division->getDivision(100,2,2);
echo '<br>';

















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