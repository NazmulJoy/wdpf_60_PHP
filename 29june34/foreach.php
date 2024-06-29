<?php
    //Array 
    $fruits = array();
        $fruits[] = array("Mango", "1KG", "120tk");
        $fruits[] = array("Lichie", "100", "750tk");
        $fruits[] = array("Jackfruit", "1Piece", "150tk");
    
    foreach ($fruits as $fruit) {
        vprintf("<p>Name: %s<br>Quantity: %s<br>Price: %s</p>", $fruit);
    }
    // sir er way
    // foreach ($fruits as $fruit) {
    //     list($name, $quantity, $price) = $fruit;
    //     echo "Name: {$name} <br> Quantity: {$quantity} <br> Price: {$price} <br>";
    // }


?>