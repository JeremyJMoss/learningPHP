<?php

$fruits = ["apple", "orange", "mango", "blueberries"];

//Get length

// echo count($fruits);

// Search array

// var_dump(in_array("apple", $fruits));

// Add to array
// $fruits[] = "grape";
// array_push($fruits, "strawberries");
// array_unshift($fruits, "peach");


// print_r($fruits);

// Remove from array
// array_pop($fruits);
// array_shift($fruits);
// unset($fruits[2]);

// print_r($fruits);

// Split into chunks
// $chunked_array = array_chunk($fruits, 3);

// print_r($chunked_array);

// $arr1 = [1, 2, 3];
// $arr2 = [4, 5, 6];

// $arr3 = array_merge($arr1, $arr2);

// print_r($arr3);

// $arr4 = [...$arr1, ...$arr2];

// print_r($arr4);

$colors = ["green", "red", "yellow"];
$vegetables = ["beans", "tomato", "squash"];

$defined_veges = array_combine($colors, $vegetables);

// print_r($defined_veges);

$keys = array_keys($defined_veges);
$values = array_values($defined_veges);

// print_r($values);

$numbers = range(1, 20);

// print_r($numbers);

$new_numbers = array_map(function ($number) {
    return $number * 2;
}, $numbers);


// print_r($newNumbers);

$less_than_10 = array_filter($new_numbers, function ($number) {
    return $number > 20;
});

// print_r($less_than_10);

$sum = array_reduce($new_numbers, fn ($carry, $number) => $carry + $number);

print_r($sum);
