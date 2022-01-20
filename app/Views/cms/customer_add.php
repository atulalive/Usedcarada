<?php echo view('./admin/head.php'); ?>
<!--Page-->
<div class="page">
	<div class="page-main">

		<!--Header-->
		<?php echo view('admin/header.php'); ?>
		<!--/Header-->

		<!-- Sidebar menu-->
		<?php echo view('admin/sidebar_menu.php'); ?>
		<!-- /Sidebar menu-->
        <section>
			<div class="bannerimg cover-image bg-background3 sptb-2" data-image-src="<?php echo base_url(); ?>/assets/images/banners/banner2.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white ">
							<h1 class="">About Us</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">About Us</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--App-Content-->
		<div class="app-content">
			 
			<!--Footer-->
			<?php echo view('admin/page_footer.php'); ?>
			<!--/Footer-->
		</div>
		<!--/Page-->
		<?php echo view('admin/footer.php'); ?>