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
                    <h4 class="page-title">Vendor Add Car</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(session()->get('user_type_name') . '/dashboard'); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Car</li>
                    </ol>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- Product Basic Info -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Car Basic Info</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Car Name</label>
                                            <input type="text" class="form-control" id="product_name" name="[product][basic_info]['product_name']" placeholder="Name" onkeyup="machine_name(this,'product_alias_name_span','product_alias_name_hidden')">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label" id="product_alias_name_label">Car URL Alias</label>
                                            <span id="product_alias_name_span"></span>
                                            <input type="hidden" class="form-control is-valid state-valid" id="product_alias_name_hidden" name="[product][basic_info]['product_alias_name']">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Car Thumbnail</label>
                                            <input type="file" class="dropify" data-height="120" id="product_thumbnail" name="[product][basic_info]['product_thumbnail']" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="card-footer text-right">
                                <div class="d-flex">
                                    <a href="javascript:void(0)" class="btn btn-link">Cancel</a>
                                    <button type="submit" class="btn btn-primary ml-auto">Send data</button>
                                </div>
                            </div> -->
                        </div>
                        <!-- /Product Basic Info -->
                        
                        <!-- Product Overview -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Car Overview</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Making Year</label>
                                            <input type="text" class="form-control" id="making_year" name="[product][overview]['make_year']" placeholder="Ex.2015" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Registration Year</label>
                                            <input type="text" class="form-control" id="registraion_year" name="[product][overview]['registraion_year']" placeholder="Ex.2015" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Fuel Type</label>
                                            <input type="text" class="form-control" id="fuel" name="[product][overview]['fuel']" placeholder="Ex.Petrol" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Drive Km.</label>
                                            <input type="text" class="form-control" id="kms_driven" name="[product][overview]['kms_driven']" placeholder="Ex.1000Kms" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Car Engine Displacenent(CC)</label>
                                            <input type="text" class="form-control" id="engine_displacenent" name="[product][overview]['engine_displacenent']" placeholder="Ex.1200 CC" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Number Ownership</label>
                                            <input type="text" class="form-control" id="no_of_owner" name="[product][overview]['no_of_owner']" placeholder="No. Owner" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">RTO Zone</label>
                                            <input type="text" class="form-control" id="rto" name="[product][overview]['rto']" placeholder="Ex. MH01" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Transmission</label>
                                            <select class="form-control " id="transmission" name="[product][overview]['transmission']" placeholder="" >
                                                <option selected>Select Transmission Type</option>
                                                <option value="Automatic">Automatic</option>
                                                <option value="Manual">Manual</option>
                                                <option value="Electrical">Electrical</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Insurance Type</label>
                                            <input type="text" class="form-control" id="insurance_type" name="[product][overview]['insurance_type']" placeholder="Ex. LIC" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                        <!-- /Product Overview -->
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