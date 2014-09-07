
<?php if( has_term( 'entrees-encas', 'gammes' ) ) {?>
   <h1>test</h1>
<?php } ?>
<h1 class="text-center pink"><?php the_terms( $post->ID, 'gammes', '', '' ); ?><br><small>fourchette incluses</small></h1>

<div class="row">
	<div class="col-md-4">
		menu
	</div>
	<div class="col-md-8">
		<?php get_template_part('templates/content', 'produit'); ?>
	</div>
</div>
