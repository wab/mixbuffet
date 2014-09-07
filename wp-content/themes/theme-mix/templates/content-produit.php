<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <?php 
      if ( has_post_thumbnail() ) {
        the_post_thumbnail('', array( 'class' => 'img-responsive' )); 
      }
    ?>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php if( get_field('soustitre') ): ?>
      <p class="lead"><?php the_field('soustitre'); ?></p>
    <?php endif; ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
  </article>
<?php endwhile; ?>
