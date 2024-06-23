<?php
    $data = file("users.txt");
    // print_r($data);
    echo "<table border='1'>";
    echo "<tr><th>Name</th><th>Profession</th><th>Colour</th></tr>";
    foreach($data as $item){
        // print $item;
         $line= explode("|", $item);
         list($username,$occu,$colour)= $line;
         echo "<tr><td>$username</td><td>$occu</td><td>$colour</td></tr>";
        //  echo "<pre>";
        //  print_r($line);
    }
    echo "</table>";


?>