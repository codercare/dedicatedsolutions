<?php
/* Template Name: Plesk Server Management Tool */ 

get_header();?>
<main id="fullpage" class="site-main">
<?php

while ( have_posts() ) : the_post(); 

	$banner_image_url = '';
	$banner_image     = get_field( 'plesk_server_management_tool_bg_banner' );
	if ( ! empty( $banner_image ) ) {
		$banner_image_url = $banner_image['sizes']['banner_image'];
	}
?>
	<section class="section">
		<section class="page-banner cp-sh-page-banner plesk-server-banner" style="background-image:url('<?php echo $banner_image_url; ?>')">
			<div class="container-fluid">
				<div class="page-banner-content">
					<h1 class="large-banner__heading"><?php the_field( 'plesk_server_management_tool_title' ); ?></h1>
					<p><?php the_field( 'plesk_server_management_tool_sub_title' ); ?></p>
				</div>
			</div>
		</section>
		<section class="game-server-section plesk-server-section">
			<div class="wrapper">
				<div class="row">
					<div class="col-md-6">
						<div class="game-server-content">
							<div class="section-header">
								<h2 class="section-header__title"><?php the_field( 'choice_of_web_professionals_title' ); ?></h2>
								<span class="section-header__decoration-element"></span>
								<h4 class="section-header__Orangesub-title"><?php the_field( 'choice_of_web_professionals_detail' ); ?></h4>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<?php
						if ( have_rows( 'choice_of_web_professionals_features' ) ) : 
						$counter_card = 1;
						while ( have_rows( 'choice_of_web_professionals_features' ) ) :
						the_row();
							$package_icon = '';
							$product_icon     = get_sub_field( 'feature_icon' );
							if ( ! empty( $product_icon ) ) {
								$package_icon = $product_icon['sizes']['mid_icon'];
							}
							?>
							<div class="cp-features-block game-server-block">
								<div class="cp-feat-icon">
									<img src="<?php echo $package_icon; ?>" alt="<?php the_sub_field( 'feature_title' ); ?>">
								</div>
								<h3><?php the_sub_field( 'feature_title' ); ?></h3>
								<p><?php the_sub_field( 'feature_detail' ); ?></p>
							</div>
						<?php 
						$counter_card++;
						endwhile; 
						endif;
						?>						
					</div>
				</div>
			</div>
		</section>
	</section>

	<section class="section">
		<section class="cpanel-dashboard-carousel plesk-dashboard-carousel">
			<div class="wrapper">
				<div id="pleskDashboardCarousel" class="carousel carousel-fade" data-ride="carousel">
					<div class="carousel-inner">
						<?php 
						$images = get_field('plesk_dashboard_slider_images');
						$size = 'full'; 
						if( $images ): 
						$couter_gallery_image = 1;
						foreach( $images as $image_id ): ?>
						<div class="carousel-item <?php if($couter_gallery_image== 1){ echo'active'; }?>">
							<?php echo wp_get_attachment_image( $image_id, $size ); ?>
						</div>
						<?php 
						$couter_gallery_image++;
						endforeach; 
						endif; 
						?>
					</div>
					<div class="carousel-counter">
						<div class="row">
							<div class="col-md-3">
								<div class="db-carousel-txt">
									<h2 class="section-header__title">Plesk New Dash Baord</h2>
									<a class="carousel-control-prev" href="#pleskDashboardCarousel" role="button" data-slide="prev">
										<svg xmlns="http://www.w3.org/2000/svg" width="7.103" height="12.186" viewBox="0 0 7.103 12.186">
											<path id="Path_4310" data-name="Path 4310" d="M330.781,90.9l5.826-5.461a.407.407,0,0,1,.549,0,.348.348,0,0,1,0,.515l-5.163,4.84c-.379.341-.289.47,0,.728l5.163,4.84a.348.348,0,0,1,0,.515.407.407,0,0,1-.549,0l-5.827-5.461A.348.348,0,0,1,330.781,90.9Z" transform="translate(-330.667 -85.333)" stroke="#1a1a1a" stroke-width="0.5"/>
										</svg>
									</a>
									<a class="carousel-control-next" href="#pleskDashboardCarousel" role="button" data-slide="next">
										<svg xmlns="http://www.w3.org/2000/svg" width="7.103" height="12.186" viewBox="0 0 7.103 12.186">
											<path id="Path_4310" data-name="Path 4310" d="M330.781,90.9l5.826-5.461a.407.407,0,0,1,.549,0,.348.348,0,0,1,0,.515l-5.163,4.84c-.379.341-.289.47,0,.728l5.163,4.84a.348.348,0,0,1,0,.515.407.407,0,0,1-.549,0l-5.827-5.461A.348.348,0,0,1,330.781,90.9Z" transform="translate(-330.667 -85.333)" stroke="#1a1a1a" stroke-width="0.5"/>
										</svg>
									</a>
								</div>
							</div>
							<div class="col-md-9">
								<div class="db-carousel-indicators-wrap">
									<ol class="carousel-indicators">
										<?php 
										$images = get_field('plesk_dashboard_slider_images');
										$size = 'medium'; 
										if( $images ): 
										$couter_gal =0;
										foreach( $images as $image_id ): ?>	
										<li data-target="#pleskDashboardCarousel" data-slide-to="<?php echo $couter_gal;?>" class="<?php if($couter_gal== 0){ echo'active'; }?>">
											<?php echo wp_get_attachment_image( $image_id, $size ); ?>
										</li>
										<?php 
										$couter_gal++;
										endforeach; 
										endif; 
										?>
									</ol>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	
		<section class="get-cp-server plesk-usage">
			<div class="wrapper">
				<div class="section-header u-txt-center">
					<h2 class="section-header__title"><?php the_field( 'what_can_you_do_with_plesk_title' ); ?></h2>
				</div>
				<ul class="check-list-group white-check">				
					<?php
					if ( have_rows( 'what_can_you_do_with_plesk_features' ) ) : 
					while ( have_rows( 'what_can_you_do_with_plesk_features' ) ) :
					the_row();
					?>
					<li><?php the_sub_field( 'features' ); ?></li>
					<?php 
					endwhile; 
					endif;
					?>
				</ul>
			</div>
		</section>
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

							$budget_server = get_posts( array(
								'posts_per_page' => 4,
								'post_type'      => 'dedicated-servers',
								'meta_key'         => 'server_type',
								'meta_value'       => 'Budget Servers',
							));
							

							if ( $budget_server ) {
							foreach ( $budget_server as $post ) : 
							setup_postdata( $post ); 
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
											<?php
											$count_feature_list = 1;
											if ( have_rows( 'server_core_features_list' ) ) : 											
											while ( have_rows( 'server_core_features_list' ) ) :
											the_row();
											if($count_feature_list >5){ break; }
											?>
											<li><?php the_sub_field( 'list' ); ?></li>
											<?php 		
											$count_feature_list++;											
											endwhile; 
											endif;
											?>
											</ul>
											<a href="<?php the_field( 'instance_order_link' ); ?>" class="btn--orange">Order (Instant) <i class="fas fa-arrow-right"></i></a>
										</div>
									</div>
							<?php 
							endforeach;
							wp_reset_postdata();
							}
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

							$budget_server = get_posts( array(
								'posts_per_page' => 4,
								'post_type'      => 'dedicated-servers',
								'meta_key'         => 'server_type',
								'meta_value'       => 'Pro Servers',
							));							

							if ( $budget_server ) {
							foreach ( $budget_server as $post ) : 
							setup_postdata( $post ); 
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
									    <?php
										$count_feature_list = 1;
										if ( have_rows( 'server_core_features_list' ) ) : 											
										while ( have_rows( 'server_core_features_list' ) ) :
										the_row();
										if($count_feature_list >5){ break; }
										?>
										<li><?php the_sub_field( 'list' ); ?></li>
										<?php 		
										$count_feature_list++;											
										endwhile; 
										endif;
										?>
									</ul>
									<a href="<?php the_field( 'instance_order_link' ); ?>" class="btn--orange blue">Order (Instant) <i class="fas fa-arrow-right"></i></a>
								</div>
							</div>
							<?php 
							endforeach;
							wp_reset_postdata();
							}
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

							$budget_server = get_posts( array(
								'posts_per_page' => 4,
								'post_type'      => 'dedicated-servers',
								'meta_key'         => 'server_type',
								'meta_value'       => 'Enterprise Servers',
							));
							

							if ( $budget_server ) {
							foreach ( $budget_server as $post ) : 
							setup_postdata( $post ); 
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
									    <?php
										$count_feature_list = 1;
										if ( have_rows( 'server_core_features_list' ) ) : 											
										while ( have_rows( 'server_core_features_list' ) ) :
										the_row();
										if($count_feature_list >5){ break; }
										?>
										<li><?php the_sub_field( 'list' ); ?></li>
										<?php 		
										$count_feature_list++;											
										endwhile; 
										endif;
										?>
									</ul>
									<a href="<?php the_field( 'instance_order_link' ); ?>" class="btn--orange success">Order (Instant) <i class="fas fa-arrow-right"></i></a>
								</div>
							</div>
							<?php 
							endforeach;
							wp_reset_postdata();
							}
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
