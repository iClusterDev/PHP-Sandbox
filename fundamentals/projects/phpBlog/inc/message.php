<?php if ($message): ?>
  <?php if ($message['type'] === 'success'): ?>
    <div class="mt-4">
      <div class="alert alert-success"><?php echo $message['msg']; ?></div>
    </div>
  <?php elseif ($message['type'] === 'error'): ?>
    <div class="mt-4">
      <div class="alert alert-danger"><?php echo $message['msg']; ?></div>
    </div>
  <?php endif;  ?>
<?php endif; ?>