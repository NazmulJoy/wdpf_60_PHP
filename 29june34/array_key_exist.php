<?php
    $states = array("Ohio"=>10, "New York"=>20, "California"=>30, "Texas"=>40);

    if(array_key_exists("New York", $states)) {
        echo "New york is at ranking of {$states['New York']}";
    }


?>