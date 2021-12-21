<?php

use App\Models\Products;

$pro_detail = new Products();
$product_brands = $pro_detail->get_product_brands(['is_brand'=>true]);
?>
<section class="sptb">
	<div class="container ">
		<div class="card">
			<div class="card-body">
				<div class="col-md-12">
					<div class="items-gallery">
						<div class="items-blog-tab text-left">
							<div class="items-blog-tab-heading  center-block text-left">
								<h4>Popular Brands</h4>
								<hr class="deep-purple text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto" style="padding-top:20px">
							</div>

							<div id="small-categories" class="owl-carousel owl-carousel-icons2">
								<?php if(!empty($product_brands) && is_array($product_brands)) {
									foreach($product_brands as $brand_val)	{
								?>
								<div class="item">
									<div class="card mb-0">
										<div class="card-body">
											<div class="cat-item text-center">
												<a href="<?php echo  base_url() .URL_SEPARATOR. 'brand'.URL_SEPARATOR.$brand_val['machine_name']; ?>"></a>
												<div class="cat-img1">
													<img src="<?php echo URL_IMAGES_MEDIA.'brands'.URL_SEPARATOR.$brand_val['brand_thumbnail_image'] ?>" alt="img" class="mx-auto">
												</div>
												<div class="cat-desc">
													<h5 class="mb-1"><?php echo $brand_val['brand_name']; ?></h5>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php }
								} ?>
							</div>
						</div>
					</div>
				</div>
			</div>
</section>
<!--/Section-->