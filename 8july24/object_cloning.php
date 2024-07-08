<?php
class test{
    public $name;
    private $mobile;
    function __construct($name, $mobile){
        $this->name = $name;
        $this->mobile = $mobile;
    }
}
$obj1 = new test("Farhaan" , "01700000000");
$obj2 = clone $obj1; //Copy of the object
$obj2->name = "Habibr";
echo "<pre>";
print_r($obj1);
print_r($obj2);
?>