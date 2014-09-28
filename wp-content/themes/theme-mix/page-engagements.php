<?php
/*
Template Name: Page engagements
*/
?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  
  <?php if( have_rows('engagements') ): ?>

  <ul class="row list-unstyled">

  <?php 
  $count = 0;
  while( have_rows('engagements') ): the_row(); 

    // vars
    $count = $count + 1;
    $image = get_sub_field('image');
    $size = 'square';
    $thumb = $image['sizes'][ $size ];
    $titre = get_sub_field('titre');
    $description = get_sub_field('description');

    ?>

    <li class="col-md-4 col-sm-6 col-xs-12">


        <a class="engagement">

        <img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt'] ?>" class="img-responsive hidden-sm" />

        <?php if ($titre != '') : ?>
        

        <div class="caption-engagement text-center">
          <div class="wrapper">
            <h2>
              <small>Engagement #<?php echo $count; ?></small><br /><strong><?php echo $titre; ?></strong></h2>
            <?php echo $description; ?>
          </div>
        </div>

        <?php endif; ?>

        </a>

    </li>

  <?php endwhile; ?>

  </ul>

<?php endif; ?>
<?php endwhile; ?>
