<?php
/* Template Name: Database & Big Data Server Hosting */ 

get_header();?>


<main id="fullpage" class="site-main">
<?php
while ( have_posts() ) : the_post(); 

	$banner_image_url = get_template_directory_uri() . '/dist/assets/images/bare-metal-cloud-banner.jpg';
	$banner_image     = get_field( 'database_and_big_data_bg_banner' );
	if ( ! empty( $banner_image ) ) {
		$banner_image_url = $banner_image['sizes']['banner_image'];
	}
?>
	<section class="section">
		<section class="page-banner db-bd-sh-page-banner" style="background-image:url('<?php echo $banner_image_url; ?>')">
			<div class="wrapper">
				<div class="page-banner-content">
					<h1 class="large-banner__heading"><?php the_field( 'database_and_big_data_server_hosting_title' ); ?></h1>
					<a href="<?php the_field( 'database_and_big_data_button_link' ); ?>" class="btn--orange"><?php the_field( 'database_and_big_data_button_label' ); ?> <i class="fas fa-arrow-right"></i></a>
				</div>
			</div>
		</section>
	
		<section class="db-srver-hosting-navTabs">
			<div class="navTabs-pills-wrap">
				<div class="wrapper">
					<ul class="nav nav-pills" id="db-bd-hosting-pills-tab" role="tablist">
						<?php
						if ( have_rows( 'database_server_types_features' ) ) : 
						$count_tab = 1;
						while ( have_rows( 'database_server_types_features' ) ) :
						the_row();								
						?>
						<li class="nav-item" role="presentation">
							<a class="nav-link <?php if($count_tab == '3'){ echo'active'; }?>" id="tab_id_<?php echo $count_tab;?>-tab" data-toggle="pill" href="#tab_id_<?php echo $count_tab;?>" role="tab" aria-controls="tab_id_<?php echo $count_tab;?>" aria-selected="<?php if($count_tab == '3'){ echo'true'; }else{ echo'false'; }?>"><?php the_sub_field( 'database_title' ); ?></a>
						</li>
						<?php 
						$count_tab++;
						endwhile; 
						endif;
						?>
					</ul>
				</div>
			</div>
			<div class="wrapper">
				<div class="tab-content" id="bmc-pills-tabContent">
					<?php
					if ( have_rows( 'database_server_types_features' ) ) : 
					$counter_feature = 1;
					while ( have_rows( 'database_server_types_features' ) ) :
					the_row();								
					?>
					<div class="tab-pane fade <?php if($counter_feature == '3'){ echo'show active'; }?>" id="tab_id_<?php echo $counter_feature;?>" role="tabpanel" aria-labelledby="tab_id_<?php echo $counter_feature;?>-tab">
						<h2 class="section-header__title"><?php the_sub_field( 'database_title' ); ?></h2>
						<div class="row">
							<div class="col-lg-6">
								<div class="server-hosting-content">
									<h4 class="section-header__Orangesub-title"><?php the_sub_field( 'database_feature_sub_title' ); ?></h4>
									<p class="section-header__sub-title"><?php the_sub_field( 'left_text_box' ); ?></p>
									<?php
									$db_image = '';
									$db_logo_image     = get_sub_field( 'database_logo' );
									if ( ! empty( $db_logo_image ) ) {
										$db_image = $db_logo_image['url'];
									}
									?>
									<img src="<?php echo $db_image; ?>" alt="<?php the_sub_field( 'database_title' ); ?>">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="server-hosting-support-list">
									<?php 
									$feature_group = get_sub_field('feature_title_and_feature_listing');									
									?>
									<h4 class="section-header__Orangesub-title"><?php echo $feature_group['feature_title']; ?></h4>
									<ul>
									    <?php
										$listing_array = $feature_group['feature_listings'];
										foreach($listing_array as $row){
										?>
										<li><?php echo $row['listings'];?></li>
										<?php
										}
										?>
									</ul>
								</div>
							</div>
						</div>     
					</div>
					<?php 
					$counter_feature++;
					endwhile; 
					endif;
					?>
				</div>
			</div>
		</section>
	</section>
	
	<section class="ss-and-db-cluster section" style="background-image:url('<?php echo get_template_directory_uri() . '/dist/assets/images/ss-and-db-cluster-bg.jpg'; ?>')">
		<div class="wrapper">
			 <div class="section-header u-txt-center">
				<h2 class="section-header__title"><?php the_field( 'single_server_&_database_clusters_title' ); ?></h2>
				<span class="section-header__decoration-element--dark"></span>
				<h4 class="section-header__Orangesub-title"><?php the_field( 'single_server_database_clusters_sub_heading' ); ?></h4>
			</div>
			<div class="row">
				<?php
				if ( have_rows( 'single_or_cluster_block' ) ) : 
				while ( have_rows( 'single_or_cluster_block' ) ) :
				the_row();
				$sig_clus_image = '';
				$single_cluster_db = get_sub_field( 'feature_image' );
				if ( ! empty( $single_cluster_db ) ) {
					$sig_clus_image = $single_cluster_db['url'];
				}
				?>
				<div class="col-lg-6">
					<div class="ss-db-cluster-block">
						<figure class="thumbnail-img">
							<img src="<?php echo $sig_clus_image; ?>" alt="<?php the_sub_field('title');?>">
						</figure>
						<h2><?php the_sub_field('title');?></h2>
						<div class="ss-db-cluster-content">
							<?php the_sub_field('details');?>
						</div>
						<div class="cluster-options-list">
							<ul>
								<?php
								if ( have_rows( 'feature_listings' ) ) : 
								while ( have_rows( 'feature_listings' ) ) :
								the_row();
								$feature_yesno_rows = get_sub_field('feature_yesno');
								?>
								<li>
									<span class="icon-txt-item">
										<span class="icon--item">
										<?php 
										if($feature_yesno_rows['yesno'] =='1'){?>
											<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/tick-green.png'; ?>" alt="tick-green">
										<?php
										}else{?>
										<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/cancel.png'; ?>" alt="cancel">
										<?php } ?>
										</span>
										<?php  echo $feature_yesno_rows['feature']; ?>
									</span>
								</li>
								<?php
								endwhile;
								endif;
								?>								
							</ul>
						</div>
						<a href="<?php the_sub_field('learn_more_link');?>" class="btn--outline-dark">Learn More</a>
					</div>
				</div>
				<?php
				endwhile;
				endif;
				?>				
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
				<div class="col-4">
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
				<div class="col-4">
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
				<div class="col-4">
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

	<section class="hadoop-data-server section">
		<div class="wrapper">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title"><?php the_field('hadoop_plus_big_data_server_equals_speed_title');?></h2>
				<span class="section-header__decoration-element"></span>
				<h4 class="section-header__Orangesub-title"><?php the_field('hadoop_plus_big_data_server_equals_description');?></h4>
			</div>
			<div class="hadoop-server-feat">
				<div class="row">
					<?php
					if ( have_rows( 'hadoop_plus_big_data_server_equals_blocks' ) ) : 
					while ( have_rows( 'hadoop_plus_big_data_server_equals_blocks' ) ) :
					the_row();											
					?>
					<div class="col-lg-4">
						<div class="hadoop-server-feat--block">
							<div class="hadoop-server-feat--block__icon">
								<?php the_sub_field('block_svg_code');?>
							</div>
							<h2><?php the_sub_field('block_title');?></h2>
							<p><?php the_sub_field('block_detail');?></p>
						</div>
					</div>
					<?php 					
					endwhile; 
					endif;
					?>
				</div>
				<a href="<?php the_field('learn_more_button_link');?>" class="btn--orange"><?php the_field('learn_more_button_label');?> <i class="fas fa-arrow-right"></i></a>
			</div>
		</div>
	</section>
<?php endwhile; // end of the loop. ?>
</main>

<?php get_footer(); ?>
