<?php
/**
 * Clean up the_excerpt()
 */
function roots_excerpt_more($more) {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'roots') . '</a>';
}
add_filter('excerpt_more', 'roots_excerpt_more');

/**
 * Manage output of wp_title()
 */
function roots_wp_title($title) {
  if (is_feed()) {
    return $title;
  }

  $title .= get_bloginfo('name');

  return $title;
}
add_filter('wp_title', 'roots_wp_title', 10);

// barre d'admin

function my_function_admin_bar(){
    return false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

/**
 * Custom functions
 */

// initialization des menus de navigation

function register_prisma_menus() {
  register_nav_menus(
    array(
      'salades' => __( 'Les salades' ),
      'entrees' => __( 'Les entrées' ),
      'plats' => __( 'Les plats chauds' ),
      'innovations' => __( 'Les innovations' ),
      'snaking-break' => __( 'Le snaking break'),
      'mix-story' => __( 'Mix story'),
      'mix-et-vous' => __( 'Mix et vous'),
      'footer' => __( 'Pied de page')
    )
  );
}

function get_the_slug() {

	  global $post;

	  if ( is_single() || is_page() ) {
	  return $post->post_name;
	  }
	  else {
	  return "";
	}

}

// commentaires

add_filter('comments_open', 'wpc_comments_closed', 10, 2);

function wpc_comments_closed( $open, $post_id ) {
$post = get_post( $post_id );
if ('post' == $post->post_type)
$open = false;
return $open;
}

//pagination
if( !function_exists( 'theme_pagination' ) ) {
  
    function theme_pagination() {
  
  global $wp_query, $wp_rewrite;
  $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
  
  $pagination = array(
    'base' => @add_query_arg('page','%#%'),
    'format' => '',
    'total' => $wp_query->max_num_pages,
    'current' => $current,
          'show_all' => false,
          'end_size'     => 1,
          'mid_size'     => 2,
    'type' => 'list',
    'next_text' => '»',
    'prev_text' => '«'
  );
  
  if( $wp_rewrite->using_permalinks() )
    $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
  
  if( !empty($wp_query->query_vars['s']) )
    $pagination['add_args'] = array( 's' => str_replace( ' ' , '+', get_query_var( 's' ) ) );
    
  echo str_replace('page/1/','', paginate_links( $pagination ) );
    } 
}



//menus

add_action( 'init', 'register_prisma_menus' );

// Tailles des vignettes

add_image_size( 'square', 450, 450, true );
add_image_size( 'actus', 600, 300, true );
add_image_size( 'produits', 1000, 500, true );

// Change Posts name

function edit_admin_menus() {
    global $menu;
  
  $menu[5][0] = 'Actualités'; 
}
add_action( 'admin_menu', 'edit_admin_menus' );



//Remove Ninja Forms Stylesheet
remove_action( 'ninja_forms_display_css', 'ninja_forms_display_css', 10, 2 );



// Ajouter le lien pour récupérer le mot de passe, si l'utilisateur ne s'en souvient plus
add_filter( 'login_form_bottom', 'lien_mot_de_passe_perdu' );
function lien_mot_de_passe_perdu( $formbottom ) {
  $formbottom .= '<a href="' . wp_lostpassword_url() . '">Mot de passe perdu ?</a>';
  return $formbottom;
}


// Customize login page
function my_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logomix.png);
            padding-bottom: 0px;
            width: 134px;
            height: 134px;
            background-size: 134px auto;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Mix Snacking';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

// Vérouiller l'accès à un type de page
// add_action( 'template_redirect', 'private_type_of_page' );
// function private_type_of_page() {
//   if ( is_page_template( 'page-presse.php' ) && ! is_user_logged_in() ) {
//     wp_redirect( wp_login_url() );
//     exit();
//   }
// }

//interdire l'accès aux non admins
add_action( 'current_screen', 'redirect_non_authorized_user' );
function redirect_non_authorized_user() {
  // Si t'es pas admin, tu vires
  if ( is_user_logged_in() && ! current_user_can( 'manage_options' ) ) {
    wp_redirect( home_url( '/espace-presse' ) );
    exit();
  }
}