
<!doctype html>
<html class="no-js" lang="en">
<?php echo view('header.php'); ?>

<body>

	<?php echo view('topbar.php'); ?>
	

	<!--Section-->
	<section class="sptb">
		<div class="container">
			<div class="row">
				<!-- left side content start -->
				<?php include('left-side-view.php');?>
				<!-- left side content End-->

				<div class="col-xl-9 col-lg-9 col-md-12">
					<!--Lists-->
					<div class=" mb-0">
						<div class="">
							<div class="item2-gl ">
								
								<div class="tab-content">
									<?php include('right-side-view.php');?>
								</div>
								
							</div>
							
						</div>
					</div>
					<!--/Lists-->
				</div>
			</div>
		</div>
	</section>
	<!--Section-->

	<?php

	echo view('footer.php');
	echo view('model_view.php');

	?>
</body>

</html>
