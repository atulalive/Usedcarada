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

                        <form action="<?php echo base_url('brand/brandadd'); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field() ?>
							
							<div class="card-body">

								<div class="row">
									<div class="col-md-6 col-lg-6">
										<div class="form-group">
											<label class="form-label">Brand Name<span style="color:red">*</span></label>
											<input type="text" class="form-control <?php if($validation->getError('Brand Name')) : ?> is-invalid<?php endif ?>" id="brand_name" name="brand_name" placeholder="Brand Name" onkeyup="machine_name(this,'product_alias_name_span','product_alias_name_hidden')">
												<?php if ($validation->getError('Brand Name')) : ?>
                                        	<div class="invalid-feedback">
                                           		 <?= $validation->getError('Brand Name') ?>
                                        	</div>
                                    		<?php endif; ?>
										</div>
									</div>
									<div class="col-md-6 col-lg-6">
										<div class="form-group">
											<label class="form-label" id="product_alias_name_label">Brand URL Alias</label>
											<span id="product_alias_name_span"></span>
											<input type="type" class="form-control is-valid state-valid" id="product_alias_name_hidden" name="brand_alias_name">
											<?php if ($validation->getError('Brand Alias Name')) : ?>
                                        	<div class="invalid-feedback">
                                           		 <?= $validation->getError('Brand Alias Name') ?>
                                        	</div>
                                    		<?php endif; ?>		
										</div>
									</div>

								</div>
								<div class="row">
									<div class="col-md-6 col-lg-6">
										<div class="form-group">
											<div class="custom-file">
												<input type="file" class="custom-file-input" name="brand_image">
												<label class="custom-file-label">Choose file</label>
											</div>
											<?php if ($validation->getError('Brand Image')) : ?>
                                        	<div class="invalid-feedback">
                                           		 <?= $validation->getError('Brand Image') ?>
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