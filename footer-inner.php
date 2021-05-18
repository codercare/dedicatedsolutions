		<footer class="site-footer site-inner-footer">
			<div class="wrapper">
				<div class="site-footer__content">
					<div class="payment-methods">
						<h5 class="payment-methods__title"><span>Accepted</span><span>Payment</span></h5>
						<ul class="payment-methods__list">
							<li class="payment-methods__item">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/visa.png'; ?>" alt="" srcset="">
							</li>
							<li class="payment-methods__item">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/mastercard.png'; ?>" alt="" srcset="">
							</li>
							<li class="payment-methods__item">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/paypal.png'; ?>" alt="" srcset="">
							</li>
							<li class="payment-methods__item">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/american-express.png'; ?>" alt="" srcset="">
							</li>
							<li class="payment-methods__item">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/discover.png'; ?>" alt="" srcset="">
							</li>
						</ul>
					</div>
					<div class="us-support">
						<div class="us-support__icon-container">
							<i class="fas fa-headset"></i>
						</div>
						<h5 class="us-support__title">Us based support</h5>
						<p class="us-support__text">Live support</p>
					</div>
					<ul class="support-links">
						<li class="support-links__item">
							<h6 class="support-links__title">Mangage Support</h6>
							<a href="#" class="support-links__link">Industry Leading Managed support</a>
						</li>
						<li class="support-links__item">
							<h6 class="support-links__title">Speak with an Expert</h6>
							<a href="#" class="support-links__link">Need help deciding on the best server for your need?</a>
						</li>
					</ul>
					<div class="site-footer__btn-container">
						<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Contactus' ) ) ); ?>" class="btn--orange u-mb-untill-small u-mr">
							<span class="btn-label">Contact Us</span>
						</a>
						<a href="<?php the_field( 'banner_dedicated_server_button_link' ); ?>" class="btn--orange u-mb-untill-small">
							<div class="btn-icon"><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/chat@2x.png'; ?>" alt="" srcset=""></div>
						</a>
					</div>
				</div>

			</div>
		</footer>
		<?php wp_footer(); ?>
		<script>
			jQuery(document).ready(function($) {
				$('#fullpage').fullpage({
					licenseKey: '71051AA7-77BC4D43-BEDAB639-090EF836',
					fitToSection: true,
					navigation: true,
					navigationPosition: 'right',
				});
			});
		</script>
	</body>
</html>
