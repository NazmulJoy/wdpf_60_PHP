<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $result = ["Saif" => 48, "Nazrul" => 42, "Rummana" => 49, "Tanim" => 50]; 
        $max = max($result);
        $student = array_search($max,$result);
    
    ?>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Score</th>
        </tr>
        <?php foreach($result as $name=>$score): ?>
        <tr>
            <td><?php echo $name ?></td>
            <td><?php echo $score ?></td>
        </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="2">
            <?php  echo $max." is obtained by ". $student ?>
            </td>
        </tr>
    </table>
</body>
</html>