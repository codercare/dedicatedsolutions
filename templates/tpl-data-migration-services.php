<?php
/* Template Name: Data Migration Services */ 

get_header();?>


<main id="fullpage" class="site-main">
<?php
while ( have_posts() ) : the_post(); 

	$banner_image_url = get_template_directory_uri() . '/dist/assets/images/about-banner.jpg';
	$banner_image     = get_field( 'banner_bg_image' );
	if ( ! empty( $banner_image ) ) {
		$banner_image_url = $banner_image['sizes']['banner_image'];
	}
?>
	<section class="page-banner about-page-banner dm-service-banner section fp-auto-height" style="background-image:url('<?php echo $banner_image_url; ?>')">
		<div class="wrapper">
			<div class="page-banner-content">
				<h1 class="large-banner__heading"><?php the_field( 'data_migration_services_title' ); ?></h1>
				<p><?php the_field( 'data_migration_services_sub_title' ); ?></p>
				<a href="<?php the_field( 'data_migration_services_button_link' ); ?>" class="btn--orange"><?php the_field( 'data_migration_services_button_label' ); ?><i class="fas fa-arrow-right"></i></a>
			</div>
		</div>
	</section>
	<?php
		$migration_sample_bg = get_template_directory_uri() . '/dist/assets/images/data-migration-simple-img.png';
		$sample_bg_image     = get_field( 'right_block_image' );
		if ( ! empty( $sample_bg_image ) ) {
			$migration_sample_bg = $sample_bg_image['url'];
		}
	?>
	<section class="data-migration-simple section fp-auto-height" style="background-image:url('<?php echo $migration_sample_bg; ?>')">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-8">
					<div class="section-header">
						<h2 class="section-header__title"><?php the_field( 'data_migration_heading' ); ?></h2>
						<span class="section-header__decoration-element--dark"></span>
						<h4 class="section-header__Orangesub-title"><?php the_field( 'data_migration_detail' ); ?></h4>
					</div>
					<div class="data-migration-block-wrap">
						<?php
						if ( have_rows( 'migration_features' ) ) : 
						while ( have_rows( 'migration_features' ) ) :
							the_row();
							$button_link_icon = '';
							$button_icon     = get_sub_field( 'migration_icon_image' );
							if ( ! empty( $button_icon ) ) {
								$button_link_icon = $button_icon['sizes']['small_icon'];
							}
							?>
							<div class="data-migration-block">
								<div class="data-migration-icon-box migrating">
									<img src="<?php echo $button_link_icon; ?>" alt="migrating">
								</div>
								<h2><?php the_sub_field( 'migration_features_title' ); ?></h2>
								<p><?php the_sub_field( 'migration_feature_detail' ); ?></p>
							</div>
						<?php
						endwhile;
						endif;
						?>
					</div>
				</div>
			</div>
		</div>
	</section>	

	<section class="what-can-we-migrate section">
		<div class="wrapper">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title"><?php the_field( 'what_can_we_migrate_title' ); ?></h2>
				<span class="section-header__decoration-element"></span>
				<h4 class="section-header__Orangesub-title"><?php the_field( 'what_can_we_migrate_detail' ); ?></h4>
			</div>
			<div class="wcw-migrate-block-wrap">
				<div class="row">
					<?php
					if ( have_rows( 'migrate_features' ) ) : 
					while ( have_rows( 'migrate_features' ) ) :
						the_row();
						$migrate_feature_icon = '';
						$what_we_migrate     = get_sub_field( 'migrate_features_service_icon' );
						if ( ! empty( $what_we_migrate ) ) {
							$migrate_feature_icon = $what_we_migrate['url'];
						}
						?>
						<div class="col-lg-6">
							<div class="wcw-migrate-block">
								<div class="wcw-icon-box">
									<img src="<?php echo $migrate_feature_icon; ?>" alt="server">
								</div>
								<h3><?php the_sub_field('migrate_features_title');?></h3>
								<ul class="check-list-group orange-check">
									<?php the_sub_field('migration_feature_list');?>
								</ul>
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
<?php endwhile; // end of the loop. ?>
</main>


<?php get_footer(); ?>
