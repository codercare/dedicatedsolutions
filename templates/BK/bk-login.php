<?php
/* Customer Login */ 

/* Redirect user to dashboard if user is already loged in to system
   home page if already registered
   Changed needed when we want redirect to login page
*/
if(is_user_logged_in()) {
	wp_safe_redirect( site_url('/my-account'), 302 );
	exit();
}

get_header();
?>

<main id="fullpage" class="site-main">
	<section class="section">
		<section class="page-banner ds-form-banner">
			<div class="wrapper">
				<div class="page-banner-content">
					<h1 class="ds-form-banner__heading">Dedicated<span>Solutions</span></h1>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo site_url('/');?>">Configure Product</a></li>
							<li class="breadcrumb-item active" aria-current="page">Login or Register</li>
							<li class="breadcrumb-item"><a href="<?php echo site_url('/');?>">Configure Payment Method</a></li>
							<li class="breadcrumb-item"><a href="<?php echo site_url('/');?>">Checkout</a></li>
						</ol>
					</nav>					
				</div>
			</div>
		</section>
	
		<section class="ds-form-order-section">
			<div class="wrapper">
				<div class="row">				
					<div class="col-md-7">
						<div class="ds-login-form ds-login">
							<div class="section-header">
								<h2 class="section-header__title">Login</h2>
								<p class="section-header__sub-title">Don't have an account? <a href="<?php echo site_url('/register');?>">Register</a></p>
								
								<div id="message" class="alert alert-success">
								<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								<span id="msg"><strong>Successfully logedin!</strong> redirected to dashboard.</span>
								</div>	
							</div>
							<form name="wp_login_form"  id="wp_login_form" method="post">
								<div class="form-group">
									<input type="email" name="userEmail" id="userEmail" class="form-control" placeholder="Enter Your Email">
								</div>
								<div class="form-group">
									<input type="password" name="password" id="password" class="form-control" placeholder="Password">
								</div>
								<div class="form-group">
									<label class="form-check-label">
										<input type="checkbox" class="form-check-input" name="remember" id="remember" value="1"> Remember Me
										<span></span>
									</label>
								</div>
								<div class="form-group">
									<div class="row align-items-center">
										<div class="col-6">
											<button id="login" value="login" class="btn--orange">Login <i class="fas fa-arrow-right"></i></button>
										</div>
										<div class="col-6 text-right">
											<a href="<?php echo site_url('my-account/lost-password/');?>">Forgot Password?</a>
										</div>
									</div>
								</div>
							</form>
							<p>* By logging in, you agree to our <a href="">Terms of Use</a> and to receive Wix emails & updates and acknowledge that you read our <a href="">Privacy Policy.</a></p>
							<div class="login-with-other">
								<h2 class="section-header__title">OR</h2>							
									
									<ul> <li>
										<button type="button" class="btn--outline facebook">
											<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/facebook.png'; ?>" alt="facebook-logo">
										</button>
									</li>
									<li>
										<button type="button" class="btn--outline google">
											<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/google.png'; ?>" alt="google-logo">
										</button>
									</li>
									<li>
										<button type="button" class="btn--outline apple">
											<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/apple.png'; ?>" alt="apple-logo">
										</button>
									</li> </ul>
								
							</div>
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

<?php get_footer(); ?>
