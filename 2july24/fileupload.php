<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(isset($_POST["submit"])){

    $temp = $_FILES["homework"]["tmp_name"];
     $filename = $_FILES["homework"]["name"];
     $filedata = pathinfo($filename, PATHINFO_EXTENSION);
     strtolower($filedata);
     $allowedext = ["jpg", "gif", "jpeg"];
     $filesize = $_FILES["homework"]["size"];
     $allowedsize = 307200;
    $path = "hw/". $filename;
    $errors = [];
    if($filesize>$allowedsize){
        $errors[] = "File size must be less than 300Kb";
    } if(!in_array($filedata,$allowedext)){
        $errors[] = $filedata." format not allowed";
    } 
    
    
    if(count($errors)>0){
        foreach($errors as $err){
            echo $err. "<br>";
        }
    } else {
        $status = move_uploaded_file( $temp, $path );
        if($status){
            echo "Successfully Uploaded";
        }
    }
     
    }
    
    
    ?>
<form action="" method="post" enctype="multipart/form-data">
    
    <label form="name">Name:</label><br>
    <input type="text" name="name" value=""><br>
    <label form="email">Email:</label><br>
    <input type="text" name="email" value=""><br>
    <label form="homework">Class notes:</label>
    <input type="file" name="homework" value=""><br>
    <input type="submit" name="submit" value="Submit Homework">
    </form>
</body>
</html>



