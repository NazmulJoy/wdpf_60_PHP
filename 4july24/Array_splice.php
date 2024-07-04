<?php
    $states = array("Alabama", "Alaska", "Arizona", "Arkansas",
    "California", "Connecticut");
    print_r($states);
    // $subset = array_splice($states, 4);
    echo "<pre>";
    // print_r($states);
    // print_r($subset);
    $subset = array_splice($states, 2, 1, array("New York", "Florida"));
    print_r($states);
    print_r($subset);
    
?>