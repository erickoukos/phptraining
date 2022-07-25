<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/
echo '#######FOR LOOPS####### <br>';
for ($x = 0; $x <= 10; $x++) {
  echo "Number: $x <br>";
}


/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/
echo '#######WHILE LOOPS####### <br>';

$y = 1;
while ($y <= 5) {
  echo "Number: $y <br>";
  $y++;
}



/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/
echo '#######DO ... WHILE LOOPS####### <br>';

$a = 1;
do {
  // code to be executed
  echo "Number: $a <br>";
  $a++;
} while ($a <= 10);



/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

// Loop through an array

echo '#######FOREACH LOOPS####### <br>';

$fruits = ['Mangoes', 'Bananas', 'Oranges', 'Berries', 'Apples'];

foreach ($fruits as $fruit){
  echo "Fruits: $fruit <br>";
}


// Use the indexes within the loop

echo '###AS INDEX### <br>';

$posts = ['Post One', 'Post Two', 'Post Three'];

foreach ($posts as $post){
  echo "${index} * ${post} <br>";
}


// Use the keys within the loop for an associative array

$person = [
  'first_name' => 'Joe',
  'last_name' => 'Kennedy',
  'email' => 'kennedyjoe@gmail.com'
];

// Get the Keys
foreach($person as $key => $val){
  echo "${key} - ${$val} <br>";
}