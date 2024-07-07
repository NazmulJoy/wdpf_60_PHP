<?php
    $file = 'files/User.txt';
    printf("File inode last changed: %s", date("m-d-y g:i:sa",
    filectime($file)). "<br>");
    printf("File inode last accessed: %s", date("m-d-y g:i:sa",
    fileatime($file)). "<br>");
    printf("File inode last modified: %s", date("m-d-y g:i:sa",
    filemtime($file)). "<br>");