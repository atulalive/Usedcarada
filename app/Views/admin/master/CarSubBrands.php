<?php echo view('admin/head.php'); ?>
<?php $session = \Config\Services::session();  ?>
<!--Page-->
<div class="page">
    <div class="page-main">

        <!--Header-->
        <?php echo view('admin/header.php');?>
        <!--/Header-->

        <!-- Sidebar menu-->
        <?php echo view('admin/sidebar_menu.php');?>
        <!-- /Sidebar menu-->
        <!--App-Content-->
        <div class="app-content">
			<div class="side-app">
				<div class="row" style="margin-top:95px;">
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Car Sub Brands</h3>
                                <a href="<?php echo base_url('public/admin/addCarSubBrandView');?>" class="btn btn-success ml-auto"><i class="fa fa-plus" aria-hidden="true"></i> Car Sub Brands</a>
							</div>
							<div class="card-body">
                            <table class="table table-bordered table-hover" id="CarBrandTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Brand</th>
                                        <th>Sub Brand</th>
                                        <th>Slug</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
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
        </div>
        <!--App-Content-->
    
    <!--Footer-->
    <?php echo view('admin/page_footer.php');?>
    <!--/Footer-->
</div>
<!--/Page-->
<?php echo view('admin/footer.php'); ?>

<style>
    .swal2-popup {
  font-size: 0.8rem !important;
}
</style>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
  
  $(document).ready( function () {
        var success = '<?php echo ($session->getFlashdata('success') != '')? true : false;?>';
        var error = '<?php echo ($session->getFlashdata('error') != '')? true : false;?>';
        if(success){
            Swal.fire('Success !','<?php echo $session->getFlashdata('success');?>','success');
        }
        if(error){
            Swal.fire('Error !','<?php echo $session->getFlashdata('error');?>','error');
        }


    var CarTable = $('#CarBrandTable').DataTable({
        lengthMenu: [[ 10, 20,50,100], [ 10, 20, 50, 100]], // page length options
        bProcessing: true,
        serverSide: true,
        ajax: {
            url: "<?php echo base_url('public/admin/CarSubBrandList');?>", // json datasource
            type: "post",
            data: {
            // key1: value1 - in case if we want send data with request
            }
        },
        columnDefs: [
            { targets:[0],orderable: false, targets: [0, 1, 2] }
        ],
        bFilter: true, // to display datatable search
        });

        //Delete
        $("#CarBrandTable tbody").on('click', '.delete', function() {
			var id = $(this).attr('data-id');
            if(this.name == "deleteButton") {
				Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.post(
                            '<?php echo base_url('public/admin/CarSubBrandDelete');?>',
                            {id: id}, 
                            function(result) {
                                CarTable.draw();
                                Swal.fire('Deleted!','Your data has been deleted.','success');
                            }
                        );
                        
                    }
                })
					
			}
		});
        
    });
    
    
    </script>