<?php
/* Template Name: Advanced Virtualization */ 

get_header();?>
<main id="fullpage" class="site-main">
<?php while ( have_posts() ) : the_post(); 
	$banner_image_url = '';
	$banner_image     = get_field( 'advanced_virtualization_bg_image' );
	if ( ! empty( $banner_image ) ) {
		$banner_image_url = $banner_image['sizes']['banner_image'];
	}
?>
	<section class="section">
		<section class="page-banner about-page-banner av-page-banner" style="background-image:url('<?php echo $banner_image_url; ?>')">
			<div class="wrapper">
				<div class="page-banner-content wow fadeInDown">
					<h1 class="large-banner__heading wow fadeInLeft"><?php the_field('advanced_virtualization_title');?></h1>
					<p class="wow fadeInDown"><?php the_field('advanced_virtualization_sub_title');?></p>
					<a href="<?php the_field('advanced_virtualization_button_link');?>" class="btn--orange "><?php the_field('advanced_virtualization_button_label');?><i class="fas fa-arrow-right"></i></a>
				</div>
			</div>
		</section>
		<section class="demand-storage-data-block av-private-cloud">
			<div class="wrapper">
				<div class="section-header u-txt-center wow fadeInUp">
					<h2 class="section-header__title "><?php the_field('private_cloud_title');?></h2>
					<span class="section-header__decoration-element"></span>
					<p class="section-header__sub-title"><?php the_field('private_cloud_short_description');?></p>
				</div>
				<div class="row">
					<?php
					$animate_a = 1;
					if ( have_rows( 'supported_virtualization_block' ) ) : 
					while ( have_rows( 'supported_virtualization_block' ) ) :
					the_row();									
					?>
					<div class="col-md-6 wow <?php if($animate_a%2==0){ echo 'fadeInRight'; }else { echo 'fadeInLeft'; }?>">
						<div class="demand-storage-block-content">
							<div class="deman-storage-block-icon">
								<?php 
								$private_cloud_icon = get_template_directory_uri() . '/dist/assets/images/binary-code.png';
								$img_private_cloud_icon     = get_sub_field( 'virtualization_block_icon' );
								if ( ! empty( $img_private_cloud_icon ) ) {
									$private_cloud_icon = $img_private_cloud_icon['sizes']['mid_icon'];
								}
								if(!empty($private_cloud_icon)){ echo"<img src='".$private_cloud_icon."'>"; }
								?>	
							</div>
							<h2><?php the_sub_field( 'virtualization_block_title' )?></h2>
							<ul class="check-list-group orange-check">
								<?php
								if ( have_rows( 'virtualization_block_features' ) ) : 
								while ( have_rows( 'virtualization_block_features' ) ) :
								the_row();									
								?>
								<li><?php the_sub_field('features');?></li>
								<?php
								endwhile; 
								endif;									
								?>		
							</ul>
						</div>
					</div>
					<?php
					$animate_a++;
					endwhile; 
					endif;									
					?>
				</div>
			</div>
		</section>
	</section>
	<section class="av-feature-compare section">
		<div class="wrapper">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title"><?php the_field('budget_vs_pro_vs_enterprise_title');?></h2>
				<span class="section-header__decoration-element"></span>
			</div>
			<div class="av-gridder">
				<?php
				if ( have_rows( 'server_details' ) ) : 
				$counter_grid = 1;
				while ( have_rows( 'server_details' ) ) :
					the_row();						
				?>
				<div id="gridder_id_<?php echo $counter_grid;?>" class="gridder-list  wow fadeInRightBig" data-wow-offset="10" data-griddercontent="#av-gridder<?php echo $counter_grid;?>">
					<div class="av-gridder-block">
						<div class="av-gridder-header">
							<h1 class="av-gridder-header__title"><?php the_sub_field('server_name');?></h1>
							<h3 class="av-gridder-header__Sub-title">Private</h3>
						</div>
						<div class="av-gridder-content">
							<div class="av-gridder-content-item">
								<ul>
									<?php
									if ( have_rows( 'configuration_type' ) ) : 
									while ( have_rows( 'configuration_type' ) ) :
									the_row();									
									?>
									<li>
										<span class="av-content-icon">
										<?php 
										$conf_icon = get_template_directory_uri() . '/dist/assets/images/vps.png';
										$img_conf_icon     = get_sub_field( 'configuration_type_icon' );
										if ( ! empty( $img_conf_icon ) ) {
											$conf_icon = $img_conf_icon['sizes']['mid_icon'];
										}
										if(!empty($conf_icon)){ echo"<img src='".$conf_icon."'>"; }
										?>										
										</span>
										<?php the_sub_field('configuration_list_title');?>
									</li>
									<?php
									endwhile; 
									endif;									
									?>
								</ul>
							</div>
							
							<div class="av-gridder-content-item">
								<ul>
									<?php
									if ( have_rows( 'control_panel_type' ) ) : 
									while ( have_rows( 'control_panel_type' ) ) :
									the_row();						
									?>
									<li>
										<span class="av-content-icon">
										<?php 
										$conf_icon = get_template_directory_uri() . '/dist/assets/images/customer-support-2.png';
										$img_conf_icon     = get_sub_field( 'control_panel_type_icon' );
										if ( ! empty( $img_conf_icon ) ) {
											$conf_icon = $img_conf_icon['sizes']['mid_icon'];
										}
										if(!empty($conf_icon)){ echo"<img src='".$conf_icon."'>"; }
										?>										
										</span>
										<?php the_sub_field('control_panel_type_title');?>
									</li>
									<?php 									
									endwhile; 
									else:
										echo" - - -";
									endif;									
									?>
								</ul>
							</div>
						</div>
						<div class="av-gridder-button">
							<a href="<?php the_sub_field('view_budget_servers_link');?>" class="btn--orange">View Detail</a>
						</div>
					</div>
				</div>
				<?php 				
				$counter_grid++;
				endwhile; 
				endif;
				?>
			</div>

			<?php
			if ( have_rows( 'server_details' ) ) : 
			$count_grider = 1;
			while ( have_rows( 'server_details' ) ) :
			the_row();						
			?>
			<div id="av-gridder<?php echo $count_grider;?>" class="gridder-content">
				<div class="gridder-inner-content">
					<div class="row">
						<div class="col-md-5">
							<div class="sample-config-block">
								<h3>Sample Configuration</h3>
								<?php
								$count_controls = get_sub_field( 'control_panel_type' ); 
								if ( isset($count_controls) && is_array($count_controls) &&  (count($count_controls) > 0 )) : 
								?>
								<div class="carosel-navigation-custom">										
									<a class="carousel-control-next" href="#smapleConfigBlock-carousel" role="button" data-slide="next">
										<i class="fas fa-angle-right"></i>
									</a>	
									<a class="carousel-control-prev" href="#smapleConfigBlock-carousel" role="button" data-slide="prev">
										<i class="fas fa-angle-left"></i>
									</a>
								</div>
								<?php 
								endif;
								?>
								<div id="smapleConfigBlock-carousel" class="carousel carousel-fade" data-ride="carousel" data-interval="false">									
									<div class="carousel-inner">
										<div class="carousel-item active">
										<div class="row">
												<?php
												$counter_block = 1;
												if ( have_rows( 'configuration_type' ) ) : 
												while ( have_rows( 'configuration_type' ) ) :
												the_row();															
												?>											
												<div class="col-md-6">
													<div class="sample-config-item">
														<div class="sample-config-item__icon">
															<?php 
															$conf_icon = get_template_directory_uri() . '/dist/assets/images/vps.png';
															$img_conf_icon     = get_sub_field( 'configuration_type_icon' );
															if ( ! empty( $img_conf_icon ) ) {
																$conf_icon = $img_conf_icon['sizes']['mid_icon'];
															}
															if(!empty($conf_icon)){ echo"<img src='".$conf_icon."'>"; }		
															?>
														</div>
														<h4><?php the_sub_field('configuration_list_title');?></h4>
														<ul>
															<?php												
															if ( have_rows( 'configuration_feature_list' ) ) : 
															while ( have_rows( 'configuration_feature_list' ) ) :
															the_row();						
															?>
															<li><?php  the_sub_field('conf_feature');?></li>
															<?php 
															endwhile; 
															endif;
															?>
														</ul>
													</div>
												</div>										
												<?php 
												$counter_block++;
												endwhile; 
												endif;
												?>
										</div>
										</div>
										<?php
										if ( have_rows( 'control_panel_type' ) ) : 
										?>
										<div class="carousel-item">
											<div class="row">
												<?php												
												while ( have_rows( 'control_panel_type' ) ) :
												the_row();						
												?>
												<div class="col-md-6">
													<div class="sample-config-item">
														<div class="sample-config-item__icon">
														<?php 
														$conf_icon = get_template_directory_uri() . '/dist/assets/images/customer-support-2.png';
														$img_conf_icon     = get_sub_field( 'control_panel_type_icon' );
														if ( ! empty( $img_conf_icon ) ) {
															$conf_icon = $img_conf_icon['sizes']['mid_icon'];
														}
														if(!empty($conf_icon)){ echo"<img src='".$conf_icon."'>"; }
														?>				
														</div>
														<h4><?php  the_sub_field('control_panel_type_title');?></h4>
														<ul>
															<?php
															if ( have_rows( 'control_panel_type_features' ) ) : 
															while ( have_rows( 'control_panel_type_features' ) ) :
															the_row();						
															?>
															<li><?php  the_sub_field('features');?></li>
															<?php 
															endwhile; 
															endif;			
															?>
														</ul>
													</div>
												</div>
												<?php 
												endwhile; 												
												?>
											</div>
										</div> 
										<?php endif; ?>
									</div>								
								</div>								
							</div>
						</div>
						<div class="col-md-5">
							<div class="sample-config-block sc-feat-block">
								<h3>Features</h3>
								<ul class="check-list-group orange-check">
								    <?php
									if ( have_rows( 'extra_features' ) ) : 
									while ( have_rows( 'extra_features' ) ) :
									the_row();						
									?>
									<li><?php the_sub_field('features');?></li>
									<?php 
									endwhile; 
									endif;
									?>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<div class="pricing-block">
								<h6>Starting From</h6>
								<?php 
								$start_price = get_sub_field('starting_from_price');
								$price = '';
								$prev_price = '';
								if(isset($start_price)){
									$price = explode('/',$start_price);
								}
								$previous_price = get_sub_field('previous_price');
								
								if(isset($previous_price)){
									$prev_price = explode('/',$previous_price);
								}
								?>
								<h1><?php  echo $start_price; ?></h1>
								<h5>(<?php if(isset($price[0])){ echo $price[0].' setup'; } ?>)</h5>
								<h4><?php echo $previous_price;?> (<?php  if(isset($prev_price[0])){ echo $prev_price[0].' SETUP'; } ?>)</h4>
								<a href="<?php the_sub_field('contact_us_link');?>" class="btn--orange">Contact Us</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php 
			$count_grider++;
			endwhile; 
			endif;
			?>
		</div>
	</section>
<?php endwhile; // end of the loop. ?>
</main>
<?php get_footer(); ?>

<script>			
	jQuery(document).ready(function($) {				
		// $("#gridder_id_1").trigger("click");				
	});
</script>
