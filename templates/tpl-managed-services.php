<?php
/* Template Name: Managed Services */ 

get_header();?>

<main id="fullpage" class="site-main">
<?php
while ( have_posts() ) : the_post(); 

	$banner_image_url = get_template_directory_uri() . '/dist/assets/images/os-control-panel-banner.jpg';
	$banner_image     = get_field( 'managed_services_banner_bg_image' );
	if ( ! empty( $banner_image ) ) {
		$banner_image_url = $banner_image['sizes']['banner_image'];
	}
	?>
	<section class="section">
		<section class="page-banner os-control-page-banner managed-services-page-banner" style="background-image:url('<?php echo $banner_image_url; ?>')">
			<div class="wrapper">
				<div class="page-banner-content  wow fadeInDown">
					<h1 class="large-banner__heading wow fadeInLeft"><?php the_field( 'managed_services_title' ); ?></h1>
					<p class="wow fadeInLeft"><?php the_field( 'managed_services_sub_title' ); ?></p>
					<div class="os-control-panl__btn-wrap">
						<?php
						if ( have_rows( 'managed_services_buttons' ) ) : 
						while ( have_rows( 'managed_services_buttons' ) ) :
						the_row();											
						?>
						<a href="<?php the_sub_field('button_link');?>" class="btn--orange wow fadeInRight">
						<?php
						$button_icon_image = get_template_directory_uri() . '/dist/assets/images/customer-support.png';
						$btn_icon_image     = get_sub_field( 'button_icon' );
						if ( ! empty( $btn_icon_image ) ) {
							$button_icon_image = $btn_icon_image['sizes']['small_icon'];
						}
						?>
						<i class="btn-icon">
							<img src="<?php echo $button_icon_image; ?>" alt="customer-support">
						</i>
						<span class="btn-label"><?php the_sub_field('button_label');?></span>
						</a>
						<?php 					
						endwhile; 
						endif;
						?>						
					</div>
				</div>
			</div>
		</section>
	
		<section class="managed-service-layer">
			<div class="wrapper">
				<div class="managed-layer-content">
					<figure class="thumbnail-img wow fadeInUp">
						<?php
						$feature_image = '';
						$feature_box_image     = get_field( 'managed_services_feature_image' );
						if ( ! empty( $feature_box_image ) ) {
							$feature_image = $feature_box_image['url'];
						}
						?>
						<img src="<?php echo $feature_image; ?>" alt="managed-layers-img">
					</figure>					
				</div>
			</div>
		</section>
	</section>

	<section class="linux-server-os section">
		<div class="wrapper">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title"><?php the_field( 'linux_server_os_title' ); ?></h2>
				<span class="section-header__decoration-element"></span>
			</div>
			<?php 
			$server_logo_icon = get_field('server_logos');
			if( $server_logo_icon ): 
			?>
			<ul>			   
				<?php foreach( $server_logo_icon as $image ): ?>
				<li class="wow fadeInRightBig">
				<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				</li>
				<?php endforeach; ?>				
			</ul>
			<?php 					
			endif;
			?>	
		</div>
	</section>

	<section class="section">
		<section class="manage-service-plan">
			<div class="wrapper">
				<div class="section-header u-txt-center">
					<h2 class="section-header__title"><?php the_field( 'linux_server_os_title' ); ?></h2>
					<span class="section-header__decoration-element"></span>
					<p class="section-header__sub-title"><?php the_field( 'linux_server_os_title' ); ?></p>
				</div>
				<div class="managed-service-plan-viewWrap">
					<ul class="nav nav-pills" id="ms-plan-pills-tab" role="tablist">
						<?php
						$counter_service = 1;
						if ( have_rows('managed_service_plans')) : 
						while ( have_rows('managed_service_plans')) :
						the_row();
						?>
						<li class="nav-item" role="presentation">
							<a class="nav-link <?php if($counter_service ==1){ echo'active'; } ?> " id="#tab_id_<?php echo $counter_service;?>-tab" data-toggle="pill" href="#tab_id_<?php echo $counter_service;?>" role="tab" aria-controls="tab_id_<?php echo $counter_service;?>" aria-selected="true"><?php the_sub_field('comparison_plan_type'); ?></a>
						</li>
						<?php
						$counter_service++;					
						endwhile; 
						endif;
						?>
					</ul>
					<div class="tab-content" id="ms-paln-tabContent">
						<?php
						$count_service = 1;
						if ( have_rows('managed_service_plans')) : 
						while ( have_rows('managed_service_plans')) :
						the_row();
						?>
						<div class="tab-pane fade  <?php if($count_service ==1){ echo'show active'; } ?>" id="tab_id_<?php echo $count_service;?>" role="tabpanel" aria-labelledby="tab_id_<?php echo $count_service;?>-tab">
							<div class="managed-service-plan-table">
								<ul class="ms-plan-list wow fadeInUp">
									<li>
										<div class="ms-plan-col">&nbsp;</div>
										<div class="ms-plan-col">&nbsp;</div>
									</li>
									<?php
									if ( have_rows('feature_icon_and_detail')) : 
									while ( have_rows('feature_icon_and_detail')) :
									the_row();
									?>
									<li >
										<div class="ms-plan-col">
											<div class="ms-plan-icon">
												<div class="ms-plan-blnc--inner">
												<?php
												$spec_icon_image = get_template_directory_uri() . '/dist/assets/images/surface1.png';
												$specificition_icon_image     = get_sub_field( 'icon' );
												if ( ! empty( $specificition_icon_image ) ) {
													$spec_icon_image = $specificition_icon_image['sizes']['mid_icon'];
												}
												?>
												<img src="<?php echo $spec_icon_image; ?>" alt="controller">
												</div>
											</div>
											<h2><?php the_sub_field('feature_title');  $yes_or_no = get_sub_field('yesno_info'); ?></h2>
										</div>
										<div class="ms-plan-col">
											<div class="ms-plan-big-text">
												<div class="ms-plan-blnc--inner">
													<span class="big-txt <?php if(strtolower($yes_or_no) =='no'){ echo'dark-txt';  }else{ echo'orange-txt'; } ?>"><?php echo $yes_or_no; ?></span>
												</div>
											</div>
											<p><?php the_sub_field('detail'); ?></p>
										</div>
									</li>
									<?php			
									endwhile; 
									endif;
									?>
									<li>
										<div class="ms-plan-col">&nbsp;</div>
										<div class="ms-plan-col">&nbsp;</div>
									</li>
								</ul>
							</div>
						</div>
						<?php
						$count_service++;					
						endwhile; 
						endif;
						?>					
					</div>
				</div>
				<div class="ask-for-quotation">
					<h2 class="section-header__title"><?php the_field( 'ask_quotation_label' ); ?></h2>
					<a href="<?php the_field( 'ask_quotation_button_link' ); ?>" class="btn--orange wow pulse infinite"><?php the_field( 'ask_quotation_button_label' ); ?> <i class="fas fa-arrow-right"></i></a>
				</div>
			</div>
		</section>
	</section>
	
	<?php
	$service_bg_images = '';
	$box_bg_image     = get_field( 'custom_or_consulting_service_bg_image' );
	if ( ! empty( $box_bg_image ) ) {
		$service_bg_images = $box_bg_image['url'];
	}
	?>	
	<section class="tech-support ms-tech-support section" style="background-image:url('<?php echo $service_bg_images; ?>')">
		<div class="tech-support__content">
			<div class="wrapper">
				<div class="tech-support-block-wrap">
					<div class="row">						
						<div class="col-md-6 wow fadeInLeft">
							<div class="tech-support-card" style="background-image:url('<?php echo get_template_directory_uri() . '/dist/assets/images/server-bg-1.svg'; ?>')">
								<h4 class="tech-support-card__title"><?php the_field( 'custom_service_title' ); ?></h4>
								<p class="tech-support-card__description"><?php the_field( 'custom_service_detail' ); ?></p>
								<a href="<?php the_field( 'custom_service_button_link' ); ?>" class="btn--outline"><?php the_field( 'custom_service_button_label' ); ?></a>
								<div class="tech-support-card__icon-container">
									<?php
									$managed_image = get_template_directory_uri() . '/dist/assets/images/server-sub-icon.png'; 
									$managed_box_image     = get_field( 'custom_service_icon' );
									if ( ! empty( $managed_box_image ) ) {
										$managed_image = $managed_box_image['sizes']['small_icon'];
									}
									?>
									<img src="<?php echo $managed_image; ?>" alt="server-sub-icon">
								</div>
							</div>
						</div>
						
						<div class="col-md-6 wow fadeInRight">
							<div class="tech-support-card" style="background-image:url('<?php echo get_template_directory_uri() . '/dist/assets/images/support-bg-1.svg'; ?>')">
								<h4 class="tech-support-card__title"><?php the_field( 'consulting_service_title' ); ?></h4>
								<p class="tech-support-card__description"><?php the_field( 'consulting_service_detail' ); ?></p>
								<a href="<?php the_field( 'consulting_service_button_link' ); ?>" class="btn--outline"><?php the_field( 'consulting_service_button_label' ); ?></a>
								<div class="tech-support-card__icon-container">
									<?php
									$consulting_image = get_template_directory_uri() . '/dist/assets/images/support.png';
									$consulting_box_image     = get_field( 'consulting_service_icon' );
									if ( ! empty( $consulting_box_image ) ) {
										$consulting_image = $consulting_box_image['sizes']['small_icon'];
									}
									?>
									<img src="<?php echo $consulting_image; ?>" alt="support">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endwhile; // end of the loop. ?>
</main>
<?php get_footer(); ?>