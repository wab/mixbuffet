<?php 
	$gamme = 'entrees';
	if( has_term( 'salades', 'gammes' ) ) {
		$gamme = 'salades';
	}
	if( has_term( 'plats', 'gammes' ) ) {
		$gamme = 'plats';
	}
?>

 <h1 class="text-center"><img src="<?php echo get_template_directory_uri().'/assets/img/'.$gamme; ?>" alt="<?php echo $gamme; ?>"/></h1>
<div class="row">
	<div class="col-md-4">
		<?php 
            if (has_nav_menu('salades')) :
              wp_nav_menu(array('theme_location' => $gamme, 'menu_class' => 'menu-produits', 'depth' => 0, 'walker'          => new Produits_Nav_Walker()));
            endif;
          ?>
	</div>
	<div class="col-md-8">
		<?php get_template_part('templates/content', 'produit'); ?>
	</div>
</div>
