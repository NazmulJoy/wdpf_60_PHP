<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if (isset($_POST['submit'])) {
        require_once("dbconfig.php");
        $cate_name = $_POST['cate_name'];

        $sql = "INSERT INTO catergories (cate_name) VALUES ('$cate_name')";
        $result = $db->query($sql);

        if ($db->affected_rows) {
            echo "Category Successfully Added";
        } else {
            echo "Failed to Add Category";
        }
    }
    ?>

    <form action="" method="post">
        Category Name: <input type="text" name="cate_name" placeholder="Enter category name" required> <br>
        <input type="submit" name="submit" value="ADD CATEGORY">
    </form>
    <a href="all_category.php">Category list</a>
</body>
</html>