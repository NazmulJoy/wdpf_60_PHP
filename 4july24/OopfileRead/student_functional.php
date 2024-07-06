<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<?php 
        function showResult($stid){
            $datas = file('result.txt');
            $found = false;

            foreach($datas as $data ){
				$line = explode(",", $data);
				list($id, $name, $score, $result) = $line;
				if(trim($id) == $stid){
					echo $id, $name, $score, $result;
                    $found = true;
                    break;
				}
			}
            if(!$found){
                echo "No matching result found";
        }
        }
		if(isset($_REQUEST['submit'])){
			$stid = $_REQUEST['stid'];
			if(!empty($stid)){
                showResult($stid);
            } else {
                echo "Please select a student";
            }
		}
	?>
	<form action="" method="post">
		<select name="stid">
			<option value="">Select one</option>
			<option value="1">Saif</option>
			<option value="2">Zamil</option>
			<option value="3">Tanim</option>
            <option value="4">Sobuj</option>
		</select>
		<input type="submit" name="submit" value="SHOW RESULT">
	</form>
</body>
</html>