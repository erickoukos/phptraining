<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/
$age = 16;
$has_id = false;

if ($age >= 18 && $has_id){
  echo 'You are old enough to drive';
} elseif($age >= 18 && !$has_id){
  echo 'Visit the persons registrar office for a national ID Immediately!';
} elseif($age < 18 && $has_id){
  echo 'Call 911 Immediately!!!';
}
else {
  echo 'Kaa na mama yako!!';
}

// Dates
$today = date("F j, Y, g:i a");
echo '<br>';
echo $today;
echo '<br>';
echo '<br>';

$time_of_the_day = date('H');
$your_name = 'Erick';
if ($time_of_the_day < 12){
  echo 'Good morning ' . $your_name . 'have a blessed day!';
}elseif($time_of_the_day > 12 && $time_of_the_day < 17){
  echo 'Good afternoon ' . $your_name . ' have a wonderful afternoon!';
}else{
  echo "Have a good evening and night ${your_name}";
}

echo '<br>';
echo '<br>';

/*Checking if a variable is empty */
// The isset() function will generate a warning or an e-notice when the variable foes not exist. The empty() function will not generate any warning or e-notice when the variable does not exist.

$posts = [];
$posts[1] = 'Second Post is Here';
$statuses = [];

if (!empty($posts[0])){
  echo $posts[0];
}else{
  echo "Hakuna kitu!";
}

echo '<br>';
echo '<br>';

if(isset($statuses)){
  echo $statuses[0];
}else{
  echo 'Meme Lord amelala!';
}

/*TERNARY OPERATOR */
echo '<br>';
echo '<br>';

$first_post = !empty($posts[0]) ? $posts[0] : 'Wah! Hakuna kitu!';
echo $first_post;

echo '<br>';
echo '<br>';

$second_post = !empty($posts[1]) ?? null;

// Coalescing operator ?? in php 7.4
echo $second_post;

echo '<br>';
echo '<br>';

/*SWITCH STATEMENTS */

$fav_color = 'Yellow';

switch ($fav_color){
  case 'Yellow':
    echo 'Your favorite color is ' . $fav_color;
    break;
  case 'Blue':
    echo 'Your favorite color is Blue!';
    break;
  case 'Green':
    echo 'Your favorite color is Green!';
    break;
  default:
  echo 'Your favorite color is none of RGBs';
}
