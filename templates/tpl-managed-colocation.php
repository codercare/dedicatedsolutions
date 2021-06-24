<?php
/* Template Name: Managed Colocation */ 
get_header();
?>
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
		<section class="page-banner mc-page-banner" style="background-image:url('<?php echo $banner_image_url; ?>')">
			<div class="wrapper">
				<div class="page-banner-content">
					<h1 class="large-banner__heading"><?php the_field( 'managed_colocation_title' ); ?></h1>
					<p><?php the_field( 'managed_colocation_short' ); ?></p>
					<a href="<?php the_field( 'managed_colocation_button_link' ); ?>" class="btn--orange"><?php the_field( 'managed_colocation_button_label' ); ?> <i class="fas fa-arrow-right"></i></a>
				</div>
			</div>
		</section>
	
		<section class="managed-colocation">
			<div class="wrapper">
				<div class="row">
					<?php
					if ( have_rows( 'managed_colocation_lists' ) ) : 
					while ( have_rows( 'managed_colocation_lists' ) ) :
					the_row();											
					?>
					<div class="col-md-3">
						<div class="managed-colocation-block">
							<div class="mc-icon-box">
								<?php
								$colocation_feature_img = get_template_directory_uri() . '/dist/assets/images/energy.png';
								$colo_icon_image     = get_sub_field( 'colocation_icon' );
								if ( ! empty( $colo_icon_image ) ) {
									$colocation_feature_img = $colo_icon_image['sizes']['mid_icon'];
								}
								?>
								<img src="<?php echo $colocation_feature_img; ?>" alt="energy">
							</div>
							<h3><?php the_sub_field('colocation_title');?></h3>
							<p><?php the_sub_field('colocation_short_detail');?></p>
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

	<section class="mc-plans-pricing section">
		<div class="wrapper">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title">Plans & Pricing</h2>
				<span class="section-header__decoration-element"></span>
				<h4 class="section-header__Orangesub-title">CHOOSE YOUR DESIRED LOCATION OR COMPARE</h4>
			</div>
			<div class="select-your-location">
				<label class="form-check-label">
					<input type="checkbox" class="form-check-input" id="COLUMBUS" value="COLUMBUS,OH" checked> 
					<span>COLUMBUS,OH <i>TIER IV</i></span>
				</label>
				<label class="form-check-label">
					<input type="checkbox" class="form-check-input" id="DALLAS" value="COLUMBUS,OH">
					<span>DALLAS,TX <i>TIER III</i></span>
				</label>
			</div>
			<div class="mc-plan-pricing-table">
				<div class="mc-pp-table-head">
					<ul>
						<li>Columbus, OH</li>
						<li>Dallas, TX</li>
					</ul>
				</div>
				<div class="mc-pp-table-block">
					<div class="mc-pp-table-row">
						<div class="mc-pp-table-col">
							<h4 class="section-header__Orangesub-title">Our Managed Services</h4>
						</div>
						<div class="mc-pp-table-col">
							<ul>
								<li>
									<span class="mc-pp-item">Internet Uplinks</span>
									<span class="mc-pp-item">Multiple 10G</span>
									<span class="mc-pp-item">Multiple 10G</span>
								</li>
								<li>
									<span class="mc-pp-item">Datacenter to Datacenter Fiber Ring</span>
									<span class="mc-pp-item"><i class="fas fa-check"></i></span>
									<span class="mc-pp-item"><i class="fas fa-check"></i></span>
								</li>
								<li>
									<span class="mc-pp-item">Private Datacenter to Datacenter Available</span>
									<span class="mc-pp-item"><i class="fas fa-check"></i></span>
									<span class="mc-pp-item"><i class="fas fa-check"></i></span>
								</li>
								<li>
									<span class="mc-pp-item">Internet Uplink Blend</span>
									<span class="mc-pp-item">8+ Carriers</span>
									<span class="mc-pp-item">8+ Carriers</span>
								</li>
								<li>
									<span class="mc-pp-item">24/7 NOC</span>
									<span class="mc-pp-item"><i class="fas fa-check"></i></span>
									<span class="mc-pp-item"><i class="fas fa-check"></i></span>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="mc-pp-table-block">
					<div class="mc-pp-table-row">
						<div class="mc-pp-table-col">
							<h4 class="section-header__Orangesub-title">Datacenter Features</h4>
						</div>
						<div class="mc-pp-table-col">
							<ul>
								<li>
									<span class="mc-pp-item">Carrier Neutral Facility</span>
									<span class="mc-pp-item"><i class="fas fa-check"></i></span>
									<span class="mc-pp-item"><i class="fas fa-check"></i></span>
								</li>
								<li>
									<span class="mc-pp-item">Carriers Available at the DC</span>
									<span class="mc-pp-item">40+</span>
									<span class="mc-pp-item">300+</span>
								</li>
								<li>
									<span class="mc-pp-item">Power Voltage</span>
									<span class="mc-pp-item">110v/208v</span>
									<span class="mc-pp-item">110v/208v</span>
								</li>
								<li>
									<span class="mc-pp-item">3 Phase Power Available</span>
									<span class="mc-pp-item"><i class="fas fa-check"></i></span>
									<span class="mc-pp-item"><i class="fas fa-check"></i></span>
								</li>
								<li>
									<span class="mc-pp-item">Tier</span>
									<span class="mc-pp-item">Tier-IV</span>
									<span class="mc-pp-item">Tier-III+</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="mc-pp-table-block">
					<div class="mc-pp-table-row">
						<div class="mc-pp-table-col">
							<h4 class="section-header__Orangesub-title">Example Pricing</h4>
						</div>
						<div class="mc-pp-table-col">
							<ul>
								<li>
									<span class="mc-pp-item">1U One Server (2A redundant A+B 110v) / 1Gbits 10TB</span>
									<span class="mc-pp-item">ASK</span>
									<span class="mc-pp-item">ASK</span>
								</li>
								<li>
									<span class="mc-pp-item">21U Half Rack (10A redundant A+B 110v) / 1Gbits, 100TB</span>
									<span class="mc-pp-item">$799.00</span>
									<span class="mc-pp-item">$699.00</span>
								</li>
								<li>
									<span class="mc-pp-item">42U Full Rack (20A Redundant A+B 110v) / 1Gbits Unlimited</span>
									<span class="mc-pp-item">$1,699.00</span>
									<span class="mc-pp-item">$1,499.00</span>
								</li>
								<li>
									<span class="mc-pp-item">Custom Cage Available</span>
									<span class="mc-pp-item"><i class="fas fa-check"></i></span>
									<span class="mc-pp-item"><i class="fas fa-check"></i></span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>				
	
	<?php
	$benifits_bg = get_template_directory_uri() . '/dist/assets/images/mc-benefits-bg.jpg';
	$benefit_bg_image     = get_field( 'benifit_background_image' );
	if ( ! empty( $benefit_bg_image ) ) {
		$benifits_bg = $benefit_bg_image['url'];
	}
	?>
	<section class="mc-benefits section"  style="background-image:url('<?php echo $benifits_bg; ?>')">
		<div class="wrapper">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title"><?php the_field( 'the_benifits_title' ); ?></h2>
				<span class="section-header__decoration-element--dark"></span>
				<h4 class="section-header__sub-title"><?php the_field( 'the_benifits_sub_title' ); ?></h4>
			</div>
			<ul class="check-list-group orange-check">
				<?php
				if ( have_rows( 'benifits_list_items' ) ) : 
				while ( have_rows( 'benifits_list_items' ) ) :
				the_row();											
				?>
				<li><?php the_sub_field('items');?></li>
				<?php 					
				endwhile; 
				endif;
				?>	
			</ul>
		</div>
	</section>
<?php endwhile; // end of the loop. ?>
</main>
<?php get_footer(); ?>