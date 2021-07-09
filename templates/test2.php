<?php
/* Template Name: Test2 */ 

get_header();?>
?>
<main class="site-main">
	<section class="page-banner os-control-page-banner" style="background-image:url('<?php echo get_template_directory_uri() . '/dist/assets/images/os-control-panel-banner.jpg'; ?>')">
		<div class="wrapper">
			<div class="page-banner-content">
				<h1 class="large-banner__heading">OS And Control Panels</h1>
				<p>The operating systems and control panel software you need</p>
				<div class="os-control-panl__btn-wrap">
					<a href="" class="btn--orange">
						<i class="btn-icon">
							<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/secure@2x.png'; ?>" alt="secure">
						</i>
						<span class="btn-label">Operating System</span>
					</a>
					<a href="" class="btn--orange">
						<i class="btn-icon">
							<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/dserver.png'; ?>" alt="dserver">
						</i>
						<span class="btn-label">Virtualization OS</span>
					</a>
					<a href="" class="btn--orange">
						<i class="btn-icon">
							<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/server@2x.png'; ?>" alt="server">
						</i>
						<span class="btn-label">Control Panel</span>
					</a>
				</div>
			</div>
		</div>
	</section>

	<section class="operating-system">
		<div class="wrapper">
			<div class="row align-items-center">
				<div class="col-md-6 order-md-1">
					<figure class="thumbnail-img">
						<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/operating-system.jpg'; ?>" alt="os-box">
					</figure>
				</div>
				<div class="col-md-6">
					<div class="os-inner-content">
						<h2 class="section-header__title">Operating Systems</h2>
						<p class="section-header__sub-title">Choose from a wide range of Linux, Windows and other operating systems with every server you order at Dedicated Solutions.</p>
						<ul class="orange--list black-check">
							<li>Websites</li>
							<li>Operating System</li>
							<li>System Hardware</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="linux-os-section">
		<div class="wrapper">
			<div class="row">
				<div class="col-md-3 order-md-1">
					<div class="linux-os-type--block">
						<div class="linux-block centos">
							<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/centos.png'; ?>" alt="centos">
						</div>
						<div class="linux-block debian">
							<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/debian.png'; ?>" alt="debian">
						</div>
						<div class="linux-block ubuntu">
							<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/ubuntu.png'; ?>" alt="ubuntu">
						</div>
						<div class="linux-block fedora">
							<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/fedora.png'; ?>" alt="fedora">
						</div>
					</div>
				</div>
				<div class="col-md-9">
					<div class="linux-os-inner-content">
						<h2 class="section-header__title">Linux Server OS</h2>
						<p class="section-header__sub-title">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, Lorem Ipsum has been the industry.</p>
						<ul class="orange--list white">
							<li>Ubuntu</li>
							<li>Fedora</li>
							<li>LinuxMint</li>
							<li>openSUSE</li>
							<li>PCLinuxOS</li>
							<li>Debian</li>
							<li>Mandriva</li>
							<li>Sabayon/Gentoo</li>
							<li>Arch Linux</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="windows-os-section">
		<div class="wrapper">
			<div class="row align-items-center">
				<div class="col-md-4">
					<figure class="thumbnail-img">
						<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/microsoft-logo.png'; ?>" alt="microsoft-logo">
					</figure>
				</div>
				<div class="col-md-8">
					<div class="os-inner-content">
						<div class="section-header">
							<h2 class="section-header__title">Windows Server OS</h2>
							<span class="section-header__decoration-element"></span>
							<p class="section-header__sub-title">Lorem Ipsum is simply dummy text of the printing and typesetting industry. the industry's standard dummy text ever since the 1500s, Lorem Ipsum has been the industry.</p>
						</div>
						<ul  class="orange--list black reverse">
							<li>Windows Server 2008 R2</li>
							<li>Windows Server 2012 R2</li>
							<li>Windows Server 2016</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="find-your-os" style="background-image:url('<?php echo get_template_directory_uri() . '/dist/assets/images/find-your-os-bg.jpg'; ?>')">
		<div class="wrapper">
			<div class="find-your-os--inner-content">
				<h2 class="section-header__title">Can’t find your Operating System?</h2>
				<p class="section-header__sub-title">On the rare occasion someone requires an OS we don't provide, we allow self-installs to be done via remote KVM-over-IP. No matter what OS you choose, you can count on a 4 hour server deployment.</p>
				<a href="" class="btn--orange">Start Building Your Server Now <i class="fas fa-arrow-right"></i></a>
			</div>
		</div>
	</section>

	<section class="virtulization-os">
		<div class="wrapper">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title">Virtualization OS</h2>
				<span class="section-header__decoration-element"></span>
				<p class="section-header__sub-title">Choose from a wide range of Linux, Windows and other operating systems with every server you order at Dedicated Solutions.</p>
			</div>
			<table class="virtulization-table table table-striped table-bordered">
				<thead>
					<tr>
						<th>
							<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/citrix-logo-1.png'; ?>" alt="citrix-logo-1">
						</th>
						<th>
							<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/vmware-logo.png'; ?>" alt="vmware-logo">
						</th>
						<th>
							<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/proxmox-logo-1.png'; ?>" alt="proxmox-logo-1">
						</th>
					</tr>
					</thead>
					<tbody>
						<tr>
							<td>Windows, Linux, UNIX</td>
							<td>Most Windows OS, Linux support is limited</td>
							<td>Windows and Linux (KVM) Other operating systems are known to work and are community supported (OpenVZ supports Linux only)</td>
						</tr>
						<tr>
							<td><span class="yes">Yes</span> Open Source</td>
							<td><span class="yes">Yes</span> Open Source</td>
							<td><span class="yes">Yes</span> Open Source</td>
						</tr>
						<tr>
							<td><span class="no">No</span> <p>OpenVZ container (known as OS Virtualization)</p></td>
							<td><span class="no">No</span> <p>OpenVZ container (known as OS Virtualization)</p></td>
							<td><span class="yes">Yes</span> <p>OpenVZ container (known as OS Virtualization)</p></td>
						</tr>
						<tr>
							<td><span class="yes">Yes</span> <p>Single-view for Mangagement (centralized control)</p></td>
							<td><span class="no">No</span> <p>Single-view for Mangagement (centralized control)</p></td>
							<td><span class="yes">Yes</span> <p>Single-view for Mangagement (centralized control)</p></td>
						</tr>
						<tr>
							<td><span class="unknown">UNKNOWN**</span> Max. RAM and CPU per Host</td>
							<td><span class="unknown">160 CPU/2 TB Ram</span> Max. RAM and CPU per Host</td>
							<td><span class="unknown">160 CPU/2 TB Ram</span> Max. RAM and CPU per Host</td>
						</tr>
					</tbody>
			</table>
		</div>
	</section>

	<section class="virtulization-detail page-section">
		<div class="wrapper">
			<div class="single-virtulzation-row vmware">
				<div class="row">
					<div class="col-md-2">
						<div class="virtulization-logo">
							<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/vmware-logo.png'; ?>" alt="vmware-logo">
						</div>
					</div>
					<div class="col-md-7">
						<div class="virtulization-detail-content">
							<h2 class="section-header__title">VMware </h2>
							<p class="section-header__sub-title">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, Lorem Ipsum has been the industry.</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="virtulization-detail-list">
							<ul class="orange--list black">
								<li>VMware vSphere Standard</li>
								<li>VMware vSphere </li>
								<li>VMware vSphere Enterprise Plus</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="single-virtulzation-row citrix">
				<div class="row flex-row-reverse">
					<div class="col-md-2">
						<div class="virtulization-logo">
							<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/citrix-logo-2.png'; ?>" alt="citrix-logo-2">
						</div>
					</div>
					<div class="col-md-7">
						<div class="virtulization-detail-content">
							<h2 class="section-header__title">Citrix XenServer</h2>
							<p class="section-header__sub-title">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, Lorem Ipsum has been the industry.</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="virtulization-detail-list">
							<ul class="orange--list black">
								<li>Citrix XenServer 4.3</li>
								<li>Citrix XenServer 4.4</li>
								<li>Citrix XenServer 4.5</li>
								<li>Citrix XenServer 6.5</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="single-virtulzation-row proxmox">
				<div class="row">
					<div class="col-md-2">
						<div class="virtulization-logo">
							<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/proxmox-logo-2.png'; ?>" alt="proxmox-logo-2">
						</div>
					</div>
					<div class="col-md-7">
						<div class="virtulization-detail-content">
							<h2 class="section-header__title">Proxmox VE</h2>
							<p class="section-header__sub-title">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, Lorem Ipsum has been the industry.</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="virtulization-detail-list">
							<ul class="orange--list black">
								<li>Proxmox VE Basic</li>
								<li>Proxmox VE Standard</li>
								<li>Proxmox VE Premium</li>
								<li>Proxmox VE Community</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="control-panels-section">
		<div class="wrapper">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title">Control Panels</h2>
				<span class="section-header__decoration-element"></span>
				<p class="section-header__sub-title">We offer a wide range of both Linux and Windows supported control panels that are all built to simplify server and website management.</p>
			</div>
			<div class="cp-camparison-table">
				<div class="cp-camprasion-block cpanel--block">
					<ul class="cp-detail-list">
						<li>
							<div class="cp-logo">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/cpanel-logo.png'; ?>" alt="cpanel-logo">
							</div>
							<ul class="orange--list black">
								<li>cPanel Linux</li>
							</ul>
						</li>
						<li>
							<div class="cp-decision">
								<p><span class="yes">Yes</span> User Interface</p>
							</div>
							<div class="cp-decision-detail">
								<p>cPanel is more popular, and since more users are familiar and comfortable with it, they’ll argue that its interface is friendlier.</p>
							</div>
						</li>
						<li>
							<div class="cp-decision">
								<p><span class="yes">Yes</span> Cost</p>
							</div>
							<div class="cp-decision-detail">
								<p>cPanel costs up to $425 per year on its dedicated plan, which breaks down to $35 per month for unlimited use.</p>
							</div>
						</li>
						<li>
							<div class="cp-decision">
								<p><span class="no">No</span> Windows Support</p>
							</div>
							<div class="cp-decision-detail">
								<p>cPanel only runs on CentOS, RedHat and CloudLinux. It doesn’t run on Windows.</p>
							</div>
						</li>
						<li>
							<div class="cp-decision">
								<p><span class="yes">Yes</span> Admin Panels</p>
							</div>
							<div class="cp-decision-detail">
								<p>cPanel comes with Web Host Manager (WHM) as standard, although shared hosting users will never see WHM unless they upgrade to reseller or VPS hosting.interfaces.</p>
							</div>
						</li>
						<li>
							<div class="cp-decision">
								<p><span class="yes">Yes</span> Ease of Migration</p>
							</div>
							<div class="cp-decision-detail">
								<p>Both Plesk and cPanel make it easy to migrate from one server to the other, assuming you move to and from the same control panel.</p>
							</div>
						</li>
					</ul>
				</div>
				<div class="cp-camprasion-block plesk--block">
					<ul class="cp-detail-list">
						<li>
							<div class="cp-logo">
								<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/plesk-logo.png'; ?>" alt="plesk-logo">
							</div>
							<ul class="orange--list black">
								<li>Plesk Pro Edition</li>
								<li>Plesk App Edition</li>
								<li>Plesk Hosting Edition</li>
								<li>Plesk Admin Edition</li>
							</ul>
						</li>
						<li>
							<div class="cp-decision">
								<p><span class="no">No</span> User Interface</p>
							</div>
							<div class="cp-decision-detail">
								<p>Plesk is generally regarded as having the cleaner and more attractive interface, and I personally agree with that.</p>
							</div>
						</li>
						<li>
							<div class="cp-decision">
								<p><span class="no">No</span> Cost</p>
							</div>
							<div class="cp-decision-detail">
								<p>Plesk, for a similar plan, costs $40 per month.</p>
							</div>
						</li>
						<li>
							<div class="cp-decision">
								<p><span class="yes">Yes</span> Windows Support</p>
							</div>
							<div class="cp-decision-detail">
								<p>Plesk, on the other hand, adds a host of other Linux distributions to the list, in addition to Windows support.</p>
							</div>
						</li>
						<li>
							<div class="cp-decision">
								<p><span class="no">No</span> Admin Panels</p>
							</div>
							<div class="cp-decision-detail">
								<p>Plesk, on the other hand, has a single login for administrators and users. They look similar – the options are quite different.</p>
							</div>
						</li>
						<li>
							<div class="cp-decision">
								<p><span class="yes">Yes</span> Ease of Migration</p>
							</div>
							<div class="cp-decision-detail">
								<p>Both Plesk and cPanel make it easy to migrate from one server to the other, assuming you move to and from the same control panel.</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="ask-to-expert">
				<h2 class="section-header__title">Deciding Between cPanel and Plesk?</h2>
				<a href="" class="btn--orange">Ask our expert engineers <i class="fas fa-arrow-right"></i></a>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
