<?php
/* Template Name: On-Demand Storage */ 

get_header();?>
<main id="fullpage" class="site-main">
<?php
while ( have_posts() ) : the_post(); 
	$banner_image_url = get_template_directory_uri() . '/dist/assets/images/about-banner.jpg';
	$banner_image     = get_field( 'managed_services_banner_bg_image' );
	if ( ! empty( $banner_image ) ) {
		$banner_image_url = $banner_image['sizes']['banner_image'];
	}
	?>
	<section class="section">
		<section class="page-banner about-page-banner demand-storage-banner" style="background-image:url('<?php echo $banner_image_url; ?>')">
			<div class="wrapper">
				<div class="page-banner-content">
					<h1 class="large-banner__heading"><?php the_field( 'on_demand_storage_title' ); ?></h1>
					<p><?php the_field( 'on_demand_storage_sub_title' ); ?></p>
					<div class="os-control-panl__btn-wrap">
						<?php
						if ( have_rows( 'on_demand_button_and_links' ) ) : 
						while ( have_rows( 'on_demand_button_and_links' ) ) :
						the_row();											
						?>
						<a href="<?php the_sub_field('button_url');?>" class="btn--white"><?php the_sub_field('button_label');?></a>
						<?php 					
						endwhile; 
						endif;
						?>						
					</div>				
				</div>
			</div>
		</section>
	
		<section class="demand-storage-data-block">
			<div class="wrapper">
				<div class="row">
					<?php
					if ( have_rows( 'on_demand_storage_block' ) ) : 
					while ( have_rows( 'on_demand_storage_block' ) ) :
					the_row();	
					
					$block_image = get_template_directory_uri() . '/dist/assets/images/binary-code.png';
					$block_bg_image     = get_sub_field( 'block_icon' );
					if ( ! empty( $block_bg_image ) ) {
						$block_image = $block_bg_image['url'];
					}
					?>
					<div class="col-md-6">
						<div class="demand-storage-block-content">
							<div class="deman-storage-block-icon">
								<img src="<?php echo $block_image; ?>" alt="binary-code">
							</div>
							<h2><?php the_sub_field('block_title'); ?></h2>
							<p><?php the_sub_field('block_detail'); ?></p>
						</div>
					</div>
					<?php 					
					endwhile; 
					endif;
					?>	
				</div>
			</div>
		</section>
	</section>

	<section class="storage-based-section ip-cloud-storage section">
		<div class="container-fluid">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title"><?php the_field( 'cloud_storage_title' ); ?></h2>
				<span class="section-header__decoration-element"></span>
				<p><?php the_field( 'cloud_storage_detail' ); ?></p>
			</div>
			<div class="row">
				<div class="col-md-6 order-md-1">
					<div class="storage-based-thumb-content">
					<?php 
					if( have_rows('nas_mid_block') ): 
					while( have_rows('nas_mid_block') ): the_row(); ?>
						<h2><?php  the_sub_field('title'); ?></h2>
						<p><?php the_sub_field('short_detail'); ?></p>
						<figure class="thumbnail-img">
							<?php
							$nas_block_image = get_template_directory_uri() . '/dist/assets/images/binary-code.png';
							$nas_image     = get_sub_field( 'feature_image' );
							if ( ! empty( $nas_image ) ) {
								$nas_block_image = $nas_image['url'];
							}
							?>
							<img src="<?php echo $nas_block_image; ?>" alt="storage-img2">
						</figure>
						<?php 
					endwhile; 
				    endif; ?>
					</div>
				</div>
				<div class="col-md-3">
					<?php if( have_rows('nas_features_block_left') ): ?>
					<?php while( have_rows('nas_features_block_left') ): the_row(); ?>
					<div class="storage-based-feat-block">
						<h2><?php echo get_sub_field('heading_feature');?></h2>
						<ul class="check-list-group orange-check">
							<?php $features =  get_sub_field('features');
							foreach($features as $row){
							?>
							<li><?php echo $row['features']; ?></li>
							<?php
							}
							?>
						</ul>						
					</div>
					<?php 
					endwhile; 
				    endif; ?>
				</div>
				<div class="col-md-3 order-md-2">
					<div class="storage-based-feat-block">
					<?php if( have_rows('nas_features_block_right') ): ?>
					<?php while( have_rows('nas_features_block_right') ): the_row(); ?>
						<h2><?php echo get_sub_field('feature_heading');?></h2>
						<ul class="check-list-group orange-check">
							<?php 
							$features =  get_sub_field('features');
							foreach($features as $row){
							?>
							<li><?php echo $row['lists']; ?></li>
							<?php
							}
							?>
						</ul>
						<?php endwhile; ?>
					 <?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="storage-based-section redundant-nas section">
		<div class="container-fluid">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title"><?php the_field( 'redundant_nas_title' ); ?></h2>
				<span class="section-header__decoration-element"></span>
				<?php the_field( 'redundant_nas_detail_top' ); ?>
			</div>
			<div class="row">
				<div class="col-md-6 order-md-1">
					<div class="storage-based-thumb-content">
					<?php 
					if( have_rows('redundant_nas_mid') ): 
					while( have_rows('redundant_nas_mid') ): the_row(); ?>
						<h2><?php  the_sub_field('title'); ?></h2>
						<p><?php the_sub_field('short_detail'); ?></p>
						<figure class="thumbnail-img">
							<?php
							$nas_block_image = get_template_directory_uri() . '/dist/assets/images/binary-code.png';
							$nas_image     = get_sub_field( 'feature_image' );
							if ( ! empty( $nas_image ) ) {
								$nas_block_image = $nas_image['url'];
							}
							?>
							<img src="<?php echo $nas_block_image; ?>" alt="storage-img2">
						</figure>
						<?php 
					endwhile; 
				    endif; ?>
					</div>
				</div>
				<div class="col-md-3">
					<div class="storage-based-feat-block">						
						<?php if( have_rows('nas_features_block_left') ): ?>
						<?php while( have_rows('nas_features_block_left') ): the_row(); ?>
						<h2><?php echo get_sub_field('heading_feature');?></h2>
						<ul class="check-list-group orange-check">
							<?php 
							$features =  get_sub_field('features');
							foreach($features as $row){
							?>
							<li><?php echo $row['features']; ?></li>
							<?php
							}
							?>
						</ul>
						<?php 
						endwhile; 
						endif; ?>
					</div>
				</div>
				<div class="col-md-3 order-md-2">
					<div class="storage-based-feat-block">
					    <?php 
						if( have_rows('redundant_nas_right') ): 
						while( have_rows('redundant_nas_right') ): the_row(); ?>
						<h2><?php echo get_sub_field('feature_heading');?></h2>
							<ul class="check-list-group orange-check">
								<?php 
								$features =  get_sub_field('features');
								foreach($features as $row){
								?>
								<li><?php echo $row['lists']; ?></li>
								<?php
								}
								?>
							</ul>
						<?php 
						endwhile; 
						endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="storage-based-section storage-area-network section">
		<div class="container-fluid">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title"><?php the_field( 'storage_area_network_title' ); ?></h2>
				<span class="section-header__decoration-element"></span>
				<?php the_field( 'storage_area_network_description' ); ?>
			</div>
			<div class="row">
				<div class="col-md-6 order-md-1">
					<div class="storage-based-thumb-content">
						<?php 
						if( have_rows('redundant_nas_mid') ): 
						while( have_rows('redundant_nas_mid') ): the_row(); ?>
						<?php
						$storage_block_image = get_template_directory_uri() . '/dist/assets/images/storage-img4.png';
						$storage_image     = get_sub_field( 'feature_image' );
						if ( ! empty( $storage_image ) ) {
							$storage_block_image = $storage_image['url'];
						}
						?>
						<figure class="thumbnail-img">
							<img src="<?php echo $storage_block_image; ?>" alt="storage-img4">
						</figure>
						<?php 
						endwhile; 
						endif; ?>
					</div>
				</div>
				<div class="col-md-3">
					<div class="storage-based-feat-block">
					    <?php if( have_rows('san_left') ): ?>
						<?php while( have_rows('san_left') ): the_row(); ?>
						<h2><?php echo get_sub_field('feature_heading');?></h2>
						<ul class="check-list-group orange-check">
							<?php 
							$features =  get_sub_field('features');
							foreach($features as $row){
							?>
							<li><?php echo $row['lists']; ?></li>
							<?php
							}
							?>
						</ul>
						<?php 
						endwhile; 
						endif; ?>
					</div>
				</div>
				<div class="col-md-3 order-md-2">
					<div class="storage-based-feat-block">
					    <?php if( have_rows('san_right') ): ?>
						<?php while( have_rows('san_right') ): the_row(); ?>
						<h2><?php echo get_sub_field('feature_heading');?></h2>
						<ul class="check-list-group orange-check">
							<?php 
							$features =  get_sub_field('features');
							foreach($features as $row){
							?>
							<li><?php echo $row['lists']; ?></li>
							<?php
							}
							?>
						</ul>
						<?php 
						endwhile; 
						endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="storage-based-section san-dr-network section">
		<div class="container-fluid">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title"><?php the_field( 'storage_area_network_dr_title' ); ?></h2>
				<span class="section-header__decoration-element"></span>
				<?php the_field( 'storage_area_network_dr_description' ); ?>
			</div>
			<figure class="thumbnail-img">
				<?php
				$san_dr =  get_template_directory_uri() . '/dist/assets/images/storage-img1.png';
				$san_dr_image     = get_field( 'san_dr_block_image' );
				if ( ! empty( $san_dr_image ) ) {
					$san_dr = $san_dr_image['url'];
				}
				?>
				<img src="<?php echo $san_dr; ?>" alt="storage-img1">
			</figure>
		</div>
	</section>

	<section class="demand-storage-feat section">
		<div class="wrapper">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title">FC vs. ISCSI vs. NFS</h2>
				<span class="section-header__decoration-element"></span>
				<p class="section-header__sub-title">Whether you're a Windows, Linux, VMware vSphere or server user, you almost certainly need access to shared storage. The comprehensive functions can be used with storage protocols such as Fibre Channel, iSCSI, and NFS.</p>
			</div>
			<div class="demand-storage-feat__table-content">
				<table class="table">
					<thead>
						<tr>
							<th>Features</th>
							<th>Fibre Channel (FC) SAN</th>
							<th>iSCSI SAN</th>
							<th>NFS SAN</th>
						</tr>
					</thead>
					<tbody>
					    <?php if( have_rows('feature_comparision') ): ?>
						<?php while( have_rows('feature_comparision') ): the_row(); ?>
						<tr>
							<td><h2><?php the_sub_field('feature_heading');?></h2></td>
							<td><?php the_sub_field('fibre_channel_fc_san');?></td>
							<td><?php the_sub_field('iscsi_san');?></td>
							<td><?php the_sub_field('nfs_san');?></td>
						</tr>
						<?php 
						endwhile; 
						endif; ?>
					</tbody>
				</table>			
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
										<li>HDD - <?php $hdd = get_field( 'hdd' );  $raid = get_field( 'raid' ); echo strlimit($hdd.' '.$raid,'25','')?></li>
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
										<li>HDD - <?php the_field( 'hdd' );  the_field( 'raid' );?></li>
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
										<li>HDD - <?php the_field( 'hdd' );  the_field( 'raid' );?></li>
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

	<section class="tech-support demand-storage-support section" style="background-image:url('<?php echo get_template_directory_uri() . '/dist/assets/images/demand-support-bg.jpg'; ?>')">
		<div class="tech-support__content">
			<div class="wrapper">
				<div class="tech-support-block-wrap">
					<div class="row">
						<?php
						$bg_image = array('cloud-network.svg','local-network.svg','personal-computer.svg');
						
						$block_counter = 0;
						if( have_rows('footer_three_blocks') ): ?>
						<?php while( have_rows('footer_three_blocks') ): the_row(); ?>
						<div class="col-md-4">
							<div class="tech-support-card" style="background-image:url('<?php echo get_template_directory_uri() . '/dist/assets/images/'.$bg_image[$block_counter]; ?>')">
								<div class="tech-support-card__icon">
								    <?php
									$block_icon =  get_template_directory_uri() . '/dist/assets/images/local-network.png';
									$block_icon_image     = get_sub_field( 'block_icon' );
									if ( ! empty( $block_icon_image ) ) {
										$block_icon = $block_icon_image['url'];
									}
									?>
									<img src="<?php echo $block_icon; ?>" alt="cloud-network">
								</div>
								<h4 class="tech-support-card__title"><?php the_sub_field('block_title');?></h4>
								<a href="<?php the_sub_field('learn_more_link');?>" class="btn--outline">Learn More</a>
							</div>
						</div>
						<?php 
						$block_counter++;
						endwhile; 
						endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endwhile; // end of the loop. ?>
</main>

<?php get_footer(); ?>
