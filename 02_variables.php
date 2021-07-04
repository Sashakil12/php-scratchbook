<?php

// What is a variable
// a container holding values


// Variable types

//types
/*
String
Integer
Float 
Array
Object
Boolean
Null
Resource

*/








// Declare variables

$name = "Shakil";
$age = 25;
$isMale = true;
$height = 4.5;
$salary = null;
// Print the variables. Explain what is concatenation
echo $name . '</br>';
echo $age . '</br>';
echo $isMale . '</br>';
echo $height . '</br>';
echo $salary . '</br>';

// Print types of the variables
echo gettype($name) . '</br>';
echo gettype($age) . '</br>';
echo gettype($isMale) . '</br>';
echo gettype($height) . '</br>';
echo gettype($salary) . '</br>';

// Print the whole variable
var_dump($name, $age, $isMale, $salary, $height);
// Change the value of the variable
$name=false;
// Print type of the variable
echo 'name type after change '.gettype($name);
// Variable checking functions
echo 'is is male a string?'. is_string($isMale);


// Check if variable is defined
isset($name);
isset($poo);
// Constants
//cant change var
define('apple', 'red');
echo apple;


// Using PHP built-in constants
