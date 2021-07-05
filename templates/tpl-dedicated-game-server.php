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
				<div class="page-banner-content">
					<h1 class="large-banner__heading"><?php the_field( 'dedicated_game_server_title' ); ?></h1>
					<p><?php the_field( 'dedicated_game_server_sub_title' ); ?></p>
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
						<li><img src="<?php echo $game_server_icon; ?>" alt="game-servers"></li>
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
					<div class="col-md-6">
						<div class="game-server-content">
							<div class="section-header">
								<h2 class="section-header__title"><?php the_field( 'game_server_title' ); ?></h2>
								<span class="section-header__decoration-element"></span>
								<h4 class="section-header__Orangesub-title"><?php the_field( 'game_server_description' ); ?></h4>
							</div>
						</div>
					</div>
					<div class="col-md-6">
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
		<section class="game-room-section">
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
					<h2 class="section-header__title"><?php the_field( 'ready_to_go_block_title' ); ?></h2>
					<h4 class="section-header__Orangesub-title"><?php the_field( 'ready_to_go_block_sub_title' ); ?></h4>
				</div>
				<a href="<?php the_field( 'ready_to_go_block_button_label_url' ); ?>" class="btn--white"><?php the_field( 'ready_to_go_block_button_label' ); ?></a>
				<p><?php the_field( 'ready_to_go_block_label_text' ); ?></p>
			</div>
		</section>
	</section>

	<?php if(get_field('showhide_popular_dedicated_server')){ ?>
	<section class="popular-dedicated-server section">
		<div class="wrappper">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title">Our Most Popular Dedicated Server</h2>
				<span class="section-header__decoration-element"></span>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4">
					<div class="server-type-block-wrap">
						<h3><i><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/servers.png'; ?>" alt="servers"></i>Budget Servers</h3>
						<h4>Our Best Selling Budget Servers</h4>
						<div class="row">
							<?php
							global $post;
							
							$budget_query = array(
								'posts_per_page' => 4,
								'post_type'      => 'product',
								'tax_query' => array(
									array(
										'taxonomy' => 'product_cat',
										'field'    => 'slug',
										'terms'    => array( 'budget-servers' ),
									)
								)
							);		
														
							$budget_server = new WP_Query($budget_query);
							if ( $budget_server->have_posts() ) :
							while ( $budget_server->have_posts() ) : $budget_server->the_post(); 
							?>
							<div class="col-md-6">
								<div class="server-type-block">
									<div class="server-tye-header">
										<h5><?php the_title(); ?> <span><?php the_field( 'server_ghz' ); ?></span></h5>
									</div>
									<div class="server-type-logo">
										<?php
										$server_list_icon = '';
										$serv_icon_image = get_field('server_icon', get_the_ID());
										if ( ! empty( $serv_icon_image ) ) {
											$server_list_icon = $serv_icon_image['url'];
										}
										?>
										<span><img src="<?php echo $server_list_icon; ?>" alt="<?php the_title(); ?>"  class="server-icon-image"></span>
									</div>
									<ul>
										<li>Server - <?php the_field( 'server_ghz' ); ?></li>
										<li>HDD - <?php $hdd = get_field( 'hdd' );  $raid = get_field( 'raid' ); echo strlimit(strip_tags($hdd.' '.$raid),'25','');  ?></li>
										<li>RAM - <?php the_field( 'ram' ); ?></li>
										<li>PORT - <?php the_field( 'port' ); ?></li>
										<li>LOCATION  - <?php the_field( 'location' ); ?></li>
									</ul>
									<a href="<?php the_field( 'instance_order_link' ); ?>" class="btn--orange">Order (Instant) <i class="fas fa-arrow-right"></i></a>
								</div>
							</div>
							<?php
							endwhile; 
							wp_reset_postdata();
							endif; 
							?>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="server-type-block-wrap">
						<h3><i><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/servers.png'; ?>" alt="servers"></i>Pro Servers</h3>
						<h4>Our Best Selling Pro Servers</h4>
						<div class="row">
							<?php
							global $post;
							
							$pro_query = array(
								'posts_per_page' => 4,
								'post_type'      => 'product',
								'tax_query' => array(
									array(
										'taxonomy' => 'product_cat',
										'field'    => 'slug',
										'terms'    => array( 'pro-servers' ),
									)
								)
							);		
														
							$pro_server = new WP_Query($pro_query);
							if ( $pro_server->have_posts() ) :
							while ( $pro_server->have_posts() ) : $pro_server->the_post(); 
							?>
							<div class="col-md-6">
								<div class="server-type-block">
									<div class="server-tye-header">
										<h5><?php the_title(); ?> <span><?php the_field( 'server_ghz' ); ?></span></h5>
									</div>
									<div class="server-type-logo">
										<?php
										$server_list_icon = '';
										$serv_icon_image = get_field('server_icon', get_the_ID());
										if ( ! empty( $serv_icon_image ) ) {
											$server_list_icon = $serv_icon_image['url'];
										}
										?>
										<span><img src="<?php echo $server_list_icon; ?>" alt="<?php the_title(); ?>"  class="server-icon-image"></span>
									</div>
									<ul>
										<li>Server - <?php the_field( 'server_ghz' ); ?></li>
										<li>HDD - <?php $hdd = get_field( 'hdd' );  $raid = get_field( 'raid' ); echo strlimit(strip_tags($hdd.' '.$raid),'25','');  ?></li>
										<li>RAM - <?php the_field( 'ram' ); ?></li>
										<li>PORT - <?php the_field( 'port' ); ?></li>
										<li>LOCATION  - <?php the_field( 'location' ); ?></li>
									</ul>
									<a href="<?php the_field( 'instance_order_link' ); ?>" class="btn--orange blue">Order (Instant) <i class="fas fa-arrow-right"></i></a>
								</div>
							</div>
							<?php 
							endwhile; 
							wp_reset_postdata();
							endif;
							?>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="server-type-block-wrap">
						<h3><i><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/servers.png'; ?>" alt="servers"></i>Enterprise Servers</h3>
						<h4>Our Best Selling Enterprise Servers</h4>
						<div class="row">
						    <?php
							global $post;
							
							$enterprise_query = array(
								'posts_per_page' => 4,
								'post_type'      => 'product',
								'tax_query' => array(
									array(
										'taxonomy' => 'product_cat',
										'field'    => 'slug',
										'terms'    => array( 'enterprise-servers' ),
									)
								)
							);		
														
							$enterprise_server = new WP_Query($enterprise_query);
							if ( $enterprise_server->have_posts() ) :
							while ( $enterprise_server->have_posts() ) : $enterprise_server->the_post(); 
							?>
							<div class="col-md-6">
								<div class="server-type-block">
									<div class="server-tye-header">
										<h5><?php the_title(); ?> <span><?php the_field( 'server_ghz' ); ?></span></h5>
									</div>
									<div class="server-type-logo">
										<?php
										$server_list_icon = '';
										$serv_icon_image = get_field('server_icon', get_the_ID());
										if ( ! empty( $serv_icon_image ) ) {
											$server_list_icon = $serv_icon_image['url'];
										}
										?>
										<span><img src="<?php echo $server_list_icon; ?>" alt="<?php the_title(); ?>" class="server-icon-image"></span>
									</div>
									<ul>
										<li>Server - <?php the_field( 'server_ghz' ); ?></li>
										<li>HDD - <?php $hdd = get_field( 'hdd' );  $raid = get_field( 'raid' ); echo strlimit(strip_tags($hdd.' '.$raid),'25','');  ?></li>
										<li>RAM - <?php the_field( 'ram' ); ?></li>
										<li>PORT - <?php the_field( 'port' ); ?></li>
										<li>LOCATION  - <?php the_field( 'location' ); ?></li>
									</ul>
									<a href="<?php the_field( 'instance_order_link' ); ?>" class="btn--orange success">Order (Instant) <i class="fas fa-arrow-right"></i></a>
								</div>
							</div>
							<?php 
							endwhile; 
							wp_reset_postdata();
							endif;
							?>							
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