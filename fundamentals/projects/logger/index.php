<?php
  session_start();
  $message = null;
  if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
  }
?>

<!DOCTYPE html>
<html lang="en">
  <?php require 'C:\xampp\htdocs\phpsandbox\projects\contactForm\inc\head.php'; ?>
<body>
  <!-- navbar -->
  <?php require 'C:\xampp\htdocs\phpsandbox\projects\logger\inc\navbar.php'; ?>

  <!-- messages -->
  <?php require 'C:\xampp\htdocs\phpsandbox\projects\logger\inc\message.php'; ?>

  <!-- contact form -->
  <div class="row">
    <div class="col-6 offset-3">
      <div class="card mt-4">
        <div class="card-header">
          <h1 class="display-4">Get in Touch</h1>
        </div>
        <div class="card-body">
          <form action="process.php" method="POST">
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>">
              <small class="text-secondary">Your Email won't be shared</small>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea name="text" class="form-control" id="text" cols="30" rows="10"><?php echo isset($_SESSION['text']) ? $_SESSION['text'] : ''; ?></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>
</html>