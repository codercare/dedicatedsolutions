<?php
/* Template Name: Bare Metal Cloud */ 

get_header();?>


<main id="fullpage" class="site-main">
<?php
while ( have_posts() ) : the_post(); 

	$banner_image_url = get_template_directory_uri() . '/dist/assets/images/bare-metal-cloud-banner.jpg';
	$banner_image     = get_field( 'background_banner' );
	if ( ! empty( $banner_image ) ) {
		$banner_image_url = $banner_image['sizes']['banner_image'];
	}
?>
	<section class="section">
		<section class="page-banner about-page-banner bmc-page-banner" style="background-image:url('<?php echo $banner_image_url; ?>')">
			<div class="wrapper">
				<div class="page-banner-content">
					<h1 class="large-banner__heading"><?php the_field( 'bare_metal_cloud_title' ); ?></h1>
					<p><?php the_field( 'bare_metal_cloud_title' ); ?></p>		
					<a href="<?php the_field( 'bare_metal_cloud_button_link' ); ?>" class="btn--orange"><?php the_field( 'bare_metal_cloud_button_label' ); ?><i class="fas fa-arrow-right"></i></a>		
				</div>
			</div>
		</section>
	
		<section class="bare-metal-navtabs">
			<div class="navTabs-pills-wrap">
				<div class="wrapper">
					<ul class="nav nav-pills" id="bmc-pills-tab" role="tablist">
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="pills-overview-tab" data-toggle="pill" href="#pills-overview" role="tab" aria-controls="pills-overview" aria-selected="false"><?php the_field( 'tab_beta_metal_title' ); ?></a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link active" id="pills-why-bmc-tab" data-toggle="pill" href="#pills-why-bmc" role="tab" aria-controls="pills-why-bmc" aria-selected="true"><?php the_field( 'tab_beta_metal_heading_title' ); ?></a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="pills-bmc-usecases-tab" data-toggle="pill" href="#pills-bmc-usecases" role="tab" aria-controls="pills-bmc-usecases" aria-selected="false"><?php the_field( 'tab_beta_metal_title_heading' ); ?></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="wrapper">
				<div class="tab-content" id="bmc-pills-tabContent">
					<div class="tab-pane fade" id="pills-overview" role="tabpanel" aria-labelledby="pills-overview-tab">
						<div class="why-bmc-block-wrap">
							<div class="row">
								<?php
								if ( have_rows( 'beta_features' ) ) : 
								while ( have_rows( 'beta_features' ) ) :
								the_row();								
								?>
								<div class="col-md-4">
									<div class="bmc-block">
										<div class="nmc-icon-box">
										<?php the_sub_field( 'svg_icon_value' ); ?>
										</div>
										<h2><?php the_sub_field( 'title' ); ?></h2>
										<p><?php the_sub_field( 'description' ); ?></p>
									</div>
								</div>
								<?php 
								endwhile; 
								endif;
								?>
							</div>
							<a href="<?php the_field( 'button_label_link' ); ?>" class="btn--orange"><?php the_field( 'button_label' ); ?></a>
						</div>
					</div>
					<div class="tab-pane fade show active" id="pills-why-bmc" role="tabpanel" aria-labelledby="pills-why-bmc-tab">
						<div class="why-bmc-block-wrap">
							<div id="bareMetalCloudBlock-carousel" class="carousel carousel-fade" data-ride="carousel" data-interval="false">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<div class="row">
											<div class="col-lg-4">
												<div class="bmc-block">
													<div class="nmc-icon-box">
														<svg xmlns="http://www.w3.org/2000/svg" width="110" height="110" viewBox="0 0 108.129 110">
															<path id="Path_12683" data-name="Path 12683" d="M35.155,52.645a6.82,6.82,0,0,0,4.995-2.8L58.1,25.039a1.918,1.918,0,0,0-2.678-2.678L30.6,40.313a6.83,6.83,0,0,0,4.014,12.353C34.8,52.666,34.975,52.659,35.155,52.645ZM31.636,45.6a2.991,2.991,0,0,1,1.221-2.189l15.136-10.95L37.047,47.6A3,3,0,0,1,31.636,45.6Z" transform="translate(23.834 17.667)"/>
															<path id="Path_12684" data-name="Path 12684" d="M81.756,35.867c-.019-.039-.019-.079-.04-.117s-.059-.057-.084-.092A50.055,50.055,0,0,0,74.8,26.842l4.117-3.936,2.71,2.592,8.131-7.779L81.625,9.942l-8.132,7.777,2.712,2.594L72.088,24.25a51.962,51.962,0,0,0-9.217-6.538c-.036-.024-.057-.059-.1-.081s-.082-.02-.123-.04a53,53,0,0,0-19.69-6.241V9.167h2.875a4.7,4.7,0,0,0,4.792-4.583A4.7,4.7,0,0,0,45.835,0H28.585a4.7,4.7,0,0,0-4.792,4.583,4.7,4.7,0,0,0,4.792,4.583H31.46v2.119a54.921,54.921,0,0,0-6.179.981,1.832,1.832,0,0,0-1.439,2.2,1.918,1.918,0,0,0,2.3,1.377,50.768,50.768,0,0,1,5.328-.875l2.057-.152c.629-.046,1.207-.079,1.771-.1v3.625a1.919,1.919,0,0,0,3.833,0V14.722a49.22,49.22,0,0,1,20.041,5.216l-1.89,3.129a1.791,1.791,0,0,0,.7,2.5,1.968,1.968,0,0,0,.956.246A1.932,1.932,0,0,0,60.6,24.9l1.884-3.122a47.3,47.3,0,0,1,14.9,14.249l-3.264,1.8a1.79,1.79,0,0,0-.7,2.5,1.934,1.934,0,0,0,1.662.917A1.968,1.968,0,0,0,76.034,41L79.306,39.2a43.978,43.978,0,0,1,5.461,19.468H80.981a1.835,1.835,0,1,0,0,3.667h3.785A43.978,43.978,0,0,1,79.306,81.8l-3.272-1.808a1.962,1.962,0,0,0-2.618.671,1.791,1.791,0,0,0,.7,2.5l3.264,1.8a47.3,47.3,0,0,1-14.9,14.249L60.6,96.1a1.962,1.962,0,0,0-2.618-.671,1.788,1.788,0,0,0-.7,2.5l1.89,3.129a49.22,49.22,0,0,1-20.041,5.216v-3.608a1.919,1.919,0,0,0-3.833,0v3.623a50.449,50.449,0,0,1-9.154-1.131,1.912,1.912,0,0,0-2.3,1.377,1.832,1.832,0,0,0,1.439,2.2A54.042,54.042,0,0,0,36.9,110c.094,0,.184-.005.278-.007.013,0,.023.007.034.007s.029-.009.044-.009a53.215,53.215,0,0,0,25.336-6.55,1.667,1.667,0,0,0,.18-.071c.038-.022.059-.057.1-.081A51.059,51.059,0,0,0,81.6,85.393a1.746,1.746,0,0,0,.115-.143c.023-.038.021-.079.04-.117a47.458,47.458,0,0,0,0-49.265Zm-.132-20.74,2.71,2.592-2.71,2.594-2.712-2.594Zm-46.33-4.088V5.5H28.585a.941.941,0,0,1-.958-.917.941.941,0,0,1,.958-.917h17.25a.941.941,0,0,1,.958.917.941.941,0,0,1-.958.917H39.127v5.539c-.667-.026-1.3-.038-1.917-.038-.054,0-.115,0-.169,0s-.1,0-.144,0c-.314,0-.629.02-.943.026C35.733,11.031,35.524,11.029,35.294,11.039Z" transform="translate(20.166)"/>
															<path id="Path_12685" data-name="Path 12685" d="M27.293,14H17.71a1.917,1.917,0,1,0,0,3.833h9.583a1.917,1.917,0,1,0,0-3.833Z" transform="translate(12.833 11.626)"/>
															<path id="Path_12686" data-name="Path 12686" d="M31.876,21H12.71a1.917,1.917,0,1,0,0,3.833H31.876a1.917,1.917,0,0,0,0-3.833Z" transform="translate(8.25 17.44)"/>
															<path id="Path_12687" data-name="Path 12687" d="M36.46,28H7.71a1.917,1.917,0,1,0,0,3.833H36.46a1.917,1.917,0,0,0,0-3.833Z" transform="translate(3.667 23.253)"/>
															<path id="Path_12688" data-name="Path 12688" d="M40.126,35H3.71a1.917,1.917,0,0,0,0,3.833H40.126a1.917,1.917,0,0,0,0-3.833Z" transform="translate(0 29.066)"/>
															<path id="Path_12689" data-name="Path 12689" d="M34.626,42H9.71a1.917,1.917,0,0,0,0,3.833H34.626a1.917,1.917,0,0,0,0-3.833Z" transform="translate(5.5 34.879)"/>
															<path id="Path_12690" data-name="Path 12690" d="M29.126,49H15.71a1.917,1.917,0,1,0,0,3.833H29.126a1.917,1.917,0,1,0,0-3.833Z" transform="translate(11 39.917)"/>
														</svg>
													</div>
													<h2>Immediate Provision</h2>
													<p>We provide and deliver industry leading SLAs including 100% uptime, and the benefit of dedicated bare metal servers and configuration to make your server up and running in an hour time max.</p>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="bmc-block">
													<div class="nmc-icon-box">
														<svg xmlns="http://www.w3.org/2000/svg" width="110" height="110" viewBox="0 0 111.987 110">
															<path id="Path_12660" data-name="Path 12660" d="M132.023,8.114a12.345,12.345,0,0,0-11.984-3.12L105.523,9.1a28.8,28.8,0,0,0-12.494,7.325l-.038.038a2.191,2.191,0,1,0,3.095,3.1l.04-.04a24.417,24.417,0,0,1,10.591-6.21l14.517-4.106a7.85,7.85,0,0,1,9.693,9.688L126.818,33.4A24.41,24.41,0,0,1,120.6,44L81.373,83.2l-6.634-6.63,11.07-11.063A7.925,7.925,0,1,0,74.6,54.3L63.528,65.364l-6.634-6.63,25.66-25.645a2.191,2.191,0,0,0-3.1-3.1l-9.762,9.756L54.006,37.562a19.553,19.553,0,0,0-16.435,5.507l-6.977,6.973a2.214,2.214,0,0,0,0,3.1l7.147,7.143a12.451,12.451,0,0,0,15.915,1.411l6.772,6.768-5.7,5.7a2.19,2.19,0,0,0,0,3.1l8.112,8.107a2.216,2.216,0,0,0,3.1,0l5.7-5.7,6.772,6.768a12.431,12.431,0,0,0,1.411,15.9l7.147,7.143a2.217,2.217,0,0,0,3.1,0l6.977-6.973a19.529,19.529,0,0,0,5.51-16.425l-2.185-15.675L123.7,47.094a28.8,28.8,0,0,0,7.336-12.5l4.109-14.508a12.236,12.236,0,0,0-3.121-11.975ZM40.841,57.185l-5.6-5.594,5.428-5.424A15.144,15.144,0,0,1,53.4,41.9l12.406,1.728L52.243,57.185a8.066,8.066,0,0,1-11.4,0ZM64.387,80.717l-5.012-5.009,5.686-5.682.017-.015L77.7,57.4a3.542,3.542,0,0,1,5.011,5.009Zm33.828,5.971a15.127,15.127,0,0,1-4.268,12.723l-5.427,5.424-5.6-5.594a8.054,8.054,0,0,1-.006-11.389l.007-.006L96.486,74.29Z" transform="translate(-23.619 -4.541)"/>
															<path id="Path_12661" data-name="Path 12661" d="M334.519,120.991a9.5,9.5,0,0,0,6.72-16.223,9.5,9.5,0,0,0-13.439,13.44A9.441,9.441,0,0,0,334.519,120.991Zm-3.726-13.229a5.269,5.269,0,1,1,0,7.451A5.318,5.318,0,0,1,330.793,107.762Z" transform="translate(-253.471 -80.551)"/>
															<path id="Path_12662" data-name="Path 12662" d="M21.829,312.368a2.117,2.117,0,1,0-2.994-2.994L.62,327.588a2.117,2.117,0,0,0,2.994,2.994Z" transform="translate(0 -241.646)"/>
															<path id="Path_12663" data-name="Path 12663" d="M36.23,389.961a2.118,2.118,0,0,0-2.994,0L12.455,410.742a2.117,2.117,0,0,0,2.994,2.994L36.23,392.955A2.117,2.117,0,0,0,36.23,389.961Z" transform="translate(-9.33 -304.348)"/>
															<path id="Path_12664" data-name="Path 12664" d="M161.613,393.264l-10.3,10.3a2.117,2.117,0,1,0,2.994,2.994l10.3-10.3a2.117,2.117,0,1,0-2.994-2.994Z" transform="translate(-117.573 -306.952)"/>
															<path id="Path_12665" data-name="Path 12665" d="M121.444,477.785a2.116,2.116,0,1,0-1.145,2.765A2.137,2.137,0,0,0,121.444,477.785Z" transform="translate(-91.67 -373.039)"/>
															<path id="Path_12666" data-name="Path 12666" d="M283.5,90.306a2.116,2.116,0,1,0,.866-2.625,2.134,2.134,0,0,0-.866,2.625Z" transform="translate(-221.286 -69.241)"/>
														</svg>
													</div>
													<h2>Maximum Performance</h2>
													<p>We provide and deliver industry leading SLAs including 100% uptime, and the benefit of dedicated bare metal servers and configuration to make your server up and running in an hour time max.</p>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="bmc-block">
													<div class="nmc-icon-box">
														<svg xmlns="http://www.w3.org/2000/svg" width="110" height="110" viewBox="0 0 126.923 110">
															<path id="Path_12667" data-name="Path 12667" d="M110.043,42.7V11.05A10.578,10.578,0,0,0,99.462.5H10.581A10.578,10.578,0,0,0,0,11.05V76.46A10.578,10.578,0,0,0,10.581,87.01h44.44V82.79H10.581a6.34,6.34,0,0,1-6.349-6.33V11.05a6.34,6.34,0,0,1,6.349-6.33H99.462a6.34,6.34,0,0,1,6.349,6.33V42.7Zm0,0" transform="translate(0 0)"/>
															<path id="Path_12668" data-name="Path 12668" d="M40,32.5h4.22v4.22H40Zm0,0" transform="translate(-29.45 -23.56)"/>
															<path id="Path_12669" data-name="Path 12669" d="M72,32.5h4.22v4.22H72Zm0,0" transform="translate(-53.01 -23.56)"/>
															<path id="Path_12670" data-name="Path 12670" d="M104,32.5h4.22v4.22H104Zm0,0" transform="translate(-76.498 -23.56)"/>
															<path id="Path_12671" data-name="Path 12671" d="M40,64.5h88.62v4.22H40Zm0,0" transform="translate(-29.45 -47.12)"/>
															<path id="Path_12672" data-name="Path 12672" d="M141.63,128.5H74.11A2.11,2.11,0,0,0,72,130.61v16.88a2.11,2.11,0,0,0,2.11,2.11H114.2v-4.22H76.22V132.72h65.41Zm0,0" transform="translate(-53.01 -94.133)"/>
															<path id="Path_12673" data-name="Path 12673" d="M104,160.5h4.22v4.22H104Zm0,0" transform="translate(-76.498 -117.688)"/>
															<path id="Path_12674" data-name="Path 12674" d="M136,160.5h4.22v4.22H136Zm0,0" transform="translate(-100.035 -117.688)"/>
															<path id="Path_12675" data-name="Path 12675" d="M168,160.5h4.22v4.22H168Zm0,0" transform="translate(-123.573 -117.688)"/>
															<path id="Path_12676" data-name="Path 12676" d="M200,160.5h4.22v4.22H200Zm0,0" transform="translate(-147.111 -117.688)"/>
															<path id="Path_12677" data-name="Path 12677" d="M232,160.5h4.22v4.22H232Zm0,0" transform="translate(-170.648 -117.688)"/>
															<path id="Path_12678" data-name="Path 12678" d="M176,224.5h12.66v4.22H176Zm0,0" transform="translate(-129.448 -164.763)"/>
															<path id="Path_12679" data-name="Path 12679" d="M112,224.5h12.66v4.22H112Zm0,0" transform="translate(-82.376 -164.763)"/>
															<path id="Path_12680" data-name="Path 12680" d="M289.41,185.82h-5.577a27.279,27.279,0,0,0-1.667-4.03l3.942-3.941a2.111,2.111,0,0,0,0-2.984l-8.953-8.953a2.111,2.111,0,0,0-2.984,0l-3.941,3.944a26.761,26.761,0,0,0-4.03-1.669V162.61a2.11,2.11,0,0,0-2.11-2.11H251.43a2.11,2.11,0,0,0-2.11,2.11v5.577a26.763,26.763,0,0,0-4.03,1.669l-3.941-3.944a2.111,2.111,0,0,0-2.984,0l-8.953,8.953a2.111,2.111,0,0,0,0,2.984l3.942,3.941a27.275,27.275,0,0,0-1.667,4.03H226.11a2.11,2.11,0,0,0-2.11,2.11v12.66a2.11,2.11,0,0,0,2.11,2.11h5.577a27.06,27.06,0,0,0,1.667,4.03l-3.942,3.941a2.111,2.111,0,0,0,0,2.984l8.953,8.953a2.111,2.111,0,0,0,2.984,0l3.941-3.944a26.76,26.76,0,0,0,4.03,1.669v5.577a2.11,2.11,0,0,0,2.11,2.11h12.66a2.11,2.11,0,0,0,2.11-2.11v-5.577a26.763,26.763,0,0,0,4.03-1.669l3.941,3.944a2.111,2.111,0,0,0,2.984,0l8.953-8.953a2.111,2.111,0,0,0,0-2.984l-3.942-3.941a27.279,27.279,0,0,0,1.667-4.03h5.577a2.11,2.11,0,0,0,2.11-2.11V187.93A2.11,2.11,0,0,0,289.41,185.82Zm-2.11,12.66h-5.051a2.109,2.109,0,0,0-2.042,1.582,23.1,23.1,0,0,1-2.47,5.969,2.11,2.11,0,0,0,.326,2.563l3.568,3.568-5.967,5.967-3.57-3.568a2.111,2.111,0,0,0-2.563-.326,23.087,23.087,0,0,1-5.967,2.47,2.109,2.109,0,0,0-1.582,2.042V223.8h-8.44v-5.051a2.109,2.109,0,0,0-1.582-2.042,23.088,23.088,0,0,1-5.967-2.47,2.11,2.11,0,0,0-2.563.326l-3.57,3.568-5.969-5.967,3.57-3.57a2.111,2.111,0,0,0,.326-2.565,23.1,23.1,0,0,1-2.472-5.965,2.109,2.109,0,0,0-2.042-1.583H228.22v-8.44h5.051a2.109,2.109,0,0,0,2.042-1.582,23.1,23.1,0,0,1,2.47-5.969,2.11,2.11,0,0,0-.326-2.563l-3.568-3.568,5.967-5.967,3.57,3.568a2.111,2.111,0,0,0,2.563.326,23.085,23.085,0,0,1,5.967-2.47,2.109,2.109,0,0,0,1.582-2.042V164.72h8.44v5.051a2.109,2.109,0,0,0,1.583,2.042,23.087,23.087,0,0,1,5.967,2.47,2.111,2.111,0,0,0,2.563-.326l3.57-3.568,5.969,5.967-3.57,3.57a2.111,2.111,0,0,0-.326,2.565,23.06,23.06,0,0,1,2.47,5.963,2.108,2.108,0,0,0,2.042,1.585H287.3Zm0,0" transform="translate(-164.597 -117.52)"/>
															<path id="Path_12681" data-name="Path 12681" d="M298.99,216.5a18.99,18.99,0,1,0,18.99,18.99A18.99,18.99,0,0,0,298.99,216.5Zm0,33.76a14.77,14.77,0,1,1,14.77-14.77A14.769,14.769,0,0,1,298.99,250.26Zm0,0" transform="translate(-205.827 -158.75)"/>
															<path id="Path_12682" data-name="Path 12682" d="M322.55,248.5a10.55,10.55,0,1,0,10.55,10.55A10.55,10.55,0,0,0,322.55,248.5Zm0,16.88a6.33,6.33,0,1,1,6.33-6.33A6.33,6.33,0,0,1,322.55,265.38Zm0,0" transform="translate(-229.458 -182.383)"/>
														</svg>
													</div>
													<h2>Customize & Optimize</h2>
													<p>We provide and deliver industry leading SLAs including 100% uptime, and the benefit of dedicated bare metal servers and configuration to make your server up and running in an hour time max.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="carousel-item">
										<div class="row">
											<div class="col-lg-4">
												<div class="bmc-block">
													<div class="nmc-icon-box">
														<svg xmlns="http://www.w3.org/2000/svg" width="110" height="110" viewBox="0 0 108.129 110">
															<path id="Path_12683" data-name="Path 12683" d="M35.155,52.645a6.82,6.82,0,0,0,4.995-2.8L58.1,25.039a1.918,1.918,0,0,0-2.678-2.678L30.6,40.313a6.83,6.83,0,0,0,4.014,12.353C34.8,52.666,34.975,52.659,35.155,52.645ZM31.636,45.6a2.991,2.991,0,0,1,1.221-2.189l15.136-10.95L37.047,47.6A3,3,0,0,1,31.636,45.6Z" transform="translate(23.834 17.667)"/>
															<path id="Path_12684" data-name="Path 12684" d="M81.756,35.867c-.019-.039-.019-.079-.04-.117s-.059-.057-.084-.092A50.055,50.055,0,0,0,74.8,26.842l4.117-3.936,2.71,2.592,8.131-7.779L81.625,9.942l-8.132,7.777,2.712,2.594L72.088,24.25a51.962,51.962,0,0,0-9.217-6.538c-.036-.024-.057-.059-.1-.081s-.082-.02-.123-.04a53,53,0,0,0-19.69-6.241V9.167h2.875a4.7,4.7,0,0,0,4.792-4.583A4.7,4.7,0,0,0,45.835,0H28.585a4.7,4.7,0,0,0-4.792,4.583,4.7,4.7,0,0,0,4.792,4.583H31.46v2.119a54.921,54.921,0,0,0-6.179.981,1.832,1.832,0,0,0-1.439,2.2,1.918,1.918,0,0,0,2.3,1.377,50.768,50.768,0,0,1,5.328-.875l2.057-.152c.629-.046,1.207-.079,1.771-.1v3.625a1.919,1.919,0,0,0,3.833,0V14.722a49.22,49.22,0,0,1,20.041,5.216l-1.89,3.129a1.791,1.791,0,0,0,.7,2.5,1.968,1.968,0,0,0,.956.246A1.932,1.932,0,0,0,60.6,24.9l1.884-3.122a47.3,47.3,0,0,1,14.9,14.249l-3.264,1.8a1.79,1.79,0,0,0-.7,2.5,1.934,1.934,0,0,0,1.662.917A1.968,1.968,0,0,0,76.034,41L79.306,39.2a43.978,43.978,0,0,1,5.461,19.468H80.981a1.835,1.835,0,1,0,0,3.667h3.785A43.978,43.978,0,0,1,79.306,81.8l-3.272-1.808a1.962,1.962,0,0,0-2.618.671,1.791,1.791,0,0,0,.7,2.5l3.264,1.8a47.3,47.3,0,0,1-14.9,14.249L60.6,96.1a1.962,1.962,0,0,0-2.618-.671,1.788,1.788,0,0,0-.7,2.5l1.89,3.129a49.22,49.22,0,0,1-20.041,5.216v-3.608a1.919,1.919,0,0,0-3.833,0v3.623a50.449,50.449,0,0,1-9.154-1.131,1.912,1.912,0,0,0-2.3,1.377,1.832,1.832,0,0,0,1.439,2.2A54.042,54.042,0,0,0,36.9,110c.094,0,.184-.005.278-.007.013,0,.023.007.034.007s.029-.009.044-.009a53.215,53.215,0,0,0,25.336-6.55,1.667,1.667,0,0,0,.18-.071c.038-.022.059-.057.1-.081A51.059,51.059,0,0,0,81.6,85.393a1.746,1.746,0,0,0,.115-.143c.023-.038.021-.079.04-.117a47.458,47.458,0,0,0,0-49.265Zm-.132-20.74,2.71,2.592-2.71,2.594-2.712-2.594Zm-46.33-4.088V5.5H28.585a.941.941,0,0,1-.958-.917.941.941,0,0,1,.958-.917h17.25a.941.941,0,0,1,.958.917.941.941,0,0,1-.958.917H39.127v5.539c-.667-.026-1.3-.038-1.917-.038-.054,0-.115,0-.169,0s-.1,0-.144,0c-.314,0-.629.02-.943.026C35.733,11.031,35.524,11.029,35.294,11.039Z" transform="translate(20.166)"/>
															<path id="Path_12685" data-name="Path 12685" d="M27.293,14H17.71a1.917,1.917,0,1,0,0,3.833h9.583a1.917,1.917,0,1,0,0-3.833Z" transform="translate(12.833 11.626)"/>
															<path id="Path_12686" data-name="Path 12686" d="M31.876,21H12.71a1.917,1.917,0,1,0,0,3.833H31.876a1.917,1.917,0,0,0,0-3.833Z" transform="translate(8.25 17.44)"/>
															<path id="Path_12687" data-name="Path 12687" d="M36.46,28H7.71a1.917,1.917,0,1,0,0,3.833H36.46a1.917,1.917,0,0,0,0-3.833Z" transform="translate(3.667 23.253)"/>
															<path id="Path_12688" data-name="Path 12688" d="M40.126,35H3.71a1.917,1.917,0,0,0,0,3.833H40.126a1.917,1.917,0,0,0,0-3.833Z" transform="translate(0 29.066)"/>
															<path id="Path_12689" data-name="Path 12689" d="M34.626,42H9.71a1.917,1.917,0,0,0,0,3.833H34.626a1.917,1.917,0,0,0,0-3.833Z" transform="translate(5.5 34.879)"/>
															<path id="Path_12690" data-name="Path 12690" d="M29.126,49H15.71a1.917,1.917,0,1,0,0,3.833H29.126a1.917,1.917,0,1,0,0-3.833Z" transform="translate(11 39.917)"/>
														</svg>
													</div>
													<h2>Database Licensing Easier</h2>
													<p>We provide and deliver industry leading SLAs including 100% uptime, and the benefit of dedicated bare metal servers and configuration to make your server up and running in an hour time max.</p>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="bmc-block">
													<div class="nmc-icon-box">
														<svg xmlns="http://www.w3.org/2000/svg" width="110" height="110" viewBox="0 0 111.987 110">
															<path id="Path_12660" data-name="Path 12660" d="M132.023,8.114a12.345,12.345,0,0,0-11.984-3.12L105.523,9.1a28.8,28.8,0,0,0-12.494,7.325l-.038.038a2.191,2.191,0,1,0,3.095,3.1l.04-.04a24.417,24.417,0,0,1,10.591-6.21l14.517-4.106a7.85,7.85,0,0,1,9.693,9.688L126.818,33.4A24.41,24.41,0,0,1,120.6,44L81.373,83.2l-6.634-6.63,11.07-11.063A7.925,7.925,0,1,0,74.6,54.3L63.528,65.364l-6.634-6.63,25.66-25.645a2.191,2.191,0,0,0-3.1-3.1l-9.762,9.756L54.006,37.562a19.553,19.553,0,0,0-16.435,5.507l-6.977,6.973a2.214,2.214,0,0,0,0,3.1l7.147,7.143a12.451,12.451,0,0,0,15.915,1.411l6.772,6.768-5.7,5.7a2.19,2.19,0,0,0,0,3.1l8.112,8.107a2.216,2.216,0,0,0,3.1,0l5.7-5.7,6.772,6.768a12.431,12.431,0,0,0,1.411,15.9l7.147,7.143a2.217,2.217,0,0,0,3.1,0l6.977-6.973a19.529,19.529,0,0,0,5.51-16.425l-2.185-15.675L123.7,47.094a28.8,28.8,0,0,0,7.336-12.5l4.109-14.508a12.236,12.236,0,0,0-3.121-11.975ZM40.841,57.185l-5.6-5.594,5.428-5.424A15.144,15.144,0,0,1,53.4,41.9l12.406,1.728L52.243,57.185a8.066,8.066,0,0,1-11.4,0ZM64.387,80.717l-5.012-5.009,5.686-5.682.017-.015L77.7,57.4a3.542,3.542,0,0,1,5.011,5.009Zm33.828,5.971a15.127,15.127,0,0,1-4.268,12.723l-5.427,5.424-5.6-5.594a8.054,8.054,0,0,1-.006-11.389l.007-.006L96.486,74.29Z" transform="translate(-23.619 -4.541)"/>
															<path id="Path_12661" data-name="Path 12661" d="M334.519,120.991a9.5,9.5,0,0,0,6.72-16.223,9.5,9.5,0,0,0-13.439,13.44A9.441,9.441,0,0,0,334.519,120.991Zm-3.726-13.229a5.269,5.269,0,1,1,0,7.451A5.318,5.318,0,0,1,330.793,107.762Z" transform="translate(-253.471 -80.551)"/>
															<path id="Path_12662" data-name="Path 12662" d="M21.829,312.368a2.117,2.117,0,1,0-2.994-2.994L.62,327.588a2.117,2.117,0,0,0,2.994,2.994Z" transform="translate(0 -241.646)"/>
															<path id="Path_12663" data-name="Path 12663" d="M36.23,389.961a2.118,2.118,0,0,0-2.994,0L12.455,410.742a2.117,2.117,0,0,0,2.994,2.994L36.23,392.955A2.117,2.117,0,0,0,36.23,389.961Z" transform="translate(-9.33 -304.348)"/>
															<path id="Path_12664" data-name="Path 12664" d="M161.613,393.264l-10.3,10.3a2.117,2.117,0,1,0,2.994,2.994l10.3-10.3a2.117,2.117,0,1,0-2.994-2.994Z" transform="translate(-117.573 -306.952)"/>
															<path id="Path_12665" data-name="Path 12665" d="M121.444,477.785a2.116,2.116,0,1,0-1.145,2.765A2.137,2.137,0,0,0,121.444,477.785Z" transform="translate(-91.67 -373.039)"/>
															<path id="Path_12666" data-name="Path 12666" d="M283.5,90.306a2.116,2.116,0,1,0,.866-2.625,2.134,2.134,0,0,0-.866,2.625Z" transform="translate(-221.286 -69.241)"/>
														</svg>
													</div>
													<h2>Application & Database Servers</h2>
													<p>We provide and deliver industry leading SLAs including 100% uptime, and the benefit of dedicated bare metal servers and configuration to make your server up and running in an hour time max.</p>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="bmc-block">
													<div class="nmc-icon-box">
														<svg xmlns="http://www.w3.org/2000/svg" width="110" height="110" viewBox="0 0 126.923 110">
															<path id="Path_12667" data-name="Path 12667" d="M110.043,42.7V11.05A10.578,10.578,0,0,0,99.462.5H10.581A10.578,10.578,0,0,0,0,11.05V76.46A10.578,10.578,0,0,0,10.581,87.01h44.44V82.79H10.581a6.34,6.34,0,0,1-6.349-6.33V11.05a6.34,6.34,0,0,1,6.349-6.33H99.462a6.34,6.34,0,0,1,6.349,6.33V42.7Zm0,0" transform="translate(0 0)"/>
															<path id="Path_12668" data-name="Path 12668" d="M40,32.5h4.22v4.22H40Zm0,0" transform="translate(-29.45 -23.56)"/>
															<path id="Path_12669" data-name="Path 12669" d="M72,32.5h4.22v4.22H72Zm0,0" transform="translate(-53.01 -23.56)"/>
															<path id="Path_12670" data-name="Path 12670" d="M104,32.5h4.22v4.22H104Zm0,0" transform="translate(-76.498 -23.56)"/>
															<path id="Path_12671" data-name="Path 12671" d="M40,64.5h88.62v4.22H40Zm0,0" transform="translate(-29.45 -47.12)"/>
															<path id="Path_12672" data-name="Path 12672" d="M141.63,128.5H74.11A2.11,2.11,0,0,0,72,130.61v16.88a2.11,2.11,0,0,0,2.11,2.11H114.2v-4.22H76.22V132.72h65.41Zm0,0" transform="translate(-53.01 -94.133)"/>
															<path id="Path_12673" data-name="Path 12673" d="M104,160.5h4.22v4.22H104Zm0,0" transform="translate(-76.498 -117.688)"/>
															<path id="Path_12674" data-name="Path 12674" d="M136,160.5h4.22v4.22H136Zm0,0" transform="translate(-100.035 -117.688)"/>
															<path id="Path_12675" data-name="Path 12675" d="M168,160.5h4.22v4.22H168Zm0,0" transform="translate(-123.573 -117.688)"/>
															<path id="Path_12676" data-name="Path 12676" d="M200,160.5h4.22v4.22H200Zm0,0" transform="translate(-147.111 -117.688)"/>
															<path id="Path_12677" data-name="Path 12677" d="M232,160.5h4.22v4.22H232Zm0,0" transform="translate(-170.648 -117.688)"/>
															<path id="Path_12678" data-name="Path 12678" d="M176,224.5h12.66v4.22H176Zm0,0" transform="translate(-129.448 -164.763)"/>
															<path id="Path_12679" data-name="Path 12679" d="M112,224.5h12.66v4.22H112Zm0,0" transform="translate(-82.376 -164.763)"/>
															<path id="Path_12680" data-name="Path 12680" d="M289.41,185.82h-5.577a27.279,27.279,0,0,0-1.667-4.03l3.942-3.941a2.111,2.111,0,0,0,0-2.984l-8.953-8.953a2.111,2.111,0,0,0-2.984,0l-3.941,3.944a26.761,26.761,0,0,0-4.03-1.669V162.61a2.11,2.11,0,0,0-2.11-2.11H251.43a2.11,2.11,0,0,0-2.11,2.11v5.577a26.763,26.763,0,0,0-4.03,1.669l-3.941-3.944a2.111,2.111,0,0,0-2.984,0l-8.953,8.953a2.111,2.111,0,0,0,0,2.984l3.942,3.941a27.275,27.275,0,0,0-1.667,4.03H226.11a2.11,2.11,0,0,0-2.11,2.11v12.66a2.11,2.11,0,0,0,2.11,2.11h5.577a27.06,27.06,0,0,0,1.667,4.03l-3.942,3.941a2.111,2.111,0,0,0,0,2.984l8.953,8.953a2.111,2.111,0,0,0,2.984,0l3.941-3.944a26.76,26.76,0,0,0,4.03,1.669v5.577a2.11,2.11,0,0,0,2.11,2.11h12.66a2.11,2.11,0,0,0,2.11-2.11v-5.577a26.763,26.763,0,0,0,4.03-1.669l3.941,3.944a2.111,2.111,0,0,0,2.984,0l8.953-8.953a2.111,2.111,0,0,0,0-2.984l-3.942-3.941a27.279,27.279,0,0,0,1.667-4.03h5.577a2.11,2.11,0,0,0,2.11-2.11V187.93A2.11,2.11,0,0,0,289.41,185.82Zm-2.11,12.66h-5.051a2.109,2.109,0,0,0-2.042,1.582,23.1,23.1,0,0,1-2.47,5.969,2.11,2.11,0,0,0,.326,2.563l3.568,3.568-5.967,5.967-3.57-3.568a2.111,2.111,0,0,0-2.563-.326,23.087,23.087,0,0,1-5.967,2.47,2.109,2.109,0,0,0-1.582,2.042V223.8h-8.44v-5.051a2.109,2.109,0,0,0-1.582-2.042,23.088,23.088,0,0,1-5.967-2.47,2.11,2.11,0,0,0-2.563.326l-3.57,3.568-5.969-5.967,3.57-3.57a2.111,2.111,0,0,0,.326-2.565,23.1,23.1,0,0,1-2.472-5.965,2.109,2.109,0,0,0-2.042-1.583H228.22v-8.44h5.051a2.109,2.109,0,0,0,2.042-1.582,23.1,23.1,0,0,1,2.47-5.969,2.11,2.11,0,0,0-.326-2.563l-3.568-3.568,5.967-5.967,3.57,3.568a2.111,2.111,0,0,0,2.563.326,23.085,23.085,0,0,1,5.967-2.47,2.109,2.109,0,0,0,1.582-2.042V164.72h8.44v5.051a2.109,2.109,0,0,0,1.583,2.042,23.087,23.087,0,0,1,5.967,2.47,2.111,2.111,0,0,0,2.563-.326l3.57-3.568,5.969,5.967-3.57,3.57a2.111,2.111,0,0,0-.326,2.565,23.06,23.06,0,0,1,2.47,5.963,2.108,2.108,0,0,0,2.042,1.585H287.3Zm0,0" transform="translate(-164.597 -117.52)"/>
															<path id="Path_12681" data-name="Path 12681" d="M298.99,216.5a18.99,18.99,0,1,0,18.99,18.99A18.99,18.99,0,0,0,298.99,216.5Zm0,33.76a14.77,14.77,0,1,1,14.77-14.77A14.769,14.769,0,0,1,298.99,250.26Zm0,0" transform="translate(-205.827 -158.75)"/>
															<path id="Path_12682" data-name="Path 12682" d="M322.55,248.5a10.55,10.55,0,1,0,10.55,10.55A10.55,10.55,0,0,0,322.55,248.5Zm0,16.88a6.33,6.33,0,1,1,6.33-6.33A6.33,6.33,0,0,1,322.55,265.38Zm0,0" transform="translate(-229.458 -182.383)"/>
														</svg>
													</div>
													<h2>Non-Virtualized Applications</h2>
													<p>We provide and deliver industry leading SLAs including 100% uptime, and the benefit of dedicated bare metal servers and configuration to make your server up and running in an hour time max.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<a class="carousel-control-next" href="#bareMetalCloudBlock-carousel" role="button" data-slide="next">
									<i class="fas fa-angle-right"></i>
								</a>
							</div>
							<!-- <div class="row">
							    <?php
								// if ( have_rows( 'why_features' ) ) : 
								// while ( have_rows( 'why_features' ) ) :
								// the_row();								
								?>
								<div class="col-md-4">
									<div class="bmc-block">
										<div class="nmc-icon-box">
										<?php // the_sub_field( 'svg_icon_value' ); ?>
										</div>
										<h2><?php // the_sub_field( 'title' ); ?></h2>
										<p><?php // the_sub_field( 'description' ); ?></p>
									</div>
								</div>
								<?php 
								// endwhile; 
								// endif;
								?>
							</div> -->
							<a href="<?php the_field( 'button_label_link' ); ?>" class="btn--orange"><?php the_field( 'button_label' ); ?></a>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-bmc-usecases" role="tabpanel" aria-labelledby="pills-bmc-usecases-tab">
						<div class="why-bmc-block-wrap">
							<div class="row">
								<?php
								if ( have_rows( 'metal_features' ) ) : 
								while ( have_rows( 'metal_features' ) ) :
								the_row();								
								?>
								<div class="col-md-4">
									<div class="bmc-block">
										<div class="nmc-icon-box">
										<?php the_sub_field( 'svg_icon_value' ); ?>
										</div>
										<h2><?php the_sub_field( 'title' ); ?></h2>
										<p><?php the_sub_field( 'description' ); ?></p>
									</div>
								</div>
								<?php 
								endwhile; 
								endif;
								?>								
							</div>
							<a href="<?php the_field( 'button_label_link' ); ?>" class="btn--orange"><?php the_field( 'button_label' ); ?></a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>

	<section class="bare-metal-power section">
		<div class="wrapper">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title"><?php the_field( 'get_the_power_in_an_instant_title' ); ?></h2>
				<span class="section-header__decoration-element--dark"></span>
				<h4 class="section-header__Orangesub-title"><?php the_field( 'get_the_power_in_an_instant_short_detail' ); ?></h4>
			</div>
			<div class="row align-items-center">
				<div class="col-md-7">
					<figure class="thumbnail-img">
					
						<?php	
						$power_instance_image_url = '';
						$power_image     = get_field( 'get_the_power_image' );
						if ( ! empty( $power_image ) ) {
							$power_instance_image_url = $power_image['url'];
						}
						?>
						<img src="<?php echo $power_instance_image_url; ?>" alt="bmc-instant-figure-2">
					</figure>
				</div>
				<div class="col-md-5">
					<div class="bmc-power-instant-content">
						<?php
						if ( have_rows( 'feature_lists' ) ) : 
						$counter_card = 1;
						while ( have_rows( 'feature_lists' ) ) :
						the_row();
						$power_feature_image = '';
						$power_feature     = get_sub_field( 'icon' );
						if ( ! empty( $power_feature ) ) {
							$power_feature_image = $power_feature['sizes']['mid_icon'];
						}
					    ?>
						<div class="bmc-power-instant-block">
							<div class="bmc-power-instant-icon">
								<div class="bmc-power-instant-icon--inner">
									<img src="<?php echo $power_feature_image; ?>" alt="bmc-instant-icon-1">
								</div>
							</div>
							<h3><?php the_sub_field( 'label' ); ?></h3>
						</div>
						<?php 
						$counter_card++;
						endwhile; 
						endif;
						?>
					</div>
				</div>
			</div>
		</div>
	</section>

	
	<?php if(get_field('showhide_popular_dedicated_server')){ ?>
	<section class="popular-dedicated-server section">
		<div class="wrappper">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title">Our Most Popular Dedicated Server</h2>
				<span class="section-header__decoration-element"></span>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4">
					<div class="server-type-block-wrap">
						<h3><i><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/servers.png'; ?>" alt="servers"></i>Budget Servers</h3>
						<h4>Our Best Selling Budget Servers</h4>
						<div class="row">
							<?php
							global $post;
							
							$budget_query = array(
								'posts_per_page' => 4,
								'post_type'      => 'product',
								'tax_query' => array(
									array(
										'taxonomy' => 'product_cat',
										'field'    => 'slug',
										'terms'    => array( 'budget-servers' ),
									)
								)
							);		
														
							$budget_server = new WP_Query($budget_query);
							if ( $budget_server->have_posts() ) :
							while ( $budget_server->have_posts() ) : $budget_server->the_post(); 
							?>
							<div class="col-md-6">
								<div class="server-type-block">
									<div class="server-tye-header">
										<h5><?php the_title(); ?> <span><?php the_field( 'server_ghz' ); ?></span></h5>
									</div>
									<div class="server-type-logo">
										<?php
										$server_list_icon = '';
										$serv_icon_image = get_field('server_icon', get_the_ID());
										if ( ! empty( $serv_icon_image ) ) {
											$server_list_icon = $serv_icon_image['url'];
										}
										?>
										<span><img src="<?php echo $server_list_icon; ?>" alt="<?php the_title(); ?>"  class="server-icon-image"></span>
									</div>
									<ul>
										<li>Server - <?php the_field( 'server_ghz' ); ?></li>
										<li>HDD - <?php $hdd = get_field( 'hdd' );  $raid = get_field( 'raid' ); echo strlimit(strip_tags($hdd.' '.$raid),'25','');  ?></li>
										<li>RAM - <?php the_field( 'ram' ); ?></li>
										<li>PORT - <?php the_field( 'port' ); ?></li>
										<li>LOCATION  - <?php the_field( 'location' ); ?></li>
									</ul>
									<a href="<?php the_field( 'instance_order_link' ); ?>" class="btn--orange">Order (Instant) <i class="fas fa-arrow-right"></i></a>
								</div>
							</div>
							<?php
							endwhile; 
							wp_reset_postdata();
							endif; 
							?>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="server-type-block-wrap">
						<h3><i><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/servers.png'; ?>" alt="servers"></i>Pro Servers</h3>
						<h4>Our Best Selling Pro Servers</h4>
						<div class="row">
							<?php
							global $post;
							
							$pro_query = array(
								'posts_per_page' => 4,
								'post_type'      => 'product',
								'tax_query' => array(
									array(
										'taxonomy' => 'product_cat',
										'field'    => 'slug',
										'terms'    => array( 'pro-servers' ),
									)
								)
							);		
														
							$pro_server = new WP_Query($pro_query);
							if ( $pro_server->have_posts() ) :
							while ( $pro_server->have_posts() ) : $pro_server->the_post(); 
							?>
							<div class="col-md-6">
								<div class="server-type-block">
									<div class="server-tye-header">
										<h5><?php the_title(); ?> <span><?php the_field( 'server_ghz' ); ?></span></h5>
									</div>
									<div class="server-type-logo">
										<?php
										$server_list_icon = '';
										$serv_icon_image = get_field('server_icon', get_the_ID());
										if ( ! empty( $serv_icon_image ) ) {
											$server_list_icon = $serv_icon_image['url'];
										}
										?>
										<span><img src="<?php echo $server_list_icon; ?>" alt="<?php the_title(); ?>"  class="server-icon-image"></span>
									</div>
									<ul>
										<li>Server - <?php the_field( 'server_ghz' ); ?></li>
										<li>HDD - <?php $hdd = get_field( 'hdd' );  $raid = get_field( 'raid' ); echo strlimit(strip_tags($hdd.' '.$raid),'25','');  ?></li>
										<li>RAM - <?php the_field( 'ram' ); ?></li>
										<li>PORT - <?php the_field( 'port' ); ?></li>
										<li>LOCATION  - <?php the_field( 'location' ); ?></li>
									</ul>
									<a href="<?php the_field( 'instance_order_link' ); ?>" class="btn--orange blue">Order (Instant) <i class="fas fa-arrow-right"></i></a>
								</div>
							</div>
							<?php 
							endwhile; 
							wp_reset_postdata();
							endif;
							?>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="server-type-block-wrap">
						<h3><i><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/servers.png'; ?>" alt="servers"></i>Enterprise Servers</h3>
						<h4>Our Best Selling Enterprise Servers</h4>
						<div class="row">
						    <?php
							global $post;
							
							$enterprise_query = array(
								'posts_per_page' => 4,
								'post_type'      => 'product',
								'tax_query' => array(
									array(
										'taxonomy' => 'product_cat',
										'field'    => 'slug',
										'terms'    => array( 'enterprise-servers' ),
									)
								)
							);		
														
							$enterprise_server = new WP_Query($enterprise_query);
							if ( $enterprise_server->have_posts() ) :
							while ( $enterprise_server->have_posts() ) : $enterprise_server->the_post(); 
							?>
							<div class="col-md-6">
								<div class="server-type-block">
									<div class="server-tye-header">
										<h5><?php the_title(); ?> <span><?php the_field( 'server_ghz' ); ?></span></h5>
									</div>
									<div class="server-type-logo">
										<?php
										$server_list_icon = '';
										$serv_icon_image = get_field('server_icon', get_the_ID());
										if ( ! empty( $serv_icon_image ) ) {
											$server_list_icon = $serv_icon_image['url'];
										}
										?>
										<span><img src="<?php echo $server_list_icon; ?>" alt="<?php the_title(); ?>" class="server-icon-image"></span>
									</div>
									<ul>
										<li>Server - <?php the_field( 'server_ghz' ); ?></li>
										<li>HDD - <?php $hdd = get_field( 'hdd' );  $raid = get_field( 'raid' ); echo strlimit(strip_tags($hdd.' '.$raid),'25','');  ?></li>
										<li>RAM - <?php the_field( 'ram' ); ?></li>
										<li>PORT - <?php the_field( 'port' ); ?></li>
										<li>LOCATION  - <?php the_field( 'location' ); ?></li>
									</ul>
									<a href="<?php the_field( 'instance_order_link' ); ?>" class="btn--orange success">Order (Instant) <i class="fas fa-arrow-right"></i></a>
								</div>
							</div>
							<?php 
							endwhile; 
							wp_reset_postdata();
							endif;
							?>							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php } ?>
<?php endwhile; // end of the loop. ?>
</main>


<?php get_footer(); ?>