<?php
  # loops

  # types of loops
  # → for loops
  # → whils
  # → do while
  # → foreach
  
  # for loops
  for ($i = 0; $i < 10; $i++) {
    echo 'Index ' . $i;
    echo '<br>';
  }

  # while loops
  $i = 0;
  while ($i < 10) {
    echo 'Index ' . $i;
    echo '<br>';
    $i++;
  }

  # do while
  # → ecexuted at least once
  $i = 0;
  do {
    echo 'Index ' . $i;
    echo '<br>';
    $i++;
  } while ($i < 5);

  # foreach
  # → used with arrays
  $myArray = ['111', '222', '333', '444'];
  foreach ($myArray as $element) {
    echo $element;
    echo '<br>';
  }

  $people = array(
    'Fab' => 'fab@gmail.com',
    'Car' => 'car@gmail.com',
    'Ste' => 'ste@gmail.com',
  );
  foreach ($people as $person => $email) {
    echo $person.': '.$email;
    echo '<br>';
  }
?>