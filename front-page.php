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
				<h1 class="large-banner__heading wow fadeInDown"><?php the_field( 'banner_title' ); ?></h1>
				<div class="large-banner__CTA-container">
					<a href="<?php the_field( 'banner_dedicated_server_button_link' ); ?>" class="btn--orange u-mb-untill-small ">
						<div class="btn-icon"><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/dserver.png'; ?>" alt="" srcset=""></div><span class="btn-label"><?php the_field( 'banner_dedicated_server_button_label' ); ?></span>
					</a>
					<a href="<?php the_field( 'banner_private_cloud_button_link' ); ?>" class="btn--orange  ">
						<div class="btn-icon "><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/server@2x.png'; ?>" alt="" srcset=""></div><span class="btn-label"><?php the_field( 'banner_private_cloud_button_label' ); ?></span>
					</a>
				</div>
				<div class="large-banner__features wow fadeInLeft">
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
				<div class="btn--transparent wow fadeInUp">			
					<span class=""><a href="<?php the_field( 'learn_more' ); ?>">Learn More</a></span> 
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
								<li class="client-showcase__logo wow fadeInUp" ><img src="<?php echo $client_logo_url; ?>" alt="client-logo"/></li>
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
				<div class="row">
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
					<div class="col-md-4 wow zoomIn" >
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
						<div class="row">
						<?php
						$counter_b = 1;
						if ( have_rows( 'data_center_locations_content_blocks' ) ) :
							while ( have_rows( 'data_center_locations_content_blocks' ) ) :
								the_row();
								?>
							<div class="col-md-6">
								<div class="datalocation-card wow <?php if($counter_b%2==0){ echo 'fadeInRight';}else{ echo 'fadeInLeft'; } ?>">
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
								$counter_b++;
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
				<div class="row">
					<div class="col-md-4 wow fadeInUp">
						<h2 class="section-header__title"><?php the_field( 'our_data_center_title' ); ?></h2>
						<p class="datacenter__description"><?php the_field( 'our_data_center_content' ); ?></p>
					</div>
					<div class="col-md-8 wow fadeInUp">
						<div class="wrapper">
							<div class="row">
							<?php
							if ( have_rows( 'our_data_center_images' ) ) :
								while ( have_rows( 'our_data_center_images' ) ) :
									the_row();
									$data_center_image_url = '';
									$data_center_image     = get_sub_field( 'data_center_image' );
									if ( ! empty( $data_center_image ) ) {
										$data_center_image_url = $data_center_image['url'];
										?>
								<div class="col-3">
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
				<div class="row">
					<div class="col-md-6 wow fadeInLeft ">
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
<<<<<<< HEAD
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Content End-->


	<!--Content (4)-->
    <section class="section fix-height-container ">
        <div class="content-wrapper">
            <div class="section-text text-center">
                <h2>1000+ Customer Satisfied</h2>
                <span class="section-border"></span>
                <h5>See why our Customers LOVE US!</h5>
            </div>
            <div class="content-text-wrapper">
                <div class="container">
                    <div class="row">
						<?php
						// Check rows exists.
						if( have_rows('section_content_blocks') ):
							// Loop through rows.
							$i = 1;
							while( have_rows('section_content_blocks') ) : the_row();
								$section_background_color = get_sub_field('section_background_color');
								?>
								<div class="col-lg-6 col-sm-6 col-12">
									<div class="service-box text-center" style="background-color:<?php echo $section_background_color;?>">
										<?php
										if( $i == 1 ) {
											?>
											<svg xmlns="http://www.w3.org/2000/svg" width="93.16" height="93.16" viewBox="0 0 93.16 93.16">
												<g id="technical-support" transform="translate(0 0)">
												<path id="Path_6180" data-name="Path 6180" d="M16.385,72.044a7.6,7.6,0,0,0-3.67.937A42.96,42.96,0,0,1,55.131,4.49,1.82,1.82,0,0,0,55.852.923,46.926,46.926,0,0,0,46.58,0,46.58,46.58,0,0,0,10.023,75.447a7.645,7.645,0,1,0,6.361-3.4Zm2.83,10.472a4,4,0,1,1,1.173-2.83A3.975,3.975,0,0,1,19.215,82.516Zm0,0" transform="translate(0 0)"/>
												<path id="Path_6181" data-name="Path 6181" d="M244.686,43.93A7.626,7.626,0,1,0,242,46.4,42.96,42.96,0,0,1,199.661,114.9a1.82,1.82,0,1,0-.714,3.569,46.958,46.958,0,0,0,9.184.905,46.58,46.58,0,0,0,36.555-75.449Zm-9.19-1.406a4,4,0,1,1,2.83,1.172A3.977,3.977,0,0,1,235.5,42.524Zm0,0" transform="translate(-161.551 -26.219)"/>
												<path id="Path_6182" data-name="Path 6182" d="M99.594,138.411a1.82,1.82,0,0,0,1.82,1.82h11.377a1.819,1.819,0,0,0,1.82-1.82v-3.527a28.492,28.492,0,0,0,6.829-2.83l2.49,2.49a1.819,1.819,0,0,0,2.574,0l8.041-8.047a1.82,1.82,0,0,0,0-2.573l-2.488-2.488a28.493,28.493,0,0,0,2.83-6.829H138.4a1.819,1.819,0,0,0,1.82-1.82V101.41a1.819,1.819,0,0,0-1.82-1.82h-3.515a28.5,28.5,0,0,0-2.83-6.828l2.474-2.474a1.82,1.82,0,0,0,0-2.574l-8.048-8.041a1.819,1.819,0,0,0-2.573,0l-2.471,2.471a28.493,28.493,0,0,0-6.829-2.83V75.82a1.819,1.819,0,0,0-1.82-1.82H101.414a1.82,1.82,0,0,0-1.82,1.82v3.5a28.468,28.468,0,0,0-6.828,2.83l-2.471-2.471a1.82,1.82,0,0,0-2.573,0l-8.047,8.042a1.819,1.819,0,0,0,0,2.574l2.474,2.474a28.489,28.489,0,0,0-2.83,6.828H75.81a1.819,1.819,0,0,0-1.82,1.819l-.006,11.377a1.819,1.819,0,0,0,1.82,1.82h3.514a28.493,28.493,0,0,0,2.83,6.829l-2.488,2.488a1.819,1.819,0,0,0,0,2.573l8.041,8.047a1.82,1.82,0,0,0,1.286.534h0a1.819,1.819,0,0,0,1.286-.533l2.49-2.49a28.517,28.517,0,0,0,6.829,2.83Zm-6.115-10.184a1.82,1.82,0,0,0-2.274.242l-2.215,2.215L83.52,125.21,85.733,123a1.819,1.819,0,0,0,.242-2.274,24.9,24.9,0,0,1-3.446-8.318,1.82,1.82,0,0,0-1.779-1.437H77.624l0-7.738h3.121a1.819,1.819,0,0,0,1.779-1.437,24.907,24.907,0,0,1,3.446-8.317,1.819,1.819,0,0,0-.242-2.274l-2.2-2.2,5.474-5.469,2.2,2.2a1.821,1.821,0,0,0,2.274.242,24.9,24.9,0,0,1,8.317-3.446,1.821,1.821,0,0,0,1.437-1.779V77.639h7.738v3.107a1.819,1.819,0,0,0,1.437,1.779,24.916,24.916,0,0,1,8.317,3.446A1.818,1.818,0,0,0,123,85.73l2.2-2.2L130.67,89l-2.2,2.2a1.819,1.819,0,0,0-.242,2.274,24.922,24.922,0,0,1,3.446,8.317,1.819,1.819,0,0,0,1.779,1.437h3.127v7.738h-3.127a1.82,1.82,0,0,0-1.779,1.437,24.9,24.9,0,0,1-3.446,8.317,1.82,1.82,0,0,0,.242,2.274l2.213,2.213-5.469,5.473L123,128.469a1.819,1.819,0,0,0-2.274-.242,24.922,24.922,0,0,1-8.317,3.446,1.819,1.819,0,0,0-1.437,1.779v3.139h-7.738v-3.139a1.821,1.821,0,0,0-1.437-1.779,24.907,24.907,0,0,1-8.317-3.446Zm0,0" transform="translate(-60.523 -60.536)"/>
												<path id="Path_6183" data-name="Path 6183" d="M203.44,188.406a15.035,15.035,0,1,0-15.035,15.035A15.051,15.051,0,0,0,203.44,188.406Zm-26.43,0a11.4,11.4,0,1,1,11.4,11.4A11.408,11.408,0,0,1,177.01,188.406Zm0,0" transform="translate(-141.826 -141.826)"/>
												<path id="Path_6184" data-name="Path 6184" d="M339.9,21.45a1.821,1.821,0,1,0-1.286-.533A1.833,1.833,0,0,0,339.9,21.45Zm0,0" transform="translate(-276.564 -14.569)"/>
												<path id="Path_6185" data-name="Path 6185" d="M156.179,474.359a1.82,1.82,0,1,0,1.286.533A1.834,1.834,0,0,0,156.179,474.359Zm0,0" transform="translate(-126.273 -388.049)"/>
												</g>
											</svg>
											<?php
										} else {
											?>
											<svg xmlns="http://www.w3.org/2000/svg" width="93" height="93" viewBox="0 0 93 93">
												<g id="Migration" transform="translate(-1.987 -2)">
												<path id="Path_11890" data-name="Path 11890" d="M81.04,48.5a13.95,13.95,0,0,0,0-27.9H77.848a13.911,13.911,0,0,0-21.974-9.765,23.216,23.216,0,0,0-40.989,9.827A13.939,13.939,0,0,0,15.954,48.5H42.3v6.2H34.55A7.749,7.749,0,0,0,26.8,62.45V82.6a4.663,4.663,0,0,1-4.649,4.65H14.187a6.2,6.2,0,1,0,0,3.1h7.965A7.749,7.749,0,0,0,29.9,82.6V62.45A4.663,4.663,0,0,1,34.55,57.8H42.3v9.3c0,2.061,1.875,3.565,4.649,4.588V91.9H42.3V95h6.2a1.55,1.55,0,0,0,1.55-1.55V72.556a37.516,37.516,0,0,0,6.2.713V88.8a1.55,1.55,0,0,0,1.55,1.55H71.959a6.2,6.2,0,1,0,0-3.1H59.345V73.269c6.989-.248,13.947-2.2,13.947-6.169V64h4.649a1.55,1.55,0,0,1,1.55,1.55v12.4a1.55,1.55,0,0,0,1.55,1.55h7.748V76.4h-6.2V65.55a4.663,4.663,0,0,0-4.649-4.65H73.292V48.5ZM8.206,91.9a3.1,3.1,0,1,1,3.1-3.1A3.1,3.1,0,0,1,8.206,91.9Zm69.735-6.2a3.1,3.1,0,1,1-3.1,3.1,3.1,3.1,0,0,1,3.1-3.1ZM70.192,67.1c0,.79-4.262,3.1-12.4,3.1S45.4,67.89,45.4,67.1V61.706A29.231,29.231,0,0,0,57.8,64a29.231,29.231,0,0,0,12.4-2.294Zm0-9.3c0,.79-4.262,3.1-12.4,3.1S45.4,58.59,45.4,57.8V52.406A29.231,29.231,0,0,0,57.8,54.7a29.231,29.231,0,0,0,12.4-2.294Zm0-9.3c0,.79-4.262,3.1-12.4,3.1S45.4,49.29,45.4,48.5V43.106A29.23,29.23,0,0,0,57.8,45.4a29.231,29.231,0,0,0,12.4-2.294ZM57.8,42.3c-8.136,0-12.4-2.309-12.4-3.1s4.262-3.1,12.4-3.1,12.4,2.309,12.4,3.1S65.931,42.3,57.8,42.3Zm1.55-9.269V29.9A4.663,4.663,0,0,0,54.7,25.25H46.73a6.2,6.2,0,1,0,0,3.1H54.7a1.55,1.55,0,0,1,1.55,1.55v3.131c-6.989.248-13.947,2.2-13.947,6.169v6.2H15.954a10.85,10.85,0,0,1,0-21.7h.186A10.914,10.914,0,0,1,26.8,34.55h3.1A14.025,14.025,0,0,0,18.015,20.77a20.145,20.145,0,0,1,39.315.17l3.022-.682a23.1,23.1,0,0,0-2.743-6.866A10.849,10.849,0,0,1,72.47,28.939l2.417,1.937a14.1,14.1,0,0,0,2.96-7.176H81.04a10.85,10.85,0,0,1,0,21.7H73.292V42.3h4.649a1.55,1.55,0,0,0,1.55-1.55v-6.2h1.55v-3.1h-3.1A1.55,1.55,0,0,0,76.391,33v6.2h-3.1c0-3.968-6.958-5.921-13.947-6.169ZM43.848,26.8a3.1,3.1,0,1,1-3.1-3.1A3.1,3.1,0,0,1,43.848,26.8Z" transform="translate(0 0)"/>
												<path id="Path_11891" data-name="Path 11891" d="M60,50h3.132v3.132H60Z" transform="translate(31.855 26.373)"/>
												<path id="Path_11892" data-name="Path 11892" d="M24,60h3.132v3.132H24Z" transform="translate(12.087 31.867)"/>
												<path id="Path_11893" data-name="Path 11893" d="M9.132,25.83a4.7,4.7,0,0,1,4.7-4.7V18a7.83,7.83,0,1,0,0,15.661H26.359V30.529H13.83A4.7,4.7,0,0,1,9.132,25.83Z" transform="translate(2.272 8.748)"/>
												<path id="Path_11894" data-name="Path 11894" d="M55,21h3.132v3.132H55Z" transform="translate(29.024 10.439)"/>
												</g>
											</svg>
											<?php
										}
										?>
										<h4><?php the_sub_field('section_title'); ?></h4>
										<p><?php the_sub_field('section_content'); ?></p>
										<a href="<?php the_sub_field('section_button_link'); ?>" class="btn btn-border btn-black-border"><?php the_sub_field('section_button_label_service'); ?></a>
									</div>
								</div>
								<?php
								$i = ($i == 1) ? 0 : 1;
							endwhile;
						endif;
						?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Content End-->
	<!--Content (5)-->
    <section class="section fix-height-container ">
        <div class="content-wrapper">
            <div class="section-text text-center">
                <h2><?php the_field('feature_content_section_title'); ?></h2>
                <span class="section-border"></span>
                <h5><?php the_field('feature_content_section_sub_title'); ?></h5>
            </div>
                <div class="container">
                    <div class="row">
                        <?php
                        // Check rows exists.
                        if( have_rows('feature_content_blocks') ):
                            // Loop through rows.
                            $i = 1;
                            while( have_rows('feature_content_blocks') ) : the_row();
                            $product_image = get_sub_field('feature_block_icon_image');

                                ?>
                                <div class="col-lg-3 col-sm-6 col-6">
                                    <div class="hover-info-box">
                                        <img src="<?php echo $product_image['url'];?>" style="width:36px; height:36px;">
                                        <h5><?php the_sub_field('feature_block_title'); ?></h5>
                                        <p><?php the_sub_field('feature_block_content'); ?></p>
                                        <a href="<?php the_sub_field('feature_block_button_link'); ?>" class="btn btn-border btn-black-border"><?php the_sub_field('feature_block_button_lable'); ?></a>
                                    </div>
                                </div>
                                <?php
                                $i = ($i == 1) ? 0 : 1;
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
        </div>
    </section>


    <!--Content (6)-->
    <?php
    $t_and_s_bg_image_url = '';
    $technology_and_support_bg_image = get_field('technology_and_support_bg_image');
    if ( ! empty($technology_and_support_bg_image) ) {
        $t_and_s_bg_image_url = 'background-image: url('.$technology_and_support_bg_image['url'].');';
    }
    ?>
    <section class="section fix-height-container"
        style="<?php echo $t_and_s_bg_image_url;?> background-position: center top;background-repeat: no-repeat; background-size:100%;">
        <div class="content-wrapper">
            <div class="content-text-wrapper support-text-wrapper">
                <div class="container">
                    <div class="row">
                        <?php
                        // Check rows exists.
                        if( have_rows('technology_and_support_blocks') ):
                            // Loop through rows.

                            while( have_rows('technology_and_support_blocks') ) : the_row();
                                $tnsupport_block_bg_image_url = '';
                                $technology_and_support_block_bg_image = get_sub_field('technology_and_support_block_bg_image');
                                if ( ! empty($technology_and_support_block_bg_image) ) {
                                    $tnsupport_block_bg_image_url = 'background-image: url('.$technology_and_support_block_bg_image['url'].');';
                                }
                                ?>
                                <div class="col-lg-6 col-sm-6 col-12">
                                    <div class="support-box" style="background-color:<?php the_sub_field('technology_and_support_block_color_code');?>;<?php echo $tnsupport_block_bg_image_url;?>background-repeat: no-repeat;background-position: center;">
                                        <h4><?php the_sub_field('technology_and_support_block_title');?></h4>
                                        <p><?php the_sub_field('technology_and_support_block_content');?></p>
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 col-6">
                                                <a href="<?php the_sub_field('technology_and_support_block_button_link');?>" class="btn btn-border"><?php the_sub_field('technology_and_support_block_button_label');?></a>
                                            </div>
                                            <div class="col-lg-6 col-sm-6 col-6 text-right">
                                                <?php the_sub_field('technology_and_support_block_svg_image_code');?>
                                            </div>
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
        </div>
    </section>
		</div>
    <!--Content End-->

	<?php
endwhile; // End of the loop.

get_footer();
=======
						</ul>
					</div>
					<div class="col-md-6 wow fadeInRight">
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
				<div class="row">
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
						<div class="col-md-4 wow fadeInUp">
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
			<div class="row">
				<?php
				if ( have_rows( 'section_content_blocks' ) ) :
					$i = 1;
					while ( have_rows( 'section_content_blocks' ) ) :
						the_row();
						$section_background_color = get_sub_field( 'section_background_color' );
						?>
					<div class="col-md-6 wow <?php if($i%2==0){ echo 'fadeInRight'; }else { echo 'fadeInLeft'; }?>">
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
						$i++;
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
			<div class="row product_card_list">
			<?php
			$count_p = 1;
			if ( have_rows( 'feature_content_blocks' ) ) :
				while ( have_rows( 'feature_content_blocks' ) ) :
					the_row();
					// if($count_p > 4){ break; }
					$product_image = get_sub_field( 'feature_block_icon_image' );
					?>
				<div class="col-md-3 wow fadeInRightBig"  data-wow-offset="10">
					<a href="<?php the_sub_field( 'feature_block_button_link' ); ?>">
					<div class="product-card">						
						<div class="product-card__image-container">
							<img src="<?php echo $product_image['url']; ?>" alt="<?php the_sub_field( 'feature_block_title' ); ?>" >
						</div>
						<h4 class="product-card__title"><?php the_sub_field( 'feature_block_title' ); ?></h4>
						<p class="product-card__description"><?php the_sub_field( 'feature_block_content' ); ?></p>
						<span  class="btn--outline-dark">Read More</span>
					</div>
					</a>
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
				<div class="row">
				<?php
				if ( have_rows( 'technology_and_support_blocks' ) ) :
					$i = 1;
					while ( have_rows( 'technology_and_support_blocks' ) ) :
						the_row();
						$tnsupport_block_bg_image_url          = '';
						$technology_and_support_block_bg_image = get_sub_field( 'technology_and_support_block_bg_image' );
						
						$block_front_small_icon_image = get_sub_field( 'block_front_small_icon' );
						
						

						if ( ! empty( $technology_and_support_block_bg_image ) ) {
							$tnsupport_block_bg_image_url = 'background-image: url(' . $technology_and_support_block_bg_image['url'] . ');';
						}
						?>
					<div class="col-md-6 wow <?php if($i%2==0){ echo 'fadeInRight'; }else { echo 'fadeInLeft'; }?>">
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
						$i++;
					endwhile;
				endif;
				?>
				</div>
			</div>
		</div>
	</section>
</section>

<?php get_footer(); ?>
>>>>>>> add/templating
