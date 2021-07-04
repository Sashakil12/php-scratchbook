<?php

// // Create array
// $fruits = ['apple', 'banana'];

// // Print the whole array
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';
// // Get element by index
// echo $fruits[1];
// // Set element by index
// $fruits[0] = 'watermealon';
// echo $fruits[0];
// // Check if array has element at index 2

// isset($fruits[3]);
// // Append element
// $fruits[]='purplr';
// echo $fruits[2].'</br>';
// // Print the length of the array
// echo count($fruits).'</br>';
// // Add element at the end of the array
// array_push($fruits, 'last fruit');
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';
// // Remove element from the end of the array
// echo array_pop($fruits).'</br>';
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';
// // Add element at the beginning of the array
// array_unshift($fruits,'first fruit 1', 'first fruit 2');

// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';
// // Remove element from the beginning of the array

// array_shift($fruits);
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // Split the string into an array
// $string_fruits = 'berry,cherry,dragon';
// $from_str = explode(',',$string_fruits);
// echo '<pre>';
// var_dump($from_str);
// echo '</pre>';

// // Combine array elements into string
// echo implode('/',$from_str);
// // Check if element exist in the array
// echo '<pre>';
// var_dump(in_array('berry', $from_str));
// echo '</pre>';

// // Search element index in the array
// echo '<pre>';
// var_dump(array_search('mango', $from_str));
// echo '</pre>';

// // Merge two arrays
// echo '<pre>';
// var_dump(array_merge($fruits, $from_str));
// echo '</pre>';

// echo '<pre>';
// var_dump([...$fruits, ...$from_str]);
// echo '</pre>';


// // Sorting of array (Reverse order also)

// sort($from_str);
// echo '<pre>';
// var_dump($from_str);
// echo '</pre>';
// echo 'reverse';
// rsort($from_str);
// echo '<pre>';
// var_dump($from_str);
// echo '</pre>';


// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person =[
'name'=>'brad',
'surname'=>'traversey',
'age'=>30,
'hobbies'=> ['Tennis', 'gaming']
];
echo '<pre>';
print_r($person);
echo '</pre>';




// Get element by key
echo $person['name'];

// Set element by key
$person['isMarried'] = false;
echo $person['isMarried'];
echo '<pre>';
print_r($person);
echo '</pre>';

// Null coalescing assignment operator. Since PHP 7.4
if(!isset($person['address'])){
    $person['address'] = 'Unknown';
};
echo '<pre>';
print_r($person);
echo '</pre>';
echo 'shorhand';

$person['village']??='not set village';
echo '<pre>';
print_r($person);
echo '</pre>';
// Check if array has specific key
isset($person['cousin']);
// Print the keys of the array
echo '<pre>';
print_r(array_keys($person));
echo '</pre>';
// Print the values of the array
echo '<pre>';
print_r(array_values($person));
echo '</pre>';
// Sorting associative arrays by values, by keys
ksort($person);
echo '<pre>';
print_r($person);
echo '</pre>';

asort($person);
echo '<pre>';
print_r($person);
echo '</pre>';
// Two dimensional arrays
$todos =[
    ['title'=>'A title', 'completed'=>true],
    ['title'=>'A title 2', 'completed'=>false],
    ['title'=>'A title 3', 'completed'=>false],
];
echo '<pre>';
print_r($todos);
echo '</pre>';



