<?php
/*
Template Name: Accueil
*/
?>
<?php while (have_posts()) : the_post(); ?>
  
  <?php
  // check if the carousel has rows of data
  if( have_rows('carousel') ):    
  ?>
    <div class="section section-carousel hidden-xs hidden-sm">
      <div class="carousel">
      
      <?php     // loop through the rows of data
      while ( have_rows('carousel') ) : the_row();

      // vars
      $image = get_sub_field('image');
      $link = get_sub_field('lien');
      $titre = get_sub_field('titre');
      $texte = get_sub_field('texte');

      $background = get_sub_field('background');
      
      ?>
      
      <div class="slide-carousel" <?php if( $background ): ?> style="background-image: url(<?php echo $background; ?>);" <?php endif; ?> >
        <div class="container">

          <?php if( $link ): ?>
            <a href="<?php echo $link; ?>">
          <?php endif; ?>

            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" class="img-responsive" />

          <?php if( $link ): ?>
            </a>
          <?php endif; ?>

          <?php if( get_sub_field('edito') ): ?>
            <div class="edito">
              <h2 class="text-pink"><?php echo $titre; ?></h2>
              <p><?php echo $texte; ?></p>
            </div>
          <?php endif; ?>

        </div>
      </div>
      <?php endwhile; ?>
      </div> <!-- /carousel -->

      <?php if(count($image) != 1) : ?>

      <div class="arrow nav-carousel">
        <a class="prev"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-left.png" alt="precedent" /></a>
        <a class="next pull-right"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.png" alt="suivant" /></a>
      </div><!-- /nav wrapper -->

    <?php endif; ?>
    </div> <!-- section -->

  <?php endif; ?> 

  <div class="wrap container hidden-md hidden-lg">
    <div class="wrapper">
      <?php get_template_part('templates/slider-produits'); ?>
    </div>
  </div>

  <section class="main-section">

  <div class="wrap container relief border-radius" role="document">
    <div class="content row">
      <main class="main <?php echo roots_main_class(); ?>" role="main">

        <h1 class="bg-orange border-top-left-radius border-top-right-radius"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/titre-dejeuner.png" alt="Pause déjeuner" /></h1>
        <div class="snack bg-pink ">
          <div class="row">
            <div class="col-md-3">
              <div class="wrapper">
                <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/img/snackisfun.png" alt="Snack is fun" /></h2>
                <p><?php the_field('snack_is_fun'); ?></p>
                <br>
                <br>
                <p><a href="<?php echo site_url( '/instant-mix');?>" class="btn btn-default">En savoir plus</a></p>
              </div>
            </div>
            <div class="col-md-9">

              <?php 
            // the query
            $instantmix = new WP_Query( 'post_type=instant-mix&posts_per_page=2' ); ?>

            <?php if ( $instantmix->have_posts() ) : ?>

              <!-- pagination here -->
              <div class="row">

              <!-- the loop -->
              <?php while ( $instantmix->have_posts() ) : $instantmix->the_post(); 

                if ( has_post_thumbnail() ) { ?>
                  <div class="col-sm-6">
                    <a href="<?php echo site_url( '/instant-mix');?>">
                  <?php the_post_thumbnail( 'square', array( 'class' => 'img-responsive' ) ); ?>
                    </a>
                  </div>
                <?php } endwhile; ?>
              <!-- end of the loop -->

              </div>

              <?php wp_reset_postdata(); ?>

            <?php else : ?>
              <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
              
            </div>
          </div>
        </div>
          <div class="accesdirect">
            <div class="row">
              <?php

                // check if the repeater field has rows of data
                if( have_rows('acces') ): ?>

              

                  <?php // loop through the rows of data
                      while ( have_rows('acces') ) : the_row();

                          // display a sub field value
                          $image = get_sub_field('image');
                          $size = 'square';
                          $thumb = $image['sizes'][ $size ];
                          $link = get_sub_field('lien');

                          ?>

                          <div class="col-md-4 col-sm-6">
                            <a href="<?php echo $link; ?>">
                              <img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt'] ?>" class="img-responsive">
                            </a>
                          </div>

                      <?php endwhile; ?>

                <?php else :

                    // no rows found

                endif;

              ?>

              <?php

                // check if the repeater field has rows of data
                if( have_rows('acces_quizz') ): ?>

                <div class="col-md-12">

                  <?php // loop through the rows of data
                      while ( have_rows('acces_quizz') ) : the_row();

                          // display a sub field value
                          $imagequiz = get_sub_field('image');
                          $linkquiz = get_sub_field('quizz');

                          ?>

                            <a href="<?php echo $linkquiz; ?>">
                              <img src="<?php echo $imagequiz['url'] ?>" alt="<?php echo $imagequiz['alt'] ?>" class="img-responsive">
                            </a>

                      <?php endwhile; ?>

                </div>

                <?php else :

                    // no rows found

                endif;

              ?>

            </div>
            </div>

        
      </main><!-- /.main -->
    </div><!-- /.content -->
    <?php get_template_part('templates/reseaux'); ?>
  </div><!-- /.wrap -->
  
 </section>


   <section class="section section-actus">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <div class="wrapper">
           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/actualites.png">
           <a href="<?php echo site_url( '/actualites');?>" class="btn btn-default pull-right">Toutes les actus</a>
           <?php $actus = new WP_Query('post_type=post&posts_per_page=1') ?>

           <?php if ( $actus->have_posts() ) : ?>

            <!-- pagination here -->

            <!-- the loop -->
            <?php while ( $actus->have_posts() ) : $actus->the_post(); ?>
              <article class="une">
                <?php the_post_thumbnail( 'actus', array( 'class' => 'img-responsive pull-left' ) ); ?>
                <h2 class="h4"><?php the_title(); ?></h2>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>">Lire l'article</a>            
              </article>
            <?php endwhile; ?>
            <!-- end of the loop -->

            <!-- pagination here -->

            <?php wp_reset_postdata(); ?>

          <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>

          </div>
        </div>
        <div class="col-md-6 hidden-sm hidden-xs">
           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-actus.png" alt="actualités" />
        </div>
      </div>
    </div>
  </section>
  
  <section class="section-slider-produits">
    <div class="section wrap container relief border-radius hidden-xs hidden-sm">
      <div class="wrapper border-radius">
        <?php get_template_part('templates/slider-produits'); ?>
      </div>
    </div>
  </section>


<?php endwhile; ?>
