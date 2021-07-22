<?php
/**
 *  Dedicated Servers Page Template Old
 *
 * This is the most main template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dedicated_solutions
 */
get_header();
?>

<div id="fullpage">
	<!--Content (1)-->
	<section class="section  fix-height-container first-fix-container with-page-header">
		<div class="content-wrapper">
					<!-- Page header -->
	<div class="page-header bg-page-header">
		<div class="page-header-text">
			<span>Starting from</span>
			<div class="price-tag">
				<h4><?php echo get_field('price'); ?><span>.00</span></h4>
				<h6>/month</h6>
			</div>
			<h2><?php the_title();?></h2>
			<h5><?php the_content();?></h5>
			<?php
			if( have_rows('features_list') ){ ?>
			<div class="mt-3">
				<ul class="banner-link-list">
					<?php
					while( have_rows('features_list') ){ the_row(); ?>
					<li class="banner-link">
						<a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" class="link-icon" width="20" height="20"
								viewBox="0 0 20 20">
								<path id="check"
									d="M10,0A10,10,0,1,0,20,10,10.011,10.011,0,0,0,10,0Zm5.068,7.881L9.652,13.3a.833.833,0,0,1-1.178,0L5.765,10.589A.833.833,0,0,1,6.944,9.411L9.063,11.53,13.89,6.7a.833.833,0,0,1,1.178,1.178Zm0,0"
									fill="#f80" />
							</svg>
							<?php the_sub_field('feature');?>
							</a>
					</li>
					<?php }?>
				</ul>
			</div>
			<?php
			}?>
		</div>
	</div>
	<!-- end Page header -->
	<?php
	if( have_rows('server_features_list') ){
	?>
			<div class="top-tab-wrapper">
                        <div class="container">

                            <div class="row">
                                <div class="col-12 filters-group-wrap">
                                    <ul class="filter-options nav nav-tabs">
                                        <li class="active" data-group="server-feature"><a href="#">Server Features</a></li>
                                        <li data-group="server-config"><a href="#">SERVER
                                                CONFIGURATIONS</a></li>
                                        <li data-group="server-feature1"><a href="#">Server Features</a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div id="grid" class="row my-shuffle-container top-tab-content-wrapper">
                            <div class="col-12@xs col-12@sm col-12@md picture-item" data-groups='["server-feature"]'
                                data-date-created="2016-07-01" data-title="Golden Gate Bridge">
                                <div class="picture-item__inner">

                                    <div class="row">
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-1.svg" alt="icon">
                                                <h5>100% Uptime !</h5>
                                                <p>We haven’t had any outage in over 5 years.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-2.svg" alt="icon">
                                                <h5>30 DAY MONEY BACK!</h5>
                                                <p>Try us – you will like us.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-3.svg" alt="icon">
                                                <h5>INSTANT SERVER SETUP!</h5>
                                                <p>Your Server wil be ready within minutes</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-4.svg" alt="icon">
                                                <h5>24/7 EVERYTHING!</h5>
                                                <p>24/7 Support & Engineering Staff</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-5.svg" alt="icon">
                                                <h5>PRIVATE CLOUD AVAILABLE!</h5>
                                                <p>Contact us for a custom quote.</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-6.svg" alt="icon">
                                                <h5>CUSTOM SERVERS AVAILABLE!</h5>
                                                <p>Max. 12 Hours Provisioning Guaranteed</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-7.svg" alt="icon">
                                                <h5>EXTREME SPEED!</h5>
                                                <p>10GBit/s Servers available!</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-8.svg" alt="icon">
                                                <h5>DATA CENTER TO DATA CENTER!</h5>
                                                <p>10GBit/s Servers available!</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-9.svg" alt="icon">
                                                <h5>HIGHEST STANDARDS!</h5>
                                                <p>Tier-III & Tier-IV Data Center Locations</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-10.svg" alt="icon">
                                                <h5>SELF CONTROL PANEL!</h5>
                                                <p>100% Automated Reboot & OS installation.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-11.svg" alt="icon">
                                                <h5>ADVANCED CONTROL PANEL!</h5>
                                                <p>Intuitive way to Manage your Servers!</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-12.svg" alt="icon">
                                                <h5>MULTI-SERVER MANAGEMENT!</h5>
                                                <p>Manage all your servers, at any location</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12@xs col-12@sm col-12@md picture-item" data-groups='["server-config"]'
                                data-date-created="2016-07-01" data-title="Golden Gate Bridge">
                                <div class="picture-item__inner">

                                    <div class="row">
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-1.svg" alt="icon">
                                                <h5>100% Uptime !</h5>
                                                <p>We haven’t had any outage in over 5 years.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-2.svg" alt="icon">
                                                <h5>30 DAY MONEY BACK!</h5>
                                                <p>Try us – you will like us.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-3.svg" alt="icon">
                                                <h5>INSTANT SERVER SETUP!</h5>
                                                <p>Your Server wil be ready within minutes</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-4.svg" alt="icon">
                                                <h5>24/7 EVERYTHING!</h5>
                                                <p>24/7 Support & Engineering Staff</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-5.svg" alt="icon">
                                                <h5>PRIVATE CLOUD AVAILABLE!</h5>
                                                <p>Contact us for a custom quote.</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-6.svg" alt="icon">
                                                <h5>CUSTOM SERVERS AVAILABLE!</h5>
                                                <p>Max. 12 Hours Provisioning Guaranteed</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-7.svg" alt="icon">
                                                <h5>EXTREME SPEED!</h5>
                                                <p>10GBit/s Servers available!</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-8.svg" alt="icon">
                                                <h5>DATA CENTER TO DATA CENTER!</h5>
                                                <p>10GBit/s Servers available!</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-9.svg" alt="icon">
                                                <h5>HIGHEST STANDARDS!</h5>
                                                <p>Tier-III & Tier-IV Data Center Locations</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-10.svg" alt="icon">
                                                <h5>SELF CONTROL PANEL!</h5>
                                                <p>100% Automated Reboot & OS installation.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-11.svg" alt="icon">
                                                <h5>ADVANCED CONTROL PANEL!</h5>
                                                <p>Intuitive way to Manage your Servers!</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-12.svg" alt="icon">
                                                <h5>MULTI-SERVER MANAGEMENT!</h5>
                                                <p>Manage all your servers, at any location</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12@xs col-12@sm col-12@md picture-item" data-groups='["server-feature1"]'
                                data-date-created="2016-07-01" data-title="Golden Gate Bridge">
                                <div class="picture-item__inner">

                                    <div class="row">
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-1.svg" alt="icon">
                                                <h5>100% Uptime !</h5>
                                                <p>We haven’t had any outage in over 5 years.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-2.svg" alt="icon">
                                                <h5>30 DAY MONEY BACK!</h5>
                                                <p>Try us – you will like us.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-3.svg" alt="icon">
                                                <h5>INSTANT SERVER SETUP!</h5>
                                                <p>Your Server wil be ready within minutes</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-4.svg" alt="icon">
                                                <h5>24/7 EVERYTHING!</h5>
                                                <p>24/7 Support & Engineering Staff</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-5.svg" alt="icon">
                                                <h5>PRIVATE CLOUD AVAILABLE!</h5>
                                                <p>Contact us for a custom quote.</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-6.svg" alt="icon">
                                                <h5>CUSTOM SERVERS AVAILABLE!</h5>
                                                <p>Max. 12 Hours Provisioning Guaranteed</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-7.svg" alt="icon">
                                                <h5>EXTREME SPEED!</h5>
                                                <p>10GBit/s Servers available!</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-8.svg" alt="icon">
                                                <h5>DATA CENTER TO DATA CENTER!</h5>
                                                <p>10GBit/s Servers available!</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-9.svg" alt="icon">
                                                <h5>HIGHEST STANDARDS!</h5>
                                                <p>Tier-III & Tier-IV Data Center Locations</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-10.svg" alt="icon">
                                                <h5>SELF CONTROL PANEL!</h5>
                                                <p>100% Automated Reboot & OS installation.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-11.svg" alt="icon">
                                                <h5>ADVANCED CONTROL PANEL!</h5>
                                                <p>Intuitive way to Manage your Servers!</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-12.svg" alt="icon">
                                                <h5>MULTI-SERVER MANAGEMENT!</h5>
                                                <p>Manage all your servers, at any location</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-1@sm col-1@xs my-sizer-element"></div>
                        </div>
                    </div>
	<?php
	}?>
		</div>
	</section>
	<!--Content End-->
	<!--Content (2)-->
	<section class="section fix-height-container bg-black">
		<div class="content-wrapper">
			<div class="section-text text-center mb-2">
				<h2><?php the_field('hosting_features_title');?></h2>
				<span class="section-border"></span>
				<h5 class="text-orange"> <?php the_field('hosting_feature_description') ?></h5>
			</div>
			<?php
			if( have_rows('hosting_features') ){ ?>
			<div class="content-text-wrapper">
				<div class="container-fluid">
					<div class="row ">
						<div class="col-lg-4 col-12">
						<?php
						$hosting_features = get_field('hosting_features');
						$total_hosting_features = count($hosting_features);
						$first_colum = (int)count($hosting_features) / 2;
						if( ($total_hosting_features % 2) !== 0 ){
							$first_colum += 1;
						}

						foreach( $hosting_features as $key => $feature ){
							if( $key == $first_colum ) break;
							?>
							<div class="info-icon-primary-box info-right-align">
								<div class="info-icon-primary-text">
									<h5><?php echo $feature['title'];?></h5>
									<p><?php echo $feature['description'];?></p>
								</div>
								<div class="icon-primary-box">
									<?php ds_show_icon($feature['icon']);?>
								</div>
							</div>
							<?php
						}?>
						</div>
						<div class="col-lg-4 col-12 mt-5 mt-lg-0">
							<?php ds_show_icon(get_field('hosting_feature_img')) ?>
						</div>
						<div class="col-lg-4 col-12 ">
						<?php
						foreach( array_slice($hosting_features, $first_colum) as $key => $feature ){
						?>
							<div class="info-icon-primary-box">
								<div class="icon-primary-box">
									<?php ds_show_icon($feature['icon']);?>
								</div>
								<div class="info-icon-primary-text">
									<h5><?php echo $feature['title'];?></h5>
									<p><?php echo $feature['description'];?></p>
								</div>
							</div>
						<?php
						}?>
						</div>
					</div>
				</div>
			</div>
			<?php
			}
			?>
		</div>
	</section>
	<!--Content End-->
	<!--Content (3)-->
	<?php
	if( have_rows('dedicated_servers') ) {
		?>
		<section class="section fix-height-container ">
			<div class="content-wrapper">
				<div class="section-text text-center mb-2">
					<h2>Our Most Populer Dedicated Server</h2>
					<span class="section-border"></span>
				</div>
				<div class="content-text-wrapper mt-2">
					<div class="container-fluid">
						<div class="row ">
							<?php
							while( have_rows('dedicated_servers') ) { the_row(); ?>
								<div class="col-lg-4 col-12">
									<div class="populer-server-wrapper">
										<div class="populer-server-title">
											<h3><?php ds_show_icon('budget-servers');?>
												<?php the_sub_field('server_name');?>
											</h3>
											<p><?php the_sub_field('description');?></p>
										</div>
										<div class="row">
											<?php
											if( have_rows('servers') ) {
												while( have_rows('servers') ) { the_row();?>
													<div class="col-lg-6 col-12">
														<div class="populer-server-detail-box">
															<div class="populer-server-detail-box-title">
																<h5><?php the_sub_field('title');?></h5>
																<p><?php the_sub_field('configurations');?></p>
															</div>
															<div class="populer-server-detail-box-icon">
																<?php
																$gallary = get_sub_field('logo');
																if( ! empty($gallary) ) {
																	foreach($gallary as $img ){
																		?>
																		<img class="img-fluid" src="<?php echo $img?>" width="30px;"/>
																		<?php
																	}
																}
																?>
															</div>
															<?php
															if( have_rows('feature_list') ) {
																?>
																<ul class="populer-server-detail-box-list">
																	<?php
																	while( have_rows('feature_list') ) { the_row();
																		?>
																		<li><?php the_sub_field('feature_name');?></li>
																		<?php
																	}
																	?>
																</ul>
																<?php
															}
															?>
															<button class="btn btn-primary">Order (Instant)
																<svg xmlns="http://www.w3.org/2000/svg" width="11.684"
																	height="11.899" viewBox="0 0 11.684 11.899">
																	<g id="right" transform="translate(0.4 0.4)">
																		<g id="Group_1053" data-name="Group 1053">
																			<path id="Path_6081" data-name="Path 6081"
																				d="M17.446,90.637l-5.2-5.2a.347.347,0,0,0-.49.49l4.611,4.611-9.353-.1-.268.126-.079.221c0,.192.347.347.347.347l9.353.1L11.753,95.84a.347.347,0,1,0,.49.49l5.2-5.2A.347.347,0,0,0,17.446,90.637Z"
																				transform="translate(-6.664 -85.333)" fill="#fff"
																				stroke="#fff" stroke-width="0.8" />
																		</g>
																	</g>
																</svg>
															</button>
														</div>
													</div>
													<?php
												}
											}
											?>
										</div>
									</div>
								</div>
								<?php
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php
	}
	?>
	<!--Content End-->

	<!--Content (4)-->
	<section class="section fix-height-container first-fix-container with-page-header">
	<div class="top-tab-wrapper">
                        <div class="container">

                            <div class="row">
                                <div class="col-12 filters-group-wrap">
                                    <ul class="filter-options nav nav-tabs">
                                        <li class="active" data-group="server-feature"><a href="#">Server Features</a></li>
                                        <li data-group="server-config"><a href="#">SERVER
                                                CONFIGURATIONS</a></li>
                                        <li data-group="server-feature1"><a href="#">Server Features</a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div id="grid" class="row my-shuffle-container top-tab-content-wrapper">
                            <div class="col-12@xs col-12@sm col-12@md picture-item" data-groups='["server-feature"]'
                                data-date-created="2016-07-01" data-title="Golden Gate Bridge">
                                <div class="picture-item__inner">

                                    <div class="row">
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-1.svg" alt="icon">
                                                <h5>100% Uptime !</h5>
                                                <p>We haven’t had any outage in over 5 years.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-2.svg" alt="icon">
                                                <h5>30 DAY MONEY BACK!</h5>
                                                <p>Try us – you will like us.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-3.svg" alt="icon">
                                                <h5>INSTANT SERVER SETUP!</h5>
                                                <p>Your Server wil be ready within minutes</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-4.svg" alt="icon">
                                                <h5>24/7 EVERYTHING!</h5>
                                                <p>24/7 Support & Engineering Staff</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-5.svg" alt="icon">
                                                <h5>PRIVATE CLOUD AVAILABLE!</h5>
                                                <p>Contact us for a custom quote.</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-6.svg" alt="icon">
                                                <h5>CUSTOM SERVERS AVAILABLE!</h5>
                                                <p>Max. 12 Hours Provisioning Guaranteed</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-7.svg" alt="icon">
                                                <h5>EXTREME SPEED!</h5>
                                                <p>10GBit/s Servers available!</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-8.svg" alt="icon">
                                                <h5>DATA CENTER TO DATA CENTER!</h5>
                                                <p>10GBit/s Servers available!</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-9.svg" alt="icon">
                                                <h5>HIGHEST STANDARDS!</h5>
                                                <p>Tier-III & Tier-IV Data Center Locations</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-10.svg" alt="icon">
                                                <h5>SELF CONTROL PANEL!</h5>
                                                <p>100% Automated Reboot & OS installation.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-11.svg" alt="icon">
                                                <h5>ADVANCED CONTROL PANEL!</h5>
                                                <p>Intuitive way to Manage your Servers!</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-12.svg" alt="icon">
                                                <h5>MULTI-SERVER MANAGEMENT!</h5>
                                                <p>Manage all your servers, at any location</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12@xs col-12@sm col-12@md picture-item" data-groups='["server-config"]'
                                data-date-created="2016-07-01" data-title="Golden Gate Bridge">
                                <div class="picture-item__inner">

                                    <div class="row">
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-1.svg" alt="icon">
                                                <h5>100% Uptime !</h5>
                                                <p>We haven’t had any outage in over 5 years.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-2.svg" alt="icon">
                                                <h5>30 DAY MONEY BACK!</h5>
                                                <p>Try us – you will like us.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-3.svg" alt="icon">
                                                <h5>INSTANT SERVER SETUP!</h5>
                                                <p>Your Server wil be ready within minutes</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-4.svg" alt="icon">
                                                <h5>24/7 EVERYTHING!</h5>
                                                <p>24/7 Support & Engineering Staff</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-5.svg" alt="icon">
                                                <h5>PRIVATE CLOUD AVAILABLE!</h5>
                                                <p>Contact us for a custom quote.</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-6.svg" alt="icon">
                                                <h5>CUSTOM SERVERS AVAILABLE!</h5>
                                                <p>Max. 12 Hours Provisioning Guaranteed</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-7.svg" alt="icon">
                                                <h5>EXTREME SPEED!</h5>
                                                <p>10GBit/s Servers available!</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-8.svg" alt="icon">
                                                <h5>DATA CENTER TO DATA CENTER!</h5>
                                                <p>10GBit/s Servers available!</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-9.svg" alt="icon">
                                                <h5>HIGHEST STANDARDS!</h5>
                                                <p>Tier-III & Tier-IV Data Center Locations</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-10.svg" alt="icon">
                                                <h5>SELF CONTROL PANEL!</h5>
                                                <p>100% Automated Reboot & OS installation.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-11.svg" alt="icon">
                                                <h5>ADVANCED CONTROL PANEL!</h5>
                                                <p>Intuitive way to Manage your Servers!</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-12.svg" alt="icon">
                                                <h5>MULTI-SERVER MANAGEMENT!</h5>
                                                <p>Manage all your servers, at any location</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12@xs col-12@sm col-12@md picture-item" data-groups='["server-feature1"]'
                                data-date-created="2016-07-01" data-title="Golden Gate Bridge">
                                <div class="picture-item__inner">

                                    <div class="row">
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-1.svg" alt="icon">
                                                <h5>100% Uptime !</h5>
                                                <p>We haven’t had any outage in over 5 years.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-2.svg" alt="icon">
                                                <h5>30 DAY MONEY BACK!</h5>
                                                <p>Try us – you will like us.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-3.svg" alt="icon">
                                                <h5>INSTANT SERVER SETUP!</h5>
                                                <p>Your Server wil be ready within minutes</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-4.svg" alt="icon">
                                                <h5>24/7 EVERYTHING!</h5>
                                                <p>24/7 Support & Engineering Staff</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-5.svg" alt="icon">
                                                <h5>PRIVATE CLOUD AVAILABLE!</h5>
                                                <p>Contact us for a custom quote.</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-6.svg" alt="icon">
                                                <h5>CUSTOM SERVERS AVAILABLE!</h5>
                                                <p>Max. 12 Hours Provisioning Guaranteed</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-7.svg" alt="icon">
                                                <h5>EXTREME SPEED!</h5>
                                                <p>10GBit/s Servers available!</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-8.svg" alt="icon">
                                                <h5>DATA CENTER TO DATA CENTER!</h5>
                                                <p>10GBit/s Servers available!</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-9.svg" alt="icon">
                                                <h5>HIGHEST STANDARDS!</h5>
                                                <p>Tier-III & Tier-IV Data Center Locations</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-10.svg" alt="icon">
                                                <h5>SELF CONTROL PANEL!</h5>
                                                <p>100% Automated Reboot & OS installation.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-11.svg" alt="icon">
                                                <h5>ADVANCED CONTROL PANEL!</h5>
                                                <p>Intuitive way to Manage your Servers!</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="hover-info-box">
                                                <img src="assets/image/dedicated-icon-12.svg" alt="icon">
                                                <h5>MULTI-SERVER MANAGEMENT!</h5>
                                                <p>Manage all your servers, at any location</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-1@sm col-1@xs my-sizer-element"></div>
                        </div>
                    </div>
	</section>

	<!--Content (5)-->
	<section class="section fix-height-container first-fix-container with-page-header" style="background-color: #F2F2F2;">
		<div class="content-wrapper">
			<div class="section-text text-center mb-2">
				<h2><?php the_field('enterprise_feature_compare_section_title');?></h2>
				<span class="section-border"></span>
			</div>
			<div class="content-text-wrapper">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-12 ">
							<div class="price-compare-table-wrapper row">
								<table class="price-compare-table">
									<tbody>
										<tr>
											<td></td>
											<?php
											if( have_rows('enterprise_feature_compare') ) {
												while( have_rows('enterprise_feature_compare') ) { the_row();
													?>
													<td class="price-compare-table-title" style="background-color: #F8F8F8;">
														<i class="price-compre-table-icon">
															<?php ds_show_icon(get_sub_field('server_icon')) ?>
														</i>
														<?php the_sub_field('server_title');?>
														<br><small><?php the_sub_field('server_sub_title');?></small>
													</td>
													<?php
												}
											}
											?>
										</tr>
										<?php
										if( have_rows('feature_compare_list') ) {
											while( have_rows('feature_compare_list') ) { the_row();
												?>
												<tr>
													<td><?php the_sub_field('feature_title');?>
														<a href="#" class="price-table-help">
															<?php //the_sub_field('feature_question_info');?>
															<?php ds_show_icon('question'); ?>
														</a>
													</td>
													<?php
													if( have_rows('feature_compare_data') ) {
														while( have_rows('feature_compare_data') ) { the_row();
															$truefalse_or_text = get_sub_field('truefalse_or_text');
															$feature_valure = '';
															if ( $truefalse_or_text == 'truefalse' ) {
																$tick_mark = get_sub_field('tick_mark');
																if ( isset($tick_mark) && ! empty($tick_mark) && $tick_mark[0] == 'yes' ) {
																	$feature_valure = ds_show_icon('tick', false);
																} else {
																	$feature_valure = ds_show_icon('cancel', false);
																}
															} else {
																$feature_valure = get_sub_field('text_value');
															}
															?>
															<td>
																<?php echo $feature_valure;?>
															</td>
															<?php
														}
													}
													?>
												</tr>
												<?php
											}
										}

										if( have_rows('enterprise_feature_compare') ) {
											?>
											<tr>
												<td></td>
												<?php
												while( have_rows('enterprise_feature_compare') ) { the_row();
													?>
													<td class="price">
														<a href="<?php the_sub_field('view_budget_button_link'); ?>" class="<?php the_sub_field('view_budget_button_class'); ?> mt-1"><?php the_sub_field('view_budget_button_label'); ?></a><br>
														<span><?php the_sub_field('view_budget_button_sub_title'); ?></span>
													</td>
													<?php
												}?>
											</tr>
											<?php
										}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Content End-->
</div>  <div id="fullpage">
	<!--Content (1)-->
	<section class="section  fix-height-container first-fix-container with-page-header">
		<div class="content-wrapper">
					<!-- Page header -->
	<div class="page-header bg-page-header">
		<div class="page-header-text">
			<span>Starting from</span>
			<div class="price-tag">
				<h4>$39<span>.00</span></h4>
				<h6>/month</h6>
			</div>
			<h2>Dedicated Servers</h2>
			<h5>All Computing Options in one place – That is Bare-Metal Server Hosting!</h5>
			<div class="mt-3">
				<ul class="banner-link-list">
					<li class="banner-link">
						<a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" class="link-icon" width="20" height="20"
								viewBox="0 0 20 20">
								<path id="check"
									d="M10,0A10,10,0,1,0,20,10,10.011,10.011,0,0,0,10,0Zm5.068,7.881L9.652,13.3a.833.833,0,0,1-1.178,0L5.765,10.589A.833.833,0,0,1,6.944,9.411L9.063,11.53,13.89,6.7a.833.833,0,0,1,1.178,1.178Zm0,0"
									fill="#f80" />
							</svg>
							1000+
							Customers Satisfied</a>
					</li>
					<li class="banner-link">
						<a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="link-icon" width="20" height="20"
								viewBox="0 0 20 20">
								<path id="check"
									d="M10,0A10,10,0,1,0,20,10,10.011,10.011,0,0,0,10,0Zm5.068,7.881L9.652,13.3a.833.833,0,0,1-1.178,0L5.765,10.589A.833.833,0,0,1,6.944,9.411L9.063,11.53,13.89,6.7a.833.833,0,0,1,1.178,1.178Zm0,0"
									fill="#f80" />
							</svg> 3
							Data Center Locations</a>
					</li>
					<li class="banner-link">
						<a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="link-icon" width="20" height="20"
								viewBox="0 0 20 20">
								<path id="check"
									d="M10,0A10,10,0,1,0,20,10,10.011,10.011,0,0,0,10,0Zm5.068,7.881L9.652,13.3a.833.833,0,0,1-1.178,0L5.765,10.589A.833.833,0,0,1,6.944,9.411L9.063,11.53,13.89,6.7a.833.833,0,0,1,1.178,1.178Zm0,0"
									fill="#f80" />
							</svg> 10
							GBit Servers</a>
					</li>
					<li class="banner-link">
						<a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="link-icon" width="20" height="20"
								viewBox="0 0 20 20">
								<path id="check"
									d="M10,0A10,10,0,1,0,20,10,10.011,10.011,0,0,0,10,0Zm5.068,7.881L9.652,13.3a.833.833,0,0,1-1.178,0L5.765,10.589A.833.833,0,0,1,6.944,9.411L9.063,11.53,13.89,6.7a.833.833,0,0,1,1.178,1.178Zm0,0"
									fill="#f80" />
							</svg>
							Unlimited Bandwidth</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- end Page header -->
			<div class="content-text-wrapper  mt-0">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-12 ">
							<div class="top-tab-wrapper row">

								<div class="container">
									<div class="row">
										<ul class="nav nav-tabs">
											<li><a data-toggle="tab" href="#sererFeatures">Server Features</a>
											</li>
											<li class="active"><a data-toggle="tab"
													href="#sererConfiguration">SERVER
													CONFIGURATIONS</a></li>
											<li><a data-toggle="tab" href="#sererFeatures2">Server Features</a>
											</li>
										</ul>
									</div>

								</div>
							</div>
							<div class="tab-content top-tab-content-wrapper">
								<div id="sererConfiguration" class="tab-pane active">
									<div class="row">
										<div class="container">
											<div class="row">
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="hover-info-box">
														<svg xmlns="http://www.w3.org/2000/svg" width="49.666"
															height="49.666" viewBox="0 0 49.666 49.666">
															<g id="up-arrow" transform="translate(0 0)">
																<path id="Path_12073" data-name="Path 12073"
																	d="M64.829,32.117h7.4L50.117,10,28,32.117H64.829Z"
																	transform="translate(-25.284 -9.03)"
																	fill="#fedbab" />
																<path id="Path_12074" data-name="Path 12074"
																	d="M121.923,187.757V169.133h8.342L115.133,154,100,169.133h8.342v18.625Z"
																	transform="translate(-90.3 -139.061)"
																	fill="#f80" />
																<path id="Path_12075" data-name="Path 12075"
																	d="M48.7,179.7H31.623a.97.97,0,0,1-.97-.97V160.1a.97.97,0,0,1,.97-.97h6L24.833,146.342,12.042,159.133h6a.97.97,0,0,1,.97.97v18.625a.97.97,0,0,1-.97.97H.97a.97.97,0,1,1,0-1.94h16.1V161.073H9.7a.97.97,0,0,1-.686-1.656l15.133-15.133a.97.97,0,0,1,1.372,0l15.133,15.133a.97.97,0,0,1-.686,1.656H32.593v16.685H48.7a.97.97,0,1,1,0,1.94Z"
																	transform="translate(0 -130.031)" />
																<path id="Path_12076" data-name="Path 12076"
																	d="M63.2,24.057H54.829a.97.97,0,0,1,0-1.94h6.033L41.086,2.342,21.311,22.117h6.162a.97.97,0,1,1,0,1.94h-8.5a.97.97,0,0,1-.686-1.656L40.4.284a.97.97,0,0,1,1.372,0L63.889,22.4a.97.97,0,0,1-.686,1.656Z"
																	transform="translate(-16.253)" />
																<path id="Path_12077" data-name="Path 12077"
																	d="M280.97,379.341a.97.97,0,0,1-.97-.97V367.958a.97.97,0,0,1,1.94,0V378.37A.97.97,0,0,1,280.97,379.341Z"
																	transform="translate(-252.839 -331.389)" />
																<path id="Path_12078" data-name="Path 12078"
																	d="M280.97,336.283a.97.97,0,0,1-.97-.97V335.3a.97.97,0,0,1,1.94,0v.013A.97.97,0,0,1,280.97,336.283Z"
																	transform="translate(-252.839 -301.899)"
																	fill="#000413" />
															</g>
														</svg>
														<h5>100% Uptime !</h5>
														<p>We haven’t had any outage in over 5 years.</p>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="hover-info-box">
														<svg xmlns="http://www.w3.org/2000/svg" width="37.5"
															height="49.899" viewBox="0 0 37.5 49.899">
															<g id="badge_2_" data-name="badge (2)"
																transform="translate(-0.5 -0.001)">
																<path id="Path_12079" data-name="Path 12079"
																	d="M123.574,268.32l-5.907-3.706a1.1,1.1,0,0,0-1.174,0l-5.907,3.706a1.1,1.1,0,0,1-1.691-.935V243h16.372v24.38a1.1,1.1,0,0,1-1.691.935Zm0,0"
																	transform="translate(-97.83 -219.32)"
																	fill="#fff" />
																<path id="Path_12080" data-name="Path 12080"
																	d="M167.492,243h-6.148v23.17l2.487-1.56a1.1,1.1,0,0,1,1.174,0l2.487,1.56Zm0,0"
																	transform="translate(-145.168 -219.32)"
																	fill="#f80" />
																<path id="Path_12081" data-name="Path 12081"
																	d="M26.533,8.675l2.324-1.056a1.228,1.228,0,0,1,1.4.279l1.744,1.865a1.226,1.226,0,0,0,.938.389l2.551-.086a1.228,1.228,0,0,1,1.191.8l.9,2.39a1.227,1.227,0,0,0,.718.718l2.39.9a1.227,1.227,0,0,1,.8,1.19L41.4,18.609a1.228,1.228,0,0,0,.389.938l1.865,1.743a1.228,1.228,0,0,1,.279,1.4L42.877,25.02a1.227,1.227,0,0,0,0,1.015l1.056,2.325a1.228,1.228,0,0,1-.279,1.4l-1.865,1.743a1.228,1.228,0,0,0-.389.938L41.486,35a1.228,1.228,0,0,1-.8,1.191l-2.39.9a1.227,1.227,0,0,0-.718.718l-.9,2.39a1.227,1.227,0,0,1-1.191.8L32.943,40.9a1.228,1.228,0,0,0-.938.389l-1.744,1.865a1.228,1.228,0,0,1-1.4.279L26.533,42.38a1.228,1.228,0,0,0-1.016,0l-2.325,1.056a1.228,1.228,0,0,1-1.4-.279l-1.743-1.865a1.228,1.228,0,0,0-.938-.389l-2.552.086a1.227,1.227,0,0,1-1.19-.8l-.9-2.39a1.228,1.228,0,0,0-.718-.718l-2.39-.9a1.229,1.229,0,0,1-.8-1.191l.086-2.551a1.227,1.227,0,0,0-.388-.938L8.4,29.764a1.227,1.227,0,0,1-.279-1.4l1.056-2.325a1.227,1.227,0,0,0,0-1.015L8.117,22.7a1.227,1.227,0,0,1,.279-1.4l1.865-1.743a1.227,1.227,0,0,0,.388-.938l-.086-2.552a1.228,1.228,0,0,1,.8-1.19l2.39-.9a1.228,1.228,0,0,0,.718-.718l.9-2.39a1.228,1.228,0,0,1,1.19-.8l2.552.086a1.227,1.227,0,0,0,.938-.389L21.788,7.9a1.228,1.228,0,0,1,1.4-.279l2.325,1.056A1.225,1.225,0,0,0,26.533,8.675Zm0,0"
																	transform="translate(-6.775 -6.776)"
																	fill="#f80" />
																<path id="Path_12082" data-name="Path 12082"
																	d="M85.013,71.457a13.059,13.059,0,1,1-26.118,0,13.237,13.237,0,0,1,.084-1.487,13.06,13.06,0,0,1,26.034,1.487Zm0,0"
																	transform="translate(-52.704 -52.706)"
																	fill="#fff" />
																<path id="Path_12084" data-name="Path 12084"
																	d="M52.721,64.168q-.035,0-.07,0a.731.731,0,0,1-.659-.8,13.791,13.791,0,0,1,27.444-.135.731.731,0,1,1-1.454.152,12.33,12.33,0,0,0-24.534.121.731.731,0,0,1-.727.662Zm0,0"
																	transform="translate(-46.471 -45.93)" />
																<path id="Path_12085" data-name="Path 12085"
																	d="M66.232,213.784a13.822,13.822,0,0,1-13.67-11.964.731.731,0,0,1,1.449-.192,12.33,12.33,0,0,0,24.463-.168.731.731,0,1,1,1.452.172,13.786,13.786,0,0,1-13.694,12.152Zm0,0"
																	transform="translate(-46.982 -181.243)" />
																<path id="Path_12086" data-name="Path 12086"
																	d="M36.768,18.956a.5.5,0,0,1,0-.411l1.056-2.325a1.957,1.957,0,0,0-.446-2.241l-1.865-1.744a.5.5,0,0,1-.157-.38l.086-2.551a1.957,1.957,0,0,0-1.27-1.9l-2.39-.9a.5.5,0,0,1-.29-.29l-.9-2.39a1.956,1.956,0,0,0-1.9-1.269l-2.551.086a.493.493,0,0,1-.38-.157L24.021.622A1.957,1.957,0,0,0,21.78.177L19.456,1.233a.5.5,0,0,1-.411,0L16.72.177A1.957,1.957,0,0,0,14.48.622L12.736,2.488a.5.5,0,0,1-.379.157L9.8,2.559a1.955,1.955,0,0,0-1.9,1.269l-.9,2.39a.5.5,0,0,1-.29.29l-2.39.9a1.957,1.957,0,0,0-1.269,1.9l.086,2.552a.5.5,0,0,1-.157.38L1.121,13.98a1.958,1.958,0,0,0-.446,2.241l1.056,2.324a.5.5,0,0,1,0,.411L.676,21.281a1.958,1.958,0,0,0,.446,2.241l1.865,1.744a.5.5,0,0,1,.157.38L3.058,28.2a1.958,1.958,0,0,0,1.269,1.9l2.39.9a.5.5,0,0,1,.29.29l.9,2.39a1.957,1.957,0,0,0,1.9,1.269l2.552-.086a.5.5,0,0,1,.38.157l1.743,1.865a1.955,1.955,0,0,0,.966.565V46.45l-3.078,1.931a.374.374,0,0,1-.572-.316V37.112a.731.731,0,0,0-1.462,0V48.065a1.836,1.836,0,0,0,2.811,1.555l5.907-3.707a.377.377,0,0,1,.4,0l5.907,3.707a1.836,1.836,0,0,0,2.811-1.555V37.115a.731.731,0,0,0-1.462,0V48.065a.374.374,0,0,1-.572.316L23.055,46.45V37.445a1.958,1.958,0,0,0,.965-.565l1.744-1.865a.491.491,0,0,1,.379-.157l2.552.086a1.959,1.959,0,0,0,1.9-1.269l.9-2.39a.5.5,0,0,1,.29-.29l2.39-.9a1.957,1.957,0,0,0,1.269-1.9l-.086-2.551a.5.5,0,0,1,.157-.38l1.865-1.744a1.957,1.957,0,0,0,.445-2.241ZM20.226,44.675a1.845,1.845,0,0,0-1.951,0l-1.367.858V37.24l2.138-.971a.5.5,0,0,1,.411,0l2.138.971v8.293ZM35.437,19.561l1.056,2.324a.5.5,0,0,1-.113.568L34.515,24.2a1.959,1.959,0,0,0-.62,1.5l.086,2.551a.5.5,0,0,1-.322.482l-2.39.9a1.959,1.959,0,0,0-1.146,1.146l-.9,2.39a.5.5,0,0,1-.482.322L26.193,33.4a1.955,1.955,0,0,0-1.5.62l-1.744,1.865a.5.5,0,0,1-.568.113L20.06,34.938a1.959,1.959,0,0,0-1.62,0l-2.325,1.056a.5.5,0,0,1-.568-.113L13.8,34.016a1.958,1.958,0,0,0-1.43-.621h-.066l-2.552.086a.5.5,0,0,1-.482-.322l-.9-2.391a1.96,1.96,0,0,0-1.146-1.146l-2.39-.9a.5.5,0,0,1-.322-.482l.086-2.551a1.958,1.958,0,0,0-.62-1.5L2.12,22.454a.5.5,0,0,1-.113-.568l1.056-2.325a1.959,1.959,0,0,0,0-1.62L2.007,15.617a.5.5,0,0,1,.113-.568L3.985,13.3a1.957,1.957,0,0,0,.62-1.5L4.519,9.256a.5.5,0,0,1,.322-.482l2.39-.9A1.958,1.958,0,0,0,8.377,6.732l.9-2.391a.5.5,0,0,1,.482-.322l2.552.086a1.956,1.956,0,0,0,1.5-.62l1.743-1.865a.5.5,0,0,1,.568-.113L18.44,2.564a1.957,1.957,0,0,0,1.62,0l2.325-1.056a.5.5,0,0,1,.568.113L24.7,3.486a1.958,1.958,0,0,0,1.5.62l2.552-.086a.5.5,0,0,1,.482.322l.9,2.39a1.96,1.96,0,0,0,1.146,1.146l2.39.9a.5.5,0,0,1,.322.482L33.9,11.808a1.958,1.958,0,0,0,.62,1.5l1.865,1.744a.5.5,0,0,1,.113.568l-1.056,2.325a1.959,1.959,0,0,0,0,1.62Zm0,0"
																	transform="translate(0 0)" />
															</g>
														</svg>
														<h5>30 DAY MONEY BACK!</h5>
														<p>Try us – you will like us.</p>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="hover-info-box">
														<svg xmlns="http://www.w3.org/2000/svg" width="50"
															height="50" viewBox="0 0 50 50">
															<g id="_009-data_center" data-name="009-data center"
																transform="translate(-1 -1)">
																<g id="Group_2813" data-name="Group 2813"
																	transform="translate(7.452 1)">
																	<path id="Path_12087" data-name="Path 12087"
																		d="M9,33h4.839v1.613H9Z"
																		transform="translate(-9 -7.194)"
																		fill="#f80" />
																	<path id="Path_12088" data-name="Path 12088"
																		d="M25,33h4.839v1.613H25Z"
																		transform="translate(-12.097 -7.194)"
																		fill="#f80" />
																	<path id="Path_12089" data-name="Path 12089"
																		d="M49,33h4.839v1.613H49Z"
																		transform="translate(-16.742 -7.194)"
																		fill="#f80" />
																	<path id="Path_12090" data-name="Path 12090"
																		d="M49,17h4.839v1.613H49Z"
																		transform="translate(-16.742 -4.097)"
																		fill="#f80" />
																	<path id="Path_12091" data-name="Path 12091"
																		d="M33,25h4.839v1.613H33Z"
																		transform="translate(-13.645 -5.645)"
																		fill="#f80" />
																	<path id="Path_12092" data-name="Path 12092"
																		d="M33,9h4.839v1.613H33Z"
																		transform="translate(-13.645 -2.548)"
																		fill="#f80" />
																	<path id="Path_12093" data-name="Path 12093"
																		d="M25,17h4.839v1.613H25Z"
																		transform="translate(-12.097 -4.097)"
																		fill="#f80" />
																	<path id="Path_12094" data-name="Path 12094"
																		d="M9,17h4.839v1.613H9Z"
																		transform="translate(-9 -4.097)"
																		fill="#f80" />
																	<path id="Path_12095" data-name="Path 12095"
																		d="M21.137,32.614l-.1.019V5.839a.807.807,0,0,1,.806-.806H36.355a.807.807,0,0,1,.806.806V29.831l-.015,0a8.89,8.89,0,0,1,4.048,3.172V5.032A4.037,4.037,0,0,0,37.161,1H21.032A4.037,4.037,0,0,0,17,5.032V35.087l.057,0a7.245,7.245,0,0,1,4.08-2.475Z"
																		transform="translate(-10.548 -1)"
																		fill="#f80" />
																	<path id="Path_12096" data-name="Path 12096"
																		d="M15,57h8.065v1.613H15Z"
																		transform="translate(-10.161 -11.839)"
																		fill="#f80" />
																</g>
																<path id="Path_12097" data-name="Path 12097"
																	d="M46.968,8.226H37.29V9.839h9.677a2.422,2.422,0,0,1,2.419,2.419V34.839a2.416,2.416,0,0,1-1.613,2.271V13.065a1.615,1.615,0,0,0-1.613-1.613H38.1v1.613h8.065V17.9H38.1v1.613h8.065v4.839H38.1v1.613h8.065v4.839H38.1v1.613h8.065v4.839H40.37a9.694,9.694,0,0,0-5.5-7.173V6.613A1.615,1.615,0,0,0,33.258,5H18.742a1.615,1.615,0,0,0-1.613,1.613V32.794a8.05,8.05,0,0,0-4.972,4.464H5.839V32.419H13.9V30.806H5.839V25.968H13.9V24.355H5.839V19.516H13.9V17.9H5.839V13.065H13.9V11.452H5.839a1.615,1.615,0,0,0-1.613,1.613V37.11a2.416,2.416,0,0,1-1.613-2.271V12.258A2.422,2.422,0,0,1,5.032,9.839H14.71V8.226H5.032A4.037,4.037,0,0,0,1,12.258V34.839a4.037,4.037,0,0,0,4.032,4.032h6.614c0,.01,0,.022,0,.033a6.451,6.451,0,0,0,.649,12.87H39.71a6.449,6.449,0,0,0,.8-12.848c0-.019,0-.037,0-.056h6.452A4.037,4.037,0,0,0,51,34.839V12.258A4.037,4.037,0,0,0,46.968,8.226ZM33.258,17.9H18.742V13.065H33.258Zm0,1.613v4.839H18.742V19.516Zm0-12.9v4.839H18.742V6.613ZM18.742,25.968H33.258v3.544A9.585,9.585,0,0,0,23,33.213a8.053,8.053,0,0,0-3.456-.794c-.272,0-.541.015-.806.042ZM44.548,45.323a4.844,4.844,0,0,1-4.839,4.839H12.29a4.839,4.839,0,1,1,4.839-4.839h1.613a6.456,6.456,0,0,0-5.457-6.367,6.436,6.436,0,0,1,8.886-4.361,9.6,9.6,0,0,0-1.01,4.277h1.613a8.065,8.065,0,0,1,16.129,0c0,.019,0,.037,0,.056a6.457,6.457,0,0,0-5.643,6.4h1.613a4.839,4.839,0,0,1,9.677,0Z"
																	transform="translate(0 -0.774)" />
																<path id="Path_12098" data-name="Path 12098"
																	d="M37,9h1.613v1.613H37Z"
																	transform="translate(-6.968 -1.548)" />
																<path id="Path_12099" data-name="Path 12099"
																	d="M33,9h1.613v1.613H33Z"
																	transform="translate(-6.194 -1.548)" />
																<path id="Path_12100" data-name="Path 12100"
																	d="M25,17h1.613v1.613H25Z"
																	transform="translate(-4.645 -3.097)" />
																<path id="Path_12101" data-name="Path 12101"
																	d="M29,17h1.613v1.613H29Z"
																	transform="translate(-5.419 -3.097)" />
																<path id="Path_12102" data-name="Path 12102"
																	d="M37,25h1.613v1.613H37Z"
																	transform="translate(-6.968 -4.645)" />
																<path id="Path_12103" data-name="Path 12103"
																	d="M33,25h1.613v1.613H33Z"
																	transform="translate(-6.194 -4.645)" />
																<path id="Path_12104" data-name="Path 12104"
																	d="M25,33h1.613v1.613H25Z"
																	transform="translate(-4.645 -6.194)" />
																<path id="Path_12105" data-name="Path 12105"
																	d="M29,33h1.613v1.613H29Z"
																	transform="translate(-5.419 -6.194)" />
																<path id="Path_12106" data-name="Path 12106"
																	d="M9,17h1.613v1.613H9Z"
																	transform="translate(-1.548 -3.097)" />
																<path id="Path_12107" data-name="Path 12107"
																	d="M13,17h1.613v1.613H13Z"
																	transform="translate(-2.323 -3.097)" />
																<path id="Path_12108" data-name="Path 12108"
																	d="M9,33h1.613v1.613H9Z"
																	transform="translate(-1.548 -6.194)" />
																<path id="Path_12109" data-name="Path 12109"
																	d="M13,33h1.613v1.613H13Z"
																	transform="translate(-2.323 -6.194)" />
																<path id="Path_12110" data-name="Path 12110"
																	d="M53,17h1.613v1.613H53Z"
																	transform="translate(-10.065 -3.097)" />
																<path id="Path_12111" data-name="Path 12111"
																	d="M49,17h1.613v1.613H49Z"
																	transform="translate(-9.29 -3.097)" />
																<path id="Path_12112" data-name="Path 12112"
																	d="M53,33h1.613v1.613H53Z"
																	transform="translate(-10.065 -6.194)" />
																<path id="Path_12113" data-name="Path 12113"
																	d="M49,33h1.613v1.613H49Z"
																	transform="translate(-9.29 -6.194)" />
																<path id="Path_12114" data-name="Path 12114"
																	d="M42.346,44.76l1.6-.228a6.458,6.458,0,0,0-8.228-5.265l.46,1.547a4.842,4.842,0,0,1,6.172,3.946Z"
																	transform="translate(-6.719 -7.355)" />
																<path id="Path_12115" data-name="Path 12115"
																	d="M15,57h1.613v1.613H15Z"
																	transform="translate(-2.71 -10.839)" />
																<path id="Path_12116" data-name="Path 12116"
																	d="M19,57h1.613v1.613H19Z"
																	transform="translate(-3.484 -10.839)" />
																<path id="Path_12117" data-name="Path 12117"
																	d="M23,57h1.613v1.613H23Z"
																	transform="translate(-4.258 -10.839)" />
															</g>
														</svg>
														<h5>INSTANT SERVER SETUP!</h5>
														<p>Your Server wil be ready within minutes</p>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="hover-info-box">
														<svg xmlns="http://www.w3.org/2000/svg" width="50.6"
															height="50.631" viewBox="0 0 50.6 50.631">
															<g id="wall-clock" transform="translate(-0.157 0)">
																<g id="Group_2814" data-name="Group 2814"
																	transform="translate(8.581 8.439)">
																	<path id="Path_12118" data-name="Path 12118"
																		d="M98.429,85.34h0A13.088,13.088,0,0,0,85.34,98.429h0a13.088,13.088,0,0,0,13.089,13.089h0a13.088,13.088,0,0,0,13.089-13.089h0A13.089,13.089,0,0,0,98.429,85.34Zm0,14.4a1.308,1.308,0,0,1-1.309-1.309h0a1.308,1.308,0,0,1,1.309-1.309h0a1.309,1.309,0,0,1,0,2.618Z"
																		transform="translate(-81.764 -81.764)"
																		fill="#f80" />
																	<circle id="Ellipse_839" data-name="Ellipse 839"
																		cx="1.688" cy="1.688" r="1.688"
																		transform="translate(15.188 15.188)"
																		fill="#f80" />
																</g>
																<path id="Path_12119" data-name="Path 12119"
																	d="M.972,25.3H1a.844.844,0,0,0,.844-.815A23.628,23.628,0,0,1,40.075,6.752H35.584a.844.844,0,0,0,0,1.688h6.762a.849.849,0,0,0,.194-.039.823.823,0,0,0,.127-.028c.024-.01.041-.031.064-.044a.813.813,0,0,0,.206-.144l.008-.006a.949.949,0,0,0,.058-.092.848.848,0,0,0,.111-.176.806.806,0,0,0,.042-.208.639.639,0,0,0,.021-.106V.845a.844.844,0,1,0-1.688,0V5.732A25.309,25.309,0,0,0,.158,24.433.844.844,0,0,0,.972,25.3Z"
																	transform="translate(0 0)" fill="#231f20" />
																<g id="Group_2815" data-name="Group 2815"
																	transform="translate(0.279 25.354)">
																	<path id="Path_12120" data-name="Path 12120"
																		d="M103.48,447.81a24.029,24.029,0,0,1-2.037-1.35.844.844,0,1,0-1.045,1.325l.042.031a25.54,25.54,0,0,0,2.18,1.447.844.844,0,1,0,.86-1.453Z"
																		transform="translate(-90.318 -427.501)"
																		fill="#f80" />
																	<path id="Path_12121" data-name="Path 12121"
																		d="M64.014,412.2a.846.846,0,1,0-1.266,1.121h0a25.535,25.535,0,0,0,1.839,1.863.844.844,0,0,0,1.138-1.246A23.586,23.586,0,0,1,64.014,412.2Z"
																		transform="translate(-56.489 -396.54)"
																		fill="#f80" />
																	<path id="Path_12122" data-name="Path 12122"
																		d="M35.6,372.973a23.939,23.939,0,0,1-1.323-2.053.845.845,0,1,0-1.464.844,25.545,25.545,0,0,0,1.418,2.195.844.844,0,0,0,1.37-.986Z"
																		transform="translate(-29.604 -359.214)"
																		fill="#f80" />
																	<path id="Path_12123" data-name="Path 12123"
																		d="M147.535,473.343a23.55,23.55,0,0,1-2.269-.9.844.844,0,1,0-.749,1.512l.044.02a24.959,24.959,0,0,0,2.434.969.844.844,0,1,0,.541-1.6Z"
																		transform="translate(-129.94 -450.997)"
																		fill="#f80" />
																	<path id="Path_12124" data-name="Path 12124"
																		d="M14.406,326.331a23.7,23.7,0,0,1-.873-2.278.844.844,0,0,0-1.629.444.638.638,0,0,0,.025.078,25.339,25.339,0,0,0,.935,2.447.844.844,0,1,0,1.543-.684Z"
																		transform="translate(-10.837 -316.801)"
																		fill="#f80" />
																	<path id="Path_12125" data-name="Path 12125"
																		d="M2.8,277.982a.844.844,0,0,0,.65-1,24.016,24.016,0,0,1-.381-2.412.844.844,0,0,0-1.679.178,25.475,25.475,0,0,0,.41,2.584.843.843,0,0,0,1,.65Z"
																		transform="translate(-1.385 -272.092)"
																		fill="#f80" />
																	<path id="Path_12126" data-name="Path 12126"
																		d="M493.65,256.395a.831.831,0,0,0-.872.788.235.235,0,0,0,0,.025,23.723,23.723,0,0,1-.212,2.434.844.844,0,0,0,.719.951.782.782,0,0,0,.118.008.844.844,0,0,0,.834-.727,25.617,25.617,0,0,0,.227-2.607A.844.844,0,0,0,493.65,256.395Z"
																		transform="translate(-443.986 -256.394)"
																		fill="#f80" />
																	<path id="Path_12127" data-name="Path 12127"
																		d="M460.55,355.152a.844.844,0,0,0-1.126.392,23.537,23.537,0,0,1-1.176,2.141.844.844,0,0,0,1.434.889,25.2,25.2,0,0,0,1.26-2.294.844.844,0,0,0-.392-1.127Z"
																		transform="translate(-412.962 -345.31)"
																		fill="#f80" />
																	<path id="Path_12128" data-name="Path 12128"
																		d="M428.656,398.788a23.621,23.621,0,0,1-1.591,1.856.845.845,0,0,0,1.224,1.164h0a25.625,25.625,0,0,0,1.7-1.987.844.844,0,1,0-1.321-1.051l-.015.019Z"
																		transform="translate(-384.761 -384.404)"
																		fill="#f80" />
																	<path id="Path_12129" data-name="Path 12129"
																		d="M196.107,489.267a23.756,23.756,0,0,1-2.407-.413.844.844,0,1,0-.372,1.646h0a25.176,25.176,0,0,0,2.58.443.817.817,0,0,0,.1.006.844.844,0,0,0,.1-1.682Z"
																		transform="translate(-173.755 -465.847)"
																		fill="#f80" />
																	<path id="Path_12130" data-name="Path 12130"
																		d="M390.3,435.754a24.09,24.09,0,0,1-1.941,1.492.846.846,0,1,0,.962,1.392,25.821,25.821,0,0,0,2.076-1.6.844.844,0,0,0-1.1-1.283v0Z"
																		transform="translate(-349.762 -417.833)"
																		fill="#f80" />
																	<path id="Path_12131" data-name="Path 12131"
																		d="M482.126,307.018a.844.844,0,0,0-1.022.616,23.821,23.821,0,0,1-.708,2.338.844.844,0,0,0,1.588.572,25.4,25.4,0,0,0,.759-2.5.844.844,0,0,0-.617-1.022Z"
																		transform="translate(-432.982 -301.989)"
																		fill="#f80" />
																	<path id="Path_12132" data-name="Path 12132"
																		d="M297.372,484.486a23.605,23.605,0,0,1-2.371.582.844.844,0,0,0,.317,1.658,25.026,25.026,0,0,0,2.542-.625.844.844,0,0,0-.488-1.615Z"
																		transform="translate(-265.349 -461.903)"
																		fill="#f80" />
																	<path id="Path_12133" data-name="Path 12133"
																		d="M246.708,494c-.675.057-1.366.084-2.055.084h-.386a.874.874,0,0,0-.86.829.844.844,0,0,0,.829.859h.417c.738,0,1.477-.033,2.194-.095a.844.844,0,1,0-.1-1.685l-.046,0Z"
																		transform="translate(-219.474 -470.493)"
																		fill="#f80" />
																	<path id="Path_12134" data-name="Path 12134"
																		d="M345.851,464.711a23.863,23.863,0,0,1-2.2,1.062.844.844,0,1,0,.635,1.565l.019-.008a25.442,25.442,0,0,0,2.356-1.138.844.844,0,0,0-.81-1.481Z"
																		transform="translate(-309.331 -444.017)"
																		fill="#f80" />
																</g>
																<g id="Group_2816" data-name="Group 2816"
																	transform="translate(7.737 7.595)">
																	<path id="Path_12135" data-name="Path 12135"
																		d="M94.528,76.807a17.721,17.721,0,1,0,17.721,17.721A17.72,17.72,0,0,0,94.528,76.807Zm.844,33.71v-2.488a.844.844,0,1,0-1.688,0v2.488A16.026,16.026,0,0,1,78.538,95.371h2.488a.844.844,0,1,0,0-1.688H78.538A16.026,16.026,0,0,1,93.684,78.538v2.488a.844.844,0,1,0,1.688,0V78.538a16.026,16.026,0,0,1,15.146,15.146h-2.488a.844.844,0,0,0,0,1.688h2.488A16.026,16.026,0,0,1,95.371,110.517Z"
																		transform="translate(-76.807 -76.807)"
																		fill="#231f20" />
																	<path id="Path_12136" data-name="Path 12136"
																		d="M187.644,153.666v-7.75a.844.844,0,0,0-1.688,0v7.75a2.533,2.533,0,0,0-1.532,1.532H180.05a.844.844,0,1,0,0,1.688h4.374a2.525,2.525,0,1,0,3.22-3.22Zm-.844,3.22a.844.844,0,1,1,.844-.844A.844.844,0,0,1,186.8,156.886Z"
																		transform="translate(-169.08 -138.321)"
																		fill="#231f20" />
																</g>
															</g>
														</svg>
														<h5>24/7 EVERYTHING!</h5>
														<p>24/7 Support & Engineering Staff</p>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="hover-info-box">
														<svg xmlns="http://www.w3.org/2000/svg" width="53.962"
															height="49.534" viewBox="0 0 53.962 49.534">
															<g id="key" transform="translate(0 -21.005)">
																<g id="Group_2819" data-name="Group 2819"
																	transform="translate(1.054 22.059)">
																	<path id="Path_12137" data-name="Path 12137"
																		d="M99.733,296.516h0l7.153-4.747a6.331,6.331,0,0,1,8.643,1.62L92.765,310.135l-18.292-3.689H70v-9.474l4.473-3.162,1.638-1.441a9.484,9.484,0,0,1,12.532,0,4.093,4.093,0,0,0,2.832,1.429h5.13A3.169,3.169,0,0,1,99.733,296.516Z"
																		transform="translate(-63.677 -262.709)"
																		fill="#fff" />
																	<path id="Path_12138" data-name="Path 12138"
																		d="M120.9,40.49l-6.323,3.162H94.431a9.485,9.485,0,1,1,0-6.323h4.334l3.162-3.162,3.162,3.162,3.162-3.162,3.162,3.162,3.162-3.162Zm-32.25,0a3.162,3.162,0,1,0-3.162,3.162A3.162,3.162,0,0,0,88.647,40.49Z"
																		transform="translate(-69.044 -31.005)"
																		fill="#f80" />
																	<path id="Path_12139" data-name="Path 12139"
																		d="M16.323,346.814H10V331.005h6.323Z"
																		transform="translate(-10 -299.388)"
																		fill="#f80" />
																</g>
																<g id="Group_2820" data-name="Group 2820"
																	transform="translate(0 21.005)">
																	<path id="Path_12140" data-name="Path 12140"
																		d="M126,85.221a4.216,4.216,0,1,0,4.216-4.216A4.22,4.22,0,0,0,126,85.221Zm6.323,0a2.108,2.108,0,1,1-2.108-2.108A2.11,2.11,0,0,1,132.323,85.221Z"
																		transform="translate(-112.721 -74.682)" />
																	<path id="Path_12141" data-name="Path 12141"
																		d="M66,31.544A10.541,10.541,0,0,0,86.2,35.76h19.426a1.052,1.052,0,0,0,.471-.111l6.323-3.162A1.054,1.054,0,0,0,112.7,30.8l-6.323-6.323a1.054,1.054,0,0,0-1.491,0l-2.416,2.417-2.417-2.417a1.054,1.054,0,0,0-1.491,0l-2.416,2.417-2.417-2.417a1.054,1.054,0,0,0-1.491,0l-2.853,2.853H86.2A10.541,10.541,0,0,0,66,31.544Zm18.491-2.81a1.054,1.054,0,0,0,.994.7h4.334a1.054,1.054,0,0,0,.745-.309l2.417-2.416L95.4,29.128a1.054,1.054,0,0,0,1.491,0L99.3,26.711l2.417,2.417a1.054,1.054,0,0,0,1.491,0l2.416-2.417,4.544,4.544-4.793,2.4H85.485a1.054,1.054,0,0,0-.994.7,8.431,8.431,0,1,1,0-5.621Z"
																		transform="translate(-59.044 -21.005)" />
																	<circle id="Ellipse_840" data-name="Ellipse 840"
																		cx="1" cy="1" r="1"
																		transform="translate(40 39.001)" />
																	<path id="Path_12142" data-name="Path 12142"
																		d="M43.682,282.011l-6.033,4a4.237,4.237,0,0,0-3.666-2.149h-5.13a2.1,2.1,0,0,1-1.393-.513l-.743-.653a10.56,10.56,0,0,0-13.924,0l-1.6,1.4-2.765,1.954v-.611a1.054,1.054,0,0,0-1.054-1.054H1.054A1.054,1.054,0,0,0,0,285.446v15.809a1.054,1.054,0,0,0,1.054,1.054H7.377a1.054,1.054,0,0,0,1.054-1.054V298.62h3.314l18.189,3.668a1.054,1.054,0,0,0,.833-.184l7.354-5.409a1.054,1.054,0,1,0-1.249-1.7l-6.978,5.133-17.835-3.6a1.054,1.054,0,0,0-.208-.021H8.431v-7.874c4.5-3.185,3.729-2.535,5.753-4.357a8.448,8.448,0,0,1,11.14,0l.743.653a4.208,4.208,0,0,0,2.785,1.038h5.131a2.108,2.108,0,1,1,0,4.216H21.336a1.054,1.054,0,1,0,0,2.108H33.982a4.214,4.214,0,0,0,4.213-4.115l6.648-4.412a5.257,5.257,0,0,1,6.523.564l-6.858,5.044a1.054,1.054,0,0,0,1.249,1.7l7.774-5.718a1.054,1.054,0,0,0,.235-1.46A7.36,7.36,0,0,0,43.682,282.011ZM6.323,300.2H2.108V286.5H6.323Z"
																		transform="translate(0 -252.774)" />
																</g>
															</g>
														</svg>
														<h5>PRIVATE CLOUD AVAILABLE!</h5>
														<p>Contact us for a custom quote.</p>
													</div>
												</div>

												<div class="col-lg-3 col-sm-6 col-12">
													<div class="hover-info-box">
														<svg xmlns="http://www.w3.org/2000/svg" width="50.8"
															height="50.8" viewBox="0 0 50.8 50.8">
															<g id="database" transform="translate(-1 -1)">
																<g id="Group_2821" data-name="Group 2821"
																	transform="translate(13.29 44.426)">
																	<rect id="Rectangle_1518"
																		data-name="Rectangle 1518" width="10"
																		height="4"
																		transform="translate(-0.29 -0.426)"
																		fill="#f80" />
																</g>
																<g id="Group_2822" data-name="Group 2822"
																	transform="translate(13.29 14.929)">
																	<rect id="Rectangle_1519"
																		data-name="Rectangle 1519" width="10"
																		height="3" transform="translate(-0.29 0.07)"
																		fill="#f80" />
																</g>
																<g id="Group_2823" data-name="Group 2823"
																	transform="translate(13.29 29.677)">
																	<rect id="Rectangle_1520"
																		data-name="Rectangle 1520" width="10"
																		height="3"
																		transform="translate(-0.29 0.322)"
																		fill="#f80" />
																</g>
																<g id="Group_2824" data-name="Group 2824"
																	transform="translate(1 10.832)">
																	<path id="Path_12143" data-name="Path 12143"
																		d="M45.458,57.916A2.458,2.458,0,1,0,43,55.458,2.461,2.461,0,0,0,45.458,57.916Zm0-3.277a.819.819,0,1,1-.819.819A.82.82,0,0,1,45.458,54.639Z"
																		transform="translate(-8.587 -20.226)" />
																	<path id="Path_12144" data-name="Path 12144"
																		d="M26.471,53H15v4.916H26.471Zm-4.916,1.639v1.639H19.916V54.639Zm-4.916,0h1.639v1.639H16.639Zm8.194,1.639H23.194V54.639h1.639Z"
																		transform="translate(-3.529 -20.226)" />
																	<path id="Path_12145" data-name="Path 12145"
																		d="M26.471,21.916V17H15v4.916Zm-6.555-1.639V18.639h1.639v1.639Zm4.916,0H23.194V18.639h1.639Zm-8.194-1.639h1.639v1.639H16.639Z"
																		transform="translate(-3.529 -13.723)" />
																	<path id="Path_12146" data-name="Path 12146"
																		d="M41.148,39.219a2.461,2.461,0,0,0,2.458-2.458V30.206a2.461,2.461,0,0,0-2.458-2.458H14.11V24.471H28.683V22.832H11.652a.82.82,0,0,1-.819-.819V15.458a.82.82,0,0,1,.819-.819H26.4V13H11.652a2.461,2.461,0,0,0-2.458,2.458v6.555a2.461,2.461,0,0,0,2.458,2.458h.819v3.277h-.819a2.461,2.461,0,0,0-2.458,2.458v.819H4.277V17.765a2.458,2.458,0,1,0-1.639,0v14.9H9.194V34.3H2.639V49.2a2.458,2.458,0,1,0,1.639,0V35.942H9.194v.819a2.461,2.461,0,0,0,2.458,2.458h.819V42.5h-.819a2.461,2.461,0,0,0-2.458,2.458V51.51a2.461,2.461,0,0,0,2.458,2.458h29.5a2.461,2.461,0,0,0,2.458-2.458V44.955A2.461,2.461,0,0,0,41.148,42.5h-.819V39.219ZM3.458,14.639a.819.819,0,1,1-.819.819A.82.82,0,0,1,3.458,14.639Zm0,37.69a.819.819,0,1,1,.819-.819A.82.82,0,0,1,3.458,52.329Zm7.374-15.568V30.206a.82.82,0,0,1,.819-.819h29.5a.82.82,0,0,1,.819.819v6.555a.82.82,0,0,1-.819.819h-29.5A.82.82,0,0,1,10.832,36.761Zm31.135,8.194V51.51a.82.82,0,0,1-.819.819h-29.5a.82.82,0,0,1-.819-.819V44.955a.82.82,0,0,1,.819-.819h29.5A.82.82,0,0,1,41.968,44.955ZM38.69,42.5H14.11V39.219H38.69Z"
																		transform="translate(-1 -13)" />
																	<path id="Path_12147" data-name="Path 12147"
																		d="M45.458,35a2.458,2.458,0,1,0,2.458,2.458A2.461,2.461,0,0,0,45.458,35Zm0,3.277a.819.819,0,1,1,.819-.819A.82.82,0,0,1,45.458,38.277Z"
																		transform="translate(-8.587 -16.974)" />
																	<path id="Path_12148" data-name="Path 12148"
																		d="M15,39.916H26.471V35H15Zm4.916-1.639V36.639h1.639v1.639Zm4.916,0H23.194V36.639h1.639Zm-8.194-1.639h1.639v1.639H16.639Z"
																		transform="translate(-3.529 -16.974)" />
																</g>
																<g id="Group_2825" data-name="Group 2825"
																	transform="translate(25.581 1)">
																	<path id="Path_12149" data-name="Path 12149"
																		d="M57.219,17.2V11.021L54,10.171c-.035-.088-.072-.178-.111-.265l1.678-2.881L51.195,2.656,48.314,4.334c-.088-.039-.177-.075-.265-.111L47.2,1H41.021l-.85,3.223c-.088.035-.178.072-.265.111L37.025,2.656,32.656,7.025l1.678,2.881c-.039.088-.075.177-.111.265L31,11.02V17.2l3.223.85c.035.088.072.178.111.265l-1.678,2.881,4.369,4.369,2.881-1.678c.088.039.177.075.265.111l.849,3.223H47.2L48.048,24c.088-.035.178-.072.265-.111l2.881,1.678,4.369-4.369-1.678-2.881c.039-.088.075-.177.111-.265ZM44.11,20.664a6.555,6.555,0,1,1,6.555-6.555A6.555,6.555,0,0,1,44.11,20.664Z"
																		transform="translate(-31 -1)" fill="#f80" />
																</g>
																<g id="Group_2826" data-name="Group 2826"
																	transform="translate(31.316 6.735)">
																	<path id="Path_12150" data-name="Path 12150"
																		d="M45.374,22.748a7.374,7.374,0,1,1,7.374-7.374A7.383,7.383,0,0,1,45.374,22.748Zm0-13.11a5.735,5.735,0,1,0,5.735,5.735A5.742,5.742,0,0,0,45.374,9.639Z"
																		transform="translate(-38 -8)" />
																</g>
																<g id="Group_2827" data-name="Group 2827"
																	transform="translate(34.593 10.013)">
																	<path id="Path_12151" data-name="Path 12151"
																		d="M46.1,20.194a4.1,4.1,0,1,1,4.1-4.1A4.1,4.1,0,0,1,46.1,20.194Zm0-6.555A2.458,2.458,0,1,0,48.555,16.1,2.461,2.461,0,0,0,46.1,13.639Z"
																		transform="translate(-42 -12)" />
																</g>
															</g>
														</svg>
														<h5>CUSTOM SERVERS AVAILABLE!</h5>
														<p>Max. 12 Hours Provisioning Guaranteed</p>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="hover-info-box">
														<svg xmlns="http://www.w3.org/2000/svg" width="50.8"
															height="50.8" viewBox="0 0 50.8 50.8">
															<g id="speedometer" transform="translate(-0.001)">
																<path id="Path_12152" data-name="Path 12152"
																	d="M13.175,34.408a21.233,21.233,0,1,1,6.219,15.014,21.166,21.166,0,0,1-6.219-15.014Zm45.641,0A24.408,24.408,0,1,0,34.408,58.816,24.408,24.408,0,0,0,58.816,34.408Zm0,0"
																	transform="translate(-9.007 -9.008)"
																	fill="#fff" />
																<path id="Path_12153" data-name="Path 12153"
																	d="M52.428,108.889l-4.209-4.209a21.232,21.232,0,0,0,0,30.028l4.209-4.209a15.28,15.28,0,0,1,0-21.609Zm0,0"
																	transform="translate(-37.832 -94.293)"
																	fill="#f80" />
																<path id="Path_12154" data-name="Path 12154"
																	d="M104.68,48.219l4.209,4.209a15.28,15.28,0,0,1,21.609,0l4.209-4.209a21.232,21.232,0,0,0-30.028,0Zm0,0"
																	transform="translate(-94.293 -37.833)"
																	fill="#ffba4a" />
																<path id="Path_12155" data-name="Path 12155"
																	d="M364.895,108.886a15.28,15.28,0,0,1,0,21.609L369.1,134.7a21.233,21.233,0,0,0,0-30.028Zm0,0"
																	transform="translate(-328.69 -94.29)"
																	fill="#f80" />
																<path id="Path_12156" data-name="Path 12156"
																	d="M128.084,128.084a15.28,15.28,0,1,0-21.609,0l-4.209,4.209a21.233,21.233,0,0,0,30.028,0ZM113.907,126.5h6.747a1.588,1.588,0,1,1,0,3.175h-6.747a1.588,1.588,0,1,1,0-3.175Zm0,0"
																	transform="translate(-91.879 -91.88)"
																	fill="#fff" />
																<path id="Path_12157" data-name="Path 12157"
																	d="M214.334,348.9h-6.747a1.587,1.587,0,1,0,0,3.175h6.747a1.587,1.587,0,1,0,0-3.175Zm0,0"
																	transform="translate(-185.56 -314.278)"
																	fill="#fff" />
																<path id="Path_12158" data-name="Path 12158"
																	d="M78.563,238.1l17.605-1.962a1.962,1.962,0,1,1,0,3.925Zm0,0"
																	transform="translate(-70.767 -212.697)"
																	fill="#fff" />
																<path id="Path_12159" data-name="Path 12159"
																	d="M43.361,7.439A25.4,25.4,0,0,0,11.308,4.268a.992.992,0,0,0,1.1,1.651,23.415,23.415,0,1,1-5.143,4.668A.992.992,0,0,0,5.73,9.331,25.4,25.4,0,1,0,43.361,7.439Zm0,0" />
																<path id="Path_12160" data-name="Path 12160"
																	d="M69.972,38.545c-.011-.012-.021-.024-.032-.035l-.025-.022a22.223,22.223,0,0,0-31.406.022h0a22.225,22.225,0,0,0,0,31.43h0a22.225,22.225,0,0,0,31.429,0v0h0a22.225,22.225,0,0,0,5.751-21.467.992.992,0,0,0-1.917.514,20.211,20.211,0,0,1-4.561,18.825l-2.8-2.8a16.27,16.27,0,0,0,0-21.565l2.81-2.81a20.2,20.2,0,0,1,1.6,2.008.992.992,0,0,0,1.627-1.136,22.226,22.226,0,0,0-2.478-2.961Zm-2.156.686-2.809,2.809a16.27,16.27,0,0,0-21.565,0l-2.8-2.8a20.217,20.217,0,0,1,27.178-.005ZM39.235,40.638l2.8,2.8a16.132,16.132,0,0,0-4.046,9.631l-1.483.165a.992.992,0,0,0,0,1.972l1.483.165a16.132,16.132,0,0,0,4.046,9.631l-2.8,2.8a20.2,20.2,0,0,1,0-27.174Zm28.506,8.938-1.154.309A.992.992,0,0,0,67.1,51.8l1.151-.309a14.476,14.476,0,0,1,0,5.463L67.1,56.648a.992.992,0,0,0-.514,1.917l1.154.309A14.179,14.179,0,0,1,65,63.6l-.841-.841a.992.992,0,1,0-1.4,1.4l5.05,5.05a20.2,20.2,0,0,1-27.174,0l5.05-5.05a.992.992,0,0,0-1.4-1.4l-.841.84a14.187,14.187,0,0,1-2.737-4.728l1.155-.309a.992.992,0,0,0-.514-1.917l-1.151.309q-.129-.67-.195-1.356l14.112,1.573a2.59,2.59,0,0,0,2.05-.677,3.05,3.05,0,0,0,0-4.543,2.615,2.615,0,0,0-2.05-.677L40,52.849q.065-.685.195-1.356l1.151.309a.992.992,0,1,0,.514-1.917l-1.154-.309a14.179,14.179,0,0,1,2.737-4.728l.841.841a.992.992,0,0,0,1.4-1.4l-.841-.841a14.192,14.192,0,0,1,4.728-2.737l.309,1.155a.992.992,0,0,0,1.917-.514L51.492,40.2a14.474,14.474,0,0,1,5.463,0l-.309,1.151a.992.992,0,1,0,1.917.514l.309-1.154A14.173,14.173,0,0,1,63.6,43.445l-.84.841a.992.992,0,1,0,1.4,1.4L65,44.848a14.173,14.173,0,0,1,2.737,4.728ZM45.576,54.225l8.758-.976a.656.656,0,0,1,.507.184,1.066,1.066,0,0,1,0,1.585.658.658,0,0,1-.507.184Zm0,0"
																	transform="translate(-28.824 -28.825)" />
																<path id="Path_12161" data-name="Path 12161"
																	d="M205.327,338.9H198.58a2.58,2.58,0,1,0,0,5.159h6.747a2.58,2.58,0,1,0,0-5.159Zm0,3.175H198.58a.6.6,0,1,1,0-1.191h6.747a.6.6,0,1,1,0,1.191Zm0,0"
																	transform="translate(-176.553 -305.27)" />
																<path id="Path_12162" data-name="Path 12162"
																	d="M245.028,400.895h-4.071a.992.992,0,0,0,0,1.984h4.071a.992.992,0,0,0,0-1.984Zm0,0"
																	transform="translate(-216.155 -361.119)" />
																<path id="Path_12163" data-name="Path 12163"
																	d="M212.015,400.895h-.023a.992.992,0,0,0,0,1.984h.023a.992.992,0,0,0,0-1.984Zm0,0"
																	transform="translate(-190.064 -361.119)" />
																<path id="Path_12164" data-name="Path 12164"
																	d="M76.3,70.809a.994.994,0,0,0,.69-.278l.011-.01a.992.992,0,0,0-1.386-1.42l-.011.01a.991.991,0,0,0,.7,1.7Zm0,0"
																	transform="translate(-67.835 -61.994)" />
																<path id="Path_12165" data-name="Path 12165"
																	d="M436.927,149.479a1,1,0,0,0,.69-.277l.011-.01a.992.992,0,0,0-1.386-1.42l-.011.01a.991.991,0,0,0,.7,1.7Zm0,0"
																	transform="translate(-392.681 -132.859)" />
															</g>
														</svg>


														<h5>EXTREME SPEED!</h5>
														<p>10GBit/s Servers available!</p>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="hover-info-box">
														<svg xmlns="http://www.w3.org/2000/svg" width="50.802"
															height="50.802" viewBox="0 0 50.802 50.802">
															<g id="group" transform="translate(0 -0.001)">
																<g id="Group_2830" data-name="Group 2830"
																	transform="translate(0.846 0.847)">
																	<path id="Path_12166" data-name="Path 12166"
																		d="M139.029,124.32a14.394,14.394,0,0,1-14.394,14.394,12.509,12.509,0,0,1-1.27-.059,14.394,14.394,0,0,1,0-28.67,12.509,12.509,0,0,1,1.27-.059A14.394,14.394,0,0,1,139.029,124.32Z"
																		transform="translate(-100.08 -99.765)"
																		fill="#a4c2f7" />
																	<ellipse id="Ellipse_841"
																		data-name="Ellipse 841" cx="14.624"
																		cy="14.335" rx="14.624" ry="14.335"
																		transform="translate(10.161 10.22)"
																		fill="#fff" />
																	<g id="Group_2828" data-name="Group 2828"
																		transform="translate(0)">
																		<path id="Path_12167" data-name="Path 12167"
																			d="M227.633,10.912a3.387,3.387,0,0,1-3.387,3.387,3.18,3.18,0,0,1-1.27-.254,3.377,3.377,0,0,1,0-6.266,3.18,3.18,0,0,1,1.27-.254A3.387,3.387,0,0,1,227.633,10.912Z"
																			transform="translate(-199.691 -7.525)"
																			fill="#fff" />
																		<path id="Path_12168" data-name="Path 12168"
																			d="M227.633,437.578a3.387,3.387,0,0,1-3.387,3.387,3.181,3.181,0,0,1-1.27-.254,3.377,3.377,0,0,1,0-6.266,3.181,3.181,0,0,1,1.27-.254A3.387,3.387,0,0,1,227.633,437.578Z"
																			transform="translate(-199.691 -391.855)"
																			fill="#fff" />
																		<path id="Path_12169" data-name="Path 12169"
																			d="M381.233,53.578a3.387,3.387,0,0,1-3.387,3.387,3.18,3.18,0,0,1-1.27-.254,3.377,3.377,0,0,1,0-6.266,3.18,3.18,0,0,1,1.27-.254,3.387,3.387,0,0,1,3.387,3.387Z"
																			transform="translate(-338.05 -45.957)"
																			fill="#fff" />
																		<path id="Path_12170" data-name="Path 12170"
																			d="M56.966,377.845a3.387,3.387,0,0,1-3.387,3.387,3.181,3.181,0,0,1-1.27-.254,3.377,3.377,0,0,1,0-6.266,3.181,3.181,0,0,1,1.27-.254A3.387,3.387,0,0,1,56.966,377.845Z"
																			transform="translate(-45.958 -338.049)"
																			fill="#fff" />
																		<path id="Path_12171" data-name="Path 12171"
																			d="M440.966,224.245a3.387,3.387,0,0,1-3.387,3.387,3.18,3.18,0,0,1-1.27-.254,3.377,3.377,0,0,1,0-6.266,3.18,3.18,0,0,1,1.27-.254,3.387,3.387,0,0,1,3.387,3.387Z"
																			transform="translate(-391.856 -199.69)"
																			fill="#fff" />
																		<path id="Path_12172" data-name="Path 12172"
																			d="M14.3,224.245a3.387,3.387,0,0,1-3.387,3.387,3.18,3.18,0,0,1-1.27-.254,3.377,3.377,0,0,1,0-6.266,3.18,3.18,0,0,1,1.27-.254A3.387,3.387,0,0,1,14.3,224.245Z"
																			transform="translate(-7.525 -199.69)"
																			fill="#fff" />
																	</g>
																	<g id="Group_2829" data-name="Group 2829"
																		transform="translate(0 0.254)">
																		<ellipse id="Ellipse_842"
																			data-name="Ellipse 842" cx="2.117"
																			cy="3.133" rx="2.117" ry="3.133"
																			transform="translate(21.168)"
																			fill="#fff" />
																		<ellipse id="Ellipse_843"
																			data-name="Ellipse 843" cx="2.117"
																			cy="3.133" rx="2.117" ry="3.133"
																			transform="translate(21.168 42.336)"
																			fill="#fff" />
																		<ellipse id="Ellipse_844"
																			data-name="Ellipse 844" cx="2.117"
																			cy="3.133" rx="2.117" ry="3.133"
																			transform="translate(36.409 4.234)"
																			fill="#fff" />
																		<ellipse id="Ellipse_845"
																			data-name="Ellipse 845" cx="2.117"
																			cy="3.133" rx="2.117" ry="3.133"
																			transform="translate(4.234 36.409)"
																			fill="#fff" />
																		<ellipse id="Ellipse_846"
																			data-name="Ellipse 846" cx="2.117"
																			cy="3.133" rx="2.117" ry="3.133"
																			transform="translate(42.336 21.168)"
																			fill="#fff" />
																		<ellipse id="Ellipse_847"
																			data-name="Ellipse 847" cx="2.117"
																			cy="3.133" rx="2.117" ry="3.133"
																			transform="translate(0 21.168)"
																			fill="#fff" />
																	</g>
																	<path id="Path_12173" data-name="Path 12173"
																		d="M193.432,238.711v6.322a4.924,4.924,0,0,1-5.08,4.742h-5.08a4.924,4.924,0,0,1-5.08-4.742v-6.322a.822.822,0,0,1,.847-.79h13.548A.822.822,0,0,1,193.432,238.711Z"
																		transform="translate(-161.257 -215.06)"
																		fill="#a4c2f7" />
																	<path id="Path_12174" data-name="Path 12174"
																		d="M193.432,238.711v6.322c-.119,2.71-2.844,4.83-6.1,4.742h-3.048c-3.252.088-5.978-2.032-6.1-4.742v-6.322a.93.93,0,0,1,1.016-.79h13.208A.93.93,0,0,1,193.432,238.711Z"
																		transform="translate(-161.257 -215.06)"
																		fill="#f80" />
																	<circle id="Ellipse_848" data-name="Ellipse 848"
																		cx="1.693" cy="1.693" r="1.693"
																		transform="translate(22.861 26.248)"
																		fill="#f80" />
																</g>
																<path id="Path_12175" data-name="Path 12175"
																	d="M124.364,139.654a12.509,12.509,0,0,0,1.27.059c.423,0,.833-.028,1.244-.063a14.39,14.39,0,0,1,0-28.663c-.411-.035-.82-.063-1.244-.063a12.509,12.509,0,0,0-1.27.059,14.394,14.394,0,0,0,0,28.67Z"
																	transform="translate(-100.234 -99.917)"
																	fill="#fff" />
																<g id="Group_2831" data-name="Group 2831"
																	transform="translate(0 0.001)">
																	<path id="Path_12176" data-name="Path 12176"
																		d="M185.9,145.839V143.3a6.774,6.774,0,0,0-13.548,0v2.54a1.693,1.693,0,0,0-1.693,1.693v5.927a5.935,5.935,0,0,0,5.927,5.927h5.08a5.935,5.935,0,0,0,5.927-5.927v-5.927A1.693,1.693,0,0,0,185.9,145.839Zm-11.854-2.54a5.08,5.08,0,0,1,10.161,0v2.54H174.044Zm7.621,14.394h-5.08a4.241,4.241,0,0,1-4.149-3.387h.762a.847.847,0,1,0,0-1.693h-.847v-1.693h.847a.847.847,0,1,0,0-1.693h-.847v-1.693H185.9v1.693h-.847a.847.847,0,1,0,0,1.693h.847v1.693h-.847a.847.847,0,1,0,0,1.693h.762A4.241,4.241,0,0,1,181.664,157.693Z"
																		transform="translate(-153.723 -122.978)" />
																	<path id="Path_12177" data-name="Path 12177"
																		d="M232.94,264.525a2.534,2.534,0,0,0-.847,4.925v1a.847.847,0,0,0,1.693,0v-1a2.534,2.534,0,0,0-.847-4.925Zm0,3.387a.847.847,0,1,1,.847-.847A.847.847,0,0,1,232.94,267.912Z"
																		transform="translate(-207.539 -238.277)" />
																	<path id="Path_12178" data-name="Path 12178"
																		d="M46.569,21.168a4.241,4.241,0,0,0-4.149,3.387H40.6a15.18,15.18,0,0,0-4.686-10.161l2.4-2.4a4.246,4.246,0,1,0-1.2-1.2l-2.494,2.494a15.143,15.143,0,0,0-8.372-3.09V8.383a4.234,4.234,0,1,0-1.694,0V10.2A15.236,15.236,0,0,0,10.2,24.555H8.382a4.234,4.234,0,1,0,0,1.693H10.2a15.142,15.142,0,0,0,3.089,8.372L10.8,37.115a4.246,4.246,0,1,0,1.2,1.2l2.4-2.4A15.18,15.18,0,0,0,24.554,40.6v1.821a4.234,4.234,0,1,0,1.694,0V40.6A15.236,15.236,0,0,0,40.6,26.249H42.42a4.234,4.234,0,1,0,4.149-5.081ZM40.642,5.927a2.54,2.54,0,1,1-2.54,2.54A2.54,2.54,0,0,1,40.642,5.927ZM8.466,43.183a2.54,2.54,0,1,1,2.54-2.54A2.54,2.54,0,0,1,8.466,43.183ZM22.861,4.234a2.54,2.54,0,1,1,2.54,2.54A2.54,2.54,0,0,1,22.861,4.234ZM4.233,27.942a2.54,2.54,0,1,1,2.54-2.54A2.54,2.54,0,0,1,4.233,27.942ZM27.941,46.57a2.54,2.54,0,1,1-2.54-2.54A2.54,2.54,0,0,1,27.941,46.57ZM25.4,38.949A13.548,13.548,0,1,1,38.948,25.4,13.548,13.548,0,0,1,25.4,38.949ZM46.569,27.942a2.54,2.54,0,1,1,2.54-2.54A2.54,2.54,0,0,1,46.569,27.942Z"
																		transform="translate(0 -0.001)" />
																	<path id="Path_12179" data-name="Path 12179"
																		d="M248.624,35.847a.86.86,0,0,0,.279-.186.825.825,0,0,0,.178-.914.978.978,0,0,0-.178-.279.887.887,0,0,0-1.2,0,.978.978,0,0,0-.178.279.711.711,0,0,0-.068.322.848.848,0,0,0,.058.322,1.062,1.062,0,0,0,.187.271.771.771,0,0,0,.279.186A.8.8,0,0,0,248.624,35.847Z"
																		transform="translate(-222.902 -30.836)" />
																	<path id="Path_12180" data-name="Path 12180"
																		d="M462.237,247.8a.886.886,0,0,0-1.2,0,.978.978,0,0,0-.178.279.71.71,0,0,0-.068.322.848.848,0,0,0,.058.322,1.062,1.062,0,0,0,.187.271.77.77,0,0,0,.279.186.8.8,0,0,0,.643,0,.859.859,0,0,0,.279-.186.825.825,0,0,0,.178-.914A.978.978,0,0,0,462.237,247.8Z"
																		transform="translate(-415.067 -223)" />
																	<path id="Path_12181" data-name="Path 12181"
																		d="M35.571,247.8a.886.886,0,0,0-1.2,0,.978.978,0,0,0-.178.279.711.711,0,0,0-.068.322.848.848,0,0,0,.058.322,1.062,1.062,0,0,0,.187.271.77.77,0,0,0,.279.186.8.8,0,0,0,.643,0,.86.86,0,0,0,.279-.186.825.825,0,0,0,.178-.914A.979.979,0,0,0,35.571,247.8Z"
																		transform="translate(-30.737 -223)" />
																	<path id="Path_12182" data-name="Path 12182"
																		d="M78.237,401.292a.885.885,0,0,0-1.2,0,.967.967,0,0,0-.178.279.711.711,0,0,0-.068.322.847.847,0,0,0,.058.321,1.054,1.054,0,0,0,.187.272.771.771,0,0,0,.279.185.789.789,0,0,0,.643,0,.855.855,0,0,0,.279-.185.825.825,0,0,0,.178-.914A.963.963,0,0,0,78.237,401.292Z"
																		transform="translate(-69.169 -361.262)" />
																	<path id="Path_12183" data-name="Path 12183"
																		d="M247.7,461.134a.978.978,0,0,0-.178.279.711.711,0,0,0-.068.322.848.848,0,0,0,.058.322,1.062,1.062,0,0,0,.187.271.771.771,0,0,0,.279.186.8.8,0,0,0,.643,0,.86.86,0,0,0,.279-.186.825.825,0,0,0,.178-.914.978.978,0,0,0-.178-.279A.886.886,0,0,0,247.7,461.134Z"
																		transform="translate(-222.902 -415.166)" />
																	<path id="Path_12184" data-name="Path 12184"
																		d="M401.3,78.219a.77.77,0,0,0,.279.185.789.789,0,0,0,.643,0,.854.854,0,0,0,.279-.185.825.825,0,0,0,.178-.914.967.967,0,0,0-.178-.279.885.885,0,0,0-1.2,0,.967.967,0,0,0-.178.279.711.711,0,0,0-.068.322.847.847,0,0,0,.058.321A1.053,1.053,0,0,0,401.3,78.219Z"
																		transform="translate(-361.261 -69.17)" />
																</g>
															</g>
														</svg>
														<h5>DATA CENTER TO DATA CENTER!</h5>
														<p>10GBit/s Servers available!</p>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="hover-info-box">
														<svg id="laptop_1_" data-name="laptop (1)"
															xmlns="http://www.w3.org/2000/svg" width="50.733"
															height="50.733" viewBox="0 0 50.733 50.733">
															<path id="Path_12185" data-name="Path 12185"
																d="M251.822,22.912H224V0h27.822Zm-26.185-1.637h24.548V1.637H225.637Z"
																transform="translate(-201.088)" fill="#333" />
															<path id="Path_12186" data-name="Path 12186"
																d="M277.275,41.819H256V32h21.275Z"
																transform="translate(-229.815 -28.727)"
																fill="#ffa64d" />
															<g id="Group_2832" data-name="Group 2832"
																transform="translate(14.729 26.185)">
																<path id="Path_12187" data-name="Path 12187"
																	d="M180,260.91V256h-4.91v1.637H164.457V256h-4.91v1.637H148.91v1.637h10.638v1.637h4.91v-1.637h10.638v1.637h1.637v4.91h-1.637v4.91h1.637v4.91h-1.637v1.637H164.457v-1.637h-4.91v1.637H148.91v-1.637h-1.637v-4.91h1.637v-4.91h-1.637v-1.637h-1.637v1.637H144v4.91h1.637v4.91H144v4.91h4.91v-1.637h10.638v1.637h4.91v-1.637h10.638v1.637H180v-4.91h-1.637v-4.91H180v-4.91h-1.637v-4.91Zm-17.184-1.637h-1.637v-1.637h1.637Zm-17.184,8.183h1.637v1.637h-1.637Zm1.637,11.456h-1.637v-1.637h1.637Zm15.547,0h-1.637v-1.637h1.637Zm15.547,0h-1.637v-1.637h1.637Zm0-9.819h-1.637v-1.637h1.637Zm-1.637-9.819v-1.637h1.637v1.637Z"
																	transform="translate(-144 -256)" fill="#333" />
																<path id="Path_12188" data-name="Path 12188"
																	d="M267.5,333.32l1.491-1.491a4.9,4.9,0,0,0,6.838-6.838l1.491-1.491-1.157-1.157-1.491,1.491a4.9,4.9,0,0,0-6.838,6.838l-1.491,1.491Zm4.331-8.761a3.273,3.273,0,1,1-3.273,3.273A3.276,3.276,0,0,1,271.832,324.559Z"
																	transform="translate(-253.83 -315.558)"
																	fill="#333" />
															</g>
															<path id="Path_12189" data-name="Path 12189"
																d="M9.637,224,8,233.819,17,242h1.637l9-8.183L26,224Z"
																transform="translate(-7.182 -201.088)"
																fill="#ffa64d" />
															<g id="Group_2833" data-name="Group 2833">
																<path id="Path_12190" data-name="Path 12190"
																	d="M78.546,251.273a3.273,3.273,0,1,0-4.091,3.157v9.117h1.637V254.43A3.27,3.27,0,0,0,78.546,251.273Zm-3.273,1.637a1.637,1.637,0,1,1,1.637-1.637A1.638,1.638,0,0,1,75.273,252.91Z"
																	transform="translate(-64.635 -222.633)"
																	fill="#333" />
																<rect id="Rectangle_1521" data-name="Rectangle 1521"
																	width="1" height="2"
																	transform="translate(46 17.601)" fill="#333" />
																<rect id="Rectangle_1522" data-name="Rectangle 1522"
																	width="18" height="2"
																	transform="translate(26 17.601)" fill="#333" />
																<rect id="Rectangle_1523" data-name="Rectangle 1523"
																	width="21" height="2"
																	transform="translate(26 14.601)" fill="#333" />
																<path id="Path_12191" data-name="Path 12191"
																	d="M19.639,16.366V0h-18V16.366H0v6.546H21.275V16.366ZM3.273,14.729H14.729V13.092H3.273V1.637H18V13.092H16.366v1.637H18v1.637H3.273Zm16.366,6.546h-18V18h18Z"
																	fill="#333" />
															</g>
														</svg>
														<h5>HIGHEST STANDARDS!</h5>
														<p>Tier-III & Tier-IV Data Center Locations</p>
													</div>
												</div>

												<div class="col-lg-3 col-sm-6 col-12">
													<div class="hover-info-box">
														<svg xmlns="http://www.w3.org/2000/svg" width="49.453"
															height="49.452" viewBox="0 0 49.453 49.452">
															<g id="innovation" transform="translate(0 0.001)">
																<path id="Path_12192" data-name="Path 12192"
																	d="M290.6,2.835a11.167,11.167,0,0,0-18.5,6.812,11.091,11.091,0,0,0,3.369,9.6,4.279,4.279,0,0,1,1.119,1.744l13.155,0a4.184,4.184,0,0,1,1.1-1.723,11.053,11.053,0,0,0,3.489-8.1,11.181,11.181,0,0,0-3.73-8.33Zm-2.651,10.723h-2.712l-.479,7.179h-3.19l-.479-7.179h-2.712a2.393,2.393,0,0,1,0-4.786h.154a2.392,2.392,0,0,1,2.387,2.233l.171,2.553h4.148l.171-2.553a2.392,2.392,0,0,1,2.387-2.233h.154a2.393,2.393,0,0,1,0,4.786Zm0,0"
																	transform="translate(-244.873)" fill="#f80" />
																<path id="Path_12193" data-name="Path 12193"
																	d="M90.322,167.964h-1.6a1.591,1.591,0,0,1-.688-3.028l-.015-.014a13.56,13.56,0,1,0,3.1,8.626v-2.94a4.762,4.762,0,0,1-.8-2.643ZM77.56,181.524a7.976,7.976,0,1,1,7.976-7.976A7.976,7.976,0,0,1,77.56,181.524Zm0,0"
																	transform="translate(-57.619 -144.037)"
																	fill="#f80" />
																<path id="Path_12194" data-name="Path 12194"
																	d="M45.465,91.952H40.734l.373-5.583h1.965a3.191,3.191,0,1,0,0-6.381h-.154a3.2,3.2,0,0,0-3.184,2.978l-.12,1.808H36.958l-.12-1.808a3.2,3.2,0,0,0-3.184-2.978H33.5a3.191,3.191,0,1,0,0,6.381h1.965l.373,5.583H31.108a2.393,2.393,0,0,0,0,4.786h.862a5.587,5.587,0,0,0,5.52,4.786h.8V104.1l-2.747.726-.112.462a15.78,15.78,0,0,1-1.876,4.523l-.248.406,1.43,2.458-3.642,3.643-2.458-1.43-.406.248a15.867,15.867,0,0,1-4.524,1.876l-.462.111-.726,2.746H17.365l-.726-2.747-.462-.111a15.843,15.843,0,0,1-4.524-1.876l-.406-.248-2.458,1.43-3.642-3.643,1.43-2.458-.247-.4a15.825,15.825,0,0,1-1.876-4.523l-.112-.462L1.6,104.1V98.948l2.747-.726.112-.462A15.785,15.785,0,0,1,6.33,93.237l.248-.406-1.43-2.457L8.79,86.729l2.458,1.43.406-.248a15.833,15.833,0,0,1,4.524-1.876l.462-.112.726-2.745h5.152l.726,2.747.462.112a15.814,15.814,0,0,1,4.457,1.838,10.934,10.934,0,0,1-.764-2.207,17.452,17.452,0,0,0-2.853-1.062l-.8-3.023h-7.61l-.8,3.023a17.413,17.413,0,0,0-4.1,1.7l-2.7-1.574L3.15,90.115l1.574,2.7a17.376,17.376,0,0,0-1.7,4.1L0,97.719v7.609l3.023.8a17.4,17.4,0,0,0,1.7,4.1l-1.574,2.7,5.38,5.381,2.7-1.574a17.411,17.411,0,0,0,4.1,1.7l.8,3.022h7.61l.8-3.023a17.457,17.457,0,0,0,4.1-1.7l2.7,1.574,5.38-5.381-1.574-2.7a17.382,17.382,0,0,0,1.7-4.1l3.023-.8V101.46A5.587,5.587,0,0,0,44.6,96.738h.861a2.393,2.393,0,1,0,0-4.786Zm-4.138-8.88a1.6,1.6,0,0,1,1.591-1.489h.154a1.6,1.6,0,1,1,0,3.191H41.213Zm-7.826,1.7a1.6,1.6,0,0,1,0-3.191h.154a1.6,1.6,0,0,1,1.591,1.489l.114,1.7Zm3.565,1.6h2.442l-.372,5.583h-1.7Zm2.019,13.56h-1.6a4,4,0,0,1-3.908-3.191h9.41A4,4,0,0,1,39.084,99.929Zm6.381-4.786H31.108a.8.8,0,1,1,0-1.6H45.465a.8.8,0,1,1,0,1.6Zm0,0"
																	transform="translate(0 -72.013)" />
																<path id="Path_12195" data-name="Path 12195"
																	d="M129.548,216.762a8.774,8.774,0,1,0-8.774,8.774A8.784,8.784,0,0,0,129.548,216.762Zm-8.774,7.179a7.179,7.179,0,1,1,7.179-7.179A7.187,7.187,0,0,1,120.774,223.941Zm0,0"
																	transform="translate(-100.833 -187.251)" />
																<path id="Path_12196" data-name="Path 12196"
																	d="M192,127.988h1.6v1.6H192Zm0,0"
																	transform="translate(-172.857 -115.228)" />
																<path id="Path_12197" data-name="Path 12197"
																	d="M75.563,172.671l1.128-1.128,1.128,1.128L76.69,173.8Zm0,0"
																	transform="translate(-68.028 -154.44)" />
																<path id="Path_12198" data-name="Path 12198"
																	d="M32,287.988h1.6v1.6H32Zm0,0"
																	transform="translate(-28.809 -259.275)" />
																<path id="Path_12199" data-name="Path 12199"
																	d="M75.574,398.949l1.128-1.128,1.129,1.128L76.7,400.077Zm0,0"
																	transform="translate(-68.039 -358.157)" />
																<path id="Path_12200" data-name="Path 12200"
																	d="M192,447.988h1.6v1.6H192Zm0,0"
																	transform="translate(-172.857 -403.322)" />
																<path id="Path_12201" data-name="Path 12201"
																	d="M301.852,398.944l1.129-1.128,1.128,1.129-1.128,1.128Zm0,0"
																	transform="translate(-271.756 -358.153)" />
																<path id="Path_12202" data-name="Path 12202"
																	d="M144,245.571h1.6a3.993,3.993,0,0,1,3.988-3.988v-1.6A5.59,5.59,0,0,0,144,245.571Zm0,0"
																	transform="translate(-129.642 -216.061)" />
																<path id="Path_12203" data-name="Path 12203"
																	d="M147.184,309.862a5.565,5.565,0,0,0,1.1,1.862l1.188-1.065a3.952,3.952,0,0,1-.788-1.328Zm0,0"
																	transform="translate(-132.509 -278.491)" />
																<path id="Path_12204" data-name="Path 12204"
																	d="M326.783,46.794l-.888-1.325a8.007,8.007,0,0,0-1.512,1.314l1.189,1.064a6.384,6.384,0,0,1,1.212-1.053Zm0,0"
																	transform="translate(-292.04 -40.936)" />
																<path id="Path_12205" data-name="Path 12205"
																	d="M361.406,33.75l.354-1.555a8.05,8.05,0,0,0-4.431.256l.531,1.5a6.443,6.443,0,0,1,3.546-.2Zm0,0"
																	transform="translate(-321.701 -28.808)" />
															</g>
														</svg>
														<h5>SELF CONTROL PANEL!</h5>
														<p>100% Automated Reboot & OS installation.</p>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="hover-info-box">
														<svg xmlns="http://www.w3.org/2000/svg" width="50"
															height="50" viewBox="0 0 50 50">
															<g id="_026-computer_networks"
																data-name="026-computer networks"
																transform="translate(-1 -1)">
																<g id="Group_2835" data-name="Group 2835"
																	transform="translate(19.548 4.226)">
																	<g id="Group_2834" data-name="Group 2834">
																		<path id="Path_12206" data-name="Path 12206"
																			d="M35.29,11.452H25.613A1.615,1.615,0,0,1,24,9.839V6.613A1.615,1.615,0,0,1,25.613,5H35.29A1.615,1.615,0,0,1,36.9,6.613V9.839A1.615,1.615,0,0,1,35.29,11.452Z"
																			transform="translate(-24 -5)"
																			fill="#f80" />
																	</g>
																</g>
																<g id="Group_2837" data-name="Group 2837"
																	transform="translate(19.548 12.29)">
																	<g id="Group_2836" data-name="Group 2836">
																		<path id="Path_12207" data-name="Path 12207"
																			d="M35.29,21.452H25.613A1.615,1.615,0,0,1,24,19.839V16.613A1.615,1.615,0,0,1,25.613,15H35.29A1.615,1.615,0,0,1,36.9,16.613v3.226A1.615,1.615,0,0,1,35.29,21.452Z"
																			transform="translate(-24 -15)"
																			fill="#f80" />
																	</g>
																</g>
																<g id="Group_2839" data-name="Group 2839"
																	transform="translate(19.548 20.355)">
																	<g id="Group_2838" data-name="Group 2838">
																		<path id="Path_12208" data-name="Path 12208"
																			d="M35.29,31.452H25.613A1.615,1.615,0,0,1,24,29.839V26.613A1.615,1.615,0,0,1,25.613,25H35.29A1.615,1.615,0,0,1,36.9,26.613v3.226A1.615,1.615,0,0,1,35.29,31.452Z"
																			transform="translate(-24 -25)"
																			fill="#f80" />
																	</g>
																</g>
																<path id="Path_12209" data-name="Path 12209"
																	d="M48.581,33.258H42.129v-2.68L47.321,28.5l-6.89-3.445,2.5-1.879V20.355h1.613a2.422,2.422,0,0,0,2.419-2.419V11.484a2.422,2.422,0,0,0-2.419-2.419H39.71a2.422,2.422,0,0,0-2.419,2.419v6.452a2.422,2.422,0,0,0,2.419,2.419h1.613v2.016l-3.948,2.96,6.012,3.006-2.871,1.148v3.772H34.065a2.422,2.422,0,0,0-2.419,2.419V39.71H28.271a2.417,2.417,0,0,0-1.465-1.465V30.032h6.452a2.422,2.422,0,0,0,2.419-2.419V3.419A2.422,2.422,0,0,0,33.258,1H18.742a2.422,2.422,0,0,0-2.419,2.419V27.613a2.422,2.422,0,0,0,2.419,2.419h6.452v8.213a2.417,2.417,0,0,0-1.465,1.465H20.355V35.677a2.422,2.422,0,0,0-2.419-2.419H9.871v-2.68L15.063,28.5l-6.89-3.445,2.5-1.879V20.355H12.29a2.422,2.422,0,0,0,2.419-2.419V11.484A2.422,2.422,0,0,0,12.29,9.065H7.452a2.422,2.422,0,0,0-2.419,2.419v6.452a2.422,2.422,0,0,0,2.419,2.419H9.065v2.016l-3.948,2.96,6.012,3.006L8.258,29.486v3.772H3.419A2.422,2.422,0,0,0,1,35.677v9.677a2.422,2.422,0,0,0,2.419,2.419H6.645v1.613H5.032V51h11.29V49.387H14.71V47.774h3.226a2.422,2.422,0,0,0,2.419-2.419V41.323h3.374a2.405,2.405,0,0,0,4.542,0h3.374v4.032a2.422,2.422,0,0,0,2.419,2.419H37.29v1.613H35.677V51h11.29V49.387H45.355V47.774h3.226A2.422,2.422,0,0,0,51,45.355V35.677a2.422,2.422,0,0,0-2.419-2.419ZM38.9,11.484a.807.807,0,0,1,.806-.806h4.839a.807.807,0,0,1,.806.806v.806H38.9Zm0,2.419h6.452v1.613H38.9Zm.806,4.839a.807.807,0,0,1-.806-.806v-.806h6.452v.806a.807.807,0,0,1-.806.806ZM6.645,11.484a.807.807,0,0,1,.806-.806H12.29a.807.807,0,0,1,.806.806v.806H6.645Zm0,2.419H13.1v1.613H6.645Zm.806,4.839a.807.807,0,0,1-.806-.806v-.806H13.1v.806a.807.807,0,0,1-.806.806ZM13.1,49.387H8.258V47.774H13.1Zm5.645-4.032a.807.807,0,0,1-.806.806H3.419a.807.807,0,0,1-.806-.806v-.806H18.742Zm0-2.419H2.613V35.677a.807.807,0,0,1,.806-.806H17.935a.807.807,0,0,1,.806.806Zm0-14.516a.807.807,0,0,1-.806-.806V3.419a.807.807,0,0,1,.806-.806H33.258a.807.807,0,0,1,.806.806V27.613a.807.807,0,0,1-.806.806ZM26,41.323a.806.806,0,1,1,.806-.806A.807.807,0,0,1,26,41.323Zm17.742,8.065H38.9V47.774h4.839Zm5.645-4.032a.807.807,0,0,1-.806.806H34.065a.807.807,0,0,1-.806-.806v-.806H49.387Zm0-2.419H33.258V35.677a.807.807,0,0,1,.806-.806H48.581a.807.807,0,0,1,.806.806Z" />
															</g>
														</svg>
														<h5>ADVANCED CONTROL PANEL!</h5>
														<p>Intuitive way to Manage your Servers!</p>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="hover-info-box">
														<svg xmlns="http://www.w3.org/2000/svg" width="49.631"
															height="49.631" viewBox="0 0 49.631 49.631">
															<g id="database_1_" data-name="database (1)"
																transform="translate(-1 -1)">
																<g id="Group_2840" data-name="Group 2840"
																	transform="translate(39.842 46.315)">
																	<rect id="Rectangle_1524"
																		data-name="Rectangle 1524" width="6"
																		height="1"
																		transform="translate(0.158 -0.314)"
																		fill="#f0bc5e" />
																</g>
																<g id="Group_2841" data-name="Group 2841"
																	transform="translate(39.842 33.368)">
																	<rect id="Rectangle_1525"
																		data-name="Rectangle 1525" width="3"
																		height="1"
																		transform="translate(0.158 -0.367)"
																		fill="#f80" />
																</g>
																<g id="Group_2842" data-name="Group 2842"
																	transform="translate(43.079 39.841)">
																	<rect id="Rectangle_1526"
																		data-name="Rectangle 1526" width="3"
																		height="1"
																		transform="translate(-0.079 0.158)"
																		fill="#f80" />
																</g>
																<g id="Group_2843" data-name="Group 2843"
																	transform="translate(22.579 46.315)">
																	<rect id="Rectangle_1527"
																		data-name="Rectangle 1527" width="6"
																		height="1"
																		transform="translate(0.421 -0.314)"
																		fill="#f80" />
																</g>
																<g id="Group_2844" data-name="Group 2844"
																	transform="translate(22.579 33.368)">
																	<rect id="Rectangle_1528"
																		data-name="Rectangle 1528" width="3"
																		height="1"
																		transform="translate(0.421 -0.367)"
																		fill="#f80" />
																</g>
																<g id="Group_2845" data-name="Group 2845"
																	transform="translate(25.815 39.841)">
																	<rect id="Rectangle_1529"
																		data-name="Rectangle 1529" width="3"
																		height="1"
																		transform="translate(0.185 0.158)"
																		fill="#f80" />
																</g>
																<g id="Group_2846" data-name="Group 2846"
																	transform="translate(5.315 46.315)">
																	<rect id="Rectangle_1530"
																		data-name="Rectangle 1530" width="7"
																		height="1"
																		transform="translate(-0.315 -0.314)"
																		fill="#f80" />
																</g>
																<g id="Group_2847" data-name="Group 2847"
																	transform="translate(5.315 33.368)">
																	<rect id="Rectangle_1531"
																		data-name="Rectangle 1531" width="4"
																		height="1"
																		transform="translate(-0.315 -0.367)"
																		fill="#f80" />
																</g>
																<g id="Group_2848" data-name="Group 2848"
																	transform="translate(8.552 39.841)">
																	<rect id="Rectangle_1532"
																		data-name="Rectangle 1532" width="3"
																		height="1"
																		transform="translate(0.448 0.158)"
																		fill="#f80" />
																</g>
																<g id="Group_2850" data-name="Group 2850"
																	transform="translate(5.803 1)">
																	<g id="Group_2849" data-name="Group 2849">
																		<path id="Path_12210" data-name="Path 12210"
																			d="M40.621,21.813H13.4a6.4,6.4,0,0,1-.335-12.8A6.445,6.445,0,0,1,19.007,5a6.318,6.318,0,0,1,1.978.315A10.391,10.391,0,0,1,39.551,9.1a6.4,6.4,0,1,1,1.07,12.718Z"
																			transform="translate(-7 -1)"
																			fill="#f80" />
																	</g>
																</g>
																<g id="Group_2851" data-name="Group 2851"
																	transform="translate(1 4.205)">
																	<rect id="Rectangle_1533"
																		data-name="Rectangle 1533" width="1"
																		height="1"
																		transform="translate(3 28.795)" />
																	<rect id="Rectangle_1534"
																		data-name="Rectangle 1534" width="2"
																		height="1"
																		transform="translate(6 28.795)" />
																	<rect id="Rectangle_1535"
																		data-name="Rectangle 1535" width="1"
																		height="1"
																		transform="translate(10 35.795)" />
																	<rect id="Rectangle_1536"
																		data-name="Rectangle 1536" width="2"
																		height="1"
																		transform="translate(6 35.795)" />
																	<rect id="Rectangle_1537"
																		data-name="Rectangle 1537" width="2"
																		height="1"
																		transform="translate(6 41.795)" />
																	<rect id="Rectangle_1538"
																		data-name="Rectangle 1538" width="1"
																		height="1"
																		transform="translate(10 41.795)" />
																	<rect id="Rectangle_1539"
																		data-name="Rectangle 1539" width="1"
																		height="1"
																		transform="translate(3 41.795)" />
																	<rect id="Rectangle_1540"
																		data-name="Rectangle 1540" width="3"
																		height="1"
																		transform="translate(20 28.795)" />
																	<rect id="Rectangle_1541"
																		data-name="Rectangle 1541" width="2"
																		height="1"
																		transform="translate(24 28.795)" />
																	<rect id="Rectangle_1542"
																		data-name="Rectangle 1542" width="2"
																		height="1"
																		transform="translate(27 35.795)" />
																	<rect id="Rectangle_1543"
																		data-name="Rectangle 1543" width="2"
																		height="1"
																		transform="translate(24 35.795)" />
																	<rect id="Rectangle_1544"
																		data-name="Rectangle 1544" width="2"
																		height="1"
																		transform="translate(24 41.795)" />
																	<rect id="Rectangle_1545"
																		data-name="Rectangle 1545" width="2"
																		height="1"
																		transform="translate(27 41.795)" />
																	<rect id="Rectangle_1546"
																		data-name="Rectangle 1546" width="3"
																		height="1"
																		transform="translate(20 41.795)" />
																	<path id="Path_12211" data-name="Path 12211"
																		d="M48.229,35h-4V30.2H26.616V27h-1.6v3.2H7.4V35h-4a2.4,2.4,0,0,0-2.4,2.4v16.01a2.4,2.4,0,0,0,2.4,2.4h9.606a2.4,2.4,0,0,0,2.4-2.4V37.406a2.4,2.4,0,0,0-2.4-2.4H9V31.8h16.01V35h-4a2.4,2.4,0,0,0-2.4,2.4v16.01a2.4,2.4,0,0,0,2.4,2.4h9.606a2.4,2.4,0,0,0,2.4-2.4V37.406a2.4,2.4,0,0,0-2.4-2.4h-4V31.8h16.01V35h-4a2.4,2.4,0,0,0-2.4,2.4v16.01a2.4,2.4,0,0,0,2.4,2.4h9.606a2.4,2.4,0,0,0,2.4-2.4V37.406A2.4,2.4,0,0,0,48.229,35ZM2.6,43.01H13.808v4.8H2.6ZM13.007,54.217H3.4a.8.8,0,0,1-.8-.8v-4H13.808v4A.8.8,0,0,1,13.007,54.217Zm.8-16.81v4H2.6v-4a.8.8,0,0,1,.8-.8h9.606A.8.8,0,0,1,13.808,37.406Zm6.4,5.6H31.419v4.8H20.212ZM30.618,54.217H21.012a.8.8,0,0,1-.8-.8v-4H31.419v4A.8.8,0,0,1,30.618,54.217Zm.8-16.81v4H20.212v-4a.8.8,0,0,1,.8-.8h9.606A.8.8,0,0,1,31.419,37.406Zm7.2-.8h9.606a.8.8,0,0,1,.8.8v4H37.823v-4A.8.8,0,0,1,38.623,36.606Zm10.406,6.4v4.8H37.823v-4.8Zm-.8,11.207H38.623a.8.8,0,0,1-.8-.8v-4H49.03v4A.8.8,0,0,1,48.229,54.217Z"
																		transform="translate(-1 -9.392)" />
																	<rect id="Rectangle_1547"
																		data-name="Rectangle 1547" width="1"
																		height="1"
																		transform="translate(39 28.795)" />
																	<rect id="Rectangle_1548"
																		data-name="Rectangle 1548" width="1"
																		height="1"
																		transform="translate(42 28.795)" />
																	<rect id="Rectangle_1549"
																		data-name="Rectangle 1549" width="1"
																		height="1"
																		transform="translate(45 35.795)" />
																	<rect id="Rectangle_1550"
																		data-name="Rectangle 1550" width="1"
																		height="1"
																		transform="translate(42 35.795)" />
																	<rect id="Rectangle_1551"
																		data-name="Rectangle 1551" width="1"
																		height="1"
																		transform="translate(42 41.795)" />
																	<rect id="Rectangle_1552"
																		data-name="Rectangle 1552" width="1"
																		height="1"
																		transform="translate(45 41.795)" />
																	<rect id="Rectangle_1553"
																		data-name="Rectangle 1553" width="1"
																		height="1"
																		transform="translate(39 41.795)" />
																	<path id="Path_12212" data-name="Path 12212"
																		d="M37.693,8.243l1.132-1.132a7.214,7.214,0,0,0-10.19,0l1.133,1.132A5.612,5.612,0,0,1,37.693,8.243Z"
																		transform="translate(-6.513 -5.004)" />
																	<path id="Path_12213" data-name="Path 12213"
																		d="M52.2,18.2A3.205,3.205,0,0,0,49,15v1.6a1.6,1.6,0,0,1,0,3.2v1.6A3.205,3.205,0,0,0,52.2,18.2Z"
																		transform="translate(-10.576 -6.998)" />
																</g>
															</g>
														</svg>
														<h5>MULTI-SERVER MANAGEMENT!</h5>
														<p>Manage all your servers, at any location</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div id="sererFeatures" class="tab-pane fade">
									<div class="row">
										<div class="container">
											<div class="row">
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="hover-info-box">
														<svg xmlns="http://www.w3.org/2000/svg" width="49.666"
															height="49.666" viewBox="0 0 49.666 49.666">
															<g id="up-arrow" transform="translate(0 0)">
																<path id="Path_12073" data-name="Path 12073"
																	d="M64.829,32.117h7.4L50.117,10,28,32.117H64.829Z"
																	transform="translate(-25.284 -9.03)"
																	fill="#fedbab" />
																<path id="Path_12074" data-name="Path 12074"
																	d="M121.923,187.757V169.133h8.342L115.133,154,100,169.133h8.342v18.625Z"
																	transform="translate(-90.3 -139.061)"
																	fill="#f80" />
																<path id="Path_12075" data-name="Path 12075"
																	d="M48.7,179.7H31.623a.97.97,0,0,1-.97-.97V160.1a.97.97,0,0,1,.97-.97h6L24.833,146.342,12.042,159.133h6a.97.97,0,0,1,.97.97v18.625a.97.97,0,0,1-.97.97H.97a.97.97,0,1,1,0-1.94h16.1V161.073H9.7a.97.97,0,0,1-.686-1.656l15.133-15.133a.97.97,0,0,1,1.372,0l15.133,15.133a.97.97,0,0,1-.686,1.656H32.593v16.685H48.7a.97.97,0,1,1,0,1.94Z"
																	transform="translate(0 -130.031)" />
																<path id="Path_12076" data-name="Path 12076"
																	d="M63.2,24.057H54.829a.97.97,0,0,1,0-1.94h6.033L41.086,2.342,21.311,22.117h6.162a.97.97,0,1,1,0,1.94h-8.5a.97.97,0,0,1-.686-1.656L40.4.284a.97.97,0,0,1,1.372,0L63.889,22.4a.97.97,0,0,1-.686,1.656Z"
																	transform="translate(-16.253)" />
																<path id="Path_12077" data-name="Path 12077"
																	d="M280.97,379.341a.97.97,0,0,1-.97-.97V367.958a.97.97,0,0,1,1.94,0V378.37A.97.97,0,0,1,280.97,379.341Z"
																	transform="translate(-252.839 -331.389)" />
																<path id="Path_12078" data-name="Path 12078"
																	d="M280.97,336.283a.97.97,0,0,1-.97-.97V335.3a.97.97,0,0,1,1.94,0v.013A.97.97,0,0,1,280.97,336.283Z"
																	transform="translate(-252.839 -301.899)"
																	fill="#000413" />
															</g>
														</svg>
														<h5>100% Uptime !</h5>
														<p>We haven’t had any outage in over 5 years.</p>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="hover-info-box">
														<svg xmlns="http://www.w3.org/2000/svg" width="37.5"
															height="49.899" viewBox="0 0 37.5 49.899">
															<g id="badge_2_" data-name="badge (2)"
																transform="translate(-0.5 -0.001)">
																<path id="Path_12079" data-name="Path 12079"
																	d="M123.574,268.32l-5.907-3.706a1.1,1.1,0,0,0-1.174,0l-5.907,3.706a1.1,1.1,0,0,1-1.691-.935V243h16.372v24.38a1.1,1.1,0,0,1-1.691.935Zm0,0"
																	transform="translate(-97.83 -219.32)"
																	fill="#fff" />
																<path id="Path_12080" data-name="Path 12080"
																	d="M167.492,243h-6.148v23.17l2.487-1.56a1.1,1.1,0,0,1,1.174,0l2.487,1.56Zm0,0"
																	transform="translate(-145.168 -219.32)"
																	fill="#f80" />
																<path id="Path_12081" data-name="Path 12081"
																	d="M26.533,8.675l2.324-1.056a1.228,1.228,0,0,1,1.4.279l1.744,1.865a1.226,1.226,0,0,0,.938.389l2.551-.086a1.228,1.228,0,0,1,1.191.8l.9,2.39a1.227,1.227,0,0,0,.718.718l2.39.9a1.227,1.227,0,0,1,.8,1.19L41.4,18.609a1.228,1.228,0,0,0,.389.938l1.865,1.743a1.228,1.228,0,0,1,.279,1.4L42.877,25.02a1.227,1.227,0,0,0,0,1.015l1.056,2.325a1.228,1.228,0,0,1-.279,1.4l-1.865,1.743a1.228,1.228,0,0,0-.389.938L41.486,35a1.228,1.228,0,0,1-.8,1.191l-2.39.9a1.227,1.227,0,0,0-.718.718l-.9,2.39a1.227,1.227,0,0,1-1.191.8L32.943,40.9a1.228,1.228,0,0,0-.938.389l-1.744,1.865a1.228,1.228,0,0,1-1.4.279L26.533,42.38a1.228,1.228,0,0,0-1.016,0l-2.325,1.056a1.228,1.228,0,0,1-1.4-.279l-1.743-1.865a1.228,1.228,0,0,0-.938-.389l-2.552.086a1.227,1.227,0,0,1-1.19-.8l-.9-2.39a1.228,1.228,0,0,0-.718-.718l-2.39-.9a1.229,1.229,0,0,1-.8-1.191l.086-2.551a1.227,1.227,0,0,0-.388-.938L8.4,29.764a1.227,1.227,0,0,1-.279-1.4l1.056-2.325a1.227,1.227,0,0,0,0-1.015L8.117,22.7a1.227,1.227,0,0,1,.279-1.4l1.865-1.743a1.227,1.227,0,0,0,.388-.938l-.086-2.552a1.228,1.228,0,0,1,.8-1.19l2.39-.9a1.228,1.228,0,0,0,.718-.718l.9-2.39a1.228,1.228,0,0,1,1.19-.8l2.552.086a1.227,1.227,0,0,0,.938-.389L21.788,7.9a1.228,1.228,0,0,1,1.4-.279l2.325,1.056A1.225,1.225,0,0,0,26.533,8.675Zm0,0"
																	transform="translate(-6.775 -6.776)"
																	fill="#f80" />
																<path id="Path_12082" data-name="Path 12082"
																	d="M85.013,71.457a13.059,13.059,0,1,1-26.118,0,13.237,13.237,0,0,1,.084-1.487,13.06,13.06,0,0,1,26.034,1.487Zm0,0"
																	transform="translate(-52.704 -52.706)"
																	fill="#fff" />
																<path id="Path_12084" data-name="Path 12084"
																	d="M52.721,64.168q-.035,0-.07,0a.731.731,0,0,1-.659-.8,13.791,13.791,0,0,1,27.444-.135.731.731,0,1,1-1.454.152,12.33,12.33,0,0,0-24.534.121.731.731,0,0,1-.727.662Zm0,0"
																	transform="translate(-46.471 -45.93)" />
																<path id="Path_12085" data-name="Path 12085"
																	d="M66.232,213.784a13.822,13.822,0,0,1-13.67-11.964.731.731,0,0,1,1.449-.192,12.33,12.33,0,0,0,24.463-.168.731.731,0,1,1,1.452.172,13.786,13.786,0,0,1-13.694,12.152Zm0,0"
																	transform="translate(-46.982 -181.243)" />
																<path id="Path_12086" data-name="Path 12086"
																	d="M36.768,18.956a.5.5,0,0,1,0-.411l1.056-2.325a1.957,1.957,0,0,0-.446-2.241l-1.865-1.744a.5.5,0,0,1-.157-.38l.086-2.551a1.957,1.957,0,0,0-1.27-1.9l-2.39-.9a.5.5,0,0,1-.29-.29l-.9-2.39a1.956,1.956,0,0,0-1.9-1.269l-2.551.086a.493.493,0,0,1-.38-.157L24.021.622A1.957,1.957,0,0,0,21.78.177L19.456,1.233a.5.5,0,0,1-.411,0L16.72.177A1.957,1.957,0,0,0,14.48.622L12.736,2.488a.5.5,0,0,1-.379.157L9.8,2.559a1.955,1.955,0,0,0-1.9,1.269l-.9,2.39a.5.5,0,0,1-.29.29l-2.39.9a1.957,1.957,0,0,0-1.269,1.9l.086,2.552a.5.5,0,0,1-.157.38L1.121,13.98a1.958,1.958,0,0,0-.446,2.241l1.056,2.324a.5.5,0,0,1,0,.411L.676,21.281a1.958,1.958,0,0,0,.446,2.241l1.865,1.744a.5.5,0,0,1,.157.38L3.058,28.2a1.958,1.958,0,0,0,1.269,1.9l2.39.9a.5.5,0,0,1,.29.29l.9,2.39a1.957,1.957,0,0,0,1.9,1.269l2.552-.086a.5.5,0,0,1,.38.157l1.743,1.865a1.955,1.955,0,0,0,.966.565V46.45l-3.078,1.931a.374.374,0,0,1-.572-.316V37.112a.731.731,0,0,0-1.462,0V48.065a1.836,1.836,0,0,0,2.811,1.555l5.907-3.707a.377.377,0,0,1,.4,0l5.907,3.707a1.836,1.836,0,0,0,2.811-1.555V37.115a.731.731,0,0,0-1.462,0V48.065a.374.374,0,0,1-.572.316L23.055,46.45V37.445a1.958,1.958,0,0,0,.965-.565l1.744-1.865a.491.491,0,0,1,.379-.157l2.552.086a1.959,1.959,0,0,0,1.9-1.269l.9-2.39a.5.5,0,0,1,.29-.29l2.39-.9a1.957,1.957,0,0,0,1.269-1.9l-.086-2.551a.5.5,0,0,1,.157-.38l1.865-1.744a1.957,1.957,0,0,0,.445-2.241ZM20.226,44.675a1.845,1.845,0,0,0-1.951,0l-1.367.858V37.24l2.138-.971a.5.5,0,0,1,.411,0l2.138.971v8.293ZM35.437,19.561l1.056,2.324a.5.5,0,0,1-.113.568L34.515,24.2a1.959,1.959,0,0,0-.62,1.5l.086,2.551a.5.5,0,0,1-.322.482l-2.39.9a1.959,1.959,0,0,0-1.146,1.146l-.9,2.39a.5.5,0,0,1-.482.322L26.193,33.4a1.955,1.955,0,0,0-1.5.62l-1.744,1.865a.5.5,0,0,1-.568.113L20.06,34.938a1.959,1.959,0,0,0-1.62,0l-2.325,1.056a.5.5,0,0,1-.568-.113L13.8,34.016a1.958,1.958,0,0,0-1.43-.621h-.066l-2.552.086a.5.5,0,0,1-.482-.322l-.9-2.391a1.96,1.96,0,0,0-1.146-1.146l-2.39-.9a.5.5,0,0,1-.322-.482l.086-2.551a1.958,1.958,0,0,0-.62-1.5L2.12,22.454a.5.5,0,0,1-.113-.568l1.056-2.325a1.959,1.959,0,0,0,0-1.62L2.007,15.617a.5.5,0,0,1,.113-.568L3.985,13.3a1.957,1.957,0,0,0,.62-1.5L4.519,9.256a.5.5,0,0,1,.322-.482l2.39-.9A1.958,1.958,0,0,0,8.377,6.732l.9-2.391a.5.5,0,0,1,.482-.322l2.552.086a1.956,1.956,0,0,0,1.5-.62l1.743-1.865a.5.5,0,0,1,.568-.113L18.44,2.564a1.957,1.957,0,0,0,1.62,0l2.325-1.056a.5.5,0,0,1,.568.113L24.7,3.486a1.958,1.958,0,0,0,1.5.62l2.552-.086a.5.5,0,0,1,.482.322l.9,2.39a1.96,1.96,0,0,0,1.146,1.146l2.39.9a.5.5,0,0,1,.322.482L33.9,11.808a1.958,1.958,0,0,0,.62,1.5l1.865,1.744a.5.5,0,0,1,.113.568l-1.056,2.325a1.959,1.959,0,0,0,0,1.62Zm0,0"
																	transform="translate(0 0)" />
															</g>
														</svg>
														<h5>30 DAY MONEY BACK!</h5>
														<p>Try us – you will like us.</p>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="hover-info-box">
														<svg xmlns="http://www.w3.org/2000/svg" width="50"
															height="50" viewBox="0 0 50 50">
															<g id="_009-data_center" data-name="009-data center"
																transform="translate(-1 -1)">
																<g id="Group_2813" data-name="Group 2813"
																	transform="translate(7.452 1)">
																	<path id="Path_12087" data-name="Path 12087"
																		d="M9,33h4.839v1.613H9Z"
																		transform="translate(-9 -7.194)"
																		fill="#f80" />
																	<path id="Path_12088" data-name="Path 12088"
																		d="M25,33h4.839v1.613H25Z"
																		transform="translate(-12.097 -7.194)"
																		fill="#f80" />
																	<path id="Path_12089" data-name="Path 12089"
																		d="M49,33h4.839v1.613H49Z"
																		transform="translate(-16.742 -7.194)"
																		fill="#f80" />
																	<path id="Path_12090" data-name="Path 12090"
																		d="M49,17h4.839v1.613H49Z"
																		transform="translate(-16.742 -4.097)"
																		fill="#f80" />
																	<path id="Path_12091" data-name="Path 12091"
																		d="M33,25h4.839v1.613H33Z"
																		transform="translate(-13.645 -5.645)"
																		fill="#f80" />
																	<path id="Path_12092" data-name="Path 12092"
																		d="M33,9h4.839v1.613H33Z"
																		transform="translate(-13.645 -2.548)"
																		fill="#f80" />
																	<path id="Path_12093" data-name="Path 12093"
																		d="M25,17h4.839v1.613H25Z"
																		transform="translate(-12.097 -4.097)"
																		fill="#f80" />
																	<path id="Path_12094" data-name="Path 12094"
																		d="M9,17h4.839v1.613H9Z"
																		transform="translate(-9 -4.097)"
																		fill="#f80" />
																	<path id="Path_12095" data-name="Path 12095"
																		d="M21.137,32.614l-.1.019V5.839a.807.807,0,0,1,.806-.806H36.355a.807.807,0,0,1,.806.806V29.831l-.015,0a8.89,8.89,0,0,1,4.048,3.172V5.032A4.037,4.037,0,0,0,37.161,1H21.032A4.037,4.037,0,0,0,17,5.032V35.087l.057,0a7.245,7.245,0,0,1,4.08-2.475Z"
																		transform="translate(-10.548 -1)"
																		fill="#f80" />
																	<path id="Path_12096" data-name="Path 12096"
																		d="M15,57h8.065v1.613H15Z"
																		transform="translate(-10.161 -11.839)"
																		fill="#f80" />
																</g>
																<path id="Path_12097" data-name="Path 12097"
																	d="M46.968,8.226H37.29V9.839h9.677a2.422,2.422,0,0,1,2.419,2.419V34.839a2.416,2.416,0,0,1-1.613,2.271V13.065a1.615,1.615,0,0,0-1.613-1.613H38.1v1.613h8.065V17.9H38.1v1.613h8.065v4.839H38.1v1.613h8.065v4.839H38.1v1.613h8.065v4.839H40.37a9.694,9.694,0,0,0-5.5-7.173V6.613A1.615,1.615,0,0,0,33.258,5H18.742a1.615,1.615,0,0,0-1.613,1.613V32.794a8.05,8.05,0,0,0-4.972,4.464H5.839V32.419H13.9V30.806H5.839V25.968H13.9V24.355H5.839V19.516H13.9V17.9H5.839V13.065H13.9V11.452H5.839a1.615,1.615,0,0,0-1.613,1.613V37.11a2.416,2.416,0,0,1-1.613-2.271V12.258A2.422,2.422,0,0,1,5.032,9.839H14.71V8.226H5.032A4.037,4.037,0,0,0,1,12.258V34.839a4.037,4.037,0,0,0,4.032,4.032h6.614c0,.01,0,.022,0,.033a6.451,6.451,0,0,0,.649,12.87H39.71a6.449,6.449,0,0,0,.8-12.848c0-.019,0-.037,0-.056h6.452A4.037,4.037,0,0,0,51,34.839V12.258A4.037,4.037,0,0,0,46.968,8.226ZM33.258,17.9H18.742V13.065H33.258Zm0,1.613v4.839H18.742V19.516Zm0-12.9v4.839H18.742V6.613ZM18.742,25.968H33.258v3.544A9.585,9.585,0,0,0,23,33.213a8.053,8.053,0,0,0-3.456-.794c-.272,0-.541.015-.806.042ZM44.548,45.323a4.844,4.844,0,0,1-4.839,4.839H12.29a4.839,4.839,0,1,1,4.839-4.839h1.613a6.456,6.456,0,0,0-5.457-6.367,6.436,6.436,0,0,1,8.886-4.361,9.6,9.6,0,0,0-1.01,4.277h1.613a8.065,8.065,0,0,1,16.129,0c0,.019,0,.037,0,.056a6.457,6.457,0,0,0-5.643,6.4h1.613a4.839,4.839,0,0,1,9.677,0Z"
																	transform="translate(0 -0.774)" />
																<path id="Path_12098" data-name="Path 12098"
																	d="M37,9h1.613v1.613H37Z"
																	transform="translate(-6.968 -1.548)" />
																<path id="Path_12099" data-name="Path 12099"
																	d="M33,9h1.613v1.613H33Z"
																	transform="translate(-6.194 -1.548)" />
																<path id="Path_12100" data-name="Path 12100"
																	d="M25,17h1.613v1.613H25Z"
																	transform="translate(-4.645 -3.097)" />
																<path id="Path_12101" data-name="Path 12101"
																	d="M29,17h1.613v1.613H29Z"
																	transform="translate(-5.419 -3.097)" />
																<path id="Path_12102" data-name="Path 12102"
																	d="M37,25h1.613v1.613H37Z"
																	transform="translate(-6.968 -4.645)" />
																<path id="Path_12103" data-name="Path 12103"
																	d="M33,25h1.613v1.613H33Z"
																	transform="translate(-6.194 -4.645)" />
																<path id="Path_12104" data-name="Path 12104"
																	d="M25,33h1.613v1.613H25Z"
																	transform="translate(-4.645 -6.194)" />
																<path id="Path_12105" data-name="Path 12105"
																	d="M29,33h1.613v1.613H29Z"
																	transform="translate(-5.419 -6.194)" />
																<path id="Path_12106" data-name="Path 12106"
																	d="M9,17h1.613v1.613H9Z"
																	transform="translate(-1.548 -3.097)" />
																<path id="Path_12107" data-name="Path 12107"
																	d="M13,17h1.613v1.613H13Z"
																	transform="translate(-2.323 -3.097)" />
																<path id="Path_12108" data-name="Path 12108"
																	d="M9,33h1.613v1.613H9Z"
																	transform="translate(-1.548 -6.194)" />
																<path id="Path_12109" data-name="Path 12109"
																	d="M13,33h1.613v1.613H13Z"
																	transform="translate(-2.323 -6.194)" />
																<path id="Path_12110" data-name="Path 12110"
																	d="M53,17h1.613v1.613H53Z"
																	transform="translate(-10.065 -3.097)" />
																<path id="Path_12111" data-name="Path 12111"
																	d="M49,17h1.613v1.613H49Z"
																	transform="translate(-9.29 -3.097)" />
																<path id="Path_12112" data-name="Path 12112"
																	d="M53,33h1.613v1.613H53Z"
																	transform="translate(-10.065 -6.194)" />
																<path id="Path_12113" data-name="Path 12113"
																	d="M49,33h1.613v1.613H49Z"
																	transform="translate(-9.29 -6.194)" />
																<path id="Path_12114" data-name="Path 12114"
																	d="M42.346,44.76l1.6-.228a6.458,6.458,0,0,0-8.228-5.265l.46,1.547a4.842,4.842,0,0,1,6.172,3.946Z"
																	transform="translate(-6.719 -7.355)" />
																<path id="Path_12115" data-name="Path 12115"
																	d="M15,57h1.613v1.613H15Z"
																	transform="translate(-2.71 -10.839)" />
																<path id="Path_12116" data-name="Path 12116"
																	d="M19,57h1.613v1.613H19Z"
																	transform="translate(-3.484 -10.839)" />
																<path id="Path_12117" data-name="Path 12117"
																	d="M23,57h1.613v1.613H23Z"
																	transform="translate(-4.258 -10.839)" />
															</g>
														</svg>
														<h5>INSTANT SERVER SETUP!</h5>
														<p>Your Server wil be ready within minutes</p>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="hover-info-box">
														<svg xmlns="http://www.w3.org/2000/svg" width="50.6"
															height="50.631" viewBox="0 0 50.6 50.631">
															<g id="wall-clock" transform="translate(-0.157 0)">
																<g id="Group_2814" data-name="Group 2814"
																	transform="translate(8.581 8.439)">
																	<path id="Path_12118" data-name="Path 12118"
																		d="M98.429,85.34h0A13.088,13.088,0,0,0,85.34,98.429h0a13.088,13.088,0,0,0,13.089,13.089h0a13.088,13.088,0,0,0,13.089-13.089h0A13.089,13.089,0,0,0,98.429,85.34Zm0,14.4a1.308,1.308,0,0,1-1.309-1.309h0a1.308,1.308,0,0,1,1.309-1.309h0a1.309,1.309,0,0,1,0,2.618Z"
																		transform="translate(-81.764 -81.764)"
																		fill="#f80" />
																	<circle id="Ellipse_839" data-name="Ellipse 839"
																		cx="1.688" cy="1.688" r="1.688"
																		transform="translate(15.188 15.188)"
																		fill="#f80" />
																</g>
																<path id="Path_12119" data-name="Path 12119"
																	d="M.972,25.3H1a.844.844,0,0,0,.844-.815A23.628,23.628,0,0,1,40.075,6.752H35.584a.844.844,0,0,0,0,1.688h6.762a.849.849,0,0,0,.194-.039.823.823,0,0,0,.127-.028c.024-.01.041-.031.064-.044a.813.813,0,0,0,.206-.144l.008-.006a.949.949,0,0,0,.058-.092.848.848,0,0,0,.111-.176.806.806,0,0,0,.042-.208.639.639,0,0,0,.021-.106V.845a.844.844,0,1,0-1.688,0V5.732A25.309,25.309,0,0,0,.158,24.433.844.844,0,0,0,.972,25.3Z"
																	transform="translate(0 0)" fill="#231f20" />
																<g id="Group_2815" data-name="Group 2815"
																	transform="translate(0.279 25.354)">
																	<path id="Path_12120" data-name="Path 12120"
																		d="M103.48,447.81a24.029,24.029,0,0,1-2.037-1.35.844.844,0,1,0-1.045,1.325l.042.031a25.54,25.54,0,0,0,2.18,1.447.844.844,0,1,0,.86-1.453Z"
																		transform="translate(-90.318 -427.501)"
																		fill="#f80" />
																	<path id="Path_12121" data-name="Path 12121"
																		d="M64.014,412.2a.846.846,0,1,0-1.266,1.121h0a25.535,25.535,0,0,0,1.839,1.863.844.844,0,0,0,1.138-1.246A23.586,23.586,0,0,1,64.014,412.2Z"
																		transform="translate(-56.489 -396.54)"
																		fill="#f80" />
																	<path id="Path_12122" data-name="Path 12122"
																		d="M35.6,372.973a23.939,23.939,0,0,1-1.323-2.053.845.845,0,1,0-1.464.844,25.545,25.545,0,0,0,1.418,2.195.844.844,0,0,0,1.37-.986Z"
																		transform="translate(-29.604 -359.214)"
																		fill="#f80" />
																	<path id="Path_12123" data-name="Path 12123"
																		d="M147.535,473.343a23.55,23.55,0,0,1-2.269-.9.844.844,0,1,0-.749,1.512l.044.02a24.959,24.959,0,0,0,2.434.969.844.844,0,1,0,.541-1.6Z"
																		transform="translate(-129.94 -450.997)"
																		fill="#f80" />
																	<path id="Path_12124" data-name="Path 12124"
																		d="M14.406,326.331a23.7,23.7,0,0,1-.873-2.278.844.844,0,0,0-1.629.444.638.638,0,0,0,.025.078,25.339,25.339,0,0,0,.935,2.447.844.844,0,1,0,1.543-.684Z"
																		transform="translate(-10.837 -316.801)"
																		fill="#f80" />
																	<path id="Path_12125" data-name="Path 12125"
																		d="M2.8,277.982a.844.844,0,0,0,.65-1,24.016,24.016,0,0,1-.381-2.412.844.844,0,0,0-1.679.178,25.475,25.475,0,0,0,.41,2.584.843.843,0,0,0,1,.65Z"
																		transform="translate(-1.385 -272.092)"
																		fill="#f80" />
																	<path id="Path_12126" data-name="Path 12126"
																		d="M493.65,256.395a.831.831,0,0,0-.872.788.235.235,0,0,0,0,.025,23.723,23.723,0,0,1-.212,2.434.844.844,0,0,0,.719.951.782.782,0,0,0,.118.008.844.844,0,0,0,.834-.727,25.617,25.617,0,0,0,.227-2.607A.844.844,0,0,0,493.65,256.395Z"
																		transform="translate(-443.986 -256.394)"
																		fill="#f80" />
																	<path id="Path_12127" data-name="Path 12127"
																		d="M460.55,355.152a.844.844,0,0,0-1.126.392,23.537,23.537,0,0,1-1.176,2.141.844.844,0,0,0,1.434.889,25.2,25.2,0,0,0,1.26-2.294.844.844,0,0,0-.392-1.127Z"
																		transform="translate(-412.962 -345.31)"
																		fill="#f80" />
																	<path id="Path_12128" data-name="Path 12128"
																		d="M428.656,398.788a23.621,23.621,0,0,1-1.591,1.856.845.845,0,0,0,1.224,1.164h0a25.625,25.625,0,0,0,1.7-1.987.844.844,0,1,0-1.321-1.051l-.015.019Z"
																		transform="translate(-384.761 -384.404)"
																		fill="#f80" />
																	<path id="Path_12129" data-name="Path 12129"
																		d="M196.107,489.267a23.756,23.756,0,0,1-2.407-.413.844.844,0,1,0-.372,1.646h0a25.176,25.176,0,0,0,2.58.443.817.817,0,0,0,.1.006.844.844,0,0,0,.1-1.682Z"
																		transform="translate(-173.755 -465.847)"
																		fill="#f80" />
																	<path id="Path_12130" data-name="Path 12130"
																		d="M390.3,435.754a24.09,24.09,0,0,1-1.941,1.492.846.846,0,1,0,.962,1.392,25.821,25.821,0,0,0,2.076-1.6.844.844,0,0,0-1.1-1.283v0Z"
																		transform="translate(-349.762 -417.833)"
																		fill="#f80" />
																	<path id="Path_12131" data-name="Path 12131"
																		d="M482.126,307.018a.844.844,0,0,0-1.022.616,23.821,23.821,0,0,1-.708,2.338.844.844,0,0,0,1.588.572,25.4,25.4,0,0,0,.759-2.5.844.844,0,0,0-.617-1.022Z"
																		transform="translate(-432.982 -301.989)"
																		fill="#f80" />
																	<path id="Path_12132" data-name="Path 12132"
																		d="M297.372,484.486a23.605,23.605,0,0,1-2.371.582.844.844,0,0,0,.317,1.658,25.026,25.026,0,0,0,2.542-.625.844.844,0,0,0-.488-1.615Z"
																		transform="translate(-265.349 -461.903)"
																		fill="#f80" />
																	<path id="Path_12133" data-name="Path 12133"
																		d="M246.708,494c-.675.057-1.366.084-2.055.084h-.386a.874.874,0,0,0-.86.829.844.844,0,0,0,.829.859h.417c.738,0,1.477-.033,2.194-.095a.844.844,0,1,0-.1-1.685l-.046,0Z"
																		transform="translate(-219.474 -470.493)"
																		fill="#f80" />
																	<path id="Path_12134" data-name="Path 12134"
																		d="M345.851,464.711a23.863,23.863,0,0,1-2.2,1.062.844.844,0,1,0,.635,1.565l.019-.008a25.442,25.442,0,0,0,2.356-1.138.844.844,0,0,0-.81-1.481Z"
																		transform="translate(-309.331 -444.017)"
																		fill="#f80" />
																</g>
																<g id="Group_2816" data-name="Group 2816"
																	transform="translate(7.737 7.595)">
																	<path id="Path_12135" data-name="Path 12135"
																		d="M94.528,76.807a17.721,17.721,0,1,0,17.721,17.721A17.72,17.72,0,0,0,94.528,76.807Zm.844,33.71v-2.488a.844.844,0,1,0-1.688,0v2.488A16.026,16.026,0,0,1,78.538,95.371h2.488a.844.844,0,1,0,0-1.688H78.538A16.026,16.026,0,0,1,93.684,78.538v2.488a.844.844,0,1,0,1.688,0V78.538a16.026,16.026,0,0,1,15.146,15.146h-2.488a.844.844,0,0,0,0,1.688h2.488A16.026,16.026,0,0,1,95.371,110.517Z"
																		transform="translate(-76.807 -76.807)"
																		fill="#231f20" />
																	<path id="Path_12136" data-name="Path 12136"
																		d="M187.644,153.666v-7.75a.844.844,0,0,0-1.688,0v7.75a2.533,2.533,0,0,0-1.532,1.532H180.05a.844.844,0,1,0,0,1.688h4.374a2.525,2.525,0,1,0,3.22-3.22Zm-.844,3.22a.844.844,0,1,1,.844-.844A.844.844,0,0,1,186.8,156.886Z"
																		transform="translate(-169.08 -138.321)"
																		fill="#231f20" />
																</g>
															</g>
														</svg>
														<h5>24/7 EVERYTHING!</h5>
														<p>24/7 Support & Engineering Staff</p>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="hover-info-box">
														<svg xmlns="http://www.w3.org/2000/svg" width="53.962"
															height="49.534" viewBox="0 0 53.962 49.534">
															<g id="key" transform="translate(0 -21.005)">
																<g id="Group_2819" data-name="Group 2819"
																	transform="translate(1.054 22.059)">
																	<path id="Path_12137" data-name="Path 12137"
																		d="M99.733,296.516h0l7.153-4.747a6.331,6.331,0,0,1,8.643,1.62L92.765,310.135l-18.292-3.689H70v-9.474l4.473-3.162,1.638-1.441a9.484,9.484,0,0,1,12.532,0,4.093,4.093,0,0,0,2.832,1.429h5.13A3.169,3.169,0,0,1,99.733,296.516Z"
																		transform="translate(-63.677 -262.709)"
																		fill="#fff" />
																	<path id="Path_12138" data-name="Path 12138"
																		d="M120.9,40.49l-6.323,3.162H94.431a9.485,9.485,0,1,1,0-6.323h4.334l3.162-3.162,3.162,3.162,3.162-3.162,3.162,3.162,3.162-3.162Zm-32.25,0a3.162,3.162,0,1,0-3.162,3.162A3.162,3.162,0,0,0,88.647,40.49Z"
																		transform="translate(-69.044 -31.005)"
																		fill="#f80" />
																	<path id="Path_12139" data-name="Path 12139"
																		d="M16.323,346.814H10V331.005h6.323Z"
																		transform="translate(-10 -299.388)"
																		fill="#f80" />
																</g>
																<g id="Group_2820" data-name="Group 2820"
																	transform="translate(0 21.005)">
																	<path id="Path_12140" data-name="Path 12140"
																		d="M126,85.221a4.216,4.216,0,1,0,4.216-4.216A4.22,4.22,0,0,0,126,85.221Zm6.323,0a2.108,2.108,0,1,1-2.108-2.108A2.11,2.11,0,0,1,132.323,85.221Z"
																		transform="translate(-112.721 -74.682)" />
																	<path id="Path_12141" data-name="Path 12141"
																		d="M66,31.544A10.541,10.541,0,0,0,86.2,35.76h19.426a1.052,1.052,0,0,0,.471-.111l6.323-3.162A1.054,1.054,0,0,0,112.7,30.8l-6.323-6.323a1.054,1.054,0,0,0-1.491,0l-2.416,2.417-2.417-2.417a1.054,1.054,0,0,0-1.491,0l-2.416,2.417-2.417-2.417a1.054,1.054,0,0,0-1.491,0l-2.853,2.853H86.2A10.541,10.541,0,0,0,66,31.544Zm18.491-2.81a1.054,1.054,0,0,0,.994.7h4.334a1.054,1.054,0,0,0,.745-.309l2.417-2.416L95.4,29.128a1.054,1.054,0,0,0,1.491,0L99.3,26.711l2.417,2.417a1.054,1.054,0,0,0,1.491,0l2.416-2.417,4.544,4.544-4.793,2.4H85.485a1.054,1.054,0,0,0-.994.7,8.431,8.431,0,1,1,0-5.621Z"
																		transform="translate(-59.044 -21.005)" />
																	<circle id="Ellipse_840" data-name="Ellipse 840"
																		cx="1" cy="1" r="1"
																		transform="translate(40 39.001)" />
																	<path id="Path_12142" data-name="Path 12142"
																		d="M43.682,282.011l-6.033,4a4.237,4.237,0,0,0-3.666-2.149h-5.13a2.1,2.1,0,0,1-1.393-.513l-.743-.653a10.56,10.56,0,0,0-13.924,0l-1.6,1.4-2.765,1.954v-.611a1.054,1.054,0,0,0-1.054-1.054H1.054A1.054,1.054,0,0,0,0,285.446v15.809a1.054,1.054,0,0,0,1.054,1.054H7.377a1.054,1.054,0,0,0,1.054-1.054V298.62h3.314l18.189,3.668a1.054,1.054,0,0,0,.833-.184l7.354-5.409a1.054,1.054,0,1,0-1.249-1.7l-6.978,5.133-17.835-3.6a1.054,1.054,0,0,0-.208-.021H8.431v-7.874c4.5-3.185,3.729-2.535,5.753-4.357a8.448,8.448,0,0,1,11.14,0l.743.653a4.208,4.208,0,0,0,2.785,1.038h5.131a2.108,2.108,0,1,1,0,4.216H21.336a1.054,1.054,0,1,0,0,2.108H33.982a4.214,4.214,0,0,0,4.213-4.115l6.648-4.412a5.257,5.257,0,0,1,6.523.564l-6.858,5.044a1.054,1.054,0,0,0,1.249,1.7l7.774-5.718a1.054,1.054,0,0,0,.235-1.46A7.36,7.36,0,0,0,43.682,282.011ZM6.323,300.2H2.108V286.5H6.323Z"
																		transform="translate(0 -252.774)" />
																</g>
															</g>
														</svg>
														<h5>PRIVATE CLOUD AVAILABLE!</h5>
														<p>Contact us for a custom quote.</p>
													</div>
												</div>

												<div class="col-lg-3 col-sm-6 col-12">
													<div class="hover-info-box">
														<svg xmlns="http://www.w3.org/2000/svg" width="50.8"
															height="50.8" viewBox="0 0 50.8 50.8">
															<g id="database" transform="translate(-1 -1)">
																<g id="Group_2821" data-name="Group 2821"
																	transform="translate(13.29 44.426)">
																	<rect id="Rectangle_1518"
																		data-name="Rectangle 1518" width="10"
																		height="4"
																		transform="translate(-0.29 -0.426)"
																		fill="#f80" />
																</g>
																<g id="Group_2822" data-name="Group 2822"
																	transform="translate(13.29 14.929)">
																	<rect id="Rectangle_1519"
																		data-name="Rectangle 1519" width="10"
																		height="3" transform="translate(-0.29 0.07)"
																		fill="#f80" />
																</g>
																<g id="Group_2823" data-name="Group 2823"
																	transform="translate(13.29 29.677)">
																	<rect id="Rectangle_1520"
																		data-name="Rectangle 1520" width="10"
																		height="3"
																		transform="translate(-0.29 0.322)"
																		fill="#f80" />
																</g>
																<g id="Group_2824" data-name="Group 2824"
																	transform="translate(1 10.832)">
																	<path id="Path_12143" data-name="Path 12143"
																		d="M45.458,57.916A2.458,2.458,0,1,0,43,55.458,2.461,2.461,0,0,0,45.458,57.916Zm0-3.277a.819.819,0,1,1-.819.819A.82.82,0,0,1,45.458,54.639Z"
																		transform="translate(-8.587 -20.226)" />
																	<path id="Path_12144" data-name="Path 12144"
																		d="M26.471,53H15v4.916H26.471Zm-4.916,1.639v1.639H19.916V54.639Zm-4.916,0h1.639v1.639H16.639Zm8.194,1.639H23.194V54.639h1.639Z"
																		transform="translate(-3.529 -20.226)" />
																	<path id="Path_12145" data-name="Path 12145"
																		d="M26.471,21.916V17H15v4.916Zm-6.555-1.639V18.639h1.639v1.639Zm4.916,0H23.194V18.639h1.639Zm-8.194-1.639h1.639v1.639H16.639Z"
																		transform="translate(-3.529 -13.723)" />
																	<path id="Path_12146" data-name="Path 12146"
																		d="M41.148,39.219a2.461,2.461,0,0,0,2.458-2.458V30.206a2.461,2.461,0,0,0-2.458-2.458H14.11V24.471H28.683V22.832H11.652a.82.82,0,0,1-.819-.819V15.458a.82.82,0,0,1,.819-.819H26.4V13H11.652a2.461,2.461,0,0,0-2.458,2.458v6.555a2.461,2.461,0,0,0,2.458,2.458h.819v3.277h-.819a2.461,2.461,0,0,0-2.458,2.458v.819H4.277V17.765a2.458,2.458,0,1,0-1.639,0v14.9H9.194V34.3H2.639V49.2a2.458,2.458,0,1,0,1.639,0V35.942H9.194v.819a2.461,2.461,0,0,0,2.458,2.458h.819V42.5h-.819a2.461,2.461,0,0,0-2.458,2.458V51.51a2.461,2.461,0,0,0,2.458,2.458h29.5a2.461,2.461,0,0,0,2.458-2.458V44.955A2.461,2.461,0,0,0,41.148,42.5h-.819V39.219ZM3.458,14.639a.819.819,0,1,1-.819.819A.82.82,0,0,1,3.458,14.639Zm0,37.69a.819.819,0,1,1,.819-.819A.82.82,0,0,1,3.458,52.329Zm7.374-15.568V30.206a.82.82,0,0,1,.819-.819h29.5a.82.82,0,0,1,.819.819v6.555a.82.82,0,0,1-.819.819h-29.5A.82.82,0,0,1,10.832,36.761Zm31.135,8.194V51.51a.82.82,0,0,1-.819.819h-29.5a.82.82,0,0,1-.819-.819V44.955a.82.82,0,0,1,.819-.819h29.5A.82.82,0,0,1,41.968,44.955ZM38.69,42.5H14.11V39.219H38.69Z"
																		transform="translate(-1 -13)" />
																	<path id="Path_12147" data-name="Path 12147"
																		d="M45.458,35a2.458,2.458,0,1,0,2.458,2.458A2.461,2.461,0,0,0,45.458,35Zm0,3.277a.819.819,0,1,1,.819-.819A.82.82,0,0,1,45.458,38.277Z"
																		transform="translate(-8.587 -16.974)" />
																	<path id="Path_12148" data-name="Path 12148"
																		d="M15,39.916H26.471V35H15Zm4.916-1.639V36.639h1.639v1.639Zm4.916,0H23.194V36.639h1.639Zm-8.194-1.639h1.639v1.639H16.639Z"
																		transform="translate(-3.529 -16.974)" />
																</g>
																<g id="Group_2825" data-name="Group 2825"
																	transform="translate(25.581 1)">
																	<path id="Path_12149" data-name="Path 12149"
																		d="M57.219,17.2V11.021L54,10.171c-.035-.088-.072-.178-.111-.265l1.678-2.881L51.195,2.656,48.314,4.334c-.088-.039-.177-.075-.265-.111L47.2,1H41.021l-.85,3.223c-.088.035-.178.072-.265.111L37.025,2.656,32.656,7.025l1.678,2.881c-.039.088-.075.177-.111.265L31,11.02V17.2l3.223.85c.035.088.072.178.111.265l-1.678,2.881,4.369,4.369,2.881-1.678c.088.039.177.075.265.111l.849,3.223H47.2L48.048,24c.088-.035.178-.072.265-.111l2.881,1.678,4.369-4.369-1.678-2.881c.039-.088.075-.177.111-.265ZM44.11,20.664a6.555,6.555,0,1,1,6.555-6.555A6.555,6.555,0,0,1,44.11,20.664Z"
																		transform="translate(-31 -1)" fill="#f80" />
																</g>
																<g id="Group_2826" data-name="Group 2826"
																	transform="translate(31.316 6.735)">
																	<path id="Path_12150" data-name="Path 12150"
																		d="M45.374,22.748a7.374,7.374,0,1,1,7.374-7.374A7.383,7.383,0,0,1,45.374,22.748Zm0-13.11a5.735,5.735,0,1,0,5.735,5.735A5.742,5.742,0,0,0,45.374,9.639Z"
																		transform="translate(-38 -8)" />
																</g>
																<g id="Group_2827" data-name="Group 2827"
																	transform="translate(34.593 10.013)">
																	<path id="Path_12151" data-name="Path 12151"
																		d="M46.1,20.194a4.1,4.1,0,1,1,4.1-4.1A4.1,4.1,0,0,1,46.1,20.194Zm0-6.555A2.458,2.458,0,1,0,48.555,16.1,2.461,2.461,0,0,0,46.1,13.639Z"
																		transform="translate(-42 -12)" />
																</g>
															</g>
														</svg>
														<h5>CUSTOM SERVERS AVAILABLE!</h5>
														<p>Max. 12 Hours Provisioning Guaranteed</p>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="hover-info-box">
														<svg xmlns="http://www.w3.org/2000/svg" width="50.8"
															height="50.8" viewBox="0 0 50.8 50.8">
															<g id="speedometer" transform="translate(-0.001)">
																<path id="Path_12152" data-name="Path 12152"
																	d="M13.175,34.408a21.233,21.233,0,1,1,6.219,15.014,21.166,21.166,0,0,1-6.219-15.014Zm45.641,0A24.408,24.408,0,1,0,34.408,58.816,24.408,24.408,0,0,0,58.816,34.408Zm0,0"
																	transform="translate(-9.007 -9.008)"
																	fill="#fff" />
																<path id="Path_12153" data-name="Path 12153"
																	d="M52.428,108.889l-4.209-4.209a21.232,21.232,0,0,0,0,30.028l4.209-4.209a15.28,15.28,0,0,1,0-21.609Zm0,0"
																	transform="translate(-37.832 -94.293)"
																	fill="#f80" />
																<path id="Path_12154" data-name="Path 12154"
																	d="M104.68,48.219l4.209,4.209a15.28,15.28,0,0,1,21.609,0l4.209-4.209a21.232,21.232,0,0,0-30.028,0Zm0,0"
																	transform="translate(-94.293 -37.833)"
																	fill="#ffba4a" />
																<path id="Path_12155" data-name="Path 12155"
																	d="M364.895,108.886a15.28,15.28,0,0,1,0,21.609L369.1,134.7a21.233,21.233,0,0,0,0-30.028Zm0,0"
																	transform="translate(-328.69 -94.29)"
																	fill="#f80" />
																<path id="Path_12156" data-name="Path 12156"
																	d="M128.084,128.084a15.28,15.28,0,1,0-21.609,0l-4.209,4.209a21.233,21.233,0,0,0,30.028,0ZM113.907,126.5h6.747a1.588,1.588,0,1,1,0,3.175h-6.747a1.588,1.588,0,1,1,0-3.175Zm0,0"
																	transform="translate(-91.879 -91.88)"
																	fill="#fff" />
																<path id="Path_12157" data-name="Path 12157"
																	d="M214.334,348.9h-6.747a1.587,1.587,0,1,0,0,3.175h6.747a1.587,1.587,0,1,0,0-3.175Zm0,0"
																	transform="translate(-185.56 -314.278)"
																	fill="#fff" />
																<path id="Path_12158" data-name="Path 12158"
																	d="M78.563,238.1l17.605-1.962a1.962,1.962,0,1,1,0,3.925Zm0,0"
																	transform="translate(-70.767 -212.697)"
																	fill="#fff" />
																<path id="Path_12159" data-name="Path 12159"
																	d="M43.361,7.439A25.4,25.4,0,0,0,11.308,4.268a.992.992,0,0,0,1.1,1.651,23.415,23.415,0,1,1-5.143,4.668A.992.992,0,0,0,5.73,9.331,25.4,25.4,0,1,0,43.361,7.439Zm0,0" />
																<path id="Path_12160" data-name="Path 12160"
																	d="M69.972,38.545c-.011-.012-.021-.024-.032-.035l-.025-.022a22.223,22.223,0,0,0-31.406.022h0a22.225,22.225,0,0,0,0,31.43h0a22.225,22.225,0,0,0,31.429,0v0h0a22.225,22.225,0,0,0,5.751-21.467.992.992,0,0,0-1.917.514,20.211,20.211,0,0,1-4.561,18.825l-2.8-2.8a16.27,16.27,0,0,0,0-21.565l2.81-2.81a20.2,20.2,0,0,1,1.6,2.008.992.992,0,0,0,1.627-1.136,22.226,22.226,0,0,0-2.478-2.961Zm-2.156.686-2.809,2.809a16.27,16.27,0,0,0-21.565,0l-2.8-2.8a20.217,20.217,0,0,1,27.178-.005ZM39.235,40.638l2.8,2.8a16.132,16.132,0,0,0-4.046,9.631l-1.483.165a.992.992,0,0,0,0,1.972l1.483.165a16.132,16.132,0,0,0,4.046,9.631l-2.8,2.8a20.2,20.2,0,0,1,0-27.174Zm28.506,8.938-1.154.309A.992.992,0,0,0,67.1,51.8l1.151-.309a14.476,14.476,0,0,1,0,5.463L67.1,56.648a.992.992,0,0,0-.514,1.917l1.154.309A14.179,14.179,0,0,1,65,63.6l-.841-.841a.992.992,0,1,0-1.4,1.4l5.05,5.05a20.2,20.2,0,0,1-27.174,0l5.05-5.05a.992.992,0,0,0-1.4-1.4l-.841.84a14.187,14.187,0,0,1-2.737-4.728l1.155-.309a.992.992,0,0,0-.514-1.917l-1.151.309q-.129-.67-.195-1.356l14.112,1.573a2.59,2.59,0,0,0,2.05-.677,3.05,3.05,0,0,0,0-4.543,2.615,2.615,0,0,0-2.05-.677L40,52.849q.065-.685.195-1.356l1.151.309a.992.992,0,1,0,.514-1.917l-1.154-.309a14.179,14.179,0,0,1,2.737-4.728l.841.841a.992.992,0,0,0,1.4-1.4l-.841-.841a14.192,14.192,0,0,1,4.728-2.737l.309,1.155a.992.992,0,0,0,1.917-.514L51.492,40.2a14.474,14.474,0,0,1,5.463,0l-.309,1.151a.992.992,0,1,0,1.917.514l.309-1.154A14.173,14.173,0,0,1,63.6,43.445l-.84.841a.992.992,0,1,0,1.4,1.4L65,44.848a14.173,14.173,0,0,1,2.737,4.728ZM45.576,54.225l8.758-.976a.656.656,0,0,1,.507.184,1.066,1.066,0,0,1,0,1.585.658.658,0,0,1-.507.184Zm0,0"
																	transform="translate(-28.824 -28.825)" />
																<path id="Path_12161" data-name="Path 12161"
																	d="M205.327,338.9H198.58a2.58,2.58,0,1,0,0,5.159h6.747a2.58,2.58,0,1,0,0-5.159Zm0,3.175H198.58a.6.6,0,1,1,0-1.191h6.747a.6.6,0,1,1,0,1.191Zm0,0"
																	transform="translate(-176.553 -305.27)" />
																<path id="Path_12162" data-name="Path 12162"
																	d="M245.028,400.895h-4.071a.992.992,0,0,0,0,1.984h4.071a.992.992,0,0,0,0-1.984Zm0,0"
																	transform="translate(-216.155 -361.119)" />
																<path id="Path_12163" data-name="Path 12163"
																	d="M212.015,400.895h-.023a.992.992,0,0,0,0,1.984h.023a.992.992,0,0,0,0-1.984Zm0,0"
																	transform="translate(-190.064 -361.119)" />
																<path id="Path_12164" data-name="Path 12164"
																	d="M76.3,70.809a.994.994,0,0,0,.69-.278l.011-.01a.992.992,0,0,0-1.386-1.42l-.011.01a.991.991,0,0,0,.7,1.7Zm0,0"
																	transform="translate(-67.835 -61.994)" />
																<path id="Path_12165" data-name="Path 12165"
																	d="M436.927,149.479a1,1,0,0,0,.69-.277l.011-.01a.992.992,0,0,0-1.386-1.42l-.011.01a.991.991,0,0,0,.7,1.7Zm0,0"
																	transform="translate(-392.681 -132.859)" />
															</g>
														</svg>


														<h5>EXTREME SPEED!</h5>
														<p>10GBit/s Servers available!</p>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="hover-info-box">
														<svg xmlns="http://www.w3.org/2000/svg" width="50.802"
															height="50.802" viewBox="0 0 50.802 50.802">
															<g id="group" transform="translate(0 -0.001)">
																<g id="Group_2830" data-name="Group 2830"
																	transform="translate(0.846 0.847)">
																	<path id="Path_12166" data-name="Path 12166"
																		d="M139.029,124.32a14.394,14.394,0,0,1-14.394,14.394,12.509,12.509,0,0,1-1.27-.059,14.394,14.394,0,0,1,0-28.67,12.509,12.509,0,0,1,1.27-.059A14.394,14.394,0,0,1,139.029,124.32Z"
																		transform="translate(-100.08 -99.765)"
																		fill="#a4c2f7" />
																	<ellipse id="Ellipse_841"
																		data-name="Ellipse 841" cx="14.624"
																		cy="14.335" rx="14.624" ry="14.335"
																		transform="translate(10.161 10.22)"
																		fill="#fff" />
																	<g id="Group_2828" data-name="Group 2828"
																		transform="translate(0)">
																		<path id="Path_12167" data-name="Path 12167"
																			d="M227.633,10.912a3.387,3.387,0,0,1-3.387,3.387,3.18,3.18,0,0,1-1.27-.254,3.377,3.377,0,0,1,0-6.266,3.18,3.18,0,0,1,1.27-.254A3.387,3.387,0,0,1,227.633,10.912Z"
																			transform="translate(-199.691 -7.525)"
																			fill="#fff" />
																		<path id="Path_12168" data-name="Path 12168"
																			d="M227.633,437.578a3.387,3.387,0,0,1-3.387,3.387,3.181,3.181,0,0,1-1.27-.254,3.377,3.377,0,0,1,0-6.266,3.181,3.181,0,0,1,1.27-.254A3.387,3.387,0,0,1,227.633,437.578Z"
																			transform="translate(-199.691 -391.855)"
																			fill="#fff" />
																		<path id="Path_12169" data-name="Path 12169"
																			d="M381.233,53.578a3.387,3.387,0,0,1-3.387,3.387,3.18,3.18,0,0,1-1.27-.254,3.377,3.377,0,0,1,0-6.266,3.18,3.18,0,0,1,1.27-.254,3.387,3.387,0,0,1,3.387,3.387Z"
																			transform="translate(-338.05 -45.957)"
																			fill="#fff" />
																		<path id="Path_12170" data-name="Path 12170"
																			d="M56.966,377.845a3.387,3.387,0,0,1-3.387,3.387,3.181,3.181,0,0,1-1.27-.254,3.377,3.377,0,0,1,0-6.266,3.181,3.181,0,0,1,1.27-.254A3.387,3.387,0,0,1,56.966,377.845Z"
																			transform="translate(-45.958 -338.049)"
																			fill="#fff" />
																		<path id="Path_12171" data-name="Path 12171"
																			d="M440.966,224.245a3.387,3.387,0,0,1-3.387,3.387,3.18,3.18,0,0,1-1.27-.254,3.377,3.377,0,0,1,0-6.266,3.18,3.18,0,0,1,1.27-.254,3.387,3.387,0,0,1,3.387,3.387Z"
																			transform="translate(-391.856 -199.69)"
																			fill="#fff" />
																		<path id="Path_12172" data-name="Path 12172"
																			d="M14.3,224.245a3.387,3.387,0,0,1-3.387,3.387,3.18,3.18,0,0,1-1.27-.254,3.377,3.377,0,0,1,0-6.266,3.18,3.18,0,0,1,1.27-.254A3.387,3.387,0,0,1,14.3,224.245Z"
																			transform="translate(-7.525 -199.69)"
																			fill="#fff" />
																	</g>
																	<g id="Group_2829" data-name="Group 2829"
																		transform="translate(0 0.254)">
																		<ellipse id="Ellipse_842"
																			data-name="Ellipse 842" cx="2.117"
																			cy="3.133" rx="2.117" ry="3.133"
																			transform="translate(21.168)"
																			fill="#fff" />
																		<ellipse id="Ellipse_843"
																			data-name="Ellipse 843" cx="2.117"
																			cy="3.133" rx="2.117" ry="3.133"
																			transform="translate(21.168 42.336)"
																			fill="#fff" />
																		<ellipse id="Ellipse_844"
																			data-name="Ellipse 844" cx="2.117"
																			cy="3.133" rx="2.117" ry="3.133"
																			transform="translate(36.409 4.234)"
																			fill="#fff" />
																		<ellipse id="Ellipse_845"
																			data-name="Ellipse 845" cx="2.117"
																			cy="3.133" rx="2.117" ry="3.133"
																			transform="translate(4.234 36.409)"
																			fill="#fff" />
																		<ellipse id="Ellipse_846"
																			data-name="Ellipse 846" cx="2.117"
																			cy="3.133" rx="2.117" ry="3.133"
																			transform="translate(42.336 21.168)"
																			fill="#fff" />
																		<ellipse id="Ellipse_847"
																			data-name="Ellipse 847" cx="2.117"
																			cy="3.133" rx="2.117" ry="3.133"
																			transform="translate(0 21.168)"
																			fill="#fff" />
																	</g>
																	<path id="Path_12173" data-name="Path 12173"
																		d="M193.432,238.711v6.322a4.924,4.924,0,0,1-5.08,4.742h-5.08a4.924,4.924,0,0,1-5.08-4.742v-6.322a.822.822,0,0,1,.847-.79h13.548A.822.822,0,0,1,193.432,238.711Z"
																		transform="translate(-161.257 -215.06)"
																		fill="#a4c2f7" />
																	<path id="Path_12174" data-name="Path 12174"
																		d="M193.432,238.711v6.322c-.119,2.71-2.844,4.83-6.1,4.742h-3.048c-3.252.088-5.978-2.032-6.1-4.742v-6.322a.93.93,0,0,1,1.016-.79h13.208A.93.93,0,0,1,193.432,238.711Z"
																		transform="translate(-161.257 -215.06)"
																		fill="#f80" />
																	<circle id="Ellipse_848" data-name="Ellipse 848"
																		cx="1.693" cy="1.693" r="1.693"
																		transform="translate(22.861 26.248)"
																		fill="#f80" />
																</g>
																<path id="Path_12175" data-name="Path 12175"
																	d="M124.364,139.654a12.509,12.509,0,0,0,1.27.059c.423,0,.833-.028,1.244-.063a14.39,14.39,0,0,1,0-28.663c-.411-.035-.82-.063-1.244-.063a12.509,12.509,0,0,0-1.27.059,14.394,14.394,0,0,0,0,28.67Z"
																	transform="translate(-100.234 -99.917)"
																	fill="#fff" />
																<g id="Group_2831" data-name="Group 2831"
																	transform="translate(0 0.001)">
																	<path id="Path_12176" data-name="Path 12176"
																		d="M185.9,145.839V143.3a6.774,6.774,0,0,0-13.548,0v2.54a1.693,1.693,0,0,0-1.693,1.693v5.927a5.935,5.935,0,0,0,5.927,5.927h5.08a5.935,5.935,0,0,0,5.927-5.927v-5.927A1.693,1.693,0,0,0,185.9,145.839Zm-11.854-2.54a5.08,5.08,0,0,1,10.161,0v2.54H174.044Zm7.621,14.394h-5.08a4.241,4.241,0,0,1-4.149-3.387h.762a.847.847,0,1,0,0-1.693h-.847v-1.693h.847a.847.847,0,1,0,0-1.693h-.847v-1.693H185.9v1.693h-.847a.847.847,0,1,0,0,1.693h.847v1.693h-.847a.847.847,0,1,0,0,1.693h.762A4.241,4.241,0,0,1,181.664,157.693Z"
																		transform="translate(-153.723 -122.978)" />
																	<path id="Path_12177" data-name="Path 12177"
																		d="M232.94,264.525a2.534,2.534,0,0,0-.847,4.925v1a.847.847,0,0,0,1.693,0v-1a2.534,2.534,0,0,0-.847-4.925Zm0,3.387a.847.847,0,1,1,.847-.847A.847.847,0,0,1,232.94,267.912Z"
																		transform="translate(-207.539 -238.277)" />
																	<path id="Path_12178" data-name="Path 12178"
																		d="M46.569,21.168a4.241,4.241,0,0,0-4.149,3.387H40.6a15.18,15.18,0,0,0-4.686-10.161l2.4-2.4a4.246,4.246,0,1,0-1.2-1.2l-2.494,2.494a15.143,15.143,0,0,0-8.372-3.09V8.383a4.234,4.234,0,1,0-1.694,0V10.2A15.236,15.236,0,0,0,10.2,24.555H8.382a4.234,4.234,0,1,0,0,1.693H10.2a15.142,15.142,0,0,0,3.089,8.372L10.8,37.115a4.246,4.246,0,1,0,1.2,1.2l2.4-2.4A15.18,15.18,0,0,0,24.554,40.6v1.821a4.234,4.234,0,1,0,1.694,0V40.6A15.236,15.236,0,0,0,40.6,26.249H42.42a4.234,4.234,0,1,0,4.149-5.081ZM40.642,5.927a2.54,2.54,0,1,1-2.54,2.54A2.54,2.54,0,0,1,40.642,5.927ZM8.466,43.183a2.54,2.54,0,1,1,2.54-2.54A2.54,2.54,0,0,1,8.466,43.183ZM22.861,4.234a2.54,2.54,0,1,1,2.54,2.54A2.54,2.54,0,0,1,22.861,4.234ZM4.233,27.942a2.54,2.54,0,1,1,2.54-2.54A2.54,2.54,0,0,1,4.233,27.942ZM27.941,46.57a2.54,2.54,0,1,1-2.54-2.54A2.54,2.54,0,0,1,27.941,46.57ZM25.4,38.949A13.548,13.548,0,1,1,38.948,25.4,13.548,13.548,0,0,1,25.4,38.949ZM46.569,27.942a2.54,2.54,0,1,1,2.54-2.54A2.54,2.54,0,0,1,46.569,27.942Z"
																		transform="translate(0 -0.001)" />
																	<path id="Path_12179" data-name="Path 12179"
																		d="M248.624,35.847a.86.86,0,0,0,.279-.186.825.825,0,0,0,.178-.914.978.978,0,0,0-.178-.279.887.887,0,0,0-1.2,0,.978.978,0,0,0-.178.279.711.711,0,0,0-.068.322.848.848,0,0,0,.058.322,1.062,1.062,0,0,0,.187.271.771.771,0,0,0,.279.186A.8.8,0,0,0,248.624,35.847Z"
																		transform="translate(-222.902 -30.836)" />
																	<path id="Path_12180" data-name="Path 12180"
																		d="M462.237,247.8a.886.886,0,0,0-1.2,0,.978.978,0,0,0-.178.279.71.71,0,0,0-.068.322.848.848,0,0,0,.058.322,1.062,1.062,0,0,0,.187.271.77.77,0,0,0,.279.186.8.8,0,0,0,.643,0,.859.859,0,0,0,.279-.186.825.825,0,0,0,.178-.914A.978.978,0,0,0,462.237,247.8Z"
																		transform="translate(-415.067 -223)" />
																	<path id="Path_12181" data-name="Path 12181"
																		d="M35.571,247.8a.886.886,0,0,0-1.2,0,.978.978,0,0,0-.178.279.711.711,0,0,0-.068.322.848.848,0,0,0,.058.322,1.062,1.062,0,0,0,.187.271.77.77,0,0,0,.279.186.8.8,0,0,0,.643,0,.86.86,0,0,0,.279-.186.825.825,0,0,0,.178-.914A.979.979,0,0,0,35.571,247.8Z"
																		transform="translate(-30.737 -223)" />
																	<path id="Path_12182" data-name="Path 12182"
																		d="M78.237,401.292a.885.885,0,0,0-1.2,0,.967.967,0,0,0-.178.279.711.711,0,0,0-.068.322.847.847,0,0,0,.058.321,1.054,1.054,0,0,0,.187.272.771.771,0,0,0,.279.185.789.789,0,0,0,.643,0,.855.855,0,0,0,.279-.185.825.825,0,0,0,.178-.914A.963.963,0,0,0,78.237,401.292Z"
																		transform="translate(-69.169 -361.262)" />
																	<path id="Path_12183" data-name="Path 12183"
																		d="M247.7,461.134a.978.978,0,0,0-.178.279.711.711,0,0,0-.068.322.848.848,0,0,0,.058.322,1.062,1.062,0,0,0,.187.271.771.771,0,0,0,.279.186.8.8,0,0,0,.643,0,.86.86,0,0,0,.279-.186.825.825,0,0,0,.178-.914.978.978,0,0,0-.178-.279A.886.886,0,0,0,247.7,461.134Z"
																		transform="translate(-222.902 -415.166)" />
																	<path id="Path_12184" data-name="Path 12184"
																		d="M401.3,78.219a.77.77,0,0,0,.279.185.789.789,0,0,0,.643,0,.854.854,0,0,0,.279-.185.825.825,0,0,0,.178-.914.967.967,0,0,0-.178-.279.885.885,0,0,0-1.2,0,.967.967,0,0,0-.178.279.711.711,0,0,0-.068.322.847.847,0,0,0,.058.321A1.053,1.053,0,0,0,401.3,78.219Z"
																		transform="translate(-361.261 -69.17)" />
																</g>
															</g>
														</svg>
														<h5>DATA CENTER TO DATA CENTER!</h5>
														<p>10GBit/s Servers available!</p>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="hover-info-box">
														<svg id="laptop_1_" data-name="laptop (1)"
															xmlns="http://www.w3.org/2000/svg" width="50.733"
															height="50.733" viewBox="0 0 50.733 50.733">
															<path id="Path_12185" data-name="Path 12185"
																d="M251.822,22.912H224V0h27.822Zm-26.185-1.637h24.548V1.637H225.637Z"
																transform="translate(-201.088)" fill="#333" />
															<path id="Path_12186" data-name="Path 12186"
																d="M277.275,41.819H256V32h21.275Z"
																transform="translate(-229.815 -28.727)"
																fill="#ffa64d" />
															<g id="Group_2832" data-name="Group 2832"
																transform="translate(14.729 26.185)">
																<path id="Path_12187" data-name="Path 12187"
																	d="M180,260.91V256h-4.91v1.637H164.457V256h-4.91v1.637H148.91v1.637h10.638v1.637h4.91v-1.637h10.638v1.637h1.637v4.91h-1.637v4.91h1.637v4.91h-1.637v1.637H164.457v-1.637h-4.91v1.637H148.91v-1.637h-1.637v-4.91h1.637v-4.91h-1.637v-1.637h-1.637v1.637H144v4.91h1.637v4.91H144v4.91h4.91v-1.637h10.638v1.637h4.91v-1.637h10.638v1.637H180v-4.91h-1.637v-4.91H180v-4.91h-1.637v-4.91Zm-17.184-1.637h-1.637v-1.637h1.637Zm-17.184,8.183h1.637v1.637h-1.637Zm1.637,11.456h-1.637v-1.637h1.637Zm15.547,0h-1.637v-1.637h1.637Zm15.547,0h-1.637v-1.637h1.637Zm0-9.819h-1.637v-1.637h1.637Zm-1.637-9.819v-1.637h1.637v1.637Z"
																	transform="translate(-144 -256)" fill="#333" />
																<path id="Path_12188" data-name="Path 12188"
																	d="M267.5,333.32l1.491-1.491a4.9,4.9,0,0,0,6.838-6.838l1.491-1.491-1.157-1.157-1.491,1.491a4.9,4.9,0,0,0-6.838,6.838l-1.491,1.491Zm4.331-8.761a3.273,3.273,0,1,1-3.273,3.273A3.276,3.276,0,0,1,271.832,324.559Z"
																	transform="translate(-253.83 -315.558)"
																	fill="#333" />
															</g>
															<path id="Path_12189" data-name="Path 12189"
																d="M9.637,224,8,233.819,17,242h1.637l9-8.183L26,224Z"
																transform="translate(-7.182 -201.088)"
																fill="#ffa64d" />
															<g id="Group_2833" data-name="Group 2833">
																<path id="Path_12190" data-name="Path 12190"
																	d="M78.546,251.273a3.273,3.273,0,1,0-4.091,3.157v9.117h1.637V254.43A3.27,3.27,0,0,0,78.546,251.273Zm-3.273,1.637a1.637,1.637,0,1,1,1.637-1.637A1.638,1.638,0,0,1,75.273,252.91Z"
																	transform="translate(-64.635 -222.633)"
																	fill="#333" />
																<rect id="Rectangle_1521" data-name="Rectangle 1521"
																	width="1" height="2"
																	transform="translate(46 17.601)" fill="#333" />
																<rect id="Rectangle_1522" data-name="Rectangle 1522"
																	width="18" height="2"
																	transform="translate(26 17.601)" fill="#333" />
																<rect id="Rectangle_1523" data-name="Rectangle 1523"
																	width="21" height="2"
																	transform="translate(26 14.601)" fill="#333" />
																<path id="Path_12191" data-name="Path 12191"
																	d="M19.639,16.366V0h-18V16.366H0v6.546H21.275V16.366ZM3.273,14.729H14.729V13.092H3.273V1.637H18V13.092H16.366v1.637H18v1.637H3.273Zm16.366,6.546h-18V18h18Z"
																	fill="#333" />
															</g>
														</svg>
														<h5>HIGHEST STANDARDS!</h5>
														<p>Tier-III & Tier-IV Data Center Locations</p>
													</div>
												</div>

												<div class="col-lg-3 col-sm-6 col-12">
													<div class="hover-info-box">
														<svg xmlns="http://www.w3.org/2000/svg" width="49.453"
															height="49.452" viewBox="0 0 49.453 49.452">
															<g id="innovation" transform="translate(0 0.001)">
																<path id="Path_12192" data-name="Path 12192"
																	d="M290.6,2.835a11.167,11.167,0,0,0-18.5,6.812,11.091,11.091,0,0,0,3.369,9.6,4.279,4.279,0,0,1,1.119,1.744l13.155,0a4.184,4.184,0,0,1,1.1-1.723,11.053,11.053,0,0,0,3.489-8.1,11.181,11.181,0,0,0-3.73-8.33Zm-2.651,10.723h-2.712l-.479,7.179h-3.19l-.479-7.179h-2.712a2.393,2.393,0,0,1,0-4.786h.154a2.392,2.392,0,0,1,2.387,2.233l.171,2.553h4.148l.171-2.553a2.392,2.392,0,0,1,2.387-2.233h.154a2.393,2.393,0,0,1,0,4.786Zm0,0"
																	transform="translate(-244.873)" fill="#f80" />
																<path id="Path_12193" data-name="Path 12193"
																	d="M90.322,167.964h-1.6a1.591,1.591,0,0,1-.688-3.028l-.015-.014a13.56,13.56,0,1,0,3.1,8.626v-2.94a4.762,4.762,0,0,1-.8-2.643ZM77.56,181.524a7.976,7.976,0,1,1,7.976-7.976A7.976,7.976,0,0,1,77.56,181.524Zm0,0"
																	transform="translate(-57.619 -144.037)"
																	fill="#f80" />
																<path id="Path_12194" data-name="Path 12194"
																	d="M45.465,91.952H40.734l.373-5.583h1.965a3.191,3.191,0,1,0,0-6.381h-.154a3.2,3.2,0,0,0-3.184,2.978l-.12,1.808H36.958l-.12-1.808a3.2,3.2,0,0,0-3.184-2.978H33.5a3.191,3.191,0,1,0,0,6.381h1.965l.373,5.583H31.108a2.393,2.393,0,0,0,0,4.786h.862a5.587,5.587,0,0,0,5.52,4.786h.8V104.1l-2.747.726-.112.462a15.78,15.78,0,0,1-1.876,4.523l-.248.406,1.43,2.458-3.642,3.643-2.458-1.43-.406.248a15.867,15.867,0,0,1-4.524,1.876l-.462.111-.726,2.746H17.365l-.726-2.747-.462-.111a15.843,15.843,0,0,1-4.524-1.876l-.406-.248-2.458,1.43-3.642-3.643,1.43-2.458-.247-.4a15.825,15.825,0,0,1-1.876-4.523l-.112-.462L1.6,104.1V98.948l2.747-.726.112-.462A15.785,15.785,0,0,1,6.33,93.237l.248-.406-1.43-2.457L8.79,86.729l2.458,1.43.406-.248a15.833,15.833,0,0,1,4.524-1.876l.462-.112.726-2.745h5.152l.726,2.747.462.112a15.814,15.814,0,0,1,4.457,1.838,10.934,10.934,0,0,1-.764-2.207,17.452,17.452,0,0,0-2.853-1.062l-.8-3.023h-7.61l-.8,3.023a17.413,17.413,0,0,0-4.1,1.7l-2.7-1.574L3.15,90.115l1.574,2.7a17.376,17.376,0,0,0-1.7,4.1L0,97.719v7.609l3.023.8a17.4,17.4,0,0,0,1.7,4.1l-1.574,2.7,5.38,5.381,2.7-1.574a17.411,17.411,0,0,0,4.1,1.7l.8,3.022h7.61l.8-3.023a17.457,17.457,0,0,0,4.1-1.7l2.7,1.574,5.38-5.381-1.574-2.7a17.382,17.382,0,0,0,1.7-4.1l3.023-.8V101.46A5.587,5.587,0,0,0,44.6,96.738h.861a2.393,2.393,0,1,0,0-4.786Zm-4.138-8.88a1.6,1.6,0,0,1,1.591-1.489h.154a1.6,1.6,0,1,1,0,3.191H41.213Zm-7.826,1.7a1.6,1.6,0,0,1,0-3.191h.154a1.6,1.6,0,0,1,1.591,1.489l.114,1.7Zm3.565,1.6h2.442l-.372,5.583h-1.7Zm2.019,13.56h-1.6a4,4,0,0,1-3.908-3.191h9.41A4,4,0,0,1,39.084,99.929Zm6.381-4.786H31.108a.8.8,0,1,1,0-1.6H45.465a.8.8,0,1,1,0,1.6Zm0,0"
																	transform="translate(0 -72.013)" />
																<path id="Path_12195" data-name="Path 12195"
																	d="M129.548,216.762a8.774,8.774,0,1,0-8.774,8.774A8.784,8.784,0,0,0,129.548,216.762Zm-8.774,7.179a7.179,7.179,0,1,1,7.179-7.179A7.187,7.187,0,0,1,120.774,223.941Zm0,0"
																	transform="translate(-100.833 -187.251)" />
																<path id="Path_12196" data-name="Path 12196"
																	d="M192,127.988h1.6v1.6H192Zm0,0"
																	transform="translate(-172.857 -115.228)" />
																<path id="Path_12197" data-name="Path 12197"
																	d="M75.563,172.671l1.128-1.128,1.128,1.128L76.69,173.8Zm0,0"
																	transform="translate(-68.028 -154.44)" />
																<path id="Path_12198" data-name="Path 12198"
																	d="M32,287.988h1.6v1.6H32Zm0,0"
																	transform="translate(-28.809 -259.275)" />
																<path id="Path_12199" data-name="Path 12199"
																	d="M75.574,398.949l1.128-1.128,1.129,1.128L76.7,400.077Zm0,0"
																	transform="translate(-68.039 -358.157)" />
																<path id="Path_12200" data-name="Path 12200"
																	d="M192,447.988h1.6v1.6H192Zm0,0"
																	transform="translate(-172.857 -403.322)" />
																<path id="Path_12201" data-name="Path 12201"
																	d="M301.852,398.944l1.129-1.128,1.128,1.129-1.128,1.128Zm0,0"
																	transform="translate(-271.756 -358.153)" />
																<path id="Path_12202" data-name="Path 12202"
																	d="M144,245.571h1.6a3.993,3.993,0,0,1,3.988-3.988v-1.6A5.59,5.59,0,0,0,144,245.571Zm0,0"
																	transform="translate(-129.642 -216.061)" />
																<path id="Path_12203" data-name="Path 12203"
																	d="M147.184,309.862a5.565,5.565,0,0,0,1.1,1.862l1.188-1.065a3.952,3.952,0,0,1-.788-1.328Zm0,0"
																	transform="translate(-132.509 -278.491)" />
																<path id="Path_12204" data-name="Path 12204"
																	d="M326.783,46.794l-.888-1.325a8.007,8.007,0,0,0-1.512,1.314l1.189,1.064a6.384,6.384,0,0,1,1.212-1.053Zm0,0"
																	transform="translate(-292.04 -40.936)" />
																<path id="Path_12205" data-name="Path 12205"
																	d="M361.406,33.75l.354-1.555a8.05,8.05,0,0,0-4.431.256l.531,1.5a6.443,6.443,0,0,1,3.546-.2Zm0,0"
																	transform="translate(-321.701 -28.808)" />
															</g>
														</svg>
														<h5>SELF CONTROL PANEL!</h5>
														<p>100% Automated Reboot & OS installation.</p>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="hover-info-box">
														<svg xmlns="http://www.w3.org/2000/svg" width="50"
															height="50" viewBox="0 0 50 50">
															<g id="_026-computer_networks"
																data-name="026-computer networks"
																transform="translate(-1 -1)">
																<g id="Group_2835" data-name="Group 2835"
																	transform="translate(19.548 4.226)">
																	<g id="Group_2834" data-name="Group 2834">
																		<path id="Path_12206" data-name="Path 12206"
																			d="M35.29,11.452H25.613A1.615,1.615,0,0,1,24,9.839V6.613A1.615,1.615,0,0,1,25.613,5H35.29A1.615,1.615,0,0,1,36.9,6.613V9.839A1.615,1.615,0,0,1,35.29,11.452Z"
																			transform="translate(-24 -5)"
																			fill="#f80" />
																	</g>
																</g>
																<g id="Group_2837" data-name="Group 2837"
																	transform="translate(19.548 12.29)">
																	<g id="Group_2836" data-name="Group 2836">
																		<path id="Path_12207" data-name="Path 12207"
																			d="M35.29,21.452H25.613A1.615,1.615,0,0,1,24,19.839V16.613A1.615,1.615,0,0,1,25.613,15H35.29A1.615,1.615,0,0,1,36.9,16.613v3.226A1.615,1.615,0,0,1,35.29,21.452Z"
																			transform="translate(-24 -15)"
																			fill="#f80" />
																	</g>
																</g>
																<g id="Group_2839" data-name="Group 2839"
																	transform="translate(19.548 20.355)">
																	<g id="Group_2838" data-name="Group 2838">
																		<path id="Path_12208" data-name="Path 12208"
																			d="M35.29,31.452H25.613A1.615,1.615,0,0,1,24,29.839V26.613A1.615,1.615,0,0,1,25.613,25H35.29A1.615,1.615,0,0,1,36.9,26.613v3.226A1.615,1.615,0,0,1,35.29,31.452Z"
																			transform="translate(-24 -25)"
																			fill="#f80" />
																	</g>
																</g>
																<path id="Path_12209" data-name="Path 12209"
																	d="M48.581,33.258H42.129v-2.68L47.321,28.5l-6.89-3.445,2.5-1.879V20.355h1.613a2.422,2.422,0,0,0,2.419-2.419V11.484a2.422,2.422,0,0,0-2.419-2.419H39.71a2.422,2.422,0,0,0-2.419,2.419v6.452a2.422,2.422,0,0,0,2.419,2.419h1.613v2.016l-3.948,2.96,6.012,3.006-2.871,1.148v3.772H34.065a2.422,2.422,0,0,0-2.419,2.419V39.71H28.271a2.417,2.417,0,0,0-1.465-1.465V30.032h6.452a2.422,2.422,0,0,0,2.419-2.419V3.419A2.422,2.422,0,0,0,33.258,1H18.742a2.422,2.422,0,0,0-2.419,2.419V27.613a2.422,2.422,0,0,0,2.419,2.419h6.452v8.213a2.417,2.417,0,0,0-1.465,1.465H20.355V35.677a2.422,2.422,0,0,0-2.419-2.419H9.871v-2.68L15.063,28.5l-6.89-3.445,2.5-1.879V20.355H12.29a2.422,2.422,0,0,0,2.419-2.419V11.484A2.422,2.422,0,0,0,12.29,9.065H7.452a2.422,2.422,0,0,0-2.419,2.419v6.452a2.422,2.422,0,0,0,2.419,2.419H9.065v2.016l-3.948,2.96,6.012,3.006L8.258,29.486v3.772H3.419A2.422,2.422,0,0,0,1,35.677v9.677a2.422,2.422,0,0,0,2.419,2.419H6.645v1.613H5.032V51h11.29V49.387H14.71V47.774h3.226a2.422,2.422,0,0,0,2.419-2.419V41.323h3.374a2.405,2.405,0,0,0,4.542,0h3.374v4.032a2.422,2.422,0,0,0,2.419,2.419H37.29v1.613H35.677V51h11.29V49.387H45.355V47.774h3.226A2.422,2.422,0,0,0,51,45.355V35.677a2.422,2.422,0,0,0-2.419-2.419ZM38.9,11.484a.807.807,0,0,1,.806-.806h4.839a.807.807,0,0,1,.806.806v.806H38.9Zm0,2.419h6.452v1.613H38.9Zm.806,4.839a.807.807,0,0,1-.806-.806v-.806h6.452v.806a.807.807,0,0,1-.806.806ZM6.645,11.484a.807.807,0,0,1,.806-.806H12.29a.807.807,0,0,1,.806.806v.806H6.645Zm0,2.419H13.1v1.613H6.645Zm.806,4.839a.807.807,0,0,1-.806-.806v-.806H13.1v.806a.807.807,0,0,1-.806.806ZM13.1,49.387H8.258V47.774H13.1Zm5.645-4.032a.807.807,0,0,1-.806.806H3.419a.807.807,0,0,1-.806-.806v-.806H18.742Zm0-2.419H2.613V35.677a.807.807,0,0,1,.806-.806H17.935a.807.807,0,0,1,.806.806Zm0-14.516a.807.807,0,0,1-.806-.806V3.419a.807.807,0,0,1,.806-.806H33.258a.807.807,0,0,1,.806.806V27.613a.807.807,0,0,1-.806.806ZM26,41.323a.806.806,0,1,1,.806-.806A.807.807,0,0,1,26,41.323Zm17.742,8.065H38.9V47.774h4.839Zm5.645-4.032a.807.807,0,0,1-.806.806H34.065a.807.807,0,0,1-.806-.806v-.806H49.387Zm0-2.419H33.258V35.677a.807.807,0,0,1,.806-.806H48.581a.807.807,0,0,1,.806.806Z" />
															</g>
														</svg>
														<h5>ADVANCED CONTROL PANEL!</h5>
														<p>Intuitive way to Manage your Servers!</p>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="hover-info-box">
														<svg xmlns="http://www.w3.org/2000/svg" width="49.631"
															height="49.631" viewBox="0 0 49.631 49.631">
															<g id="database_1_" data-name="database (1)"
																transform="translate(-1 -1)">
																<g id="Group_2840" data-name="Group 2840"
																	transform="translate(39.842 46.315)">
																	<rect id="Rectangle_1524"
																		data-name="Rectangle 1524" width="6"
																		height="1"
																		transform="translate(0.158 -0.314)"
																		fill="#f0bc5e" />
																</g>
																<g id="Group_2841" data-name="Group 2841"
																	transform="translate(39.842 33.368)">
																	<rect id="Rectangle_1525"
																		data-name="Rectangle 1525" width="3"
																		height="1"
																		transform="translate(0.158 -0.367)"
																		fill="#f80" />
																</g>
																<g id="Group_2842" data-name="Group 2842"
																	transform="translate(43.079 39.841)">
																	<rect id="Rectangle_1526"
																		data-name="Rectangle 1526" width="3"
																		height="1"
																		transform="translate(-0.079 0.158)"
																		fill="#f80" />
																</g>
																<g id="Group_2843" data-name="Group 2843"
																	transform="translate(22.579 46.315)">
																	<rect id="Rectangle_1527"
																		data-name="Rectangle 1527" width="6"
																		height="1"
																		transform="translate(0.421 -0.314)"
																		fill="#f80" />
																</g>
																<g id="Group_2844" data-name="Group 2844"
																	transform="translate(22.579 33.368)">
																	<rect id="Rectangle_1528"
																		data-name="Rectangle 1528" width="3"
																		height="1"
																		transform="translate(0.421 -0.367)"
																		fill="#f80" />
																</g>
																<g id="Group_2845" data-name="Group 2845"
																	transform="translate(25.815 39.841)">
																	<rect id="Rectangle_1529"
																		data-name="Rectangle 1529" width="3"
																		height="1"
																		transform="translate(0.185 0.158)"
																		fill="#f80" />
																</g>
																<g id="Group_2846" data-name="Group 2846"
																	transform="translate(5.315 46.315)">
																	<rect id="Rectangle_1530"
																		data-name="Rectangle 1530" width="7"
																		height="1"
																		transform="translate(-0.315 -0.314)"
																		fill="#f80" />
																</g>
																<g id="Group_2847" data-name="Group 2847"
																	transform="translate(5.315 33.368)">
																	<rect id="Rectangle_1531"
																		data-name="Rectangle 1531" width="4"
																		height="1"
																		transform="translate(-0.315 -0.367)"
																		fill="#f80" />
																</g>
																<g id="Group_2848" data-name="Group 2848"
																	transform="translate(8.552 39.841)">
																	<rect id="Rectangle_1532"
																		data-name="Rectangle 1532" width="3"
																		height="1"
																		transform="translate(0.448 0.158)"
																		fill="#f80" />
																</g>
																<g id="Group_2850" data-name="Group 2850"
																	transform="translate(5.803 1)">
																	<g id="Group_2849" data-name="Group 2849">
																		<path id="Path_12210" data-name="Path 12210"
																			d="M40.621,21.813H13.4a6.4,6.4,0,0,1-.335-12.8A6.445,6.445,0,0,1,19.007,5a6.318,6.318,0,0,1,1.978.315A10.391,10.391,0,0,1,39.551,9.1a6.4,6.4,0,1,1,1.07,12.718Z"
																			transform="translate(-7 -1)"
																			fill="#f80" />
																	</g>
																</g>
																<g id="Group_2851" data-name="Group 2851"
																	transform="translate(1 4.205)">
																	<rect id="Rectangle_1533"
																		data-name="Rectangle 1533" width="1"
																		height="1"
																		transform="translate(3 28.795)" />
																	<rect id="Rectangle_1534"
																		data-name="Rectangle 1534" width="2"
																		height="1"
																		transform="translate(6 28.795)" />
																	<rect id="Rectangle_1535"
																		data-name="Rectangle 1535" width="1"
																		height="1"
																		transform="translate(10 35.795)" />
																	<rect id="Rectangle_1536"
																		data-name="Rectangle 1536" width="2"
																		height="1"
																		transform="translate(6 35.795)" />
																	<rect id="Rectangle_1537"
																		data-name="Rectangle 1537" width="2"
																		height="1"
																		transform="translate(6 41.795)" />
																	<rect id="Rectangle_1538"
																		data-name="Rectangle 1538" width="1"
																		height="1"
																		transform="translate(10 41.795)" />
																	<rect id="Rectangle_1539"
																		data-name="Rectangle 1539" width="1"
																		height="1"
																		transform="translate(3 41.795)" />
																	<rect id="Rectangle_1540"
																		data-name="Rectangle 1540" width="3"
																		height="1"
																		transform="translate(20 28.795)" />
																	<rect id="Rectangle_1541"
																		data-name="Rectangle 1541" width="2"
																		height="1"
																		transform="translate(24 28.795)" />
																	<rect id="Rectangle_1542"
																		data-name="Rectangle 1542" width="2"
																		height="1"
																		transform="translate(27 35.795)" />
																	<rect id="Rectangle_1543"
																		data-name="Rectangle 1543" width="2"
																		height="1"
																		transform="translate(24 35.795)" />
																	<rect id="Rectangle_1544"
																		data-name="Rectangle 1544" width="2"
																		height="1"
																		transform="translate(24 41.795)" />
																	<rect id="Rectangle_1545"
																		data-name="Rectangle 1545" width="2"
																		height="1"
																		transform="translate(27 41.795)" />
																	<rect id="Rectangle_1546"
																		data-name="Rectangle 1546" width="3"
																		height="1"
																		transform="translate(20 41.795)" />
																	<path id="Path_12211" data-name="Path 12211"
																		d="M48.229,35h-4V30.2H26.616V27h-1.6v3.2H7.4V35h-4a2.4,2.4,0,0,0-2.4,2.4v16.01a2.4,2.4,0,0,0,2.4,2.4h9.606a2.4,2.4,0,0,0,2.4-2.4V37.406a2.4,2.4,0,0,0-2.4-2.4H9V31.8h16.01V35h-4a2.4,2.4,0,0,0-2.4,2.4v16.01a2.4,2.4,0,0,0,2.4,2.4h9.606a2.4,2.4,0,0,0,2.4-2.4V37.406a2.4,2.4,0,0,0-2.4-2.4h-4V31.8h16.01V35h-4a2.4,2.4,0,0,0-2.4,2.4v16.01a2.4,2.4,0,0,0,2.4,2.4h9.606a2.4,2.4,0,0,0,2.4-2.4V37.406A2.4,2.4,0,0,0,48.229,35ZM2.6,43.01H13.808v4.8H2.6ZM13.007,54.217H3.4a.8.8,0,0,1-.8-.8v-4H13.808v4A.8.8,0,0,1,13.007,54.217Zm.8-16.81v4H2.6v-4a.8.8,0,0,1,.8-.8h9.606A.8.8,0,0,1,13.808,37.406Zm6.4,5.6H31.419v4.8H20.212ZM30.618,54.217H21.012a.8.8,0,0,1-.8-.8v-4H31.419v4A.8.8,0,0,1,30.618,54.217Zm.8-16.81v4H20.212v-4a.8.8,0,0,1,.8-.8h9.606A.8.8,0,0,1,31.419,37.406Zm7.2-.8h9.606a.8.8,0,0,1,.8.8v4H37.823v-4A.8.8,0,0,1,38.623,36.606Zm10.406,6.4v4.8H37.823v-4.8Zm-.8,11.207H38.623a.8.8,0,0,1-.8-.8v-4H49.03v4A.8.8,0,0,1,48.229,54.217Z"
																		transform="translate(-1 -9.392)" />
																	<rect id="Rectangle_1547"
																		data-name="Rectangle 1547" width="1"
																		height="1"
																		transform="translate(39 28.795)" />
																	<rect id="Rectangle_1548"
																		data-name="Rectangle 1548" width="1"
																		height="1"
																		transform="translate(42 28.795)" />
																	<rect id="Rectangle_1549"
																		data-name="Rectangle 1549" width="1"
																		height="1"
																		transform="translate(45 35.795)" />
																	<rect id="Rectangle_1550"
																		data-name="Rectangle 1550" width="1"
																		height="1"
																		transform="translate(42 35.795)" />
																	<rect id="Rectangle_1551"
																		data-name="Rectangle 1551" width="1"
																		height="1"
																		transform="translate(42 41.795)" />
																	<rect id="Rectangle_1552"
																		data-name="Rectangle 1552" width="1"
																		height="1"
																		transform="translate(45 41.795)" />
																	<rect id="Rectangle_1553"
																		data-name="Rectangle 1553" width="1"
																		height="1"
																		transform="translate(39 41.795)" />
																	<path id="Path_12212" data-name="Path 12212"
																		d="M37.693,8.243l1.132-1.132a7.214,7.214,0,0,0-10.19,0l1.133,1.132A5.612,5.612,0,0,1,37.693,8.243Z"
																		transform="translate(-6.513 -5.004)" />
																	<path id="Path_12213" data-name="Path 12213"
																		d="M52.2,18.2A3.205,3.205,0,0,0,49,15v1.6a1.6,1.6,0,0,1,0,3.2v1.6A3.205,3.205,0,0,0,52.2,18.2Z"
																		transform="translate(-10.576 -6.998)" />
																</g>
															</g>
														</svg>
														<h5>MULTI-SERVER MANAGEMENT!</h5>
														<p>Manage all your servers, at any location</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div id="sererFeatures2" class="tab-pane fade">
									<div class="row">
										<div class="container">
											<div class="row">
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="hover-info-box">
														<svg xmlns="http://www.w3.org/2000/svg" width="49.666"
															height="49.666" viewBox="0 0 49.666 49.666">
															<g id="up-arrow" transform="translate(0 0)">
																<path id="Path_12073" data-name="Path 12073"
																	d="M64.829,32.117h7.4L50.117,10,28,32.117H64.829Z"
																	transform="translate(-25.284 -9.03)"
																	fill="#fedbab" />
																<path id="Path_12074" data-name="Path 12074"
																	d="M121.923,187.757V169.133h8.342L115.133,154,100,169.133h8.342v18.625Z"
																	transform="translate(-90.3 -139.061)"
																	fill="#f80" />
																<path id="Path_12075" data-name="Path 12075"
																	d="M48.7,179.7H31.623a.97.97,0,0,1-.97-.97V160.1a.97.97,0,0,1,.97-.97h6L24.833,146.342,12.042,159.133h6a.97.97,0,0,1,.97.97v18.625a.97.97,0,0,1-.97.97H.97a.97.97,0,1,1,0-1.94h16.1V161.073H9.7a.97.97,0,0,1-.686-1.656l15.133-15.133a.97.97,0,0,1,1.372,0l15.133,15.133a.97.97,0,0,1-.686,1.656H32.593v16.685H48.7a.97.97,0,1,1,0,1.94Z"
																	transform="translate(0 -130.031)" />
																<path id="Path_12076" data-name="Path 12076"
																	d="M63.2,24.057H54.829a.97.97,0,0,1,0-1.94h6.033L41.086,2.342,21.311,22.117h6.162a.97.97,0,1,1,0,1.94h-8.5a.97.97,0,0,1-.686-1.656L40.4.284a.97.97,0,0,1,1.372,0L63.889,22.4a.97.97,0,0,1-.686,1.656Z"
																	transform="translate(-16.253)" />
																<path id="Path_12077" data-name="Path 12077"
																	d="M280.97,379.341a.97.97,0,0,1-.97-.97V367.958a.97.97,0,0,1,1.94,0V378.37A.97.97,0,0,1,280.97,379.341Z"
																	transform="translate(-252.839 -331.389)" />
																<path id="Path_12078" data-name="Path 12078"
																	d="M280.97,336.283a.97.97,0,0,1-.97-.97V335.3a.97.97,0,0,1,1.94,0v.013A.97.97,0,0,1,280.97,336.283Z"
																	transform="translate(-252.839 -301.899)"
																	fill="#000413" />
															</g>
														</svg>
														<h5>100% Uptime !</h5>
														<p>We haven’t had any outage in over 5 years.</p>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="hover-info-box">
														<svg xmlns="http://www.w3.org/2000/svg" width="37.5"
															height="49.899" viewBox="0 0 37.5 49.899">
															<g id="badge_2_" data-name="badge (2)"
																transform="translate(-0.5 -0.001)">
																<path id="Path_12079" data-name="Path 12079"
																	d="M123.574,268.32l-5.907-3.706a1.1,1.1,0,0,0-1.174,0l-5.907,3.706a1.1,1.1,0,0,1-1.691-.935V243h16.372v24.38a1.1,1.1,0,0,1-1.691.935Zm0,0"
																	transform="translate(-97.83 -219.32)"
																	fill="#fff" />
																<path id="Path_12080" data-name="Path 12080"
																	d="M167.492,243h-6.148v23.17l2.487-1.56a1.1,1.1,0,0,1,1.174,0l2.487,1.56Zm0,0"
																	transform="translate(-145.168 -219.32)"
																	fill="#f80" />
																<path id="Path_12081" data-name="Path 12081"
																	d="M26.533,8.675l2.324-1.056a1.228,1.228,0,0,1,1.4.279l1.744,1.865a1.226,1.226,0,0,0,.938.389l2.551-.086a1.228,1.228,0,0,1,1.191.8l.9,2.39a1.227,1.227,0,0,0,.718.718l2.39.9a1.227,1.227,0,0,1,.8,1.19L41.4,18.609a1.228,1.228,0,0,0,.389.938l1.865,1.743a1.228,1.228,0,0,1,.279,1.4L42.877,25.02a1.227,1.227,0,0,0,0,1.015l1.056,2.325a1.228,1.228,0,0,1-.279,1.4l-1.865,1.743a1.228,1.228,0,0,0-.389.938L41.486,35a1.228,1.228,0,0,1-.8,1.191l-2.39.9a1.227,1.227,0,0,0-.718.718l-.9,2.39a1.227,1.227,0,0,1-1.191.8L32.943,40.9a1.228,1.228,0,0,0-.938.389l-1.744,1.865a1.228,1.228,0,0,1-1.4.279L26.533,42.38a1.228,1.228,0,0,0-1.016,0l-2.325,1.056a1.228,1.228,0,0,1-1.4-.279l-1.743-1.865a1.228,1.228,0,0,0-.938-.389l-2.552.086a1.227,1.227,0,0,1-1.19-.8l-.9-2.39a1.228,1.228,0,0,0-.718-.718l-2.39-.9a1.229,1.229,0,0,1-.8-1.191l.086-2.551a1.227,1.227,0,0,0-.388-.938L8.4,29.764a1.227,1.227,0,0,1-.279-1.4l1.056-2.325a1.227,1.227,0,0,0,0-1.015L8.117,22.7a1.227,1.227,0,0,1,.279-1.4l1.865-1.743a1.227,1.227,0,0,0,.388-.938l-.086-2.552a1.228,1.228,0,0,1,.8-1.19l2.39-.9a1.228,1.228,0,0,0,.718-.718l.9-2.39a1.228,1.228,0,0,1,1.19-.8l2.552.086a1.227,1.227,0,0,0,.938-.389L21.788,7.9a1.228,1.228,0,0,1,1.4-.279l2.325,1.056A1.225,1.225,0,0,0,26.533,8.675Zm0,0"
																	transform="translate(-6.775 -6.776)"
																	fill="#f80" />
																<path id="Path_12082" data-name="Path 12082"
																	d="M85.013,71.457a13.059,13.059,0,1,1-26.118,0,13.237,13.237,0,0,1,.084-1.487,13.06,13.06,0,0,1,26.034,1.487Zm0,0"
																	transform="translate(-52.704 -52.706)"
																	fill="#fff" />
																<path id="Path_12084" data-name="Path 12084"
																	d="M52.721,64.168q-.035,0-.07,0a.731.731,0,0,1-.659-.8,13.791,13.791,0,0,1,27.444-.135.731.731,0,1,1-1.454.152,12.33,12.33,0,0,0-24.534.121.731.731,0,0,1-.727.662Zm0,0"
																	transform="translate(-46.471 -45.93)" />
																<path id="Path_12085" data-name="Path 12085"
																	d="M66.232,213.784a13.822,13.822,0,0,1-13.67-11.964.731.731,0,0,1,1.449-.192,12.33,12.33,0,0,0,24.463-.168.731.731,0,1,1,1.452.172,13.786,13.786,0,0,1-13.694,12.152Zm0,0"
																	transform="translate(-46.982 -181.243)" />
																<path id="Path_12086" data-name="Path 12086"
																	d="M36.768,18.956a.5.5,0,0,1,0-.411l1.056-2.325a1.957,1.957,0,0,0-.446-2.241l-1.865-1.744a.5.5,0,0,1-.157-.38l.086-2.551a1.957,1.957,0,0,0-1.27-1.9l-2.39-.9a.5.5,0,0,1-.29-.29l-.9-2.39a1.956,1.956,0,0,0-1.9-1.269l-2.551.086a.493.493,0,0,1-.38-.157L24.021.622A1.957,1.957,0,0,0,21.78.177L19.456,1.233a.5.5,0,0,1-.411,0L16.72.177A1.957,1.957,0,0,0,14.48.622L12.736,2.488a.5.5,0,0,1-.379.157L9.8,2.559a1.955,1.955,0,0,0-1.9,1.269l-.9,2.39a.5.5,0,0,1-.29.29l-2.39.9a1.957,1.957,0,0,0-1.269,1.9l.086,2.552a.5.5,0,0,1-.157.38L1.121,13.98a1.958,1.958,0,0,0-.446,2.241l1.056,2.324a.5.5,0,0,1,0,.411L.676,21.281a1.958,1.958,0,0,0,.446,2.241l1.865,1.744a.5.5,0,0,1,.157.38L3.058,28.2a1.958,1.958,0,0,0,1.269,1.9l2.39.9a.5.5,0,0,1,.29.29l.9,2.39a1.957,1.957,0,0,0,1.9,1.269l2.552-.086a.5.5,0,0,1,.38.157l1.743,1.865a1.955,1.955,0,0,0,.966.565V46.45l-3.078,1.931a.374.374,0,0,1-.572-.316V37.112a.731.731,0,0,0-1.462,0V48.065a1.836,1.836,0,0,0,2.811,1.555l5.907-3.707a.377.377,0,0,1,.4,0l5.907,3.707a1.836,1.836,0,0,0,2.811-1.555V37.115a.731.731,0,0,0-1.462,0V48.065a.374.374,0,0,1-.572.316L23.055,46.45V37.445a1.958,1.958,0,0,0,.965-.565l1.744-1.865a.491.491,0,0,1,.379-.157l2.552.086a1.959,1.959,0,0,0,1.9-1.269l.9-2.39a.5.5,0,0,1,.29-.29l2.39-.9a1.957,1.957,0,0,0,1.269-1.9l-.086-2.551a.5.5,0,0,1,.157-.38l1.865-1.744a1.957,1.957,0,0,0,.445-2.241ZM20.226,44.675a1.845,1.845,0,0,0-1.951,0l-1.367.858V37.24l2.138-.971a.5.5,0,0,1,.411,0l2.138.971v8.293ZM35.437,19.561l1.056,2.324a.5.5,0,0,1-.113.568L34.515,24.2a1.959,1.959,0,0,0-.62,1.5l.086,2.551a.5.5,0,0,1-.322.482l-2.39.9a1.959,1.959,0,0,0-1.146,1.146l-.9,2.39a.5.5,0,0,1-.482.322L26.193,33.4a1.955,1.955,0,0,0-1.5.62l-1.744,1.865a.5.5,0,0,1-.568.113L20.06,34.938a1.959,1.959,0,0,0-1.62,0l-2.325,1.056a.5.5,0,0,1-.568-.113L13.8,34.016a1.958,1.958,0,0,0-1.43-.621h-.066l-2.552.086a.5.5,0,0,1-.482-.322l-.9-2.391a1.96,1.96,0,0,0-1.146-1.146l-2.39-.9a.5.5,0,0,1-.322-.482l.086-2.551a1.958,1.958,0,0,0-.62-1.5L2.12,22.454a.5.5,0,0,1-.113-.568l1.056-2.325a1.959,1.959,0,0,0,0-1.62L2.007,15.617a.5.5,0,0,1,.113-.568L3.985,13.3a1.957,1.957,0,0,0,.62-1.5L4.519,9.256a.5.5,0,0,1,.322-.482l2.39-.9A1.958,1.958,0,0,0,8.377,6.732l.9-2.391a.5.5,0,0,1,.482-.322l2.552.086a1.956,1.956,0,0,0,1.5-.62l1.743-1.865a.5.5,0,0,1,.568-.113L18.44,2.564a1.957,1.957,0,0,0,1.62,0l2.325-1.056a.5.5,0,0,1,.568.113L24.7,3.486a1.958,1.958,0,0,0,1.5.62l2.552-.086a.5.5,0,0,1,.482.322l.9,2.39a1.96,1.96,0,0,0,1.146,1.146l2.39.9a.5.5,0,0,1,.322.482L33.9,11.808a1.958,1.958,0,0,0,.62,1.5l1.865,1.744a.5.5,0,0,1,.113.568l-1.056,2.325a1.959,1.959,0,0,0,0,1.62Zm0,0"
																	transform="translate(0 0)" />
															</g>
														</svg>
														<h5>30 DAY MONEY BACK!</h5>
														<p>Try us – you will like us.</p>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="hover-info-box">
														<svg xmlns="http://www.w3.org/2000/svg" width="50"
															height="50" viewBox="0 0 50 50">
															<g id="_009-data_center" data-name="009-data center"
																transform="translate(-1 -1)">
																<g id="Group_2813" data-name="Group 2813"
																	transform="translate(7.452 1)">
																	<path id="Path_12087" data-name="Path 12087"
																		d="M9,33h4.839v1.613H9Z"
																		transform="translate(-9 -7.194)"
																		fill="#f80" />
																	<path id="Path_12088" data-name="Path 12088"
																		d="M25,33h4.839v1.613H25Z"
																		transform="translate(-12.097 -7.194)"
																		fill="#f80" />
																	<path id="Path_12089" data-name="Path 12089"
																		d="M49,33h4.839v1.613H49Z"
																		transform="translate(-16.742 -7.194)"
																		fill="#f80" />
																	<path id="Path_12090" data-name="Path 12090"
																		d="M49,17h4.839v1.613H49Z"
																		transform="translate(-16.742 -4.097)"
																		fill="#f80" />
																	<path id="Path_12091" data-name="Path 12091"
																		d="M33,25h4.839v1.613H33Z"
																		transform="translate(-13.645 -5.645)"
																		fill="#f80" />
																	<path id="Path_12092" data-name="Path 12092"
																		d="M33,9h4.839v1.613H33Z"
																		transform="translate(-13.645 -2.548)"
																		fill="#f80" />
																	<path id="Path_12093" data-name="Path 12093"
																		d="M25,17h4.839v1.613H25Z"
																		transform="translate(-12.097 -4.097)"
																		fill="#f80" />
																	<path id="Path_12094" data-name="Path 12094"
																		d="M9,17h4.839v1.613H9Z"
																		transform="translate(-9 -4.097)"
																		fill="#f80" />
																	<path id="Path_12095" data-name="Path 12095"
																		d="M21.137,32.614l-.1.019V5.839a.807.807,0,0,1,.806-.806H36.355a.807.807,0,0,1,.806.806V29.831l-.015,0a8.89,8.89,0,0,1,4.048,3.172V5.032A4.037,4.037,0,0,0,37.161,1H21.032A4.037,4.037,0,0,0,17,5.032V35.087l.057,0a7.245,7.245,0,0,1,4.08-2.475Z"
																		transform="translate(-10.548 -1)"
																		fill="#f80" />
																	<path id="Path_12096" data-name="Path 12096"
																		d="M15,57h8.065v1.613H15Z"
																		transform="translate(-10.161 -11.839)"
																		fill="#f80" />
																</g>
																<path id="Path_12097" data-name="Path 12097"
																	d="M46.968,8.226H37.29V9.839h9.677a2.422,2.422,0,0,1,2.419,2.419V34.839a2.416,2.416,0,0,1-1.613,2.271V13.065a1.615,1.615,0,0,0-1.613-1.613H38.1v1.613h8.065V17.9H38.1v1.613h8.065v4.839H38.1v1.613h8.065v4.839H38.1v1.613h8.065v4.839H40.37a9.694,9.694,0,0,0-5.5-7.173V6.613A1.615,1.615,0,0,0,33.258,5H18.742a1.615,1.615,0,0,0-1.613,1.613V32.794a8.05,8.05,0,0,0-4.972,4.464H5.839V32.419H13.9V30.806H5.839V25.968H13.9V24.355H5.839V19.516H13.9V17.9H5.839V13.065H13.9V11.452H5.839a1.615,1.615,0,0,0-1.613,1.613V37.11a2.416,2.416,0,0,1-1.613-2.271V12.258A2.422,2.422,0,0,1,5.032,9.839H14.71V8.226H5.032A4.037,4.037,0,0,0,1,12.258V34.839a4.037,4.037,0,0,0,4.032,4.032h6.614c0,.01,0,.022,0,.033a6.451,6.451,0,0,0,.649,12.87H39.71a6.449,6.449,0,0,0,.8-12.848c0-.019,0-.037,0-.056h6.452A4.037,4.037,0,0,0,51,34.839V12.258A4.037,4.037,0,0,0,46.968,8.226ZM33.258,17.9H18.742V13.065H33.258Zm0,1.613v4.839H18.742V19.516Zm0-12.9v4.839H18.742V6.613ZM18.742,25.968H33.258v3.544A9.585,9.585,0,0,0,23,33.213a8.053,8.053,0,0,0-3.456-.794c-.272,0-.541.015-.806.042ZM44.548,45.323a4.844,4.844,0,0,1-4.839,4.839H12.29a4.839,4.839,0,1,1,4.839-4.839h1.613a6.456,6.456,0,0,0-5.457-6.367,6.436,6.436,0,0,1,8.886-4.361,9.6,9.6,0,0,0-1.01,4.277h1.613a8.065,8.065,0,0,1,16.129,0c0,.019,0,.037,0,.056a6.457,6.457,0,0,0-5.643,6.4h1.613a4.839,4.839,0,0,1,9.677,0Z"
																	transform="translate(0 -0.774)" />
																<path id="Path_12098" data-name="Path 12098"
																	d="M37,9h1.613v1.613H37Z"
																	transform="translate(-6.968 -1.548)" />
																<path id="Path_12099" data-name="Path 12099"
																	d="M33,9h1.613v1.613H33Z"
																	transform="translate(-6.194 -1.548)" />
																<path id="Path_12100" data-name="Path 12100"
																	d="M25,17h1.613v1.613H25Z"
																	transform="translate(-4.645 -3.097)" />
																<path id="Path_12101" data-name="Path 12101"
																	d="M29,17h1.613v1.613H29Z"
																	transform="translate(-5.419 -3.097)" />
																<path id="Path_12102" data-name="Path 12102"
																	d="M37,25h1.613v1.613H37Z"
																	transform="translate(-6.968 -4.645)" />
																<path id="Path_12103" data-name="Path 12103"
																	d="M33,25h1.613v1.613H33Z"
																	transform="translate(-6.194 -4.645)" />
																<path id="Path_12104" data-name="Path 12104"
																	d="M25,33h1.613v1.613H25Z"
																	transform="translate(-4.645 -6.194)" />
																<path id="Path_12105" data-name="Path 12105"
																	d="M29,33h1.613v1.613H29Z"
																	transform="translate(-5.419 -6.194)" />
																<path id="Path_12106" data-name="Path 12106"
																	d="M9,17h1.613v1.613H9Z"
																	transform="translate(-1.548 -3.097)" />
																<path id="Path_12107" data-name="Path 12107"
																	d="M13,17h1.613v1.613H13Z"
																	transform="translate(-2.323 -3.097)" />
																<path id="Path_12108" data-name="Path 12108"
																	d="M9,33h1.613v1.613H9Z"
																	transform="translate(-1.548 -6.194)" />
																<path id="Path_12109" data-name="Path 12109"
																	d="M13,33h1.613v1.613H13Z"
																	transform="translate(-2.323 -6.194)" />
																<path id="Path_12110" data-name="Path 12110"
																	d="M53,17h1.613v1.613H53Z"
																	transform="translate(-10.065 -3.097)" />
																<path id="Path_12111" data-name="Path 12111"
																	d="M49,17h1.613v1.613H49Z"
																	transform="translate(-9.29 -3.097)" />
																<path id="Path_12112" data-name="Path 12112"
																	d="M53,33h1.613v1.613H53Z"
																	transform="translate(-10.065 -6.194)" />
																<path id="Path_12113" data-name="Path 12113"
																	d="M49,33h1.613v1.613H49Z"
																	transform="translate(-9.29 -6.194)" />
																<path id="Path_12114" data-name="Path 12114"
																	d="M42.346,44.76l1.6-.228a6.458,6.458,0,0,0-8.228-5.265l.46,1.547a4.842,4.842,0,0,1,6.172,3.946Z"
																	transform="translate(-6.719 -7.355)" />
																<path id="Path_12115" data-name="Path 12115"
																	d="M15,57h1.613v1.613H15Z"
																	transform="translate(-2.71 -10.839)" />
																<path id="Path_12116" data-name="Path 12116"
																	d="M19,57h1.613v1.613H19Z"
																	transform="translate(-3.484 -10.839)" />
																<path id="Path_12117" data-name="Path 12117"
																	d="M23,57h1.613v1.613H23Z"
																	transform="translate(-4.258 -10.839)" />
															</g>
														</svg>
														<h5>INSTANT SERVER SETUP!</h5>
														<p>Your Server wil be ready within minutes</p>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="hover-info-box">
														<svg xmlns="http://www.w3.org/2000/svg" width="50.6"
															height="50.631" viewBox="0 0 50.6 50.631">
															<g id="wall-clock" transform="translate(-0.157 0)">
																<g id="Group_2814" data-name="Group 2814"
																	transform="translate(8.581 8.439)">
																	<path id="Path_12118" data-name="Path 12118"
																		d="M98.429,85.34h0A13.088,13.088,0,0,0,85.34,98.429h0a13.088,13.088,0,0,0,13.089,13.089h0a13.088,13.088,0,0,0,13.089-13.089h0A13.089,13.089,0,0,0,98.429,85.34Zm0,14.4a1.308,1.308,0,0,1-1.309-1.309h0a1.308,1.308,0,0,1,1.309-1.309h0a1.309,1.309,0,0,1,0,2.618Z"
																		transform="translate(-81.764 -81.764)"
																		fill="#f80" />
																	<circle id="Ellipse_839" data-name="Ellipse 839"
																		cx="1.688" cy="1.688" r="1.688"
																		transform="translate(15.188 15.188)"
																		fill="#f80" />
																</g>
																<path id="Path_12119" data-name="Path 12119"
																	d="M.972,25.3H1a.844.844,0,0,0,.844-.815A23.628,23.628,0,0,1,40.075,6.752H35.584a.844.844,0,0,0,0,1.688h6.762a.849.849,0,0,0,.194-.039.823.823,0,0,0,.127-.028c.024-.01.041-.031.064-.044a.813.813,0,0,0,.206-.144l.008-.006a.949.949,0,0,0,.058-.092.848.848,0,0,0,.111-.176.806.806,0,0,0,.042-.208.639.639,0,0,0,.021-.106V.845a.844.844,0,1,0-1.688,0V5.732A25.309,25.309,0,0,0,.158,24.433.844.844,0,0,0,.972,25.3Z"
																	transform="translate(0 0)" fill="#231f20" />
																<g id="Group_2815" data-name="Group 2815"
																	transform="translate(0.279 25.354)">
																	<path id="Path_12120" data-name="Path 12120"
																		d="M103.48,447.81a24.029,24.029,0,0,1-2.037-1.35.844.844,0,1,0-1.045,1.325l.042.031a25.54,25.54,0,0,0,2.18,1.447.844.844,0,1,0,.86-1.453Z"
																		transform="translate(-90.318 -427.501)"
																		fill="#f80" />
																	<path id="Path_12121" data-name="Path 12121"
																		d="M64.014,412.2a.846.846,0,1,0-1.266,1.121h0a25.535,25.535,0,0,0,1.839,1.863.844.844,0,0,0,1.138-1.246A23.586,23.586,0,0,1,64.014,412.2Z"
																		transform="translate(-56.489 -396.54)"
																		fill="#f80" />
																	<path id="Path_12122" data-name="Path 12122"
																		d="M35.6,372.973a23.939,23.939,0,0,1-1.323-2.053.845.845,0,1,0-1.464.844,25.545,25.545,0,0,0,1.418,2.195.844.844,0,0,0,1.37-.986Z"
																		transform="translate(-29.604 -359.214)"
																		fill="#f80" />
																	<path id="Path_12123" data-name="Path 12123"
																		d="M147.535,473.343a23.55,23.55,0,0,1-2.269-.9.844.844,0,1,0-.749,1.512l.044.02a24.959,24.959,0,0,0,2.434.969.844.844,0,1,0,.541-1.6Z"
																		transform="translate(-129.94 -450.997)"
																		fill="#f80" />
																	<path id="Path_12124" data-name="Path 12124"
																		d="M14.406,326.331a23.7,23.7,0,0,1-.873-2.278.844.844,0,0,0-1.629.444.638.638,0,0,0,.025.078,25.339,25.339,0,0,0,.935,2.447.844.844,0,1,0,1.543-.684Z"
																		transform="translate(-10.837 -316.801)"
																		fill="#f80" />
																	<path id="Path_12125" data-name="Path 12125"
																		d="M2.8,277.982a.844.844,0,0,0,.65-1,24.016,24.016,0,0,1-.381-2.412.844.844,0,0,0-1.679.178,25.475,25.475,0,0,0,.41,2.584.843.843,0,0,0,1,.65Z"
																		transform="translate(-1.385 -272.092)"
																		fill="#f80" />
																	<path id="Path_12126" data-name="Path 12126"
																		d="M493.65,256.395a.831.831,0,0,0-.872.788.235.235,0,0,0,0,.025,23.723,23.723,0,0,1-.212,2.434.844.844,0,0,0,.719.951.782.782,0,0,0,.118.008.844.844,0,0,0,.834-.727,25.617,25.617,0,0,0,.227-2.607A.844.844,0,0,0,493.65,256.395Z"
																		transform="translate(-443.986 -256.394)"
																		fill="#f80" />
																	<path id="Path_12127" data-name="Path 12127"
																		d="M460.55,355.152a.844.844,0,0,0-1.126.392,23.537,23.537,0,0,1-1.176,2.141.844.844,0,0,0,1.434.889,25.2,25.2,0,0,0,1.26-2.294.844.844,0,0,0-.392-1.127Z"
																		transform="translate(-412.962 -345.31)"
																		fill="#f80" />
																	<path id="Path_12128" data-name="Path 12128"
																		d="M428.656,398.788a23.621,23.621,0,0,1-1.591,1.856.845.845,0,0,0,1.224,1.164h0a25.625,25.625,0,0,0,1.7-1.987.844.844,0,1,0-1.321-1.051l-.015.019Z"
																		transform="translate(-384.761 -384.404)"
																		fill="#f80" />
																	<path id="Path_12129" data-name="Path 12129"
																		d="M196.107,489.267a23.756,23.756,0,0,1-2.407-.413.844.844,0,1,0-.372,1.646h0a25.176,25.176,0,0,0,2.58.443.817.817,0,0,0,.1.006.844.844,0,0,0,.1-1.682Z"
																		transform="translate(-173.755 -465.847)"
																		fill="#f80" />
																	<path id="Path_12130" data-name="Path 12130"
																		d="M390.3,435.754a24.09,24.09,0,0,1-1.941,1.492.846.846,0,1,0,.962,1.392,25.821,25.821,0,0,0,2.076-1.6.844.844,0,0,0-1.1-1.283v0Z"
																		transform="translate(-349.762 -417.833)"
																		fill="#f80" />
																	<path id="Path_12131" data-name="Path 12131"
																		d="M482.126,307.018a.844.844,0,0,0-1.022.616,23.821,23.821,0,0,1-.708,2.338.844.844,0,0,0,1.588.572,25.4,25.4,0,0,0,.759-2.5.844.844,0,0,0-.617-1.022Z"
																		transform="translate(-432.982 -301.989)"
																		fill="#f80" />
																	<path id="Path_12132" data-name="Path 12132"
																		d="M297.372,484.486a23.605,23.605,0,0,1-2.371.582.844.844,0,0,0,.317,1.658,25.026,25.026,0,0,0,2.542-.625.844.844,0,0,0-.488-1.615Z"
																		transform="translate(-265.349 -461.903)"
																		fill="#f80" />
																	<path id="Path_12133" data-name="Path 12133"
																		d="M246.708,494c-.675.057-1.366.084-2.055.084h-.386a.874.874,0,0,0-.86.829.844.844,0,0,0,.829.859h.417c.738,0,1.477-.033,2.194-.095a.844.844,0,1,0-.1-1.685l-.046,0Z"
																		transform="translate(-219.474 -470.493)"
																		fill="#f80" />
																	<path id="Path_12134" data-name="Path 12134"
																		d="M345.851,464.711a23.863,23.863,0,0,1-2.2,1.062.844.844,0,1,0,.635,1.565l.019-.008a25.442,25.442,0,0,0,2.356-1.138.844.844,0,0,0-.81-1.481Z"
																		transform="translate(-309.331 -444.017)"
																		fill="#f80" />
																</g>
																<g id="Group_2816" data-name="Group 2816"
																	transform="translate(7.737 7.595)">
																	<path id="Path_12135" data-name="Path 12135"
																		d="M94.528,76.807a17.721,17.721,0,1,0,17.721,17.721A17.72,17.72,0,0,0,94.528,76.807Zm.844,33.71v-2.488a.844.844,0,1,0-1.688,0v2.488A16.026,16.026,0,0,1,78.538,95.371h2.488a.844.844,0,1,0,0-1.688H78.538A16.026,16.026,0,0,1,93.684,78.538v2.488a.844.844,0,1,0,1.688,0V78.538a16.026,16.026,0,0,1,15.146,15.146h-2.488a.844.844,0,0,0,0,1.688h2.488A16.026,16.026,0,0,1,95.371,110.517Z"
																		transform="translate(-76.807 -76.807)"
																		fill="#231f20" />
																	<path id="Path_12136" data-name="Path 12136"
																		d="M187.644,153.666v-7.75a.844.844,0,0,0-1.688,0v7.75a2.533,2.533,0,0,0-1.532,1.532H180.05a.844.844,0,1,0,0,1.688h4.374a2.525,2.525,0,1,0,3.22-3.22Zm-.844,3.22a.844.844,0,1,1,.844-.844A.844.844,0,0,1,186.8,156.886Z"
																		transform="translate(-169.08 -138.321)"
																		fill="#231f20" />
																</g>
															</g>
														</svg>
														<h5>24/7 EVERYTHING!</h5>
														<p>24/7 Support & Engineering Staff</p>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="hover-info-box">
														<svg xmlns="http://www.w3.org/2000/svg" width="53.962"
															height="49.534" viewBox="0 0 53.962 49.534">
															<g id="key" transform="translate(0 -21.005)">
																<g id="Group_2819" data-name="Group 2819"
																	transform="translate(1.054 22.059)">
																	<path id="Path_12137" data-name="Path 12137"
																		d="M99.733,296.516h0l7.153-4.747a6.331,6.331,0,0,1,8.643,1.62L92.765,310.135l-18.292-3.689H70v-9.474l4.473-3.162,1.638-1.441a9.484,9.484,0,0,1,12.532,0,4.093,4.093,0,0,0,2.832,1.429h5.13A3.169,3.169,0,0,1,99.733,296.516Z"
																		transform="translate(-63.677 -262.709)"
																		fill="#fff" />
																	<path id="Path_12138" data-name="Path 12138"
																		d="M120.9,40.49l-6.323,3.162H94.431a9.485,9.485,0,1,1,0-6.323h4.334l3.162-3.162,3.162,3.162,3.162-3.162,3.162,3.162,3.162-3.162Zm-32.25,0a3.162,3.162,0,1,0-3.162,3.162A3.162,3.162,0,0,0,88.647,40.49Z"
																		transform="translate(-69.044 -31.005)"
																		fill="#f80" />
																	<path id="Path_12139" data-name="Path 12139"
																		d="M16.323,346.814H10V331.005h6.323Z"
																		transform="translate(-10 -299.388)"
																		fill="#f80" />
																</g>
																<g id="Group_2820" data-name="Group 2820"
																	transform="translate(0 21.005)">
																	<path id="Path_12140" data-name="Path 12140"
																		d="M126,85.221a4.216,4.216,0,1,0,4.216-4.216A4.22,4.22,0,0,0,126,85.221Zm6.323,0a2.108,2.108,0,1,1-2.108-2.108A2.11,2.11,0,0,1,132.323,85.221Z"
																		transform="translate(-112.721 -74.682)" />
																	<path id="Path_12141" data-name="Path 12141"
																		d="M66,31.544A10.541,10.541,0,0,0,86.2,35.76h19.426a1.052,1.052,0,0,0,.471-.111l6.323-3.162A1.054,1.054,0,0,0,112.7,30.8l-6.323-6.323a1.054,1.054,0,0,0-1.491,0l-2.416,2.417-2.417-2.417a1.054,1.054,0,0,0-1.491,0l-2.416,2.417-2.417-2.417a1.054,1.054,0,0,0-1.491,0l-2.853,2.853H86.2A10.541,10.541,0,0,0,66,31.544Zm18.491-2.81a1.054,1.054,0,0,0,.994.7h4.334a1.054,1.054,0,0,0,.745-.309l2.417-2.416L95.4,29.128a1.054,1.054,0,0,0,1.491,0L99.3,26.711l2.417,2.417a1.054,1.054,0,0,0,1.491,0l2.416-2.417,4.544,4.544-4.793,2.4H85.485a1.054,1.054,0,0,0-.994.7,8.431,8.431,0,1,1,0-5.621Z"
																		transform="translate(-59.044 -21.005)" />
																	<circle id="Ellipse_840" data-name="Ellipse 840"
																		cx="1" cy="1" r="1"
																		transform="translate(40 39.001)" />
																	<path id="Path_12142" data-name="Path 12142"
																		d="M43.682,282.011l-6.033,4a4.237,4.237,0,0,0-3.666-2.149h-5.13a2.1,2.1,0,0,1-1.393-.513l-.743-.653a10.56,10.56,0,0,0-13.924,0l-1.6,1.4-2.765,1.954v-.611a1.054,1.054,0,0,0-1.054-1.054H1.054A1.054,1.054,0,0,0,0,285.446v15.809a1.054,1.054,0,0,0,1.054,1.054H7.377a1.054,1.054,0,0,0,1.054-1.054V298.62h3.314l18.189,3.668a1.054,1.054,0,0,0,.833-.184l7.354-5.409a1.054,1.054,0,1,0-1.249-1.7l-6.978,5.133-17.835-3.6a1.054,1.054,0,0,0-.208-.021H8.431v-7.874c4.5-3.185,3.729-2.535,5.753-4.357a8.448,8.448,0,0,1,11.14,0l.743.653a4.208,4.208,0,0,0,2.785,1.038h5.131a2.108,2.108,0,1,1,0,4.216H21.336a1.054,1.054,0,1,0,0,2.108H33.982a4.214,4.214,0,0,0,4.213-4.115l6.648-4.412a5.257,5.257,0,0,1,6.523.564l-6.858,5.044a1.054,1.054,0,0,0,1.249,1.7l7.774-5.718a1.054,1.054,0,0,0,.235-1.46A7.36,7.36,0,0,0,43.682,282.011ZM6.323,300.2H2.108V286.5H6.323Z"
																		transform="translate(0 -252.774)" />
																</g>
															</g>
														</svg>
														<h5>PRIVATE CLOUD AVAILABLE!</h5>
														<p>Contact us for a custom quote.</p>
													</div>
												</div>

												<div class="col-lg-3 col-sm-6 col-12">
													<div class="hover-info-box">
														<svg xmlns="http://www.w3.org/2000/svg" width="50.8"
															height="50.8" viewBox="0 0 50.8 50.8">
															<g id="database" transform="translate(-1 -1)">
																<g id="Group_2821" data-name="Group 2821"
																	transform="translate(13.29 44.426)">
																	<rect id="Rectangle_1518"
																		data-name="Rectangle 1518" width="10"
																		height="4"
																		transform="translate(-0.29 -0.426)"
																		fill="#f80" />
																</g>
																<g id="Group_2822" data-name="Group 2822"
																	transform="translate(13.29 14.929)">
																	<rect id="Rectangle_1519"
																		data-name="Rectangle 1519" width="10"
																		height="3" transform="translate(-0.29 0.07)"
																		fill="#f80" />
																</g>
																<g id="Group_2823" data-name="Group 2823"
																	transform="translate(13.29 29.677)">
																	<rect id="Rectangle_1520"
																		data-name="Rectangle 1520" width="10"
																		height="3"
																		transform="translate(-0.29 0.322)"
																		fill="#f80" />
																</g>
																<g id="Group_2824" data-name="Group 2824"
																	transform="translate(1 10.832)">
																	<path id="Path_12143" data-name="Path 12143"
																		d="M45.458,57.916A2.458,2.458,0,1,0,43,55.458,2.461,2.461,0,0,0,45.458,57.916Zm0-3.277a.819.819,0,1,1-.819.819A.82.82,0,0,1,45.458,54.639Z"
																		transform="translate(-8.587 -20.226)" />
																	<path id="Path_12144" data-name="Path 12144"
																		d="M26.471,53H15v4.916H26.471Zm-4.916,1.639v1.639H19.916V54.639Zm-4.916,0h1.639v1.639H16.639Zm8.194,1.639H23.194V54.639h1.639Z"
																		transform="translate(-3.529 -20.226)" />
																	<path id="Path_12145" data-name="Path 12145"
																		d="M26.471,21.916V17H15v4.916Zm-6.555-1.639V18.639h1.639v1.639Zm4.916,0H23.194V18.639h1.639Zm-8.194-1.639h1.639v1.639H16.639Z"
																		transform="translate(-3.529 -13.723)" />
																	<path id="Path_12146" data-name="Path 12146"
																		d="M41.148,39.219a2.461,2.461,0,0,0,2.458-2.458V30.206a2.461,2.461,0,0,0-2.458-2.458H14.11V24.471H28.683V22.832H11.652a.82.82,0,0,1-.819-.819V15.458a.82.82,0,0,1,.819-.819H26.4V13H11.652a2.461,2.461,0,0,0-2.458,2.458v6.555a2.461,2.461,0,0,0,2.458,2.458h.819v3.277h-.819a2.461,2.461,0,0,0-2.458,2.458v.819H4.277V17.765a2.458,2.458,0,1,0-1.639,0v14.9H9.194V34.3H2.639V49.2a2.458,2.458,0,1,0,1.639,0V35.942H9.194v.819a2.461,2.461,0,0,0,2.458,2.458h.819V42.5h-.819a2.461,2.461,0,0,0-2.458,2.458V51.51a2.461,2.461,0,0,0,2.458,2.458h29.5a2.461,2.461,0,0,0,2.458-2.458V44.955A2.461,2.461,0,0,0,41.148,42.5h-.819V39.219ZM3.458,14.639a.819.819,0,1,1-.819.819A.82.82,0,0,1,3.458,14.639Zm0,37.69a.819.819,0,1,1,.819-.819A.82.82,0,0,1,3.458,52.329Zm7.374-15.568V30.206a.82.82,0,0,1,.819-.819h29.5a.82.82,0,0,1,.819.819v6.555a.82.82,0,0,1-.819.819h-29.5A.82.82,0,0,1,10.832,36.761Zm31.135,8.194V51.51a.82.82,0,0,1-.819.819h-29.5a.82.82,0,0,1-.819-.819V44.955a.82.82,0,0,1,.819-.819h29.5A.82.82,0,0,1,41.968,44.955ZM38.69,42.5H14.11V39.219H38.69Z"
																		transform="translate(-1 -13)" />
																	<path id="Path_12147" data-name="Path 12147"
																		d="M45.458,35a2.458,2.458,0,1,0,2.458,2.458A2.461,2.461,0,0,0,45.458,35Zm0,3.277a.819.819,0,1,1,.819-.819A.82.82,0,0,1,45.458,38.277Z"
																		transform="translate(-8.587 -16.974)" />
																	<path id="Path_12148" data-name="Path 12148"
																		d="M15,39.916H26.471V35H15Zm4.916-1.639V36.639h1.639v1.639Zm4.916,0H23.194V36.639h1.639Zm-8.194-1.639h1.639v1.639H16.639Z"
																		transform="translate(-3.529 -16.974)" />
																</g>
																<g id="Group_2825" data-name="Group 2825"
																	transform="translate(25.581 1)">
																	<path id="Path_12149" data-name="Path 12149"
																		d="M57.219,17.2V11.021L54,10.171c-.035-.088-.072-.178-.111-.265l1.678-2.881L51.195,2.656,48.314,4.334c-.088-.039-.177-.075-.265-.111L47.2,1H41.021l-.85,3.223c-.088.035-.178.072-.265.111L37.025,2.656,32.656,7.025l1.678,2.881c-.039.088-.075.177-.111.265L31,11.02V17.2l3.223.85c.035.088.072.178.111.265l-1.678,2.881,4.369,4.369,2.881-1.678c.088.039.177.075.265.111l.849,3.223H47.2L48.048,24c.088-.035.178-.072.265-.111l2.881,1.678,4.369-4.369-1.678-2.881c.039-.088.075-.177.111-.265ZM44.11,20.664a6.555,6.555,0,1,1,6.555-6.555A6.555,6.555,0,0,1,44.11,20.664Z"
																		transform="translate(-31 -1)" fill="#f80" />
																</g>
																<g id="Group_2826" data-name="Group 2826"
																	transform="translate(31.316 6.735)">
																	<path id="Path_12150" data-name="Path 12150"
																		d="M45.374,22.748a7.374,7.374,0,1,1,7.374-7.374A7.383,7.383,0,0,1,45.374,22.748Zm0-13.11a5.735,5.735,0,1,0,5.735,5.735A5.742,5.742,0,0,0,45.374,9.639Z"
																		transform="translate(-38 -8)" />
																</g>
																<g id="Group_2827" data-name="Group 2827"
																	transform="translate(34.593 10.013)">
																	<path id="Path_12151" data-name="Path 12151"
																		d="M46.1,20.194a4.1,4.1,0,1,1,4.1-4.1A4.1,4.1,0,0,1,46.1,20.194Zm0-6.555A2.458,2.458,0,1,0,48.555,16.1,2.461,2.461,0,0,0,46.1,13.639Z"
																		transform="translate(-42 -12)" />
																</g>
															</g>
														</svg>
														<h5>CUSTOM SERVERS AVAILABLE!</h5>
														<p>Max. 12 Hours Provisioning Guaranteed</p>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="hover-info-box">
														<svg xmlns="http://www.w3.org/2000/svg" width="50.8"
															height="50.8" viewBox="0 0 50.8 50.8">
															<g id="speedometer" transform="translate(-0.001)">
																<path id="Path_12152" data-name="Path 12152"
																	d="M13.175,34.408a21.233,21.233,0,1,1,6.219,15.014,21.166,21.166,0,0,1-6.219-15.014Zm45.641,0A24.408,24.408,0,1,0,34.408,58.816,24.408,24.408,0,0,0,58.816,34.408Zm0,0"
																	transform="translate(-9.007 -9.008)"
																	fill="#fff" />
																<path id="Path_12153" data-name="Path 12153"
																	d="M52.428,108.889l-4.209-4.209a21.232,21.232,0,0,0,0,30.028l4.209-4.209a15.28,15.28,0,0,1,0-21.609Zm0,0"
																	transform="translate(-37.832 -94.293)"
																	fill="#f80" />
																<path id="Path_12154" data-name="Path 12154"
																	d="M104.68,48.219l4.209,4.209a15.28,15.28,0,0,1,21.609,0l4.209-4.209a21.232,21.232,0,0,0-30.028,0Zm0,0"
																	transform="translate(-94.293 -37.833)"
																	fill="#ffba4a" />
																<path id="Path_12155" data-name="Path 12155"
																	d="M364.895,108.886a15.28,15.28,0,0,1,0,21.609L369.1,134.7a21.233,21.233,0,0,0,0-30.028Zm0,0"
																	transform="translate(-328.69 -94.29)"
																	fill="#f80" />
																<path id="Path_12156" data-name="Path 12156"
																	d="M128.084,128.084a15.28,15.28,0,1,0-21.609,0l-4.209,4.209a21.233,21.233,0,0,0,30.028,0ZM113.907,126.5h6.747a1.588,1.588,0,1,1,0,3.175h-6.747a1.588,1.588,0,1,1,0-3.175Zm0,0"
																	transform="translate(-91.879 -91.88)"
																	fill="#fff" />
																<path id="Path_12157" data-name="Path 12157"
																	d="M214.334,348.9h-6.747a1.587,1.587,0,1,0,0,3.175h6.747a1.587,1.587,0,1,0,0-3.175Zm0,0"
																	transform="translate(-185.56 -314.278)"
																	fill="#fff" />
																<path id="Path_12158" data-name="Path 12158"
																	d="M78.563,238.1l17.605-1.962a1.962,1.962,0,1,1,0,3.925Zm0,0"
																	transform="translate(-70.767 -212.697)"
																	fill="#fff" />
																<path id="Path_12159" data-name="Path 12159"
																	d="M43.361,7.439A25.4,25.4,0,0,0,11.308,4.268a.992.992,0,0,0,1.1,1.651,23.415,23.415,0,1,1-5.143,4.668A.992.992,0,0,0,5.73,9.331,25.4,25.4,0,1,0,43.361,7.439Zm0,0" />
																<path id="Path_12160" data-name="Path 12160"
																	d="M69.972,38.545c-.011-.012-.021-.024-.032-.035l-.025-.022a22.223,22.223,0,0,0-31.406.022h0a22.225,22.225,0,0,0,0,31.43h0a22.225,22.225,0,0,0,31.429,0v0h0a22.225,22.225,0,0,0,5.751-21.467.992.992,0,0,0-1.917.514,20.211,20.211,0,0,1-4.561,18.825l-2.8-2.8a16.27,16.27,0,0,0,0-21.565l2.81-2.81a20.2,20.2,0,0,1,1.6,2.008.992.992,0,0,0,1.627-1.136,22.226,22.226,0,0,0-2.478-2.961Zm-2.156.686-2.809,2.809a16.27,16.27,0,0,0-21.565,0l-2.8-2.8a20.217,20.217,0,0,1,27.178-.005ZM39.235,40.638l2.8,2.8a16.132,16.132,0,0,0-4.046,9.631l-1.483.165a.992.992,0,0,0,0,1.972l1.483.165a16.132,16.132,0,0,0,4.046,9.631l-2.8,2.8a20.2,20.2,0,0,1,0-27.174Zm28.506,8.938-1.154.309A.992.992,0,0,0,67.1,51.8l1.151-.309a14.476,14.476,0,0,1,0,5.463L67.1,56.648a.992.992,0,0,0-.514,1.917l1.154.309A14.179,14.179,0,0,1,65,63.6l-.841-.841a.992.992,0,1,0-1.4,1.4l5.05,5.05a20.2,20.2,0,0,1-27.174,0l5.05-5.05a.992.992,0,0,0-1.4-1.4l-.841.84a14.187,14.187,0,0,1-2.737-4.728l1.155-.309a.992.992,0,0,0-.514-1.917l-1.151.309q-.129-.67-.195-1.356l14.112,1.573a2.59,2.59,0,0,0,2.05-.677,3.05,3.05,0,0,0,0-4.543,2.615,2.615,0,0,0-2.05-.677L40,52.849q.065-.685.195-1.356l1.151.309a.992.992,0,1,0,.514-1.917l-1.154-.309a14.179,14.179,0,0,1,2.737-4.728l.841.841a.992.992,0,0,0,1.4-1.4l-.841-.841a14.192,14.192,0,0,1,4.728-2.737l.309,1.155a.992.992,0,0,0,1.917-.514L51.492,40.2a14.474,14.474,0,0,1,5.463,0l-.309,1.151a.992.992,0,1,0,1.917.514l.309-1.154A14.173,14.173,0,0,1,63.6,43.445l-.84.841a.992.992,0,1,0,1.4,1.4L65,44.848a14.173,14.173,0,0,1,2.737,4.728ZM45.576,54.225l8.758-.976a.656.656,0,0,1,.507.184,1.066,1.066,0,0,1,0,1.585.658.658,0,0,1-.507.184Zm0,0"
																	transform="translate(-28.824 -28.825)" />
																<path id="Path_12161" data-name="Path 12161"
																	d="M205.327,338.9H198.58a2.58,2.58,0,1,0,0,5.159h6.747a2.58,2.58,0,1,0,0-5.159Zm0,3.175H198.58a.6.6,0,1,1,0-1.191h6.747a.6.6,0,1,1,0,1.191Zm0,0"
																	transform="translate(-176.553 -305.27)" />
																<path id="Path_12162" data-name="Path 12162"
																	d="M245.028,400.895h-4.071a.992.992,0,0,0,0,1.984h4.071a.992.992,0,0,0,0-1.984Zm0,0"
																	transform="translate(-216.155 -361.119)" />
																<path id="Path_12163" data-name="Path 12163"
																	d="M212.015,400.895h-.023a.992.992,0,0,0,0,1.984h.023a.992.992,0,0,0,0-1.984Zm0,0"
																	transform="translate(-190.064 -361.119)" />
																<path id="Path_12164" data-name="Path 12164"
																	d="M76.3,70.809a.994.994,0,0,0,.69-.278l.011-.01a.992.992,0,0,0-1.386-1.42l-.011.01a.991.991,0,0,0,.7,1.7Zm0,0"
																	transform="translate(-67.835 -61.994)" />
																<path id="Path_12165" data-name="Path 12165"
																	d="M436.927,149.479a1,1,0,0,0,.69-.277l.011-.01a.992.992,0,0,0-1.386-1.42l-.011.01a.991.991,0,0,0,.7,1.7Zm0,0"
																	transform="translate(-392.681 -132.859)" />
															</g>
														</svg>


														<h5>EXTREME SPEED!</h5>
														<p>10GBit/s Servers available!</p>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="hover-info-box">
														<svg xmlns="http://www.w3.org/2000/svg" width="50.802"
															height="50.802" viewBox="0 0 50.802 50.802">
															<g id="group" transform="translate(0 -0.001)">
																<g id="Group_2830" data-name="Group 2830"
																	transform="translate(0.846 0.847)">
																	<path id="Path_12166" data-name="Path 12166"
																		d="M139.029,124.32a14.394,14.394,0,0,1-14.394,14.394,12.509,12.509,0,0,1-1.27-.059,14.394,14.394,0,0,1,0-28.67,12.509,12.509,0,0,1,1.27-.059A14.394,14.394,0,0,1,139.029,124.32Z"
																		transform="translate(-100.08 -99.765)"
																		fill="#a4c2f7" />
																	<ellipse id="Ellipse_841"
																		data-name="Ellipse 841" cx="14.624"
																		cy="14.335" rx="14.624" ry="14.335"
																		transform="translate(10.161 10.22)"
																		fill="#fff" />
																	<g id="Group_2828" data-name="Group 2828"
																		transform="translate(0)">
																		<path id="Path_12167" data-name="Path 12167"
																			d="M227.633,10.912a3.387,3.387,0,0,1-3.387,3.387,3.18,3.18,0,0,1-1.27-.254,3.377,3.377,0,0,1,0-6.266,3.18,3.18,0,0,1,1.27-.254A3.387,3.387,0,0,1,227.633,10.912Z"
																			transform="translate(-199.691 -7.525)"
																			fill="#fff" />
																		<path id="Path_12168" data-name="Path 12168"
																			d="M227.633,437.578a3.387,3.387,0,0,1-3.387,3.387,3.181,3.181,0,0,1-1.27-.254,3.377,3.377,0,0,1,0-6.266,3.181,3.181,0,0,1,1.27-.254A3.387,3.387,0,0,1,227.633,437.578Z"
																			transform="translate(-199.691 -391.855)"
																			fill="#fff" />
																		<path id="Path_12169" data-name="Path 12169"
																			d="M381.233,53.578a3.387,3.387,0,0,1-3.387,3.387,3.18,3.18,0,0,1-1.27-.254,3.377,3.377,0,0,1,0-6.266,3.18,3.18,0,0,1,1.27-.254,3.387,3.387,0,0,1,3.387,3.387Z"
																			transform="translate(-338.05 -45.957)"
																			fill="#fff" />
																		<path id="Path_12170" data-name="Path 12170"
																			d="M56.966,377.845a3.387,3.387,0,0,1-3.387,3.387,3.181,3.181,0,0,1-1.27-.254,3.377,3.377,0,0,1,0-6.266,3.181,3.181,0,0,1,1.27-.254A3.387,3.387,0,0,1,56.966,377.845Z"
																			transform="translate(-45.958 -338.049)"
																			fill="#fff" />
																		<path id="Path_12171" data-name="Path 12171"
																			d="M440.966,224.245a3.387,3.387,0,0,1-3.387,3.387,3.18,3.18,0,0,1-1.27-.254,3.377,3.377,0,0,1,0-6.266,3.18,3.18,0,0,1,1.27-.254,3.387,3.387,0,0,1,3.387,3.387Z"
																			transform="translate(-391.856 -199.69)"
																			fill="#fff" />
																		<path id="Path_12172" data-name="Path 12172"
																			d="M14.3,224.245a3.387,3.387,0,0,1-3.387,3.387,3.18,3.18,0,0,1-1.27-.254,3.377,3.377,0,0,1,0-6.266,3.18,3.18,0,0,1,1.27-.254A3.387,3.387,0,0,1,14.3,224.245Z"
																			transform="translate(-7.525 -199.69)"
																			fill="#fff" />
																	</g>
																	<g id="Group_2829" data-name="Group 2829"
																		transform="translate(0 0.254)">
																		<ellipse id="Ellipse_842"
																			data-name="Ellipse 842" cx="2.117"
																			cy="3.133" rx="2.117" ry="3.133"
																			transform="translate(21.168)"
																			fill="#fff" />
																		<ellipse id="Ellipse_843"
																			data-name="Ellipse 843" cx="2.117"
																			cy="3.133" rx="2.117" ry="3.133"
																			transform="translate(21.168 42.336)"
																			fill="#fff" />
																		<ellipse id="Ellipse_844"
																			data-name="Ellipse 844" cx="2.117"
																			cy="3.133" rx="2.117" ry="3.133"
																			transform="translate(36.409 4.234)"
																			fill="#fff" />
																		<ellipse id="Ellipse_845"
																			data-name="Ellipse 845" cx="2.117"
																			cy="3.133" rx="2.117" ry="3.133"
																			transform="translate(4.234 36.409)"
																			fill="#fff" />
																		<ellipse id="Ellipse_846"
																			data-name="Ellipse 846" cx="2.117"
																			cy="3.133" rx="2.117" ry="3.133"
																			transform="translate(42.336 21.168)"
																			fill="#fff" />
																		<ellipse id="Ellipse_847"
																			data-name="Ellipse 847" cx="2.117"
																			cy="3.133" rx="2.117" ry="3.133"
																			transform="translate(0 21.168)"
																			fill="#fff" />
																	</g>
																	<path id="Path_12173" data-name="Path 12173"
																		d="M193.432,238.711v6.322a4.924,4.924,0,0,1-5.08,4.742h-5.08a4.924,4.924,0,0,1-5.08-4.742v-6.322a.822.822,0,0,1,.847-.79h13.548A.822.822,0,0,1,193.432,238.711Z"
																		transform="translate(-161.257 -215.06)"
																		fill="#a4c2f7" />
																	<path id="Path_12174" data-name="Path 12174"
																		d="M193.432,238.711v6.322c-.119,2.71-2.844,4.83-6.1,4.742h-3.048c-3.252.088-5.978-2.032-6.1-4.742v-6.322a.93.93,0,0,1,1.016-.79h13.208A.93.93,0,0,1,193.432,238.711Z"
																		transform="translate(-161.257 -215.06)"
																		fill="#f80" />
																	<circle id="Ellipse_848" data-name="Ellipse 848"
																		cx="1.693" cy="1.693" r="1.693"
																		transform="translate(22.861 26.248)"
																		fill="#f80" />
																</g>
																<path id="Path_12175" data-name="Path 12175"
																	d="M124.364,139.654a12.509,12.509,0,0,0,1.27.059c.423,0,.833-.028,1.244-.063a14.39,14.39,0,0,1,0-28.663c-.411-.035-.82-.063-1.244-.063a12.509,12.509,0,0,0-1.27.059,14.394,14.394,0,0,0,0,28.67Z"
																	transform="translate(-100.234 -99.917)"
																	fill="#fff" />
																<g id="Group_2831" data-name="Group 2831"
																	transform="translate(0 0.001)">
																	<path id="Path_12176" data-name="Path 12176"
																		d="M185.9,145.839V143.3a6.774,6.774,0,0,0-13.548,0v2.54a1.693,1.693,0,0,0-1.693,1.693v5.927a5.935,5.935,0,0,0,5.927,5.927h5.08a5.935,5.935,0,0,0,5.927-5.927v-5.927A1.693,1.693,0,0,0,185.9,145.839Zm-11.854-2.54a5.08,5.08,0,0,1,10.161,0v2.54H174.044Zm7.621,14.394h-5.08a4.241,4.241,0,0,1-4.149-3.387h.762a.847.847,0,1,0,0-1.693h-.847v-1.693h.847a.847.847,0,1,0,0-1.693h-.847v-1.693H185.9v1.693h-.847a.847.847,0,1,0,0,1.693h.847v1.693h-.847a.847.847,0,1,0,0,1.693h.762A4.241,4.241,0,0,1,181.664,157.693Z"
																		transform="translate(-153.723 -122.978)" />
																	<path id="Path_12177" data-name="Path 12177"
																		d="M232.94,264.525a2.534,2.534,0,0,0-.847,4.925v1a.847.847,0,0,0,1.693,0v-1a2.534,2.534,0,0,0-.847-4.925Zm0,3.387a.847.847,0,1,1,.847-.847A.847.847,0,0,1,232.94,267.912Z"
																		transform="translate(-207.539 -238.277)" />
																	<path id="Path_12178" data-name="Path 12178"
																		d="M46.569,21.168a4.241,4.241,0,0,0-4.149,3.387H40.6a15.18,15.18,0,0,0-4.686-10.161l2.4-2.4a4.246,4.246,0,1,0-1.2-1.2l-2.494,2.494a15.143,15.143,0,0,0-8.372-3.09V8.383a4.234,4.234,0,1,0-1.694,0V10.2A15.236,15.236,0,0,0,10.2,24.555H8.382a4.234,4.234,0,1,0,0,1.693H10.2a15.142,15.142,0,0,0,3.089,8.372L10.8,37.115a4.246,4.246,0,1,0,1.2,1.2l2.4-2.4A15.18,15.18,0,0,0,24.554,40.6v1.821a4.234,4.234,0,1,0,1.694,0V40.6A15.236,15.236,0,0,0,40.6,26.249H42.42a4.234,4.234,0,1,0,4.149-5.081ZM40.642,5.927a2.54,2.54,0,1,1-2.54,2.54A2.54,2.54,0,0,1,40.642,5.927ZM8.466,43.183a2.54,2.54,0,1,1,2.54-2.54A2.54,2.54,0,0,1,8.466,43.183ZM22.861,4.234a2.54,2.54,0,1,1,2.54,2.54A2.54,2.54,0,0,1,22.861,4.234ZM4.233,27.942a2.54,2.54,0,1,1,2.54-2.54A2.54,2.54,0,0,1,4.233,27.942ZM27.941,46.57a2.54,2.54,0,1,1-2.54-2.54A2.54,2.54,0,0,1,27.941,46.57ZM25.4,38.949A13.548,13.548,0,1,1,38.948,25.4,13.548,13.548,0,0,1,25.4,38.949ZM46.569,27.942a2.54,2.54,0,1,1,2.54-2.54A2.54,2.54,0,0,1,46.569,27.942Z"
																		transform="translate(0 -0.001)" />
																	<path id="Path_12179" data-name="Path 12179"
																		d="M248.624,35.847a.86.86,0,0,0,.279-.186.825.825,0,0,0,.178-.914.978.978,0,0,0-.178-.279.887.887,0,0,0-1.2,0,.978.978,0,0,0-.178.279.711.711,0,0,0-.068.322.848.848,0,0,0,.058.322,1.062,1.062,0,0,0,.187.271.771.771,0,0,0,.279.186A.8.8,0,0,0,248.624,35.847Z"
																		transform="translate(-222.902 -30.836)" />
																	<path id="Path_12180" data-name="Path 12180"
																		d="M462.237,247.8a.886.886,0,0,0-1.2,0,.978.978,0,0,0-.178.279.71.71,0,0,0-.068.322.848.848,0,0,0,.058.322,1.062,1.062,0,0,0,.187.271.77.77,0,0,0,.279.186.8.8,0,0,0,.643,0,.859.859,0,0,0,.279-.186.825.825,0,0,0,.178-.914A.978.978,0,0,0,462.237,247.8Z"
																		transform="translate(-415.067 -223)" />
																	<path id="Path_12181" data-name="Path 12181"
																		d="M35.571,247.8a.886.886,0,0,0-1.2,0,.978.978,0,0,0-.178.279.711.711,0,0,0-.068.322.848.848,0,0,0,.058.322,1.062,1.062,0,0,0,.187.271.77.77,0,0,0,.279.186.8.8,0,0,0,.643,0,.86.86,0,0,0,.279-.186.825.825,0,0,0,.178-.914A.979.979,0,0,0,35.571,247.8Z"
																		transform="translate(-30.737 -223)" />
																	<path id="Path_12182" data-name="Path 12182"
																		d="M78.237,401.292a.885.885,0,0,0-1.2,0,.967.967,0,0,0-.178.279.711.711,0,0,0-.068.322.847.847,0,0,0,.058.321,1.054,1.054,0,0,0,.187.272.771.771,0,0,0,.279.185.789.789,0,0,0,.643,0,.855.855,0,0,0,.279-.185.825.825,0,0,0,.178-.914A.963.963,0,0,0,78.237,401.292Z"
																		transform="translate(-69.169 -361.262)" />
																	<path id="Path_12183" data-name="Path 12183"
																		d="M247.7,461.134a.978.978,0,0,0-.178.279.711.711,0,0,0-.068.322.848.848,0,0,0,.058.322,1.062,1.062,0,0,0,.187.271.771.771,0,0,0,.279.186.8.8,0,0,0,.643,0,.86.86,0,0,0,.279-.186.825.825,0,0,0,.178-.914.978.978,0,0,0-.178-.279A.886.886,0,0,0,247.7,461.134Z"
																		transform="translate(-222.902 -415.166)" />
																	<path id="Path_12184" data-name="Path 12184"
																		d="M401.3,78.219a.77.77,0,0,0,.279.185.789.789,0,0,0,.643,0,.854.854,0,0,0,.279-.185.825.825,0,0,0,.178-.914.967.967,0,0,0-.178-.279.885.885,0,0,0-1.2,0,.967.967,0,0,0-.178.279.711.711,0,0,0-.068.322.847.847,0,0,0,.058.321A1.053,1.053,0,0,0,401.3,78.219Z"
																		transform="translate(-361.261 -69.17)" />
																</g>
															</g>
														</svg>
														<h5>DATA CENTER TO DATA CENTER!</h5>
														<p>10GBit/s Servers available!</p>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="hover-info-box">
														<svg id="laptop_1_" data-name="laptop (1)"
															xmlns="http://www.w3.org/2000/svg" width="50.733"
															height="50.733" viewBox="0 0 50.733 50.733">
															<path id="Path_12185" data-name="Path 12185"
																d="M251.822,22.912H224V0h27.822Zm-26.185-1.637h24.548V1.637H225.637Z"
																transform="translate(-201.088)" fill="#333" />
															<path id="Path_12186" data-name="Path 12186"
																d="M277.275,41.819H256V32h21.275Z"
																transform="translate(-229.815 -28.727)"
																fill="#ffa64d" />
															<g id="Group_2832" data-name="Group 2832"
																transform="translate(14.729 26.185)">
																<path id="Path_12187" data-name="Path 12187"
																	d="M180,260.91V256h-4.91v1.637H164.457V256h-4.91v1.637H148.91v1.637h10.638v1.637h4.91v-1.637h10.638v1.637h1.637v4.91h-1.637v4.91h1.637v4.91h-1.637v1.637H164.457v-1.637h-4.91v1.637H148.91v-1.637h-1.637v-4.91h1.637v-4.91h-1.637v-1.637h-1.637v1.637H144v4.91h1.637v4.91H144v4.91h4.91v-1.637h10.638v1.637h4.91v-1.637h10.638v1.637H180v-4.91h-1.637v-4.91H180v-4.91h-1.637v-4.91Zm-17.184-1.637h-1.637v-1.637h1.637Zm-17.184,8.183h1.637v1.637h-1.637Zm1.637,11.456h-1.637v-1.637h1.637Zm15.547,0h-1.637v-1.637h1.637Zm15.547,0h-1.637v-1.637h1.637Zm0-9.819h-1.637v-1.637h1.637Zm-1.637-9.819v-1.637h1.637v1.637Z"
																	transform="translate(-144 -256)" fill="#333" />
																<path id="Path_12188" data-name="Path 12188"
																	d="M267.5,333.32l1.491-1.491a4.9,4.9,0,0,0,6.838-6.838l1.491-1.491-1.157-1.157-1.491,1.491a4.9,4.9,0,0,0-6.838,6.838l-1.491,1.491Zm4.331-8.761a3.273,3.273,0,1,1-3.273,3.273A3.276,3.276,0,0,1,271.832,324.559Z"
																	transform="translate(-253.83 -315.558)"
																	fill="#333" />
															</g>
															<path id="Path_12189" data-name="Path 12189"
																d="M9.637,224,8,233.819,17,242h1.637l9-8.183L26,224Z"
																transform="translate(-7.182 -201.088)"
																fill="#ffa64d" />
															<g id="Group_2833" data-name="Group 2833">
																<path id="Path_12190" data-name="Path 12190"
																	d="M78.546,251.273a3.273,3.273,0,1,0-4.091,3.157v9.117h1.637V254.43A3.27,3.27,0,0,0,78.546,251.273Zm-3.273,1.637a1.637,1.637,0,1,1,1.637-1.637A1.638,1.638,0,0,1,75.273,252.91Z"
																	transform="translate(-64.635 -222.633)"
																	fill="#333" />
																<rect id="Rectangle_1521" data-name="Rectangle 1521"
																	width="1" height="2"
																	transform="translate(46 17.601)" fill="#333" />
																<rect id="Rectangle_1522" data-name="Rectangle 1522"
																	width="18" height="2"
																	transform="translate(26 17.601)" fill="#333" />
																<rect id="Rectangle_1523" data-name="Rectangle 1523"
																	width="21" height="2"
																	transform="translate(26 14.601)" fill="#333" />
																<path id="Path_12191" data-name="Path 12191"
																	d="M19.639,16.366V0h-18V16.366H0v6.546H21.275V16.366ZM3.273,14.729H14.729V13.092H3.273V1.637H18V13.092H16.366v1.637H18v1.637H3.273Zm16.366,6.546h-18V18h18Z"
																	fill="#333" />
															</g>
														</svg>
														<h5>HIGHEST STANDARDS!</h5>
														<p>Tier-III & Tier-IV Data Center Locations</p>
													</div>
												</div>

												<div class="col-lg-3 col-sm-6 col-12">
													<div class="hover-info-box">
														<svg xmlns="http://www.w3.org/2000/svg" width="49.453"
															height="49.452" viewBox="0 0 49.453 49.452">
															<g id="innovation" transform="translate(0 0.001)">
																<path id="Path_12192" data-name="Path 12192"
																	d="M290.6,2.835a11.167,11.167,0,0,0-18.5,6.812,11.091,11.091,0,0,0,3.369,9.6,4.279,4.279,0,0,1,1.119,1.744l13.155,0a4.184,4.184,0,0,1,1.1-1.723,11.053,11.053,0,0,0,3.489-8.1,11.181,11.181,0,0,0-3.73-8.33Zm-2.651,10.723h-2.712l-.479,7.179h-3.19l-.479-7.179h-2.712a2.393,2.393,0,0,1,0-4.786h.154a2.392,2.392,0,0,1,2.387,2.233l.171,2.553h4.148l.171-2.553a2.392,2.392,0,0,1,2.387-2.233h.154a2.393,2.393,0,0,1,0,4.786Zm0,0"
																	transform="translate(-244.873)" fill="#f80" />
																<path id="Path_12193" data-name="Path 12193"
																	d="M90.322,167.964h-1.6a1.591,1.591,0,0,1-.688-3.028l-.015-.014a13.56,13.56,0,1,0,3.1,8.626v-2.94a4.762,4.762,0,0,1-.8-2.643ZM77.56,181.524a7.976,7.976,0,1,1,7.976-7.976A7.976,7.976,0,0,1,77.56,181.524Zm0,0"
																	transform="translate(-57.619 -144.037)"
																	fill="#f80" />
																<path id="Path_12194" data-name="Path 12194"
																	d="M45.465,91.952H40.734l.373-5.583h1.965a3.191,3.191,0,1,0,0-6.381h-.154a3.2,3.2,0,0,0-3.184,2.978l-.12,1.808H36.958l-.12-1.808a3.2,3.2,0,0,0-3.184-2.978H33.5a3.191,3.191,0,1,0,0,6.381h1.965l.373,5.583H31.108a2.393,2.393,0,0,0,0,4.786h.862a5.587,5.587,0,0,0,5.52,4.786h.8V104.1l-2.747.726-.112.462a15.78,15.78,0,0,1-1.876,4.523l-.248.406,1.43,2.458-3.642,3.643-2.458-1.43-.406.248a15.867,15.867,0,0,1-4.524,1.876l-.462.111-.726,2.746H17.365l-.726-2.747-.462-.111a15.843,15.843,0,0,1-4.524-1.876l-.406-.248-2.458,1.43-3.642-3.643,1.43-2.458-.247-.4a15.825,15.825,0,0,1-1.876-4.523l-.112-.462L1.6,104.1V98.948l2.747-.726.112-.462A15.785,15.785,0,0,1,6.33,93.237l.248-.406-1.43-2.457L8.79,86.729l2.458,1.43.406-.248a15.833,15.833,0,0,1,4.524-1.876l.462-.112.726-2.745h5.152l.726,2.747.462.112a15.814,15.814,0,0,1,4.457,1.838,10.934,10.934,0,0,1-.764-2.207,17.452,17.452,0,0,0-2.853-1.062l-.8-3.023h-7.61l-.8,3.023a17.413,17.413,0,0,0-4.1,1.7l-2.7-1.574L3.15,90.115l1.574,2.7a17.376,17.376,0,0,0-1.7,4.1L0,97.719v7.609l3.023.8a17.4,17.4,0,0,0,1.7,4.1l-1.574,2.7,5.38,5.381,2.7-1.574a17.411,17.411,0,0,0,4.1,1.7l.8,3.022h7.61l.8-3.023a17.457,17.457,0,0,0,4.1-1.7l2.7,1.574,5.38-5.381-1.574-2.7a17.382,17.382,0,0,0,1.7-4.1l3.023-.8V101.46A5.587,5.587,0,0,0,44.6,96.738h.861a2.393,2.393,0,1,0,0-4.786Zm-4.138-8.88a1.6,1.6,0,0,1,1.591-1.489h.154a1.6,1.6,0,1,1,0,3.191H41.213Zm-7.826,1.7a1.6,1.6,0,0,1,0-3.191h.154a1.6,1.6,0,0,1,1.591,1.489l.114,1.7Zm3.565,1.6h2.442l-.372,5.583h-1.7Zm2.019,13.56h-1.6a4,4,0,0,1-3.908-3.191h9.41A4,4,0,0,1,39.084,99.929Zm6.381-4.786H31.108a.8.8,0,1,1,0-1.6H45.465a.8.8,0,1,1,0,1.6Zm0,0"
																	transform="translate(0 -72.013)" />
																<path id="Path_12195" data-name="Path 12195"
																	d="M129.548,216.762a8.774,8.774,0,1,0-8.774,8.774A8.784,8.784,0,0,0,129.548,216.762Zm-8.774,7.179a7.179,7.179,0,1,1,7.179-7.179A7.187,7.187,0,0,1,120.774,223.941Zm0,0"
																	transform="translate(-100.833 -187.251)" />
																<path id="Path_12196" data-name="Path 12196"
																	d="M192,127.988h1.6v1.6H192Zm0,0"
																	transform="translate(-172.857 -115.228)" />
																<path id="Path_12197" data-name="Path 12197"
																	d="M75.563,172.671l1.128-1.128,1.128,1.128L76.69,173.8Zm0,0"
																	transform="translate(-68.028 -154.44)" />
																<path id="Path_12198" data-name="Path 12198"
																	d="M32,287.988h1.6v1.6H32Zm0,0"
																	transform="translate(-28.809 -259.275)" />
																<path id="Path_12199" data-name="Path 12199"
																	d="M75.574,398.949l1.128-1.128,1.129,1.128L76.7,400.077Zm0,0"
																	transform="translate(-68.039 -358.157)" />
																<path id="Path_12200" data-name="Path 12200"
																	d="M192,447.988h1.6v1.6H192Zm0,0"
																	transform="translate(-172.857 -403.322)" />
																<path id="Path_12201" data-name="Path 12201"
																	d="M301.852,398.944l1.129-1.128,1.128,1.129-1.128,1.128Zm0,0"
																	transform="translate(-271.756 -358.153)" />
																<path id="Path_12202" data-name="Path 12202"
																	d="M144,245.571h1.6a3.993,3.993,0,0,1,3.988-3.988v-1.6A5.59,5.59,0,0,0,144,245.571Zm0,0"
																	transform="translate(-129.642 -216.061)" />
																<path id="Path_12203" data-name="Path 12203"
																	d="M147.184,309.862a5.565,5.565,0,0,0,1.1,1.862l1.188-1.065a3.952,3.952,0,0,1-.788-1.328Zm0,0"
																	transform="translate(-132.509 -278.491)" />
																<path id="Path_12204" data-name="Path 12204"
																	d="M326.783,46.794l-.888-1.325a8.007,8.007,0,0,0-1.512,1.314l1.189,1.064a6.384,6.384,0,0,1,1.212-1.053Zm0,0"
																	transform="translate(-292.04 -40.936)" />
																<path id="Path_12205" data-name="Path 12205"
																	d="M361.406,33.75l.354-1.555a8.05,8.05,0,0,0-4.431.256l.531,1.5a6.443,6.443,0,0,1,3.546-.2Zm0,0"
																	transform="translate(-321.701 -28.808)" />
															</g>
														</svg>
														<h5>SELF CONTROL PANEL!</h5>
														<p>100% Automated Reboot & OS installation.</p>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="hover-info-box">
														<svg xmlns="http://www.w3.org/2000/svg" width="50"
															height="50" viewBox="0 0 50 50">
															<g id="_026-computer_networks"
																data-name="026-computer networks"
																transform="translate(-1 -1)">
																<g id="Group_2835" data-name="Group 2835"
																	transform="translate(19.548 4.226)">
																	<g id="Group_2834" data-name="Group 2834">
																		<path id="Path_12206" data-name="Path 12206"
																			d="M35.29,11.452H25.613A1.615,1.615,0,0,1,24,9.839V6.613A1.615,1.615,0,0,1,25.613,5H35.29A1.615,1.615,0,0,1,36.9,6.613V9.839A1.615,1.615,0,0,1,35.29,11.452Z"
																			transform="translate(-24 -5)"
																			fill="#f80" />
																	</g>
																</g>
																<g id="Group_2837" data-name="Group 2837"
																	transform="translate(19.548 12.29)">
																	<g id="Group_2836" data-name="Group 2836">
																		<path id="Path_12207" data-name="Path 12207"
																			d="M35.29,21.452H25.613A1.615,1.615,0,0,1,24,19.839V16.613A1.615,1.615,0,0,1,25.613,15H35.29A1.615,1.615,0,0,1,36.9,16.613v3.226A1.615,1.615,0,0,1,35.29,21.452Z"
																			transform="translate(-24 -15)"
																			fill="#f80" />
																	</g>
																</g>
																<g id="Group_2839" data-name="Group 2839"
																	transform="translate(19.548 20.355)">
																	<g id="Group_2838" data-name="Group 2838">
																		<path id="Path_12208" data-name="Path 12208"
																			d="M35.29,31.452H25.613A1.615,1.615,0,0,1,24,29.839V26.613A1.615,1.615,0,0,1,25.613,25H35.29A1.615,1.615,0,0,1,36.9,26.613v3.226A1.615,1.615,0,0,1,35.29,31.452Z"
																			transform="translate(-24 -25)"
																			fill="#f80" />
																	</g>
																</g>
																<path id="Path_12209" data-name="Path 12209"
																	d="M48.581,33.258H42.129v-2.68L47.321,28.5l-6.89-3.445,2.5-1.879V20.355h1.613a2.422,2.422,0,0,0,2.419-2.419V11.484a2.422,2.422,0,0,0-2.419-2.419H39.71a2.422,2.422,0,0,0-2.419,2.419v6.452a2.422,2.422,0,0,0,2.419,2.419h1.613v2.016l-3.948,2.96,6.012,3.006-2.871,1.148v3.772H34.065a2.422,2.422,0,0,0-2.419,2.419V39.71H28.271a2.417,2.417,0,0,0-1.465-1.465V30.032h6.452a2.422,2.422,0,0,0,2.419-2.419V3.419A2.422,2.422,0,0,0,33.258,1H18.742a2.422,2.422,0,0,0-2.419,2.419V27.613a2.422,2.422,0,0,0,2.419,2.419h6.452v8.213a2.417,2.417,0,0,0-1.465,1.465H20.355V35.677a2.422,2.422,0,0,0-2.419-2.419H9.871v-2.68L15.063,28.5l-6.89-3.445,2.5-1.879V20.355H12.29a2.422,2.422,0,0,0,2.419-2.419V11.484A2.422,2.422,0,0,0,12.29,9.065H7.452a2.422,2.422,0,0,0-2.419,2.419v6.452a2.422,2.422,0,0,0,2.419,2.419H9.065v2.016l-3.948,2.96,6.012,3.006L8.258,29.486v3.772H3.419A2.422,2.422,0,0,0,1,35.677v9.677a2.422,2.422,0,0,0,2.419,2.419H6.645v1.613H5.032V51h11.29V49.387H14.71V47.774h3.226a2.422,2.422,0,0,0,2.419-2.419V41.323h3.374a2.405,2.405,0,0,0,4.542,0h3.374v4.032a2.422,2.422,0,0,0,2.419,2.419H37.29v1.613H35.677V51h11.29V49.387H45.355V47.774h3.226A2.422,2.422,0,0,0,51,45.355V35.677a2.422,2.422,0,0,0-2.419-2.419ZM38.9,11.484a.807.807,0,0,1,.806-.806h4.839a.807.807,0,0,1,.806.806v.806H38.9Zm0,2.419h6.452v1.613H38.9Zm.806,4.839a.807.807,0,0,1-.806-.806v-.806h6.452v.806a.807.807,0,0,1-.806.806ZM6.645,11.484a.807.807,0,0,1,.806-.806H12.29a.807.807,0,0,1,.806.806v.806H6.645Zm0,2.419H13.1v1.613H6.645Zm.806,4.839a.807.807,0,0,1-.806-.806v-.806H13.1v.806a.807.807,0,0,1-.806.806ZM13.1,49.387H8.258V47.774H13.1Zm5.645-4.032a.807.807,0,0,1-.806.806H3.419a.807.807,0,0,1-.806-.806v-.806H18.742Zm0-2.419H2.613V35.677a.807.807,0,0,1,.806-.806H17.935a.807.807,0,0,1,.806.806Zm0-14.516a.807.807,0,0,1-.806-.806V3.419a.807.807,0,0,1,.806-.806H33.258a.807.807,0,0,1,.806.806V27.613a.807.807,0,0,1-.806.806ZM26,41.323a.806.806,0,1,1,.806-.806A.807.807,0,0,1,26,41.323Zm17.742,8.065H38.9V47.774h4.839Zm5.645-4.032a.807.807,0,0,1-.806.806H34.065a.807.807,0,0,1-.806-.806v-.806H49.387Zm0-2.419H33.258V35.677a.807.807,0,0,1,.806-.806H48.581a.807.807,0,0,1,.806.806Z" />
															</g>
														</svg>
														<h5>ADVANCED CONTROL PANEL!</h5>
														<p>Intuitive way to Manage your Servers!</p>
													</div>
												</div>
												<div class="col-lg-3 col-sm-6 col-12">
													<div class="hover-info-box">
														<svg xmlns="http://www.w3.org/2000/svg" width="49.631"
															height="49.631" viewBox="0 0 49.631 49.631">
															<g id="database_1_" data-name="database (1)"
																transform="translate(-1 -1)">
																<g id="Group_2840" data-name="Group 2840"
																	transform="translate(39.842 46.315)">
																	<rect id="Rectangle_1524"
																		data-name="Rectangle 1524" width="6"
																		height="1"
																		transform="translate(0.158 -0.314)"
																		fill="#f0bc5e" />
																</g>
																<g id="Group_2841" data-name="Group 2841"
																	transform="translate(39.842 33.368)">
																	<rect id="Rectangle_1525"
																		data-name="Rectangle 1525" width="3"
																		height="1"
																		transform="translate(0.158 -0.367)"
																		fill="#f80" />
																</g>
																<g id="Group_2842" data-name="Group 2842"
																	transform="translate(43.079 39.841)">
																	<rect id="Rectangle_1526"
																		data-name="Rectangle 1526" width="3"
																		height="1"
																		transform="translate(-0.079 0.158)"
																		fill="#f80" />
																</g>
																<g id="Group_2843" data-name="Group 2843"
																	transform="translate(22.579 46.315)">
																	<rect id="Rectangle_1527"
																		data-name="Rectangle 1527" width="6"
																		height="1"
																		transform="translate(0.421 -0.314)"
																		fill="#f80" />
																</g>
																<g id="Group_2844" data-name="Group 2844"
																	transform="translate(22.579 33.368)">
																	<rect id="Rectangle_1528"
																		data-name="Rectangle 1528" width="3"
																		height="1"
																		transform="translate(0.421 -0.367)"
																		fill="#f80" />
																</g>
																<g id="Group_2845" data-name="Group 2845"
																	transform="translate(25.815 39.841)">
																	<rect id="Rectangle_1529"
																		data-name="Rectangle 1529" width="3"
																		height="1"
																		transform="translate(0.185 0.158)"
																		fill="#f80" />
																</g>
																<g id="Group_2846" data-name="Group 2846"
																	transform="translate(5.315 46.315)">
																	<rect id="Rectangle_1530"
																		data-name="Rectangle 1530" width="7"
																		height="1"
																		transform="translate(-0.315 -0.314)"
																		fill="#f80" />
																</g>
																<g id="Group_2847" data-name="Group 2847"
																	transform="translate(5.315 33.368)">
																	<rect id="Rectangle_1531"
																		data-name="Rectangle 1531" width="4"
																		height="1"
																		transform="translate(-0.315 -0.367)"
																		fill="#f80" />
																</g>
																<g id="Group_2848" data-name="Group 2848"
																	transform="translate(8.552 39.841)">
																	<rect id="Rectangle_1532"
																		data-name="Rectangle 1532" width="3"
																		height="1"
																		transform="translate(0.448 0.158)"
																		fill="#f80" />
																</g>
																<g id="Group_2850" data-name="Group 2850"
																	transform="translate(5.803 1)">
																	<g id="Group_2849" data-name="Group 2849">
																		<path id="Path_12210" data-name="Path 12210"
																			d="M40.621,21.813H13.4a6.4,6.4,0,0,1-.335-12.8A6.445,6.445,0,0,1,19.007,5a6.318,6.318,0,0,1,1.978.315A10.391,10.391,0,0,1,39.551,9.1a6.4,6.4,0,1,1,1.07,12.718Z"
																			transform="translate(-7 -1)"
																			fill="#f80" />
																	</g>
																</g>
																<g id="Group_2851" data-name="Group 2851"
																	transform="translate(1 4.205)">
																	<rect id="Rectangle_1533"
																		data-name="Rectangle 1533" width="1"
																		height="1"
																		transform="translate(3 28.795)" />
																	<rect id="Rectangle_1534"
																		data-name="Rectangle 1534" width="2"
																		height="1"
																		transform="translate(6 28.795)" />
																	<rect id="Rectangle_1535"
																		data-name="Rectangle 1535" width="1"
																		height="1"
																		transform="translate(10 35.795)" />
																	<rect id="Rectangle_1536"
																		data-name="Rectangle 1536" width="2"
																		height="1"
																		transform="translate(6 35.795)" />
																	<rect id="Rectangle_1537"
																		data-name="Rectangle 1537" width="2"
																		height="1"
																		transform="translate(6 41.795)" />
																	<rect id="Rectangle_1538"
																		data-name="Rectangle 1538" width="1"
																		height="1"
																		transform="translate(10 41.795)" />
																	<rect id="Rectangle_1539"
																		data-name="Rectangle 1539" width="1"
																		height="1"
																		transform="translate(3 41.795)" />
																	<rect id="Rectangle_1540"
																		data-name="Rectangle 1540" width="3"
																		height="1"
																		transform="translate(20 28.795)" />
																	<rect id="Rectangle_1541"
																		data-name="Rectangle 1541" width="2"
																		height="1"
																		transform="translate(24 28.795)" />
																	<rect id="Rectangle_1542"
																		data-name="Rectangle 1542" width="2"
																		height="1"
																		transform="translate(27 35.795)" />
																	<rect id="Rectangle_1543"
																		data-name="Rectangle 1543" width="2"
																		height="1"
																		transform="translate(24 35.795)" />
																	<rect id="Rectangle_1544"
																		data-name="Rectangle 1544" width="2"
																		height="1"
																		transform="translate(24 41.795)" />
																	<rect id="Rectangle_1545"
																		data-name="Rectangle 1545" width="2"
																		height="1"
																		transform="translate(27 41.795)" />
																	<rect id="Rectangle_1546"
																		data-name="Rectangle 1546" width="3"
																		height="1"
																		transform="translate(20 41.795)" />
																	<path id="Path_12211" data-name="Path 12211"
																		d="M48.229,35h-4V30.2H26.616V27h-1.6v3.2H7.4V35h-4a2.4,2.4,0,0,0-2.4,2.4v16.01a2.4,2.4,0,0,0,2.4,2.4h9.606a2.4,2.4,0,0,0,2.4-2.4V37.406a2.4,2.4,0,0,0-2.4-2.4H9V31.8h16.01V35h-4a2.4,2.4,0,0,0-2.4,2.4v16.01a2.4,2.4,0,0,0,2.4,2.4h9.606a2.4,2.4,0,0,0,2.4-2.4V37.406a2.4,2.4,0,0,0-2.4-2.4h-4V31.8h16.01V35h-4a2.4,2.4,0,0,0-2.4,2.4v16.01a2.4,2.4,0,0,0,2.4,2.4h9.606a2.4,2.4,0,0,0,2.4-2.4V37.406A2.4,2.4,0,0,0,48.229,35ZM2.6,43.01H13.808v4.8H2.6ZM13.007,54.217H3.4a.8.8,0,0,1-.8-.8v-4H13.808v4A.8.8,0,0,1,13.007,54.217Zm.8-16.81v4H2.6v-4a.8.8,0,0,1,.8-.8h9.606A.8.8,0,0,1,13.808,37.406Zm6.4,5.6H31.419v4.8H20.212ZM30.618,54.217H21.012a.8.8,0,0,1-.8-.8v-4H31.419v4A.8.8,0,0,1,30.618,54.217Zm.8-16.81v4H20.212v-4a.8.8,0,0,1,.8-.8h9.606A.8.8,0,0,1,31.419,37.406Zm7.2-.8h9.606a.8.8,0,0,1,.8.8v4H37.823v-4A.8.8,0,0,1,38.623,36.606Zm10.406,6.4v4.8H37.823v-4.8Zm-.8,11.207H38.623a.8.8,0,0,1-.8-.8v-4H49.03v4A.8.8,0,0,1,48.229,54.217Z"
																		transform="translate(-1 -9.392)" />
																	<rect id="Rectangle_1547"
																		data-name="Rectangle 1547" width="1"
																		height="1"
																		transform="translate(39 28.795)" />
																	<rect id="Rectangle_1548"
																		data-name="Rectangle 1548" width="1"
																		height="1"
																		transform="translate(42 28.795)" />
																	<rect id="Rectangle_1549"
																		data-name="Rectangle 1549" width="1"
																		height="1"
																		transform="translate(45 35.795)" />
																	<rect id="Rectangle_1550"
																		data-name="Rectangle 1550" width="1"
																		height="1"
																		transform="translate(42 35.795)" />
																	<rect id="Rectangle_1551"
																		data-name="Rectangle 1551" width="1"
																		height="1"
																		transform="translate(42 41.795)" />
																	<rect id="Rectangle_1552"
																		data-name="Rectangle 1552" width="1"
																		height="1"
																		transform="translate(45 41.795)" />
																	<rect id="Rectangle_1553"
																		data-name="Rectangle 1553" width="1"
																		height="1"
																		transform="translate(39 41.795)" />
																	<path id="Path_12212" data-name="Path 12212"
																		d="M37.693,8.243l1.132-1.132a7.214,7.214,0,0,0-10.19,0l1.133,1.132A5.612,5.612,0,0,1,37.693,8.243Z"
																		transform="translate(-6.513 -5.004)" />
																	<path id="Path_12213" data-name="Path 12213"
																		d="M52.2,18.2A3.205,3.205,0,0,0,49,15v1.6a1.6,1.6,0,0,1,0,3.2v1.6A3.205,3.205,0,0,0,52.2,18.2Z"
																		transform="translate(-10.576 -6.998)" />
																</g>
															</g>
														</svg>
														<h5>MULTI-SERVER MANAGEMENT!</h5>
														<p>Manage all your servers, at any location</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Content End-->
	<!--Content (2)-->
	<section class="section fix-height-container bg-black">
		<div class="content-wrapper">
			<div class="section-text text-center mb-2">
				<h2>Our Server Hosting Features</h2>
				<span class="section-border"></span>
				<h5 class="text-orange">See why you should rent your Dedicated Server Infrastructure from us!
				</h5>
			</div>
			<div class="content-text-wrapper">
				<div class="container-fluid">
					<div class="row ">
						<div class="col-lg-4 col-12">
							<div class="info-icon-primary-box info-right-align">
								<div class="info-icon-primary-text">
									<h5>100% Uptime !</h5>
									<p>We haven’t had any outage in over 5 years.</p>
								</div>
								<div class="icon-primary-box">
									<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
										viewBox="0 0 40 40">
										<g id="Calendar" transform="translate(-2 -2)">
											<path id="Path_12214" data-name="Path 12214"
												d="M38.667,5.994H35.333V4.663a2.667,2.667,0,0,0-5.333,0V5.994H24.667V4.663a2.667,2.667,0,0,0-5.333,0V5.994H14V4.663a2.667,2.667,0,0,0-5.333,0V5.994H5.333A3.331,3.331,0,0,0,2,9.323V35.95a3.331,3.331,0,0,0,3.333,3.328H24a.666.666,0,1,0,0-1.331H5.333a2,2,0,0,1-2-2V15.314H40.667V26.63a.667.667,0,0,0,1.333,0V9.323a3.331,3.331,0,0,0-3.333-3.328ZM31.333,4.663a1.333,1.333,0,0,1,2.667,0V8.657a1.333,1.333,0,0,1-2.667,0Zm-10.667,0a1.333,1.333,0,0,1,2.667,0V8.657a1.333,1.333,0,0,1-2.667,0ZM10,4.663a1.333,1.333,0,0,1,2.667,0V8.657a1.333,1.333,0,0,1-2.667,0Zm30.667,9.32H3.333V9.323a2,2,0,0,1,2-2H8.667V8.657a2.667,2.667,0,0,0,5.333,0V7.325h5.333V8.657a2.667,2.667,0,0,0,5.333,0V7.325H30V8.657a2.667,2.667,0,0,0,5.333,0V7.325h3.333a2,2,0,0,1,2,2Z"
												transform="translate(0)" fill="#fff" />
											<path id="Path_12215" data-name="Path 12215"
												d="M27.443,28.361A1.361,1.361,0,0,0,26.082,27H23.361A1.361,1.361,0,0,0,22,28.361V30.4a1.361,1.361,0,0,0,1.361,1.361h2.722A1.361,1.361,0,0,0,27.443,30.4ZM23.361,30.4V28.361h2.722V30.4Z"
												transform="translate(-6.709 -8.379)" fill="#fff" />
											<path id="Path_12216" data-name="Path 12216"
												d="M15.443,28.361A1.361,1.361,0,0,0,14.082,27H11.361A1.361,1.361,0,0,0,10,28.361V30.4a1.361,1.361,0,0,0,1.361,1.361h2.722A1.361,1.361,0,0,0,15.443,30.4ZM11.361,30.4V28.361h2.722V30.4Z"
												transform="translate(-2.557 -8.379)" fill="#fff" />
											<path id="Path_12217" data-name="Path 12217"
												d="M50.082,31.763A1.361,1.361,0,0,0,51.443,30.4V28.361A1.361,1.361,0,0,0,50.082,27H47.361A1.361,1.361,0,0,0,46,28.361V30.4a1.361,1.361,0,0,0,1.361,1.361Zm-2.722-3.4h2.722V30.4H47.361Z"
												transform="translate(-14.886 -8.379)" fill="#fff" />
											<path id="Path_12218" data-name="Path 12218"
												d="M27.443,37.361A1.361,1.361,0,0,0,26.082,36H23.361A1.361,1.361,0,0,0,22,37.361V39.4a1.361,1.361,0,0,0,1.361,1.361h2.722A1.361,1.361,0,0,0,27.443,39.4ZM23.361,39.4V37.361h2.722V39.4Z"
												transform="translate(-6.709 -11.395)" fill="#fff" />
											<path id="Path_12219" data-name="Path 12219"
												d="M15.443,37.361A1.361,1.361,0,0,0,14.082,36H11.361A1.361,1.361,0,0,0,10,37.361V39.4a1.361,1.361,0,0,0,1.361,1.361h2.722A1.361,1.361,0,0,0,15.443,39.4ZM11.361,39.4V37.361h2.722V39.4Z"
												transform="translate(-2.557 -11.395)" fill="#fff" />
											<path id="Path_12220" data-name="Path 12220"
												d="M26.082,45H23.361A1.361,1.361,0,0,0,22,46.361V48.4a1.361,1.361,0,0,0,1.361,1.361h2.722A1.361,1.361,0,0,0,27.443,48.4V46.361A1.361,1.361,0,0,0,26.082,45Zm-2.722,3.4V46.361h2.722V48.4Z"
												transform="translate(-6.709 -14.411)" fill="#fff" />
											<path id="Path_12221" data-name="Path 12221"
												d="M35.361,31.763h2.722A1.361,1.361,0,0,0,39.443,30.4V28.361A1.361,1.361,0,0,0,38.082,27H35.361A1.361,1.361,0,0,0,34,28.361V30.4A1.361,1.361,0,0,0,35.361,31.763Zm0-3.4h2.722V30.4H35.361Z"
												transform="translate(-10.734 -8.379)" fill="#fff" />
											<path id="Path_12222" data-name="Path 12222"
												d="M34,39.4a1.361,1.361,0,0,0,1.361,1.361.68.68,0,0,0,0-1.361V37.361h2.722a.68.68,0,0,0,0-1.361H35.361A1.361,1.361,0,0,0,34,37.361Z"
												transform="translate(-10.725 -11.395)" fill="#fff" />
											<path id="Path_12223" data-name="Path 12223"
												d="M14.082,45H11.361A1.361,1.361,0,0,0,10,46.361V48.4a1.361,1.361,0,0,0,1.361,1.361h2.722A1.361,1.361,0,0,0,15.443,48.4V46.361A1.361,1.361,0,0,0,14.082,45Zm-2.722,3.4V46.361h2.722V48.4Z"
												transform="translate(-2.557 -14.411)" fill="#fff" />
											<path id="Path_12224" data-name="Path 12224"
												d="M44.845,36a8.845,8.845,0,1,0,8.845,8.845A8.845,8.845,0,0,0,44.845,36Zm0,16.33a7.484,7.484,0,1,1,7.484-7.484,7.484,7.484,0,0,1-7.484,7.484Z"
												transform="translate(-11.69 -11.69)" fill="#fff" />
											<path id="Path_12225" data-name="Path 12225"
												d="M50.617,44.714l-5.292,5.292L42.919,47.6a.68.68,0,1,0-.962.962l2.886,2.887a.68.68,0,0,0,.962,0l5.773-5.773a.68.68,0,1,0-.962-.962Z"
												transform="translate(-13.531 -14.412)" fill="#fff" />
										</g>
									</svg>
								</div>
							</div>
							<div class="info-icon-primary-box info-right-align mt-3">
								<div class="info-icon-primary-text">
									<h5>30 DAY MONEY BACK!</h5>
									<p>Try us – you will like us.</p>
								</div>
								<div class="icon-primary-box">
									<svg xmlns="http://www.w3.org/2000/svg" width="39.988" height="40"
										viewBox="0 0 39.988 40">
										<g id="_002-hand" data-name="002-hand" transform="translate(0)">
											<path id="Path_12226" data-name="Path 12226"
												d="M220.072,331.541a.79.79,0,1,0-1.116,0A.79.79,0,0,0,220.072,331.541Zm0,0"
												transform="translate(-201.683 -304.408)" fill="#fff" />
											<path id="Path_12227" data-name="Path 12227"
												d="M188.449,8.68A8.68,8.68,0,1,0,197.129,0,8.69,8.69,0,0,0,188.449,8.68Zm15.782,0a7.1,7.1,0,1,1-7.1-7.1A7.11,7.11,0,0,1,204.231,8.68Zm0,0"
												transform="translate(-173.88)" fill="#fff" />
											<path id="Path_12228" data-name="Path 12228"
												d="M9.5,235.74a.775.775,0,0,0,1.1.007l3.787-3.769a2.4,2.4,0,0,0,.556-2.449l.815-.794a2.317,2.317,0,0,1,1.626-.664H27.766a6.956,6.956,0,0,0,4.9-2.012c.054-.053-.412.5,7.083-8.549a3.183,3.183,0,0,0-.371-4.449,3.11,3.11,0,0,0-4.383.352L30.39,218.2a3.127,3.127,0,0,0-2.428-1.175H19.252a9.987,9.987,0,0,0-3.911-.789,9.644,9.644,0,0,0-8.807,5.045,2.318,2.318,0,0,0-2.089.654L.729,225.7a.8.8,0,0,0,0,1.113Zm5.843-17.927a8.452,8.452,0,0,1,3.438.723.773.773,0,0,0,.313.066h8.869a1.578,1.578,0,0,1,0,3.156H21.589a.789.789,0,0,0,0,1.578h6.372a3.144,3.144,0,0,0,3.124-3.156,3.2,3.2,0,0,0-.027-.413c4.458-4.63,5.087-5.281,5.114-5.313a1.556,1.556,0,0,1,2.2-.188,1.593,1.593,0,0,1,.183,2.227l-7.005,8.461a5.409,5.409,0,0,1-3.786,1.538H17.383a3.862,3.862,0,0,0-2.711,1.106l-.664.647-6.119-6.182a8.049,8.049,0,0,1,7.451-4.252ZM5.55,223.049a.773.773,0,0,1,.967-.111c.135.083-.253-.274,6.765,6.807a.8.8,0,0,1,0,1.112l-3.228,3.213-7.674-7.813Zm0,0"
												transform="translate(-0.501 -195.973)" fill="#fff" />
											<path id="Path_12229" data-name="Path 12229"
												d="M267.416,40.778V41.7a2.367,2.367,0,0,0,.789,4.6.789.789,0,0,1,0,1.578,1.427,1.427,0,0,1-1.025-.6.789.789,0,0,0-1.208,1.016,3.273,3.273,0,0,0,1.444,1.028v.921a.789.789,0,1,0,1.578,0v-.925a2.367,2.367,0,0,0-.789-4.6.789.789,0,0,1,0-1.578,1.267,1.267,0,0,1,.853.413.789.789,0,0,0,1.1-1.134,3.049,3.049,0,0,0-1.162-.726v-.919a.789.789,0,1,0-1.578,0Zm0,0"
												transform="translate(-245.09 -36.832)" fill="#fff" />
										</g>
									</svg>
								</div>
							</div>
							<div class="info-icon-primary-box info-right-align mt-3">
								<div class="info-icon-primary-text">
									<h5>INSTANT SERVER SETUP!</h5>
									<p>Your Server wil be ready within minutes</p>
								</div>
								<div class="icon-primary-box">
									<svg xmlns="http://www.w3.org/2000/svg" width="35.638" height="40"
										viewBox="0 0 35.638 40">
										<g id="_003-computer" data-name="003-computer" transform="translate(0)">
											<g id="Group_2863" data-name="Group 2863"
												transform="translate(16.078 21.148)">
												<path id="Path_12230" data-name="Path 12230"
													d="M233.784,271.566h2.33a.576.576,0,1,0,0-1.152h-2.33a.576.576,0,1,0,0,1.152Z"
													transform="translate(-233.208 -270.414)" fill="#fff" />
											</g>
											<g id="Group_2864" data-name="Group 2864" transform="translate(0 0)">
												<path id="Path_12231" data-name="Path 12231"
													d="M138.293,92.386a.576.576,0,0,0-.812.064L131.5,99.455a.576.576,0,0,0,.876.748l5.983-7.005A.576.576,0,0,0,138.293,92.386Z"
													transform="translate(-123.237 -85.004)" fill="#fff" />
												<path id="Path_12232" data-name="Path 12232"
													d="M131.552,114.556a.576.576,0,0,0,.813-.048l1.617-1.819a.576.576,0,1,0-.861-.765l-1.617,1.819A.576.576,0,0,0,131.552,114.556Z"
													transform="translate(-123.26 -102.984)" fill="#fff" />
												<path id="Path_12233" data-name="Path 12233"
													d="M77.236,408.8a1.2,1.2,0,0,0-1.151-.827H56.221a.576.576,0,1,0,0,1.152H76.085a.033.033,0,0,1,.032.023l1.809,5.6a.029.029,0,0,1,0,.029.03.03,0,0,1-.027.013H47.5a.03.03,0,0,1-.027-.013.029.029,0,0,1,0-.029l1.809-5.6a.033.033,0,0,1,.032-.023h4.264a.576.576,0,1,0,0-1.152H49.307a1.2,1.2,0,0,0-1.151.827l-1.809,5.6a1.156,1.156,0,0,0,.177,1.058,1.2,1.2,0,0,0,.975.485h30.4a1.2,1.2,0,0,0,.975-.485,1.156,1.156,0,0,0,.177-1.058Z"
													transform="translate(-44.877 -375.942)" fill="#fff" />
												<path id="Path_12234" data-name="Path 12234"
													d="M61.2,0H30.249A2.354,2.354,0,0,0,27.9,2.358v19.97a2.354,2.354,0,0,0,2.344,2.358H41.76a27.8,27.8,0,0,1-.408,4.252H38.829a.59.59,0,0,0,0,1.179h13.79a.59.59,0,0,0,0-1.179H50.1a27.8,27.8,0,0,1-.408-4.252H61.2a2.354,2.354,0,0,0,2.344-2.358V2.358A2.354,2.354,0,0,0,61.2,0ZM42.549,28.938a31.4,31.4,0,0,0,.384-4.252h5.581a31.4,31.4,0,0,0,.384,4.252Zm19.821-6.61A1.177,1.177,0,0,1,61.2,23.506H30.249a1.177,1.177,0,0,1-1.172-1.179V20.191H62.37v2.137Zm0-3.316H60.83v-8.7a.586.586,0,1,0-1.172,0v8.7H31.79V4a.156.156,0,0,1,.155-.156H59.5A.156.156,0,0,1,59.658,4V7.61a.586.586,0,1,0,1.172,0V4A1.333,1.333,0,0,0,59.5,2.662H31.945A1.333,1.333,0,0,0,30.617,4V19.012h-1.54V2.358a1.177,1.177,0,0,1,1.172-1.179H61.2A1.177,1.177,0,0,1,62.37,2.358Z"
													transform="translate(-27.905 0)" fill="#fff" />
												<path id="Path_12235" data-name="Path 12235"
													d="M122.99,438.935h-.782a.576.576,0,1,0,0,1.152h.782a.576.576,0,1,0,0-1.152Z"
													transform="translate(-114.298 -404.528)" fill="#fff" />
												<path id="Path_12236" data-name="Path 12236"
													d="M162.916,440.087h.782a.576.576,0,1,0,0-1.152h-.782a.576.576,0,0,0,0,1.152Z"
													transform="translate(-151.821 -404.528)" fill="#fff" />
												<path id="Path_12237" data-name="Path 12237"
													d="M203.624,440.087h.782a.576.576,0,1,0,0-1.152h-.782a.576.576,0,0,0,0,1.152Z"
													transform="translate(-189.344 -404.528)" fill="#fff" />
												<path id="Path_12238" data-name="Path 12238"
													d="M244.333,440.087h.782a.576.576,0,0,0,0-1.152h-.782a.576.576,0,0,0,0,1.152Z"
													transform="translate(-226.868 -404.528)" fill="#fff" />
												<path id="Path_12239" data-name="Path 12239"
													d="M285.041,440.087h.782a.576.576,0,1,0,0-1.152h-.782a.576.576,0,1,0,0,1.152Z"
													transform="translate(-264.391 -404.528)" fill="#fff" />
												<path id="Path_12240" data-name="Path 12240"
													d="M325.75,440.087h.782a.576.576,0,1,0,0-1.152h-.782a.576.576,0,1,0,0,1.152Z"
													transform="translate(-301.915 -404.528)" fill="#fff" />
												<path id="Path_12241" data-name="Path 12241"
													d="M365.509,440.087h.782a.576.576,0,1,0,0-1.152h-.782a.576.576,0,1,0,0,1.152Z"
													transform="translate(-338.563 -404.528)" fill="#fff" />
												<path id="Path_12242" data-name="Path 12242"
													d="M122.99,465.778h-.782a.576.576,0,1,0,0,1.152h.782a.576.576,0,1,0,0-1.152Z"
													transform="translate(-114.298 -429.309)" fill="#fff" />
												<path id="Path_12243" data-name="Path 12243"
													d="M162.916,466.93h.782a.576.576,0,1,0,0-1.152h-.782a.576.576,0,1,0,0,1.152Z"
													transform="translate(-151.821 -429.309)" fill="#fff" />
												<path id="Path_12244" data-name="Path 12244"
													d="M203.624,466.93h.782a.576.576,0,1,0,0-1.152h-.782a.576.576,0,1,0,0,1.152Z"
													transform="translate(-189.344 -429.309)" fill="#fff" />
												<path id="Path_12245" data-name="Path 12245"
													d="M244.333,466.93h.782a.576.576,0,1,0,0-1.152h-.782a.576.576,0,1,0,0,1.152Z"
													transform="translate(-226.868 -429.309)" fill="#fff" />
												<path id="Path_12246" data-name="Path 12246"
													d="M285.041,466.93h.782a.576.576,0,1,0,0-1.152h-.782a.576.576,0,1,0,0,1.152Z"
													transform="translate(-264.391 -429.309)" fill="#fff" />
												<path id="Path_12247" data-name="Path 12247"
													d="M325.75,466.93h.782a.576.576,0,1,0,0-1.152h-.782a.576.576,0,1,0,0,1.152Z"
													transform="translate(-301.915 -429.309)" fill="#fff" />
												<path id="Path_12248" data-name="Path 12248"
													d="M365.509,466.93h.782a.576.576,0,1,0,0-1.152h-.782a.576.576,0,1,0,0,1.152Z"
													transform="translate(-338.563 -429.309)" fill="#fff" />
											</g>
										</g>
									</svg>
								</div>
							</div>
							<div class="info-icon-primary-box info-right-align mt-3">
								<div class="info-icon-primary-text">
									<h5>24/7 EVERYTHING!</h5>
									<p>24/7 Support & Engineering Staff</p>
								</div>
								<div class="icon-primary-box">
									<svg xmlns="http://www.w3.org/2000/svg" width="35.638" height="40"
										viewBox="0 0 35.638 40">
										<g id="_003-computer" data-name="003-computer" transform="translate(0)">
											<g id="Group_2863" data-name="Group 2863"
												transform="translate(16.078 21.148)">
												<path id="Path_12230" data-name="Path 12230"
													d="M233.784,271.566h2.33a.576.576,0,1,0,0-1.152h-2.33a.576.576,0,1,0,0,1.152Z"
													transform="translate(-233.208 -270.414)" fill="#fff" />
											</g>
											<g id="Group_2864" data-name="Group 2864" transform="translate(0 0)">
												<path id="Path_12231" data-name="Path 12231"
													d="M138.293,92.386a.576.576,0,0,0-.812.064L131.5,99.455a.576.576,0,0,0,.876.748l5.983-7.005A.576.576,0,0,0,138.293,92.386Z"
													transform="translate(-123.237 -85.004)" fill="#fff" />
												<path id="Path_12232" data-name="Path 12232"
													d="M131.552,114.556a.576.576,0,0,0,.813-.048l1.617-1.819a.576.576,0,1,0-.861-.765l-1.617,1.819A.576.576,0,0,0,131.552,114.556Z"
													transform="translate(-123.26 -102.984)" fill="#fff" />
												<path id="Path_12233" data-name="Path 12233"
													d="M77.236,408.8a1.2,1.2,0,0,0-1.151-.827H56.221a.576.576,0,1,0,0,1.152H76.085a.033.033,0,0,1,.032.023l1.809,5.6a.029.029,0,0,1,0,.029.03.03,0,0,1-.027.013H47.5a.03.03,0,0,1-.027-.013.029.029,0,0,1,0-.029l1.809-5.6a.033.033,0,0,1,.032-.023h4.264a.576.576,0,1,0,0-1.152H49.307a1.2,1.2,0,0,0-1.151.827l-1.809,5.6a1.156,1.156,0,0,0,.177,1.058,1.2,1.2,0,0,0,.975.485h30.4a1.2,1.2,0,0,0,.975-.485,1.156,1.156,0,0,0,.177-1.058Z"
													transform="translate(-44.877 -375.942)" fill="#fff" />
												<path id="Path_12234" data-name="Path 12234"
													d="M61.2,0H30.249A2.354,2.354,0,0,0,27.9,2.358v19.97a2.354,2.354,0,0,0,2.344,2.358H41.76a27.8,27.8,0,0,1-.408,4.252H38.829a.59.59,0,0,0,0,1.179h13.79a.59.59,0,0,0,0-1.179H50.1a27.8,27.8,0,0,1-.408-4.252H61.2a2.354,2.354,0,0,0,2.344-2.358V2.358A2.354,2.354,0,0,0,61.2,0ZM42.549,28.938a31.4,31.4,0,0,0,.384-4.252h5.581a31.4,31.4,0,0,0,.384,4.252Zm19.821-6.61A1.177,1.177,0,0,1,61.2,23.506H30.249a1.177,1.177,0,0,1-1.172-1.179V20.191H62.37v2.137Zm0-3.316H60.83v-8.7a.586.586,0,1,0-1.172,0v8.7H31.79V4a.156.156,0,0,1,.155-.156H59.5A.156.156,0,0,1,59.658,4V7.61a.586.586,0,1,0,1.172,0V4A1.333,1.333,0,0,0,59.5,2.662H31.945A1.333,1.333,0,0,0,30.617,4V19.012h-1.54V2.358a1.177,1.177,0,0,1,1.172-1.179H61.2A1.177,1.177,0,0,1,62.37,2.358Z"
													transform="translate(-27.905 0)" fill="#fff" />
												<path id="Path_12235" data-name="Path 12235"
													d="M122.99,438.935h-.782a.576.576,0,1,0,0,1.152h.782a.576.576,0,1,0,0-1.152Z"
													transform="translate(-114.298 -404.528)" fill="#fff" />
												<path id="Path_12236" data-name="Path 12236"
													d="M162.916,440.087h.782a.576.576,0,1,0,0-1.152h-.782a.576.576,0,0,0,0,1.152Z"
													transform="translate(-151.821 -404.528)" fill="#fff" />
												<path id="Path_12237" data-name="Path 12237"
													d="M203.624,440.087h.782a.576.576,0,1,0,0-1.152h-.782a.576.576,0,0,0,0,1.152Z"
													transform="translate(-189.344 -404.528)" fill="#fff" />
												<path id="Path_12238" data-name="Path 12238"
													d="M244.333,440.087h.782a.576.576,0,0,0,0-1.152h-.782a.576.576,0,0,0,0,1.152Z"
													transform="translate(-226.868 -404.528)" fill="#fff" />
												<path id="Path_12239" data-name="Path 12239"
													d="M285.041,440.087h.782a.576.576,0,1,0,0-1.152h-.782a.576.576,0,1,0,0,1.152Z"
													transform="translate(-264.391 -404.528)" fill="#fff" />
												<path id="Path_12240" data-name="Path 12240"
													d="M325.75,440.087h.782a.576.576,0,1,0,0-1.152h-.782a.576.576,0,1,0,0,1.152Z"
													transform="translate(-301.915 -404.528)" fill="#fff" />
												<path id="Path_12241" data-name="Path 12241"
													d="M365.509,440.087h.782a.576.576,0,1,0,0-1.152h-.782a.576.576,0,1,0,0,1.152Z"
													transform="translate(-338.563 -404.528)" fill="#fff" />
												<path id="Path_12242" data-name="Path 12242"
													d="M122.99,465.778h-.782a.576.576,0,1,0,0,1.152h.782a.576.576,0,1,0,0-1.152Z"
													transform="translate(-114.298 -429.309)" fill="#fff" />
												<path id="Path_12243" data-name="Path 12243"
													d="M162.916,466.93h.782a.576.576,0,1,0,0-1.152h-.782a.576.576,0,1,0,0,1.152Z"
													transform="translate(-151.821 -429.309)" fill="#fff" />
												<path id="Path_12244" data-name="Path 12244"
													d="M203.624,466.93h.782a.576.576,0,1,0,0-1.152h-.782a.576.576,0,1,0,0,1.152Z"
													transform="translate(-189.344 -429.309)" fill="#fff" />
												<path id="Path_12245" data-name="Path 12245"
													d="M244.333,466.93h.782a.576.576,0,1,0,0-1.152h-.782a.576.576,0,1,0,0,1.152Z"
													transform="translate(-226.868 -429.309)" fill="#fff" />
												<path id="Path_12246" data-name="Path 12246"
													d="M285.041,466.93h.782a.576.576,0,1,0,0-1.152h-.782a.576.576,0,1,0,0,1.152Z"
													transform="translate(-264.391 -429.309)" fill="#fff" />
												<path id="Path_12247" data-name="Path 12247"
													d="M325.75,466.93h.782a.576.576,0,1,0,0-1.152h-.782a.576.576,0,1,0,0,1.152Z"
													transform="translate(-301.915 -429.309)" fill="#fff" />
												<path id="Path_12248" data-name="Path 12248"
													d="M365.509,466.93h.782a.576.576,0,1,0,0-1.152h-.782a.576.576,0,1,0,0,1.152Z"
													transform="translate(-338.563 -429.309)" fill="#fff" />
											</g>
										</g>
									</svg>
								</div>
							</div>
							<div class="info-icon-primary-box info-right-align mt-3">
								<div class="info-icon-primary-text">
									<h5>PRIVATE CLOUD AVAILABLE!</h5>
									<p>Contact us for a custom quote.</p>
								</div>
								<div class="icon-primary-box">
									<svg xmlns="http://www.w3.org/2000/svg" width="40.018" height="40"
										viewBox="0 0 40.018 40">
										<g id="Page-11" transform="translate(0 0)">
											<g id="_026---Cloud-Security" data-name="026---Cloud-Security"
												transform="translate(0 0)">
												<path id="Shape"
													d="M38.68,6.308A6.612,6.612,0,0,0,33.661,4a.661.661,0,1,0,0,1.322,5.29,5.29,0,0,1,4.014,1.851.663.663,0,0,0,1.005-.866Z"
													transform="translate(-10.957 -1.373)" fill="#fff" />
												<path id="Shape-2" data-name="Shape"
													d="M32.015,9.347A9.338,9.338,0,0,0,13.94,6.072,6.623,6.623,0,0,0,8.884,9.407,7.8,7.8,0,0,0,8,9.347,8,8,0,1,0,8,25.354h.667V36.692a3.335,3.335,0,0,0,3.335,3.335H28.013a3.335,3.335,0,0,0,3.335-3.335V25.354h.667a8,8,0,0,0,0-16.007Zm-4,29.347H12.005a2,2,0,0,1-2-2h2a.667.667,0,1,0,0-1.334H10V34.024h2a.667.667,0,1,0,0-1.334H10V31.357h2a.667.667,0,1,0,0-1.334H10V28.689h2a.667.667,0,1,0,0-1.334H10V26.021h2a.667.667,0,1,0,0-1.334H10a2,2,0,0,1,2-2H28.013a2,2,0,0,1,2,2h-2a.667.667,0,0,0,0,1.334h2v1.334h-2a.667.667,0,0,0,0,1.334h2v1.334h-2a.667.667,0,1,0,0,1.334h2v1.334h-2a.667.667,0,1,0,0,1.334h2v1.334h-2a.667.667,0,1,0,0,1.334h2A2,2,0,0,1,28.013,38.693ZM26.679,21.352H25.345V18.684a5.336,5.336,0,0,0-10.672,0v2.668H13.339V18.684a6.67,6.67,0,0,1,13.339,0Zm-2.668,0h-8V18.684a4,4,0,1,1,8,0Zm8,2.668h-.734a3.335,3.335,0,0,0-3.268-2.668V18.684a8,8,0,0,0-16.007,0v2.668A3.335,3.335,0,0,0,8.737,24.02H8A6.67,6.67,0,1,1,8,10.681,6.583,6.583,0,0,1,11.7,11.8a.673.673,0,0,0,.747-1.121,7.9,7.9,0,0,0-2.174-1.02A5.336,5.336,0,0,1,14.48,7.346h.193a5.269,5.269,0,0,1,3.2,1.067.667.667,0,1,0,.8-1.067,6.61,6.61,0,0,0-3.288-1.294A8,8,0,0,1,30.681,9.347V9.46a7.877,7.877,0,0,0-3.108,1.221.668.668,0,1,0,.747,1.107,6.583,6.583,0,0,1,3.7-1.107,6.67,6.67,0,1,1,0,13.339Z"
													transform="translate(0 -0.027)" fill="#fff" />
												<path id="Shape-3" data-name="Shape"
													d="M30.37,38.708a3.294,3.294,0,0,0-4.358,4.933l-.793,3.266a1.322,1.322,0,0,0,1.283,1.66h3.61A1.322,1.322,0,0,0,31.4,46.934L30.6,43.668a3.306,3.306,0,0,0-.231-4.959ZM29.22,43.582l.893,3.663H26.5l.893-3.663a.661.661,0,0,0-.251-.661,1.984,1.984,0,0,1,.661-3.531,2.454,2.454,0,0,1,.5-.079,1.981,1.981,0,0,1,1.157,3.584.661.661,0,0,0-.245.688Z"
													transform="translate(-8.298 -12.535)" fill="#fff" />
											</g>
										</g>
									</svg>
								</div>
							</div>
							<div class="info-icon-primary-box info-right-align mt-3">
								<div class="info-icon-primary-text">
									<h5>CUSTOM SERVERS AVAILABLE!</h5>
									<p>Max. 12 Hours Provisioning Guaranteed</p>
								</div>
								<div class="icon-primary-box">
									<svg id="_006-user" data-name="006-user" xmlns="http://www.w3.org/2000/svg"
										width="40" height="40" viewBox="0 0 40 40">
										<g id="Group_2868" data-name="Group 2868">
											<g id="Group_2867" data-name="Group 2867">
												<path id="Path_12253" data-name="Path 12253"
													d="M449.935,256a1.931,1.931,0,0,0-.645,3.752v4.635h1.29v-4.635a1.931,1.931,0,0,0-.645-3.752Zm0,2.581a.645.645,0,1,1,.645-.645A.646.646,0,0,1,449.935,258.581Z"
													transform="translate(-411.871 -235.355)" fill="#fff" />
												<path id="Path_12254" data-name="Path 12254"
													d="M401.935,320a1.931,1.931,0,0,0-.645,3.752v2.054h1.29v-2.054a1.931,1.931,0,0,0-.645-3.752Zm0,2.581a.645.645,0,1,1,.645-.645A.646.646,0,0,1,401.935,322.581Z"
													transform="translate(-367.742 -294.194)" fill="#fff" />
												<rect id="Rectangle_1554" data-name="Rectangle 1554" width="1"
													height="1" transform="translate(33.203 33)" fill="#fff" />
												<rect id="Rectangle_1555" data-name="Rectangle 1555" width="1"
													height="1" transform="translate(38.203 30)" fill="#fff" />
												<path id="Path_12255" data-name="Path 12255"
													d="M1.935,272a1.931,1.931,0,0,0-.645,3.752v4.635h1.29v-4.635A1.931,1.931,0,0,0,1.935,272Zm0,2.581a.645.645,0,1,1,.645-.645A.646.646,0,0,1,1.935,274.581Z"
													transform="translate(0 -250.064)" fill="#fff" />
												<path id="Path_12256" data-name="Path 12256"
													d="M51.871,321.935a1.936,1.936,0,1,0-2.581,1.817v4.635h1.29v-4.635A1.933,1.933,0,0,0,51.871,321.935Zm-1.935.645a.645.645,0,1,1,.645-.645A.646.646,0,0,1,49.935,322.581Z"
													transform="translate(-44.129 -294.194)" fill="#fff" />
												<rect id="Rectangle_1556" data-name="Rectangle 1556" width="2"
													height="2" transform="translate(1.203 31)" fill="#fff" />
												<path id="Path_12257" data-name="Path 12257"
													d="M152.387,112a7.105,7.105,0,0,0-7.1,7.1v1.649a2.565,2.565,0,0,0,.911,4.765,4.523,4.523,0,0,0,1.093,1.725l2.33,2.279a1.926,1.926,0,0,0,1.353.551H153.8a1.926,1.926,0,0,0,1.354-.552l2.33-2.278a4.523,4.523,0,0,0,1.093-1.725,2.565,2.565,0,0,0,.912-4.765V119.1A7.105,7.105,0,0,0,152.387,112Zm-7.1,10.968a1.286,1.286,0,0,1,.645-1.111v2.148c0,.025,0,.05,0,.075A1.286,1.286,0,0,1,145.29,122.968Zm12.258,1.037a3.246,3.246,0,0,1-.971,2.307l-2.329,2.278a.647.647,0,0,1-.452.184h-2.819a.642.642,0,0,1-.451-.184l-2.33-2.279a3.241,3.241,0,0,1-.972-2.306v-2.328h1.935A10.392,10.392,0,0,0,154.8,120a4.25,4.25,0,0,0,2.745,1.625Zm.645-3.618a2.966,2.966,0,0,1-2.472-1.323l-.595-.892-.546.409a9.093,9.093,0,0,1-5.419,1.806h-2.581V119.1a5.806,5.806,0,0,1,11.613,0Zm.641,3.694c0-.025,0-.05,0-.075v-2.148a1.279,1.279,0,0,1,0,2.224Z"
													transform="translate(-132.387 -102.968)" fill="#fff" />
												<path id="Path_12258" data-name="Path 12258"
													d="M108.74,338.49l-4.542-1.651V336h-1.29v1.237l-.43,2.581-1.883-1.883H98.77l-1.883,1.883-.43-2.582V336h-1.29v.839l-4.517,1.643a4.514,4.514,0,0,0-2.92,3.558L86.672,348.9h26.115l-1.133-6.9A4.524,4.524,0,0,0,108.74,338.49Zm-11.577,9.123H92.684l.54-3.779-1.277-.183-.566,3.962h-3.2L89,342.235a3.224,3.224,0,0,1,2.086-2.541l4.213-1.532.724,4.342,1.234-1.234.468.7Zm3.742,0H98.46l.6-5.972-.867-1.3,1.115-1.114h.756l1.114,1.114-.867,1.3Zm7.079,0-.566-3.963-1.277.183.539,3.78H102.2l-.565-5.641.468-.7,1.234,1.234.724-4.342L108.3,339.7a3.232,3.232,0,0,1,2.082,2.51l.885,5.4Z"
													transform="translate(-79.682 -308.903)" fill="#fff" />
												<rect id="Rectangle_1557" data-name="Rectangle 1557" width="1"
													height="1" transform="translate(5.203 35)" fill="#fff" />
												<path id="Path_12259" data-name="Path 12259"
													d="M5.806,20.645h4.516v-1.29H5.806A4.514,4.514,0,0,1,4.575,10.5a6.43,6.43,0,0,0,1.585,3.482l.961-.861a5.162,5.162,0,1,1,8.472-5.734l1.155-.575a6.473,6.473,0,0,0-1.214-1.677,8.382,8.382,0,0,1,15.322,3.21,6.441,6.441,0,0,0-2.673,2.267l1.072.717a5.161,5.161,0,1,1,4.292,8.028H29.677v1.29h3.871a6.452,6.452,0,1,0-1.461-12.73A9.671,9.671,0,0,0,14.532,4.3a6.441,6.441,0,0,0-9.99,4.866A5.807,5.807,0,0,0,5.806,20.645Z"
													fill="#fff" />
											</g>
										</g>
									</svg>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-12 mt-5 mt-lg-0">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 524.468 659.929">
								<g id="Group_1403" data-name="Group 1403" transform="translate(-261.467 -24.308)">
									<path id="Path_8181" data-name="Path 8181"
										d="M532.175,286.974a8.155,8.155,0,0,1-4.2-1.163l-25.181-15.1,1.524-2.542,25.181,15.1a5.186,5.186,0,0,0,5.3.03l40.983-23.97a2.059,2.059,0,0,0-.061-3.594L521.1,226.486l1.4-2.615,54.622,29.25a5.022,5.022,0,0,1,.158,8.767L536.3,285.856A8.15,8.15,0,0,1,532.175,286.974Z"
										transform="translate(206.163 170.485)" fill="#b2d3ea" />
									<path id="Path_8182" data-name="Path 8182"
										d="M515.8,446.386a10.6,10.6,0,0,1-5.155-1.333l-100.5-55.94a4.624,4.624,0,0,1-.026-8.066l45.48-25.648a1.582,1.582,0,0,0,.009-2.744l-50.6-29.053a4.543,4.543,0,0,1-.165-7.777l20.67-13.1,1.587,2.5-20.672,13.1a1.58,1.58,0,0,0,.057,2.7l50.6,29.055a4.545,4.545,0,0,1-.03,7.892l-45.48,25.649a1.661,1.661,0,0,0,.011,2.9l100.493,55.94a7.665,7.665,0,0,0,7.677-.141l38.211-23.492a.71.71,0,0,0,.349-.621.727.727,0,0,0-.35-.621l-27.657-16.813,1.539-2.531,27.657,16.813a3.692,3.692,0,0,1,.017,6.3l-38.221,23.5A10.619,10.619,0,0,1,515.8,446.386Z"
										transform="translate(120.685 237.851)" fill="#b2d3ea" />
									<g id="Group_1339" data-name="Group 1339" transform="translate(615.347 275.28)">
										<path id="Path_8183" data-name="Path 8183"
											d="M510.364,287.9l-48.451-27.972c-2.973-1.717-2.6-4.715.832-6.7l46.784-27.01c3.434-1.98,8.626-2.2,11.6-.48l48.451,27.972c2.973,1.717,2.6,4.715-.832,6.7l-46.784,27.011C518.531,289.4,513.339,289.612,510.364,287.9Z"
											transform="translate(-445.822 -104.192)" fill="#b2d3ea" />
										<g id="Group_1333" data-name="Group 1333" transform="translate(0 66.906)">
											<path id="Path_8184" data-name="Path 8184"
												d="M592.139,243.437h0V222.5l-46.941-.026-16.225-9.368c-3.723-2.149-10.226-1.88-14.527.6l-15.138,8.739-46.982-.026v21.528c-.1,1.456.706,2.859,2.5,3.894l60.671,35.026c3.723,2.151,10.226,1.882,14.526-.6l58.581-33.82C591.08,247.018,592.276,245.164,592.139,243.437Z"
												transform="translate(-452.307 -182.133)" fill="#396caa" />
											<path id="Path_8185" data-name="Path 8185"
												d="M522.232,211.666a16.726,16.726,0,0,0-7.786,2.042l-15.138,8.739-46.982-.026v21.528c-.1,1.456.706,2.859,2.5,3.894l60.671,35.026a13.129,13.129,0,0,0,6.74,1.441Z"
												transform="translate(-452.307 -182.127)" fill="#396caa" />
											<path id="Path_8186" data-name="Path 8186"
												d="M457.643,217.47l-5.318,0v21.528c-.1,1.456.706,2.859,2.5,3.894l2.822,1.63Z"
												transform="translate(-452.307 -177.172)" fill="#5793ce" />
											<path id="Path_8187" data-name="Path 8187"
												d="M486.89,261.636A16.542,16.542,0,0,0,498.5,261.5V237.059H486.89Z"
												transform="translate(-422.771 -160.434)" fill="#5793ce" />
											<path id="Path_8188" data-name="Path 8188"
												d="M515.5,275.027,454.825,240c-3.723-2.151-3.258-5.906,1.042-8.387L514.45,197.79c4.3-2.483,10.8-2.754,14.527-.6l60.67,35.028c3.723,2.149,3.256,5.906-1.044,8.389l-58.581,33.82C525.722,276.908,519.219,277.176,515.5,275.027Z"
												transform="translate(-452.311 -195.736)" fill="#d4ecff" />
											<path id="Path_8189" data-name="Path 8189"
												d="M511.37,265.71l-50.843-29.353c-3.121-1.8-2.73-4.947.873-7.028l49.092-28.345c3.6-2.081,9.054-2.307,12.173-.5l50.843,29.353c3.121,1.8,2.729,4.949-.873,7.028l-49.092,28.345C519.94,267.286,514.488,267.51,511.37,265.71Z"
												transform="translate(-447.092 -192.723)" fill="#5793ce" />
											<g id="Group_1332" data-name="Group 1332"
												transform="translate(112.615 55.976)">
												<path id="Path_8190" data-name="Path 8190"
													d="M517.944,232.581a5.41,5.41,0,0,1-2.451,4.244c-1.352.781-2.45.148-2.45-1.413a5.418,5.418,0,0,1,2.45-4.244C516.848,230.386,517.944,231.02,517.944,232.581Z"
													transform="translate(-513.043 -221.729)" fill="#d4ecff" />
												<path id="Path_8191" data-name="Path 8191"
													d="M522.194,230.128a5.413,5.413,0,0,1-2.449,4.243c-1.352.783-2.45.148-2.45-1.413a5.418,5.418,0,0,1,2.45-4.244C521.1,227.933,522.194,228.563,522.194,230.128Z"
													transform="translate(-509.411 -223.826)" fill="#d4ecff" />
												<path id="Path_8192" data-name="Path 8192"
													d="M526.446,227.673a5.416,5.416,0,0,1-2.45,4.244c-1.352.781-2.45.146-2.45-1.415a5.424,5.424,0,0,1,2.45-4.246C525.35,225.478,526.446,226.11,526.446,227.673Z"
													transform="translate(-505.778 -225.923)" fill="#d4ecff" />
											</g>
										</g>
										<g id="Group_1335" data-name="Group 1335" transform="translate(0 33.453)">
											<path id="Path_8193" data-name="Path 8193"
												d="M592.139,225.4h0V204.463l-46.941-.026-16.225-9.368c-3.723-2.149-10.226-1.88-14.527.6l-15.138,8.739-46.982-.026v21.528c-.1,1.456.706,2.859,2.5,3.894l60.671,35.026c3.723,2.151,10.226,1.882,14.526-.6L588.6,230.41C591.08,228.979,592.276,227.125,592.139,225.4Z"
												transform="translate(-452.307 -164.092)" fill="#396caa" />
											<path id="Path_8194" data-name="Path 8194"
												d="M522.232,193.624a16.749,16.749,0,0,0-7.786,2.043l-15.138,8.739-46.982-.026v21.528c-.1,1.456.706,2.859,2.5,3.894l60.671,35.026a13.128,13.128,0,0,0,6.74,1.441Z"
												transform="translate(-452.307 -164.087)" fill="#396caa" />
											<path id="Path_8195" data-name="Path 8195"
												d="M457.643,199.429l-5.318,0v21.528c-.1,1.456.706,2.859,2.5,3.894l2.822,1.63Z"
												transform="translate(-452.307 -159.131)" fill="#5793ce" />
											<path id="Path_8196" data-name="Path 8196"
												d="M486.89,243.593a16.531,16.531,0,0,0,11.612-.132V219.018H486.89Z"
												transform="translate(-422.771 -142.393)" fill="#5793ce" />
											<path id="Path_8197" data-name="Path 8197"
												d="M515.5,256.986l-60.671-35.028c-3.723-2.149-3.258-5.9,1.042-8.387L514.45,179.75c4.3-2.483,10.8-2.754,14.527-.6l60.67,35.028c3.723,2.149,3.256,5.906-1.044,8.389l-58.581,33.82C525.722,258.866,519.219,259.135,515.5,256.986Z"
												transform="translate(-452.311 -177.695)" fill="#d4ecff" />
											<path id="Path_8198" data-name="Path 8198"
												d="M511.37,247.671l-50.843-29.355c-3.121-1.8-2.73-4.947.873-7.03l49.092-28.343c3.6-2.081,9.054-2.307,12.173-.5l50.843,29.353c3.121,1.8,2.729,4.949-.873,7.028l-49.092,28.345C519.94,249.245,514.488,249.469,511.37,247.671Z"
												transform="translate(-447.092 -174.682)" fill="#5793ce" />
											<g id="Group_1334" data-name="Group 1334"
												transform="translate(112.615 55.977)">
												<path id="Path_8199" data-name="Path 8199"
													d="M517.944,214.54a5.41,5.41,0,0,1-2.451,4.244c-1.352.781-2.45.148-2.45-1.413a5.418,5.418,0,0,1,2.45-4.244C516.848,212.345,517.944,212.979,517.944,214.54Z"
													transform="translate(-513.043 -203.688)" fill="#d4ecff" />
												<path id="Path_8200" data-name="Path 8200"
													d="M522.194,212.087a5.413,5.413,0,0,1-2.449,4.243c-1.352.782-2.45.148-2.45-1.413a5.418,5.418,0,0,1,2.45-4.244C521.1,209.891,522.194,210.524,522.194,212.087Z"
													transform="translate(-509.411 -205.785)" fill="#d4ecff" />
												<path id="Path_8201" data-name="Path 8201"
													d="M526.446,209.632a5.416,5.416,0,0,1-2.45,4.244c-1.352.781-2.45.146-2.45-1.415a5.418,5.418,0,0,1,2.45-4.244C525.35,207.436,526.446,208.069,526.446,209.632Z"
													transform="translate(-505.778 -207.883)" fill="#d4ecff" />
											</g>
										</g>
										<g id="Group_1338" data-name="Group 1338" transform="translate(0 0)">
											<path id="Path_8202" data-name="Path 8202"
												d="M592.139,207.355h0V186.422L545.2,186.4l-16.225-9.368c-3.723-2.149-10.226-1.88-14.527.6l-15.138,8.739-46.982-.026v21.53c-.1,1.454.706,2.857,2.5,3.892l60.671,35.026c3.723,2.151,10.226,1.882,14.526-.6L588.6,212.369C591.08,210.938,592.276,209.082,592.139,207.355Z"
												transform="translate(-452.307 -146.052)" fill="#396caa" />
											<path id="Path_8203" data-name="Path 8203"
												d="M522.232,175.583a16.75,16.75,0,0,0-7.786,2.043l-15.138,8.739-46.982-.026v21.53c-.1,1.454.706,2.857,2.5,3.892l60.671,35.026a13.128,13.128,0,0,0,6.74,1.441Z"
												transform="translate(-452.307 -146.047)" fill="#396caa" />
											<path id="Path_8204" data-name="Path 8204"
												d="M457.643,181.388l-5.318,0v21.53c-.1,1.454.706,2.857,2.5,3.892l2.822,1.63Z"
												transform="translate(-452.307 -141.091)" fill="#5793ce" />
											<path id="Path_8205" data-name="Path 8205"
												d="M486.89,225.553a16.531,16.531,0,0,0,11.612-.132V200.976H486.89Z"
												transform="translate(-422.771 -124.354)" fill="#5793ce" />
											<path id="Path_8206" data-name="Path 8206"
												d="M515.5,238.945l-60.671-35.028c-3.723-2.149-3.258-5.9,1.042-8.387l58.583-33.822c4.3-2.483,10.8-2.752,14.527-.6l60.67,35.028c3.723,2.149,3.256,5.906-1.044,8.389l-58.581,33.82C525.722,240.827,519.219,241.094,515.5,238.945Z"
												transform="translate(-452.311 -159.654)" fill="#d4ecff" />
											<path id="Path_8207" data-name="Path 8207"
												d="M588.6,182.836l-58.581,33.822c-4.3,2.481-10.8,2.752-14.527.6l-60.671-35.028a5.6,5.6,0,0,1-1.858-1.648c-1.28,2.058-.7,4.293,1.858,5.769L515.5,221.379c3.724,2.149,10.227,1.88,14.527-.6l58.581-33.82c3.341-1.93,4.358-4.625,2.9-6.74A8.124,8.124,0,0,1,588.6,182.836Z"
												transform="translate(-452.311 -142.089)" fill="#fff" />
											<g id="Group_1336" data-name="Group 1336"
												transform="translate(112.615 55.976)">
												<path id="Path_8208" data-name="Path 8208"
													d="M517.944,196.5a5.41,5.41,0,0,1-2.451,4.244c-1.352.783-2.45.15-2.45-1.413a5.418,5.418,0,0,1,2.45-4.244C516.848,194.3,517.944,194.936,517.944,196.5Z"
													transform="translate(-513.043 -185.648)" fill="#d4ecff" />
												<path id="Path_8209" data-name="Path 8209"
													d="M522.194,194.046a5.419,5.419,0,0,1-2.449,4.244c-1.352.781-2.45.146-2.45-1.415a5.425,5.425,0,0,1,2.45-4.246C521.1,191.851,522.194,192.483,522.194,194.046Z"
													transform="translate(-509.411 -187.745)" fill="#d4ecff" />
												<path id="Path_8210" data-name="Path 8210"
													d="M526.446,191.591a5.416,5.416,0,0,1-2.45,4.244c-1.352.781-2.45.148-2.45-1.415a5.418,5.418,0,0,1,2.45-4.244C525.35,189.4,526.446,190.028,526.446,191.591Z"
													transform="translate(-505.778 -189.842)" fill="#d4ecff" />
											</g>
											<g id="Group_1337" data-name="Group 1337"
												transform="translate(37.204 20.47)">
												<path id="Path_8211" data-name="Path 8211"
													d="M501.942,207.8l-28.389-16.392c-1.743-1.007-1.526-2.763.486-3.926l27.416-15.826a7.561,7.561,0,0,1,6.8-.284l28.389,16.392c1.743,1.007,1.524,2.765-.486,3.926l-27.416,15.828A7.561,7.561,0,0,1,501.942,207.8Z"
													transform="translate(-472.375 -170.694)" fill="#5793ce" />
												<path id="Path_8212" data-name="Path 8212"
													d="M491.671,185.667l-3.927-2.268c-.241-.139-.211-.382.067-.543l3.794-2.19a1.049,1.049,0,0,1,.94-.039l3.927,2.27c.241.137.211.382-.067.543l-3.794,2.188A1.043,1.043,0,0,1,491.671,185.667Z"
													transform="translate(-459.385 -162.287)" fill="#d4ecff" />
												<path id="Path_8213" data-name="Path 8213"
													d="M473.552,191.407l.08.046c.132-.095.254-.193.406-.282l27.416-15.826a7.561,7.561,0,0,1,6.8-.282l28.309,16.346c1.606-1.15,1.689-2.715.08-3.646l-28.389-16.392a7.561,7.561,0,0,0-6.8.284l-27.416,15.826C472.026,188.644,471.809,190.4,473.552,191.407Z"
													transform="translate(-472.375 -170.694)" fill="#396caa" />
											</g>
										</g>
									</g>
									<g id="Group_1359" data-name="Group 1359"
										transform="translate(456.682 180.818)">
										<g id="Group_1351" data-name="Group 1351">
											<g id="Group_1342" data-name="Group 1342">
												<path id="Path_8214" data-name="Path 8214"
													d="M477.7,361.338,372.982,301.63c-3.829-2.212-3.351-6.073,1.072-8.626l60.25-34.786c4.422-2.553,11.113-2.83,14.942-.619l104.715,59.71c3.829,2.21,3.349,6.075-1.074,8.626l-60.25,34.785C488.217,363.272,481.527,363.55,477.7,361.338Z"
													transform="translate(-363.624 17.204)" fill="#b2d3ea" />
												<path id="Path_8215" data-name="Path 8215"
													d="M566.407,408.115h0V163.653l-97.185-25.435-17.9-10.336c-4.107-2.372-11.285-2.073-16.028.666l-16.7,9.642-51.835-.028L382.1,374.153c-.115,1.606.779,3.154,2.754,4.293l96.983,73.181c4.109,2.372,11.285,2.073,16.028-.664L562.5,413.646C565.241,412.066,566.561,410.021,566.407,408.115Z"
													transform="translate(-366.734 -93.704)" fill="#396caa" />
												<path id="Path_8216" data-name="Path 8216"
													d="M443.89,126.287a18.489,18.489,0,0,0-8.593,2.255l-16.7,9.642-51.835-.028V383.275c-.119,1.6.779,3.154,2.752,4.293l112.333,64.055a14.5,14.5,0,0,0,7.439,1.589l1.159-246.65Z"
													transform="translate(-366.739 -93.699)" fill="#d4ecff" />
												<path id="Path_8217" data-name="Path 8217"
													d="M429.377,416.489c3.544,1.517,8.669,1.432,12.811-.147V168.005H429.377Z"
													transform="translate(-313.238 -58.059)" fill="#5793ce" />
												<path id="Path_8218" data-name="Path 8218"
													d="M481.851,221.6,369.518,157.548c-4.109-2.372-3.592-6.514,1.15-9.253L435.3,110.978c4.743-2.739,11.921-3.035,16.028-.664l112.333,64.055c4.109,2.372,3.594,6.514-1.15,9.253l-64.635,37.316C493.136,223.678,485.96,223.974,481.851,221.6Z"
													transform="translate(-366.744 -108.712)" fill="#d4ecff" />
												<path id="Path_8219" data-name="Path 8219"
													d="M562.514,159.509l-64.635,37.316c-4.743,2.741-11.919,3.037-16.028.666L369.518,133.436a6.178,6.178,0,0,1-2.049-1.819c-1.413,2.271-.771,4.736,2.049,6.364L481.85,202.036c4.109,2.372,11.285,2.075,16.028-.666l64.635-37.316c3.686-2.127,4.806-5.1,3.2-7.434A9,9,0,0,1,562.514,159.509Z"
													transform="translate(-366.744 -89.145)" fill="#fafdff" />
												<g id="Group_1341" data-name="Group 1341"
													transform="translate(42.197 20.724)">
													<path id="Path_8220" data-name="Path 8220"
														d="M465.588,186.095,390.8,142.742c-1.923-1.111-1.682-3.048.538-4.33l30.247-17.464a8.335,8.335,0,0,1,7.5-.31l74.789,43.353c1.923,1.109,1.68,3.048-.538,4.33l-30.247,17.462A8.341,8.341,0,0,1,465.588,186.095Z"
														transform="translate(-389.501 -119.889)" fill="#173d7a" />
													<g id="Group_1340" data-name="Group 1340"
														transform="translate(31.198 19.137)">
														<path id="Path_8221" data-name="Path 8221"
															d="M410.84,135.872l-4.334-2.5c-.267-.154-.234-.423.074-.6l4.185-2.416a1.148,1.148,0,0,1,1.037-.043l4.334,2.5c.267.154.232.421-.074.6l-4.185,2.416A1.154,1.154,0,0,1,410.84,135.872Z"
															transform="translate(-406.326 -130.209)"
															fill="#d4ecff" />
														<path id="Path_8222" data-name="Path 8222"
															d="M418.646,140.363l-4.333-2.5c-.265-.154-.232-.421.076-.6l4.183-2.416a1.157,1.157,0,0,1,1.038-.043l4.335,2.5c.263.154.232.423-.076.6l-4.185,2.414A1.152,1.152,0,0,1,418.646,140.363Z"
															transform="translate(-399.656 -126.374)"
															fill="#d4ecff" />
														<path id="Path_8223" data-name="Path 8223"
															d="M426.455,144.851l-4.333-2.5c-.265-.154-.234-.423.074-.6l4.185-2.416a1.151,1.151,0,0,1,1.038-.043l4.332,2.5c.267.154.232.423-.074.6l-4.183,2.416A1.152,1.152,0,0,1,426.455,144.851Z"
															transform="translate(-392.985 -122.538)"
															fill="#d4ecff" />
														<path id="Path_8224" data-name="Path 8224"
															d="M434.263,149.341l-4.333-2.5c-.267-.154-.232-.423.074-.6l4.185-2.414a1.154,1.154,0,0,1,1.036-.044l4.335,2.5c.265.154.232.421-.076.6L435.3,149.3A1.148,1.148,0,0,1,434.263,149.341Z"
															transform="translate(-386.315 -118.703)"
															fill="#d4ecff" />
													</g>
													<path id="Path_8225" data-name="Path 8225"
														d="M390.8,142.742l.089.052a4.658,4.658,0,0,1,.449-.31l30.247-17.464a8.341,8.341,0,0,1,7.5-.31l74.7,43.3c1.773-1.268,1.865-2.995.089-4.02l-74.789-43.353a8.335,8.335,0,0,0-7.5.31l-30.247,17.464C389.117,139.693,388.876,141.631,390.8,142.742Z"
														transform="translate(-389.501 -119.889)" fill="#5793ce" />
												</g>
											</g>
											<g id="Group_1344" data-name="Group 1344"
												transform="translate(139.424 109.697)">
												<path id="Path_8226" data-name="Path 8226"
													d="M446.268,219.5l42.521-24.347c2.394-1.381,4.333-5.088,4.333-8.279V171.667c0-3.191-1.94-4.658-4.333-3.277l-42.521,24.347c-2.4,1.381-4.333,5.088-4.333,8.279v15.205C441.934,219.413,443.872,220.88,446.268,219.5Z"
													transform="translate(-441.934 -167.871)" fill="#173d7a" />
												<path id="Path_8227" data-name="Path 8227"
													d="M490.393,167.9a4.248,4.248,0,0,1,1.087,3.163v15.207c0,3.189-1.94,6.9-4.333,8.278L444.624,218.9a3.115,3.115,0,0,1-2.1.458,2.583,2.583,0,0,0,3.245.113l42.521-24.347c2.394-1.381,4.334-5.088,4.334-8.279V171.639C492.62,169.471,491.715,168.128,490.393,167.9Z"
													transform="translate(-441.433 -167.842)" fill="#fff" />
												<g id="Group_1343" data-name="Group 1343"
													transform="translate(16.177 18.527)">
													<path id="Path_8228" data-name="Path 8228"
														d="M451.6,190.974l3.9-2.251a2.262,2.262,0,0,0,.944-1.806v-4.165c0-.7-.421-1.016-.944-.716l-3.9,2.253a2.266,2.266,0,0,0-.944,1.8v4.167C450.658,190.955,451.083,191.276,451.6,190.974Z"
														transform="translate(-450.658 -174.393)" fill="#396caa" />
													<path id="Path_8229" data-name="Path 8229"
														d="M458.636,186.913l3.9-2.253a2.258,2.258,0,0,0,.944-1.8v-4.167c0-.7-.423-1.016-.944-.716l-3.9,2.253a2.261,2.261,0,0,0-.944,1.8V186.2C457.692,186.894,458.115,187.213,458.636,186.913Z"
														transform="translate(-444.649 -177.862)" fill="#fff" />
												</g>
											</g>
											<g id="Group_1346" data-name="Group 1346"
												transform="translate(139.424 219.582)">
												<path id="Path_8230" data-name="Path 8230"
													d="M446.268,278.758l42.521-24.347c2.394-1.381,4.333-5.086,4.333-8.278V230.927c0-3.191-1.94-4.658-4.333-3.277L446.268,252c-2.4,1.381-4.333,5.088-4.333,8.279v15.207C441.934,278.675,443.872,280.14,446.268,278.758Z"
													transform="translate(-441.934 -227.131)" fill="#173d7a" />
												<path id="Path_8231" data-name="Path 8231"
													d="M490.393,227.164a4.251,4.251,0,0,1,1.087,3.163v15.207c0,3.191-1.94,6.9-4.333,8.278l-42.523,24.349a3.123,3.123,0,0,1-2.1.456,2.583,2.583,0,0,0,3.245.113l42.521-24.347c2.394-1.381,4.334-5.086,4.334-8.278V230.9C492.62,228.733,491.715,227.388,490.393,227.164Z"
													transform="translate(-441.433 -227.102)" fill="#fff" />
												<g id="Group_1345" data-name="Group 1345"
													transform="translate(16.177 18.528)">
													<path id="Path_8232" data-name="Path 8232"
														d="M451.6,250.233l3.9-2.251a2.256,2.256,0,0,0,.944-1.8v-4.167c0-.7-.421-1.016-.944-.714l-3.9,2.251a2.27,2.27,0,0,0-.944,1.806v4.167C450.658,250.217,451.083,250.536,451.6,250.233Z"
														transform="translate(-450.658 -233.653)" fill="#396caa" />
													<path id="Path_8233" data-name="Path 8233"
														d="M458.636,246.174l3.9-2.253a2.265,2.265,0,0,0,.944-1.806v-4.167c0-.7-.423-1.014-.944-.712l-3.9,2.251a2.261,2.261,0,0,0-.944,1.8v4.167C457.692,246.154,458.115,246.475,458.636,246.174Z"
														transform="translate(-444.649 -237.122)" fill="#396caa" />
												</g>
											</g>
											<g id="Group_1348" data-name="Group 1348"
												transform="translate(139.424 274.525)">
												<path id="Path_8234" data-name="Path 8234"
													d="M446.268,308.388l42.521-24.347c2.394-1.381,4.333-5.088,4.333-8.277V260.557c0-3.191-1.94-4.656-4.333-3.277l-42.521,24.349c-2.4,1.38-4.333,5.086-4.333,8.278v15.207C441.934,308.3,443.872,309.77,446.268,308.388Z"
													transform="translate(-441.934 -256.761)" fill="#173d7a" />
												<path id="Path_8235" data-name="Path 8235"
													d="M490.393,256.794a4.254,4.254,0,0,1,1.087,3.163v15.207c0,3.191-1.94,6.9-4.333,8.279l-42.523,24.345a3.117,3.117,0,0,1-2.1.46,2.584,2.584,0,0,0,3.245.111l42.521-24.347c2.394-1.381,4.334-5.088,4.334-8.278V260.529C492.62,258.363,491.715,257.02,490.393,256.794Z"
													transform="translate(-441.433 -256.733)" fill="#fff" />
												<g id="Group_1347" data-name="Group 1347"
													transform="translate(16.177 18.527)">
													<path id="Path_8236" data-name="Path 8236"
														d="M451.6,279.863l3.9-2.251a2.259,2.259,0,0,0,.944-1.8v-4.167c0-.7-.421-1.014-.944-.714l-3.9,2.253a2.266,2.266,0,0,0-.944,1.8v4.165C450.658,279.844,451.083,280.165,451.6,279.863Z"
														transform="translate(-450.658 -263.283)" fill="#fff" />
													<path id="Path_8237" data-name="Path 8237"
														d="M458.636,275.8l3.9-2.253a2.268,2.268,0,0,0,.944-1.806V267.58c0-.7-.423-1.016-.944-.714l-3.9,2.251a2.262,2.262,0,0,0-.944,1.806v4.165C457.692,275.784,458.115,276.1,458.636,275.8Z"
														transform="translate(-444.649 -266.753)" fill="#396caa" />
												</g>
											</g>
											<g id="Group_1350" data-name="Group 1350"
												transform="translate(139.424 164.639)">
												<path id="Path_8238" data-name="Path 8238"
													d="M446.268,249.128l42.521-24.347c2.394-1.381,4.333-5.088,4.333-8.279V201.3c0-3.191-1.94-4.658-4.333-3.277l-42.521,24.347c-2.4,1.381-4.333,5.088-4.333,8.279v15.205C441.934,249.043,443.872,250.51,446.268,249.128Z"
													transform="translate(-441.934 -197.501)" fill="#173d7a" />
												<path id="Path_8239" data-name="Path 8239"
													d="M490.393,197.534a4.251,4.251,0,0,1,1.087,3.163V215.9c0,3.191-1.94,6.9-4.333,8.278l-42.523,24.347a3.115,3.115,0,0,1-2.1.458,2.583,2.583,0,0,0,3.245.113l42.521-24.347c2.394-1.381,4.334-5.088,4.334-8.279V201.269C492.62,199.1,491.715,197.758,490.393,197.534Z"
													transform="translate(-441.433 -197.472)" fill="#fff" />
												<g id="Group_1349" data-name="Group 1349"
													transform="translate(16.177 18.528)">
													<path id="Path_8240" data-name="Path 8240"
														d="M451.6,220.6l3.9-2.251a2.26,2.26,0,0,0,.944-1.806v-4.165c0-.7-.421-1.016-.944-.714l-3.9,2.251a2.27,2.27,0,0,0-.944,1.806v4.165C450.658,220.585,451.083,220.906,451.6,220.6Z"
														transform="translate(-450.658 -204.023)" fill="#fff" />
													<path id="Path_8241" data-name="Path 8241"
														d="M458.636,216.542l3.9-2.253a2.261,2.261,0,0,0,.944-1.8V208.32c0-.7-.423-1.016-.944-.714l-3.9,2.251a2.264,2.264,0,0,0-.944,1.8v4.167C457.692,216.524,458.115,216.843,458.636,216.542Z"
														transform="translate(-444.649 -207.493)" fill="#fff" />
												</g>
											</g>
										</g>
										<g id="Group_1352" data-name="Group 1352"
											transform="translate(4.845 59.33)">
											<path id="Path_8242" data-name="Path 8242"
												d="M471.438,227.136l-98.1-56.641c-2.2-1.266-3.976-4.669-3.976-7.6V144.192c0-2.928,1.78-4.274,3.976-3.006l98.1,56.641c2.2,1.266,3.976,4.667,3.976,7.6V224.13C475.413,227.058,473.633,228.4,471.438,227.136Z"
												transform="translate(-369.357 -140.709)" fill="#5793ce" />
											<path id="Path_8243" data-name="Path 8243"
												d="M466.421,217.445l-92.47-53.389a4.822,4.822,0,0,1-2.019-3.853V146.141c0-1.485.9-2.17,2.019-1.526L466.421,198a4.835,4.835,0,0,1,2.017,3.855v14.063C468.439,217.407,467.535,218.089,466.421,217.445Z"
												transform="translate(-367.157 -137.579)" fill="#d4ecff"
												opacity="0.4" />
											<path id="Path_8244" data-name="Path 8244"
												d="M390.674,163.341l-13.8-7.968a4.691,4.691,0,0,1-1.96-3.742h0c0-1.444.877-2.106,1.96-1.482l13.8,7.968a4.691,4.691,0,0,1,1.958,3.742h0C392.632,163.3,391.755,163.964,390.674,163.341Z"
												transform="translate(-364.61 -132.844)" fill="#d4ecff" />
											<path id="Path_8245" data-name="Path 8245"
												d="M391.84,161.355c0,1.441-1.012,2.027-2.262,1.305a5,5,0,0,1-2.262-3.918c0-1.441,1.012-2.027,2.262-1.305A5,5,0,0,1,391.84,161.355Z"
												transform="translate(-354.016 -126.681)" fill="#173d7a" />
											<path id="Path_8246" data-name="Path 8246"
												d="M396.142,163.841c0,1.441-1.012,2.025-2.262,1.305a5,5,0,0,1-2.262-3.918c0-1.443,1.012-2.027,2.262-1.307A5,5,0,0,1,396.142,163.841Z"
												transform="translate(-350.34 -124.559)" fill="#173d7a" />
											<path id="Path_8247" data-name="Path 8247"
												d="M400.445,166.325c0,1.441-1.012,2.027-2.26,1.305a5,5,0,0,1-2.262-3.918c0-1.443,1.012-2.027,2.262-1.305A5,5,0,0,1,400.445,166.325Z"
												transform="translate(-346.663 -122.436)" fill="#d4ecff" />
											<path id="Path_8248" data-name="Path 8248"
												d="M404.748,168.808c0,1.443-1.012,2.027-2.262,1.305a5,5,0,0,1-2.26-3.916c0-1.443,1.012-2.029,2.26-1.307A5,5,0,0,1,404.748,168.808Z"
												transform="translate(-342.987 -120.314)" fill="#173d7a" />
											<path id="Path_8249" data-name="Path 8249"
												d="M423.514,184.673l-4.649-2.685a3,3,0,0,1-1.259-2.4v-4.918c0-.925.564-1.35,1.259-.951l4.649,2.685a3.015,3.015,0,0,1,1.257,2.4v4.916C424.771,184.649,424.207,185.074,423.514,184.673Z"
												transform="translate(-328.138 -112.637)" fill="#173d7a" />
										</g>
										<g id="Group_1353" data-name="Group 1353"
											transform="translate(4.845 92.318)">
											<path id="Path_8250" data-name="Path 8250"
												d="M471.438,244.924l-98.1-56.639c-2.2-1.268-3.976-4.669-3.976-7.6V161.982c0-2.928,1.78-4.274,3.976-3.006l98.1,56.641c2.2,1.266,3.976,4.667,3.976,7.6v18.706C475.413,244.848,473.633,246.192,471.438,244.924Z"
												transform="translate(-369.357 -158.499)" fill="#5793ce" />
											<path id="Path_8251" data-name="Path 8251"
												d="M466.421,235.235l-92.47-53.389a4.822,4.822,0,0,1-2.019-3.853V163.931c0-1.485.9-2.17,2.019-1.526l92.47,53.389a4.833,4.833,0,0,1,2.017,3.855v14.063C468.439,235.2,467.535,235.879,466.421,235.235Z"
												transform="translate(-367.157 -155.368)" fill="#d4ecff"
												opacity="0.4" />
											<path id="Path_8252" data-name="Path 8252"
												d="M390.674,181.129l-13.8-7.966a4.691,4.691,0,0,1-1.96-3.744h0c0-1.443.877-2.1,1.96-1.48l13.8,7.968a4.691,4.691,0,0,1,1.958,3.742h0C392.632,181.092,391.755,181.754,390.674,181.129Z"
												transform="translate(-364.61 -150.634)" fill="#d4ecff" />
											<path id="Path_8253" data-name="Path 8253"
												d="M391.84,179.145c0,1.443-1.012,2.027-2.262,1.305a5,5,0,0,1-2.262-3.918c0-1.441,1.012-2.027,2.262-1.305A5,5,0,0,1,391.84,179.145Z"
												transform="translate(-354.016 -144.471)" fill="#fff" />
											<path id="Path_8254" data-name="Path 8254"
												d="M396.142,181.629c0,1.443-1.012,2.027-2.262,1.307a5,5,0,0,1-2.262-3.918c0-1.443,1.012-2.027,2.262-1.307A5,5,0,0,1,396.142,181.629Z"
												transform="translate(-350.34 -142.349)" fill="#173d7a" />
											<path id="Path_8255" data-name="Path 8255"
												d="M400.445,184.115c0,1.441-1.012,2.027-2.26,1.305a5,5,0,0,1-2.262-3.918c0-1.443,1.012-2.027,2.262-1.305A5,5,0,0,1,400.445,184.115Z"
												transform="translate(-346.663 -140.226)" fill="#d4ecff" />
											<path id="Path_8256" data-name="Path 8256"
												d="M404.748,186.6c0,1.443-1.012,2.027-2.262,1.305a5,5,0,0,1-2.26-3.916c0-1.443,1.012-2.029,2.26-1.307A5,5,0,0,1,404.748,186.6Z"
												transform="translate(-342.987 -138.104)" fill="#173d7a" />
											<path id="Path_8257" data-name="Path 8257"
												d="M423.514,202.463l-4.649-2.685a3.005,3.005,0,0,1-1.259-2.4v-4.918c0-.925.564-1.35,1.259-.951l4.649,2.685a3.012,3.012,0,0,1,1.257,2.4v4.918C424.771,202.439,424.207,202.866,423.514,202.463Z"
												transform="translate(-328.138 -130.427)" fill="#173d7a" />
										</g>
										<g id="Group_1354" data-name="Group 1354"
											transform="translate(4.845 125.306)">
											<path id="Path_8258" data-name="Path 8258"
												d="M471.438,262.716l-98.1-56.641c-2.2-1.268-3.976-4.669-3.976-7.6V179.772c0-2.928,1.78-4.274,3.976-3.006l98.1,56.641c2.2,1.266,3.976,4.667,3.976,7.6V259.71C475.413,262.636,473.633,263.984,471.438,262.716Z"
												transform="translate(-369.357 -176.289)" fill="#5793ce" />
											<path id="Path_8259" data-name="Path 8259"
												d="M466.421,253.026l-92.47-53.389a4.822,4.822,0,0,1-2.019-3.853V181.721c0-1.487.9-2.17,2.019-1.526l92.47,53.389a4.832,4.832,0,0,1,2.017,3.855V251.5C468.439,252.987,467.535,253.669,466.421,253.026Z"
												transform="translate(-367.157 -173.159)" fill="#d4ecff"
												opacity="0.4" />
											<path id="Path_8260" data-name="Path 8260"
												d="M390.674,198.919l-13.8-7.966a4.691,4.691,0,0,1-1.96-3.744h0c0-1.441.877-2.1,1.96-1.48l13.8,7.968a4.691,4.691,0,0,1,1.958,3.742h0C392.632,198.882,391.755,199.544,390.674,198.919Z"
												transform="translate(-364.61 -168.424)" fill="#d4ecff" />
											<path id="Path_8261" data-name="Path 8261"
												d="M391.84,196.935c0,1.443-1.012,2.027-2.262,1.305a5,5,0,0,1-2.262-3.918c0-1.441,1.012-2.027,2.262-1.305A5,5,0,0,1,391.84,196.935Z"
												transform="translate(-354.016 -162.261)" fill="#fff" />
											<path id="Path_8262" data-name="Path 8262"
												d="M396.142,199.419c0,1.443-1.012,2.027-2.262,1.307a5,5,0,0,1-2.262-3.918c0-1.443,1.012-2.027,2.262-1.307A5,5,0,0,1,396.142,199.419Z"
												transform="translate(-350.34 -160.139)" fill="#173d7a" />
											<path id="Path_8263" data-name="Path 8263"
												d="M400.445,201.9c0,1.441-1.012,2.027-2.26,1.305a5,5,0,0,1-2.262-3.918c0-1.443,1.012-2.027,2.262-1.305A5,5,0,0,1,400.445,201.9Z"
												transform="translate(-346.663 -158.016)" fill="#d4ecff" />
											<path id="Path_8264" data-name="Path 8264"
												d="M404.748,204.388c0,1.443-1.012,2.027-2.262,1.305a5,5,0,0,1-2.26-3.918c0-1.441,1.012-2.027,2.26-1.305A5,5,0,0,1,404.748,204.388Z"
												transform="translate(-342.987 -155.894)" fill="#173d7a" />
											<path id="Path_8265" data-name="Path 8265"
												d="M423.514,220.253l-4.649-2.685a3,3,0,0,1-1.259-2.4v-4.918c0-.925.564-1.35,1.259-.951l4.649,2.685a3.013,3.013,0,0,1,1.257,2.4V219.3C424.771,220.227,424.207,220.654,423.514,220.253Z"
												transform="translate(-328.138 -148.217)" fill="#173d7a" />
										</g>
										<g id="Group_1355" data-name="Group 1355"
											transform="translate(4.845 158.294)">
											<path id="Path_8266" data-name="Path 8266"
												d="M471.438,280.506l-98.1-56.639c-2.2-1.27-3.976-4.671-3.976-7.6V197.562c0-2.928,1.78-4.274,3.976-3.006l98.1,56.641c2.2,1.266,3.976,4.667,3.976,7.6V277.5C475.413,280.426,473.633,281.772,471.438,280.506Z"
												transform="translate(-369.357 -194.079)" fill="#5793ce" />
											<path id="Path_8267" data-name="Path 8267"
												d="M466.421,270.816l-92.47-53.389a4.822,4.822,0,0,1-2.019-3.853V199.509c0-1.485.9-2.168,2.019-1.524l92.47,53.389a4.83,4.83,0,0,1,2.017,3.855v14.063C468.439,270.777,467.535,271.459,466.421,270.816Z"
												transform="translate(-367.157 -190.949)" fill="#d4ecff"
												opacity="0.4" />
											<path id="Path_8268" data-name="Path 8268"
												d="M390.674,216.709l-13.8-7.968a4.685,4.685,0,0,1-1.96-3.742h0c0-1.441.877-2.1,1.96-1.48l13.8,7.966a4.7,4.7,0,0,1,1.958,3.744h0C392.632,216.672,391.755,217.334,390.674,216.709Z"
												transform="translate(-364.61 -186.214)" fill="#d4ecff" />
											<path id="Path_8269" data-name="Path 8269"
												d="M391.84,214.723c0,1.445-1.012,2.029-2.262,1.307a5,5,0,0,1-2.262-3.918c0-1.441,1.012-2.027,2.262-1.305A5,5,0,0,1,391.84,214.723Z"
												transform="translate(-354.016 -180.051)" fill="#173d7a" />
											<path id="Path_8270" data-name="Path 8270"
												d="M396.142,217.209c0,1.443-1.012,2.027-2.262,1.307a5,5,0,0,1-2.262-3.92c0-1.441,1.012-2.025,2.262-1.305A5,5,0,0,1,396.142,217.209Z"
												transform="translate(-350.34 -177.929)" fill="#173d7a" />
											<path id="Path_8271" data-name="Path 8271"
												d="M400.445,219.693c0,1.443-1.012,2.029-2.26,1.307a5,5,0,0,1-2.262-3.918c0-1.443,1.012-2.027,2.262-1.305A5,5,0,0,1,400.445,219.693Z"
												transform="translate(-346.663 -175.806)" fill="#d4ecff" />
											<path id="Path_8272" data-name="Path 8272"
												d="M404.748,222.177c0,1.444-1.012,2.029-2.262,1.307a5,5,0,0,1-2.26-3.918c0-1.441,1.012-2.027,2.26-1.305A5,5,0,0,1,404.748,222.177Z"
												transform="translate(-342.987 -173.684)" fill="#173d7a" />
											<path id="Path_8273" data-name="Path 8273"
												d="M423.514,238.044l-4.649-2.685a3,3,0,0,1-1.259-2.4V228.04c0-.925.564-1.352,1.259-.951l4.649,2.685a3.012,3.012,0,0,1,1.257,2.4v4.918C424.771,238.019,424.207,238.444,423.514,238.044Z"
												transform="translate(-328.138 -166.007)" fill="#d4ecff" />
										</g>
										<g id="Group_1356" data-name="Group 1356"
											transform="translate(4.845 191.281)">
											<path id="Path_8274" data-name="Path 8274"
												d="M471.438,298.294l-98.1-56.639c-2.2-1.268-3.976-4.669-3.976-7.6V215.352c0-2.928,1.78-4.274,3.976-3.006l98.1,56.641c2.2,1.266,3.976,4.667,3.976,7.6V295.29C475.413,298.216,473.633,299.563,471.438,298.294Z"
												transform="translate(-369.357 -211.869)" fill="#5793ce" />
											<path id="Path_8275" data-name="Path 8275"
												d="M466.421,288.606l-92.47-53.389a4.822,4.822,0,0,1-2.019-3.853V217.3c0-1.485.9-2.168,2.019-1.524l92.47,53.389a4.829,4.829,0,0,1,2.017,3.853v14.065C468.439,288.567,467.535,289.249,466.421,288.606Z"
												transform="translate(-367.157 -208.739)" fill="#d4ecff"
												opacity="0.4" />
											<path id="Path_8276" data-name="Path 8276"
												d="M390.674,234.5l-13.8-7.966a4.691,4.691,0,0,1-1.96-3.744h0c0-1.441.877-2.106,1.96-1.48l13.8,7.968a4.689,4.689,0,0,1,1.958,3.742h0C392.632,234.462,391.755,235.124,390.674,234.5Z"
												transform="translate(-364.61 -204.005)" fill="#d4ecff" />
											<path id="Path_8277" data-name="Path 8277"
												d="M391.84,232.514c0,1.444-1.012,2.029-2.262,1.305a4.99,4.99,0,0,1-2.262-3.916c0-1.443,1.012-2.027,2.262-1.305A5,5,0,0,1,391.84,232.514Z"
												transform="translate(-354.016 -197.841)" fill="#173d7a" />
											<path id="Path_8278" data-name="Path 8278"
												d="M396.142,235c0,1.443-1.012,2.027-2.262,1.305a5,5,0,0,1-2.262-3.916c0-1.443,1.012-2.027,2.262-1.307A5,5,0,0,1,396.142,235Z"
												transform="translate(-350.34 -195.719)" fill="#fff" />
											<path id="Path_8279" data-name="Path 8279"
												d="M400.445,237.485c0,1.441-1.012,2.027-2.26,1.305a5,5,0,0,1-2.262-3.918c0-1.443,1.012-2.027,2.262-1.305A5,5,0,0,1,400.445,237.485Z"
												transform="translate(-346.663 -193.596)" fill="#d4ecff" />
											<path id="Path_8280" data-name="Path 8280"
												d="M404.748,239.968c0,1.443-1.012,2.027-2.262,1.305a5,5,0,0,1-2.26-3.918c0-1.441,1.012-2.027,2.26-1.305A5,5,0,0,1,404.748,239.968Z"
												transform="translate(-342.987 -191.474)" fill="#fff" />
											<path id="Path_8281" data-name="Path 8281"
												d="M423.514,255.833l-4.649-2.685a3,3,0,0,1-1.259-2.4v-4.919c0-.927.564-1.35,1.259-.951l4.649,2.685a3.012,3.012,0,0,1,1.257,2.4v4.918C424.771,255.807,424.207,256.236,423.514,255.833Z"
												transform="translate(-328.138 -183.797)" fill="#d4ecff" />
										</g>
										<g id="Group_1357" data-name="Group 1357"
											transform="translate(4.845 224.269)">
											<path id="Path_8282" data-name="Path 8282"
												d="M471.438,316.086l-98.1-56.641c-2.2-1.268-3.976-4.669-3.976-7.6V233.142c0-2.928,1.78-4.274,3.976-3.006l98.1,56.639c2.2,1.268,3.976,4.669,3.976,7.6v18.7C475.413,316.008,473.633,317.352,471.438,316.086Z"
												transform="translate(-369.357 -229.659)" fill="#5793ce" />
											<path id="Path_8283" data-name="Path 8283"
												d="M466.421,306.4l-92.47-53.387a4.83,4.83,0,0,1-2.019-3.857V235.089c0-1.483.9-2.168,2.019-1.524l92.47,53.389a4.829,4.829,0,0,1,2.017,3.853v14.065C468.439,306.357,467.535,307.039,466.421,306.4Z"
												transform="translate(-367.157 -226.529)" fill="#d4ecff"
												opacity="0.4" />
											<path id="Path_8284" data-name="Path 8284"
												d="M390.674,252.289l-13.8-7.966a4.691,4.691,0,0,1-1.96-3.744h0c0-1.441.877-2.1,1.96-1.482l13.8,7.968a4.692,4.692,0,0,1,1.958,3.744h0C392.632,252.252,391.755,252.914,390.674,252.289Z"
												transform="translate(-364.61 -221.795)" fill="#d4ecff" />
											<path id="Path_8285" data-name="Path 8285"
												d="M391.84,250.3c0,1.444-1.012,2.029-2.262,1.305a4.993,4.993,0,0,1-2.262-3.916c0-1.443,1.012-2.029,2.262-1.305A5,5,0,0,1,391.84,250.3Z"
												transform="translate(-354.016 -215.632)" fill="#173d7a" />
											<path id="Path_8286" data-name="Path 8286"
												d="M396.142,252.79c0,1.443-1.012,2.027-2.262,1.305a5,5,0,0,1-2.262-3.916c0-1.445,1.012-2.029,2.262-1.307A5,5,0,0,1,396.142,252.79Z"
												transform="translate(-350.34 -213.509)" fill="#173d7a" />
											<path id="Path_8287" data-name="Path 8287"
												d="M400.445,255.273c0,1.443-1.012,2.029-2.26,1.305a5,5,0,0,1-2.262-3.916c0-1.441,1.012-2.029,2.262-1.305A5,5,0,0,1,400.445,255.273Z"
												transform="translate(-346.663 -211.387)" fill="#d4ecff" />
											<path id="Path_8288" data-name="Path 8288"
												d="M404.748,257.757c0,1.444-1.012,2.029-2.262,1.309a5.008,5.008,0,0,1-2.26-3.92c0-1.441,1.012-2.027,2.26-1.305A5,5,0,0,1,404.748,257.757Z"
												transform="translate(-342.987 -209.264)" fill="#173d7a" />
											<path id="Path_8289" data-name="Path 8289"
												d="M423.514,273.623l-4.649-2.685a3,3,0,0,1-1.259-2.4v-4.919c0-.925.564-1.35,1.259-.948l4.649,2.683a3.012,3.012,0,0,1,1.257,2.4v4.918C424.771,273.6,424.207,274.024,423.514,273.623Z"
												transform="translate(-328.138 -201.587)" fill="#173d7a" />
										</g>
										<g id="Group_1358" data-name="Group 1358"
											transform="translate(4.845 257.257)">
											<path id="Path_8290" data-name="Path 8290"
												d="M471.438,333.876l-98.1-56.641c-2.2-1.268-3.976-4.669-3.976-7.6V250.932c0-2.928,1.78-4.274,3.976-3.006l98.1,56.641c2.2,1.266,3.976,4.667,3.976,7.6v18.706C475.413,333.8,473.633,335.142,471.438,333.876Z"
												transform="translate(-369.357 -247.449)" fill="#5793ce" />
											<path id="Path_8291" data-name="Path 8291"
												d="M466.421,324.185,373.951,270.8a4.825,4.825,0,0,1-2.019-3.853V252.879c0-1.483.9-2.168,2.019-1.524l92.47,53.389a4.832,4.832,0,0,1,2.017,3.853v14.063C468.439,324.146,467.535,324.829,466.421,324.185Z"
												transform="translate(-367.157 -244.318)" fill="#d4ecff"
												opacity="0.4" />
											<path id="Path_8292" data-name="Path 8292"
												d="M390.674,270.08l-13.8-7.966a4.691,4.691,0,0,1-1.96-3.744h0c0-1.443.877-2.107,1.96-1.482l13.8,7.968a4.7,4.7,0,0,1,1.958,3.744h0C392.632,270.041,391.755,270.7,390.674,270.08Z"
												transform="translate(-364.61 -239.585)" fill="#d4ecff" />
											<path id="Path_8293" data-name="Path 8293"
												d="M391.84,268.094c0,1.444-1.012,2.027-2.262,1.307a5,5,0,0,1-2.262-3.918c0-1.443,1.012-2.029,2.262-1.305A5,5,0,0,1,391.84,268.094Z"
												transform="translate(-354.016 -233.422)" fill="#fff" />
											<path id="Path_8294" data-name="Path 8294"
												d="M396.142,270.579c0,1.443-1.012,2.027-2.262,1.305a5,5,0,0,1-2.262-3.916c0-1.445,1.012-2.027,2.262-1.307A5,5,0,0,1,396.142,270.579Z"
												transform="translate(-350.34 -231.299)" fill="#173d7a" />
											<path id="Path_8295" data-name="Path 8295"
												d="M400.445,273.063c0,1.443-1.012,2.027-2.26,1.305a4.993,4.993,0,0,1-2.262-3.916c0-1.443,1.012-2.027,2.262-1.305A5,5,0,0,1,400.445,273.063Z"
												transform="translate(-346.663 -229.176)" fill="#d4ecff" />
											<path id="Path_8296" data-name="Path 8296"
												d="M404.748,275.548c0,1.443-1.012,2.027-2.262,1.305a5,5,0,0,1-2.26-3.918c0-1.443,1.012-2.025,2.26-1.305A5,5,0,0,1,404.748,275.548Z"
												transform="translate(-342.987 -227.054)" fill="#173d7a" />
											<path id="Path_8297" data-name="Path 8297"
												d="M423.514,291.414l-4.649-2.683a3.015,3.015,0,0,1-1.259-2.4V281.41c0-.927.564-1.352,1.259-.951l4.649,2.683a3.018,3.018,0,0,1,1.257,2.4v4.918C424.771,291.388,424.207,291.814,423.514,291.414Z"
												transform="translate(-328.138 -219.377)" fill="#d4ecff" />
										</g>
									</g>
									<g id="Group_1363" data-name="Group 1363"
										transform="translate(526.487 125.857)">
										<path id="Path_8298" data-name="Path 8298"
											d="M409.7,161.471a1.481,1.481,0,0,1-1.482-1.482V99.006a1.481,1.481,0,0,1,2.961,0V159.99A1.481,1.481,0,0,1,409.7,161.471Z"
											transform="translate(-401.117 -63.307)" fill="#5793ce" />
										<g id="Group_1362" data-name="Group 1362" transform="translate(0)">
											<g id="Group_1360" data-name="Group 1360"
												transform="translate(3.287 31.864)">
												<rect id="Rectangle_714" data-name="Rectangle 714" width="10.595"
													height="22.863" fill="#5793ce" />
												<path id="Path_8299" data-name="Path 8299"
													d="M415.2,112.157a8.28,8.28,0,0,1-7.491,0c-2.068-1.194-2.068-3.13,0-4.324a8.269,8.269,0,0,1,7.491,0C417.274,109.027,417.274,110.963,415.2,112.157Z"
													transform="translate(-406.162 -87.133)" fill="#5793ce" />
											</g>
											<g id="Group_1361" data-name="Group 1361">
												<rect id="Rectangle_715" data-name="Rectangle 715" width="17.168"
													height="35.858" transform="translate(0)" fill="#5793ce" />
												<path id="Path_8300" data-name="Path 8300"
													d="M406.162,98.774v7.738a13.706,13.706,0,0,0,10.6,0V98.774A13.722,13.722,0,0,0,406.162,98.774Z"
													transform="translate(-402.876 -63.15)" fill="#396caa" />
												<path id="Path_8301" data-name="Path 8301"
													d="M419.045,104.2a13.414,13.414,0,0,1-12.14,0c-3.353-1.936-3.354-5.073,0-7.009a13.415,13.415,0,0,1,12.14,0C422.4,99.125,422.4,102.262,419.045,104.2Z"
													transform="translate(-404.39 -64.836)" fill="#5793ce" />
											</g>
										</g>
									</g>
									<g id="Group_1367" data-name="Group 1367"
										transform="translate(540.966 134.502)">
										<path id="Path_8302" data-name="Path 8302"
											d="M417.51,166.133a1.481,1.481,0,0,1-1.482-1.482V103.668a1.482,1.482,0,0,1,2.963,0v60.984A1.48,1.48,0,0,1,417.51,166.133Z"
											transform="translate(-408.926 -67.969)" fill="#5793ce" />
										<g id="Group_1366" data-name="Group 1366">
											<g id="Group_1364" data-name="Group 1364"
												transform="translate(3.286 31.865)">
												<rect id="Rectangle_716" data-name="Rectangle 716" width="10.595"
													height="22.863" transform="translate(0.001)" fill="#5793ce" />
												<path id="Path_8303" data-name="Path 8303"
													d="M423.015,116.821a8.28,8.28,0,0,1-7.491,0c-2.071-1.2-2.071-3.132,0-4.326a8.28,8.28,0,0,1,7.491,0C425.083,113.689,425.083,115.625,423.015,116.821Z"
													transform="translate(-413.97 -91.795)" fill="#5793ce" />
											</g>
											<g id="Group_1365" data-name="Group 1365">
												<rect id="Rectangle_717" data-name="Rectangle 717" width="17.168"
													height="35.858" transform="translate(0.001)" fill="#5793ce" />
												<path id="Path_8304" data-name="Path 8304"
													d="M413.971,103.438v7.736a13.7,13.7,0,0,0,10.6,0v-7.738A13.706,13.706,0,0,0,413.971,103.438Z"
													transform="translate(-410.683 -67.812)" fill="#396caa" />
												<path id="Path_8305" data-name="Path 8305"
													d="M426.853,108.861a13.426,13.426,0,0,1-12.14,0c-3.353-1.936-3.353-5.075,0-7.009a13.415,13.415,0,0,1,12.14,0C430.205,103.786,430.205,106.925,426.853,108.861Z"
													transform="translate(-412.198 -69.497)" fill="#5793ce" />
											</g>
										</g>
									</g>
									<g id="Group_1371" data-name="Group 1371"
										transform="translate(555.444 143.147)">
										<path id="Path_8306" data-name="Path 8306"
											d="M425.319,170.8a1.481,1.481,0,0,1-1.482-1.482V108.331a1.482,1.482,0,0,1,2.963,0v60.984A1.482,1.482,0,0,1,425.319,170.8Z"
											transform="translate(-416.733 -72.631)" fill="#5793ce" />
										<g id="Group_1370" data-name="Group 1370" transform="translate(0)">
											<g id="Group_1368" data-name="Group 1368"
												transform="translate(3.287 31.865)">
												<rect id="Rectangle_718" data-name="Rectangle 718" width="10.595"
													height="22.864" fill="#5793ce" />
												<path id="Path_8307" data-name="Path 8307"
													d="M430.821,121.482a8.269,8.269,0,0,1-7.491,0c-2.068-1.194-2.068-3.13,0-4.324a8.281,8.281,0,0,1,7.491,0C432.89,118.352,432.89,120.288,430.821,121.482Z"
													transform="translate(-421.778 -96.456)" fill="#5793ce" />
											</g>
											<g id="Group_1369" data-name="Group 1369">
												<rect id="Rectangle_719" data-name="Rectangle 719" width="17.168"
													height="35.86" fill="#5793ce" />
												<path id="Path_8308" data-name="Path 8308"
													d="M421.778,108.1v7.738a13.705,13.705,0,0,0,10.6,0V108.1A13.722,13.722,0,0,0,421.778,108.1Z"
													transform="translate(-418.492 -72.474)" fill="#396caa" />
												<path id="Path_8309" data-name="Path 8309"
													d="M434.66,113.523a13.414,13.414,0,0,1-12.14,0c-3.351-1.936-3.353-5.073,0-7.009a13.414,13.414,0,0,1,12.14,0C438.013,108.45,438.013,111.587,434.66,113.523Z"
													transform="translate(-420.006 -74.159)" fill="#5793ce" />
											</g>
										</g>
									</g>
									<g id="Group_1375" data-name="Group 1375"
										transform="translate(569.923 151.793)">
										<path id="Path_8310" data-name="Path 8310"
											d="M433.125,175.458a1.48,1.48,0,0,1-1.48-1.482V112.993a1.481,1.481,0,0,1,2.961,0v60.984A1.48,1.48,0,0,1,433.125,175.458Z"
											transform="translate(-424.541 -77.295)" fill="#5793ce" />
										<g id="Group_1374" data-name="Group 1374" transform="translate(0)">
											<g id="Group_1372" data-name="Group 1372"
												transform="translate(3.288 31.863)">
												<rect id="Rectangle_720" data-name="Rectangle 720" width="10.595"
													height="22.864" fill="#5793ce" />
												<path id="Path_8311" data-name="Path 8311"
													d="M438.63,126.146a8.28,8.28,0,0,1-7.491,0c-2.069-1.194-2.069-3.132,0-4.326a8.28,8.28,0,0,1,7.491,0C440.7,123.014,440.7,124.952,438.63,126.146Z"
													transform="translate(-429.587 -101.119)" fill="#5793ce" />
											</g>
											<g id="Group_1373" data-name="Group 1373">
												<rect id="Rectangle_721" data-name="Rectangle 721" width="17.168"
													height="35.858" transform="translate(0.001)" fill="#5793ce" />
												<path id="Path_8312" data-name="Path 8312"
													d="M429.587,112.763V120.5a13.705,13.705,0,0,0,10.6,0v-7.736A13.705,13.705,0,0,0,429.587,112.763Z"
													transform="translate(-426.299 -77.137)" fill="#396caa" />
												<path id="Path_8313" data-name="Path 8313"
													d="M442.469,118.184a13.415,13.415,0,0,1-12.14,0c-3.353-1.934-3.353-5.073,0-7.007a13.414,13.414,0,0,1,12.14,0C445.821,113.113,445.821,116.25,442.469,118.184Z"
													transform="translate(-427.814 -78.822)" fill="#5793ce" />
											</g>
										</g>
									</g>
									<g id="Group_1382" data-name="Group 1382" transform="translate(469.255 24.308)">
										<g id="Group_1378" data-name="Group 1378">
											<path id="Path_8314" data-name="Path 8314"
												d="M470.882,147.267,493.9,133.709,471.98,106.348l-5.764,9.416Z"
												transform="translate(-294.34 45.778)" fill="#5793ce" />
											<path id="Path_8315" data-name="Path 8315"
												d="M378.593,57.168,415.33,36.031s-1.381,21.093-1.381,21.137S392.843,63.7,392.843,63.7Z"
												transform="translate(-369.195 -14.293)" fill="#5793ce" />
											<path id="Path_8316" data-name="Path 8316"
												d="M539.561,148.547a23.164,23.164,0,0,0-7.949-2.945c-3.7-19.466-17.249-40.142-33.4-49.467a32.713,32.713,0,0,0-13.668-4.625c-2.207-23.6-18.611-50.413-38.536-61.913-10.406-6.01-19.848-6.72-26.815-3.041l0-.019-.339.195c-.178.1-.354.2-.528.3l-21.666,12.8,7.2,5.685C397.4,48.342,393.313,55.59,393.313,66.3c0,19.756,13.87,43.778,30.98,53.656l115.268,82.31c12.847,7.417,23.262,1.406,23.262-13.429S552.407,155.965,539.561,148.547Z"
												transform="translate(-356.62 -24.308)" fill="#5793ce" />
											<path id="Path_8317" data-name="Path 8317"
												d="M393.89,57.606l49.723-29.051c-9.653-5.034-18.374-5.452-24.914-2l0-.019-.339.195c-.178.1-.354.2-.528.3l-21.666,12.8,7.2,5.685C398.848,47.492,395.5,51.635,393.89,57.606Z"
												transform="translate(-356.127 -24.308)" fill="#5793ce" />
											<path id="Path_8318" data-name="Path 8318"
												d="M460.851,110.856l36.281-21.289C490.907,78.8,482.341,69.4,472.854,63.924q-1.883-1.088-3.714-1.91L422.994,89Z"
												transform="translate(-331.264 7.904)" fill="#5793ce" />
											<path id="Path_8319" data-name="Path 8319"
												d="M400.631,41.775,416.8,51.11l29.607-17.438a58.417,58.417,0,0,0-6.653-4.508,41.521,41.521,0,0,0-10.347-4.348Z"
												transform="translate(-350.369 -23.874)" fill="#d4ecff" />
											<path id="Path_8320" data-name="Path 8320"
												d="M474.157,73.5,445.2,90.556l10.071,11.231,26.286-15.52A84.29,84.29,0,0,0,474.157,73.5Z"
												transform="translate(-312.292 17.712)" fill="#d4ecff" />
											<path id="Path_8321" data-name="Path 8321"
												d="M533.721,155.778a23.117,23.117,0,0,0-7.949-2.946c-3.7-19.466-17.25-40.14-33.4-49.467A32.713,32.713,0,0,0,478.7,98.74c-2.2-23.6-18.611-50.411-38.534-61.913-21.426-12.37-38.8-2.344-38.8,22.4,0,.84.024,1.686.063,2.537-15.667-7.267-27.911.922-27.911,19.481,0,19.754,13.872,43.776,30.98,53.654l129.216,74.6c12.848,7.417,23.262,1.406,23.262-13.431S546.569,163.2,533.721,155.778Z"
												transform="translate(-373.525 -18.139)" fill="#d4ecff" />
											<g id="Group_1376" data-name="Group 1376"
												transform="translate(7.089 11.546)">
												<path id="Path_8322" data-name="Path 8322"
													d="M398.17,49.877c-.039-.851-.063-1.7-.063-2.537l0-.1c-8.656-3.366-16.093-1.9-20.761,3.5C382.418,46.562,389.794,45.992,398.17,49.877Z"
													transform="translate(-377.348 -17.803)" fill="#fff" />
												<path id="Path_8323" data-name="Path 8323"
													d="M518.826,154.782a23.163,23.163,0,0,0-7.949-2.945c-3.7-19.468-17.249-40.14-33.4-49.467a32.721,32.721,0,0,0-13.67-4.625c-2.2-23.6-18.611-50.411-38.534-61.913-13.349-7.708-25.122-6.718-32.1,1.1,7.111-6.077,18-6.31,30.208.74C443.3,49.178,459.712,76,461.916,99.589a32.714,32.714,0,0,1,13.668,4.625c16.151,9.327,29.7,30,33.4,49.467a23.117,23.117,0,0,1,7.949,2.946c12.848,7.417,23.262,25.456,23.262,40.29,0,5.353-1.37,9.537-3.709,12.376,3.484-2.685,5.6-7.551,5.6-14.219C542.088,180.24,531.673,162.2,518.826,154.782Z"
													transform="translate(-363.828 -30.535)" fill="#fff" />
											</g>
											<g id="Group_1377" data-name="Group 1377"
												transform="translate(6.496 19.868)">
												<path id="Path_8324" data-name="Path 8324"
													d="M395.712,64.668l9.713,4.5-.5-10.7c-.033-.751-.056-1.5-.056-2.238,0-9.548,2.883-16.468,8.116-19.49s12.67-2.055,20.939,2.718c17.781,10.265,33.292,35.257,35.315,56.893l.508,5.452,5.461.421a26.232,26.232,0,0,1,10.918,3.773c14.122,8.153,26.854,27.1,30.268,45.056l.855,4.493,4.521.708a16.8,16.8,0,0,1,5.707,2.155c10.849,6.264,20.015,22.14,20.015,34.666,0,4.688-1.3,8.127-3.568,9.436s-5.893.714-9.954-1.63l-129.216-74.6c-15.031-8.678-27.731-30.674-27.731-48.032,0-6.811,2.008-12,5.511-14.237a9.432,9.432,0,0,1,5.149-1.378A19.431,19.431,0,0,1,395.712,64.668Z"
													transform="translate(-377.028 -35.022)" fill="#396caa" />
											</g>
										</g>
										<g id="Group_1381" data-name="Group 1381"
											transform="translate(61.488 82.655)">
											<path id="Path_8325" data-name="Path 8325"
												d="M421.883,96.643l3.408-1.711-3.355-2.542Z"
												transform="translate(-393.701 -48.801)" fill="#5793ce" />
											<path id="Path_8326" data-name="Path 8326"
												d="M416.361,70.622l3.31-1.673.06,1.732Z"
												transform="translate(-398.418 -68.826)" fill="#5793ce" />
											<path id="Path_8327" data-name="Path 8327"
												d="M428.6,92.591l3.453-1.737L425.4,84.533Z"
												transform="translate(-390.693 -55.513)" fill="#5793ce" />
											<g id="Group_1379" data-name="Group 1379" transform="translate(3.461)">
												<path id="Path_8328" data-name="Path 8328"
													d="M431.3,107.939l-16.14-9.505a3.442,3.442,0,0,1-1.476-2.715l.052-18.682,19.1,11.252-.054,18.684C432.784,107.987,432.118,108.421,431.3,107.939Z"
													transform="translate(-404.167 -61.917)" fill="#5793ce" />
												<path id="Path_8329" data-name="Path 8329"
													d="M426.308,69.026,408.879,80.243c-.742.477-.145,2.251.981,2.911l17.8,10.484,17.8,10.486c1.122.66,1.73-.4.994-1.749L429.148,70.7C428.4,69.33,427.06,68.542,426.308,69.026Z"
													transform="translate(-408.551 -68.883)" fill="#5793ce" />
											</g>
											<g id="Group_1380" data-name="Group 1380"
												transform="translate(0 1.743)">
												<path id="Path_8330" data-name="Path 8330"
													d="M429.432,108.88l-16.138-9.505a3.439,3.439,0,0,1-1.478-2.713l.054-18.686,19.1,11.252-.052,18.684C430.917,108.928,430.251,109.362,429.432,108.88Z"
													transform="translate(-402.301 -62.857)" fill="#d4ecff" />
												<path id="Path_8331" data-name="Path 8331"
													d="M424.442,69.966l-17.43,11.217c-.74.475-.143,2.249.981,2.911l17.8,10.484,17.8,10.484c1.124.662,1.728-.4,1-1.747l-17.31-31.677C426.534,70.27,425.195,69.482,424.442,69.966Z"
													transform="translate(-406.685 -69.823)" fill="#d4ecff" />
											</g>
										</g>
									</g>
									<path id="Path_8332" data-name="Path 8332"
										d="M453.663,352.691h-1.977V242.236l13.043-7.531V180.333h1.977v55.513l-13.043,7.531Z"
										transform="translate(162.502 133.291)" fill="#fff" />
									<g id="Group_1383" data-name="Group 1383"
										transform="translate(261.467 428.306)">
										<path id="Path_8333" data-name="Path 8333"
											d="M302.606,323.719a6.776,6.776,0,0,1-3.341-.885l-36.04-20.408a3.459,3.459,0,0,1-.031-6.006l89.9-52a16.757,16.757,0,0,1,16.722,0L472.572,303.8l-1.483,2.57L368.335,246.981a13.8,13.8,0,0,0-13.757,0l-89.9,52a.5.5,0,0,0,.006.862l36.042,20.408a3.8,3.8,0,0,0,3.951-.115l15.229-9.848,1.61,2.488-15.231,9.85A6.764,6.764,0,0,1,302.606,323.719Z"
											transform="translate(-261.467 -242.18)" fill="#b2d3ea" />
									</g>
									<g id="Group_1394" data-name="Group 1394"
										transform="translate(284.996 334.026)">
										<path id="Path_8334" data-name="Path 8334"
											d="M332.21,319.578l-48.451-27.972c-2.974-1.719-2.6-4.717.833-6.7l46.784-27.01c3.432-1.982,8.626-2.2,11.6-.48l48.449,27.972c2.974,1.715,2.6,4.715-.833,6.7L343.81,319.1C340.376,321.08,335.182,321.3,332.21,319.578Z"
											transform="translate(-267.667 -135.873)" fill="#b2d3ea" />
										<g id="Group_1385" data-name="Group 1385" transform="translate(0 66.906)">
											<path id="Path_8335" data-name="Path 8335"
												d="M413.981,275.118h0V254.185l-46.939-.024-16.225-9.37c-3.723-2.149-10.228-1.88-14.527.6l-15.138,8.741-46.98-.028v21.53c-.108,1.456.7,2.859,2.494,3.892l60.669,35.028c3.723,2.149,10.228,1.88,14.526-.6l58.583-33.82C412.924,278.7,414.122,276.847,413.981,275.118Z"
												transform="translate(-274.151 -213.815)" fill="#396caa" />
											<path id="Path_8336" data-name="Path 8336"
												d="M344.076,243.347a16.77,16.77,0,0,0-7.786,2.042l-15.138,8.741-46.98-.028v21.53c-.108,1.456.7,2.859,2.494,3.892l60.669,35.028a13.117,13.117,0,0,0,6.742,1.439Z"
												transform="translate(-274.151 -213.809)" fill="#396caa" />
											<path id="Path_8337" data-name="Path 8337"
												d="M279.488,249.149l-5.316,0v21.53c-.108,1.456.7,2.859,2.494,3.892l2.822,1.628Z"
												transform="translate(-274.151 -208.854)" fill="#5793ce" />
											<path id="Path_8338" data-name="Path 8338"
												d="M308.734,293.318a16.557,16.557,0,0,0,11.613-.134V268.739H308.734Z"
												transform="translate(-244.617 -192.117)" fill="#5793ce" />
											<path id="Path_8339" data-name="Path 8339"
												d="M337.339,306.71,276.67,271.68c-3.723-2.149-3.258-5.906,1.042-8.385L336.3,229.471c4.3-2.483,10.8-2.752,14.527-.6l60.67,35.029c3.725,2.149,3.258,5.9-1.044,8.387l-58.583,33.82C347.567,308.588,341.062,308.859,337.339,306.71Z"
												transform="translate(-274.156 -227.417)" fill="#d4ecff" />
											<path id="Path_8340" data-name="Path 8340"
												d="M333.213,297.39l-50.841-29.353c-3.121-1.8-2.73-4.949.873-7.028l49.092-28.343c3.6-2.08,9.053-2.307,12.173-.5l50.843,29.353c3.121,1.8,2.73,4.949-.875,7.028l-49.09,28.343C341.783,298.966,336.333,299.192,333.213,297.39Z"
												transform="translate(-268.938 -224.404)" fill="#5793ce" />
											<g id="Group_1384" data-name="Group 1384"
												transform="translate(112.615 55.976)">
												<path id="Path_8341" data-name="Path 8341"
													d="M339.789,264.264a5.418,5.418,0,0,1-2.451,4.244c-1.354.781-2.45.148-2.45-1.415a5.413,5.413,0,0,1,2.45-4.244C338.691,262.067,339.789,262.7,339.789,264.264Z"
													transform="translate(-334.888 -253.411)" fill="#d4ecff" />
												<path id="Path_8342" data-name="Path 8342"
													d="M344.041,261.809a5.415,5.415,0,0,1-2.451,4.244c-1.354.781-2.449.148-2.449-1.415a5.416,5.416,0,0,1,2.449-4.245C342.943,259.612,344.041,260.246,344.041,261.809Z"
													transform="translate(-331.256 -255.508)" fill="#d4ecff" />
												<path id="Path_8343" data-name="Path 8343"
													d="M348.291,259.356a5.413,5.413,0,0,1-2.449,4.243c-1.354.783-2.449.148-2.449-1.415a5.416,5.416,0,0,1,2.449-4.244C347.2,257.158,348.291,257.791,348.291,259.356Z"
													transform="translate(-327.623 -257.605)" fill="#d4ecff" />
											</g>
										</g>
										<g id="Group_1387" data-name="Group 1387" transform="translate(0 33.453)">
											<path id="Path_8344" data-name="Path 8344"
												d="M413.981,257.079h0V236.144l-46.939-.024-16.225-9.37c-3.723-2.147-10.228-1.88-14.527.6l-15.138,8.741-46.98-.028V257.6c-.108,1.456.7,2.859,2.494,3.892l60.669,35.028c3.723,2.149,10.228,1.88,14.526-.6l58.583-33.82C412.924,260.66,414.122,258.805,413.981,257.079Z"
												transform="translate(-274.151 -195.773)" fill="#396caa" />
											<path id="Path_8345" data-name="Path 8345"
												d="M344.076,225.306a16.77,16.77,0,0,0-7.786,2.042l-15.138,8.741-46.98-.028v21.53c-.108,1.456.7,2.859,2.494,3.892l60.669,35.028a13.117,13.117,0,0,0,6.742,1.439Z"
												transform="translate(-274.151 -195.768)" fill="#396caa" />
											<path id="Path_8346" data-name="Path 8346"
												d="M279.488,231.108l-5.316,0v21.53c-.108,1.456.7,2.859,2.494,3.892l2.822,1.63Z"
												transform="translate(-274.151 -190.813)" fill="#5793ce" />
											<path id="Path_8347" data-name="Path 8347"
												d="M308.734,275.276a16.557,16.557,0,0,0,11.613-.134V250.7H308.734Z"
												transform="translate(-244.617 -174.075)" fill="#5793ce" />
											<path id="Path_8348" data-name="Path 8348"
												d="M337.339,288.669,276.67,253.639c-3.723-2.149-3.258-5.9,1.042-8.385L336.3,211.43c4.3-2.483,10.8-2.752,14.527-.6l60.67,35.029c3.725,2.149,3.258,5.9-1.044,8.385l-58.583,33.824C347.567,290.547,341.062,290.818,337.339,288.669Z"
												transform="translate(-274.156 -209.376)" fill="#d4ecff" />
											<path id="Path_8349" data-name="Path 8349"
												d="M333.213,279.349,282.372,250c-3.121-1.8-2.73-4.949.873-7.028l49.092-28.343c3.6-2.08,9.053-2.307,12.173-.506l50.843,29.355c3.121,1.8,2.73,4.949-.875,7.028l-49.09,28.343C341.783,280.925,336.333,281.151,333.213,279.349Z"
												transform="translate(-268.938 -206.363)" fill="#5793ce" />
											<g id="Group_1386" data-name="Group 1386"
												transform="translate(112.615 55.976)">
												<path id="Path_8350" data-name="Path 8350"
													d="M339.789,246.223a5.418,5.418,0,0,1-2.451,4.244c-1.354.781-2.45.148-2.45-1.415a5.416,5.416,0,0,1,2.45-4.244C338.691,244.026,339.789,244.66,339.789,246.223Z"
													transform="translate(-334.888 -235.369)" fill="#d4ecff" />
												<path id="Path_8351" data-name="Path 8351"
													d="M344.041,243.768a5.415,5.415,0,0,1-2.451,4.244c-1.354.783-2.449.148-2.449-1.415a5.416,5.416,0,0,1,2.449-4.244C342.943,241.571,344.041,242.205,344.041,243.768Z"
													transform="translate(-331.256 -237.467)" fill="#d4ecff" />
												<path id="Path_8352" data-name="Path 8352"
													d="M348.291,241.315a5.419,5.419,0,0,1-2.449,4.244c-1.354.781-2.449.147-2.449-1.417a5.416,5.416,0,0,1,2.449-4.244C347.2,239.117,348.291,239.75,348.291,241.315Z"
													transform="translate(-327.623 -239.564)" fill="#d4ecff" />
											</g>
										</g>
										<g id="Group_1390" data-name="Group 1390">
											<path id="Path_8353" data-name="Path 8353"
												d="M413.981,239.036h0V218.1l-46.939-.024-16.225-9.368c-3.723-2.149-10.228-1.882-14.527.6l-15.138,8.741-46.98-.028v21.53c-.108,1.456.7,2.859,2.494,3.892l60.669,35.028c3.723,2.149,10.228,1.88,14.526-.6l58.583-33.82C412.924,242.618,414.122,240.764,413.981,239.036Z"
												transform="translate(-274.151 -177.732)" fill="#396caa" />
											<path id="Path_8354" data-name="Path 8354"
												d="M344.076,207.265a16.77,16.77,0,0,0-7.786,2.042l-15.138,8.741-46.98-.028v21.53c-.108,1.456.7,2.859,2.494,3.892l60.669,35.028a13.117,13.117,0,0,0,6.742,1.439Z"
												transform="translate(-274.151 -177.727)" fill="#396caa" />
											<path id="Path_8355" data-name="Path 8355"
												d="M279.488,213.069l-5.316,0V234.6c-.108,1.456.7,2.859,2.494,3.892l2.822,1.63Z"
												transform="translate(-274.151 -172.772)" fill="#5793ce" />
											<path id="Path_8356" data-name="Path 8356"
												d="M308.734,257.235a16.557,16.557,0,0,0,11.613-.133V232.658H308.734Z"
												transform="translate(-244.617 -156.034)" fill="#5793ce" />
											<path id="Path_8357" data-name="Path 8357"
												d="M337.339,270.628,276.67,235.6c-3.723-2.151-3.258-5.908,1.042-8.387L336.3,193.389c4.3-2.483,10.8-2.752,14.527-.6l60.67,35.029c3.725,2.149,3.258,5.9-1.044,8.385l-58.583,33.822C347.567,272.506,341.062,272.777,337.339,270.628Z"
												transform="translate(-274.156 -191.335)" fill="#d4ecff" />
											<path id="Path_8358" data-name="Path 8358"
												d="M410.448,214.517l-58.583,33.822c-4.3,2.483-10.8,2.752-14.526.6L276.67,213.913a5.556,5.556,0,0,1-1.858-1.647c-1.279,2.058-.7,4.291,1.858,5.767l60.669,35.029c3.723,2.149,10.228,1.878,14.526-.6l58.583-33.822c3.341-1.927,4.358-4.621,2.9-6.739A8.107,8.107,0,0,1,410.448,214.517Z"
												transform="translate(-274.156 -173.77)" fill="#fff" />
											<g id="Group_1388" data-name="Group 1388"
												transform="translate(112.615 55.976)">
												<path id="Path_8359" data-name="Path 8359"
													d="M339.789,228.182a5.418,5.418,0,0,1-2.451,4.244c-1.354.781-2.45.148-2.45-1.415a5.413,5.413,0,0,1,2.45-4.244C338.691,225.985,339.789,226.619,339.789,228.182Z"
													transform="translate(-334.888 -217.328)" fill="#d4ecff" />
												<path id="Path_8360" data-name="Path 8360"
													d="M344.041,225.727a5.415,5.415,0,0,1-2.451,4.244c-1.354.783-2.449.148-2.449-1.415a5.416,5.416,0,0,1,2.449-4.244C342.943,223.53,344.041,224.164,344.041,225.727Z"
													transform="translate(-331.256 -219.426)" fill="#d4ecff" />
												<path id="Path_8361" data-name="Path 8361"
													d="M348.291,223.274a5.419,5.419,0,0,1-2.449,4.244c-1.354.781-2.449.147-2.449-1.417a5.416,5.416,0,0,1,2.449-4.244C347.2,221.076,348.291,221.709,348.291,223.274Z"
													transform="translate(-327.623 -221.523)" fill="#d4ecff" />
											</g>
											<g id="Group_1389" data-name="Group 1389"
												transform="translate(37.205 20.471)">
												<path id="Path_8362" data-name="Path 8362"
													d="M323.786,239.479,295.4,223.087c-1.741-1.005-1.522-2.763.49-3.924L323.3,203.337a7.556,7.556,0,0,1,6.8-.284l28.391,16.392c1.743,1.005,1.524,2.763-.488,3.924L330.584,239.2A7.55,7.55,0,0,1,323.786,239.479Z"
													transform="translate(-294.22 -202.375)" fill="#5793ce" />
												<path id="Path_8363" data-name="Path 8363"
													d="M313.516,217.347l-3.927-2.266c-.241-.141-.211-.382.067-.543l3.794-2.19a1.043,1.043,0,0,1,.94-.039l3.927,2.266c.241.141.211.384-.067.543l-3.794,2.192A1.042,1.042,0,0,1,313.516,217.347Z"
													transform="translate(-281.231 -193.969)" fill="#d4ecff" />
												<path id="Path_8364" data-name="Path 8364"
													d="M295.4,223.087l.082.046a4.735,4.735,0,0,1,.408-.28L323.3,207.027a7.555,7.555,0,0,1,6.8-.282l28.311,16.346c1.606-1.152,1.689-2.717.08-3.646l-28.391-16.392a7.556,7.556,0,0,0-6.8.284l-27.412,15.826C293.873,220.324,293.654,222.082,295.4,223.087Z"
													transform="translate(-294.22 -202.375)" fill="#396caa" />
											</g>
										</g>
										<g id="Group_1391" data-name="Group 1391"
											transform="translate(50.859 79.393)">
											<path id="Path_8365" data-name="Path 8365"
												d="M307.642,238.814c0,1.053-.738,1.478-1.65.953a3.648,3.648,0,0,1-1.648-2.856c0-1.051.738-1.478,1.648-.953A3.643,3.643,0,0,1,307.642,238.814Z"
												transform="translate(-299.227 -232.799)" fill="#d4ecff" />
											<path id="Path_8366" data-name="Path 8366"
												d="M304.883,237.234c0,1.051-.738,1.476-1.648.951a3.646,3.646,0,0,1-1.65-2.857c0-1.051.738-1.478,1.65-.951A3.646,3.646,0,0,1,304.883,237.234Z"
												transform="translate(-301.584 -234.151)" fill="#d4ecff" />
											<path id="Path_8367" data-name="Path 8367"
												d="M307.642,242.145c0,1.051-.738,1.476-1.65.951a3.64,3.64,0,0,1-1.648-2.856c0-1.051.738-1.478,1.648-.953A3.649,3.649,0,0,1,307.642,242.145Z"
												transform="translate(-299.227 -229.955)" fill="#d4ecff" />
											<path id="Path_8368" data-name="Path 8368"
												d="M304.883,240.563c0,1.051-.738,1.476-1.648.951a3.64,3.64,0,0,1-1.65-2.857c0-1.05.738-1.478,1.65-.951A3.646,3.646,0,0,1,304.883,240.563Z"
												transform="translate(-301.584 -231.307)" fill="#d4ecff" />
										</g>
										<g id="Group_1392" data-name="Group 1392"
											transform="translate(50.859 112.681)">
											<path id="Path_8369" data-name="Path 8369"
												d="M307.642,256.767c0,1.051-.738,1.478-1.65.951a3.643,3.643,0,0,1-1.648-2.856c0-1.051.738-1.478,1.648-.951A3.64,3.64,0,0,1,307.642,256.767Z"
												transform="translate(-299.227 -250.752)" fill="#d4ecff" />
											<path id="Path_8370" data-name="Path 8370"
												d="M304.883,255.185c0,1.051-.738,1.476-1.648.951a3.643,3.643,0,0,1-1.65-2.856c0-1.051.738-1.478,1.65-.951A3.64,3.64,0,0,1,304.883,255.185Z"
												transform="translate(-301.584 -252.103)" fill="#d4ecff" />
											<path id="Path_8371" data-name="Path 8371"
												d="M307.642,260.1c0,1.05-.738,1.478-1.65.949a3.64,3.64,0,0,1-1.648-2.856c0-1.051.738-1.478,1.648-.949A3.637,3.637,0,0,1,307.642,260.1Z"
												transform="translate(-299.227 -247.908)" fill="#d4ecff" />
											<path id="Path_8372" data-name="Path 8372"
												d="M304.883,258.514c0,1.051-.738,1.478-1.648.951a3.637,3.637,0,0,1-1.65-2.856c0-1.051.738-1.478,1.65-.951A3.646,3.646,0,0,1,304.883,258.514Z"
												transform="translate(-301.584 -249.259)" fill="#d4ecff" />
										</g>
										<g id="Group_1393" data-name="Group 1393"
											transform="translate(50.859 145.968)">
											<path id="Path_8373" data-name="Path 8373"
												d="M307.642,274.719c0,1.049-.738,1.478-1.65.949a3.64,3.64,0,0,1-1.648-2.856c0-1.051.738-1.476,1.648-.951A3.643,3.643,0,0,1,307.642,274.719Z"
												transform="translate(-299.227 -268.703)" fill="#d4ecff" />
											<path id="Path_8374" data-name="Path 8374"
												d="M304.883,273.135c0,1.051-.738,1.478-1.648.951a3.64,3.64,0,0,1-1.65-2.856c0-1.051.738-1.476,1.65-.951A3.64,3.64,0,0,1,304.883,273.135Z"
												transform="translate(-301.584 -270.055)" fill="#d4ecff" />
											<path id="Path_8375" data-name="Path 8375"
												d="M307.642,278.048c0,1.051-.738,1.478-1.65.951a3.646,3.646,0,0,1-1.648-2.856c0-1.051.738-1.478,1.648-.951A3.637,3.637,0,0,1,307.642,278.048Z"
												transform="translate(-299.227 -265.859)" fill="#d4ecff" />
											<path id="Path_8376" data-name="Path 8376"
												d="M304.883,276.464c0,1.051-.738,1.48-1.648.953a3.642,3.642,0,0,1-1.65-2.856c0-1.053.738-1.478,1.65-.953A3.645,3.645,0,0,1,304.883,276.464Z"
												transform="translate(-301.584 -267.211)" fill="#d4ecff" />
										</g>
									</g>
									<path id="Path_8377" data-name="Path 8377"
										d="M329.452,321.943a10.006,10.006,0,0,1-5.018-1.344l-30.572-17.744a3.331,3.331,0,0,1,0-5.763l20.1-11.66L315.458,288l-20.1,11.66a.366.366,0,0,0,0,.634l30.574,17.744a7.066,7.066,0,0,0,7.009.026l59.881-34.123a10.038,10.038,0,0,1,9.972.043l50.16,28.97a7.039,7.039,0,0,0,7.057.011l24.185-13.987,1.485,2.568-24.186,13.987a10.014,10.014,0,0,1-10.03-.015L401.3,286.544a7.059,7.059,0,0,0-7.02-.031L334.4,320.635A9.985,9.985,0,0,1,329.452,321.943Z"
										transform="translate(26.257 220.684)" fill="#b2d3ea" />
									<g id="Group_1402" data-name="Group 1402" transform="translate(556.75 471.798)">
										<path id="Path_8378" data-name="Path 8378"
											d="M478.764,393.877,430.315,365.9c-2.976-1.717-2.6-4.715.833-6.7l46.78-27.01c3.434-1.982,8.63-2.2,11.6-.48l48.449,27.972c2.974,1.715,2.6,4.714-.833,6.7L490.364,393.4C486.932,395.38,481.736,395.594,478.764,393.877Z"
											transform="translate(-414.222 -210.172)" fill="#b2d3ea" />
										<g id="Group_1396" data-name="Group 1396" transform="translate(0 66.906)">
											<path id="Path_8379" data-name="Path 8379"
												d="M560.535,349.417h0V328.485l-46.94-.026-16.223-9.368c-3.725-2.149-10.23-1.88-14.528.6l-15.137,8.739-46.982-.028v21.53c-.108,1.456.7,2.861,2.492,3.892l60.671,35.027c3.725,2.149,10.228,1.88,14.528-.6L557,354.431C559.478,353,560.674,351.145,560.535,349.417Z"
												transform="translate(-420.706 -288.114)" fill="#396caa" />
											<path id="Path_8380" data-name="Path 8380"
												d="M490.63,317.646a16.756,16.756,0,0,0-7.786,2.043l-15.137,8.739-46.982-.028v21.53c-.108,1.456.7,2.861,2.492,3.892l60.671,35.027a13.177,13.177,0,0,0,6.742,1.441Z"
												transform="translate(-420.706 -288.109)" fill="#396caa" />
											<path id="Path_8381" data-name="Path 8381"
												d="M426.042,323.45l-5.316,0v21.53c-.108,1.456.7,2.861,2.492,3.892l2.824,1.63Z"
												transform="translate(-420.706 -283.154)" fill="#5793ce" />
											<path id="Path_8382" data-name="Path 8382"
												d="M455.289,367.616a16.551,16.551,0,0,0,11.612-.132V343.039H455.289Z"
												transform="translate(-391.17 -266.416)" fill="#5793ce" />
											<path id="Path_8383" data-name="Path 8383"
												d="M483.893,381.008l-60.671-35.027c-3.722-2.151-3.254-5.906,1.044-8.389l58.583-33.822c4.3-2.481,10.8-2.752,14.528-.6L558.044,338.2c3.725,2.149,3.258,5.9-1.042,8.387L498.421,380.4C494.121,382.889,487.618,383.157,483.893,381.008Z"
												transform="translate(-420.71 -301.717)" fill="#d4ecff" />
											<path id="Path_8384" data-name="Path 8384"
												d="M479.767,371.691l-50.841-29.353c-3.121-1.8-2.729-4.949.873-7.03l49.092-28.343c3.6-2.081,9.053-2.307,12.175-.506l50.841,29.353c3.119,1.8,2.728,4.949-.875,7.03L491.94,371.187C488.337,373.267,482.889,373.491,479.767,371.691Z"
												transform="translate(-415.492 -298.704)" fill="#5793ce" />
											<g id="Group_1395" data-name="Group 1395"
												transform="translate(112.612 55.976)">
												<path id="Path_8385" data-name="Path 8385"
													d="M486.344,338.565a5.417,5.417,0,0,1-2.449,4.243c-1.355.783-2.453.148-2.453-1.415a5.415,5.415,0,0,1,2.453-4.244C485.246,336.366,486.344,337,486.344,338.565Z"
													transform="translate(-481.441 -327.71)" fill="#d4ecff" />
												<path id="Path_8386" data-name="Path 8386"
													d="M490.6,336.11a5.427,5.427,0,0,1-2.45,4.244c-1.355.781-2.453.146-2.453-1.417a5.415,5.415,0,0,1,2.453-4.245C489.5,333.912,490.6,334.546,490.6,336.11Z"
													transform="translate(-477.809 -329.807)" fill="#d4ecff" />
												<path id="Path_8387" data-name="Path 8387"
													d="M494.848,333.654A5.421,5.421,0,0,1,492.4,337.9c-1.354.781-2.451.148-2.451-1.417a5.414,5.414,0,0,1,2.451-4.243C493.75,331.457,494.848,332.091,494.848,333.654Z"
													transform="translate(-474.176 -331.904)" fill="#d4ecff" />
											</g>
										</g>
										<g id="Group_1398" data-name="Group 1398" transform="translate(0 33.453)">
											<path id="Path_8388" data-name="Path 8388"
												d="M560.535,331.376h0V310.444l-46.94-.026-16.223-9.368c-3.725-2.149-10.23-1.88-14.528.6l-15.137,8.739-46.982-.028v21.53c-.108,1.456.7,2.861,2.492,3.892l60.671,35.028c3.725,2.149,10.228,1.88,14.528-.6L557,336.39C559.478,334.958,560.674,333.1,560.535,331.376Z"
												transform="translate(-420.706 -270.073)" fill="#396caa" />
											<path id="Path_8389" data-name="Path 8389"
												d="M490.63,299.605a16.755,16.755,0,0,0-7.786,2.043l-15.137,8.739-46.982-.028v21.53c-.108,1.456.7,2.861,2.492,3.892l60.671,35.028a13.159,13.159,0,0,0,6.742,1.441Z"
												transform="translate(-420.706 -270.068)" fill="#396caa" />
											<path id="Path_8390" data-name="Path 8390"
												d="M426.042,305.409l-5.316,0v21.53c-.108,1.456.7,2.861,2.492,3.892l2.824,1.63Z"
												transform="translate(-420.706 -265.113)" fill="#5793ce" />
											<path id="Path_8391" data-name="Path 8391"
												d="M455.289,349.575a16.552,16.552,0,0,0,11.612-.132V325H455.289Z"
												transform="translate(-391.17 -248.375)" fill="#5793ce" />
											<path id="Path_8392" data-name="Path 8392"
												d="M483.893,362.969,423.222,327.94c-3.722-2.151-3.254-5.906,1.044-8.389l58.583-33.822c4.3-2.481,10.8-2.752,14.528-.6l60.667,35.027c3.725,2.149,3.258,5.9-1.042,8.387l-58.581,33.822C494.121,364.848,487.618,365.116,483.893,362.969Z"
												transform="translate(-420.71 -283.676)" fill="#d4ecff" />
											<path id="Path_8393" data-name="Path 8393"
												d="M479.767,353.65,428.926,324.3c-3.121-1.8-2.729-4.949.873-7.03l49.092-28.343c3.6-2.081,9.053-2.307,12.175-.5l50.841,29.353c3.119,1.8,2.728,4.947-.875,7.028L491.94,353.145C488.337,355.226,482.889,355.45,479.767,353.65Z"
												transform="translate(-415.492 -280.663)" fill="#5793ce" />
											<g id="Group_1397" data-name="Group 1397"
												transform="translate(112.612 55.976)">
												<path id="Path_8394" data-name="Path 8394"
													d="M486.344,320.524a5.418,5.418,0,0,1-2.449,4.243c-1.355.783-2.453.148-2.453-1.415a5.415,5.415,0,0,1,2.453-4.244C485.246,318.326,486.344,318.959,486.344,320.524Z"
													transform="translate(-481.441 -309.669)" fill="#d4ecff" />
												<path id="Path_8395" data-name="Path 8395"
													d="M490.6,318.069a5.424,5.424,0,0,1-2.45,4.244c-1.355.781-2.453.147-2.453-1.417a5.415,5.415,0,0,1,2.453-4.245C489.5,315.871,490.6,316.505,490.6,318.069Z"
													transform="translate(-477.809 -311.766)" fill="#d4ecff" />
												<path id="Path_8396" data-name="Path 8396"
													d="M494.848,315.613a5.421,5.421,0,0,1-2.451,4.245c-1.354.781-2.451.148-2.451-1.417A5.414,5.414,0,0,1,492.4,314.2C493.75,313.416,494.848,314.05,494.848,315.613Z"
													transform="translate(-474.176 -313.863)" fill="#d4ecff" />
											</g>
										</g>
										<g id="Group_1401" data-name="Group 1401">
											<path id="Path_8397" data-name="Path 8397"
												d="M560.535,313.336h0V292.4l-46.94-.026-16.223-9.368c-3.725-2.149-10.23-1.88-14.528.6l-15.137,8.739-46.982-.026v21.53c-.108,1.454.7,2.859,2.492,3.89l60.671,35.029c3.725,2.147,10.228,1.878,14.528-.6L557,318.349C559.478,316.917,560.674,315.063,560.535,313.336Z"
												transform="translate(-420.705 -252.032)" fill="#396caa" />
											<path id="Path_8398" data-name="Path 8398"
												d="M490.63,281.564a16.756,16.756,0,0,0-7.786,2.043l-15.137,8.739-46.982-.026v21.53c-.108,1.454.7,2.859,2.492,3.89l60.671,35.029a13.178,13.178,0,0,0,6.742,1.439Z"
												transform="translate(-420.705 -252.027)" fill="#396caa" />
											<path id="Path_8399" data-name="Path 8399"
												d="M426.042,287.367l-5.316,0V308.9c-.108,1.454.7,2.859,2.492,3.89l2.824,1.63Z"
												transform="translate(-420.705 -247.071)" fill="#5793ce" />
											<path id="Path_8400" data-name="Path 8400"
												d="M455.289,331.534A16.552,16.552,0,0,0,466.9,331.4V306.957H455.289Z"
												transform="translate(-391.17 -230.334)" fill="#5793ce" />
											<path id="Path_8401" data-name="Path 8401"
												d="M483.893,344.924,423.222,309.9c-3.722-2.151-3.254-5.906,1.044-8.389l58.583-33.822c4.3-2.481,10.8-2.752,14.528-.6l60.667,35.028c3.725,2.149,3.258,5.9-1.042,8.387l-58.581,33.822C494.121,346.807,487.618,347.075,483.893,344.924Z"
												transform="translate(-420.71 -265.635)" fill="#d4ecff" />
											<path id="Path_8402" data-name="Path 8402"
												d="M557,288.815l-58.581,33.824c-4.3,2.481-10.8,2.752-14.528.6l-60.671-35.028a5.623,5.623,0,0,1-1.858-1.65c-1.278,2.06-.7,4.293,1.858,5.771l60.671,35.026c3.725,2.151,10.228,1.882,14.528-.6L557,292.936c3.341-1.929,4.358-4.623,2.9-6.739A8.114,8.114,0,0,1,557,288.815Z"
												transform="translate(-420.71 -248.069)" fill="#fff" />
											<g id="Group_1399" data-name="Group 1399"
												transform="translate(112.613 55.976)">
												<path id="Path_8403" data-name="Path 8403"
													d="M486.344,302.483a5.417,5.417,0,0,1-2.449,4.243c-1.355.783-2.453.148-2.453-1.415a5.415,5.415,0,0,1,2.453-4.244C485.246,300.285,486.344,300.918,486.344,302.483Z"
													transform="translate(-481.441 -291.628)" fill="#d4ecff" />
												<path id="Path_8404" data-name="Path 8404"
													d="M490.6,300.028a5.421,5.421,0,0,1-2.45,4.245c-1.355.781-2.453.146-2.453-1.417a5.415,5.415,0,0,1,2.453-4.244C489.5,297.83,490.6,298.464,490.6,300.028Z"
													transform="translate(-477.809 -293.725)" fill="#d4ecff" />
												<path id="Path_8405" data-name="Path 8405"
													d="M494.848,297.572a5.421,5.421,0,0,1-2.451,4.244c-1.354.781-2.451.148-2.451-1.415a5.415,5.415,0,0,1,2.451-4.244C493.75,295.375,494.848,296.009,494.848,297.572Z"
													transform="translate(-474.176 -295.822)" fill="#d4ecff" />
											</g>
											<g id="Group_1400" data-name="Group 1400"
												transform="translate(37.205 20.47)">
												<path id="Path_8406" data-name="Path 8406"
													d="M470.34,313.778l-28.391-16.39c-1.741-1.007-1.522-2.765.49-3.926l27.412-15.828a7.555,7.555,0,0,1,6.8-.28l28.393,16.39c1.741,1.007,1.522,2.763-.49,3.926L477.138,313.5A7.55,7.55,0,0,1,470.34,313.778Z"
													transform="translate(-440.774 -276.674)" fill="#5793ce" />
												<path id="Path_8407" data-name="Path 8407"
													d="M460.07,291.648l-3.929-2.27c-.239-.139-.21-.382.07-.541l3.79-2.19a1.049,1.049,0,0,1,.94-.041l3.929,2.27c.241.139.211.382-.069.543l-3.792,2.19A1.049,1.049,0,0,1,460.07,291.648Z"
													transform="translate(-427.785 -268.268)" fill="#d4ecff" />
												<path id="Path_8408" data-name="Path 8408"
													d="M441.949,297.388l.082.044a4.366,4.366,0,0,1,.408-.278l27.412-15.828a7.555,7.555,0,0,1,6.8-.282L504.96,297.39c1.606-1.15,1.691-2.717.082-3.646l-28.393-16.39a7.555,7.555,0,0,0-6.8.28l-27.412,15.828C440.427,294.623,440.208,296.381,441.949,297.388Z"
													transform="translate(-440.774 -276.674)" fill="#396caa" />
											</g>
										</g>
									</g>
									<path id="Path_8409" data-name="Path 8409"
										d="M409.664,107.869c0,1.051-.74,1.478-1.65.951a3.645,3.645,0,0,1-1.65-2.856c0-1.053.74-1.478,1.65-.953A3.651,3.651,0,0,1,409.664,107.869Z"
										transform="translate(123.783 68.752)" fill="#d4ecff" />
									<path id="Path_8410" data-name="Path 8410"
										d="M417.5,112.619c0,1.051-.74,1.478-1.65.951a3.643,3.643,0,0,1-1.648-2.856c0-1.053.738-1.478,1.648-.953A3.651,3.651,0,0,1,417.5,112.619Z"
										transform="translate(130.476 72.81)" fill="#d4ecff" />
									<path id="Path_8411" data-name="Path 8411"
										d="M425.329,117.369c0,1.051-.74,1.478-1.648.951a3.645,3.645,0,0,1-1.65-2.856c0-1.053.74-1.478,1.65-.953A3.654,3.654,0,0,1,425.329,117.369Z"
										transform="translate(137.167 76.868)" fill="#d4ecff" />
									<path id="Path_8412" data-name="Path 8412"
										d="M433.164,122.119c0,1.051-.74,1.478-1.65.951a3.645,3.645,0,0,1-1.65-2.856c0-1.053.74-1.478,1.65-.953A3.651,3.651,0,0,1,433.164,122.119Z"
										transform="translate(143.859 80.926)" fill="#d4ecff" />
								</g>
							</svg>
						</div>
						<div class="col-lg-4 col-12 ">
							<div class="info-icon-primary-box">
								<div class="icon-primary-box">
									<svg xmlns="http://www.w3.org/2000/svg" width="40.722" height="40"
										viewBox="0 0 40.722 40">
										<g id="_007-rocket" data-name="007-rocket" transform="translate(0)">
											<g id="Group_2869" data-name="Group 2869" transform="translate(0 0)">
												<path id="Path_12260" data-name="Path 12260"
													d="M67,5.839a4.479,4.479,0,0,0-4.349-1.133L57.385,6.2a10.453,10.453,0,0,0-4.535,2.66l-.014.014A.8.8,0,1,0,53.96,10l.015-.015a8.86,8.86,0,0,1,3.844-2.255l5.269-1.491a2.85,2.85,0,0,1,3.518,3.518l-1.491,5.268a8.866,8.866,0,0,1-2.257,3.846L48.621,33.105,46.213,30.7l4.018-4.017a2.877,2.877,0,1,0-4.069-4.069l-4.018,4.018-2.408-2.408,9.313-9.313a.8.8,0,1,0-1.125-1.125l-3.543,3.543-5.693-.793a7.094,7.094,0,0,0-5.965,2l-2.532,2.532a.8.8,0,0,0,0,1.125l2.594,2.594a4.517,4.517,0,0,0,5.776.512l2.458,2.458L38.95,29.823a.8.8,0,0,0,0,1.125l2.944,2.944a.8.8,0,0,0,1.125,0l2.069-2.069,2.458,2.458a4.516,4.516,0,0,0,.512,5.776l2.594,2.594a.8.8,0,0,0,1.125,0l2.532-2.532a7.1,7.1,0,0,0,2-5.965l-.793-5.692,8.467-8.467a10.46,10.46,0,0,0,2.662-4.538l1.491-5.269A4.445,4.445,0,0,0,67,5.839ZM33.91,23.658l-2.032-2.031,1.97-1.97a5.494,5.494,0,0,1,4.62-1.549l4.5.627-4.923,4.923a2.926,2.926,0,0,1-4.138,0ZM42.456,32.2l-1.819-1.819L42.7,28.322l.006-.006,4.581-4.581a1.287,1.287,0,0,1,1.818,0,1.3,1.3,0,0,1,0,1.819Zm12.277,2.168a5.5,5.5,0,0,1-1.549,4.62l-1.97,1.97-2.032-2.032a2.926,2.926,0,0,1,0-4.136l0,0,4.922-4.922Z"
													transform="translate(-27.581 -4.541)" fill="#fff" />
												<path id="Path_12261" data-name="Path 12261"
													d="M328.605,109.141a3.567,3.567,0,0,0,2.522-6.089,3.567,3.567,0,0,0-5.044,5.045A3.544,3.544,0,0,0,328.605,109.141Zm-1.4-4.965a1.978,1.978,0,1,1,0,2.8A2,2,0,0,1,327.207,104.176Z"
													transform="translate(-299.193 -94.266)" fill="#fff" />
												<path id="Path_12262" data-name="Path 12262"
													d="M8.193,310.111a.795.795,0,0,0-1.124-1.124L.233,315.824a.795.795,0,0,0,1.124,1.124Z"
													transform="translate(0 -284.553)" fill="#fff" />
												<path id="Path_12263" data-name="Path 12263"
													d="M20.992,389.574a.8.8,0,0,0-1.124,0l-7.8,7.8a.795.795,0,0,0,1.124,1.124l7.8-7.8A.8.8,0,0,0,20.992,389.574Z"
													transform="translate(-10.895 -358.727)" fill="#fff" />
												<path id="Path_12264" data-name="Path 12264"
													d="M154.8,392.877l-3.864,3.864a.795.795,0,1,0,1.124,1.124L155.919,394a.795.795,0,0,0-1.124-1.124Z"
													transform="translate(-138.711 -361.768)" fill="#fff" />
												<path id="Path_12265" data-name="Path 12265"
													d="M118.9,476.971a.794.794,0,1,0-.43,1.038A.8.8,0,0,0,118.9,476.971Z"
													transform="translate(-108.041 -438.943)" fill="#fff" />
												<path id="Path_12266" data-name="Path 12266"
													d="M283.4,88.481a.794.794,0,1,0,.325-.985A.8.8,0,0,0,283.4,88.481Z"
													transform="translate(-260.803 -80.795)" fill="#fff" />
											</g>
										</g>
									</svg>
								</div>
								<div class="info-icon-primary-text">
									<h5>EXTREME SPEED!</h5>
									<p>10GBit/s Servers available!</p>
								</div>
							</div>
							<div class="info-icon-primary-box mt-3">
								<div class="icon-primary-box">
									<svg xmlns="http://www.w3.org/2000/svg" width="40.005" height="40"
										viewBox="0 0 40.005 40">
										<g id="Outline" transform="translate(0 0)">
											<path id="Path_12267" data-name="Path 12267"
												d="M17.957,39.44a6.668,6.668,0,0,1,4.076-11.352,7.338,7.338,0,0,1,9.825-6.253,10.671,10.671,0,0,1,20,6.714,6.743,6.743,0,0,1,2.817,2.169,6.668,6.668,0,0,1-5.329,10.675h-.667V40.059h.667a5.335,5.335,0,0,0,1.551-10.438.667.667,0,0,1-.456-.788A9.337,9.337,0,0,0,32.8,22.963a.667.667,0,0,1-.9.334,5.943,5.943,0,0,0-2.561-.574,6.008,6.008,0,0,0-6,6,.667.667,0,0,1-.667.667,5.334,5.334,0,1,0,0,10.668h.667v1.334h-.667A6.624,6.624,0,0,1,17.957,39.44ZM40.614,18.756a8.012,8.012,0,0,0-1.455.27l.364,1.283a6.674,6.674,0,0,1,1.212-.225Zm-2.049,1.906-.556-1.212a8.02,8.02,0,0,0-3.214,2.671l1.09.768A6.687,6.687,0,0,1,38.564,20.663Zm7.444,30.064V48.916a5.322,5.322,0,0,1-4,1.812h-12a5.322,5.322,0,0,1-4-1.812v1.812a4.005,4.005,0,0,0,4,4h12a4.022,4.022,0,0,0,3.616-2.286l1.2.572a5.362,5.362,0,0,1-4.82,3.048h-12a5.34,5.34,0,0,1-5.334-5.334v-16A5.3,5.3,0,0,1,26.2,30.992l.952.933a4,4,0,0,0,2.858,6.8h12a4,4,0,1,0,0-8h-12a3.993,3.993,0,0,0-2.061.571l-.688-1.142a5.326,5.326,0,0,1,2.749-.763h12a5.34,5.34,0,0,1,5.334,5.334v16a5.4,5.4,0,0,1-.054.761l-1.32-.188a4.067,4.067,0,0,0,.041-.572Zm-20-10.668a4.005,4.005,0,0,0,4,4h12a4.005,4.005,0,0,0,4-4V38.248a5.322,5.322,0,0,1-4,1.812h-12a5.322,5.322,0,0,1-4-1.812Zm20,5.334V43.582a5.322,5.322,0,0,1-4,1.812h-12a5.322,5.322,0,0,1-4-1.812v1.812a4.005,4.005,0,0,0,4,4h12a4.005,4.005,0,0,0,4-4Zm-16-12V32.058a2.667,2.667,0,0,0-2.514,3.557l1.257-.446a1.334,1.334,0,0,1,1.258-1.777Zm5.334,8H34.007v1.333H35.34Zm2.667,0H36.674v1.333h1.334Zm2.667,0H39.341v1.333h1.334Zm-8,0H31.34v1.333h1.334Zm1.333,6.668H35.34V46.727H34.007Zm2.667,0h1.334V46.727H36.674Zm2.667,0h1.334V46.727H39.341Zm-8,0h1.334V46.727H31.34Zm4,5.334V52.061H34.007v1.333Zm2.667,0V52.061H36.674v1.333Zm2.667,0V52.061H39.341v1.333Zm-8,0V52.061H31.34v1.333Z"
												transform="translate(-16.005 -16.061)" fill="#fff" />
										</g>
									</svg>
								</div>
								<div class="info-icon-primary-text">
									<h5>DATA CENTER TO DATA CENTER!</h5>
									<p>FREE Point-to-Point Network Connectivity</p>
								</div>
							</div>
							<div class="info-icon-primary-box mt-3">
								<div class="icon-primary-box">
									<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
										viewBox="0 0 40 40">
										<g id="_009-address" data-name="009-address" transform="translate(0 0)">
											<path id="Path_12268" data-name="Path 12268"
												d="M306.789,260a.789.789,0,1,0,.789.789A.789.789,0,0,0,306.789,260Zm0,0"
												transform="translate(-282.104 -239.696)" fill="#fff" />
											<path id="Path_12269" data-name="Path 12269"
												d="M7.983,28.889.17,38.733A.781.781,0,0,0,.782,40H39.219a.781.781,0,0,0,.612-1.267l-7.813-9.844a.781.781,0,0,0-.612-.3H24.563l5.843-9.164a12.5,12.5,0,1,0-20.811,0l5.843,9.164H8.594a.781.781,0,0,0-.612.3ZM5.066,35.078H9.789L7.123,38.437H2.4Zm11.369-4.922,2.142,3.359H13.024l2.666-3.359Zm7.133,0h.744l2.666,3.359H21.426Zm4.65,4.922,2.666,3.359H9.118l2.666-3.359Zm4.661,3.359-2.666-3.359h4.724L37.6,38.437Zm.818-4.922H28.972l-2.666-3.359H31.03ZM10.9,18.569a10.937,10.937,0,1,1,18.2,0l-.009.014L20,32.843,10.909,18.583l-.009-.014Zm2.8,11.587L11.03,33.515H6.306l2.666-3.359Zm0,0"
												transform="translate(-0.001 0)" fill="#fff" />
											<path id="Path_12270" data-name="Path 12270"
												d="M163.891,75.781A7.891,7.891,0,1,0,156,67.891,7.891,7.891,0,0,0,163.891,75.781Zm0-14.2a6.313,6.313,0,1,1-6.313,6.313A6.32,6.32,0,0,1,163.891,61.578Zm0,0"
												transform="translate(-143.891 -55.265)" fill="#fff" />
											<path id="Path_12271" data-name="Path 12271"
												d="M250.109,292.8a.789.789,0,0,0-1.083.268l-2.916,4.839a.789.789,0,0,0,1.352.815l2.916-4.839A.789.789,0,0,0,250.109,292.8Zm0,0"
												transform="translate(-226.802 -269.865)" fill="#fff" />
										</g>
									</svg>
								</div>
								<div class="info-icon-primary-text">
									<h5>HIGHEST STANDARDS!</h5>
									<p>Tier-III & Tier-IV Data Center Locations</p>
								</div>
							</div>
							<div class="info-icon-primary-box mt-3">
								<div class="icon-primary-box">
									<svg id="_010-cloud-computing" data-name="010-cloud-computing"
										xmlns="http://www.w3.org/2000/svg" width="40" height="40"
										viewBox="0 0 40 40">
										<g id="Group_2871" data-name="Group 2871">
											<g id="Group_2870" data-name="Group 2870">
												<path id="Path_12272" data-name="Path 12272"
													d="M34.816,11.237c.006-.09.023-.179.023-.269a4.523,4.523,0,0,0-4.1-4.5A8.379,8.379,0,0,0,14.826,5.2a5.246,5.246,0,0,0-.632-.043A5.165,5.165,0,0,0,9.388,8.454a8.5,8.5,0,0,0-1-.066A8.385,8.385,0,0,0,5.806,24.75V40H34.194V25.041a7.091,7.091,0,0,0,.623-13.8ZM32.9,38.71H7.1V24.516H32.9Zm0-15.484H7.1V19.355H32.9Zm1.29.5V18.065H5.806v5.317a7.095,7.095,0,0,1,2.581-13.7c.229,0,.457.014.685.036a5.135,5.135,0,0,0,5.122,5.77v-1.29a3.871,3.871,0,1,1,3.871-3.871h1.29a5.166,5.166,0,0,0-3.27-4.8A7.092,7.092,0,0,1,29.571,7.209l.094.557.658-.024a3.229,3.229,0,0,1,3.226,3.226c0,.011,0,.021,0,.032-.212-.019-.426-.032-.643-.032A7.056,7.056,0,0,0,27.935,13l.9.921a5.805,5.805,0,1,1,5.355,9.8Z"
													fill="#fff" />
												<rect id="Rectangle_1558" data-name="Rectangle 1558" width="2"
													height="2" transform="translate(8.374 20.89)" fill="#fff" />
												<rect id="Rectangle_1559" data-name="Rectangle 1559" width="1"
													height="2" transform="translate(11.36 20.89)" fill="#fff" />
												<rect id="Rectangle_1560" data-name="Rectangle 1560" width="1"
													height="2" transform="translate(14.345 20.89)" fill="#fff" />
												<path id="Path_12273" data-name="Path 12273"
													d="M116.967,320H104v11.671h12.967Zm-1.3,10.374H105.3V321.3h10.374Z"
													transform="translate(-95.633 -294.264)" fill="#fff" />
												<rect id="Rectangle_1561" data-name="Rectangle 1561" width="8"
													height="2" transform="translate(23.273 24.87)" fill="#fff" />
												<rect id="Rectangle_1562" data-name="Rectangle 1562" width="7"
													height="1" transform="translate(24.271 27.858)" fill="#fff" />
												<rect id="Rectangle_1563" data-name="Rectangle 1563" height="1"
													transform="translate(23.302 27.858)" fill="#fff" />
												<rect id="Rectangle_1564" data-name="Rectangle 1564" width="8"
													height="1" transform="translate(23.273 30.842)" fill="#fff" />
												<rect id="Rectangle_1565" data-name="Rectangle 1565" width="8"
													height="1" transform="translate(23.273 33.801)" fill="#fff" />
												<rect id="Rectangle_1566" data-name="Rectangle 1566" width="1"
													height="1" transform="translate(30.263 35.801)" fill="#fff" />
												<rect id="Rectangle_1567" data-name="Rectangle 1567" width="5"
													height="1" transform="translate(23.285 35.801)" fill="#fff" />
											</g>
										</g>
									</svg>
								</div>
								<div class="info-icon-primary-text">
									<h5>SELF CONTROL PANEL!</h5>
									<p>Tier-III & Tier-IV Data Center Locations</p>
								</div>
							</div>
							<div class="info-icon-primary-box mt-3">
								<div class="icon-primary-box">
									<svg id="_011-settings" data-name="011-settings"
										xmlns="http://www.w3.org/2000/svg" width="40" height="40"
										viewBox="0 0 40 40">
										<path id="Path_12274" data-name="Path 12274"
											d="M12.6,5.832a.671.671,0,0,1-.547-.285.719.719,0,0,1,.141-.983A18.636,18.636,0,0,1,33.735,3.73V.7a.68.68,0,1,1,1.36,0V5.129a.705.705,0,0,1-.391.637.664.664,0,0,1-.723-.1A16.44,16.44,0,0,0,23.508,2.11a17.138,17.138,0,0,0-10.5,3.584A.657.657,0,0,1,12.6,5.832Z"
											transform="translate(-3.536)" fill="#fff" />
										<path id="Path_12275" data-name="Path 12275"
											d="M5.129,35.173a.71.71,0,0,1-.566-.275A18.636,18.636,0,0,1,3.73,13.36H.7A.68.68,0,1,1,.7,12H5.129a.706.706,0,0,1,.637.391.66.66,0,0,1-.1.723A16.442,16.442,0,0,0,2.11,23.586a17.138,17.138,0,0,0,3.584,10.5.665.665,0,0,1-.146.951A.713.713,0,0,1,5.129,35.173Z"
											transform="translate(0 -3.559)" fill="#fff" />
										<path id="Path_12276" data-name="Path 12276"
											d="M12.68,55.541a.692.692,0,0,1-.68-.7V50.412a.705.705,0,0,1,.391-.637.665.665,0,0,1,.724.1,16.44,16.44,0,0,0,10.472,3.559,17.138,17.138,0,0,0,10.5-3.584.665.665,0,0,1,.951.147.719.719,0,0,1-.141.983,18.637,18.637,0,0,1-21.538.834v3.026A.692.692,0,0,1,12.68,55.541Z"
											transform="translate(-3.559 -15.541)" fill="#fff" />
										<path id="Path_12277" data-name="Path 12277"
											d="M54.838,35.1H50.412a.706.706,0,0,1-.637-.391.66.66,0,0,1,.1-.723,16.439,16.439,0,0,0,3.559-10.472,17.138,17.138,0,0,0-3.584-10.5.665.665,0,0,1,.146-.951.719.719,0,0,1,.984.142,18.634,18.634,0,0,1,.834,21.536h3.026a.68.68,0,1,1,0,1.36Z"
											transform="translate(-15.541 -3.536)" fill="#fff" />
										<path id="Path_12278" data-name="Path 12278"
											d="M24.72,36.338h-4.1a.683.683,0,0,1-.683-.683V34.088A.912.912,0,0,0,19.3,33.2a6.788,6.788,0,0,1-1.536-.694l-.347-.193a.919.919,0,0,0-1.077.176L15.237,33.6a.7.7,0,0,1-.966,0l-2.533-2.533a.683.683,0,0,1,0-.966l1.109-1.109a.915.915,0,0,0,.176-1.076l-.195-.349a6.838,6.838,0,0,1-.692-1.533.913.913,0,0,0-.884-.631H9.683A.683.683,0,0,1,9,24.72v-4.1a.683.683,0,0,1,.683-.683h1.567a.913.913,0,0,0,.884-.631,6.844,6.844,0,0,1,.693-1.534l.194-.349a.916.916,0,0,0-.176-1.076l-1.109-1.109a.684.684,0,0,1,0-.966l2.533-2.533a.683.683,0,0,1,.966,0l1.109,1.109a.919.919,0,0,0,1.076.176l.347-.193a6.842,6.842,0,0,1,1.535-.693.912.912,0,0,0,.631-.885V9.683A.683.683,0,0,1,20.619,9h4.1a.683.683,0,0,1,.683.683v1.567a.912.912,0,0,0,.631.885,6.826,6.826,0,0,1,1.535.693l.347.193a.918.918,0,0,0,1.077-.176L30.1,11.737a.7.7,0,0,1,.966,0L33.6,14.27a.683.683,0,0,1,0,.966l-1.109,1.109a.915.915,0,0,0-.176,1.076l.194.349A6.827,6.827,0,0,1,33.2,19.3a.914.914,0,0,0,.885.631h1.567a.683.683,0,0,1,.683.683v4.1a.683.683,0,0,1-.683.683H34.088a.913.913,0,0,0-.884.631,6.824,6.824,0,0,1-.692,1.533l-.194.349a.916.916,0,0,0,.176,1.076L33.6,30.1a.684.684,0,0,1,0,.966L31.069,33.6a.683.683,0,0,1-.966,0l-1.109-1.109a.918.918,0,0,0-1.076-.176l-.347.193a6.818,6.818,0,0,1-1.536.694.912.912,0,0,0-.632.885v1.567A.683.683,0,0,1,24.72,36.338ZM21.3,34.971h2.734v-.884a2.287,2.287,0,0,1,1.612-2.2,5.5,5.5,0,0,0,1.25-.573l.364-.2a2.291,2.291,0,0,1,2.7.409l.626.626,1.566-1.566-.626-.626a2.29,2.29,0,0,1-.409-2.7l.2-.366a5.512,5.512,0,0,0,.572-1.248,2.287,2.287,0,0,1,2.2-1.612h.884V21.3h-.884a2.287,2.287,0,0,1-2.2-1.612,5.469,5.469,0,0,0-.572-1.248l-.2-.366a2.289,2.289,0,0,1,.41-2.7l.626-.626-1.566-1.566-.626.626a2.29,2.29,0,0,1-2.7.409l-.364-.2a5.524,5.524,0,0,0-1.249-.573,2.288,2.288,0,0,1-1.612-2.2v-.884H21.3v.884a2.287,2.287,0,0,1-1.612,2.2,5.511,5.511,0,0,0-1.249.573l-.364.2a2.291,2.291,0,0,1-2.7-.409l-.626-.626-1.566,1.566.626.626a2.29,2.29,0,0,1,.409,2.7l-.2.366a5.482,5.482,0,0,0-.572,1.248,2.287,2.287,0,0,1-2.2,1.612h-.884v2.734h.884a2.287,2.287,0,0,1,2.2,1.612,5.51,5.51,0,0,0,.571,1.248l.2.366a2.29,2.29,0,0,1-.409,2.7l-.626.626,1.566,1.566.626-.626a2.29,2.29,0,0,1,2.7-.409l.364.2a5.5,5.5,0,0,0,1.25.573,2.288,2.288,0,0,1,1.612,2.2Z"
											transform="translate(-2.669 -2.669)" fill="#fff" />
										<path id="Path_12279" data-name="Path 12279"
											d="M25.441,33.882a8.441,8.441,0,1,1,8.441-8.441A8.451,8.451,0,0,1,25.441,33.882Zm0-15.475a7.034,7.034,0,1,0,7.034,7.034A7.042,7.042,0,0,0,25.441,18.407Z"
											transform="translate(-5.441 -5.441)" fill="#fff" />
										<path id="Path_12280" data-name="Path 12280"
											d="M29.517,30.221H26.7a.7.7,0,0,1-.7-.7V26.7a.7.7,0,0,1,.7-.7h2.814a.7.7,0,0,1,.7.7v2.814A.7.7,0,0,1,29.517,30.221Zm-2.11-1.407h1.407V27.407H27.407Z"
											transform="translate(-8.11 -8.11)" fill="#fff" />
										<path id="Path_12281" data-name="Path 12281"
											d="M28.7,25.924a.7.7,0,0,1-.7-.7V21.7a.7.7,0,1,1,1.407,0v3.517A.7.7,0,0,1,28.7,25.924Z"
											transform="translate(-8.703 -6.557)" fill="#fff" />
										<path id="Path_12282" data-name="Path 12282"
											d="M32.814,29.407H30.7A.7.7,0,1,1,30.7,28h2.11a.7.7,0,0,1,0,1.407Z"
											transform="translate(-9.349 -8.703)" fill="#fff" />
									</svg>
								</div>
								<div class="info-icon-primary-text">
									<h5>ADVANCED CONTROL PANEL!</h5>
									<p>Intuitive way to Manage your Servers!</p>
								</div>
							</div>
							<div class="info-icon-primary-box mt-3">
								<div class="icon-primary-box">
									<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
										viewBox="0 0 40 40">
										<g id="_012-database" data-name="012-database" transform="translate(0)">
											<path id="Path_12283" data-name="Path 12283" d="M32,320h1.3v1.3H32Zm0,0"
												transform="translate(-29.39 -294.203)" fill="#fff" />
											<path id="Path_12284" data-name="Path 12284"
												d="M64,320h1.305v1.3H64Zm0,0" transform="translate(-58.78 -294.203)"
												fill="#fff" />
											<path id="Path_12285" data-name="Path 12285" d="M96,384h1.3v1.3H96Zm0,0"
												transform="translate(-88.261 -353.044)" fill="#fff" />
											<path id="Path_12286" data-name="Path 12286"
												d="M64,384h1.305v1.3H64Zm0,0" transform="translate(-58.78 -353.044)"
												fill="#fff" />
											<path id="Path_12287" data-name="Path 12287"
												d="M64,448h1.305v1.3H64Zm0,0" transform="translate(-58.78 -411.915)"
												fill="#fff" />
											<path id="Path_12288" data-name="Path 12288" d="M96,448h1.3v1.3H96Zm0,0"
												transform="translate(-88.261 -411.915)" fill="#fff" />
											<path id="Path_12289" data-name="Path 12289" d="M32,448h1.3v1.3H32Zm0,0"
												transform="translate(-29.39 -411.915)" fill="#fff" />
											<path id="Path_12290" data-name="Path 12290"
												d="M208,320h1.3v1.3H208Zm0,0"
												transform="translate(-191.232 -294.203)" fill="#fff" />
											<path id="Path_12291" data-name="Path 12291"
												d="M240,320h1.3v1.3H240Zm0,0"
												transform="translate(-220.652 -294.203)" fill="#fff" />
											<path id="Path_12292" data-name="Path 12292"
												d="M272,384h1.3v1.3H272Zm0,0"
												transform="translate(-250.073 -353.044)" fill="#fff" />
											<path id="Path_12293" data-name="Path 12293"
												d="M240,384h1.3v1.3H240Zm0,0"
												transform="translate(-220.652 -353.044)" fill="#fff" />
											<path id="Path_12294" data-name="Path 12294"
												d="M240,448h1.3v1.3H240Zm0,0"
												transform="translate(-220.652 -411.915)" fill="#fff" />
											<path id="Path_12295" data-name="Path 12295"
												d="M272,448h1.3v1.3H272Zm0,0"
												transform="translate(-250.073 -411.915)" fill="#fff" />
											<path id="Path_12296" data-name="Path 12296"
												d="M208,448h1.3v1.3H208Zm0,0"
												transform="translate(-191.232 -411.915)" fill="#fff" />
											<path id="Path_12297" data-name="Path 12297"
												d="M38.064,23.226H34.838V19.355H20.645V16.774H30.967A5.161,5.161,0,1,0,30.1,6.524,8.374,8.374,0,0,0,15.142,3.48a5.092,5.092,0,0,0-1.594-.254A5.194,5.194,0,0,0,8.762,6.459a5.161,5.161,0,0,0,.27,10.315H19.354v2.581H5.161v3.871H1.935A1.938,1.938,0,0,0,0,25.161v12.9A1.938,1.938,0,0,0,1.935,40H9.677a1.938,1.938,0,0,0,1.935-1.935v-12.9a1.938,1.938,0,0,0-1.935-1.935H6.451V20.645h12.9v2.581H16.129a1.938,1.938,0,0,0-1.935,1.935v12.9A1.938,1.938,0,0,0,16.129,40h7.742a1.938,1.938,0,0,0,1.935-1.935v-12.9a1.938,1.938,0,0,0-1.935-1.935H20.645V20.645h12.9v2.581H30.322a1.938,1.938,0,0,0-1.935,1.935v12.9A1.938,1.938,0,0,0,30.322,40h7.742A1.938,1.938,0,0,0,40,38.065v-12.9a1.938,1.938,0,0,0-1.935-1.935ZM5.161,11.613A3.875,3.875,0,0,1,9.032,7.742l.663.029.143-.483a3.892,3.892,0,0,1,3.71-2.772,3.84,3.84,0,0,1,1.577.339l.51.228.3-.473A7.086,7.086,0,0,1,28.955,7.4l.106.758.729-.233a3.871,3.871,0,1,1,1.178,7.559H9.032a3.875,3.875,0,0,1-3.871-3.871ZM1.29,29.677h9.032v3.871H1.29ZM9.677,38.71H1.935a.646.646,0,0,1-.645-.645V34.839h9.032v3.226A.646.646,0,0,1,9.677,38.71Zm.645-13.548v3.226H1.29V25.161a.646.646,0,0,1,.645-.645H9.677A.646.646,0,0,1,10.322,25.161Zm5.161,4.516h9.032v3.871H15.484Zm8.387,9.032H16.129a.646.646,0,0,1-.645-.645V34.839h9.032v3.226A.646.646,0,0,1,23.871,38.71Zm.645-13.548v3.226H15.484V25.161a.646.646,0,0,1,.645-.645h7.742A.646.646,0,0,1,24.516,25.161Zm5.806-.645h7.742a.646.646,0,0,1,.645.645v3.226H29.677V25.161A.646.646,0,0,1,30.322,24.516Zm8.387,5.161v3.871H29.677V29.677Zm-.645,9.032H30.322a.646.646,0,0,1-.645-.645V34.839h9.032v3.226A.646.646,0,0,1,38.064,38.71Zm0,0"
												transform="translate(0.001 0)" fill="#fff" />
											<path id="Path_12298" data-name="Path 12298"
												d="M384,320h1.3v1.3H384Zm0,0"
												transform="translate(-353.044 -294.203)" fill="#fff" />
											<path id="Path_12299" data-name="Path 12299"
												d="M416,320h1.3v1.3H416Zm0,0"
												transform="translate(-382.525 -294.203)" fill="#fff" />
											<path id="Path_12300" data-name="Path 12300"
												d="M448,384h1.3v1.3H448Zm0,0"
												transform="translate(-411.915 -353.044)" fill="#fff" />
											<path id="Path_12301" data-name="Path 12301"
												d="M416,384h1.3v1.3H416Zm0,0"
												transform="translate(-382.525 -353.044)" fill="#fff" />
											<path id="Path_12302" data-name="Path 12302"
												d="M416,448h1.3v1.3H416Zm0,0"
												transform="translate(-382.525 -411.915)" fill="#fff" />
											<path id="Path_12303" data-name="Path 12303"
												d="M448,448h1.3v1.3H448Zm0,0"
												transform="translate(-411.915 -411.915)" fill="#fff" />
											<path id="Path_12304" data-name="Path 12304"
												d="M384,448h1.3v1.3H384Zm0,0"
												transform="translate(-353.044 -411.915)" fill="#fff" />
											<path id="Path_12305" data-name="Path 12305"
												d="M221.09,33.751l.922.922a4.574,4.574,0,0,1,6.46,0l.922-.922a5.879,5.879,0,0,0-8.3,0Zm0,0"
												transform="translate(-203.312 -29.421)" fill="#fff" />
											<path id="Path_12306" data-name="Path 12306"
												d="M386.61,114.61A2.613,2.613,0,0,0,384,112v1.3a1.305,1.305,0,0,1,0,2.61v1.3A2.613,2.613,0,0,0,386.61,114.61Zm0,0"
												transform="translate(-353.056 -102.983)" fill="#fff" />
										</g>
									</svg>
								</div>
								<div class="info-icon-primary-text">
									<h5>MULTI-SERVER MANAGEMENT!</h5>
									<p>Manage all your servers, at any location</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Content End-->
	<!--Content (3)-->
	<section class="section fix-height-container ">
		<div class="content-wrapper">
			<div class="section-text text-center mb-2">
				<h2>Our Most Populer Dedicated Server</h2>
				<span class="section-border"></span>
			</div>
			<div class="content-text-wrapper mt-2">
				<div class="container-fluid">
					<div class="row ">
						<div class="col-lg-4 col-12">
							<div class="populer-server-wrapper">
								<div class="populer-server-title">
									<h3><svg xmlns="http://www.w3.org/2000/svg" width="40.002" height="40"
											viewBox="0 0 40.002 40">
											<g id="servers" transform="translate(0)">
												<g id="Group_2873" data-name="Group 2873" transform="translate(0)">
													<g id="Group_2872" data-name="Group 2872"
														transform="translate(0 0)">
														<path id="Path_12307" data-name="Path 12307"
															d="M270.451,405.323h-13.6a.85.85,0,0,0,0,1.7h13.6a.85.85,0,1,0,0-1.7Z"
															transform="translate(-236.4 -373.684)" fill="#f80" />
														<path id="Path_12308" data-name="Path 12308"
															d="M270.451,447.989h-13.6a.85.85,0,0,0,0,1.7h13.6a.85.85,0,1,0,0-1.7Z"
															transform="translate(-236.4 -413.089)" fill="#f80" />
														<path id="Path_12309" data-name="Path 12309"
															d="M45.217,405.323a2.55,2.55,0,1,0,2.55,2.55A2.553,2.553,0,0,0,45.217,405.323Zm0,3.4a.85.85,0,1,1,.85-.85A.85.85,0,0,1,45.217,408.723Z"
															transform="translate(-39.267 -373.824)" fill="#f80" />
														<path id="Path_12310" data-name="Path 12310"
															d="M45.217,277.323a2.55,2.55,0,1,0,2.55,2.55A2.553,2.553,0,0,0,45.217,277.323Zm0,3.4a.85.85,0,1,1,.85-.85A.85.85,0,0,1,45.217,280.723Z"
															transform="translate(-39.267 -255.719)" fill="#f80" />
														<path id="Path_12311" data-name="Path 12311"
															d="M270.451,191.989h-13.6a.85.85,0,0,0,0,1.7h13.6a.85.85,0,1,0,0-1.7Z"
															transform="translate(-236.4 -177.003)" fill="#f80" />
														<path id="Path_12312" data-name="Path 12312"
															d="M40,15.843V12.51a4.13,4.13,0,0,0-.632-2.178c-.012-.023-.013-.05-.027-.072L34.19,1.976A4.143,4.143,0,0,0,30.651.011H9.355A4.141,4.141,0,0,0,5.817,1.976L.663,10.26c-.008.013-.008.028-.017.043A4.133,4.133,0,0,0,0,12.51v3.334a4.152,4.152,0,0,0,1.693,3.334A4.154,4.154,0,0,0,0,22.51v3.334a4.152,4.152,0,0,0,1.693,3.334A4.154,4.154,0,0,0,0,32.511v3.334a4.173,4.173,0,0,0,4.167,4.167H35.835A4.173,4.173,0,0,0,40,35.844V32.511a4.152,4.152,0,0,0-1.693-3.334A4.151,4.151,0,0,0,40,25.844V22.51a4.152,4.152,0,0,0-1.693-3.334A4.149,4.149,0,0,0,40,15.843ZM7.232,2.856a2.483,2.483,0,0,1,2.122-1.18h21.3a2.483,2.483,0,0,1,2.122,1.18L36.21,8.381c-.125-.012-.247-.038-.375-.038H4.167c-.128,0-.248.027-.373.038Zm31.1,29.655v3.334a2.5,2.5,0,0,1-2.5,2.5H4.167a2.5,2.5,0,0,1-2.5-2.5V32.511a2.5,2.5,0,0,1,2.5-2.5H35.835A2.5,2.5,0,0,1,38.335,32.511Zm0-10v3.334a2.5,2.5,0,0,1-2.5,2.5H4.167a2.5,2.5,0,0,1-2.5-2.5V22.51a2.5,2.5,0,0,1,2.5-2.5H35.835A2.5,2.5,0,0,1,38.335,22.51Zm0-6.667a2.5,2.5,0,0,1-2.5,2.5H4.167a2.5,2.5,0,0,1-2.5-2.5V12.51a2.5,2.5,0,0,1,2.5-2.5H35.835a2.5,2.5,0,0,1,2.5,2.5v3.334Z"
															transform="translate(0 -0.011)" fill="#f80" />
														<path id="Path_12313" data-name="Path 12313"
															d="M270.451,149.323h-13.6a.85.85,0,1,0,0,1.7h13.6a.85.85,0,1,0,0-1.7Z"
															transform="translate(-236.4 -137.668)" fill="#f80" />
														<path id="Path_12314" data-name="Path 12314"
															d="M270.451,319.989h-13.6a.85.85,0,0,0,0,1.7h13.6a.85.85,0,1,0,0-1.7Z"
															transform="translate(-236.4 -295.011)" fill="#f80" />
														<path id="Path_12315" data-name="Path 12315"
															d="M270.451,277.323h-13.6a.85.85,0,0,0,0,1.7h13.6a.85.85,0,1,0,0-1.7Z"
															transform="translate(-236.4 -255.676)" fill="#f80" />
														<path id="Path_12316" data-name="Path 12316"
															d="M45.217,149.323a2.55,2.55,0,1,0,2.55,2.55A2.553,2.553,0,0,0,45.217,149.323Zm0,3.4a.85.85,0,1,1,.85-.85A.85.85,0,0,1,45.217,152.723Z"
															transform="translate(-39.267 -137.691)" fill="#f80" />
													</g>
												</g>
											</g>
										</svg>
										Budget Server</h3>
									<p>Our Best Selling Budget Server</p>
								</div>
								<div class="row">
									<div class="col-lg-6 col-12">
										<div class="populer-server-detail-box">
											<div class="populer-server-detail-box-title">
												<h5>Intel Xeon 4/8 Core</h5>
												<p>4x 2.20GHz</p>
											</div>
											<div class="populer-server-detail-box-icon">
												<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
													xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													width="433.701px" height="433.701px"
													viewBox="0 0 433.701 433.701"
													enable-background="new 0 0 433.701 433.701"
													xml:space="preserve">
													<path fill="#4987CE" d="M216.85,432.851c-2.147,0-4.285-0.039-6.419-0.101l44.143-121.318h60.75
c10.663,0,22.368-8.197,26.015-18.212l47.892-131.546c7.835-21.537-4.501-39.157-27.418-39.157h-84.279l-70.715,194.316h-0.026
l-40.089,110.153C71.594,404.375,0.85,318.878,0.85,216.851c0-99.086,66.721-182.58,157.683-208.027l-41.365,113.693h-0.012
L48.389,311.432l45.778,0.004l58.481-160.531h34.404l-58.481,160.531l45.761,0.008l54.498-149.77
c7.84-21.537-4.497-39.157-27.393-39.157h-38.481l44.186-121.44c3.221-0.143,6.454-0.227,9.708-0.227
c119.294,0,216,96.706,216,216.001C432.85,336.143,336.144,432.851,216.85,432.851z M347.542,150.79h-34.395l-48.167,132.158h34.396
L347.542,150.79z" />
												</svg>
												<svg xmlns:dc="http://purl.org/dc/elements/1.1/"
													xmlns:cc="http://creativecommons.org/ns#"
													xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
													xmlns:svg="http://www.w3.org/2000/svg"
													xmlns="http://www.w3.org/2000/svg" version="1.1" id="svg3794"
													viewBox="0 0 300 300" height="300" width="300">
													<defs id="defs3796" />
													<g transform="translate(-318.33375,-439.74274)" id="layer1">
														<g transform="matrix(4.579965,0,0,-4.579965,468.34291,456.8459)"
															id="g3460">
															<path id="path3462"
																style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																d="m 0,0 c -8.01,0 -15.264,-3.249 -20.516,-8.505 -5.254,-5.244 -8.501,-12.502 -8.501,-20.516 0,-8.008 3.247,-15.261 8.501,-20.507 5.252,-5.249 12.506,-8.504 20.516,-8.504 8.012,0 15.27,3.255 20.514,8.504 5.252,5.246 8.492,12.499 8.492,20.507 0,8.014 -3.24,15.272 -8.492,20.516 C 15.27,-3.249 8.012,0 0,0 m 0,3.516 c 17.965,0 32.531,-14.568 32.531,-32.537 0,-17.963 -14.566,-32.529 -32.531,-32.529 -17.963,0 -32.535,14.566 -32.535,32.529 0,17.969 14.572,32.537 32.535,32.537" />
														</g>
														<g transform="matrix(4.579965,0,0,-4.579965,397.87238,588.54693)"
															id="g3464">
															<path id="path3466"
																style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																d="m 0,0 c 0,1.896 -1.258,2.973 -3.039,2.973 l -1.09,0 0,-5.948 1.059,0 C -1.414,-2.975 0,-2.075 0,0 M 19.389,-2.14 11.359,-8.463 4.02,-2.685 C 2.961,-5.229 0.402,-6.996 -2.545,-6.996 l -6.281,0 0,13.992 6.281,0 c 3.293,0 5.666,-2.094 6.563,-4.325 l 7.341,5.772 2.719,-2.14 -6.728,-5.288 1.293,-1.012 6.726,5.285 2.723,-2.134 -6.727,-5.294 1.291,-1.014 6.733,5.295 0,4.855 4.881,0 0,-9.908 4.869,0 0,-4.101 -9.75,0 0,4.873 z m 15.933,-0.774 4.867,0 0,-4.099 -9.753,0 0,14.009 4.886,0 0,-9.91 z" />
														</g>
													</g>
												</svg>

											</div>
											<ul class="populer-server-detail-box-list">
												<li>Server: 822B DELL/HP</li>
												<li>HDD - 1x 250GB HDD NoRaid</li>
												<li>RAM - 8GB RAM</li>
												<li>PORT - 1Gbps</li>
												<li>LOCATION - TX, Dallas TIER-III</li>
											</ul>
											<button class="btn btn-primary">Order (Instant)
												<svg xmlns="http://www.w3.org/2000/svg" width="11.684"
													height="11.899" viewBox="0 0 11.684 11.899">
													<g id="right" transform="translate(0.4 0.4)">
														<g id="Group_1053" data-name="Group 1053">
															<path id="Path_6081" data-name="Path 6081"
																d="M17.446,90.637l-5.2-5.2a.347.347,0,0,0-.49.49l4.611,4.611-9.353-.1-.268.126-.079.221c0,.192.347.347.347.347l9.353.1L11.753,95.84a.347.347,0,1,0,.49.49l5.2-5.2A.347.347,0,0,0,17.446,90.637Z"
																transform="translate(-6.664 -85.333)" fill="#fff"
																stroke="#fff" stroke-width="0.8" />
														</g>
													</g>
												</svg>
											</button>
										</div>
									</div>
									<div class="col-lg-6 col-12">
										<div class="populer-server-detail-box">
											<div class="populer-server-detail-box-title">
												<h5>Intel Xeon 4/8 Core</h5>
												<p>4x 2.20GHz</p>
											</div>
											<div class="populer-server-detail-box-icon">
												<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
													xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													width="433.701px" height="433.701px"
													viewBox="0 0 433.701 433.701"
													enable-background="new 0 0 433.701 433.701"
													xml:space="preserve">
													<path fill="#4987CE" d="M216.85,432.851c-2.147,0-4.285-0.039-6.419-0.101l44.143-121.318h60.75
c10.663,0,22.368-8.197,26.015-18.212l47.892-131.546c7.835-21.537-4.501-39.157-27.418-39.157h-84.279l-70.715,194.316h-0.026
l-40.089,110.153C71.594,404.375,0.85,318.878,0.85,216.851c0-99.086,66.721-182.58,157.683-208.027l-41.365,113.693h-0.012
L48.389,311.432l45.778,0.004l58.481-160.531h34.404l-58.481,160.531l45.761,0.008l54.498-149.77
c7.84-21.537-4.497-39.157-27.393-39.157h-38.481l44.186-121.44c3.221-0.143,6.454-0.227,9.708-0.227
c119.294,0,216,96.706,216,216.001C432.85,336.143,336.144,432.851,216.85,432.851z M347.542,150.79h-34.395l-48.167,132.158h34.396
L347.542,150.79z" />
												</svg>
												<svg xmlns:dc="http://purl.org/dc/elements/1.1/"
													xmlns:cc="http://creativecommons.org/ns#"
													xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
													xmlns:svg="http://www.w3.org/2000/svg"
													xmlns="http://www.w3.org/2000/svg" version="1.1" id="svg3794"
													viewBox="0 0 300 300" height="300" width="300">
													<defs id="defs3796" />
													<g transform="translate(-318.33375,-439.74274)" id="layer1">
														<g transform="matrix(4.579965,0,0,-4.579965,468.34291,456.8459)"
															id="g3460">
															<path id="path3462"
																style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																d="m 0,0 c -8.01,0 -15.264,-3.249 -20.516,-8.505 -5.254,-5.244 -8.501,-12.502 -8.501,-20.516 0,-8.008 3.247,-15.261 8.501,-20.507 5.252,-5.249 12.506,-8.504 20.516,-8.504 8.012,0 15.27,3.255 20.514,8.504 5.252,5.246 8.492,12.499 8.492,20.507 0,8.014 -3.24,15.272 -8.492,20.516 C 15.27,-3.249 8.012,0 0,0 m 0,3.516 c 17.965,0 32.531,-14.568 32.531,-32.537 0,-17.963 -14.566,-32.529 -32.531,-32.529 -17.963,0 -32.535,14.566 -32.535,32.529 0,17.969 14.572,32.537 32.535,32.537" />
														</g>
														<g transform="matrix(4.579965,0,0,-4.579965,397.87238,588.54693)"
															id="g3464">
															<path id="path3466"
																style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																d="m 0,0 c 0,1.896 -1.258,2.973 -3.039,2.973 l -1.09,0 0,-5.948 1.059,0 C -1.414,-2.975 0,-2.075 0,0 M 19.389,-2.14 11.359,-8.463 4.02,-2.685 C 2.961,-5.229 0.402,-6.996 -2.545,-6.996 l -6.281,0 0,13.992 6.281,0 c 3.293,0 5.666,-2.094 6.563,-4.325 l 7.341,5.772 2.719,-2.14 -6.728,-5.288 1.293,-1.012 6.726,5.285 2.723,-2.134 -6.727,-5.294 1.291,-1.014 6.733,5.295 0,4.855 4.881,0 0,-9.908 4.869,0 0,-4.101 -9.75,0 0,4.873 z m 15.933,-0.774 4.867,0 0,-4.099 -9.753,0 0,14.009 4.886,0 0,-9.91 z" />
														</g>
													</g>
												</svg>

											</div>
											<ul class="populer-server-detail-box-list">
												<li>Server: 822B DELL/HP</li>
												<li>HDD - 1x 250GB HDD NoRaid</li>
												<li>RAM - 8GB RAM</li>
												<li>PORT - 1Gbps</li>
												<li>LOCATION - TX, Dallas TIER-III</li>
											</ul>
											<button class="btn btn-primary">Order (Instant)
												<svg xmlns="http://www.w3.org/2000/svg" width="11.684"
													height="11.899" viewBox="0 0 11.684 11.899">
													<g id="right" transform="translate(0.4 0.4)">
														<g id="Group_1053" data-name="Group 1053">
															<path id="Path_6081" data-name="Path 6081"
																d="M17.446,90.637l-5.2-5.2a.347.347,0,0,0-.49.49l4.611,4.611-9.353-.1-.268.126-.079.221c0,.192.347.347.347.347l9.353.1L11.753,95.84a.347.347,0,1,0,.49.49l5.2-5.2A.347.347,0,0,0,17.446,90.637Z"
																transform="translate(-6.664 -85.333)" fill="#fff"
																stroke="#fff" stroke-width="0.8" />
														</g>
													</g>
												</svg>
											</button>
										</div>
									</div>
									<div class="col-lg-6 col-12 mt-2">
										<div class="populer-server-detail-box">
											<div class="populer-server-detail-box-title">
												<h5>Intel Xeon 4/8 Core</h5>
												<p>4x 2.20GHz</p>
											</div>
											<div class="populer-server-detail-box-icon">
												<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
													xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													width="433.701px" height="433.701px"
													viewBox="0 0 433.701 433.701"
													enable-background="new 0 0 433.701 433.701"
													xml:space="preserve">
													<path fill="#4987CE" d="M216.85,432.851c-2.147,0-4.285-0.039-6.419-0.101l44.143-121.318h60.75
c10.663,0,22.368-8.197,26.015-18.212l47.892-131.546c7.835-21.537-4.501-39.157-27.418-39.157h-84.279l-70.715,194.316h-0.026
l-40.089,110.153C71.594,404.375,0.85,318.878,0.85,216.851c0-99.086,66.721-182.58,157.683-208.027l-41.365,113.693h-0.012
L48.389,311.432l45.778,0.004l58.481-160.531h34.404l-58.481,160.531l45.761,0.008l54.498-149.77
c7.84-21.537-4.497-39.157-27.393-39.157h-38.481l44.186-121.44c3.221-0.143,6.454-0.227,9.708-0.227
c119.294,0,216,96.706,216,216.001C432.85,336.143,336.144,432.851,216.85,432.851z M347.542,150.79h-34.395l-48.167,132.158h34.396
L347.542,150.79z" />
												</svg>
												<svg xmlns:dc="http://purl.org/dc/elements/1.1/"
													xmlns:cc="http://creativecommons.org/ns#"
													xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
													xmlns:svg="http://www.w3.org/2000/svg"
													xmlns="http://www.w3.org/2000/svg" version="1.1" id="svg3794"
													viewBox="0 0 300 300" height="300" width="300">
													<defs id="defs3796" />
													<g transform="translate(-318.33375,-439.74274)" id="layer1">
														<g transform="matrix(4.579965,0,0,-4.579965,468.34291,456.8459)"
															id="g3460">
															<path id="path3462"
																style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																d="m 0,0 c -8.01,0 -15.264,-3.249 -20.516,-8.505 -5.254,-5.244 -8.501,-12.502 -8.501,-20.516 0,-8.008 3.247,-15.261 8.501,-20.507 5.252,-5.249 12.506,-8.504 20.516,-8.504 8.012,0 15.27,3.255 20.514,8.504 5.252,5.246 8.492,12.499 8.492,20.507 0,8.014 -3.24,15.272 -8.492,20.516 C 15.27,-3.249 8.012,0 0,0 m 0,3.516 c 17.965,0 32.531,-14.568 32.531,-32.537 0,-17.963 -14.566,-32.529 -32.531,-32.529 -17.963,0 -32.535,14.566 -32.535,32.529 0,17.969 14.572,32.537 32.535,32.537" />
														</g>
														<g transform="matrix(4.579965,0,0,-4.579965,397.87238,588.54693)"
															id="g3464">
															<path id="path3466"
																style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																d="m 0,0 c 0,1.896 -1.258,2.973 -3.039,2.973 l -1.09,0 0,-5.948 1.059,0 C -1.414,-2.975 0,-2.075 0,0 M 19.389,-2.14 11.359,-8.463 4.02,-2.685 C 2.961,-5.229 0.402,-6.996 -2.545,-6.996 l -6.281,0 0,13.992 6.281,0 c 3.293,0 5.666,-2.094 6.563,-4.325 l 7.341,5.772 2.719,-2.14 -6.728,-5.288 1.293,-1.012 6.726,5.285 2.723,-2.134 -6.727,-5.294 1.291,-1.014 6.733,5.295 0,4.855 4.881,0 0,-9.908 4.869,0 0,-4.101 -9.75,0 0,4.873 z m 15.933,-0.774 4.867,0 0,-4.099 -9.753,0 0,14.009 4.886,0 0,-9.91 z" />
														</g>
													</g>
												</svg>

											</div>
											<ul class="populer-server-detail-box-list">
												<li>Server: 822B DELL/HP</li>
												<li>HDD - 1x 250GB HDD NoRaid</li>
												<li>RAM - 8GB RAM</li>
												<li>PORT - 1Gbps</li>
												<li>LOCATION - TX, Dallas TIER-III</li>
											</ul>
											<button class="btn btn-primary">Order (Instant)
												<svg xmlns="http://www.w3.org/2000/svg" width="11.684"
													height="11.899" viewBox="0 0 11.684 11.899">
													<g id="right" transform="translate(0.4 0.4)">
														<g id="Group_1053" data-name="Group 1053">
															<path id="Path_6081" data-name="Path 6081"
																d="M17.446,90.637l-5.2-5.2a.347.347,0,0,0-.49.49l4.611,4.611-9.353-.1-.268.126-.079.221c0,.192.347.347.347.347l9.353.1L11.753,95.84a.347.347,0,1,0,.49.49l5.2-5.2A.347.347,0,0,0,17.446,90.637Z"
																transform="translate(-6.664 -85.333)" fill="#fff"
																stroke="#fff" stroke-width="0.8" />
														</g>
													</g>
												</svg>
											</button>
										</div>
									</div>
									<div class="col-lg-6 col-12 mt-2">
										<div class="populer-server-detail-box">
											<div class="populer-server-detail-box-title">
												<h5>Intel Xeon 4/8 Core</h5>
												<p>4x 2.20GHz</p>
											</div>
											<div class="populer-server-detail-box-icon">
												<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
													xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													width="433.701px" height="433.701px"
													viewBox="0 0 433.701 433.701"
													enable-background="new 0 0 433.701 433.701"
													xml:space="preserve">
													<path fill="#4987CE" d="M216.85,432.851c-2.147,0-4.285-0.039-6.419-0.101l44.143-121.318h60.75
c10.663,0,22.368-8.197,26.015-18.212l47.892-131.546c7.835-21.537-4.501-39.157-27.418-39.157h-84.279l-70.715,194.316h-0.026
l-40.089,110.153C71.594,404.375,0.85,318.878,0.85,216.851c0-99.086,66.721-182.58,157.683-208.027l-41.365,113.693h-0.012
L48.389,311.432l45.778,0.004l58.481-160.531h34.404l-58.481,160.531l45.761,0.008l54.498-149.77
c7.84-21.537-4.497-39.157-27.393-39.157h-38.481l44.186-121.44c3.221-0.143,6.454-0.227,9.708-0.227
c119.294,0,216,96.706,216,216.001C432.85,336.143,336.144,432.851,216.85,432.851z M347.542,150.79h-34.395l-48.167,132.158h34.396
L347.542,150.79z" />
												</svg>
												<svg xmlns:dc="http://purl.org/dc/elements/1.1/"
													xmlns:cc="http://creativecommons.org/ns#"
													xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
													xmlns:svg="http://www.w3.org/2000/svg"
													xmlns="http://www.w3.org/2000/svg" version="1.1" id="svg3794"
													viewBox="0 0 300 300" height="300" width="300">
													<defs id="defs3796" />
													<g transform="translate(-318.33375,-439.74274)" id="layer1">
														<g transform="matrix(4.579965,0,0,-4.579965,468.34291,456.8459)"
															id="g3460">
															<path id="path3462"
																style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																d="m 0,0 c -8.01,0 -15.264,-3.249 -20.516,-8.505 -5.254,-5.244 -8.501,-12.502 -8.501,-20.516 0,-8.008 3.247,-15.261 8.501,-20.507 5.252,-5.249 12.506,-8.504 20.516,-8.504 8.012,0 15.27,3.255 20.514,8.504 5.252,5.246 8.492,12.499 8.492,20.507 0,8.014 -3.24,15.272 -8.492,20.516 C 15.27,-3.249 8.012,0 0,0 m 0,3.516 c 17.965,0 32.531,-14.568 32.531,-32.537 0,-17.963 -14.566,-32.529 -32.531,-32.529 -17.963,0 -32.535,14.566 -32.535,32.529 0,17.969 14.572,32.537 32.535,32.537" />
														</g>
														<g transform="matrix(4.579965,0,0,-4.579965,397.87238,588.54693)"
															id="g3464">
															<path id="path3466"
																style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																d="m 0,0 c 0,1.896 -1.258,2.973 -3.039,2.973 l -1.09,0 0,-5.948 1.059,0 C -1.414,-2.975 0,-2.075 0,0 M 19.389,-2.14 11.359,-8.463 4.02,-2.685 C 2.961,-5.229 0.402,-6.996 -2.545,-6.996 l -6.281,0 0,13.992 6.281,0 c 3.293,0 5.666,-2.094 6.563,-4.325 l 7.341,5.772 2.719,-2.14 -6.728,-5.288 1.293,-1.012 6.726,5.285 2.723,-2.134 -6.727,-5.294 1.291,-1.014 6.733,5.295 0,4.855 4.881,0 0,-9.908 4.869,0 0,-4.101 -9.75,0 0,4.873 z m 15.933,-0.774 4.867,0 0,-4.099 -9.753,0 0,14.009 4.886,0 0,-9.91 z" />
														</g>
													</g>
												</svg>

											</div>
											<ul class="populer-server-detail-box-list">
												<li>Server: 822B DELL/HP</li>
												<li>HDD - 1x 250GB HDD NoRaid</li>
												<li>RAM - 8GB RAM</li>
												<li>PORT - 1Gbps</li>
												<li>LOCATION - TX, Dallas TIER-III</li>
											</ul>
											<button class="btn btn-primary">Order (Instant)
												<svg xmlns="http://www.w3.org/2000/svg" width="11.684"
													height="11.899" viewBox="0 0 11.684 11.899">
													<g id="right" transform="translate(0.4 0.4)">
														<g id="Group_1053" data-name="Group 1053">
															<path id="Path_6081" data-name="Path 6081"
																d="M17.446,90.637l-5.2-5.2a.347.347,0,0,0-.49.49l4.611,4.611-9.353-.1-.268.126-.079.221c0,.192.347.347.347.347l9.353.1L11.753,95.84a.347.347,0,1,0,.49.49l5.2-5.2A.347.347,0,0,0,17.446,90.637Z"
																transform="translate(-6.664 -85.333)" fill="#fff"
																stroke="#fff" stroke-width="0.8" />
														</g>
													</g>
												</svg>
											</button>
										</div>
									</div>
								</div>
								<button class="btn btn-black-border mt-2">LOADING MORE</button>
							</div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="populer-server-wrapper">
								<div class="populer-server-title">
									<h3><svg xmlns="http://www.w3.org/2000/svg" width="40.002" height="40"
											viewBox="0 0 40.002 40">
											<g id="servers" transform="translate(0)">
												<g id="Group_2873" data-name="Group 2873" transform="translate(0)">
													<g id="Group_2872" data-name="Group 2872"
														transform="translate(0 0)">
														<path id="Path_12307" data-name="Path 12307"
															d="M270.451,405.323h-13.6a.85.85,0,0,0,0,1.7h13.6a.85.85,0,1,0,0-1.7Z"
															transform="translate(-236.4 -373.684)" fill="#f80" />
														<path id="Path_12308" data-name="Path 12308"
															d="M270.451,447.989h-13.6a.85.85,0,0,0,0,1.7h13.6a.85.85,0,1,0,0-1.7Z"
															transform="translate(-236.4 -413.089)" fill="#f80" />
														<path id="Path_12309" data-name="Path 12309"
															d="M45.217,405.323a2.55,2.55,0,1,0,2.55,2.55A2.553,2.553,0,0,0,45.217,405.323Zm0,3.4a.85.85,0,1,1,.85-.85A.85.85,0,0,1,45.217,408.723Z"
															transform="translate(-39.267 -373.824)" fill="#f80" />
														<path id="Path_12310" data-name="Path 12310"
															d="M45.217,277.323a2.55,2.55,0,1,0,2.55,2.55A2.553,2.553,0,0,0,45.217,277.323Zm0,3.4a.85.85,0,1,1,.85-.85A.85.85,0,0,1,45.217,280.723Z"
															transform="translate(-39.267 -255.719)" fill="#f80" />
														<path id="Path_12311" data-name="Path 12311"
															d="M270.451,191.989h-13.6a.85.85,0,0,0,0,1.7h13.6a.85.85,0,1,0,0-1.7Z"
															transform="translate(-236.4 -177.003)" fill="#f80" />
														<path id="Path_12312" data-name="Path 12312"
															d="M40,15.843V12.51a4.13,4.13,0,0,0-.632-2.178c-.012-.023-.013-.05-.027-.072L34.19,1.976A4.143,4.143,0,0,0,30.651.011H9.355A4.141,4.141,0,0,0,5.817,1.976L.663,10.26c-.008.013-.008.028-.017.043A4.133,4.133,0,0,0,0,12.51v3.334a4.152,4.152,0,0,0,1.693,3.334A4.154,4.154,0,0,0,0,22.51v3.334a4.152,4.152,0,0,0,1.693,3.334A4.154,4.154,0,0,0,0,32.511v3.334a4.173,4.173,0,0,0,4.167,4.167H35.835A4.173,4.173,0,0,0,40,35.844V32.511a4.152,4.152,0,0,0-1.693-3.334A4.151,4.151,0,0,0,40,25.844V22.51a4.152,4.152,0,0,0-1.693-3.334A4.149,4.149,0,0,0,40,15.843ZM7.232,2.856a2.483,2.483,0,0,1,2.122-1.18h21.3a2.483,2.483,0,0,1,2.122,1.18L36.21,8.381c-.125-.012-.247-.038-.375-.038H4.167c-.128,0-.248.027-.373.038Zm31.1,29.655v3.334a2.5,2.5,0,0,1-2.5,2.5H4.167a2.5,2.5,0,0,1-2.5-2.5V32.511a2.5,2.5,0,0,1,2.5-2.5H35.835A2.5,2.5,0,0,1,38.335,32.511Zm0-10v3.334a2.5,2.5,0,0,1-2.5,2.5H4.167a2.5,2.5,0,0,1-2.5-2.5V22.51a2.5,2.5,0,0,1,2.5-2.5H35.835A2.5,2.5,0,0,1,38.335,22.51Zm0-6.667a2.5,2.5,0,0,1-2.5,2.5H4.167a2.5,2.5,0,0,1-2.5-2.5V12.51a2.5,2.5,0,0,1,2.5-2.5H35.835a2.5,2.5,0,0,1,2.5,2.5v3.334Z"
															transform="translate(0 -0.011)" fill="#f80" />
														<path id="Path_12313" data-name="Path 12313"
															d="M270.451,149.323h-13.6a.85.85,0,1,0,0,1.7h13.6a.85.85,0,1,0,0-1.7Z"
															transform="translate(-236.4 -137.668)" fill="#f80" />
														<path id="Path_12314" data-name="Path 12314"
															d="M270.451,319.989h-13.6a.85.85,0,0,0,0,1.7h13.6a.85.85,0,1,0,0-1.7Z"
															transform="translate(-236.4 -295.011)" fill="#f80" />
														<path id="Path_12315" data-name="Path 12315"
															d="M270.451,277.323h-13.6a.85.85,0,0,0,0,1.7h13.6a.85.85,0,1,0,0-1.7Z"
															transform="translate(-236.4 -255.676)" fill="#f80" />
														<path id="Path_12316" data-name="Path 12316"
															d="M45.217,149.323a2.55,2.55,0,1,0,2.55,2.55A2.553,2.553,0,0,0,45.217,149.323Zm0,3.4a.85.85,0,1,1,.85-.85A.85.85,0,0,1,45.217,152.723Z"
															transform="translate(-39.267 -137.691)" fill="#f80" />
													</g>
												</g>
											</g>
										</svg>
										Pro Server</h3>
									<p>Our Best Selling Budget Server</p>
								</div>
								<div class="row">
									<div class="col-lg-6 col-12">
										<div class="populer-server-detail-box">
											<div class="populer-server-detail-box-title">
												<h5>Intel Xeon 4/8 Core</h5>
												<p>4x 2.20GHz</p>
											</div>
											<div class="populer-server-detail-box-icon">
												<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
													xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													width="433.701px" height="433.701px"
													viewBox="0 0 433.701 433.701"
													enable-background="new 0 0 433.701 433.701"
													xml:space="preserve">
													<path fill="#4987CE" d="M216.85,432.851c-2.147,0-4.285-0.039-6.419-0.101l44.143-121.318h60.75
c10.663,0,22.368-8.197,26.015-18.212l47.892-131.546c7.835-21.537-4.501-39.157-27.418-39.157h-84.279l-70.715,194.316h-0.026
l-40.089,110.153C71.594,404.375,0.85,318.878,0.85,216.851c0-99.086,66.721-182.58,157.683-208.027l-41.365,113.693h-0.012
L48.389,311.432l45.778,0.004l58.481-160.531h34.404l-58.481,160.531l45.761,0.008l54.498-149.77
c7.84-21.537-4.497-39.157-27.393-39.157h-38.481l44.186-121.44c3.221-0.143,6.454-0.227,9.708-0.227
c119.294,0,216,96.706,216,216.001C432.85,336.143,336.144,432.851,216.85,432.851z M347.542,150.79h-34.395l-48.167,132.158h34.396
L347.542,150.79z" />
												</svg>
												<svg xmlns:dc="http://purl.org/dc/elements/1.1/"
													xmlns:cc="http://creativecommons.org/ns#"
													xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
													xmlns:svg="http://www.w3.org/2000/svg"
													xmlns="http://www.w3.org/2000/svg" version="1.1" id="svg3794"
													viewBox="0 0 300 300" height="300" width="300">
													<defs id="defs3796" />
													<g transform="translate(-318.33375,-439.74274)" id="layer1">
														<g transform="matrix(4.579965,0,0,-4.579965,468.34291,456.8459)"
															id="g3460">
															<path id="path3462"
																style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																d="m 0,0 c -8.01,0 -15.264,-3.249 -20.516,-8.505 -5.254,-5.244 -8.501,-12.502 -8.501,-20.516 0,-8.008 3.247,-15.261 8.501,-20.507 5.252,-5.249 12.506,-8.504 20.516,-8.504 8.012,0 15.27,3.255 20.514,8.504 5.252,5.246 8.492,12.499 8.492,20.507 0,8.014 -3.24,15.272 -8.492,20.516 C 15.27,-3.249 8.012,0 0,0 m 0,3.516 c 17.965,0 32.531,-14.568 32.531,-32.537 0,-17.963 -14.566,-32.529 -32.531,-32.529 -17.963,0 -32.535,14.566 -32.535,32.529 0,17.969 14.572,32.537 32.535,32.537" />
														</g>
														<g transform="matrix(4.579965,0,0,-4.579965,397.87238,588.54693)"
															id="g3464">
															<path id="path3466"
																style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																d="m 0,0 c 0,1.896 -1.258,2.973 -3.039,2.973 l -1.09,0 0,-5.948 1.059,0 C -1.414,-2.975 0,-2.075 0,0 M 19.389,-2.14 11.359,-8.463 4.02,-2.685 C 2.961,-5.229 0.402,-6.996 -2.545,-6.996 l -6.281,0 0,13.992 6.281,0 c 3.293,0 5.666,-2.094 6.563,-4.325 l 7.341,5.772 2.719,-2.14 -6.728,-5.288 1.293,-1.012 6.726,5.285 2.723,-2.134 -6.727,-5.294 1.291,-1.014 6.733,5.295 0,4.855 4.881,0 0,-9.908 4.869,0 0,-4.101 -9.75,0 0,4.873 z m 15.933,-0.774 4.867,0 0,-4.099 -9.753,0 0,14.009 4.886,0 0,-9.91 z" />
														</g>
													</g>
												</svg>

											</div>
											<ul class="populer-server-detail-box-list">
												<li>Server: 822B DELL/HP</li>
												<li>HDD - 1x 250GB HDD NoRaid</li>
												<li>RAM - 8GB RAM</li>
												<li>PORT - 1Gbps</li>
												<li>LOCATION - TX, Dallas TIER-III</li>
											</ul>
											<button class="btn btn-secondary">Order (Instant)
												<svg xmlns="http://www.w3.org/2000/svg" width="11.684"
													height="11.899" viewBox="0 0 11.684 11.899">
													<g id="right" transform="translate(0.4 0.4)">
														<g id="Group_1053" data-name="Group 1053">
															<path id="Path_6081" data-name="Path 6081"
																d="M17.446,90.637l-5.2-5.2a.347.347,0,0,0-.49.49l4.611,4.611-9.353-.1-.268.126-.079.221c0,.192.347.347.347.347l9.353.1L11.753,95.84a.347.347,0,1,0,.49.49l5.2-5.2A.347.347,0,0,0,17.446,90.637Z"
																transform="translate(-6.664 -85.333)" fill="#fff"
																stroke="#fff" stroke-width="0.8" />
														</g>
													</g>
												</svg>
											</button>
										</div>
									</div>
									<div class="col-lg-6 col-12">
										<div class="populer-server-detail-box">
											<div class="populer-server-detail-box-title">
												<h5>Intel Xeon 4/8 Core</h5>
												<p>4x 2.20GHz</p>
											</div>
											<div class="populer-server-detail-box-icon">
												<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
													xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													width="433.701px" height="433.701px"
													viewBox="0 0 433.701 433.701"
													enable-background="new 0 0 433.701 433.701"
													xml:space="preserve">
													<path fill="#4987CE" d="M216.85,432.851c-2.147,0-4.285-0.039-6.419-0.101l44.143-121.318h60.75
c10.663,0,22.368-8.197,26.015-18.212l47.892-131.546c7.835-21.537-4.501-39.157-27.418-39.157h-84.279l-70.715,194.316h-0.026
l-40.089,110.153C71.594,404.375,0.85,318.878,0.85,216.851c0-99.086,66.721-182.58,157.683-208.027l-41.365,113.693h-0.012
L48.389,311.432l45.778,0.004l58.481-160.531h34.404l-58.481,160.531l45.761,0.008l54.498-149.77
c7.84-21.537-4.497-39.157-27.393-39.157h-38.481l44.186-121.44c3.221-0.143,6.454-0.227,9.708-0.227
c119.294,0,216,96.706,216,216.001C432.85,336.143,336.144,432.851,216.85,432.851z M347.542,150.79h-34.395l-48.167,132.158h34.396
L347.542,150.79z" />
												</svg>
												<svg xmlns:dc="http://purl.org/dc/elements/1.1/"
													xmlns:cc="http://creativecommons.org/ns#"
													xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
													xmlns:svg="http://www.w3.org/2000/svg"
													xmlns="http://www.w3.org/2000/svg" version="1.1" id="svg3794"
													viewBox="0 0 300 300" height="300" width="300">
													<defs id="defs3796" />
													<g transform="translate(-318.33375,-439.74274)" id="layer1">
														<g transform="matrix(4.579965,0,0,-4.579965,468.34291,456.8459)"
															id="g3460">
															<path id="path3462"
																style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																d="m 0,0 c -8.01,0 -15.264,-3.249 -20.516,-8.505 -5.254,-5.244 -8.501,-12.502 -8.501,-20.516 0,-8.008 3.247,-15.261 8.501,-20.507 5.252,-5.249 12.506,-8.504 20.516,-8.504 8.012,0 15.27,3.255 20.514,8.504 5.252,5.246 8.492,12.499 8.492,20.507 0,8.014 -3.24,15.272 -8.492,20.516 C 15.27,-3.249 8.012,0 0,0 m 0,3.516 c 17.965,0 32.531,-14.568 32.531,-32.537 0,-17.963 -14.566,-32.529 -32.531,-32.529 -17.963,0 -32.535,14.566 -32.535,32.529 0,17.969 14.572,32.537 32.535,32.537" />
														</g>
														<g transform="matrix(4.579965,0,0,-4.579965,397.87238,588.54693)"
															id="g3464">
															<path id="path3466"
																style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																d="m 0,0 c 0,1.896 -1.258,2.973 -3.039,2.973 l -1.09,0 0,-5.948 1.059,0 C -1.414,-2.975 0,-2.075 0,0 M 19.389,-2.14 11.359,-8.463 4.02,-2.685 C 2.961,-5.229 0.402,-6.996 -2.545,-6.996 l -6.281,0 0,13.992 6.281,0 c 3.293,0 5.666,-2.094 6.563,-4.325 l 7.341,5.772 2.719,-2.14 -6.728,-5.288 1.293,-1.012 6.726,5.285 2.723,-2.134 -6.727,-5.294 1.291,-1.014 6.733,5.295 0,4.855 4.881,0 0,-9.908 4.869,0 0,-4.101 -9.75,0 0,4.873 z m 15.933,-0.774 4.867,0 0,-4.099 -9.753,0 0,14.009 4.886,0 0,-9.91 z" />
														</g>
													</g>
												</svg>

											</div>
											<ul class="populer-server-detail-box-list">
												<li>Server: 822B DELL/HP</li>
												<li>HDD - 1x 250GB HDD NoRaid</li>
												<li>RAM - 8GB RAM</li>
												<li>PORT - 1Gbps</li>
												<li>LOCATION - TX, Dallas TIER-III</li>
											</ul>
											<button class="btn btn-secondary">Order (Instant)
												<svg xmlns="http://www.w3.org/2000/svg" width="11.684"
													height="11.899" viewBox="0 0 11.684 11.899">
													<g id="right" transform="translate(0.4 0.4)">
														<g id="Group_1053" data-name="Group 1053">
															<path id="Path_6081" data-name="Path 6081"
																d="M17.446,90.637l-5.2-5.2a.347.347,0,0,0-.49.49l4.611,4.611-9.353-.1-.268.126-.079.221c0,.192.347.347.347.347l9.353.1L11.753,95.84a.347.347,0,1,0,.49.49l5.2-5.2A.347.347,0,0,0,17.446,90.637Z"
																transform="translate(-6.664 -85.333)" fill="#fff"
																stroke="#fff" stroke-width="0.8" />
														</g>
													</g>
												</svg>
											</button>
										</div>
									</div>
									<div class="col-lg-6 col-12 mt-2">
										<div class="populer-server-detail-box">
											<div class="populer-server-detail-box-title">
												<h5>Intel Xeon 4/8 Core</h5>
												<p>4x 2.20GHz</p>
											</div>
											<div class="populer-server-detail-box-icon">
												<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
													xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													width="433.701px" height="433.701px"
													viewBox="0 0 433.701 433.701"
													enable-background="new 0 0 433.701 433.701"
													xml:space="preserve">
													<path fill="#4987CE" d="M216.85,432.851c-2.147,0-4.285-0.039-6.419-0.101l44.143-121.318h60.75
c10.663,0,22.368-8.197,26.015-18.212l47.892-131.546c7.835-21.537-4.501-39.157-27.418-39.157h-84.279l-70.715,194.316h-0.026
l-40.089,110.153C71.594,404.375,0.85,318.878,0.85,216.851c0-99.086,66.721-182.58,157.683-208.027l-41.365,113.693h-0.012
L48.389,311.432l45.778,0.004l58.481-160.531h34.404l-58.481,160.531l45.761,0.008l54.498-149.77
c7.84-21.537-4.497-39.157-27.393-39.157h-38.481l44.186-121.44c3.221-0.143,6.454-0.227,9.708-0.227
c119.294,0,216,96.706,216,216.001C432.85,336.143,336.144,432.851,216.85,432.851z M347.542,150.79h-34.395l-48.167,132.158h34.396
L347.542,150.79z" />
												</svg>
												<svg xmlns:dc="http://purl.org/dc/elements/1.1/"
													xmlns:cc="http://creativecommons.org/ns#"
													xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
													xmlns:svg="http://www.w3.org/2000/svg"
													xmlns="http://www.w3.org/2000/svg" version="1.1" id="svg3794"
													viewBox="0 0 300 300" height="300" width="300">
													<defs id="defs3796" />
													<g transform="translate(-318.33375,-439.74274)" id="layer1">
														<g transform="matrix(4.579965,0,0,-4.579965,468.34291,456.8459)"
															id="g3460">
															<path id="path3462"
																style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																d="m 0,0 c -8.01,0 -15.264,-3.249 -20.516,-8.505 -5.254,-5.244 -8.501,-12.502 -8.501,-20.516 0,-8.008 3.247,-15.261 8.501,-20.507 5.252,-5.249 12.506,-8.504 20.516,-8.504 8.012,0 15.27,3.255 20.514,8.504 5.252,5.246 8.492,12.499 8.492,20.507 0,8.014 -3.24,15.272 -8.492,20.516 C 15.27,-3.249 8.012,0 0,0 m 0,3.516 c 17.965,0 32.531,-14.568 32.531,-32.537 0,-17.963 -14.566,-32.529 -32.531,-32.529 -17.963,0 -32.535,14.566 -32.535,32.529 0,17.969 14.572,32.537 32.535,32.537" />
														</g>
														<g transform="matrix(4.579965,0,0,-4.579965,397.87238,588.54693)"
															id="g3464">
															<path id="path3466"
																style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																d="m 0,0 c 0,1.896 -1.258,2.973 -3.039,2.973 l -1.09,0 0,-5.948 1.059,0 C -1.414,-2.975 0,-2.075 0,0 M 19.389,-2.14 11.359,-8.463 4.02,-2.685 C 2.961,-5.229 0.402,-6.996 -2.545,-6.996 l -6.281,0 0,13.992 6.281,0 c 3.293,0 5.666,-2.094 6.563,-4.325 l 7.341,5.772 2.719,-2.14 -6.728,-5.288 1.293,-1.012 6.726,5.285 2.723,-2.134 -6.727,-5.294 1.291,-1.014 6.733,5.295 0,4.855 4.881,0 0,-9.908 4.869,0 0,-4.101 -9.75,0 0,4.873 z m 15.933,-0.774 4.867,0 0,-4.099 -9.753,0 0,14.009 4.886,0 0,-9.91 z" />
														</g>
													</g>
												</svg>

											</div>
											<ul class="populer-server-detail-box-list">
												<li>Server: 822B DELL/HP</li>
												<li>HDD - 1x 250GB HDD NoRaid</li>
												<li>RAM - 8GB RAM</li>
												<li>PORT - 1Gbps</li>
												<li>LOCATION - TX, Dallas TIER-III</li>
											</ul>
											<button class="btn btn-secondary">Order (Instant)
												<svg xmlns="http://www.w3.org/2000/svg" width="11.684"
													height="11.899" viewBox="0 0 11.684 11.899">
													<g id="right" transform="translate(0.4 0.4)">
														<g id="Group_1053" data-name="Group 1053">
															<path id="Path_6081" data-name="Path 6081"
																d="M17.446,90.637l-5.2-5.2a.347.347,0,0,0-.49.49l4.611,4.611-9.353-.1-.268.126-.079.221c0,.192.347.347.347.347l9.353.1L11.753,95.84a.347.347,0,1,0,.49.49l5.2-5.2A.347.347,0,0,0,17.446,90.637Z"
																transform="translate(-6.664 -85.333)" fill="#fff"
																stroke="#fff" stroke-width="0.8" />
														</g>
													</g>
												</svg>
											</button>
										</div>
									</div>
									<div class="col-lg-6 col-12 mt-2">
										<div class="populer-server-detail-box">
											<div class="populer-server-detail-box-title">
												<h5>Intel Xeon 4/8 Core</h5>
												<p>4x 2.20GHz</p>
											</div>
											<div class="populer-server-detail-box-icon">
												<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
													xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													width="433.701px" height="433.701px"
													viewBox="0 0 433.701 433.701"
													enable-background="new 0 0 433.701 433.701"
													xml:space="preserve">
													<path fill="#4987CE" d="M216.85,432.851c-2.147,0-4.285-0.039-6.419-0.101l44.143-121.318h60.75
c10.663,0,22.368-8.197,26.015-18.212l47.892-131.546c7.835-21.537-4.501-39.157-27.418-39.157h-84.279l-70.715,194.316h-0.026
l-40.089,110.153C71.594,404.375,0.85,318.878,0.85,216.851c0-99.086,66.721-182.58,157.683-208.027l-41.365,113.693h-0.012
L48.389,311.432l45.778,0.004l58.481-160.531h34.404l-58.481,160.531l45.761,0.008l54.498-149.77
c7.84-21.537-4.497-39.157-27.393-39.157h-38.481l44.186-121.44c3.221-0.143,6.454-0.227,9.708-0.227
c119.294,0,216,96.706,216,216.001C432.85,336.143,336.144,432.851,216.85,432.851z M347.542,150.79h-34.395l-48.167,132.158h34.396
L347.542,150.79z" />
												</svg>
												<svg xmlns:dc="http://purl.org/dc/elements/1.1/"
													xmlns:cc="http://creativecommons.org/ns#"
													xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
													xmlns:svg="http://www.w3.org/2000/svg"
													xmlns="http://www.w3.org/2000/svg" version="1.1" id="svg3794"
													viewBox="0 0 300 300" height="300" width="300">
													<defs id="defs3796" />
													<g transform="translate(-318.33375,-439.74274)" id="layer1">
														<g transform="matrix(4.579965,0,0,-4.579965,468.34291,456.8459)"
															id="g3460">
															<path id="path3462"
																style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																d="m 0,0 c -8.01,0 -15.264,-3.249 -20.516,-8.505 -5.254,-5.244 -8.501,-12.502 -8.501,-20.516 0,-8.008 3.247,-15.261 8.501,-20.507 5.252,-5.249 12.506,-8.504 20.516,-8.504 8.012,0 15.27,3.255 20.514,8.504 5.252,5.246 8.492,12.499 8.492,20.507 0,8.014 -3.24,15.272 -8.492,20.516 C 15.27,-3.249 8.012,0 0,0 m 0,3.516 c 17.965,0 32.531,-14.568 32.531,-32.537 0,-17.963 -14.566,-32.529 -32.531,-32.529 -17.963,0 -32.535,14.566 -32.535,32.529 0,17.969 14.572,32.537 32.535,32.537" />
														</g>
														<g transform="matrix(4.579965,0,0,-4.579965,397.87238,588.54693)"
															id="g3464">
															<path id="path3466"
																style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																d="m 0,0 c 0,1.896 -1.258,2.973 -3.039,2.973 l -1.09,0 0,-5.948 1.059,0 C -1.414,-2.975 0,-2.075 0,0 M 19.389,-2.14 11.359,-8.463 4.02,-2.685 C 2.961,-5.229 0.402,-6.996 -2.545,-6.996 l -6.281,0 0,13.992 6.281,0 c 3.293,0 5.666,-2.094 6.563,-4.325 l 7.341,5.772 2.719,-2.14 -6.728,-5.288 1.293,-1.012 6.726,5.285 2.723,-2.134 -6.727,-5.294 1.291,-1.014 6.733,5.295 0,4.855 4.881,0 0,-9.908 4.869,0 0,-4.101 -9.75,0 0,4.873 z m 15.933,-0.774 4.867,0 0,-4.099 -9.753,0 0,14.009 4.886,0 0,-9.91 z" />
														</g>
													</g>
												</svg>

											</div>
											<ul class="populer-server-detail-box-list">
												<li>Server: 822B DELL/HP</li>
												<li>HDD - 1x 250GB HDD NoRaid</li>
												<li>RAM - 8GB RAM</li>
												<li>PORT - 1Gbps</li>
												<li>LOCATION - TX, Dallas TIER-III</li>
											</ul>
											<button class="btn btn-secondary">Order (Instant)
												<svg xmlns="http://www.w3.org/2000/svg" width="11.684"
													height="11.899" viewBox="0 0 11.684 11.899">
													<g id="right" transform="translate(0.4 0.4)">
														<g id="Group_1053" data-name="Group 1053">
															<path id="Path_6081" data-name="Path 6081"
																d="M17.446,90.637l-5.2-5.2a.347.347,0,0,0-.49.49l4.611,4.611-9.353-.1-.268.126-.079.221c0,.192.347.347.347.347l9.353.1L11.753,95.84a.347.347,0,1,0,.49.49l5.2-5.2A.347.347,0,0,0,17.446,90.637Z"
																transform="translate(-6.664 -85.333)" fill="#fff"
																stroke="#fff" stroke-width="0.8" />
														</g>
													</g>
												</svg>
											</button>
										</div>
									</div>
								</div>
								<button class="btn btn-black-border mt-2">LOADING MORE</button>
							</div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="populer-server-wrapper">
								<div class="populer-server-title">
									<h3><svg xmlns="http://www.w3.org/2000/svg" width="40.002" height="40"
											viewBox="0 0 40.002 40">
											<g id="servers" transform="translate(0)">
												<g id="Group_2873" data-name="Group 2873" transform="translate(0)">
													<g id="Group_2872" data-name="Group 2872"
														transform="translate(0 0)">
														<path id="Path_12307" data-name="Path 12307"
															d="M270.451,405.323h-13.6a.85.85,0,0,0,0,1.7h13.6a.85.85,0,1,0,0-1.7Z"
															transform="translate(-236.4 -373.684)" fill="#f80" />
														<path id="Path_12308" data-name="Path 12308"
															d="M270.451,447.989h-13.6a.85.85,0,0,0,0,1.7h13.6a.85.85,0,1,0,0-1.7Z"
															transform="translate(-236.4 -413.089)" fill="#f80" />
														<path id="Path_12309" data-name="Path 12309"
															d="M45.217,405.323a2.55,2.55,0,1,0,2.55,2.55A2.553,2.553,0,0,0,45.217,405.323Zm0,3.4a.85.85,0,1,1,.85-.85A.85.85,0,0,1,45.217,408.723Z"
															transform="translate(-39.267 -373.824)" fill="#f80" />
														<path id="Path_12310" data-name="Path 12310"
															d="M45.217,277.323a2.55,2.55,0,1,0,2.55,2.55A2.553,2.553,0,0,0,45.217,277.323Zm0,3.4a.85.85,0,1,1,.85-.85A.85.85,0,0,1,45.217,280.723Z"
															transform="translate(-39.267 -255.719)" fill="#f80" />
														<path id="Path_12311" data-name="Path 12311"
															d="M270.451,191.989h-13.6a.85.85,0,0,0,0,1.7h13.6a.85.85,0,1,0,0-1.7Z"
															transform="translate(-236.4 -177.003)" fill="#f80" />
														<path id="Path_12312" data-name="Path 12312"
															d="M40,15.843V12.51a4.13,4.13,0,0,0-.632-2.178c-.012-.023-.013-.05-.027-.072L34.19,1.976A4.143,4.143,0,0,0,30.651.011H9.355A4.141,4.141,0,0,0,5.817,1.976L.663,10.26c-.008.013-.008.028-.017.043A4.133,4.133,0,0,0,0,12.51v3.334a4.152,4.152,0,0,0,1.693,3.334A4.154,4.154,0,0,0,0,22.51v3.334a4.152,4.152,0,0,0,1.693,3.334A4.154,4.154,0,0,0,0,32.511v3.334a4.173,4.173,0,0,0,4.167,4.167H35.835A4.173,4.173,0,0,0,40,35.844V32.511a4.152,4.152,0,0,0-1.693-3.334A4.151,4.151,0,0,0,40,25.844V22.51a4.152,4.152,0,0,0-1.693-3.334A4.149,4.149,0,0,0,40,15.843ZM7.232,2.856a2.483,2.483,0,0,1,2.122-1.18h21.3a2.483,2.483,0,0,1,2.122,1.18L36.21,8.381c-.125-.012-.247-.038-.375-.038H4.167c-.128,0-.248.027-.373.038Zm31.1,29.655v3.334a2.5,2.5,0,0,1-2.5,2.5H4.167a2.5,2.5,0,0,1-2.5-2.5V32.511a2.5,2.5,0,0,1,2.5-2.5H35.835A2.5,2.5,0,0,1,38.335,32.511Zm0-10v3.334a2.5,2.5,0,0,1-2.5,2.5H4.167a2.5,2.5,0,0,1-2.5-2.5V22.51a2.5,2.5,0,0,1,2.5-2.5H35.835A2.5,2.5,0,0,1,38.335,22.51Zm0-6.667a2.5,2.5,0,0,1-2.5,2.5H4.167a2.5,2.5,0,0,1-2.5-2.5V12.51a2.5,2.5,0,0,1,2.5-2.5H35.835a2.5,2.5,0,0,1,2.5,2.5v3.334Z"
															transform="translate(0 -0.011)" fill="#f80" />
														<path id="Path_12313" data-name="Path 12313"
															d="M270.451,149.323h-13.6a.85.85,0,1,0,0,1.7h13.6a.85.85,0,1,0,0-1.7Z"
															transform="translate(-236.4 -137.668)" fill="#f80" />
														<path id="Path_12314" data-name="Path 12314"
															d="M270.451,319.989h-13.6a.85.85,0,0,0,0,1.7h13.6a.85.85,0,1,0,0-1.7Z"
															transform="translate(-236.4 -295.011)" fill="#f80" />
														<path id="Path_12315" data-name="Path 12315"
															d="M270.451,277.323h-13.6a.85.85,0,0,0,0,1.7h13.6a.85.85,0,1,0,0-1.7Z"
															transform="translate(-236.4 -255.676)" fill="#f80" />
														<path id="Path_12316" data-name="Path 12316"
															d="M45.217,149.323a2.55,2.55,0,1,0,2.55,2.55A2.553,2.553,0,0,0,45.217,149.323Zm0,3.4a.85.85,0,1,1,.85-.85A.85.85,0,0,1,45.217,152.723Z"
															transform="translate(-39.267 -137.691)" fill="#f80" />
													</g>
												</g>
											</g>
										</svg>
										Enterprise Server</h3>
									<p>Our Best Selling Budget Server</p>
								</div>
								<div class="row">
									<div class="col-lg-6 col-12">
										<div class="populer-server-detail-box">
											<div class="populer-server-detail-box-title">
												<h5>Intel Xeon 4/8 Core</h5>
												<p>4x 2.20GHz</p>
											</div>
											<div class="populer-server-detail-box-icon">
												<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
													xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													width="433.701px" height="433.701px"
													viewBox="0 0 433.701 433.701"
													enable-background="new 0 0 433.701 433.701"
													xml:space="preserve">
													<path fill="#4987CE" d="M216.85,432.851c-2.147,0-4.285-0.039-6.419-0.101l44.143-121.318h60.75
c10.663,0,22.368-8.197,26.015-18.212l47.892-131.546c7.835-21.537-4.501-39.157-27.418-39.157h-84.279l-70.715,194.316h-0.026
l-40.089,110.153C71.594,404.375,0.85,318.878,0.85,216.851c0-99.086,66.721-182.58,157.683-208.027l-41.365,113.693h-0.012
L48.389,311.432l45.778,0.004l58.481-160.531h34.404l-58.481,160.531l45.761,0.008l54.498-149.77
c7.84-21.537-4.497-39.157-27.393-39.157h-38.481l44.186-121.44c3.221-0.143,6.454-0.227,9.708-0.227
c119.294,0,216,96.706,216,216.001C432.85,336.143,336.144,432.851,216.85,432.851z M347.542,150.79h-34.395l-48.167,132.158h34.396
L347.542,150.79z" />
												</svg>
												<svg xmlns:dc="http://purl.org/dc/elements/1.1/"
													xmlns:cc="http://creativecommons.org/ns#"
													xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
													xmlns:svg="http://www.w3.org/2000/svg"
													xmlns="http://www.w3.org/2000/svg" version="1.1" id="svg3794"
													viewBox="0 0 300 300" height="300" width="300">
													<defs id="defs3796" />
													<g transform="translate(-318.33375,-439.74274)" id="layer1">
														<g transform="matrix(4.579965,0,0,-4.579965,468.34291,456.8459)"
															id="g3460">
															<path id="path3462"
																style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																d="m 0,0 c -8.01,0 -15.264,-3.249 -20.516,-8.505 -5.254,-5.244 -8.501,-12.502 -8.501,-20.516 0,-8.008 3.247,-15.261 8.501,-20.507 5.252,-5.249 12.506,-8.504 20.516,-8.504 8.012,0 15.27,3.255 20.514,8.504 5.252,5.246 8.492,12.499 8.492,20.507 0,8.014 -3.24,15.272 -8.492,20.516 C 15.27,-3.249 8.012,0 0,0 m 0,3.516 c 17.965,0 32.531,-14.568 32.531,-32.537 0,-17.963 -14.566,-32.529 -32.531,-32.529 -17.963,0 -32.535,14.566 -32.535,32.529 0,17.969 14.572,32.537 32.535,32.537" />
														</g>
														<g transform="matrix(4.579965,0,0,-4.579965,397.87238,588.54693)"
															id="g3464">
															<path id="path3466"
																style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																d="m 0,0 c 0,1.896 -1.258,2.973 -3.039,2.973 l -1.09,0 0,-5.948 1.059,0 C -1.414,-2.975 0,-2.075 0,0 M 19.389,-2.14 11.359,-8.463 4.02,-2.685 C 2.961,-5.229 0.402,-6.996 -2.545,-6.996 l -6.281,0 0,13.992 6.281,0 c 3.293,0 5.666,-2.094 6.563,-4.325 l 7.341,5.772 2.719,-2.14 -6.728,-5.288 1.293,-1.012 6.726,5.285 2.723,-2.134 -6.727,-5.294 1.291,-1.014 6.733,5.295 0,4.855 4.881,0 0,-9.908 4.869,0 0,-4.101 -9.75,0 0,4.873 z m 15.933,-0.774 4.867,0 0,-4.099 -9.753,0 0,14.009 4.886,0 0,-9.91 z" />
														</g>
													</g>
												</svg>

											</div>
											<ul class="populer-server-detail-box-list">
												<li>Server: 822B DELL/HP</li>
												<li>HDD - 1x 250GB HDD NoRaid</li>
												<li>RAM - 8GB RAM</li>
												<li>PORT - 1Gbps</li>
												<li>LOCATION - TX, Dallas TIER-III</li>
											</ul>
											<button class="btn btn-green">Order (Instant)
												<svg xmlns="http://www.w3.org/2000/svg" width="11.684"
													height="11.899" viewBox="0 0 11.684 11.899">
													<g id="right" transform="translate(0.4 0.4)">
														<g id="Group_1053" data-name="Group 1053">
															<path id="Path_6081" data-name="Path 6081"
																d="M17.446,90.637l-5.2-5.2a.347.347,0,0,0-.49.49l4.611,4.611-9.353-.1-.268.126-.079.221c0,.192.347.347.347.347l9.353.1L11.753,95.84a.347.347,0,1,0,.49.49l5.2-5.2A.347.347,0,0,0,17.446,90.637Z"
																transform="translate(-6.664 -85.333)" fill="#fff"
																stroke="#fff" stroke-width="0.8" />
														</g>
													</g>
												</svg>
											</button>
										</div>
									</div>
									<div class="col-lg-6 col-12">
										<div class="populer-server-detail-box">
											<div class="populer-server-detail-box-title">
												<h5>Intel Xeon 4/8 Core</h5>
												<p>4x 2.20GHz</p>
											</div>
											<div class="populer-server-detail-box-icon">
												<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
													xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													width="433.701px" height="433.701px"
													viewBox="0 0 433.701 433.701"
													enable-background="new 0 0 433.701 433.701"
													xml:space="preserve">
													<path fill="#4987CE" d="M216.85,432.851c-2.147,0-4.285-0.039-6.419-0.101l44.143-121.318h60.75
c10.663,0,22.368-8.197,26.015-18.212l47.892-131.546c7.835-21.537-4.501-39.157-27.418-39.157h-84.279l-70.715,194.316h-0.026
l-40.089,110.153C71.594,404.375,0.85,318.878,0.85,216.851c0-99.086,66.721-182.58,157.683-208.027l-41.365,113.693h-0.012
L48.389,311.432l45.778,0.004l58.481-160.531h34.404l-58.481,160.531l45.761,0.008l54.498-149.77
c7.84-21.537-4.497-39.157-27.393-39.157h-38.481l44.186-121.44c3.221-0.143,6.454-0.227,9.708-0.227
c119.294,0,216,96.706,216,216.001C432.85,336.143,336.144,432.851,216.85,432.851z M347.542,150.79h-34.395l-48.167,132.158h34.396
L347.542,150.79z" />
												</svg>
												<svg xmlns:dc="http://purl.org/dc/elements/1.1/"
													xmlns:cc="http://creativecommons.org/ns#"
													xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
													xmlns:svg="http://www.w3.org/2000/svg"
													xmlns="http://www.w3.org/2000/svg" version="1.1" id="svg3794"
													viewBox="0 0 300 300" height="300" width="300">
													<defs id="defs3796" />
													<g transform="translate(-318.33375,-439.74274)" id="layer1">
														<g transform="matrix(4.579965,0,0,-4.579965,468.34291,456.8459)"
															id="g3460">
															<path id="path3462"
																style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																d="m 0,0 c -8.01,0 -15.264,-3.249 -20.516,-8.505 -5.254,-5.244 -8.501,-12.502 -8.501,-20.516 0,-8.008 3.247,-15.261 8.501,-20.507 5.252,-5.249 12.506,-8.504 20.516,-8.504 8.012,0 15.27,3.255 20.514,8.504 5.252,5.246 8.492,12.499 8.492,20.507 0,8.014 -3.24,15.272 -8.492,20.516 C 15.27,-3.249 8.012,0 0,0 m 0,3.516 c 17.965,0 32.531,-14.568 32.531,-32.537 0,-17.963 -14.566,-32.529 -32.531,-32.529 -17.963,0 -32.535,14.566 -32.535,32.529 0,17.969 14.572,32.537 32.535,32.537" />
														</g>
														<g transform="matrix(4.579965,0,0,-4.579965,397.87238,588.54693)"
															id="g3464">
															<path id="path3466"
																style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																d="m 0,0 c 0,1.896 -1.258,2.973 -3.039,2.973 l -1.09,0 0,-5.948 1.059,0 C -1.414,-2.975 0,-2.075 0,0 M 19.389,-2.14 11.359,-8.463 4.02,-2.685 C 2.961,-5.229 0.402,-6.996 -2.545,-6.996 l -6.281,0 0,13.992 6.281,0 c 3.293,0 5.666,-2.094 6.563,-4.325 l 7.341,5.772 2.719,-2.14 -6.728,-5.288 1.293,-1.012 6.726,5.285 2.723,-2.134 -6.727,-5.294 1.291,-1.014 6.733,5.295 0,4.855 4.881,0 0,-9.908 4.869,0 0,-4.101 -9.75,0 0,4.873 z m 15.933,-0.774 4.867,0 0,-4.099 -9.753,0 0,14.009 4.886,0 0,-9.91 z" />
														</g>
													</g>
												</svg>

											</div>
											<ul class="populer-server-detail-box-list">
												<li>Server: 822B DELL/HP</li>
												<li>HDD - 1x 250GB HDD NoRaid</li>
												<li>RAM - 8GB RAM</li>
												<li>PORT - 1Gbps</li>
												<li>LOCATION - TX, Dallas TIER-III</li>
											</ul>
											<button class="btn btn-green">Order (Instant)
												<svg xmlns="http://www.w3.org/2000/svg" width="11.684"
													height="11.899" viewBox="0 0 11.684 11.899">
													<g id="right" transform="translate(0.4 0.4)">
														<g id="Group_1053" data-name="Group 1053">
															<path id="Path_6081" data-name="Path 6081"
																d="M17.446,90.637l-5.2-5.2a.347.347,0,0,0-.49.49l4.611,4.611-9.353-.1-.268.126-.079.221c0,.192.347.347.347.347l9.353.1L11.753,95.84a.347.347,0,1,0,.49.49l5.2-5.2A.347.347,0,0,0,17.446,90.637Z"
																transform="translate(-6.664 -85.333)" fill="#fff"
																stroke="#fff" stroke-width="0.8" />
														</g>
													</g>
												</svg>
											</button>
										</div>
									</div>
									<div class="col-lg-6 col-12 mt-2">
										<div class="populer-server-detail-box">
											<div class="populer-server-detail-box-title">
												<h5>Intel Xeon 4/8 Core</h5>
												<p>4x 2.20GHz</p>
											</div>
											<div class="populer-server-detail-box-icon">
												<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
													xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													width="433.701px" height="433.701px"
													viewBox="0 0 433.701 433.701"
													enable-background="new 0 0 433.701 433.701"
													xml:space="preserve">
													<path fill="#4987CE" d="M216.85,432.851c-2.147,0-4.285-0.039-6.419-0.101l44.143-121.318h60.75
c10.663,0,22.368-8.197,26.015-18.212l47.892-131.546c7.835-21.537-4.501-39.157-27.418-39.157h-84.279l-70.715,194.316h-0.026
l-40.089,110.153C71.594,404.375,0.85,318.878,0.85,216.851c0-99.086,66.721-182.58,157.683-208.027l-41.365,113.693h-0.012
L48.389,311.432l45.778,0.004l58.481-160.531h34.404l-58.481,160.531l45.761,0.008l54.498-149.77
c7.84-21.537-4.497-39.157-27.393-39.157h-38.481l44.186-121.44c3.221-0.143,6.454-0.227,9.708-0.227
c119.294,0,216,96.706,216,216.001C432.85,336.143,336.144,432.851,216.85,432.851z M347.542,150.79h-34.395l-48.167,132.158h34.396
L347.542,150.79z" />
												</svg>
												<svg xmlns:dc="http://purl.org/dc/elements/1.1/"
													xmlns:cc="http://creativecommons.org/ns#"
													xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
													xmlns:svg="http://www.w3.org/2000/svg"
													xmlns="http://www.w3.org/2000/svg" version="1.1" id="svg3794"
													viewBox="0 0 300 300" height="300" width="300">
													<defs id="defs3796" />
													<g transform="translate(-318.33375,-439.74274)" id="layer1">
														<g transform="matrix(4.579965,0,0,-4.579965,468.34291,456.8459)"
															id="g3460">
															<path id="path3462"
																style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																d="m 0,0 c -8.01,0 -15.264,-3.249 -20.516,-8.505 -5.254,-5.244 -8.501,-12.502 -8.501,-20.516 0,-8.008 3.247,-15.261 8.501,-20.507 5.252,-5.249 12.506,-8.504 20.516,-8.504 8.012,0 15.27,3.255 20.514,8.504 5.252,5.246 8.492,12.499 8.492,20.507 0,8.014 -3.24,15.272 -8.492,20.516 C 15.27,-3.249 8.012,0 0,0 m 0,3.516 c 17.965,0 32.531,-14.568 32.531,-32.537 0,-17.963 -14.566,-32.529 -32.531,-32.529 -17.963,0 -32.535,14.566 -32.535,32.529 0,17.969 14.572,32.537 32.535,32.537" />
														</g>
														<g transform="matrix(4.579965,0,0,-4.579965,397.87238,588.54693)"
															id="g3464">
															<path id="path3466"
																style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																d="m 0,0 c 0,1.896 -1.258,2.973 -3.039,2.973 l -1.09,0 0,-5.948 1.059,0 C -1.414,-2.975 0,-2.075 0,0 M 19.389,-2.14 11.359,-8.463 4.02,-2.685 C 2.961,-5.229 0.402,-6.996 -2.545,-6.996 l -6.281,0 0,13.992 6.281,0 c 3.293,0 5.666,-2.094 6.563,-4.325 l 7.341,5.772 2.719,-2.14 -6.728,-5.288 1.293,-1.012 6.726,5.285 2.723,-2.134 -6.727,-5.294 1.291,-1.014 6.733,5.295 0,4.855 4.881,0 0,-9.908 4.869,0 0,-4.101 -9.75,0 0,4.873 z m 15.933,-0.774 4.867,0 0,-4.099 -9.753,0 0,14.009 4.886,0 0,-9.91 z" />
														</g>
													</g>
												</svg>

											</div>
											<ul class="populer-server-detail-box-list">
												<li>Server: 822B DELL/HP</li>
												<li>HDD - 1x 250GB HDD NoRaid</li>
												<li>RAM - 8GB RAM</li>
												<li>PORT - 1Gbps</li>
												<li>LOCATION - TX, Dallas TIER-III</li>
											</ul>
											<button class="btn btn-green">Order (Instant)
												<svg xmlns="http://www.w3.org/2000/svg" width="11.684"
													height="11.899" viewBox="0 0 11.684 11.899">
													<g id="right" transform="translate(0.4 0.4)">
														<g id="Group_1053" data-name="Group 1053">
															<path id="Path_6081" data-name="Path 6081"
																d="M17.446,90.637l-5.2-5.2a.347.347,0,0,0-.49.49l4.611,4.611-9.353-.1-.268.126-.079.221c0,.192.347.347.347.347l9.353.1L11.753,95.84a.347.347,0,1,0,.49.49l5.2-5.2A.347.347,0,0,0,17.446,90.637Z"
																transform="translate(-6.664 -85.333)" fill="#fff"
																stroke="#fff" stroke-width="0.8" />
														</g>
													</g>
												</svg>
											</button>
										</div>
									</div>
									<div class="col-lg-6 col-12 mt-2">
										<div class="populer-server-detail-box">
											<div class="populer-server-detail-box-title">
												<h5>Intel Xeon 4/8 Core</h5>
												<p>4x 2.20GHz</p>
											</div>
											<div class="populer-server-detail-box-icon">
												<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
													xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													width="433.701px" height="433.701px"
													viewBox="0 0 433.701 433.701"
													enable-background="new 0 0 433.701 433.701"
													xml:space="preserve">
													<path fill="#4987CE" d="M216.85,432.851c-2.147,0-4.285-0.039-6.419-0.101l44.143-121.318h60.75
c10.663,0,22.368-8.197,26.015-18.212l47.892-131.546c7.835-21.537-4.501-39.157-27.418-39.157h-84.279l-70.715,194.316h-0.026
l-40.089,110.153C71.594,404.375,0.85,318.878,0.85,216.851c0-99.086,66.721-182.58,157.683-208.027l-41.365,113.693h-0.012
L48.389,311.432l45.778,0.004l58.481-160.531h34.404l-58.481,160.531l45.761,0.008l54.498-149.77
c7.84-21.537-4.497-39.157-27.393-39.157h-38.481l44.186-121.44c3.221-0.143,6.454-0.227,9.708-0.227
c119.294,0,216,96.706,216,216.001C432.85,336.143,336.144,432.851,216.85,432.851z M347.542,150.79h-34.395l-48.167,132.158h34.396
L347.542,150.79z" />
												</svg>
												<svg xmlns:dc="http://purl.org/dc/elements/1.1/"
													xmlns:cc="http://creativecommons.org/ns#"
													xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
													xmlns:svg="http://www.w3.org/2000/svg"
													xmlns="http://www.w3.org/2000/svg" version="1.1" id="svg3794"
													viewBox="0 0 300 300" height="300" width="300">
													<defs id="defs3796" />
													<g transform="translate(-318.33375,-439.74274)" id="layer1">
														<g transform="matrix(4.579965,0,0,-4.579965,468.34291,456.8459)"
															id="g3460">
															<path id="path3462"
																style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																d="m 0,0 c -8.01,0 -15.264,-3.249 -20.516,-8.505 -5.254,-5.244 -8.501,-12.502 -8.501,-20.516 0,-8.008 3.247,-15.261 8.501,-20.507 5.252,-5.249 12.506,-8.504 20.516,-8.504 8.012,0 15.27,3.255 20.514,8.504 5.252,5.246 8.492,12.499 8.492,20.507 0,8.014 -3.24,15.272 -8.492,20.516 C 15.27,-3.249 8.012,0 0,0 m 0,3.516 c 17.965,0 32.531,-14.568 32.531,-32.537 0,-17.963 -14.566,-32.529 -32.531,-32.529 -17.963,0 -32.535,14.566 -32.535,32.529 0,17.969 14.572,32.537 32.535,32.537" />
														</g>
														<g transform="matrix(4.579965,0,0,-4.579965,397.87238,588.54693)"
															id="g3464">
															<path id="path3466"
																style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																d="m 0,0 c 0,1.896 -1.258,2.973 -3.039,2.973 l -1.09,0 0,-5.948 1.059,0 C -1.414,-2.975 0,-2.075 0,0 M 19.389,-2.14 11.359,-8.463 4.02,-2.685 C 2.961,-5.229 0.402,-6.996 -2.545,-6.996 l -6.281,0 0,13.992 6.281,0 c 3.293,0 5.666,-2.094 6.563,-4.325 l 7.341,5.772 2.719,-2.14 -6.728,-5.288 1.293,-1.012 6.726,5.285 2.723,-2.134 -6.727,-5.294 1.291,-1.014 6.733,5.295 0,4.855 4.881,0 0,-9.908 4.869,0 0,-4.101 -9.75,0 0,4.873 z m 15.933,-0.774 4.867,0 0,-4.099 -9.753,0 0,14.009 4.886,0 0,-9.91 z" />
														</g>
													</g>
												</svg>

											</div>
											<ul class="populer-server-detail-box-list">
												<li>Server: 822B DELL/HP</li>
												<li>HDD - 1x 250GB HDD NoRaid</li>
												<li>RAM - 8GB RAM</li>
												<li>PORT - 1Gbps</li>
												<li>LOCATION - TX, Dallas TIER-III</li>
											</ul>
											<button class="btn btn-green">Order (Instant)
												<svg xmlns="http://www.w3.org/2000/svg" width="11.684"
													height="11.899" viewBox="0 0 11.684 11.899">
													<g id="right" transform="translate(0.4 0.4)">
														<g id="Group_1053" data-name="Group 1053">
															<path id="Path_6081" data-name="Path 6081"
																d="M17.446,90.637l-5.2-5.2a.347.347,0,0,0-.49.49l4.611,4.611-9.353-.1-.268.126-.079.221c0,.192.347.347.347.347l9.353.1L11.753,95.84a.347.347,0,1,0,.49.49l5.2-5.2A.347.347,0,0,0,17.446,90.637Z"
																transform="translate(-6.664 -85.333)" fill="#fff"
																stroke="#fff" stroke-width="0.8" />
														</g>
													</g>
												</svg>
											</button>
										</div>
									</div>
								</div>
								<button class="btn btn-black-border mt-2">LOADING MORE</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Content End-->
	<!--Content (4)-->
	<section class="section fix-height-container first-fix-container with-page-header">
		<div class="content-wrapper">
			<div class="content-text-wrapper">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-12 ">
							<div class="server-detail-tab-wrapper row">
								<div class="container">
									<div class="row">
										<ul class="nav nav-tabs">
											<li class="active tab-primary"><a data-toggle="tab"
													href="#viewBudgetServer">View Budget Server</a>
											</li>
											<li class="tab-secondary "><a data-toggle="tab"
													href="#viewProServer">View Pro Server</a></li>
											<li class="tab-green"><a data-toggle="tab"
													href="#viewEnterpriseServer">View Enterprise Server</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="tab-content server-detail-tab-content-wrapper">
								<div id="viewBudgetServer" class="tab-pane active">
									<div class="row">
										<div class="container-fluid">
											<div class="row">
												<div class="col-12">
													<div class="table-responsive">
														<table class="table table-bordered">
															<thead>
																<tr>
																	<th>MODEL</th>
																	<th>CPU</th>
																	<th>RAM</th>
																	<th>RAID</th>
																	<th>HDD</th>
																	<th>LOCATION</th>
																	<th>PORT</th>
																	<th>PRICE</th>
																	<th>AVAILABLE</th>
																	<th></th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td><svg version="1.1" id="Layer_1"
																			xmlns="http://www.w3.org/2000/svg"
																			xmlns:xlink="http://www.w3.org/1999/xlink"
																			x="0px" y="0px" width="433.701px"
																			height="433.701px"
																			viewBox="0 0 433.701 433.701"
																			enable-background="new 0 0 433.701 433.701"
																			xml:space="preserve">
																			<path fill="#4987CE" d="M216.85,432.851c-2.147,0-4.285-0.039-6.419-0.101l44.143-121.318h60.75
			c10.663,0,22.368-8.197,26.015-18.212l47.892-131.546c7.835-21.537-4.501-39.157-27.418-39.157h-84.279l-70.715,194.316h-0.026
			l-40.089,110.153C71.594,404.375,0.85,318.878,0.85,216.851c0-99.086,66.721-182.58,157.683-208.027l-41.365,113.693h-0.012
			L48.389,311.432l45.778,0.004l58.481-160.531h34.404l-58.481,160.531l45.761,0.008l54.498-149.77
			c7.84-21.537-4.497-39.157-27.393-39.157h-38.481l44.186-121.44c3.221-0.143,6.454-0.227,9.708-0.227
			c119.294,0,216,96.706,216,216.001C432.85,336.143,336.144,432.851,216.85,432.851z M347.542,150.79h-34.395l-48.167,132.158h34.396
			L347.542,150.79z" />
																		</svg>
																		<svg xmlns:dc="http://purl.org/dc/elements/1.1/"
																			xmlns:cc="http://creativecommons.org/ns#"
																			xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
																			xmlns:svg="http://www.w3.org/2000/svg"
																			xmlns="http://www.w3.org/2000/svg"
																			version="1.1" id="svg3794"
																			viewBox="0 0 300 300" height="300"
																			width="300">
																			<defs id="defs3796" />
																			<g transform="translate(-318.33375,-439.74274)"
																				id="layer1">
																				<g transform="matrix(4.579965,0,0,-4.579965,468.34291,456.8459)"
																					id="g3460">
																					<path id="path3462"
																						style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																						d="m 0,0 c -8.01,0 -15.264,-3.249 -20.516,-8.505 -5.254,-5.244 -8.501,-12.502 -8.501,-20.516 0,-8.008 3.247,-15.261 8.501,-20.507 5.252,-5.249 12.506,-8.504 20.516,-8.504 8.012,0 15.27,3.255 20.514,8.504 5.252,5.246 8.492,12.499 8.492,20.507 0,8.014 -3.24,15.272 -8.492,20.516 C 15.27,-3.249 8.012,0 0,0 m 0,3.516 c 17.965,0 32.531,-14.568 32.531,-32.537 0,-17.963 -14.566,-32.529 -32.531,-32.529 -17.963,0 -32.535,14.566 -32.535,32.529 0,17.969 14.572,32.537 32.535,32.537" />
																				</g>
																				<g transform="matrix(4.579965,0,0,-4.579965,397.87238,588.54693)"
																					id="g3464">
																					<path id="path3466"
																						style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																						d="m 0,0 c 0,1.896 -1.258,2.973 -3.039,2.973 l -1.09,0 0,-5.948 1.059,0 C -1.414,-2.975 0,-2.075 0,0 M 19.389,-2.14 11.359,-8.463 4.02,-2.685 C 2.961,-5.229 0.402,-6.996 -2.545,-6.996 l -6.281,0 0,13.992 6.281,0 c 3.293,0 5.666,-2.094 6.563,-4.325 l 7.341,5.772 2.719,-2.14 -6.728,-5.288 1.293,-1.012 6.726,5.285 2.723,-2.134 -6.727,-5.294 1.291,-1.014 6.733,5.295 0,4.855 4.881,0 0,-9.908 4.869,0 0,-4.101 -9.75,0 0,4.873 z m 15.933,-0.774 4.867,0 0,-4.099 -9.753,0 0,14.009 4.886,0 0,-9.91 z" />
																				</g>
																			</g>
																		</svg>
																		<p>811B</p>
																	</td>
																	<td>
																		<p>Intel Xeon 4/8 Core</p>
																		<p class="text-orange">4x 2.20GHz</p>
																	</td>
																	<td>
																		<p>8GB</p>
																		<p class="text-orange">RAM</p>
																	</td>
																	<td>
																		<p>YES</p>
																		<p class="text-orange">(512mb)</p>
																	</td>
																	<td>
																		<p>1x 250GB HDD</p>
																	</td>
																	<td>
																		<p>TX, Dallas</p>
																	</td>
																	<td>
																		<p>1Gbps</p>
																	</td>
																	<td>
																		<p class="table-price-text text-orange">
																			$90.00
																			<span>$102.00</span>
																		</p>
																	</td>
																	<td>
																		<p class="text-orange">Instant</p>
																	</td>
																	<td> <button class="btn btn-primary">Configure
																			<svg xmlns="http://www.w3.org/2000/svg"
																				width="11.684" height="11.899"
																				viewBox="0 0 11.684 11.899">
																				<g id="right"
																					transform="translate(0.4 0.4)">
																					<g id="Group_1053"
																						data-name="Group 1053">
																						<path id="Path_6081"
																							data-name="Path 6081"
																							d="M17.446,90.637l-5.2-5.2a.347.347,0,0,0-.49.49l4.611,4.611-9.353-.1-.268.126-.079.221c0,.192.347.347.347.347l9.353.1L11.753,95.84a.347.347,0,1,0,.49.49l5.2-5.2A.347.347,0,0,0,17.446,90.637Z"
																							transform="translate(-6.664 -85.333)"
																							fill="#fff"
																							stroke="#fff"
																							stroke-width="0.8" />
																					</g>
																				</g>
																			</svg>
																		</button> </td>

																</tr>
																<tr>
																	<td><svg version="1.1" id="Layer_1"
																			xmlns="http://www.w3.org/2000/svg"
																			xmlns:xlink="http://www.w3.org/1999/xlink"
																			x="0px" y="0px" width="433.701px"
																			height="433.701px"
																			viewBox="0 0 433.701 433.701"
																			enable-background="new 0 0 433.701 433.701"
																			xml:space="preserve">
																			<path fill="#4987CE" d="M216.85,432.851c-2.147,0-4.285-0.039-6.419-0.101l44.143-121.318h60.75
			c10.663,0,22.368-8.197,26.015-18.212l47.892-131.546c7.835-21.537-4.501-39.157-27.418-39.157h-84.279l-70.715,194.316h-0.026
			l-40.089,110.153C71.594,404.375,0.85,318.878,0.85,216.851c0-99.086,66.721-182.58,157.683-208.027l-41.365,113.693h-0.012
			L48.389,311.432l45.778,0.004l58.481-160.531h34.404l-58.481,160.531l45.761,0.008l54.498-149.77
			c7.84-21.537-4.497-39.157-27.393-39.157h-38.481l44.186-121.44c3.221-0.143,6.454-0.227,9.708-0.227
			c119.294,0,216,96.706,216,216.001C432.85,336.143,336.144,432.851,216.85,432.851z M347.542,150.79h-34.395l-48.167,132.158h34.396
			L347.542,150.79z" />
																		</svg>
																		<svg xmlns:dc="http://purl.org/dc/elements/1.1/"
																			xmlns:cc="http://creativecommons.org/ns#"
																			xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
																			xmlns:svg="http://www.w3.org/2000/svg"
																			xmlns="http://www.w3.org/2000/svg"
																			version="1.1" id="svg3794"
																			viewBox="0 0 300 300" height="300"
																			width="300">
																			<defs id="defs3796" />
																			<g transform="translate(-318.33375,-439.74274)"
																				id="layer1">
																				<g transform="matrix(4.579965,0,0,-4.579965,468.34291,456.8459)"
																					id="g3460">
																					<path id="path3462"
																						style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																						d="m 0,0 c -8.01,0 -15.264,-3.249 -20.516,-8.505 -5.254,-5.244 -8.501,-12.502 -8.501,-20.516 0,-8.008 3.247,-15.261 8.501,-20.507 5.252,-5.249 12.506,-8.504 20.516,-8.504 8.012,0 15.27,3.255 20.514,8.504 5.252,5.246 8.492,12.499 8.492,20.507 0,8.014 -3.24,15.272 -8.492,20.516 C 15.27,-3.249 8.012,0 0,0 m 0,3.516 c 17.965,0 32.531,-14.568 32.531,-32.537 0,-17.963 -14.566,-32.529 -32.531,-32.529 -17.963,0 -32.535,14.566 -32.535,32.529 0,17.969 14.572,32.537 32.535,32.537" />
																				</g>
																				<g transform="matrix(4.579965,0,0,-4.579965,397.87238,588.54693)"
																					id="g3464">
																					<path id="path3466"
																						style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																						d="m 0,0 c 0,1.896 -1.258,2.973 -3.039,2.973 l -1.09,0 0,-5.948 1.059,0 C -1.414,-2.975 0,-2.075 0,0 M 19.389,-2.14 11.359,-8.463 4.02,-2.685 C 2.961,-5.229 0.402,-6.996 -2.545,-6.996 l -6.281,0 0,13.992 6.281,0 c 3.293,0 5.666,-2.094 6.563,-4.325 l 7.341,5.772 2.719,-2.14 -6.728,-5.288 1.293,-1.012 6.726,5.285 2.723,-2.134 -6.727,-5.294 1.291,-1.014 6.733,5.295 0,4.855 4.881,0 0,-9.908 4.869,0 0,-4.101 -9.75,0 0,4.873 z m 15.933,-0.774 4.867,0 0,-4.099 -9.753,0 0,14.009 4.886,0 0,-9.91 z" />
																				</g>
																			</g>
																		</svg>
																		<p>811B</p>
																	</td>
																	<td>
																		<p>Intel Xeon 4/8 Core</p>
																		<p class="text-orange">4x 2.20GHz</p>
																	</td>
																	<td>
																		<p>8GB</p>
																		<p class="text-orange">RAM</p>
																	</td>
																	<td>
																		<p>YES</p>
																		<p class="text-orange">(512mb)</p>
																	</td>
																	<td>
																		<p>1x 250GB HDD</p>
																	</td>
																	<td>
																		<p>TX, Dallas</p>
																	</td>
																	<td>
																		<p>1Gbps</p>
																	</td>
																	<td>
																		<p class="table-price-text text-orange">
																			$90.00
																			<span>$102.00</span>
																		</p>
																	</td>
																	<td>
																		<p class="text-orange">Instant</p>
																	</td>
																	<td> <button class="btn btn-primary">Configure
																			<svg xmlns="http://www.w3.org/2000/svg"
																				width="11.684" height="11.899"
																				viewBox="0 0 11.684 11.899">
																				<g id="right"
																					transform="translate(0.4 0.4)">
																					<g id="Group_1053"
																						data-name="Group 1053">
																						<path id="Path_6081"
																							data-name="Path 6081"
																							d="M17.446,90.637l-5.2-5.2a.347.347,0,0,0-.49.49l4.611,4.611-9.353-.1-.268.126-.079.221c0,.192.347.347.347.347l9.353.1L11.753,95.84a.347.347,0,1,0,.49.49l5.2-5.2A.347.347,0,0,0,17.446,90.637Z"
																							transform="translate(-6.664 -85.333)"
																							fill="#fff"
																							stroke="#fff"
																							stroke-width="0.8" />
																					</g>
																				</g>
																			</svg>
																		</button> </td>

																</tr>
																<tr>
																	<td><svg version="1.1" id="Layer_1"
																			xmlns="http://www.w3.org/2000/svg"
																			xmlns:xlink="http://www.w3.org/1999/xlink"
																			x="0px" y="0px" width="433.701px"
																			height="433.701px"
																			viewBox="0 0 433.701 433.701"
																			enable-background="new 0 0 433.701 433.701"
																			xml:space="preserve">
																			<path fill="#4987CE" d="M216.85,432.851c-2.147,0-4.285-0.039-6.419-0.101l44.143-121.318h60.75
			c10.663,0,22.368-8.197,26.015-18.212l47.892-131.546c7.835-21.537-4.501-39.157-27.418-39.157h-84.279l-70.715,194.316h-0.026
			l-40.089,110.153C71.594,404.375,0.85,318.878,0.85,216.851c0-99.086,66.721-182.58,157.683-208.027l-41.365,113.693h-0.012
			L48.389,311.432l45.778,0.004l58.481-160.531h34.404l-58.481,160.531l45.761,0.008l54.498-149.77
			c7.84-21.537-4.497-39.157-27.393-39.157h-38.481l44.186-121.44c3.221-0.143,6.454-0.227,9.708-0.227
			c119.294,0,216,96.706,216,216.001C432.85,336.143,336.144,432.851,216.85,432.851z M347.542,150.79h-34.395l-48.167,132.158h34.396
			L347.542,150.79z" />
																		</svg>
																		<svg xmlns:dc="http://purl.org/dc/elements/1.1/"
																			xmlns:cc="http://creativecommons.org/ns#"
																			xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
																			xmlns:svg="http://www.w3.org/2000/svg"
																			xmlns="http://www.w3.org/2000/svg"
																			version="1.1" id="svg3794"
																			viewBox="0 0 300 300" height="300"
																			width="300">
																			<defs id="defs3796" />
																			<g transform="translate(-318.33375,-439.74274)"
																				id="layer1">
																				<g transform="matrix(4.579965,0,0,-4.579965,468.34291,456.8459)"
																					id="g3460">
																					<path id="path3462"
																						style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																						d="m 0,0 c -8.01,0 -15.264,-3.249 -20.516,-8.505 -5.254,-5.244 -8.501,-12.502 -8.501,-20.516 0,-8.008 3.247,-15.261 8.501,-20.507 5.252,-5.249 12.506,-8.504 20.516,-8.504 8.012,0 15.27,3.255 20.514,8.504 5.252,5.246 8.492,12.499 8.492,20.507 0,8.014 -3.24,15.272 -8.492,20.516 C 15.27,-3.249 8.012,0 0,0 m 0,3.516 c 17.965,0 32.531,-14.568 32.531,-32.537 0,-17.963 -14.566,-32.529 -32.531,-32.529 -17.963,0 -32.535,14.566 -32.535,32.529 0,17.969 14.572,32.537 32.535,32.537" />
																				</g>
																				<g transform="matrix(4.579965,0,0,-4.579965,397.87238,588.54693)"
																					id="g3464">
																					<path id="path3466"
																						style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																						d="m 0,0 c 0,1.896 -1.258,2.973 -3.039,2.973 l -1.09,0 0,-5.948 1.059,0 C -1.414,-2.975 0,-2.075 0,0 M 19.389,-2.14 11.359,-8.463 4.02,-2.685 C 2.961,-5.229 0.402,-6.996 -2.545,-6.996 l -6.281,0 0,13.992 6.281,0 c 3.293,0 5.666,-2.094 6.563,-4.325 l 7.341,5.772 2.719,-2.14 -6.728,-5.288 1.293,-1.012 6.726,5.285 2.723,-2.134 -6.727,-5.294 1.291,-1.014 6.733,5.295 0,4.855 4.881,0 0,-9.908 4.869,0 0,-4.101 -9.75,0 0,4.873 z m 15.933,-0.774 4.867,0 0,-4.099 -9.753,0 0,14.009 4.886,0 0,-9.91 z" />
																				</g>
																			</g>
																		</svg>
																		<p>811B</p>
																	</td>
																	<td>
																		<p>Intel Xeon 4/8 Core</p>
																		<p class="text-orange">4x 2.20GHz</p>
																	</td>
																	<td>
																		<p>8GB</p>
																		<p class="text-orange">RAM</p>
																	</td>
																	<td>
																		<p>YES</p>
																		<p class="text-orange">(512mb)</p>
																	</td>
																	<td>
																		<p>1x 250GB HDD</p>
																	</td>
																	<td>
																		<p>TX, Dallas</p>
																	</td>
																	<td>
																		<p>1Gbps</p>
																	</td>
																	<td>
																		<p class="table-price-text text-orange">
																			$90.00
																			<span>$102.00</span>
																		</p>
																	</td>
																	<td>
																		<p class="text-orange">Instant</p>
																	</td>
																	<td> <button class="btn btn-primary">Configure
																			<svg xmlns="http://www.w3.org/2000/svg"
																				width="11.684" height="11.899"
																				viewBox="0 0 11.684 11.899">
																				<g id="right"
																					transform="translate(0.4 0.4)">
																					<g id="Group_1053"
																						data-name="Group 1053">
																						<path id="Path_6081"
																							data-name="Path 6081"
																							d="M17.446,90.637l-5.2-5.2a.347.347,0,0,0-.49.49l4.611,4.611-9.353-.1-.268.126-.079.221c0,.192.347.347.347.347l9.353.1L11.753,95.84a.347.347,0,1,0,.49.49l5.2-5.2A.347.347,0,0,0,17.446,90.637Z"
																							transform="translate(-6.664 -85.333)"
																							fill="#fff"
																							stroke="#fff"
																							stroke-width="0.8" />
																					</g>
																				</g>
																			</svg>
																		</button> </td>

																</tr>
																<tr>
																	<td><svg version="1.1" id="Layer_1"
																			xmlns="http://www.w3.org/2000/svg"
																			xmlns:xlink="http://www.w3.org/1999/xlink"
																			x="0px" y="0px" width="433.701px"
																			height="433.701px"
																			viewBox="0 0 433.701 433.701"
																			enable-background="new 0 0 433.701 433.701"
																			xml:space="preserve">
																			<path fill="#4987CE" d="M216.85,432.851c-2.147,0-4.285-0.039-6.419-0.101l44.143-121.318h60.75
			c10.663,0,22.368-8.197,26.015-18.212l47.892-131.546c7.835-21.537-4.501-39.157-27.418-39.157h-84.279l-70.715,194.316h-0.026
			l-40.089,110.153C71.594,404.375,0.85,318.878,0.85,216.851c0-99.086,66.721-182.58,157.683-208.027l-41.365,113.693h-0.012
			L48.389,311.432l45.778,0.004l58.481-160.531h34.404l-58.481,160.531l45.761,0.008l54.498-149.77
			c7.84-21.537-4.497-39.157-27.393-39.157h-38.481l44.186-121.44c3.221-0.143,6.454-0.227,9.708-0.227
			c119.294,0,216,96.706,216,216.001C432.85,336.143,336.144,432.851,216.85,432.851z M347.542,150.79h-34.395l-48.167,132.158h34.396
			L347.542,150.79z" />
																		</svg>
																		<svg xmlns:dc="http://purl.org/dc/elements/1.1/"
																			xmlns:cc="http://creativecommons.org/ns#"
																			xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
																			xmlns:svg="http://www.w3.org/2000/svg"
																			xmlns="http://www.w3.org/2000/svg"
																			version="1.1" id="svg3794"
																			viewBox="0 0 300 300" height="300"
																			width="300">
																			<defs id="defs3796" />
																			<g transform="translate(-318.33375,-439.74274)"
																				id="layer1">
																				<g transform="matrix(4.579965,0,0,-4.579965,468.34291,456.8459)"
																					id="g3460">
																					<path id="path3462"
																						style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																						d="m 0,0 c -8.01,0 -15.264,-3.249 -20.516,-8.505 -5.254,-5.244 -8.501,-12.502 -8.501,-20.516 0,-8.008 3.247,-15.261 8.501,-20.507 5.252,-5.249 12.506,-8.504 20.516,-8.504 8.012,0 15.27,3.255 20.514,8.504 5.252,5.246 8.492,12.499 8.492,20.507 0,8.014 -3.24,15.272 -8.492,20.516 C 15.27,-3.249 8.012,0 0,0 m 0,3.516 c 17.965,0 32.531,-14.568 32.531,-32.537 0,-17.963 -14.566,-32.529 -32.531,-32.529 -17.963,0 -32.535,14.566 -32.535,32.529 0,17.969 14.572,32.537 32.535,32.537" />
																				</g>
																				<g transform="matrix(4.579965,0,0,-4.579965,397.87238,588.54693)"
																					id="g3464">
																					<path id="path3466"
																						style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																						d="m 0,0 c 0,1.896 -1.258,2.973 -3.039,2.973 l -1.09,0 0,-5.948 1.059,0 C -1.414,-2.975 0,-2.075 0,0 M 19.389,-2.14 11.359,-8.463 4.02,-2.685 C 2.961,-5.229 0.402,-6.996 -2.545,-6.996 l -6.281,0 0,13.992 6.281,0 c 3.293,0 5.666,-2.094 6.563,-4.325 l 7.341,5.772 2.719,-2.14 -6.728,-5.288 1.293,-1.012 6.726,5.285 2.723,-2.134 -6.727,-5.294 1.291,-1.014 6.733,5.295 0,4.855 4.881,0 0,-9.908 4.869,0 0,-4.101 -9.75,0 0,4.873 z m 15.933,-0.774 4.867,0 0,-4.099 -9.753,0 0,14.009 4.886,0 0,-9.91 z" />
																				</g>
																			</g>
																		</svg>
																		<p>811B</p>
																	</td>
																	<td>
																		<p>Intel Xeon 4/8 Core</p>
																		<p class="text-orange">4x 2.20GHz</p>
																	</td>
																	<td>
																		<p>8GB</p>
																		<p class="text-orange">RAM</p>
																	</td>
																	<td>
																		<p>YES</p>
																		<p class="text-orange">(512mb)</p>
																	</td>
																	<td>
																		<p>1x 250GB HDD</p>
																	</td>
																	<td>
																		<p>TX, Dallas</p>
																	</td>
																	<td>
																		<p>1Gbps</p>
																	</td>
																	<td>
																		<p class="table-price-text text-orange">
																			$90.00
																			<span>$102.00</span>
																		</p>
																	</td>
																	<td>
																		<p class="text-orange">Instant</p>
																	</td>
																	<td> <button class="btn btn-primary">Configure
																			<svg xmlns="http://www.w3.org/2000/svg"
																				width="11.684" height="11.899"
																				viewBox="0 0 11.684 11.899">
																				<g id="right"
																					transform="translate(0.4 0.4)">
																					<g id="Group_1053"
																						data-name="Group 1053">
																						<path id="Path_6081"
																							data-name="Path 6081"
																							d="M17.446,90.637l-5.2-5.2a.347.347,0,0,0-.49.49l4.611,4.611-9.353-.1-.268.126-.079.221c0,.192.347.347.347.347l9.353.1L11.753,95.84a.347.347,0,1,0,.49.49l5.2-5.2A.347.347,0,0,0,17.446,90.637Z"
																							transform="translate(-6.664 -85.333)"
																							fill="#fff"
																							stroke="#fff"
																							stroke-width="0.8" />
																					</g>
																				</g>
																			</svg>
																		</button> </td>

																</tr>
																<tr>
																	<td><svg version="1.1" id="Layer_1"
																			xmlns="http://www.w3.org/2000/svg"
																			xmlns:xlink="http://www.w3.org/1999/xlink"
																			x="0px" y="0px" width="433.701px"
																			height="433.701px"
																			viewBox="0 0 433.701 433.701"
																			enable-background="new 0 0 433.701 433.701"
																			xml:space="preserve">
																			<path fill="#4987CE" d="M216.85,432.851c-2.147,0-4.285-0.039-6.419-0.101l44.143-121.318h60.75
			c10.663,0,22.368-8.197,26.015-18.212l47.892-131.546c7.835-21.537-4.501-39.157-27.418-39.157h-84.279l-70.715,194.316h-0.026
			l-40.089,110.153C71.594,404.375,0.85,318.878,0.85,216.851c0-99.086,66.721-182.58,157.683-208.027l-41.365,113.693h-0.012
			L48.389,311.432l45.778,0.004l58.481-160.531h34.404l-58.481,160.531l45.761,0.008l54.498-149.77
			c7.84-21.537-4.497-39.157-27.393-39.157h-38.481l44.186-121.44c3.221-0.143,6.454-0.227,9.708-0.227
			c119.294,0,216,96.706,216,216.001C432.85,336.143,336.144,432.851,216.85,432.851z M347.542,150.79h-34.395l-48.167,132.158h34.396
			L347.542,150.79z" />
																		</svg>
																		<svg xmlns:dc="http://purl.org/dc/elements/1.1/"
																			xmlns:cc="http://creativecommons.org/ns#"
																			xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
																			xmlns:svg="http://www.w3.org/2000/svg"
																			xmlns="http://www.w3.org/2000/svg"
																			version="1.1" id="svg3794"
																			viewBox="0 0 300 300" height="300"
																			width="300">
																			<defs id="defs3796" />
																			<g transform="translate(-318.33375,-439.74274)"
																				id="layer1">
																				<g transform="matrix(4.579965,0,0,-4.579965,468.34291,456.8459)"
																					id="g3460">
																					<path id="path3462"
																						style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																						d="m 0,0 c -8.01,0 -15.264,-3.249 -20.516,-8.505 -5.254,-5.244 -8.501,-12.502 -8.501,-20.516 0,-8.008 3.247,-15.261 8.501,-20.507 5.252,-5.249 12.506,-8.504 20.516,-8.504 8.012,0 15.27,3.255 20.514,8.504 5.252,5.246 8.492,12.499 8.492,20.507 0,8.014 -3.24,15.272 -8.492,20.516 C 15.27,-3.249 8.012,0 0,0 m 0,3.516 c 17.965,0 32.531,-14.568 32.531,-32.537 0,-17.963 -14.566,-32.529 -32.531,-32.529 -17.963,0 -32.535,14.566 -32.535,32.529 0,17.969 14.572,32.537 32.535,32.537" />
																				</g>
																				<g transform="matrix(4.579965,0,0,-4.579965,397.87238,588.54693)"
																					id="g3464">
																					<path id="path3466"
																						style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																						d="m 0,0 c 0,1.896 -1.258,2.973 -3.039,2.973 l -1.09,0 0,-5.948 1.059,0 C -1.414,-2.975 0,-2.075 0,0 M 19.389,-2.14 11.359,-8.463 4.02,-2.685 C 2.961,-5.229 0.402,-6.996 -2.545,-6.996 l -6.281,0 0,13.992 6.281,0 c 3.293,0 5.666,-2.094 6.563,-4.325 l 7.341,5.772 2.719,-2.14 -6.728,-5.288 1.293,-1.012 6.726,5.285 2.723,-2.134 -6.727,-5.294 1.291,-1.014 6.733,5.295 0,4.855 4.881,0 0,-9.908 4.869,0 0,-4.101 -9.75,0 0,4.873 z m 15.933,-0.774 4.867,0 0,-4.099 -9.753,0 0,14.009 4.886,0 0,-9.91 z" />
																				</g>
																			</g>
																		</svg>
																		<p>811B</p>
																	</td>
																	<td>
																		<p>Intel Xeon 4/8 Core</p>
																		<p class="text-orange">4x 2.20GHz</p>
																	</td>
																	<td>
																		<p>8GB</p>
																		<p class="text-orange">RAM</p>
																	</td>
																	<td>
																		<p>YES</p>
																		<p class="text-orange">(512mb)</p>
																	</td>
																	<td>
																		<p>1x 250GB HDD</p>
																	</td>
																	<td>
																		<p>TX, Dallas</p>
																	</td>
																	<td>
																		<p>1Gbps</p>
																	</td>
																	<td>
																		<p class="table-price-text text-orange">
																			$90.00
																			<span>$102.00</span>
																		</p>
																	</td>
																	<td>
																		<p class="text-orange">Instant</p>
																	</td>
																	<td> <button class="btn btn-primary">Configure
																			<svg xmlns="http://www.w3.org/2000/svg"
																				width="11.684" height="11.899"
																				viewBox="0 0 11.684 11.899">
																				<g id="right"
																					transform="translate(0.4 0.4)">
																					<g id="Group_1053"
																						data-name="Group 1053">
																						<path id="Path_6081"
																							data-name="Path 6081"
																							d="M17.446,90.637l-5.2-5.2a.347.347,0,0,0-.49.49l4.611,4.611-9.353-.1-.268.126-.079.221c0,.192.347.347.347.347l9.353.1L11.753,95.84a.347.347,0,1,0,.49.49l5.2-5.2A.347.347,0,0,0,17.446,90.637Z"
																							transform="translate(-6.664 -85.333)"
																							fill="#fff"
																							stroke="#fff"
																							stroke-width="0.8" />
																					</g>
																				</g>
																			</svg>
																		</button> </td>

																</tr>
																<tr>
																	<td><svg version="1.1" id="Layer_1"
																			xmlns="http://www.w3.org/2000/svg"
																			xmlns:xlink="http://www.w3.org/1999/xlink"
																			x="0px" y="0px" width="433.701px"
																			height="433.701px"
																			viewBox="0 0 433.701 433.701"
																			enable-background="new 0 0 433.701 433.701"
																			xml:space="preserve">
																			<path fill="#4987CE" d="M216.85,432.851c-2.147,0-4.285-0.039-6.419-0.101l44.143-121.318h60.75
			c10.663,0,22.368-8.197,26.015-18.212l47.892-131.546c7.835-21.537-4.501-39.157-27.418-39.157h-84.279l-70.715,194.316h-0.026
			l-40.089,110.153C71.594,404.375,0.85,318.878,0.85,216.851c0-99.086,66.721-182.58,157.683-208.027l-41.365,113.693h-0.012
			L48.389,311.432l45.778,0.004l58.481-160.531h34.404l-58.481,160.531l45.761,0.008l54.498-149.77
			c7.84-21.537-4.497-39.157-27.393-39.157h-38.481l44.186-121.44c3.221-0.143,6.454-0.227,9.708-0.227
			c119.294,0,216,96.706,216,216.001C432.85,336.143,336.144,432.851,216.85,432.851z M347.542,150.79h-34.395l-48.167,132.158h34.396
			L347.542,150.79z" />
																		</svg>
																		<svg xmlns:dc="http://purl.org/dc/elements/1.1/"
																			xmlns:cc="http://creativecommons.org/ns#"
																			xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
																			xmlns:svg="http://www.w3.org/2000/svg"
																			xmlns="http://www.w3.org/2000/svg"
																			version="1.1" id="svg3794"
																			viewBox="0 0 300 300" height="300"
																			width="300">
																			<defs id="defs3796" />
																			<g transform="translate(-318.33375,-439.74274)"
																				id="layer1">
																				<g transform="matrix(4.579965,0,0,-4.579965,468.34291,456.8459)"
																					id="g3460">
																					<path id="path3462"
																						style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																						d="m 0,0 c -8.01,0 -15.264,-3.249 -20.516,-8.505 -5.254,-5.244 -8.501,-12.502 -8.501,-20.516 0,-8.008 3.247,-15.261 8.501,-20.507 5.252,-5.249 12.506,-8.504 20.516,-8.504 8.012,0 15.27,3.255 20.514,8.504 5.252,5.246 8.492,12.499 8.492,20.507 0,8.014 -3.24,15.272 -8.492,20.516 C 15.27,-3.249 8.012,0 0,0 m 0,3.516 c 17.965,0 32.531,-14.568 32.531,-32.537 0,-17.963 -14.566,-32.529 -32.531,-32.529 -17.963,0 -32.535,14.566 -32.535,32.529 0,17.969 14.572,32.537 32.535,32.537" />
																				</g>
																				<g transform="matrix(4.579965,0,0,-4.579965,397.87238,588.54693)"
																					id="g3464">
																					<path id="path3466"
																						style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																						d="m 0,0 c 0,1.896 -1.258,2.973 -3.039,2.973 l -1.09,0 0,-5.948 1.059,0 C -1.414,-2.975 0,-2.075 0,0 M 19.389,-2.14 11.359,-8.463 4.02,-2.685 C 2.961,-5.229 0.402,-6.996 -2.545,-6.996 l -6.281,0 0,13.992 6.281,0 c 3.293,0 5.666,-2.094 6.563,-4.325 l 7.341,5.772 2.719,-2.14 -6.728,-5.288 1.293,-1.012 6.726,5.285 2.723,-2.134 -6.727,-5.294 1.291,-1.014 6.733,5.295 0,4.855 4.881,0 0,-9.908 4.869,0 0,-4.101 -9.75,0 0,4.873 z m 15.933,-0.774 4.867,0 0,-4.099 -9.753,0 0,14.009 4.886,0 0,-9.91 z" />
																				</g>
																			</g>
																		</svg>
																		<p>811B</p>
																	</td>
																	<td>
																		<p>Intel Xeon 4/8 Core</p>
																		<p class="text-orange">4x 2.20GHz</p>
																	</td>
																	<td>
																		<p>8GB</p>
																		<p class="text-orange">RAM</p>
																	</td>
																	<td>
																		<p>YES</p>
																		<p class="text-orange">(512mb)</p>
																	</td>
																	<td>
																		<p>1x 250GB HDD</p>
																	</td>
																	<td>
																		<p>TX, Dallas</p>
																	</td>
																	<td>
																		<p>1Gbps</p>
																	</td>
																	<td>
																		<p class="table-price-text text-orange">
																			$90.00
																			<span>$102.00</span>
																		</p>
																	</td>
																	<td>
																		<p class="text-orange">Instant</p>
																	</td>
																	<td> <button class="btn btn-primary">Configure
																			<svg xmlns="http://www.w3.org/2000/svg"
																				width="11.684" height="11.899"
																				viewBox="0 0 11.684 11.899">
																				<g id="right"
																					transform="translate(0.4 0.4)">
																					<g id="Group_1053"
																						data-name="Group 1053">
																						<path id="Path_6081"
																							data-name="Path 6081"
																							d="M17.446,90.637l-5.2-5.2a.347.347,0,0,0-.49.49l4.611,4.611-9.353-.1-.268.126-.079.221c0,.192.347.347.347.347l9.353.1L11.753,95.84a.347.347,0,1,0,.49.49l5.2-5.2A.347.347,0,0,0,17.446,90.637Z"
																							transform="translate(-6.664 -85.333)"
																							fill="#fff"
																							stroke="#fff"
																							stroke-width="0.8" />
																					</g>
																				</g>
																			</svg>
																		</button> </td>

																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div id="viewProServer" class="tab-pane fade">
									<div class="row">
										<div class="container-fluid">
											<div class="row">
												<div class="col-12">
													<div class="table-responsive">
														<table class="table table-bordered">
															<thead>
																<tr>
																	<th>MODEL</th>
																	<th>CPU</th>
																	<th>RAM</th>
																	<th>RAID</th>
																	<th>HDD</th>
																	<th>LOCATION</th>
																	<th>PORT</th>
																	<th>PRICE</th>
																	<th>AVAILABLE</th>
																	<th></th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td><svg version="1.1" id="Layer_1"
																			xmlns="http://www.w3.org/2000/svg"
																			xmlns:xlink="http://www.w3.org/1999/xlink"
																			x="0px" y="0px" width="433.701px"
																			height="433.701px"
																			viewBox="0 0 433.701 433.701"
																			enable-background="new 0 0 433.701 433.701"
																			xml:space="preserve">
																			<path fill="#4987CE" d="M216.85,432.851c-2.147,0-4.285-0.039-6.419-0.101l44.143-121.318h60.75
			c10.663,0,22.368-8.197,26.015-18.212l47.892-131.546c7.835-21.537-4.501-39.157-27.418-39.157h-84.279l-70.715,194.316h-0.026
			l-40.089,110.153C71.594,404.375,0.85,318.878,0.85,216.851c0-99.086,66.721-182.58,157.683-208.027l-41.365,113.693h-0.012
			L48.389,311.432l45.778,0.004l58.481-160.531h34.404l-58.481,160.531l45.761,0.008l54.498-149.77
			c7.84-21.537-4.497-39.157-27.393-39.157h-38.481l44.186-121.44c3.221-0.143,6.454-0.227,9.708-0.227
			c119.294,0,216,96.706,216,216.001C432.85,336.143,336.144,432.851,216.85,432.851z M347.542,150.79h-34.395l-48.167,132.158h34.396
			L347.542,150.79z" />
																		</svg>
																		<svg xmlns:dc="http://purl.org/dc/elements/1.1/"
																			xmlns:cc="http://creativecommons.org/ns#"
																			xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
																			xmlns:svg="http://www.w3.org/2000/svg"
																			xmlns="http://www.w3.org/2000/svg"
																			version="1.1" id="svg3794"
																			viewBox="0 0 300 300" height="300"
																			width="300">
																			<defs id="defs3796" />
																			<g transform="translate(-318.33375,-439.74274)"
																				id="layer1">
																				<g transform="matrix(4.579965,0,0,-4.579965,468.34291,456.8459)"
																					id="g3460">
																					<path id="path3462"
																						style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																						d="m 0,0 c -8.01,0 -15.264,-3.249 -20.516,-8.505 -5.254,-5.244 -8.501,-12.502 -8.501,-20.516 0,-8.008 3.247,-15.261 8.501,-20.507 5.252,-5.249 12.506,-8.504 20.516,-8.504 8.012,0 15.27,3.255 20.514,8.504 5.252,5.246 8.492,12.499 8.492,20.507 0,8.014 -3.24,15.272 -8.492,20.516 C 15.27,-3.249 8.012,0 0,0 m 0,3.516 c 17.965,0 32.531,-14.568 32.531,-32.537 0,-17.963 -14.566,-32.529 -32.531,-32.529 -17.963,0 -32.535,14.566 -32.535,32.529 0,17.969 14.572,32.537 32.535,32.537" />
																				</g>
																				<g transform="matrix(4.579965,0,0,-4.579965,397.87238,588.54693)"
																					id="g3464">
																					<path id="path3466"
																						style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																						d="m 0,0 c 0,1.896 -1.258,2.973 -3.039,2.973 l -1.09,0 0,-5.948 1.059,0 C -1.414,-2.975 0,-2.075 0,0 M 19.389,-2.14 11.359,-8.463 4.02,-2.685 C 2.961,-5.229 0.402,-6.996 -2.545,-6.996 l -6.281,0 0,13.992 6.281,0 c 3.293,0 5.666,-2.094 6.563,-4.325 l 7.341,5.772 2.719,-2.14 -6.728,-5.288 1.293,-1.012 6.726,5.285 2.723,-2.134 -6.727,-5.294 1.291,-1.014 6.733,5.295 0,4.855 4.881,0 0,-9.908 4.869,0 0,-4.101 -9.75,0 0,4.873 z m 15.933,-0.774 4.867,0 0,-4.099 -9.753,0 0,14.009 4.886,0 0,-9.91 z" />
																				</g>
																			</g>
																		</svg>
																		<p>811B</p>
																	</td>
																	<td>
																		<p>Intel Xeon 4/8 Core</p>
																		<p class="text-orange">4x 2.20GHz</p>
																	</td>
																	<td>
																		<p>8GB</p>
																		<p class="text-orange">RAM</p>
																	</td>
																	<td>
																		<p>YES</p>
																		<p class="text-orange">(512mb)</p>
																	</td>
																	<td>
																		<p>1x 250GB HDD</p>
																	</td>
																	<td>
																		<p>TX, Dallas</p>
																	</td>
																	<td>
																		<p>1Gbps</p>
																	</td>
																	<td>
																		<p class="table-price-text text-orange">
																			$90.00
																			<span>$102.00</span>
																		</p>
																	</td>
																	<td>
																		<p class="text-orange">Instant</p>
																	</td>
																	<td> <button class="btn btn-primary">Configure
																			<svg xmlns="http://www.w3.org/2000/svg"
																				width="11.684" height="11.899"
																				viewBox="0 0 11.684 11.899">
																				<g id="right"
																					transform="translate(0.4 0.4)">
																					<g id="Group_1053"
																						data-name="Group 1053">
																						<path id="Path_6081"
																							data-name="Path 6081"
																							d="M17.446,90.637l-5.2-5.2a.347.347,0,0,0-.49.49l4.611,4.611-9.353-.1-.268.126-.079.221c0,.192.347.347.347.347l9.353.1L11.753,95.84a.347.347,0,1,0,.49.49l5.2-5.2A.347.347,0,0,0,17.446,90.637Z"
																							transform="translate(-6.664 -85.333)"
																							fill="#fff"
																							stroke="#fff"
																							stroke-width="0.8" />
																					</g>
																				</g>
																			</svg>
																		</button> </td>

																</tr>
																<tr>
																	<td><svg version="1.1" id="Layer_1"
																			xmlns="http://www.w3.org/2000/svg"
																			xmlns:xlink="http://www.w3.org/1999/xlink"
																			x="0px" y="0px" width="433.701px"
																			height="433.701px"
																			viewBox="0 0 433.701 433.701"
																			enable-background="new 0 0 433.701 433.701"
																			xml:space="preserve">
																			<path fill="#4987CE" d="M216.85,432.851c-2.147,0-4.285-0.039-6.419-0.101l44.143-121.318h60.75
			c10.663,0,22.368-8.197,26.015-18.212l47.892-131.546c7.835-21.537-4.501-39.157-27.418-39.157h-84.279l-70.715,194.316h-0.026
			l-40.089,110.153C71.594,404.375,0.85,318.878,0.85,216.851c0-99.086,66.721-182.58,157.683-208.027l-41.365,113.693h-0.012
			L48.389,311.432l45.778,0.004l58.481-160.531h34.404l-58.481,160.531l45.761,0.008l54.498-149.77
			c7.84-21.537-4.497-39.157-27.393-39.157h-38.481l44.186-121.44c3.221-0.143,6.454-0.227,9.708-0.227
			c119.294,0,216,96.706,216,216.001C432.85,336.143,336.144,432.851,216.85,432.851z M347.542,150.79h-34.395l-48.167,132.158h34.396
			L347.542,150.79z" />
																		</svg>
																		<svg xmlns:dc="http://purl.org/dc/elements/1.1/"
																			xmlns:cc="http://creativecommons.org/ns#"
																			xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
																			xmlns:svg="http://www.w3.org/2000/svg"
																			xmlns="http://www.w3.org/2000/svg"
																			version="1.1" id="svg3794"
																			viewBox="0 0 300 300" height="300"
																			width="300">
																			<defs id="defs3796" />
																			<g transform="translate(-318.33375,-439.74274)"
																				id="layer1">
																				<g transform="matrix(4.579965,0,0,-4.579965,468.34291,456.8459)"
																					id="g3460">
																					<path id="path3462"
																						style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																						d="m 0,0 c -8.01,0 -15.264,-3.249 -20.516,-8.505 -5.254,-5.244 -8.501,-12.502 -8.501,-20.516 0,-8.008 3.247,-15.261 8.501,-20.507 5.252,-5.249 12.506,-8.504 20.516,-8.504 8.012,0 15.27,3.255 20.514,8.504 5.252,5.246 8.492,12.499 8.492,20.507 0,8.014 -3.24,15.272 -8.492,20.516 C 15.27,-3.249 8.012,0 0,0 m 0,3.516 c 17.965,0 32.531,-14.568 32.531,-32.537 0,-17.963 -14.566,-32.529 -32.531,-32.529 -17.963,0 -32.535,14.566 -32.535,32.529 0,17.969 14.572,32.537 32.535,32.537" />
																				</g>
																				<g transform="matrix(4.579965,0,0,-4.579965,397.87238,588.54693)"
																					id="g3464">
																					<path id="path3466"
																						style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																						d="m 0,0 c 0,1.896 -1.258,2.973 -3.039,2.973 l -1.09,0 0,-5.948 1.059,0 C -1.414,-2.975 0,-2.075 0,0 M 19.389,-2.14 11.359,-8.463 4.02,-2.685 C 2.961,-5.229 0.402,-6.996 -2.545,-6.996 l -6.281,0 0,13.992 6.281,0 c 3.293,0 5.666,-2.094 6.563,-4.325 l 7.341,5.772 2.719,-2.14 -6.728,-5.288 1.293,-1.012 6.726,5.285 2.723,-2.134 -6.727,-5.294 1.291,-1.014 6.733,5.295 0,4.855 4.881,0 0,-9.908 4.869,0 0,-4.101 -9.75,0 0,4.873 z m 15.933,-0.774 4.867,0 0,-4.099 -9.753,0 0,14.009 4.886,0 0,-9.91 z" />
																				</g>
																			</g>
																		</svg>
																		<p>811B</p>
																	</td>
																	<td>
																		<p>Intel Xeon 4/8 Core</p>
																		<p class="text-orange">4x 2.20GHz</p>
																	</td>
																	<td>
																		<p>8GB</p>
																		<p class="text-orange">RAM</p>
																	</td>
																	<td>
																		<p>YES</p>
																		<p class="text-orange">(512mb)</p>
																	</td>
																	<td>
																		<p>1x 250GB HDD</p>
																	</td>
																	<td>
																		<p>TX, Dallas</p>
																	</td>
																	<td>
																		<p>1Gbps</p>
																	</td>
																	<td>
																		<p class="table-price-text text-orange">
																			$90.00
																			<span>$102.00</span>
																		</p>
																	</td>
																	<td>
																		<p class="text-orange">Instant</p>
																	</td>
																	<td> <button class="btn btn-primary">Configure
																			<svg xmlns="http://www.w3.org/2000/svg"
																				width="11.684" height="11.899"
																				viewBox="0 0 11.684 11.899">
																				<g id="right"
																					transform="translate(0.4 0.4)">
																					<g id="Group_1053"
																						data-name="Group 1053">
																						<path id="Path_6081"
																							data-name="Path 6081"
																							d="M17.446,90.637l-5.2-5.2a.347.347,0,0,0-.49.49l4.611,4.611-9.353-.1-.268.126-.079.221c0,.192.347.347.347.347l9.353.1L11.753,95.84a.347.347,0,1,0,.49.49l5.2-5.2A.347.347,0,0,0,17.446,90.637Z"
																							transform="translate(-6.664 -85.333)"
																							fill="#fff"
																							stroke="#fff"
																							stroke-width="0.8" />
																					</g>
																				</g>
																			</svg>
																		</button> </td>

																</tr>
																<tr>
																	<td><svg version="1.1" id="Layer_1"
																			xmlns="http://www.w3.org/2000/svg"
																			xmlns:xlink="http://www.w3.org/1999/xlink"
																			x="0px" y="0px" width="433.701px"
																			height="433.701px"
																			viewBox="0 0 433.701 433.701"
																			enable-background="new 0 0 433.701 433.701"
																			xml:space="preserve">
																			<path fill="#4987CE" d="M216.85,432.851c-2.147,0-4.285-0.039-6.419-0.101l44.143-121.318h60.75
			c10.663,0,22.368-8.197,26.015-18.212l47.892-131.546c7.835-21.537-4.501-39.157-27.418-39.157h-84.279l-70.715,194.316h-0.026
			l-40.089,110.153C71.594,404.375,0.85,318.878,0.85,216.851c0-99.086,66.721-182.58,157.683-208.027l-41.365,113.693h-0.012
			L48.389,311.432l45.778,0.004l58.481-160.531h34.404l-58.481,160.531l45.761,0.008l54.498-149.77
			c7.84-21.537-4.497-39.157-27.393-39.157h-38.481l44.186-121.44c3.221-0.143,6.454-0.227,9.708-0.227
			c119.294,0,216,96.706,216,216.001C432.85,336.143,336.144,432.851,216.85,432.851z M347.542,150.79h-34.395l-48.167,132.158h34.396
			L347.542,150.79z" />
																		</svg>
																		<svg xmlns:dc="http://purl.org/dc/elements/1.1/"
																			xmlns:cc="http://creativecommons.org/ns#"
																			xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
																			xmlns:svg="http://www.w3.org/2000/svg"
																			xmlns="http://www.w3.org/2000/svg"
																			version="1.1" id="svg3794"
																			viewBox="0 0 300 300" height="300"
																			width="300">
																			<defs id="defs3796" />
																			<g transform="translate(-318.33375,-439.74274)"
																				id="layer1">
																				<g transform="matrix(4.579965,0,0,-4.579965,468.34291,456.8459)"
																					id="g3460">
																					<path id="path3462"
																						style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																						d="m 0,0 c -8.01,0 -15.264,-3.249 -20.516,-8.505 -5.254,-5.244 -8.501,-12.502 -8.501,-20.516 0,-8.008 3.247,-15.261 8.501,-20.507 5.252,-5.249 12.506,-8.504 20.516,-8.504 8.012,0 15.27,3.255 20.514,8.504 5.252,5.246 8.492,12.499 8.492,20.507 0,8.014 -3.24,15.272 -8.492,20.516 C 15.27,-3.249 8.012,0 0,0 m 0,3.516 c 17.965,0 32.531,-14.568 32.531,-32.537 0,-17.963 -14.566,-32.529 -32.531,-32.529 -17.963,0 -32.535,14.566 -32.535,32.529 0,17.969 14.572,32.537 32.535,32.537" />
																				</g>
																				<g transform="matrix(4.579965,0,0,-4.579965,397.87238,588.54693)"
																					id="g3464">
																					<path id="path3466"
																						style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																						d="m 0,0 c 0,1.896 -1.258,2.973 -3.039,2.973 l -1.09,0 0,-5.948 1.059,0 C -1.414,-2.975 0,-2.075 0,0 M 19.389,-2.14 11.359,-8.463 4.02,-2.685 C 2.961,-5.229 0.402,-6.996 -2.545,-6.996 l -6.281,0 0,13.992 6.281,0 c 3.293,0 5.666,-2.094 6.563,-4.325 l 7.341,5.772 2.719,-2.14 -6.728,-5.288 1.293,-1.012 6.726,5.285 2.723,-2.134 -6.727,-5.294 1.291,-1.014 6.733,5.295 0,4.855 4.881,0 0,-9.908 4.869,0 0,-4.101 -9.75,0 0,4.873 z m 15.933,-0.774 4.867,0 0,-4.099 -9.753,0 0,14.009 4.886,0 0,-9.91 z" />
																				</g>
																			</g>
																		</svg>
																		<p>811B</p>
																	</td>
																	<td>
																		<p>Intel Xeon 4/8 Core</p>
																		<p class="text-orange">4x 2.20GHz</p>
																	</td>
																	<td>
																		<p>8GB</p>
																		<p class="text-orange">RAM</p>
																	</td>
																	<td>
																		<p>YES</p>
																		<p class="text-orange">(512mb)</p>
																	</td>
																	<td>
																		<p>1x 250GB HDD</p>
																	</td>
																	<td>
																		<p>TX, Dallas</p>
																	</td>
																	<td>
																		<p>1Gbps</p>
																	</td>
																	<td>
																		<p class="table-price-text text-orange">
																			$90.00
																			<span>$102.00</span>
																		</p>
																	</td>
																	<td>
																		<p class="text-orange">Instant</p>
																	</td>
																	<td> <button class="btn btn-primary">Configure
																			<svg xmlns="http://www.w3.org/2000/svg"
																				width="11.684" height="11.899"
																				viewBox="0 0 11.684 11.899">
																				<g id="right"
																					transform="translate(0.4 0.4)">
																					<g id="Group_1053"
																						data-name="Group 1053">
																						<path id="Path_6081"
																							data-name="Path 6081"
																							d="M17.446,90.637l-5.2-5.2a.347.347,0,0,0-.49.49l4.611,4.611-9.353-.1-.268.126-.079.221c0,.192.347.347.347.347l9.353.1L11.753,95.84a.347.347,0,1,0,.49.49l5.2-5.2A.347.347,0,0,0,17.446,90.637Z"
																							transform="translate(-6.664 -85.333)"
																							fill="#fff"
																							stroke="#fff"
																							stroke-width="0.8" />
																					</g>
																				</g>
																			</svg>
																		</button> </td>

																</tr>
																<tr>
																	<td><svg version="1.1" id="Layer_1"
																			xmlns="http://www.w3.org/2000/svg"
																			xmlns:xlink="http://www.w3.org/1999/xlink"
																			x="0px" y="0px" width="433.701px"
																			height="433.701px"
																			viewBox="0 0 433.701 433.701"
																			enable-background="new 0 0 433.701 433.701"
																			xml:space="preserve">
																			<path fill="#4987CE" d="M216.85,432.851c-2.147,0-4.285-0.039-6.419-0.101l44.143-121.318h60.75
			c10.663,0,22.368-8.197,26.015-18.212l47.892-131.546c7.835-21.537-4.501-39.157-27.418-39.157h-84.279l-70.715,194.316h-0.026
			l-40.089,110.153C71.594,404.375,0.85,318.878,0.85,216.851c0-99.086,66.721-182.58,157.683-208.027l-41.365,113.693h-0.012
			L48.389,311.432l45.778,0.004l58.481-160.531h34.404l-58.481,160.531l45.761,0.008l54.498-149.77
			c7.84-21.537-4.497-39.157-27.393-39.157h-38.481l44.186-121.44c3.221-0.143,6.454-0.227,9.708-0.227
			c119.294,0,216,96.706,216,216.001C432.85,336.143,336.144,432.851,216.85,432.851z M347.542,150.79h-34.395l-48.167,132.158h34.396
			L347.542,150.79z" />
																		</svg>
																		<svg xmlns:dc="http://purl.org/dc/elements/1.1/"
																			xmlns:cc="http://creativecommons.org/ns#"
																			xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
																			xmlns:svg="http://www.w3.org/2000/svg"
																			xmlns="http://www.w3.org/2000/svg"
																			version="1.1" id="svg3794"
																			viewBox="0 0 300 300" height="300"
																			width="300">
																			<defs id="defs3796" />
																			<g transform="translate(-318.33375,-439.74274)"
																				id="layer1">
																				<g transform="matrix(4.579965,0,0,-4.579965,468.34291,456.8459)"
																					id="g3460">
																					<path id="path3462"
																						style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																						d="m 0,0 c -8.01,0 -15.264,-3.249 -20.516,-8.505 -5.254,-5.244 -8.501,-12.502 -8.501,-20.516 0,-8.008 3.247,-15.261 8.501,-20.507 5.252,-5.249 12.506,-8.504 20.516,-8.504 8.012,0 15.27,3.255 20.514,8.504 5.252,5.246 8.492,12.499 8.492,20.507 0,8.014 -3.24,15.272 -8.492,20.516 C 15.27,-3.249 8.012,0 0,0 m 0,3.516 c 17.965,0 32.531,-14.568 32.531,-32.537 0,-17.963 -14.566,-32.529 -32.531,-32.529 -17.963,0 -32.535,14.566 -32.535,32.529 0,17.969 14.572,32.537 32.535,32.537" />
																				</g>
																				<g transform="matrix(4.579965,0,0,-4.579965,397.87238,588.54693)"
																					id="g3464">
																					<path id="path3466"
																						style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																						d="m 0,0 c 0,1.896 -1.258,2.973 -3.039,2.973 l -1.09,0 0,-5.948 1.059,0 C -1.414,-2.975 0,-2.075 0,0 M 19.389,-2.14 11.359,-8.463 4.02,-2.685 C 2.961,-5.229 0.402,-6.996 -2.545,-6.996 l -6.281,0 0,13.992 6.281,0 c 3.293,0 5.666,-2.094 6.563,-4.325 l 7.341,5.772 2.719,-2.14 -6.728,-5.288 1.293,-1.012 6.726,5.285 2.723,-2.134 -6.727,-5.294 1.291,-1.014 6.733,5.295 0,4.855 4.881,0 0,-9.908 4.869,0 0,-4.101 -9.75,0 0,4.873 z m 15.933,-0.774 4.867,0 0,-4.099 -9.753,0 0,14.009 4.886,0 0,-9.91 z" />
																				</g>
																			</g>
																		</svg>
																		<p>811B</p>
																	</td>
																	<td>
																		<p>Intel Xeon 4/8 Core</p>
																		<p class="text-orange">4x 2.20GHz</p>
																	</td>
																	<td>
																		<p>8GB</p>
																		<p class="text-orange">RAM</p>
																	</td>
																	<td>
																		<p>YES</p>
																		<p class="text-orange">(512mb)</p>
																	</td>
																	<td>
																		<p>1x 250GB HDD</p>
																	</td>
																	<td>
																		<p>TX, Dallas</p>
																	</td>
																	<td>
																		<p>1Gbps</p>
																	</td>
																	<td>
																		<p class="table-price-text text-orange">
																			$90.00
																			<span>$102.00</span>
																		</p>
																	</td>
																	<td>
																		<p class="text-orange">Instant</p>
																	</td>
																	<td> <button class="btn btn-primary">Configure
																			<svg xmlns="http://www.w3.org/2000/svg"
																				width="11.684" height="11.899"
																				viewBox="0 0 11.684 11.899">
																				<g id="right"
																					transform="translate(0.4 0.4)">
																					<g id="Group_1053"
																						data-name="Group 1053">
																						<path id="Path_6081"
																							data-name="Path 6081"
																							d="M17.446,90.637l-5.2-5.2a.347.347,0,0,0-.49.49l4.611,4.611-9.353-.1-.268.126-.079.221c0,.192.347.347.347.347l9.353.1L11.753,95.84a.347.347,0,1,0,.49.49l5.2-5.2A.347.347,0,0,0,17.446,90.637Z"
																							transform="translate(-6.664 -85.333)"
																							fill="#fff"
																							stroke="#fff"
																							stroke-width="0.8" />
																					</g>
																				</g>
																			</svg>
																		</button> </td>

																</tr>
																<tr>
																	<td><svg version="1.1" id="Layer_1"
																			xmlns="http://www.w3.org/2000/svg"
																			xmlns:xlink="http://www.w3.org/1999/xlink"
																			x="0px" y="0px" width="433.701px"
																			height="433.701px"
																			viewBox="0 0 433.701 433.701"
																			enable-background="new 0 0 433.701 433.701"
																			xml:space="preserve">
																			<path fill="#4987CE" d="M216.85,432.851c-2.147,0-4.285-0.039-6.419-0.101l44.143-121.318h60.75
			c10.663,0,22.368-8.197,26.015-18.212l47.892-131.546c7.835-21.537-4.501-39.157-27.418-39.157h-84.279l-70.715,194.316h-0.026
			l-40.089,110.153C71.594,404.375,0.85,318.878,0.85,216.851c0-99.086,66.721-182.58,157.683-208.027l-41.365,113.693h-0.012
			L48.389,311.432l45.778,0.004l58.481-160.531h34.404l-58.481,160.531l45.761,0.008l54.498-149.77
			c7.84-21.537-4.497-39.157-27.393-39.157h-38.481l44.186-121.44c3.221-0.143,6.454-0.227,9.708-0.227
			c119.294,0,216,96.706,216,216.001C432.85,336.143,336.144,432.851,216.85,432.851z M347.542,150.79h-34.395l-48.167,132.158h34.396
			L347.542,150.79z" />
																		</svg>
																		<svg xmlns:dc="http://purl.org/dc/elements/1.1/"
																			xmlns:cc="http://creativecommons.org/ns#"
																			xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
																			xmlns:svg="http://www.w3.org/2000/svg"
																			xmlns="http://www.w3.org/2000/svg"
																			version="1.1" id="svg3794"
																			viewBox="0 0 300 300" height="300"
																			width="300">
																			<defs id="defs3796" />
																			<g transform="translate(-318.33375,-439.74274)"
																				id="layer1">
																				<g transform="matrix(4.579965,0,0,-4.579965,468.34291,456.8459)"
																					id="g3460">
																					<path id="path3462"
																						style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																						d="m 0,0 c -8.01,0 -15.264,-3.249 -20.516,-8.505 -5.254,-5.244 -8.501,-12.502 -8.501,-20.516 0,-8.008 3.247,-15.261 8.501,-20.507 5.252,-5.249 12.506,-8.504 20.516,-8.504 8.012,0 15.27,3.255 20.514,8.504 5.252,5.246 8.492,12.499 8.492,20.507 0,8.014 -3.24,15.272 -8.492,20.516 C 15.27,-3.249 8.012,0 0,0 m 0,3.516 c 17.965,0 32.531,-14.568 32.531,-32.537 0,-17.963 -14.566,-32.529 -32.531,-32.529 -17.963,0 -32.535,14.566 -32.535,32.529 0,17.969 14.572,32.537 32.535,32.537" />
																				</g>
																				<g transform="matrix(4.579965,0,0,-4.579965,397.87238,588.54693)"
																					id="g3464">
																					<path id="path3466"
																						style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																						d="m 0,0 c 0,1.896 -1.258,2.973 -3.039,2.973 l -1.09,0 0,-5.948 1.059,0 C -1.414,-2.975 0,-2.075 0,0 M 19.389,-2.14 11.359,-8.463 4.02,-2.685 C 2.961,-5.229 0.402,-6.996 -2.545,-6.996 l -6.281,0 0,13.992 6.281,0 c 3.293,0 5.666,-2.094 6.563,-4.325 l 7.341,5.772 2.719,-2.14 -6.728,-5.288 1.293,-1.012 6.726,5.285 2.723,-2.134 -6.727,-5.294 1.291,-1.014 6.733,5.295 0,4.855 4.881,0 0,-9.908 4.869,0 0,-4.101 -9.75,0 0,4.873 z m 15.933,-0.774 4.867,0 0,-4.099 -9.753,0 0,14.009 4.886,0 0,-9.91 z" />
																				</g>
																			</g>
																		</svg>
																		<p>811B</p>
																	</td>
																	<td>
																		<p>Intel Xeon 4/8 Core</p>
																		<p class="text-orange">4x 2.20GHz</p>
																	</td>
																	<td>
																		<p>8GB</p>
																		<p class="text-orange">RAM</p>
																	</td>
																	<td>
																		<p>YES</p>
																		<p class="text-orange">(512mb)</p>
																	</td>
																	<td>
																		<p>1x 250GB HDD</p>
																	</td>
																	<td>
																		<p>TX, Dallas</p>
																	</td>
																	<td>
																		<p>1Gbps</p>
																	</td>
																	<td>
																		<p class="table-price-text text-orange">
																			$90.00
																			<span>$102.00</span>
																		</p>
																	</td>
																	<td>
																		<p class="text-orange">Instant</p>
																	</td>
																	<td> <button class="btn btn-primary">Configure
																			<svg xmlns="http://www.w3.org/2000/svg"
																				width="11.684" height="11.899"
																				viewBox="0 0 11.684 11.899">
																				<g id="right"
																					transform="translate(0.4 0.4)">
																					<g id="Group_1053"
																						data-name="Group 1053">
																						<path id="Path_6081"
																							data-name="Path 6081"
																							d="M17.446,90.637l-5.2-5.2a.347.347,0,0,0-.49.49l4.611,4.611-9.353-.1-.268.126-.079.221c0,.192.347.347.347.347l9.353.1L11.753,95.84a.347.347,0,1,0,.49.49l5.2-5.2A.347.347,0,0,0,17.446,90.637Z"
																							transform="translate(-6.664 -85.333)"
																							fill="#fff"
																							stroke="#fff"
																							stroke-width="0.8" />
																					</g>
																				</g>
																			</svg>
																		</button> </td>

																</tr>
																<tr>
																	<td><svg version="1.1" id="Layer_1"
																			xmlns="http://www.w3.org/2000/svg"
																			xmlns:xlink="http://www.w3.org/1999/xlink"
																			x="0px" y="0px" width="433.701px"
																			height="433.701px"
																			viewBox="0 0 433.701 433.701"
																			enable-background="new 0 0 433.701 433.701"
																			xml:space="preserve">
																			<path fill="#4987CE" d="M216.85,432.851c-2.147,0-4.285-0.039-6.419-0.101l44.143-121.318h60.75
			c10.663,0,22.368-8.197,26.015-18.212l47.892-131.546c7.835-21.537-4.501-39.157-27.418-39.157h-84.279l-70.715,194.316h-0.026
			l-40.089,110.153C71.594,404.375,0.85,318.878,0.85,216.851c0-99.086,66.721-182.58,157.683-208.027l-41.365,113.693h-0.012
			L48.389,311.432l45.778,0.004l58.481-160.531h34.404l-58.481,160.531l45.761,0.008l54.498-149.77
			c7.84-21.537-4.497-39.157-27.393-39.157h-38.481l44.186-121.44c3.221-0.143,6.454-0.227,9.708-0.227
			c119.294,0,216,96.706,216,216.001C432.85,336.143,336.144,432.851,216.85,432.851z M347.542,150.79h-34.395l-48.167,132.158h34.396
			L347.542,150.79z" />
																		</svg>
																		<svg xmlns:dc="http://purl.org/dc/elements/1.1/"
																			xmlns:cc="http://creativecommons.org/ns#"
																			xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
																			xmlns:svg="http://www.w3.org/2000/svg"
																			xmlns="http://www.w3.org/2000/svg"
																			version="1.1" id="svg3794"
																			viewBox="0 0 300 300" height="300"
																			width="300">
																			<defs id="defs3796" />
																			<g transform="translate(-318.33375,-439.74274)"
																				id="layer1">
																				<g transform="matrix(4.579965,0,0,-4.579965,468.34291,456.8459)"
																					id="g3460">
																					<path id="path3462"
																						style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																						d="m 0,0 c -8.01,0 -15.264,-3.249 -20.516,-8.505 -5.254,-5.244 -8.501,-12.502 -8.501,-20.516 0,-8.008 3.247,-15.261 8.501,-20.507 5.252,-5.249 12.506,-8.504 20.516,-8.504 8.012,0 15.27,3.255 20.514,8.504 5.252,5.246 8.492,12.499 8.492,20.507 0,8.014 -3.24,15.272 -8.492,20.516 C 15.27,-3.249 8.012,0 0,0 m 0,3.516 c 17.965,0 32.531,-14.568 32.531,-32.537 0,-17.963 -14.566,-32.529 -32.531,-32.529 -17.963,0 -32.535,14.566 -32.535,32.529 0,17.969 14.572,32.537 32.535,32.537" />
																				</g>
																				<g transform="matrix(4.579965,0,0,-4.579965,397.87238,588.54693)"
																					id="g3464">
																					<path id="path3466"
																						style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																						d="m 0,0 c 0,1.896 -1.258,2.973 -3.039,2.973 l -1.09,0 0,-5.948 1.059,0 C -1.414,-2.975 0,-2.075 0,0 M 19.389,-2.14 11.359,-8.463 4.02,-2.685 C 2.961,-5.229 0.402,-6.996 -2.545,-6.996 l -6.281,0 0,13.992 6.281,0 c 3.293,0 5.666,-2.094 6.563,-4.325 l 7.341,5.772 2.719,-2.14 -6.728,-5.288 1.293,-1.012 6.726,5.285 2.723,-2.134 -6.727,-5.294 1.291,-1.014 6.733,5.295 0,4.855 4.881,0 0,-9.908 4.869,0 0,-4.101 -9.75,0 0,4.873 z m 15.933,-0.774 4.867,0 0,-4.099 -9.753,0 0,14.009 4.886,0 0,-9.91 z" />
																				</g>
																			</g>
																		</svg>
																		<p>811B</p>
																	</td>
																	<td>
																		<p>Intel Xeon 4/8 Core</p>
																		<p class="text-orange">4x 2.20GHz</p>
																	</td>
																	<td>
																		<p>8GB</p>
																		<p class="text-orange">RAM</p>
																	</td>
																	<td>
																		<p>YES</p>
																		<p class="text-orange">(512mb)</p>
																	</td>
																	<td>
																		<p>1x 250GB HDD</p>
																	</td>
																	<td>
																		<p>TX, Dallas</p>
																	</td>
																	<td>
																		<p>1Gbps</p>
																	</td>
																	<td>
																		<p class="table-price-text text-orange">
																			$90.00
																			<span>$102.00</span>
																		</p>
																	</td>
																	<td>
																		<p class="text-orange">Instant</p>
																	</td>
																	<td> <button class="btn btn-primary">Configure
																			<svg xmlns="http://www.w3.org/2000/svg"
																				width="11.684" height="11.899"
																				viewBox="0 0 11.684 11.899">
																				<g id="right"
																					transform="translate(0.4 0.4)">
																					<g id="Group_1053"
																						data-name="Group 1053">
																						<path id="Path_6081"
																							data-name="Path 6081"
																							d="M17.446,90.637l-5.2-5.2a.347.347,0,0,0-.49.49l4.611,4.611-9.353-.1-.268.126-.079.221c0,.192.347.347.347.347l9.353.1L11.753,95.84a.347.347,0,1,0,.49.49l5.2-5.2A.347.347,0,0,0,17.446,90.637Z"
																							transform="translate(-6.664 -85.333)"
																							fill="#fff"
																							stroke="#fff"
																							stroke-width="0.8" />
																					</g>
																				</g>
																			</svg>
																		</button> </td>

																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div id="viewEnterpriseServer" class="tab-pane fade">
									<div class="row">
										<div class="container-fluid">
											<div class="row">
												<div class="col-12">
													<div class="table-responsive">
														<table class="table table-bordered">
															<thead>
																<tr>
																	<th>MODEL</th>
																	<th>CPU</th>
																	<th>RAM</th>
																	<th>RAID</th>
																	<th>HDD</th>
																	<th>LOCATION</th>
																	<th>PORT</th>
																	<th>PRICE</th>
																	<th>AVAILABLE</th>
																	<th></th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td><svg version="1.1" id="Layer_1"
																			xmlns="http://www.w3.org/2000/svg"
																			xmlns:xlink="http://www.w3.org/1999/xlink"
																			x="0px" y="0px" width="433.701px"
																			height="433.701px"
																			viewBox="0 0 433.701 433.701"
																			enable-background="new 0 0 433.701 433.701"
																			xml:space="preserve">
																			<path fill="#4987CE" d="M216.85,432.851c-2.147,0-4.285-0.039-6.419-0.101l44.143-121.318h60.75
			c10.663,0,22.368-8.197,26.015-18.212l47.892-131.546c7.835-21.537-4.501-39.157-27.418-39.157h-84.279l-70.715,194.316h-0.026
			l-40.089,110.153C71.594,404.375,0.85,318.878,0.85,216.851c0-99.086,66.721-182.58,157.683-208.027l-41.365,113.693h-0.012
			L48.389,311.432l45.778,0.004l58.481-160.531h34.404l-58.481,160.531l45.761,0.008l54.498-149.77
			c7.84-21.537-4.497-39.157-27.393-39.157h-38.481l44.186-121.44c3.221-0.143,6.454-0.227,9.708-0.227
			c119.294,0,216,96.706,216,216.001C432.85,336.143,336.144,432.851,216.85,432.851z M347.542,150.79h-34.395l-48.167,132.158h34.396
			L347.542,150.79z" />
																		</svg>
																		<svg xmlns:dc="http://purl.org/dc/elements/1.1/"
																			xmlns:cc="http://creativecommons.org/ns#"
																			xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
																			xmlns:svg="http://www.w3.org/2000/svg"
																			xmlns="http://www.w3.org/2000/svg"
																			version="1.1" id="svg3794"
																			viewBox="0 0 300 300" height="300"
																			width="300">
																			<defs id="defs3796" />
																			<g transform="translate(-318.33375,-439.74274)"
																				id="layer1">
																				<g transform="matrix(4.579965,0,0,-4.579965,468.34291,456.8459)"
																					id="g3460">
																					<path id="path3462"
																						style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																						d="m 0,0 c -8.01,0 -15.264,-3.249 -20.516,-8.505 -5.254,-5.244 -8.501,-12.502 -8.501,-20.516 0,-8.008 3.247,-15.261 8.501,-20.507 5.252,-5.249 12.506,-8.504 20.516,-8.504 8.012,0 15.27,3.255 20.514,8.504 5.252,5.246 8.492,12.499 8.492,20.507 0,8.014 -3.24,15.272 -8.492,20.516 C 15.27,-3.249 8.012,0 0,0 m 0,3.516 c 17.965,0 32.531,-14.568 32.531,-32.537 0,-17.963 -14.566,-32.529 -32.531,-32.529 -17.963,0 -32.535,14.566 -32.535,32.529 0,17.969 14.572,32.537 32.535,32.537" />
																				</g>
																				<g transform="matrix(4.579965,0,0,-4.579965,397.87238,588.54693)"
																					id="g3464">
																					<path id="path3466"
																						style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																						d="m 0,0 c 0,1.896 -1.258,2.973 -3.039,2.973 l -1.09,0 0,-5.948 1.059,0 C -1.414,-2.975 0,-2.075 0,0 M 19.389,-2.14 11.359,-8.463 4.02,-2.685 C 2.961,-5.229 0.402,-6.996 -2.545,-6.996 l -6.281,0 0,13.992 6.281,0 c 3.293,0 5.666,-2.094 6.563,-4.325 l 7.341,5.772 2.719,-2.14 -6.728,-5.288 1.293,-1.012 6.726,5.285 2.723,-2.134 -6.727,-5.294 1.291,-1.014 6.733,5.295 0,4.855 4.881,0 0,-9.908 4.869,0 0,-4.101 -9.75,0 0,4.873 z m 15.933,-0.774 4.867,0 0,-4.099 -9.753,0 0,14.009 4.886,0 0,-9.91 z" />
																				</g>
																			</g>
																		</svg>
																		<p>811B</p>
																	</td>
																	<td>
																		<p>Intel Xeon 4/8 Core</p>
																		<p class="text-orange">4x 2.20GHz</p>
																	</td>
																	<td>
																		<p>8GB</p>
																		<p class="text-orange">RAM</p>
																	</td>
																	<td>
																		<p>YES</p>
																		<p class="text-orange">(512mb)</p>
																	</td>
																	<td>
																		<p>1x 250GB HDD</p>
																	</td>
																	<td>
																		<p>TX, Dallas</p>
																	</td>
																	<td>
																		<p>1Gbps</p>
																	</td>
																	<td>
																		<p class="table-price-text text-orange">
																			$90.00
																			<span>$102.00</span>
																		</p>
																	</td>
																	<td>
																		<p class="text-orange">Instant</p>
																	</td>
																	<td> <button class="btn btn-primary">Configure
																			<svg xmlns="http://www.w3.org/2000/svg"
																				width="11.684" height="11.899"
																				viewBox="0 0 11.684 11.899">
																				<g id="right"
																					transform="translate(0.4 0.4)">
																					<g id="Group_1053"
																						data-name="Group 1053">
																						<path id="Path_6081"
																							data-name="Path 6081"
																							d="M17.446,90.637l-5.2-5.2a.347.347,0,0,0-.49.49l4.611,4.611-9.353-.1-.268.126-.079.221c0,.192.347.347.347.347l9.353.1L11.753,95.84a.347.347,0,1,0,.49.49l5.2-5.2A.347.347,0,0,0,17.446,90.637Z"
																							transform="translate(-6.664 -85.333)"
																							fill="#fff"
																							stroke="#fff"
																							stroke-width="0.8" />
																					</g>
																				</g>
																			</svg>
																		</button> </td>

																</tr>
																<tr>
																	<td><svg version="1.1" id="Layer_1"
																			xmlns="http://www.w3.org/2000/svg"
																			xmlns:xlink="http://www.w3.org/1999/xlink"
																			x="0px" y="0px" width="433.701px"
																			height="433.701px"
																			viewBox="0 0 433.701 433.701"
																			enable-background="new 0 0 433.701 433.701"
																			xml:space="preserve">
																			<path fill="#4987CE" d="M216.85,432.851c-2.147,0-4.285-0.039-6.419-0.101l44.143-121.318h60.75
			c10.663,0,22.368-8.197,26.015-18.212l47.892-131.546c7.835-21.537-4.501-39.157-27.418-39.157h-84.279l-70.715,194.316h-0.026
			l-40.089,110.153C71.594,404.375,0.85,318.878,0.85,216.851c0-99.086,66.721-182.58,157.683-208.027l-41.365,113.693h-0.012
			L48.389,311.432l45.778,0.004l58.481-160.531h34.404l-58.481,160.531l45.761,0.008l54.498-149.77
			c7.84-21.537-4.497-39.157-27.393-39.157h-38.481l44.186-121.44c3.221-0.143,6.454-0.227,9.708-0.227
			c119.294,0,216,96.706,216,216.001C432.85,336.143,336.144,432.851,216.85,432.851z M347.542,150.79h-34.395l-48.167,132.158h34.396
			L347.542,150.79z" />
																		</svg>
																		<svg xmlns:dc="http://purl.org/dc/elements/1.1/"
																			xmlns:cc="http://creativecommons.org/ns#"
																			xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
																			xmlns:svg="http://www.w3.org/2000/svg"
																			xmlns="http://www.w3.org/2000/svg"
																			version="1.1" id="svg3794"
																			viewBox="0 0 300 300" height="300"
																			width="300">
																			<defs id="defs3796" />
																			<g transform="translate(-318.33375,-439.74274)"
																				id="layer1">
																				<g transform="matrix(4.579965,0,0,-4.579965,468.34291,456.8459)"
																					id="g3460">
																					<path id="path3462"
																						style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																						d="m 0,0 c -8.01,0 -15.264,-3.249 -20.516,-8.505 -5.254,-5.244 -8.501,-12.502 -8.501,-20.516 0,-8.008 3.247,-15.261 8.501,-20.507 5.252,-5.249 12.506,-8.504 20.516,-8.504 8.012,0 15.27,3.255 20.514,8.504 5.252,5.246 8.492,12.499 8.492,20.507 0,8.014 -3.24,15.272 -8.492,20.516 C 15.27,-3.249 8.012,0 0,0 m 0,3.516 c 17.965,0 32.531,-14.568 32.531,-32.537 0,-17.963 -14.566,-32.529 -32.531,-32.529 -17.963,0 -32.535,14.566 -32.535,32.529 0,17.969 14.572,32.537 32.535,32.537" />
																				</g>
																				<g transform="matrix(4.579965,0,0,-4.579965,397.87238,588.54693)"
																					id="g3464">
																					<path id="path3466"
																						style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																						d="m 0,0 c 0,1.896 -1.258,2.973 -3.039,2.973 l -1.09,0 0,-5.948 1.059,0 C -1.414,-2.975 0,-2.075 0,0 M 19.389,-2.14 11.359,-8.463 4.02,-2.685 C 2.961,-5.229 0.402,-6.996 -2.545,-6.996 l -6.281,0 0,13.992 6.281,0 c 3.293,0 5.666,-2.094 6.563,-4.325 l 7.341,5.772 2.719,-2.14 -6.728,-5.288 1.293,-1.012 6.726,5.285 2.723,-2.134 -6.727,-5.294 1.291,-1.014 6.733,5.295 0,4.855 4.881,0 0,-9.908 4.869,0 0,-4.101 -9.75,0 0,4.873 z m 15.933,-0.774 4.867,0 0,-4.099 -9.753,0 0,14.009 4.886,0 0,-9.91 z" />
																				</g>
																			</g>
																		</svg>
																		<p>811B</p>
																	</td>
																	<td>
																		<p>Intel Xeon 4/8 Core</p>
																		<p class="text-orange">4x 2.20GHz</p>
																	</td>
																	<td>
																		<p>8GB</p>
																		<p class="text-orange">RAM</p>
																	</td>
																	<td>
																		<p>YES</p>
																		<p class="text-orange">(512mb)</p>
																	</td>
																	<td>
																		<p>1x 250GB HDD</p>
																	</td>
																	<td>
																		<p>TX, Dallas</p>
																	</td>
																	<td>
																		<p>1Gbps</p>
																	</td>
																	<td>
																		<p class="table-price-text text-orange">
																			$90.00
																			<span>$102.00</span>
																		</p>
																	</td>
																	<td>
																		<p class="text-orange">Instant</p>
																	</td>
																	<td> <button class="btn btn-primary">Configure
																			<svg xmlns="http://www.w3.org/2000/svg"
																				width="11.684" height="11.899"
																				viewBox="0 0 11.684 11.899">
																				<g id="right"
																					transform="translate(0.4 0.4)">
																					<g id="Group_1053"
																						data-name="Group 1053">
																						<path id="Path_6081"
																							data-name="Path 6081"
																							d="M17.446,90.637l-5.2-5.2a.347.347,0,0,0-.49.49l4.611,4.611-9.353-.1-.268.126-.079.221c0,.192.347.347.347.347l9.353.1L11.753,95.84a.347.347,0,1,0,.49.49l5.2-5.2A.347.347,0,0,0,17.446,90.637Z"
																							transform="translate(-6.664 -85.333)"
																							fill="#fff"
																							stroke="#fff"
																							stroke-width="0.8" />
																					</g>
																				</g>
																			</svg>
																		</button> </td>

																</tr>
																<tr>
																	<td><svg version="1.1" id="Layer_1"
																			xmlns="http://www.w3.org/2000/svg"
																			xmlns:xlink="http://www.w3.org/1999/xlink"
																			x="0px" y="0px" width="433.701px"
																			height="433.701px"
																			viewBox="0 0 433.701 433.701"
																			enable-background="new 0 0 433.701 433.701"
																			xml:space="preserve">
																			<path fill="#4987CE" d="M216.85,432.851c-2.147,0-4.285-0.039-6.419-0.101l44.143-121.318h60.75
			c10.663,0,22.368-8.197,26.015-18.212l47.892-131.546c7.835-21.537-4.501-39.157-27.418-39.157h-84.279l-70.715,194.316h-0.026
			l-40.089,110.153C71.594,404.375,0.85,318.878,0.85,216.851c0-99.086,66.721-182.58,157.683-208.027l-41.365,113.693h-0.012
			L48.389,311.432l45.778,0.004l58.481-160.531h34.404l-58.481,160.531l45.761,0.008l54.498-149.77
			c7.84-21.537-4.497-39.157-27.393-39.157h-38.481l44.186-121.44c3.221-0.143,6.454-0.227,9.708-0.227
			c119.294,0,216,96.706,216,216.001C432.85,336.143,336.144,432.851,216.85,432.851z M347.542,150.79h-34.395l-48.167,132.158h34.396
			L347.542,150.79z" />
																		</svg>
																		<svg xmlns:dc="http://purl.org/dc/elements/1.1/"
																			xmlns:cc="http://creativecommons.org/ns#"
																			xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
																			xmlns:svg="http://www.w3.org/2000/svg"
																			xmlns="http://www.w3.org/2000/svg"
																			version="1.1" id="svg3794"
																			viewBox="0 0 300 300" height="300"
																			width="300">
																			<defs id="defs3796" />
																			<g transform="translate(-318.33375,-439.74274)"
																				id="layer1">
																				<g transform="matrix(4.579965,0,0,-4.579965,468.34291,456.8459)"
																					id="g3460">
																					<path id="path3462"
																						style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																						d="m 0,0 c -8.01,0 -15.264,-3.249 -20.516,-8.505 -5.254,-5.244 -8.501,-12.502 -8.501,-20.516 0,-8.008 3.247,-15.261 8.501,-20.507 5.252,-5.249 12.506,-8.504 20.516,-8.504 8.012,0 15.27,3.255 20.514,8.504 5.252,5.246 8.492,12.499 8.492,20.507 0,8.014 -3.24,15.272 -8.492,20.516 C 15.27,-3.249 8.012,0 0,0 m 0,3.516 c 17.965,0 32.531,-14.568 32.531,-32.537 0,-17.963 -14.566,-32.529 -32.531,-32.529 -17.963,0 -32.535,14.566 -32.535,32.529 0,17.969 14.572,32.537 32.535,32.537" />
																				</g>
																				<g transform="matrix(4.579965,0,0,-4.579965,397.87238,588.54693)"
																					id="g3464">
																					<path id="path3466"
																						style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																						d="m 0,0 c 0,1.896 -1.258,2.973 -3.039,2.973 l -1.09,0 0,-5.948 1.059,0 C -1.414,-2.975 0,-2.075 0,0 M 19.389,-2.14 11.359,-8.463 4.02,-2.685 C 2.961,-5.229 0.402,-6.996 -2.545,-6.996 l -6.281,0 0,13.992 6.281,0 c 3.293,0 5.666,-2.094 6.563,-4.325 l 7.341,5.772 2.719,-2.14 -6.728,-5.288 1.293,-1.012 6.726,5.285 2.723,-2.134 -6.727,-5.294 1.291,-1.014 6.733,5.295 0,4.855 4.881,0 0,-9.908 4.869,0 0,-4.101 -9.75,0 0,4.873 z m 15.933,-0.774 4.867,0 0,-4.099 -9.753,0 0,14.009 4.886,0 0,-9.91 z" />
																				</g>
																			</g>
																		</svg>
																		<p>811B</p>
																	</td>
																	<td>
																		<p>Intel Xeon 4/8 Core</p>
																		<p class="text-orange">4x 2.20GHz</p>
																	</td>
																	<td>
																		<p>8GB</p>
																		<p class="text-orange">RAM</p>
																	</td>
																	<td>
																		<p>YES</p>
																		<p class="text-orange">(512mb)</p>
																	</td>
																	<td>
																		<p>1x 250GB HDD</p>
																	</td>
																	<td>
																		<p>TX, Dallas</p>
																	</td>
																	<td>
																		<p>1Gbps</p>
																	</td>
																	<td>
																		<p class="table-price-text text-orange">
																			$90.00
																			<span>$102.00</span>
																		</p>
																	</td>
																	<td>
																		<p class="text-orange">Instant</p>
																	</td>
																	<td> <button class="btn btn-primary">Configure
																			<svg xmlns="http://www.w3.org/2000/svg"
																				width="11.684" height="11.899"
																				viewBox="0 0 11.684 11.899">
																				<g id="right"
																					transform="translate(0.4 0.4)">
																					<g id="Group_1053"
																						data-name="Group 1053">
																						<path id="Path_6081"
																							data-name="Path 6081"
																							d="M17.446,90.637l-5.2-5.2a.347.347,0,0,0-.49.49l4.611,4.611-9.353-.1-.268.126-.079.221c0,.192.347.347.347.347l9.353.1L11.753,95.84a.347.347,0,1,0,.49.49l5.2-5.2A.347.347,0,0,0,17.446,90.637Z"
																							transform="translate(-6.664 -85.333)"
																							fill="#fff"
																							stroke="#fff"
																							stroke-width="0.8" />
																					</g>
																				</g>
																			</svg>
																		</button> </td>

																</tr>
																<tr>
																	<td><svg version="1.1" id="Layer_1"
																			xmlns="http://www.w3.org/2000/svg"
																			xmlns:xlink="http://www.w3.org/1999/xlink"
																			x="0px" y="0px" width="433.701px"
																			height="433.701px"
																			viewBox="0 0 433.701 433.701"
																			enable-background="new 0 0 433.701 433.701"
																			xml:space="preserve">
																			<path fill="#4987CE" d="M216.85,432.851c-2.147,0-4.285-0.039-6.419-0.101l44.143-121.318h60.75
			c10.663,0,22.368-8.197,26.015-18.212l47.892-131.546c7.835-21.537-4.501-39.157-27.418-39.157h-84.279l-70.715,194.316h-0.026
			l-40.089,110.153C71.594,404.375,0.85,318.878,0.85,216.851c0-99.086,66.721-182.58,157.683-208.027l-41.365,113.693h-0.012
			L48.389,311.432l45.778,0.004l58.481-160.531h34.404l-58.481,160.531l45.761,0.008l54.498-149.77
			c7.84-21.537-4.497-39.157-27.393-39.157h-38.481l44.186-121.44c3.221-0.143,6.454-0.227,9.708-0.227
			c119.294,0,216,96.706,216,216.001C432.85,336.143,336.144,432.851,216.85,432.851z M347.542,150.79h-34.395l-48.167,132.158h34.396
			L347.542,150.79z" />
																		</svg>
																		<svg xmlns:dc="http://purl.org/dc/elements/1.1/"
																			xmlns:cc="http://creativecommons.org/ns#"
																			xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
																			xmlns:svg="http://www.w3.org/2000/svg"
																			xmlns="http://www.w3.org/2000/svg"
																			version="1.1" id="svg3794"
																			viewBox="0 0 300 300" height="300"
																			width="300">
																			<defs id="defs3796" />
																			<g transform="translate(-318.33375,-439.74274)"
																				id="layer1">
																				<g transform="matrix(4.579965,0,0,-4.579965,468.34291,456.8459)"
																					id="g3460">
																					<path id="path3462"
																						style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																						d="m 0,0 c -8.01,0 -15.264,-3.249 -20.516,-8.505 -5.254,-5.244 -8.501,-12.502 -8.501,-20.516 0,-8.008 3.247,-15.261 8.501,-20.507 5.252,-5.249 12.506,-8.504 20.516,-8.504 8.012,0 15.27,3.255 20.514,8.504 5.252,5.246 8.492,12.499 8.492,20.507 0,8.014 -3.24,15.272 -8.492,20.516 C 15.27,-3.249 8.012,0 0,0 m 0,3.516 c 17.965,0 32.531,-14.568 32.531,-32.537 0,-17.963 -14.566,-32.529 -32.531,-32.529 -17.963,0 -32.535,14.566 -32.535,32.529 0,17.969 14.572,32.537 32.535,32.537" />
																				</g>
																				<g transform="matrix(4.579965,0,0,-4.579965,397.87238,588.54693)"
																					id="g3464">
																					<path id="path3466"
																						style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																						d="m 0,0 c 0,1.896 -1.258,2.973 -3.039,2.973 l -1.09,0 0,-5.948 1.059,0 C -1.414,-2.975 0,-2.075 0,0 M 19.389,-2.14 11.359,-8.463 4.02,-2.685 C 2.961,-5.229 0.402,-6.996 -2.545,-6.996 l -6.281,0 0,13.992 6.281,0 c 3.293,0 5.666,-2.094 6.563,-4.325 l 7.341,5.772 2.719,-2.14 -6.728,-5.288 1.293,-1.012 6.726,5.285 2.723,-2.134 -6.727,-5.294 1.291,-1.014 6.733,5.295 0,4.855 4.881,0 0,-9.908 4.869,0 0,-4.101 -9.75,0 0,4.873 z m 15.933,-0.774 4.867,0 0,-4.099 -9.753,0 0,14.009 4.886,0 0,-9.91 z" />
																				</g>
																			</g>
																		</svg>
																		<p>811B</p>
																	</td>
																	<td>
																		<p>Intel Xeon 4/8 Core</p>
																		<p class="text-orange">4x 2.20GHz</p>
																	</td>
																	<td>
																		<p>8GB</p>
																		<p class="text-orange">RAM</p>
																	</td>
																	<td>
																		<p>YES</p>
																		<p class="text-orange">(512mb)</p>
																	</td>
																	<td>
																		<p>1x 250GB HDD</p>
																	</td>
																	<td>
																		<p>TX, Dallas</p>
																	</td>
																	<td>
																		<p>1Gbps</p>
																	</td>
																	<td>
																		<p class="table-price-text text-orange">
																			$90.00
																			<span>$102.00</span>
																		</p>
																	</td>
																	<td>
																		<p class="text-orange">Instant</p>
																	</td>
																	<td> <button class="btn btn-primary">Configure
																			<svg xmlns="http://www.w3.org/2000/svg"
																				width="11.684" height="11.899"
																				viewBox="0 0 11.684 11.899">
																				<g id="right"
																					transform="translate(0.4 0.4)">
																					<g id="Group_1053"
																						data-name="Group 1053">
																						<path id="Path_6081"
																							data-name="Path 6081"
																							d="M17.446,90.637l-5.2-5.2a.347.347,0,0,0-.49.49l4.611,4.611-9.353-.1-.268.126-.079.221c0,.192.347.347.347.347l9.353.1L11.753,95.84a.347.347,0,1,0,.49.49l5.2-5.2A.347.347,0,0,0,17.446,90.637Z"
																							transform="translate(-6.664 -85.333)"
																							fill="#fff"
																							stroke="#fff"
																							stroke-width="0.8" />
																					</g>
																				</g>
																			</svg>
																		</button> </td>

																</tr>
																<tr>
																	<td><svg version="1.1" id="Layer_1"
																			xmlns="http://www.w3.org/2000/svg"
																			xmlns:xlink="http://www.w3.org/1999/xlink"
																			x="0px" y="0px" width="433.701px"
																			height="433.701px"
																			viewBox="0 0 433.701 433.701"
																			enable-background="new 0 0 433.701 433.701"
																			xml:space="preserve">
																			<path fill="#4987CE" d="M216.85,432.851c-2.147,0-4.285-0.039-6.419-0.101l44.143-121.318h60.75
			c10.663,0,22.368-8.197,26.015-18.212l47.892-131.546c7.835-21.537-4.501-39.157-27.418-39.157h-84.279l-70.715,194.316h-0.026
			l-40.089,110.153C71.594,404.375,0.85,318.878,0.85,216.851c0-99.086,66.721-182.58,157.683-208.027l-41.365,113.693h-0.012
			L48.389,311.432l45.778,0.004l58.481-160.531h34.404l-58.481,160.531l45.761,0.008l54.498-149.77
			c7.84-21.537-4.497-39.157-27.393-39.157h-38.481l44.186-121.44c3.221-0.143,6.454-0.227,9.708-0.227
			c119.294,0,216,96.706,216,216.001C432.85,336.143,336.144,432.851,216.85,432.851z M347.542,150.79h-34.395l-48.167,132.158h34.396
			L347.542,150.79z" />
																		</svg>
																		<svg xmlns:dc="http://purl.org/dc/elements/1.1/"
																			xmlns:cc="http://creativecommons.org/ns#"
																			xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
																			xmlns:svg="http://www.w3.org/2000/svg"
																			xmlns="http://www.w3.org/2000/svg"
																			version="1.1" id="svg3794"
																			viewBox="0 0 300 300" height="300"
																			width="300">
																			<defs id="defs3796" />
																			<g transform="translate(-318.33375,-439.74274)"
																				id="layer1">
																				<g transform="matrix(4.579965,0,0,-4.579965,468.34291,456.8459)"
																					id="g3460">
																					<path id="path3462"
																						style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																						d="m 0,0 c -8.01,0 -15.264,-3.249 -20.516,-8.505 -5.254,-5.244 -8.501,-12.502 -8.501,-20.516 0,-8.008 3.247,-15.261 8.501,-20.507 5.252,-5.249 12.506,-8.504 20.516,-8.504 8.012,0 15.27,3.255 20.514,8.504 5.252,5.246 8.492,12.499 8.492,20.507 0,8.014 -3.24,15.272 -8.492,20.516 C 15.27,-3.249 8.012,0 0,0 m 0,3.516 c 17.965,0 32.531,-14.568 32.531,-32.537 0,-17.963 -14.566,-32.529 -32.531,-32.529 -17.963,0 -32.535,14.566 -32.535,32.529 0,17.969 14.572,32.537 32.535,32.537" />
																				</g>
																				<g transform="matrix(4.579965,0,0,-4.579965,397.87238,588.54693)"
																					id="g3464">
																					<path id="path3466"
																						style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																						d="m 0,0 c 0,1.896 -1.258,2.973 -3.039,2.973 l -1.09,0 0,-5.948 1.059,0 C -1.414,-2.975 0,-2.075 0,0 M 19.389,-2.14 11.359,-8.463 4.02,-2.685 C 2.961,-5.229 0.402,-6.996 -2.545,-6.996 l -6.281,0 0,13.992 6.281,0 c 3.293,0 5.666,-2.094 6.563,-4.325 l 7.341,5.772 2.719,-2.14 -6.728,-5.288 1.293,-1.012 6.726,5.285 2.723,-2.134 -6.727,-5.294 1.291,-1.014 6.733,5.295 0,4.855 4.881,0 0,-9.908 4.869,0 0,-4.101 -9.75,0 0,4.873 z m 15.933,-0.774 4.867,0 0,-4.099 -9.753,0 0,14.009 4.886,0 0,-9.91 z" />
																				</g>
																			</g>
																		</svg>
																		<p>811B</p>
																	</td>
																	<td>
																		<p>Intel Xeon 4/8 Core</p>
																		<p class="text-orange">4x 2.20GHz</p>
																	</td>
																	<td>
																		<p>8GB</p>
																		<p class="text-orange">RAM</p>
																	</td>
																	<td>
																		<p>YES</p>
																		<p class="text-orange">(512mb)</p>
																	</td>
																	<td>
																		<p>1x 250GB HDD</p>
																	</td>
																	<td>
																		<p>TX, Dallas</p>
																	</td>
																	<td>
																		<p>1Gbps</p>
																	</td>
																	<td>
																		<p class="table-price-text text-orange">
																			$90.00
																			<span>$102.00</span>
																		</p>
																	</td>
																	<td>
																		<p class="text-orange">Instant</p>
																	</td>
																	<td> <button class="btn btn-primary">Configure
																			<svg xmlns="http://www.w3.org/2000/svg"
																				width="11.684" height="11.899"
																				viewBox="0 0 11.684 11.899">
																				<g id="right"
																					transform="translate(0.4 0.4)">
																					<g id="Group_1053"
																						data-name="Group 1053">
																						<path id="Path_6081"
																							data-name="Path 6081"
																							d="M17.446,90.637l-5.2-5.2a.347.347,0,0,0-.49.49l4.611,4.611-9.353-.1-.268.126-.079.221c0,.192.347.347.347.347l9.353.1L11.753,95.84a.347.347,0,1,0,.49.49l5.2-5.2A.347.347,0,0,0,17.446,90.637Z"
																							transform="translate(-6.664 -85.333)"
																							fill="#fff"
																							stroke="#fff"
																							stroke-width="0.8" />
																					</g>
																				</g>
																			</svg>
																		</button> </td>

																</tr>
																<tr>
																	<td><svg version="1.1" id="Layer_1"
																			xmlns="http://www.w3.org/2000/svg"
																			xmlns:xlink="http://www.w3.org/1999/xlink"
																			x="0px" y="0px" width="433.701px"
																			height="433.701px"
																			viewBox="0 0 433.701 433.701"
																			enable-background="new 0 0 433.701 433.701"
																			xml:space="preserve">
																			<path fill="#4987CE" d="M216.85,432.851c-2.147,0-4.285-0.039-6.419-0.101l44.143-121.318h60.75
			c10.663,0,22.368-8.197,26.015-18.212l47.892-131.546c7.835-21.537-4.501-39.157-27.418-39.157h-84.279l-70.715,194.316h-0.026
			l-40.089,110.153C71.594,404.375,0.85,318.878,0.85,216.851c0-99.086,66.721-182.58,157.683-208.027l-41.365,113.693h-0.012
			L48.389,311.432l45.778,0.004l58.481-160.531h34.404l-58.481,160.531l45.761,0.008l54.498-149.77
			c7.84-21.537-4.497-39.157-27.393-39.157h-38.481l44.186-121.44c3.221-0.143,6.454-0.227,9.708-0.227
			c119.294,0,216,96.706,216,216.001C432.85,336.143,336.144,432.851,216.85,432.851z M347.542,150.79h-34.395l-48.167,132.158h34.396
			L347.542,150.79z" />
																		</svg>
																		<svg xmlns:dc="http://purl.org/dc/elements/1.1/"
																			xmlns:cc="http://creativecommons.org/ns#"
																			xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
																			xmlns:svg="http://www.w3.org/2000/svg"
																			xmlns="http://www.w3.org/2000/svg"
																			version="1.1" id="svg3794"
																			viewBox="0 0 300 300" height="300"
																			width="300">
																			<defs id="defs3796" />
																			<g transform="translate(-318.33375,-439.74274)"
																				id="layer1">
																				<g transform="matrix(4.579965,0,0,-4.579965,468.34291,456.8459)"
																					id="g3460">
																					<path id="path3462"
																						style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																						d="m 0,0 c -8.01,0 -15.264,-3.249 -20.516,-8.505 -5.254,-5.244 -8.501,-12.502 -8.501,-20.516 0,-8.008 3.247,-15.261 8.501,-20.507 5.252,-5.249 12.506,-8.504 20.516,-8.504 8.012,0 15.27,3.255 20.514,8.504 5.252,5.246 8.492,12.499 8.492,20.507 0,8.014 -3.24,15.272 -8.492,20.516 C 15.27,-3.249 8.012,0 0,0 m 0,3.516 c 17.965,0 32.531,-14.568 32.531,-32.537 0,-17.963 -14.566,-32.529 -32.531,-32.529 -17.963,0 -32.535,14.566 -32.535,32.529 0,17.969 14.572,32.537 32.535,32.537" />
																				</g>
																				<g transform="matrix(4.579965,0,0,-4.579965,397.87238,588.54693)"
																					id="g3464">
																					<path id="path3466"
																						style="fill:#007db8;fill-opacity:1;fill-rule:nonzero;stroke:none"
																						d="m 0,0 c 0,1.896 -1.258,2.973 -3.039,2.973 l -1.09,0 0,-5.948 1.059,0 C -1.414,-2.975 0,-2.075 0,0 M 19.389,-2.14 11.359,-8.463 4.02,-2.685 C 2.961,-5.229 0.402,-6.996 -2.545,-6.996 l -6.281,0 0,13.992 6.281,0 c 3.293,0 5.666,-2.094 6.563,-4.325 l 7.341,5.772 2.719,-2.14 -6.728,-5.288 1.293,-1.012 6.726,5.285 2.723,-2.134 -6.727,-5.294 1.291,-1.014 6.733,5.295 0,4.855 4.881,0 0,-9.908 4.869,0 0,-4.101 -9.75,0 0,4.873 z m 15.933,-0.774 4.867,0 0,-4.099 -9.753,0 0,14.009 4.886,0 0,-9.91 z" />
																				</g>
																			</g>
																		</svg>
																		<p>811B</p>
																	</td>
																	<td>
																		<p>Intel Xeon 4/8 Core</p>
																		<p class="text-orange">4x 2.20GHz</p>
																	</td>
																	<td>
																		<p>8GB</p>
																		<p class="text-orange">RAM</p>
																	</td>
																	<td>
																		<p>YES</p>
																		<p class="text-orange">(512mb)</p>
																	</td>
																	<td>
																		<p>1x 250GB HDD</p>
																	</td>
																	<td>
																		<p>TX, Dallas</p>
																	</td>
																	<td>
																		<p>1Gbps</p>
																	</td>
																	<td>
																		<p class="table-price-text text-orange">
																			$90.00
																			<span>$102.00</span>
																		</p>
																	</td>
																	<td>
																		<p class="text-orange">Instant</p>
																	</td>
																	<td> <button class="btn btn-primary">Configure
																			<svg xmlns="http://www.w3.org/2000/svg"
																				width="11.684" height="11.899"
																				viewBox="0 0 11.684 11.899">
																				<g id="right"
																					transform="translate(0.4 0.4)">
																					<g id="Group_1053"
																						data-name="Group 1053">
																						<path id="Path_6081"
																							data-name="Path 6081"
																							d="M17.446,90.637l-5.2-5.2a.347.347,0,0,0-.49.49l4.611,4.611-9.353-.1-.268.126-.079.221c0,.192.347.347.347.347l9.353.1L11.753,95.84a.347.347,0,1,0,.49.49l5.2-5.2A.347.347,0,0,0,17.446,90.637Z"
																							transform="translate(-6.664 -85.333)"
																							fill="#fff"
																							stroke="#fff"
																							stroke-width="0.8" />
																					</g>
																				</g>
																			</svg>
																		</button> </td>

																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Content End-->
	<!--Content (5)-->
	<section class="section fix-height-container first-fix-container with-page-header" style="background-color: #F2F2F2;">
		<div class="content-wrapper">
			<div class="section-text text-center mb-2">
				<h2>Budget Vs Pro Vs Enterprise Feature Compare</h2>
				<span class="section-border"></span>
			</div>
			<div class="content-text-wrapper">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-12 ">
							<div class="price-compare-table-wrapper row">
								<table class="price-compare-table">
									<tbody>
										<tr>
											<td></td>
											<td class="price-compare-table-title" style="background-color: #F8F8F8;">
												<i class="price-compre-table-icon">
													<svg xmlns="http://www.w3.org/2000/svg" width="40.002"
														height="40" viewBox="0 0 40.002 40">
														<g id="servers" transform="translate(0)">
															<g id="Group_2873" data-name="Group 2873"
																transform="translate(0)">
																<g id="Group_2872" data-name="Group 2872"
																	transform="translate(0 0)">
																	<path id="Path_12307" data-name="Path 12307"
																		d="M270.451,405.323h-13.6a.85.85,0,0,0,0,1.7h13.6a.85.85,0,1,0,0-1.7Z"
																		transform="translate(-236.4 -373.684)"
																		fill="#f80" />
																	<path id="Path_12308" data-name="Path 12308"
																		d="M270.451,447.989h-13.6a.85.85,0,0,0,0,1.7h13.6a.85.85,0,1,0,0-1.7Z"
																		transform="translate(-236.4 -413.089)"
																		fill="#f80" />
																	<path id="Path_12309" data-name="Path 12309"
																		d="M45.217,405.323a2.55,2.55,0,1,0,2.55,2.55A2.553,2.553,0,0,0,45.217,405.323Zm0,3.4a.85.85,0,1,1,.85-.85A.85.85,0,0,1,45.217,408.723Z"
																		transform="translate(-39.267 -373.824)"
																		fill="#f80" />
																	<path id="Path_12310" data-name="Path 12310"
																		d="M45.217,277.323a2.55,2.55,0,1,0,2.55,2.55A2.553,2.553,0,0,0,45.217,277.323Zm0,3.4a.85.85,0,1,1,.85-.85A.85.85,0,0,1,45.217,280.723Z"
																		transform="translate(-39.267 -255.719)"
																		fill="#f80" />
																	<path id="Path_12311" data-name="Path 12311"
																		d="M270.451,191.989h-13.6a.85.85,0,0,0,0,1.7h13.6a.85.85,0,1,0,0-1.7Z"
																		transform="translate(-236.4 -177.003)"
																		fill="#f80" />
																	<path id="Path_12312" data-name="Path 12312"
																		d="M40,15.843V12.51a4.13,4.13,0,0,0-.632-2.178c-.012-.023-.013-.05-.027-.072L34.19,1.976A4.143,4.143,0,0,0,30.651.011H9.355A4.141,4.141,0,0,0,5.817,1.976L.663,10.26c-.008.013-.008.028-.017.043A4.133,4.133,0,0,0,0,12.51v3.334a4.152,4.152,0,0,0,1.693,3.334A4.154,4.154,0,0,0,0,22.51v3.334a4.152,4.152,0,0,0,1.693,3.334A4.154,4.154,0,0,0,0,32.511v3.334a4.173,4.173,0,0,0,4.167,4.167H35.835A4.173,4.173,0,0,0,40,35.844V32.511a4.152,4.152,0,0,0-1.693-3.334A4.151,4.151,0,0,0,40,25.844V22.51a4.152,4.152,0,0,0-1.693-3.334A4.149,4.149,0,0,0,40,15.843ZM7.232,2.856a2.483,2.483,0,0,1,2.122-1.18h21.3a2.483,2.483,0,0,1,2.122,1.18L36.21,8.381c-.125-.012-.247-.038-.375-.038H4.167c-.128,0-.248.027-.373.038Zm31.1,29.655v3.334a2.5,2.5,0,0,1-2.5,2.5H4.167a2.5,2.5,0,0,1-2.5-2.5V32.511a2.5,2.5,0,0,1,2.5-2.5H35.835A2.5,2.5,0,0,1,38.335,32.511Zm0-10v3.334a2.5,2.5,0,0,1-2.5,2.5H4.167a2.5,2.5,0,0,1-2.5-2.5V22.51a2.5,2.5,0,0,1,2.5-2.5H35.835A2.5,2.5,0,0,1,38.335,22.51Zm0-6.667a2.5,2.5,0,0,1-2.5,2.5H4.167a2.5,2.5,0,0,1-2.5-2.5V12.51a2.5,2.5,0,0,1,2.5-2.5H35.835a2.5,2.5,0,0,1,2.5,2.5v3.334Z"
																		transform="translate(0 -0.011)"
																		fill="#f80" />
																	<path id="Path_12313" data-name="Path 12313"
																		d="M270.451,149.323h-13.6a.85.85,0,1,0,0,1.7h13.6a.85.85,0,1,0,0-1.7Z"
																		transform="translate(-236.4 -137.668)"
																		fill="#f80" />
																	<path id="Path_12314" data-name="Path 12314"
																		d="M270.451,319.989h-13.6a.85.85,0,0,0,0,1.7h13.6a.85.85,0,1,0,0-1.7Z"
																		transform="translate(-236.4 -295.011)"
																		fill="#f80" />
																	<path id="Path_12315" data-name="Path 12315"
																		d="M270.451,277.323h-13.6a.85.85,0,0,0,0,1.7h13.6a.85.85,0,1,0,0-1.7Z"
																		transform="translate(-236.4 -255.676)"
																		fill="#f80" />
																	<path id="Path_12316" data-name="Path 12316"
																		d="M45.217,149.323a2.55,2.55,0,1,0,2.55,2.55A2.553,2.553,0,0,0,45.217,149.323Zm0,3.4a.85.85,0,1,1,.85-.85A.85.85,0,0,1,45.217,152.723Z"
																		transform="translate(-39.267 -137.691)"
																		fill="#f80" />
																</g>
															</g>
														</g>
													</svg>
												</i>
												Budget Server
												<br><small>Prebuild Servers</small>
											</td>
											<td class="price-compare-table-title" style="background-color: #FCFCFC;">
												<i class="price-compre-table-icon">
													<svg xmlns="http://www.w3.org/2000/svg" width="44.521"
														height="40" viewBox="0 0 44.521 40">
														<g id="server_2_" data-name="server (2)"
															transform="translate(0)">
															<path id="Path_12322" data-name="Path 12322"
																d="M42.541,221.739a.87.87,0,1,0-.615-.255A.876.876,0,0,0,42.541,221.739Zm0,0"
																transform="translate(-38.048 -200.87)"
																fill="#f80" />
															<path id="Path_12323" data-name="Path 12323"
																d="M82.541,221.739a.87.87,0,1,0-.615-.255A.876.876,0,0,0,82.541,221.739Zm0,0"
																transform="translate(-74.57 -200.87)" fill="#f80" />
															<path id="Path_12324" data-name="Path 12324"
																d="M138.538,221.739h5.8a.87.87,0,0,0,0-1.739h-5.8a.87.87,0,0,0,0,1.739Zm0,0"
																transform="translate(-125.697 -200.87)"
																fill="#f80" />
															<path id="Path_12325" data-name="Path 12325"
																d="M42.541,348a.87.87,0,1,0,.614.255A.875.875,0,0,0,42.541,348Zm0,0"
																transform="translate(-38.048 -317.739)"
																fill="#f80" />
															<path id="Path_12326" data-name="Path 12326"
																d="M82.541,348a.87.87,0,1,0,.614.255A.879.879,0,0,0,82.541,348Zm0,0"
																transform="translate(-74.57 -317.739)"
																fill="#f80" />
															<path id="Path_12327" data-name="Path 12327"
																d="M144.331,348h-5.8a.87.87,0,0,0,0,1.739h5.8a.87.87,0,0,0,0-1.739Zm0,0"
																transform="translate(-125.693 -317.739)"
																fill="#f80" />
															<path id="Path_12328" data-name="Path 12328"
																d="M42.541,93.739a.87.87,0,1,0-.615-.255A.876.876,0,0,0,42.541,93.739Zm0,0"
																transform="translate(-38.048 -84)" fill="#f80" />
															<path id="Path_12329" data-name="Path 12329"
																d="M82.541,93.739a.87.87,0,1,0-.615-.255A.876.876,0,0,0,82.541,93.739Zm0,0"
																transform="translate(-74.57 -84)" fill="#f80" />
															<path id="Path_12330" data-name="Path 12330"
																d="M138.538,93.739h5.8a.87.87,0,0,0,0-1.739h-5.8a.87.87,0,0,0,0,1.739Zm0,0"
																transform="translate(-125.697 -84)" fill="#f80" />
															<path id="Path_12331" data-name="Path 12331"
																d="M439.3,6.609A3.3,3.3,0,1,0,436,3.3,3.308,3.308,0,0,0,439.3,6.609Zm0-4.87A1.565,1.565,0,1,1,437.739,3.3,1.567,1.567,0,0,1,439.3,1.739Zm0,0"
																transform="translate(-398.087)" fill="#f80" />
															<path id="Path_12332" data-name="Path 12332"
																d="M41.217,58.956a3.31,3.31,0,0,0-3.187,2.435H29.768l-3.452-5.157a.869.869,0,0,0-.723-.386H23.3V54.608a2.612,2.612,0,0,0-2.435-2.6V50.254a2.612,2.612,0,0,0,2.435-2.6v-1.2l10.034-.009a3.3,3.3,0,1,0-.007-1.739L23.3,44.716V43.478a2.612,2.612,0,0,0-2.435-2.6V39.123a2.612,2.612,0,0,0,2.435-2.6V35.3h2.29a.87.87,0,0,0,.723-.387l3.454-5.17,1.191-.008A.87.87,0,1,0,30.95,28l-1.652.011a.87.87,0,0,0-.717.386l-3.452,5.168H23.3V32.347A2.612,2.612,0,0,0,20.7,29.739H2.609A2.612,2.612,0,0,0,0,32.347v4.174a2.612,2.612,0,0,0,2.435,2.6v1.752A2.612,2.612,0,0,0,0,43.478v4.174a2.612,2.612,0,0,0,2.435,2.6v1.752A2.612,2.612,0,0,0,0,54.608v4.174a2.612,2.612,0,0,0,2.609,2.609H20.7A2.612,2.612,0,0,0,23.3,58.782v-1.2h1.825l3.452,5.157a.869.869,0,0,0,.722.386H38.03a3.3,3.3,0,1,0,3.187-4.174ZM36.521,44a1.565,1.565,0,1,1-1.565,1.565A1.567,1.567,0,0,1,36.521,44ZM4.174,50.26H19.13V52H4.174Zm0-11.13H19.13v1.739H4.174ZM1.739,36.521V32.347a.87.87,0,0,1,.87-.87H20.7a.87.87,0,0,1,.87.87v4.174a.87.87,0,0,1-.87.87H2.609A.87.87,0,0,1,1.739,36.521Zm0,11.13V43.478a.87.87,0,0,1,.87-.87H20.7a.87.87,0,0,1,.87.87v4.174a.87.87,0,0,1-.87.87H2.609A.87.87,0,0,1,1.739,47.652Zm19.826,11.13a.87.87,0,0,1-.87.87H2.609a.87.87,0,0,1-.87-.87V54.608a.87.87,0,0,1,.87-.87H20.7a.87.87,0,0,1,.87.87Zm19.652,5.043a1.565,1.565,0,1,1,1.565-1.565A1.567,1.567,0,0,1,41.217,63.825Zm0,0"
																transform="translate(0 -25.565)" fill="#f80" />
															<path id="Path_12333" data-name="Path 12333"
																d="M391.87,29.739a.87.87,0,1,0-.615-.255A.877.877,0,0,0,391.87,29.739Zm0,0"
																transform="translate(-357 -25.565)" fill="#f80" />
														</g>
													</svg>
												</i>
												Pro Server
												<br><small>Prebuild Servers</small>
											</td>
											<td class="price-compare-table-title" style="background-color: #F8F8F8;">
												<i class="price-compre-table-icon">
													<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
														viewBox="0 0 40 40">
														<g id="servers_1_" data-name="servers (1)"
															transform="translate(0)">
															<path id="Path_12334" data-name="Path 12334"
																d="M134.212,114.521a.586.586,0,0,0-.586.586v2.342a.586.586,0,0,0,.586.586h2.344a.586.586,0,0,0,.586-.586v-2.342a.586.586,0,0,0-.586-.586Zm1.758,2.342H134.8v-1.17h1.172Z"
																transform="translate(-123.187 -105.574)"
																fill="#f80" />
															<path id="Path_12335" data-name="Path 12335"
																d="M193.626,115.107v2.342a.586.586,0,0,0,.586.586h2.344a.586.586,0,0,0,.586-.586v-2.342a.586.586,0,0,0-.586-.586h-2.344A.586.586,0,0,0,193.626,115.107Zm1.172.586h1.172v1.17H194.8Z"
																transform="translate(-178.499 -105.574)"
																fill="#f80" />
															<path id="Path_12336" data-name="Path 12336"
																d="M134.212,236.525h2.344a.586.586,0,0,0,.586-.586V233.6a.586.586,0,0,0-.586-.586h-2.344a.586.586,0,0,0-.586.586v2.342A.586.586,0,0,0,134.212,236.525Zm.586-2.342h1.172v1.17H134.8Z"
																transform="translate(-123.187 -214.807)"
																fill="#f80" />
															<path id="Path_12337" data-name="Path 12337"
																d="M194.212,236.525h2.344a.586.586,0,0,0,.586-.586V233.6a.586.586,0,0,0-.586-.586h-2.344a.586.586,0,0,0-.586.586v2.342A.586.586,0,0,0,194.212,236.525Zm.586-2.342h1.172v1.17H194.8Z"
																transform="translate(-178.499 -214.807)"
																fill="#f80" />
															<path id="Path_12338" data-name="Path 12338"
																d="M134.212,355.015h2.344a.586.586,0,0,0,.586-.586v-2.342a.586.586,0,0,0-.586-.586h-2.344a.586.586,0,0,0-.586.586v2.342A.586.586,0,0,0,134.212,355.015Zm.586-2.342h1.172v1.17H134.8Z"
																transform="translate(-123.187 -324.04)"
																fill="#f80" />
															<path id="Path_12339" data-name="Path 12339"
																d="M194.212,355.015h2.344a.586.586,0,0,0,.586-.586v-2.342a.586.586,0,0,0-.586-.586h-2.344a.586.586,0,0,0-.586.586v2.342A.586.586,0,0,0,194.212,355.015Zm.586-2.342h1.172v1.17H194.8Z"
																transform="translate(-178.499 -324.04)"
																fill="#f80" />
															<path id="Path_12340" data-name="Path 12340"
																d="M39.414,0H37.07a.586.586,0,0,0-.586.586V1.17h-8.2a.586.586,0,0,0-.423.181L26.217,3a.586.586,0,0,0-.172.415v3.25H20.586V3.511h.586a.586.586,0,0,0,.586-.586V.586A.586.586,0,0,0,21.172,0H18.828a.586.586,0,0,0-.586.586v2.34a.586.586,0,0,0,.586.586h.586V6.661H18.145a.586.586,0,0,0,0,1.172h12.6v5.743H9.258V7.832h6.185a.586.586,0,0,0,0-1.172H13.955V3.41A.586.586,0,0,0,13.783,3L12.138,1.353a.586.586,0,0,0-.426-.183h-8.2V.586A.586.586,0,0,0,2.93,0H.586A.586.586,0,0,0,0,.586v2.34a.586.586,0,0,0,.586.586H2.93a.586.586,0,0,0,.586-.586V2.342h7.954l1.314,1.312V6.66H8.672a.586.586,0,0,0-.586.586v6.915a.586.586,0,0,0,.586.586h.977v1.17H8.672a.586.586,0,0,0-.586.586v6.915A.586.586,0,0,0,8.672,24h.977v1.17H8.672a.586.586,0,0,0-.586.586v6.915a.586.586,0,0,0,.586.586h4.111v3.085l-1.314,1.312H3.516v-.584a.586.586,0,0,0-.586-.586H.586A.586.586,0,0,0,0,37.074v2.34A.586.586,0,0,0,.586,40H2.93a.586.586,0,0,0,.586-.586V38.83h8.2a.586.586,0,0,0,.423-.181L13.783,37a.586.586,0,0,0,.172-.415V33.261h5.459v3.227h-.586a.586.586,0,0,0-.586.586v2.34a.586.586,0,0,0,.586.586h2.344a.586.586,0,0,0,.586-.586v-2.34a.586.586,0,0,0-.586-.586h-.586V33.261h5.459V36.59a.586.586,0,0,0,.172.415l1.645,1.643a.586.586,0,0,0,.426.183h8.2v.584A.586.586,0,0,0,37.07,40h2.344A.586.586,0,0,0,40,39.414v-2.34a.586.586,0,0,0-.586-.586H37.07a.586.586,0,0,0-.586.586v.584H28.531l-1.314-1.312V33.261h4.111a.586.586,0,0,0,.586-.586V25.761a.586.586,0,0,0-.586-.586h-.977V24h.977a.586.586,0,0,0,.586-.586V16.5a.586.586,0,0,0-.586-.586h-.977v-1.17h.977a.586.586,0,0,0,.586-.586V7.246a.586.586,0,0,0-.586-.586H27.217V3.653l1.314-1.312h7.954v.584a.586.586,0,0,0,.586.586h2.344A.586.586,0,0,0,40,2.926V.586A.586.586,0,0,0,39.414,0Zm-20,1.172h1.172V2.34H19.414ZM2.344,2.34H1.172V1.172H2.344Zm0,36.489H1.172V37.66H2.344ZM37.656,37.66h1.172v1.168H37.656ZM10.82,14.747H29.18v1.17H10.82Zm9.766,24.081H19.414V37.66h1.172ZM30.742,26.346V32.09H9.258V26.346Zm0-9.257v5.743H26.006a.586.586,0,0,0,0,1.172H29.18v1.17H10.82V24H23.252a.586.586,0,0,0,0-1.172H9.258V17.089ZM38.828,2.34H37.656V1.172h1.172Z"
																fill="#f80" />
															<path id="Path_12341" data-name="Path 12341"
																d="M264.706,367.661a.586.586,0,1,0-.586-.586A.586.586,0,0,0,264.706,367.661Z"
																transform="translate(-243.486 -337.857)"
																fill="#f80" />
															<path id="Path_12342" data-name="Path 12342"
																d="M308.206,367.661a.586.586,0,1,0-.586-.586A.586.586,0,0,0,308.206,367.661Z"
																transform="translate(-283.587 -337.857)"
																fill="#f80" />
															<path id="Path_12343" data-name="Path 12343"
																d="M351.706,367.661a.586.586,0,1,0-.586-.586A.586.586,0,0,0,351.706,367.661Z"
																transform="translate(-323.689 -337.857)"
																fill="#f80" />
															<path id="Path_12344" data-name="Path 12344"
																d="M264.706,249.09a.586.586,0,1,0-.586-.586A.586.586,0,0,0,264.706,249.09Z"
																transform="translate(-243.486 -228.549)"
																fill="#f80" />
															<path id="Path_12345" data-name="Path 12345"
																d="M308.206,249.09a.586.586,0,1,0-.586-.586A.586.586,0,0,0,308.206,249.09Z"
																transform="translate(-283.587 -228.549)"
																fill="#f80" />
															<path id="Path_12346" data-name="Path 12346"
																d="M351.706,249.09a.586.586,0,1,0-.586-.586A.586.586,0,0,0,351.706,249.09Z"
																transform="translate(-323.689 -228.549)"
																fill="#f80" />
															<path id="Path_12347" data-name="Path 12347"
																d="M265.292,129.944a.586.586,0,1,0-.586.586A.586.586,0,0,0,265.292,129.944Z"
																transform="translate(-243.486 -119.252)"
																fill="#f80" />
															<path id="Path_12348" data-name="Path 12348"
																d="M308.792,129.944a.586.586,0,1,0-.586.586A.586.586,0,0,0,308.792,129.944Z"
																transform="translate(-283.587 -119.252)"
																fill="#f80" />
															<path id="Path_12349" data-name="Path 12349"
																d="M352.292,129.944a.586.586,0,1,0-.586.586A.586.586,0,0,0,352.292,129.944Z"
																transform="translate(-323.689 -119.252)"
																fill="#f80" />
														</g>
													</svg>
												</i>
												Enterprise Server
												<br><small>Prebuild Servers</small>
											</td>
										</tr>
										<tr>
											<td>Virtualization Ready<a href="#" class="price-table-help">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
												  <path id="question" d="M8,0a8,8,0,1,0,8,8A8.009,8.009,0,0,0,8,0ZM8,12.667A.667.667,0,1,1,8.667,12,.667.667,0,0,1,8,12.667ZM9.055,8.428a.67.67,0,0,0-.389.606v.3a.667.667,0,1,1-1.333,0v-.3A2.009,2.009,0,0,1,8.5,7.217a2.179,2.179,0,0,0,1.17-1.55,1.667,1.667,0,0,0-3.333,0A.667.667,0,1,1,5,5.667a3,3,0,1,1,6,0A3.474,3.474,0,0,1,9.055,8.428Zm0,0" fill="#0090ff"/>
												</svg>
												</a> </td>
											<td>
												<svg xmlns="http://www.w3.org/2000/svg" width="19.601" height="14.395" viewBox="0 0 19.601 14.395">
												  <g id="tick" transform="translate(0 -67.998)">
													<g id="Group_2907" data-name="Group 2907" transform="translate(0 67.997)">
													  <path id="Path_12319" data-name="Path 12319" d="M19.314,68.285a.98.98,0,0,0-1.386,0L6.186,80.026,1.673,75.513A.98.98,0,0,0,.287,76.9l5.206,5.206a.98.98,0,0,0,1.386,0L19.314,69.671A.98.98,0,0,0,19.314,68.285Z" transform="translate(0 -67.997)" fill="#42e515"/>
													</g>
												  </g>
												</svg>
												</td>
											<td>
												<svg xmlns="http://www.w3.org/2000/svg" width="19.601" height="14.395" viewBox="0 0 19.601 14.395">
												  <g id="tick" transform="translate(0 -67.998)">
													<g id="Group_2907" data-name="Group 2907" transform="translate(0 67.997)">
													  <path id="Path_12319" data-name="Path 12319" d="M19.314,68.285a.98.98,0,0,0-1.386,0L6.186,80.026,1.673,75.513A.98.98,0,0,0,.287,76.9l5.206,5.206a.98.98,0,0,0,1.386,0L19.314,69.671A.98.98,0,0,0,19.314,68.285Z" transform="translate(0 -67.997)" fill="#42e515"/>
													</g>
												  </g>
												</svg>
												</td>
											<td>
												<svg xmlns="http://www.w3.org/2000/svg" width="19.601" height="14.395" viewBox="0 0 19.601 14.395">
												  <g id="tick" transform="translate(0 -67.998)">
													<g id="Group_2907" data-name="Group 2907" transform="translate(0 67.997)">
													  <path id="Path_12319" data-name="Path 12319" d="M19.314,68.285a.98.98,0,0,0-1.386,0L6.186,80.026,1.673,75.513A.98.98,0,0,0,.287,76.9l5.206,5.206a.98.98,0,0,0,1.386,0L19.314,69.671A.98.98,0,0,0,19.314,68.285Z" transform="translate(0 -67.997)" fill="#42e515"/>
													</g>
												  </g>
												</svg>
												</td>
										</tr>
										<tr>
											<td>Bare Metal Cloud Ready <a href="#" class="price-table-help">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
												  <path id="question" d="M8,0a8,8,0,1,0,8,8A8.009,8.009,0,0,0,8,0ZM8,12.667A.667.667,0,1,1,8.667,12,.667.667,0,0,1,8,12.667ZM9.055,8.428a.67.67,0,0,0-.389.606v.3a.667.667,0,1,1-1.333,0v-.3A2.009,2.009,0,0,1,8.5,7.217a2.179,2.179,0,0,0,1.17-1.55,1.667,1.667,0,0,0-3.333,0A.667.667,0,1,1,5,5.667a3,3,0,1,1,6,0A3.474,3.474,0,0,1,9.055,8.428Zm0,0" fill="#0090ff"/>
												</svg>
												</a> </td>
											<td>
												<svg xmlns="http://www.w3.org/2000/svg" width="14.001" height="14" viewBox="0 0 14.001 14">
													<g id="cancel" transform="translate(0 -0.016)">
													  <g id="Group_2906" data-name="Group 2906" transform="translate(0 0.016)">
														<path id="Path_12318" data-name="Path 12318" d="M8.542,7.016l5.235-5.235a.767.767,0,0,0,0-1.083L13.319.24a.768.768,0,0,0-1.083,0L7,5.474,1.766.24A.767.767,0,0,0,.683.24L.224.7a.766.766,0,0,0,0,1.083L5.459,7.016.224,12.251a.768.768,0,0,0,0,1.083l.459.459a.767.767,0,0,0,1.083,0L7,8.558l5.235,5.235a.76.76,0,0,0,.541.224h0a.76.76,0,0,0,.541-.224l.459-.459a.768.768,0,0,0,0-1.083Z" transform="translate(0 -0.016)" fill="#c13636"/>
													  </g>
													</g>
												  </svg>
												</td>
											<td>
												<svg xmlns="http://www.w3.org/2000/svg" width="14.001" height="14" viewBox="0 0 14.001 14">
													<g id="cancel" transform="translate(0 -0.016)">
													  <g id="Group_2906" data-name="Group 2906" transform="translate(0 0.016)">
														<path id="Path_12318" data-name="Path 12318" d="M8.542,7.016l5.235-5.235a.767.767,0,0,0,0-1.083L13.319.24a.768.768,0,0,0-1.083,0L7,5.474,1.766.24A.767.767,0,0,0,.683.24L.224.7a.766.766,0,0,0,0,1.083L5.459,7.016.224,12.251a.768.768,0,0,0,0,1.083l.459.459a.767.767,0,0,0,1.083,0L7,8.558l5.235,5.235a.76.76,0,0,0,.541.224h0a.76.76,0,0,0,.541-.224l.459-.459a.768.768,0,0,0,0-1.083Z" transform="translate(0 -0.016)" fill="#c13636"/>
													  </g>
													</g>
												  </svg>
												</td>
											<td>
												<svg xmlns="http://www.w3.org/2000/svg" width="14.001" height="14" viewBox="0 0 14.001 14">
													<g id="cancel" transform="translate(0 -0.016)">
													  <g id="Group_2906" data-name="Group 2906" transform="translate(0 0.016)">
														<path id="Path_12318" data-name="Path 12318" d="M8.542,7.016l5.235-5.235a.767.767,0,0,0,0-1.083L13.319.24a.768.768,0,0,0-1.083,0L7,5.474,1.766.24A.767.767,0,0,0,.683.24L.224.7a.766.766,0,0,0,0,1.083L5.459,7.016.224,12.251a.768.768,0,0,0,0,1.083l.459.459a.767.767,0,0,0,1.083,0L7,8.558l5.235,5.235a.76.76,0,0,0,.541.224h0a.76.76,0,0,0,.541-.224l.459-.459a.768.768,0,0,0,0-1.083Z" transform="translate(0 -0.016)" fill="#c13636"/>
													  </g>
													</g>
												  </svg>
												</td>
										</tr>
										<tr>
											<td>Private Rack Ready <a href="#" class="price-table-help">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
												  <path id="question" d="M8,0a8,8,0,1,0,8,8A8.009,8.009,0,0,0,8,0ZM8,12.667A.667.667,0,1,1,8.667,12,.667.667,0,0,1,8,12.667ZM9.055,8.428a.67.67,0,0,0-.389.606v.3a.667.667,0,1,1-1.333,0v-.3A2.009,2.009,0,0,1,8.5,7.217a2.179,2.179,0,0,0,1.17-1.55,1.667,1.667,0,0,0-3.333,0A.667.667,0,1,1,5,5.667a3,3,0,1,1,6,0A3.474,3.474,0,0,1,9.055,8.428Zm0,0" fill="#0090ff"/>
												</svg>
												</a> </td>
											<td>
												<svg xmlns="http://www.w3.org/2000/svg" width="14.001" height="14" viewBox="0 0 14.001 14">
													<g id="cancel" transform="translate(0 -0.016)">
													  <g id="Group_2906" data-name="Group 2906" transform="translate(0 0.016)">
														<path id="Path_12318" data-name="Path 12318" d="M8.542,7.016l5.235-5.235a.767.767,0,0,0,0-1.083L13.319.24a.768.768,0,0,0-1.083,0L7,5.474,1.766.24A.767.767,0,0,0,.683.24L.224.7a.766.766,0,0,0,0,1.083L5.459,7.016.224,12.251a.768.768,0,0,0,0,1.083l.459.459a.767.767,0,0,0,1.083,0L7,8.558l5.235,5.235a.76.76,0,0,0,.541.224h0a.76.76,0,0,0,.541-.224l.459-.459a.768.768,0,0,0,0-1.083Z" transform="translate(0 -0.016)" fill="#c13636"/>
													  </g>
													</g>
												  </svg>
												</td>
											<td>
												<svg xmlns="http://www.w3.org/2000/svg" width="14.001" height="14" viewBox="0 0 14.001 14">
													<g id="cancel" transform="translate(0 -0.016)">
													  <g id="Group_2906" data-name="Group 2906" transform="translate(0 0.016)">
														<path id="Path_12318" data-name="Path 12318" d="M8.542,7.016l5.235-5.235a.767.767,0,0,0,0-1.083L13.319.24a.768.768,0,0,0-1.083,0L7,5.474,1.766.24A.767.767,0,0,0,.683.24L.224.7a.766.766,0,0,0,0,1.083L5.459,7.016.224,12.251a.768.768,0,0,0,0,1.083l.459.459a.767.767,0,0,0,1.083,0L7,8.558l5.235,5.235a.76.76,0,0,0,.541.224h0a.76.76,0,0,0,.541-.224l.459-.459a.768.768,0,0,0,0-1.083Z" transform="translate(0 -0.016)" fill="#c13636"/>
													  </g>
													</g>
												  </svg>
												</td>
											<td>
												<svg xmlns="http://www.w3.org/2000/svg" width="14.001" height="14" viewBox="0 0 14.001 14">
													<g id="cancel" transform="translate(0 -0.016)">
													  <g id="Group_2906" data-name="Group 2906" transform="translate(0 0.016)">
														<path id="Path_12318" data-name="Path 12318" d="M8.542,7.016l5.235-5.235a.767.767,0,0,0,0-1.083L13.319.24a.768.768,0,0,0-1.083,0L7,5.474,1.766.24A.767.767,0,0,0,.683.24L.224.7a.766.766,0,0,0,0,1.083L5.459,7.016.224,12.251a.768.768,0,0,0,0,1.083l.459.459a.767.767,0,0,0,1.083,0L7,8.558l5.235,5.235a.76.76,0,0,0,.541.224h0a.76.76,0,0,0,.541-.224l.459-.459a.768.768,0,0,0,0-1.083Z" transform="translate(0 -0.016)" fill="#c13636"/>
													  </g>
													</g>
												  </svg>
												</td>
										</tr>
										<tr>
											<td>Hybrid Infrastructure Ready <a href="#" class="price-table-help">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
												  <path id="question" d="M8,0a8,8,0,1,0,8,8A8.009,8.009,0,0,0,8,0ZM8,12.667A.667.667,0,1,1,8.667,12,.667.667,0,0,1,8,12.667ZM9.055,8.428a.67.67,0,0,0-.389.606v.3a.667.667,0,1,1-1.333,0v-.3A2.009,2.009,0,0,1,8.5,7.217a2.179,2.179,0,0,0,1.17-1.55,1.667,1.667,0,0,0-3.333,0A.667.667,0,1,1,5,5.667a3,3,0,1,1,6,0A3.474,3.474,0,0,1,9.055,8.428Zm0,0" fill="#0090ff"/>
												</svg>
												</a> </td>
											<td>
												<svg xmlns="http://www.w3.org/2000/svg" width="14.001" height="14" viewBox="0 0 14.001 14">
													<g id="cancel" transform="translate(0 -0.016)">
													  <g id="Group_2906" data-name="Group 2906" transform="translate(0 0.016)">
														<path id="Path_12318" data-name="Path 12318" d="M8.542,7.016l5.235-5.235a.767.767,0,0,0,0-1.083L13.319.24a.768.768,0,0,0-1.083,0L7,5.474,1.766.24A.767.767,0,0,0,.683.24L.224.7a.766.766,0,0,0,0,1.083L5.459,7.016.224,12.251a.768.768,0,0,0,0,1.083l.459.459a.767.767,0,0,0,1.083,0L7,8.558l5.235,5.235a.76.76,0,0,0,.541.224h0a.76.76,0,0,0,.541-.224l.459-.459a.768.768,0,0,0,0-1.083Z" transform="translate(0 -0.016)" fill="#c13636"/>
													  </g>
													</g>
												  </svg>
												</td>
											<td>
												<svg xmlns="http://www.w3.org/2000/svg" width="14.001" height="14" viewBox="0 0 14.001 14">
													<g id="cancel" transform="translate(0 -0.016)">
													  <g id="Group_2906" data-name="Group 2906" transform="translate(0 0.016)">
														<path id="Path_12318" data-name="Path 12318" d="M8.542,7.016l5.235-5.235a.767.767,0,0,0,0-1.083L13.319.24a.768.768,0,0,0-1.083,0L7,5.474,1.766.24A.767.767,0,0,0,.683.24L.224.7a.766.766,0,0,0,0,1.083L5.459,7.016.224,12.251a.768.768,0,0,0,0,1.083l.459.459a.767.767,0,0,0,1.083,0L7,8.558l5.235,5.235a.76.76,0,0,0,.541.224h0a.76.76,0,0,0,.541-.224l.459-.459a.768.768,0,0,0,0-1.083Z" transform="translate(0 -0.016)" fill="#c13636"/>
													  </g>
													</g>
												  </svg>
												</td>
											<td>
												<svg xmlns="http://www.w3.org/2000/svg" width="14.001" height="14" viewBox="0 0 14.001 14">
													<g id="cancel" transform="translate(0 -0.016)">
													  <g id="Group_2906" data-name="Group 2906" transform="translate(0 0.016)">
														<path id="Path_12318" data-name="Path 12318" d="M8.542,7.016l5.235-5.235a.767.767,0,0,0,0-1.083L13.319.24a.768.768,0,0,0-1.083,0L7,5.474,1.766.24A.767.767,0,0,0,.683.24L.224.7a.766.766,0,0,0,0,1.083L5.459,7.016.224,12.251a.768.768,0,0,0,0,1.083l.459.459a.767.767,0,0,0,1.083,0L7,8.558l5.235,5.235a.76.76,0,0,0,.541.224h0a.76.76,0,0,0,.541-.224l.459-.459a.768.768,0,0,0,0-1.083Z" transform="translate(0 -0.016)" fill="#c13636"/>
													  </g>
													</g>
												  </svg>
												</td>
										</tr>
										<tr>
											<td>Advanced Networking <a href="#" class="price-table-help">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
												  <path id="question" d="M8,0a8,8,0,1,0,8,8A8.009,8.009,0,0,0,8,0ZM8,12.667A.667.667,0,1,1,8.667,12,.667.667,0,0,1,8,12.667ZM9.055,8.428a.67.67,0,0,0-.389.606v.3a.667.667,0,1,1-1.333,0v-.3A2.009,2.009,0,0,1,8.5,7.217a2.179,2.179,0,0,0,1.17-1.55,1.667,1.667,0,0,0-3.333,0A.667.667,0,1,1,5,5.667a3,3,0,1,1,6,0A3.474,3.474,0,0,1,9.055,8.428Zm0,0" fill="#0090ff"/>
												</svg>
												</a> </td>
											<td>
												<svg xmlns="http://www.w3.org/2000/svg" width="14.001" height="14" viewBox="0 0 14.001 14">
													<g id="cancel" transform="translate(0 -0.016)">
													  <g id="Group_2906" data-name="Group 2906" transform="translate(0 0.016)">
														<path id="Path_12318" data-name="Path 12318" d="M8.542,7.016l5.235-5.235a.767.767,0,0,0,0-1.083L13.319.24a.768.768,0,0,0-1.083,0L7,5.474,1.766.24A.767.767,0,0,0,.683.24L.224.7a.766.766,0,0,0,0,1.083L5.459,7.016.224,12.251a.768.768,0,0,0,0,1.083l.459.459a.767.767,0,0,0,1.083,0L7,8.558l5.235,5.235a.76.76,0,0,0,.541.224h0a.76.76,0,0,0,.541-.224l.459-.459a.768.768,0,0,0,0-1.083Z" transform="translate(0 -0.016)" fill="#c13636"/>
													  </g>
													</g>
												  </svg>
												</td>
											<td>
												<svg xmlns="http://www.w3.org/2000/svg" width="14.001" height="14" viewBox="0 0 14.001 14">
													<g id="cancel" transform="translate(0 -0.016)">
													  <g id="Group_2906" data-name="Group 2906" transform="translate(0 0.016)">
														<path id="Path_12318" data-name="Path 12318" d="M8.542,7.016l5.235-5.235a.767.767,0,0,0,0-1.083L13.319.24a.768.768,0,0,0-1.083,0L7,5.474,1.766.24A.767.767,0,0,0,.683.24L.224.7a.766.766,0,0,0,0,1.083L5.459,7.016.224,12.251a.768.768,0,0,0,0,1.083l.459.459a.767.767,0,0,0,1.083,0L7,8.558l5.235,5.235a.76.76,0,0,0,.541.224h0a.76.76,0,0,0,.541-.224l.459-.459a.768.768,0,0,0,0-1.083Z" transform="translate(0 -0.016)" fill="#c13636"/>
													  </g>
													</g>
												  </svg>
												</td>
											<td>
												<svg xmlns="http://www.w3.org/2000/svg" width="14.001" height="14" viewBox="0 0 14.001 14">
													<g id="cancel" transform="translate(0 -0.016)">
													  <g id="Group_2906" data-name="Group 2906" transform="translate(0 0.016)">
														<path id="Path_12318" data-name="Path 12318" d="M8.542,7.016l5.235-5.235a.767.767,0,0,0,0-1.083L13.319.24a.768.768,0,0,0-1.083,0L7,5.474,1.766.24A.767.767,0,0,0,.683.24L.224.7a.766.766,0,0,0,0,1.083L5.459,7.016.224,12.251a.768.768,0,0,0,0,1.083l.459.459a.767.767,0,0,0,1.083,0L7,8.558l5.235,5.235a.76.76,0,0,0,.541.224h0a.76.76,0,0,0,.541-.224l.459-.459a.768.768,0,0,0,0-1.083Z" transform="translate(0 -0.016)" fill="#c13636"/>
													  </g>
													</g>
												  </svg>
												</td>
										</tr>
										<tr>
											<td>NFS/SMB Backup Storage </td>
											<td>Option</td>
											<td>Option</td>
											<td>Option</td>
										</tr>
										<tr>
											<td>Dedicated VLAN <a href="#" class="price-table-help">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
												  <path id="question" d="M8,0a8,8,0,1,0,8,8A8.009,8.009,0,0,0,8,0ZM8,12.667A.667.667,0,1,1,8.667,12,.667.667,0,0,1,8,12.667ZM9.055,8.428a.67.67,0,0,0-.389.606v.3a.667.667,0,1,1-1.333,0v-.3A2.009,2.009,0,0,1,8.5,7.217a2.179,2.179,0,0,0,1.17-1.55,1.667,1.667,0,0,0-3.333,0A.667.667,0,1,1,5,5.667a3,3,0,1,1,6,0A3.474,3.474,0,0,1,9.055,8.428Zm0,0" fill="#0090ff"/>
												</svg>
												</a> </td>
											<td>
												<svg xmlns="http://www.w3.org/2000/svg" width="14.001" height="14" viewBox="0 0 14.001 14">
													<g id="cancel" transform="translate(0 -0.016)">
													  <g id="Group_2906" data-name="Group 2906" transform="translate(0 0.016)">
														<path id="Path_12318" data-name="Path 12318" d="M8.542,7.016l5.235-5.235a.767.767,0,0,0,0-1.083L13.319.24a.768.768,0,0,0-1.083,0L7,5.474,1.766.24A.767.767,0,0,0,.683.24L.224.7a.766.766,0,0,0,0,1.083L5.459,7.016.224,12.251a.768.768,0,0,0,0,1.083l.459.459a.767.767,0,0,0,1.083,0L7,8.558l5.235,5.235a.76.76,0,0,0,.541.224h0a.76.76,0,0,0,.541-.224l.459-.459a.768.768,0,0,0,0-1.083Z" transform="translate(0 -0.016)" fill="#c13636"/>
													  </g>
													</g>
												  </svg>
												</td>
											<td>Yes(1x)</td>
											<td>Yes(up to 1x)</td>
										</tr>
										<tr>
											<td>Data Center Rating <a href="#" class="price-table-help">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
												  <path id="question" d="M8,0a8,8,0,1,0,8,8A8.009,8.009,0,0,0,8,0ZM8,12.667A.667.667,0,1,1,8.667,12,.667.667,0,0,1,8,12.667ZM9.055,8.428a.67.67,0,0,0-.389.606v.3a.667.667,0,1,1-1.333,0v-.3A2.009,2.009,0,0,1,8.5,7.217a2.179,2.179,0,0,0,1.17-1.55,1.667,1.667,0,0,0-3.333,0A.667.667,0,1,1,5,5.667a3,3,0,1,1,6,0A3.474,3.474,0,0,1,9.055,8.428Zm0,0" fill="#0090ff"/>
												</svg>
												</a> </td>
												<td>Tier-III & IV</td>
											<td>Tier-III & IV</td>
											<td>Tier-III & IV</td>
										</tr>
										<tr>
											<td>Server Network Port(s) </td>
											<td>1x1Gbits</td>
											<td>2x1Gbits</td>
											<td>Up to 4x10Gbits</td>
										</tr>
										<tr>
											<td>Bandwidth (included)</td>
											<td>10TB</td>
											<td>25TB</td>
											<td>100TB</td>
										</tr>
										<tr>
											<td>Bandwidth Upgrades </td>
											<td>Up to 100TB</td>
											<td>Up to 1Gbits Unlimited</td>
											<td>Up to 10Gbits Unlimited</td>
										</tr>
										<tr>
											<td>IPv4/IPv6</td>
											<td>

<svg xmlns="http://www.w3.org/2000/svg" width="19.601" height="14.395" viewBox="0 0 19.601 14.395">
<g id="tick" transform="translate(0 -67.998)">
  <g id="Group_2907" data-name="Group 2907" transform="translate(0 67.997)">
	<path id="Path_12319" data-name="Path 12319" d="M19.314,68.285a.98.98,0,0,0-1.386,0L6.186,80.026,1.673,75.513A.98.98,0,0,0,.287,76.9l5.206,5.206a.98.98,0,0,0,1.386,0L19.314,69.671A.98.98,0,0,0,19.314,68.285Z" transform="translate(0 -67.997)" fill="#42e515"/>
  </g>
</g>
</svg>

												<svg xmlns="http://www.w3.org/2000/svg" width="14.001" height="14" viewBox="0 0 14.001 14">
													<g id="cancel" transform="translate(0 -0.016)">
													  <g id="Group_2906" data-name="Group 2906" transform="translate(0 0.016)">
														<path id="Path_12318" data-name="Path 12318" d="M8.542,7.016l5.235-5.235a.767.767,0,0,0,0-1.083L13.319.24a.768.768,0,0,0-1.083,0L7,5.474,1.766.24A.767.767,0,0,0,.683.24L.224.7a.766.766,0,0,0,0,1.083L5.459,7.016.224,12.251a.768.768,0,0,0,0,1.083l.459.459a.767.767,0,0,0,1.083,0L7,8.558l5.235,5.235a.76.76,0,0,0,.541.224h0a.76.76,0,0,0,.541-.224l.459-.459a.768.768,0,0,0,0-1.083Z" transform="translate(0 -0.016)" fill="#c13636"/>
													  </g>
													</g>
												  </svg>
												</td>
											<td>

<svg xmlns="http://www.w3.org/2000/svg" width="19.601" height="14.395" viewBox="0 0 19.601 14.395">
<g id="tick" transform="translate(0 -67.998)">
  <g id="Group_2907" data-name="Group 2907" transform="translate(0 67.997)">
	<path id="Path_12319" data-name="Path 12319" d="M19.314,68.285a.98.98,0,0,0-1.386,0L6.186,80.026,1.673,75.513A.98.98,0,0,0,.287,76.9l5.206,5.206a.98.98,0,0,0,1.386,0L19.314,69.671A.98.98,0,0,0,19.314,68.285Z" transform="translate(0 -67.997)" fill="#42e515"/>
  </g>
</g>
</svg>

<svg xmlns="http://www.w3.org/2000/svg" width="19.601" height="14.395" viewBox="0 0 19.601 14.395">
<g id="tick" transform="translate(0 -67.998)">
  <g id="Group_2907" data-name="Group 2907" transform="translate(0 67.997)">
	<path id="Path_12319" data-name="Path 12319" d="M19.314,68.285a.98.98,0,0,0-1.386,0L6.186,80.026,1.673,75.513A.98.98,0,0,0,.287,76.9l5.206,5.206a.98.98,0,0,0,1.386,0L19.314,69.671A.98.98,0,0,0,19.314,68.285Z" transform="translate(0 -67.997)" fill="#42e515"/>
  </g>
</g>
</svg>

												</td>
											<td>

												<svg xmlns="http://www.w3.org/2000/svg" width="19.601" height="14.395" viewBox="0 0 19.601 14.395">
													<g id="tick" transform="translate(0 -67.998)">
													  <g id="Group_2907" data-name="Group 2907" transform="translate(0 67.997)">
														<path id="Path_12319" data-name="Path 12319" d="M19.314,68.285a.98.98,0,0,0-1.386,0L6.186,80.026,1.673,75.513A.98.98,0,0,0,.287,76.9l5.206,5.206a.98.98,0,0,0,1.386,0L19.314,69.671A.98.98,0,0,0,19.314,68.285Z" transform="translate(0 -67.997)" fill="#42e515"/>
													  </g>
													</g>
												  </svg>

												  <svg xmlns="http://www.w3.org/2000/svg" width="19.601" height="14.395" viewBox="0 0 19.601 14.395">
													<g id="tick" transform="translate(0 -67.998)">
													  <g id="Group_2907" data-name="Group 2907" transform="translate(0 67.997)">
														<path id="Path_12319" data-name="Path 12319" d="M19.314,68.285a.98.98,0,0,0-1.386,0L6.186,80.026,1.673,75.513A.98.98,0,0,0,.287,76.9l5.206,5.206a.98.98,0,0,0,1.386,0L19.314,69.671A.98.98,0,0,0,19.314,68.285Z" transform="translate(0 -67.997)" fill="#42e515"/>
													  </g>
													</g>
												  </svg>

												</td>
										</tr>
										<tr>
											<td>Data Center Interconnect <a href="#" class="price-table-help">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
												  <path id="question" d="M8,0a8,8,0,1,0,8,8A8.009,8.009,0,0,0,8,0ZM8,12.667A.667.667,0,1,1,8.667,12,.667.667,0,0,1,8,12.667ZM9.055,8.428a.67.67,0,0,0-.389.606v.3a.667.667,0,1,1-1.333,0v-.3A2.009,2.009,0,0,1,8.5,7.217a2.179,2.179,0,0,0,1.17-1.55,1.667,1.667,0,0,0-3.333,0A.667.667,0,1,1,5,5.667a3,3,0,1,1,6,0A3.474,3.474,0,0,1,9.055,8.428Zm0,0" fill="#0090ff"/>
												</svg>
												</a> </td>
											<td>
												<svg xmlns="http://www.w3.org/2000/svg" width="14.001" height="14" viewBox="0 0 14.001 14">
													<g id="cancel" transform="translate(0 -0.016)">
													  <g id="Group_2906" data-name="Group 2906" transform="translate(0 0.016)">
														<path id="Path_12318" data-name="Path 12318" d="M8.542,7.016l5.235-5.235a.767.767,0,0,0,0-1.083L13.319.24a.768.768,0,0,0-1.083,0L7,5.474,1.766.24A.767.767,0,0,0,.683.24L.224.7a.766.766,0,0,0,0,1.083L5.459,7.016.224,12.251a.768.768,0,0,0,0,1.083l.459.459a.767.767,0,0,0,1.083,0L7,8.558l5.235,5.235a.76.76,0,0,0,.541.224h0a.76.76,0,0,0,.541-.224l.459-.459a.768.768,0,0,0,0-1.083Z" transform="translate(0 -0.016)" fill="#c13636"/>
													  </g>
													</g>
												  </svg>
												</td>
												<td>
													<svg xmlns="http://www.w3.org/2000/svg" width="14.001" height="14" viewBox="0 0 14.001 14">
														<g id="cancel" transform="translate(0 -0.016)">
														  <g id="Group_2906" data-name="Group 2906" transform="translate(0 0.016)">
															<path id="Path_12318" data-name="Path 12318" d="M8.542,7.016l5.235-5.235a.767.767,0,0,0,0-1.083L13.319.24a.768.768,0,0,0-1.083,0L7,5.474,1.766.24A.767.767,0,0,0,.683.24L.224.7a.766.766,0,0,0,0,1.083L5.459,7.016.224,12.251a.768.768,0,0,0,0,1.083l.459.459a.767.767,0,0,0,1.083,0L7,8.558l5.235,5.235a.76.76,0,0,0,.541.224h0a.76.76,0,0,0,.541-.224l.459-.459a.768.768,0,0,0,0-1.083Z" transform="translate(0 -0.016)" fill="#c13636"/>
														  </g>
														</g>
													  </svg>
													</td>
											<td>Option</td>
										</tr>
										<tr>
											<td>Managed Services Available <a href="#" class="price-table-help">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
												  <path id="question" d="M8,0a8,8,0,1,0,8,8A8.009,8.009,0,0,0,8,0ZM8,12.667A.667.667,0,1,1,8.667,12,.667.667,0,0,1,8,12.667ZM9.055,8.428a.67.67,0,0,0-.389.606v.3a.667.667,0,1,1-1.333,0v-.3A2.009,2.009,0,0,1,8.5,7.217a2.179,2.179,0,0,0,1.17-1.55,1.667,1.667,0,0,0-3.333,0A.667.667,0,1,1,5,5.667a3,3,0,1,1,6,0A3.474,3.474,0,0,1,9.055,8.428Zm0,0" fill="#0090ff"/>
												</svg>
												</a></td>
											<td>Option</td>
											<td>Option</td>
											<td>Option</td>
										</tr>
										<tr>
											<td>Reseller & Affiliate Discounts </td>
											<td>
												<svg xmlns="http://www.w3.org/2000/svg" width="14.001" height="14" viewBox="0 0 14.001 14">
													<g id="cancel" transform="translate(0 -0.016)">
													  <g id="Group_2906" data-name="Group 2906" transform="translate(0 0.016)">
														<path id="Path_12318" data-name="Path 12318" d="M8.542,7.016l5.235-5.235a.767.767,0,0,0,0-1.083L13.319.24a.768.768,0,0,0-1.083,0L7,5.474,1.766.24A.767.767,0,0,0,.683.24L.224.7a.766.766,0,0,0,0,1.083L5.459,7.016.224,12.251a.768.768,0,0,0,0,1.083l.459.459a.767.767,0,0,0,1.083,0L7,8.558l5.235,5.235a.76.76,0,0,0,.541.224h0a.76.76,0,0,0,.541-.224l.459-.459a.768.768,0,0,0,0-1.083Z" transform="translate(0 -0.016)" fill="#c13636"/>
													  </g>
													</g>
												  </svg>
												</td>
											<td>
												<svg xmlns="http://www.w3.org/2000/svg" width="19.601" height="14.395" viewBox="0 0 19.601 14.395">
													<g id="tick" transform="translate(0 -67.998)">
													  <g id="Group_2907" data-name="Group 2907" transform="translate(0 67.997)">
														<path id="Path_12319" data-name="Path 12319" d="M19.314,68.285a.98.98,0,0,0-1.386,0L6.186,80.026,1.673,75.513A.98.98,0,0,0,.287,76.9l5.206,5.206a.98.98,0,0,0,1.386,0L19.314,69.671A.98.98,0,0,0,19.314,68.285Z" transform="translate(0 -67.997)" fill="#42e515"/>
													  </g>
													</g>
												  </svg>
												</td>
											<td>
												<svg xmlns="http://www.w3.org/2000/svg" width="19.601" height="14.395" viewBox="0 0 19.601 14.395">
													<g id="tick" transform="translate(0 -67.998)">
													  <g id="Group_2907" data-name="Group 2907" transform="translate(0 67.997)">
														<path id="Path_12319" data-name="Path 12319" d="M19.314,68.285a.98.98,0,0,0-1.386,0L6.186,80.026,1.673,75.513A.98.98,0,0,0,.287,76.9l5.206,5.206a.98.98,0,0,0,1.386,0L19.314,69.671A.98.98,0,0,0,19.314,68.285Z" transform="translate(0 -67.997)" fill="#42e515"/>
													  </g>
													</g>
												  </svg>
												</td>
										</tr>
										<tr>
											<td>Uptime SLA (Network) </td>
											<td>99.50%</td>
											<td>99.80%</td>
											<td>100%</td>
										</tr>
										<tr>
											<td>Uptime SLA (Power) </td>
											<td>99.50%</td>
											<td>100%</td>
											<td>100%</td>
										</tr>
										<tr>
											<td>Maximum CPU Cores </td>
											<td>12 cores</td>
											<td>16 cores</td>
											<td>48 cores</td>
										</tr>
										<tr>
											<td>SSD Disks </td>
											<td>
												<svg xmlns="http://www.w3.org/2000/svg" width="14.001" height="14" viewBox="0 0 14.001 14">
													<g id="cancel" transform="translate(0 -0.016)">
													  <g id="Group_2906" data-name="Group 2906" transform="translate(0 0.016)">
														<path id="Path_12318" data-name="Path 12318" d="M8.542,7.016l5.235-5.235a.767.767,0,0,0,0-1.083L13.319.24a.768.768,0,0,0-1.083,0L7,5.474,1.766.24A.767.767,0,0,0,.683.24L.224.7a.766.766,0,0,0,0,1.083L5.459,7.016.224,12.251a.768.768,0,0,0,0,1.083l.459.459a.767.767,0,0,0,1.083,0L7,8.558l5.235,5.235a.76.76,0,0,0,.541.224h0a.76.76,0,0,0,.541-.224l.459-.459a.768.768,0,0,0,0-1.083Z" transform="translate(0 -0.016)" fill="#c13636"/>
													  </g>
													</g>
												  </svg>
												</td>
											<td>
												<svg xmlns="http://www.w3.org/2000/svg" width="19.601" height="14.395" viewBox="0 0 19.601 14.395">
													<g id="tick" transform="translate(0 -67.998)">
													  <g id="Group_2907" data-name="Group 2907" transform="translate(0 67.997)">
														<path id="Path_12319" data-name="Path 12319" d="M19.314,68.285a.98.98,0,0,0-1.386,0L6.186,80.026,1.673,75.513A.98.98,0,0,0,.287,76.9l5.206,5.206a.98.98,0,0,0,1.386,0L19.314,69.671A.98.98,0,0,0,19.314,68.285Z" transform="translate(0 -67.997)" fill="#42e515"/>
													  </g>
													</g>
												  </svg>
												</td>
											<td>
												<svg xmlns="http://www.w3.org/2000/svg" width="19.601" height="14.395" viewBox="0 0 19.601 14.395">
													<g id="tick" transform="translate(0 -67.998)">
													  <g id="Group_2907" data-name="Group 2907" transform="translate(0 67.997)">
														<path id="Path_12319" data-name="Path 12319" d="M19.314,68.285a.98.98,0,0,0-1.386,0L6.186,80.026,1.673,75.513A.98.98,0,0,0,.287,76.9l5.206,5.206a.98.98,0,0,0,1.386,0L19.314,69.671A.98.98,0,0,0,19.314,68.285Z" transform="translate(0 -67.997)" fill="#42e515"/>
													  </g>
													</g>
												  </svg>
												</td>
										</tr>

										   <tr>
											<td></td>
											<td class="price">
												<a href="#" class="btn btn-primary mt-1">View Budget servers</a><br/>
												<span>20 configuration(s) available</span>
											</td>
											<td class="price">
												<a href="#" class="btn btn-secondary mt-1">View Pro servers</a><br/>
												<span>27 configuration(s) available</span>
											</td>
											<td class="price">
												<a href="#" class="btn btn-green mt-1">View Enterprise servers</a><br/>
												<span>56 configuration(s) available</span>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Content End-->
</div>

<?php
get_footer();?>