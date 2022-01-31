<?php

use App\Models\Cms\Product;
use App\Models\Products;
$pro_detail = new Products();
$product_brands = $pro_detail->get_product_brands(['is_brand' => true]);
$years = $pro_detail->years(['' => true]);
$fuel = $pro_detail->fuel();
$body = $pro_detail->body();
$owner_filter = $pro_detail->owner_filter();
$getBudegetPriceRange = $pro_detail->getBudegetPriceRange();

?>
<!doctype html>
<html class="no-js" lang="en">
<?php echo view('header.php'); ?>

<body>
	<?php echo view('topbar.php'); ?>

	<div class="bg-white border-bottom">
		<div class="container">
			<div class="page-header">
				<h4 class="page-title">Used cars</h4>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Categories</a></li>
					<li class="breadcrumb-item active" aria-current="page"> used Cars list</li>
				</ol>
			</div>
		</div>
	</div>
	<!--/Breadcrumb-->

	<!--listing-->
	<section class="sptb">
		<div class="container">
			<div class="row">
				<!-- left side content start -->
				<?php include('category-filter/filter.php');?>
				<!-- left side content End-->

				<div class="col-xl-9 col-lg-9 col-md-12">
					<!--Lists-->
					<div class=" mb-0">
						<div class="">
							<div class="item2-gl ">
								<div class=" mb-0">
									<?php include('list-grid-category/feature-model.php');?>
								</div>
								<div class="tab-content">
									<?php include('list-grid-category/list-view.php');?>
									<?php include('list-grid-category/grid-view.php');?>
								</div>
							</div>
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
						</div>
					</div>
					<!--/Lists-->
				</div>
			</div>
		</div>
	</section>
		<!--/Listing-->

		<!-- Newsletter-->

		<!--/Newsletter-->

		<!-- Recent Post-->
		<section class="sptb2 border-top">
			<div class="container">
				<h6 class="fs-18 mb-4">Latest Posts</h6>
				<hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
				<div class="row">
					<div class="col-md-12 col-lg-4">
						<div class="d-flex mt-0 mb-5 mb-lg-0 border bg-white p-4 box-shadow2">
							<img class="w-8 h-8 mr-4" src="../assets/images/media/brands/Le.png" alt="img">
							<div class="media-body">
								<h4 class="mt-0 mb-1 fs-16"><a class="text-body" href="#">Buy a CrusaderRecusandae</a></h4>
								<span class="fs-12 text-muted"><i class="fa fa-calendar"></i> 13th May 2019</span>
								<div class="h6 mb-0 mt-1 font-weight-normal"><span class="font-weight-semibold">Price:</span> $128 <del>$218</del></div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-4">
						<div class="d-flex mt-0 mb-5 mb-lg-0 border bg-white p-4 box-shadow2">
							<img class="w-8 h-8 mr-4" src="../assets/images/media/brands/Le.png" alt="img">
							<div class="media-body">
								<h4 class="mt-0 mb-1 fs-16"><a class="text-body" href="#">Best New Car</a></h4>
								<span class="fs-12 text-muted"><i class="fa fa-calendar"></i> 20th Jun 2019</span>
								<div class="h6 mb-0 mt-1 font-weight-normal"><span class="font-weight-semibold">Price:</span> $245 <del>$354</del></div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-4">
						<div class="d-flex mt-0 mb-0 border bg-white p-4 box-shadow2">
							<img class="w-8 h-8 mr-4" src="../assets/images/media/brands/Le.png" alt="img">
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
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="bg-white row">
							<h4 class="panel-title1">
								<a class="text-dark">
									<h3>Frequently Asked Questions On Car</h3>
						</div>
						</a>
						<div class="card">
							<div class="border-3">
								<div class=" bg-white row">
									<div class="col-md-12">
										<div class="panel-group1" id="accordion2">
											<div class="panel panel-default">
												<div class="panel-heading1 ">


													<div class="panel panel-default">
														<div class="panel-heading1">
															<h4 class="panel-title1">
																<a class="accordion-toggle collapsed border border-top-0" data-toggle="collapse" data-parent="#accordion2" href="#car-comapre-3" aria-expanded="false">Q 1. How many used cars available in Ahmedabad</a>
															</h4>
														</div>
														<div id="car-comapre-3" class="panel-collapse collapse " role="tabpanel" aria-expanded="false">
															<div class="panel-body border border-top-0">
																561 used cars are available in Ahmedabad of popular brands like Maruti, Hyundai, Honda, Toyota, Mahindra & more.
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="panel panel-default">
												<div class="panel-heading1">
													<h4 class="panel-title1">
														<a class="accordion-toggle collapsed border border-top-0" data-toggle="collapse" data-parent="#accordion2" href="#car-comapre-4" aria-expanded="false">Q 2. What will be the starting price of a used car in Ahmedabad?</a>
													</h4>
												</div>
												<div id="car-comapre-4" class="panel-collapse collapse " role="tabpanel" aria-expanded="false">
													<div class="panel-body border border-top-0">
														<div class="table-responsive">
															561 used car are available in Ahmedabad & the price starts at Rs 55,000 in Ahmedabad.
														</div>
													</div>
												</div>

											</div>


											<div class="panel panel-default">
												<div class="panel-heading1">
													<h4 class="panel-title1">
														<a class="accordion-toggle collapsed border border-top-0" data-toggle="collapse" data-parent="#accordion2" href="#car-comapre-5" aria-expanded="false">Q 3. What are the most popular brands available for used cars in Ahmedabad? </a>
													</h4>
												</div>
												<div id="car-comapre-5" class="panel-collapse collapse " role="tabpanel" aria-expanded="false">
													<div class="panel-body border border-top-0">
														<div class="table-responsive">
															CarDekho has a wide inventory of all brands including Maruti, Hyundai, Honda, Toyota, Mahindra & more. Find the best-used car of your choice on CarDekho.
														</div>
													</div>
												</div>
											</div>


											<div class="panel panel-default">
												<div class="panel-heading1">
													<h4 class="panel-title1">
														<a class="accordion-toggle collapsed border border-top-0" data-toggle="collapse" data-parent="#accordion2" href="#car-comapre-6" aria-expanded="false">Q 4. How many used diesel cars available in Ahmedabad?</a>
													</h4>
												</div>
												<div id="car-comapre-6" class="panel-collapse collapse " role="tabpanel" aria-expanded="false">
													<div class="panel-body border border-top-0">
														<div class="table-responsive">
															Used cars are available in both petrol and diesel options. 348 second-hand diesel cars available in Ahmedabad. Popular used diesel cars are Ford Ecosport, Maruti Swift, Maruti Swift & more and price starts at Rs 3.4 Lakh.
														</div>
													</div>
												</div>
											</div>


											<div class="panel panel-default">
												<div class="panel-heading1">
													<h4 class="panel-title1">
														<a class="accordion-toggle collapsed border border-top-0" data-toggle="collapse" data-parent="#accordion2" href="#car-comapre-7" aria-expanded="false">Q 5. What body types are available for used cars in Ahmedabad?</a>
													</h4>
												</div>
												<div id="car-comapre-7" class="panel-collapse collapse " role="tabpanel" aria-expanded="false">
													<div class="panel-body border border-top-0">
														<div class="table-responsive">
															Used cars are available in every segment be it Hatchback, Sedan, SUV, Luxury, MUV, Minivan and Pickup Truck cars in Ahmedabad. At CarDekho we have 197 Hatchback, 167 Sedan, 141 SUV, 46 Luxury, 41 MUV, 13 Minivan and 1 Pickup Truck Cars available in Ahmedabad.
														</div>

													</div>
												</div>
											</div>

	</section>



	<div class="bg-white row">
		<div class="col-lg-3 col-md-3 col-sm-3">
			<div class="">
				<div class="mb-lg-0 mb-2">
					<div class="service-card text-center">
						<div class="bg-white ">
							<img src="<?= base_url(); ?>/assets/images/media/cars/no.1.png" alt="img">
						</div>
						<div class="servic-data mt-3">
							<h4 class="font-weight-semibold mb-2" style="font-size:18px">India’s #1 </h4>
							<h4 class="font-weight-semibold mb-2" style="font-size:18px">Auto Portal </h4>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-6 col-sm-6">
			<div class="">
				<div class="mb-lg-0 mb-4">
					<div class="service-card text-center">
						<div class="bg-white ">
							<img src="../assets/images/media/cars/secure.png" alt="img">
						</div>
						<div class="servic-data mt-3">
							<h4 class="font-weight-semibold mb-2" style="font-size:18px">Secure & </h4>
							<h4 class="font-weight-semibold mb-2" style="font-size:18px"> Hassle-Free</h4>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6">
			<div class="">
				<div class="mb-sm-0 mb-4">
					<div class="service-card text-center">
						<div class="bg-white ">
							<img src="../assets/images/media/cars/fair.png" alt="img">
						</div>
						<div class="servic-data mt-3">
							<h4 class="font-weight-semibold mb-2" style="font-size:18px">Fair </h4>
							<h4 class="font-weight-semibold mb-2" style="font-size:18px">Deals</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6">
			<div class="">
				<div class="">
					<div class="service-card text-center">
						<div class="bg-white">
							<img src="../assets/images/media/cars/competitive.png" alt="img">
						</div>
						<div class="servic-data mt-3">
							<h4 class="font-weight-semibold mb-2" style="font-size:18px">Competitive </h4>
							<h4 class="font-weight-semibold mb-2" style="font-size:18px"> Pricing</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div><br><br>
	</section>

	<?php
		echo view('footer.php');
		echo view('model_view.php');

	?>
</body>

</html>
<?php include('js/filter.php') ?>