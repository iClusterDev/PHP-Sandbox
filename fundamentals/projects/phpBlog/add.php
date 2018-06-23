<?php

  // configuration file
  require 'C:\xampp\htdocs\phpsandbox\projects\phpBlog\config\config.php';

  // connect to database
  require 'C:\xampp\htdocs\phpsandbox\projects\phpBlog\config\db.php';


  function flashMessage($type = null, $message = null) {
    return array(
      'type' => $type,
      'msg'  => $message
    );
  }

  $message = null;  

  if (isset($_POST['submit'])) {

  
    $title   = mysqli_real_escape_string($connection, trim($_POST['title']));
    $author  = mysqli_real_escape_string($connection, trim($_POST['author']));
    $body    = mysqli_real_escape_string($connection, trim($_POST['body']));

    if (!empty($title) && !empty($author) && !empty($body)) {

      // this query inserts data into database
      $query = "INSERT INTO posts(title, author, body) VALUES('$title', '$author', '$body')";
      // this is to check that data is inserted ok
      if (mysqli_query($connection, $query)) {
        header('Location: '.ROOT_URL.'/');
      }
      else {
        $message = flashMessage('error', mysqli_error($connection));
      }      
    }
    else {
      $message = flashMessage('error', 'Please fill in all the fields');
    }
     
  }

?>

<!DOCTYPE html>
<html lang="en">
<?php include 'C:\xampp\htdocs\phpsandbox\projects\phpBlog\inc\head.php'; ?>
<body>

  <?php include 'C:\xampp\htdocs\phpsandbox\projects\phpBlog\inc\navbar.php'; ?>

  <div class="container">
    <!-- messages -->
    <?php include 'C:\xampp\htdocs\phpsandbox\projects\phpBlog\inc\message.php'; ?>    

    <!-- add post form -->
    <h1 class="display-4 text-info mt-4">Add Post</h1>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title">
      </div>
      <div class="form-group">
        <label for="author">Author</label>
        <input type="text" class="form-control" name="author">
      </div>
      <div class="form-group">
        <label for="body">Body</label>
        <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
      </div>
      <button class="btn btn-info" name="submit">Submit</button>
    </form>
  </div>
</body>
</html>
