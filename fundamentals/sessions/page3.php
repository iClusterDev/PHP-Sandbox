<?php
  session_start();
  print_r($_SESSION);
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
  <h2>Hello <?php echo isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest'; ?></h2>
  <a href="page4.php">Page4</a>
</body>
</html>