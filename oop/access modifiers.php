<?php

class User{
    public string $name = "apple";
    private int $age = 13;
}
 $user = new User();
//public properties can be accessed & modified anywhere in the code;
echo $user->name;
$user->name="banana";
echo $user->name;

//private properties can not be accessed from outside of the class declaration;
$user->age=0;
echo $user->age;

