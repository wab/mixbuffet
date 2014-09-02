<?php
$sticky = get_option('sticky_posts');
$stickyProduits = array( 
	'post__in' => $sticky,
	'post_type'=> 'produits',
	'posts_per_page' => '-1'

	 );

// the query
$the_query = new WP_Query( $stickyProduits); ?>

<?php if ( $the_query->have_posts() ) : ?>


	<div class="slider-produits">

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<?php 
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
		<div class="slide-produits">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<?php the_post_thumbnail('prouuits', array( 'class' => 'img-responsive' )); ?>
			</a>
		</div>
		<?php } ?>
	<?php endwhile; ?>
	<!-- end of the loop -->

	</div>

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>