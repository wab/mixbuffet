<?php
/*
Template Name: Espace presse
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); 

  // Formulaire de connexion
if ( ! is_user_logged_in() ) {
	wp_login_form( array(
        'redirect'       => get_permalink(), // par défaut renvoie vers la page courante
        'label_username' => 'Login',
        'label_password' => 'Mot de passe',
        'label_remember' => 'Se souvenir de moi',
        'label_log_in'   => 'Se connecter',
        'form_id'        => 'login-form',
        'id_username'    => 'user-login',
        'id_password'    => 'user-pass',
        'id_remember'    => 'rememberme',
        'id_submit'      => 'wp-submit',
        'remember'       => true, //afficher l'option se ouvenir de moi
        'value_remember' => false //se souvenir par défaut ?
	) );
} else { ?>
	<p>
		<a href="<?php echo admin_url( 'user-edit.php?user_id='. get_current_user_id() ); ?>" class="btn btn-primary">Accès au profil</a>
		<a href="<?php echo wp_logout_url( get_permalink() );?>" class="btn btn-primary">Se déconnecter</a>
	</p>

<?php } ?>

  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
