<?php
/* Template Name: About */ 

get_header();?>

<main id="fullpage" class="site-main">
<?php
while ( have_posts() ) : the_post(); 

	$banner_image_url = '';
	$banner_image     = get_field( 'about_dedicated_solutions_banner' );
	if ( ! empty( $banner_image ) ) {
		$banner_image_url = $banner_image['sizes']['banner_image'];
	}
?>
	<section class="section">
		<section class="page-banner about-page-banner" style="background-image:url('<?php echo $banner_image_url; ?>')">
			<div class="wrapper">
				<div class="page-banner-content  wow fadeInDown">
					<h1 class="large-banner__heading wow fadeInLeft"><?php the_field( 'about_dedicated_title' ); ?></h1>
					<p class="wow fadeInLeft"><?php the_field( 'about_dedicated_sub_title' ); ?></p>
					<a href="<?php the_field( 'about_dedicated_button_link' ); ?>" class="btn--orange "><?php the_field( 'about_dedicated_button_label' ); ?> <i class="fas fa-arrow-right"></i></a>
				</div>
			</div>
		</section>
		
		<section class="welcom-section page-section">
			<div class="wrapper">
				<div class="section-header u-txt-center wow fadeInRightBig">
					<h2 class="section-header__title"><?php the_field( 'weclome_block_title' ); ?></h2>
					<span class="section-header__decoration-element"></span>
					<p class="section-header__sub-title"><?php the_field( 'weclome_block_sub_title' ); ?></p>
				</div>
				<div class="row">
					<div class="col-md-4">
						<figure class="thumbnail-img wow fadeInLeftBig">
							<?php
							$welcome_url = '';
							$welcome_image     = get_field( 'weclome_block_image' );
							if ( ! empty( $welcome_image ) ) {
							$welcome_url = $welcome_image['url'];
							}
							?>
							<img src="<?php echo $welcome_url; ?>" alt="<?php the_field( 'weclome_block_title' ); ?>">
						</figure>
					</div>
					<div class="col-md-8 wow fadeInRightBig">
						<div class="welcome-content">
							<?php the_field( 'weclome_block_content' ); ?>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>
	
	<section class="section">
		<section class="ceo-detail" style="background-image:url('<?php echo get_template_directory_uri() . '/dist/assets/images/ceo-bg.jpg'; ?>')">
			<div class="wrapper">
				<div class="row align-items-center">
					<div class="col-md-5 ">
						<figure class="thumbnal-img wow fadeInLeftBig">
							<?php
							$ceo_image_url = '';
							$ceo_image     = get_field( 'ceo_image' );
							if ( ! empty( $ceo_image ) ) {
							$ceo_image_url = $ceo_image['url'];
							}
							?>
							<img src="<?php echo $ceo_image_url; ?>" alt="<?php the_field( 'ceo_name' ); ?>">
						</figure>
					</div>
					<div class="col-md-7">
						<div class="ceo-content wow fadeInRightBig">
							<h1><?php the_field( 'ceo_name' ); ?><span><?php the_field( 'designation_detail' ); ?></span></h1>
							<p><?php the_field( 'ceo_short' ); ?></p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="quick-fact">
			<div class="wrapper">
				<div class="quick-fact-inner-content wow fadeInUp">
					<div class="section-header u-txt-center">
						<h2 class="section-header__title">Quick Facts</h2>
						<span class="section-header__decoration-element"></span>
					</div>
					<div class="row">
						<?php
						if ( have_rows( 'quick_facts' ) ) : 
						$counter_card = 1;
						while ( have_rows( 'quick_facts' ) ) :
							the_row();

							$fact_icon = '';
							$quick_fact_icon     = get_sub_field( 'facts_icon' );
							if ( ! empty( $quick_fact_icon ) ) {
								$fact_icon = $quick_fact_icon['sizes']['small_icon'];
							}
							?>
						<div class="col-md-6 wow fadeInRightBig" data-wow-offset="20">
							<div class="quick-fact-block">
								<div class="quick-fact-icon">
									<img src="<?php echo $fact_icon; ?>" alt="quick-fact-icon1">
								</div>
								<h3><?php the_sub_field( 'facts_label' ); ?></h3>
							</div>
						</div>
						<?php 
							$counter_card++;
						endwhile; 
						endif;
						?>
					</div>
				</div>
			</section>
		</section>
	</section>

	<section class="section">
		<section class="our-locations">
			<div class="wrapper">
				<div class="section-header u-txt-center">
					<h2 class="section-header__title wow fadeInDown"><?php the_field( 'our_location_title' ); ?></h2>
					<span class="section-header__decoration-element"></span>
				</div>
				<figure class="thumbnail-img ">
						<?php
						$world_location_url = '';
						$world_image     = get_field( 'our_location_image' );
						if ( ! empty( $world_image ) ) {
						$world_location_url = $world_image['url'];
						}
						?>
					<img src="<?php echo $world_location_url; ?>" alt="location-map">
				</figure>
				<div class="location-detail">
					<ul>
						<li class="wow fadeInRightBig">
							<span class="location-marker usa"></span>
							<h3><span>USA</span> Eastern Time Zone (UTC-05:00)</h3>
						</li>
						<li class="wow fadeInRightBig">
							<span class="location-marker germany"></span>
							<h3><span>Germany</span> Central European Time Zone (UTC+01:00)</h3>
						</li>
						<li class="wow fadeInRightBig">
							<span class="location-marker philippines"></span>
							<h3><span>Philippines</span> Philippine Time Zone (UTC+08:00)</h3>
						</li>
						<li class="wow fadeInRightBig">
							<span class="location-marker austria"></span>
							<h3><span>Austria</span> Central European Time Zone (UTC+01:00)</h3>
						</li>
						<li class="wow fadeInRightBig">
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
				<a href="<?php the_field( 'speak_with_expert_button_link' ); ?>" class="btn--orange "><?php the_field( 'speak_with_expert_button' ); ?></a>
			</div>
		</section>
	</section>
<?php endwhile; // end of the loop. ?>
</main>

<?php get_footer(); ?>