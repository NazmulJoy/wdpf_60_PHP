<?php
    class Employee {
        private $name; 
         public $age;
         public $address;
         protected $phone;
         protected $wage;
        public function setName ($name){
            $this->name = $name;
        }
        public function setWage ($wage){
            $this->wage = $wage;
        }



        public function info(){
            $full = "";
           $full .= "Name: ". $this->name. "<br>";
           $full .= "Age: ". $this->age. "<br>";
           $full .= "Address: ". $this->address. "<br>";
           $full .= "Salary: ". $this->wage;
           return $full;
        }

    }
    class programmer extends Employee {
        public $wage= 10000;
        public function bonus($percent){
            return $this->wage * $percent;  
        }
    }
    $obj = new Employee;
    // $obj->name= "Rahim";
    $obj->setName("Arif");
    $obj->setWage(5000);
    $obj->age= "25";
    $obj->address= "Mirpur";
    // $obj->phone= "0167502346";
   echo $obj->info();

    echo "<br>";
  $pro1 = new programmer;
  echo "Salary: ".$pro1->wage. "<br>";
 echo "Bonus: ". $pro1->bonus(".10");
?>