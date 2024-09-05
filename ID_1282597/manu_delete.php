<?php $mysql = new mysqli("localhost:3310","root","","id1282597") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Answer NO 3</title>
</head>
<body>
    <h3>Delete manufacturer from here</h3>
    <?php
    if(isset($_POST['submit'])){
        $id = $_POST['menu'];
         $mysql->query("DELETE FROM `manufacturer` WHERE id = '$id'");
        if($mysql->affected_rows){
            echo "Successfully deleted";
        } else{
            echo "Failed to delete";
        }
    } 
    ?>


    <?php
   $data = $mysql->query("SELECT * FROM `manufacturer`");
    ?>
    <form action="" method="post">
        <select name="menu" id="">
            <option value="">Select one</option>
            <?php while($row = $data->fetch_assoc()){ ?>
            <option value="<?php echo $row['id'] ?> "><?php echo $row['name'] ?></option>
            <?php } ?>
        </select>
        <input type="submit" name="submit" value="DELETE">
    </form> <br>
    <?php
        $data = $mysql->query("SELECT * FROM product");
    ?>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Manufacturer ID</th>
        </tr>
        <?php while($row = $data->fetch_assoc()){ ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['manufacturer_id']; ?></td>
            </tr>
        <?php } ?>
    </table> 
</body>
</html>