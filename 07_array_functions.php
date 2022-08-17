<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$fruits = ['apple', 'oranges', 'pears'];

// Get array length
// echo count($fruits);

// Search array
// var_dump(in_array('apple', $fruits));


// Add to an array
$fruits[] = 'grapes';
// print_r($fruits);

array_push($fruits, 'bananas', 'blueberries', 'guavas');
// print_r($fruits);

// Adds to the beginning
array_unshift($fruits, 'mangoes');
// var_dump($fruits);
// Remove from array

 array_pop($fruits);// Removes last

//  var_dump($fruits);
 array_shift($fruits);// Removes first
//  var_dump($fruits);

// Remove specific element
// unset($fruits[1]);
// print_r($fruits);

// Split into chunks of 2
$chunked_array = array_chunk($fruits, 2);
print_r($chunked_array);

// Concatenate arrays


// Combine arrays (Keys & values)


// Array of keys


// Flip keys with values


// Create array of numbers with range()


// Map through array and create a new one


// Filter array


// Array Reduce
// "carry" holds the return value of the previous iteration

