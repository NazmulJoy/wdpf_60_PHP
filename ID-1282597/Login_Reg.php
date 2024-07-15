<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Answer No 1</title>
</head>
<body>
    <h1>Answer no 1</h1>
    <?php
        if(isset($_POST["submit"])){
            $User = $_POST["username"];
           $pattern = '/^[A-z0-9]+@[A-z]{4,8}$/';

             if(preg_match($pattern, $User)){
                 echo "Login valid";
             } else {
                echo "login invalid";
            }
            // if(!filter_var($User, FILTER_VALIDATE_EMAIL)){
            //     echo "login invalid";
            // } 
            //  else {
            //     echo "login valid";
            // }
        }
    
    
    
    ?>
    <form method="post">
        <input type="text" name="username" placeholder="Enter your username"> <br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>