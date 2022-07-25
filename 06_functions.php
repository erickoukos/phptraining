<?php
/* ------------ Functions ----------- */

/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }

  - Functions have their own local scope as opposed to global scope
*/
function register_user()
{
  echo "<h4> User has been registered!</h4>";
}
// Running/Calling/Invoking a function
register_user();

echo "<br>";
// Adding args
function multiply($num1, $num2)
{
  // Returning values
  return $num1 * $num2;
}
// corresponding params 
// Pass in params
echo multiply(12, 10);

// Adding default values
echo "<br>";
function modulos($b = 10, $c = 3){
  return $b % $c;
}
echo modulos();

echo "<br>";
echo sqrt(16);

// Assigning anonymous functions to variables. Often used for closures and callback functions
echo "<br>";
$var = function ($x) {
  return pow($x, 3);
};
echo "cube of 3 = " . $var(3);

echo "<br>";

$greeting = function ($jina){
  echo "Hello $jina";
};

$greeting('Erick');

echo "<br>";
// Arrow Functions
$subtract = fn($n, $m) => $n + $m;
echo $subtract(8, 5);