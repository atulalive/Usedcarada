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
$data = ['category' => 'cars']; // category come from session
$product_sub_category = $pro_detail->get_product_sub_category($data);
$all_product_list = $pro_detail->get_sub_category_product_list($data);
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
				<!--Left Side Content-->
				<div class="col-xl-3 col-lg-3 col-md-12">
					<div class="card">
						<div class="card-body"><br>
							<h5>Location</h5><br>
							<div class="input-group">
								<input type="text" class="form-control br-tl-3  br-bl-3" placeholder="Search">
								<div class="input-group-append ">
									<button type="button" class="btn btn-primary br-tr-3  br-br-3">
										Search
									</button>
								</div>
							</div>
						</div>
					</div>
					<div class="card overflow-hidden">
						<div class="card-body">
							<h4 class="mb-2"style="padding-left:15%;">Categories</h4><hr>
						</div><?php if (!empty($product_brands) && is_array($product_brands)) {


									foreach ($product_brands as $brand_val) {
								?>
								<div class="">
									<div class="" id="">
									<div class="filter-product-checkboxs"style="padding-left:15%;">
								<label class="custom-control custom-checkbox mb-2">
									<input type="checkbox" class="custom-control-input" name="checkbox11" value="option1">
									<span class="custom-control-label">
									<a href="<?php echo  base_url() .URL_SEPARATOR. 'brand'.URL_SEPARATOR.$brand_val['machine_name']; ?>"></a>
									<h5 class=""><?php echo $brand_val['brand_name']; ?></h5>
									</span>
								</label>
								
							
								
								
								
							</div>
									</div>
								</div><?php }
								} ?>
						<!-- <div class="px-4 py-3 border-bottom border-top">
							<h4 class="mb-0">Price Range</h4>
						</div>
						<div class="card-body">
							<div class="h6">
								<input type="text" id="price">
							</div>
							<div id="mySlider"></div>
						</div> -->

						<div class="px-4 py-3 border-bottom border-top">
							<h4 class="mb-0">Year</h4>
						</div>

					<?php if (!empty($years) && is_array($years)) {
						?>
							
							<div class="card-body">
								<div class="row">
									<div class="form-group col-md-6 mb-0">
										<label for="inputState1" class="col-form-label">Min</label>
										<select id="inputState1" class="form-control select2">
										<?php 
											foreach ($years as $year_val) {	
										?>
											<option><h5 class=""><?php echo $year_val['min']; ?></h5></option>
										<?php }?>	
										</select>
									</div>
									<div class="form-group col-md-6 mb-0">
										<label for="inputState2" class="col-form-label">Max</label>
										<select id="inputState2" class="form-control select2">
										<?php 
											foreach ($years as $year_val) {	
										?>
											<option><h5 class=""><?php echo $year_val['max']; ?></h5></option>
										<?php }?>
											
										</select>
									</div>
								</div>
							</div>
							
					<?php } ?>

						<div class="px-4 py-3 border-bottom border-top">
							<h4 class="mb-0">Fuel Type</h4>
						</div><br>
						<?php
							
						if (!empty($fuel) && is_array($fuel)) {
                            foreach ($fuel as $fuel_val) {
								
								
                        ?>
						<div class="">
							<div class="filter-product-checkboxs"style="padding-left:15%;">
								<label class="custom-control custom-checkbox mb-2">
									<input type="checkbox" class="custom-control-input" name="checkbox11" value="option1">
									<span class="custom-control-label">
									 <h5 class=""><?php echo $fuel_val['fuel_type']; ?></h5>
									
									</span>
								</label>
							</div>
						</div>
						<?php } } ?>
						<div class="px-4 py-3 border-bottom border-top">
							<h4 class="mb-0">Body Type</h4>
						</div><br>
						<?php
							
						if (!empty($body) && is_array($body)) {
                            foreach ($body as $body_val) {
								
								
                        ?>
						<div class="">
							<div class="filter-product-checkboxs"style="padding-left:15%;">
								<label class="custom-control custom-checkbox mb-2">
									<input type="checkbox" class="custom-control-input" name="checkbox12" value="option1">
									<span class="custom-control-label">
									<h5 class=""><?php echo $body_val['body_type']; ?></h5>
									</span>
								</label>
								
								
								
								
								
								
							</div>
						</div>
						<?php } } ?>
						<div class="px-4 py-3 border-bottom border-top">
							<h4 class="mb-0">Owner</h4>
						</div><br>
						<?php
							
						if (!empty($owner_filter) && is_array($owner_filter)) {
                            foreach ($owner_filter as $owner_filter_val) {
								
								
                        ?>
						<div class="">
							<div class="filter-product-checkboxs"style="padding-left:15%;">
								<label class="custom-control custom-checkbox mb-2">
									<input type="checkbox" class="custom-control-input" name="checkbox12" value="option1">
									<span class="custom-control-label">
									<h5 class=""><?php echo $owner_filter_val['owner_type']; ?></h5>
									</span>
								</label>
								
								
								
								
								
								
							</div>
						</div>
						<?php } } ?>
						<div class="px-4 py-3 border-bottom border-top">
							<h4 class="mb-0">Price Range</h4>
						</div><br>
						<?php
							
						if (!empty($getBudegetPriceRange) && is_array($getBudegetPriceRange)) {
                            foreach ($getBudegetPriceRange as $getBudegetPriceRange_val) {
								
								
                        ?>
						<div class="">
							<div class="filter-product-checkboxs"style="padding-left:15%;">
								<label class="custom-control custom-checkbox mb-2">
									<input type="checkbox" class="custom-control-input" name="checkbox12" value="option1">
									<span class="custom-control-label">
									<h5 class=""><?php echo $getBudegetPriceRange_val['display_price_range']; ?></h5>
									</span>
								</label>
								
								
								
								
								
								
							</div>
						</div>
						<?php } } ?>



					</div>

				</div>
				<!--/Left Side Content-->

				<div class="col-xl-9 col-lg-9 col-md-12">
						<!--Lists-->
						<div class=" mb-0">
							<div class="">
								<div class="item2-gl ">
									<div class=" mb-0">
										<div class="">
											<div class="bg-white p-5 item2-gl-nav d-flex">
												<h6 class="mb-0 mt-3 text-left">Showing 1 to 10 of 30 entries</h6>
												<ul class="nav item2-gl-menu ml-auto mt-1">
													<li class=""><a href="#tab-11" class="active show" data-toggle="tab" title="List style"><i class="fa fa-list"></i></a></li>
													<li><a href="#tab-12" data-toggle="tab" class="" title="Grid"><i class="fa fa-th"></i></a></li>
												</ul>
												<div class="d-sm-flex">
													<label class="mr-2 mt-2 mb-sm-1">Sort By:</label>
													<div class="selectgroup">
														<label class="selectgroup-item mb-md-0">
															<input type="radio" name="value" value="Price" class="selectgroup-input" checked="">
															<span class="selectgroup-button">Price <i class="fa fa-sort ml-1"></i></span>
														</label>
														<label class="selectgroup-item mb-md-0">
															<input type="radio" name="value" value="Popularity" class="selectgroup-input">
															<span class="selectgroup-button">Popularity</span>
														</label>
														<label class="selectgroup-item mb-md-0">
															<input type="radio" name="value" value="Latest" class="selectgroup-input">
															<span class="selectgroup-button">Latest</span>
														</label>
														<label class="selectgroup-item mb-0">
															<input type="radio" name="value" value="Rating" class="selectgroup-input">
															<span class="selectgroup-button">Rating</span>
														</label>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-content">	<?php foreach ($all_product_list as $k => $value) { ?>
										<div class="tab-pane active" id="tab-11">
											<div class="card overflow-hidden">
												<div class="d-md-flex">
													<div class="item-card9-img">

														<div class="item-card9-imgs">
														<a class="link" href="<?php echo base_url() . '/cardetails' . URL_SEPARATOR . strtolower($value['product_category']) . URL_SEPARATOR . strtolower($value['product_alias_name']); ?>"></a>
                                                        
                                                        <img src="<?php echo URL_IMAGES_MEDIA . strtolower($value['product_category']) . URL_SEPARATOR . strtolower($value['product_thumbnail']); ?>" alt="img" class="cover-image">
														</div>
														<div class="item-card9-icons">
															<a href="#" class="item-card9-icons1 wishlist"> <i class="fa fa fa-heart-o"></i></a>
														</div>
														
													</div>
													<div class="card border-0 mb-0">
														<div class="card-body ">
															<div class="item-card9">
																<a href="cars.html" class="text-dark">
																<a href="<?php echo base_url() . '/cardetails' . URL_SEPARATOR . strtolower($value['product_category']) . URL_SEPARATOR . strtolower($value['product_alias_name']); ?>" class="text-dark">
                                                                        <h4 class="mb-0"><?php echo $value['product_name']; ?></h4>
																		
                                                                    </a>
																</a>
																<div class="item-card9-desc mb-2">
																	<a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i> Mumbai</span></a>
																	<a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i> 2 days ago</span></a>
																</div>
																<p class="mb-0 leading-tight">VXi</p>
															</div>
														</div>
														<div class="card-footer pt-4 pb-4 pr-4 pl-4">
															<div class="item-card9-footer d-sm-flex">
																<div class="item-card9-cost">
																	<h4 class="text-dark font-weight-bold mb-0 mt-0">₹4,32,340</h4>
																</div>
																<div class="ml-auto">
																	<a href="#" class="mr-2" title="Car type"><i class="fa fa-car  mr-1 text-muted"></i> Automatic</a>
																	<a href="#" class="mr-2" title="Kilometrs"><i class="fa fa-road text-muted mr-1 "></i>4000Kms</a>
																	<a href="#" class="" title="FuealType"><i class="fa fa-tachometer text-muted mr-1"></i>Electric</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											
											
										
											
											
											
									
										
										</div><?php } ?>

















										<div class="tab-pane" id="tab-12">
											<div class="row">
												<div class="col-lg-6 col-md-12 col-xl-4">
													<div class="card overflow-hidden">
														<div class="item-card9-img">
															<div class="arrow-ribbon bg-primary">₹4,32,340</div>
															<div class="item-card9-imgs">
																<a class="link" href="cars.html"></a>
																<img src="../assets/images/media/cars/ca.jpg" alt="img" class="cover-image">
															</div>
															<div class="item-card9-icons">
																<a href="#" class="item-card9-icons1 wishlist"> <i class="fa fa fa-heart-o"></i></a>
															</div>
															<div class="item-overly-trans">
																<div class="rating-stars">
																	<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
																	<div class="rating-stars-container">
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																	</div>
																</div>

															</div>
														</div>
														<div class="card border-0 mb-0">
															<div class="card-body ">
																<div class="item-card9">
																	<a href="cars.html" class="text-dark">
																		<h4 class="font-weight-semibold mt-1"> Maruti-Eeco</h4>
																	</a>
																	<div class="item-card9-desc mb-2">
																		<a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i> Mumbai</span></a>
																		<a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i> 2 days ago</span></a>
																	</div>
																	<p class="mb-0 leading-tight">2.0 TDI</p>
																</div>
															</div>
															<div class="card-footer pt-4 pb-4 pr-4 pl-4">
																<div class="item-card9-footer d-sm-flex">
																	<div class="ml-auto">
																		<a href="#" class="w-50 mt-1 mb-1 float-left" title="Car type"><i class="fa fa-car  mr-1 text-muted"></i> Automatic</a>
																		<a href="#" class="w-50 mt-1 mb-1 float-left" title="Kilometrs"><i class="fa fa-road text-muted mr-1 "></i>4000Kms</a>
																		<a href="#" class="w-50 mt-1 mb-1 float-left" title="FuealType"><i class="fa fa-tachometer text-muted mr-1"></i>Electric</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-12 col-xl-4">
													<div class="card overflow-hidden ">

														<div class="item-card9-img">
															<div class="arrow-ribbon bg-primary">$862.00</div>
															<div class="item-card9-imgs">
																<a class="link" href="cars.html"></a>
																<img src="../assets/images/media/cars/kr.jpg" alt="img" class="cover-image">
															</div>
															<div class="item-card9-icons">
																<a href="#" class="item-card9-icons1 wishlist active"> <i class="fa fa fa-heart-o"></i></a>
															</div>
															<div class="item-overly-trans">
																<div class="rating-stars">
																	<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="4">
																	<div class="rating-stars-container">
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																	</div>
																</div>

															</div>
														</div>
														<div class="card border-0 mb-0">
															<div class="card-body ">
																<div class="item-card9">
																	<div class="rating-stars">
																		<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
																	</div>
																	<a href="cars.html" class="text-dark">
																		<h4 class="font-weight-semibold mt-1">Maruti-Ertiga</h4>
																	</a>
																	<div class="item-card9-desc mb-2">
																		<a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i> Pune</span></a>
																		<a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i> 5 days ago</span></a>
																	</div>
																	<p class=" leading-tight">LXI BSIII</p>
																</div>
															</div>
															<div class="card-footer pt-4 pb-4 pr-4 pl-4">
																<div class="item-card9-footer d-sm-flex">
																	<div class="">
																		<a href="#" class="w-50 mt-1 mb-1 float-left" title="Car type"><i class="fa fa-car text-muted mr-1"></i> Manual</a>
																		<a href="#" class="w-50 mt-1 mb-1 float-left" title="Kilometrs"><i class="fa fa-road text-muted mr-1"></i> 5000Kms</a>
																		<a href="#" class="w-50 mt-1 mb-1 float-left" title="FuealType"><i class="fa fa-tachometer text-muted mr-1"></i> Disel</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-12 col-xl-4">
													<div class="card overflow-hidden">
														<div class="item-card9-img">
															<div class="arrow-ribbon bg-primary">₹4,32,340</div>
															<div class="item-card9-imgs">
																<a class="link" href="cars.html"></a>
																<img src="../assets/images/media/cars/kr.jpg" alt="img" class="cover-image">
															</div>
															<div class="item-card9-icons">
																<a href="#" class="item-card9-icons1 wishlist active"> <i class="fa fa fa-heart-o"></i></a>
															</div>
															<div class="item-overly-trans">

															</div>
														</div>
														<div class="card border-0 mb-0">
															<div class="card-body ">
																<div class="item-card9">
																	<div class="rating-stars">
																		<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">

																	</div>
																	<a href="cars.html" class="text-dark">
																		<h4 class="font-weight-semibold mt-1"> Alcazar </h4>
																	</a>
																	<div class="item-card9-desc mb-2">
																		<a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i> Satara</span></a>
																		<a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i> 5 days ago</span></a>
																	</div>
																	<p class=" leading-tight">3.2 Titanium AT 4X4</p>
																</div>
															</div>
															<div class="card-footer pt-4 pb-4 pr-4 pl-4">
																<div class="item-card9-footer d-sm-flex">
																	<div class="">
																		<a href="#" class="w-50 mt-1 mb-1 float-left" title="Car type"><i class="fa fa-car text-muted mr-1"></i> Manual</a>
																		<a href="#" class="w-50 mt-1 mb-1 float-left" title="Kilometrs"><i class="fa fa-road text-muted mr-1"></i> 5000Kms</a>
																		<a href="#" class="w-50 mt-1 mb-1 float-left" title="FuealType"><i class="fa fa-tachometer text-muted mr-1"></i> Petrol</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-12 col-xl-4">
													<div class="card overflow-hidden">
														<div class="item-card9-img">
															<div class="arrow-ribbon bg-primary">₹4,32,340</div>
															<div class="item-card9-imgs">
																<a class="link" href="cars.html"></a>
																<img src="../assets/images/media/cars/kr.jpg" alt="img" class="cover-image">
															</div>
															<div class="item-card9-icons">
																<a href="#" class="item-card9-icons1 wishlist active"> <i class="fa fa fa-heart-o"></i></a>
															</div>
															<div class="item-overly-trans">
																<div class="rating-stars">
																	<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="4">
																	<div class="rating-stars-container">
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																	</div>
																</div>
																<span>

																</span>
															</div>
														</div>
														<div class="card border-0 mb-0">
															<div class="card-body ">
																<div class="item-card9">
																	<div class="rating-stars">
																		<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
																	</div>
																	<a href="cars.html" class="text-dark">
																		<h4 class="font-weight-semibold mt-1">Aura</h4>
																	</a>
																	<div class="item-card9-desc mb-2">
																		<a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i>Mumbai</span></a>
																		<a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i> 5 days ago</span></a>
																	</div>
																	<p class=" leading-tight">1.5 TDCi Titanium</p>
																</div>
															</div>
															<div class="card-footer pt-4 pb-4 pr-4 pl-4">
																<div class="item-card9-footer d-sm-flex">
																	<div class="">
																		<a href="#" class="w-50 mt-1 mb-1 float-left" title="Car type"><i class="fa fa-car text-muted mr-1"></i> Automatic</a>
																		<a href="#" class="w-50 mt-1 mb-1 float-left" title="Kilometrs"><i class="fa fa-road text-muted mr-1"></i> 4000Kms</a>
																		<a href="#" class="w-50 mt-1 mb-1 float-left" title="FuealType"><i class="fa fa-tachometer text-muted mr-1"></i> Hybrid</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-12 col-xl-4">
													<div class="card overflow-hidden">
														<div class="item-card9-img">
															<div class="arrow-ribbon bg-primary">₹7,32,340</div>
															<div class="item-card9-imgs">
																<a class="link" href="cars.html"></a>
																<img src="../assets/images/media/cars/kr.jpg" alt="img" class="cover-image">
															</div>
															<div class="item-card9-icons">
																<a href="#" class="item-card9-icons1 wishlist active"> <i class="fa fa fa-heart-o"></i></a>
															</div>
															<div class="item-overly-trans">
																<div class="rating-stars">
																	<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="4">
																	<div class="rating-stars-container">
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																	</div>
																</div>

															</div>
														</div>
														<div class="card border-0 mb-0">
															<div class="card-body ">
																<div class="item-card9">
																	<div class="rating-stars">
																		<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
																	</div>
																	<a href="cars.html" class="text-dark">
																		<h4 class="font-weight-semibold mt-1">Creta</h4>
																	</a>
																	<div class="item-card9-desc mb-2">
																		<a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i>Satar</span></a>
																		<a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i> 5 days ago</span></a>
																	</div>
																	<p class=" leading-tight"> 35 TDI Premium Plus</p>
																</div>
															</div>
															<div class="card-footer pt-4 pb-4 pr-4 pl-4">
																<div class="item-card9-footer d-sm-flex">
																	<div class="">
																		<a href="#" class="w-50 mt-1 mb-1 float-left" title="Car type"><i class="fa fa-car text-muted mr-1"></i> Manual</a>
																		<a href="#" class="w-50 mt-1 mb-1 float-left" title="Kilometrs"><i class="fa fa-road text-muted mr-1"></i> 5000Kms</a>
																		<a href="#" class="w-50 mt-1 mb-1 float-left" title="FuealType"><i class="fa fa-tachometer text-muted mr-1"></i> Petrol + CNG</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-12 col-xl-4">
													<div class="card overflow-hidden">
														<div class="item-card9-img">
															<div class="arrow-ribbon bg-primary">₹4,32,340</div>
															<div class="item-card9-imgs">
																<a class="link" href="cars.html"></a>
																<img src="../assets/images/media/cars/kr.jpg" alt="img" class="cover-image">
															</div>
															<div class="item-card9-icons">
																<a href="#" class="item-card9-icons1 wishlist active"> <i class="fa fa fa-heart-o"></i></a>
															</div>
															<div class="item-overly-trans">
																<div class="rating-stars">
																	<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="4">
																	<div class="rating-stars-container">
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																	</div>
																</div>

															</div>
														</div>
														<div class="card border-0 mb-0">
															<div class="card-body ">
																<div class="item-card9">
																	<div class="rating-stars">
																		<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
																	</div>
																	<a href="cars.html" class="text-dark">
																		<h4 class="font-weight-semibold mt-1">Venue</h4>
																	</a>
																	<div class="item-card9-desc mb-2">
																		<a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i> Noida</span></a>
																		<a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i> 5 days ago</span></a>
																	</div>
																	<p class=" leading-tight">Asta Option ATm</p>
																</div>
															</div>
															<div class="card-footer pt-4 pb-4 pr-4 pl-4">
																<div class="item-card9-footer d-sm-flex">
																	<div class="mr-auto">
																		<a href="#" class="w-50 mt-1 mb-1 float-left" title="Car type"><i class="fa fa-car text-muted mr-1"></i> Manual</a>
																		<a href="#" class="w-50 mt-1 mb-1 float-left" title="Kilometrs"><i class="fa fa-road text-muted mr-1"></i> 5000Kms</a>
																		<a href="#" class="w-50 mt-1 mb-1 float-left" title="FuealType"><i class="fa fa-tachometer text-muted mr-1"></i> Petrol + LPG</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-12 col-xl-4">
													<div class="card overflow-hidden">
														<div class="item-card9-img">
															<div class="arrow-ribbon bg-primary">₹2,32,340</div>
															<div class="item-card9-imgs">
																<a class="link" href="cars.html"></a>
																<img src="../assets/images/media/cars/kr.jpg" alt="img" class="cover-image">
															</div>
															<div class="item-card9-icons">
																<a href="#" class="item-card9-icons1 wishlist active"> <i class="fa fa fa-heart-o"></i></a>
															</div>
															<div class="item-overly-trans">
																<div class="rating-stars">
																	<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="4">
																	<div class="rating-stars-container">
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																	</div>
																</div>

															</div>
														</div>
														<div class="card border-0 mb-0">
															<div class="card-body ">
																<div class="item-card9">
																	<div class="rating-stars">
																		<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
																	</div>
																	<a href="cars.html" class="text-dark">
																		<h4 class="font-weight-semibold mt-1"> Amaze</h4>
																	</a>
																	<div class="item-card9-desc mb-2">
																		<a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i> Mumbai</span></a>
																		<a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i> 5 days ago</span></a>
																	</div>
																	<p class=" leading-tight">Magna 1.1L</p>
																</div>
															</div>
															<div class="card-footer pt-4 pb-4 pr-4 pl-4">
																<div class="item-card9-footer d-sm-flex">
																	<div class="mr-auto">
																		<a href="#" class="w-50 mt-1 mb-1 float-left" title="Car type"><i class="fa fa-car text-muted mr-1"></i> Manual</a>
																		<a href="#" class="w-50 mt-1 mb-1 float-left" title="Kilometrs"><i class="fa fa-road text-muted mr-1"></i> 5000Kms</a>
																		<a href="#" class="w-50 mt-1 mb-1 float-left" title="FuealType"><i class="fa fa-tachometer text-muted mr-1"></i> Disel</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-12 col-xl-4">
													<div class="card overflow-hidden">
														<div class="item-card9-img">
															<div class="arrow-ribbon bg-primary">₹4,32,340</div>
															<div class="item-card9-imgs">
																<a class="link" href="cars.html"></a>
																<img src="../assets/images/media/cars/kr.jpg" alt="img" class="cover-image">
															</div>
															<div class="item-card9-icons">
																<a href="#" class="item-card9-icons1 wishlist"> <i class="fa fa fa-heart-o"></i></a>
															</div>
															<div class="item-overly-trans">
																<div class="rating-stars">
																	<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
																	<div class="rating-stars-container">
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																	</div>
																</div>

															</div>
														</div>
														<div class="card border-0 mb-0">
															<div class="card-body ">
																<div class="item-card9">
																	<a href="cars.html" class="text-dark">
																		<h4 class="font-weight-semibold mt-1">Wrv</h4>
																	</a>
																	<div class="item-card9-desc mb-2">
																		<a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i> Satara</span></a>
																		<a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i> 2 days ago</span></a>
																	</div>
																	<p class="mb-0 leading-tight">Magna 1.1L</p>
																</div>
															</div>
															<div class="card-footer pt-4 pb-4 pr-4 pl-4">
																<div class="item-card9-footer d-sm-flex">
																	<div class="mr-auto">
																		<a href="#" class="w-50 mt-1 mb-1 float-left" title="Car type"><i class="fa fa-car  mr-1 text-muted"></i> Automatic</a>
																		<a href="#" class="w-50 mt-1 mb-1 float-left" title="Kilometrs"><i class="fa fa-road text-muted mr-1 "></i>4000Kms</a>
																		<a href="#" class="w-50 mt-1 mb-1 float-left" title="FuealType"><i class="fa fa-tachometer text-muted mr-1"></i>Petrol</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-12 col-xl-4">
													<div class="card overflow-hidden">
														<div class="item-card9-img">
															<div class="arrow-ribbon bg-primary">₹4,32,340</div>
															<div class="item-card9-imgs">
																<a class="link" href="cars.html"></a>
																<img src="../assets/images/media/cars/kr.jpg" alt="img" class="cover-image">
															</div>
															<div class="item-card9-icons">
																<a href="#" class="item-card9-icons1 wishlist active"> <i class="fa fa fa-heart-o"></i></a>
															</div>
															<div class="item-overly-trans">
																<div class="rating-stars">
																	<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="4">
																	<div class="rating-stars-container">
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																	</div>
																</div>

															</div>
														</div>
														<div class="card border-0 mb-0">
															<div class="card-body ">
																<div class="item-card9">
																	<div class="rating-stars">
																		<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">

																	</div>
																	<a href="cars.html" class="text-dark">
																		<h4 class="font-weight-semibold mt-1">City</h4>
																	</a>
																	<div class="item-card9-desc mb-2">
																		<a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i> Gujrat</span></a>
																		<a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i> 5 days ago</span></a>
																	</div>
																	<p class=" leading-tight">i VTEC CVT VX</p>
																</div>
															</div>
															<div class="card-footer pt-4 pb-4 pr-4 pl-4">
																<div class="item-card9-footer d-sm-flex">
																	<div class="mr-auto">
																		<a href="#" class="w-50 mt-1 mb-1 float-left" title="Car type"><i class="fa fa-car text-muted mr-1"></i> Manual</a>
																		<a href="#" class="w-50 mt-1 mb-1 float-left" title="Kilometrs"><i class="fa fa-road text-muted mr-1"></i> 5000Kms</a>
																		<a href="#" class="w-50 mt-1 mb-1 float-left" title="FuealType"><i class="fa fa-tachometer text-muted mr-1"></i> Disel</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-12 col-xl-4">
													<div class="card overflow-hidden">
														<div class="item-card9-img">
															<div class="arrow-ribbon bg-primary">₹4,32,340</div>
															<div id="carouselExampleSlidesOnly1" class="carousel car-slide item-card9-imgs" data-ride="carousel">
																<a class="link" href="cars.html"></a>
																<div class="carousel-inner">
																	<div class="carousel-item active">
																		<img src="../assets/images/media/j3.png" alt="img" class="cover-image">
																	</div>
																	<div class="carousel-item">
																		<img src="../assets/images/media/j1.png" alt="img" class="cover-image">
																	</div>
																	<div class="carousel-item">
																		<img src="../assets/images/media/j2.png" alt="img" class="cover-image">
																	</div>
																</div>
																<a class="carousel-control-prev" href="#carouselExampleSlidesOnly1" role="button" data-slide="prev">
																	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
																	<span class="sr-only">Previous</span>
																</a>
																<a class="carousel-control-next" href="#carouselExampleSlidesOnly1" role="button" data-slide="next">
																	<span class="carousel-control-next-icon" aria-hidden="true"></span>
																	<span class="sr-only">Next</span>
																</a>
															</div>
															<div class="item-card9-icons">
																<a href="#" class="item-card9-icons1 wishlist active"> <i class="fa fa fa-heart-o"></i></a>
															</div>
															<div class="item-overly-trans">

															</div>
														</div>
														<div class="card border-0 mb-0">
															<div class="card-body ">
																<div class="item-card9">
																	<div class="rating-stars">
																		<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">

																	</div>
																	<a href="cars.html" class="text-dark">
																		<h4 class="font-weight-semibold mt-1">Jazz</h4>
																	</a>
																	<div class="item-card9-desc mb-2">
																		<a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i> Gujrat</span></a>
																		<a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i> 5 days ago</span></a>
																	</div>
																	<p class=" leading-tight">2.5 VX (Diesel) 7 Seater BS IV</p>
																</div>
															</div>
															<div class="card-footer pt-4 pb-4 pr-4 pl-4">
																<div class="item-card9-footer d-sm-flex">
																	<div class="">
																		<a href="#" class="w-50 mt-1 mb-1 float-left" title="Car type"><i class="fa fa-car text-muted mr-1"></i> Manual</a>
																		<a href="#" class="w-50 mt-1 mb-1 float-left" title="Kilometrs"><i class="fa fa-road text-muted mr-1"></i> 5000Kms</a>
																		<a href="#" class="w-50 mt-1 mb-1 float-left" title="FuealType"><i class="fa fa-tachometer text-muted mr-1"></i> Hybrid</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-12 col-xl-4">
													<div class="card overflow-hidden">
														<div class="item-card9-img">
															<div class="arrow-ribbon bg-primary">₹4,32,340</div>
															<div class="item-card9-imgs">
																<a class="link" href="cars.html"></a>
																<img src="../assets/images/media/cars/ca.jpg" alt="img" class="cover-image">
															</div>
															<div class="item-card9-icons">
																<a href="#" class="item-card9-icons1 wishlist"> <i class="fa fa fa-heart-o"></i></a>
															</div>
															<div class="item-overly-trans">
																<div class="rating-stars">
																	<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
																	<div class="rating-stars-container">
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																	</div>
																</div>

															</div>
														</div>
														<div class="card border-0 mb-0">
															<div class="card-body ">
																<div class="item-card9">
																	<a href="cars.html" class="text-dark">
																		<h4 class="font-weight-semibold mt-1"> Harrier</h4>
																	</a>
																	<div class="item-card9-desc mb-2">
																		<a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i> Pune</span></a>
																		<a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i> 2 days ago</span></a>
																	</div>
																	<p class="mb-0 leading-tight">2.5 VX (Diesel) 7 Seater BS IV</p>
																</div>
															</div>
															<div class="card-footer pt-4 pb-4 pr-4 pl-4">
																<div class="item-card9-footer d-sm-flex">
																	<div class="">
																		<a href="#" class="w-50 mt-1 mb-1 float-left" title="Car type"><i class="fa fa-car  mr-1 text-muted"></i> Automatic</a>
																		<a href="#" class="w-50 mt-1 mb-1 float-left" title="Kilometrs"><i class="fa fa-road text-muted mr-1 "></i>4000Kms</a>
																		<a href="#" class="w-50 mt-1 mb-1 float-left" title="FuealType"><i class="fa fa-tachometer text-muted mr-1"></i>Electric</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-12 col-xl-4">
													<div class="card overflow-hidden">
														<div class="item-card9-img">
															<div class="arrow-ribbon bg-primary">₹4,32,340</div>
															<div class="item-card9-imgs">
																<a class="link" href="cars.html"></a>
																<img src="../assets/images/media/cars/ca.jpg" alt="img" class="cover-image">
															</div>
															<div class="item-card9-icons">
																<a href="#" class="item-card9-icons1 wishlist active"> <i class="fa fa fa-heart-o"></i></a>
															</div>
															<div class="item-overly-trans">
																<div class="rating-stars">
																	<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="4">
																	<div class="rating-stars-container">
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																	</div>
																</div>

															</div>
														</div>
														<div class="card border-0 mb-0">
															<div class="card-body ">
																<div class="item-card9">
																	<div class="rating-stars">
																		<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
																	</div>
																	<a href="cars.html" class="text-dark">
																		<h4 class="font-weight-semibold mt-1">Nexon</h4>
																	</a>
																	<div class="item-card9-desc mb-2">
																		<a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i> Mumbai</span></a>
																		<a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i> 5 days ago</span></a>
																	</div>
																	<p class=" leading-tight">2.5 VX (Diesel) 7 Seater BS IV</p>
																</div>
															</div>
															<div class="card-footer pt-4 pb-4 pr-4 pl-4">
																<div class="item-card9-footer d-sm-flex">
																	<div class="">
																		<a href="#" class="w-50 mt-1 mb-1 float-left" title="Car type"><i class="fa fa-car text-muted mr-1"></i> Manual</a>
																		<a href="#" class="w-50 mt-1 mb-1 float-left" title="Kilometrs"><i class="fa fa-road text-muted mr-1"></i> 5000Kms</a>
																		<a href="#" class="w-50 mt-1 mb-1 float-left" title="FuealType"><i class="fa fa-tachometer text-muted mr-1"></i> Disel</a>
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
							<img src="<?= $baseURL; ?>/assets/images/media/cars/no.1.png" alt="img">
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
	</section><?php
				echo view('footer.php');
				echo view('model_view.php');

				?>
</body>

</html>