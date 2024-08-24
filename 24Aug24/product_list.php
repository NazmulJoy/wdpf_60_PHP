<?php $db = new mysqli("localhost:3310","root","","evidence_exam"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $sql = "SELECT * FROM products_above_5000_price";
    
    $data = $db->query($sql);
    ?>
    <table border="1">
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Manufacturer ID</th>
        </tr>
        <?php while($row = $data->fetch_assoc()){ ?>
        <tr>
        <td>
                <?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['price'] ?></td>
                <td><?php echo $row['manufacturer_id'] ?></td>
        </tr>
        <?php } ?> 
    </table>

</body>
</html>   

    
