<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers 5.2
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ ) 
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = 'John Smith';
echo $name;
echo '<br>';

$has_children = false;
var_dump($has_children);
echo $has_children;
echo '<br>';

$age = 25;
echo $age;
echo '<br>';

$my_height = 186.9;
var_dump($my_height);

// Adding Strings to variables

// Using Double Quotes

echo '<br>';
echo "My name is $name and my age is $age with a height of $my_height cm.";
echo '<br>';
// Always do it this way
echo "My name is {$name} and my age is {$age} with a height of {$my_height} cm.";

echo '<br>';
echo '<br>';

// Concatenate incase of single quotes using . 
echo 'My name is ' . $name . 'and my age is ' . $age . 'with a height of ' . $my_height . 'cm.';

// Arithmetic operators + - / * %
echo '<br>';
echo 5 + 5; // 10
echo '<br>';
echo 10 - 6; // 4
echo '<br>';
echo 8 * 5; //40
echo '<br>';
echo 10 / 2; // 5
echo '<br>';
echo 7 % 2; // 1

// Constants - cannot be changed.

define('HOST', 'localhost');
define('USER', 'root');

echo '<br>';

var_dump(HOST);
echo '<br>';

var_dump(USER);