<?php
/* Dedicated Servers Backup Bottom Menu navigation :  https://prnt.sc/n5HA_VQju_2-   */

get_header();?>
<main id="fullpage" class="site-main">
<?php while ( have_posts() ) : the_post(); 

	$banner_image_url = get_template_directory_uri() . '/dist/assets/images/dedi-servers.jpg';
	$banner_image     = get_field( 'banner_bg' );
	if ( ! empty( $banner_image ) ) {
		$banner_image_url = $banner_image['sizes']['banner_image'];
	}
?>	
	<section class="section fp-auto-height">
		<section id="large-banner" class="page-banner dedicated-server-page-banner large-banner page-section" style="background-image: url('<?php echo $banner_image_url; ?>');">
			<div class=" page-banner-content  wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
				<h4>Starting from</h4>
				<div class="starting-price ">
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
				<h1 class="large-banner__heading wow fadeInDown"><?php the_field( 'dedicated_server_title' ); ?></h1>
				
				<p class="wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;"><?php the_field('dedicated_server_sub_title');?></p>
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
		</section>

		<section class="dedicated-server-navTabs">
			<div class="navTabs-pills-wrap">
				<div class="wrapper">
					<ul class="nav nav-pills"  >						
						<li class="nav-item" >
							<a class="nav-link" href="#section2">Hosting Features</a>
						</li>
						<li class="nav-item" >
							<a class="nav-link "  href="#section3">Popular Dedicated Servers</a>
						</li>
						<li class="nav-item" >
							<a class="nav-link "  href="#section4">Server Configurations</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="#section5">Feature Compare</a>
						</li>
					</ul>
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
				<h2 class="section-header__title">Our Most Popular Dedicated Servers</h2>
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
							<li><?php the_sub_field('feature_heading');?> 
							<!-- <i><img src="https://wwwnew.dedicatedsolutions.com/wp-content/themes/dedicatedsolutions/dist/assets/images/question.png" alt="question" data-toggle="tooltip" data-html="true" data-placement="right" title="" data-original-title="Fully automated Server Provisioning, Inter Server comunication and private VLANs"></i> -->
							
							<?php /*  if(!empty(get_sub_field('help_text'))){ ?> <i><img src="<?php echo get_template_directory_uri() . '/dist/assets/images/question.png'; ?>" alt="question"  data-toggle="tooltip" data-toggle="popover" data-html="true" data-placement="right" title="<?php the_sub_field('help_text');?>"></i><?php  } */ ?>
							<?php   if(!empty(get_sub_field('help_text'))){ ?> <span data-toggle="tooltip" data-placement="right" data-html="true" title="<?php the_sub_field('help_text');?>"><img src="https://wwwnew.dedicatedsolutions.com/wp-content/themes/dedicatedsolutions/dist/assets/images/question.png"/></span> <?php  }  ?>
							
						</li>							
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
						<h4></h4>
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
						<a href="#section4" class="chooseEnterprise" servertype='budget'><span id="countConfBudget"></span> configuration(s) available</a>
					</div>
				</div>
				<div class="ds-feature-table__block">
					<div class="ds-feature-table__block--header">
						<div class="ds-feature-table-icon-box">
							<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/pro-server.png'; ?>" alt="pro-server">
						</div>
						<h3>Pro Servers</h3>
						<h4></h4>
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
						<a href="#section4" class="chooseEnterprise" servertype='pro'><span id="countConfPro"></span> configuration(s) available</a>
					</div>
				</div>
				<div class="ds-feature-table__block">
					<div class="ds-feature-table__block--header">
						<div class="ds-feature-table-icon-box">
							<img src="<?php echo get_template_directory_uri() . '/dist/assets/images/budget-server.png'; ?>" alt="budget-server">
						</div>
						<h3>Enterprise Servers</h3>
						<h4></h4>
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
						<a href="#section4" class="chooseEnterprise" servertype='enterprise'><span id="countConfEnterprise"></span> configuration(s) available</a>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endwhile; // end of the loop. ?>
</main>
<?php get_footer(); ?>
<style>
.ds-feature-table__block--content span img{
	width:13px;	
	height: 13px;
	cursor:pointer;
}
.tooltip{
	font-size: 14px;
}
.tooltip-inner {
    max-width: 420px;
    min-width: 150px; 
	padding:10px;
	text-align:left;
}
.tooltip-inner a{
	color:#56BC3A;
}
.tooltip-inner a:hover{
	color:#fd7e14;
}
</style>
<script>
jQuery('[data-toggle="tooltip"]')
  .attr("tabindex", 0)
  .tooltip({ trigger: "manual" })
  .mouseover(event => {
    jQuery(event.target).tooltip("show");
    jQuery(".tooltip").on("mouseleave", function() {
		jQuery(event.target).tooltip("hide");
    });
  })
  .mouseout(event => {
    setTimeout(() => {
      if (!jQuery(".tooltip:hover").length) jQuery(event.target).tooltip("hide");
    }, 100);
  })
  .focus(event => {
    jQuery(event.target).tooltip("show");
  })
  .blur(event => {
    jQuery(event.target).tooltip("hide");
  });

/* Listen for the "escape key" so tool tips can easily be hidden */
jQuery("body").keydown(event => {
  if (event.keyCode === 27) {
    jQuery('[data-toggle="tooltip"]').tooltip("hide");
  }
});
</script>