<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php bloginfo( 'title' ); ?></title>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<header role="header" class="site-header">
			<div class="wrapper">
				<div class="rows rows--t-padding rows--b-padding rows--item-vertical-center">
					<div class="rows__small-8 rows__medium-3">
						<div class="site-header__logo">
						<?php if ( has_custom_logo()) : ?>
						<?php the_custom_logo(); ?>
						<?php endif; ?>
						<!-- <img src="<?php echo get_template_directory_uri() . '/dist/assets/images/logos.png'; ?>" alt="Dedicated solutions Logo"> -->
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
					<div class="rows__small-4 rows__medium-2 rows--item-vertical-center">
						<button class="btn--orange ml-auto"><i class="fas fa-comment-dots"></i><span>Live Chat</span></button>
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
			
