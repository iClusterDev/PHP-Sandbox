<?php
  # ternary operator
  # → identical to js or c++
  $loggedIn = true;
  echo ($loggedIn == true) ? 'Logged In' : 'Not Logged In';

  $myArray = ['aaa', 'bbb', 'ccc'];
?>

<!-- # shorthand syntax if embed php in html -->
<!-- # can use with conditionals and loops -->
<div>
  <?php if($loggedIn): ?>
    <h1>Logged In</h1>
  <?php else: ?>
    <h1>Not Logged In</h1>
  <?php endif; ?>
</div>

<div>
  <?php foreach($myArray as $item): ?>
    <p><?php echo $item; ?></p>
  <?php endforeach; ?>
</div>

<div>
  <?php for($i = 0; $i < 10; $i++): ?>
    <p><?php echo $i; ?></p>
  <?php endfor; ?>
</div>
