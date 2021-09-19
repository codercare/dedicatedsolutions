<?php
/* Template Name: Affiliate Program */ 

get_header();?>

<main id="fullpage" class="site-main">
<?php while ( have_posts() ) : the_post(); 

	$banner_image_url = '';
	$banner_image     = get_field( 'affiliate_banner_bg_image' );
	if ( ! empty( $banner_image ) ) {
		$banner_image_url = $banner_image['sizes']['banner_image'];
	}
?>
	<section class="section">
		<section class="page-banner affiliate-page-banner" style="background-image:url('<?php echo $banner_image_url; ?>')">
			<div class="wrapper">
				<div class="page-banner-content wow fadeInDown">
					<h1 class="large-banner__heading wow fadeInLeft"><?php the_field( 'affiliate_banner_title' ); ?></h1>
					<p class="wow fadeInLeft"><?php the_field( 'affiliate_short_description' ); ?></p>
					<a href="<?php the_field( 'button_link' ); ?>" class="btn--white "><?php the_field( 'button_label' ); ?><i class="fas fa-arrow-right"></i></a>
				</div>
			</div>
		</section>
	
		<section class="recommend-dedicatedSolution">
			<div class="wrapper">
				<div class="section-header u-txt-center">
					<h2 class="section-header__title"><?php the_field( 'pays_to_recommend_title' ); ?></h2>
					<span class="section-header__decoration-element"></span>
					<h4 class="section-header__Orangesub-title"><?php the_field( 'pays_to_recommend_sub_title' ); ?></h4>
				</div>
				<div class="recom-block-wrapper"> 
					<div class="row">
						<?php
						if ( have_rows( 'pays_to_recommend_features' ) ) : 
						$counter_card = 1;
						while ( have_rows( 'pays_to_recommend_features' ) ) :
							the_row();						
						?>
						<div class="col-md-4 wow fadeInRightBig">
							<div class="recom-block">
								<div class="recom-icon">
								<?php 
								if(empty(get_sub_field( 'recommend_svg_image_value'))){
									$fact_icon = '';
									$quick_fact_icon     = get_sub_field( 'recommend_icon' );
									if ( ! empty( $quick_fact_icon ) ) {
										$fact_icon = $quick_fact_icon['sizes']['mid_icon'];
									}
									if(!empty($fact_icon)){ echo"<img src='".$fact_icon."'>"; }
								}else{
								the_sub_field( 'recommend_svg_image_value' ); } ?>
								</div>
								<h2><?php the_sub_field( 'recommend_title' ); ?></h2>
							</div>
						</div>
						<?php 
							$counter_card++;
						endwhile; 
						endif;
						?>					
					</div>
				</div>
			</div>
		</section>
	</section>

	<section class="section">
		<section class="signup-section" style="background-image:url('<?php echo get_template_directory_uri() . '/dist/assets/images/signup-background.png'; ?>')">
			<div class="wrapper">
				<div class="row">
					<div class="col-md-6 wow fadeInLeftBig">
						<div class="signup-affiliate-program">
							<h1><?php the_field( 'sign_up_title' ); ?></h1>
							<a href="<?php the_field( 'sign_up_button_link' ); ?>" class="btn--orange"><?php the_field( 'sign_up_button_label' ); ?> <i class="fas fa-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
			<?php
			$signup_form_banner_image = '';
			$signup_image     = get_field( 'section_background_image' );
			if ( ! empty( $signup_image ) ) {
				$signup_form_banner_image = $signup_image['url'];
			}
			?>
			<div class="signup-thumbnail-img wow fadeInRightBig" style="background-image:url('<?php echo $signup_form_banner_image; ?>')"></div>
		</section>
	
		<section class="pay-out-terms">
			<div class="wrapper wow fadeInUp">
				<div class="section-header u-txt-center">
					<h2 class="section-header__title"><?php the_field( 'pay_out_terms_title' ); ?></h2>
					<span class="section-header__decoration-element"></span>
					<p class="section-header__sub-title"><?php the_field( 'pay_out_terms_short_detail' ); ?></p>
				</div>
				<table class="table payout-terms-table">
					<thead class="table-dark">
						<tr>
							<th>Services</th>
							<th>One-Time Commission</th>
							<th>Monthly-Recurring Commission</th>
						</tr>
					</thead>
					<tbody>
						<?php
						if ( have_rows( 'pay_out_term_table' ) ) : 
						$count_service = 1;
						while ( have_rows( 'pay_out_term_table' ) ) :
							the_row();
						?>
						<tr>
							<td>
								<span><?php the_sub_field( 'service_header' ); ?></span>
							</td>
							<td><?php the_sub_field( 'one_time_communication' ); ?></td>
							<td><?php the_sub_field( 'monthly_recurring_commission' ); ?></td>
						</tr>
						<?php 
						$count_service++;
						endwhile; 
						endif;
						?>
					</tbody>
				</table>
			</div>
		</section>
	</section>
	<?php endwhile; // end of the loop. ?>
</main>
<?php get_footer(); ?>
