<?php 
	$gamme = 'entrees';
	if( has_term( 'salades', 'gammes' ) ) {
		$gamme = 'salades';
	}
	if( has_term( 'plats', 'gammes' ) ) {
		$gamme = 'plats';
	}
?>

	<div class="wrap container border-radius" role="document">
    	<div class="content wrapper-border border-radius">
      		<main class="main gamme-<?php echo $gamme; ?>" role="main">
				<div class="row">
					<div class="page-header col-md-12">
					 	
					 	<a href="<?php echo site_url( '/nos-produits');?>" class="backproduits"><img src="<?php echo get_template_directory_uri().'/assets/img/retour-produits.png'; ?>" /></a>
					 	<h1 class="text-center"><img src="<?php echo get_template_directory_uri().'/assets/img/titre-'.$gamme.'.png'; ?>" alt="<?php echo $gamme; ?>"/></h1>

					 	
					</div>

					<div class="col-md-4">
						<?php 
				            if (has_nav_menu($gamme)) :
				              wp_nav_menu(array('theme_location' => $gamme, 'menu_class' => 'menu-produits', 'depth' => 0, 'walker'          => new Produits_Nav_Walker()));
				            endif;
				          ?>
					</div>

					<?php while (have_posts()) : the_post(); ?>
					<div class="col-md-8">
					  <article <?php post_class('produit-contenu'); ?>>
					  	<?php 
					      if ( has_post_thumbnail() ) {
					        the_post_thumbnail('', array( 'class' => 'img-responsive' )); 
					      }
					    ?>
					    <header class="produit-header">
					      
					      <h1 class="entry-title"><?php the_title(); ?></h1>
					      <?php if( get_field('soustitre') ): ?>
					        <p><?php the_field('soustitre'); ?></p>
					      <?php endif; ?>
					    </header>
					    
					    <div class="entry-content entry-produit">
					      <?php the_content(); ?>

					      <?php

					      $img = get_field('image_nutrition');

					      if( !empty($img) ): ?>
					      
					      <a data-toggle="modal" data-target="#modalnutrition" class="btn btn-primary">Valeurs nutritionnelles <span class="glyphicon glyphicon-chevron-right"></span></a>
					      
					    <?php endif; ?>

					  </div> <!-- /entry-content --> 
					    
					  </article>
					</div>

				    <?php $post_objects = get_field('rel-produits');

				    if( $post_objects ): ?>
					    <aside class="col-md-12 wrapper rel-produits">
					      
					      <h2>Vous aimerez aussi :</h2>
					        <ul class="list-unstyled row">
					        <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
					            <?php setup_postdata($post); ?>
					            <li class="col-md-3">
					            	<a class="engagement" href="<?php the_permalink(); ?>">

							        <?php 
								      if ( has_post_thumbnail() ) {
								        the_post_thumbnail('square', array( 'class' => 'img-responsive' )); 
								      }
								    ?>

							        <div class="caption-engagement caption-produit border-radius text-center">
							          <div class="wrapper">
							            <h2 class="h3"><?php the_title(); ?></h2>
							            <span class="btn btn-default">En savoir plus</span>
							          </div>
							        </div>

							        </a>

					            </li>
					        <?php endforeach; ?>
					        </ul>
					        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

					    </aside>
				    <?php endif; ?>
				    
				    

			    <?php endwhile; ?>

		</div> <!-- row -->
		</main> <!-- main -->
	</div> <!-- content -->
	<?php get_template_part('templates/reseaux'); ?>
</div> <!-- container -->

<?php

  if( !empty($img) ): ?>
 
  
  <!-- Modal -->
  <div class="modal fade" id="modalnutrition" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg">
     
     

     <div class="modal-content">
     	
     	<div class="modal-header">
           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
     	</div>
    
       <div class="modal-body">
         <img src="<?php echo $img['url']; ?>" alt="$img[alt]" class="img-responsive">
       </div>
  
     </div>
   </div>
 </div>

<?php endif; ?>
