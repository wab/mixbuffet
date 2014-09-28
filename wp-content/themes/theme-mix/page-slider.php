<?php
/*
Template Name: Page slider
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  <?php $images = get_field('slider');
 
  if( $images ): ?>

  <div class="slider-wrapper section">
    
    <div class="slider">
  
      <?php foreach( $images as $image ):?>
          <div>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive" />
          </div>
          
      <?php endforeach; ?>

    </div><!-- /slider -->

    <?php if(count($images) != 1) : ?>

	     <div class="arrow nav-slider">
        <a class="prev"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-left.png" alt="precedent" /></a>
        <a class="next pull-right"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.png" alt="suivant" /></a>
      </div><!-- /nav wrapper -->

    <?php endif; ?>

  </div><!-- /slider wrapper -->
<?php endif; ?>
<?php endwhile; ?>
