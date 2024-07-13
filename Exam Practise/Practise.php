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
        $Num = $_POST["Numbers"];
        $nums = explode(",",$Num);
        $max = $nums[0];
        $min = $nums[0];
        for($i=0;$i<count($nums);$i++){
            if ($nums[$i]>$max){
                $max = $nums[$i];
            }
            if ($min>$nums[$i]){
                $min = $nums[$i];
            }
        }
        echo "Among these numbers $Num <br>";
        echo "Maximum number: $max <br>" . "Minimum number: $min";
    }
    
    
    ?>
<form method="post">
        <input type="text" name="Numbers" placeholder="Enter Numbers"> <br>
        <input type="submit" name="Submit" value="submit">
    </form>
</body>
</html>