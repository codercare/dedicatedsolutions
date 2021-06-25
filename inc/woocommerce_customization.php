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
	// echo '<p>Please fill all required fields to buy Server from Dedicated Servers Thank you!</p>';
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
// add_filter( 'woocommerce_checkout_fields','reorder_woo_billing_fields' );
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


add_filter('woocommerce_checkout_fields', 'addBootstrapToCheckoutFields' );
function addBootstrapToCheckoutFields($fields) {
    foreach ($fields as &$fieldset) {
        foreach ($fieldset as &$field) {
            // if you want to add the form-group class around the label and the input
            $field['class'][] = 'form-group'; 

            // add form-control to the actual input
            $field['input_class'][] = 'form-control';
        }
    }
    return $fields;
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

// Display the chosen delivery information
add_filter( 'woocommerce_get_order_item_totals', 'chosen_delivery_item_order_totals', 10, 3 );
function chosen_delivery_item_order_totals( $total_rows, $order, $tax_display ) {;
    $new_total_rows = [];

    // Loop through Order total lines
    // foreach($total_rows as $key => $total ){
        // Get the chosen delivery values
        // $delivery_option  = $order->get_meta('_delivery_option');
        // $delivery_datetime = $order->get_meta('_delivery_datetime');

        // Display delivery information before payment method
        // if( ! empty($delivery_option) && 'payment_method' === $key ){
        //     $label  = empty($delivery_datetime) ? __('Delivery') : __('Delivery Date');
        //     $value  = empty($delivery_datetime) ? __('AZAP', $domain) : $delivery_datetime;

            // Display 'Delivery method' line
            $new_total_rows['chosen_delivery'] = array( 'label' => $label,'value' => $value );
        // }
        $new_total_rows[$key] = $total;
    // }

    return $new_total_rows;
}


function wc_get_hearaboutus_options(){
    return array(
        ''          => 'Please select...',
        'option_1'  => 'Social Media (e.g Facebook)',
        'option_2'  => 'Search Engine (e.g Google)',
        'option_3'  => 'Meditation Class',
        'option_4'  => 'Leaflets/Flyers/Posters',
        'option_5'  => 'Website',
        'option_6'  => 'Email Newsletter',
        'option_7'  => 'Other',
    );
}

// Add the field to the checkout
add_action( 'woocommerce_after_order_notes', 'my_custom_checkout_field' );
function my_custom_checkout_field( $checkout ) {

    echo '<div id="my_custom_checkout_field"><h3>' . __('Please help us understand our customers so that we can improve future events (Optional)') . '</h3>';

    woocommerce_form_field( '_hearaboutus', array(
        'type'    => 'select',
        'class'   => array('my-field-class form-row-wide'),
        'label'   => __('How did you hear about us? &nbsp;'),
        'options' => wc_get_hearaboutus_options(),
    ), $checkout->get_value( '_hearaboutus' ) );

    echo '</div>';

}

// Update the order meta with field value
add_action( 'woocommerce_checkout_create_order', 'custom_checkout_field_create_order', 10, 2 );
function custom_checkout_field_create_order( $order, $data ) {
    if ( isset($_POST['_hearaboutus']) && ! empty($_POST['_hearaboutus']) ) {
         $order->update_meta_data( '_hearaboutus', sanitize_text_field($_POST['_hearaboutus']) );
    }
}

// Add the fields to order email
add_action('woocommerce_email_order_details', 'action_after_email_order_details', 25, 4 );
function action_after_email_order_details( $order, $sent_to_admin, $plain_text, $email ) {
    if( $hearaboutus = $order->get_meta('_hearaboutus') ) {
        // The data
        $label = __('How did you hear about us?');
        $value = wc_get_hearaboutus_options()[$hearaboutus];

        // The HTML Structure
        $html_output = '<h2>' . __('Extra data') . '</h2>
        <div class="discount-info"><table cellspacing="0" cellpadding="6"><tr>
        <th>' . $label . '</th><td>' . $value . '</td>
        </tr></tbody></table></div><br>';

        // The CSS styling
        $styles = '<style>
            .discount-info table{width: 100%; font-family: \'Helvetica Neue\', Helvetica, Roboto, Arial, sans-serif;
                color: #737373; border: 2px solid #e4e4e4; margin-bottom:8px;}
            .discount-info table th, table.tracking-info td{ text-align: left; color: #737373; border: none; padding: 12px;}
            .discount-info table td{ text-align: left; color: #737373; border: none; padding: 12px; }
        </style>';

        // The Output CSS + HTML
        echo $styles . $html_output;
    }
}

// Display field value on the order edit page
add_action( 'woocommerce_admin_order_data_after_billing_address', 'my_custom_checkout_field_display_admin_order_meta', 10, 1 );
function my_custom_checkout_field_display_admin_order_meta( $order ) {
    if( $hearaboutus = $order->get_meta('_hearaboutus') ) {
        $value = wc_get_hearaboutus_options()[$hearaboutus];
        echo '<p><strong>'.__('How did you hear about us?').'</strong> ' . $value . '</p>';
    }
}