

<section class="sptb">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-lg-12 col-md-12">
						<div class="card  mb-5 mb-xl-0">
							<div class="card-header">
								<h3 class="card-title">My Dashboard</h3>
							</div>
							<div class="card-body text-center item-user border-bottom">
								<div class="profile-pic">
									<div class="profile-pic-img">
										<span class="bg-success dots" data-toggle="tooltip" data-placement="top" title="online"></span>
										<img src="../assets/images/users/male/m1.png" class="brround" alt="user">
									</div>
									<a href="userprofile.html" class="text-dark"><h4 class="mt-3 mb-0 font-weight-semibold">Riyaz Khan</h4></a>
								</div>
							</div>
							<div class="item1-links  mb-0">
								<a href="<?= base_url('customer/profile')?>" class="active d-flex border-bottom">
									<span class="icon1 mr-3"><i class="fa fa-shopping-cart"></i></span> My Order
								</a>
								<a href="<?= base_url('customer/shortlistedvehicles')?>" class=" d-flex  border-bottom">
									<span class="icon1 mr-3"><i class="icon fa fa-heart"></i></span>Shortlisted Vehicles
								</a>
								<a href="<?= base_url('customer/myvehicles')?>" class=" d-flex border-bottom">
									<span class="icon1 mr-3"><i class="icon fa fa-car"></i></span> My Vehicles
								</a>
								<a href="<?= base_url('customer/editprofile')?>" class="d-flex  border-bottom">
									<span class="icon1 mr-3"><i class="icon fa fa-cog"></i></span> Profile Settings
								</a>
				               <a href="<?php echo base_url('customer/logout'); ?>" class="d-flex">
									<span class="icon1 mr-3"><i class="icon fa fa-power-off"></i></span> Logout
								</a>
							</div>
						</div>
                       
					</div>
				