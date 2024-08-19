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
            $numbers = $_POST['number'];
            echo factCheck($numbers);
        }
        function factCheck($numbers){
            $fact = 1;
            for($i = $numbers;$i>= 1; $i--){
                $fact = $fact * $i;
            }
            echo $fact;
        }
    
    
    
    ?>
    <form method="post">
            <input type="text" name="number" placeholder="Enter your numbers"> <br>
            <input type="submit" name="submit" value="CHECK">
        </form>
</body>
</html>