<!-- add path to require -->
<!-- use a user array instead -->
<!-- email to send in a variable -->
<!-- sanitize more stuff -->

<?php

  $flashMessage = array(
    'status' => false,
    'msg' => '',
    'css' => ''
  );

  if (filter_has_var(INPUT_POST, 'submit')) {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    if (!empty($name) && !empty($email) && !empty(trim($message))) {
      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $to = 'cluster.coredev@gmail.com';
        $subject = 'Contact Request from ' . $name;
        $body = '<h2>Contact Request</h2>
                 <h4>Name</h4><p>'.$name.'</p>
                 <h4>Email</h4><p>'.$email.'</p>
                 <h4>Message</h4><p>'.$message.'</p>
                ';
        $headers = 'MIME-version: 1.0' . '\r\n';
        $headers .= 'Content-Type: text/html; charset-UTF-8' . '\r\n';
        $headers .= 'From: ' . $name . '<' . $email . '>';

        // if (mail($to, $subject, $body, $headers)) {
          $flashMessage['status'] = true;
          $flashMessage['msg'] = 'Message Sent!';
          $flashMessage['css'] = 'alert-success';
        // }
        // else {
          // $flashMessage['status'] = true;
          // $flashMessage['msg'] = 'Message Not Sent!';
          // $flashMessage['css'] = 'alert-danger';
        // }
      }
      else {
        $flashMessage['status'] = true;
        $flashMessage['msg'] = 'Please use a valid email address';
        $flashMessage['css'] = 'alert-danger';
      }
    }
    else {
      $flashMessage['status'] = true;
      $flashMessage['msg'] = 'Please fill in all fields';
      $flashMessage['css'] = 'alert-danger';
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
  <!-- head -->
  <?php require 'C:\xampp\htdocs\phpsandbox\projects\contactForm\inc\head.php'; ?>
<body>

  <!-- navbar -->
  <?php require 'C:\xampp\htdocs\phpsandbox\projects\contactForm\inc\navbar.php'; ?>

  <!-- contact form -->
  <div class="row">
    <div class="col-6 offset-3">

      <?php if ($flashMessage && $flashMessage['status']): ?>
        <div class="alert mt-4 <?php echo $flashMessage['css'];?>"><?php echo $flashMessage['msg'];?></div>
      <?php endif; ?>

      <div class="card mt-4">
        <div class="card-body">
          <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" value="<?php echo isset($_POST['name']) ? $name : '';?>">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" value="<?php echo isset($_POST['email']) ? $email : '';?>">
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" name="message"><?php echo isset($_POST['message']) ? trim($message) : '';?></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>
</html>

