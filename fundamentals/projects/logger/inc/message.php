<div class="row">
  <div class="col-6 offset-3">
    <?php if ($message !== null): ?>
      <?php if ($message['type'] === 'error'): ?>
        <div class="mt-4 alert alert-danger"><?php echo ($message['msg']); ?></div>
      <?php else: ?>
        <div class="mt-4 alert alert-success"><?php echo ($message['msg']); ?></div>
      <?php endif; ?>
    <?php endif; ?>
  </div>
</div>