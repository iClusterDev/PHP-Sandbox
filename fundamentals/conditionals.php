<?php
  # conditionals

  # → == does type coercion like javascript
  $num1 = '5';
  if ($num1 == 5) {
    echo '5 passed';
    echo '<br>';
  }
  else {
    echo 'not passed';
    echo '<br>';
  }

  # → === identical - same type and value
  $num2 = '5';
  if ($num2 === 5) {
    echo '5 passed';
    echo '<br>';
  }
  else {
    echo 'not passed';
    echo '<br>';
  }

  # → else if blocks
  $num2 = '10';
  if ($num2 === 10) {
    echo '10 passed';
    echo '<br>';
  }
  else if ($num2 >= 15) {
    echo 'else if passed';
    echo '<br>';
  }
  else {
    echo 'not passed';
    echo '<br>';
  }

  # → all the other operators are valid
  # → can nest if statements
  # → logical operators: &&, ||, xor (exclusive or: True if either $x or $y is true, but not both)

  # switch
  $favColor = 'yellow';
  switch($favColor) {
    case 'red': 
      echo 'is red';
      break;
    case 'blue': 
      echo 'is blue';
      break;
    case 'green': 
      echo 'is green';
      break;
    default: 
      echo 'None of them';
  }
?>