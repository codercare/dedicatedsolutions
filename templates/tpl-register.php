<?php
/* Template Name: Customer Register */ 

/* Redirect user to home page if already registered
   Changed needed when we want redirect to login page
*/
if(is_user_logged_in()) {
	wp_safe_redirect(site_url('/my-account'), 302 );
	exit();
}
get_header();
?>

<main id="fullpage" class="site-main">
<?php
	while ( have_posts() ) : the_post(); 
?>
	<section class="section">
		<section class="page-banner ds-form-banner">
			<div class="wrapper">
				<div class="page-banner-content">
					<h1 class="ds-form-banner__heading">Dedicated<span>Solutions</span></h1>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Configure Product</a></li>
							<li class="breadcrumb-item active" aria-current="page">Login or Register</li>
							<li class="breadcrumb-item"><a href="#">Configure Payment Method</a></li>
							<li class="breadcrumb-item"><a href="#">Checkout</a></li>
						</ol>
					</nav>					
				</div>
			</div>
		</section>
	
		<section class="ds-form-order-section">
			<div class="wrapper">
				<div class="row">				
					<div class="col-md-7">
						<div class="ds-login-form ds-register">
							<div class="section-header">
								<h2 class="section-header__title">Register</h2>
								<p class="section-header__sub-title">Already have an account? <a href="<?php echo site_url('/login');?>">Login</a></p>
							</div>
							<form name="wp_signup_form"  id="wp_signup_form" method="post">  
								<div class="row">
									<div class="col-md-12"><div id="message"></div></div>
									<div class="col-md-6">
										<div class="form-group">									
											<label class="form-label" for="firstName"><?php _e( 'First Name', 'dedicatedsolutions' ); ?></label>
											<input type="text" id="firstName" name="firstName" class="form-control" placeholder="Enter Your First Name">
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group">									
											<label class="form-label" for="lastName"><?php _e( 'Last Name', 'dedicatedsolutions' ); ?></label>
											<input type="text" id="lastName" name="lastName" class="form-control" placeholder="Enter Your Last Name">
										</div>
									</div>
		
									<div class="col-md-6">
										<div class="form-group">									
											<label class="form-label" for="email"><?php _e( 'Email', 'dedicatedsolutions' ); ?></label>
											<input type="text" id="email" name="email" class="form-control" placeholder="Enter Your Email">
										</div>
									</div>
		
									<div class="col-md-6">
										<div class="form-group">									
											<label class="form-label" for="altEmail"><?php _e( 'Alternative  Email', 'dedicatedsolutions' ); ?></label>
											<input type="text" id="altEmail" name="altEmail" class="form-control" placeholder="Enter Your Alternative Email">
										</div>
									</div>
		
									<div class="col-md-6">
										<div class="form-group">									
											<label class="form-label" for="phone"><?php _e( 'Phone Number', 'dedicatedsolutions' ); ?></label>
											<input type="text" id="phone" name="phone" class="form-control" placeholder="Enter Your Phone Number">
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group">									
											<label class="form-label" for="altPhone"><?php _e( 'Alternative Phone Number', 'dedicatedsolutions' ); ?></label>
											<input type="text" id="altPhone" name="altPhone" class="form-control" placeholder="Enter Your Alternative Phone Number">
										</div>
									</div>
		
									<div class="col-md-6">
										<div class="form-group">									
											<label class="form-label" for="country"><?php _e( 'Country', 'dedicatedsolutions' ); ?></label>
											<select id="country" name="country"  class="form-control">
												<option value="US">United State</option>
												<option value="NP">Nepal</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">									
											<label class="form-label" for="state"><?php _e( 'State', 'dedicatedsolutions' ); ?></label>
											<select id="state" name="state"  class="form-control">
												<option value="AZ">Albama</option>
												<option value="CA">Kathmandu</option>
											</select>
										</div>
									</div>
		
									<div class="col-md-12">
										<div class="form-group">									
											<label class="form-label" for="address"><?php _e( 'Address', 'dedicatedsolutions' ); ?></label>
											<input type="text" id="address" name="address" class="form-control" placeholder="Enter Your Full Address">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">									
											<label class="form-label" for="city"><?php _e( 'City', 'dedicatedsolutions' ); ?></label>
											<input type="text" id="city" name="city" class="form-control" placeholder="Enter Your City Name">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">									
											<label class="form-label" for="zipCode"><?php _e( 'Zip Code', 'dedicatedsolutions' ); ?></label>
											<input type="text" id="zipCode" name="zipCode" class="form-control" placeholder="Enter Your Zip Code">
										</div>
									</div>
		
									<div class="col-md-6">
										<div class="form-group">									
											<label class="form-label" for="companyName"><?php _e( 'Company Name', 'dedicatedsolutions' ); ?></label>
											<input type="text" id="companyName" name="companyName" class="form-control" placeholder="Enter Your Company Name">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">									
											<label class="form-label" for="companyUrl"><?php _e( 'Company URL', 'dedicatedsolutions' ); ?></label>
											<input type="text" id="companyUrl" name="companyUrl" class="form-control" placeholder="Enter Your Company URL">
										</div>
									</div>
		
									<div class="col-md-6">
										<div class="form-group">									
											<label class="form-label" for="userpassword"><?php _e( 'Password', 'dedicatedsolutions' ); ?></label>
											<input type="password" id="userpassword" name="userpassword" class="form-control" placeholder="Enter Password">
										</div>
									</div>
		
									<div class="col-md-6">
										<div class="form-group">									
											<label class="form-label" for="confirmPassword"><?php _e( 'Confirm Password', 'dedicatedsolutions' ); ?></label>
											<input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="Enter Confirm Password">
										</div>
									</div>						
	
									<div class="col-md-12">
										<div class="btn-center">
											<button id="register" value="Register"  class="btn--orange">Register </button>
										</div>
									</div>
								</div>
							</form>	
						</div>					
					</div>
					<div class="col-md-5">
						<div class="ds-order-aside">
							<h2 class="section-header__title">Your order</h2>
							<div class="server-type">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/dell-logo.png'; ?>" alt="dell-logo" class="server-type-logo">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/hp-logo.png'; ?>" alt="hp-logo" class="server-type-logo">
								<h3>Server 823B</h3>
							</div>
							<ul class="your-order-list">
								<li>
									<span class="order-list__item"><b>Server:</b> 823B - DELL/HP</span>
									<span class="order-list__item"><b>CPU:</b> Intel Xeon 6/12 Core</span>
								</li>
								<li>
									<span class="order-list__item"><b>HDD:</b> Intel Xeon 6/12 Core 4x 2.26GHz</span>
									<span class="order-list__item"><b>RAM:</b> 12GB RAM</span>
								</li>
								<li>
									<span class="order-list__item"><b>Bandwidth:</b> 1Gbps</span>
									<span class="order-list__item"><b>RAM:</b> 10TB</span>
								</li>
								<li>
									<span class="order-list__item"><b>Location:</b> TX, Dallas TIER-III</span>
									<span class="order-list__item"><b>OS:</b> Centos 8</span>
								</li>
								<li>
									<span class="order-list__item">1 Month price</span>
									<span class="order-list__item">$59.00</span>
								</li>
							</ul>
							<div class="accordion" id="productAccordion">
								<div class="card">
									<div class="card-header" id="headingOne">
										<button class="btn btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
											Basic Managed Support (Reboot & OS-Reload)
										</button>
										<span class="remove-accordion"><i class="fas fa-times-circle"></i></span>
									</div>
									<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#productAccordion">
										<div class="card-body">
											<p>Basic Managed Support (Reboot & OS-Reload)</p>
											<h5 class="free">Free</h5>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" id="headingTwo">
										<button class="btn btn-block" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											No Control Panel (Any OS)
										</button>
										<span class="remove-accordion"><i class="fas fa-times-circle"></i></span>
									</div>
									<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#productAccordion">
										<div class="card-body">
											<p>No Control Panel (Any OS)</p>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" id="headingThree">
										<button class="btn btn-block" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											Automated OS Installer & Remote
										</button>
										<span class="remove-accordion"><i class="fas fa-times-circle"></i></span>
									</div>
									<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#productAccordion">
										<div class="card-body">
											<p>Automated OS Installer & Remote</p>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" id="headingFour">
										<button class="btn btn-block" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
											IP Blackhole (Nullroute)
										</button>
										<span class="remove-accordion"><i class="fas fa-times-circle"></i></span>
									</div>
									<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#productAccordion">
										<div class="card-body">
											<p>IP Blackhole (Nullroute)</p>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" id="headingFive">
										<button class="btn btn-block" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
											30 Subnet (1 IP Included)
										</button>
										<span class="remove-accordion"><i class="fas fa-times-circle"></i></span>
									</div>
									<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#productAccordion">
										<div class="card-body">
											<p>30 Subnet (1 IP Included)</p>
										</div>
									</div>
								</div>
							</div>
							<div class="total-item-price">
								<h2>Price of 8 items</h2>
								<h2 class="total-amount">$59.00</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>

	<section class="section">
		<section class="promotional-code-banner" style="background-image:url('<?php echo get_template_directory_uri() . '/dist/assets/images/promotinal-code-bg.jpg'; ?>')">
			<div class="wrapper">
				<div class="promotionl-code-content">
					<div class="section-header u-txt-center">
						<h2 class="section-header__title">Promotional Code</h2>
					</div>
					<div class="appy-promotional-code">
						<input type="text" name="promo-code" id="promo-code" class="form-control" placeholder="Enter Your Promotional Code">
						<button class="btn--orange">Apply</button>
					</div>
				</div>
			</div>
		</section>
	
		<section class="payment-system">
			<div class="container-fluid">
				<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/pay-system-footer.png'; ?>" alt="pay-system-footer">
			</div>
		</section>
	</section>
</main>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
