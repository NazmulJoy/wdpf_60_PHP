<?php
    // $fruits = ["Mango", "Banana", "Jackfruit"];
    // list($var1,$var2,$var3)= $fruits;
    // echo $var1 . "<br>";
    // echo $var2. "<br>";
    // echo $var3;

  
    function UserProfile()
    {
    $user[] = "Jason Gilmore";
    $user[] = "jason@example.com";
    $user[] = "English";
    return $user;
    }
    list($name, $email, $language) = UserProfile();
    echo "Name: {$name}, email: {$email}, language: {$language}";


?>