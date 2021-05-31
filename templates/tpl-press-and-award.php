<?php
/* Template Name: Press Announcement And Award */ 

get_header();?>
<main id="fullpage" class="site-main">
	<section class="page-banner pressAnnouncement-page-banner section fp-auto-height">
		<div class="wrapper">
			<div class="page-banner-content">
				<h1 class="large-banner__heading">Press Announcements</h1>
				<p>Learn more from our news feeds, press releases and awards</p>
				<a href="" class="btn--orange">See Press</a>
				<a href="" class="btn--white">See Awards</a>
			</div>
		</div>
	</section>

	<section class="press-release section">
		<div class="wrapper">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title">Press Releases</h2>
				<span class="section-header__decoration-element"></span>
			</div>
			<div class="press-relase-block-wrap">
				<div class="press-relase-block">
					<div class="row">
						<div class="col-md-6 pr-md-0">
							<figure class="thumbnail-img">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/press-release-img1.jpg'; ?>" alt="press-release-img1">
							</figure>
						</div>
						<div class="col-md-6">
							<div class="press-relase-content">
								<h2>High-End Server Features From DedicatedSolutions.com</h2>
								<h4><i><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/calendar.png'; ?>" alt="calendar"></i>14 November, 2014</h4>
								<p>
									DedicatedSolutions.com announces dedicated servers that include 1-gigabit and 10-gigabit unlimited internet bandwidth together with free transport between servers located across four U.S. markets currently being served.
								</p>
								<a href="" class="btn--orange">Read More</a>
							</div>
						</div>
					</div>
				</div>
				<div class="press-relase-block">
					<div class="row">
						<div class="col-md-6 order-md-1 pl-md-0">
							<figure class="thumbnail-img">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/press-release-img2.jpg'; ?>" alt="press-release-img2">
							</figure>
						</div>
						<div class="col-md-6">
							<div class="press-relase-content">
								<h2>DedicatedSolutions.com Launched</h2>
								<h4><i><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/calendar.png'; ?>" alt="calendar"></i>30 October, 2014</h4>
								<p>
									Secure, fast and reliable server hosting solutions will soon be the low cost alternative for global customers who expect maximum performance from the infrastructure supporting their content and services.
								</p>
								<a href="" class="btn--orange">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="award-section section" style="background-image:url('<?php echo get_template_directory_uri() . '/dist/assets/images/awards-bg.jpg'; ?>')">
		<div class="wrapper">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title">Awards</h2>
				<span class="section-header__decoration-element--dark"></span>
			</div>
			<div class="awards-block-wrap">
				<div class="row">
					<div class="col-md-4">
						<div class="awards-block award-1">
							<div class="awards-block-content">
								<div class="award-logo">
									<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/award-img2.png'; ?>" alt="award-img2">
								</div>
								<h3>Listed #1 For Dedicated Servers</h3>
								<a href="" class="btn--orange">Read Full Review</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="awards-block award-2">
							<div class="awards-block-content">
								<div class="award-logo">
									<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/award-img1.png'; ?>" alt="award-img1">
								</div>
								<h3>Excellent Service Award 2015</h3>
								<a href="" class="btn--orange">Read Full Review</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="awards-block award-3">
							<div class="awards-block-content">
								<div class="award-logo">
									<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/award-img3.png'; ?>" alt="award-img3">
								</div>
								<h3>Hosting I Cloud</h3>
								<a href="" class="btn--orange">Read Full Review</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
