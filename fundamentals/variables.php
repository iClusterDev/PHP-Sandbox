<?php
  # echo → just prints text → no return values → faster
  # print → does the same thing but returns 1 so it can be used within an expression → less fast than echo
  # echo 'Hello World';
  # print 'Hello Print';

  # comments
  # → # a comment
  # → // another comment
  # → /* multiline comment */

  # variables
  # → prefix with $
  # → start with a letter or _
  # → only letters, numbers and _
  # → case sensitive
  $helloWorld = 'Hello World Variable';

  # data types
  # → strings
  # → integers
  # → floats
  # → booleans
  # → arrays
  # → null
  # → resource

  # operators
  # → all the arithmetic operators are valid
  $num1 = 10;
  $num2 = 30;
  $sum = $num1 + $num2;

  # string concatenation 
  # → is with a . not a +
  # → using the double quotes will parse the variables
  # → escape characters with \
  $string1 = 'Hello';
  $string2 = 'World';
  $greetings = $string1 . ' ' . $string2 . '!';  
  $whathever = "$string1 $string2";  
  $string3 = 'They\'re here';

  # constants
  # → are case sensitive
  # → you can make them case insensitive by passing an additional true
  define('GREETING', 'Hello Everyone');  
  define('GREETING_CI', 'Case Insensitive', true);

  echo GREETING_ci;
?>
