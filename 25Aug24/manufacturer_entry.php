<?php $mysql = new mysqli("localhost:3310","root","","evidence_exam"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>New manufacturer</h3>
    <?php
    if(isset($_POST['submit'])){
        extract($_POST);
        if($mysql->query("CALL add_manufacturer('$name','$address','$contact')")){
            echo "<h3>Successfully Added</h3>";
        } else{
            echo "Failed";
        }
    } 
     ?>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter manufacturer name"><br>
        <textarea name="address" placeholder="Enter Address"></textarea><br>
        <input type="text" name="contact" id=""><br>
        <input type="submit" name="submit" value="SUBMIT">
        
    </form>
</body>
</html>