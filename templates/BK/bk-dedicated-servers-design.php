<?php
/* Dedicated Servers */ 

get_header();?>
<main id="fullpage" class="site-main">
	<section class="section">
		<section class="page-banner dedicated-server-page-banner" style="background-image:url('<?php echo get_template_directory_uri() . '/dist/assets/images/bare-metal-cloud-banner.jpg'; ?>')">
			<div class="wrapper">
				<div class="page-banner-content">
					<h4>Starting from</h4>
					<div class="starting-price">
						<span class="price">$39<span class="subPrice">.00</span></span>
						<span class="per-month">/month</span>
					</div>
					<h1 class="large-banner__heading">Dedicated Servers -- here</h1>
					<p>All Computing Options in one place – That is Bare-Metal Server Hosting!</p>
					<div class="large-banner__features">
						<ul class="large-banner__features-list">
							<li class="large-banner__features-item"><i class="fas fa-check-circle"></i>Linux & Windows Available</li>
							<li class="large-banner__features-item"><i class="fas fa-check-circle"></i>Instant Server Provisioning</li>
							<li class="large-banner__features-item"><i class="fas fa-check-circle"></i>Custom Server Available</li>
							<li class="large-banner__features-item"><i class="fas fa-check-circle"></i>Remote Reboot/KVM/IPMI</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		
		<section class="dedicated-server-navTabs">
			<div class="navTabs-pills-wrap">
				<div class="wrapper">
					<ul class="nav nav-pills" id="db-bd-hosting-pills-tab" role="tablist">
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="server-feat-tab" data-toggle="pill" href="#server-feat" role="tab" aria-controls="server-feat" aria-selected="false">Server Features</a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link active" id="server-config-tab" data-toggle="pill" href="#server-config" role="tab" aria-controls="server-config" aria-selected="true">Server Configurations</a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="server-feat-tab2" data-toggle="pill" href="#server-feat2" role="tab" aria-controls="server-feat2" aria-selected="false">Server Features</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="wrapper">
				<div class="tab-content" id="bmc-pills-tabContent">
					<div class="tab-pane fade" id="server-feat" role="tabpanel" aria-labelledby="server-feat-tab">
					server-feat-tab
					</div>
					<div class="tab-pane fade show active" id="server-config" role="tabpanel" aria-labelledby="server-config-tab">
						<div class="row">
							<div class="col-md-3">
								<div class="dedicated-server-block">
									<div class="ds-icon-box">
										<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/up-arrow.png'; ?>" alt="up-arrow">
									</div>
									<h3>100% UPTIME!</h3>
									<p>We haven’t had any outage in over 5 years</p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="dedicated-server-block">
									<div class="ds-icon-box">
										<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/badge.png'; ?>" alt="badge">
									</div>
									<h3>30 DAY MONEY BACK!</h3>
									<p>Try us – you will like us.</p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="dedicated-server-block">
									<div class="ds-icon-box">
										<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/data center.png'; ?>" alt="data center">
									</div>
									<h3>INSTANT SERVER SETUP!</h3>
									<p>Your Server wil be ready within minutes</p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="dedicated-server-block">
									<div class="ds-icon-box">
										<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/wall-clock.png'; ?>" alt="wall-clock">
									</div>
									<h3>24/7 EVERYTHING!</h3>
									<p>24/7 Support & Engineering Staff</p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="dedicated-server-block">
									<div class="ds-icon-box">
										<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/ds-key.png'; ?>" alt="ds-key">
									</div>
									<h3>PRIVATE CLOUD AVAILABLE!</h3>
									<p>Contact us for a custom quote</p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="dedicated-server-block">
									<div class="ds-icon-box">
										<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/ds-database.png'; ?>" alt="ds-database">
									</div>
									<h3>CUSTOM SERVERS AVAILABLE!</h3>
									<p>Max.12 Hours Provisioning Guaranteed</p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="dedicated-server-block">
									<div class="ds-icon-box">
										<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/speedometer.png'; ?>" alt="speedometer">
									</div>
									<h3>EXTREME SPEED!</h3>
									<p>10GBit/s Servers available!</p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="dedicated-server-block">
									<div class="ds-icon-box">
										<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/secure-data-center.png'; ?>" alt="secure-data-center">
									</div>
									<h3>DATA CENTER TO DATA CENTER!</h3>
									<p>FREE Point-to-Point Network Connectivity</p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="dedicated-server-block">
									<div class="ds-icon-box">
										<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/laptop.png'; ?>" alt="laptop">
									</div>
									<h3>HIGHEST STANDARDS!</h3>
									<p>Tier-III & Tier-IV Data Center Locations</p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="dedicated-server-block">
									<div class="ds-icon-box">
										<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/innovation.png'; ?>" alt="innovation">
									</div>
									<h3>SELF CONTROL PANEL!</h3>
									<p>100% Automated Reboot & OS installation</p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="dedicated-server-block">
									<div class="ds-icon-box">
										<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/computer networks.png'; ?>" alt="computer networks">
									</div>
									<h3>ADVANCED CONTROL PANEL!</h3>
									<p>Intuitive way to Manage your Servers!</p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="dedicated-server-block">
									<div class="ds-icon-box">
										<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/server-management.png'; ?>" alt="server-management">
									</div>
									<h3>MULTI-SERVER MANAGEMENT!</h3>
									<p>Manage all your servers, at any location</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="server-feat2" role="tabpanel" aria-labelledby="server-feat-tab2">
						server-feat-tab2
					</div>
				</div>
			</div>
		</section>
	</section>

	<section class="ds-server-hosting-feat section">
		<div class="wrapper">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title">Our Server Hosting Features</h2>
				<span class="section-header__decoration-element--dark"></span>
				<h4 class="section-header__Orangesub-title">See why you should rent your Dedicated Server Infrastructure from us!</h4>
			</div>
			<div class="row align-items-center">
				<div class="col-md-4 order-md-1">
					<div class="thumbnail-img">
						<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/ds-hosting-feat.png'; ?>" alt="ds-hosting-feat">
					</div>
				</div>
				<div class="col-md-4 order-md-0">
					<div class="ds-hosting-feat-block">
						<div class="ds-hosting-feat-list">
							<div class="ds-hosting-icon">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/ds-feat-icon1.png'; ?>" alt="ds-feat-icon1">
							</div>
							<div class="ds-hosting-content">
								<h3>100% UPTIME!</h3>
								<p>We haven’t had any outage in over 5 years</p>
							</div>
						</div>
						<div class="ds-hosting-feat-list">
							<div class="ds-hosting-icon">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/ds-feat-icon2.png'; ?>" alt="ds-feat-icon2">
							</div>
							<div class="ds-hosting-content">
								<h3>30 DAY MONEY BACK!</h3>
								<p>Try us – you will like us</p>
							</div>
						</div>
						<div class="ds-hosting-feat-list">
							<div class="ds-hosting-icon">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/ds-feat-icon3.png'; ?>" alt="ds-feat-icon3">
							</div>
							<div class="ds-hosting-content">
								<h3>INSTANT SERVER SETUP!</h3>
								<p>Your Server wil be ready within minutes</p>
							</div>
						</div>
						<div class="ds-hosting-feat-list">
							<div class="ds-hosting-icon">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/ds-feat-icon4.png'; ?>" alt="ds-feat-icon4">
							</div>
							<div class="ds-hosting-content">
								<h3>24/7 EVERYTHING!</h3>
								<p>24/7 Support & Engineering Staff</p>
							</div>
						</div>
						<div class="ds-hosting-feat-list">
							<div class="ds-hosting-icon">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/ds-feat-icon5.png'; ?>" alt="ds-feat-icon5">
							</div>
							<div class="ds-hosting-content">
								<h3>PRIVATE CLOUD AVAILABLE!</h3>
								<p>Contact us for a custom quote.</p>
							</div>
						</div>
						<div class="ds-hosting-feat-list">
							<div class="ds-hosting-icon">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/ds-feat-icon6.png'; ?>" alt="ds-feat-icon6">
							</div>
							<div class="ds-hosting-content">
								<h3>CUSTOM SERVERS AVAILABLE!</h3>
								<p>Max.12 Hours Provisioning Guaranteed</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 order-md-2">
					<div class="ds-hosting-feat-block">
						<div class="ds-hosting-feat-list">
							<div class="ds-hosting-icon">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/ds-feat-icon7.png'; ?>" alt="ds-feat-icon7">
							</div>
							<div class="ds-hosting-content">
								<h3>EXTREME SPEED!</h3>
								<p>10GBit/s Servers available!</p>
							</div>
						</div>
						<div class="ds-hosting-feat-list">
							<div class="ds-hosting-icon">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/ds-feat-icon8.png'; ?>" alt="ds-feat-icon8">
							</div>
							<div class="ds-hosting-content">
								<h3>DATA CENTER TO DATA CENTER!</h3>
								<p>FREE Point-to-Point Network Connectivity</p>
							</div>
						</div>
						<div class="ds-hosting-feat-list">
							<div class="ds-hosting-icon">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/ds-feat-icon9.png'; ?>" alt="ds-feat-icon9">
							</div>
							<div class="ds-hosting-content">
								<h3>HIGHEST STANDARDS!</h3>
								<p>Tier-III & Tier-IV Data Center Locations</p>
							</div>
						</div>
						<div class="ds-hosting-feat-list">
							<div class="ds-hosting-icon">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/ds-feat-icon10.png'; ?>" alt="ds-feat-icon10">
							</div>
							<div class="ds-hosting-content">
								<h3>SELF CONTROL PANEL!</h3>
								<p>100% Automated Reboot & OS installation.</p>
							</div>
						</div>
						<div class="ds-hosting-feat-list">
							<div class="ds-hosting-icon">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/ds-feat-icon11.png'; ?>" alt="ds-feat-icon11">
							</div>
							<div class="ds-hosting-content">
								<h3>ADVANCED CONTROL PANEL!</h3>
								<p>Intuitive way to Manage your Servers!</p>
							</div>
						</div>
						<div class="ds-hosting-feat-list">
							<div class="ds-hosting-icon">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/ds-feat-icon12.png'; ?>" alt="ds-feat-icon12">
							</div>
							<div class="ds-hosting-content">
								<h3>MULTI-SERVER MANAGEMENT!</h3>
								<p>Manage all your servers, at any location</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
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
				<div class="col-md-4">
					<div class="server-type-block-wrap">
						<h3><i><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/servers.png'; ?>" alt="servers"></i>Budget Srvers</h3>
						<h4>Our Best Selling Budget Servers</h4>
						<div class="row">
							<div class="col-md-6">
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
							<div class="col-md-6">
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
							<div class="col-md-6">
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
							<div class="col-md-6">
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
				<div class="col-md-4">
					<div class="server-type-block-wrap">
						<h3><i><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/servers.png'; ?>" alt="servers"></i>Pro Srvers</h3>
						<h4>Our Best Selling Pro Servers</h4>
						<div class="row">
							<div class="col-md-6">
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
							<div class="col-md-6">
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
							<div class="col-md-6">
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
							<div class="col-md-6">
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
				<div class="col-md-4">
					<div class="server-type-block-wrap">
						<h3><i><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/servers.png'; ?>" alt="servers"></i>Enterprise Srvers</h3>
						<h4>Our Best Selling Enterprise Servers</h4>
						<div class="row">
							<div class="col-md-6">
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
							<div class="col-md-6">
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
							<div class="col-md-6">
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
							<div class="col-md-6">
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
	
	<section class="all-server-details section">
		<div class="navTabs-pills-wrap">
			<div class="wrapper">
				<ul class="nav nav-pills" id="db-bd-hosting-pills-tab" role="tablist">
					<li class="nav-item" role="presentation">
						<a class="nav-link active" id="budget-server-tab" data-toggle="pill" href="#budget-server" role="tab" aria-controls="budget-server" aria-selected="true">View Budget Servers</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="pro-server-tab" data-toggle="pill" href="#pro-server" role="tab" aria-controls="pro-server" aria-selected="false">View Pro Servers</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="enterprise-server-tab" data-toggle="pill" href="#enterprise-server" role="tab" aria-controls="enterprise-server" aria-selected="false">View Enterprise Servers</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="server-details-table-wrap">
			<div class="tab-content" id="bmc-pills-tabContent">
				<div class="tab-pane fade show active" id="budget-server" role="tabpanel" aria-labelledby="budget-server-tab">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Model</th>
								<th>CPU</th>
								<th>RAM</th>
								<th>RAID</th>
								<th>HDD</th>
								<th>LOCATION</th>
								<th>PORT</th>
								<th>PRICE</th>
								<th>AVAILABLE</th>
								<th>&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<span class="logo-type"><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/hp-logo.png'; ?>" alt="hp-logo"></span>
									<span class="logo-type"><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/dell-logo.png'; ?>" alt="dell-logo"></span>
									811B
								</td>
								<td>Intel Xeon 4/8 Core <span class="orangeText">4x 2.20GHz</span></td>
								<td>8GB <span class="orangeText">RAM</span></td>
								<td>Yes <span class="orangeText">(512mb)</span></td>
								<td>1x 250GB HDD</td>
								<td>TX, Dallas</td>
								<td>1Gbps</td>
								<td>
									<span class="orangeText new-price">$90.00</span>
									<span class="old-price">$102.00</span>
								</td>
								<td>Instant</td>
								<td>
									<a href="" class="btn--orange">Configure <i class="fas fa-arrow-right"></i></a>
								</td>
							</tr>
							<tr>
								<td>
									<span class="logo-type"><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/hp-logo.png'; ?>" alt="hp-logo"></span>
									<span class="logo-type"><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/dell-logo.png'; ?>" alt="dell-logo"></span>
									811B
								</td>
								<td>Intel Xeon 4/8 Core <span class="orangeText">4x 2.20GHz</span></td>
								<td>8GB <span class="orangeText">RAM</span></td>
								<td>Yes <span class="orangeText">(512mb)</span></td>
								<td>1x 250GB HDD</td>
								<td>TX, Dallas</td>
								<td>1Gbps</td>
								<td>
									<span class="orangeText new-price">$90.00</span>
									<span class="old-price">$102.00</span>
								</td>
								<td>Instant</td>
								<td>
									<a href="" class="btn--orange">Configure <i class="fas fa-arrow-right"></i></a>
								</td>
							</tr>
							<tr>
								<td>
									<span class="logo-type"><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/hp-logo.png'; ?>" alt="hp-logo"></span>
									<span class="logo-type"><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/dell-logo.png'; ?>" alt="dell-logo"></span>
									811B
								</td>
								<td>Intel Xeon 4/8 Core <span class="orangeText">4x 2.20GHz</span></td>
								<td>8GB <span class="orangeText">RAM</span></td>
								<td>Yes <span class="orangeText">(512mb)</span></td>
								<td>1x 250GB HDD</td>
								<td>TX, Dallas</td>
								<td>1Gbps</td>
								<td>
									<span class="orangeText new-price">$90.00</span>
									<span class="old-price">$102.00</span>
								</td>
								<td>Instant</td>
								<td>
									<a href="" class="btn--orange">Configure <i class="fas fa-arrow-right"></i></a>
								</td>
							</tr>
							<tr>
								<td>
									<span class="logo-type"><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/hp-logo.png'; ?>" alt="hp-logo"></span>
									<span class="logo-type"><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/dell-logo.png'; ?>" alt="dell-logo"></span>
									811B
								</td>
								<td>Intel Xeon 4/8 Core <span class="orangeText">4x 2.20GHz</span></td>
								<td>8GB <span class="orangeText">RAM</span></td>
								<td>Yes <span class="orangeText">(512mb)</span></td>
								<td>1x 250GB HDD</td>
								<td>TX, Dallas</td>
								<td>1Gbps</td>
								<td>
									<span class="orangeText new-price">$90.00</span>
									<span class="old-price">$102.00</span>
								</td>
								<td>Instant</td>
								<td>
									<a href="" class="btn--orange">Configure <i class="fas fa-arrow-right"></i></a>
								</td>
							</tr>
							<tr>
								<td>
									<span class="logo-type"><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/hp-logo.png'; ?>" alt="hp-logo"></span>
									<span class="logo-type"><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/dell-logo.png'; ?>" alt="dell-logo"></span>
									811B
								</td>
								<td>Intel Xeon 4/8 Core <span class="orangeText">4x 2.20GHz</span></td>
								<td>8GB <span class="orangeText">RAM</span></td>
								<td>Yes <span class="orangeText">(512mb)</span></td>
								<td>1x 250GB HDD</td>
								<td>TX, Dallas</td>
								<td>1Gbps</td>
								<td>
									<span class="orangeText new-price">$90.00</span>
									<span class="old-price">$102.00</span>
								</td>
								<td>Instant</td>
								<td>
									<a href="" class="btn--orange">Configure <i class="fas fa-arrow-right"></i></a>
								</td>
							</tr>
							<tr>
								<td>
									<span class="logo-type"><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/hp-logo.png'; ?>" alt="hp-logo"></span>
									<span class="logo-type"><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/dell-logo.png'; ?>" alt="dell-logo"></span>
									811B
								</td>
								<td>Intel Xeon 4/8 Core <span class="orangeText">4x 2.20GHz</span></td>
								<td>8GB <span class="orangeText">RAM</span></td>
								<td>Yes <span class="orangeText">(512mb)</span></td>
								<td>1x 250GB HDD</td>
								<td>TX, Dallas</td>
								<td>1Gbps</td>
								<td>
									<span class="orangeText new-price">$90.00</span>
									<span class="old-price">$102.00</span>
								</td>
								<td>Instant</td>
								<td>
									<a href="" class="btn--orange">Configure <i class="fas fa-arrow-right"></i></a>
								</td>
							</tr>
							<tr>
								<td>
									<span class="logo-type"><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/hp-logo.png'; ?>" alt="hp-logo"></span>
									<span class="logo-type"><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/dell-logo.png'; ?>" alt="dell-logo"></span>
									811B
								</td>
								<td>Intel Xeon 4/8 Core <span class="orangeText">4x 2.20GHz</span></td>
								<td>8GB <span class="orangeText">RAM</span></td>
								<td>Yes <span class="orangeText">(512mb)</span></td>
								<td>1x 250GB HDD</td>
								<td>TX, Dallas</td>
								<td>1Gbps</td>
								<td>
									<span class="orangeText new-price">$90.00</span>
									<span class="old-price">$102.00</span>
								</td>
								<td>Instant</td>
								<td>
									<a href="" class="btn--orange">Configure <i class="fas fa-arrow-right"></i></a>
								</td>
							</tr>
							<tr>
								<td>
									<span class="logo-type"><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/hp-logo.png'; ?>" alt="hp-logo"></span>
									<span class="logo-type"><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/dell-logo.png'; ?>" alt="dell-logo"></span>
									811B
								</td>
								<td>Intel Xeon 4/8 Core <span class="orangeText">4x 2.20GHz</span></td>
								<td>8GB <span class="orangeText">RAM</span></td>
								<td>Yes <span class="orangeText">(512mb)</span></td>
								<td>1x 250GB HDD</td>
								<td>TX, Dallas</td>
								<td>1Gbps</td>
								<td>
									<span class="orangeText new-price">$90.00</span>
									<span class="old-price">$102.00</span>
								</td>
								<td>Instant</td>
								<td>
									<a href="" class="btn--orange">Configure <i class="fas fa-arrow-right"></i></a>
								</td>
							</tr>
							<tr>
								<td>
									<span class="logo-type"><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/hp-logo.png'; ?>" alt="hp-logo"></span>
									<span class="logo-type"><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/dell-logo.png'; ?>" alt="dell-logo"></span>
									811B
								</td>
								<td>Intel Xeon 4/8 Core <span class="orangeText">4x 2.20GHz</span></td>
								<td>8GB <span class="orangeText">RAM</span></td>
								<td>Yes <span class="orangeText">(512mb)</span></td>
								<td>1x 250GB HDD</td>
								<td>TX, Dallas</td>
								<td>1Gbps</td>
								<td>
									<span class="orangeText new-price">$90.00</span>
									<span class="old-price">$102.00</span>
								</td>
								<td>Instant</td>
								<td>
									<a href="" class="btn--orange">Configure <i class="fas fa-arrow-right"></i></a>
								</td>
							</tr>
							<tr>
								<td>
									<span class="logo-type"><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/hp-logo.png'; ?>" alt="hp-logo"></span>
									<span class="logo-type"><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/dell-logo.png'; ?>" alt="dell-logo"></span>
									811B
								</td>
								<td>Intel Xeon 4/8 Core <span class="orangeText">4x 2.20GHz</span></td>
								<td>8GB <span class="orangeText">RAM</span></td>
								<td>Yes <span class="orangeText">(512mb)</span></td>
								<td>1x 250GB HDD</td>
								<td>TX, Dallas</td>
								<td>1Gbps</td>
								<td>
									<span class="orangeText new-price">$90.00</span>
									<span class="old-price">$102.00</span>
								</td>
								<td>Instant</td>
								<td>
									<a href="" class="btn--orange">Configure <i class="fas fa-arrow-right"></i></a>
								</td>
							</tr>
							<tr>
								<td>
									<span class="logo-type"><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/hp-logo.png'; ?>" alt="hp-logo"></span>
									<span class="logo-type"><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/dell-logo.png'; ?>" alt="dell-logo"></span>
									811B
								</td>
								<td>Intel Xeon 4/8 Core <span class="orangeText">4x 2.20GHz</span></td>
								<td>8GB <span class="orangeText">RAM</span></td>
								<td>Yes <span class="orangeText">(512mb)</span></td>
								<td>1x 250GB HDD</td>
								<td>TX, Dallas</td>
								<td>1Gbps</td>
								<td>
									<span class="orangeText new-price">$90.00</span>
									<span class="old-price">$102.00</span>
								</td>
								<td>Instant</td>
								<td>
									<a href="" class="btn--orange">Configure <i class="fas fa-arrow-right"></i></a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="tab-pane fade" id="pro-server" role="tabpanel" aria-labelledby="pro-server-tab">
					View Pro Server
				</div>
				<div class="tab-pane fade" id="enterprise-server" role="tabpanel" aria-labelledby="enterprise-server-tab">
					Enterprise Servers
				</div>
			</div>
		</div>
	</section>

	<section class="ds-feature-compare section">
		<div class="wrapper">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title">Budget Vs Pro Vs Enterprise Feature Compare</h2>
				<span class="section-header__decoration-element"></span>
			</div>
			<div class="ds-feature-table">
				<div class="ds-feature-table__block">
					<div class="ds-feature-table__block--header">&nbsp;</div>
					<div class="ds-feature-table__block--content">
						<ul>
							<li>Virtualization Ready <i><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/question.png'; ?>" alt="question"></i></li>
							<li>Bare Metal Cloud Ready <i><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/question.png'; ?>" alt="question"></i></li>
							<li>Private Rack Ready <i><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/question.png'; ?>" alt="question"></i></li>
							<li>Hybrid Infrastructure Ready <i><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/question.png'; ?>" alt="question"></i></li>
							<li>Advanced Networking <i><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/question.png'; ?>" alt="question"></i></li>
							<li>NFS/SMB Backup Storage</li>
							<li>Dedicated VLAN <i><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/question.png'; ?>" alt="question"></i></li>
							<li>Data Center Rating <i><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/question.png'; ?>" alt="question"></i></li>
							<li>Server Network Port(s)</li>
							<li>Bandwidth (included)</li>
							<li>Bandwidth Upgrades</li>
							<li>IPv4/IPv6</li>
							<li>Data Center Interconnect <i><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/question.png'; ?>" alt="question"></i></li>
							<li>Managed Services Available <i><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/question.png'; ?>" alt="question"></i></li>
							<li>Reseller & Affiliate Discounts</li>
							<li>Uptime SLA (Network)</li>
							<li>Uptime SLA (Power)</li>
							<li>Maximum CPU Cores</li>
							<li>Maximum RAM</li>
							<li>SSD Disks</li>
						</ul>
					</div>
					<div class="ds-feature-table__block--footer">&nbsp;</div>
				</div>
				<div class="ds-feature-table__block">
					<div class="ds-feature-table__block--header">
						<div class="ds-feature-table-icon-box">
							<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/servers.png'; ?>" alt="servers">
						</div>
						<h3>Budget Servers</h3>
						<h4>Prebuilt Servers</h4>
					</div>
					<div class="ds-feature-table__block--content">
						<ul>
							<li><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/tick-green.png'; ?>" alt="tick-green" class="tick-green"></li>
							<li><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/cancel.png'; ?>" alt="cancel" class="cancel"></li>
							<li><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/cancel.png'; ?>" alt="cancel" class="cancel"></li>
							<li><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/cancel.png'; ?>" alt="cancel" class="cancel"></li>
							<li><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/cancel.png'; ?>" alt="cancel" class="cancel"></li>
							<li>Optional</li>
							<li><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/cancel.png'; ?>" alt="cancel" class="cancel"></li>
							<li>Tier - Tier-III & IV</li>
							<li>1x1Gbits</li>
							<li>10TB</li>
							<li>Up to 100TB</li>
							<li>
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/tick-green.png'; ?>" alt="tick-green" class="tick-green">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/cancel.png'; ?>" alt="cancel" class="cancel">
							</li>
							<li><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/cancel.png'; ?>" alt="cancel" class="cancel"></li>
							<li>Optional</li>
							<li><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/cancel.png'; ?>" alt="cancel" class="cancel"></li>
							<li>99.50%</li>
							<li>99.50%</li>
							<li>12 cores</li>
							<li>32gb</li>
							<li><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/cancel.png'; ?>" alt="cancel" class="cancel"></li>
						</ul>
					</div>
					<div class="ds-feature-table__block--footer">
						<a href="" class="btn--orange">View Budget Servers</a>
						<a href="">20 configuration(s) available</a>
					</div>
				</div>
				<div class="ds-feature-table__block">
					<div class="ds-feature-table__block--header">
						<div class="ds-feature-table-icon-box">
							<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/pro-server.png'; ?>" alt="pro-server">
						</div>
						<h3>Pro Servers</h3>
						<h4>Prebuilt Servers</h4>
					</div>
					<div class="ds-feature-table__block--content">
						<ul>
							<li><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/tick-green.png'; ?>" alt="tick-green" class="tick-green"></li>
							<li><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/cancel.png'; ?>" alt="cancel" class="cancel"></li>
							<li><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/cancel.png'; ?>" alt="cancel" class="cancel"></li>
							<li><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/cancel.png'; ?>" alt="cancel" class="cancel"></li>
							<li><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/cancel.png'; ?>" alt="cancel" class="cancel"></li>
							<li>Optional</li>
							<li>Yes (1x)</li>
							<li>Tier - Tier-III & IV</li>
							<li>2x1Gbits</li>
							<li>20TB</li>
							<li>Up to 1Gbits Unlimited </li>
							<li>
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/tick-green.png'; ?>" alt="tick-green" class="tick-green">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/tick-green.png'; ?>" alt="tick-green" class="tick-green">
							</li>
							<li><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/cancel.png'; ?>" alt="cancel" class="cancel"></li>
							<li>Optional</li>
							<li><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/cancel.png'; ?>" alt="cancel" class="cancel"></li>
							<li>99.50%</li>
							<li>100%</li>
							<li>16 cores</li>
							<li>128gb</li>
							<li><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/tick-green.png'; ?>" alt="tick-green" class="tick-green"></li>
						</ul>
					</div>
					<div class="ds-feature-table__block--footer">
						<a href="" class="btn--orange">View Pro Servers</a>
						<a href="">27 configuration(s) available</a>
					</div>
				</div>
				<div class="ds-feature-table__block">
					<div class="ds-feature-table__block--header">
						<div class="ds-feature-table-icon-box">
							<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/budget-server.png'; ?>" alt="budget-server">
						</div>
						<h3>Budget Servers</h3>
						<h4>Prebuilt Servers</h4>
					</div>
					<div class="ds-feature-table__block--content">
						<ul>
							<li><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/tick-green.png'; ?>" alt="tick-green" class="tick-green"></li>
							<li><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/cancel.png'; ?>" alt="cancel" class="cancel"></li>
							<li><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/cancel.png'; ?>" alt="cancel" class="cancel"></li>
							<li><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/cancel.png'; ?>" alt="cancel" class="cancel"></li>
							<li><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/cancel.png'; ?>" alt="cancel" class="cancel"></li>
							<li>Optional</li>
							<li>Yes (Up to 10x)</li>
							<li>Tier - Tier-III & IV</li>
							<li>Up to 4x10Gbits</li>
							<li>100TB</li>
							<li>Up to 10Gbits Unlimited </li>
							<li>
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/tick-green.png'; ?>" alt="tick-green" class="tick-green">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/tick-green.png'; ?>" alt="tick-green" class="tick-green">
							</li>
							<li>Optional</li>
							<li>Optional</li>
							<li><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/tick-green.png'; ?>" alt="tick-green" class="tick-green"></li>
							<li>100%</li>
							<li>100%</li>
							<li>68 cores</li>
							<li>512gb</li>
							<li>&nbsp;</li>
						</ul>
					</div>
					<div class="ds-feature-table__block--footer">
						<a href="" class="btn--orange">View Enterprise Servers</a>
						<a href="">56 configuration(s) available</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
