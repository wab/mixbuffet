<div class="page-header">
  <h1><img src="<?php echo get_template_directory_uri(); ?>/assets/img/titre-actus.png" alt="Mix Actux" /></h1>
</div>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_format()); ?>
<?php endwhile; ?>

<nav class="pagination text-right">
	<?php theme_pagination(); ?>
</nav>
