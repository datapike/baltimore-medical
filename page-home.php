<?php
/*
	Template Name: Home Page 
*/

get_header(); ?>

<!-- main content for page --> 
<div class="main-container">
	<div id="homeCarousel" class="carousel slide" data-ride="carousel" data-interval="7000">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#homeCarousel" data-slide-to="1"></li>
			<li data-target="#homeCarousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">

			<div class="item active">
				<a href="<?php bloginfo('siteurl'); ?>/insurance/">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/colorful-pills-crop.jpg" alt="Pills"></a>

			</div>
			<div class="item">
				<a href="<?php bloginfo('siteurl'); ?>/departments/">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/microbiology-crop.jpg" alt="Departments"></a>

			</div>
			<div class="item">
				<a href="<?php bloginfo('siteurl'); ?>/staff/"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/doctor-pulse-crop.jpg" alt="Staff"></a>

			</div>


			<!-- Controls -->
			<a class="left carousel-control" href="#homeCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#homeCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</div>
<div class="spacer">&nbsp;</div>
<div class="spacer">&nbsp;</div>
	
	<div class="main-container">
		<div class="row">
			
			<div class="col-sm-3 icons">
				<div class="row" align="center">
					<a href="<?php bloginfo('siteurl'); ?>/staff/"  title="staff"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/doctor.png"></a>
				</div>
				<div class="row icon-text">
					<p><a href="<?php bloginfo('siteurl'); ?>/staff/">Staff</a></p>
				</div>
			</div>
			
			<div class="col-sm-3 icons">
				<div class="row" align="center">
					<a href="<?php bloginfo('siteurl'); ?>/insurance/"  title="insurance"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/pill.png"></a>
				</div>
				<div class="row icon-text">
					<p><a href="<?php bloginfo('siteurl'); ?>/insurance/">Insurance</a></p>
				</div>
			</div>
			
			<div class="col-sm-3 icons">
				<div class="row" align="center">
					<a href="<?php bloginfo('siteurl'); ?>/jobs/"  title="jobs"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/jobs.png"></a>
				</div>
				<div class="row icon-text">
					<p><a href="<?php bloginfo('siteurl'); ?>/jobs/">Jobs</a></p>
				</div>
			</div>
			
			<div class="col-sm-3 icons">
				<div class="row" align="center">
					<a href="https://www.followmyhealth.com" target="_blank"  title="patient portal"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/doctor2.png"></a>
				</div>
				<div class="row icon-text">
					<p><a href="https://www.followmyhealth.com" target="_blank">Patient Portal</a></p>
				</div>
			</div>
			
		</div>
	</div>
	<div class="spacer spacer-purple">&nbsp;</div>
	<div class="main-container">
		<div class="row">
			<h1>Departments</h1>
		</div>
		<div class="row">
			<div class="col-sm-3">

				<img class="aligncenter" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/pediatrics.png" />
				<p class="icon-text" style="text-align: center;"><a href="http://copyquality.com/mocksites/medical/departments/pediatrics/">Pediatrics</a></p>

			</div>
			<div class="col-sm-3">

				<img class="aligncenter" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/internal.png" />
				<p class="icon-text" style="text-align: center;"><a href="http://copyquality.com/mocksites/medical/departments/internal-medicine/">Internal Medicine</a></p>

			</div>
			<div class="col-sm-3">

				<img class="aligncenter" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/gynecology.png" />
				<p class="icon-text" style="text-align: center;"><a href="http://copyquality.com/mocksites/medical/departments/gynecology/">Gynecology</a></p>

			</div>
			<div class="col-sm-3">

				<img class="aligncenter" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/family.png" />
				<p class="icon-text" style="text-align: center;"><a href="http://copyquality.com/mocksites/medical/departments/family-practice/">Family Practice</a></p>

			</div>
		</div>
	</div>
	
	<div class="spacer spacer-purple">&nbsp;</div>
	
	<div class="about-us-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h1>About Us</h1>
					<p>Baltimore Medical Practice is the leading multi-specialty group in Baltimore City with 20 providers, conveniently located in Mount Vernon.  </p>
					<p>The mission of our Primary Care Physicians is to provide personalized, high-quality care for our patients at every visit with same day appointments and extended hours in Family Practice, Internal Medicine and Pediatrics.</p>
				</div>
				<div class="col-md-4">
					<?php if( is_active_sidebar('sidebar-home') ) { ?>
						<div class="sidebar-home">
							<?php dynamic_sidebar('sidebar-home'); ?>
						</div>
						<div class="clear"></div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	
<div class="call-out-section">
	<div class="container call-out">
		<div class="row">
			<div class="col-md-6">
				<p>Now accepting new patients.</p>
			</div>
			<div class="col-md-6 call-now">
				<a href="tel://1-410-123-4567" class="btn-ghost" role="button">Call Now</a>
			</div>
		</div>
	</div>
</div>
	
</div>
<!-- end main content for page -->

<a class="cd-top" href="#">Top</a>
<?php get_footer(); ?>
