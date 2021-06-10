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
								<div class="col-lg-4">
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
							<div class="row">
							    <?php
								if ( have_rows( 'why_features' ) ) : 
								while ( have_rows( 'why_features' ) ) :
								the_row();								
								?>
								<div class="col-lg-4">
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
					<div class="tab-pane fade" id="pills-bmc-usecases" role="tabpanel" aria-labelledby="pills-bmc-usecases-tab">
						<div class="why-bmc-block-wrap">
							<div class="row">
								<?php
								if ( have_rows( 'metal_features' ) ) : 
								while ( have_rows( 'metal_features' ) ) :
								the_row();								
								?>
								<div class="col-lg-4">
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
				<div class="col-lg-7">
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
				<div class="col-lg-5">
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
				<div class="col-xl-4 col-lg-6">
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
							<div class="col-lg-6">
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
				<div class="col-xl-4 col-lg-6">
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
							<div class="col-lg-6">
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
				<div class="col-xl-4 col-lg-6">
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
							<div class="col-lg-6">
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
