<?php 
  # sessions are a way to carry data across multiple pages
  # unlike cookies sessions are stored on the server (cookies on
  # the user's computer)

  # in order to work with session variables, on every page that you want to use that data
  # you have to start a session → session_start()

  # in general session_start is part of a config file included
  # at the top of each page

  # session_start()          → starts a session
  # $_SESSION['name']        → assign name to session
  # unset($_SESSION['name])  → unset name from session
  # session_destroy()        → destroys a session

  if (isset($_POST['submit'])) {
    session_start();

    $_SESSION['name'] = htmlentities($_POST['name']);
    $_SESSION['email'] = htmlentities($_POST['email']);

    # redirect in php
    header('Location: page2.php');
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Sessions</title>
</head>
<body>
  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
      <label for="name">Name</label>
      <input type="text" name="name">
    </div>
    <div>
      <label for="email">Email</label>
      <input type="email" name="email">
    </div>
    <button type="submit" name="submit">Submit</button>
  </form>
</body>
</html>