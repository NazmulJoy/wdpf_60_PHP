<?php
    class File{
        public $filename;

        public function __construct($x){
            $this->filename = $x;
        }
        public function upload(){
            $info = $this->filename;
            $name = $info['name'];
            $size = $info['size'];
            $tmpName = $info['tmp_name'];
            $asize = 400000;
            $atype = ["jpg","png","gif","jfif"];
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
                    echo $err."<br>";
                }
            } else {
                if(move_uploaded_file($tmpName,"Uploads/".$name)){
                    echo "Uploaded successfully";
                }
            }
        }
    }


?>