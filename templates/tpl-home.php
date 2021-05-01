<?php
/* Template Name: Home page */ 

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();
	?>
	<!--Content (Banner)-->
	<div id="fullpage">
    <section class="section fix-height-container">
        <div class="content-wrapper">
			<?php
			$banner_image_url = '';
			$banner_image = get_field( 'banner_image' );
			if ( ! empty($banner_image) ) {
				$banner_image_url = $banner_image['url'];
			}
			?>
            <div class="banner-wrapper" style="background-image: url(<?php echo $banner_image_url;?>);">
                <div class="banner-text">
                    <h1><?php the_field( 'banner_title' ); ?></h1>
                    <div>
                        <a href="<?php the_field( 'banner_dedicated_server_button_link' ); ?>" class="btn btn-primary navbar-btn ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="btn-icon" width="22.716" height="22.716"
                                viewBox="0 0 22.716 22.716">
                                <g id="servers" transform="translate(0)">
                                    <path id="Path_6142" data-name="Path 6142"
                                        d="M133.959,114.521a.333.333,0,0,0-.333.333v1.33a.333.333,0,0,0,.333.333h1.331a.333.333,0,0,0,.333-.333v-1.33a.333.333,0,0,0-.333-.333Zm1,1.33h-.666v-.665h.666Z"
                                        transform="translate(-127.697 -109.44)" fill="#fff" />
                                    <path id="Path_6143" data-name="Path 6143"
                                        d="M193.626,114.854v1.33a.333.333,0,0,0,.333.333h1.331a.333.333,0,0,0,.333-.333v-1.33a.333.333,0,0,0-.333-.333h-1.331A.333.333,0,0,0,193.626,114.854Zm.665.333h.666v.665h-.666Z"
                                        transform="translate(-185.035 -109.44)" fill="#fff" />
                                    <path id="Path_6144" data-name="Path 6144"
                                        d="M133.959,235.007h1.331a.333.333,0,0,0,.333-.333v-1.33a.333.333,0,0,0-.333-.333h-1.331a.333.333,0,0,0-.333.333v1.33A.333.333,0,0,0,133.959,235.007Zm.333-1.33h.666v.665h-.666Z"
                                        transform="translate(-127.697 -222.673)" fill="#fff" />
                                    <path id="Path_6145" data-name="Path 6145"
                                        d="M193.959,235.007h1.331a.333.333,0,0,0,.333-.333v-1.33a.333.333,0,0,0-.333-.333h-1.331a.333.333,0,0,0-.333.333v1.33A.333.333,0,0,0,193.959,235.007Zm.333-1.33h.666v.665h-.666Z"
                                        transform="translate(-185.035 -222.673)" fill="#fff" />
                                    <path id="Path_6146" data-name="Path 6146"
                                        d="M133.959,353.5h1.331a.333.333,0,0,0,.333-.333v-1.33a.333.333,0,0,0-.333-.333h-1.331a.333.333,0,0,0-.333.333v1.33A.333.333,0,0,0,133.959,353.5Zm.333-1.33h.666v.665h-.666Z"
                                        transform="translate(-127.697 -335.906)" fill="#fff" />
                                    <path id="Path_6147" data-name="Path 6147"
                                        d="M193.959,353.5h1.331a.333.333,0,0,0,.333-.333v-1.33a.333.333,0,0,0-.333-.333h-1.331a.333.333,0,0,0-.333.333v1.33A.333.333,0,0,0,193.959,353.5Zm.333-1.33h.666v.665h-.666Z"
                                        transform="translate(-185.035 -335.906)" fill="#fff" />
                                    <path id="Path_6148" data-name="Path 6148"
                                        d="M22.383,0H21.052a.333.333,0,0,0-.333.333V.664H16.065a.333.333,0,0,0-.24.1l-.936.934a.333.333,0,0,0-.1.235V3.783h-3.1V1.994h.333a.333.333,0,0,0,.333-.333V.333A.333.333,0,0,0,12.024,0H10.693a.333.333,0,0,0-.333.333V1.661a.333.333,0,0,0,.333.333h.333V3.783H10.3a.333.333,0,1,0,0,.666h7.154V7.71H5.258V4.448H8.77a.333.333,0,0,0,0-.666H7.925V1.937a.333.333,0,0,0-.1-.235L6.893.768a.333.333,0,0,0-.242-.1H2V.333A.333.333,0,0,0,1.664,0H.333A.333.333,0,0,0,0,.333V1.661a.333.333,0,0,0,.333.333H1.664A.333.333,0,0,0,2,1.661V1.33H6.514l.746.745V3.783H4.925a.333.333,0,0,0-.333.333V8.042a.333.333,0,0,0,.333.333h.555V9.04H4.925a.333.333,0,0,0-.333.333V13.3a.333.333,0,0,0,.333.333h.555V14.3H4.925a.333.333,0,0,0-.333.333v3.927a.333.333,0,0,0,.333.333H7.26v1.752l-.746.745H2v-.332a.333.333,0,0,0-.333-.333H.333A.333.333,0,0,0,0,21.055v1.329a.333.333,0,0,0,.333.333H1.664A.333.333,0,0,0,2,22.383v-.332H6.651a.333.333,0,0,0,.24-.1l.936-.934a.333.333,0,0,0,.1-.235v-1.89h3.1v1.833h-.333a.333.333,0,0,0-.333.333v1.329a.333.333,0,0,0,.333.333h1.331a.333.333,0,0,0,.333-.333V21.055a.333.333,0,0,0-.333-.333h-.333V18.889h3.1v1.89a.333.333,0,0,0,.1.235l.934.933a.333.333,0,0,0,.242.1H20.72v.332a.333.333,0,0,0,.333.333h1.331a.333.333,0,0,0,.333-.333V21.055a.333.333,0,0,0-.333-.333H21.052a.333.333,0,0,0-.333.333v.332H16.2l-.746-.745V18.889h2.335a.333.333,0,0,0,.333-.333V14.63a.333.333,0,0,0-.333-.333h-.555v-.665h.555a.333.333,0,0,0,.333-.333V9.372a.333.333,0,0,0-.333-.333h-.555V8.375h.555a.333.333,0,0,0,.333-.333V4.115a.333.333,0,0,0-.333-.333H15.456V2.075L16.2,1.33H20.72v.332a.333.333,0,0,0,.333.333h1.331a.333.333,0,0,0,.333-.333V.333A.333.333,0,0,0,22.383,0ZM11.025.666h.666v.663h-.666Zm-9.694.663H.665V.666h.666Zm0,20.722H.665v-.663h.666Zm20.054-.663h.666v.663h-.666ZM6.145,8.375H16.571V9.04H6.145Zm5.546,13.676h-.666v-.663h.666Zm5.768-7.088v3.262H5.258V14.962Zm0-5.257v3.262h-2.69a.333.333,0,1,0,0,.666h1.8V14.3H6.145v-.665H13.2a.333.333,0,1,0,0-.666H5.258V9.705Zm4.592-8.377h-.666V.666h.666Z"
                                        fill="#fff" />
                                    <path id="Path_6149" data-name="Path 6149"
                                        d="M264.453,367.155a.333.333,0,1,0-.333-.333A.333.333,0,0,0,264.453,367.155Z"
                                        transform="translate(-252.402 -350.229)" fill="#fff" />
                                    <path id="Path_6150" data-name="Path 6150"
                                        d="M307.953,367.155a.333.333,0,1,0-.333-.333A.333.333,0,0,0,307.953,367.155Z"
                                        transform="translate(-293.972 -350.229)" fill="#fff" />
                                    <path id="Path_6151" data-name="Path 6151"
                                        d="M351.453,367.155a.333.333,0,1,0-.333-.333A.333.333,0,0,0,351.453,367.155Z"
                                        transform="translate(-335.542 -350.229)" fill="#fff" />
                                    <path id="Path_6152" data-name="Path 6152"
                                        d="M264.453,248.584a.333.333,0,1,0-.333-.333A.333.333,0,0,0,264.453,248.584Z"
                                        transform="translate(-252.402 -236.918)" fill="#fff" />
                                    <path id="Path_6153" data-name="Path 6153"
                                        d="M307.953,248.584a.333.333,0,1,0-.333-.333A.333.333,0,0,0,307.953,248.584Z"
                                        transform="translate(-293.972 -236.918)" fill="#fff" />
                                    <path id="Path_6154" data-name="Path 6154"
                                        d="M351.453,248.584a.333.333,0,1,0-.333-.333A.333.333,0,0,0,351.453,248.584Z"
                                        transform="translate(-335.542 -236.918)" fill="#fff" />
                                    <path id="Path_6155" data-name="Path 6155"
                                        d="M264.785,129.691a.333.333,0,1,0-.333.333A.333.333,0,0,0,264.785,129.691Z"
                                        transform="translate(-252.402 -123.619)" fill="#fff" />
                                    <path id="Path_6156" data-name="Path 6156"
                                        d="M308.286,129.691a.333.333,0,1,0-.333.333A.333.333,0,0,0,308.286,129.691Z"
                                        transform="translate(-293.972 -123.619)" fill="#fff" />
                                    <path id="Path_6157" data-name="Path 6157"
                                        d="M351.785,129.691a.333.333,0,1,0-.333.333A.333.333,0,0,0,351.785,129.691Z"
                                        transform="translate(-335.542 -123.619)" fill="#fff" />
                                </g>
                            </svg>
                            <?php the_field( 'banner_dedicated_server_button_label' ); ?></a>
                        <a href="<?php the_field( 'banner_private_cloud_button_link' ); ?>" class="btn btn-primary navbar-btn "><svg xmlns="http://www.w3.org/2000/svg"
                                class="btn-icon" width="24.02" height="22.471" viewBox="0 0 24.02 22.471">
                                <g id="server" transform="translate(-7.99 -23.971)">
                                    <path id="Path_6131" data-name="Path 6131"
                                        d="M31.623,44.892H23.487V44.5a.387.387,0,0,0-.387-.387H21.163v-.775a.387.387,0,0,0-.387-.387h-.387v-.775h5.23a1.357,1.357,0,0,0,1.356-1.356V39.469h.387A4.649,4.649,0,0,0,28.8,30.4a7.749,7.749,0,0,0-14.171-2.84,3.487,3.487,0,0,0-4.308,3.233,4.649,4.649,0,0,0,2.321,8.677h.387v1.356a1.357,1.357,0,0,0,1.356,1.356h5.23v.775h-.387a.387.387,0,0,0-.387.387v.775H16.9a.387.387,0,0,0-.387.387v.387H8.379a.387.387,0,0,0,0,.775h8.135v.387a.387.387,0,0,0,.387.387h6.2a.387.387,0,0,0,.387-.387v-.387h8.135a.387.387,0,0,0,0-.775Zm-8.135-7.361h-9.1a.582.582,0,0,1-.581-.581V35.014a.582.582,0,0,1,.581-.581h9.1Zm0-3.874h-9.1a.582.582,0,0,1-.581-.581V31.14a.582.582,0,0,1,.581-.581h9.1Zm1.162,7.748h-.387v-3.1h.387Zm0-3.874h-.387v-3.1h.387Zm0-3.874h-.387v-3.1h.387Zm1.55,7.167a.582.582,0,0,1-.581.581h-.194v-3.1h.194a.582.582,0,0,1,.581.581Zm0-3.874a.582.582,0,0,1-.581.581h-.194v-3.1h.194a.582.582,0,0,1,.581.581Zm0-3.874a.582.582,0,0,1-.581.581h-.194v-3.1h.194a.582.582,0,0,1,.581.581ZM13.436,37.919a1.355,1.355,0,0,0-.394.775h-.4a3.875,3.875,0,0,1-1.759-7.327.387.387,0,0,0,.211-.352c0-.013,0-.024,0-.036s0-.022,0-.033a2.712,2.712,0,0,1,3.588-2.567.387.387,0,0,0,.46-.171,6.974,6.974,0,0,1,12.931,2.545.386.386,0,0,0,.285.321,3.875,3.875,0,0,1-.993,7.62h-.4a1.355,1.355,0,0,0-.394-.775,1.351,1.351,0,0,0,.408-.969V35.014a1.351,1.351,0,0,0-.408-.968,1.351,1.351,0,0,0,.408-.968V31.14a1.357,1.357,0,0,0-1.356-1.356H14.384a1.357,1.357,0,0,0-1.356,1.356v1.937a1.351,1.351,0,0,0,.408.968,1.351,1.351,0,0,0-.408.968v1.937a1.351,1.351,0,0,0,.408.969Zm.948,3.487a.582.582,0,0,1-.581-.581V38.888a.582.582,0,0,1,.581-.581h9.1v3.1Zm5.23,2.324h.775v.387h-.775Zm3.1,1.937H17.289v-.775h5.424Z"
                                        transform="translate(0 0)" fill="#fff" />
                                    <path id="Path_6132" data-name="Path 6132"
                                        d="M137.162,328a1.162,1.162,0,1,0,1.162,1.162A1.162,1.162,0,0,0,137.162,328Zm0,1.55a.387.387,0,1,1,.387-.387A.387.387,0,0,1,137.162,329.55Z"
                                        transform="translate(-121.81 -289.306)" fill="#fff" />
                                    <path id="Path_6133" data-name="Path 6133"
                                        d="M193.162,328a1.162,1.162,0,1,0,1.162,1.162A1.162,1.162,0,0,0,193.162,328Zm0,1.55a.387.387,0,1,1,.387-.387A.387.387,0,0,1,193.162,329.55Z"
                                        transform="translate(-175.098 -289.306)" fill="#fff" />
                                    <path id="Path_6134" data-name="Path 6134"
                                        d="M256.387,336.775h2.324a.387.387,0,0,0,0-.775h-2.324a.387.387,0,0,0,0,.775Z"
                                        transform="translate(-235.999 -296.919)" fill="#fff" />
                                    <path id="Path_6135" data-name="Path 6135"
                                        d="M137.162,248a1.162,1.162,0,1,0,1.162,1.162A1.162,1.162,0,0,0,137.162,248Zm0,1.55a.387.387,0,1,1,.387-.387A.387.387,0,0,1,137.162,249.55Z"
                                        transform="translate(-121.81 -213.18)" fill="#fff" />
                                    <path id="Path_6136" data-name="Path 6136"
                                        d="M193.162,248a1.162,1.162,0,1,0,1.162,1.162A1.162,1.162,0,0,0,193.162,248Zm0,1.55a.387.387,0,1,1,.387-.387A.387.387,0,0,1,193.162,249.55Z"
                                        transform="translate(-175.098 -213.18)" fill="#fff" />
                                    <path id="Path_6137" data-name="Path 6137"
                                        d="M258.712,256h-2.324a.387.387,0,0,0,0,.775h2.324a.387.387,0,0,0,0-.775Z"
                                        transform="translate(-235.999 -220.793)" fill="#fff" />
                                    <path id="Path_6138" data-name="Path 6138"
                                        d="M137.162,168a1.162,1.162,0,1,0,1.162,1.162A1.162,1.162,0,0,0,137.162,168Zm0,1.55a.387.387,0,1,1,.387-.387A.387.387,0,0,1,137.162,169.55Z"
                                        transform="translate(-121.81 -137.054)" fill="#fff" />
                                    <path id="Path_6139" data-name="Path 6139"
                                        d="M193.162,168a1.162,1.162,0,1,0,1.162,1.162A1.162,1.162,0,0,0,193.162,168Zm0,1.55a.387.387,0,1,1,.387-.387A.387.387,0,0,1,193.162,169.55Z"
                                        transform="translate(-175.098 -137.054)" fill="#fff" />
                                    <path id="Path_6140" data-name="Path 6140"
                                        d="M258.712,176h-2.324a.387.387,0,0,0,0,.775h2.324a.387.387,0,0,0,0-.775Z"
                                        transform="translate(-235.999 -144.667)" fill="#fff" />
                                    <path id="Path_6141" data-name="Path 6141"
                                        d="M289.162,360h-.775a.387.387,0,0,0,0,.775h.775a.387.387,0,0,0,0-.775Z"
                                        transform="translate(-266.45 -319.756)" fill="#fff" />
                                </g>
                            </svg><?php the_field( 'banner_private_cloud_button_label' ); ?></a>
                    </div>
                    <div>
						<?php
						// Check rows exists.
						if( have_rows('banner_feature_list') ):
							echo '<ul class="banner-link-list">';
							// Loop through rows.
							while( have_rows('banner_feature_list') ) : the_row();
								// Load sub field value.
								$feature_list_title = get_sub_field('feature_list_title');
								?>
								<li class="banner-link">
									<a href="#">
										<svg xmlns="http://www.w3.org/2000/svg" class="link-icon" width="20" height="20"
											viewBox="0 0 20 20">
											<path id="check"
												d="M10,0A10,10,0,1,0,20,10,10.011,10.011,0,0,0,10,0Zm5.068,7.881L9.652,13.3a.833.833,0,0,1-1.178,0L5.765,10.589A.833.833,0,0,1,6.944,9.411L9.063,11.53,13.89,6.7a.833.833,0,0,1,1.178,1.178Zm0,0"
												fill="#f80" />
										</svg>
										<?php echo $feature_list_title; ?></a>
								</li>
								<?php
							// End loop.
							endwhile;
							echo '</ul>';
						endif;
						?>
                        <button class="btn btn-black btn-learn ">Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" class="btn-icon" width="23.828" height="22"
                                viewBox="0 0 23.828 22">
                                <g id="Icon_feather-arrow-down" data-name="Icon feather-arrow-down"
                                    transform="translate(-6.086 -7.5)">
                                    <path id="Path_12034" data-name="Path 12034" d="M18,7.5v20"
                                        transform="translate(0 1)" fill="none" stroke="#fff" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" />
                                    <path id="Path_12035" data-name="Path 12035" d="M28.5,18,18,28.5,7.5,18" fill="none"
                                        stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                </g>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="client-section">
                <div class="container">
                    <div class="client-logo-wrapper">
						<?php
						// Check rows exists.
						if( have_rows('home_clients') ):
							// Loop through rows.
							while( have_rows('home_clients') ) : the_row();
								// Load sub field value.
								$client_logo = get_sub_field('client_logo');
								if ( ! empty($client_logo) ) {
									$client_logo_url = $client_logo['url'];
									?>
									<img src="<?php echo $client_logo_url?>" alt="client-logo" />
									<?php
								}
							// End loop.
							endwhile;
						endif;
						?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Content End-->


	<!--Content (1)-->
    <section class="section fix-height-container ">
        <div class="content-wrapper">
            <div class="section-text text-center">
                <h2><?php the_field('customer_satisfied_section_title');?></h2>
                <span class="section-border"></span>
                <h5><?php the_field('customer_satisfied_section_sub_title');?></h5>
            </div>
            <div class="content-text-wrapper">
                <div class="container">
                    <div class="row">
						<?php
						// Check rows exists.
						if( have_rows('satisfied_customer') ):
							// Loop through rows.
							$i = 1;
							while( have_rows('satisfied_customer') ) : the_row();
								// Load sub field value.
								$sc_bg_image_url = '';
								$satisfied_customer_background_color = get_sub_field('satisfied_customer_background_color');
								$satisfied_customer_background_image = get_sub_field('satisfied_customer_background_image');
								if ( ! empty($satisfied_customer_background_image) ) {
									$sc_bg_image_url = 'background-image: url('.$satisfied_customer_background_image['url'].');';
								}
								$class = ($i > 3 ) ? 'mt-lg-4 mt-sm-4' : '';
								?>
								<div class="col-lg-4 col-sm-6 col-6 mb-4 mb-sm-4 mb-lg-0  <?php echo $class?>">
									<div class="color-box" style="background-color: <?php echo $satisfied_customer_background_color?>;<?php echo $sc_bg_image_url?>">
										<h4><?php the_sub_field('satisfied_customer_title');?></h4>
										<p class="color-box-text-height"><?php the_sub_field('satisfied_customer_content');?></p>
										<a href="<?php the_sub_field('satisfied_customer_button_link');?>" class="btn btn-border"><?php the_sub_field('satisfied_customer_button_label');?>
											<svg xmlns="http://www.w3.org/2000/svg" class="ml-1" width="10.422" height="10.558"
												viewBox="0 0 10.422 10.558">
												<g id="right" transform="translate(0.5 0.5)">
													<g id="Group_1053" data-name="Group 1053">
														<path id="Path_6081" data-name="Path 6081"
															d="M15.949,89.9l-4.48-4.48a.3.3,0,0,0-.422.422l3.971,3.971-8.055-.088-.23.109-.068.19c0,.165.3.3.3.3l8.055.088-3.971,3.971a.3.3,0,1,0,.422.422l4.48-4.48A.3.3,0,0,0,15.949,89.9Z"
															transform="translate(-6.664 -85.333)" fill="#fff" stroke="#fff"
															stroke-width="1" />
													</g>
												</g>
											</svg>
										</a>
									</div>
								</div>
								<?php
								// End loop.
								$i++;
							endwhile;
						endif;
						?>

                </div>
            </div>
        </div>
    </section>
    <!--Content End-->

	<!--Content (2)-->
    <section class="section fix-height-container ">
        <div class="content-wrapper">
            <?php
			$data_center_bg_image_url = '';
			$data_center_locations_section_bg_image = get_field('data_center_locations_section_bg_image');
			if ( ! empty($data_center_locations_section_bg_image) ) {
				$data_center_bg_image_url = 'background-image: url('.$data_center_locations_section_bg_image['url'].');';
			}
			?>
			<div class="data-center-wrapper bg-black"
            style="<?php echo $data_center_bg_image_url;?> background-repeat: no-repeat;background-position: center;">
                <div class="section-text text-center">
                    <h2><?php the_field('data_center_locations_section_title');?></h2>
                    <span class="section-border"></span>
                    <h5><?php the_field('data_center_locations_section_sub_title');?></h5>
                </div>
                <div class="content-text-wrapper">
                    <div class="container">
                        <div class="row mt-4">
							<?php
							// Check rows exists.
							if( have_rows('data_center_locations_content_blocks') ):
								// Loop through rows.
								while( have_rows('data_center_locations_content_blocks') ) : the_row();
									?>
									<div class="col-lg-5 col-sm-6 col-6 offset-lg-1">
										<div class="info-box">
											<h3>
												<svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="47.838"
													height="31.436" viewBox="0 0 47.838 31.436">
													<g id="Group_1065" data-name="Group 1065" transform="translate(1 1)">
														<circle id="Ellipse_434" data-name="Ellipse 434" cx="1.442" cy="1.442"
															r="1.442" transform="translate(9.741 3.309)" />
														<circle id="Ellipse_435" data-name="Ellipse 435" cx="1.442" cy="1.442"
															r="1.442" transform="translate(9.741 13.406)" />
														<circle id="Ellipse_436" data-name="Ellipse 436" cx="1.442" cy="1.442"
															r="1.442" transform="translate(9.741 22.782)" />
														<circle id="Ellipse_437" data-name="Ellipse 437" cx="1.442" cy="1.442"
															r="1.442" transform="translate(38.59 22.782)" />
														<circle id="Ellipse_438" data-name="Ellipse 438" cx="1.442" cy="1.442"
															r="1.442" transform="translate(38.59 13.406)" />
														<path id="Path_6158" data-name="Path 6158"
															d="M17785.5,2425.849v-29.436h40.045v6.575"
															transform="translate(-17785.496 -2396.413)" fill="none"
															stroke="#000" stroke-linecap="round" stroke-width="2" />
														<path id="Path_6159" data-name="Path 6159"
															d="M17833.238,2410.077l-39.41.007v9.712h39.146v8.368h-40.643"
															transform="translate(-17787.4 -2400.222)" fill="none" stroke="#000"
															stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
													</g>
												</svg>
												<?php the_sub_field('data_center_locations_title');?>
											</h3>
											<?php the_sub_field('data_center_locations_content');?>
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
            <div class="data-center-slide-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-4 col-md-12 offset-lg-1">
                                <div class="section-text text-left">
                                    <h2><?php the_field('our_data_center_title');?></h2>
                                    <?php the_field('our_data_center_content');?>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12">
                                <div class="row">
									<?php
									// Check rows exists.
									if( have_rows('our_data_center_images') ):
										// Loop through rows.
										while( have_rows('our_data_center_images') ) : the_row();
											$data_center_image_url = '';
											$data_center_image = get_sub_field('data_center_image');
											if ( ! empty($data_center_image) ) {
												$data_center_image_url = $data_center_image['url'];
												?>
												<div class="col-lg-3 col-sm-3 col-3">
													<div class="data-center-img">
														<img src="<?php echo $data_center_image_url;?>" alt="data-center-img" />
													</div>
												</div>
												<?php
											}
											?>
											<?php
										endwhile;
									endif;
									?>
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
        <div class="content-wrapper ">
            <div class="bandwidth-section-wrapper">
                <div class="section-text text-center">
                    <h2><?php the_field('unlimited_bandwidth_section_title');?></h2>
                    <span class="section-border"></span>
					<h5><?php the_field('unlimited_bandwidth_section_sub_title');?></h5>
                </div>
                <div class="content-text-wrapper ">
                    <div class="container bandwidth-content-wrapper">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 col-12">
                                <div class="info-bandwidth-list-wrapper">
									<h5><?php the_field('unlimited_bandwidth_content');?></h5>
									<ul>
                                        <?php
                                        // Check rows exists.
                                        if( have_rows('unlimited_bandwidth_feature_list') ):
                                            // Loop through rows.
                                            while( have_rows('unlimited_bandwidth_feature_list') ) : the_row();
                                                ?>
                                                <li>
                                                <span><?php the_sub_field('unlimited_bandwidth_svg_image_code');?></span>
                                                <?php the_sub_field('unlimited_bandwidth_feature_text');?>
                                                </li>
                                                <?php
                                            endwhile;
                                        endif;
                                        ?>
                                    </ul>
                                </div>
                            </div>
							<div class="col-lg-6 col-sm-12 col-12">
                                <div class="info-bandwidth-img">

                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="445" height="404.654" viewBox="0 0 445 404.654">
                                        <defs>
                                            <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1"
                                                gradientUnits="objectBoundingBox">
                                                <stop offset="0" stop-color="#fa8d1d" />
                                                <stop offset="1" stop-color="#fe722d" />
                                            </linearGradient>
                                            <filter id="Path_1" x="20.656" y="4.373" width="209.652" height="400.281"
                                                filterUnits="userSpaceOnUse">
                                                <feOffset input="SourceAlpha" />
                                                <feGaussianBlur stdDeviation="12.5" result="blur" />
                                                <feFlood flood-color="#fe722d" />
                                                <feComposite operator="in" in2="blur" />
                                                <feComposite in="SourceGraphic" />
                                            </filter>
                                        </defs>
                                        <g id="Group_22" data-name="Group 22" transform="translate(-574.477 -189.002)">
                                            <ellipse id="Ellipse_1" data-name="Ellipse 1" cx="176" cy="177" rx="176"
                                                ry="177" transform="translate(624.477 219.002)" />
                                            <g id="Group_16" data-name="Group 16"
                                                transform="matrix(-0.788, -0.616, 0.616, -0.788, 901.656, 530.717)">
                                                <line id="Line_1" data-name="Line 1" x2="12.958"
                                                    transform="translate(0.762 0) rotate(15.009)" fill="none"
                                                    stroke="#fc7928" stroke-width="4" />
                                                <line id="Line_2" data-name="Line 2" x2="12.958"
                                                    transform="translate(0 2.845) rotate(15.009)" fill="none"
                                                    stroke="#fc7928" stroke-width="4" />
                                            </g>
                                            <g id="Group_17" data-name="Group 17"
                                                transform="translate(954.087 463.424) rotate(-165.992)">
                                                <line id="Line_1-2" data-name="Line 1" x2="12.958"
                                                    transform="translate(0.762 0) rotate(15.009)" fill="none"
                                                    stroke="#fc7928" stroke-width="4" />
                                                <line id="Line_2-2" data-name="Line 2" x2="12.958"
                                                    transform="translate(0 2.845) rotate(15.009)" fill="none"
                                                    stroke="#fc7928" stroke-width="4" />
                                            </g>
                                            <g id="Group_18" data-name="Group 18"
                                                transform="translate(967.43 379.732) rotate(163)">
                                                <line id="Line_1-3" data-name="Line 1" x2="12.958"
                                                    transform="translate(0.762 0) rotate(15.009)" fill="none"
                                                    stroke="#fc7928" stroke-width="4" />
                                                <line id="Line_2-3" data-name="Line 2" x2="12.958"
                                                    transform="translate(0 2.845) rotate(15.009)" fill="none"
                                                    stroke="#fc7928" stroke-width="4" />
                                            </g>
                                            <g id="Group_19" data-name="Group 19"
                                                transform="translate(938.314 300.36) rotate(126.011)">
                                                <line id="Line_1-4" data-name="Line 1" x2="12.958"
                                                    transform="translate(0.762 0) rotate(15.009)" fill="none"
                                                    stroke="#fc7928" stroke-width="4" />
                                                <line id="Line_2-4" data-name="Line 2" x2="12.958"
                                                    transform="translate(0 2.845) rotate(15.009)" fill="none"
                                                    stroke="#fc7928" stroke-width="4" />
                                            </g>
                                            <g id="Group_21" data-name="Group 21"
                                                transform="translate(801.798 227.931) rotate(90)">
                                                <line id="Line_1-5" data-name="Line 1" x2="12.958"
                                                    transform="translate(0 2.928)" fill="none" stroke="#fa8720"
                                                    stroke-width="4" />
                                                <line id="Line_2-5" data-name="Line 2" x2="12.958"
                                                    transform="translate(0 0)" fill="none" stroke="#fa8720"
                                                    stroke-width="4" />
                                            </g>
                                            <g id="Group_20" data-name="Group 20"
                                                transform="translate(886.746 251.937) rotate(107)">
                                                <line id="Line_1-6" data-name="Line 1" x2="12.958"
                                                    transform="translate(0.762 0) rotate(15.009)" fill="none"
                                                    stroke="#fc7928" stroke-width="4" />
                                                <line id="Line_2-6" data-name="Line 2" x2="12.958"
                                                    transform="translate(0 2.845) rotate(15.009)" fill="none"
                                                    stroke="#fc7928" stroke-width="4" />
                                            </g>
                                            <g id="Ellipse_2" data-name="Ellipse 2"
                                                transform="translate(632.477 228.002)" fill="rgba(0,0,0,0)"
                                                stroke="#fff" stroke-width="2">
                                                <ellipse cx="167.5" cy="168" rx="167.5" ry="168" stroke="none" />
                                                <ellipse cx="167.5" cy="168" rx="166.5" ry="167" fill="none" />
                                            </g>
                                            <g transform="matrix(1, 0, 0, 1, 574.48, 189)" filter="url(#Path_1)">
                                                <path id="Path_1-2" data-name="Path 1"
                                                    d="M3132.032,176.12s-115.97,24.962-117.008,150.29c-1.56-.52-1.56,103.877,103.747,141.708-.39-.78-5.071,17.161-5.071,17.161S2993.574,449.4,2997.473,316.788c0,.39.39-124.418,131.439-156.79C3128.911,160.779,3132.032,176.12,3132.032,176.12Z"
                                                    transform="translate(-2939.22 -118.13)"
                                                    fill="url(#linear-gradient)" />
                                            </g>
                                            <g id="Group_1" data-name="Group 1" transform="translate(779.064 374.587)">
                                                <path id="Path_4" data-name="Path 4"
                                                    d="M13.252,0A13.252,13.252,0,1,1,0,13.252,13.252,13.252,0,0,1,13.252,0Z"
                                                    transform="translate(8.246 8.246)" fill="#424242" />
                                                <g id="Path_3" data-name="Path 3" transform="translate(0 0)">
                                                    <path id="Path_8074" data-name="Path 8074"
                                                        d="M21.5,0A21.5,21.5,0,1,1,0,21.5,21.5,21.5,0,0,1,21.5,0Z"
                                                        transform="translate(0 0)" fill="none" />
                                                    <path id="Path_8075" data-name="Path 8075"
                                                        d="M21.5,2.356a19.147,19.147,0,0,0-7.45,36.78,19.147,19.147,0,0,0,14.9-35.277,19.02,19.02,0,0,0-7.45-1.5M21.5,0A21.5,21.5,0,1,1,0,21.5,21.5,21.5,0,0,1,21.5,0Z"
                                                        transform="translate(0 0)" fill="#424242" />
                                                </g>
                                                <circle id="Ellipse_3" data-name="Ellipse 3" cx="6" cy="6" r="6"
                                                    transform="translate(15.413 15.414)" fill="#fff" />
                                            </g>
                                            <path id="Path_2" data-name="Path 2" d="M0,0,34.223,27.241l113.022,89.965"
                                                transform="translate(770.524 371.936)" fill="none" stroke="#fff"
                                                stroke-width="3" />
                                            <g id="Group_2" data-name="Group 2" transform="translate(912.748 537.122)">
                                                <text id="_10" data-name="10" transform="translate(-0.271 16.88)"
                                                    font-size="16" font-family="Roboto-Bold, Roboto" font-weight="700">
                                                    <tspan x="0" y="0">10</tspan>
                                                </text>
                                                <text id="Gbits" transform="translate(21.729 11.88)" fill="#545454"
                                                    font-size="9" font-family="Roboto-Bold, Roboto" font-weight="700">
                                                    <tspan x="0" y="0">Gbits</tspan>
                                                </text>
                                            </g>
                                            <g id="Group_3" data-name="Group 3" transform="translate(975.231 458.48)">
                                                <text id="_10-2" data-name="10" transform="translate(0.245 16.521)"
                                                    font-size="16" font-family="Roboto-Bold, Roboto" font-weight="700">
                                                    <tspan x="0" y="0">9</tspan>
                                                </text>
                                                <text id="Gbits-2" data-name="Gbits"
                                                    transform="translate(12.245 12.521)" fill="#545454" font-size="9"
                                                    font-family="Roboto-Bold, Roboto" font-weight="700">
                                                    <tspan x="0" y="0">Gbits</tspan>
                                                </text>
                                            </g>
                                            <g id="Group_4" data-name="Group 4" transform="translate(986.003 366.91)">
                                                <text id="_10-3" data-name="10" transform="translate(0.474 17.091)"
                                                    font-size="16" font-family="Roboto-Bold, Roboto" font-weight="700">
                                                    <tspan x="0" y="0">8</tspan>
                                                </text>
                                                <text id="Gbits-3" data-name="Gbits"
                                                    transform="translate(11.474 12.091)" fill="#545454" font-size="9"
                                                    font-family="Roboto-Bold, Roboto" font-weight="700">
                                                    <tspan x="0" y="0">Gbits</tspan>
                                                </text>
                                            </g>
                                            <g id="Group_5" data-name="Group 5" transform="translate(959.071 280.728)">
                                                <text id="_10-4" data-name="10" transform="translate(0.405 17.275)"
                                                    font-size="16" font-family="Roboto-Bold, Roboto" font-weight="700">
                                                    <tspan x="0" y="0">7</tspan>
                                                </text>
                                                <text id="Gbits-4" data-name="Gbits"
                                                    transform="translate(13.405 13.275)" fill="#545454" font-size="9"
                                                    font-family="Roboto-Bold, Roboto" font-weight="700">
                                                    <tspan x="0" y="0">Gbits</tspan>
                                                </text>
                                            </g>
                                            <g id="Group_6" data-name="Group 6" transform="translate(896.589 216.088)">
                                                <text id="_10-5" data-name="10" transform="translate(-0.112 16.915)"
                                                    font-size="16" font-family="Roboto-Bold, Roboto" font-weight="700">
                                                    <tspan x="0" y="0">6</tspan>
                                                </text>
                                                <text id="Gbits-5" data-name="Gbits"
                                                    transform="translate(11.888 12.915)" fill="#545454" font-size="9"
                                                    font-family="Roboto-Bold, Roboto" font-weight="700">
                                                    <tspan x="0" y="0">Gbits</tspan>
                                                </text>
                                            </g>
                                            <g id="Group_2-2" data-name="Group 2" transform="translate(650.964 542.51)">
                                                <text id="_10-6" data-name="10" transform="translate(-0.487 17.493)"
                                                    font-size="16" font-family="Roboto-Bold, Roboto" font-weight="700">
                                                    <tspan x="0" y="0">0</tspan>
                                                </text>
                                                <text id="Gbits-6" data-name="Gbits"
                                                    transform="translate(10.513 13.493)" fill="#545454" font-size="9"
                                                    font-family="Roboto-Bold, Roboto" font-weight="700">
                                                    <tspan x="0" y="0">Gbits</tspan>
                                                </text>
                                            </g>
                                            <g id="Group_3-2" data-name="Group 3"
                                                transform="translate(584.173 464.943)">
                                                <text id="_10-7" data-name="10" transform="translate(0.304 17.058)"
                                                    font-size="16" font-family="Roboto-Bold, Roboto" font-weight="700">
                                                    <tspan x="0" y="0">1</tspan>
                                                </text>
                                                <text id="Gbits-7" data-name="Gbits"
                                                    transform="translate(12.304 13.058)" fill="#545454" font-size="9"
                                                    font-family="Roboto-Bold, Roboto" font-weight="700">
                                                    <tspan x="0" y="0">Gbits</tspan>
                                                </text>
                                            </g>
                                            <g id="Group_4-2" data-name="Group 4"
                                                transform="translate(574.477 372.297)">
                                                <text id="_10-8" data-name="10" transform="translate(0 16.706)"
                                                    font-size="16" font-family="Roboto-Bold, Roboto" font-weight="700">
                                                    <tspan x="0" y="0">2</tspan>
                                                </text>
                                                <text id="Gbits-8" data-name="Gbits" transform="translate(12 14.706)"
                                                    fill="#545454" font-size="9" font-family="Roboto-Bold, Roboto"
                                                    font-weight="700">
                                                    <tspan x="0" y="0">Gbits</tspan>
                                                </text>
                                            </g>
                                            <g id="Group_5-2" data-name="Group 5"
                                                transform="translate(596.022 287.191)">
                                                <text id="_10-9" data-name="10" transform="translate(0.455 16.812)"
                                                    font-size="16" font-family="Roboto-Bold, Roboto" font-weight="700">
                                                    <tspan x="0" y="0">3</tspan>
                                                </text>
                                                <text id="Gbits-9" data-name="Gbits"
                                                    transform="translate(11.455 12.812)" fill="#545454" font-size="9"
                                                    font-family="Roboto-Bold, Roboto" font-weight="700">
                                                    <tspan x="0" y="0">Gbits</tspan>
                                                </text>
                                            </g>
                                            <g id="Group_6-2" data-name="Group 6"
                                                transform="translate(655.273 222.553)">
                                                <text id="_10-10" data-name="10" transform="translate(0.203 17.449)"
                                                    font-size="16" font-family="Roboto-Bold, Roboto" font-weight="700">
                                                    <tspan x="0" y="0">4</tspan>
                                                </text>
                                                <text id="Gbits-10" data-name="Gbits"
                                                    transform="translate(13.203 12.449)" fill="#545454" font-size="9"
                                                    font-family="Roboto-Bold, Roboto" font-weight="700">
                                                    <tspan x="0" y="0">Gbits</tspan>
                                                </text>
                                            </g>
                                            <g id="Group_8" data-name="Group 8" transform="translate(779.162 187.002)">
                                                <text id="_10-11" data-name="10" transform="translate(0.314 17)"
                                                    font-size="16" font-family="Roboto-Bold, Roboto" font-weight="700">
                                                    <tspan x="0" y="0">5</tspan>
                                                </text>
                                                <text id="Gbits-11" data-name="Gbits" transform="translate(13.314 12)"
                                                    fill="#545454" font-size="9" font-family="Roboto-Bold, Roboto"
                                                    font-weight="700">
                                                    <tspan x="0" y="0">Gbits</tspan>
                                                </text>
                                            </g>
                                            <g id="Group_9" data-name="Group 9" transform="translate(668.47 466.9)">
                                                <line id="Line_1-7" data-name="Line 1" x2="12.958"
                                                    transform="translate(0.762 6.201) rotate(-15.009)" fill="none"
                                                    stroke="#fc7928" stroke-width="4" />
                                                <line id="Line_2-7" data-name="Line 2" x2="12.958"
                                                    transform="translate(0 3.356) rotate(-15.009)" fill="none"
                                                    stroke="#fc7928" stroke-width="4" />
                                            </g>
                                            <g id="Group_15" data-name="Group 15"
                                                transform="matrix(0.788, -0.616, 0.616, 0.788, 730.527, 528.621)">
                                                <line id="Line_1-8" data-name="Line 1" x2="12.958"
                                                    transform="translate(0.762 6.201) rotate(-15.009)" fill="none"
                                                    stroke="#fc7928" stroke-width="4" />
                                                <line id="Line_2-8" data-name="Line 2" x2="12.958"
                                                    transform="translate(0 3.356) rotate(-15.009)" fill="none"
                                                    stroke="#fc7928" stroke-width="4" />
                                            </g>
                                            <g id="Group_12" data-name="Group 12" transform="translate(649.578 383.73)">
                                                <line id="Line_1-9" data-name="Line 1" x2="12.958"
                                                    transform="translate(0 2.917)" fill="none" stroke="#fb7f24"
                                                    stroke-width="4" />
                                                <line id="Line_2-9" data-name="Line 2" x2="12.958"
                                                    transform="translate(0.41)" fill="none" stroke="#fb7f24"
                                                    stroke-width="4" />
                                            </g>
                                            <g id="Group_13" data-name="Group 13"
                                                transform="translate(676.887 303.407) rotate(39)">
                                                <line id="Line_1-10" data-name="Line 1" x2="12.958"
                                                    transform="translate(0 2.928)" fill="none" stroke="#fa8720"
                                                    stroke-width="4" />
                                                <line id="Line_2-10" data-name="Line 2" x2="12.958"
                                                    transform="translate(0 0)" fill="none" stroke="#fa8720"
                                                    stroke-width="4" />
                                            </g>
                                            <g id="Group_14" data-name="Group 14"
                                                transform="translate(728.128 259.822) rotate(39)">
                                                <line id="Line_1-11" data-name="Line 1" x2="12.958"
                                                    transform="translate(0 2.928)" fill="none" stroke="#fa8720"
                                                    stroke-width="4" />
                                                <line id="Line_2-11" data-name="Line 2" x2="12.958"
                                                    transform="translate(0 0)" fill="none" stroke="#fa8720"
                                                    stroke-width="4" />
                                            </g>
                                        </g>
                                    </svg>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bandwidth-feature-box">
                <div class="container">
                    <div class="row text-center">
						<?php
						// Check rows exists.
						if( have_rows('icon_feature_blocks') ):
							// Loop through rows.
							while( have_rows('icon_feature_blocks') ) : the_row();
								$icon_block_image = '';
								$icon_feature_block_image = get_sub_field('icon_feature_block_image');
								?>
								<div class="col-lg-4 col-sm-4 col-4">
									<?php
									if ( ! empty($icon_feature_block_image) ) {
										$icon_block_image = $icon_feature_block_image['url'];
										?>
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
											width="49" height="49" viewBox="0 0 49 49">
											<image id="characteristics-nav-li.it1" width="49" height="49"
												xlink:href="<?php echo $icon_block_image;?>" />
										</svg>
										<?php
									}
									?>
									<p><?php the_sub_field('icon_feature_block_sub_title');?></p>
									<h4><?php the_sub_field('icon_feature_block_title');?></h4>
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
										<a href="<?php the_sub_field('section_button_link'); ?>" class="btn btn-border btn-black-border"><?php the_sub_field('section_button_label'); ?></a>
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
                <h2><?php the_field('feature_content_section_sub_title'); ?></h2>
                <span class="section-border"></span>
                <h5><?php the_field('feature_content_section_title'); ?></h5>
            </div>
                <div class="container">
                    <div class="row">
                        <?php
                        // Check rows exists.
                        if( have_rows('feature_content_blocks') ):
                            // Loop through rows.
                            $i = 1;
                            while( have_rows('feature_content_blocks') ) : the_row();
                                ?>
                                <div class="col-lg-3 col-sm-6 col-6">
                                    <div class="hover-info-box">
                                        <?php the_sub_field('feature_block_svg_image_code'); ?>
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
