<?php
    $states = array("Alabama", "Alaska", "Arizona", "Arkansas",
    "California", "Colorado", "Connecticut");
    //$subset = array_slice($states, 2, 3); 
    $subset = array_slice($states, 2, -3);
    print_r($subset);
    

?>