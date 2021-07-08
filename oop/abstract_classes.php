<?php

abstract class Manager{
    abstract protected function showProjects($project);
}

class Employee extends Manager{
        public function showProjects($project="Apple")
        {
            return "I am working on ". $project;
        }
}