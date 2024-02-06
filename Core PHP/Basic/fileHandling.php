<?php
echo "about file handling";
echo "<br/>";

//read, write file in the server
$file_path = './fruits.txt';
if (file_exists($file_path)) {
    echo readfile($file_path); //read byte of file
    echo "<br/>";

    //This code just reads the file
    //fgets() != fread(), fgets will read when \n ends, while fread will read the entire file
    $file_handle = fopen($file_path, 'r');
    $file_content = fread(
        $file_handle,
        filesize($file_path)
    );
    fclose($file_handle);
    echo $file_content;
    echo "<br/>";
} else {
    //not exist file
    $file_handle = fopen($file_path, 'w');

    // PHP_EOL makes a line break in local 
    //Tag <br> makes a line break in browser
    $file_content = 'banana' . PHP_EOL . 'apple' . PHP_EOL;
    fwrite($file_handle, $file_content);
    fclose($file_handle);
}
