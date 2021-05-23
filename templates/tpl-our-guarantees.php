<?php
/* Template Name: Our Guarantees */ 

get_header();?>


<main id="site-main" class="site-main">
	<section class="our-guarantee">
		<div class="wrapper">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title">Our Guarantees</h2>
				<span class="section-header__decoration-element"></span>
				<h4 class="section-header__Orangesub-title">We always make you feel secured.</h4>
				<p>Here are our top 5 guarantees WHY you should choose us as the home for your servers. There is nothing that you can lose when you work with us!</p>
			</div>
			<div class="our-guarante-grid">
				<div class="row">
					<div class="col-md-4">
						<div class="our-guarantee-block">
							<div class="guarantee-icon-box">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/our-g-icon1.png'; ?>" alt="our-g-icon1">
							</div>
							<h3>Guaranteed Response</h3>
							<p>
								Since we have 24 x 7 x 365 staff on duty at our office locations, we will guarantee you a response to your question within 1 hour on all your inquiries.
							</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="our-guarantee-block">
							<div class="guarantee-icon-box">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/our-g-icon2.png'; ?>" alt="our-g-icon2">
							</div>
							<h3>Guaranteed Provisioning</h3>
							<p>
								We will guarantee you that your server will be provisioned and up and running within 30 minutes on all our available servers after billing verification!
							</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="our-guarantee-block">
							<div class="guarantee-icon-box">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/our-g-icon3.png'; ?>" alt="our-g-icon3">
							</div>
							<h3>Network Uptime</h3>
							<p>
								Since we have multiple carriers at each data center location, we can guarantee you an 100% uptime on all our network connections!
							</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="our-guarantee-block">
							<div class="guarantee-icon-box">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/our-g-icon4.png'; ?>" alt="our-g-icon4">
							</div>
							<h3>30-Day Money Back Guarantee</h3>
							<p>
								If you are not 100% satisfied about our dedicated server solutions within the first 30 days of your purchase on any kind of package, simply contact our support at any time and we will refund your purchase price. Please contact <a href="">Support@dedicatedsolutions.com</a>
							</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="our-guarantee-block">
							<div class="guarantee-icon-box">
							<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/our-g-icon5.png'; ?>" alt="our-g-icon5">
							</div>
							<h3>Datacenter Uptime Guarantee</h3>
							<p>
								High availability & 100% uptime guaranteed! Your server will be hosted in a Tier III or Tier IV data center based on your choice. All data centers are SSAE16 certified, as well as PCI conform. We have fully redundant cooling and power at each location. See more details on our <a href="">Data Centers page</a>.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
 
<?php get_footer(); ?>
