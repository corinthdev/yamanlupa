<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p class="alert alert-danger"><?php echo $error ?>
	  <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
	  </p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>