<?php $mysql = new mysqli("localhost:3310","root","","company"); ?>
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
        if (!empty($name) && !empty($address) && !empty($contact)) {
            // Execute the query only if all fields are filled
            $mysql->query("CALL insert_manufacturer('$name', '$address', '$contact')");
            if ($mysql->error) {
                echo "<h3>Failed to Add</h3>";
            } else {
                echo "<h3>Successfully Added</h3>";
            }
        } else {
            echo "<h3>All fields are required.</h3>";
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