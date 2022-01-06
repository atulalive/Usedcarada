<?php

use App\Models\Products;

$pro_detail = new Products();
$budget_best_price_range = $pro_detail->getBudegetPriceRange();
$sub_category = $pro_detail->get_product_sub_category(['category' => 'cars']);
$brand = $pro_detail->get_product_brands(['is_brand' => true]);

?>

<!doctype html>
<html class="no-js" lang="en">
<?php echo view('header.php'); ?>

<body>

	<?php echo view('topbar.php'); ?>

	<!--Section-->
	<div>
		<div class="cover-image sptb-1 bg-background-r" data-image-src="<?php echo base_url(); ?>/assets/images/banners/banner.jpg">
			<div class="header-text1 mb-0">
				<div class="container">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-12">
							<div class="card mb-0 shadow-none">
								<div class="card-body">
									<h2 class="mb-4">Find Your Right Car</h2>
									<hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
									<div class="row">
										<div class="form-group col-6">
											<label class="custom-control custom-radio mr-4">
												<input type="radio" class="custom-control-input" name="by-Budget-Model" value="budget" checked onchange="filterByBudgetByModel(this)">
												<span class="custom-control-label">By Budget</span>
											</label>
										</div>
										<div class="form-group col-6">
											<label class="custom-control custom-radio">
												<input type="radio" class="custom-control-input" name="by-Budget-Model" value="model" onchange="filterByBudgetByModel(this)">
												<span class="custom-control-label">By Model</span>
											</label>
										</div>
									</div>
									<div id="for-budget" class="row">
										<div class="col-md-12">
											<div class="form-group search-cars1">
												<select class="form-control select2-show-search border-bottom-0 w-100 br-3" name="budget-select" data-placeholder="Select">
													<option value="null">Select Budget</option>
													<?php foreach ($budget_best_price_range as $k => $value) {
														echo '<option value="' . $value['id'] . '">' . ucwords($value['display_price_range']) . '</option>';
													} ?>
												</select>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group search-cars1">
												<select class="form-control select2-show-search border-bottom-0 w-100 br-3" name="vechicle-select" data-placeholder="Select">
													<option value="null">All Vechicle Type</option>
													<?php foreach ($sub_category as $k => $value) {
														echo '<option value="' . $value['sub_category_alias_name'] . '">' . ucwords($value['sub_category_name']) . '</option>';
													} ?>
												</select>
											</div>
										</div>
									</div>
									<div id="for-model" class="row">
										<div class="col-md-12">
											<div class="form-group search-cars1">
												<select class="form-control select2-show-search border-bottom-0 w-100 br-3" name="brand-select" data-placeholder="Select" onchange="loadModelList(this)">
													<option value="null">Select Brand</option>
													<?php foreach ($brand as $k => $value) {
														echo '<option value="' . $value['machine_name'] . '">' . ucwords($value['brand_name']) . '</option>';
													} ?>
												</select>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group search-cars1">
												<select class="form-control select2-show-search border-bottom-0 w-100 br-3" name="model-select" data-placeholder="Select Model">
													<option value="null">Select Model</option>
												</select>
											</div>
										</div>
									</div>
									<button type="button" id="btn-search" name="btn-search" class="btn btn-primary btn-lg btn-block" onclick="getSearch(this)">Search</button>
								</div>
							</div>
						</div>
						<div class="col-xl-7 col-lg-7 col-md-12" style="display: none;">
							<div class="text-white mt-lg-8 mb-5">
								<h1 class="mb-3 display-3">Used <span class="font-weight-bold"> Car Ka,</span><br> Naya Adda</h1>
								<a href="#" class="btn btn-primary btn-lg mr-2">View More</a>
								<a href="#" class="btn btn-success btn-lg">Contact Us</a>
							</div>
						</div>
					</div>
				</div>
			</div><!-- /header-text -->
		</div>
	</div>
	<!--Section-->

	<!-- Popup Login-->

	<!-- End Popup Login-->



	<?php
   echo view('themostusedcar_view.php');
   
	echo view('trustedUsedCar_view.php');
	echo view('Trustedbybudget_view.php');
	echo view('brands_view.php');
	echo view('bymodel_view.php');
echo view('budget_view.php');
	echo view('mostUsedCar_view.php');
	 echo view('popularbrands_view.php');
	 echo view('lestedcar_view.php');


	 echo view('usedcar_topcities_view.php');



	echo view('footer.php');
	echo view('model_view.php');

	?>
</body>

</html>