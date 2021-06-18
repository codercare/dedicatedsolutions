<?php
/* Template Name: Custom Solutions */ 

get_header();
?>

<main id="fullpage" class="site-main">
<?php

while ( have_posts() ) : the_post(); 

	$banner_image_url = '';
	$banner_image     = get_field( 'banner_bg_image' );
	if ( ! empty( $banner_image ) ) {
		$banner_image_url = $banner_image['sizes']['banner_image'];
	}
?>
	<section class="section">
		<section class="page-banner customSol-page-banner" style="background-image:url('<?php echo $banner_image_url; ?>')">
			<div class="wrapper">
				<div class="page-banner-content">
					<h1 class="large-banner__heading"><?php the_field( 'cs_banner_title' ); ?></h1>
					<p><?php the_field( 'cs_banner_sub_title' ); ?></p>
					<a href="<?php the_field( 'cs_left_button_link' ); ?>" class="btn--orange"><?php the_field( 'cs_left_button_label' ); ?></a>
					<a href="<?php the_field( 'cs_right_button_link' ); ?>" class="btn--white"><?php the_field( 'cs_right_button_label' ); ?></a>
				</div>
			</div>
		</section>
	
		<section class="customSol-overview">
			<div class="wrapper">
				<div class="row">
					<div class="col-md-6">
						<div class="customSol-overview-content">
							<h2 class="section-header__title"><?php the_field( 'cs_overview_title' ); ?></h2>
							<h4 class="section-header__Orangesub-title"><?php the_field( 'cs_overview_sub_title' ); ?></h4>
							<p><?php the_field( 'cs_overview_detail' ); ?></p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="customSol-overview-grid">
						<?php
						if ( have_rows( 'custom_solution_types' ) ) : 
						$counter_card = 1;
						while ( have_rows( 'custom_solution_types' ) ) :
							the_row();
							$package_icon = '';
							$product_icon     = get_sub_field( 'product_icon' );
							if ( ! empty( $product_icon ) ) {
								$package_icon = $product_icon['url'];
							}
							?>
							<div class="cs-block">
								<div class="row">
									<div class="col-md-4">
										<div class="icon-box">
											<?php
											$feature_icon = '';
											$icon_image     = get_sub_field( 'cs_type_icon' );
											if ( ! empty( $icon_image ) ) {
												$feature_icon = $icon_image['sizes']['mid_icon'];
											}
											?>
											<img src="<?php echo $feature_icon; ?>" alt="<?php the_sub_field( 'cs_custom_solution_type_title' ); ?>">
										</div>
									</div>
									<div class="col-md-8">
										<div class="cs-block-content">
											<div class="cs-flex-content">
												<h3><?php the_sub_field( 'cs_custom_solution_type_title' ); ?></h3>
												<p><?php the_sub_field( 'cs_type_detail' ); ?></p>
											</div>
										</div>
									</div>
								</div>
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
	</section>

	<section class="premium-server-features section">
		<div class="wrapper">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title"><?php the_field( 'premium_server_feature_title' ); ?></h2>
				<span class="section-header__decoration-element--dark"></span>
				<h4 class="section-header__Orangesub-title"><?php the_field( 'premium_server_feature_sub_title' ); ?></h4>
			</div>
			<div class="p-feat-content">
				<div class="row align-items-center">
					<div class="col-md-6 order-md-1">
						<?php
						$premium_server_image = '';
						$premium_image     = get_field( 'premium_server_feature_image' );
						if ( ! empty( $premium_image ) ) {
							$premium_server_image = $premium_image['url'];
						}
						?>
						<figure class="thumbnail-img">
							<img src="<?php echo $premium_server_image; ?>" alt="<?php the_field( 'premium_server_feature_title' ); ?>">
						</figure>
					</div>
					<div class="col-md-6">
					<?php
					if ( have_rows( 'premium_features' ) ) : 
					$counter_premium = 1;
					while ( have_rows( 'premium_features' ) ) :
						the_row();	
						if($counter_premium == 1 ){
							$icon_class = 'server';
						}else if($counter_premium == 2){
							$icon_class = 'storage';
						}else{ $icon_class = 'networking';
						}					
						?>
						<div class="p-server-feat-block <?php echo $icon_class;?>">
							<div class="p-server-feat-icon">
								<?php
								$premium_icon = '';
								$pre_icon     = get_sub_field( 'premium_feature_icons' );
								if ( ! empty( $pre_icon ) ) {
									$premium_icon = $pre_icon['url'];
								}
								?>
								<img src="<?php echo $premium_icon; ?>" alt="<?php the_sub_field( 'premium_feature_title' ); ?>">
							</div>
							<div class="p-server-feat-content">
								<h2><?php the_sub_field( 'premium_feature_title' ); ?></h2>
								<ul>
								    <?php 
									while ( have_rows( 'premium_features_lists' ) ) :
										the_row();
									?>
									<li><?php the_sub_field( 'list_items' ); ?></li>
									<?php 
									endwhile;
									?>
								</ul>
							</div>
						</div>
					<?php 
					$counter_premium++;
					endwhile; 
					endif;
					?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="additional-features section">
		<div class="wrapper">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title"><?php the_field( 'additional_feature_title' ); ?></h2>
				<span class="section-header__decoration-element"></span>
				<h4 class="section-header__Orangesub-title"><?php the_field( 'additional_feature_sub_title' ); ?></h4>
			</div>
			<div class="additional-feat-grid">
				<div class="row">					
				<?php
				if ( have_rows( 'additional_features_list' ) ) : 
				while ( have_rows( 'additional_features_list' ) ) :
					the_row();											
					?>
					<div class="col-md-6">
						<div class="add-feat-block">
							<div class="add-feat-icon">
								<?php 
								$additional_server_image = '';
								$add_image     = get_sub_field( 'additional_feature_icon' );
								if ( ! empty( $add_image ) ) {
									$additional_server_image = $add_image['url'];
								}
								?>
								<img src="<?php echo $additional_server_image; ?>" alt="add-feat-icon-1">
							</div>
							<div class="add-feat-content">
								<h2><?php the_sub_field( 'additional_feature_list_title' ); ?></h2>
								<ul>
									<?php 
									while ( have_rows( 'addition_feature_lists' ) ) :
										the_row();	
									?>
									<li><?php the_sub_field( 'list_items' ); ?></li>
									<?php 
									endwhile;
									?>									
								</ul>
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

	<section class="custom-support section">
		<div class="wrapper">
			<div class="row align-items-center">
				<div class="col-md-5 order-md-1">
				    <?php 
					$custom_support_image = '';
					$custom_support_image     = get_field( 'custom_support_image' );
					if ( ! empty( $custom_support_image ) ) {
						$custom_support_image = $custom_support_image['url'];
					}
					?>
					<figure class="thumbnail-img">
						<img src="<?php echo $custom_support_image; ?>" alt="<?php the_field( 'custom_support_title' ); ?>">
					</figure>
				</div> 
				<div class="col-md-7">
					<div class="custom-support-content">
						<h2 class="section-header__title"><?php the_field( 'custom_support_title' ); ?></h2>
						<ul>
						<?php
							if ( have_rows( 'custom_support_features' ) ) : 
							while ( have_rows( 'custom_support_features' ) ) :
							the_row();											
							?>
							<li><?php the_sub_field('support_lists');?></li>
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
<?php endwhile; // end of the loop. ?>
</main>

<?php get_footer(); ?>