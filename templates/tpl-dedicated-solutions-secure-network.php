<?php
/* Template Name: Our Network */ 

get_header();

?>
<main id="fullpage" class="site-main">
<?php
while ( have_posts() ) : the_post(); 
?>
	<section class="section">
		<section class="dedicated-solutions">
			<div class="wrapper">
				<h2 class="section-header__title  wow fadeInLeftBig"><?php the_field( 'dedicated_solutions_networks_title' ); ?></h2>
				<span class="section-header__decoration-element"></span>
				<h4 class="section-header__Orangesub-title  wow fadeInLeftBig"><?php the_field( 'dedicated_solutions_networks_sub_title' ); ?></h4>
				<div class="dedicated-solutons-detail">
					<div class="row">
						<div class="col-md-12   wow fadeInLeftBig">
							<p><?php the_field( 'left_details' ); ?></p>
						</div>
						<!-- <div class="col-md-6 second-detail  wow fadeInRightBig">
							<p>< ?php the_field( 'right_details' ); ?></p>
						</div> -->
					</div>
				</div>
			</div>
		</section>

		<section class="global-network-section">
			<div class="wrapper  wow fadeInUp">
				<h2 class="section-header__title"><?php the_field( 'global_networks_title' ); ?></h2>
				<span class="section-header__decoration-element--dark"></span>
				<ul class="clearfix">
					<?php 
					if ( have_rows( 'global_networks_features' ) ) :
					$counQter = 1;
					while ( have_rows( 'global_networks_features' ) ) :
					the_row();
					?>
					<li><span><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/check.png'; ?>" alt="check-icon"></span><?php the_sub_field( 'features' ); ?></li>
					<?php 
					$counQter++;
					endwhile;
					endif;  
					?>				
				</ul>
			</div>
		</section>
	</section>
	
	<section class="section">
		<section class="dedicated-solution-grid-section">
			<div class="wrapper">
				<div class="row">
					<?php 
					if ( have_rows( 'four_blocks' ) ) :
						$counter_block = 1;
						while ( have_rows( 'four_blocks' ) ) :
						the_row();
					?>
					<div class="col-md-6">
						<div class="inner-decicated-grid  wow fadeInUp">
							<figure class="thumbnail">						
							<?php
							/** Block icon image  */
							$block_icon = '';
							$block_icon_image     = get_sub_field( 'block_icon' );
							if ( ! empty( $block_icon_image ) ) {
							$block_icon = $block_icon_image['url'];
							}
							?>
							<img src="<?php echo $block_icon; ?>" alt="<?php the_sub_field( 'block_title' ); ?>">
							</figure>
							<div class="inner-decicated-content">
								<h2><?php the_sub_field( 'block_title' ); ?></h2>
								<ul>
									<?php															
									while ( have_rows( 'block_feature_lists' ) ) : the_row();								
									?>
									<li><span><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/check.png'; ?>" alt="check-icon"></span><?php the_sub_field( 'features' ); ?></li>
									<?php 
									endwhile;
									?>								
								</ul>
							</div>
						</div>
					</div>
					<?php 
						$counter_block++;
						endwhile;
					endif;  
					?>				
				</div>
			</div>
		</section>

		<section class="dedictaed-multi-col-grid">
			<div class="wrapper">
				<div class="multi-dedicated-col">
					<div class="row">
						<div class="col-md-6 wow fadeInLeftBig">
							<div class="multi-dedicated-inner-content first">
								<h2><?php the_field( 'technician_block_title' ); ?></h2>
								<ul>
									<?php 
									if ( have_rows( 'technician_block_features_list' ) ) :								
									while ( have_rows( 'technician_block_features_list' ) ) :
									the_row();
									?>
									<li><span><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/check.png'; ?>" alt="check-icon"></span><?php the_sub_field( 'features' ); ?></li>
									<?php 								
									endwhile;
									endif;  
									?>	
								</ul>
							</div>
						</div>
						<div class="col-md-6 wow fadeInRightBig">
							<div class="multi-dedicated-inner-content second">
								<h2><?php the_field( 'routing_equipement_block_title' ); ?></h2>
								<ul>
									<?php 
									if ( have_rows( 'routing_equipment_block_feature_list' ) ) :								
									while ( have_rows( 'routing_equipment_block_feature_list' ) ) :
									the_row();
									?>
									<li>
									<span><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/check-white.png'; ?>" alt="check-icon"></span>
									<?php the_sub_field( 'features' ); ?></li>
									<?php 								
									endwhile;
									endif;  
									?>								
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>
<?php endwhile; // end of the loop. ?>
</main>
<?php get_footer(); ?>
