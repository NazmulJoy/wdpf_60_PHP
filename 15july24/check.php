<?php
    $userEmail = "blabla@gmail.com";
    $userPass = "123456";
   $email = $_POST["email"];
    $password = $_POST["password"];

    if($userEmail == $email && $userPass == $password){
        session_start();
        $_SESSION["email"] = $email;
        header("Location: home1.php");
    } else {
        header("Location: login.php");
    }
    


?>