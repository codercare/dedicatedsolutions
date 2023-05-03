<?php

function ds_assets() {
	/**Online link of js and css */
	/*wp_enqueue_script( 'bootstrap-js', '//cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js', array( 'jquery' ), true );
	wp_enqueue_style( 'bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'fullpage-css', get_template_directory_uri() . '/assets/css/fullpage.min.css', array(), _S_VERSION, 'all' );
	wp_enqueue_script( 'ds-jquery-slim', get_template_directory_uri() . '/assets/js/jquery-3.3.1.slim.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'ds-fullpage-scroll-asset', get_template_directory_uri() . '/assets/js/fullpage.min.js', array(), _S_VERSION, true );
	*/

	
	/**Local link of js and css */
	wp_enqueue_style( 'bootstrap-loc', get_template_directory_uri() . '/public/css/bootstrap.min.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'font-awesome-loc', get_template_directory_uri() . '/public/css/all.min.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'fullpage-css', get_template_directory_uri() . '/public/css/fullpage.min.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'ds-stylesheet', get_template_directory_uri() . '/dist/assets/css/bundle.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'shooping-cart', get_template_directory_uri() . '/public/css/shooping-cart.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'animation', get_template_directory_uri() . '/public/css/animation.css', array(), _S_VERSION, 'all' );


   
	// wp_enqueue_style( 'jquery2.2.4', get_template_directory_uri() . '/public/js/jquery-2.2.4.min.js', array(), _S_VERSION, 'all' );
	//wp_enqueue_script( 'ds-jquery-3.3.1-min', get_template_directory_uri() . '/public/js/jquery-3.3.1.min.js', array(), _S_VERSION, true );

	
	wp_enqueue_style( 'simple-pagination-style', get_template_directory_uri() . '/public/css/simplePagination.css', array(), _S_VERSION, 'all' );
	

	wp_enqueue_script( 'simple-pagination-js', get_template_directory_uri() . '/public/js/jquery.simplePagination.js', array(), _S_VERSION, true );

	// wp_enqueue_style( 'jquery-v3.3.1-online', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), _S_VERSION, 'all' );
	// wp_enqueue_style( 'simple-paagination-online', get_template_directory_uri() . '/public/js/jquery.simplePagination.js', array(), _S_VERSION, 'all' );
	

	//// wp_enqueue_script( 'ds-jquery-slim', get_template_directory_uri() . '/public/js/jquery-3.3.1.slim.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bootstrap-js-loc', get_template_directory_uri() . '/public/js/bootstrap.bundle.min.js', array( 'jquery' ), true );
	wp_enqueue_script( 'validate-js-loc', get_template_directory_uri() . '/public/js/validate.min.js',_S_VERSION, true );
	wp_enqueue_script( 'ds-fullpage-scroll', get_template_directory_uri() . '/public/js/fullpage.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'ds-gridder-plugin', get_template_directory_uri() . '/public/js/jquery.gridder.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'ds-scripts', get_template_directory_uri() . '/dist/assets/js/bundle.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'aos', get_template_directory_uri() . '/public/js/aos.js', array( 'jquery' ), _S_VERSION, true );
	
	// wp_enqueue_style( 'jquery-2.2.4.min', 'https://code.jquery.com/jquery-2.2.4.min.js', array(), _S_VERSION, 'all' );
	//wp_enqueue_style( 'popper', 'https://unpkg.com/popper.js/dist/umd/popper.min.js', array(), _S_VERSION, 'all' );

	
	


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
}
add_action( 'wp_enqueue_scripts', 'ds_assets' );


function ds_admin_assets() {
	wp_enqueue_style( 'ds-admin-stylesheet', get_template_directory_uri() . '/dist/assets/css/admin.css', array(), _S_VERSION, 'all' );
	wp_enqueue_script( 'ds-admin-scripts', get_template_directory_uri() . '/dist/assets/js/admin.js', array(), _S_VERSION, true );
}
add_action( 'admin_enqueue_scripts', 'ds_admin_assets' );


function ds_customize_preview_js() {
	wp_enqueue_script( 'ds-customize-preview', get_template_directory_uri() . '/dist/assets/js/customize-preview.js', array( 'customize-preview', 'jquery' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'ds_customize_preview_js' );
