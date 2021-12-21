<?php echo view('./admin/head.php'); ?>
<!--Page-->
<div class="page">
    <div class="page-main">

        <!--Header-->
        <?php echo view('admin/header.php'); ?>
        <!--/Header-->

        <!-- Sidebar menu-->
        <?php echo view('admin/sidebar_menu.php'); ?>
        <!-- /Sidebar menu-->

        <!--App-Content-->
        <div class="app-content  my-3 my-md-5">
            <div class="side-app">
                <div class="page-header">
                    <h4 class="page-title">Cars</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('admin/master'); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Car</li>
                    </ol>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div>
                                <div class="user-tabs mb-4">
                                    <!-- Tabs 
                                    <ul class="nav panel-tabs">
                                        <li class=""><a href="#tab1" class="active" data-toggle="tab">All (12)</a></li>
                                        <li><a href="#tab2" data-toggle="tab">Mine (12)</a></li>
                                        <li><a href="#tab3" data-toggle="tab">Published (5)</a></li>
                                        <li><a href="#tab5" data-toggle="tab">Trash (7)</a></li>
                                    </ul>-->
                                    <?php if (session()->getFlashdata('success')) : ?>
                                        <div class="nav panel-tabs">
                                            <div class="alert alert-success alert-dismissible">
                                                <button type="button" class="btn-close" data-bs-dismiss="alert">&times;</button>
                                                <?php echo session()->getFlashdata('success') ?>
                                            </div>
                                        </div>
                                    <?php elseif (session()->getFlashdata('failed')) : ?>
                                        <div class="nav panel-tabs">
                                            <div class="alert alert-danger alert-dismissible">
                                                <button type="button" class="btn-close" data-bs-dismiss="alert">&times;</button>
                                                <?php echo session()->getFlashdata('failed') ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active " id="tab1">
                                        <div class="mail-option">
                                            <ul class="unstyled inbox-pagination">
                                                <li><span>1-10 of 12 items</span></li>
                                                <li>
                                                    <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="table-responsive border-top">

                                            <table class="table card-table table-bordered table-hover table-vcenter text-nowrap">
                                                <tbody>
                                                    <tr>
                                                        <th class="w-1">Sr No.</th>
                                                        <th>Image</th>
                                                        <th class="w-1">Title</th>
                                                        <th>Brand</th>
                                                        <th class="w-1">Model</th>
                                                        <th>Price</th>
                                                        <th>Publish Date</th>

                                                    </tr>
                                                    <?php
                                                    if (count($products) > 0) {
                                                        $count = 1;
                                                        foreach ($products as $product) {
                                                    ?>
                                                            <tr>
                                                                <th><?php echo $count; ?></th>
                                                                <td><img src="<?php echo URL_IMAGES_MEDIA . strtolower($product['product_category']) . URL_SEPARATOR . strtolower($product['product_thumbnail']); ?>" class="w-9" alt="image"> </td>
                                                                <td><a href="#" class="btn-link"><?php echo ucwords($product['product_name']); ?></a></td>
                                                                <td><?php echo ucwords($product['brand_name']); ?></td>
                                                                <td><?php echo ucwords($product['model_name']); ?></td>
                                                                <td>
                                                                    <?php
                                                                        if(ACTIVE_MODE == MODE_DEVELOPMENT){
                                                                            echo number_to_currency($product['product_sell_price'], 'INR', $locale = 1);
                                                                        } else  if(ACTIVE_MODE == MODE_DEVELOPMENT){
                                                                            echo money_format('&#x20b9;%!n',$product['product_sell_price']);
                                                                        }
                                                                    ?>
                                                                </td>
                                                                <td><?php echo date_format(date_create($product['created_datetime']), "M d,Y"); ?></td>

                                                            </tr>
                                                    <?php
                                                            $count++;
                                                        }
                                                    } else {
                                                        echo '<tr><h4 class="mb-4 font-weight-bold">No Car list found</h4></tr>';
                                                    } ?>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- <ul class="pagination mb-5">
                    <li class="page-item page-prev disabled">
                        <a class="page-link" href="#" tabindex="-1">Prev</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item page-next">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul> -->
                    </div>
                </div>
            </div>
        </div>
        <!--App-Content-->

    </div>
    <!--Footer-->
    <?php echo view('admin/page_footer.php'); ?>
    <!--/Footer-->
</div>
<!--/Page-->
<?php echo view('admin/footer.php'); ?>