<?php
/*
Template Name: Page produits
*/
?>

<?php while (have_posts()) : the_post(); ?>
  
  <section class="intro-produits">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-6 col-md-6 col-sm-12">
          <div class="wrapper">
            <h1 class="text-pink"><?php the_title();?></h1>
            <?php the_content();?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="wrap container border-radius acces-produits" role="document">
    <div class="content wrapper-border border-radius">
      <main class="main" role="main">

        <?php

                // check if the repeater field has rows of data
                if( have_rows('acces_gammes') ): ?>

              

                  <?php // loop through the rows of data
                      while ( have_rows('acces_gammes') ) : the_row();

                          // display a sub field value
                          $image = get_sub_field('image');
                          $link = get_sub_field('lien');

                          ?>


                            <a href="<?php echo $link; ?>" class="acces-produit border-radius">
                              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" class="img-responsive">
                            </a>

                      <?php endwhile; ?>

                <?php else :

                    // no rows found

                endif;

              ?>

      </main><!-- /.main -->
    </div><!-- /.content -->
    <?php get_template_part('templates/reseaux'); ?>
  </div><!-- /.wrap -->

  <div class="wrap container border-radius" role="document">
    <div class="content wrapper-border border-radius">


        <?php

                // check if the repeater field has rows of data
                if( have_rows('acces_innovations') ): ?>

              

                  <?php // loop through the rows of data
                      while ( have_rows('acces_innovations') ) : the_row();

                          // display a sub field value
                          $imagei = get_sub_field('image');
                          $linki = get_sub_field('lien');

                          ?>


                            <a href="<?php echo $linki; ?>" class="acces-produits">
                              <img src="<?php echo $imagei['url']; ?>" alt="<?php echo $imagei['alt'] ?>" class="img-responsive">
                            </a>

                      <?php endwhile; ?>

                <?php else :

                    // no rows found

                endif;

              ?>

    </div><!-- /.content -->
  </div><!-- /.wrap -->

   
<?php endwhile; ?>
