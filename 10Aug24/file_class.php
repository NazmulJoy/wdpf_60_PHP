<?php
    class File {
        public $fileinfo;
        public function __construct($x){
            $this->fileinfo = $x;
        }
        public function upload(){
            $info = ($this->fileinfo);
            $name = $info['name'];
            $tmpName = $info['tmp_name'];
            $filesize = $info['size'];
            $aSize = 512000;
            $aType = ["jpg", "png", "jfif"];
            $errors = array();

            $data = pathinfo($name);
            $ext = strtolower($data['extension']);
            if($filesize>$aSize){
                $errors[] = "File size must be within 500kb";  
            }
            if(!in_array($ext,$aType)){
                $errors[] = "File type must be jpg or png or jfif";
            }
            if(count($errors)>0){
                foreach($errors as $err){
                    echo $err . "<br>";
                } 
            }
            else { 
                if(move_uploaded_file($tmpName, "Uploads/" . $name)){
                    echo "Uploaded succesfully";
                } 
            }
            
            
        }
    }

?>