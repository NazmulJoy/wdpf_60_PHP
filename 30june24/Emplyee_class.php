<?php
    class Employee {
        public $name; 
         public $age;
         public $address;
        public function info(){
            $full = "";
           $full .= "Name: ". $this->name. "<br>";
           $full .= "Age: ". $this->age. "<br>";
           $full .= "Address: ". $this->address;
           return $full;
        }

    }
    $obj = new Employee;
    $obj->name= "Rahim";
    $obj->age= "25";
    $obj->address= "Mirpur";
   echo $obj->info();
?>