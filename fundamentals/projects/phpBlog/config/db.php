<?php

  // require 'C:\xampp\htdocs\phpsandbox\projects\phpBlog\config\config.php';

  // connect to db (mysqli)
  $connection = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_NAME);

  // check connection
  if (mysqli_connect_errno()) {
    echo 'Failed to Connect to MySql: ' . mysqli_connect_errno();
  }