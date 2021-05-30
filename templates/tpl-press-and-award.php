<?php
/* Template Name: Press Announcement And Award */ 

get_header();?>
<main class="site-main">
	<section class="page-banner pressAnnouncement-page-banner">
		<div class="wrapper">
			<div class="page-banner-content">
				<h1 class="large-banner__heading"><?php the_field( 'press_announcement_title' ); ?></h1>
				<p><?php the_field( 'press_announcement_sub_heading' ); ?></p>
					<?php
					if ( have_rows( 'press_announcement_buttons_and_links' ) ) : 
					while ( have_rows( 'press_announcement_buttons_and_links' ) ) :
					the_row();
					?>
					<a href="<?php the_sub_field('button_link');?>" class="btn--orange"><?php the_sub_field('button_label');?></a>
					<?php 					
					endwhile; 
					endif;
					?>
			</div>
		</div>
	</section>
	<section class="press-release">
		<div class="wrapper">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title"><?php the_field( 'press_release_block_title' ); ?></h2>
				<span class="section-header__decoration-element"></span>
			</div>
			<div class="press-relase-block-wrap">
			    <?php
				global $post;
				$press_release = get_posts( array(
					'posts_per_page' => 2,
					'post_type'      => 'press-release'
					));

				if ( $press_release ) {
				$count = 1;
				foreach ( $press_release as $post ) : 
				setup_postdata( $post ); ?>
				<div class="press-relase-block">
					<div class="row">
						<div class="col-md-6 <?php if($count %2 === 0){ echo 'order-md-1'; } ?> pr-md-0">
							<figure class="thumbnail-img">
							    <?php the_post_thumbnail( 'press_image_center' );?>								
							</figure>
						</div>
						<div class="col-md-6">
							<div class="press-relase-content">
								<h2><?php the_title(); ?></h2>
								<h4><i><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/calendar.png'; ?>" alt="calendar"></i>
								<?php $press_post_date = get_the_date( 'j F, Y' ); echo $press_post_date;  ?></h4>
								<p><?php echo wp_trim_words( get_the_excerpt(), 30, '' );  ?></p>
								<a href="<?php the_permalink(); ?>" class="btn--orange">Read More</a>
							</div>
						</div>
					</div>
				</div>
				<?php
				$count++;
				endforeach;
				wp_reset_postdata();
				}
				?>
			</div>
		</div>
	</section>

	<section class="award-section" style="background-image:url('<?php echo get_template_directory_uri() . '/dist/assets/images/awards-bg.jpg'; ?>')">
		<div class="wrapper">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title"><?php the_field( 'awards_section_title' ); ?></h2>
				<span class="section-header__decoration-element--dark"></span>
			</div>
			<div class="awards-block-wrap">
				<div class="row">
				<?php
				global $post;
				$awards = get_posts( array(
					'posts_per_page' => 3,
					'post_type'      => 'awards'
					));

				if ( $awards ) {
				$count = 1;
				foreach ( $awards as $post ) : 
				setup_postdata( $post ); ?>
					<div class="col-md-4">
						<div class="awards-block award-1">
							<div class="awards-block-content">
								<div class="award-logo">
								    <?php 
									
									the_post_thumbnail('full');?>		
								</div>
								<h3><?php the_title(); ?></h3>
								<a href="<?php the_permalink(); ?>" class="btn--orange">Read Full Review</a>
							</div>
						</div>
					</div>
				<?php
				$count++;
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
