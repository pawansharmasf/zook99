<?php
/*
Plugin Name: Radium HTML5 Media
Plugin URI: http://radiumthemes.com/
Description: The plugin allows you to embed audio and video files anywhere on your site.
Author: Franklin M Gitonga
Author URI: http://radiumthemes.com/
Version: 1.0.4
License: GNU General Public License v2.0 or later
License URI: http://www.opensource.org/licenses/gpl-license.php
*/

/**
 * Copyright 2011  RadiumThemes.  (email : info@radiumthemes.com)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */


/**
 * Init class for Radium_Forms.
 *
 * Loads all of the necessary components for the radium forms plugin.
 *
 * @since 1.0.2
 *
 * @package	Radium_Forms
 * @author	Franklin Gitonga
 */

/** Load all of the necessary class files for the plugin */
include ('helper.php');
include ('shortcode.php');

class Radium_HTML5Media {

	/**
	 * Holds a copy of the object for easy reference.
	 *
	 * @since 1.0.0
	 *
	 * @var object
	 */
	private static $instance;

	/**
	 * Current version of the plugin.
	 *
	 * @since 1.0.0
	 *
	 * @var string
	 */
	public $version = '1.0.1';

	/**
	 * Holds a copy of the main plugin filepath.
	 *
	 * @since 1.0.0
	 *
	 * @var string
	 */
	private static $file = __FILE__;

	/**
	 * Constructor. Hooks all interactions into correct areas to start
	 * the class.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {

		self::$instance = $this;

		/** Run a hook before the form is loaded and pass the object */
		do_action_ref_array( 'radium_html5_media_init', array( $this ) );

		/** Load the plugin */
		add_action( 'init', array( $this, 'init' ) );

		/** Load assets */
		add_action( 'wp_enqueue_scripts', array( &$this, 'enqueue') );

	}

	/**
	 * loads all the actions and filters for the class.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		/** Load the plugin textdomain for internationalizing strings */
		//load_plugin_textdomain( 'radium_html5_media', false, plugin_basename( __FILE__ ) . '/languages/' );

		/** Instantiate all the necessary components of the plugin */

		define( 'RADIUM_HTML5_MEDIA_ASSETS_URL', apply_filters( 'radium_html5_media_assets_url', plugins_url( 'assets/',  __FILE__ ) )  );

		/** Fire up the shortcode */
		$radium_html5_media_shortcode	= new Radium_HTML5Media_Shortcode;
	}

	/**
	 * loads all the actions and filters for the class.
	 *
	 * @since 1.0.0
	 */
	public function enqueue() {

 		wp_enqueue_script('jquery');

 		wp_enqueue_script('radium_jplayer', RADIUM_HTML5_MEDIA_ASSETS_URL. 'js/jplayer.js', 'jquery', '1.0' , true);
		wp_enqueue_style('radium_html5_media_styles', RADIUM_HTML5_MEDIA_ASSETS_URL. 'css/style.css', false, '1.0', 'all');

	}

	/**
	 * Getter method for retrieving the main plugin filepath.
	 *
	 * @since 1.0.0
	 */
	public static function get_file() {

		return self::$file;

	}
}

new Radium_HTML5Media;