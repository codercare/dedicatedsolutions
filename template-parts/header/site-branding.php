<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage dedicatedsolutions
 */

$blog_info    = get_bloginfo( 'name' );
$description  = get_bloginfo( 'description', 'display' );
$show_title   = ( true === get_theme_mod( 'display_title_and_tagline', true ) );
$header_class = $show_title ? 'site-title' : 'screen-reader-text';

?>

	<?php if ( has_custom_logo() && $show_title ) : ?>
		<a class="navbar-brand" href="#"><?php the_custom_logo(); ?></a>
	<?php endif; ?>

	<?php if ( has_custom_logo() && ! $show_title ) : ?>
		<a class="navbar-brand" href="#"><?php the_custom_logo(); ?></a>
	<?php endif; ?>

	<?php /* if ( $description && get_theme_mod( 'display_title_and_tagline', true ) === true ) : ?>
		<p class="site-description">
			<?php echo $description; // phpcs:ignore WordPress.Security.EscapeOutput ?>
		</p>
	<?php endif; */ ?>
<!-- .site-branding -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
	aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">

	<svg height="24pt" viewBox="0 -53 384 384" width="24pt" xmlns="http://www.w3.org/2000/svg"><path d="m368 154.667969h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/><path d="m368 32h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/><path d="m368 277.332031h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/></svg>
</button>