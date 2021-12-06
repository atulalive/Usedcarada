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
						<div class="px-4 py-3 border-bottom">
							<h4 class="mb-0">Categories</h4>
						</div>
						<div class="card-body">
							<div class="" id="container">
								<div class="filter-product-checkboxs">
									<label class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox1" value="option1">
										<span class="custom-control-label">
											<a href="#" class="text-dark">Maruti<span class="label label-secondary float-right"></span></a>
										</span>

									</label>
									
									<label class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox2" value="option2">
										<span class="custom-control-label">
											<a href="#" class="text-dark">Hyundai<span class="label label-secondary float-right"></span></a>
										</span>
									</label>
									
									<label class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox3" value="option3">
										<span class="custom-control-label">
											<a href="#" class="text-dark">Honda<span class="label label-secondary float-right"></span></a>
										</span>
									</label>
									
									<label class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox4" value="option3">
										<span class="custom-control-label">
											<a href="#" class="text-dark">Toyota<span class="label label-secondary float-right"></span></a>
										</span>
									</label>
									
									<label class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox5" value="option3">
										<span class="custom-control-label">
											<a href="#" class="text-dark">Mahindra<span class="label label-secondary float-right"></span></a>
										</span>
									</label>
									
									<label class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox6" value="option3">
										<span class="custom-control-label">
											<a href="#" class="text-dark">Ford<span class="label label-secondary float-right"></span></a>
										</span>
									</label>
									
									<label class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
										<span class="custom-control-label">
											<a href="#" class="text-dark">Volkswagen<span class="label label-secondary float-right"></span></a>
										</span>
									</label>
									
									<label class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
										<span class="custom-control-label">
											<a href="#" class="text-dark">Mercedes-Benz<span class="label label-secondary float-right"></span></a>
										</span>
									</label>
									
									<label class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
										<span class="custom-control-label">
											<a href="#" class="text-dark">Renault<span class="label label-secondary float-right"></span></a>
										</span>
									</label>
									
									<label class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
										<span class="custom-control-label">
											<a href="#" class="text-dark">Tata<span class="label label-secondary float-right"></span></a>
										</span>
									</label>
									
									<label class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
										<span class="custom-control-label">
											<a href="#" class="text-dark">Audi<span class="label label-secondary float-right"></span></a>
										</span>
									</label>
									
									<label class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
										<span class="custom-control-label">
											<a href="#" class="text-dark">Nissan<span class="label label-secondary float-right"></span></a>
										</span>
									</label>
									
									<label class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
										<span class="custom-control-label">
											<a href="#" class="text-dark">BMW<span class="label label-secondary float-right"></span></a>
										</span>
									</label>
									
									<label class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
										<span class="custom-control-label">
											<a href="#" class="text-dark">Chevrolet<span class="label label-secondary float-right"></span></a>
										</span>
									</label>
									
									<label class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
										<span class="custom-control-label">
											<a href="#" class="text-dark">Datsun<span class="label label-secondary float-right"></span></a>
										</span>
									</label>
									
									<label class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
										<span class="custom-control-label">
											<a href="#" class="text-dark">Volvo<span class="label label-secondary float-right"></span></a>
										</span>
									</label>
									
									<label class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
										<span class="custom-control-label">
											<a href="#" class="text-dark">Skoda<span class="label label-secondary float-right"></a>
										</span>
									</label>
									
									<label class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
										<span class="custom-control-label">
											<a href="#" class="text-dark">MG<span class="label label-secondary float-right"></a>
										</span>
									</label>
									
									<label class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
										<span class="custom-control-label">
											<a href="#" class="text-dark">Land Rover<span class="label label-secondary float-right"></a>
										</span>
									</label>
									
									<label class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
										<span class="custom-control-label">
											<a href="#" class="text-dark">Kia<span class="label label-secondary float-right"></a>
										</span>
									</label>
									
								</div>
							</div>
						</div>
						<div class="px-4 py-3 border-bottom border-top">
								<h4 class="mb-0">Price Range</h4>
							</div>
							<div class="card-body">
								<div class="h6">
								   <input type="text" id="price">
								</div>
								<div id="mySlider"></div>
							</div>
						
						<div class="px-4 py-3 border-bottom border-top">
							<h4 class="mb-0">Year</h4>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="form-group col-md-6 mb-0">
									<label for="inputState1" class="col-form-label">Min</label>
									<select id="inputState1" class="form-control select2">
										<option>1995</option>
										<option>1996</option>
										<option>1997</option>
										<option>1998</option>
										<option>1999</option>
										<option>2000</option>
										<option>2001</option>
										<option>2002</option>
										<option>2003</option>
										<option>2004</option>
										<option>2005</option>
										<option>2006</option>
										<option>2007</option>
										<option>2008</option>
										<option>2009</option>
										<option>2010</option>
										<option>2011</option>
										<option>2012</option>
										<option>2013</option>
										<option>2014</option>
										<option>2015</option>
										<option>2016</option>
										<option>2017</option>
										<option>2019</option>
										<option>2019</option>
										<option>2020</option>
									</select>
								</div>
								<div class="form-group col-md-6 mb-0">
									<label for="inputState2" class="col-form-label">Max</label>
									<select id="inputState2" class="form-control select2">
										<option>2021</option>
										<option>2020</option>
										<option>2019</option>
										<option>2018</option>
										<option>2017</option>
										<option>2016</option>
										<option>2015</option>
										<option>2014</option>
										<option>2013</option>
										<option>2012</option>
										<option>2011</option>
										<option>2010</option>
										<option>2009</option>
										<option>2008</option>
										<option>2007</option>
										<option>2006</option>
										<option>2005</option>
										<option>2004</option>
										<option>2003</option>
										<option>2002</option>
										<option>2001</option>
										<option>2000</option>
										<option>1999</option>
										<option>1998</option>
										<option>1997</option>
										<option>1996</option>
										<option>1995</option>
									</select>
								</div>
							</div>
						</div>
						
						<div class="px-4 py-3 border-bottom border-top">
							<h4 class="mb-0">Fuel Type</h4>
						</div>
						<div class="card-body">
							<div class="filter-product-checkboxs">
								<label class="custom-control custom-checkbox mb-2">
									<input type="checkbox" class="custom-control-input" name="checkbox11" value="option1">
									<span class="custom-control-label">
										Electric
									</span>
								</label>
								<label class="custom-control custom-checkbox mb-2">
									<input type="checkbox" class="custom-control-input" name="checkbox11" value="option2">
									<span class="custom-control-label">
										Diesel
									</span>
								</label>
								<label class="custom-control custom-checkbox mb-2">
									<input type="checkbox" class="custom-control-input" name="checkbox11" value="option2">
									<span class="custom-control-label">
										Petrol
									</span>
								</label>
								<label class="custom-control custom-checkbox mb-2">
									<input type="checkbox" class="custom-control-input" name="checkbox11" value="option2">
									<span class="custom-control-label">
										Hybrid
									</span>
								</label>
								<label class="custom-control custom-checkbox mb-2">
									<input type="checkbox" class="custom-control-input" name="checkbox11" value="option2">
									<span class="custom-control-label">
										Petrol+CNG
									</span>
								</label>
								<label class="custom-control custom-checkbox mb-2">
									<input type="checkbox" class="custom-control-input" name="checkbox11" value="option2">
									<span class="custom-control-label">
										Petrol+LPG
									</span>
								</label>
							</div>
						</div>
						
						
						
						
						<div class="card-footer">
							<a href="#" class="btn btn-secondary btn-block">Apply Filter</a>
						</div>
					</div>

				</div>
				<!--/Left Side Content-->

				<div class="col-xl-9 col-lg-9 col-md-12">
					<!--Lists-->
					<div class="card">
						
						<br>
						<div class="card">
						<div class="row">
							<div class="col-lg-6 col-md-12 col-xl-4">
								<div class="card">
									<div class="item-card2-img">
										<a href="widgets.html"></a>
										<img src="../assets/images/media/cars/VCC1.jpg" alt="img" class="cover-image">
									</div>

									<div class="card-body">
										<div class="item-card2">
											<div class="item-card2-desc">
												<h6 class="font-weight-semibold"> 2013 Toyota Innova
													2.5 VX (Diesel) 8 Seater</h6><br>

												<a href="#" class="btn btn-primary text-center">₹ 6,70,500</a>
												<a href="#" class="text-center"> Fixed Price</a>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="item-card2-footer d-flex">
											<div class="item-card2-rating">
												<a href="#"><i class="fa fa-star text-warning"></i></a>
												<a href="#"><i class="fa fa-star text-warning"></i></a>
												<a href="#"><i class="fa fa-star text-warning"></i></a>
												<a href="#"><i class="fa fa-star text-warning"></i></a>
												<a href="#"><i class="fa fa-star-half-o text-warning mr-1"></i>(78 reviews)</a>
											</div>
											<div class="ml-auto">
												<a href="#" class="location"><i class="fa fa-map-marker text-muted mr-1"></i>Mumbai</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12 col-xl-4">
								<div class="card">
									<div class="item-card2-img">
										<a href="widgets.html"></a>
										<img src="../assets/images/media/cars/VCC2.jpg" alt="img" class="cover-image">
									</div>

									<div class="card-body">
										<div class="item-card2">
											<div class="item-card2-desc">
												<h6 class="font-weight-semibold text-left">2015 Maruti Swift Dzire
													VDI
													EMI starts from ₹ 9,952</h6><br>

												<a href="#" class="btn btn-primary">₹ 4,91,500</a>
												<a href="#" class="text-center"> Fixed Price</a>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="item-card2-footer d-flex">
											<div class="item-card2-rating">
												<a href="#"><i class="fa fa-star text-warning"></i></a>
												<a href="#"><i class="fa fa-star text-warning"></i></a>
												<a href="#"><i class="fa fa-star text-warning"></i></a>
												<a href="#"><i class="fa fa-star text-warning"></i></a>
												<a href="#"><i class="fa fa-star-half-o text-warning mr-1"></i>(78 reviews)</a>
											</div>
											<div class="ml-auto">
												<a href="#" class="location"><i class="fa fa-map-marker text-muted mr-1"></i> Pune</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12 col-xl-4">
								<div class="card">
									<div class="item-card2-img">
										<a href="widgets.html"></a>
										<img src="../assets/images/media/cars/VCC3.jpg" alt="img" class="cover-image">
									</div>

									<div class="card-body">
										<div class="item-card2">
											<div class="item-card2-desc">
												<h6 class="font-weight-semibold">2019 Volkswagen Vento
													1.5 TDI Highline</h6><br>

												<a href="#" class="btn btn-primary">₹ 7,11,000</a>
												<a href="#" class="text-center"> Fixed Price</a>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="item-card2-footer d-flex">
											<div class="item-card2-rating">
												<a href="#"><i class="fa fa-star text-warning"></i></a>
												<a href="#"><i class="fa fa-star text-warning"></i></a>
												<a href="#"><i class="fa fa-star text-warning"></i></a>
												<a href="#"><i class="fa fa-star text-warning"></i></a>
												<a href="#"><i class="fa fa-star-half-o text-warning mr-1"></i>(78 reviews)</a>
											</div>
											<div class="ml-auto">
												<a href="#" class="location"><i class="fa fa-map-marker text-muted mr-1"></i> Delhi</a>
											</div>
										</div>
									</div>
								</div>
							</div><br>
							<div class="col-lg-6 col-md-12 col-xl-4">
								<div class="card">
									<div class="item-card2-img">
										<a href="widgets.html"></a>
										<img src="../assets/images/media/cars/VCC3.jpg" alt="img" class="cover-image">
									</div>

									<div class="card-body">
										<div class="item-card2">
											<div class="item-card2-desc">
												<h6 class="font-weight-semibold">2019 Volkswagen Vento
													1.5 TDI Highline</h6><br>

												<a href="#" class="btn btn-primary">₹ 7,11,000</a>
												<a href="#" class="text-center"> Fixed Price</a>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="item-card2-footer d-flex">
											<div class="item-card2-rating">
												<a href="#"><i class="fa fa-star text-warning"></i></a>
												<a href="#"><i class="fa fa-star text-warning"></i></a>
												<a href="#"><i class="fa fa-star text-warning"></i></a>
												<a href="#"><i class="fa fa-star text-warning"></i></a>
												<a href="#"><i class="fa fa-star-half-o text-warning mr-1"></i>(78 reviews)</a>
											</div>
											<div class="ml-auto">
												<a href="#" class="location"><i class="fa fa-map-marker text-muted mr-1"></i> Delhi</a>
											</div>
										</div>
									</div>
								</div>
							</div><div class="col-lg-6 col-md-12 col-xl-4">
								<div class="card">
									<div class="item-card2-img">
										<a href="widgets.html"></a>
										<img src="../assets/images/media/cars/VCC3.jpg" alt="img" class="cover-image">
									</div>

									<div class="card-body">
										<div class="item-card2">
											<div class="item-card2-desc">
												<h6 class="font-weight-semibold">2019 Volkswagen Vento
													1.5 TDI Highline</h6><br>

												<a href="#" class="btn btn-primary">₹ 7,11,000</a>
												<a href="#" class="text-center"> Fixed Price</a>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="item-card2-footer d-flex">
											<div class="item-card2-rating">
												<a href="#"><i class="fa fa-star text-warning"></i></a>
												<a href="#"><i class="fa fa-star text-warning"></i></a>
												<a href="#"><i class="fa fa-star text-warning"></i></a>
												<a href="#"><i class="fa fa-star text-warning"></i></a>
												<a href="#"><i class="fa fa-star-half-o text-warning mr-1"></i>(78 reviews)</a>
											</div>
											<div class="ml-auto">
												<a href="#" class="location"><i class="fa fa-map-marker text-muted mr-1"></i> Delhi</a>
											</div>
										</div>
									</div>
								</div>
							</div><div class="col-lg-6 col-md-12 col-xl-4">
								<div class="card">
									<div class="item-card2-img">
										<a href="widgets.html"></a>
										<img src="../assets/images/media/cars/VCC3.jpg" alt="img" class="cover-image">
									</div>

									<div class="card-body">
										<div class="item-card2">
											<div class="item-card2-desc">
												<h6 class="font-weight-semibold">2019 Volkswagen Vento
													1.5 TDI Highline</h6><br>

												<a href="#" class="btn btn-primary">₹ 7,11,000</a>
												<a href="#" class="text-center"> Fixed Price</a>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="item-card2-footer d-flex">
											<div class="item-card2-rating">
												<a href="#"><i class="fa fa-star text-warning"></i></a>
												<a href="#"><i class="fa fa-star text-warning"></i></a>
												<a href="#"><i class="fa fa-star text-warning"></i></a>
												<a href="#"><i class="fa fa-star text-warning"></i></a>
												<a href="#"><i class="fa fa-star-half-o text-warning mr-1"></i>(78 reviews)</a>
											</div>
											<div class="ml-auto">
												<a href="#" class="location"><i class="fa fa-map-marker text-muted mr-1"></i> Delhi</a>
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
					</div></div>
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