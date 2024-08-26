<?php $mysql = new mysqli("localhost:3310","root","","company"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<html>
    <h3>All Manufacturer</h3>
    <?php 
        if(isset($_POST['submit'])){
            $id = $_POST['manu'];

           $mysql->query("DELETE FROM manufacturer WHERE id = '$id'");
           if($mysql->affected_rows){
            echo "<h1>Succesfully deleted</h1>";
           }
        }
    ?>
    <?php
        $sql = "SELECT * FROM manufacturer";
        $data = $mysql->query($sql);
    ?>

    <form action="" method="post">
        <select name="manu" id="">
            <option value="">Select one</option>
            <?php while($row = $data->fetch_object()){ ?>
                <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                <?php } ?>
        </select>
        <input type="submit" name="submit" id="DELETE">
    </form> <br>
    <a href="Products.php">All Products</a>

</body>
</html>