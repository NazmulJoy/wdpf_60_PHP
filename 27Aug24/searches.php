<?php $mysql = new mysqli("localhost:3310","root","","classicmodels"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search page</title>
</head>
<body>
    <H3>Seach products</H3>
    <?php
        if(isset($_GET['search'])){
            $search = $_GET['term'];
           $data = $mysql->query("SELECT productCode,productName,buyPrice FROM products WHERE productName LIKE '%$search%'");
           $record = $data->num_rows;
           echo "With the keyword $search we have found $record number of records";
        }
    ?>
    <form action=""method="get">
        <input type="text" name="term" placeholder="Enter your keyword"> <br>
        <input type="submit" name="search" value="SEARCH">
    </form>
    <?php
    if(isset($_GET['search'])){
        while($record = $data->fetch_object()){
            echo "Product Code: ".$record->productCode."Product Name: ".$record->productName."Product Price: ".$record->buyPrice."<hr>";
        }
    }
    ?>
</body>
</html>