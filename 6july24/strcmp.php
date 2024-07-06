<?php
    $pswd = "Supersecret";
    $pswd2 = "supersecret";
    if (strcasecmp($pswd, $pswd2) != 0) {
    echo "Passwords do not match!";
    } else {
    echo "Passwords match!";
}
?>