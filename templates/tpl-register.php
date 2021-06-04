<?php
/* Template Name: Customer Register */ 

/* Redirect user to home page if already registered
   Changed needed when we want redirect to login page
*/
if(is_user_logged_in()) {
	wp_safe_redirect( home_url(), 302 );
	exit();
}
get_header();
?>
<main id="site-main" class="site-main">
<?php

while ( have_posts() ) : the_post(); 

	$contact_banner = get_template_directory_uri() . '/dist/assets/images/contact-form-bg.png';
	$bg_image     = get_field( 'banner_bg_image' );
	if ( ! empty( $bg_image ) ) {
		$contact_banner = $bg_image['sizes']['banner_image'];
	}
?>
<main id="fullpage" class="site-main">
	<section class="section">
		<section class="page-banner about-page-banner" style="background-image:url('<?php echo $contact_banner; ?>')">
		<div class="wrapper">
			<div class="page-banner-content">
				<h1 class="large-banner__heading" style="text-align:left!important;">Register</h1>					
			</div>
		</div>
		</section>
	
		<section class="services-section page-section">
			<div class="wrapper">
			<div class="row align-items-center">				
				<div class="col-md-7">					
					<div class="contact-form">
					    <form name="wp_signup_form"  id="wp_signup_form" method="post">  
						    <div class="rows rows--gutters-small">
								<div class="rows__medium-12"><div id="error-message"></div></div>
								
								<div class="rows__medium-6">
									<label for="firstName"><?php _e( 'First Name', 'dedicatedsolutions' ); ?></label>
									<div class="form-group">									
										<input type="text" id="firstName" name="firstName" class="form-control" placeholder="Enter Your First Name">
									</div>
								</div>
								
								<div class="rows__medium-6">
									<label for="lastName"><?php _e( 'Last Name', 'dedicatedsolutions' ); ?></label>
									<div class="form-group">									
										<input type="text" id="lastName" name="lastName" class="form-control" placeholder="Enter Your Last Name">
									</div>
								</div>

								<div class="rows__medium-6">
									<label for="email"><?php _e( 'Email', 'dedicatedsolutions' ); ?> Used for login</label>
									<div class="form-group">									
										<input type="text" id="email" name="email" class="form-control" placeholder="Enter Your Email">
									</div>
								</div>

								<div class="rows__medium-6">
									<label for="altEmail"><?php _e( 'Alternative  Email', 'dedicatedsolutions' ); ?></label>
									<div class="form-group">									
										<input type="text" id="altEmail" name="altEmail" class="form-control" placeholder="Enter Your Alternative Email">
									</div>
								</div>

								<div class="rows__medium-6">
									<label for="phone"><?php _e( 'Phone Number', 'dedicatedsolutions' ); ?></label>
									<div class="form-group">									
										<input type="text" id="phone" name="phone" class="form-control" placeholder="Enter Your Phone Number">
									</div>
								</div>
								
								<div class="rows__medium-6">
									<label for="altPhone"><?php _e( 'Alternative Phone Number', 'dedicatedsolutions' ); ?></label>
									<div class="form-group">									
										<input type="text" id="altPhone" name="altPhone" class="form-control" placeholder="Enter Your Alternative Phone Number">
									</div>
								</div>

								<div class="rows__medium-6">
									<label for="country"><?php _e( 'Country', 'dedicatedsolutions' ); ?></label>
									<div class="form-group">									
										<select id="country" name="country"  class="form-control">
											<option value="US">United State</option>
											<option value="NP">Nepal</option>
										</select>
									</div>
								</div>
								<div class="rows__medium-6">
									<label for="state"><?php _e( 'State', 'dedicatedsolutions' ); ?></label>
									<div class="form-group">									
										<select id="state" name="state"  class="form-control">
											<option value="AZ">Albama</option>
											<option value="CA">Kathmandu</option>
										</select>
									</div>
								</div>

								<div class="rows__medium-12">
									<label for="address"><?php _e( 'Address', 'dedicatedsolutions' ); ?></label>
									<div class="form-group">									
										<input type="text" id="address" name="address" class="form-control" placeholder="Enter Your Address">
									</div>
								</div>
								<div class="rows__medium-6">
									<label for="city"><?php _e( 'City', 'dedicatedsolutions' ); ?></label>
									<div class="form-group">									
										<input type="text" id="city" name="city" class="form-control" placeholder="Enter Your City Name">
									</div>
								</div>
								<div class="rows__medium-6">
									<label for="zipCode"><?php _e( 'Zip Code', 'dedicatedsolutions' ); ?></label>
									<div class="form-group">									
										<input type="text" id="zipCode" name="zipCode" class="form-control" placeholder="Enter Your City Name">
									</div>
								</div>

								<div class="rows__medium-6">
									<label for="companyName"><?php _e( 'Company Name', 'dedicatedsolutions' ); ?></label>
									<div class="form-group">									
										<input type="text" id="companyName" name="companyName" class="form-control" placeholder="Enter Your Company Name">
									</div>
								</div>
								<div class="rows__medium-6">
									<label for="companyUrl"><?php _e( 'Company URL', 'dedicatedsolutions' ); ?></label>
									<div class="form-group">									
										<input type="text" id="companyUrl" name="companyUrl" class="form-control" placeholder="Enter Your Company URL">
									</div>
								</div>

								<div class="rows__medium-6">
									<label for="userpassword"><?php _e( 'Password', 'dedicatedsolutions' ); ?></label>
									<div class="form-group">									
										<input type="password" id="userpassword" name="userpassword" class="form-control" placeholder="Enter Password">
									</div>
								</div>

								<div class="rows__medium-6">
									<label for="confirmPassword"><?php _e( 'Confirm Password', 'dedicatedsolutions' ); ?></label>
									<div class="form-group">									
										<input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="Enter Confirm Password">
									</div>
								</div>						
							
								<div class="rows__medium-12">
									<div class="btn-center">
										<button id="register" value="Register"  class="btn--orange">Register </button>
									</div>
								</div>
							</div>
						</form>
					</div>		
				</div>
				<div class="col-md-5">
					<div class="get-in-touch">
					<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/order_image.png'; ?>" alt="capthca">
					</div>
				</div>
			</div>
			</div>
		</section>
	</section>
</main>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
