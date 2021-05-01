<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage dedicatedsolutions
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= true === get_theme_mod( 'display_title_and_tagline', true ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';

?>

<header class="site-header <?php echo esc_attr( $wrapper_classes ); ?>">
	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<?php get_template_part( 'template-parts/header/site-branding' );  ?>
			<?php get_template_part( 'template-parts/header/site-nav' ); ?>
		</div>
	</nav>
</header><!-- #masthead -->
