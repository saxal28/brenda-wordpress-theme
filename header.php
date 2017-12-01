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
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Abel|Cabin+Sketch" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="../dist/css/swiper.min.css">
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

	<header id="masthead" class="side-nav closed">

		<div class="navbar-toggle">
			<div class="bar bar-1"></div>
			<div class="bar bar-2"></div>
			<div class="bar bar-3"></div>
		</div>

		<!-- <nav id="site-navigation" class="main-navigation"> -->
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'brenda-website' ); ?></button> -->
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				  'menu-class'		 => "navbar-alan"
				) );
			?>

			<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.6/js/swiper.min.js"></script>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.6/css/swiper.css" />


		<!-- </nav><!- #site-navigation -->
	</header><!-- #masthead -->

	<!-- <div class="action-row">
		<div class="action-button">
			<i class="fa fa-book" aria-hidden="true"></i> Book Now
		</div>
		<div class="action-button">
			<i class="fa fa-book" aria-hidden="true"></i> Book Now
		</div>
		<div class="action-button">
			<i class="fa fa-book" aria-hidden="true"></i> Book Now
		</div>
		<div class="action-button">
			<i class="fa fa-book" aria-hidden="true"></i> Book Now
		</div>
	</div> -->

	<div id="content" class="site-content">
