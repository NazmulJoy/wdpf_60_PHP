<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Answer No 2</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Answer no 2</h1> 
    <?php
        class StuRes{
            private $datas;
            public function __construct($filename){
                $this->datas = file($filename);
            }
            public function getresult($stid){
                $found = false;
                foreach($this->datas as $data){
                    $line = explode(",", $data);
                    list($id,$name,$Batch,$Result) = $line;
                    if(trim($id)==$stid){
                        echo "ID: ". $id . "<br>" ."Name: ". $name . "<br>" ."Batch: ". $Batch . "<br>" ."Result: ". $Result;
                        $found = true;
                        break;
                    }
                } if(!$found){
                    echo "No matching data found";
                }
            }
        }
        if(isset($_POST["Submit"])){
            $stid = $_POST["stid"];
            if(!empty($stid)){
                $obj = new StuRes("result.txt");
                $obj->getresult($stid);
            } else {
                echo "Please select a ID";
            }
        }
        ?>
    <form method="post">
        <select name="stid" id="">
            <option value="">Select any name</option>
            <option value="1">Yakub</option>
            <option value="2">Sohail</option>
            <option value="3">Rahat</option>
            <option value="4">Babul</option>
        </select> <br>
        <input type="submit" name="Submit" value="Submit">
    </form>
</body>
</html>
</body>
</html>