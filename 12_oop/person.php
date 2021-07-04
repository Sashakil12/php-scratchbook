<?php
class Person
{
    public string $name;
    public string $surname;
    private int $age;
    public static int $counter = 0;
    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
        self::$counter++;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
    public function getAge()
    {
        return $this->age;
    }
    public static function getCounter()
    {
        return self::$counter;
    }
}
