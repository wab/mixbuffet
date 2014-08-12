<header class="banner" role="banner">

  <!-- <div class="container"> -->

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
          <?php 
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
            endif;
          ?>

          <ul class="nav navbar-nav">
            <li>
              <a href="<?php echo esc_url(home_url('/')); ?>"><span class="glyphicon glyphicon-home"></span></a>
            </li>
            <li class="dropdown yamm-fw pink">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nos produits</a>
               <ul class="dropdown-menu">
                 <li>           
                    <div class="container">
                      <div class="row">
                        <div class="col-md-3 col-sm-6">
                          <h2>Titre menu</h2>
                          <ul>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                          </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                          <h2>Titre menu 2</h2>
                          <ul>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                          </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                          <h2>Titre menu 2</h2>
                          <ul>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                          </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                          <h2>Titre menu 2</h2>
                          <ul>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>            
                 </li>
               </ul>
            </li>
            <li class="dropdown yamm-fw orange">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Le snaking break</a>
               <ul class="dropdown-menu">
                 <li>                  
                    <div class="yamm-content">
                      <div class="row">
                        <div class="col-md-3 col-sm-6">
                          <h2>Titre menu</h2>
                          <ul>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                          </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                          <h2>Titre menu 2</h2>
                          <ul>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                          </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                          <h2>Titre menu 2</h2>
                          <ul>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                          </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                          <h2>Titre menu 2</h2>
                          <ul>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>            
                 </li>
               </ul>
            </li>
            <li class="dropdown yamm-fw green">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mix story</a>
               <ul class="dropdown-menu">
                 <li>                  
                    <div class="yamm-content">
                      <div class="row">
                        <div class="col-md-3 col-sm-6">
                          <h2>Titre menu</h2>
                          <ul>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                          </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                          <h2>Titre menu 2</h2>
                          <ul>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                          </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                          <h2>Titre menu 2</h2>
                          <ul>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                          </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                          <h2>Titre menu 2</h2>
                          <ul>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>            
                 </li>
               </ul>
            </li>
            <li class="navbar-brand visible-lg-inline-block">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logomix.png" alt="<?php bloginfo('name'); ?>">
            </li>
            <li class="dropdown yamm-fw pink push">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nos engagements</a>
               <ul class="dropdown-menu">
                 <li>                  
                    <div class="yamm-content">
                      <div class="row">
                        <div class="col-md-3 col-sm-6">
                          <h2>Titre menu</h2>
                          <ul>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                          </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                          <h2>Titre menu 2</h2>
                          <ul>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                          </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                          <h2>Titre menu 2</h2>
                          <ul>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                          </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                          <h2>Titre menu 2</h2>
                          <ul>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>            
                 </li>
               </ul>
            </li>
            <li class="dropdown yamm-fw green">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mix et vous</a>
               <ul class="dropdown-menu">
                 <li>                  
                    <div class="yamm-content">
                      <div class="row">
                        <div class="col-md-3 col-sm-6">
                          <h2>Titre menu</h2>
                          <ul>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                          </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                          <h2>Titre menu 2</h2>
                          <ul>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                          </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                          <h2>Titre menu 2</h2>
                          <ul>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                          </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                          <h2>Titre menu 2</h2>
                          <ul>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>            
                 </li>
               </ul>
            </li>
            <li class="dropdown yamm-fw green">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Espace presse</a>
               <ul class="dropdown-menu">
                 <li>                  
                    <div class="yamm-content">
                      <div class="row">
                        <div class="col-md-3 col-sm-6">
                          <h2>Titre menu</h2>
                          <ul>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                          </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                          <h2>Titre menu 2</h2>
                          <ul>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                          </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                          <h2>Titre menu 2</h2>
                          <ul>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                          </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                          <h2>Titre menu 2</h2>
                          <ul>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                            <li><a href="#">menu nav</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>            
                 </li>
               </ul>
            </li>
         </ul>

        </nav><!-- navbar-collapse -->

    </div><!-- navbar -->

  <!-- </div> --> <!-- container -->

</header>
