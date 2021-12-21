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
					<h4 class="page-title"> Add Brand</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?php echo base_url(session()->get('user_type_name') . '/dashboard'); ?>">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Add Brand</li>
					</ol>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Brand Basic Info</h3>
							</div>
							<?php $validation =  \Config\Services::validation(); ?>

							<form action="<?php echo base_url(session()->get('user_type_name') . '/brandadd'); ?>" method="post" enctype="multipart/form-data">
								<?php echo csrf_field() ?>

								<div class="card-body">

									<div class="row">
										<div class="col-md-6 col-lg-6">
											<div class="form-group">
												<label class="form-label">Brand Name<span style="color:red">*</span></label>
												<input type="text" class="form-control <?php if ($validation->getError('brand')) : ?> is-invalid<?php endif ?>" id="brand" name="brand" placeholder="Brand Name" onkeyup="machine_name(this,'product_alias_name_span','product_alias_name_hidden')">
												<?php if ($validation->getError('brand')) : ?>
													<div class="invalid-feedback">
														<?= $validation->getError('brand') ?>
													</div>
												<?php endif; ?>
											</div>
										</div>
										<div class="col-md-6 col-lg-6">
											<div class="form-group">
												<label class="form-label" id="product_alias_name_label">Brand URL Alias</label>
												<input type="text" class="form-control <?php echo ($validation->getError('brand_alias_name')) ? "is-invalid" : ""; ?> " id="product_alias_name_hidden" name="product_alias_name_hidden" value="<?php echo set_value('brand_alias_name'); ?>" disabled>
												<input type="hidden" id="product_alias_name_span" name="brand_alias_name" value="<?php echo set_value('brand_alias_name'); ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 col-lg-6">
											<div class="form-group">
												<label class="form-label">Select Year<span style="color:red">*</span></label>

												<select class="form-control select-sm custom-select select2 <?php echo ($validation->getError('year')) ? "is-invalid" : ""; ?>" id="year" name="year" placeholder="">
													<option value="" selected>Select</option>
													<option value="2001">2010</option>
													<option value="2011">2011</option>
													<option value="2012">2012</option>
													<option value="2013">2013</option>
													<option value="2014">2014</option>
													<option value="2015">2015</option>
													<option value="2016">2016</option>
													<option value="2017">2017</option>
													<option value="2018">2018</option>
													<option value="2019">2019</option>
													<option value="2020">2020</option>
													<option value="2021">2021</option>
												</select>

												<?php if ($validation->getError('Year')) : ?>
													<div class="invalid-feedback">
														<?= $validation->getError('Year') ?>
													</div>
												<?php endif; ?>
											</div>
										</div>
										<div class="col-md-6 col-lg-6">
											<div class="form-group">
												<label class="form-label">Brnad Image</label>
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