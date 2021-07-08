<?php

class User{
    public function __construct($name, $age)
    {
        $this->name=$name;
        $this->age=$age;
    }
    public $name;
    public $age;
    public function welcomeMessage(){
        return "Have a good day!";
    }
    public function myAge(){
        return "My age is ! ".$this->age;
    }
    public function __destruct()
    {
        echo "destructor works";
    }
}

class Admin extends User{
    public $level;
}

$user = new User("Dary", 24);
$user->name = "Dary";
echo $user->name." ".$user->age;


// $admin = new Admin();
// $admin->name = "John";
// $admin->email = "John@rawls.com";
// $admin->level = "Super admin";
// echo $admin->name." ".$admin->email." ".$admin->level;
// echo "<br>";
// echo $admin->welcomeMessage();
// echo "<br>";

