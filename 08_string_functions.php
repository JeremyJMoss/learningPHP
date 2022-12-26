<?php

$string = "Hello World";

//Get the length of a string
echo strlen($string);

//Find the position of the first occurrence of a substring within a string
echo strpos($string, "o");

//Find the position of the last occurrence of a substring within a string
echo strrpos($string, "o");

//Reverse a string
echo strrev($string);

// Convert all characters to lowercase
echo strtolower($string);

// Convert all characters to uppercase
echo strtoupper($string);

// Uppercase the first character of each word
echo ucwords($string);

// Replace a substring within a string
echo str_replace("World", "Everyone", $string);

// Return a portion of a string specified by the offset and the length
echo substr($string, 0, 5);
echo substr($string, 5);

// Starts with
if (str_starts_with($string, "Hello")) {
    echo "YES";
}

// Ends with
if (str_ends_with($string, "ld")) {
    echo "YES";
}

// prevents cross site scripting attacks
$string2 = "<script>alert(1)</script>";
echo htmlspecialchars($string2);

// printf() allows for use of format specifiers to prevent cross site scripting
printf("%s likes to %s", "Michael", "code");
