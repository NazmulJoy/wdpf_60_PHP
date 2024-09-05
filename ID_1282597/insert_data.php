<?php $mysql = new mysqli("localhost:3310","root","","id1282597") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Answer No. 2</title>
</head>
<body>
    <?php
        if(isset($_POST['submit'])){
            extract($_POST);
            if($mysql->query("CALL add_manufacturer ('$name','$address','$contact')")){
                echo "Added succcessfully";
            }else{
                echo "Failed to add";
            }	

        }
    ?>
    <h3>Add manufacturer here</h3>
    <form action="" method="post">
       Name:<input type="text" name="name" placeholder="Enter name"><br><br>
       Address:<textarea name="address" placeholder="Enter address"></textarea><br><br>
       Contact No: <input type="text" name="contact" placeholder="Enter contact no."><br><br>
        <input type="submit" name="submit" value="ADD">
    </form>
</body>
</html>