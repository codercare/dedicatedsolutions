<?php
/**
 * Contact 7 form Validation error message customization
 * 
 * @package dedicatedsolutions
 */


//Name Validaiton for First name and Last name text fields
add_filter( 'wpcf7_validate_text*', 'custom_text_validation_filter', 1, 2 );

function custom_text_validation_filter( $result, $tag ) {
	if ( 'first_name' == $tag->name ) {
		$your_name = isset( $_POST['first_name'] ) ? trim( $_POST['first_name'] ) : '';

		if (empty($your_name)) {
			$result->invalidate( $tag, "First name is required." );
		}else if (preg_match('/[0-9]/', $your_name)) {
			$result->invalidate( $tag, "Plz valid firstname!" );
		}
	}

	if ( 'last_name' == $tag->name ) {
		$your_lastname = isset( $_POST['last_name'] ) ? trim( $_POST['last_name'] ) : '';
		
		if (empty($your_lastname)) {
			$result->invalidate( $tag, "Last name is required." );
		}
		if (preg_match('/[0-9]/', $your_lastname)) {
			$result->invalidate( $tag, "Plz valid lastname!" );
		}
	}
	return $result;
}

//Email Validation null and invalid 
add_filter( 'wpcf7_validate_email*', 'custom_email_validation_filter', 1, 2 );

function custom_email_validation_filter( $result, $tag ) {
	if ( 'your_email' == $tag->name ) {
		$your_your_email  = isset( $_POST['your_email'] ) ? trim( $_POST['your_email'] ) : '';
		
		if (empty($your_your_email)) {
			$result->invalidate( $tag, "Email address is required." );
		}	
        if (!filter_var($your_your_email, FILTER_VALIDATE_EMAIL)) {	
			$result->invalidate( $tag, "Plz valid email!" );
		}
	}
return $result;
}

//Phone number fields only numbers 
add_filter( 'wpcf7_validate_tel*', 'custom_phone_validation_filter', 1, 2 );

function custom_phone_validation_filter( $result, $tag ) {
	if ( 'phone' == $tag->name ) {
		$your_phone  = isset( $_POST['phone'] ) ? trim( $_POST['phone'] ) : '';
		
		if (empty($your_phone)) {
			$result->invalidate( $tag, "Phone number is required." );
		}
		if (!preg_match("/^[+]?[0-9() -]*$/",$your_phone)) {
			$result->invalidate( $tag, "Plz valid phone number!" );
		}
	}
return $result;
}
