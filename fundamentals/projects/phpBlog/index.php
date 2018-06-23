<?php

  // configuration file
  require 'C:\xampp\htdocs\phpsandbox\projects\phpBlog\config\config.php';

  // connect to database
  require 'C:\xampp\htdocs\phpsandbox\projects\phpBlog\config\db.php';

  // fetch all data
  // create a query to select all
  $query = 'SELECT * FROM posts ORDER BY created_at DESC';

  // create the result variable
  $result = mysqli_query($connection, $query);

  // fetch data from result into an associative array
  $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
    <h1 class="display-4 text-info mt-4">Posts</h1>
    <?php foreach($posts as $post): ?>
      <div class="card mt-4">
        <div class="card-header text-info">
          <h3><?php echo $post['title']; ?></h3>
          <small class="text-muted">Created on: <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
        </div>
        <div class="card-body">
          <?php echo $post['body']; ?>
        </div>
        <div class="card-footer bg-white">
          <a href="<?php echo ROOT_URL;?>post.php?id=<?php echo $post['id']?>" class="text-info">READ MORE</a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</body>
</html>
