<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class('col-md-8'); ?>>
    <header>
      <?php 
      if ( has_post_thumbnail() ) {
        the_post_thumbnail('', array( 'class' => 'img-responsive' )); 
      }
    ?>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php if( get_field('soustitre') ): ?>
        <p class="lead"><?php the_field('soustitre'); ?></p>
      <?php endif; ?>
    </header>
    
    <div class="entry-content">
      <?php the_content(); ?>

      <?php

      $img = get_field('image_nutrition');

      if( !empty($img) ): ?>
      
      <a data-toggle="modal" data-target="#nutrition" class="btn btn-primary">Valeurs nutrionnelles <span class="glyphicon glyphicon-chevron-right"></span></a>
      
      <!-- Modal -->
      <div class="modal fade" id="nutrition" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
         <div class="modal-content">
        
           <div class="modal-body">
             <img src="<?php echo $img['url']; ?>" alt="$img[alt]" class="img-responsive">
           </div>
      
         </div>
       </div>
     </div>
    <?php endif; ?>

  </div> <!-- /entry-content -->
    
    
  </article>

    <?php $post_objects = get_field('rel-produits');

    if( $post_objects ): ?>
    <aside class="col-md-12 wrapper">
      <h2>Voir aussi</h2>
        <ul class="list-unstyled row">
        <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
            <?php setup_postdata($post); ?>
            <li class="col-md-3">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
        <?php endforeach; ?>
        </ul>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    <?php endif; ?>
    
    </aside>


    <?php endwhile; ?>