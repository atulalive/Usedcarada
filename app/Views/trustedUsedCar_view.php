<?php

use App\Models\Products;

$pro_detail = new Products();
$data = ['category' => 'cars']; // category come from session
$product_sub_category = $pro_detail->get_product_sub_category($data);
$all_product_list = $pro_detail->get_sub_category_product_list($data);
// print_r($product_sub_category);
$count = 1;
$countt = 1;
?>

<!--Section-->
<section class="sptb">
    <div class="container ">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12">
                    <div class="items-gallery">
                        <div class="items-blog-tab text-left">
                            <div class="items-blog-tab-heading  center-block text-left">
                                <h2>Trusted used cars by Model</h2><br>
                                <div class="col-12">
                                    <ul class="nav items-blog-tab-menu">
                                        <li class=""><a href="#tab-1" class="active show" data-toggle="tab">All</a></li>
                                        <?php
                                        foreach ($product_sub_category as $k => $value) {
                                            $count++;
                                            echo '<li><a href="#tab-' . $count . '" data-toggle="tab" class="">' . $value['sub_category_name'] . '</a></li>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab-1">
                                    <div id="myCarousel1" class="owl-carousel owl-carousel-icons2">
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
                                                    <a class="btn btn-primary btn-lg " href="<?php echo base_url() . '/cardetails' . URL_SEPARATOR . strtolower($value['product_category']) . URL_SEPARATOR . strtolower($value['product_alias_name']); ?>">view Details</a>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <?php
                                foreach ($product_sub_category as $k => $value) {
                                    $countt++;
                                ?>
                                <div class="tab-pane" id="tab-<?php echo $countt; ?>">
                                    <div id="myCarousel1" class="owl-carousel owl-carousel-icons2">
                                        <?php
                                        $sub_category_product_list = $pro_detail->get_sub_category_product_list(['sub_cat_id' => $value['sub_cat_id']]);
                                        foreach ($sub_category_product_list as $key => $sub_value) {
                                        ?>
                                            <div class="item">
                                                <div class="card mb-0">
                                                    <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
                                                    <div class="item-card2-img">
                                                        <a class="link" href="<?php echo base_url() . '/cardetails' . URL_SEPARATOR . strtolower($sub_value['product_category']) . URL_SEPARATOR . strtolower($sub_value['product_alias_name']); ?>"></a>
                                                        <img src="<?php echo URL_IMAGES_MEDIA . strtolower($sub_value['product_category']) . URL_SEPARATOR . strtolower($sub_value['product_thumbnail']); ?>" alt="img" class="cover-image">
                                                        <div class="item-tag-overlaytext">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <div class="item-card2-text">
                                                                    <a href="<?php echo base_url() . '/cardetails' . URL_SEPARATOR . strtolower($sub_value['product_category']) . URL_SEPARATOR . strtolower($sub_value['product_alias_name']); ?>" class="text-dark">
                                                                        <h4 class="mb-0"><?php echo $sub_value['product_name']; ?></h4>
                                                                    </a>
                                                                </div>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"></i><?php echo number_to_currency($sub_value['product_sell_price'], 'INR', $locale = 1); ?></p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary btn-lg " href="<?php echo base_url() . '/cardetails' . URL_SEPARATOR . strtolower($sub_value['product_category']) . URL_SEPARATOR . strtolower($sub_value['product_alias_name']); ?>">view Details</a>
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
<!--Section-->
<br>