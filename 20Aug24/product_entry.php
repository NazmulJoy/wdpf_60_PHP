<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Product Entry</h3>
    <?php
        if(isset($_POST['submit'])){
            extract($_POST);
            $sql = "INSERT INTO products (id, product_name, product_details, product_price, product_quantity) VALUES (NULL,'$product','$details','$price','$quantity')";
            require_once("dbconfig.php");
            $result = $db->query($sql);
            if($db->affected_rows){
                echo "Succesfully Added";
            } else {
                echo "Failed";
            }
        }
    
    ?>

    <br> <a href="all_products.php">Product list</a> <br/>
    <form action="" method="post">
        Product Name: <input type="text" name="product" placeholder="Enter product name"> <br>
        Product Details: <textarea name="details" placeholder="Enter product deails"></textarea> <br>
        Product Price: <input type="text" name="price" placeholder="Enter product price"> <br>
        Product Quantity: <input type="number" name="quantity" placeholder="Enter product quantity"> <br>
        <input type="submit" name="submit" value="ADD">
        
    </form>
</body>
</html>