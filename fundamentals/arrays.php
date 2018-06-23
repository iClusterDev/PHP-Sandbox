<?php
  # types of arrays
  # → indexed
  # → associative
  # → multidimensional

  # indexed
  # → zero base index
  $people = array('aaa', 'bbb', 'ccc');
  $cars = ['111', '222', '333'];
  $cars[] = '444';
  $cars[count($cars) - 1] = '555';
  # echo $cars[count($cars) - 1];
  # print_r($cars);
  # var_dump($cars); → valid for any data types

  # associative 
  # → each element is a key value pair
  $ids1 = [22 => 'aaa', 33 => 'bbb', 44 => 'ccc'];
  $ids1[99] = 'ddd';
  # echo $ids1[99];
  # print_r($ids1);
  # var_dump($ids1);

  # multidimensional
  # → each element is another array
  $cars = array(
    array('Honda', 11, 12),
    array('Fiat', 22, 23),
    array('Toyota', 33, 34),
  );
  # echo $cars[0][1];
  # print_r($cars);
  # var_dump($cars);
?>