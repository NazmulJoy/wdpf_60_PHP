<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    require_once("dbconfig.php");

    $id = $_REQUEST['id'];
    $sql = "DELETE FROM catergories WHERE cate_id = '$id'";
    $result = $db->query($sql);

    if ($db->affected_rows) {
        echo "Category Successfully Deleted";
    } else {
        echo "Failed to Delete Category";
    }

    header("Location: all_category.php"); // Redirect to the categories list page after deletion
    ?>

</body>
</html>