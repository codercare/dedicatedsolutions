<?php
/**
 * Custom Post Types and Their feature listings for this theme
 * @package dedicatedsolutions
 */


// if ( function_exists( 'add_theme_support' ) ) {
//     add_theme_support( 'post-thumbnails' );
    // set_post_thumbnail_size( 150, 150, true ); // default Featured Image dimensions (cropped)
 
    // // additional image sizes
    // add_image_size( 'press_image', 600, 270, true );
    // add_image_size('banner_image', 1920,400, true);
    // add_image_size('banner_small_image', 1920,240, true);
    // add_image_size( 'press_image_c', 600, 270, array( 'center', 'center' ) );

//  }


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
    register_post_type('why-us', array(
        'labels' => array('name' => 'Why Us'),
        'public' => true,
        'menu_position'=> 21,
        'supports' => array('title','editor','thumbnail','excerpt'),
        'rewrite'=> array('slug'=> 'services'),
        'menu_icon' => 'dashicons-awards'
    ));

   // Testimonials 
   register_post_type('testimonials', array(
       'labels' => array('name' => 'Testimonials'),
       'public' => true,
       'menu_position'=> 22,
       'supports' => array('title','editor','thumbnail','excerpt'),
       'rewrite'=> array('slug'=> 'testimonials'),
       'menu_icon' => 'dashicons-twitch'
   ));

  

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
       'menu_position'=> 24,
       'supports' => array('title','editor','thumbnail','excerpt'),
       'rewrite'=> array('slug'=> 'awards'),
       'menu_icon' => 'dashicons-awards'
   )); 
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
