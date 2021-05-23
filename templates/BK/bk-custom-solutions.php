<?php
get_header();?>

<main id="site-main" class="site-main">
	<section class="page-banner customSol-page-banner" style="background-image:url('<?php echo get_template_directory_uri() . '/dist/assets/images/custom-sol-bg.jpg'; ?>')">
		<div class="wrapper">
			<div class="page-banner-content">
				<h1 class="large-banner__heading">Custom Solutions</h1>
				<p>Tell us what you need and we’ll build it.</p>
				<a href="" class="btn--orange">Custom Solutions Overview</a>
				<a href="" class="btn--white">Premium Features</a>
			</div>
		</div>
	</section>

	<section class="customSol-overview">
		<div class="wrapper">
			<div class="row">
				<div class="col-md-6">
					<div class="customSol-overview-content">
						<h2 class="section-header__title">Custom Solutions Overview</h2>
						<h4 class="section-header__Orangesub-title">Tell Us What You Need & We BuildD It</h4>
						<p>Dedicated Solutions offers a wide range of quality hosting products, all designed to give you the very best possible conditions to host your site or to run your business. From small shared accounts, through reseller accounts, virtual private servers and up to fully managed dedicated servers, you can find it with us.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="customSol-overview-grid">
						<div class="cs-block">
							<div class="row">
								<div class="col-md-4">
									<div class="icon-box">
										<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/big-data.png'; ?>" alt="big-data">
									</div>
								</div>
								<div class="col-md-8">
									<div class="cs-block-content">
										<div class="cs-flex-content">
											<h3>Big Data</h3>
											<p>Enterprise Hardware RAID 1/10/5/50/6.</p>
										</div>
									</div>
								</div>
							</div>
						</div>	
						<div class="cs-block">
							<div class="row">
								<div class="col-md-4">
									<div class="icon-box">
										<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/multi-server.png'; ?>" alt="multi-server">
									</div>
								</div>
								<div class="col-md-8">
									<div class="cs-block-content">
										<div class="cs-flex-content">
											<h3>Multiserver/Private Rack</h3>
											<p>Cloud too crowded for you? Build, manage, and have total control over your own cloud of virtual servers.</p>
										</div>
									</div>
								</div>
							</div>
						</div>	
						<div class="cs-block">
							<div class="row">
								<div class="col-md-4">
									<div class="icon-box">
										<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/hosting.png'; ?>" alt="hosting">
									</div>
								</div>
								<div class="col-md-8">
									<div class="cs-block-content">
										<div class="cs-flex-content">
											<h3>SAN/NAS Hosting</h3>
											<p>Provide a low-latency, high-bandwidth interconnect that can span large distances.</p>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="premium-server-features">
		<div class="wrapper">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title">Premium Server Features</h2>
				<span class="section-header__decoration-element--dark"></span>
				<h4 class="section-header__Orangesub-title">Customize a server to meet your specifications with our premium features.</h4>
			</div>
			<div class="p-feat-content">
				<div class="row">
					<div class="col-md-6 order-md-1">
						<figure class="thumbnail-img">
							<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/server-vector.png'; ?>" alt="server-vector">
						</figure>
					</div>
					<div class="col-md-6">
						<div class="p-server-feat-block server">
							<div class="p-server-feat-icon">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/p-server.png'; ?>" alt="p-server">
							</div>
							<div class="p-server-feat-content">
								<h2>Servers</h2>
								<ul>
									<li>Up to 4 sockets.</li>
									<li>32 processor cores.</li>
									<li>1.5 TB of RAM computing Power</li>
								</ul>
							</div>
						</div>
						<div class="p-server-feat-block storage">
							<div class="p-server-feat-icon">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/storage.png'; ?>" alt="storage">
							</div>
							<div class="p-server-feat-content">
								<h2>Storages</h2>
								<ul>
									<li>SATA, SAS, SSD, or PCI-e Flash.</li>
									<li>Up to 24TB DAS, SAN, NAS.</li>
									<li>High-availability Clustering.</li>
								</ul>
							</div>
						</div>
						<div class="p-server-feat-block networking">
							<div class="p-server-feat-icon">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/molecular.png'; ?>" alt="molecular">
							</div>
							<div class="p-server-feat-content">
								<h2>Networking</h2>
								<ul>
									<li>Up to 10Gbps network port speeds.</li>
									<li>Load balancing from Brocade or F5.</li>
									<li>Advanced IDS/WAF appliances.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="additional-features">
		<div class="wrapper">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title">Additional Features</h2>
				<span class="section-header__decoration-element"></span>
				<h4 class="section-header__Orangesub-title">Further customize and get your server meeting your exact needs using the following features.</h4>
			</div>
			<div class="additional-feat-grid">
				<div class="row">
					<div class="col-md-6">
						<div class="add-feat-block">
							<div class="add-feat-icon">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/add-feat-icon-1.png'; ?>" alt="add-feat-icon-1">
							</div>
							<div class="add-feat-content">
								<h2>Custom Storage (SAN) & DR site</h2>
								<ul>
									<li>EMC/3Par/HP VMA / Violin Memory / EqualLogic , Hitachi available.</li>
									<li>From SATA up to Pure SSD High Performance SAN.</li>
									<li>Shared SAN up to Dedicated SAN.</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="add-feat-block">
							<div class="add-feat-icon">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/add-feat-icon-2.png'; ?>" alt="add-feat-icon-2">
							</div>
							<div class="add-feat-content">
								<h2>Custom Critical Application Services</h2>
								<ul>
									<li>Microsoft Platform (SQL/Exchange/AD/Terminal Services,..).</li>
									<li>Managed Database & Clustering (mySQL, PostgreSQL, MS SQL, Hadoop).</li>
									<li>Linux, UNIX and Network Platform support.</li>
									<li>Mail & Comunication Applications.</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="add-feat-block">
							<div class="add-feat-icon">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/add-feat-icon-3.png'; ?>" alt="add-feat-icon-3">
							</div>
							<div class="add-feat-content">
								<h2>Custom Public Cloud</h2>
								<ul>
									<li>Hourly or Monthly billing available.</li>
									<li>Single VM or Resource Pool available.</li>
									<li>From SATA to SSD SAN to choose from.</li>
									<li>Migration and Managed Service Optional.</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="add-feat-block">
							<div class="add-feat-icon">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/add-feat-icon-4.png'; ?>" alt="add-feat-icon-4">
							</div>
							<div class="add-feat-content">
								<h2>Custom Private Cloud</h2>
								<ul>
									<li>VMware, Citrix XenServer, HyperV.</li>
									<li>Cloud Stack, Onapp, Openstack and more.</li>
									<li>From 3 Servers up to 100s of Server Nodes.</li>
									<li>Compliance hosting.</li>
									<li>Multiple Datacenter Locations available!</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="custom-support">
		<div class="wrapper">
			<div class="row">
				<div class="col-md-7">
					<div class="custom-support-content">
						<h2 class="section-header__title">Custom Support</h2>
						<ul>
							<li>24/7 Staffed Datacenter and System Administrator team.</li>
							<li>24/7 Chat, Ticket & Phone Support.</li>
							<li>Hourly based, Dedicated Staff up to 24/7 Dedicated TeamsHigh.</li>
							<li>Motivated and Certified L1-L3 System & Network Administrators.</li>
							<li>Infrastructure Consulting to help with planing and Architecture.</li>
							<li>Managed Helpdesk and Windows Client Support.</li>
						</ul>
					</div>
				</div>
				<div class="col-md-5">
					<figure class="thumbnail-img">
						<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/custom-support-img.png'; ?>" alt="custom-support-img">
					</figure>
				</div> 
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>

