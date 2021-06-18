<?php
/* Template Name: Contact Us */ 

get_header();?>

<main id="fullpage" class="site-main">
<?php
while ( have_posts() ) : the_post(); 

	$contact_banner = '';
	$bg_image     = get_field( 'banner_bg_image' );
	if ( ! empty( $bg_image ) ) {
		$contact_banner = $bg_image['sizes']['banner_image'];
	}
?>
	<section class="section">
		<section class="page-banner contact-page-banner" style="background-image:url('<?php echo $contact_banner; ?>')">
			<div class="wrapper">
				<div class="page-banner-content">
					<h1 class="large-banner__heading"><?php the_field( 'contact_us_title' ); ?></h1>
					<p><?php the_field( 'contact_us_sub_title' ); ?></p>
				</div>
			</div> 
		</section>
	
		<section class="services-section page-section">
			<div class="wrapper">
				<div class="row">
					<div class="col-md-4">
						<div class="service-block block-1" style="background-image: url('<?php echo get_template_directory_uri() . '/dist/assets/images/live-support.svg'; ?>')">
							<div class="service-icon-box">
								<?php
								$support_icon = '';
								$sup_image     = get_field( 'live_support_block_icon' );
								if ( ! empty( $sup_image ) ) {
									$support_icon = $sup_image['sizes']['mid_icon'];
								}
								?>
								<img src="<?php echo $support_icon; ?>" alt="<?php the_field( 'live_support_block_title' ); ?>">
							</div>
							<h3><?php the_field( 'live_support_block_title' ); ?></h3>
							<p><?php the_field( 'live_support_detail' ); ?></p>
							<a href="<?php the_field( 'live_support_button_link' ); ?>" class="btn--orange"><?php the_field( 'live_support_button_label' ); ?> <i class="fas fa-arrow-right"></i></a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-block block-2" style="background-image: url('<?php echo get_template_directory_uri() . '/dist/assets/images/request-call.svg'; ?>')">
							<div class="service-icon-box">
								<?php
								$reqest_icon = '';
								$req_image     = get_field( 'request_call_back_icon' );
								if ( ! empty( $req_image ) ) {
									$reqest_icon = $req_image['sizes']['mid_icon'];
								}
								?>
								<img src="<?php echo $reqest_icon; ?>" alt="<?php the_field( 'request_call_back_title' ); ?>">
							</div>
							<h3><?php the_field( 'request_call_back_title' ); ?></h3>
							<p><?php the_field( 'request_call_back_detail' ); ?></p>
							<a href="<?php the_field( 'request_call_back_button_url' ); ?>" class="btn--orange"><?php the_field( 'request_call_back_button' ); ?> <i class="fas fa-arrow-right"></i></a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-block block-3" style="background-image: url('<?php echo get_template_directory_uri() . '/dist/assets/images/user.svg'; ?>')">
							<div class="service-icon-box">
								<?php
								$existing_user_icon = '';
								$user_icon_image     = get_field( 'already_user_icon' );
								if ( ! empty( $user_icon_image ) ) {
									$existing_user_icon = $user_icon_image['sizes']['mid_icon'];
								}
								?>
								<img src="<?php echo $existing_user_icon; ?>" alt="<?php the_field( 'already_user_title' ); ?>">
							</div>
							<h3><?php the_field( 'already_user_title' ); ?></h3>
							<p><?php the_field( 'already_user_description' ); ?></p>
							<a href="<?php the_field( 'already_user_button_link' ); ?>" class="btn--orange"><?php the_field( 'already_user_button_label' ); ?> <i class="fas fa-arrow-right"></i></a>
						</div>
					</div> 
				</div>
			</div>
		</section>
	</section>

	<section class="conatct-form-setion page-section section" style="background-image:url('<?php echo get_template_directory_uri() . '/dist/assets/images/contact-form-bg.png'; ?>')">
		<div class="wrapper">
			<div class="row align-items-center">
				<div class="col-md-5">
					<div class="get-in-touch">
						<h2 class="section-header__title"><?php the_field( 'get_in_touch_title' ); ?></h2>
						<p><?php the_field( 'get_in_touch_short_detail' ); ?></p>
						<ul>
							<li>
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/map-marker.png'; ?>" alt="map-marker" class="touch-icon">
								<h3>
									<span>Location</span>
									<?php the_field( 'location' ); ?>
								</h3>
							</li>
							<li>
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/globe.png'; ?>" alt="globe" class="touch-icon">
								<h3>
									<span>Visit Us</span>
									<?php the_field( 'visit_us' ); ?>
								</h3>
							</li>
							<li>
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/time.png'; ?>" alt="time" class="touch-icon">
								<h3>
									<span>Our Support Team</span>
									<?php the_field( 'our_support_team' ); ?>
								</h3>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-7">
					<div class="contact-form">
						<div class="section-header u-txt-center">
							<h2 class="section-header__title"><?php the_field( 'send_us_message_title' ); ?></h2>
							<span class="section-header__decoration-element"></span>
							<h4 class="section-header__Orangesub-title"><?php the_field( 'send_us_message_sub_title' ); ?> </h4>
						</div>						
						<div class="row">
							<?php echo do_shortcode('[contact-form-7 id="1186" title="Contact form 1"]');?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php endwhile; // end of the loop. ?>
</main>
<?php get_footer(); ?>
