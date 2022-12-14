<!doctype html>
<html lang="en" dir="ltr">
<?php echo view('header.php'); ?>
	<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="msapplication-TileColor" content="#162946">
		<meta name="theme-color" content="#e72a1a">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="True">
		<meta name="Duplex VehiclesOptimized" content="320">
		<meta name="description" content="Car Listing,Dealer,Rental Auto Classifieds Bootstrap Modern Responsive Clean HTML Template">
		<meta name="keywords" content="autotrader,autotrader dealer portal,car classifieds,autoportal,auto classifieds,car dealer template,Autolist,vehicle sale template,car dealer website,car sale template,automotive websites,auto websites,template for selling car,automotive template,car dealer website template,automotive classifieds,car for sale template,car dealer html template,automotive template,car dealer template,car dealer website template,car service template,html template,bootstrap templates,css templates,responsive template,premium html templates,template premium">
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

		<!-- Title -->
		<title>Car Listing,Dealer,Rental Auto Classifieds Bootstrap Modern Responsive Clean HTML Template</title>

		<!-- Bootstrap Css -->
		<link href="../assets/plugins/bootstrap-4.3.1/css/bootstrap.min.css" rel="stylesheet" />

		<!-- Dashboard Css -->
		<link href="../assets/css/style.css" rel="stylesheet" />

		<!-- Font-awesome  Css -->
		<link href="../assets/css/icons.css" rel="stylesheet"/>

		<!--Select2 Plugin -->
		<link href="../assets/plugins/select2/select2.min.css" rel="stylesheet" />

		<!-- Custom scroll bar css-->
		<link href="../assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />

		<!-- jquery ui RangeSlider -->
		<link href="../assets/plugins/jquery-uislider/jquery-ui.css" rel="stylesheet">

		<!-- Color-Skins -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="../assets/color-skins/color13.css" />

	</head>
	<body>

		<!--Loader-->
	<!-- <div id="global-loader">
			<img src="../assets/images/loader.svg" class="loader-img " alt="">
		</div> <?php echo view('topbar.php'); ?><br><br><br> 

		<!--Topbar-->
		<!-- <div class="header-main">
			<div class="top-bar">
				<div class="container">
					<div class="row">
						<div class="col-xl-8 col-lg-8 col-sm-4 col-7">
							<div class="top-bar-left d-flex">
								<div class="clearfix">
									<ul class="socials">
										<li>
											<a class="social-icon text-dark" href="#"><i class="fa fa-facebook"></i></a>
										</li>
										<li>
											<a class="social-icon text-dark" href="#"><i class="fa fa-twitter"></i></a>
										</li>
										<li>
											<a class="social-icon text-dark" href="#"><i class="fa fa-linkedin"></i></a>
										</li>
										<li>
											<a class="social-icon text-dark" href="#"><i class="fa fa-google-plus"></i></a>
										</li>
									</ul>
								</div>
								<div class="clearfix">
									<ul class="contact border-left">
										<li class="mr-5 d-lg-none">
											<a href="#" class="callnumber text-dark"><span><i class="fa fa-phone mr-1"></i>: +425 345 8765</span></a>
										</li>
										<li class="select-country mr-5">
											<select class="form-control select2-flag-search" data-placeholder="Select Country">
												<option value="UM">United States of America</option>
												<option value="AF">Afghanistan</option>
												<option value="AL">Albania</option>
												<option value="AD">Andorra</option>
												<option value="AG">Antigua and Barbuda</option>
												<option value="AU">Australia</option>
												<option value="AM">Armenia</option>
												<option value="AO">Angola</option>
												<option value="AR">Argentina</option>
												<option value="AT">Austria</option>
												<option value="AZ">Azerbaijan</option>
												<option value="BA">Bosnia and Herzegovina</option>
												<option value="BB">Barbados</option>
												<option value="BD">Bangladesh</option>
												<option value="BE">Belgium</option>
												<option value="BF">Burkina Faso</option>
												<option value="BG">Bulgaria</option>
												<option value="BH">Bahrain</option>
												<option value="BJ">Benin</option>
												<option value="BN">Brunei</option>
												<option value="BO">Bolivia</option>
												<option value="BT">Bhutan</option>
												<option value="BY">Belarus</option>
												<option value="CD">Congo</option>
												<option value="CA">Canada</option>
												<option value="CF">Central African Republic</option>
												<option value="CI">Cote d'Ivoire</option>
												<option value="CL">Chile</option>
												<option value="CM">Cameroon</option>
												<option value="CN">China</option>
												<option value="CO">Colombia</option>
												<option value="CU">Cuba</option>
												<option value="CV">Cabo Verde</option>
												<option value="CY">Cyprus</option>
												<option value="DJ">Djibouti</option>
												<option value="DK">Denmark</option>
												<option value="DM">Dominica</option>
												<option value="DO">Dominican Republic</option>
												<option value="EC">Ecuador</option>
												<option value="EE">Estonia</option>
												<option value="ER">Eritrea</option>
												<option value="ET">Ethiopia</option>
												<option value="FI">Finland</option>
												<option value="FJ">Fiji</option>
												<option value="FR">France</option>
												<option value="GA">Gabon</option>
												<option value="GD">Grenada</option>
												<option value="GE">Georgia</option>
												<option value="GH">Ghana</option>
												<option value="GH">Ghana</option>
												<option value="HN">Honduras</option>
												<option value="HT">Haiti</option>
												<option value="HU">Hungary</option>
												<option value="ID">Indonesia</option>
												<option value="IE">Ireland</option>
												<option value="IL">Israel</option>
												<option value="IN">India</option>
												<option value="IQ">Iraq</option>
												<option value="IR">Iran</option>
												<option value="IS">Iceland</option>
												<option value="IT">Italy</option>
												<option value="JM">Jamaica</option>
												<option value="JO">Jordan</option>
												<option value="JP">Japan</option>
												<option value="KE">Kenya</option>
												<option value="KG">Kyrgyzstan</option>
												<option value="KI">Kiribati</option>
												<option value="KW">Kuwait</option>
												<option value="KZ">Kazakhstan</option>
												<option value="LA">Laos</option>
												<option value="LB">Lebanons</option>
												<option value="LI">Liechtenstein</option>
												<option value="LR">Liberia</option>
												<option value="LS">Lesotho</option>
												<option value="LT">Lithuania</option>
												<option value="LU">Luxembourg</option>
												<option value="LV">Latvia</option>
												<option value="LY">Libya</option>
												<option value="MA">Morocco</option>
												<option value="MC">Monaco</option>
												<option value="MD">Moldova</option>
												<option value="ME">Montenegro</option>
												<option value="MG">Madagascar</option>
												<option value="MH">Marshall Islands</option>
												<option value="MK">Macedonia (FYROM)</option>
												<option value="ML">Mali</option>
												<option value="MM">Myanmar (formerly Burma)</option>
												<option value="MN">Mongolia</option>
												<option value="MR">Mauritania</option>
												<option value="MT">Malta</option>
												<option value="MV">Maldives</option>
												<option value="MW">Malawi</option>
												<option value="MX">Mexico</option>
												<option value="MZ">Mozambique</option>
												<option value="NA">Namibia</option>
												<option value="NG">Nigeria</option>
												<option value="NO">Norway</option>
												<option value="NP">Nepal</option>
												<option value="NR">Nauru</option>
												<option value="NZ">New Zealand</option>
												<option value="OM">Oman</option>
												<option value="PA">Panama</option>
												<option value="PF">Paraguay</option>
												<option value="PG">Papua New Guinea</option>
												<option value="PH">Philippines</option>
												<option value="PK">Pakistan</option>
												<option value="PL">Poland</option>
												<option value="QA">Qatar</option>
												<option value="RO">Romania</option>
												<option value="RU">Russia</option>
												<option value="RW">Rwanda</option>
												<option value="SA">SInterstate Arabia</option>
												<option value="SB">Solomon Islands</option>
												<option value="SC">Seychelles</option>
												<option value="SD">Sudan</option>
												<option value="SE">Sweden</option>
												<option value="SG">Singapore</option>
												<option value="TG">Togo</option>
												<option value="TH">Thailand</option>
												<option value="TJ">Tajikistan</option>
												<option value="TL">Timor-Leste</option>
												<option value="TM">Turkmenistan</option>
												<option value="TN">Tunisia</option>
												<option value="TO">Tonga</option>
												<option value="TR">Turkey</option>
												<option value="TT">Trinidad and Tobago</option>
												<option value="TW">Taiwan</option>
												<option value="UA">Ukraine</option>
												<option value="UG">Uganda</option>
												<option value="UY">Uruguay</option>
												<option value="UZ">Uzbekistan</option>
												<option value="VA">Vatican City (Holy See)</option>
												<option value="VE">Venezuela</option>
												<option value="VN">Vietnam</option>
												<option value="VU">Vanuatu</option>
												<option value="YE">Yemen</option>
												<option value="ZM">Zambia</option>
												<option value="ZW">Zimbabwe</option>
											</select>
										</li> -->
										<!-- <li class="dropdown mr-5">
											<a href="#" class="text-dark" data-toggle="dropdown"><span> Language <i class="fa fa-caret-down text-muted"></i></span> </a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
												<a href="#" class="dropdown-item" >
													English
												</a>
												<a class="dropdown-item" href="#">
													Arabic
												</a>
												<a class="dropdown-item" href="#">
													German
												</a>
												<a href="#" class="dropdown-item" >
													Greek
												</a>
												<a href="#" class="dropdown-item" >
													Vehiclenish
												</a>
											</div>
										</li>
										<li class="dropdown">
											<a href="#" class="text-dark" data-toggle="dropdown"><span>Currency <i class="fa fa-caret-down text-muted"></i></span></a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
												<a href="#" class="dropdown-item" >
													USD
												</a>
												<a class="dropdown-item" href="#">
													EUR
												</a>
												<a class="dropdown-item" href="#">
													INR
												</a>
												<a href="#" class="dropdown-item" >
													GBP
												</a>
											</div>
										</li> -->
									<!-- </ul>
								</div>
							</div>
						</div>
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
								</ul> -->
							<!-- </div>
						</div>
					</div>
				</div>
			</div> -->

			<!-- Horizontal Header -->
			<div class="horizontal-header clearfix ">
				<div class="container">
					<a id="horizontal-navtoggle" class="animated-arrow"><span></span></a>
					<span class="smllogo"><img src="../assets/images/brand/logo.png" width="120" alt=""/></span>
					<a href="tel:245-6325-3256" class="callusbtn"><i class="fa fa-phone" aria-hidden="true"></i></a>
				</div>
			</div>
			<!-- /Horizontal Header -->

			<!-- Horizontal Main -->
			<!-- <div class="horizontal-main bg-dark-transparent clearfix">
				<div class="horizontal-mainwrapper container clearfix"> -->
					<!-- <div class="desktoplogo">
						<a href="index.html"><img src="../assets/images/brand/logo1.png" alt=""></a>
					</div> -->
					<!-- <div class="desktoplogo-1">
						<a href="index.html"><img src="../assets/images/brand/logo.png" alt=""></a>
					</div> -->
					<!-- Nav -->
					<!-- <nav class="horizontalMenu clearfix d-md-flex">
						<ul class="horizontalMenu-list">
							<li aria-haspopup="true"><a href="#">Home <span class="fa fa-caret-down m-0"></span></a> -->
								<!-- <ul class="sub-menu">
									<li aria-haspopup="true"><a href="index.html">Home-default</a></li>
									<li aria-haspopup="true"><a href="cars-text.html">Home Text</a></li>
									<li aria-haspopup="true"><a href="cars-slides.html">Home Slides</a></li>
									<li aria-haspopup="true"><a href="cars-video.html">Home Video</a></li>
									<li aria-haspopup="true"><a href="cars-animation.html">Home Animation </a></li>
									<li aria-haspopup="true"><a href="cars-map.html">Home Map</a></li>
									<li aria-haspopup="true"><a href="banner.html">Home Banner</a></li>
									<li aria-haspopup="true"><a href="intro-page.html">Home Intro Page</a></li>
									<li aria-haspopup="true"><a href="popup-login.html">Home Pop-up login</a></li>
									<li aria-haspopup="true"><a href="car-auction.html">Car Auction</a></li>
									<li aria-haspopup="true"><a href="car-rental.html">Car Rental</a></li>
									<li aria-haspopup="true"><a href="car-parts.html">Car Spare Parts</a></li>
									<li aria-haspopup="true"><a href="car-service.html">Car Services</a></li>
								</ul> -->
							<!-- </li> -->
							<!-- <li aria-haspopup="true"><a href="about.html">About Us </a></li>
							<li aria-haspopup="true"><a href="widgets.html">Widgets</a></li>
							<li aria-haspopup="true"><a href="#" class="active">Pages <span class="fa fa-caret-down m-0"></span></a> -->
								<div class="horizontal-megamenu clearfix">
									<div class="container">
										<div class="megamenu-content">
											<div class="row">
												<!-- <ul class="col link-list">
													<li class="title">Listing pages</li>
													<li><a href="cars-list.html">Cars List</a></li>
													<li><a href="cars-list-right.html">Cars List Right</a></li>
													<li><a href="cars-list-map.html">Cars Map list</a></li>
													<li><a href="cars-list-map2.html">Cars Map list 02</a></li>
													<li><a href="cars-list-map3.html">Cars Map style 03</a></li>
													<li><a href="cars-auction-list.html">Cars Auction List</a></li>
													<li><a href="cars-rental-list.html">Cars Rental List</a></li>
													<li><a href="cars-parts-list.html">Cars Parts List</a></li>
													<li><a href="cars-service-list.html">Cars Service List</a></li>
													<li><a href="ad-list.html">Ad Listing</a></li>
													<li><a href="ad-list-right.html">Ad Listing Right</a></li>
												</ul> -->

												<!-- <ul class="col link-list">
													<li class="title">Details & Post pages</li>
													<li><a href="cars.html">Cars Details Left</a></li>
													<li><a href="cars-right.html">Cars Details  Right </a></li>
													<li><a href="car-details.html">Cars Details 01</a></li>
													<li><a href="car-details2.html">Cars Details 02 </a></li>
													<li><a href="car-details3.html">Cars Details 03 </a></li>
													<li><a href="ad-details.html">Ad Details</a></li>
													<li><a href="ad-details-right.html">Ad Details Right</a></li>
													<li><a href="car-compare.html">Car Compare Detials</a></li>
													<li><a href="cars-auction-detail.html">Car Auction Details</a></li>
													<li><a href="cars-rental-detial.html">Car Rental Details</a></li>
													<li><a href="cars-parts-detail.html">Car Parts Detail</a></li>
													<li><a href="cars-services-detail.html">Car Services Details</a></li>
												</ul> -->
												<!-- <ul class="col link-list">
													<li class="title">Dashboard pages</li>
													<li><a href="mydash.html">My Dashboard</a></li>
													<li><a href="myads.html">Ads</a></li>
													<li><a href="myfavorite.html">Favorite Ads</a></li>
													<li><a href="managed.html">Managed Ads</a></li>
													<li><a href="payments.html">Payments</a></li>
													<li><a href="orders.html"> Orders</a></li>
													<li><a href="settings.html"> Settings</a></li>
													<li><a href="tips.html">Tips</a></li>
													<li class="title mt-4">Other Element pages</li>
													<li><a href="categories.html">Categories</a></li>
													<li><a href="inovice.html">Invoice</a></li>
													<li><a href="usersall.html">User Lists</a></li>
													<li><a href="pricing.html">Pricing</a></li>
												</ul> -->
												<!-- <ul class="col link-list">
													<li class="title">User pages</li>
													<li><a href="underconstruction.html">Under Construction</a></li>
													<li><a href="404.html">404</a></li>
													<li><a href="register.html">Register</a></li>
													<li><a href="login.html">Login</a></li>
													<li><a href="login-2.html">Login 02</a></li>
													<li><a href="forgot.html">Forgot Password</a></li>
													<li><a href="lockscreen.html">Lock Screen</a></li>
													<li class="title mt-4">Profile pages</li>
													<li><a href="userprofile.html"> User Profile</a></li>
													<li><a href="personal-blog.html"> Personal Blog</a></li>
													<li class="title mt-4">Post pages</li>
													<li><a href="ad-posts.html">Ad Posts</a></li>
													<li><a href="ad-posts2.html">Ad Posts2</a></li>
												</ul> -->
												<!-- <ul class="col link-list">
													<li class="title">Header& Footer pages</li>
													<li><a href="header-style1.html">Header Style 01</a></li>
													<li><a href="header-style2.html">Header Style 02</a></li>
													<li><a href="header-style3.html">Header Style 03</a></li>
													<li><a href="header-style4.html">Header Style 04</a></li>
													<li><a href="header-style5.html">Header Style 05</a></li>
													<li><a href="footer-style.html">Footer Style 01</a></li>
													<li><a href="footer-style2.html">Footer Style 02</a></li>
													<li><a href="footer-style3.html">Footer Style 03</a></li>
													<li><a href="footer-style4.html">Footer Style 04</a></li>
													<li class="title mt-4">Other Element pages</li>
													<li><a href="typography.html">Typography</a></li>
													<li><a href="faq.html">Faq</a></li>
													<li><a href="testimonial.html">Testimonial</a></li>
												</ul> -->
											<!-- </div> -->
										<!-- </div> -->
									<!-- </div>
								</div> -->
							<!-- </li> -->
							<!-- <li aria-haspopup="true"><a href="#">Cars <span class="fa fa-caret-down m-0"></span></a>
								<div class="horizontal-megamenu clearfix car-brands">
									<div class="container">
										<div class="megamenu-content overflow-hidden"> -->
											<!-- <div class="row"> -->
												<!-- <ul class="col-lg-6 link-list">
													<li class="title">Car Body Shapes</li>
													<li>
														<div class="row">
															<div class="col-xl-4 col-md-6 text-center">
																<a href="#"><img src="../assets/images/media/figure/1.png" alt=""></a>
																<h4 class="mb-0 font-weight-bold text-uppercase">Convertible</h4>
															</div>
															<div class="col-xl-4 col-md-6 text-center">
																<a href="#"><img src="../assets/images/media/figure/2.png" alt=""></a>
																<h4 class="mb-0 font-weight-bold text-uppercase">Coupe</h4>
															</div>
															<div class="col-xl-4 col-md-6 text-center">
																<a href="#"><img src="../assets/images/media/figure/3.png" alt=""></a>
																<h4 class="mb-0 font-weight-bold text-uppercase">Ringer Ace</h4>
															</div>
															<div class="col-xl-4 col-md-6 text-center">
																<a href="#"><img src="../assets/images/media/figure/4.png" alt=""></a>
																<h4 class="mb-0 font-weight-bold text-uppercase">Van/minivan</h4>
															</div>
															<div class="col-xl-4 col-md-6 text-center">
																<a href="#"><img src="../assets/images/media/figure/5.png" alt=""></a>
																<h4 class="mb-0 font-weight-bold text-uppercase">Truck</h4>
															</div>
															<div class="col-xl-4 col-md-6 text-center">
																<a href="#"><img src="../assets/images/media/figure/6.png" alt=""></a>
																<div class="clearfix"></div>
																<h4 class="mb-0 font-weight-bold text-uppercase">Hybrid</h4>
															</div>
														</div>
													</li>
												</ul> -->
												<!-- <ul class="col-lg-6 link-list mt-3 mt-md-0 top-brands">
													<li class="title">Top Car Brands</li>
													<li class="mt-4">
														<div class="row">
															<div class="col-lg col-sm-6">
																<div class="card border-2 box-shadow2">
																	<a href="#" class="cat-img mx-auto text-center bg-transparent"><img src="../assets/images/png/categories/28.png" class="w-80" alt=""></a>
																</div>
															</div>
															<div class="col-lg col-sm-6">
																<div class="card border-2 mx-auto box-shadow2">
																	<a href="#" class="cat-img mx-auto text-center bg-transparent"><img src="../assets/images/png/categories/53.png" class="w-80" alt=""></a>
																</div>
															</div>
															<div class="col-lg col-sm-6">
																<div class="card border-2 mx-auto box-shadow2">
																	<a href="#" class="cat-img mx-auto text-center bg-transparent"><img src="../assets/images/png/categories/42.png" class="w-80" alt=""></a>
																</div>
															</div>
															<div class="col-lg col-sm-6">
																<div class="card border-2 mx-auto box-shadow2">
																	<a href="#" class="cat-img mx-auto text-center bg-transparent"><img src="../assets/images/png/categories/34.png" class="w-80" alt=""></a>
																</div>
															</div>
															<div class="col-lg col-sm-12">
																<div class="card border-2 mx-auto box-shadow2">
																	<a href="#" class="cat-img mx-auto text-center bg-transparent"><img src="../assets/images/png/categories/30.png" class="w-80" alt=""></a>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-lg col-sm-6">
																<div class="card border-2 d-block box-shadow2">
																	<a href="#" class="cat-img mx-auto text-center bg-transparent"><img src="../assets/images/png/categories/51.png" class="w-80" alt=""></a>
																</div>
															</div>
															<div class="col-lg col-sm-6">
																<div class="card border-2 mx-auto box-shadow2">
																	<a href="#" class="cat-img mx-auto text-center bg-transparent"><img src="../assets/images/png/categories/26.png" class="w-80" alt=""></a>
																</div>
															</div>
															<div class="col-lg col-sm-6">
																<div class="card border-2 mx-auto box-shadow2">
																	<a href="#" class="cat-img mx-auto text-center bg-transparent"><img src="../assets/images/png/categories/31.png" class="w-80" alt=""></a>
																</div>
															</div>
															<div class="col-lg col-sm-6">
																<div class="card border-2 mx-auto box-shadow2">
																	<a href="#" class="cat-img mx-auto text-center bg-transparent"><img src="../assets/images/png/categories/01.png" class="w-80" alt=""></a>
																</div>
															</div>
															<div class="col-lg col-sm-12">
																<div class="card border-2 mx-auto box-shadow2">
																	<a href="#" class="cat-img mx-auto text-center bg-transparent"><img src="../assets/images/png/categories/41.png" class="w-80" alt=""></a>
																</div>
															</div>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li> -->
							<!-- <li aria-haspopup="true"><a href="#">Blog <span class="fa fa-caret-down m-0"></span></a>
								<ul class="sub-menu">
									<li aria-haspopup="true"><a href="#">Blog Grid <i class="fa fa-angle-right float-right mt-1 d-none d-lg-block"></i></a>
										 <ul class="sub-menu">
											<li aria-haspopup="true"><a href="blog-grid.html">Blog Grid Left</a></li>
											<li aria-haspopup="true"><a href="blog-grid-right.html">Blog Grid Right</a></li>
											<li aria-haspopup="true"><a href="blog-grid-center.html">Blog Grid Center</a></li>
										</ul>
									</li>
									<li aria-haspopup="true"><a href="#">Blog List <i class="fa fa-angle-right float-right mt-1 d-none d-lg-block"></i></a>
										 <ul class="sub-menu">
											<li aria-haspopup="true"><a href="blog-list.html">Blog List Left</a></li>
											<li aria-haspopup="true"><a href="blog-list-right.html">Blog List Right</a></li>
											<li aria-haspopup="true"><a href="blog-list-center.html">Blog List Center</a></li>
										</ul>
									</li>
									<li aria-haspopup="true"><a href="#">Blog Details <i class="fa fa-angle-right float-right mt-1 d-none d-lg-block"></i></a>
										<ul class="sub-menu">
											<li aria-haspopup="true"><a href="blog-details.html">Blog Details Left</a></li>
											<li aria-haspopup="true"><a href="blog-details-right.html">Blog Details Right</a></li>
											<li aria-haspopup="true"><a href="blog-details-center.html">Blog Details Center</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li aria-haspopup="true"><a href="contact.html"> Contact Us <span class="horizontalarrow"></span></a></li>
							<li aria-haspopup="true" class="d-lg-none mt-5 pb-5 mt-lg-0">
								<span><a class="btn btn-orange" href="ad-posts.html"><i class="fa fa-car text-white mr-1"></i> Sell Your Car</a></span>
							</li>
						</ul>
						<ul class="mb-0">
							<li aria-haspopup="true" class="mt-5 d-none d-lg-block ">
								<span><a class="btn btn-green ad-post " href="ad-posts.html"><i class="fa fa-car text-white mr-1"></i> Sell Your Car</a></span>
							</li>
						</ul>
					</nav> -->
					<!--Nav-->
				<!-- </div> -->
			<!-- </div> -->
			<!-- /Horizontal Main -->
		<!-- </div> -->
		<!--/Topbar-->

		<!--Section-->
		<!-- <div>
			<div class="cover-image sptb-1 bg-background" data-image-src="../assets/images/banners/banner1.jpg">
				<div class="header-text1 mb-0">
					<div class="container">
						<div class="row">
							<div class="col-xl-10 col-lg-12 col-md-12 d-block mx-auto">
								<div class="text-center text-white ">
									<h1 class=""><span class="font-weight-bold">16,25,365&nbsp;</span>Offered Cars Available</h1>
								</div>
								<div class="search-background bg-transparent mt-5">
									<div class="form row no-gutters ">
										<div class="form-group  col-xl-4 col-lg-3 col-md-12 mb-0 bg-white ">
											<input type="text" class="form-control input-lg br-tr-md-0 br-br-md-0 border-right-0" id="text4" placeholder="Search Product">
										</div>
										<div class="form-group  col-xl-3 col-lg-3 col-md-12 mb-0 bg-white">
											<input type="text" class="form-control input-lg br-md-0" id="text5" placeholder="Enter Location">
											<span><i class="fa fa-map-marker location-gps mr-1"></i> </span>
										</div> -->
										<!-- <div class="form-group col-xl-3 col-lg-3 col-md-12 select2-lg  mb-0 bg-white">
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
										</div> -->
										<!-- <div class="col-xl-2 col-lg-3 col-md-12 mb-0">
											<a href="#" class="btn btn-lg btn-block btn-primary br-tl-md-0 br-bl-md-0 right-0">Search Here</a>
										</div>
									</div> -->
								</div>
							</div>
						</div>
					</div>
				</div><!-- /header-text -->
			</div>
		</div>
		<!--Section-->

		<!-- Breadcrumb
		<div class="bg-white border-bottom">
			<div class="container">
				<div class="page-header">
					<h4 class="page-title">Cars list</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item"><a href="#">Pages</a></li>
						<li class="breadcrumb-item active" aria-current="page">Cars list</li>
					</ol>
				</div>
			</div>
		</div> -->
		<!--/Breadcrumb-->

		<!--listing-->
		<section class="sptb">
			<div class="container">
				<div class="row">
					<div class="col-xl-9 col-lg-9 col-md-12">
						<!--Lists-->
						<!-- <hr> -->
			<h3 class="">Feature Cars</h3>
			<hr>
			<div class="row">
				<div class="col-lg-6 col-md-12 col-xl-4">
					<div class="card">
						<div class="item-card2-img">
							<a href="widgets.html"></a>
							<img src="../assets/images/media/j3.png" alt="img" class="cover-image">
						</div>
						<div class="item-card2-icons">
							<a href="#" class="item-card2-icons-r bg-secondary"> <i class="fa fa fa-heart"></i></a>
							<a href="#" class="item-card2-icons-l bg-primary"> <i class="fa fa-car"></i></a>
						</div>
						<div class="card-body">
							<div class="item-card2">
								<div class="item-card2-desc">
									<h4 class="font-weight-semibold"> First Car</h4>
									<p>99  Cars Available</p><a href="#" class="location"><i class="fa fa-map-marker text-muted mr-1"></i> IND</a>
									
									<a href="#" class="btn btn-primary"style="margin-left:20%;">Contact Dealer</a>
								</div>
							</div>
						</div>
						<!-- <div class="card-footer">
							<div class="item-card2-footer d-flex">
								<!-- <div class="item-card2-rating">
									<a href="#"><i class="fa fa-star text-warning"></i></a>
									<a href="#"><i class="fa fa-star text-warning"></i></a>
									<a href="#"><i class="fa fa-star text-warning"></i></a>
									<a href="#"><i class="fa fa-star text-warning"></i></a>
									<a href="#"><i class="fa fa-star-half-o text-warning mr-1"></i>(78 reviews)</a>
								</div> -->
								<!-- <div class="ml-auto">
									<a href="#" class="location"><i class="fa fa-map-marker text-muted mr-1"></i> USA</a>
								</div>
							</div>
						</div> --> 
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-xl-4">
					<div class="card">
						<div class="item-card2-img">
							<a href="widgets.html"></a>
							<img src="../assets/images/media/h6.png" alt="img" class="cover-image">
						</div>
						<div class="item-card2-icons">
							<a href="#" class="item-card2-icons-r bg-secondary"> <i class="fa fa fa-heart"></i></a>
							<a href="#" class="item-card2-icons-l bg-primary"> <i class="fa fa-car"></i></a>
						</div>
						<div class="card-body">
							<div class="item-card2">
								<div class="item-card2-desc">
									<h4 class="font-weight-semibold">Cauvery Cars</h4>
									<p>76  Cars Available</p><a href="#" class="location"><i class="fa fa-map-marker text-muted mr-1"></i>IND</a>

									<a href="#" class="btn btn-primary"style="margin-left:20%;">Contact Dealer</a>
								</div>
							</div>
						</div>
						<!-- <div class="card-footer">
							<div class="item-card2-footer d-flex">
								<div class="item-card2-rating">
									<a href="#"><i class="fa fa-star text-warning"></i></a>
									<a href="#"><i class="fa fa-star text-warning"></i></a>
									<a href="#"><i class="fa fa-star text-warning"></i></a>
									<a href="#"><i class="fa fa-star text-warning"></i></a>
									<a href="#"><i class="fa fa-star text-warning mr-1"></i>(145 reviews)</a>
								</div>
								<div class="ml-auto">
									<a href="#" class="location"><i class="fa fa-map-marker text-muted mr-1"></i> Los AnglesVehicles</a>
								</div>
							</div>
						</div> -->
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-xl-4">
					<div class="card">
						<div class="item-card2-img">
							<a href="widgets.html"></a>
							<img src="../assets/images/media/l1.png" alt="img" class="cover-image">
						</div>
						<div class="item-card2-icons">
							<a href="#" class="item-card2-icons-r bg-secondary"> <i class="fa fa fa-heart"></i></a>
							<a href="#" class="item-card2-icons-l bg-primary"> <i class="fa fa-car"></i></a>
						</div>
						<div class="card-body">
							<div class="item-card2">
								<div class="item-card2-desc">
									<h4 class="font-weight-semibold"> Caledonia</h4>
									<p>8  Cars Available</p><a href="#" class="location"><i class="fa fa-map-marker text-muted mr-1"></i> IND</a>
									<a href="#" class="btn btn-primary"style="margin-left:20%;">Contact Dealer</a>
								</div>
							</div>
						</div>
						<!-- <div class="card-footer">
							<div class="item-card2-footer d-flex">
								<div class="item-card2-rating">
									<a href="#"><i class="fa fa-star text-warning"></i></a>
									<a href="#"><i class="fa fa-star text-warning"></i></a>
									<a href="#"><i class="fa fa-star text-warning"></i></a>
									<a href="#"><i class="fa fa-star text-warning"></i></a>
									<a href="#"><i class="fa fa-star-half-o text-warning mr-1"></i>(46 reviews)</a>
								</div>
								<div class="ml-auto">
									<a href="#" class="location"><i class="fa fa-map-marker text-muted mr-1"></i> San Francisco</a>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</div>
			<hr>

			
			<div class="row">
				<div class="col-lg-6 col-md-12 col-xl-4">
					<div class="card">
						<div class="item-card2-img">
							<a href="widgets.html"></a>
							<img src="../assets/images/media/j3.png" alt="img" class="cover-image">
						</div>
						<div class="item-card2-icons">
							<a href="#" class="item-card2-icons-r bg-secondary"> <i class="fa fa fa-heart"></i></a>
							<a href="#" class="item-card2-icons-l bg-primary"> <i class="fa fa-car"></i></a>
						</div>
						<div class="card-body">
							<div class="item-card2">
								<div class="item-card2-desc">
									<h4 class="font-weight-semibold"> Monastery</h4>
									<p>8  Cars Available</p><a href="#" class="location"><i class="fa fa-map-marker text-muted mr-1"></i>IND</a>
									<a href="#" class="btn btn-primary"style="margin-left:20%;">Contact Dealer</a>
								</div>
							</div>
						</div>
						<!-- <div class="card-footer">
							<div class="item-card2-footer d-flex">
								<div class="item-card2-rating">
									<a href="#"><i class="fa fa-star text-warning"></i></a>
									<a href="#"><i class="fa fa-star text-warning"></i></a>
									<a href="#"><i class="fa fa-star text-warning"></i></a>
									<a href="#"><i class="fa fa-star text-warning"></i></a>
									<a href="#"><i class="fa fa-star-half-o text-warning mr-1"></i>(78 reviews)</a>
								</div>
								<div class="ml-auto">
									<a href="#" class="location"><i class="fa fa-map-marker text-muted mr-1"></i> USA</a>
								</div>
							</div>
						</div> -->
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-xl-4">
					<div class="card">
						<div class="item-card2-img">
							<a href="widgets.html"></a>
							<img src="../assets/images/media/h6.png" alt="img" class="cover-image">
						</div>
						<div class="item-card2-icons">
							<a href="#" class="item-card2-icons-r bg-secondary"> <i class="fa fa fa-heart"></i></a>
							<a href="#" class="item-card2-icons-l bg-primary"> <i class="fa fa-car"></i></a>
						</div>
						<div class="card-body">
							<div class="item-card2">
								<div class="item-card2-desc">
									<h4 class="font-weight-semibold">Vagabond</h4>
									<p>8  Cars Available</p><a href="#" class="location"><i class="fa fa-map-marker text-muted mr-1"></i> IND</a>
									<a href="#" class="btn btn-primary"style="margin-left:20%;">Contact Dealer</a>
								</div>
							</div>
						</div>
						<!-- <div class="card-footer">
							<div class="item-card2-footer d-flex">
								<div class="item-card2-rating">
									<a href="#"><i class="fa fa-star text-warning"></i></a>
									<a href="#"><i class="fa fa-star text-warning"></i></a>
									<a href="#"><i class="fa fa-star text-warning"></i></a>
									<a href="#"><i class="fa fa-star text-warning"></i></a>
									<a href="#"><i class="fa fa-star text-warning mr-1"></i>(145 reviews)</a>
								</div>
								<div class="ml-auto">
									<a href="#" class="location"><i class="fa fa-map-marker text-muted mr-1"></i> Los AnglesVehicles</a>
								</div>
							</div>
						</div> -->
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-xl-4">
					<div class="card">
						<div class="item-card2-img">
							<a href="widgets.html"></a>
							<img src="../assets/images/media/l1.png" alt="img" class="cover-image">
						</div>
						<div class="item-card2-icons">
							<a href="#" class="item-card2-icons-r bg-secondary"> <i class="fa fa fa-heart"></i></a>
							<a href="#" class="item-card2-icons-l bg-primary"> <i class="fa fa-car"></i></a>
						</div>
						<div class="card-body">
							<div class="item-card2">
								<div class="item-card2-desc">
									<h4 class="font-weight-semibold"> Caledonia</h4>
									<p>8  Cars Available</p><a href="#" class="location"><i class="fa fa-map-marker text-muted mr-1"></i> IND</a>
									<a href="#" class="btn btn-primary"style="margin-left:20%;">Contact Dealer</a>
								</div>
							</div>
						</div>
						<!-- <div class="card-footer">
							<div class="item-card2-footer d-flex">
								<div class="item-card2-rating">
									<a href="#"><i class="fa fa-star text-warning"></i></a>
									<a href="#"><i class="fa fa-star text-warning"></i></a>
									<a href="#"><i class="fa fa-star text-warning"></i></a>
									<a href="#"><i class="fa fa-star text-warning"></i></a>
									<a href="#"><i class="fa fa-star-half-o text-warning mr-1"></i>(46 reviews)</a>
								</div>
								<div class="ml-auto">
									<a href="#" class="location"><i class="fa fa-map-marker text-muted mr-1"></i> San Francisco</a>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</div>
			<hr>
						
							 <div class="center-block text-center">
									<ul class="pagination mb-3">
										<li class="page-item page-prev disabled">
											<a class="page-link" href="#" tabindex="-1">Prev</a>
										</li>
										<li class="page-item active"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item page-next">
											<a class="page-link" href="#">Next</a>
										</li>
									</ul>
								</div> 
							<!-- </div> -->
						<!-- </div> -->
						<!--/Lists-->
					<!-- </div> -->

					<!--Right Side Content-->
				
					<!--/Right Side Content-->
				</div>
			</div>
		</section>
		<!--/Listing-->

		<section class="sptb bg-white">
			<div class="container">
            <div class="card">
            <div class="card-body">
				<div class="section-title center-block text-center">
					<h2>Used cars In top Cities In India</h2>
					<p>Get high quality used car in your city</p>
				</div>
				<div class="row">
					<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
						<a href="cars-list.html" class="top-cities card text-center mb-5 bg-primary-transparent box-shadow2">
							<img src="../assets/images/media/cities/mumbai-web.png" alt="img" class="w-80">
							<div class="servic-data mt-3">
								<h4 class="font-weight-semibold mb-0 text-primary">Mumbai</h4>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
						<a href="cars-list.html" class="top-cities card text-center mb-lg-0 bg-secondary-transparent box-shadow2">
							<img src="../assets/images/media/cities/Delhi.png" alt="img" class="w-80">
							<div class="servic-data mt-3">
								<h4 class="font-weight-semibold mb-0 text-secondary">Delhi</h4>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
						<a href="cars-list.html" class="top-cities card text-center mb-lg-0 bg-success-transparent box-shadow2">
							<img src="../assets/images/media/cities/mumbai-web.png" alt="img" class="w-80">
							<div class="servic-data mt-3">
								<h4 class="font-weight-semibold mb-0 text-success">Chennai</h4>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
						<a href="cars-list.html" class="top-cities card text-center mb-lg-0 bg-danger-transparent box-shadow2">
							<img src="../assets/images/media/cities/mumbai-web.png" alt="img" class="w-80">
							<div class="servic-data mt-3">
								<h4 class="font-weight-semibold mb-0 text-danger">Delhi</h4>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
						<a href="cars-list.html" class="top-cities card text-center mb-sm-0 bg-purple-transparent box-shadow2">
							<img src="../assets/images/media/cities/mumbai-web.png" alt="img" class="w-80">
							<div class="servic-data mt-3">
								<h4 class="font-weight-semibold mb-0 text-purple">Hyderabad</h4>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
						<a href="cars-list.html" class="top-cities card text-center mb-0 bg-info-transparent box-shadow2">
							<img src="../assets/images/media/cities/mumbai-web.png" alt="img" class="w-80">
							<div class="servic-data mt-3">
								<h4 class="font-weight-semibold mb-0 text-info">Goa</h4>
							</div>
						</a>
					</div>
				</div>
			</div>
		</section>
		<!--Section-->
		

		<!-- Newsletter-->
		
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
		<!--/Newsletter-->

		<!-- Recent Post-->
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
		<!-- Recent Post-->

		<!--Footer Section-->
	<?php
				echo view('footer.php');
				echo view('model_view.php');

				?>
	</body>
</html>
