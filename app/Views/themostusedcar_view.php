
<?php

use App\Models\Products;

$pro_detail = new Products();
$data = ['category' => 'cars']; // category come from session
$product_sub_category = $pro_detail->get_product_sub_category($data);
$all_product_list = $pro_detail->get_sub_category_product_list($data);

?>
<section class="sptb bg-white">
			<div class="container">
            <div class="card">
            <div class="card-body">
				<div class="section-title center-block text-center">
					<h2> Most Searched Used Car</h2>
					<p>Take a look to the most searched high quality used cars</p>
				</div>
				<div id="myCarousel1" class="owl-carousel owl-carousel-icons2">
				<?php foreach ($all_product_list as $k => $value) { ?>
					<div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span>
                                                </div>
                                                    <div class="item-card2-img">
                                                        
                                                        <a class="link" href="<?php echo base_url() . '/cardetails' . URL_SEPARATOR . strtolower($value['product_category']) . URL_SEPARATOR . strtolower($value['product_alias_name']); ?>"></a>
                                                        
                                                        <img src="<?php echo base_url('./assets/images/media/') . strtolower($value['product_category']) . URL_SEPARATOR . strtolower($value['product_thumbnail']); ?>" alt="img" class="cover-image">
                                                         
                                                        <div class="item-tag-overlaytext">
                                                        
														</div>
                                                    </div><div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="<?php echo base_url() . '/cardetails' . URL_SEPARATOR . strtolower($value['product_category']) . URL_SEPARATOR . strtolower($value['product_alias_name']); ?>" class="text-dark">
                                                                        <h4 class="mb-0"><?php echo $value['product_name']; ?></h4>
																		
                                                                    </a>
																	
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                                                    <?php
                                                                        if(ACTIVE_MODE == MODE_DEVELOPMENT){
                                                                            echo number_to_currency($value['product_sell_price'], 'INR', $locale = 1);
                                                                        } else  if(ACTIVE_MODE == MODE_DEVELOPMENT){
                                                                            echo $money_format('&#x20b9;%!n',$value['product_sell_price']);
                                                                        }
                                                                    ?>
                                                                </p>
                                                                </a><div class="card-footer pt-4 pb-4 pr-4 pl-4">
                                                                    <div class="item-card9-footer d-sm-flex">
                                                                        <div class="ml-auto">
																	<a href="<?php echo base_url() . '/cardetails' . URL_SEPARATOR . strtolower($value['product_category']) . URL_SEPARATOR . strtolower($value['product_alias_name']); ?>" class="text-dark">
																	
                                                                        <a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i class="fa fa-tachometer text-muted mr-1"></i><?php echo $value['fuel']; ?></a>
																		<a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i class="fa fa-road text-muted mr-1 "></i><?php echo $value['kms_driven']; ?></a>
																		<a href class="w-50 mt-1 mb-1 float-left" title="Car type"><i class="fa fa-car  mr-1 text-muted"></i><?php echo $value['transmission']; ?></a>
																		
                                                                    </a></div></div></div>
                                                            </div></div>
									

                                                        </div>
                                                    </div>
                                                    </div>	<?php } ?></div>
                                                    </div></div>
                                                    </div></div> 
			
		</section>