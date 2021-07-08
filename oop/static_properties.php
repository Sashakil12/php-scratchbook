<?php

class User {
    public static $nextId=0;
    public $myId;
    public static function printId(){
        //only static properties ca be accessed
        return "User id is: ".self::$nextId;
    }
}

$user = new User();
$user->myId = 10;
echo $user->myId;
echo "<br>";

//accessing static properties
User::$nextId=10;
echo User::printId();