<?php

/* ---------- File Handling ---------- */

/* 
File Handling is the ability to read and write files on the server.
PHP has built in functions for reading and writing files.
*/

$file = "extras/users.txt";

if (file_exists($file)) {
    $handle = fopen($file, 'r');
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
} else {
    $handle = fopen($file, 'w');
    $contents = 'Aaron' . PHP_EOL . 'Michael' . PHP_EOL . 'Ryan';
    fwrite($handle, $contents);
    fclose($handle);
}
