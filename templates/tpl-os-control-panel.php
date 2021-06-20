<?php
/* Template Name:OS and Control Panels */ 

get_header();?>

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
		<section class="page-banner os-control-page-banner" style="background-image:url('<?php echo $banner_image_url; ?>')">
			<div class="wrapper">
				<div class="page-banner-content">
					<h1 class="large-banner__heading"><?php the_field( 'os_and_control_panels' ); ?></h1>
					<p><?php the_field( 'os_and_control_panels_sub_title' ); ?></p>
					<div class="os-control-panl__btn-wrap">
						<?php
						if ( have_rows( 'buttons_and_links' ) ) : 
						while ( have_rows( 'buttons_and_links' ) ) :
							the_row();
							$button_link_icon = '';
							$button_icon     = get_sub_field( 'button_icon' );
							if ( ! empty( $button_icon ) ) {
								$button_link_icon = $button_icon['sizes']['small_icon'];
							}
							?>
							<a href="<?php the_field( 'button_link' ); ?>" class="btn--orange">
								<i class="btn-icon">
									<img src="<?php echo $button_link_icon; ?>" alt="<?php the_sub_field( 'button_lable' ); ?>">
								</i>
								<span class="btn-label"><?php the_sub_field( 'button_lable' ); ?></span>
							</a>
							<?php
						endwhile;
						endif;
						?>
					</div>
				</div>
			</div>
		</section>
		
		<section class="operating-system">
			<div class="wrapper">
				<div class="row align-items-center">
					<div class="col-md-6 order-md-1">
						<?php 
						$os_image_url = '';
						$os_feature_image     = get_field( 'operating_system_block_image' );
						if ( ! empty( $os_feature_image ) ) {
							$os_image_url = $os_feature_image['url'];
						}
						if($os_image_url){
						?>
						<figure class="thumbnail-img">					
							<img src="<?php echo $os_image_url; ?>" alt="<?php the_field( 'operating_systems_title' ); ?>">
						</figure>
						<?php
						}?>
					</div>
					<div class="col-md-6">
						<div class="os-inner-content">
							<h2 class="section-header__title"><?php the_field( 'operating_systems_title' ); ?></h2>
							<p class="section-header__sub-title"><?php the_field( 'operating_systems_short_info' ); ?></p>
							<?php
							if ( have_rows( 'operating_system_solutions' ) ) : 
							?>
							<ul class="orange--list black-check">
								<?php
								while ( have_rows( 'operating_system_solutions' ) ) :
								the_row();
								?>
								<li><?php the_sub_field('solutions');?></li>
								<?php
								endwhile;
								?>
							</ul>
							<?php
							endif;
							?>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>
	
	<section class="section">
		<section class="linux-os-section">
			<div class="wrapper">
				<div class="row">
					<div class="col-md-3 order-md-1">
						<div class="linux-os-type--block">					
							<?php 
							$linums_os_image_url = '';
							$linux_feature_image     = get_field( 'linux_server_os_image' );
							if ( ! empty( $linux_feature_image ) ) {
								$linums_os_image_url = $linux_feature_image['url'];
							}
							if($linums_os_image_url){
							?>
							<img src="<?php echo $linums_os_image_url; ?>" alt="<?php the_field( 'operating_systems_title' ); ?>">
							<?php
							}?>
						</div>
					</div>
					<div class="col-md-9">
						<div class="linux-os-inner-content">
							<h2 class="section-header__title"><?php the_field( 'linux_server_os_title' ); ?></h2>
							<p class="section-header__sub-title"><?php the_field( 'linux_server_os_detail' ); ?></p>
							<?php
							if ( have_rows( 'linux_server_type_lists' ) ) : 
							?>
							<ul class="orange--list white">
								<?php
								while ( have_rows( 'linux_server_type_lists' ) ) :
								the_row();
								?>
								<li><?php the_sub_field('lists');?></li>
								<?php
								endwhile;
								?>
							</ul>
							<?php
							endif;
							?>
						</div>
					</div>
				</div>
			</div>
		</section>
	
		<section class="windows-os-section">
			<div class="wrapper">
				<div class="row align-items-center">
					<div class="col-md-4">
						<?php 
						$windows_os_image_url = '';
						$windows_feature_image     = get_field( 'widows_server_os_image' );
						if ( ! empty( $windows_feature_image ) ) {
							$windows_os_image_url = $windows_feature_image['url'];					
							if($windows_os_image_url){
							?>
							<figure class="thumbnail-img">		
							<img src="<?php echo $windows_os_image_url; ?>" alt="<?php the_field( 'widows_server_os_title' ); ?>">
							</figure>
							<?php
							}
						}?>
					</div>
					<div class="col-md-8">
						<div class="os-inner-content">
							<div class="section-header">
								<h2 class="section-header__title"><?php the_field( 'widows_server_os_title' ); ?></h2>
								<span class="section-header__decoration-element"></span>
								<p class="section-header__sub-title"><?php the_field( 'widows_server_detail' ); ?></p>
							</div>
							<?php
							if ( have_rows( 'widows_server_type_lists' ) ) : 
							?>
							<ul class="orange--list black reverse">
								<?php
								while ( have_rows( 'widows_server_type_lists' ) ) :
								the_row();
								?>
								<li><?php the_sub_field('lists');?></li>
								<?php
								endwhile;
								?>
							</ul>
							<?php
							endif;
							?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="find-your-os" style="background-image:url('<?php echo get_template_directory_uri() . '/dist/assets/images/find-your-os-bg.jpg'; ?>')">
			<div class="wrapper">
				<div class="find-your-os--inner-content">
					<h2 class="section-header__title"><?php the_field( 'cant_find_os_title' ); ?></h2>
					<p class="section-header__sub-title"><?php the_field( 'cant_find_os_detail' ); ?></p>
					<a href="<?php the_field( 'cant_find_os_button_link' ); ?>" class="btn--orange"><?php the_field( 'cant_find_os_button_label' ); ?> <i class="fas fa-arrow-right"></i></a>
				</div>
			</div>
		</section>
	</section>


	<section class="virtulization-os section">
		<div class="wrapper">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title"><?php the_field( 'virtulization_os_title' ); ?></h2>
				<span class="section-header__decoration-element"></span>
				<p class="section-header__sub-title"><?php the_field( 'virtulization_os_description' ); ?></p>
			</div>
			<table class="virtulization-table table table-striped table-bordered">
				<thead>
					<tr>
						<th>
							<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/citrix-logo-1.png'; ?>" alt="citrix-logo-1">
						</th>
						<th>
							<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/vmware-logo.png'; ?>" alt="vmware-logo">
						</th>
						<th>
							<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/proxmox-logo-1.png'; ?>" alt="proxmox-logo-1">
						</th>
					</tr>
				</thead>
				<tbody>
				<?php
				if ( have_rows( 'different_os_features' ) ) : 
					while ( have_rows( 'different_os_features' ) ) :
					the_row();
					$heading_feature = get_sub_field('heading_feature');
					$citrix_val  =   get_sub_field('citrix');
					$vmware_val  =   get_sub_field('vmware');
					$proxmos_val  =   get_sub_field('proxmos');
					?>
					<tr>
						<td><span class="<?php if(strtolower($citrix_val) =='yes'){ echo'yes '; } else if(strtolower($citrix_val) =='no'){ echo'no '; } else if(strtolower($heading_feature) =='os'){ }else {echo'unknown '; } ?>"><?php  the_sub_field('citrix');  ?></span><?php if(strtolower($heading_feature) !='os'){ the_sub_field('heading_feature'); }?></td>
						<td><span class="<?php if(strtolower($vmware_val) =='yes'){ echo'yes '; } else if(strtolower($vmware_val) =='no'){ echo'no '; } else if(strtolower($heading_feature) =='os'){ }else {echo'unknown '; } ?>"><?php the_sub_field('vmware'); ?></span><?php  if(strtolower($heading_feature) !='os'){ the_sub_field('heading_feature'); }?></td>
						<td><span class="<?php if(strtolower($proxmos_val) =='yes'){ echo'yes '; } else if(strtolower($proxmos_val) =='no'){ echo'no '; } else if(strtolower($heading_feature) =='os'){ }else { echo'unknown '; } ?>"><?php the_sub_field('proxmos'); ?></span><?php  if(strtolower($heading_feature) !='os'){ the_sub_field('heading_feature'); }?></td>
					</tr>
					<?php
					endwhile;
				endif;
				?>
				</tbody>
			</table>
		</div>
	</section>

	<section class="virtulization-detail section">
		<div class="wrapper">
		   <?php
			if ( have_rows( 'vmware_promax_block' ) ) : 
				$block_counter =1;
				while ( have_rows( 'vmware_promax_block' ) ) :
				the_row();
				?>
				<div class="single-virtulzation-row <?php if($block_counter === 1){ echo"vmware"; } else if($block_counter === 2){ echo"citrix";}else if($block_counter === 3){ echo"proxmox";}else{ echo"vmware";}?>">
					<div class="row <?php if($block_counter%2 == 0){ echo'flex-row-reverse'; }?>">
						<div class="col-md-2">
							<div class="virtulization-logo">
								<?php 
								$os_feature_url = '';
								$block_feature_image     = get_sub_field( 'image_icon' );
								if ( ! empty( $block_feature_image ) ) {
									$os_feature_url = $block_feature_image['url'];					
									if($os_feature_url){
									?>
									<img src="<?php echo $os_feature_url; ?>" alt="<?php the_sub_field( 'title' ); ?>">
									<?php
									}
								}?>
							</div>
						</div>
						<div class="col-md-7">
							<div class="virtulization-detail-content">
								<h2 class="section-header__title"><?php the_sub_field('title');?></h2>
								<p class="section-header__sub-title"><?php the_sub_field('descriptions');?></p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="virtulization-detail-list">
								<?php
								if ( have_rows( 'lists' ) ) : 
								?>
								<ul class="orange--list black">
									<?php
									while ( have_rows( 'lists' ) ) :
									the_row();
									?>
									<li><?php the_sub_field('list_items');?></li>
									<?php
									endwhile;
									?>
								</ul>
								<?php
								endif;
								?>
							</div>
						</div>
					</div>
				</div>
			<?php
				$block_counter++;
				endwhile;
			endif;
			?>
		</div>
	</section>

	<section class="section">
		<section class="control-panels-section">
			<div class="wrapper">
				<div class="section-header u-txt-center">
					<h2 class="section-header__title"><?php the_field('control_panels_title'); ?></h2>
					<span class="section-header__decoration-element"></span>
					<p class="section-header__sub-title"><?php the_field('control_panels_sub_heading'); ?></p>
				</div>
				<div class="cp-camparison-table">
					<div class="cp-camprasion-block cpanel--block">
						<ul class="cp-detail-list">
							<li>
								<div class="cp-logo">
									<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/cpanel-logo.png'; ?>" alt="cpanel-logo">
								</div>
								<ul class="orange--list black">
									<?php
									if ( have_rows( 'cpanel_key_feature' ) ) : 
									while ( have_rows( 'cpanel_key_feature' ) ) :
									the_row();?>
										<li><?php the_sub_field('feature')?></li>
									<?php
									endwhile; 
									endif;
									?>
								</ul>
							</li>
							<?php
							if ( have_rows( 'cpanel_and_plex_comparison' ) ) : 
							while ( have_rows( 'cpanel_and_plex_comparison' ) ) :
							the_row();
								$cpanel_yes_no = get_sub_field('cpanel_yes_no');
								?>
								<li>
									<div class="cp-decision">
										<p><span class="<?php if(strtolower($cpanel_yes_no) =='yes'){ echo'yes '; } else if(strtolower($cpanel_yes_no) =='no'){ echo'no '; } ?>"><?php the_sub_field('cpanel_yes_no');?></span> <?php the_sub_field('feature');?></p>
									</div>
									<div class="cp-decision-detail">
										<p><?php the_sub_field('cpanel');?></p>
									</div>
								</li>
								<?php
							endwhile; 
							endif;
							?>						
						</ul>
					</div>
					<div class="cp-camprasion-block plesk--block">
						<ul class="cp-detail-list">
							<li>
								<div class="cp-logo">
									<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/plesk-logo.png'; ?>" alt="plesk-logo">
								</div>
								<ul class="orange--list black">
									<?php
									if ( have_rows( 'plesk_key_feature' ) ) : 
									while ( have_rows( 'plesk_key_feature' ) ) :
										the_row();
										?>
											<li><?php the_sub_field('feature')?></li>
										<?php
									endwhile; 
									endif;
									?>
								</ul>
							</li>
							<?php
							if ( have_rows( 'cpanel_and_plex_comparison' ) ) : 
							while ( have_rows( 'cpanel_and_plex_comparison' ) ) :
							the_row();
								$plesk_yes_no = get_sub_field('plesk_yes_no');
								?>
								<li>
									<div class="cp-decision">
										<p><span class="<?php if(strtolower($plesk_yes_no) =='yes'){ echo'yes '; } else if(strtolower($plesk_yes_no) =='no'){ echo'no '; } ?>"><?php the_sub_field('plesk_yes_no');?></span> <?php the_sub_field('feature');?></p>
									</div>
									<div class="cp-decision-detail">
										<p><?php the_sub_field('plesk');?></p>
									</div>
								</li>
								<?php
							endwhile; 
							endif;
							?>
						</ul>
					</div>
				</div>
				<div class="ask-to-expert">
					<h2 class="section-header__title"><?php the_field('deciding_between_cpanel_and_plesk'); ?></h2>
					<a href="<?php the_field('ask_our_expert_button_link'); ?>" class="btn--orange"><?php the_field('ask_our_expert_button_label'); ?><i class="fas fa-arrow-right"></i></a>
				</div>
			</div>
		</section>
	</section>
</main>
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
