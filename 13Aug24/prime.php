<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime number</title>
</head>
<body>
    <?php
        if(isset($_POST["submit"])){
            $number = $_POST["number"];
            echo primeCheck($number);
        }
        function primecheck ($number){
            if ($number == 1){
                return $number. " is not a prime number";
            } else if ($number == 2){
                return $number. " is a prime number";
            } else {
                for ($x = 2; $x < $number; $x++){
                    if ($number % $x == 0){
                        return $number. " is not a prime number";
                    } 
                }
                return $number. " is a prime number";
            }
        }
    
    
    ?>
    <form action="" method="post">
        <input type="text" name="number"> <br>
        <input type="submit" name="submit" value="Check">
    </form>
</body>
</html>