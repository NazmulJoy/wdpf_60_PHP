<?php
    // class Appliance {
    //     private $_power;
    //     function setPower($status) {
    //         $this->_power = $status;
    // }
    // }

    // $blender = new Appliance;
    // $blender->setPower("on");
    // print_r($blender);

    class student {
        public $name;
        public $age;
        function register($name,$age) {
            $this->name = $name;
            $this->age = $age;
    }
    }

    $st1 = new student;
    $st1->register("Masud",25);
    print_r($st1);

?>