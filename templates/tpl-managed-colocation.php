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
				<div class="page-banner-content wow fadeInDown">
					<h1 class="large-banner__heading  wow fadeInLeft"><?php the_field( 'managed_colocation_title' ); ?></h1>
					<p class="wow fadeInDown"><?php the_field( 'managed_colocation_short' ); ?></p>
					<a href="<?php the_field( 'managed_colocation_button_link' ); ?>" class="btn--orange  wow pulse infinite"><?php the_field( 'managed_colocation_button_label' ); ?> <i class="fas fa-arrow-right"></i></a>
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
					<div class="col-md-3 wow fadeInUp" data-wow-offset="10">
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
			<div class="section-header u-txt-center wow fadeInRightBig" >
				<h2 class="section-header__title"><?php the_field( 'plans_pricing_title' ); ?></h2>
				<span class="section-header__decoration-element"></span>
				<h4 class="section-header__Orangesub-title"><?php the_field( 'plans_pricing_sub_title' ); ?></h4>
			</div>
			<div class="select-your-location ">
				<label  class="form-check-label wow fadeInLeftBig">
					<input type="checkbox" class="form-check-input showLocation" id="COLUMBUS" value="columbus" checked> 
					<span>COLUMBUS,OH <i>TIER IV</i></span>
				</label>
				<label class="form-check-label wow fadeInRightBig">
					<input type="checkbox" class="form-check-input showLocation" id="DALLAS" value="dallas" checked>
					<span>DALLAS,TX <i>TIER III</i></span>
				</label>
			</div>
			<div class="mc-plan-pricing-table">
				<div class="mc-pp-table-head wow fadeInRightBig">
					<ul>
						<li class="columbus">Columbus, OH</li>
						<li class="dallas">Dallas, TX</li>
					</ul>
				</div>
				<?php
				if ( have_rows( 'plans_and_pricing_comparison' ) ) : 
				while ( have_rows( 'plans_and_pricing_comparison' ) ) :
				the_row();						
				$sub_group = get_sub_field( 'columbus_dallas_comparisons' );				
				$feature_lists = $sub_group['feature_topics'];
				?>
				<div class="mc-pp-table-block wow fadeInRightBig">
					<div class="mc-pp-table-row">
						<div class="mc-pp-table-col">
							<h4 class="section-header__Orangesub-title"><?php echo esc_attr( $sub_group['main_feature_heading'] ); ?></h4>
						</div>
						<div class="mc-pp-table-col">
							<ul>
								<?php 
								foreach($feature_lists as $row){
								?>
								<li>
									<span class="mc-pp-item"><?php echo $row['feature_topic_title'];?></span>
									<span class="mc-pp-item columbus"><?php if(strtolower($row['columbus_oh']) =='yes'){ echo'<i class="fas fa-check"></i>'; }else{ echo $row['columbus_oh']; }?></span>
									<span class="mc-pp-item dallas"><?php if(strtolower($row['dallas_tx']) =='yes'){ echo'<i class="fas fa-check"></i>'; }else{ echo $row['dallas_tx']; }?></span>
								</li>
								<?php
								}
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
			<div class="section-header u-txt-center wow fadeInDown">
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
				<li class="wow fadeInRightBig" data-wow-offset="20"><?php the_sub_field('items');?></li>
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