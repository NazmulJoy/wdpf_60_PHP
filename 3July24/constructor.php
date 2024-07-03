<?php
class oop{
    private $name;
    private $age;
 public function __construct($name, $age){
     $this->name = $name;
     $this->age = $age;
 }
 public function sayHello(){
     echo "<br>Hello ". $this->name ."<br>I am ".$this->age ." years old";
 }
 public function __destruct(){
    echo "<br>I'm about to disappear - bye bye!";
}
  
 
}
$obj=new oop("Masud",30);
print_r($obj); /* Now Automatically Execute __construct Method
                  And Will show "Welcome to PHP World " First.*/
 
echo "<br>";
 
$obj->sayHello(); // Result: Hello World
 
?>