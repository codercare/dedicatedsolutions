<?php
/* Template Name: Cpanel Server Hosting */ 

get_header();?>

<main id="fullpage" class="site-main">
<?php

while ( have_posts() ) : the_post(); 

	$banner_image_url = '';
	$banner_image     = get_field( 'cpanel_server_banner_bg_image' );
	if ( ! empty( $banner_image ) ) {
		$banner_image_url = $banner_image['sizes']['banner_image'];
	}
?>
	<section class="section">
		<section class="page-banner cp-sh-page-banner" style="background-image:url('<?php echo $banner_image_url; ?>')">
			<div class="wrapper">
				<div class="page-banner-content wow fadeInDown">
					<h1 class="large-banner__heading wow fadeInLeft"><?php the_field( 'cpanel_server_hosting_title' ); ?></h1>
					<p class="wow fadeInLeft">Powered By</p>
					<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/cpanel-whm-logo.png'; ?>" alt="cpanel-whm-logo">
				</div>
			</div>
		</section>

		<section class="cpanel-features">
			<div class="wrapper">
				<div class="section-header u-txt-center">
					<h2 class="section-header__title"><?php the_field( 'cpanel_features_title' ); ?></h2>
					<span class="section-header__decoration-element"></span>
					<h4 class="section-header__Orangesub-title"><?php the_field( 'cpanel_features_sub_heading' ); ?></h4>
				</div>
				<div class="row">
					<?php
					if ( have_rows( 'cpanel_features' ) ) : 
					$counter_card = 1;
					while ( have_rows( 'cpanel_features' ) ) :
						the_row();
						$package_icon = '';
						$product_icon     = get_sub_field( 'feature_icon' );
						if ( ! empty( $product_icon ) ) {
							$package_icon = $product_icon['sizes']['mid_icon'];
						}
						?>
						<div class="col-md-6 wow fadeInRightBig">
							<div class="cp-features-block">
								<div class="cp-feat-icon">
									<img src="<?php echo $package_icon; ?>" alt="<?php the_sub_field( 'feature_title' ); ?>">
								</div>
								<h3><?php the_sub_field( 'feature_title' ); ?></h3>
								<p><?php the_sub_field( 'feature_sub_title' ); ?></p>
							</div>
						</div>
					<?php 
						$counter_card++;
					endwhile; 
					endif;
					?>
				</div>
			</div>
		</section>
	</section>

	<section class="section">
		<section class="cpanel-dashboard-carousel">
			<div class="wrapper wow fadeInRightBig">
				<div id="cpanelDashboardCarousel" class="carousel carousel-fade " data-ride="carousel">
					<div class="carousel-inner">					
						<?php 
						$images = get_field('dashboard_image_slider');
						$size = 'full'; 
						if( $images ): 
						$couter_gallery_image =1;
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
									<h2 class="section-header__title">cPanel New Dash Baord</h2>
									
									
									<a class="carousel-control-prev" href="#cpanelDashboardCarousel" role="button" data-slide="prev">
										<svg xmlns="http://www.w3.org/2000/svg" width="7.103" height="12.186" viewBox="0 0 7.103 12.186">
											<path id="Path_4310" data-name="Path 4310" d="M330.781,90.9l5.826-5.461a.407.407,0,0,1,.549,0,.348.348,0,0,1,0,.515l-5.163,4.84c-.379.341-.289.47,0,.728l5.163,4.84a.348.348,0,0,1,0,.515.407.407,0,0,1-.549,0l-5.827-5.461A.348.348,0,0,1,330.781,90.9Z" transform="translate(-330.667 -85.333)" stroke="#1a1a1a" stroke-width="0.5"/>
										</svg>
									</a>
									<a class="carousel-control-next" href="#cpanelDashboardCarousel" role="button" data-slide="next">
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
										$images = get_field('dashboard_image_slider');
										$size = 'medium'; 
										if( $images ): 
										$couter_gal =0;
										foreach( $images as $image_id ): ?>									
										<li data-target="#cpanelDashboardCarousel" data-slide-to="<?php echo $couter_gal;?>" class="<?php if($couter_gal== 0){ echo'active'; }?>">
											<?php echo wp_get_attachment_image( $image_id, $size ); ?>
										</li>									
										<?php 
										$couter_gal++;
										endforeach; 
										endif; ?>
									</ol>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="get-cp-server">
			<div class="wrapper">
				<div class="section-header u-txt-center">
					<h2 class="section-header__title"><?php the_field( 'ready_to_go_title' ); ?></h2>
					<h4 class="section-header__Orangesub-title"><?php the_field( 'ready_to_go_sub_title' ); ?></h4>
				</div>
				<a href="<?php the_field( 'view_server_button_link' ); ?>" class="btn--white "><?php the_field( 'ready_to_go_button_label' ); ?></a>
				<p><?php the_field( 'some_line_below_button' ); ?></p>
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
					<div class="server-type-block-wrap wow fadeInUp">
						<h3><i><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/servers.png'; ?>" alt="servers"></i>Budget Servers</h3>
						<h4>Our Best Selling Budget Servers</h4>
						<div class="row">
							<?php echo do_shortcode('[dedicated_popular_info product_group_id=358 discount=20 caption=""]');?>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="server-type-block-wrap wow fadeInUp">
						<h3><i><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/servers.png'; ?>" alt="servers"></i>Pro Servers</h3>
						<h4>Our Best Selling Pro Servers</h4>
						<div class="row">
							<?php echo do_shortcode('[dedicated_popular_info product_group_id=331 discount=20 caption="" ]');?>							
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="server-type-block-wrap wow fadeInUp">
						<h3><i><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/servers.png'; ?>" alt="servers"></i>Enterprise Servers</h3>
						<h4>Our Best Selling Enterprise Servers</h4>
						<div class="row">
							<?php echo do_shortcode('[dedicated_popular_info  product_group_id=332 discount=20 caption=""]');?>
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
