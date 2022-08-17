<?php
/* ----------- Arrrays ----------- */

/*
  If you need to store multiple values, you can use arrays. Arrays hold "elements"
*/
// Simple array of strings
$colors = ['red', 'green', 'blue'];
echo '<br>';
echo $colors[0];
echo '<br>';
var_dump($colors);

// Simple array of numbers

$numbers = [1, 25, 46, 8, 9, 7];
echo "<br>";
var_dump($numbers);
echo "<br>";
echo $numbers[5];

$fruits = array('Mangoes', 'Oranges', 'Bananas');

echo "<br>";
echo "<br>";

var_export($fruits);

echo "<br>";
echo "<br>";

print_r($fruits);

/*ASSOSCIATIVE ARRAYS */

$new_colors =[
  5 => 'cyan',
  17 => 'magenta',
  4 => 'yellow',
  9 => 'black'
];

$new_streams =[
  'form_one' => 'cyan',
  'form_two' => 'magenta',
  'form_three' => 'yellow',
  'form_four' => 'black'
];

$new_numbers = array(12, 56, 7, 8, 10);

echo "<br>";
$result_adds = $numbers[2] + $new_numbers[3];
echo $result_adds;

/* Multidimensional Arrays - store dat in a table format */

// single person

$person = [
  'first_name' => 'John',
  'middle_name' => 'Doe',
  'email' => 'johndoe@gmail.com',
  'age' => 18
];

$person2 = [
  'first_name' => 'Jane',
  'middle_name' => 'Doe',
  'email' => 'janedoe@gmail.com',
  'age' => 16
];

// Array of people

echo '<br>';
echo '<br>';
$people = [
  $person = [
    'first_name' => 'John',
    'middle_name' => 'Doe',
    'email' => 'johndoe@gmail.com',
    'age' => 18
  ],
  $person2 = [
    'first_name' => 'Jane',
    'middle_name' => 'Doe',
    'email' => 'janedoe@gmail.com',
    'age' => 16
  ]
];
// var_dump($people);

echo $people[0] ['first_name'];
echo "<br>";
echo $people[1] ['email'];

echo "<br>";
echo "<br>";

/*ENCODE TO JSON */

var_dump(json_encode($people));

/*JSON DECODE */
echo "<br>";
echo "<br>";
$jsonob = '{"first_name":"John","middle_name":"Doe","email":"johndoe@gmail.com","age":18}';

var_dump(json_decode($jsonob));

