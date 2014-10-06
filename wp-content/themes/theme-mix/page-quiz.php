<?php
/*
Template Name: Quiz
*/
?>
<div class="page-header">
  <h1><img src="<?php echo get_template_directory_uri(); ?>/assets/img/titre-quiz.png" alt="Test &amp; quiz" /></h1>
</div>
<img src="<?php echo get_template_directory_uri(); ?>/assets/img/quiz.jpg" alt="Quizz" class="img-responsive" />

<div class="row">

<?php while (have_posts()) : the_post(); ?>
  <div class="col-md-10 col-md-offset-1 col-sm-12 quiz">
    <div class="wrapper">
      <h2 class="title-quiz"><?php the_title(); ?></h2>
      <?php the_content(); ?>
    </div>
  </div>
</div>


<?php

// check if the repeater field has rows of data
if( have_rows('acces') ): ?>
<hr class="quiz" />
<h2 class="h4 wrapper"><strong>Les autres quizz :</strong></h2>
<div class="row">

  <?php // loop through the rows of data
    while ( have_rows('acces') ) : the_row(); ?>

    <div class="col-md-6 col-sm-12">
      
      <a href="<?php the_sub_field('lien'); ?>"><img src="<?php the_sub_field('image'); ?>" class="img-responsive"></a>
      
    </div>

       

    <?php   endwhile; ?>

</div>

<?php else :

    // no rows found

endif;

?>

</div>
<?php endwhile; ?>


