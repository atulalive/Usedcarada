<div class="tab-pane" id="tab-12">
    <div class="row">
        <?php foreach ($all_product_list as $k => $value) { ?>
            <div class="col-lg-6 col-md-12 col-xl-4">
                <div class="card overflow-hidden">
                    <div class="item-card9-img">
                        <div class="arrow-ribbon bg-primary">$748.00</div>
                        <div class="item-card9-imgs">
                            <a class="link" href="cars.html"></a>
                            <img src="<?php echo base_url('./assets/images/media/') . strtolower($value['product_category']) . URL_SEPARATOR . strtolower($value['product_thumbnail']); ?>" alt="img" class="cover-image">
                        </div>
                        <div class="item-card9-icons">
                            <a href="#" class="item-card9-icons1 wishlist"> <i class="fa fa fa-heart-o"></i></a>
                        </div>
                        <div class="item-overly-trans">
                            <div class="rating-stars">
                                <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
                                <div class="rating-stars-container">
                                    <div class="rating-star sm">
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="rating-star sm">
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="rating-star sm">
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="rating-star sm">
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="rating-star sm">
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <span><a href="cars.html" class="bg-gray">Used</a></span>
                        </div>
                    </div>
                    <div class="card border-0 mb-0">
                        <div class="card-body ">
                            <div class="item-card9">
                                <a href="cars.html" class="text-dark"><h4 class="font-weight-semibold mt-1"> Dignissimos</h4></a>
                                <div class="item-card9-desc mb-2">
                                    <a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i> USA</span></a>
                                    <a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i>  2 days ago</span></a>
                                </div>
                                <p class="mb-0 leading-tight">Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                            </div>
                        </div>
                        <div class="card-footer pt-4 pb-4 pr-4 pl-4">
                            <div class="item-card9-footer d-sm-flex">
                                <div class="ml-auto">
                                    <a href="#" class="w-50 mt-1 mb-1 float-left" title="Car type"><i class="fa fa-car  mr-1 text-muted"></i>  Automatic</a>
                                    <a href="#" class="w-50 mt-1 mb-1 float-left" title="Kilometrs"><i class="fa fa-road text-muted mr-1 "></i>4000Kms</a>
                                    <a href="#" class="w-50 mt-1 mb-1 float-left" title="FuealType"><i class="fa fa-tachometer text-muted mr-1"></i>Electric</a>
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
<!-- 
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