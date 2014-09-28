<?php
/*
Template Name: Espace presse
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>


    <?php if ( current_user_can('contributor') || current_user_can('administrator') ) : ?>

        <?php get_template_part('templates/content', 'page'); ?>

    <?php else : ?>

        <?php 
            // the query
            $mixbuffet = new WP_Query( 'page_id=410' ); ?>

            <?php if ( $mixbuffet->have_posts() ) : ?>

              <!-- pagination here -->

              <div class="entry-content wrapper">

              <!-- the loop -->
              <?php while ( $mixbuffet->have_posts() ) : $mixbuffet->the_post(); ?>
                <?php the_content(); ?>
              <?php endwhile; ?>
              <!-- end of the loop -->

              <!-- pagination here -->
              </div>

              <?php wp_reset_postdata(); ?>

            <?php else : ?>
              <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>

    <?php endif; ?>

<div class="wrapper text-right">
  <a href="<?php echo wp_logout_url( get_permalink() );?>" class="btn btn-primary">Se déconnecter</a>
</div>

<?php endwhile; ?>
