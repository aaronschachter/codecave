<div class="row">
  <div class="col-xs-6">
    <form action="" method="post" role="form">
      <div class="form-group">
        <textarea name="content" class="form-control" rows="10">
        <?php print trim($_POST['content']); ?>
        </textarea>
      </div>
      <div>
        <button type="submit" class="btn btn-default">Execute PHP</button>
      </div>
    </form>
  </div>
  <div class="col-xs-6">
    <?php if (array_key_exists('content', $_POST)): ?>
      <pre><?php print eval($_POST['content']); ?></pre>
    <?php endif; ?>
  </div>
</div>
