<?php
function easiestwp_scripts() {
	wp_enqueue_style( 'easiestwp-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'easiestwp_scripts' );

function easiestwp_setup() {
	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_image_size( 'easiestwp-thumbnail', 190, 130, true );

	add_image_size( 'easiestwp-hero', 1200, 630, true );

	register_nav_menus( array(
		'global' => 'Global Menu',
	) );

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
	) );
}
add_action( 'after_setup_theme', 'easiestwp_setup' );

function easiestwp_widgets_init() {
	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
	) );

	register_sidebar( array(
		'name' => 'Footer',
		'id' => 'footer',
	) );
}
add_action( 'widgets_init', 'easiestwp_widgets_init' );

function easiestwp_customize_register( $wp_customize ) {
	$wp_customize->add_section( 'theme_options', array(
		'title'    => 'Theme Options',
		'priority' => 130,
	) );

	$wp_customize->add_setting( 'front_page_content_1', array(
		'default'           => false,
		'sanitize_callback' => 'absint',
	) );
}
add_action( 'customize_register', 'easiestwp_customize_register' );
