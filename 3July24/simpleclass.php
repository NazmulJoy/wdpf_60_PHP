<?php
class SimpleClass
{
    public $var = 'a default value <br>'; // public property declaration
    public const a="America <br>"; // private constant Declaration
 
    // public method declaration
    public function displayVar() {
        echo $this->var;
    } 
    public function displayVar2() {
        echo self::a ;
    }
}
$obj = new SimpleClass;
echo $obj->var;
echo $obj::a; 
$obj->displayVar();
$obj->displayVar2(); 
?>