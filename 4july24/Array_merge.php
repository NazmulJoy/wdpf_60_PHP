<?php
    $face = array("J", "Q", "K", "A");
    $numbered = array("2", "3", "4","6","5", "7", "8", "9");
    $cards = array_merge($face, $numbered); //concate two array values as it is. 
    shuffle($cards); //randomly order the values.
    echo "<pre>";
    print_r($cards);

?>