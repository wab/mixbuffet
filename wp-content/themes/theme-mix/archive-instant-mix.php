<?php 

  // the page query
  $pageinstantmix = new WP_Query( 'page_id=268' ); ?>

  <?php if ( $pageinstantmix->have_posts() ) : ?>

    <!-- pagination here -->

    <!-- the loop -->
    <?php while ( $pageinstantmix->have_posts() ) : $pageinstantmix->the_post(); ?>
      <?php get_template_part('templates/page', 'header'); ?>
      <div class="entry-content wrapper"><?php the_content(); ?></div>
    <?php endwhile; ?>
    <!-- end of the loop -->

    <!-- pagination here -->

    <?php wp_reset_postdata(); ?>

  <?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?> 

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>


<div class="row">          

<?php while (have_posts()) : the_post(); 
  if ( has_post_thumbnail() ) { ?>
  
  <div class="col-md-4 col-lg-3 col-sm-6 col-xs-12">
    
    <a class="fancybox" rel="gallery" href="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" <?php if(get_field('description')) {?> title ="<?php the_field('description'); ?>" <?php } ?>><?php the_post_thumbnail( 'square', array( 'class' => 'img-responsive' ) ); ?></a>

  </div>

<?php } endwhile; ?>
 </div>

<nav class="pagination text-right">
  <?php theme_pagination(); ?>
</nav>
