<?php
    $data = array(
        "Abdullah"=>"cumilla",
        "Rakib"=>"Narayanganj",
        "Nusrat"=>"Khulna",
        "Abir"=>"Savar",
        "Mahmudul"=>"Barishal"
    );
    echo "<pre>";
    print_r($data);
    ksort($data);
    foreach ($data as $student=>$district){
        echo " $student: $district <br>" ;
    }

?>