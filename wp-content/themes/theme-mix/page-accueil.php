<?php
/*
Template Name: Accueil
*/
?>
<div class="row">
<?php while (have_posts()) : the_post(); ?>
  <h1 class="col-xs-12 border-top-left-radius border-top-right-radius"><span class="glyphicon glyphicon-arrow-right"></span> <small>Votre espace</small> <strong>pause</strong> déjeuner</h1>
  <div class="snack">
  	<div class="row">
  		<div class="col-lg-4">
  			<div class="bg-pink">
  				<h2 class="titre"><strong>Snack</strong><br> is fun</h2>
  			</div>
  		</div>
  		<div class="col-lg-4">
  			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/img1.png" class="img-responsive">
  		</div>
  		<div class="col-lg-4">
  			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/img2.png" class="img-responsive">
  		</div>
  	</div>
  </div>
<?php endwhile; ?>
</div>
