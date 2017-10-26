<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package brenda-website
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/gridlex/2.4.1/gridlex.min.css">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Abel|La+Belle+Aurore" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">


<!--
	<div class="navbar">
		<i class="fa fa-bars nav-menu-button"></i>
		<a class="active nav-link brand-name" href="#/">Happily Ever After STL</a>
		<a class="nav-link brand-name" href="#/"></a>
		<a class="nav-link brand-name" href="#/">Happily Ever After STL</a>
		<a class="nav-link brand-name" href="#/">Happily Ever After STL</a>
		<a class="nav-link brand-name" href="#/">Happily Ever After STL</a>
	</div> -->


	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'brenda-website' ); ?></a> -->

	<header id="masthead" class="navbar">

		<!-- <nav id="site-navigation" class="main-navigation"> -->
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'brenda-website' ); ?></button> -->
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				  'menu-class'		 => "navbar-alan"
				) );
			?>
		<!-- </nav><!- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
