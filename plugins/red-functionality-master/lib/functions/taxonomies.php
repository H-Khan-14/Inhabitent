<?php 
/*Plugin Name: Create Product Category Taxonomy
Description: This plugin registers the 'product category' taxonomy and applies it to the 'product' post type.
Version: 1.0
License: GPLv2
*/

// register two taxonomies to go with the post type
function wpmudev_register_product_taxonomy() {
	// set up labels
	$labels = array(
		'name'              => 'Product Categories',
		'singular_name'     => 'Product Category',
		'search_items'      => 'Search Product Categories',
		'all_items'         => 'All Product Categories',
		'edit_item'         => 'Edit Product Category',
		'update_item'       => 'Update Product Category',
		'add_new_item'      => 'Add New Product Category',
		'new_item_name'     => 'New Product Category',
		'menu_name'         => 'Product Categories'
	);
	// register taxonomy
	register_taxonomy( 'productcat', 'product', array(
		'hierarchical' => true,
		'labels' => $labels,
		'query_var' => true,
		'show_admin_column' => true
	) );
}
add_action( 'init', 'wpmudev_register_product_taxonomy' );
?>

<?php 
/*Plugin Name: Create Journal Category Taxonomy
Description: This plugin registers the 'journal category' taxonomy and applies it to the 'journal' post type.
Version: 1.0
License: GPLv2
*/

// register two taxonomies to go with the post type
function wpmudev_register_journal_taxonomy() {
	// set up labels
	$labels = array(
		'name'              => 'Journal Categories',
		'singular_name'     => 'Journal Category',
		'search_items'      => 'Search Journal Categories',
		'all_items'         => 'All Journal Categories',
		'edit_item'         => 'Edit Journal Category',
		'update_item'       => 'Update Journal Category',
		'add_new_item'      => 'Add New Journal Category',
		'new_item_name'     => 'New Journal Category',
		'menu_name'         => 'Journal Categories'
	);
	// register taxonomy
	register_taxonomy( 'journalcat', 'journal', array(
		'hierarchical' => true,
		'labels' => $labels,
		'query_var' => true,
		'show_admin_column' => true
	) );
}
add_action( 'init', 'wpmudev_register_journal_taxonomy' );
?>

<?php 
/*Plugin Name: Create Adventure Category Taxonomy
Description: This plugin registers the 'adventure category' taxonomy and applies it to the 'adventure' post type.
Version: 1.0
License: GPLv2
*/

// register two taxonomies to go with the post type
function wpmudev_register_adventure_taxonomy() {
	// set up labels
	$labels = array(
		'name'              => 'Adventure Categories',
		'singular_name'     => 'Adventure Category',
		'search_items'      => 'Search Adventure Categories',
		'all_items'         => 'All Adventure Categories',
		'edit_item'         => 'Edit Adventure Category',
		'update_item'       => 'Update Adventure Category',
		'add_new_item'      => 'Add New Adventure Category',
		'new_item_name'     => 'New Adventure Category',
		'menu_name'         => 'Adventure Categories'
	);
	// register taxonomy
	register_taxonomy( 'adventurecat', 'adventure', array(
		'hierarchical' => true,
		'labels' => $labels,
		'query_var' => true,
		'show_admin_column' => true
	) );
}
add_action( 'init', 'wpmudev_register_adventure_taxonomy' );
?>