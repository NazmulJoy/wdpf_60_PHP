<?php $mysql = new mysqli("localhost:3310","root","","company"); ?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if(isset($_POST['submit'])){
            $username = $_POST['user'];
            $password = $_POST['pass'];
            $mysql->query("SELECT FROM user WHERE username = '$username' AND password = '$password'");
            $result = $mysql->query("SELECT * FROM user WHERE username = '$username' AND password = '$password'");

        
        if ($result->num_rows > 0) {
            echo "Login successful! Welcome, $username.";
        } else {
            echo "Invalid username or password.";
        }

        }
    
    
    ?>

    <form action="" method="post">
    <input type="text" name="user" placeholder="Enter username"> <br>
    <input type="password" name="pass" placeholder="Enter password"> <br>
    <input type="submit" name="submit" value="LOGIN">
    </form>
</body>
</html>