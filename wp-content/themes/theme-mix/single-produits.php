
<?php if( has_term( 'entrees-encas', 'gammes' ) ) {?>
   <h1>test</h1>
<?php } ?>
<h1 class="text-center pink"><?php the_terms( $post->ID, 'gammes', '', '' ); ?><br><small>fourchette incluses</small></h1>
<?php get_template_part('templates/content', 'single'); ?>
