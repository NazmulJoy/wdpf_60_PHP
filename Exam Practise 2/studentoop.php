<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> <?php
        class StuRes{
            private $datas;
            public function __construct($filename){
                $this->datas = file($filename);
            }
            public function getresult($stid){
                $found = false;
                foreach($this->datas as $data){
                    $line = explode(",", $data);
                    list($id,$name,$value) = $line;
                    if(trim($id)==$stid){
                        echo "ID: ". $id . "<br>" ."Name: ". $name . "<br>" ."price: ". $value ;
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
                $obj = new StuRes("file.txt");
                $obj->getresult($stid);
            } else {
                echo "Please select a product";
            }
        }
        ?>
    <form method="post">
        <select name="stid" id="">
            <option value="">Select any name</option>
            <option value="1">Bat</option>
            <option value="2">Ball</option>
            <option value="3">Tape</option>
            <option value="4">Water</option>
        </select> <br>
        <input type="submit" name="Submit" value="Submit">
    </form>
</body>
</html>