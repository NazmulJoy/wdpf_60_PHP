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
        $grade = $_POST["Grade"];
        $grade = strtoupper($grade);
        switch($grade){
            Case "A":
            echo "Excellent";
            break;
            Case "B":
            echo "Good";
            break;
            Case "C":
            echo "Fair";
            break;
            Case "D":
            echo "Poor";
            break;
            Case "F":
            echo "Failure";
            break;
            default:
            echo "Empty/Invalid Grade";
        }
    }
    ?>
    <form method="post">
        <input type="text" name="Grade" placeholder="Enter your grade"> <br>
        <input type="submit" name="Submit" value="submit">
    </form>
</body>
</html>