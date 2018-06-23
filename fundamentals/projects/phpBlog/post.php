<?php

  // configuration file
  require 'C:\xampp\htdocs\phpsandbox\projects\phpBlog\config\config.php';

  // connect to database
  require 'C:\xampp\htdocs\phpsandbox\projects\phpBlog\config\db.php';

  // delete post
  if (isset($_POST['delete'])) {  
    $id = mysqli_real_escape_string($connection, trim($_POST['delete_id']));

    $query = "DELETE FROM posts WHERE id = {$id}";

    if (mysqli_query($connection, $query)) {
      header('Location: '.ROOT_URL.'/');
    }
    else {
      $message = flashMessage('error', mysqli_error($connection));
    }    
  }

  // stores the id from the GET request into variable
  $id = mysqli_real_escape_string($connection, $_GET['id']);

  // fetch a single entry by id
  // create a query to select by id
  // is using the id variable to look for that id
  $query = 'SELECT * FROM posts WHERE id=' . $id;

  // create the result variable
  $result = mysqli_query($connection, $query);

  // fetch data from result into an associative array
  // note mysqli_fetch_assoc()
  $post = mysqli_fetch_assoc($result);

  // free the result variable
  mysqli_free_result($result);

  // close the connection
  mysqli_close($connection);

?>

<!DOCTYPE html>
<html lang="en">
<?php include 'C:\xampp\htdocs\phpsandbox\projects\phpBlog\inc\head.php'; ?>
<body>

  <?php include 'C:\xampp\htdocs\phpsandbox\projects\phpBlog\inc\navbar.php'; ?>

  <div class="container">
  
    <h1 class="display-4 text-info mt-4"><?php echo $post['title']; ?></h1>
    <small class="text-muted">Created on: <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
    <div class="card mt-4">
      <div class="card-body">
        <?php echo $post['body']; ?>
      </div>
    </div>
    <hr>
    <div class="d-flex align-items-center justify-content-between">
      <a class="btn btn-info" href="<?php echo ROOT_URL.'edit.php?id='.$post['id']?>">Edit Post</a>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="hidden" name="delete_id" value="<?php echo (isset($post['id'])) ? $post['id'] : ''; ?>">
        <button type="submit" class="btn btn-danger" name="delete">Delete Post</button>
      </form>
    </div>
    
  </div>
</body>
</html>
