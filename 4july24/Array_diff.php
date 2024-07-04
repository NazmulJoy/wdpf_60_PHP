<?php
    $array1 = array("OH", "CA", "NY", "HI", "CT");
    $array2 = array("OH", "CA", "HI", "NY", "IA");
    $array3 = array("TX", "MD", "NE", "OH", "HI");
    $diff = array_diff($array3, $array2, $array1); //first parameter is the base one which uncommon value is output
    print_r($diff);
?>