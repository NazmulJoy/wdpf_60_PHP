<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_POST["submit"])){
            $email = $_POST["email"];
            $pass = $_POST["password"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Email is invalid";
        } elseif(strlen($pass)<6){
            echo "Password must be at least 6 characters";
        } else{
            echo "Login successfull";
        }
        }
    
    
    
    ?>
    <form method="post">
        Email:
        <input type="text" name="email" placeholder="Enter your email"> <br>
        Password:
        <input type="text" name="password" placeholder="Enter your password"> <br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>
</body>
</html>