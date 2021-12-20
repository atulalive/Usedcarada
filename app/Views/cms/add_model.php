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
                    <h4 class="page-title"> Add Model</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(session()->get('user_type_name').'/dashboard'); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Model</li>
                    </ol>
                </div>
                <div class="row">
							<div class="col-12">
								<div   class="card">
									<div class="card-header">
										<h3 class="card-title">Model Basic Info</h3>
									</div>
									<div class="card-body">
									
												<div class="row">
													<div class="col-md-6">
													<label class="form-label">Select Brand Name<span style="color:red">*</span></label>
														<select class="form-control"  name="[models][basic_info]['brand_id']">
															<option selected>Select</option>
															<option>Hyderabad</option>
															<option>Vizag</option>
															<option>Guntur</option>
															<option>Vijayawada</option>
															<option>Rajahmundry</option>
														</select>
													</div>
													<div class="col-md-6 col-lg-6">
											<div class="form-group">
											<label class="form-label">Image Upload<span style="color:red">*</span></label>
											<div class="custom-file">
												<input type="file" class="custom-file-input" name="example-file-input-custom">
												<label class="custom-file-label">Choose file</label>
											</div>
										</div>
									</div>
												</div>
											
											<br>
											<div class="row">
											<div class="col-md-6 col-lg-6">
												<div class="form-group">
													<label class="form-label">Model Name</label>
													<input type="text" class="form-control" id="model_name" name="[models][basic_info]['model_name']" placeholder="Name" onkeyup="machine_name(this,'product_alias_name_span','product_alias_name_hidden')">
												</div>
											</div>
											<div class="col-md-6 col-lg-6">
												<div class="form-group">
													<label class="form-label" id="product_alias_name_label">Model URL Alias</label>
                                                    <span id="product_alias_name_span"></span>
													<input type="text" class="form-control is-valid state-valid" id="product_alias_name_hidden" name="[models][basic_info]['model_alias_name']" disabled="disabled">
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