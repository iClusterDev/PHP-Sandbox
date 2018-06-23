<?php 
  # sessions are stored on the sever
  # cookies are stored on the client
  # use SESSIONS over cookies
  # setcookie(cookieName, cookieValue, expiration) → sets a new cookie
  # setcookie() → recall this to edit a cookie
  # setcookie() → with an expired time to unset it

  # if want to store an array
  # → create array
  # → serialize(array)
  # → setcookie() passing the serialized array
  
  # if want to retrieve data from a cookie array
  # → unserialize(cookie)
  if (isset($_POST['submit'])) {
    $userName = $_POST['name'];

    # expires in 1 hour
    setcookie('userName', $userName, time()+3600);

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