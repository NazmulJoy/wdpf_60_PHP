<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Form</title>
</head>
<body>
    <?php 
    if(isset($_POST["submit"])){

        // Retrieve file details
        $temp = $_FILES["homework"]["tmp_name"];
        $filename = $_FILES["homework"]["name"];
        $filedata = strtolower(pathinfo($filename, PATHINFO_EXTENSION));  // Get file extension and convert to lowercase
        $allowedext = ["jpg", "gif", "jpeg"];  // Allowed file extensions
        $filesize = $_FILES["homework"]["size"];
        $allowedsize = 307200;  // Maximum allowed file size (300KB)
        $path = "hw/" . $filename;  // Destination path for uploaded file
        $errors = [];

        // Check file size
        if($filesize > $allowedsize){
            $errors[] = "File size must be less than 300KB";
        }

        // Check file extension
        if(!in_array($filedata, $allowedext)){
            $errors[] = $filedata . " format not allowed";
        }

        // Display errors or move uploaded file
        if(count($errors) > 0){
            foreach($errors as $err){
                echo $err . "<br>";
            }
        } else {
            $status = move_uploaded_file($temp, $path);
            if($status){
                echo "Successfully Uploaded";
            } else {
                echo "File upload failed";
            }
        }
    }
    ?>

    <!-- HTML Form -->
    <form action="" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label><br>
        <input type="text" name="name" value=""><br>
        <label for="email">Email:</label><br>
        <input type="text" name="email" value=""><br>
        <label for="homework">Class notes:</label>
        <input type="file" name="homework" value=""><br>
        <input type="submit" name="submit" value="Submit Homework">
    </form>
</body>
</html>




