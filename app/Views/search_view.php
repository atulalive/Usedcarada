<?php

use App\Models\Products;

use function PHPSTORM_META\type;

$pro_detail = new Products();
//print_r($data);
$segment = ['type' => $type, 'first' => $first, 'second' => $second];
if (in_array($segment['type'], array('budget', 'model'))) {
    $get_search_data = $pro_detail->get_search_budget_model($segment);
} else if (in_array($segment['type'], array('brand'))) {
    $get_search_data = $pro_detail->get_search_budget_model($segment);
    
}
else if(in_array($segment['type'], array('top_cities'))) {

    $get_search_data = $pro_detail->get_search_budget_model($segment);
    print_r( $get_search_data); 

}
switch ($segment['type']) {
    case 'budget':
        $serach_heading = '<h3 class=""><span class="font-weight-bold">'. number_format(count($get_search_data)) .'&nbsp;</span> Cars Available In Price Range '. ucwords($get_search_data[0]['display_price_range']).' Type '. ucwords($segment['second']).' </h3>';
        break;
    
    case 'model':
        $serach_heading = '<h3 class=""><span class="font-weight-bold">'. number_format(count($get_search_data)) .'&nbsp;</span>'. ucwords($segment['first']).' '. ucwords($segment['second']).' Cars Available </h3>';
        break;
    
    case 'brand':
        $serach_heading = '<h3 class=""><span class="font-weight-bold">'. number_format(count($get_search_data)) .'&nbsp;</span>'. ucwords($segment['first']).' '. ucwords($segment['second']).' Cars Available </h3>';
        break;
    case 'top_cities':
        $serach_heading = '<h3 class=""><span class="font-weight-bold">'. number_format(count($get_search_data)) .'&nbsp;</span>'. ucwords($segment['first']).' '. ucwords($segment['third']).' Cars Available </h3>';
        break;
    
    default:
        $serach_heading = '<h3 class=""><span class="font-weight-bold">'. number_format(count($get_search_data)) .'&nbsp;</span>'. ucwords($segment['first']).' '. ucwords($segment['second']).' Cars Available </h3>';
        break;
}
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
                                <div class=" mb-0">
                                    <div class="" style="margin-bottom: 3%;">
                                        <div class="bg-white p-5 item2-gl-nav d-flex">
                                            <div class="text-center ">
                                                <?php echo $serach_heading; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-12">
                                        <div class="row">
                                            <?php
                                            if (!empty($get_search_data) && is_array($get_search_data)) {
                                                foreach ($get_search_data as $value) {

                                                    echo '<div class="col-lg-6 col-md-12 col-xl-4">
                                                        <div class="card overflow-hidden">
                                                            <div class="item-card9-img">
                                                                <div class="item-card9-imgs">
                                                                <a class="link" href="' . base_url() . '/cardetails' . URL_SEPARATOR . strtolower($value['product_category']) . '/' . $value['product_alias_name'] . ' "></a>
                                                                    <img src="' . URL_IMAGES_MEDIA . strtolower($value['product_category']) . URL_SEPARATOR . strtolower($value['product_thumbnail']) . '" alt="product-img" class="cover-image">
                                                                </div>
                                                            </div>
                                                            <div class="card border-0 mb-0">
                                                                <div class="card-body ">
                                                                    <div class="item-card9">
                                                                        <div class="item-card9-desc mb-2">           
                                                                            <a href="' . base_url() . '/cardetails' . URL_SEPARATOR . strtolower($value['product_category']) . '/' . $value['product_alias_name'] . ' " class="text-dark">
                                                                                <h4 class="font-weight-semibold mt-1"> ' . $value['product_name'] . '</h4>
                                                                            </a>
                                                                            <a href=' . base_url() . '/cardetails' . URL_SEPARATOR . strtolower($value['product_category']) . '/' . $value['product_alias_name'] . ' " class="text-dark">
                                                                                <h4 class="font-weight-semibold mt-1"> ' ; 
                                                                                    if(ACTIVE_MODE == MODE_DEVELOPMENT){
                                                                                        echo number_to_currency($value['product_sell_price'], 'INR', $locale = 1);
                                                                                    } else  if(ACTIVE_MODE == MODE_DEVELOPMENT){
                                                                                        echo money_format('&#x20b9;%!n',$value['product_sell_price']);
                                                                                    }
                                                                                 ;echo '</h4>
                                                                            </a>
                                                                        </div>
                                                                        <div class="item-card9-desc mb-2">
                                                                            <a href=' . base_url() . '/cardetails' . URL_SEPARATOR . strtolower($value['product_category']) . '/' . $value['product_alias_name'] . ' " class="mr-4"><span class=""><i class="ti-car text-muted mr-1 fs-18"></i> ' . ucwords($value['product_category']) . '</span></a>
                                                                            <a href=' . base_url() . '/cardetails' . URL_SEPARATOR . strtolower($value['product_category']) . '/' . $value['product_alias_name'] . ' " class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i> ' . ucwords($value['registraion_year']) . '</span></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-footer pt-4 pb-4 pr-4 pl-4">
                                                                    <div class="item-card9-footer d-sm-flex">
                                                                        <div class="ml-auto">
                                                                            <a href=' . base_url() . '/cardetails' . URL_SEPARATOR . strtolower($value['product_category']) . '/' . $value['product_alias_name'] . ' " class="w-50 mt-1 mb-1 float-left" title="Car type"><i class="fa fa-car  mr-1 text-muted"></i> ' . ucwords($value['transmission']) . '</a>
                                                                            <a href=' . base_url() . '/cardetails' . URL_SEPARATOR . strtolower($value['product_category']) . '/' . $value['product_alias_name'] . ' " class="w-50 mt-1 mb-1 float-left" title="Kilometrs"><i class="fa fa-road text-muted mr-1 "></i> ' . ucwords($value['kms_driven']) . '</a>
                                                                            <a href=' . base_url() . '/cardetails' . URL_SEPARATOR . strtolower($value['product_category']) . '/' . $value['product_alias_name'] . ' " class="w-50 mt-1 mb-1 float-left" title="FuealType"><i class="fa fa-tachometer text-muted mr-1"></i>' . ucwords($value['fuel']) . '</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>';
                                                }
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