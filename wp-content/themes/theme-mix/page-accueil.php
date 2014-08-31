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
      
      <div class="slide-carousel" <?php if( $background ): ?> style="background: url(<?php echo $background; ?>); background-size:100%;" <?php endif; ?> >
        <div class="container">

          <?php if( $link ): ?>
            <a href="<?php echo $link; ?>">
          <?php endif; ?>

            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

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
      <h1>Slider produits</h1>
    </div>
  </div>

  <div class="wrap container relief border-radius" role="document">
    <div class="content row">
      <main class="main <?php echo roots_main_class(); ?>" role="main">

        <h1 class="bg-orange border-top-left-radius border-top-right-radius"><span class="glyphicon glyphicon-arrow-right"></span> <small>Votre espace</small> <strong>pause</strong> déjeuner</h1>
        <div class="snack">
          <div class="row">
            <div class="col-lg-4 col-md-2">
              <div class="bg-pink wrapper">
                <h2 class="titre"><strong>Snack</strong><br> is fun</h2>
              </div>
            </div>
            <div class="col-lg-4 col-md-5">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img1.png" class="img-responsive">
            </div>
            <div class="col-lg-4 col-md-5">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img2.png" class="img-responsive">
            </div>
          </div>
        </div>
        <div class="accesdirect">
          <div class="row">
            <div class="col-md-4">
                <h2 class="titre"><strong>Snack</strong><br> is fun</h2>
            </div>
            <div class="col-md-4">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img1.png" class="img-responsive">
            </div>
            <div class="col-md-4">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img2.png" class="img-responsive">
            </div>
          </div>
        </div>
        
      </main><!-- /.main -->
    </div><!-- /.content -->
  </div><!-- /.wrap -->

   <section class="section section-actus">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <div class="wrapper">
           <h1 class="titre">News de <strong>mix</strong></h1>
           <a href="#" class="btn btn-default">Toutes les actus</a>
           <article>
              <h2 class="h4">titre de l'actus</h2>
              <p>Vestibulum sit amet ipsum lacus. Maecenas sit amet tellus – nec mi gravida posuere non pretium magna. Suspendisse potenti.</p>
              <a href="#">Lire l'article</a>
            </div>
            
           </article>
          </div>
        </div>
        <div class="col-md-6 hidden-sm hidden-xs">
           
        </div>
      </div>
    </div>
  </section>

  <div class="wrap container relief border-radius hidden-xs hidden-sm">
    <div class="wrapper border-radius">
      <h1>Slider produits</h1>
    </div>
  </div>


<?php endwhile; ?>
