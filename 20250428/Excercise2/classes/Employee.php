<?php
// Employee.php

class Employee {
    public $name;
    protected $position;
    private $salary;

    public function setDetails($name, $position, $salary) {
        $this->name = $name;
        $this->position = $position;
        $this->salary = $salary;
    }

    public function getSalary() {
        return $this->salary;
    }
}
?>