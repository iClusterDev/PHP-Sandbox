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

  $post = null;
  if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($connection, $_GET['id']);
    $query = 'SELECT * FROM posts WHERE id='.$id;
    if (mysqli_query($connection, $query)) {
      $result = mysqli_query($connection, $query);
      $post = mysqli_fetch_assoc($result);
      mysqli_free_result($result);
    }
  }
  

  $message = null;
  if (isset($_POST['submit'])) {
  
    $id     = mysqli_real_escape_string($connection, trim($_POST['update_id']));
    $title  = mysqli_real_escape_string($connection, trim($_POST['title']));
    $author = mysqli_real_escape_string($connection, trim($_POST['author']));
    $body   = mysqli_real_escape_string($connection, trim($_POST['body']));

    if (!empty($title) && !empty($author) && !empty($body)) {

      // this query inserts the edited data into database
      $query = "UPDATE posts SET 
                  body   ='$body',
                  author ='$author',
                  body   ='$body'
                WHERE id = {$id}";
      // this is to check that data is inserted ok
      if (mysqli_query($connection, $query)) {
        header('Location: '.ROOT_URL.'/');
      }
      else {
        $message = flashMessage('error', mysqli_error($connection));
      }      
    }
    else {
      $post['title']  = $title;
      $post['author'] = $author;
      $post['body']   = $body;
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
    <h1 class="display-4 text-info mt-4">Edit Post</h1>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" value="<?php echo (isset($post['title'])) ? $post['title'] : ''; ?>">
      </div>
      <div class="form-group">
        <label for="author">Author</label>
        <input type="text" class="form-control" name="author" value="<?php echo (isset($post['author'])) ? $post['author'] : ''; ?>">
      </div>
      <div class="form-group">
        <label for="body">Body</label>
        <textarea name="body" id="" cols="30" rows="10" class="form-control"><?php echo (isset($post['body'])) ? $post['body'] : ''; ?></textarea>
      </div>
      <input type="hidden" name="update_id" value="<?php echo (isset($post['id'])) ? $post['id'] : ''; ?>">
      <button class="btn btn-info" name="submit">Edit</button>
    </form>
  </div>
</body>
</html>