<?php
/*
Template Name: Accueil
*/
?>
<?php while (have_posts()) : the_post(); ?>
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
<?php endwhile; ?>
