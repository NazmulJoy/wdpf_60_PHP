<?php
    $host = "localhost:3310";
    $user = "root";
    $pass = "";
    $db = "wdpf60";

    @$con = new mysqli($host,$user,$pass,$db);
    if ($con->connect_errno){
        echo "Failed to connect to mysql: " . $con->connect_error;
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is homepage</h1>
    <?php
        $data = $con->query("SELECT * FROM users");
        $output = $data->fetch_all();
        echo "<pre>";
        print_r($output);
    
    ?>
</body>
</html>