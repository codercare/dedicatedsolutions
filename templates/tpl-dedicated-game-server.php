<?php
/* Template Name: Dedicated Game Server */ 
get_header();?>

<main id="fullpage" class="site-main">
<?php
while ( have_posts() ) : the_post(); 

	$banner_image_url = '';
	$banner_image     = get_field( 'dedicated_game_server_bg_banner' );
	if ( ! empty( $banner_image ) ) {
		$banner_image_url = $banner_image['sizes']['banner_image'];
	}
?>
	<section class="section">
		<section class="page-banner cp-sh-page-banner dg-server-banner" style="background-image:url('<?php echo $banner_image_url; ?>')">
			<div class="container-fluid">
				<div class="page-banner-content wow fadeInDown">
					<h1 class="large-banner__heading wow fadeInLeft"><?php the_field( 'dedicated_game_server_title' ); ?></h1>
					<p class="wow fadeInLeft"><?php the_field( 'dedicated_game_server_sub_title' ); ?></p>
					<ul>
						<?php
						if ( have_rows( 'dedicated_game_servers_icon_images' ) ) : 
						$counter_card = 1;
						while ( have_rows( 'dedicated_game_servers_icon_images' ) ) :
						the_row();
						$game_server_icon = '';
						$game_server_logo     = get_sub_field( 'logos' );
						if ( ! empty( $game_server_logo ) ) {
							$game_server_icon = $game_server_logo['sizes']['mid_icon'];
						}
					    ?>
						<li class="wow fadeInRightBig"><img src="<?php echo $game_server_icon; ?>" alt="game-servers"></li>
						<?php 
						$counter_card++;
						endwhile; 
						endif;
						?>
					</ul>
				</div>
			</div>
		</section>
		
		<section class="game-server-section">
			<div class="wrapper">
				<div class="row">
					<div class="col-md-6 wow fadeInLeftBig">
						<div class="game-server-content">
							<div class="section-header">
								<h2 class="section-header__title"><?php the_field( 'game_server_title' ); ?></h2>
								<span class="section-header__decoration-element"></span>
								<h4 class="section-header__Orangesub-title"><?php the_field( 'game_server_description' ); ?></h4>
							</div>
						</div>
					</div>
					<div class="col-md-6 wow fadeInRightBig">
						<?php
						if ( have_rows( 'game_server_features' ) ) : 
						$counter_card = 1;
						while ( have_rows( 'game_server_features' ) ) :
						the_row();
						$package_icon = '';
						$product_icon     = get_sub_field( 'feature_icon' );
						if ( ! empty( $product_icon ) ) {
							$package_icon = $product_icon['sizes']['mid_icon'];
						}
						?>
						<div class="cp-features-block game-server-block">
							<div class="cp-feat-icon">
								<img src="<?php echo $package_icon; ?>" alt="<?php the_sub_field( 'feature_title' ); ?>">
							</div>
							<h3><?php the_sub_field( 'feature_title' ); ?></h3>
							<p><?php the_sub_field( 'feature_detail' ); ?></p>
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
		<section class="game-room-section ">
			<?php 
				$game_server_feature_image_url = get_template_directory_uri().'/dist/assets/images/game-room-image.jpg';
				$game_serv_image     = get_field( 'ready_to_go_block_bg_image' );
				if ( ! empty( $game_serv_image ) ) {
					$game_server_feature_image_url = $game_serv_image['url'];
				}
			?>
			<img src="<?php echo $game_server_feature_image_url;  ?>" alt="game-server-room-image">
		</section>	
		<section class="get-cp-server get-game-server">
			<div class="wrapper">
				<div class="section-header u-txt-center">
					<h2 class="section-header__title wow fadeInRightBig"><?php the_field( 'ready_to_go_block_title' ); ?></h2>
					<h4 class="section-header__Orangesub-title"><?php the_field( 'ready_to_go_block_sub_title' ); ?></h4>
				</div>
				<a href="<?php the_field( 'ready_to_go_block_button_label_url' ); ?>" class="btn--white "><?php the_field( 'ready_to_go_block_button_label' ); ?></a>
				<p><?php the_field( 'ready_to_go_block_label_text' ); ?></p>
			</div>
		</section>
	</section>

	<?php if(get_field('showhide_popular_dedicated_server')){ ?>
	<section class="popular-dedicated-server section">
		<div class="wrappper">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title">Our Most Popular Dedicated Servers</h2>
				<span class="section-header__decoration-element"></span>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4">
					<div class="server-type-block-wrap  wow fadeInUp">
						<h3><i><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/servers.png'; ?>" alt="servers"></i>Budget Servers</h3>
						<h4>Our Best Selling Budget Servers</h4>
						<div class="row">
							<?php echo do_shortcode('[dedicated_popular_info product_group_id=358 discount=20 caption=""]');?>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="server-type-block-wrap  wow fadeInUp">
						<h3><i><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/servers.png'; ?>" alt="servers"></i>Pro Servers</h3>
						<h4>Our Best Selling Pro Servers</h4>
						<div class="row">
							<?php echo do_shortcode('[dedicated_popular_info product_group_id=331 discount=20 caption="" ]');?>							
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="server-type-block-wrap  wow fadeInUp">
						<h3><i><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/servers.png'; ?>" alt="servers"></i>Enterprise Servers</h3>
						<h4>Our Best Selling Enterprise Servers</h4>
						<div class="row">
							<?php echo do_shortcode('[dedicated_popular_info  product_group_id=332 discount=20 caption=""]');?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php } ?>

<?php endwhile; // end of the loop. ?>
</main>
<?php get_footer(); ?>