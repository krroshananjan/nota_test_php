<?php

/**
 * PHP script to find and display files in a directory based on specified criteria.
 *
 * This script searches for files in the given directory that have names consisting of letters (both uppercase and lowercase) and numbers, followed by the .ixt extension. It then displays the names of these files, sorted by name.
 *
 * @author Roshan Kumar
 */
$directory = '/datafiles';
$pattern = '/^[a-zA-Z0-9]+\.ixt$/';

if (is_dir($directory)) {
    $files = scandir($directory);
    
    if ($files !== false) {
        $filteredFiles = preg_grep($pattern, $files);
        sort($filteredFiles, SORT_NATURAL);
        
        foreach ($filteredFiles as $file) {
            echo $file . PHP_EOL;
        }
    } else {
        echo "Error reading the directory.";
    }
} else {
    echo "Directory not found.";
}
?>
