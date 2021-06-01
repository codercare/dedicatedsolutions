<?php
get_header();?>

<?php
	$banner_image_url = '';
	$banner_image     = get_field( 'banner_image' );
if ( ! empty( $banner_image ) ) {
	$banner_image_url = $banner_image['url'];
}
?>

<section id="fullpage">
	<section class="section fp-auto-height">
		<section id="large-banner" class="large-banner page-section" style="background-image: url(<?php echo $banner_image_url; ?>);">
			<div class="large-banner__container">
				<h1 class="large-banner__heading"><?php the_field( 'banner_title' ); ?></h1>
				<div class="large-banner__CTA-container">
					<a href="<?php the_field( 'banner_dedicated_server_button_link' ); ?>" class="btn--orange u-mb-untill-small">
						<div class="btn-icon"><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/dserver.png'; ?>" alt="" srcset=""></div><span class="btn-label"><?php the_field( 'banner_dedicated_server_button_label' ); ?></span>
					</a>
					<a href="<?php the_field( 'banner_private_cloud_button_link' ); ?>" class="btn--orange">
						<div class="btn-icon"><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/server@2x.png'; ?>" alt="" srcset=""></div><span class="btn-label"><?php the_field( 'banner_private_cloud_button_label' ); ?></span>
					</a>
				</div>
				<div class="large-banner__features">
					<?php if ( have_rows( 'banner_feature_list' ) ) : ?>
						<ul class="large-banner__features-list">
							<?php
							while ( have_rows( 'banner_feature_list' ) ) :
								the_row();
								?>
								<?php $feature_list_title = get_sub_field( 'feature_list_title' ); ?>
								<li class="large-banner__features-item"><i class="fas fa-check-circle"></i><?php echo $feature_list_title; ?></li>
							<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</div>
				<div class="btn--transparent">			
					<span><a href="<?php the_field( 'learn_more' ); ?>">Learn More</a></span> 
					<i class="fas fa-arrow-down"></i>			
				</div>
			</div>
		</section>

		<section class="client-showcase">
			<div class="wrapper">
				<?php if ( have_rows( 'home_clients' ) ) : ?>
					<ul class="client-showcase__logo-list">
						<?php
						while ( have_rows( 'home_clients' ) ) :
							the_row();
							$client_logo = get_sub_field( 'client_logo' );
							if ( ! empty( $client_logo ) ) {
								$client_logo_url = $client_logo['url'];
								?>
								<li class="client-showcase__logo" ><img src="<?php echo $client_logo_url; ?>" alt="client-logo"/></li>
							<?php } ?>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
		</section>
	</section>


	<section id="section-customer" class="section-customer page-section section">
		<div class="wrapper">
			<header class="section-header u-txt-center">
				<h2 class="section-header__title"><?php the_field( 'customer_satisfied_section_title' ); ?></h2>
				<span class="section-header__decoration-element"></span>
				<?php if( get_field('customer_satisfied_section_sub_title') ): ?>
				<p class="section-header__sub-title"><?php the_field( 'customer_satisfied_section_sub_title' ); ?></p>
				<?php endif; ?>
			</header>
			<div class="section-customer__content">
				<div class="rows rows--gutters-small">
				<?php
				if ( have_rows( 'satisfied_customer' ) ) :
					$i = 1;
					while ( have_rows( 'satisfied_customer' ) ) :
						the_row();
						// if($i > 3){ break; }
						$sc_bg_image_url = '';
						$satisfied_customer_background_color = get_sub_field( 'satisfied_customer_background_color' );
						$satisfied_customer_background_image = get_sub_field( 'satisfied_customer_background_image' );
						if ( ! empty( $satisfied_customer_background_image ) ) {
							$sc_bg_image_url = 'background-image: url(' . $satisfied_customer_background_image['url'] . ');';
						}
						?>
					<div class="rows__medium-4">
						<div class="customer-cards" style="background-color: <?php echo $satisfied_customer_background_color.'; '; echo $sc_bg_image_url; ?>">
							<h4 class="customer-cards__title"><?php the_sub_field( 'satisfied_customer_title' ); ?></h4>
							<p class="customer-cards__details"><?php the_sub_field( 'satisfied_customer_content' ); ?></p>						
							<a href="<?php the_sub_field( 'satisfied_customer_button_link' ); ?>" class="btn--outline"><span><?php the_sub_field( 'satisfied_customer_button_label' ); ?></span><i class="fas fa-arrow-right"></i></a>
						</div>
					</div>
						<?php
						$i++;
					endwhile;
				endif;
				?>
				</div>
			</div>
		</div>

	</section>

	<?php
		$data_center_bg_image_url               = '';
		$data_center_locations_section_bg_image = get_field( 'data_center_locations_section_bg_image' );
	if ( ! empty( $data_center_locations_section_bg_image ) ) {
		$data_center_bg_image_url = 'background-image: url(' . $data_center_locations_section_bg_image['url'] . ');';
	}
	?>
	<section class="section">
		<section id="datacenter-location" class="datacenter-location page-section" style="<?php echo $data_center_bg_image_url; ?>">
			<div class="wrapper">
				<header class="section-header section-header--on-dark-bg u-txt-center">
					<h2 class="section-header__title"><?php the_field( 'data_center_locations_section_title' ); ?></h2>
					<span class="section-header__decoration-element--dark"></span>
					<?php if( get_field('data_center_locations_section_sub_title') ): ?>
					<p class="section-header__sub-title"><?php the_field( 'data_center_locations_section_sub_title' ); ?></p>
					<?php endif; ?>
				</header>
				<div class="datacenter-location__content">
					<div class="wrapper wrapper--medium">
						<div class="rows rows--gutters-small">
						<?php
						if ( have_rows( 'data_center_locations_content_blocks' ) ) :
							while ( have_rows( 'data_center_locations_content_blocks' ) ) :
								the_row();
								?>
							<div class="rows__medium-6">
								<div class="datalocation-card">
									<div class="datalocation-card__header">
										<div class="datalocation-card__icon">
											<img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/data-location-icon.png" alt="Icon image">
										</div>
										<h3 class="datalocation-card__title"><?php the_sub_field( 'data_center_locations_title' ); ?></h3>
									</div>
									<div class="datalocation-card__content"><?php the_sub_field( 'data_center_locations_content' ); ?></div>
								</div>
							</div>
								<?php
							endwhile;
						endif;
						?>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="datacenter">
			<div class="wrapper">
				<div class="rows rows--gutters">
					<div class="rows__medium-4">
						<h2 class="section-header__title"><?php the_field( 'our_data_center_title' ); ?></h2>
						<p class="datacenter__description"><?php the_field( 'our_data_center_content' ); ?></p>
					</div>
					<div class="rows__medium-8">
						<div class="wrapper">
							<div class="rows rows--gutters-smaller">
							<?php
							if ( have_rows( 'our_data_center_images' ) ) :
								while ( have_rows( 'our_data_center_images' ) ) :
									the_row();
									$data_center_image_url = '';
									$data_center_image     = get_sub_field( 'data_center_image' );
									if ( ! empty( $data_center_image ) ) {
										$data_center_image_url = $data_center_image['url'];
										?>
								<div class="rows__medium-3">
									<div class="datacenter__image-container">
										<img src="<?php echo $data_center_image_url; ?>" alt="data-center-img" />
									</div>
								</div>
										<?php
									}
								endwhile;
							endif;
							?>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>
	</section>

	<section class="section">
		<section id="server-features" class="server-features page-section">
			<div class="wrapper wrapper--medium">
				<header class="section-header u-txt-center">
					<h2 class="section-header__title"><?php the_field( 'unlimited_bandwidth_section_title' ); ?></h2>
					<span class="section-header__decoration-element"></span>
					<?php if( get_field('unlimited_bandwidth_section_sub_title') ): ?>
					<p class="section-header__sub-title"><?php the_field( 'unlimited_bandwidth_section_sub_title' ); ?></p>
					<?php endif; ?>
				</header>
				<div class="rows rows--gutters">
					<div class="rows__medium-6">
						<p class="server-features__text"><?php the_field( 'unlimited_bandwidth_content' ); ?></p>
						<ul class="server-features__list">
						<?php
						if ( have_rows( 'unlimited_bandwidth_feature_list' ) ) :
							while ( have_rows( 'unlimited_bandwidth_feature_list' ) ) :
								the_row();
								$bandwidth_icon_image = get_sub_field( 'unlimited_bandwidth_png_image' );
								?>
								<li class="server-features__item">
									<img src="<?php echo $bandwidth_icon_image['url']; ?>"><?php the_sub_field( 'unlimited_bandwidth_feature_text' ); ?>
								</li>
								<?php
							endwhile;
						endif;
						?>
						</ul>
					</div>
					<div class="rows__medium-6">
						<div class="server-features__image-container">
							<?php $bandwidth_feature_image = get_field( 'unlimited_bandwidth_feature_image' ); ?> 
							<img src="<?php echo $bandwidth_feature_image['url']; ?>" > 
						</div>
					</div>
				</div>
			</div>
		</section>
	
		<section class="features-highlight">
			<div class="wrapper">
				<div class="rows">
				<?php
				// Check rows exists.
				if ( have_rows( 'icon_feature_blocks' ) ) :
					// Loop through rows.
					while ( have_rows( 'icon_feature_blocks' ) ) :
						the_row();
						$icon_block_image         = '';
						$icon_feature_block_image = get_sub_field( 'icon_feature_block_image' );
						if ( ! empty( $icon_feature_block_image ) ) {
							$icon_block_image = $icon_feature_block_image['url'];
							?>
						<div class="rows__medium-4">
							<div class="feature-highlight-card">
								<div class="feature-highlight-card__image-container">
									<img src="<?php echo $icon_block_image; ?>" alt="" srcset="">
								</div>
								<h5 class="feature-highlight-card__title"><?php the_sub_field( 'icon_feature_block_sub_title' ); ?></h5>
								<p class="feature-highlight-card__description"><?php the_sub_field( 'icon_feature_block_title' ); ?></p>
							</div>
						</div>
							<?php
						}
						endwhile;
					endif;
				?>
				</div>
			</div>
		</section>
	</section>

	<section id="section-services" class="section-services page-section section">
		<div class="wrapper">
			<header class="section-header u-txt-center">
				<h2 class="section-header__title"><?php the_field( 'services_section_title' ); ?></h2>
				<span class="section-header__decoration-element"></span>
				<?php  if( get_field('services_section_sub_title') ): ?>
				<p class="section-header__sub-title"><?php the_field( 'services_section_sub_title' ); ?></p>
				<?php endif;  ?>
			</header>
			<div class="rows rows--gutters-small">
				<?php
				if ( have_rows( 'section_content_blocks' ) ) :
					$i = 1;
					while ( have_rows( 'section_content_blocks' ) ) :
						the_row();
						$section_background_color = get_sub_field( 'section_background_color' );
						?>
					<div class="rows__medium-6">
						<div class="services-card" style="background-color:<?php echo $section_background_color; ?>">
							<div class="services-card__image-container">
								<?php
								$service_section_icon_image = get_sub_field('section_icon_image');
								$service_image_url = $service_section_icon_image['url'];
								
								if(isset($service_image_url)){?>
								<img src="<?php echo $service_image_url; ?>" alt="" srcset="">
								<?php
								}else{?>
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/service-icon.png'; ?>" alt="" srcset="">
								<?php
								}
								?>
								
							</div>
							<h3 class="services-card__title"><?php the_sub_field( 'section_title' ); ?></h3>
							<p class="services-card__description"><?php the_sub_field( 'section_content' ); ?></p>
							<a href="<?php the_sub_field( 'section_button_link' ); ?>" class="btn--outline-dark"><?php the_sub_field( 'section_button_label_service' ); ?></a>
						</div>
					</div>
						<?php
						endwhile;
					endif;
				?>
			</div>
		</div>
	</section>

	<section id="section-products" class="section-products page-section section">
		<div class="wrapper">
			<header class="section-header u-txt-center">
				<h2 class="section-header__title"><?php the_field( 'feature_content_section_title' ); ?></h2>
				<span class="section-header__decoration-element"></span>
				<?php  if( get_field('feature_content_section_sub_title') ): ?>
				<p class="section-header__sub-title"><?php the_field( 'feature_content_section_sub_title' ); ?></p>
				<?php endif;  ?>

			</header>
			<div class="rows rows--gutters-smaller">
			<?php
			$count_p = 1;
			if ( have_rows( 'feature_content_blocks' ) ) :
				while ( have_rows( 'feature_content_blocks' ) ) :
					the_row();
					// if($count_p > 4){ break; }
					$product_image = get_sub_field( 'feature_block_icon_image' );
					?>
				<div class="rows__medium-3">
					<div class="product-card">
						<div class="product-card__image-container">
							<img src="<?php echo $product_image['url']; ?>" alt="<?php the_sub_field( 'feature_block_title' ); ?>" >
						</div>
						<h4 class="product-card__title"><?php the_sub_field( 'feature_block_title' ); ?></h4>
						<p class="product-card__description"><?php the_sub_field( 'feature_block_content' ); ?></p>
						<a href="<?php the_sub_field( 'feature_block_button_link' ); ?>" class="btn--outline-dark"><?php the_sub_field( 'feature_block_button_lable' ); ?></a>
					</div>
				</div>
					<?php
					$count_p++;
				endwhile;
				
			endif;
			?>
			</div>
		</div>
	</section>

	<?php
		$t_and_s_bg_image_url            = '';
		$technology_and_support_bg_image = get_field( 'technology_and_support_bg_image' );
	if ( ! empty( $technology_and_support_bg_image ) ) {
		$t_and_s_bg_image_url = 'background-image: url(' . $technology_and_support_bg_image['url'] . ');';
	}
	?>
	<section id="tech-support" class="tech-support page-section section" style="<?php echo $t_and_s_bg_image_url; ?>">
		<div class="tech-support__content">
			<div class="wrapper wrapper--medium">
				<div class="rows rows--gutters-small">
				<?php
				if ( have_rows( 'technology_and_support_blocks' ) ) :
					while ( have_rows( 'technology_and_support_blocks' ) ) :
						the_row();
						$tnsupport_block_bg_image_url          = '';
						$technology_and_support_block_bg_image = get_sub_field( 'technology_and_support_block_bg_image' );
						
						$block_front_small_icon_image = get_sub_field( 'block_front_small_icon' );
						
						

						if ( ! empty( $technology_and_support_block_bg_image ) ) {
							$tnsupport_block_bg_image_url = 'background-image: url(' . $technology_and_support_block_bg_image['url'] . ');';
						}
						?>
					<div class="rows__medium-6">
						<div class="tech-support-card" style="background-color:<?php the_sub_field( 'technology_and_support_block_color_code' ); ?>;<?php echo $tnsupport_block_bg_image_url; ?>">
							<h4 class="tech-support-card__title"><?php the_sub_field( 'technology_and_support_block_title' ); ?></h4>
							<p class="tech-support-card__description"><?php the_sub_field( 'technology_and_support_block_content' ); ?></p>
							<a href="<?php the_sub_field( 'technology_and_support_block_button_link' ); ?>" class="btn--outline"><?php the_sub_field( 'technology_and_support_block_button_label' ); ?><i class="fas fa-arrow-right"></i></a>
							<div class="tech-support-card__icon-container">
							<img src="<?php echo $block_front_small_icon_image['url']; ?>" alt="<?php the_sub_field( 'technology_and_support_block_title' ); ?>">
							</div>
						</div>
					</div>
						<?php
					endwhile;
				endif;
				?>
				</div>
			</div>
		</div>
	</section>
</section>

<?php get_footer(); ?>
