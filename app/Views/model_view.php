
                <div id="LgoinRegister" class="modal fade">
                	<div class="modal-dialog" role="document" width='350'>
                		<div class="modal-content" rounded-0>
                			<div class="modal-header">
                				<h4 class="modal-title" id="exampleModalLabel"><strong> Login or Register for best UseCarAdda experience</strong></h4>
                				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                					<span aria-hidden="true">×</span>
                				</button>
                			</div>
                			<div class="modal-body">
                				<div class="single-page customerpage ">
                					<div class="wrapper wrapper2 box-shadow-0">
                						<form id="login" method="POST" action="<?php echo base_url('customer/login')?>" >
										<?php echo csrf_field() ?>
                							<div class="text">
                								<input type="text" name="mobile" placeholder="Enter Mobile Number">
												
                							</div>

                							<div class="submit">
												<br>
                								<button type="submit" class="btn btn-primary"> Login/Sign up <i class="fa fa-long-arrow-right mr-1"></i> </button>
                							</div>

                						</form>
                					</div>
                				</div>
                			</div>
                		</div> 
                	</div>
                </div>

				<div id="mylistings" class="modal fade">
                	<div class="modal-dialog" role="document" width='350'>
                		<div class="modal-content " rounded-0>
                			<div class="modal-header">
                				<h4 class="modal-title" id="exampleModalLabel"><strong> Login or Register for best UseCarAdda experience</strong></h4>
                				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                					<span aria-hidden="true">×</span>
                				</button>
                			</div>
                			<div class="modal-body">
                				<div class="single-page customerpage ">
                					<div class="wrapper wrapper2 box-shadow-0">
                						<form id="login" class="">
                							<div class="text">
                								<input type="text" name="mobile" placeholder="Enter Mobile Number">
                								<!-- <label>Enter Mobile Number</label> -->
                							</div>

                							<div class="submit"><br>
                								<button type="button" class="btn btn-primary" disabled=disabled>Send OTP <i class="fa fa-long-arrow-right mr-1"></i> </button>
                							</div>

                						</form>
                					</div>
                				</div>
                			</div>
                		</div>
                	</div>
                </div>
				<div id="location" class="modal fade">
                	<div class="modal-dialog" role="document" width='350' height='400'>
                		<div class="modal-content " rounded-0>
                			<div class="modal-header">
                				<h4 class="modal-title" id="exampleModalLabel"><strong> We need your city to customize your experience</strong></h4>
                				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                					<span aria-hidden="true">×</span>
                				</button>
                			</div>
                			<form id="location" class="">
                			</form><br><br>
                		</div>
                	</div>
                </div>