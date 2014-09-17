<?php 

$produits = get_field('slider_produits');

if( $produits ): ?>
    <div class="slider-produits">
            <?php foreach( $produits as $produit ): ?>
                <div class="slide">
                	<a href="<?php echo site_url( '/produits');?>">
                    <img src="<?php echo $produit['url']; ?>" alt="<?php echo $produit['alt']; ?>" class="img-responsive" />
                	</a>
                </div>
            <?php endforeach; ?>
    </div>
<?php endif; ?>