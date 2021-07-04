<?php
require_once 'person.php';
class Student extends Person
{
    public string $studentId;
    public function __construct($name, $surname,$studentId)
    {
        $this->studentId = $studentId;
        parent::__construct($name, $surname);
    }
}
