<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    get_template_part('templates/header');
  ?>


    <?php include roots_template_path(); ?>

  <aside class="section engagements">
   <div class="container">
      <a href="<?php echo get_permalink('64'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/engagements.jpg" class="img-responsive"></a>
   </div>
  </aside>



  <?php get_template_part('templates/footer'); ?>

</body>
</html>
