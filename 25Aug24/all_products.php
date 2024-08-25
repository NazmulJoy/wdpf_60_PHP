<?php $mysql = new mysqli("localhost:3310","root","","evidence_exam"); ?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<br>
    <h3>All products (above 5000 price)</h3>
    <?php
        $data = $mysql->query("SELECT * FROM products_above_5000_price");
    ?>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Product Price</th>
        </tr>
        <?php while($row = $data->fetch_assoc()){ ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['price']; ?></td>
            </tr>
        <?php } ?>
    </table> </br>

    <a href="manufacturer.php">All Manufacturer</a>
</body>
</html>