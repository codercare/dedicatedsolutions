<?php
/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage dedicatedsolutions
 */

?>

<?php if ( has_nav_menu( 'primary' ) ) : ?>
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'menu_class'      => 'navbar-nav',
				'menu_id'        => 'primary-menu',
			
				'container' => 'div',
				'container_class' => 'collapse navbar-collapse',
				'container_id' => 'navbarNavDropdown',
				'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
				'items_class'      => 'nav-item',
				'fallback_cb'     => false,
			)
		);		
		?>
	<!-- #site-navigation -->
<?php endif; ?>
<div class="nav navbar-nav navbar-right">
	<button class="btn btn-primary navbar-btn ">
		<svg xmlns="http://www.w3.org/2000/svg" class="btn-icon" width="24.536" height="25.133"
			viewBox="0 0 24.536 25.133">
			<g id="chat" transform="translate(-366.465 -8)">
				<g id="Group_2782" data-name="Group 2782" transform="translate(366.463 8)">
					<g id="Group_2781" data-name="Group 2781" transform="translate(0.002)">
						<path id="Path_12036" data-name="Path 12036"
							d="M21.254,0H3.285A3.287,3.287,0,0,0,0,3.283V24.237a.9.9,0,0,0,1.553.608l6.361-6.876H21.254a3.287,3.287,0,0,0,3.283-3.283V3.283A3.287,3.287,0,0,0,21.254,0ZM10.509,13.688H3.882a.9.9,0,0,1,0-1.791h6.626a.9.9,0,1,1,0,1.791Zm10.149-4.1H3.882a.9.9,0,0,1,0-1.791H20.657a.9.9,0,0,1,0,1.791Zm0-4.1H3.882a.9.9,0,1,1,0-1.791H20.657a.9.9,0,1,1,0,1.791Z"
							transform="translate(-0.002)" fill="#fff" />
					</g>
				</g>
			</g>
		</svg>
		Live chat</button>
</div>
