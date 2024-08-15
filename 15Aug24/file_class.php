<?php
    class File {
        public $fileinfo;

        public function __construct($x){
            $this->fileinfo = $x;
        }
        public function upload(){
            $info = $this->fileinfo;
            $name = $info['name'];
            $tmpName = $info['tmp_name'];
            $size = $info['size'];
            $asize = 400000;
            $atype = ["pdf", "jpg" , "png" , "jpeg"];
            $errors = [];

            $fullname = pathinfo($name);
            $ext = strtolower($fullname['extension']);

            
            if(!in_array($ext, $atype)){
                $errors[] = $ext ." is not allowed" ;
            }
            if($size>$asize){
                $errors[] = "File size must be within 400 kb" ;
            } 
            if(count($errors)>0){
                foreach($errors as $err){
                    echo "Error: ".$err . "<br>";
                }            
            } else {
                if(move_uploaded_file($tmpName, "Uploads/".$name)){
                    echo "Uploaded successfully";
                }

            }
        }
    }

?>