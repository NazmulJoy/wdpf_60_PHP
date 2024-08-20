<?php include_once("dbconfig.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All products</title>
</head>
<body>
    <h3>Product list</h3>
    <?php
        $sql = "SELECT * FROM products";
        $data = $db->query($sql); ?>
        <table border="1">
            <tr>
                <th>Product ID </th>
                <th>Product Name </th>
                <th>Product Details </th>
                <th>Product Price </th>
                <th>Product Quantiy </th>
                <th>Action </th>
            </tr>
            <?php while($row = $data->fetch_assoc()){ ?>

            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['product_name'] ?></td>
                <td><?php echo $row['product_details'] ?></td>
                <td><?php echo $row['product_price'] ?></td>
                <td><?php echo $row['product_quantity'] ?></td>
                <td><a onclick="return confirm('Are you sure to delete?')" href="product_delete.php?id=<?php echo $row['id']?>"><img src="bin.jpg" alt="" width="20"></a></td>
            </tr>

            <?php } ?>

        </table>
        <br>
        <a href="product_entry.php">New Product</a>
</body>
</html>