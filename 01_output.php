<?php
/* -------- Output & Comments ------- */

/*
  A .php file running on a server, can output both HTML and PHP code. 
  There are multiple functions that can be used to output data to the browser.
*/
// single line comment
// echo - output strings, numbers, html, etc

echo 'Hello World!';
echo '<br/>';
echo 123;
echo '<br/>';
echo '<h1> Welcome to PHP</h1>';

// print - Similar to echo, but slower
echo '<br/>';
print 'Hello Erick';
echo '<br/>';

// print_r - gives more info - usually for arrays
print_r("Hello");
echo '<br/>';
print_r([1, 2, 3]);

// var_dump - even more info compared to print_r
echo '<br/>';
var_dump('Hello');
echo '<br/>';

$names = "Erick Ouko";
var_dump($names);

// escaping chars using backslash
echo '<br/>';
echo 'What\'s up';

/*
Multiple line comments
are done
like this
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PhP inside Html</title>
</head>
<body>
  <p><?php echo 'This is php inside HTML5'; ?></p>

  <br>

  <?php 

  echo 5 + 8;
  echo 8/4;

   ?>
</body>
</html>