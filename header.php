<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php bloginfo( 'title' ); ?></title>
		<?php wp_head(); ?>
		<?php echo do_shortcode('[dedicated_shopping_cart_link target="#js-shopping-cart-link"]') ?>
	</head>

	<body <?php body_class(); ?>>

		<header role="header" class="site-header">
			<div class="wrapper">
				<div class="rows rows--item-vertical-center inner-head-wrapper">
					<div class="rows__small-4 rows__medium-3">
						<div class="site-header__logo">
						<?php if ( has_custom_logo()) : ?>
						<?php the_custom_logo(); ?>
						<?php endif; ?>
						</div>
					</div>
					<div class="rows__medium-7 rows__display-none-um">
						<div class="site-header__menu-content">
							<nav class="header-navigation" role="navigation" aria-label="<?php esc_html_e( 'Main Navigation', '_themename' ); ?>">
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'header-nav-menu',
										'container'      => false,
									)
								);
								?>
							</nav>
						</div>
					</div>
					<div class="rows__small-8 rows__medium-4 rows--item-vertical-center">
						<a class="btn--orange u-mb-untill-small ml-auto" href="<?php echo do_shortcode('[dedicated_client_area_url]') ?>" class="login">Log In </a> &nbsp;&nbsp;
						<a href="<?php the_field( 'banner_dedicated_server_button_link' ); ?>" class="btn--orange u-mb-untill-small">
							<div class="btn-icon"><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/chat@2x.png'; ?>" alt="" srcset=""></div><span class="btn-label btn-txt-um">Chat</span>
						</a>
						<div id="js-shopping-cart-link" class="shopping-cart-link"></div>
						<div class="site-header__menu-icon">
							<div class="site-header__menu-icon__middle"></div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="site-header__mobile-menu-content">
				<nav class="header-mobile-navigation" role="navigation" aria-label="<?php esc_html_e( 'Main Navigation', '_themename' ); ?>">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'header-nav-menu',
							'container'      => false,
						)
					);
					?>
				</nav>
		</div>
		<?php if( is_front_page() ):?>
		<!-- <nav class="section  scroll-nav">
          <ul>
            <li><a class="slide"></a></li>
            <li><a class="slide"></a></li>
            <li><a class="slide"></a></li>
			<li><a class="slide"></a></li>
            <li><a class="slide"></a></li>
			<li><a class="slide"></a></li>
            <li><a class="slide"></a></li>
          </ul>
        </nav> -->
		<?php endif;?>
