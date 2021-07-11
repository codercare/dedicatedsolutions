<?php
/**
 * Custom Post Types and Their feature listings for this theme
 * @package dedicatedsolutions
 */


 /*
* Add Image sizes
*/
if ( !function_exists('dedicated_add_image_sizes') ){

	function dedicated_add_image_sizes() {
        
        // Add your own image sizes
        add_image_size( 'small_icon', 40, 40);
        add_image_size( 'mid_icon', 80, 80);
        add_image_size( 'press_image', 600, 270);
        add_image_size( 'press_image_center', 600, 270, array( 'center', 'center' ) );       
        add_image_size( 'banner_small_height', 1920,240,true);
        add_image_size( 'banner_image', 1920,400,true);       
    }
}
add_action( 'after_setup_theme', 'dedicated_add_image_sizes' );


function required_custom_post_types(){
   
   // Services
   /*register_post_type('services', array(
       'labels' => array('name' => 'Our Services'),
       'public' => true,
       'menu_position'=> 24,
       'supports' => array('title','editor','thumbnail','excerpt'),
       'rewrite'=> array('slug'=> 'services'),
       'menu_icon' => 'dashicons-sos'
   ));
   */
    // Why Us
    /*
    register_post_type('why-us', array(
        'labels' => array('name' => 'Why Us'),
        'public' => true,
        'menu_position'=> 18,
        'supports' => array('title','editor','thumbnail','excerpt'),
        'rewrite'=> array('slug'=> 'services'),
        'menu_icon' => 'dashicons-awards'
    ));
    */

    // Testimonials 
    $testimonial_labels = array(
        'name'                  => _x( 'Testimonials', 'Post type general name', 'dedicatedsolutions' ),
        'singular_name'         => _x( 'Testimonial', 'Post type singular name', 'dedicatedsolutions' ),
        'menu_name'             => _x( 'Testimonials', 'Admin Menu text', 'dedicatedsolutions' ),
        'name_admin_bar'        => _x( 'Testimonial', 'Add New on Toolbar', 'dedicatedsolutions' ),
        'add_new'               => __( 'Add Testimonial', 'dedicatedsolutions' ),
        'add_new_item'          => __( 'Add New Testimonial', 'dedicatedsolutions' ),
        'new_item'              => __( 'New Testimonial', 'dedicatedsolutions' ),
        'edit_item'             => __( 'Edit Testimonial', 'dedicatedsolutions' ),
        'view_item'             => __( 'View Testimonial', 'dedicatedsolutions' ),
        'all_items'             => __( 'All Testimonials', 'dedicatedsolutions' ),
        'items_list_navigation' => _x( 'Testimonials list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'dedicatedsolutions' ),
        'items_list'            => _x( 'Testimonials list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'dedicatedsolutions' ),
    );

    $testimonial_args = array(
        'labels'             => $testimonial_labels,
        'public'             => true,
        'rewrite'            => array( 'slug' => 'testimonials' ),
        'capability_type'    => 'post',
        'menu_position'      => 19,
        'menu_icon' => 'dashicons-twitch',
        'supports'           => array( 'title','editor','thumbnail'),
    );
    register_post_type( 'testimonials', $testimonial_args );


   // Press Releases 
   register_post_type('press-release', array(
       'labels' => array('name' => 'Press Releases'),
       'public' => true,
       'menu_position'=> 23,
       'supports' => array('title','editor','thumbnail','excerpt'),
       'rewrite'=> array('slug'=> 'press-release'),
       'menu_icon' => 'dashicons-admin-post'
   ));

   // Awards 
   register_post_type('awards', array(
       'labels' => array('name' => 'Awards'),
       'public' => true,
       'menu_position'=> 23,
       'supports' => array('title','editor','thumbnail','excerpt'),
       'rewrite'=> array('slug'=> 'awards'),
       'menu_icon' => 'dashicons-awards'
   )); 




    $dedicated_labels = array(
        'name'                  => _x( 'Dedicated Servers', 'Post type general name', 'dedicatedsolutions' ),
        'singular_name'         => _x( 'Dedicated Server', 'Post type singular name', 'dedicatedsolutions' ),
        'menu_name'             => _x( 'Dedicated Servers', 'Admin Menu text', 'dedicatedsolutions' ),
        'name_admin_bar'        => _x( 'Dedicated Server', 'Add New on Toolbar', 'dedicatedsolutions' ),
        'add_new'               => __( 'Add Server', 'dedicatedsolutions' ),
        'add_new_item'          => __( 'Add New Dedicated Server', 'dedicatedsolutions' ),
        'new_item'              => __( 'New Dedicated Server', 'dedicatedsolutions' ),
        'edit_item'             => __( 'Edit Dedicated Server', 'dedicatedsolutions' ),
        'view_item'             => __( 'View Dedicated Server', 'dedicatedsolutions' ),
        'all_items'             => __( 'All Dedicated Servers', 'dedicatedsolutions' ),
        'items_list_navigation' => _x( 'Dedicated Servers list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'dedicatedsolutions' ),
        'items_list'            => _x( 'Dedicated Servers list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'dedicatedsolutions' ),
    );

    $dedicated_args = array(
        'labels'             => $dedicated_labels,
        'public'             => true,
        'rewrite'            => array( 'slug' => 'dedicated-servers' ),
        'capability_type'    => 'post',
        'menu_position'      => 19,
        'menu_icon' => 'dashicons-database-view',
        'supports'           => array( 'title'),
        'taxonomies'          => array( 'product_cat' ),
    );

    register_post_type( 'dedicated-servers', $dedicated_args );
}
add_action('init','required_custom_post_types');


/**
 * 
 * List Custom meta and Feature Image on testimonial custom post type
 */

add_filter('manage_testimonials_posts_columns', 'add_img_column');
add_filter('manage_testimonials_posts_custom_column', 'manage_img_column', 10, 2);
function add_img_column($columns) {
   $columns = array_slice($columns, 0, 1, true) + array("img" => "Photo") + array("title" => "Name") + array("company" => "Company")+ array_slice($columns, 1, count($columns) - 1, true);
   return $columns;
}

function manage_img_column($column_name, $post_id) {
   if( $column_name == 'img' ) {
       echo get_the_post_thumbnail($post_id, 'thumbnail');
   }
   else if($column_name == 'company'){
       echo get_post_meta($post_id, 'comapany_detail', true );
   }
   return $column_name;
}


/**
 * 
 * List Custom meta for Our Most Popular Dedicated Server Page
 * custom post type = dedicated-servers
 */
add_filter('manage_dedicated-servers_posts_columns', 'add_servertype_column');
add_filter('manage_dedicated-servers_posts_custom_column', 'manage_servertype_column', 10, 2);
function add_servertype_column($columns) {
   $columns = array_slice($columns, 0, 1, true) +  array("title" => "Server Title") + array("server_type" => "Server Type")+ array_slice($columns, 1, count($columns) - 1, true);
   return $columns;
}

function manage_servertype_column($column_name, $post_id) {
   if($column_name == 'server_type'){
       echo get_post_meta($post_id, 'server_type', true );
   }
   return $column_name;
}
