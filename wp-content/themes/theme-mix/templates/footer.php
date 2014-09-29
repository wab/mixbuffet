<?php $menufooter = array(
  'theme_location'  => 'footer',
  'menu'            => '',
  'container'       => false,
  'menu_class'      => 'nav-footer'
); ?>
<aside class="section wrap container border-radius footer">
   <div class="row">
      <div class="col-lg-8">
         <div class="wrapper wrapper-border border-top-left-radius">
            <h2  class="titre"><strong>Mix</strong> par <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-mixbuffet.png" alt="Mix Buffet" /></h2>
            <?php 
            // the query
            $mixbuffet = new WP_Query( 'page_id=262' ); ?>

            <?php if ( $mixbuffet->have_posts() ) : ?>

              <!-- pagination here -->

              <!-- the loop -->
              <?php while ( $mixbuffet->have_posts() ) : $mixbuffet->the_post(); ?>
                <?php the_content(); ?>
              <?php endwhile; ?>
              <!-- end of the loop -->

              <!-- pagination here -->

              <?php wp_reset_postdata(); ?>

            <?php else : ?>
              <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
            <p><a href="http://mixbuffet.com/" class="btn btn-primary">Visiter le site</a></p>
         </div>
         <div class="wrapper wrapper-border border-bottom-left-radius">
            <h2  class="titre"><strong>Recrutement</strong></h2>
            <p><a data-toggle="modal" data-target="#recrutement" class="btn btn-primary">Contact recrutement</a></p>
         </div>
      </div>
      <div class="col-lg-4">
         <div class="wrapper wrapper-border border-top-right-radius">
            <h2 class="titre"><strong>Coordonnées</strong></h2>
            <address class="h4">
               za du val coric<br>
                  BP 101T
               56382 Guer cedex<br>
               <a href="mailto:contact@mix-buffet.com">contact@mix-buffet.com</a>
            </address>
            <hr>
            <h2  class="titre"><strong>Contact</strong></h2>
            <h3 class="h4"><strong>Vous étes consommateur ou fournisseur ?</strong></h3>
            <p><a href="<?php echo get_permalink('366'); ?>" class="btn btn-primary">Accéder à notre formulaire</a></p>
         </div>
      </div>
      
   </div>
</aside>

<footer class="content-info" role="contentinfo">
   <div class="row">
      <div class="col-xs-4">
         <div class="bg-green">&nbsp;</div>
      </div>
      <div class="col-xs-4">
         <div class="bg-orange">&nbsp;</div>
      </div>
      <div class="col-xs-4">
         <div class="bg-pink">&nbsp;</div>
      </div>
      <div class="col-xs-12 bg-primary text-center">
         <div class="container">
            <?php 
              if (has_nav_menu('footer')) :
                wp_nav_menu($menufooter);
              endif;
            ?>
         </div>
      </div>
   </div><!-- row -->

   <!-- Modal -->
   <div class="modal fade" id="recrutement" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fermer</span></button>
           <h3 class="modal-title" id="myModalLabel">Contact recrutement</h3>
         </div>
         <div class="modal-body">
           <p>contenu page recrutement</p>
           <p>Écrire à : <a href="mailto:&#114;%65%63&#114;u%74&#101;%6d%65&#110;t&#64;mix-&#98;u&#102;&#102;&#101;%74%2e&#99;o&#109;">recrutement&#64;mix-buffet.com</a></p>
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
         </div>
       </div>
     </div>
   </div>
</footer>

<a href="#" class="back-to-top hidden-xs hidden-sm"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/backtop.png" alt="retour en haut"></a>


<?php wp_footer(); ?>
