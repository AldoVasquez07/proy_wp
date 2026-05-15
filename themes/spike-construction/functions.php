<?php
/**
 * Spike Construction functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Spike Construction
 */

if ( ! defined( 'SPIKE_CONSTRUCTION_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'SPIKE_CONSTRUCTION_VERSION', wp_get_theme()->get( 'Version' ) );
}

define( 'SPIKE_CONSTRUCTION_URL', trailingslashit( get_template_directory_uri() ) );

if ( ! function_exists( 'spike_construction_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function spike_construction_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Spike Construction, use a find and replace
		 * to change 'spike-construction' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'spike-construction', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'align-wide' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );
	}
endif;
add_action( 'after_setup_theme', 'spike_construction_setup' );

/**
 * Enqueue scripts and styles.
 */
function spike_construction_scripts() {
	$theme_version = wp_get_theme()->get( 'Version' );

	// Register theme stylesheet.
	wp_enqueue_style( 'spike-construction-styles', get_theme_file_uri( '/style.css' ), array(), $theme_version );
}
add_action( 'wp_enqueue_scripts', 'spike_construction_scripts' );

/**
 * Info
 */
require get_theme_file_path( '/inc/admin/info.php' );

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function spike_construction_register_block_styles() {
		// Box shadow for columns, column, group and image
		register_block_style(
			'core/columns',
			array(
				'name'  => 'kb-box-shadow',
				'label' => __( 'Box Shadow', 'spike-construction' )
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'kb-box-shadow',
				'label' => __( 'Box Shadow', 'spike-construction' )
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'kb-box-shadow-medium',
				'label' => __( 'Box Shadow Medium', 'spike-construction' )
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'kb-box-shadow-large',
				'label' => __( 'Box Shadow Large', 'spike-construction' )
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'kb-box-shadow',
				'label' => __( 'Box Shadow', 'spike-construction' )
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'kb-box-shadow-medium',
				'label' => __( 'Box Shadow Medium', 'spike-construction' )
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'kb-box-shadow-large',
				'label' => __( 'Box Shadow Larger', 'spike-construction' )
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'kb-box-shadow',
				'label' => __( 'Box Shadow', 'spike-construction' )
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'kb-box-shadow-medium',
				'label' => __( 'Box Shadow Medium', 'spike-construction' )
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'kb-box-shadow-larger',
				'label' => __( 'Box Shadow Large', 'spike-construction' )
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'kb-box-shadow-hover',
				'label' => __( 'Box Shadow on Hover', 'spike-construction' )
			)
		);
		register_block_style(
			'core/columns',
			array(
				'name'  => 'kb-box-shadow-hover',
				'label' => __( 'Box Shadow on Hover', 'spike-construction' )
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'kb-box-shadow-hover',
				'label' => __( 'Box Shadow on Hover', 'spike-construction' )
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'kb-box-shadow-hover',
				'label' => __( 'Box Shadow on Hover', 'spike-construction' )
			)
		);

		// Secondary button
		register_block_style(
			'core/button',
			array(
				'name'   => 'kb-button-secondary',
				'label'  => __( 'Secondary', 'spike-construction' )
			)
		);
	}
	add_action( 'init', 'spike_construction_register_block_styles' );
}