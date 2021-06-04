<?php
function ds_register_menu() {
	register_nav_menus(
		array(
			'header-nav-menu'   => esc_html__( 'Header Navigation Menu', '_themename' ),
		)
	);
}
add_action( 'init', 'ds_register_menu' );