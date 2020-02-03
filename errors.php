<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
		<p style="color:Red"><strong><?php echo $error ?></strong></p>
	  <?php endforeach ?>
	  <p><br> </P>
  </div>
<?php  endif ?>