<?php
/* Template Name: Dedicated Servers */ 

get_header();?>
<main id="fullpage" class="site-main">
<?php while ( have_posts() ) : the_post(); 

	$banner_image_url = get_template_directory_uri() . '/dist/assets/images/bare-metal-cloud-banner.jpg';
	$banner_image     = get_field( 'banner_bg' );
	if ( ! empty( $banner_image ) ) {
		$banner_image_url = $banner_image['sizes']['banner_image'];
	}
?>
<section class="section">
		<section class="page-banner dedicated-server-page-banner" style="background-image:url('<?php echo $banner_image_url; ?>')">
			<div class="wrapper">			
				<div class="page-banner-content">
					<h4>Starting from</h4>
					<div class="starting-price">
						<span class="price">
						<?php 
						$deci_arr = array();	
						$deci_arr[0] = '00';
						$deci_arr[1] = '00';
							$price_doller = get_field('starting_from_price_per_month'); 
							if(is_numeric($price_doller)){
								$decimal_price = number_format($price_doller, 2, '.', '');
								$deci_arr = explode('.',$decimal_price);								
							}
							
							if(is_numeric($price_doller)){ echo"$".$deci_arr[0]; echo'<span class="subPrice">'.'.'.$deci_arr[1].'</span></span>'; }else{
								echo $price_doller;
							}
							?>
						<span class="per-month">/month</span>
					</div>
					<h1 class="large-banner__heading"><?php the_field('dedicated_server_title');?></h1>
					<p><?php the_field('dedicated_server_sub_title');?></p>
					<div class="large-banner__features">
						<ul class="large-banner__features-list">
							<?php
							if ( have_rows( 'dedicated_server_feature_lists' ) ) : 
							while ( have_rows( 'dedicated_server_feature_lists' ) ) :
							the_row();						
							?>
							<li class="large-banner__features-item"><i class="fas fa-check-circle"></i><?php the_sub_field('list');?></li>
							<?php 
							endwhile; 
							endif;			
							?>							
						</ul>
					</div>
				</div>
			</div>
		</section>
		
		<section class="dedicated-server-navTabs">
			<div class="navTabs-pills-wrap">
				<div class="wrapper">
					<ul class="nav nav-pills" id="db-bd-hosting-pills-tab" role="tablist">
						<?php
						$counter = 1;
						if ( have_rows( 'three_tab' ) ) : 
						while ( have_rows( 'three_tab' ) ) :
						the_row();						
						?>
						<li class="nav-item" role="presentation">
							<a class="nav-link <?php if( $counter==2){ echo 'active'; } ?>"  id="server-<?php echo $counter;?>-tab" data-toggle="pill" href="#server-config-<?php echo $counter;?>" role="tab" aria-controls="#server-config-<?php echo $counter;?>" aria-selected="<?php if( $counter==2){ echo 'true'; }else{ echo 'false';}?>"><?php the_sub_field('tab_title');?></a>
						</li>
						<?php 
						$counter++;
						endwhile; 
						endif;			
						?>
					</ul>
				</div>
			</div>
			<div class="wrapper">
				<div class="tab-content" id="bmc-pills-tabContent">				
					<?php
					$tab_count = 1;
					if ( have_rows( 'three_tab' ) ) : 
					while ( have_rows( 'three_tab' ) ) :
					the_row();						
					?>
						<div class="tab-pane fade <?php if($tab_count == 2){ echo"show active"; }?> " id="server-config-<?php echo $tab_count;?>" role="tabpanel" aria-labelledby="server-<?php echo $tab_count;?>-tab">
						<div class="row">
							<?php
							if ( have_rows( 'block_feature_lists' ) ) : 
							while ( have_rows( 'block_feature_lists' ) ) :
							the_row();						
							?>
							<div class="col-md-3">
								<div class="dedicated-server-block">
									<div class="ds-icon-box">
										<?php 
										$feature_img_icon = get_template_directory_uri() . '/dist/assets/images/customer-support-2.png';
										$feature_icon     = get_sub_field( 'feature_icon' );
										if ( ! empty( $feature_icon ) ) {
											$feature_img_icon = $feature_icon['sizes']['mid_icon'];
										}
										if(!empty($feature_img_icon)){ echo"<img src='".$feature_img_icon."'>"; }
										?>
									</div>
									<h3><?php the_sub_field('title');?></h3>
									<p><?php the_sub_field('short_detail');?></p>
								</div>
							</div>
							<?php 
							endwhile; 
							endif;			
							?>
						</div>
					</div>
					<?php 
					$tab_count++;
					endwhile; 
					endif;			
					?>
				</div>
			</div>
		</section>
	</section>

	<section class="ds-server-hosting-feat section">
		<div class="wrapper">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title"><?php the_field('heading_title');?></h2>
				<span class="section-header__decoration-element--dark"></span>
				<h4 class="section-header__Orangesub-title"><?php the_field('sub_heading_title');?></h4>
			</div>
			<div class="row align-items-center">
				<div class="col-md-4 order-md-1">
					<div class="thumbnail-img">
						<?php 
						$hosting_feature = get_template_directory_uri() . '/dist/assets/images/ds-hosting-feat.png';
						$img_hosting_feature     = get_sub_field( 'icon' );
						if ( ! empty( $img_hosting_feature ) ) {
							$hosting_feature = $img_hosting_feature['sizes']['mid_icon'];
						}
						if(!empty($hosting_feature)){ echo"<img src='".$hosting_feature."'>"; }
						?>
						<!-- <img src="<?php echo get_template_directory_uri() . '/dist/assets/images/ds-hosting-feat.png'; ?>" alt="ds-hosting-feat"> -->
					</div>
				</div>
				<div class="col-md-4 order-md-0">
					<div class="ds-hosting-feat-block">
						<?php
						$count = 1;
						if ( have_rows( 'hosting_feature_list' ) ) : 
						while ( have_rows( 'hosting_feature_list' ) ) :
						the_row();
						if($count %2 != 0){ 
						?>
						<div class="ds-hosting-feat-list">
							<div class="ds-hosting-icon">
								<?php 
								$conf_icon = get_template_directory_uri() . '/dist/assets/images/ds-feat-icon1.png';
								$img_conf_icon     = get_sub_field( 'icon' );
								if ( ! empty( $img_conf_icon ) ) {
									$conf_icon = $img_conf_icon['sizes']['mid_icon'];
								}
								if(!empty($conf_icon)){ echo"<img src='".$conf_icon."'>"; }
								?>	
							</div>
							<div class="ds-hosting-content">
								<h3><?php the_sub_field('title');?></h3>
								<p><?php the_sub_field('short_detail');?></p>
							</div>
						</div>
						<?php 
						}
						$count++;
						endwhile; 
						endif;
						?>
					</div>
				</div>
				<div class="col-md-4 order-md-2">
					<div class="ds-hosting-feat-block">
					<?php
						$count_right = 1;
						if ( have_rows( 'hosting_feature_list' ) ) : 
						while ( have_rows( 'hosting_feature_list' ) ) :
						the_row();
						if($count_right %2 == 0){ 
						?>
						<div class="ds-hosting-feat-list">
							<div class="ds-hosting-icon">
								<?php 
								$conf_icon = get_template_directory_uri() . '/dist/assets/images/ds-feat-icon1.png';
								$img_conf_icon     = get_sub_field( 'icon' );
								if ( ! empty( $img_conf_icon ) ) {
									$conf_icon = $img_conf_icon['sizes']['mid_icon'];
								}
								if(!empty($conf_icon)){ echo"<img src='".$conf_icon."'>"; }
								?>	
							</div>
							<div class="ds-hosting-content">
								<h3><?php the_sub_field('title');?></h3>
								<p><?php the_sub_field('short_detail');?></p>
							</div>
						</div>
						<?php 
						}
						$count_right++;
						endwhile; 
						endif;
						?>
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
<?php endwhile; // end of the loop. ?>
</main>
<?php get_footer(); ?>
