<?php
    function directorySize($directory)
    {
        $directorySize = 0;
        // Open the directory and read its contents.
        $iterator = new DirectoryIterator($directory);
        foreach ($iterator as $fileinfo) {
            if ($fileinfo->isFile()) {
                $directorySize += $fileinfo->getSize();
            }
            if ($fileinfo->isDir() && !$fileinfo->isDot()) {
                $directorySize += directorySize($directory . '/' . $fileinfo->getFilename());
            }
        }
        return $directorySize;
    }
    $directory = 'E:\xampp74\htdocs\wdpf_60_PHP\7july24';
    $totalSize = round((directorySize($directory) / 1024), 2);
    printf("Directory %s: %f KB", $directory, $totalSize);
?>
