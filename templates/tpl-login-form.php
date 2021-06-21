<?php
/* Template Name: Customer Login */ 

/* Login Customer to system
*/
if(is_user_logged_in()) {
	wp_safe_redirect( site_url('/my-account'), 302 );
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
				<h1 class="large-banner__heading" style="text-align:left!important;">Login</h1>					
			</div>
		</div>
		</section>
	
		<section class="services-section page-section">
			<div class="wrapper">
			<div class="row">				
				<div class="col-md-7">					
					<div class="contact-form">
					    <form name="wp_login_form"  id="wp_login_form" method="post">  
						    <div class="row">
							
								<div class="col-md-12">
									<div class="form-group">									
										<h1>Login</h1>
										<p>Don't have an account? <a href="#">Register</a></p>
									</div>
								</div>	
							
								<div class="col-md-12"><div id="message"></div></div>								
								<div class="col-md-12">
									<div class="form-group">									
										<input type="text" id="userEmail" name="userEmail" class="form-control" value="dipa@gmail.com" placeholder="Enter Your Email">
									</div>
								</div>								
								<div class="col-md-12">
									<div class="form-group">									
										<input type="password" id="password" name="password" class="form-control" value="12345678" placeholder="Password">
									</div>
								</div>	
								<div class="col-md-12">
									<div class="form-group">									
										<input type="checkbox" id="remember" name="remember" value="1"> Remember Me
									</div>
								</div>	
								<div class="col-md-12">
									<div class="btn-center">
										<button id="login" value="login"  class="btn--orange">Login </button>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
									<p>* By logging in, you agree to our Terms of Use and to receive Wix emails & updates and acknowledge that you read our Privacy Policy.</p>
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
