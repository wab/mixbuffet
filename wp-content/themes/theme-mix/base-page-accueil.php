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

  <div class="section hidden-xs hidden-sm">
    <div class="container">
      <h1>Slider</h1>
    </div>
  </div>

  <div class="wrap container hidden-md hidden-lg">
    <div class="wrapper">
      <h1>Slider produits</h1>
    </div>
  </div>

  <div class="wrap container relief border-radius" role="document">
    <div class="content row">
      <main class="main <?php echo roots_main_class(); ?>" role="main">
        <?php include roots_template_path(); ?>
      </main><!-- /.main -->
    </div><!-- /.content -->
  </div><!-- /.wrap -->

   <section class="section">
    <div class="container">
      <h1>actus</h1>
    </div>
  </section>

  <div class="wrap container relief border-radius hidden-xs hidden-sm">
    <div class="wrapper border-radius">
      <h1>Slider produits</h1>
    </div>
  </div>

  <?php get_template_part('templates/footer'); ?>

</body>
</html>
