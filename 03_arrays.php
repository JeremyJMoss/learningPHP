<?php
// Simple Array
$numbers = [1, 44, 55, 22];
$fruits = array("apple", "orange", "pear");

// Associative Array
// Implemented with a hash table under the hood; mapping keys to values
$colors = [
    1 => "red",
    4 => "blue",
    6 => "green"
];

// echo $colors[4];


$hex = [
    "red" => "#f00",
    "blue" => "#0f0",
    "green" => "#00f"
];

//echo $hex["red"]

$person = [
    "first_name" => "Vincent",
    "last_name" => "Van Gogh",
    "email" => "email@example.com"
];

// echo $person["first_name"];

// Multi-Dimensional Array
$people = [
    $person,
    $hex,
    $colors
];

// print_r($people);
