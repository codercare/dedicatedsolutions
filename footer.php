		<footer class="site-footer">
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
							<h6 class="support-links__title">Managed Support</h6>
							<a href="<?php echo site_url('/managed-services');?>" class="support-links__link">Industry Leading Managed support</a>
						</li>
						<li class="support-links__item">
							<h6 class="support-links__title">Speak with an Expert</h6>
							<a href="#" class="support-links__link">Need help deciding on the best server for your need?</a>
						</li>
					</ul>
					<div class="site-footer__btn-container">
						<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Contact Us' ) ) ); ?>" class="btn--orange u-mb-untill-small u-mr">
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
					anchors: ['section1', 'section2', 'section3', 'section4','section5','section6','section7','section8','section9','section10'],
					navigationPosition: 'right',
					responsiveWidth: 768,
					normalScrollElements: '#bmc-pills-table-scroll',
					onLeave: function(index, next, direction) {
						if (next.index != 0) {
						$('.site-header').addClass('site-header--on-scroll');
						} else {
						$('.site-header').removeClass('site-header--on-scroll');
						}
					}
				});
				$('.av-gridder').gridderExpander({
					scroll: true,
					scrollOffset: 30,
					scrollTo: "panel",                  // panel or listitem
					animationSpeed: 400,
					animationEasing: "easeInOutExpo",
					showNav: false,                      // Show Navigation
				});

				$('[data-toggle="tooltip"]').tooltip();   
							
			});	
				
		</script>
		<!-- Start of LiveChat (www.livechatinc.com) code -->
		<script>
			// window.__lc = window.__lc || {};
			// window.__lc.license = 13057212;
			// ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
		</script>
		<!-- <noscript><a href="https://www.livechatinc.com/chat-with/13057212/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript> -->
		<!-- End of LiveChat code -->

	</body>
</html>
