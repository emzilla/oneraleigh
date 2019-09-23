<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package oneraleigh
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="apple-touch-icon" sizes="180x180" href="../favicons/apple-touch-icon.png">
	<link rel="shortcut icon" href="../favicons/favicon.ico">
	<link rel="icon" type="image/png" sizes="32x32" href="../favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../favicons/favicon-16x16.png">
	<link rel="manifest" href="../favicons/site.webmanifest">
	<link rel="mask-icon" href="../favicons/safari-pinned-tab.svg" color="#1d94af">
	<meta name="msapplication-TileColor" content="#1d94af">
	<meta name="theme-color" content="#ffffff">

	<?php wp_head(); ?>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-148472402-2"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-148472402-2');
	</script>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'oneraleigh' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding screen-reader-text">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$oneraleigh_description = get_bloginfo( 'description', 'display' );
			if ( $oneraleigh_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $oneraleigh_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="menu">
			<button class="menu-toggle" id="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<div class="screen-reader-text"><?php esc_html_e( 'Primary Menu', 'oneraleigh' ); ?></div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="More" class="menu-toggle__arrow">
			</button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
