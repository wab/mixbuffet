<article <?php post_class('actualite-excerpt'); ?>>
  <div class="row">
  	<div class="col-md-6 col-sm-12">
  		<?php 
			if ( has_post_thumbnail() ) {
				the_post_thumbnail( 'actus', array( 'class' => 'img-responsive' ) );
		} ?>

  	</div>
  	<div class="col-md-6 col-sm-12">
  		<div class="wrapper">
  		<header>
	    	<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	    	<?php get_template_part('templates/entry-meta'); ?>
	  	</header>
	    <div class="entry-summary">
		    <?php the_excerpt(); ?>
		</div>
		<p><a href="<?php the_permalink(); ?>" class="btn btn-info">Lire la suite</a></p>
	</div>
  	</div>
	  

  </div>
</article>
