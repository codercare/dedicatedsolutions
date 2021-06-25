<?php
/* Template Name: Configure Product */ 

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
							<li class="breadcrumb-item active" aria-current="page">Configure Product</li>
							<li class="breadcrumb-item"><a href="#">Login or Register</a></li>
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
						<div class="ds-login-form ds-config-product">
							<div class="product-header">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/dell-logo.png'; ?>" alt="dell-logo" class="product-logo">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/hp-logo.png'; ?>" alt="hp-logo" class="product-logo">
								<h1 class="product-header__title">Server 823B</h1>
							</div>
							<div class="form-group">									
								<label class="form-label" for="billingCycle">Billing Cycle</label>
								<select id="billingCycle" name="billingCycle"  class="form-control">
									<option value="AZ">$59.00 / Month - 1 Month(s) Payment (Total $59.00)</option>
								</select>
							</div>
							<div class="form-group">									
								<label class="form-label" for="os">Select OS</label>
								<select id="os" name="os"  class="form-control">
									<option value="" selected disabled>Select Your Server OS</option>
									<option value="AZ">$59.00 / Month - 1 Month(s) Payment (Total $59.00)</option>
								</select>
							</div>
							<div class="form-group">									
								<label class="form-label" for="netStorage">Network Attached Storage (NFS/FTP/SCP/SMB)</label>
								<select id="netStorage" name="netStorage"  class="form-control">
									<option value="AZ">Network Attached Storage (NFS/FTP/SCP/SMB)</option>
								</select>
							</div>
							<div class="form-group">									
								<label class="form-label" for="ipv4add">IPv4 Addresses</label>
								<select id="ipv4add" name="ipv4add"  class="form-control">
									<option value="" selected disabled>Choose how many IPv4 Addresses are included in your server</option>
									<option value="AZ">Network Attached Storage (NFS/FTP/SCP/SMB)</option>
								</select>
							</div>
							<div class="form-group">									
								<label class="form-label" for="addOnProduct">Other Add-On Products</label>
								<select id="addOnProduct" name="addOnProduct"  class="form-control">
									<option value="AZ">Additonal Add-On we offer</option>
								</select>
							</div>
							<div class="form-group">									
								<label class="form-label" for="serverAccess">Server Remote Access</label>
								<select id="serverAccess" name="serverAccess"  class="form-control">
									<option value="AZ">Server Access & Automatisation</option>
								</select>
							</div>
							<div class="form-group">									
								<label class="form-label" for="cpanel">Control Panel</label>
								<select id="cpanel" name="cpanel"  class="form-control">
									<option value="" selected disabled>Choose your Server Control Panel</option>
									<option value="AZ">Server Access & Automatisation</option>
								</select>
							</div>
							<div class="form-group">									
								<label class="form-label" for="cpanelAddOn">Control Panel Add-On Software</label>
								<select id="cpanelAddOn" name="cpanelAddOn"  class="form-control">
									<option value="AZ">Add-On Software we offer</option>
								</select>
							</div>
							<div class="form-group">									
								<label class="form-label" for="managedService">Managed Services</label>
								<select id="managedService" name="managedService"  class="form-control">
									<option value="AZ">Our Managed Server Plans</option>
								</select>
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
					<!-- <div class="section-header u-txt-center">
						<h2 class="section-header__title">Promotional Code</h2>
						
					</div>
					<div class="appy-promotional-code">
						<form class="checkout_coupon woocommerce-form-coupon" method="post">
						<input type="text" name="coupon_code" class="form-control" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" id="coupon_code" value="" />
						<button type="submit" class="btn--orange" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_html_e( 'Apply coupon', 'woocommerce' ); ?></button>
						<div class="clear"></div>
						</form>
					</div> -->

					<div class="woocommerce-form-coupon-toggle">
						<?php wc_print_notice( apply_filters( 'woocommerce_checkout_coupon_message', esc_html__( 'Have a coupon?', 'woocommerce' ) . ' <a href="#" class="showcoupon">' . esc_html__( 'Click here to enter your code', 'woocommerce' ) . '</a>' ), 'notice' ); ?>
					</div>

					<form class="checkout_coupon woocommerce-form-coupon" method="post" style="display:none">

						<p><?php esc_html_e( 'If you have a coupon code, please apply it below.', 'woocommerce' ); ?></p>

						<p class="form-row form-row-first">
							<input type="text" name="coupon_code" class="input-text" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" id="coupon_code" value="" />
						</p>

						<p class="form-row form-row-last">
							<button type="submit" class="button" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_html_e( 'Apply coupon', 'woocommerce' ); ?></button>
						</p>

						<div class="clear"></div>
					</form>
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
