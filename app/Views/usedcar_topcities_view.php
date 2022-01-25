<?php

use App\Models\Products;

$pro_detail = new Products();
$top_cities = $pro_detail->get_top_cities(['is_brand' => true]);
?>

<section class="sptb">
    <div class="container ">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12">
                    <div class="items-gallery">


                        <div class="row ">
                            <div class="col-8" style="font-size:10px">
                                <div class=" center-block text-left">
                                    <h4>Used Cars In Top Cities</h4>
                                    <hr class="deep-purple  text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto" style="padding-top:20px">
                                </div>
                                <div class="row">


                                    <?php if (!empty($top_cities) && is_array($top_cities)) {
                                        foreach ($top_cities as $top_cities_val) {
                                    ?>

                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mt-5">
                                                <div class="card bg-card mb-lg-0">
                                                    <div class="card-body bg-white">
                                                        <div class="cat-item text-center">
                                                            <div class="cat-img text-shadow1 bg-white"><a href="<?php echo  base_url() . URL_SEPARATOR . 'city' . URL_SEPARATOR . $top_cities_val['city_state']; ?>"></a>
                                                                <img src="<?php echo URL_IMAGES_MEDIA . 'cities' . URL_SEPARATOR . $top_cities_val['city_image_thumbnail'] ?>" alt="img" class="mx-auto" h-15 w-15>
                                                            </div>
                                                            <div class="cat-desc">
                                                                <h5 class="mb-1"><?php echo ucwords($top_cities_val['city_name']); ?></h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php }
                                    } ?>
                                </div>
                            </div>
                            <div style="padding-top:16%;" class="col-4" style="font-size:10px ">
                                <div class="text-right">

                                    <!--h2 style="font-size:18px;">I am looking to buy a second hand car </h2><br><br>

<a href="#location" data-toggle="modal" class="text-dark"> </a>

<select id="select_page" style="width:300px;height:50px;font-size:15px;" class="operator">
    <option value=""><br>Select city...</option>
    <option value="Pune">Pune</option>
    <option value="Mumbai">Mumbai</option>
    <option value="India">India</option>
    <option value="England">England</option>
</select-->
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>