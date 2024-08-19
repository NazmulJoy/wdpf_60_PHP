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
        $arr = explode(',',$numbers);
        $max = $arr[0];
        $min = $arr[0];
        for($i = 1; count($arr)>$i; $i++){
            if($arr[$i]>$max){
                $max = $arr[$i];
            } 
            if($arr[$i]<$min){
                $min = $arr[$i];
            }
        }
        echo "Among". $numbers. "<br>" . "maximum number is ". $max. "<br>" . "minimum number is ". $min;
    }
    
    ?>
    <form method="post">
        <input type="text" name="number" placeholder="Enter your numbers"> <br>
        <input type="submit" name="submit" value="CHECK">
    </form>
</body>
</html>