<?php
/* Template Name: Test2 */ 

get_header();?>
?>
<main id="site-main" class="site-main">
	<section class="page-banner contact-page-banner" style="background-image:url('<?php echo get_template_directory_uri() . '/dist/assets/images/contact-banner.jpg'; ?>')">
		<div class="wrapper">
			<div class="page-banner-content">
				<h1 class="large-banner__heading">Contact Us</h1>
				<p>We Are Happy To Assist You At Any Time!</p>
			</div>
		</div> 
	</section>

	<section class="services-section page-section">
		<div class="wrapper">
			<div class="rows rows--gutters-small">
				<div class="rows__medium-4">
					<div class="service-block block-1" style="background-image: url('<?php echo get_template_directory_uri() . '/dist/assets/images/live-support.svg'; ?>')">
						<div class="service-icon-box">
							<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/support-1.png'; ?>" alt="support-1">
						</div>
						<h3>24/7 LIVE SUPPORT</h3>
						<p>Lorem Ipsum is simply dummy text of the printing  and typesetting industry.</p>
						<a href="" class="btn--orange">Chat Now <i class="fas fa-arrow-right"></i></a>
					</div>
				</div>
				<div class="rows__medium-4">
					<div class="service-block block-2" style="background-image: url('<?php echo get_template_directory_uri() . '/dist/assets/images/request-call.svg'; ?>')">
						<div class="service-icon-box">
							<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/support-2.png'; ?>" alt="support-2">
						</div>
						<h3>Request Call Back</h3>
						<p>Lorem Ipsum is simply dummy text of the printing  and typesetting industry.</p>
						<a href="" class="btn--orange">Request <i class="fas fa-arrow-right"></i></a>
					</div>
				</div>
				<div class="rows__medium-4">
					<div class="service-block block-3" style="background-image: url('<?php echo get_template_directory_uri() . '/dist/assets/images/user.svg'; ?>')">
						<div class="service-icon-box">
							<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/support-3.png'; ?>" alt="support-3">
						</div>
						<h3>Already a User</h3>
						<p>Lorem Ipsum is simply dummy text of the printing  and typesetting industry.</p>
						<a href="" class="btn--orange">Login <i class="fas fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="conatct-form-setion page-section" style="background-image:url('<?php echo get_template_directory_uri() . '/dist/assets/images/contact-form-bg.png'; ?>')">
		<div class="wrapper">
			<div class="row">
				<div class="col-md-5">
					<div class="get-in-touch">
						<h2 class="section-header__title">Get In Touch</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						<ul>
							<li>
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/map-marker.png'; ?>" alt="map-marker" class="touch-icon">
								<h3>
									<span>Location</span>
									535 Scherers Ct <br/>43085 Columbus, Ohio USA
								</h3>
							</li>
							<li>
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/globe.png'; ?>" alt="globe" class="touch-icon">
								<h3>
									<span>Visit Us</span>
									DedicatedSolutions.com
								</h3>
							</li>
							<li>
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/time.png'; ?>" alt="time" class="touch-icon">
								<h3>
									<span>Our Support Team</span>
									Billing & Sales, 9am to 6pm EST
								</h3>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-7">
					<div class="contact-form">
						<div class="section-header u-txt-center">
							<h2 class="section-header__title">Send Us A Message</h2>
							<span class="section-header__decoration-element"></span>
							<h4 class="section-header__Orangesub-title">Please leave us your message and we will contact you as soon as possible.</h4>
						</div>
						<form action="">
							<div class="rows rows--gutters-small">
								<div class="rows__medium-6">
									<div class="form-group">
										<input type="text" name="first-name" class="form-control" placeholder="First Name">
									</div>
								</div>
								<div class="rows__medium-6">
									<div class="form-group">
										<input type="text" name="last-name" class="form-control" placeholder="Last Name">
									</div>
								</div>
								<div class="rows__medium-6">
									<div class="form-group">
										<input type="text" name="phone" class="form-control" placeholder="Phone Number">
									</div>
								</div>
								<div class="rows__medium-6">
									<div class="form-group">
										<input type="text" name="email" class="form-control" placeholder="E-mail Address">
									</div>
								</div>
								<div class="rows__medium-12">
									<div class="form-group">
										<textarea class="form-control" name="message" placeholder="Message"></textarea>
									</div>
								</div>
								<div class="rows__medium-12">
									<div class="form-group">
										<div class="captcha">
											<div class="rows rows--gutters-small">
												<div class="rows__medium-6">
													<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/capthca.jpg'; ?>" alt="capthca">
												</div>
												<div class="rows__medium-6">
													<input type="text" name="capthca" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="rows__medium-12">
									<div class="btn-center">
										<button type="submit" class="btn--orange">Submit <i class="fas fa-arrow-right"></i></button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
