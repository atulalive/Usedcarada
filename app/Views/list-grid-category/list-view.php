<div class="tab-pane active" id="tab-11">
    <?php foreach ($all_product_list as $k => $value) { ?>
        <div class="card overflow-hidden">
            <div class="d-md-flex">
                <div class="item-card9-img">
                    <div class="arrow-ribbon bg-primary">
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
                        <a class="link" href="<?php echo base_url() . '/cardetails' . URL_SEPARATOR . strtolower($value['product_category']) . URL_SEPARATOR . strtolower($value['product_alias_name']); ?>"></a>
                        <img src="<?php echo URL_IMAGES_MEDIA . strtolower($value['product_category']) . URL_SEPARATOR . strtolower($value['product_thumbnail']); ?>" alt="img" class="cover-image">
                    </div>
                    <div class="item-card9-icons">
                    <a href="#" class="bg-white"><img src="<?php echo URL_IMAGES_MEDIA.'brands'.URL_SEPARATOR.$value['brand_thumbnail_image'] ?>" alt="img" class="mx-auto"></a>
                    </div>

                </div>
                <div class="card border-0 mb-0">
                    <div class="card-body ">
                        <div class="item-card9">
                            <a href="<?php echo base_url() . '/cardetails' . URL_SEPARATOR . strtolower($value['product_category']) . URL_SEPARATOR . strtolower($value['product_alias_name']); ?>" class="text-dark">
                                <h4 class="mb-0"><?php echo $value['product_name']; ?></h4>
                                <h4 class="mb-0"><?php echo $value['name']; ?></h4>
                            </a>
                            <div class=" mb-2"><br>
                                <b> <a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i><b><?php echo ucwords($value['make_year']); ?></span></a></b>
                                <a href="#" class="mr-4"><span class=""> 
                                 <?php
                                      if (ACTIVE_MODE == MODE_DEVELOPMENT) {
                                          echo number_to_currency($value['product_sell_price'], 'INR', $locale = 1);
                                            } else  if (ACTIVE_MODE == MODE_DEVELOPMENT) {
                                             echo $money_format('&#x20b9;%!n', $value['product_sell_price']);
                                                 }
                                        ?></span></a></b>
                            </div>
                            <div class="item-card9-desc mb-2">
                                <a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i> USA</span></a>
                                <a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i> 2 days ago</span></a>
                            </div>


                        </div>
                    </div>
                    <div class="card-footer pt-4 pb-4 pr-4 pl-4">
                        <div class="item-card9-footer d-sm-flex">
                            <div class="item-card9-cost">
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
                            <div class="ml-auto">
                                <a href="<?php echo base_url() . '/cardetails' . URL_SEPARATOR . strtolower($value['product_category']) . URL_SEPARATOR . strtolower($value['product_alias_name']); ?>" class="text-dark">
                                    <a href="#" class="mr-2" title="Car type"><i class="fa fa-car  mr-1 text-muted"></i> <?php echo ucwords($value['fuel']); ?></a>
                                    <a href="#" class="mr-2" title="Kilometrs"><i class="fa fa-road text-muted mr-1 "></i><?php echo ucwords($value['kms_driven']); ?></a>
                                    <a href="#" class="" title="FuealType"><i class="fa fa-tachometer text-muted mr-1"></i><?php echo ucwords($value['transmission']); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="card overflow-hidden sold-out">
        <div class="ribbon ribbon-top-left text-danger"><span class="bg-danger">sold out</span></div>
        <div class="d-md-flex">
            <div class="item-card9-img">
                <div class="item-card9-imgs">
                    <a class="link" href="cars.html"></a>
                    <img src="../assets/images/media/j2.png" alt="img" class="cover-image">
                </div>
                <div class="item-card9-icons">
                    <a href="#" class="item-card9-icons1 wishlist active"> <i class="fa fa fa-heart-o"></i></a>
                </div>
                <div class="item-overly-trans">
                    <div class="rating-stars">
                        <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="4">
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
                    <span><a href="cars.html" class="bg-success">New</a></span>
                </div>
            </div>
            <div class="card border-0 mb-0">
                <div class="card-body ">
                    <div class="item-card9">
                        <div class="rating-stars">
                            <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
                        </div>
                        <a href="cars.html" class="text-dark"><h4 class="font-weight-semibold mt-1">Essence Meridian</h4></a>
                        <div class="item-card9-desc mb-2">
                            <a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i> USA</span></a>
                            <a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i>  5 days ago</span></a>
                        </div>
                        <p class=" leading-tight">Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                    </div>
                </div>
                <div class="card-footer pt-4 pb-4 pr-4 pl-4">
                    <div class="item-card9-footer d-sm-flex">
                        <div class="item-card9-cost">
                            <h4 class="text-dark font-weight-bold mb-0 mt-0">$987.00</h4>
                        </div>
                        <div class="ml-auto">
                            <a href="#" class="mr-4" title="Car type"><i class="fa fa-car text-muted mr-1"></i>  Manual</a>
                            <a href="#" class="mr-4" title="Kilometrs"><i class="fa fa-road text-muted mr-1"></i> 5000Kms</a>
                            <a href="#" class="" title="FuealType"><i class="fa fa-tachometer text-muted mr-1"></i> Disel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <?php } ?>
</div><!-- </div> this div end main  -->









<!-- 





----------------------------------===============================
-----------------------------------------------------------= -->
<!-- <?php //d($all_product_list);
        foreach ($all_product_list as $k => $value) { ?>
    <div class="tab-pane active" id="tab-11">
        <div class="card overflow-hidden">
            <div class="d-md-flex">
                <div class="item-card9-img">

                    <div class="item-card9-imgs">
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
                            <a href="cars.html" class="text-dark">
                            <a href="<?php //echo base_url() . '/cardetails' . URL_SEPARATOR . strtolower($value['product_category']) . URL_SEPARATOR . strtolower($value['product_alias_name']); 
                                        ?>" class="text-dark">
                                    <h4 class="mb-0"><?php //echo $value['product_name']; 
                                                        ?></h4>
                                    
                                </a>
                            </a>
                            <div class="item-card9-desc mb-2">
                                <a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i> Mumbai</span></a>
                                <a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i> 2 days ago</span></a>
                            </div>
                            <p class="mb-0 leading-tight">VXi</p>
                        </div>
                    </div>
                    <div class="card-footer pt-4 pb-4 pr-4 pl-4">
                        <div class="item-card9-footer d-sm-flex">
                                <p class="pb-0 pt-0 mb-2 mt-2"></i>
                                <h4 class="text-dark">
                                <?php
                                // if (ACTIVE_MODE == MODE_DEVELOPMENT) {
                                //     echo number_to_currency($value['product_sell_price'], 'INR', $locale = 1);
                                // } else  if (ACTIVE_MODE == MODE_DEVELOPMENT) {
                                //     echo $money_format('&#x20b9;%!n', $value['product_sell_price']);
                                // }
                                ?>
                            </p></h4>
                            <div class="ml-auto">
                            <a href="<?php //echo base_url() . '/cardetails' . URL_SEPARATOR . strtolower($value['product_category']) . URL_SEPARATOR . strtolower($value['product_alias_name']); 
                                        ?>" class="text-dark">
                                <a href="#" class="mr-2" title="Car type"><i class="fa fa-car  mr-1 text-muted"></i><?php //echo ucwords($value['fuel']); 
                                                                                                                    ?></a>
                                <a href="#" class="mr-2" title="Kilometrs"><i class="fa fa-road text-muted mr-1 "></i><?php //echo ucwords($value['kms_driven']); 
                                                                                                                        ?></a>
                                <a href="#" class="" title="FuealType"><i class="fa fa-tachometer text-muted mr-1"></i><?php //echo ucwords($value['transmission']); 
                                                                                                                        ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
<?php } ?> -->