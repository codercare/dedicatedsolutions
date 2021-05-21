<?php
/* Template Name: About */ 

get_header();?>

<?php
	$banner_image_url = '';
	$banner_image     = get_field( 'about_dedicated_solutions_banner' );
	if ( ! empty( $banner_image ) ) {
		$banner_image_url = $banner_image['url'];
	}
?>

<main id="site-main" class="site-main">
	<section class="page-banner about-page-banner" style="background-image:url('<?php echo $banner_image_url; ?>')">
		<div class="wrapper">
			<div class="page-banner-content">
				<h1 class="large-banner__heading"><?php the_field( 'about_dedicated_title' ); ?></h1>
				<p><?php the_field( 'about_dedicated_sub_title' ); ?></p>
				<a href="<?php the_field( 'about_dedicated_button_link' ); ?>" class="btn--orange"><?php the_field( 'about_dedicated_button_label' ); ?> <i class="fas fa-arrow-right"></i></a>
			</div>
		</div>
	</section>

	<section class="welcom-section page-section">
		<div class="wrapper">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title"><?php the_field( 'weclome_block_title' ); ?></h2>
				<span class="section-header__decoration-element"></span>
				<p class="section-header__sub-title"><?php the_field( 'weclome_block_sub_title' ); ?></p>
			</div>
			<div class="row">
				<div class="col-md-4">
					<figure class="thumbnail-img">
						<?php
						$block_image = '';
						$b_image     = get_field( 'weclome_block_image' );
						if ( ! empty( $b_image ) ) {
							$block_image = $b_image['url'];
						}
						?>
						<img src="<?php echo $block_image; ?>" alt="<?php the_field( 'weclome_block_title' ); ?>">
					</figure>
				</div>
				<div class="col-md-8">
					<div class="welcome-content">
						<?php the_field( 'weclome_block_content' ); ?> 
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ceo-detail page-section" style="background-image:url('<?php echo get_template_directory_uri() . '/dist/assets/images/ceo-bg.jpg'; ?>')">
		<div class="wrapper"> 
			<div class="row">
				<div class="col-md-5">
					<figure class="thumbnal-img">
					    <?php
						$ceo_image = '';
						$ceo_url     = get_field( 'ceo_image' );
						if ( ! empty( $ceo_url ) ) {
							$ceo_image = $ceo_url['url'];
						}
						?>
						<img src="<?php echo $ceo_image; ?>" alt="<?php the_field( 'ceo_name' ); ?>">
					</figure>
				</div>
				<div class="col-md-7">
					<div class="ceo-content">
						<h1><?php the_field( 'ceo_name' ); ?><span><?php the_field( 'designation_detail' ); ?></span></h1>
						<p><?php the_field( 'ceo_short' ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="quick-fact page-section">
		<div class="wrapper">
			<div class="quick-fact-inner-content">
				<div class="section-header u-txt-center">
					<h2 class="section-header__title">QUICK FACTS</h2>
					<span class="section-header__decoration-element"></span>
				</div>
				<div class="row">
					<?php
					if ( have_rows( 'quick_facts' ) ) : 
					while ( have_rows( 'quick_facts' ) ) :
						the_row();
					$quickfact_image = '';
					$quickfact_url     = get_sub_field( 'facts_icon' );
					if ( ! empty( $quickfact_url ) ) {
						$quickfact_image = $quickfact_url['url'];
					}
					?>
					<div class="col-md-6">
						<div class="quick-fact-block">
							<div class="quick-fact-icon">
								<img src="<?php echo $quickfact_image; ?>" alt="<?php the_sub_field( 'facts_label' ); ?>">
							</div>
							<h3><?php the_sub_field( 'facts_label' ); ?></h3>
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

	<section class="our-locations">
		<div class="wrapper">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title"><?php the_field( 'our_location_title' ); ?></h2>
				<span class="section-header__decoration-element"></span>
			</div>
			<figure class="thumbnail-img">
				<?php 
				$location_map = ''; 
				$location_image     = get_field( 'our_location_image' );
				if ( ! empty( $location_image ) ) {
					$location_map = $location_image['url'];
				}
				
				?>
				<img src="<?php echo $location_map; ?>" alt="location-map">
				<!-- <img src="<?php echo get_template_directory_uri() . '/dist/assets/images/location-map.png'; ?>" alt="location-map"> -->
			</figure>
			<div class="location-detail">
				<ul>
					<li>
						<span class="location-marker usa"></span>
						<h3><span>USA</span> Eastern Time Zone (UTC-05:00)</h3>
					</li>
					<li>
						<span class="location-marker germany"></span>
						<h3><span>Germany</span> Central European Time Zone (UTC+01:00)</h3>
					</li>
					<li>
						<span class="location-marker philippines"></span>
						<h3><span>Philippines</span> Philippine Time Zone (UTC+08:00)</h3>
					</li>
					<li>
						<span class="location-marker austria"></span>
						<h3><span>Austria</span> Central European Time Zone (UTC+01:00)</h3>
					</li>
					<li>
						<span class="location-marker ukraine"></span>
						<h3><span>Ukraine</span> Eastern Time Zone (UTC-05:00)</h3>
					</li>
				</ul>
			</div>
		</div>
	</section>

	<section class="speak-with-expert">
		<div class="wrapper">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title"><?php the_field( 'speak_with_expert_title' ); ?></h2>
				<span class="section-header__decoration-element"></span>
				<p class="section-header__sub-title"><?php the_field( 'speak_with_expert_detail' ); ?></p>
			</div>
			<a href="<?php the_field( 'speak_with_expert_button_link' ); ?>" class="btn--orange"><?php the_field( 'speak_with_expert_button' ); ?></a>
		</div>
	</section>
</main>


<?php get_footer(); ?>
