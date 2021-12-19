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
                    <?php $validation =  \Config\Services::validation(); ?>
                    <form action="<?php echo base_url(session()->get('user_type_name') . '/productstore'); ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                        <?php echo csrf_field() ?>
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
                                                <input type="text" class="form-control <?php if ($validation->getError('carname')) : ?>is-invalid<?php endif ?>" id="carname" name="carname" placeholder="Name" value="<?php echo set_value('carname'); ?>" onkeyup="machine_name(this,'product_alias_name_span','product_alias_name_hidden')">
                                                <?php if ($validation->getError('carname')) : ?>
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('carname') ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" id="product_alias_name_label">Car URL Alias</label>
                                                <input type="text" class="form-control <?php echo ($validation->getError('product_alias_name')) ? "is-invalid" : ""; ?> " id="product_alias_name_hidden" name="product_alias_name_hidden"  value="<?php echo set_value('product_alias_name'); ?>" disabled>
                                                <input type="hidden" id="product_alias_name_span" name="product_alias_name" value="<?php echo set_value('product_alias_name'); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Car Price</label>
                                                <input type="text" class="form-control Stylednumber <?php echo ($validation->getError('carprice')) ? "is-invalid" : ""; ?>" id="carprice" name="carprice" value="<?php echo set_value('carprice'); ?>" >
                                                <?php if ($validation->getError('carprice')) : ?>
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('carprice') ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Car Sale Price</label>
                                                <input type="text" class="form-control Stylednumber <?php echo ($validation->getError('carsellprice')) ? "is-invalid" : ""; ?>" id="carsellprice" name="carsellprice" value="<?php echo set_value('carsellprice'); ?>" >
                                                <?php if ($validation->getError('carsellprice')) : ?>
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('carsellprice') ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Brand</label>
                                                <select class="form-control select-sm custom-select select2 <?php echo ($validation->getError('brand')) ? "is-invalid" : ""; ?>" id="brand" name="brand" placeholder="" onchange="loadModelList(this)">
                                                    <option selected>Select Brand</option>
                                                    <?php
                                                    foreach ($brand as $brand_val) {
                                                        echo '<option value="' . $brand_val['id'] . '">' . ucwords($brand_val['brand_name']) . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                                <?php if ($validation->getError('brand')) : ?>
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('brand') ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Brand Model</label>
                                                <select class="form-control select-sm custom-select select2 <?php echo ($validation->getError('model')) ? "is-invalid" : ""; ?>" id="model" name="model" placeholder="" >
                                                    <option selected>Select Brand Model</option>
                                                </select>
                                                <?php if ($validation->getError('model')) : ?>
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('model') ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Car Type</label>
                                                <select class="form-control select-sm custom-select select2 <?php echo ($validation->getError('cartype')) ? "is-invalid" : ""; ?>" id="cartype" name="cartype" placeholder="" >
                                                    <option selected>Select Car Type</option>
                                                    <?php
                                                    foreach ($sub_category as $sub_category_val) {
                                                        echo '<option value="' . $sub_category_val['sub_cat_id'] . '">' . ucwords($sub_category_val['sub_category_name']) . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                                <?php if ($validation->getError('cartype')) : ?>
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('cartype') ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">City</label>
                                                <select class="form-control select-sm custom-select select2 <?php echo ($validation->getError('city')) ? "is-invalid" : ""; ?>" id="city" name="city" placeholder="">
                                                    <option selected>Select City</option>
                                                    <?php
                                                    foreach ($top_cities as $city_val) {
                                                        echo '<option value="' . $city_val['id'] . '">' . ucwords($city_val['city_name']) . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                                <?php if ($validation->getError('city')) : ?>
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('city') ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product Basic Info -->
                            
                            <!-- Product Multiple Image -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Car Image Uploade</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Car Thumbnail</label>
                                                <input type="file" class="dropify <?php echo ($validation->getError('product_thumbnail')) ? "is-invalid" : ""; ?>" data-height="120" id="product_thumbnail" name="product_thumbnail" value="<?php echo set_value('product_thumbnail'); ?>"/>
                                                <?php if ($validation->getError('product_thumbnail')) : ?>
                                                    <div class="invalid-feedback1" style="color: crimson;">
                                                        <?= $validation->getError('product_thumbnail') ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <a href="javascript:void(0)" class="btn btn-primary ml-auto" onclick="$('#product_multiple_image').click()" style="margin-bottom: 5px;">Upload Image</a>
                                                <input type="file" class="form-control" data-height="120" id="product_multiple_image" name="product_multiple_image[]" multiple style="display:none;"/>
                                                <div class="preview-images-zone"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product Multiple Image -->

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
                                                <input type="text" class="form-control <?php echo ($validation->getError('make_year')) ? "is-invalid" : ""; ?>" id="making_year" name="make_year" placeholder="Ex.2015"  value="<?php echo set_value('make_year'); ?>" />
                                                <?php if ($validation->getError('make_year')) : ?>
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('make_year') ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Registration Year</label>
                                                <input type="text" class="form-control <?php echo ($validation->getError('registration_year')) ? "is-invalid" : ""; ?>" id="registration_year" name="registration_year" placeholder="Ex.2015" value="<?php echo set_value('registration_year'); ?>"  />
                                                <?php if ($validation->getError('registration_year')) : ?>
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('registration_year') ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Fuel Type</label>
                                                <input type="text" class="form-control <?php echo ($validation->getError('fuel')) ? "is-invalid" : ""; ?>" id="fuel" name="fuel" placeholder="Ex.Petrol"  value="<?php echo set_value('fuel'); ?>" />
                                                <?php if ($validation->getError('fuel')) : ?>
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('fuel') ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Drive Km.</label>
                                                <input type="text" class="form-control <?php echo ($validation->getError('kms_driven')) ? "is-invalid" : ""; ?>" id="kms_driven" name="kms_driven" placeholder="Ex.1000Kms"  value="<?php echo set_value('kms_driven'); ?>" />
                                                <?php if ($validation->getError('kms_driven')) : ?>
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('kms_driven') ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Car Engine Displacenent(CC)</label>
                                                <input type="text" class="form-control <?php echo ($validation->getError('engine_displacement')) ? "is-invalid" : ""; ?>" id="engine_displacement" name="engine_displacement" placeholder="Ex.1200 CC"  value="<?php echo set_value('engine_displacement'); ?>" />
                                                <?php if ($validation->getError('engine_displacement')) : ?>
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('engine_displacement') ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Number Ownership</label>
                                                <input type="text" class="form-control <?php echo ($validation->getError('no_of_owner')) ? "is-invalid" : ""; ?>" id="no_of_owner" name="no_of_owner" placeholder="No. Owner"  value="<?php echo set_value('no_of_owner'); ?>" />
                                                <?php if ($validation->getError('no_of_owner')) : ?>
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('no_of_owner') ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">RTO Zone</label>
                                                <input type="text" class="form-control <?php echo ($validation->getError('rto')) ? "is-invalid" : ""; ?>" id="rto" name="rto" placeholder="Ex. MH01"  value="<?php echo set_value('rto'); ?>" />
                                                <?php if ($validation->getError('rto')) : ?>
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('rto') ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Transmission</label>
                                                <select class="form-control select-sm custom-select select2 <?php echo ($validation->getError('transmission')) ? "is-invalid" : ""; ?>" id="transmission" name="transmission" placeholder="" value="<?php echo set_value('transmission'); ?>" >
                                                    <option selected>Select Transmission Type</option>
                                                    <option value="Automatic">Automatic</option>
                                                    <option value="Manual">Manual</option>
                                                    <option value="Electrical">Electrical</option>
                                                </select>
                                                <?php if ($validation->getError('transmission')) : ?>
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('transmission') ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Insurance Type</label>
                                                <input type="text" class="form-control <?php echo ($validation->getError('insurance_type')) ? "is-invalid" : ""; ?>" id="insurance_type" name="insurance_type" placeholder="Ex. LIC"  value="<?php echo set_value('insurance_type'); ?>" />
                                                <?php if ($validation->getError('insurance_type')) : ?>
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('insurance_type') ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product Overview -->
                            <!-- Product Specification  -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Car Specification</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Mileage</label>
                                                <input type="text" class="form-control <?php echo ($validation->getError('mileage')) ? "is-invalid" : ""; ?>" id="mileage" name="mileage" placeholder="Ex.1800 Kmpl"  value="<?php echo set_value('mileage'); ?>" />
                                                <?php if ($validation->getError('mileage')) : ?>
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('mileage') ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Engine</label>
                                                <input type="text" class="form-control <?php echo ($validation->getError('engine')) ? "is-invalid" : ""; ?>" id="engine" name="engine" placeholder="Engine type"  value="<?php echo set_value('engine'); ?>" />
                                                <?php if ($validation->getError('engine')) : ?>
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('engine') ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Max Power</label>
                                                <input type="text" class="form-control <?php echo ($validation->getError('max_power')) ? "is-invalid" : ""; ?>" id="max_power" name="max_power" placeholder="Ex. 1000CC"  value="<?php echo set_value('max_power'); ?>" />
                                                <?php if ($validation->getError('max_power')) : ?>
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('max_power') ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Torque </label>
                                                <input type="text" class="form-control <?php echo ($validation->getError('torque')) ? "is-invalid" : ""; ?>" id="torque" name="torque" placeholder="Ex. 100Nm"  value="<?php echo set_value('torque'); ?>" />
                                                <?php if ($validation->getError('torque')) : ?>
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('torque') ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Wheel Size</label>
                                                <input type="text" class="form-control <?php echo ($validation->getError('wheel_size')) ? "is-invalid" : ""; ?>" id="wheel_size" name="wheel_size" placeholder="Size of wheel"  value="<?php echo set_value('wheel_size'); ?>" />
                                                <?php if ($validation->getError('wheel_size')) : ?>
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('wheel_size') ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">No. Seat</label>
                                                <input type="text" class="form-control <?php echo ($validation->getError('seats')) ? "is-invalid" : ""; ?>" id="seats" name="seats" placeholder="Ex. 4 Seater"  value="<?php echo set_value('seats'); ?>" />
                                                <?php if ($validation->getError('seats')) : ?>
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('seats') ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Car Color</label>
                                                <input type="text" class="form-control <?php echo ($validation->getError('color')) ? "is-invalid" : ""; ?>" id="color" name="color" placeholder="Ex. White"  value="<?php echo set_value('color'); ?>" />
                                                <?php if ($validation->getError('color')) : ?>
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('color') ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <div class="d-flex">
                                        <a href="<?php echo base_url(session()->get('user_type_name') . "/carlist") ?>" class="btn btn-link">Cancel</a>
                                        <button type="submit" class="btn btn-primary ml-auto">Submit</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product Specification -->
                        </div>
                    </form>
                </div>
                <!--App-Content-->

            </div>
            <!--Footer-->
            <?php echo view('admin/page_footer.php'); ?>
            <!--/Footer-->
        </div>
        <!--/Page-->
        <?php echo view('admin/footer.php'); ?>