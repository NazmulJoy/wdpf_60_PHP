<?php
$x = 5;
$y = 10;

function myTest() {
    $x = 4; $y = 8;
//   global $x, $y;
  $y = $x + $y;
} 

myTest();  // run function
echo $y; // output the new value for variable $y

print_r($GLOBALS);
?>