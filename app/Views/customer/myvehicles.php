<?php echo view('header.php'); ?>
<?php echo view('topbar.php');?>

<br><br><br><br>
<?php echo view('customer/left-side-view.php'); ?>







<div class="col-xl-9 col-lg-12 col-md-12">
<div class="card">
	<div class="card-header">
		<h3 class="card-title">My Vehicles </h3>
	</div>
    

<div class="card-body">
		<div class="card-pay">




			
				<dl class="card-text"style="padding-left:30%;">
					<img src="../assets/images/users/male/m2.svg" class="brround" alt="user"><br><br>

					<dd>You have not added any car yet</dd>
				</dl>

				<dl class="card-text"style="padding-left:30%;">
					<div class="col-xl-6 col-lg-6 col-sm-6 col-6"><a href="#" class="btn btn-danger" data-toggle="modal" data-target="#LgoinRegister"> Go To Home Page</a>
				</dl>
				<p class="mb-0"><strong>Note:</strong> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
		
		</div>
	</div>
</div>
</div>
</div>
</div>
</section>

<?php
echo view('footer.php');
echo view('model_view.php');

?>
</body>

</html>