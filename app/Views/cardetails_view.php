<!doctype html>
<html class="no-js" lang="en">
<?php echo view('header.php'); ?>

<body>
	<?php echo view('topbar.php'); ?>

	<br>



	<section class="sptb detils-sptb">
		<div id="main-content" class="container">
			<div class="row">
				<div class="col-xl-8 col-lg-8 col-md-12 product-left">
					<!--Classified Description-->
					<div class="card overflow-hidden">
						<!-- <div class="ribbon ribbon-top-right text-danger"><span class="bg-danger">Offer</span></div> -->
						<div class="card-body">
							<div class="item-det mb-5"><br>
								<a href="#" class="text-dark">
									<h3><?php echo $product[0]['product_name']; ?></h3>
								</a>
								<div class=" d-flex">
									<ul class="d-flex mb-0">
										<li class="mr-5"><a href="#" class="icons"><i class="ti-car text-muted mr-1 fs-18"></i> <?php echo $product[0]['product_category']; ?></a></li>
										<li class="mr-5"><a href="#" class="icons"><i class="ti-location-pin text-muted mr-1"></i> India</a></li>
										<li class="mr-5"><a href="#" class="icons"><i class="ti-calendar text-muted mr-1"></i> 5 hours ago</a></li>
										<!--li class="mr-5"><a href="#" class="icons"><i class="ti-eye text-muted mr-1 fs-15"></i> 765</a></li-->
									</ul>

									<!--div class="rating-stars d-flex">
										<div class="rating-stars-container mr-2">
											<div class="rating-star sm">
												<i class="fa fa-heart"></i>
											</div>
										</div> 
									</div-->
								</div>
							</div>
							<div class="product-slider">
								<div id="carousel" class="carousel slide" data-ride="carousel">
									<!-- <div class="arrow-ribbon2 bg-primary">₹ 5,00,000</div> -->
									<div class="carousel-inner">
										<?php
										echo '<div class="carousel-item active"> <img src="' . URL_IMAGES_MEDIA . strtolower($product[0]['product_category']) . URL_SEPARATOR . $product['image'][0]['product_image'] . '" alt="img"> </div>';
										foreach ($product['image'] as $k => $image) {
											if ($k < 1) continue;
											echo '<div class="carousel-item"> <img src="' . URL_IMAGES_MEDIA . strtolower($product[0]['product_category']) . URL_SEPARATOR . $image['product_image'] . '" alt="img"> </div>';
										}
										?>
									</div>
									<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
										<i class="fa fa-angle-left" aria-hidden="true"></i>
									</a>
									<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
										<i class="fa fa-angle-right" aria-hidden="true"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="border-0">
							<div class="row">
								<div class="col-md-12">
									<div class="panel-group1" id="accordion2">
										<!-- PRoduct Overview -->
										<div class="panel panel-default">
											<div class="panel-heading1 ">
												<h4 class="panel-title1">
													<a class="accordion-toggle collapsed border" data-toggle="collapse" data-parent="#accordion2" href="#car-overview-1" aria-expanded="false">Overview</a>
												</h4>
											</div>
											<div id="car-overview-1" class="accordion" role="tabpanel" aria-expanded="false">
												<div class="panel-body border border-top-0 bg-white">
													<div class="table-responsive">
														<div class="container">
															<div class="row">
																<div class="col-xl-12 col-lg-12 col-sm-12 col-12">
																	<div class="row">
																		<?php
																		unset($product['overview']->id, $product['overview']->pro_id, $product['overview']->deleted);
																		foreach ($product['overview'] as $overviewKey => $overviewVal) {
																		?>
																			<div class="col-xl-4 col-lg-4 col-sm-4 col-4">
																				<dl class="card-text">
																					<dt><?php echo str_replace('_', ' ', ucwords($overviewKey)); ?></dt>
																					<dd><?php echo ($overviewVal != '') ? ucwords($overviewVal) : 'NA'; ?></dd>
																				</dl>
																			</div>
																		<?php } ?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- PRoduct Overview -->

										<!-- PRoduct Benifit -->
										<div class="panel panel-default">
											<div class="panel-heading1">
												<h4 class="panel-title1">
													<a class="accordion-toggle collapsed border border-top-0" data-toggle="collapse" data-parent="#accordion2" href="#car-comapre-2" aria-expanded="false">Used Car Benefits</a>
												</h4>
											</div>
											<div id="car-comapre-2" class="panel-collapse collapse " role="tabpanel" aria-expanded="false">
												<div class="panel-body border border-top-0">
													<div class="table-responsive">
														<div class="container">
															<div class="section-title center-block text-left bg-white">

															</div>
															<div id="small-categories" class=" bg-white ">
																<div class="row">
																	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
																		<div class="card bg-card mb-lg-0">
																			<div class="card-body">
																				<div class="cat-item text-center">
																					<div class="cat-img text-shadow1">
																						<img src="<?php echo base_url(); ?>/assets/images/svgs/moneyBack2.svg" alt="img" class="cover-image h-8 w-8">
																					</div>
																					<div class="cat-desc">
																						<h5 class="mb-1">Marquette</h5>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
																		<div class="card bg-card mb-lg-0">
																			<div class="card-body">
																				<div class="cat-item text-center">
																					<div class="cat-img text-shadow1">
																						<img src="<?php echo base_url(); ?>/assets/images/svgs/moneyBack2.svg" alt="img" class="cover-image h-8 w-8">
																					</div>
																					<div class="cat-desc">
																						<h5 class="mb-1">Marquette</h5>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
																		<div class="card bg-card mb-lg-0">
																			<div class="card-body">
																				<div class="cat-item text-center">
																					<div class="cat-img text-shadow1">
																						<img src="<?php echo base_url(); ?>/assets/images/svgs/moneyBack2.svg" alt="img" class="cover-image h-8 w-8">
																					</div>
																					<div class="cat-desc">
																						<h5 class="mb-1">Marquette</h5>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
																		<div class="card bg-card mb-lg-0">
																			<div class="card-body">
																				<div class="cat-item text-center">
																					<div class="cat-img text-shadow1">
																						<img src="<?php echo base_url(); ?>/assets/images/svgs/moneyBack2.svg" alt="img" class="cover-image h-8 w-8">
																					</div>
																					<div class="cat-desc">
																						<h5 class="mb-1">Marquette</h5>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- PRoduct Benifit -->
										<div class="panel panel-default">
											<div class="panel-heading1">
												<h4 class="panel-title1">
													<a class="accordion-toggle collapsed border border-top-0" data-toggle="collapse" data-parent="#accordion2" href="#car-comapre-3" aria-expanded="false">Car Features</a>
												</h4>
											</div>
											<div id="car-comapre-3" class="panel-collapse collapse " role="tabpanel" aria-expanded="false">
												<div class="panel-body border border-top-0">
													<div class="tab-pane" id="tab-3">
														<div class="row">
															<div class="col-md-6">
																<div class="table-responsive">
																	<table class="table">

																		<tbody>
																			<tr>
																				<td>Power Steering</td>
																				<td><i class="icon icon-check text-success"></i></td>
																			</tr>
																			<tr>
																				<td>Power Windows Front</td>
																				<td><i class="icon icon-check text-success"></i></td>
																			</tr>
																			<tr>
																				<td>Air Conditioner</td>
																				<td><i class="icon icon-check text-success"></i></td>
																			</tr>
																			<tr>
																				<td>Passenger Airbag</td>
																				<td><i class="icon icon-close text-danger"></i></td>
																			</tr>
																			<tr>
																				<td>Fog Lights - Front</td>
																				<td><i class="icon icon-close text-danger"></i></td>
																			</tr>
																		</tbody>
																	</table>
																</div>
															</div>


															<div class="col-md-0">
																<div class="table-responsive">
																	<table class="table ">

																		<tbody>

																			<tr>
																				<td>Anti Lock Braking System</td>
																				<td><i class="icon icon-check text-success"></i></td>
																			</tr>
																			<tr>
																				<td>Driver Airbag</td>
																				<td><i class="icon icon-check text-success"></i></td>
																			</tr>
																			<tr>
																				<td>Wheel Covers</td>
																				<td><i class="icon icon-check text-success"></i></td>
																			</tr>
																			<tr>
																				<td>Automatic Climate Control</td>
																				<td><i class="icon icon-close text-danger"></i></td>
																			</tr>
																		</tbody>
																	</table>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!--Specification-->
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Car Specifications</h3>
						</div>
						
						<div class="card-body" style="padding-left:20px; padding-top:20px;">
						<div class="row">
						<div class="col-xl-12 col-lg-12 col-sm-12 col-12">
							<div class="row">
							<?php
							unset($product['specifications']->id, $product['specifications']->pro_id, $product['specifications']->deleted);
							foreach ($product['specifications'] as $specificationsKey => $specificationsVal) {
							?>
								<div class="col-xl-4 col-lg-4 col-sm-4 col-4">
									<dl class="card-text">
										<dt><?php echo str_replace('_', ' ', ucwords($specificationsKey)); ?></dt>
										<dd><?php echo ($specificationsVal != '') ? ucwords($specificationsVal) : 'NA'; ?></dd>
									</dl>
								</div>
							<?php } ?>
						</div></div></div>

					</div></div>
					<!--/Specification-->

					<!--Comments-->
					<!--div class="card">
						<div class="card-header">
							<h3 class="card-title">Rating And Reviews</h3>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-4">
										<p class="mb-2">
											<span class="fs-14 ml-2"><i class="fa fa-star text-yellow mr-2"></i>5</span>
										</p>
										<div class="progress progress-md mb-4 h-4">
											<div class="progress-bar bg-success w-100">9,232</div>
										</div>
									</div>
									<div class="mb-4">
										<p class="mb-2">
											<span class="fs-14 ml-2"><i class="fa fa-star text-yellow mr-2"></i>4</span>
										</p>
										<div class="progress progress-md mb-4 h-4">
											<div class="progress-bar bg-info w-80">8,125</div>
										</div>
									</div>
									<div class="mb-4">
										<p class="mb-2">
											<span class="fs-14 ml-2"><i class="fa fa-star text-yellow mr-2"></i> 3</span>
										</p>
										<div class="progress progress-md mb-4 h-4">
											<div class="progress-bar bg-primary w-60">6,263</div>
										</div>
									</div>
									<div class="mb-4">
										<p class="mb-2">
											<span class="fs-14 ml-2"><i class="fa fa-star text-yellow mr-2"></i> 2</span>
										</p>
										<div class="progress progress-md mb-4 h-4">
											<div class="progress-bar bg-secondary w-30">3,463</div>
										</div>
									</div>
									<div class="mb-5">
										<p class="mb-2">
											<span class="fs-14 ml-2"><i class="fa fa-star text-yellow mr-2"></i> 1</span>
										</p>
										<div class="progress progress-md mb-4 h-4">
											<div class="progress-bar bg-orange w-20">1,456</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div-->
					<!--/Comments-->

				</div>
				<!--Right Side Content-->
				<div class="col-xl-4 col-lg-4 col-md-12 product-right" id="info-sidebar">
					<div class="card sidebar__inner">
						<!-- <div class="card-header">
							<h3 class="card-title">Posted By</h3>
						</div> -->
						<div class="card-body  item-user">
							<div class="mb-0">
								<div>
									<a href="userprofile.html" class="text-dark">
										<h4 class="mt-3 mb-1 font-weight-semibold"><?php echo $product[0]['product_name']; ?></h4>
									</a>
									<h6 class="text-muted font-weight-normal">Seller Name</h6>
									<!-- <span class="text-muted" style="font-size: 10px;">EMI starts from ₹ 10,125</span> -->
									<h3 class="text-muted font-weight-bold">
										<?php 
											if(ACTIVE_MODE == MODE_DEVELOPMENT){
												echo number_to_currency($product[0]['product_sell_price'], 'INR', $locale = 1);
											} else  if(ACTIVE_MODE == MODE_DEVELOPMENT){
												echo money_format('&#x20b9;%!n',$product[0]['product_sell_price']);
											}
										?>
									</h3>
									<!-- <h6 class="mt-2 mb-0"><a href="personal-blog.html" class="btn btn-primary btn-sm">See All Ads</a></h6> -->

									<div class="row" style="margin-top: 50px;">
										<div class="col-xl-6 col-lg-6 col-sm-6 col-6">
											<a href="#" class="btn " data-toggle="modal" data-target="#LgoinRegister" style="border: 1px solid;"> Book Now @ ₹ 5,100</a>
										</div>
										<div class="col-xl-6 col-lg-6 col-sm-6 col-6"><a href="#" class="btn btn-danger" data-toggle="modal" data-target="#LgoinRegister"> Schedule Test Drive</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/Right Side Content-->

	</section>
	<!--/listing-->

	<!--Section-->
	<section class="sptb border-top">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="bg-white p-0 border">
						<div class="card-body">
							<h6 class="fs-18 mb-4">Do You Want to sell A Car?</h6>
							<hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
							<p>it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
							<a href="#" class="btn btn-primary text-white">Sell a Car</a>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="bg-white p-0 mt-5 mt-md-0 border">
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

	<!--latest Posts-->
	<section class="sptb2 bg-white border-top">
		<div class="container">
			<h6 class="fs-18 mb-4">Latest Posts</h6>
			<hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
			<div class="row">
				<div class="col-md-12 col-lg-4">
					<div class="d-flex mt-0 mb-5 mb-lg-0 border bg-light p-4">
						<img class="w-8 h-8 mr-4" src="<?php echo base_url(); ?>/assets/images/media/6.png" alt="img">
						<div class="media-body">
							<h4 class="mt-0 mb-1 fs-16"><a class="text-body" href="#">Buy a CrusaderRecusandae</a></h4>
							<span class="fs-12 text-muted"><i class="fa fa-calendar"></i> 13th May 2019</span>
							<div class="h6 mb-0 mt-1 font-weight-normal"><span class="font-weight-semibold">Price:</span> $128 <del>$218</del></div>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-lg-4">
					<div class="d-flex mt-0 mb-5 mb-lg-0 border bg-light p-4">
						<img class="w-8 h-8 mr-4" src="<?php echo base_url(); ?>/assets/images/media/4.png" alt="img">
						<div class="media-body">
							<h4 class="mt-0 mb-1 fs-16"><a class="text-body" href="#">Best New Car</a></h4>
							<span class="fs-12 text-muted"><i class="fa fa-calendar"></i> 20th Jun 2019</span>
							<div class="h6 mb-0 mt-1 font-weight-normal"><span class="font-weight-semibold">Price:</span> $245 <del>$354</del></div>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-lg-4">
					<div class="d-flex mt-0 mb-0 border bg-light p-4 box-shadow2">
						<img class="w-8 h-8 mr-4" src="<?php echo base_url(); ?>/assets/images/media/2.png" alt="img">
						<div class="media-body">
							<h4 class="mt-0 mb-1 fs-16"><a class="text-body" href="#">Fuel Effeciency Car</a></h4>
							<span class="fs-12 text-muted"><i class="fa fa-calendar"></i> 14th Aug 2019</span>
							<div class="h6 mb-0 mt-1 font-weight-normal"><span class="font-weight-semibold">Price:</span> $214 <del>$562</del></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--latest Posts-->

	<?php
	echo view('footer.php');
	echo view('model_view.php');

	?>
</body>

</html>