<?php

use App\Models\Products;

$pro_detail = new Products();
print_r($data);
$segment = ['type'=>$type, 'first'=>$first, 'second'=>$second];
$get_search_budget_model = $pro_detail->get_search_budget_model($segment);
?>
<!doctype html>
<html class="no-js" lang="en">
<?php echo view('header.php'); ?>

<body>
    <?php echo view('topbar.php'); ?>
    <!--Breadcrumb-->
    <div class="bg-white border-bottom">
        <div class="container">
            <div class="page-header">
                <h4 class="page-title">Used cars</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                </ol>
            </div>
        </div>
    </div>
    <!--/Breadcrumb-->

    <!--listing-->
    <section class="sptb">
        <div class="container">
            <div class="row">
                <!--Left Side Content-->
                <div class="col-xl-3 col-lg-3 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="input-group">
                                <input type="text" class="form-control br-tl-3  br-bl-3" placeholder="Search">
                                <div class="input-group-append ">
                                    <button type="button" class="btn btn-primary br-tr-3  br-br-3">
                                        Search
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/Left Side Content-->

                <!-- Right side Lists -->
                <div class="col-xl-9 col-lg-9 col-md-12">
                    <!--Lists-->
                    <div class=" mb-0">
                        <div class="">
                            <div class="item1-gl ">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-12">
                                        <div class="row">
                                            <?php 
                                            foreach($get_search_budget_model as $value){ 

                                                echo '<div class="col-lg-6 col-md-12 col-xl-4">
                                                        <div class="card overflow-hidden">
                                                            <div class="item-card9-img">
                                                                <div class="item-card9-imgs">
                                                                    <a class="link" href="cars.html"></a>
                                                                    <img src="' . URL_IMAGES_MEDIA . strtolower($value['product_category']) . URL_SEPARATOR . strtolower($value['product_thumbnail']) . '" alt="product-img" class="cover-image">
                                                                </div>
                                                            </div>
                                                            <div class="card border-0 mb-0">
                                                                <div class="card-body ">
                                                                    <div class="item-card9">
                                                                        <div class="item-card9-desc mb-2">
                                                                            <a href="#" class="text-dark">
                                                                                <h4 class="font-weight-semibold mt-1"> '.$value['product_name'].'</h4>
                                                                            </a>
                                                                            <a href="#" class="text-dark">
                                                                                <h4 class="font-weight-semibold mt-1"> '.number_to_currency($value['product_sell_price'], 'INR', $locale = 1).'</h4>
                                                                            </a>
                                                                        </div>
                                                                        <div class="item-card9-desc mb-2">
                                                                            <a href="#" class="mr-4"><span class=""><i class="ti-car text-muted mr-1 fs-18"></i> '.ucwords($value['product_category']).'</span></a>
                                                                            <a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i> '.ucwords($value['registraion_year']).'</span></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-footer pt-4 pb-4 pr-4 pl-4">
                                                                    <div class="item-card9-footer d-sm-flex">
                                                                        <div class="ml-auto">
                                                                            <a href="#" class="w-50 mt-1 mb-1 float-left" title="Car type"><i class="fa fa-car  mr-1 text-muted"></i> '.ucwords($value['transmission']).'</a>
                                                                            <a href="#" class="w-50 mt-1 mb-1 float-left" title="Kilometrs"><i class="fa fa-road text-muted mr-1 "></i> '.ucwords($value['kms_driven']).'</a>
                                                                            <a href="#" class="w-50 mt-1 mb-1 float-left" title="FuealType"><i class="fa fa-tachometer text-muted mr-1"></i>'.ucwords($value['fuel']).'</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>';
                                             } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Right side Lists -->
            </div>
        </div>
    </section>

    <?php
    echo view('footer.php');
    echo view('model_view.php');
    ?>
</body>

</html>