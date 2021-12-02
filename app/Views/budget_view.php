<?php

use App\Models\Products;

$pro_detail = new Products();
$data = ['category' => 'cars', 'sort' => 'DESC', 'sorting_column' => 'products_price.product_sell_price']; // category come from session
$product_detail = $pro_detail->product_detail($data);
$product_sub_category = $pro_detail->get_product_sub_category($data);
$all_product_list = $pro_detail->get_sub_category_product_list($data);
$lastkey = array_pop(array_keys($product_detail));
$budegetPriceRange = $pro_detail->getBudegetPriceRange(['product_max_price' => $product_detail[0]['product_sell_price']]);
// print_r($budegetPriceRange);
$bud_count = 1;
$bud_countt = 1;
?>
<section class="sptb">
    <div class="container ">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12">
                    <div class="items-gallery">
                        <div class="items-blog-tab text-left">
                            <div class="items-blog-tab-heading  center-block text-left">
                                <h2>Trusted used cars by Budget</h2><br>
                                <div class="col-12">
                                    <ul class="nav items-blog-tab-menu">
                                        <li class=""><a href="#tab-bud1" class="active show" data-toggle="tab">Used Cars</a></li>
                                        <?php
                                        foreach ($budegetPriceRange as $k => $value) {
                                            $bud_count++;
                                            echo '<li class="budget-range" ><a href="#tab-bud' . $bud_count . '" data-toggle="tab" class="">'.$value['display_price_range'].'</a></li>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab-bud1">
                                    <div id="myCarousel" class="owl-carousel owl-carousel-icons2">
                                        <?php foreach ($all_product_list as $k => $value) { ?>
                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="<?php echo base_url() . '/cardetails' . URL_SEPARATOR . strtolower($value['product_category']) . URL_SEPARATOR . strtolower($value['product_alias_name']); ?>"></a>
                                                        <img src="<?php echo URL_IMAGES_MEDIA . strtolower($value['product_category']) . URL_SEPARATOR . strtolower($value['product_thumbnail']); ?>" alt="img" class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="<?php echo base_url() . '/cardetails' . URL_SEPARATOR . strtolower($value['product_category']) . URL_SEPARATOR . strtolower($value['product_alias_name']); ?>" class="text-dark">
                                                                        <h4 class="mb-0"><?php echo $value['product_name']; ?></h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i><?php echo number_to_currency($value['product_sell_price'], 'INR', $locale = 1); ?></p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class=" " style="margin-left:25px;" href="<?php echo base_url() . '/cardetails' . URL_SEPARATOR . strtolower($value['product_category']) . URL_SEPARATOR . strtolower($value['product_alias_name']); ?>">90,280km . Diesel . Noida</a>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <?php
                                foreach ($budegetPriceRange as $k => $value) {
                                    $bud_countt++;
                                ?>
                                    <div class="tab-pane" id="tab-bud<?php echo $bud_countt; ?>">
                                        <div id="myCarousel1" class="owl-carousel owl-carousel-icons2">
                                            <?php
                                            $single_product_detail = $pro_detail->product_detail(['product_sell_min_price' => $value['min_price'], 'product_sell_max_price' => $value['max_price']]);
                                            foreach ($single_product_detail as $single_k => $single_product_value) {
                                            ?>
                                                <div class="item budget-range">
                                                    <div class="card mb-0">
                                                        <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
                                                        <div class="item-card2-img">
                                                            <a class="link" href="<?php echo base_url() . '/cardetails' . URL_SEPARATOR . strtolower($single_product_value['product_category']) . URL_SEPARATOR . strtolower($single_product_value['product_alias_name']); ?>"></a>
                                                            <img src="<?php echo URL_IMAGES_MEDIA . strtolower($single_product_value['product_category']) . URL_SEPARATOR . strtolower($single_product_value['product_thumbnail']); ?>" alt="img" class="cover-image">
                                                            <div class="item-tag-overlaytext">
                                                            </div>
                                                        </div>
                                                        <div class="card-body pb-0">
                                                            <div class="item-card2">
                                                                <div class="item-card2-desc">
                                                                    <div class="item-card2-text">
                                                                        <a href="<?php echo base_url() . '/cardetails' . URL_SEPARATOR . strtolower($single_product_value['product_category']) . URL_SEPARATOR . strtolower($single_product_value['product_alias_name']); ?>" class="text-dark">
                                                                            <h4 class="mb-0"><?php echo $single_product_value['product_name']; ?></h4>
                                                                        </a>
                                                                    </div>
                                                                    <p class="pb-0 pt-0 mb-2 mt-2"></i><?php echo number_to_currency($single_product_value['product_sell_price'], 'INR', $locale = 1); ?></p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class=" " style="margin-left:25px;" href="<?php echo base_url() . '/cardetails' . URL_SEPARATOR . strtolower($single_product_value['product_category']) . URL_SEPARATOR . strtolower($single_product_value['product_alias_name']); ?>">90,280km . Diesel . Noida</a>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>