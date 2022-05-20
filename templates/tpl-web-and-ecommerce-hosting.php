<?php
/* Template Name: Web Hosting And Ecommerce Hosting */ 

get_header();?>



<main id="fullpage" class="site-main">
<?php
while ( have_posts() ) : the_post(); 
	$banner_image_url = get_template_directory_uri() . '/dist/assets/images/about-banner.jpg';
	$banner_image     = get_field( 'web_hosting_ecommerce_hosting_bg_image' );
	if ( ! empty( $banner_image ) ) {
		$banner_image_url = $banner_image['sizes']['banner_small_height'];
	}
	?>
	<section class="section">
		<section class="page-banner about-page-banner wh-eh-page-banner" style="background-image:url('<?php echo $banner_image_url; ?>')">
			<div class="wrapper">
				<div class="page-banner-content wow fadeInDown">
					<h1 class="large-banner__heading wow fadeInLeft"><?php the_field( 'web_hosting_ecommerce_hosting_title' ); ?></h1>
					<p class="wow fadeInLeft"><?php the_field( 'web_hosting_ecommerce_hosting_sub_title' ); ?></p>
					<a href="<?php the_field( 'banner_button_link' ); ?>" class="btn--orange "><?php the_field( 'banner_button_label' ); ?> <i class="fas fa-arrow-right"></i></a>
				</div>
			</div>
		</section>
	
		<section class="wh-eh-hosting-feat-adv ss-web-hosting">
			<div class="wrapper">
				<div class="row align-items-center">
					<div class="col-md-4 order-md-1">
						<figure class="thumbnail-img wow fadeInUp">
							<?php
							$single_server_image = get_template_directory_uri() . '/dist/assets/images/ecommerce-img1.png';
							$single_serv_image     = get_field( 'block_icon' );
							if ( ! empty( $single_serv_image ) ) {
								$single_server_image = $single_serv_image['url'];
							}
							?>
							<img src="<?php echo $single_server_image; ?>" alt="ecommerce-img1">
						</figure>
					</div>
					<div class="col-md-4 order-md-0">
						<div class="wh-eh-hosting-content  wow fadeInLeftBig">
							<div class="section-header">
								<h2 class="section-header__title"><?php the_field( 'single_server_web_hosting_title' ); ?></h2>
								<span class="section-header__decoration-element"></span>
							</div>
							<p><?php the_field( 'single_server_web_hosting_detail' ); ?></p>
							<a href="<?php the_field( 'single_server_button_link' ); ?>" class="btn--orange"><?php the_field( 'single_server_button_label' ); ?><i class="fas fa-arrow-right"></i></a>
						</div>
					</div>
					<div class="col-md-4 order-md-2 ">
						<div class="wh-eh-hosting-adv wow fadeInRightBig">
							<h2>Advantages</h2>
							<ul class="check-list-group orange-check">
								<?php
								if ( have_rows( 'single_server_web_hosting_advantage' ) ) : 
								while ( have_rows( 'single_server_web_hosting_advantage' ) ) :
								the_row();											
								?>
								<li><?php the_sub_field('lists');?></li>
								<?php 					
								endwhile; 
								endif;
								?>	
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>

	<section class="wh-eh-hosting-feat-adv mlb-server section">
		<div class="wrapper">
			<div class="row align-items-center">
				<div class="col-md-4 order-md-1">
					<figure class="thumbnail-img wow fadeInUp">
						<?php
						$mul_load_serv = get_template_directory_uri() . '/dist/assets/images/ecommerce-img2.png';
						$multi_serv_image     = get_field( 'block_icon' );
						if ( ! empty( $multi_serv_image ) ) {
							$mul_load_serv = $multi_serv_image['url'];
						}
						?>
						<img src="<?php echo $mul_load_serv; ?>" alt="ecommerce-img2">
					</figure>
				</div>
				<div class="col-md-4 order-md-2">
					<div class="wh-eh-hosting-content wow fadeInRightBig ">
						<div class="section-header">
							<h2 class="section-header__title"><?php the_field( 'multiple_load_balance_server_title' ); ?></h2>
							<span class="section-header__decoration-element"></span>
						</div>
						<p><?php the_field( 'multiple_load_balance_server_description' ); ?></p>
						<a href="<?php the_field( 'multiple_load_button_link' ); ?>" class="btn--orange"><?php the_field( 'multiple_load_button_label' ); ?> <i class="fas fa-arrow-right"></i></a>
					</div>
				</div>
				<div class="col-md-4 order-md-0">
					<div class="wh-eh-hosting-adv wow fadeInLeftBig">
						<h2>Advantages</h2>
						<ul class="check-list-group orange-check">
							<?php
							if ( have_rows( 'multiple_load_balance_server_advantage' ) ) : 
							while ( have_rows( 'multiple_load_balance_server_advantage' ) ) :
							the_row();											
							?>
							<li><?php the_sub_field('lists');?></li>
							<?php 					
							endwhile; 
							endif;
							?>	
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="wh-eh-hosting-feat-adv mg-data-center section">
		<div class="wrapper">
			<div class="row align-items-center">
				<div class="col-md-4 order-md-1">
					<figure class="thumbnail-img wow fadeInUp">
						<?php
						$mul_geo_serv = get_template_directory_uri() . '/dist/assets/images/ecommerce-img1.png';
						$mul_geo_images     = get_field( 'multiple_geographical_block_image' );
						if ( ! empty( $mul_geo_images ) ) {
							$mul_geo_serv = $mul_geo_images['url'];
						}
						?>
						<img src="<?php echo $mul_geo_serv; ?>" alt="ecommerce-img3">
					</figure>
				</div>
				<div class="col-md-4 order-md-0">
					<div class="wh-eh-hosting-content  wow fadeInLeftBig">
						<div class="section-header">
							<h2 class="section-header__title"><?php the_field( 'multiple_geographical_data_centers_title' ); ?></h2>
							<span class="section-header__decoration-element"></span>
						</div>
						<p><?php the_field( 'multiple_geographical_data_centers_description' ); ?></p>
						<a href="<?php the_field( 'multiple_geographical_button_link' ); ?>" class="btn--orange"><?php the_field( 'multiple_geographical_button_label' ); ?> <i class="fas fa-arrow-right"></i></a>
					</div>
				</div>
				<div class="col-md-4 order-md-2">
					<div class="wh-eh-hosting-adv wow fadeInRightBig">
						<h2>Advantages</h2>
						<ul class="check-list-group orange-check">
							<?php
							if ( have_rows( 'multiple_geographical_data_center_advantage' ) ) : 
							while ( have_rows( 'multiple_geographical_data_center_advantage' ) ) :
							the_row();											
							?>
							<li><?php the_sub_field('items');?></li>
							<?php 					
							endwhile; 
							endif;
							?>	
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php if(get_field('showhide_popular_dedicated_server')){ ?>
		<section class="popular-dedicated-server section">
		<div class="wrappper">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title">Our Most Popular Dedicated Servers</h2>
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