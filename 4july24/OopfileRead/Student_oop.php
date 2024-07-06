<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<?php 
        class StudentResult{
            private $datas;

            public function __construct($filename){
                $this->datas = file($filename);
            }
            public function showResult($stid){
                $found = false;
    
                foreach($this->datas as $data ){
                    $line = explode(",", $data);
                    list($id, $name, $score, $result) = $line;
                    if(trim($id) == $stid){
                        echo "ID: " . $id . "<br>". "Name: " . $name . "<br>". "Marks: " .$score. "<br>" . "Result: " . $result;
                        $found = true;
                        break;
                    }
                }
                if(!$found){
                    echo "No matching result found";
                }
            }
        }
         
		if(isset($_REQUEST['submit'])){
			$stid = $_REQUEST['stid'];
			if(!empty($stid)){
                $result = new StudentResult('result.txt');
                $result->showResult($stid);
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