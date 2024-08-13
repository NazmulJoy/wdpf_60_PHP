<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Registration</h1>
    <?php
        if (isset($_REQUEST['submit'])){
            $msg = form_validation();
            if (count($msg)>0){
                echo "<ul>";
                foreach ($msg as $m){
                   echo "<li>".$m."</li>";
                }
                echo "</ul>";                
            } else {
                echo "Validation done";
            }
            
        }
        function form_validation(){
            $errors = [];
            $fullname = $_REQUEST['fullname'];
            if(empty($fullname)){
                $errors[] = "Fullname must be filled";
            }
            // if(isset($_REQUEST['$gender'])){
            //     $gender = $_REQUEST['gender'];
            // } else{
            //     if(empty($gender)){
            //         $errors[] = "Gender must be filled";
            //     }
            // }
            $district = $_REQUEST['district'];
            if(empty($district)){
                $errors[] = "District must be filled";
            }
            // $hobbies = $_REQUEST['hobbies'];
            // if(empty($hobbies)){
            //     $errors[] = "Hobbies must be filled";
            // }
            $address = $_REQUEST['address'];
            if(empty($address)){
                $errors[] = "Address must be filled";
            }
            
            return $errors;
        }
    
    
    ?>
    <form action="" method="post">
        Fullname: <input type="text" name="fullname" placeholder="Enter your name"> <br>
        Gender: <input type="radio" name="gender" value="male" checked> Male
        <input type="radio" name="gender" value="female"> Female <br>
        District: <select name="district" id="">
            <option value="">Select one</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Rajshahi">Rajshahi</option>
            <option value="Khulna">Khulna</option>
            <option value="Barishal">Barishal</option>
            <option value="Rangpur">Rangpur</option>
        </select> <br>
        Hobbies: <input type="checkbox" name="hobbies[]" value="Gardening" checked>Gardening
        <input type="checkbox" name="hobbies[]" value="Traveling">Traveling
        <input type="checkbox" name="hobbies[]" value="Coding">Coding
        <input type="checkbox" name="hobbies[]" value="Sleeping">Sleeping <br>
        Address: <br><textarea name="address" placeholder="Enter your address"></textarea> <br>
        <input type="submit" name="submit" value="REGISTER">


    </form>
</body>
</html>