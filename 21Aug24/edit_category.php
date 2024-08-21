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

    if (isset($_POST['submit'])) {
        $cate_name = $_POST['cate_name'];
        $sql = "UPDATE catergories SET cate_name = '$cate_name' WHERE cate_id = '$id'";
        $result = $db->query($sql);

        if ($db->affected_rows) {
            echo "Category Successfully Updated";
        } else {
            echo "Failed to Update Category";
        }
    }

    $sql = "SELECT * FROM catergories WHERE cate_id = '$id'";
    $data = $db->query($sql);
    $row = $data->fetch_object();
    ?>

    <form action="" method="post">
        Category Name: <input type="text" name="cate_name" value="<?php echo $row->cate_name; ?>" required> <br>
        <input type="submit" name="submit" value="UPDATE CATEGORY">
    </form>
    <a href="all_category.php">Category list</a>
</body>
</html>