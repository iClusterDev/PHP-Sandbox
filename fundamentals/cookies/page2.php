<?php 

  setcookie('userName', 'Frank', time()+(86400*30));

  setcookie('userName', 'Frank', time()-3600);

  if (isset($_COOKIE['userName'])) {
    echo 'User ' . $_COOKIE['userName'] . ' is Set';
  }
  else {
    echo 'User is not Set';
  }
?>