<?php
    // // Open a text file for reading purposes
    // $fh = fopen('files/User.txt', 'r');
    // // While the end-of-file hasn't been reached, retrieve the next line
    // while (!feof($fh)) echo fgets($fh). "<br>";
    // // Close the file
    // // fclose($fh);

?>

<?php
    
    $fh = fopen('files/User.txt', 'a');
    fwrite($fh,"<br> Hello Alien");
    fclose($fh);
    $fh = fopen('files/User.txt', 'r');
    while (!feof($fh)) echo fgets($fh). "<br>";
    // Close the file
    fclose($fh);
    unlink("files/user2.txt");

?>