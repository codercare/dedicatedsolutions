<?php
/**
 * Functions which is used to create login and registration form
 * data store and display in user meta details
 *
 * @package dedicatedsolutions
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */

add_filter( 'gettext', 'change_registration_username_errors', 10, 3 );
function change_registration_username_errors( $translations, $text, $domain ) {
	if ( $domain == 'default' ) {

		if ( $text == 'Username may not be longer than 60 characters.' ) {
			$translations = 'Email address may not be longer than 60 characters.';
		} elseif ( $text == 'Sorry, that username already exists!' ) {
			$translations = 'Sorry, that email address already exists!';
		} elseif ( $text == 'Sorry, that username is not allowed.' ) {
			$translations = 'Sorry, that email address is not allowed.';
		}
	}

	return $translations;
}

add_filter( 'gettext', 'change_login_username_errors', 10, 3 );
function change_login_username_errors( $translations, $text, $domain ) {
	if ( $domain == 'default' ) {

		if ( $text == '<strong>ERROR</strong>: Invalid username.' ) {
			$translations = '<strong>ERROR</strong>: Invalid email.';
		} elseif ( $text == '<strong>ERROR</strong>: The password you entered for the username %s is incorrect.' ) {
			$translations = '<strong>ERROR</strong>: The password you entered for the email address %s is incorrect.';
		} elseif ( $text == '<strong>ERROR</strong>: The username field is empty.' ) {
			$translations = '<strong>ERROR</strong>: The email field is empty.';
		} elseif ( $text == '<strong>ERROR</strong>: Invalid username or incorrect password.' ) {
			$translations = '<strong>ERROR</strong>: Invalid email address or incorrect password.';
		}
	}

	return $translations;
}


function ds_handle_registration(){

	if( $_POST['action'] == 'register_action' ) {
	
	$error = '';
	
	 $firstName = esc_attr(trim( $_POST['firstName'] ));
	 $lastName = esc_attr(trim( $_POST['lastName'] ));
	 $email = esc_attr(trim( $_POST['email'] ));
	 $altEmail = esc_attr(trim( $_POST['altEmail']));
	 $phone = esc_attr(trim( $_POST['phone']));
	 $altPhone = esc_attr(trim( $_POST['altPhone']));
	 $country = esc_attr(trim( $_POST['country']));
	 $state = esc_attr(trim( $_POST['state']));
	 $address = esc_attr(trim( $_POST['address']));
	 $city = esc_attr(trim( $_POST['city']));
	 $zipCode = esc_attr(trim( $_POST['zipCode']));
	 $companyName = esc_attr(trim( $_POST['companyName']));
	 $companyUrl = esc_attr(trim( $_POST['companyUrl']));
	 $password = trim( $_POST['password']);
	 $confirmPassword = esc_attr(trim( $_POST['confirmPassword']));

	/** Server side validation of registration form */
	
	if( empty($firstName) )
	 	 '<p class="error">Enter First Name</p>';
	 elseif( !preg_match("/^[a-zA-Z'-]+$/",$firstName) )
	 	$error .= '<p class="error">Enter Valid First Name</p>';
	
	if( empty( $lastName ) )
		$error .= '<p class="error">Enter Last Name</p>';
	elseif( !preg_match("/^[a-zA-Z'-]+$/",$lastName) )
		$error .= '<p class="error">Enter Valid Last Name</p>';
	

	if( empty( $email) )
	 $error .= '<p class="error">Enter Email Address</p>';
	 elseif( !filter_var($email, FILTER_VALIDATE_EMAIL) )
	 $error .= '<p class="error">Enter Valid Email</p>';
	
	if( empty( $password ) )
	 $error .= '<p class="error">Password should not be blank</p>';

	if( empty( $confirmPassword ) )
	 $error .= '<p class="error">Confirm Password should not be blank</p>';
	
	 if($password  != $confirmPassword )
	  $error .= '<p class="error">Password and Confirm Password must be matched</p>';
	
	

	 if( empty( $error ) ){
		$email_as_username =  explode('@',$email);
		$user_is_esist = username_exists($email_as_username[0]);
		
		/** Generate addition number to make user unique if user exists */
		if($user_is_esist){
			$add = rand('1','10');
			$status = wp_create_user( $email_as_username[0].$add, $password ,$email);
		}else{
			$status = wp_create_user( $email_as_username[0], $password ,$email );
		}

	
		$user_id = $status;
		
		
		if( is_wp_error($status) ){
		
			$msg = '';
			
			foreach( $status->errors as $key=>$val ){
			
				foreach( $val as $k=>$v ){
				
					$msg = '<li>'.$v.'</li>';
				}
			}
			
			// echo $msg;
			echo json_encode(array('success' => 0, 'message' =>'Error!','message_data'=>$msg));


		
		}else{
			/** Update User Registration Billing meta into Database */
			
	        wp_update_user( array( 'ID' => $user_id, 'user_url' => $companyUrl));

			update_user_meta( $user_id, 'first_name',$firstName);
			update_user_meta( $user_id, 'last_name',$lastName);
			
			update_user_meta( $user_id, 'billing_email',$email);
			update_user_meta( $user_id, 'alternative_email',$altEmail);
			
			update_user_meta( $user_id, 'billing_phone',$phone);
			update_user_meta( $user_id, 'alternative_phone',$altPhone);
			
			
			update_user_meta( $user_id, 'billing_country',$country);
			update_user_meta( $user_id, 'billing_state',$state);
		
			update_user_meta( $user_id, 'billing_address_1',$address);
			update_user_meta( $user_id, 'billing_city',$city);
			update_user_meta( $user_id, 'billing_postcode',$zipCode);
		
			update_user_meta( $user_id, 'billing_company',$companyName);
			
			update_user_meta( $user_id, 'company_url',$companyUrl);			
			
			echo json_encode(array('success' => 1, 'message' =>'Registration Successful'));
		}
	
	}
	 else{
		echo json_encode(array('success' => 0, 'message' =>'Validation Error, Please fill all mendatory fields','message_data'=>$error));
	 }

	 die(1);
	 }
}

add_action( 'wp_ajax_register_action', 'ds_handle_registration' );
add_action( 'wp_ajax_nopriv_register_action', 'ds_handle_registration' );
	