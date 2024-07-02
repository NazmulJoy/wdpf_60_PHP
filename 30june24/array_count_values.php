<?php
    $states = ["Ohio", "Iowa", "Arizona", "Iowa", "Ohio"];
    $stateFrequency = array_count_values($states);
    echo "<pre>";
    print_r($stateFrequency);

?>