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




//Reordering woocommerce billing form on checkout page
add_filter( 'woocommerce_checkout_fields','reorder_woo_billing_fields' );
function reorder_woo_billing_fields( $fields ) {
    //$fields2['billing']['billing_email'] = $fields['billing']['billing_email'];
    $fields2['billing']['billing_first_name'] = $fields['billing']['billing_first_name'];
    $fields2['billing']['billing_last_name'] = $fields['billing']['billing_last_name'];
    $fields2['billing']['billing_company'] = $fields['billing']['billing_company'];
    $fields2['billing']['billing_address_1'] = $fields['billing']['billing_address_1'];
    $fields2['billing']['billing_address_2'] = $fields['billing']['billing_address_2'];
    $fields2['billing']['billing_city'] = $fields['billing']['billing_city'];
    $fields2['billing']['billing_country'] = $fields['billing']['billing_country'];
    $fields2['billing']['billing_state'] = $fields['billing']['billing_state'];
    $fields2['billing']['billing_postcode'] = $fields['billing']['billing_postcode'];
    $fields2['billing']['billing_phone'] = $fields['billing']['billing_phone'];

    $fields2['billing']['billing_country']['class'] = array('box', 'form-row form-row-first address-field update_totals_on_change validate-required woocommerce-validated');
    $fields2['billing']['billing_state']['class'] = array('box', 'form-row form-row-last address-field validate-required validate-state woocommerce-invalid woocommerce-invalid-required-field');
    $fields2['billing']['billing_postcode']['class'] = array('box', 'form-row form-row-first address-field validate-required validate-postcode');
    $fields2['billing']['billing_phone']['class'] = array('box', 'form-row form-row-last validate-required validate-phone');
    //$fields2['billing']['billing_email']['class'] = array('box', 'form-row form-row-wide validate-required validate-email');
    $fields2['billing']['billing_postcode']['clear'] = '';
    $fields2['shipping'] = $fields['shipping'];
    $fields2['account'] = $fields['account'];
    $fields2['order'] = $fields['order'];

     return $fields2;
}

/*
add_action( 'woocommerce_checkout_init', 'woocommerce_countries_states', 10, 1 );
function woocommerce_countries_states( $checkout ) {
    global $woocommerce;
    $countries_obj   = new WC_Countries();
    $countries   = $countries_obj->__get('countries');
    $default_country = $countries_obj->get_base_country();
    $default_county_states = $countries_obj->get_states( $default_country );


    $checkout->checkout_fields['account']['billing_country'] = array(
        'type'              => 'select',
        'label'             => __( 'Default Contries', 'woocommerce' ),
        'required'          => true,
        'options'    => $countries
    );

    $checkout->checkout_fields['account']['billing_country'] = array(
        'type'              => 'select',
        'label'             => __( 'Default Contries', 'woocommerce' ),
        'required'          => true,
         'options'    => $default_county_states
    );
}
*/