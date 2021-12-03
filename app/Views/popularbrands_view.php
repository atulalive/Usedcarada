<?php

use App\Models\Products;

$pro_detail = new Products();

$product_brand = $pro_detail->getProductbrand($data);?>
<section class="sptb">
	<div class="container ">
		<div class="card">
			<div class="card-body">
				<div class="col-md-12">
					<div class="items-gallery">
						<div class="items-blog-tab text-left">
							<div class="items-blog-tab-heading  center-block text-left">
								<h2>Popular Brands</h2>
								<hr class="deep-purple text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto" style="padding-top:20px">

							</div>
							
							<div id="small-categories" class="owl-carousel owl-carousel-icons2">
								<div class="item">
									<div class="card mb-8">
										<div class="card-body">
											<div class="cat-item text-center">
												<a href="cars-list.html"></a>
												<a class="link" href="<?php echo base_url()  . URL_SEPARATOR . strtolower($value['product_brand']) . URL_SEPARATOR . strtolower($value['brand_name']); ?>"></a>
                                                        <img src="<?php echo URL_IMAGES_MEDIA . strtolower($value['brand_name']) . URL_SEPARATOR . strtolower($value['brand_thumbnail_image']); ?>" alt="img" class="cover-image">
											</div>
										</div>
										
									</div>
								</div>
								<div class="item">
									<div class="card mb-8">
										<div class="card-body">
											<div class="cat-item text-center">
												<a href="cars-list.html"></a>
												<div class="cat-img1">
													<img src="<?php echo base_url(); ?>/assets/images/media/brands/c2.jpg" alt="img" class="mx-auto">
												</div>
												<div class="cat-desc">
													<h5 class="mb-1">Hyundai</h5>

												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="card mb-0">
										<div class="card-body">
											<div class="cat-item text-center">
												<a href="cars-list.html"></a>
												<div class="cat-img1">
													<img src="<?php echo base_url(); ?>/assets/images/media/brands/c3.jpg" alt="img" class="mx-auto">
												</div>
												<div class="cat-desc">
													<h5 class="mb-1">Honda</h5>

												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="card mb-0">
										<div class="card-body">
											<div class="cat-item text-center">
												<a href="cars-list.html"></a>
												<div class="cat-img1">
													<img src="<?php echo base_url(); ?>/assets/images/media/brands/c4.jpg" alt="img" class="mx-auto">
												</div>
												<div class="cat-desc">
													<h5 class="mb-1">Tata</h5>

												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="card mb-0">
										<div class="card-body">
											<div class="cat-item text-center">
												<a href="cars-list.html"></a>
												<div class="cat-img1">
													<img src="<?php echo base_url(); ?>/assets/images/media/brands/c5.jpg" alt="img" class="mx-auto">
												</div>
												<div class="cat-desc">
													<h5 class="mb-1">Mahindra</h5>

												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="card mb-0">
										<div class="card-body">
											<div class="cat-item text-center">
												<a href="cars-list.html"></a>
												<div class="cat-img1">
													<img src="<?php echo base_url(); ?>/assets/images/media/brands/c6.jpg" alt="img" class="mx-auto">
												</div>
												<div class="cat-desc">
													<h5 class="mb-1">Skoda</h5>

												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="card mb-0">
										<div class="card-body">
											<div class="cat-item text-center">
												<a href="cars-list.html"></a>
												<div class="cat-img1">
													<img src="<?php echo base_url(); ?>/assets/images/media/brands/c7.jpg" alt="img" class="mx-auto">
												</div>
												<div class="cat-desc">
													<h5 class="mb-1">Renaultr</h5>

												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="card mb-0">
										<div class="card-body">
											<div class="cat-item text-center">
												<a href="cars-list.html"></a>
												<div class="cat-img1">
													<img src="<?php echo base_url(); ?>/assets/images/media/brands/c8.jpg" alt="img" class="mx-auto">
												</div>
												<div class="cat-desc">
													<h5 class="mb-1">Ford</h5>

												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="card mb-0">
										<div class="card-body">
											<div class="cat-item text-center">
												<a href="cars-list.html"></a>
												<div class="cat-img1">
													<img src="<?php echo base_url(); ?>/assets/images/media/brands/c9.jpg" alt="img" class="mx-auto">
												</div>
												<div class="cat-desc">
													<h5 class="mb-1">Nissan</h5>

												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="card mb-0">
										<div class="card-body">
											<div class="cat-item text-center">
												<a href="cars-list.html"></a>
												<div class="cat-img1">
													<img src="<?php echo base_url(); ?>/assets/images/media/brands/c10.jpg" alt="img" class="mx-auto">
												</div>
												<div class="cat-desc">
													<h5 class="mb-1">Toyota</h5>

												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="card mb-0">
										<div class="card-body">
											<div class="cat-item text-center">
												<a href="cars-list.html"></a>
												<div class="cat-img1">
													<img src="<?php echo base_url(); ?>/assets/images/media/brands/c11.jpg" alt="img" class="mx-auto">
												</div>
												<div class="cat-desc">
													<h5 class="mb-1">MG</h5>

												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="card mb-0">
										<div class="card-body">
											<div class="cat-item text-center">
												<a href="cars-list.html"></a>
												<div class="cat-img1">
													<img src="<?php echo base_url(); ?>/assets/images/media/brands/c12.jpg" alt="img" class="mx-auto">
												</div>
												<div class="cat-desc">
													<h5 class="mb-1">Kia</h5>

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
</section>
<!--/Section-->