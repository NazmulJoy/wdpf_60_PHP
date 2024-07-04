<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST["submit"])){
            $number = $_POST["number"];
            echo Fact_check($number);
            }
        function Fact_check($num) {
            
             $fact = 1;
            for ( $i = $num; $i >= 1; $i--) {
              $fact = $fact * $i;
            }
             echo $fact;
          }
    ?>
<form action="" method="post">
        <input type="text" name="number">
        <input type="submit" name="submit" value="CHECK">
    </form>
</body>
</html>