<?php
/* Dynamic Page -  On-Demand Storage */ 

get_header();?>


<main id="site-main" class="site-main">
	<section class="page-banner about-page-banner" style="background-image:url('<?php echo get_template_directory_uri() . '/dist/assets/images/about-banner.jpg'; ?>')">
		<div class="wrapper">
			<div class="page-banner-content">
				<h1 class="large-banner__heading">On-Demand Storage</h1>
				<p>Cloud & hardware-based solutions for all your storage needs.</p>				
			</div>
		</div>
	</section>
	<section class="welcom-section page-section">
		<div class="wrapper">
			<div class="section-header u-txt-center">
				<h2 class="section-header__title">FC vs. ISCSI vs. NFS</h2>
				<span class="section-header__decoration-element"></span>
				<p class="section-header__sub-title">Whether you’re a Windows, Linux, VMware vSphere or server user, you almost certainly need access to shared storage. The comprehensive functions can be used with storage protocols such as Fibre Channel, iSCSI, and NFS.</p>
			</div>
			<div class="row">
				<div class="col-md-12">
				<table class="table">
			<thead>
				<tr>
				<th scope="col">Features</th>
				<th scope="col">Fibre Channel (FC) SAN</th>
				<th scope="col">iSCSI SAN</th>
				<th scope="col">NFS SAN</th>
				</tr>
			</thead>
			<tbody>
				<?php
				if ( have_rows( 'feature_comparision' ) ) : 
				while ( have_rows( 'feature_comparision' ) ) :
					the_row();
				?>
				<tr>
				<th scope="row"><?php the_sub_field( 'feature_heading' ); ?></th>
				<td><?php the_sub_field( 'fibre_channel_fc_san' ); ?></td>
				<td><?php the_sub_field( 'iscsi_san' ); ?></td>
				<td><?php the_sub_field( 'nfs_san' ); ?></td>
				</tr>
				<?php 
				endwhile;
				endif;
				?>
			</tbody>
			</table>
				</div>				
			</div>
		</div>
	</section>	
</main>







<?php get_footer(); ?>
