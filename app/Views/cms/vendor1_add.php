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
                    <h4 class="page-title"> Add vendor</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(session()->get('user_type_name') . '/addvendor'); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add vendor</li>
                    </ol>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Vendor Basic Info</h3>
                            </div>
                            <?php $validation =  \Config\Services::validation(); ?>
                            <form action="<?php echo base_url(session()->get('user_type_name') . '/vendor1add'); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field() ?>
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-md-6 col-lg-6">
											<div class="form-group">
												<label class="form-label">First Name</label>
												<input type="text" class="form-control <?php if ($validation->getError('first_name')) : ?>is-invalid<?php endif ?>" id="first_name" name="first_name" placeholder="Name" value="<?php echo set_value('first_name'); ?>" onkeyup="first_name(this,'first_name_span','first_name_hidden')">
                                                <?php if ($validation->getError('first_name')) : ?>
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('first_name') ?>
                                                    </div>
                                                <?php endif; ?>
												
											</div>
										</div>
                                        
                                        <div class="col-md-6 col-lg-6">
											<div class="form-group">
												<label class="form-label">Last Name</label>
											
                                                <input type="text" class="form-control <?php if ($validation->getError('last_name')) : ?>is-invalid<?php endif ?>" id="last_name" name="last_name" placeholder="Name" value="<?php echo set_value('last_name'); ?>" onkeyup="last_name(this,'first_name_span','first_name_hidden')">
                                                <?php if ($validation->getError('last_name')) : ?>
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('last_name') ?>
                                                    </div>
                                                <?php endif; ?>
												
											</div>
										</div>

                                        <!-- <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Car Name</label>
                                                
                                                <input type="text" class="form-control <?php if ($validation->getError('car_name')) : ?>is-invalid<?php endif ?>" id="car_name" name="car_name" placeholder="Name" value="<?php echo set_value('car_name'); ?>" onkeyup="car_name(this,'first_name_span','first_name_hidden')">
                                                <?php if ($validation->getError('car_name')) : ?>
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('car_name') ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label"> Image</label>
                                                
                                                <input type="file" class="dropify <?php echo ($validation->getError('image')) ? "is-invalid" : ""; ?>" data-height="120" id="image" name="image" value="<?php echo set_value('image'); ?>" />
												<?php if ($validation->getError('image')) : ?>
													<div class="invalid-feedback1" style="color: crimson;">
														<?= $validation->getError('image') ?>
													</div>
												<?php endif; ?>
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


        </div>
        <!--Footer-->
        <?php echo view('admin/page_footer.php'); ?>
        <!--/Footer-->
    </div>
    <!--/Page-->
    <?php echo view('admin/footer.php'); ?>