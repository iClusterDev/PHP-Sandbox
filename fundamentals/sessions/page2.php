<?php
  session_start();
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
  <h5>Thank you <?php echo isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest'; ?></h5>
  <p>You are registered with the email: <?php echo $_SESSION['email']; ?></p>
  <a href="page3.php">Page3</a>
</body>
</html>