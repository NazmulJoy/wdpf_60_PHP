<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $result = ["Saif" => 48, "Nazrul" => 42, "Rummana" => 49, "Tanim" => 50];
?>
<table border="1">
    <tr>
        <th>Student Name</th>
        <th>Score</th>
    </tr>
    <?php
    foreach ($result as $name=>$score){
        echo "<tr>";
        echo "<td>".$name."</td>";
        echo "<td>".$score."</td>";
        echo "</tr>";
    }
        echo "<tr>";
        echo "<td colspan=2>";
        $maxscore = max($result);
        $student = array_search($maxscore, $result);
        echo "Maximum Score: $maxscore obtained by $student";
        echo "</td>";
        echo "</tr>";
    ?>
</table>
</body>
</html>