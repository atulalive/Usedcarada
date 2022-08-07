<?php

use App\Models\Products;

// $pro_detail = new Products();
// $budget_best_price_range = $pro_detail->getBudegetPriceRange();
// $sub_category = $pro_detail->get_product_sub_category(['category' => 'cars']);
// $brand = $pro_detail->get_product_brands(['is_brand' => true]);

?>

<!doctype html>
<html class="no-js" lang="en">
<?php echo view('header.php'); ?>

<body>

	<?php echo view('topbar.php'); ?>
	

	

	<!-- Popup Login-->

	<!-- End Popup Login-->



	<?php

   	// echo view('themostusedcar_view.php');
	// echo view('trustedUsedCar_view.php');
	// echo view('Trustedbybudget_view.php');
	// echo view('brands_view.php');
//	echo view('bymodel_view.php');
	// //echo view('budget_view.php');
	//echo view('mostUsedCar_view.php');
	// // echo view('popularbrands_view.php');
	//echo view('lestedcar_view.php');
	//echo view('top_cities_view.php');
//	echo view('usedcar_topcities_view.php');
	echo view('footer.php');
	echo view('model_view.php');

	?>
</body>

</html>
