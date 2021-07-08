<?php
class User
{
    private $name;
    private $age;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    // public function getName()
    // {
    //     return $this->name;
    // }
    // public function setName($name)
    // {
    //     return $this->name = $name;
    // }
    // public function getAge()
    // {
    //     return $this->age;
    // }
    // public function setAge($age)
    // {
    //     return $this->age = $age;
    // }
    //magic getter
    public function __get($property){
        if(property_exists($this, $property)){
            return $this->$property;
        }
        
    }
    //magic setter
    public function __set($property, $value){
        if(property_exists($this, $property)){
             $this->$property = $value;
        }
        return $this;
    }
}


$user = new User("Shakil", 25);
echo $user->__get('name');
//ignores non existing property
$user->__set('gender', 'male');
echo $user->__get('gender');
//sets existing property
$user->__set('name', ' anonymous');
echo $user->__get('name');

