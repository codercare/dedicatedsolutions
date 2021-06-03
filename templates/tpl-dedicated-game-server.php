<?php
/* Template Name: Dedicated Game Server */ 

get_header();?>
<?php
	$banner_image_url = site_url().'/wp-content/uploads/2021/05/banner-img.jpg';
	$banner_image     = get_field( 'reseller_program_bg_image' );
	if ( ! empty( $banner_image ) ) {
		$banner_image_url = $banner_image['url'];
	}
?>
<main id="fullpage" class="site-main">
	<section class="section">
		<section class="page-banner cp-sh-page-banner dg-server-banner" style="background-image:url('<?php echo get_template_directory_uri() . '/dist/assets/images/custom-sol-bg.jpg'; ?>')">
			<div class="container-fluid">
				<div class="page-banner-content">
					<h1 class="large-banner__heading">Dedicated Game Server</h1>
					<p>Popular Game Servers</p>
					<ul>
						<li><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/game-servers-nav-space-engineers.png'; ?>" alt="game-servers-nav-space-engineers"></li>
						<li><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/game-servers-nav-counter-strike.png'; ?>" alt="game-servers-nav-counter-strike"></li>
						<li><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/game-servers-nav-counter-strike-source.png'; ?>" alt="game-servers-nav-counter-strike-source"></li>
						<li><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/game-servers-nav-rust.png'; ?>" alt="game-servers-nav-rust"></li>
						<li><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/game-servers-nav-tumblr.png'; ?>" alt="game-servers-nav-tumblr"></li>
						<li><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/game-servers-nav-call-of-duty.png'; ?>" alt="game-servers-nav-call-of-duty"></li>
						<li><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/game-servers-nav-ark.png'; ?>" alt="game-servers-nav-ark"></li>
						<li><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/game-servers-nav-battlefield.png'; ?>" alt="game-servers-nav-battlefield"></li>
						<li><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/game-servers-nav-minecraft.png'; ?>" alt="game-servers-nav-minecraft"></li>
						<li><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/game-servers-nav-team-fortress.png'; ?>" alt="game-servers-nav-team-fortress"></li>
						<li><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/game-servers-nav-days-7-to-die.png'; ?>" alt="game-servers-nav-days-7-to-die"></li>
						<li><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/game-servers-nav-killingfloor.png'; ?>" alt="game-servers-nav-killingfloor"></li>
						<li><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/game-servers-nav-life-is-feudal.png'; ?>" a lt="game-servers-nav-life-is-feudal"></li>
					</ul>
				</div>
			</div>
		</section>
		
		<section class="game-server-section">
			<div class="wrapper">
				<div class="row">
					<div class="col-lg-6">
						<div class="game-server-content">
							<div class="section-header">
								<h2 class="section-header__title">Game Servers</h2>
								<span class="section-header__decoration-element"></span>
								<h4 class="section-header__Orangesub-title">
									Here at Dedicated Solutions, we know gamers. We know the frustration of a bogged down server and high latency. It’s enough to make you rage quit. That’s why we’re the logical solution for your gaming server. This isn’t some low grade “server” running through your buddy’s Linksys, these are professional, enterprise grade servers on an enterprise network backbone. You’ll experience high performance from the servers and with low latency thanks to that rock solid infrastructure. So if you’re serious about your gaming server, contact us for a quote. We can set you up with a rig that will rival the pros.
								</h4>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="cp-features-block game-server-block">
							<div class="cp-feat-icon">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/smartphone.png'; ?>" alt="smartphone">
							</div>
							<h3>Low latency, High-Speed Connectivity</h3>
							<p>High availability is ensured by 24X7 network health check-up process.</p>
						</div>
						<div class="cp-features-block game-server-block">
							<div class="cp-feat-icon">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/files.png'; ?>" alt="files">
							</div>
							<h3>Remote Monitoring & Management</h3>
							<p>Our control panel helps you to manage and monitor game server remotely.</p>
						</div>
						<div class="cp-features-block game-server-block">
							<div class="cp-feat-icon">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/database server.png'; ?>" alt="database server">
							</div>
							<h3>High availability</h3>
							<p>We guarantee low latency, high speed, and reliable connectivity worldwide.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>

	<section class="section">
		<section class="game-room-section">
			<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/game-room-image.jpg'; ?>" alt="game-room-image">
		</section>
	
		<section class="get-cp-server get-game-server section fp-auto-height">
			<div class="wrapper">
				<div class="section-header u-txt-center">
					<h2 class="section-header__title">See all our Instant-On Dedicated Servers with cPanel – Ready to Go!</h2>
					<h4 class="section-header__Orangesub-title">Get Your Dedicated Server in Less than 15 Minutes!</h4>
				</div>
				<a href="" class="btn--white">View Servers</a>
				<p>Or go with one of our Custom Servers below</p>
			</div>
		</section>
	</section>

	<section class="popular-dedicated-server section">
		<div class="wrappper">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title">Our Most Popular Dedicated Server</h2>
				<span class="section-header__decoration-element"></span>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-4 col-lg-6">
					<div class="server-type-block-wrap">
						<h3><i><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/servers.png'; ?>" alt="servers"></i>Budget Srvers</h3>
						<h4>Our Best Selling Budget Servers</h4>
						<div class="row">
							<div class="col-lg-6">
								<div class="server-type-block">
									<div class="server-tye-header">
										<h5>Intel Xeon 4/8 Core <span>4x 2.20GHz</span></h5>
									</div>
									<div class="server-type-logo">
										<span><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/hp-logo.png'; ?>" alt="hp-logo"></span>
										<span><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/dell-logo.png'; ?>" alt="dell-logo"></span>
									</div>
									<ul>
										<li>Server - 822B DELL/HP</li>
										<li>HDD - 1x 250GB HDD NoRaid</li>
										<li>RAM - 8GB RAM</li>
										<li>PORT - 1Gbps</li>
										<li>LOCATION - TX, Dallas TIER-III</li>
									</ul>
									<a href="" class="btn--orange">Order (Instant) <i class="fas fa-arrow-right"></i></a>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="server-type-block">
									<div class="server-tye-header">
										<h5>Intel Xeon 4/8 Core <span>4x 2.20GHz</span></h5>
									</div>
									<div class="server-type-logo">
										<span><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/hp-logo.png'; ?>" alt="hp-logo"></span>
										<span><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/dell-logo.png'; ?>" alt="dell-logo"></span>
									</div>
									<ul>
										<li>Server - 822B DELL/HP</li>
										<li>HDD - 1x 250GB HDD NoRaid</li>
										<li>RAM - 8GB RAM</li>
										<li>PORT - 1Gbps</li>
										<li>LOCATION - TX, Dallas TIER-III</li>
									</ul>
									<a href="" class="btn--orange">Order (Instant) <i class="fas fa-arrow-right"></i></a>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="server-type-block">
									<div class="server-tye-header">
										<h5>Intel Xeon 4/8 Core <span>4x 2.20GHz</span></h5>
									</div>
									<div class="server-type-logo">
										<span><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/hp-logo.png'; ?>" alt="hp-logo"></span>
										<span><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/dell-logo.png'; ?>" alt="dell-logo"></span>
									</div>
									<ul>
										<li>Server - 822B DELL/HP</li>
										<li>HDD - 1x 250GB HDD NoRaid</li>
										<li>RAM - 8GB RAM</li>
										<li>PORT - 1Gbps</li>
										<li>LOCATION - TX, Dallas TIER-III</li>
									</ul>
									<a href="" class="btn--orange">Order (Instant) <i class="fas fa-arrow-right"></i></a>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="server-type-block">
									<div class="server-tye-header">
										<h5>Intel Xeon 4/8 Core <span>4x 2.20GHz</span></h5>
									</div>
									<div class="server-type-logo">
										<span><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/hp-logo.png'; ?>" alt="hp-logo"></span>
										<span><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/dell-logo.png'; ?>" alt="dell-logo"></span>
									</div>
									<ul>
										<li>Server - 822B DELL/HP</li>
										<li>HDD - 1x 250GB HDD NoRaid</li>
										<li>RAM - 8GB RAM</li>
										<li>PORT - 1Gbps</li>
										<li>LOCATION - TX, Dallas TIER-III</li>
									</ul>
									<a href="" class="btn--orange">Order (Instant) <i class="fas fa-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6">
					<div class="server-type-block-wrap">
						<h3><i><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/servers.png'; ?>" alt="servers"></i>Pro Srvers</h3>
						<h4>Our Best Selling Pro Servers</h4>
						<div class="row">
							<div class="col-lg-6">
								<div class="server-type-block">
									<div class="server-tye-header">
										<h5>Intel Xeon 4/8 Core <span>4x 2.20GHz</span></h5>
									</div>
									<div class="server-type-logo">
										<span><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/hp-logo.png'; ?>" alt="hp-logo"></span>
										<span><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/dell-logo.png'; ?>" alt="dell-logo"></span>
									</div>
									<ul>
										<li>Server - 822B DELL/HP</li>
										<li>HDD - 1x 250GB HDD NoRaid</li>
										<li>RAM - 8GB RAM</li>
										<li>PORT - 1Gbps</li>
										<li>LOCATION - TX, Dallas TIER-III</li>
									</ul>
									<a href="" class="btn--orange blue">Order (Instant) <i class="fas fa-arrow-right"></i></a>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="server-type-block">
									<div class="server-tye-header">
										<h5>Intel Xeon 4/8 Core <span>4x 2.20GHz</span></h5>
									</div>
									<div class="server-type-logo">
										<span><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/hp-logo.png'; ?>" alt="hp-logo"></span>
										<span><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/dell-logo.png'; ?>" alt="dell-logo"></span>
									</div>
									<ul>
										<li>Server - 822B DELL/HP</li>
										<li>HDD - 1x 250GB HDD NoRaid</li>
										<li>RAM - 8GB RAM</li>
										<li>PORT - 1Gbps</li>
										<li>LOCATION - TX, Dallas TIER-III</li>
									</ul>
									<a href="" class="btn--orange blue">Order (Instant) <i class="fas fa-arrow-right"></i></a>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="server-type-block">
									<div class="server-tye-header">
										<h5>Intel Xeon 4/8 Core <span>4x 2.20GHz</span></h5>
									</div>
									<div class="server-type-logo">
										<span><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/hp-logo.png'; ?>" alt="hp-logo"></span>
										<span><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/dell-logo.png'; ?>" alt="dell-logo"></span>
									</div>
									<ul>
										<li>Server - 822B DELL/HP</li>
										<li>HDD - 1x 250GB HDD NoRaid</li>
										<li>RAM - 8GB RAM</li>
										<li>PORT - 1Gbps</li>
										<li>LOCATION - TX, Dallas TIER-III</li>
									</ul>
									<a href="" class="btn--orange blue">Order (Instant) <i class="fas fa-arrow-right"></i></a>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="server-type-block">
									<div class="server-tye-header">
										<h5>Intel Xeon 4/8 Core <span>4x 2.20GHz</span></h5>
									</div>
									<div class="server-type-logo">
										<span><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/hp-logo.png'; ?>" alt="hp-logo"></span>
										<span><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/dell-logo.png'; ?>" alt="dell-logo"></span>
									</div>
									<ul>
										<li>Server - 822B DELL/HP</li>
										<li>HDD - 1x 250GB HDD NoRaid</li>
										<li>RAM - 8GB RAM</li>
										<li>PORT - 1Gbps</li>
										<li>LOCATION - TX, Dallas TIER-III</li>
									</ul>
									<a href="" class="btn--orange blue">Order (Instant) <i class="fas fa-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6">
					<div class="server-type-block-wrap">
						<h3><i><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/servers.png'; ?>" alt="servers"></i>Enterprise Srvers</h3>
						<h4>Our Best Selling Enterprise Servers</h4>
						<div class="row">
							<div class="col-lg-6">
								<div class="server-type-block">
									<div class="server-tye-header">
										<h5>Intel Xeon 4/8 Core <span>4x 2.20GHz</span></h5>
									</div>
									<div class="server-type-logo">
										<span><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/hp-logo.png'; ?>" alt="hp-logo"></span>
										<span><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/dell-logo.png'; ?>" alt="dell-logo"></span>
									</div>
									<ul>
										<li>Server - 822B DELL/HP</li>
										<li>HDD - 1x 250GB HDD NoRaid</li>
										<li>RAM - 8GB RAM</li>
										<li>PORT - 1Gbps</li>
										<li>LOCATION - TX, Dallas TIER-III</li>
									</ul>
									<a href="" class="btn--orange success">Order (Instant) <i class="fas fa-arrow-right"></i></a>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="server-type-block">
									<div class="server-tye-header">
										<h5>Intel Xeon 4/8 Core <span>4x 2.20GHz</span></h5>
									</div>
									<div class="server-type-logo">
										<span><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/hp-logo.png'; ?>" alt="hp-logo"></span>
										<span><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/dell-logo.png'; ?>" alt="dell-logo"></span>
									</div>
									<ul>
										<li>Server - 822B DELL/HP</li>
										<li>HDD - 1x 250GB HDD NoRaid</li>
										<li>RAM - 8GB RAM</li>
										<li>PORT - 1Gbps</li>
										<li>LOCATION - TX, Dallas TIER-III</li>
									</ul>
									<a href="" class="btn--orange success">Order (Instant) <i class="fas fa-arrow-right"></i></a>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="server-type-block">
									<div class="server-tye-header">
										<h5>Intel Xeon 4/8 Core <span>4x 2.20GHz</span></h5>
									</div>
									<div class="server-type-logo">
										<span><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/hp-logo.png'; ?>" alt="hp-logo"></span>
										<span><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/dell-logo.png'; ?>" alt="dell-logo"></span>
									</div>
									<ul>
										<li>Server - 822B DELL/HP</li>
										<li>HDD - 1x 250GB HDD NoRaid</li>
										<li>RAM - 8GB RAM</li>
										<li>PORT - 1Gbps</li>
										<li>LOCATION - TX, Dallas TIER-III</li>
									</ul>
									<a href="" class="btn--orange success">Order (Instant) <i class="fas fa-arrow-right"></i></a>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="server-type-block">
									<div class="server-tye-header">
										<h5>Intel Xeon 4/8 Core <span>4x 2.20GHz</span></h5>
									</div>
									<div class="server-type-logo">
										<span><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/hp-logo.png'; ?>" alt="hp-logo"></span>
										<span><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/dell-logo.png'; ?>" alt="dell-logo"></span>
									</div>
									<ul>
										<li>Server - 822B DELL/HP</li>
										<li>HDD - 1x 250GB HDD NoRaid</li>
										<li>RAM - 8GB RAM</li>
										<li>PORT - 1Gbps</li>
										<li>LOCATION - TX, Dallas TIER-III</li>
									</ul>
									<a href="" class="btn--orange success">Order (Instant) <i class="fas fa-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
