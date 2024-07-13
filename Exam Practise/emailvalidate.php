<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST["Submit"])){
        $email = $_POST["email"];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Please enter a valid email address";
        } else {
            echo "Email is valid";
        }
    }
    ?>
    <form method="post">
        Email:
        <input type="text" name="email" placeholder="Enter your email"> <br>
        <input type="submit" name="Submit" value="submit">
    </form>
</body>
</html>