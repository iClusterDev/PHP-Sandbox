<?php
  # isset → checks if $_GET has a property
  # htmlentities → strip off the html tags (escapes the input)
  #              → use always for security
  $user = [];
  # get request
  if (isset($_GET['name']) && ($_GET['email'])) {
    $user['name'] =  htmlentities($_GET['name']);
    $user['email'] = htmlentities($_GET['email']);
    print_r($user);
    echo '<br>';
    echo ($_SERVER['QUERY_STRING']);
  }

  # post request
  if (isset($_POST['name']) && ($_POST['email'])) {
    $user['name'] =  htmlentities($_POST['name']);
    $user['email'] = htmlentities($_POST['email']);
    print_r($user);
    echo '<br>';
    echo ($_SERVER['QUERY_STRING']);
  }

  # get or post requests
  if (isset($_REQUEST['name']) && ($_REQUEST['email'])) {
    $user['name'] =  htmlentities($_REQUEST['name']);
    $user['email'] = htmlentities($_REQUEST['email']);
    print_r($user);
    echo '<br>';
    echo ($_SERVER['QUERY_STRING']);
  }
?>