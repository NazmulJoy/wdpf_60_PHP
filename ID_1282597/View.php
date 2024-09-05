<?php $mysql = new mysqli("localhost:3310","root","","id1282597") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Answer NO 4</title>
</head>
<body>
    <h3>Products above 5000 price</h3>
<?php
        $data = $mysql->query("SELECT * FROM product_above_5000");
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