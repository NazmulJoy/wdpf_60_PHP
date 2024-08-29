<?php $db = new mysqli("localhost:3310","root","","tclk60") ?>
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
        extract($_POST);
        if (!empty($name) && !empty($address) && !empty($contact)) {
        $db->query("CALL add_manufacturer('$name','$address','$contact')");
        if($db->error){
            echo "Failed to add";
        } else { 
            echo "Successfully added";
        }
        } else {
            echo "<h3>All fields are required.</h3>";
        }
    }  
    ?>
    <form action="" method="post">
    <input type="text" name="name" placeholder="Enter manufacturer name"><br>
    <textarea name="address" id=""></textarea><br>
    <input type="text" name="contact" id=""><br>
    <input type="submit" name="submit" value="ADD">
    </form>
    <a href="manufacturer_delete.php">Manufacturer list</a>
</body>
</html>