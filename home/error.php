<?php include 'ylp_add.php' ?>
<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p class="alert alert-danger"><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>