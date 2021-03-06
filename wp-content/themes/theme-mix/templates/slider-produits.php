<?php 

$produits = get_field('slider_produits');

if( $produits ): ?>

<h1 class="title-slider-produits hidden-xs"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/title-slider-produits.png" alt="Tout est bon" /></h1>

    <div class="slider-produits">
        
        <?php foreach( $produits as $produit ): ?>
            <div class="slide">
            	<a href="<?php echo site_url( '/nos-produits');?>">
                	<img src="<?php echo $produit['url']; ?>" alt="<?php echo $produit['alt']; ?>" class="img-responsive" />
            	</a>
            </div>
        <?php endforeach; ?>

    
    </div>
    <?php if(count($produits) != 1) : ?>

	    <div class="arrow nav-slider hidden-xs">
	      <a class="prev"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-left.png" alt="precedent" /></a>
	      <a class="next pull-right"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.png" alt="suivant" /></a>
	    </div><!-- /nav wrapper -->



    <?php endif; ?>

<?php endif; ?>