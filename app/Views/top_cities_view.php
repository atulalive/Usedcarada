<?php

use App\Models\Products;

$pro_detail = new Products();
$top_cities = $pro_detail->get_top_cities(['is_brand' => true]);
?>
<section class="sptb bg-white">
	<div class="container">
		<div class="card">
			<div class="card-body">
				<div class="section-title center-block text-center">
					<h2>Used cars In top Cities In India</h2>
					<p>Get high quality used car in your city</p>
				</div>
				<div class="row">
					<?php if (!empty($top_cities) && is_array($top_cities)) {
						foreach ($top_cities as $top_cities_val) {
					?>
							<div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
								<div class="card bg-card mb-lg-0">
									<div class="card-body bg-white">
										<div class="cat-item text-center">
											<div class="cat-img text-shadow1 bg-white">
												<a href="<?php echo  base_url() . URL_SEPARATOR . 'city' . URL_SEPARATOR . strtolower($top_cities_val['city_name']); ?>"></a>

												<img src="<?php echo URL_IMAGES_MEDIA . 'cities' . URL_SEPARATOR . $top_cities_val['city_image_thumbnail'] ?>" alt="img" class="mx-auto">
											</div>
											<div class="cat-desc">
												<h5 class="mb-1"><?php echo ucwords($top_cities_val['city_state']); ?></h5>
											</div>
										</div>
									</div>
								</div>
							</div>

   					<?php }
					} ?><br>
				</div>
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
						<div class="widgets-cards-icons" style="padding-left: 50px;">
							<div class="wrp icon-circle bg-primary">
								<i class="fa fa-phone icons"></i>
							</div>
						</div>
						<div class="mt-3">
							<h6>Call us Today</h6>
							<h3><a href="#" class="text-white">+91 76662 93377 </a></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section><br><br><br><br>