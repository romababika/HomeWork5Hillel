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
require_once 'classes/SubsidiaryThreeLeter.php';
require_once 'classes/SubsidiaryThreeLeter2.php';




$summary=new SubsidiaryOne(1,5,6);
echo "Додавання первого наследуемого класса : "." ". $summary->getSupplement();
echo '<br>';

$multiplication=new SubsidiaryTwo(100,25,4);
echo "Умножение второго наследуемого класса : "." ".$multiplication->getMultiplication();
echo '<br>';

$division=new SubsidiaryThree(100,2,2);
echo "Деление третего наследуемого класса : "." ".$division->getDivision();
echo '<br>';

$pow=new SubsidiaryThreeLeter2(2,8,5);
echo "Возведение в степень : "." ".$pow->Pow();
echo '<br>';

$sum=new FirstLevelOne(5,6,8,6);
echo "Сумма  математическое действие с данными родителя и своими данными : "." ".$sum->getSummaOneLevel();
echo '<br>';

$sum=new FirstLevelOne(5,6,8,9);
echo "Cумма математическое действие со свойством корневого класса и своим свойством : "." ".$sum->getSummaOneLevelParent();
echo '<br>';

$multiplication=new FirstLevelTwo(100,6,8,9);
echo "Умножение математическое действие с данными родителя и своими данными : "." ".$multiplication->getMultiplicationOneLevel();
echo '<br>';
echo "Умножение математическое действие со свойством корневого класса и своим свойством :"." ".$multiplication->getMultiplicationOneLevelParent();
echo '<br>';

$subtraction=new FirstLevelThree(100,55,74,6);
echo "Вычетание математическое действие с данными родителя и своими данными : "." ".$subtraction->getSubtractionOneLevel();
echo '<br>';
echo "Вычетание математическое действие со свойством корневого класса и своим свойством :"." ".$subtraction->getSubtractionOneLevelParent();
echo '<br>';

$division=new FirstLevelFour(1000,10,120,6);
echo "Деление математическое действие с данными родителя и своими данными : "." ".$division->getDivisionOneLevel();
echo '<br>';
echo "Деление математическое действие со свойством корневого класса и своим свойством :"." ".$division->getDivisionOneLevelParent();
echo '<br>';


// Для проверки деления на 0
/*$division=new FirstLevelFour(1000,10,120,0);
echo "Деление математическое действие с данными родителя и своими данными : "." ".$division->getDivisionOneLevel();
echo '<br>';
echo "Деление математическое действие со свойством корневого класса и своим свойством :"." ".$division->getDivisionOneLevelParent();
echo '<br>';*/












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