<?php
    $date= "22 June 2024";
    $text= "Today is first class after eid";
    $website= "http://Prothomalo.com";
    $output= <<<SALAM
    <h4>$text</h4>
    <p>$date</p>
    We are excited. <br>
    our coming exam will be held on <a href="$website">this website</a>
    SALAM;

    echo $output;


?> 