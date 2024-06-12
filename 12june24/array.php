<?php
    //numeric indexed array
   $teams = array("FCB", "RMA", "BM", "ManC", "ManU");
   echo "<pre>";
   print_r($teams);

   $teams[]="Liv";
   $teams[]="PSG";
   print_r($teams);
   echo "<hr>";
    //Associative array
    $players = ["FCB"=>"Yamal", "RMA"=>"Endrick", "BM"=>"Kane", "ManU"=>"Casemiro", "ManC"=>"Foden"];
    $players["Liv"] = "Dijk";
    print_r($players);

?>