<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $id = $_GET['id']; 
    require_once("dbconfig.php");

    $result = $db->query("DELETE FROM products WHERE id = '$id'");
    if ($result){
        header("Location:all_products.php");
    }
    ?>
</body>
</html>