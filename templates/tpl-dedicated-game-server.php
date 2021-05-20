<?php
/* Template Name: Dedicated Game Server */ 

get_header();?>
<?php
	$banner_image_url = site_url().'/wp-content/uploads/2021/05/banner-img.jpg';
	$banner_image     = get_field( 'reseller_program_bg_image' );
	if ( ! empty( $banner_image ) ) {
		$banner_image_url = $banner_image['url'];
	}
?>
<main  class="site-main">
	<section class="page-banner reseller-page-banner section fp-auto-height" style="background-image:url('<?php echo $banner_image_url; ?>')">
		<div class="wrapper">
			<div class="page-banner-content">
				<h1 class="large-banner__heading">Dedicated Game Server</h1>
				<p>Popular Game Servers</p>
				<a href="#" class="btn--white">More<i class="fas fa-arrow-right"></i></a>
			</div>
		</div>
	</section>	
</main>
<?php get_footer(); ?>
