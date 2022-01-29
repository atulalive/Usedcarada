<!doctype html>
<html lang="en" dir="ltr">

<?php echo view('header.php'); ?>
<?php echo view('topbar.php'); ?>
	
						<div class="col-xl-4 col-lg-4 col-sm-8 col-5">
							<div class="top-bar-right">
								<ul class="custom">
									<li>
										<a href="register.html" class="text-dark"><i class="fa fa-user mr-1"></i> <span>Register</span></a>
									</li>
									<li>
										<a href="login.html" class="text-dark"><i class="fa fa-sign-in mr-1"></i> <span>Login</span></a>
									</li>
									<li class="dropdown">
										<a href="#" class="text-dark" data-toggle="dropdown"><i class="fa fa-home mr-1"></i><span> My Dashboard</span></a>
										<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
											<a href="mydash.html" class="dropdown-item" >
												<i class="dropdown-icon icon icon-user"></i> My Profile
											</a>
											<a class="dropdown-item" href="#">
												<i class="dropdown-icon icon icon-speech"></i> Inbox
											</a>
											<a class="dropdown-item" href="#">
												<i class="dropdown-icon icon icon-bell"></i> Notifications
											</a>
											<a href="mydash.html" class="dropdown-item" >
												<i class="dropdown-icon  icon icon-settings"></i> Account Settings
											</a>
											<a class="dropdown-item" href="#">
												<i class="dropdown-icon icon icon-power"></i> Log out
											</a>
										</div>
									</li>
								</ul>
							</div>
						</div>
                        
					</div>
				</div>
			</div>

			
        

		
				

		<!--Section-->
		<br><br><section class="sptb bg-white">
        <div class="card mb-0">
        <div class="card-body">
			<div class="container">
				<div class="section-title center-block text-center">
					<h2>Compare Cars</h2>
					<p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
				</div>
				<div class="row">
					<div class="card mb-0">
						<div class="card-body">
							<div class="row">
								<div class="col-xl-4 col-lg-4 col-md-12">
									<div class="form-group search-cars1">
										<select class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select">
											<optgroup label="Categories">
												<option>Choose Make</option>
												<option value="1">Champlain</option>
												<option value="2">Caledonia</option>
												<option value="3">Chittenden</option>
												<option value="4">Shelburne</option>
												<option value="5">Exercitationem</option>
												<option value="6">Bennington</option>
												<option value="7">Brattleboro</option>
												<option value="8">Killington</option>
												<option value="9">Monastery</option>
												<option value="10">Sherbrooke</option>
											</optgroup>
										</select>
									</div>
									<div class="form-group mb-lg-0 search-cars1">
										<select class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select">
											<optgroup label="Categories">
												<option>Choose Variant</option>
												<option value="1">Champlain</option>
												<option value="2">Caledonia</option>
												<option value="3">Chittenden</option>
												<option value="4">Shelburne</option>
												<option value="5">Exercitationem</option>
												<option value="6">Bennington</option>
												<option value="7">Brattleboro</option>
												<option value="8">Killington</option>
												<option value="9">Monastery</option>
												<option value="10">Sherbrooke</option>
											</optgroup>
										</select>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-12">
									<div class="form-group search-cars1">
										<select class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select">
											<optgroup label="Categories">
												<option>Choose Make</option>
												<option value="1">Champlain</option>
												<option value="2">Caledonia</option>
												<option value="3">Chittenden</option>
												<option value="4">Shelburne</option>
												<option value="5">Exercitationem</option>
												<option value="6">Bennington</option>
												<option value="7">Brattleboro</option>
												<option value="8">Killington</option>
												<option value="9">Monastery</option>
												<option value="10">Sherbrooke</option>
											</optgroup>
										</select>
									</div>
									<div class="form-group mb-lg-0 search-cars1">
										<select class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select">
											<optgroup label="Categories">
												<option>Choose Variant</option>
												<option value="1">Champlain</option>
												<option value="2">Caledonia</option>
												<option value="3">Chittenden</option>
												<option value="4">Shelburne</option>
												<option value="5">Exercitationem</option>
												<option value="6">Bennington</option>
												<option value="7">Brattleboro</option>
												<option value="8">Killington</option>
												<option value="9">Monastery</option>
												<option value="10">Sherbrooke</option>
											</optgroup>
										</select>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-12">
									<a class="btn btn-white btn-block mb-4 fs-15" href="#"><i class="fa fa-plus"></i> Compare Another Car</a>
									<a class="btn btn-primary btn-block fs-15" href="#">Compare</a>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div></div></div>
		</section>
		

		<!--Car Comparison-->
		<section class="sptb bg-white">
			<div class="container">
				<div class="section-title center-block text-center">
					<h2>Recent Comparisons</h2>
					<p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
				</div>
				<div id="defaultCarousel" class="owl-carousel Card-owlcarousel owl-carousel-icons">
					<div class="item">
						<div class="card mb-0 car-comparision">
							<div class="item7-card-img d-flex">
								<img src="../assets/images/media/b3.png" alt="img" class="cover-image w-50">
								<img src="../assets/images/media/others/porshe.jpg" alt="img" class="cover-image w-50">
							</div>
							<div class="card-image-difference"><i class="fa fa-exchange"></i></div>
							<div class="card-body p-4">
								<div class="row">
									<div class="col">
										<h4>Monastery</h4>
										<h6>$456-$987</h6>
									</div>
									<div class="col">
										<h4>Killington</h4>
										<h6>$785-$841</h6>
									</div>
								</div>
								<a class="btn btn-primary btn-block mt-3" href="car-compare.html">Monastery Vs Killington</a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0 car-comparision">
							<div class="item7-card-img d-flex">
								<img src="../assets/images/media/others/maruthi2.jpg" alt="img" class="cover-image w-50">
								<img src="../assets/images/media/others/volvo2.jpg" alt="img" class="cover-image w-50">
							</div>
							<div class="card-image-difference"><i class="fa fa-exchange"></i></div>
							<div class="card-body p-4">
								<div class="row">
									<div class="col">
										<h4>Crusader</h4>
										<h6>$456-$987</h6>
									</div>
									<div class="col">
										<h4>Brattleboro</h4>
										<h6>$785-$841</h6>
									</div>
								</div>
								<a class="btn btn-primary btn-block mt-3" href="car-compare.html">Crusader Vs Brattleboro</a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0 car-comparision">
							<div class="item7-card-img d-flex">
								<img src="../assets/images/media/f1.png" alt="img" class="cover-image w-50">
								<img src="../assets/images/media/others/volvo3.jpg" alt="img" class="cover-image w-50">
							</div>
							<div class="card-image-difference"><i class="fa fa-exchange"></i></div>
							<div class="card-body p-4">
								<div class="row">
									<div class="col">
										<h4>Millenium</h4>
										<h6>$456-$987</h6>
									</div>
									<div class="col">
										<h4>Brattleboro</h4>
										<h6>$785-$841</h6>
									</div>
								</div>
								<a class="btn btn-primary btn-block mt-3" href="car-compare.html">Millenium Vs Brattleboro</a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0 car-comparision">
							<div class="item7-card-img d-flex">
								<img src="../assets/images/media/b2.png" alt="img" class="cover-image w-50">
								<img src="../assets/images/media/others/porshe2.jpg" alt="img" class="cover-image w-50">
							</div>
							<div class="card-image-difference"><i class="fa fa-exchange"></i></div>
							<div class="card-body p-4">
								<div class="row">
									<div class="col">
										<h4>Millenium</h4>
										<h6>$456-$987</h6>
									</div>
									<div class="col">
										<h4>Killington</h4>
										<h6>$785-$841</h6>
									</div>
								</div>
								<a class="btn btn-primary btn-block mt-3" href="car-compare.html">Millenium Vs Killington</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Car Comparison-->

        <?php
	echo view('mostUsedCar_view.php');
	// echo view('model_view.php');

	?>

		<!-- Newsletter-->
		<section>
			<div class="about-1 cover-image sptb bg-background-color text-white" data-image-src="../assets/images/banners/b1.jpg">
				<div class="content-text mb-0">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 col-xl-4 mb-5 mb-xl-0">
								<h2 class="mb-2 h1">Get in touch</h2>
								<p class="fs-16 mb-0">Let us know how we can help you?</p>
							</div>
							<div class="col-lg-6 col-xl-4">
								<div class="d-flex mt-4 widgets-cards mt-lg-0">
									<div class="widgets-cards-icons">
										<div class="wrp icon-circle bg-success">
											<i class="fa fa-envelope icons"></i>
										</div>
									</div>
									<div class="mt-3">
										<h6>Got any Question?</h6>
										<h3><a href="#" class="text-white">info@usedcaradda.com </a></h3>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-xl-4">
								<div class="d-flex mt-4 widgets-cards mt-lg-0">
									<div class="widgets-cards-icons"style="padding-left: 50px;">
										<div class="wrp icon-circle bg-primary">
											<i class="fa fa-phone icons"></i>
										</div>
									</div>
									<div class="mt-3" >
										<h6>Call us Today</h6>
										<h3><a href="#" class="text-white">+91 76662 93377 </a></h3>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
        <!--Section-->
		<section class="sptb border-top bg-white">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="bg-light border p-0 box-shadow2">
							<div class="card-body">
								<h6 class="fs-18 mb-4">Do You Want to sell A Car?</h6>
								<hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto">
								<p>it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
								<a href="#" class="btn btn-primary text-white">Sell a Car</a>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="bg-light border p-0 mt-5 mt-md-0 box-shadow2">
							<div class="card-body">
								<h6 class="fs-18 mb-4">Are You Looking For A Car?</h6>
								<hr class="deep-purple  accent-2 border-success mb-4 mt-0 d-inline-block mx-auto">
								<p>it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
								<a href="#" class="btn btn-success text-white">Buy a Car</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Section-->
		<!--/Newsletter-->

	<!--How to work-->
    <section class="sptb bg-white">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="">
							<div class="mb-lg-0 mb-4">
								<div class="service-card text-center">
									<div class="bg-white icon-bg icon-service text-purple about">
										<img src="../assets/images/png/about/badge.png" alt="img">
									</div>
									<div class="servic-data mt-3">
										<h4 class="font-weight-semibold mb-2">India’s #1 <br>Auto Portal</h4>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="">
							<div class="mb-lg-0 mb-4">
								<div class="service-card text-center">
									<div class="bg-white icon-bg icon-service text-purple about">
										<img src="../assets/images/png/about/car.png" alt="img">
									</div>
									<div class="servic-data mt-3">
										<h4 class="font-weight-semibold mb-2">Secure &<br>Hassle-Free</h4>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="">
							<div class="mb-sm-0 mb-4">
								<div class="service-card text-center">
									<div class="bg-white icon-bg icon-service text-purple about">
										<img src="../assets/images/png/about/discount.png" alt="img">
									</div>
									<div class="servic-data mt-3">
										<h4 class="font-weight-semibold mb-2">Fair<br>Deals</h4>
										<!-- <p class="text-muted mb-0">Nam libero tempore, cum soluta nobis est eligendi cumque facere possimus</p> -->
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="">
							<div class="">
								<div class="service-card text-center">
									<div class="bg-white icon-bg icon-service text-purple about">
										<img src="../assets/images/png/about/double-arrow.png" alt="img">
									</div>
									<div class="servic-data mt-3">
										<h4 class="font-weight-semibold mb-2">Competitive<br>Pricing</h4>
										<!-- <p class="text-muted mb-0">Nam libero tempore, cum soluta nobis est eligendi cumque facere possimus</p> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/How to work-->

		<!--Footer Section-->
		<?php
				echo view('footer.php');
				echo view('model_view.php');

				?>
		<!--Footer Section-->

		
	</body>
</html>
