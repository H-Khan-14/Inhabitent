<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>

	<body <?php body_class(); ?>>

			<header id="masthead" class="site-header" role="banner">
			<div class="header-container">
				<div class="site-branding">
					<!-- insert tent image logo here -->
					<a href="http://localhost:8888/Inhabitent/Wordpress/">
            <img src="http://localhost:8888/Inhabitent/Wordpress/wp-content/themes/inhabitent-theme/assets/images/logos/inhabitent-logo-tent.svg">
          </a>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">

					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					<div class="header-search">
						<i class="fa fa-search"></i>
						<?php get_search_form(); ?>

						</div>
						</div>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
			<script type="text/javascript" src="https://te"></script>
			<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
		<script>
			console.log("we scripting");
			jQuery(function($) {
				var $nav = $('header');
				var $win = $(window);
				var winH = $win.height(); // Get the window height.

				$win.on("scroll", function () {
						if ($(this).scrollTop() > winH ) {
								$nav.addClass("scroll-header");
						} else {
								$nav.removeClass("scroll-header");
						}
				}).on("resize", function(){ // If the user resizes the window
					winH = $(this).height(); // you'll need the new height value
				});

				});
		</script>

