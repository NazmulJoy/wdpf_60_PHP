<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Product Edit</h3>
    <?php
        require_once("dbconfig.php");
        //category list collect
        $sql = "SELECT * FROM catergories";
        $cate = $db->query($sql);
        //pick id from url and form 
        $id = $_REQUEST['id'];
        
        

        if(isset($_POST['submit'])){
            extract($_POST);
            $sql = "UPDATE products SET product_name = '$product', product_details = '$details', product_price = '$price', product_quantity = '$quantity', product_category = '$category' WHERE id = '$id'";
            
            $result = $db->query($sql);
            if($db->error){
                echo "Failed";
            } else {
                echo "success";
            }
        }
        
        $sql = "SELECT * FROM products WHERE id = '$id'";
        $data = $db->query($sql);
        $row = $data->fetch_object();
    
    ?>

    <br> <a href="all_products.php">Product list</a> <br/>
    <form action="" method="post">
        Product Name: <input type="text" name="product" placeholder="Enter product name" value ="<?php echo $row->product_name; ?>" > <br>
        Product Details: <textarea name="details" placeholder="Enter product deails" ><?php echo $row->product_details; ?></textarea> <br>
        Product Price: <input type="text" name="price" placeholder="Enter product price" value ="<?php echo $row->product_price; ?>"> <br>
        Product Quantity: <input type="number" name="quantity" placeholder="Enter product quantity" value ="<?php echo $row->product_quantity; ?>"> <br>
        Catergory: <select name="category" id="">
            <option value="">Select one</option>
            <?php
            while($cat = $cate->fetch_assoc()){ ?>
                <option value="<?php echo $cat['cate_id'] ?>" <?php echo $row->product_category == $cat['cate_id']?"selected":"" ?> ><?php echo $cat['cate_name'] ?></option>
            <?php }  
            ?>
            
        </select> <br>
        <input type="submit" name="submit" value="UPDATE"> <br>
        <input type="hidden" name="id" value="<?Php echo $id ?>">
        
    </form>
</body>
</html>