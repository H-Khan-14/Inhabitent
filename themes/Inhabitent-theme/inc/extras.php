<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );
?>
<?php

function my_login_logo_one() { 
	?> 
	<style type="text/css"> 
	body.login div#login h1 a {
	background-image: url("../assets/images/logos/inhabitent-logo-tent.svg"); 
	padding-bottom: 30px; 
			height:65px;
		width:320px;
		background-size: 320px 65px;
		background-repeat: no-repeat;
	} 
	</style>
	<?php 
	} add_action( 'login_enqueue_scripts', 'my_login_logo_one' );