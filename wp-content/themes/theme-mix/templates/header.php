<header class="banner" role="banner">

  <div class="container">

    <div class="navbar-brand hidden-lg"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logomix.png" alt="<?php bloginfo('name'); ?>"></div>

    <div class="navbar yamm navbar-default navbar-static-top">
      
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button> 
        </div><!-- navbar-header -->

        <nav class="collapse navbar-collapse" role="navigation">

          <ul class="nav navbar-nav">
            <li class="hidden-xs">
              <a href="<?php echo esc_url(home_url('/')); ?>"><span class="glyphicon glyphicon-home"></span></a>
            </li>
            <li class="dropdown yamm-fw pink">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nos produits</a>
               <ul class="dropdown-menu">
                 <li>           
                    <div class="container">
                      <div class="row">
                        <div class="col-md-3">
                          <div class="wrapper-sm">
                            <h2 class="h3">Les entrées / encas</h2>
                            <?php 
                              if (has_nav_menu('entrees')) :
                                wp_nav_menu(array('theme_location' => 'entrees', 'menu_class' => 'list-unstyled', 'depth' => 1, 'before' => '> '));
                              endif;
                            ?>
                          </div>
                        </div>
                        <div class="col-md-3">
                           <div class="wrapper-sm">
                            <h2 class="h3">Les salades</h2>
                            <?php 
                              if (has_nav_menu('salades')) :
                                wp_nav_menu(array('theme_location' => 'salades', 'menu_class' => 'list-unstyled', 'depth' => 1, 'before' => '> '));
                              endif;
                            ?>
                          </div>
                        </div>
                        <div class="col-md-3">
                           <div class="wrapper-sm">
                            <h2 class="h3">Les plats chauds</h2>
                            <?php 
                              if (has_nav_menu('plats')) :
                                wp_nav_menu(array('theme_location' => 'plats', 'menu_class' => 'list-unstyled', 'depth' => 1, 'before' => '> '));
                              endif;
                            ?>
                          </div>
                        </div>
                        <div class="col-md-3">
                           <div class="wrapper-sm">
                            <h2 class="h3">Les innovations</h2>
                            <?php 
                              if (has_nav_menu('innovations')) :
                                wp_nav_menu(array('theme_location' => 'innovations', 'menu_class' => 'list-unstyled', 'depth' => 1, 'before' => '> '));
                              endif;
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>            
                 </li>
               </ul>
            </li>
            <li class="dropdown yamm-fw orange">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Le snacking break</a>
               <ul class="dropdown-menu">
                 <li>                  
                    <div class="container">
                      
                        
                          <?php 
                            if (has_nav_menu('snaking-break')) :
                              wp_nav_menu(array('theme_location' => 'snaking-break', 'menu_class' => 'list-unstyled nav-soumenu', 'depth' => 1, 'link_before' => '> '));
                            endif;
                          ?>
                                            
                  
                    </div>            
                 </li>
               </ul>
            </li>
            <li class="dropdown yamm-fw green">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mix story</a>
               <ul class="dropdown-menu">
                 <li>                  
                    <div class="container">

                          <?php 
                            if (has_nav_menu('mix-story')) :
                              wp_nav_menu(array('theme_location' => 'mix-story', 'menu_class' => 'list-unstyled nav-soumenu', 'depth' => 1, 'link_before' => '> '));
                            endif;
                          ?>

                    </div>            
                 </li>
               </ul>
            </li>
            <li class="navbar-brand visible-lg-inline-block">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logomix.png" alt="<?php bloginfo('name'); ?>">
            </li>
            <li class=" yamm-fw pink push">
              <a href="<?php echo get_permalink('64'); ?>">Nos engagements</a>
            </li>
            <li class="dropdown yamm-fw orange">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mix et vous</a>
               <ul class="dropdown-menu">
                 <li>                  
                    <div class="container">

                          <?php 
                            if (has_nav_menu('mix-et-vous')) :
                              wp_nav_menu(array('theme_location' => 'mix-et-vous', 'menu_class' => 'list-unstyled nav-soumenu', 'depth' => 1, 'link_before' => '> '));
                            endif;
                          ?>

                    </div>          
                 </li>
               </ul>
            </li>
            <li class="yamm-fw green">
              <a href="<?php echo site_url( '/espace-presse');?>">Espace presse</a>
            </li>
         </ul>

        </nav><!-- navbar-collapse -->

    </div><!-- navbar -->

  </div> <!-- container -->

</header>
