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

    $sql = "SELECT * FROM catergories";
    $data = $db->query($sql);

    echo "<table border='1'>";
    echo "<tr><th>Category ID</th><th>Category Name</th><th>Actions</th></tr>";

    while ($row = $data->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['cate_id'] . "</td>";
        echo "<td>" . $row['cate_name'] . "</td>";
        echo "<td><a href='edit_category.php?id=" . $row['cate_id'] . "'>Edit</a> | <a href='delete_category.php?id=" . $row['cate_id'] . "' onclick=\"return confirm('Are you sure to delete?')\">Delete</a></td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
    <a href="category_entry.php">New Category</a>

</body>
</html>