<?php 
/*Plugin Name: Create Product Post Type
Description: This plugin registers the 'product' post type.
Version: 1.0
License: GPLv2
*/

// register custom post type to work with
function wpmudev_create_product_post_type() {
	// set up labels
	$labels = array(
 		'name' => 'Products',
    	'singular_name' => 'Product',
    	'add_new' => 'Add New Product',
    	'add_new_item' => 'Add New Product',
    	'edit_item' => 'Edit Product',
    	'new_item' => 'New Product',
    	'all_items' => 'All Products',
    	'view_item' => 'View Product',
    	'search_items' => 'Search Products',
    	'not_found' =>  'No Products Found',
    	'not_found_in_trash' => 'No Products found in Trash', 
    	'parent_item_colon' => '',
    	'menu_name' => 'Products',
    );
    //register post type
	register_post_type( 'product', array(
		'labels' => $labels,
		'has_archive' => true,
 		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
		'taxonomies' => array( 'post_tag', 'category' ),	
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'products' ),
		)
	);
}
add_action( 'init', 'wpmudev_create_product_post_type' );
?>

<?php 
/*Plugin Name: Create Journals Post Type
Description: This plugin registers the 'journal' post type.
Version: 1.0
License: GPLv2
*/

// register custom post type to work with
function wpmudev_create_journal_post_type() {
	// set up labels
	$labels = array(
 		'name' => 'Journals',
    	'singular_name' => 'Journal',
    	'add_new' => 'Add New Journal',
    	'add_new_item' => 'Add New Journal',
    	'edit_item' => 'Edit Journal',
    	'new_item' => 'New Journal',
    	'all_items' => 'All Journals',
    	'view_item' => 'View Journal',
    	'search_items' => 'Search Journals',
    	'not_found' =>  'No Journals Found',
    	'not_found_in_trash' => 'No Journals found in Trash', 
    	'parent_item_colon' => '',
    	'menu_name' => 'Journals',
    );
    //register post type
	register_post_type( 'journal', array(
		'labels' => $labels,
		'has_archive' => true,
 		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes', 'comments' ),
		'taxonomies' => array( 'post_tag', 'category' ),	
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'journals' ),
		)
	);
}
add_action( 'init', 'wpmudev_create_journal_post_type' );
?>

<?php 
/*Plugin Name: Create Adventures Post Type
Description: This plugin registers the 'adventure' post type.
Version: 1.0
License: GPLv2
*/

// register custom post type to work with
function wpmudev_create_adventure_post_type() {
	// set up labels
	$labels = array(
 		'name' => 'Adventures',
    	'singular_name' => 'Adventure',
    	'add_new' => 'Add New Adventure',
    	'add_new_item' => 'Add New Adventure',
    	'edit_item' => 'Edit Adventure',
    	'new_item' => 'New Adventure',
    	'all_items' => 'All Adventures',
    	'view_item' => 'View Adventure',
    	'search_items' => 'Search Adventures',
    	'not_found' =>  'No Adventures Found',
    	'not_found_in_trash' => 'No Adventures found in Trash', 
    	'parent_item_colon' => '',
    	'menu_name' => 'Adventures',
    );
    //register post type
	register_post_type( 'adventure', array(
		'labels' => $labels,
		'has_archive' => true,
 		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
		'taxonomies' => array( 'post_tag', 'category' ),	
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'adventures' ),
		)
	);
}
add_action( 'init', 'wpmudev_create_adventure_post_type' );
?>