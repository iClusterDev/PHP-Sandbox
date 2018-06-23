<?php 
  $user = array(
    'name' => 'Fabs',
    'age' => '38'
  );

  $user = serialize($user);

  setcookie('user', $user, time()+3600);

  $user = unserialize($_COOKIE['user']);

  var_dump($user);