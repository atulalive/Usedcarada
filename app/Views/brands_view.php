
<?php

use App\Models\Products;

$pro_detail = new Products();
$product_brands = $pro_detail->get_product_brands(['is_brand'=>true]);
?>
<section class="sptb">
			<div class="container">
				<div class="section-title center-block text-center">
					<h2>Popular Brands</h2>
					<p>View different used car options by your favourite brands</p>
				</div>
				<div id="small-categories" class="owl-carousel owl-carousel-icons2">
				<?php if(!empty($product_brands) && is_array($product_brands)) {
									foreach($product_brands as $brand_val)	{
								?>
					<div class="item">
						<div class="card mb-4">
							<div class="card-body">
							<div class="cat-item text-center">
												<a href="<?php echo  base_url() .URL_SEPARATOR. 'brand'.URL_SEPARATOR.$brand_val['machine_name']; ?>"></a>
												<div class="cat-img1">
													<img src="<?php echo URL_IMAGES_MEDIA.'brands'.URL_SEPARATOR.$brand_val['brand_thumbnail_image'] ?>" alt="img" class="mx-auto">
												</div>
												<div class="cat-desc">
													<h5 class="mb-1"><?php echo $brand_val['brand_name']; ?></h5>
													<small class="badge badge-pill badge-primary mr-2">19</small><span class="text-muted">Ads are Posted</span>
												</div>
											</div>
							</div>
						</div>
					</div><?php }
								} ?>
					
		</section>