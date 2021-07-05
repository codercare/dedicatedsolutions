<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package dedicatedsolutions
 */

get_header();
?>
<section id="fullpage">
<section class="section">
	<div class="wrapper">
		<div class="row">
			<div class="col-md-6 u-txt-center">
				<svg id="notfoundsvg" viewBox="0 0 837 1045" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
				<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
				<path d="M353,9 L626.664028,170 L626.664028,487 L353,642 L79.3359724,487 L79.3359724,170 L353,9 Z" id="Polygon-1" stroke="#007FB2" stroke-width="6" sketch:type="MSShapeGroup"></path>
				<path d="M78.5,529 L147,569.186414 L147,648.311216 L78.5,687 L10,648.311216 L10,569.186414 L78.5,529 Z" id="Polygon-2" stroke="#EF4A5B" stroke-width="6" sketch:type="MSShapeGroup"></path>
				<path d="M773,186 L827,217.538705 L827,279.636651 L773,310 L719,279.636651 L719,217.538705 L773,186 Z" id="Polygon-3" stroke="#795D9C" stroke-width="6" sketch:type="MSShapeGroup"></path>
				<path d="M639,529 L773,607.846761 L773,763.091627 L639,839 L505,763.091627 L505,607.846761 L639,529 Z" id="Polygon-4" stroke="#F2773F" stroke-width="6" sketch:type="MSShapeGroup"></path>
				<path d="M281,801 L383,861.025276 L383,979.21169 L281,1037 L179,979.21169 L179,861.025276 L281,801 Z" id="Polygon-5" stroke="#36B455" stroke-width="6" sketch:type="MSShapeGroup"></path>
				</g>
				</svg>
			</div>
			<div id="message_box_404" class="col-md-6 u-txt-center align-middle">	
				<h1 class="section-header__title">404</h1>
				<h3 class="section-header__Orangesub-title">Page not found</h3>
				<h2 class="section-header__title">Sorry, but nothing exists here.</h2>	
				<br/>
				<div class="ask-for-quotation">
					<a  style="cursor:pointer;" onclick="history.back(-1)" class="btn--orange">Go Back</a> &nbsp;&nbsp;&nbsp;&nbsp;
					<a href="<?php echo site_url('/');?>" class="btn--orange">
					<span class="btn-label">Home</span>
					</a>
					<br/><br/>
				</div>				
			</div>
		</div>			
	</div>
</section>
</section>

	<!-- <main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'dedicatedsolutions' ); ?></h1>
			</header>

			<div class="page-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'dedicatedsolutions' ); ?></p>

					<?php
					get_search_form();

					the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'dedicatedsolutions' ); ?></h2>
						<ul>
							<?php
							wp_list_categories(
								array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								)
							);
							?>
						</ul>
					</div>

					<?php
					
					$dedicatedsolutions_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'dedicatedsolutions' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$dedicatedsolutions_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					?>

			</div>
		</section>

	</main> -->

<?php
get_footer();
