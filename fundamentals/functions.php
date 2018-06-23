<?php
  # functions
  # parameter less
  function simple() {
    echo 'Hello';
    echo '<br>';
  }
  simple();

  # passing parameters
  # → in this case a default parameter is defined
  function sayWhat($what = 'Whathever') {
    echo $what;
    echo '<br>';
  }
  sayWhat('wtf');
  sayWhat();

  # returning values
  function add($num1 = 0, $num2 = 0) {
    return $num1 + $num2;
  }
  $sum = add(10, 20);
  echo $sum;
  echo '<br>';

  # passing by value
  # → all the primitives are passed by value
  $number = 10;
  function addFive($num) {
    $num += 5;
  }
  addFive($number);
  echo $number;
  echo '<br>';

  # passing by reference
  # → like c++ uses & operator
  function addTen(&$num) {
    $num += 10;
  }
  addTen($number);
  echo $number;
  echo '<br>';
?>