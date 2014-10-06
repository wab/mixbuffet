<div class="page-header">
	<h1>
	<?php  $image = get_field('titre_image');

	if( !empty($image) ): ?>

		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive" />

	<?php else: ?>
	    <?php echo roots_title(); ?>
	  
	<?php endif; ?>
	</h1>
</div>
