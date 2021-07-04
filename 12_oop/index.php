<?php

// What is class and instance
require_once "person.php";
require_once "Student.php";
// Create Person class in Person.php
// Create instance of Person
// $p = new Person('brad', 'traversey');
// $p->setAge(12);

// echo '<pre>';
// echo var_dump($p);
// echo '</pre>';

// echo $p->name . '<br>';
// echo $p->surname . '<br>';
// // Using setter and getter
// echo $p->getAge() . '<br>';

// $p2 = new Person('John', 'Doe');

// echo '<pre>';
// echo var_dump($p);
// echo '</pre>';
// echo Person::getCounter();

$s= new Student('alim', 'bula','14547');
echo '<pre>';
echo var_dump($s);
echo '</pre>';





