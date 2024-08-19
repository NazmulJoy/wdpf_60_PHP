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
            $grade = $_POST['grade'];
            $grade = strtoupper($grade);
            switch($grade){
               case "A":
               echo "Excellent";
               break;
               case "B":
               echo "Good";
               break;
               case "C":
                echo "Fair";
                break;
                case "D":
                echo "Poor";
                break;
                case "F":
                echo "Failure";
                break;
                default:
                echo "Empty/Invalid Grade";    
            }

        }
    
    
    ?>
    <form method="post">
        <input type="text" name="grade" placeholder="Enter your grade"> <br>
        <input type="submit" name="submit" value="CHECK">
        
    </form>
</body>
</html>