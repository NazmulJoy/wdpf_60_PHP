<?php
    class Employee{
    public $name;
    public function __set($propName, $propValue){
    $this->$propName = $propValue;
    }
    }
    $employee = new Employee;
    $employee->name = "Rahul";
    $employee->phone = "0164875412";
    echo "Name: {$employee->name}<br />";
    echo "Title: {$employee->phone}";
    


?>