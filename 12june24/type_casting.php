<?php
    $score = (double) 13; // $score = 13.0
    var_dump($score);
    echo gettype($score);

    echo"<br>";
    $score1 = (int) 14.8; // $score = 14
    var_dump($score1);
    echo gettype($score1);
    echo"<br>";

    $sentence = (int) "This is a sentence";
    var_dump($sentence); // returns 0
    echo gettype($sentence);

    echo"<br>";
    $sentence1 = "This is a sentence";
    echo (int) $sentence1; // returns 0
    echo gettype($sentence1);

    echo"<br>";
    $score2 = 1114;
    $scoreboard = (array) $score2;
    echo $scoreboard[0]; // Outputs 1114
    echo gettype($scoreboard);

    echo"<br>";
        $model = "Toyota";
    $obj = (object) $model;
    print_r($obj);
    print $obj->scalar; // returns "Toyota"
    echo"<br>";
    echo gettype($obj);

?>