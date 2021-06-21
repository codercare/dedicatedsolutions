<?php
/* Template Name: Configure Payment Method */ 

/* Redirect user to home page if already registered
   Changed needed when we want redirect to login page
*/
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
							<li class="breadcrumb-item"><a href="#">Configure Product</a></li>
							<li class="breadcrumb-item"><a href="#">Login or Register</a></li>
							<li class="breadcrumb-item active" aria-current="page">Configure Payment Method</li>
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
						<div class="ds-login-form ds-config-payment">
							<div class="configure-payment-content">
								<ul class="nav nav-pills" id="pills-tab" role="tablist">
									<li class="nav-item" role="presentation">
										<a class="nav-link active" id="billing-tab" data-toggle="pill" href="#billing" role="tab" aria-controls="billing" aria-selected="true">Billing Details</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link" id="credait-card-tab" data-toggle="pill" href="#credait-card" role="tab" aria-controls="credait-card" aria-selected="false">Credit Card Details</a>
									</li>
								</ul>
								<div class="tab-content" id="pills-tabContent">
									<div class="tab-pane fade show active" id="billing" role="tabpanel" aria-labelledby="billing-tab">
										<form action="" method="post">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														  <label class="form-label" for="fName">
														  First Name <span class="required">*</span>
														</label>
														  <input type="text" name="fName" id="fName" class="form-control">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														  <label class="form-label" for="lName">
														  Last Name <span class="required">*</span>
														</label>
														  <input type="text" name="lName" id="lName" class="form-control">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														  <label class="form-label" for="address">Address</label>
														  <input type="text" name="address" id="address" class="form-control">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
															  <label class="form-label" for="country">
																Country <span class="required">*</span>
															  </label>
														  <input type="text" name="country" id="country" class="form-control">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														  <label class="form-label" for="streetAddress">
														  Street address <span class="required">*</span>
														</label>
														  <input type="text" name="streetAddress" id="streetAddress" class="form-control">
													</div>
													<div class="form-group">
														  <input type="text" name="streetAddress" id="streetAddress" class="form-control">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														  <label class="form-label" for="city">
														  Town / City <span class="required">*</span>
														</label>
														  <input type="text" name="city" id="city" class="form-control">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														  <label class="form-label" for="country">
														  State / Country <span class="required">*</span>
														</label>
														  <input type="text" name="state" id="state" class="form-control">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														  <label class="form-label" for="country">
														  Postcode / Zip <span class="required">*</span>
														</label>
														  <input type="text" name="zipcode" id="zipcode" class="form-control">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														  <button type="submit" class="btn--orange">Continue to Shipping</button>
													</div>
												</div>
											</div>
										</form>
									</div>
									<div class="tab-pane fade" id="credait-card" role="tabpanel" aria-labelledby="credait-card-tab">...</div>
								</div>
							</div>
							<a href="" class="return-to-cart"><i class="fas fa-angle-left"></i> Return To Cart</a>
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
