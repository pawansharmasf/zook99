<?php
/* =Sets up theme defaults and registers the various WordPress features that our theme supports.
*********************************************************************************/
function theme_setup() {
	add_editor_style();
	register_nav_menu( 'primary', 'Main menu' );
	register_nav_menu( 'footer1', 'Footer Menu 1' );
	register_nav_menu( 'footer2', 'Footer Menu 2' );

	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );	

	if ( function_exists('register_sidebar') ) {
		register_sidebar(array('name'=>'Single Page',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
		));
	}

}
add_action( 'after_setup_theme', 'theme_setup' );


/* =Enqueues scripts and styles for front-end.
**************************************************/
if (!is_admin()) 
add_action("wp_enqueue_scripts", "add_scripts_styles");

function add_scripts_styles() {

	//Styles
	global $wp_styles;
	
	wp_enqueue_script('jquery');

	wp_register_script(  
		'customSript',  
		 get_template_directory_uri() . '/javascripts/custom.js',
		 array('jquery' ),
		 '', true   
	 );
	wp_enqueue_script('customSript');


	wp_enqueue_style( 'main-stylesheet', get_stylesheet_uri() );

}


?>