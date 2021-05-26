<?php
/* Template Name: Reseller Program */ 

get_header();
?>

<?php
	$banner_image_url = '';
	$banner_image     = get_field( 'reseller_program_bg_image' );
	if ( ! empty( $banner_image ) ) {
		$banner_image_url = $banner_image['url'];
	}
?>


<main id="fullpage" class="site-main">
	<section class="page-banner reseller-page-banner section fp-auto-height" style="background-image:url('<?php echo $banner_image_url; ?>')">
		<div class="wrapper">
			<div class="page-banner-content">
				<h1 class="large-banner__heading"><?php the_field( 'reseller_program_title' ); ?></h1>
				<p><?php the_field( 'reseller_program_sub_title' ); ?></p>
				<a href="<?php the_field( 'reseller_button_link' ); ?>" class="btn--white"><?php the_field( 'reseller_button' ); ?><i class="fas fa-arrow-right"></i></a>
			</div>
		</div>
	</section>
	
	<section class="reseller-exclusive page-section section fp-auto-height">
		<div class="wrapper">
			<h2 class="section-header__title"><?php the_field( 'exclusive_reseller_title' ); ?></h2>
			<span class="section-header__decoration-element"></span>
			<h4 class="section-header__Orangesub-title"><?php the_field( 'exclusive_reseller_sub_title' ); ?></h4>
			<p><?php the_field( 'exclusive_reseller_short_detail' ); ?></p>
		</div>
	</section>
	<?php
	$reseller_bg_image = '';
	$bg_image     = get_field( 'how_reseller_works_bg_image' );
	if ( ! empty( $bg_image ) ) {
		$reseller_bg_image = $bg_image['url'];
	}
	?>
	<section class="reseller-program-work page-section section" style="background-image:url('<?php echo $reseller_bg_image; ?>')">
		<div class="wrapper">
			<h2 class="section-header__title"><?php the_field( 'reseller_program_works_title' ); ?></h2>
			<span class="section-header__decoration-element--dark"></span>
			<div class="pogram-work-grid">
			<?php if ( have_rows( 'reseller_package_list' ) ) : ?>
				<div class="rows rows--gutters-small">
					<?php
					$counter_card = 1;
					while ( have_rows( 'reseller_package_list' ) ) :
						the_row();

						$package_icon = '';
						$product_icon     = get_sub_field( 'product_icon' );
						if ( ! empty( $product_icon ) ) {
							$package_icon = $product_icon['url'];
						}
						?>
						<div class="rows__medium-3">
						<div class="product-work-card card-<?php echo $counter_card;?>">
							<div class="product-icon-box">
								<img src="<?php echo $package_icon; ?>" alt="server-icon-1">
							</div>
							<h6><?php the_sub_field( 'size_label' ); ?></h6>
							<h3><?php the_sub_field( 'reseller_product_title' ); ?></h3>
							<div class="rate"><?php the_sub_field( 'offer_percent' ); ?></div>
							<h4><?php the_sub_field( 'set_up_fee' ); ?></h4>
						</div>
						</div>					
					<?php 
					$counter_card++;
					endwhile; ?>
				</div>
			<?php endif; ?>
			</div>
			<a href="<?php the_field( 'contact_link' ); ?>" class="btn--white"><?php the_field( 'contact_label' ); ?> <i class="fas fa-arrow-right"></i></a>
		</div>
	</section>

	<section class="why-choose-dedicatedSolutions page-section section">
		<div class="wrapper">
			<h2 class="section-header__title"><?php the_field('why_choose_our_dedicated_title'); ?></h2>
			<span class="section-header__decoration-element"></span>
			<h4 class="section-header__Orangesub-title"><?php the_field( 'why_choose_our_dedicated_sub_title' ); ?></h4>
			<div class="why-choose-grid">
				<div class="rows rows--gutters-small">					
					<?php
					$counter_why_feature = 1;
					if ( have_rows( 'why_choose_features' ) ) : 
					while ( have_rows( 'why_choose_features' ) ) :
					the_row();

					$reseller_image = '';
					$feature_block_image     = get_sub_field( 'feature_block_image' );
					if ( ! empty( $feature_block_image ) ) {
						$reseller_image = $feature_block_image['url'];
					}
					?>
					<div class="rows__medium-4">
						<div class="why-choose-card">						   
							<figure class="thumbnail-image">
								<img src="<?php echo $reseller_image; ?>" alt="<?php the_sub_field( 'feature_title' ); ?>">
							</figure>
							<div class="why-choose-card-content">						
								<h2><?php the_sub_field( 'feature_title' ); ?></h2>
								<ul>
								<?php															
								while ( have_rows( 'features_lists' ) ) : the_row();								
								?>
								<li><?php the_sub_field( 'list' ); ?></li>
								<?php 
								endwhile;
								?>
								</ul> 							
							</div>
						</div>
					</div>
					<?php 
					$counter_why_feature++;
					endwhile; 
					endif;
					?>
					
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>


