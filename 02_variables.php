<?php
/* ----- Data Types ----- */
/*
- String : Series of characters surrounded by quotes
- Integer : Whole numbers
- Float : Decimal numbers
- Boolean : true or false
- Array : Specialty variable, which can hold more than one value
- Object : an instance of a class
- NULL : Empty variable
- Resource : specialty variable, this holds a resource
*/

/* ----- Variable Rules ----- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- Variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _)
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = "Paulo";;
$age = 35;
$has_Kids = true;
$cash_on_hand = 20.12;

// . used for concatenation
// echo $name . ' is ' . $age . ' years old!';

// double quotes used for string interpolation
// echo "$name is $age years old";

// adding two strings that are numbers will not concatenate it will convert them to numbers then add them together
// echo "5" + "5";

// defining constants uses the define() function
// define("HOST", "localhost");
// print HOST;
