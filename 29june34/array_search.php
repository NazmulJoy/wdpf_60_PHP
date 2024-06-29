<?php
    $states = array("Ohio"=>10, "New York"=>20, "California"=>30, "Texas"=>40);
    $result = array_search("10", $states);
    if($result) {
        echo "Found {$result} and its rank is  $states[$result]";
    } else {
        echo "Not found";
    }


?>