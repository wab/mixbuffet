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
    <div class="section hidden-xs hidden-sm">
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
      </div>
    </div>

  <?php endif; ?> 

  <div class="wrap container hidden-md hidden-lg">
    <div class="wrapper">
      <?php get_template_part('templates/slider-produits'); ?>
    </div>
  </div>

  <div class="wrap container relief border-radius" role="document">
    <div class="content row">
      <main class="main <?php echo roots_main_class(); ?>" role="main">

        <h1 class="bg-orange border-top-left-radius border-top-right-radius"><span class="glyphicon glyphicon-arrow-right"></span> <small>Votre espace</small> <strong>pause</strong> déjeuner</h1>
        <div class="snack bg-pink ">
          <div class="row">
            <div class="col-md-3">
              <div class="wrapper">
                <h2 class="titre"><strong>Snack</strong><br> is fun</h2>
                <p><?php the_field('snack_is_fun'); ?></p>
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
        <?php

          // check if the repeater field has rows of data
          if( have_rows('acces') ): ?>

          <div class="accesdirect">
          <div class="row">

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

          </div>
        </div>

          <?php else :

              // no rows found

          endif;

?>
        
      </main><!-- /.main -->
    </div><!-- /.content -->
  </div><!-- /.wrap -->

   <section class="section section-actus">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <div class="wrapper">
           <h1 class="titre">News de <strong>mix</strong></h1>
           <a href="<?php echo site_url( '/actualites');?>" class="btn btn-default pull-right">Toutes les actus</a>
           <article>
              <h2 class="h4">titre de l'actus</h2>
              <p>Vestibulum sit amet ipsum lacus. Maecenas sit amet tellus – nec mi gravida posuere non pretium magna. Suspendisse potenti.</p>
              <a href="#">Lire l'article</a>            
           </article>
          </div>
        </div>
        <div class="col-md-6 hidden-sm hidden-xs">
           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-actus.png" alt="actualités" />
        </div>
      </div>
    </div>
  </section>

  <div class="wrap container relief border-radius hidden-xs hidden-sm">
    <div class="wrapper border-radius">
      <?php get_template_part('templates/slider-produits'); ?>
    </div>
  </div>


<?php endwhile; ?>
