<?php
/* Template Name: Our Guarantees */ 

get_header();?>
<main id="site-main" class="site-main">
	<section class="our-guarantee">
		<div class="wrapper">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title"><?php the_field( 'guarantees_title' ); ?></h2>
				<span class="section-header__decoration-element"></span>
				<h4 class="section-header__Orangesub-title"><?php the_field( 'guarantees_sub_title' ); ?></h4>
				<p><?php the_field( 'guarantees_short_info' ); ?></p>
			</div>
			<div class="our-guarante-grid">
				<div class="row">
					<?php
					if ( have_rows( 'guarantees_features' ) ) : 
					$counter = 1;
					while ( have_rows( 'guarantees_features' ) ) :
						the_row();

						$guarantee_icon = '';
						$guarantee_bg_image     = get_sub_field( 'guarantee_feature_icon' );
						if ( ! empty( $guarantee_bg_image ) ) {
							$guarantee_icon = $guarantee_bg_image['sizes']['mid_icon'];
						}
					?>
					<div class=" <?php if($counter < 4){ echo "col-md-4";}else{ echo "col-md-6"; }?>">
						<div class="our-guarantee-block">
							<div class="guarantee-icon-box">
								<img src="<?php echo $guarantee_icon; ?>" alt="our-g-icon1">
							</div>
							<h3><?php the_sub_field('guarantee_feature_title');?></h3>
							<?php the_sub_field('gurantee_details');?>
						</div>
					</div>
					<?php 
						$counter++;
					endwhile; 
					endif;
					?>					
				</div>
			</div>
		</div>
	</section>
</main> 
<?php get_footer(); ?>
