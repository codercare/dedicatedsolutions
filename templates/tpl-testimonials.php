<?php
/* Template Name: Testimonials */ 

get_header();?>
<main id="fullpage" class="site-main">
	<section class="testimonial-section section">
		<div class="wrapper">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title"><?php the_field( 'testimonial_block_title' ); ?></h2>
				<span class="section-header__decoration-element"></span>
				<p class="section-header__sub-title"><?php the_field( 'testimonial_block_sub_title' ); ?></p>
			</div>
			<div class="testimonial-block-wrap">
				<div class="row">
				    <?php
					global $post;

					$testimonials = get_posts( array(
						'offset' => 0,
						'posts_per_page' => 3,
						'post_type'      => 'testimonials'
					));

					if ( $testimonials ) {
					foreach ( $testimonials as $post ) : 
					setup_postdata( $post ); ?>
					<div class="col-md-4">
						<div class="testimonial-block">
							<i class="quote">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/quote.png'; ?>" alt="quote">
							</i>
							<p><?php echo wp_trim_words( get_the_content(), 30, '<br/> <span class="more_text">read more...</span>' );  ?></p>
							<span class="thanks">Thanks!</span>
							<div class="testimonial-profile">
								<?php the_post_thumbnail( 'thumbnail' );  ?>	
							</div>
							<h3><?php the_title(); ?> <span><?php  the_field( 'comapany_detail' ); ?></span></h3>
						</div>
					</div>
					<?php
					endforeach;
					wp_reset_postdata();
					}
					?>
				</div>
			</div>
		</div>
	</section>
	<section class="testimonial-section section">
		<div class="wrapper">
			<div class="testimonial-block-wrap">
				<div class="row">
					<?php
					global $post;

					$testimonial_more = get_posts( array(
						'offset' => 3,
						'posts_per_page' => 6,
						'post_type'      => 'testimonials'
					));

					if ( $testimonial_more ) {
					foreach ( $testimonial_more as $post ) : 
					setup_postdata( $post ); ?>
					<div class="col-md-4">
						<div class="testimonial-block">
							<i class="quote">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/quote.png'; ?>" alt="quote">
							</i>
							<p><?php echo wp_trim_words( get_the_content(), 28, '<br/> <span class="more_text">read more...</span>' );  ?></p>
							<span class="thanks">Thanks!</span>
							<div class="testimonial-profile">
								<?php the_post_thumbnail( 'thumbnail' );  ?>	
							</div>
							<h3><?php the_title(); ?> <span><?php  the_field( 'comapany_detail' ); ?></span></h3>
						</div>
					</div>
					<?php
					endforeach;
					wp_reset_postdata();
					}
					?>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
