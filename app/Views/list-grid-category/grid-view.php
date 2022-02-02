<?php

// use App\Models\Products;

// $pro_detail = new Products();
// $data = ['category' => 'cars']; // category come from session
// $product_sub_category = $pro_detail->get_product_sub_category($data);
// $all_product_list = $pro_detail->get_sub_category_product_list($data);
// print_r($product_sub_category);

?>
<div class="tab-pane" id="tab-12">
    <div class="row">
        <?php foreach ($all_product_list as $k => $value) { ?>
            <div class="col-lg-6 col-md-12 col-xl-4">
                <div class="card overflow-hidden">
                    <div class="item-card9-img">
                        <div class="arrow-ribbon bg-primary">
                        <div class="arrow-ribbon bg-danger " style="margin-top:125%;"><i class="fa fa-eye"></i>7</div>
                            <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                <?php
                                if (ACTIVE_MODE == MODE_DEVELOPMENT) {
                                    echo number_to_currency($value['product_sell_price'], 'INR', $locale = 1);
                                } else  if (ACTIVE_MODE == MODE_DEVELOPMENT) {
                                    echo $money_format('&#x20b9;%!n', $value['product_sell_price']);
                                }
                                ?>
                            </p>
                        </div>
                        <div class="item-card9-imgs">
                            <a class="link" href="cars.html"></a>
                            <a class="link" href="<?php echo base_url() . '/cardetails' . URL_SEPARATOR . strtolower($value['product_category']) . URL_SEPARATOR . strtolower($value['product_alias_name']); ?>"></a>
                            <img src="<?php echo URL_IMAGES_MEDIA . strtolower($value['product_category']) . URL_SEPARATOR . strtolower($value['product_thumbnail']); ?>" alt="img" class="cover-image">
                        </div>
                        <div class="item-card9-icons">
                           

                            <a href="" class="bg-white"><img src="<?php echo URL_IMAGES_MEDIA . 'brands' . URL_SEPARATOR . $value['brand_thumbnail_image'] ?>" alt="img" class="mx-auto"></a>
                            </a>
                            <!-- <div class=" text-white bg-primary " style="margin-top:330%;"><i class="fa fa-camera"></i>7
                        </div> -->
                            </div>
                    </div>

                    <div class="card border-0 mb-0 ">

                        <div class="card-body  ">
                            <div class="item-card9-img ">

                                <a href="<?php echo base_url() . '/cardetails' . URL_SEPARATOR . strtolower($value['product_category']) . URL_SEPARATOR . strtolower($value['product_alias_name']); ?>" class="text-dark">

                                    <h4 class="mb-0"><?php echo $value['product_name']; ?></h4>
                                    <h4 class="mb-0"><?php echo $value['name']; ?></h4>

                                </a>
                                <div class=" mb-2"><br>
                                    <b> <a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i><b><?php echo ucwords($value['make_year']); ?></span></a></b>
                                   <del> <a href="#" class="mr-4"style=padding-left:30%;><span class=""> <?php
                                                                                if (ACTIVE_MODE == MODE_DEVELOPMENT) {
                                                                                    echo number_to_currency($value['product_sell_price'], 'INR', $locale = 1);
                                                                                } else  if (ACTIVE_MODE == MODE_DEVELOPMENT) {
                                                                                    echo $money_format('&#x20b9;%!n', $value['product_sell_price']);
                                                                                }
                                                                                ?></span></a></b><del>
                                </div>
                                <div class="item-card9-desc mb-2">
                                    <a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i>Mumbai</span></a>
                                    <a href="#" class="mr-4"style=padding-left:5%;><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i> 2 days ago</span></a>
                                </div>


                            </div>
                            <div class="card-footer pt-4 pb-4 pr-4 pl-4">
                                <div class="item-card9-footer d-sm-flex">
                                    <div class="ml-auto">
                                        <a href="<?php echo base_url() . '/cardetails' . URL_SEPARATOR . strtolower($value['product_category']) . URL_SEPARATOR . strtolower($value['product_alias_name']); ?>" class="text-dark">
                                            <a href="#" class="w-50 mt-1 mb-1 float-left" title="Car type"><i class="fa fa-car  mr-1 text-muted"></i> <?php echo ucwords($value['fuel']); ?></a>
                                            <a href="#" class="w-50 mt-1 mb-1 float-left" title="Kilometrs"><i class="fa fa-road text-muted mr-1 "></i><?php echo ucwords($value['kms_driven']); ?></a>
                                            <a href="#" class="w-50 mt-1 mb-1 float-left" title="FuealType"><i class="fa fa-tachometer text-muted mr-1"></i><?php echo ucwords($value['transmission']); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<!-- -------------------------------=
================================= -->
<!----
    <?php foreach ($all_product_list as $k => $value) { ?>
    <div class="row">
        <div class="col-lg-6 col-md-12 col-xl-4">
            <div class="card overflow-hidden">
                <div class="item-card9-img">

                    <div class="arrow-ribbon bg-primary">₹4,32,340</div>
                        <div class="item-card9-imgs">
                            <a class="link" href="cars.html"></a>
                            <a class="link" href="<?php echo base_url() . '/cardetails' . URL_SEPARATOR . strtolower($value['product_category']) . URL_SEPARATOR . strtolower($value['product_alias_name']); ?>"></a>
                    
                            <img src="<?php echo URL_IMAGES_MEDIA . strtolower($value['product_category']) . URL_SEPARATOR . strtolower($value['product_thumbnail']); ?>" alt="img" class="cover-image">
                        </div>

                        <div class="item-card9-icons">
                            <a href="#" class="item-card9-icons1 wishlist"> <i class="fa fa fa-heart-o"></i></a>
                        </div>
                    </div>

                <div class="card border-0 mb-0">
                    <div class="card-body ">
                        <div class="item-card9">
                            <a href="<?php echo base_url() . '/cardetails' . URL_SEPARATOR . strtolower($value['product_category']) . URL_SEPARATOR . strtolower($value['product_alias_name']); ?>" class="text-dark">
                                <h4 class="mb-0"><?php echo $value['product_name']; ?></h4>  
                            </a>
                            <div class="item-card9-desc mb-2">
                                <a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i> Mumbai</span></a>
                                <a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i> 2 days ago</span></a>
                            </div>
                            <p class="mb-0 leading-tight">2.0 TDI</p>
                        </div>
                    </div>
                    <div class="card-footer pt-4 pb-4 pr-4 pl-4">
                        <div class="item-card9-footer d-sm-flex">
                            <div class="ml-auto">
                                <a href="#" class="w-50 mt-1 mb-1 float-left" title="Car type"><i class="fa fa-car  mr-1 text-muted"></i> Automatic</a>
                                <a href="#" class="w-50 mt-1 mb-1 float-left" title="Kilometrs"><i class="fa fa-road text-muted mr-1 "></i>4000Kms</a>
                                <a href="#" class="w-50 mt-1 mb-1 float-left" title="FuealType"><i class="fa fa-tachometer text-muted mr-1"></i>Electric</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?> -->