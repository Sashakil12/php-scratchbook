<?php

// while
// while(true) echo 'hi!';
// Loop with $counter
$counter = 0;

// while($counter<10){
//     echo $counter.'<br>';
//     $counter++;
// }

// do - while

// do{
//     echo $counter;
//     $counter++;
// }while
//     ($counter<10);

// for

for ($i=0; $i <10 ; $i++) { 
    echo $counter.'<br>';
    $counter++;
}

// foreach
$fruits = ['banana', 'mango', 'pine apple', 'berry', 'cherry'];
foreach ($fruits as $item) {
    # code...
    echo $item;
}



// Iterate Over associative array.
$fruits_2d = [['name'=>'banana', 'taste'=>'sweet'], ['name'=>'mango', 'taste'=>'sweet/sour', ], ['name'=>'pine apple', 'taste'=>'strange', ], ['name'=>'berry', 'taste'=>'sour'], ['name'=>'cherry', 'taste'=>'anil kapoor knows']];
$fruits_associative = ['name'=>'banana', 'taste'=>'sweet', 'origin'=>'india', 'color'=>'yellow'];
foreach ($fruits_associative as $key => $value) {
    # code...
        echo "$key - $value <br> ";
}
foreach ($fruits_2d as $i => $value) {
    # code...
    // $str = $value['name'].' '. $value['taste'];
        echo $value['name']." tastes? ".$value['taste']." <br>";
        // var_dump($value['name']);
}



