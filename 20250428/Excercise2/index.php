<?php
// index.php

require 'classes/Employee.php'; 

$employee1 = new Employee();
$employee1->setDetails("Abdur Rehman", "Manager", 50000);

echo "Employee Name: " . $employee1->name . "<br>";
echo "Employee Salary: $" . $employee1->getSalary();
?>