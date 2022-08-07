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
        <div class="app-content">
            <div class="side-app">
                <div class="page-header">
                    <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
                    <h4 class="page-title"> Add TOP City</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(session()->get('user_type_name') . '/addcities'); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Cities</li>
                    </ol>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Top Cities Basic Info</h3>
                            </div>
                            <?php $validation =  \Config\Services::validation(); ?>
                            <form action="<?php echo base_url(session()->get('user_type_name') . '/addcities'); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field() ?>
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Please Select Country</label>
                                                <select class="form-control select-sm custom-select select2" id="country_id" name="country_id" placeholder="">
                                                    <option selected>Select Country </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Please Select State</label>
                                                <select class="form-control select-sm custom-select select2" id="state_id" name="state_id" placeholder="">
                                                    <option selected>Select State </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                               


                        <div class="row">

                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Please Select City</label>
                                    <select class="form-control select-sm custom-select select2" id="city_id" name="city_id" placeholder="">
                                        <option selected>Select City </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Car Name</label>
                                    <input type="text" class="form-control" id="car" name="car" placeholder="Car Name" onkeyup="machine_name(this,'product_alias_name_span','product_alias_name_hidden')">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label class="form-label"> Image</label>
                                    <input type="file" class="dropify" data-height="120" id="image" name="image" value="" />
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="card-footer text-right">
                            <div class="d-flex">
                                <a href="javascript:void(0)" class="btn btn-link">Cancel</a>
                                <button type="submit" class="btn btn-info ml-auto">Submit</button>
                            </div>
                        </div>
                    </div>
                    </form>
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