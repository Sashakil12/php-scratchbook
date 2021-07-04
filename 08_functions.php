<?php

// Function which prints "Hello I am Zura"
function hello(){
    echo "hello i am shakil <br>";
}
hello();
hello();
hello();
// Function with argument
function hello2($name){
    echo "hello2 i am $name <br>";

};
hello2('shakil');
hello2('shakil 2');
hello2('shakil 3');
// Create sum of two functions

function sum($a, $b){
    return $a+$b;
}

echo sum(10,15).'<br>';
echo sum(5,7).'<br>';
echo sum(12,12).'<br>';
// Create function to sum all numbers using ...$nums
function addAll(...$nums){
    $sum =0;
    foreach ($nums as $value) {
        # code...
        $sum+=$value;
    }
    return $sum;
}
echo addAll(1,1,1,1);
// Arrow functions

function addAllArow(...$nums){
    
    
    return array_reduce($nums, fn($carry, $n)=>$carry+=$n);
};

echo addAllArow(2,4,6,8);


