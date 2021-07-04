<?php

$age = 20;
$salary = 300000;

// Sample if
if ($age === 20) {
    echo 'age is 20';
}

// Without circle braces
if ($age === 20)    echo 'age is 20';


// Sample if-else

if ($age > 20) {
    echo "1";
} else {
    echo '2';
}
// Difference between == and ===

if ($age == 20) {
    echo "int 20" . '<br>';
}
if ($age == '20') {
    echo 'string 20' . '<br>';
}
// if AND

if ($age == 20 && $salary === 300000) {
    echo "do something";
}

// if OR
if ($age > 20 || $salary === 300000) {
    echo "do something";
}

// Ternary if
echo $age < 22 ? 'Young' : 'old';
// Short ternary
$myage = $age ?: '18';
echo  $myage;
// Null coalescing operator
echo $name ?? 'John';
// switch
$userRole = 'manageruiuyt';
switch ($userRole) {
    case 'admin':
        echo 'welcome admin';
        break;
    case 'moderator':
        echo 'welcome moderator';
        break;
    case 'manager':
        echo 'manager';
        break;

    default:
        echo 'welcome user';
        break;
}
