<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <?php
        if(isset($_POST["submit"])){
            $number = $_POST["number"];
            echo factCheck($number);
        }
    function factCheck($number){
        $fact = 1;
        for($i = $number; $i >= 1; $i--){
            $fact = $fact * $i;
        }
    echo $fact;
    }
    
    ?>
    <form action="" method="post">
        <input type="text" name="number"> <br>
        <input type="submit" name="submit" value="Check">
    </form>
</body>
</html>