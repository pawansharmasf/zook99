<?php
/* =Products Post type.
*********************************************************************************/
add_action('init', 'product_post');

function product_post() {
 
	$labels = array(
    'name'               => 'Products',
    'singular_name'      => 'Product',
    'add_new'            => 'Add new',
    'add_new_item'       => 'Add new product',
    'edit_item'          => 'Edit product',
    'new_item'           => 'New product',
    'all_items'          => 'All products',
    'view_item'          => 'View product',
    'search_items'       => 'Search products',
    'not_found'          => 'Product not found',
    'not_found_in_trash' => 'Not found in trash',
    'parent_item_colon'  => '',
    'menu_name'          => 'Products'
  );
 
	$args = array(
		'labels' => $labels,
		'description' => 'products',
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'has_acrhive' => true,
		'menu_position' => 20,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'products' ),
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array('title', 'thumbnail', 'editor', 'page-attributes' )
	  ); 
 
	register_post_type( 'products' , $args );
}
// Register Custom Taxonomy
function custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Product Categories', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Product Category', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Product Categories', 'text_domain' ),
		'all_items'                  => __( 'All Product Categories', 'text_domain' ),
		'parent_item'                => __( 'Parent Product Category', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Product Category:', 'text_domain' ),
		'new_item_name'              => __( 'New Product Category', 'text_domain' ),
		'add_new_item'               => __( 'Add New Product Category', 'text_domain' ),
		'edit_item'                  => __( 'Edit Product Category', 'text_domain' ),
		'update_item'                => __( 'Update Product Category', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Product Categories with commas', 'text_domain' ),
		'search_items'               => __( 'Search Product Category', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Product Categories', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used Product Categories', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'product-type', 'products', $args );

}

// Hook into the 'init' action
add_action( 'init', 'custom_taxonomy', 0 );
?>