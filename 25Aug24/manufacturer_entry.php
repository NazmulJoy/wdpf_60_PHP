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
        $mysql->query("CALL add_manufacturer('$name','$address','$contact')");
    } 
     ?>
    <form action="">
        <input type="text" name="name" placeholder="Enter manufacturer name"><br>
        <textarea name="address" placeholder="Enter Address"></textarea><br>
        <input type="text" name="contact" id=""><br>
        <input type="submit" name="submit" value="SUBMIT">
        
    </form>
</body>
</html>