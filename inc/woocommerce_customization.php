<?php
/**
 * Woocommerce Customization to make custom shopping feature
 *
 * @package dedicatedsolutions
 */

function dedicated_add_woocommerce_support() {
	add_theme_support( 'woocommerce', array(
		'thumbnail_image_width' => 150,
		'single_image_width'    => 300,
        'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 2,
            'max_rows'        => 8,
            'default_columns' => 4,
            'min_columns'     => 2,
            'max_columns'     => 5,
        ),
	) );
}
add_action( 'after_setup_theme', 'dedicated_add_woocommerce_support' );


add_action( 'woocommerce_before_checkout_form', 'checkout_message' );
function checkout_message() {
	echo '<p>Please fill all required fields to buy Server from Dedicated Servers Thank you!</p>';
}

/**
 * Another possible use is adding the following code snippet 
 * to make the Phone Number field in the checkout process optional.
 */

// add_filter( 'woocommerce_billing_fields', 'my_optional_fields' );
// function my_optional_fields( $address_fields ) {
// 	$address_fields['billing_phone']['required'] = false;
// 	return $address_fields;
// }

/* Customization of global wrapper class of product page */
// remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
// remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );


/**  
 * Remove related product listing woocommerce
 */
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
