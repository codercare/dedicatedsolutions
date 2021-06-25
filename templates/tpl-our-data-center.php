<?php
/* Template Name: Our Data Centers */ 

get_header();?>


<main id="fullpage" class="site-main">
<?php
while ( have_posts() ) : the_post(); 
?>
	<section class="page-banner our-dc-banner section" style="background-image:url('<?php echo get_template_directory_uri() . '/dist/assets/images/speed-test-bg.jpg'; ?>')">
		<div class="wrapper">
			<div class="page-banner-content">
				<h1 class="large-banner__heading"><?php the_field( 'our_data_center_page_title' ); ?></h1>
				<p><?php the_field( 'our_data_center_page_sub_title' ); ?></p>
				<div class="dc-address-block-wrap">
					<div class="row align-items-end">
						<div class="col-md-3">
							<div class="dc-address-block dc-add-1">
							    <?php $columbus_download = get_field('columbus_download'); ?>
								<h3><?php echo $columbus_download['heading']; ?> <span><?php echo $columbus_download['ip_address']; ?></span></h3>								
								<?php		
								$count_columbus = 1;						
								foreach($columbus_download['speed_and_download'] as $row){
								?>
								<a href="<?php echo $row['download_file']; ?>" class="<?php if($count_columbus %2==0){ echo'btn--white'; }else{ echo'btn--orange'; }?>"><?php echo $row['mb_title']; ?><i class="fas fa-download"></i></a>
								<?php 
								$count_columbus++;
								}
								?>
							</div>
						</div>
						<div class="col-md-6">
							<div class="dc-address-block dc-add-2">																
								<?php 
								$data_center_usa = get_field('data_centers_in_us');								 
								?>
								<h3><?php echo $data_center_usa['heading'];?> <i><img src="<?php echo $data_center_usa['heading_country_map']['sizes']['small_icon'];?>" alt="us-flag"></i></h3>
								<p><?php echo $data_center_usa['sub_heading_text'];?></p>								 
							</div>
						</div>
						<div class="col-md-3 text-md-right">
							<div class="dc-address-block dc-add-3">
							<?php $texas_download = get_field('texas_download'); ?>
								<h3><?php echo $texas_download['heading']; ?> <span><?php echo $texas_download['ip_address']; ?></span></h3>
								<?php	
								$count_texas = 1;							
								foreach($texas_download['speed_and_download'] as $row){
								?>
								<a href="<?php echo $row['download_file']; ?>" class="<?php if($count_texas %2==0){ echo'btn--white'; }else{ echo'btn--orange'; }?>"><?php echo $row['mb_title']; ?><i class="fas fa-download"></i></a>
								<?php 
								$count_texas++;
								}
								?>
							</div>
						</div>
					</div>
				</div>
				<div class="dc-location-map">
					<div class="thumbnail-img">
					<?php
					$data_center_map = get_template_directory_uri().'/dist/assets/images/map_network.png';
					$data_center     = get_field( 'available_locations_map_mid' );
					if ( ! empty( $data_center ) ) {
						$data_center_map = $data_center['url'];
					}
					?>
					<img src="<?php echo $data_center_map; ?>" alt="map-network">
					</div>
					<a href="<?php the_field( 'see_network_ping_time_button_link' ); ?>" class="btn--orange"><?php the_field( 'see_network_ping_time_button' ); ?></a>
				</div>
			</div>
		</div>
	</section> 
	<section class="data-center-comparision section">
		<div class="wrapper">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title"><?php the_field( 'our_data_center_quick_comparison_title' ); ?></h2>
			</div>
			<div class="dc-comarision-table">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>&nbsp;</th>
							<th>Columbus, Ohio (OH)</th>
							<th>Dallas, Texas (TX)</th>
						</tr>
					</thead>
					<tbody>
					    <?php
						if ( have_rows( 'comparison_fields_and_places' ) ) : 
						while ( have_rows( 'comparison_fields_and_places' ) ) :
						the_row();
						?>
						<tr>
							<td><?php the_sub_field( 'feature_title' ); ?></td>
							<td><?php if(get_sub_field( 'columbus_ohio_oh' ) == 1){ echo '<span class="check-yes"><i class="fas fa-check"></i></span>'; } else{ echo'<span class="dash"></span>'; } ?><!--  --></td>
							<td><?php if(get_sub_field( 'dallas_texas_tx' ) == 1){ echo '<span class="check-yes"><i class="fas fa-check"></i></span>'; } else{ echo'<span class="dash"></span>'; } ?> <!-- <span class="check-yes"><i class="fas fa-check"></i></span>--></td>
						</tr>
						<?php 
						endwhile; 
						endif;
						?>						
					</tbody>
				</table>
			</div>
		</div>
	</section>

	<section class="dc-address-details section" style="background-image:url('<?php echo get_template_directory_uri() . '/dist/assets/images/data-center-detail-bg.jpg'; ?>')">
		<div class="wrapper">
			<div class="dc-detail-block-wrap">
				<div class="row">
					<div class="col-md-3">
						<figure class="thumbnail-img">
							<?php
							$ohio_map_image_url = '';
							$ohio_map_image     = get_field( 'datacenter_columbus_map_image' );
							if ( ! empty( $ohio_map_image ) ) {
								$ohio_map_image_url = $ohio_map_image['url'];
							}
							?>
							<img src="<?php echo $ohio_map_image_url; ?>" alt="<?php the_field( 'datacenter_columbus_title' ); ?>">
						</figure>
					</div>
					<div class="col-md-9">
						<div class="dc-detail-block">
							<h2 class="section-header__title"><?php the_field( 'datacenter_columbus_title' ); ?></h2>
							<h3><?php the_field( 'datacenter_columbus_sub_title' ); ?></h3>
							<ul class="check-list-group orange-check">
								<?php
								if ( have_rows( 'datacenter_columbus_features' ) ) : 
								while ( have_rows( 'datacenter_columbus_features' ) ) :
								the_row();
								?>
								<li><?php the_sub_field( 'features_list' ); ?></li>
								<?php 
								endwhile; 
								endif;
								?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="dc-detail-block-wrap">
				<div class="row">
					<div class="col-md-3">
						<figure class="thumbnail-img">
							<?php
							$dallas_map_image_url = '';
							$dillas_map_image     = get_field( 'dallas_texasts_map_image' );
							if ( ! empty( $dillas_map_image ) ) {
								$dallas_map_image_url = $dillas_map_image['url'];
							}
							?>
							<?php 
							if(!empty($dallas_map_image_url)){?>
							<img src="<?php echo $dallas_map_image_url; ?>" alt="<?php the_field( 'dallas_texasts_title' ); ?>">
							<?php } ?>
						</figure>
					</div>
					<div class="col-md-9">
						<div class="dc-detail-block">
							<h2 class="section-header__title"><?php the_field( 'dallas_texasts_title' ); ?></h2>
							<h3><?php the_field( 'dallas_texasts_sub_title' ); ?></h3>
							<h4><?php the_field( 'dallas_texasts_sub_heading' ); ?></h4>
							<ul class="check-list-group orange-check">
							    <?php
								if ( have_rows( 'dallas_texasts_features' ) ) : 
								while ( have_rows( 'dallas_texasts_features' ) ) :
								the_row();
								?>
								<li><?php the_sub_field( 'features' ); ?></li>
								<?php 
								endwhile; 
								endif;
								?>								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endwhile; // end of the loop. ?>	
</main>
<?php get_footer(); ?>
