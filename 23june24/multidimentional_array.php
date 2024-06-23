<?php
    $divisions = [
        "Dhaka"=>array("Population"=>"10M", "Area" => "Buriganga", "Food"=>"Kacchi" ),
         "Rajshahi"=>array("Population"=>"4M", "Area" => "Ghatpar", "Food"=>"Lichi"),
         "Barishal"=>array("Population"=>"6M", "Area" => "Bhola", "Food"=>"Gali"),
        ];
       echo $divisions["Barishal"]["Area"]. "<br>";
       echo $divisions["Rajshahi"]["Food"]. "<br>";
       echo $divisions["Dhaka"]["Population"];


?>