		<!--Loader-->
		<div id="global-loader">
			<img src="<?php echo URL_IMAGES; ?>loader.svg" class="loader-img " alt="">
		</div>
		<!--Topbar-->

		<div class="horizontal-main header-main">
			<div class="top-bar p-3">
				<div class="container">
					<div id="horizontal-main-header" class="row">
						<div id="header2" class="col-xl-3 col-lg-3 col-sm-3 col-3">
							<div class="top-bar-left d-flex">
								<div class="clearfix text-center">
									<div class="header-search-logo d-lg-block">
										<a class="header-logo" href="<?php echo base_url(); ?>">
											<img src="<?php echo URL_IMAGES_MEDIA; ?>logos/logo.png" class="header-brand-img" alt="dashr logo">
										</a>
									</div>
								</div>
							</div>
						</div>
						<div id="header2" class="col-xl-6 col-lg-6 col-sm-6 col-6 d-lg-block" >
							<div class="top-bar-center header-inputs mb-lg-0">
								<div class="input-group">
									<input type="text" class="form-control br-tl-0 br-bl-0" placeholder="Search Cars & Brands">
									<div class="input-group-append ">
										<button type="button" class="btn btn-primary"><i class="fa fa-search text-white mr-1" aria-hidden="true"></i></button>
									</div>
								</div>
							</div>
						</div>
						<div id="header3" class="col-xl-3 col-lg-3 col-sm-3 col-3">
							
							<div class="top-bar-right">
								<ul class="custom">
									<li>
										<a href="#" data-toggle="modal" class="text-dark"><i class="fa fa-map-marker mr-1"></i> <span>Location</span></a>
									</li>
									<li>
										<?php if(session()->get('loggedIn') == true){ ?>
											<a href="<?php echo base_url('admin/myinfo'); ?>" class="text-dark"><i class="fa fa-user-circle mr-1"></i> <span>Hello <?php print_r(session()->get('name')); ?></span></a>
										<?php }else {?>
											<!--a href="#LgoinRegister" data-toggle="modal" class="text-dark"><i class="fa fa-sign-in mr-1"></i> <span>Login/Register</span></a-->
										<?php }?>

									</li>
								</ul>
							</div>
						</div>					
					</div>
				</div>
			</div>

			<!-- Horizontal Header -->
			<!-- <div class="horizontal-header clearfix ">
				<div class="container">
				<div class="top-bar-center header-inputs mb-lg-0">
								<div class="input-group">
									<input type="text" class="form-control br-tl-0 br-bl-0" placeholder="Search Cars & Brands">
									<div class="input-group-append ">
										<button type="button" class="btn btn-primary"><i class="fa fa-search text-white mr-1" aria-hidden="true"></i></button>
									</div>
								</div>
							</div>
				</div>
			</div> -->
			<!-- /Horizontal Header -->

			<!-- Horizontal Main -->
			<div class="header-style horizontal-main clearfix bg-white">
				<div class="horizontal-mainwrapper container clearfix">
					<!--Nav-->
					<nav class="horizontalMenu clearfix d-md-flex">
						<ul class="horizontalMenu-list">
							<li aria-haspopup="true"><a href="<?php echo base_url(); ?>" class="active">Home</a></li>
							<li aria-haspopup="true"><a href="<?php echo base_url() . '/category'; ?>">USED Car </a></li>
                        <li aria-haspopup="true"><a href="<?php echo base_url() . '/detailscar'; ?>">SELL Cars </a></li>
							<li aria-haspopup="true"><a href="<?php echo base_url() . '/about'; ?>">COMPARE</a></li> 
							<li aria-haspopup="true"><a href="<?php echo base_url() . '/about'; ?>">News</a></li> -->
							<li aria-haspopup="true"><a href="#"> Contact Us <span class="horizontalarrow"></span></a></li>
							<li aria-haspopup="true" class="d-lg-none mt-5 pb-5 mt-lg-0">
								<span><a class="btn btn-orange" href="<?php echo base_url('vendor/login');?>"><i class="fa fa-car text-white mr-1"></i> Sell Your Car</a></span>
							</li>
						</ul>
						<ul class="mb-0">
							<li aria-haspopup="true" class="mt-5 d-none d-lg-block ">
								<?php if(session()->get('loggedIn') == true){ ?>
									<span><a class="btn btn-green ad-post " href="<?php echo base_url('vendor/master');?>"><i class="side-menu__icon1 ti-package text-white mr-1"></i> Dashboard</a></span>
								<?php } else {?>	
									<span><a class="btn btn-green ad-post " href="<?php echo base_url('vendor/login');?>"><i class="fa fa-car text-white mr-1"></i> Sell Your Car</a></span>
								<?php } ?>
							</li>
						</ul>
					</nav>
					<!--Nav-->

				</div>
			</div>
			<!-- /Horizontal Main -->
			<?php if (empty($key) && empty($id)) { ?>
				<!--BreadCrumb
				<div class="bg-white border-bottom">
					<div class="container">
						<div class="page-header">
							<h4 class="page-title">Cars</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?php base_url(); ?>">Home</a></li>
								<li class="breadcrumb-item"><a href="#">Categories</a></li>
								<li class="breadcrumb-item active" aria-current="page">Cars</li>
							</ol>
						</div>
					</div>
				</div>
				/BreadCrumb-->
			<?php } ?>
		</div>
		<!-- Topbar -->