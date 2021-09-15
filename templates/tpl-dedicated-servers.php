<?php
/* Template Name: Dedicated Servers  */
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
				<div class="page-banner-content  wow fadeInDown">
					<h4>Starting from</h4>
					<div class="starting-price wow pulse infinite">
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
					<h1 class="large-banner__heading wow fadeInLeft"><?php the_field('dedicated_server_title');?></h1>
					<p class="wow fadeInLeft"><?php the_field('dedicated_server_sub_title');?></p>
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
					<ul class="nav nav-pills"  >
						
						<li class="nav-item" >
							<a class="nav-link" href="#section2">Hosting Features</a>
						</li>
						<li class="nav-item" >
							<a class="nav-link active"  href="#section4">Server Configurations</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="#section5">Feature Compare</a>
						</li>
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
							<div class="col-md-3 wow fadeInRightBig">
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
				<div class="col-md-4 order-md-1  wow fadeInUp">
					<div class="thumbnail-img">
						<?php 
						$hosting_feature = get_template_directory_uri() . '/dist/assets/images/ds-hosting-feat.png';
						$img_hosting_feature     = get_sub_field( 'icon' );
						if ( ! empty( $img_hosting_feature ) ) {
							$hosting_feature = $img_hosting_feature['sizes']['mid_icon'];
						}
						if(!empty($hosting_feature)){ echo"<img src='".$hosting_feature."'>"; }
						?>
					</div>
				</div>
				<div class="col-md-4 order-md-0  wow fadeInLeftBig">
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
				<div class="col-md-4 order-md-2  wow fadeInRightBig">
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

	<?php if(get_field('showhide_popular_dedicated_server')){ ?>
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
					<div class="server-type-block-wrap wow fadeInUp">
						<h3><i><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/servers.png'; ?>" alt="servers"></i>Budget Servers</h3>
						<h4>Our Best Selling Budget Servers</h4>
						<div class="row">
							<?php echo do_shortcode('[dedicated_popular_info product_group_id=358 discount=20 caption=""]');?>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="server-type-block-wrap wow fadeInUp">
						<h3><i><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/servers.png'; ?>" alt="servers"></i>Pro Servers</h3>
						<h4>Our Best Selling Pro Servers</h4>
						<div class="row">
							<?php echo do_shortcode('[dedicated_popular_info product_group_id=331 discount=20 caption="" ]');?>							
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="server-type-block-wrap wow fadeInUp">
						<h3><i><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/servers.png'; ?>" alt="servers"></i>Enterprise Servers</h3>
						<h4>Our Best Selling Enterprise Servers</h4>
						<div class="row">
							<?php echo do_shortcode('[dedicated_popular_info  product_group_id=332 discount=20 caption=""]');?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php } ?>
	
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
		<div class="server-details-table-wrap wow fadeInRightBig" id="server-details-table-scroll-view">
			<div class="tab-content" id="bmc-pills-tabContent">
				<div class="tab-pane fade show active" id="budget-server" role="tabpanel" aria-labelledby="budget-server-tab">
					<?php echo do_shortcode('[dedicated_pricing_info product_group_id=358 discount=20 caption="Budget Servers"]');?>
					<div id="budget-server-pagination"></div>
				</div>
				<div class="tab-pane fade" id="pro-server" role="tabpanel" aria-labelledby="pro-server-tab">
					<?php echo do_shortcode('[dedicated_pricing_info product_group_id=331 discount=20 caption="Pro Servers"]');?>
					<div id="pro-server-pagination"></div>
				</div>
				<div class="tab-pane fade" id="enterprise-server" role="tabpanel" aria-labelledby="enterprise-server-tab">
					<?php echo do_shortcode('[dedicated_pricing_info product_group_id=332 discount=20 caption="Enterprise Server"]
');?>
					<div id="enterprise-server-pagination"></div>
				</div>
			</div>
		</div>
	</section>
	<section class="ds-feature-compare section">
		<div class="wrapper">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title"><?php the_field('budget_vs_pro_vs_enterprise_title'); ?></h2>
				<span class="section-header__decoration-element"></span>
			</div>
			<div class="ds-feature-table wow fadeInUp">
				<div class="ds-feature-table__block">
					<div class="ds-feature-table__block--header">&nbsp;</div>
					<div class="ds-feature-table__block--content">
						<ul>
							<?php							
							if ( have_rows( 'budget_vs_pro_vs_enterprise_comparison' ) ) : 
							while ( have_rows( 'budget_vs_pro_vs_enterprise_comparison' ) ) :
							the_row();						
							?>
							<li><?php the_sub_field('feature_heading');?> <?php if(!empty(get_sub_field('help_text'))){ ?> <i><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/question.png'; ?>" alt="question"  data-toggle="tooltip" data-html="true" data-placement="right" title="<?php the_sub_field('help_text');?>"></i><?php  }?></li>							
							<?php 
							endwhile; 
							endif;			
							?>
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
							<?php						
							if ( have_rows( 'budget_vs_pro_vs_enterprise_comparison' ) ) : 
							while ( have_rows( 'budget_vs_pro_vs_enterprise_comparison' ) ) :
							the_row();	
							$yes_image = "<img src='".get_template_directory_uri(). "/dist/assets/images/tick-green.png' alt='tick-green' class='tick-green'>";
							$no_image = "<img src='".get_template_directory_uri(). "/dist/assets/images/cancel.png' alt='cancel' class='cancel'>";
							$yes_no_val = get_sub_field('budget_servers'); 
							$yes_no = explode(',',$yes_no_val);							
							?>
							<li> 
							<?php 
							if(is_array($yes_no) && count($yes_no)>1){
								foreach($yes_no as $row){
									if(strtolower($row) =='yes'){
										echo $yes_image;
									}
									else if(strtolower($row) =='no'){
										echo $no_image;
									}else{
										echo $row;	
									}
								}
							}else{
								if(strtolower($yes_no_val) =='yes'){
									echo $yes_image;
								}
								else if(strtolower($yes_no_val) =='no'){
									echo $no_image;
								}else{
									$result = !empty($yes_no_val)?$yes_no_val:'&nbsp;';
									echo $result;
								}
							} 							
							?>
							</li>							
							<?php 
							endwhile; 
							endif;			
							?>
						</ul>
					</div>
					<div class="ds-feature-table__block--footer">
						<?php 
						$budget_servers = get_field('budget_servers'); 
						?>
						<a  href="#section4" class="btn--orange chooseEnterprise" servertype='budget'><?php if(isset($budget_servers['view_server_button_label'])){ echo $budget_servers['view_server_button_label']; }?></a>
						<a href="#section4" class="chooseEnterprise" servertype='budget'><?php if(isset($budget_servers['configuration_available_text'])){ echo $budget_servers['configuration_available_text']; }?></a>
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
							<?php					
							if ( have_rows( 'budget_vs_pro_vs_enterprise_comparison' ) ) : 
							while ( have_rows( 'budget_vs_pro_vs_enterprise_comparison' ) ) :
							the_row();	
							$yes_image = "<img src='".get_template_directory_uri(). "/dist/assets/images/tick-green.png' alt='tick-green' class='tick-green'>";
							$no_image = "<img src='".get_template_directory_uri(). "/dist/assets/images/cancel.png' alt='cancel' class='cancel'>";
							$yes_no_val = get_sub_field('pro_servers'); 
							$yes_no = explode(',',$yes_no_val);							
							?>
							<li>
							<?php 
							if(is_array($yes_no) && count($yes_no)>1){
								foreach($yes_no as $row){
									if(strtolower($row) =='yes'){
										echo $yes_image;
									}
									else if(strtolower($row) =='no'){
										echo $no_image;
									}else{
										echo $row;	
									}
								}
							}else{
								if(strtolower($yes_no_val) =='yes'){
									echo $yes_image;
								}
								else if(strtolower($yes_no_val) =='no'){
									echo $no_image;
								}else{
									$result = !empty($yes_no_val)?$yes_no_val:'&nbsp;';
									echo $result;
								}
							} 							
							?>
							</li>							
							<?php 
							endwhile; 
							endif;			
							?>
						</ul>
					</div>
					<div class="ds-feature-table__block--footer">
						<?php 
						$pro_servers = get_field('pro_servers'); 
						?>
						<a  href="#section4" class="btn--orange chooseEnterprise" servertype='pro'><?php if(isset($pro_servers['view_server_button_label'])){ echo $pro_servers['view_server_button_label']; }?></a>
						<a href="#section4" class="chooseEnterprise" servertype='pro'><?php if(isset($pro_servers['configuration_available_text'])){ echo $pro_servers['configuration_available_text']; }?></a>
					</div>
				</div>
				<div class="ds-feature-table__block">
					<div class="ds-feature-table__block--header">
						<div class="ds-feature-table-icon-box">
							<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/budget-server.png'; ?>" alt="budget-server">
						</div>
						<h3>Enterprise Servers</h3>
						<h4>Prebuilt Servers</h4>
					</div>
					<div class="ds-feature-table__block--content">
						<ul>
						<?php					
							if ( have_rows( 'budget_vs_pro_vs_enterprise_comparison' ) ) : 
							while ( have_rows( 'budget_vs_pro_vs_enterprise_comparison' ) ) :
							the_row();	
							$yes_image = "<img src='".get_template_directory_uri(). "/dist/assets/images/tick-green.png' alt='tick-green' class='tick-green'>";
							$no_image = "<img src='".get_template_directory_uri(). "/dist/assets/images/cancel.png' alt='cancel' class='cancel'>";
							$yes_no_val = get_sub_field('enterprise_servers'); 
							$yes_no = explode(',',$yes_no_val);							
							?>
							<li>
							<?php 
							if(is_array($yes_no) && count($yes_no)>1){
								foreach($yes_no as $row){
									if(strtolower($row) =='yes'){
										echo $yes_image;
									}
									else if(strtolower($row) =='no'){
										echo $no_image;
									}else{
										echo $row;	
									}
								}
							}else{
								if(strtolower($yes_no_val) =='yes'){
									echo $yes_image;
								}
								else if(strtolower($yes_no_val) =='no'){
									echo $no_image;
								}else{
									$result = !empty($yes_no_val)?$yes_no_val:'&nbsp;';
									echo $result;
								}
							} 							
							?>
							</li>							
							<?php 
							endwhile; 
							endif;			
							?>
						</ul>
					</div>
					<div class="ds-feature-table__block--footer">
					<?php 
						$enterprice_servers = get_field('enterprise_servers'); 
						?>
						<a href="#section4" class="btn--orange chooseEnterprise" servertype='enterprise'><?php if(isset($enterprice_servers['view_server_button_label'])){ echo $enterprice_servers['view_server_button_label']; }?></a>
						<a href="#section4" class="chooseEnterprise" servertype='enterprise'><?php if(isset($enterprice_servers['configuration_available_text'])){ echo $enterprice_servers['configuration_available_text']; }?></a>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endwhile; // end of the loop. ?>
</main>
<?php get_footer(); ?>
