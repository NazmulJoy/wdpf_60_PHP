<?php $db = new mysqli("localhost:3310","root","","tclk60") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Manufacturer</h3>
    <?php
    if(isset($_POST['submit'])){
        $id = $_POST['menu'];
        $db->query("DELETE FROM manufacturer WHERE id = '$id'");
        if($db->affected_rows>0){
            echo "Successfully deleted";
        }
    }

    ?>
    <?php $data = $db->query("SELECT * FROM manufacturer") ?>
    <form action=""method="post">
        <select name="menu" id="">
            <option value="">Select one</option>
            <?php 
            while ($row = $data->fetch_object()){
             ?>
            <option value="<?php echo $row->id ?>"><?php echo $row->name ?></option>
            <?php } ?>
        </select>
        <input type="submit" name="submit" value="DELETE">
    </form>
    <a href="products.php">product list</a>
</body>
</html>