<?php
get_header();?>

<?php
	$banner_image_url = '';
	$banner_image     = get_field( 'banner_image' );
if ( ! empty( $banner_image ) ) {
	$banner_image_url = $banner_image['url'];
}
?>

<secstion class="large-banner" style="background-image: url(<?php echo $banner_image_url; ?>);">
	<div class="large-banner__container">
		<h1 class="large-banner__heading"><?php the_field( 'banner_title' ); ?></h1>
		<div class="large-banner__CTA-container">
			<a href="<?php the_field( 'banner_dedicated_server_button_link' ); ?>" class="btn--orange u-mb-untill-small">
				<i class="fas fa-server"></i><?php the_field( 'banner_dedicated_server_button_label' ); ?>
			</a>
			<a href="<?php the_field( 'banner_private_cloud_button_link' ); ?>" class="btn--orange">
				<i class="fas fa-user-lock"></i><?php the_field( 'banner_private_cloud_button_label' ); ?>
			</a>
		</div>
		<div class="large-banner__features">
			<?php if ( have_rows( 'banner_feature_list' ) ) : ?>
				<ul class="large-banner__features-list">
					<?php
					while ( have_rows( 'banner_feature_list' ) ) :
						the_row();
						?>
						<?php $feature_list_title = get_sub_field( 'feature_list_title' ); ?>
						<li class="large-banner__features-item"><i class="fas fa-check-circle"></i><?php echo $feature_list_title; ?></li>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>
		</div>
		<div class="btn--transparent">
			<span>Learn More</span> 
			<i class="fas fa-arrow-down"></i>
		</div>
	</div>
</section>

<?php get_footer(); ?>
