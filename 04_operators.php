<?php
/*
< Less than
> Greater than
<= Less than or equal to
>= Greater than or equal to
== Equal to
=== Type Comparable and Equal to
!= Not equal to
!== Not Type Comparable and Equal to
*/

$age = 17;

// If, Else, Else If statements
// if ($age >= 18) {
//     echo "You are old enough to vote";
// } else {
//     echo "Sorry, you are not old enough to vote";
// }

$hour_of_day = date("H");

// if($hour_of_day < 12){
//     echo "Good Morning";    
// }
// elseif($hour_of_day < 17){
//     echo "Good Afternoon";
// }
// else {
//     echo "Good Evening";
// }

// switch statement can be in place of multiple else if statements

$today = date("D");

// switch ($today) {
//     case "Mon":
//         echo "It is Monday";
//         break;
//     case "Tue":
//         echo "It is Tuesday";
//         break;
//     case "Wed":
//         echo "It is Wednesday";
//         break;
//     case "Thu":
//         echo "It is Thursday";
//         break;
//     case "Fri":
//         echo "It is Friday";
//         break;
//     case "Sat":
//         echo "It is Saturday";
//         break;
//     case "Sun":
//         echo "It is Sunday";
//         break;
//     default:
//         echo "Apparently this is a day that does not exist!";
// }

$posts = ["First Post"];

// if (!empty($posts)) {
//     echo $posts[0];
// } else {
//     echo "No Posts";
// }

// Ternary operator can be used for a one line version of the if else statement
// echo !empty($posts) ? $posts[0] : "No Posts";

// Coalescence operator can be used to see if the expression is null if so select value after ??
$firstPost = $posts[0] ?? null;
// echo $firstPost;
