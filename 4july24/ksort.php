<?php
    $states = array("Ohio"=>10, "New York"=>20, "California"=>30, "Texas"=>40);
    ksort($states);

    echo "<pre>";
    print_r($states);

?>