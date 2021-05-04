<?php

function ds_assets() {
	
	wp_enqueue_script( 'bootstrap-js', '//cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js', array( 'jquery' ), true );
	wp_enqueue_style( 'bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css', array(), '1.0.0', 'all' );
	wp_enqueue_script( 'ds-scripts', get_template_directory_uri() . '/dist/assets/js/bundle.js', array( 'jquery' ), false, true );
	wp_enqueue_style( 'ds-stylesheet', get_template_directory_uri() . '/dist/assets/css/bundle.css', array(), '1.0.0', 'all' );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ds_assets' );


function ds_admin_assets() {
	wp_enqueue_style( 'ds-admin-stylesheet', get_template_directory_uri() . '/dist/assets/css/admin.css', array(), '1.0.0', 'all' );
	wp_enqueue_script( 'ds-admin-scripts', get_template_directory_uri() . '/dist/assets/js/admin.js', array(), '1.0.0', true );
}
add_action( 'admin_enqueue_scripts', 'ds_admin_assets' );


function ds_customize_preview_js() {
	wp_enqueue_script( 'ds-customize-preview', get_template_directory_uri() . '/dist/assets/js/customize-preview.js', array( 'customize-preview', 'jquery' ), '1.0.0', true );
}
add_action( 'customize_preview_init', 'ds_customize_preview_js' );
