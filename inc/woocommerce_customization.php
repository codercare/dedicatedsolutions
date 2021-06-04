<?php
/**
 * Woocommerce Customization to make custom shopping feature
 *
 * @package dedicatedsolutions
 */

 

// function mytheme_add_woocommerce_support() {
// add_theme_support( 'woocommerce' );
// }
// add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );


add_action( 'woocommerce_before_checkout_form', 'checkout_message' );
function checkout_message() {
	echo '<p>Please fill all required fields. edited by Prakash Bhandari Thank you!</p>';
}

/**
 * Another possible use is adding the following code snippet 
 * to make the Phone Number field in the checkout process optional.
 */

add_filter( 'woocommerce_billing_fields', 'my_optional_fields' );
function my_optional_fields( $address_fields ) {
	$address_fields['billing_phone']['required'] = false;
	return $address_fields;
}

