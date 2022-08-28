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
								<h3 class="card-title">Car Owners</h3>
                                <button type="button" class="btn btn-success ml-auto" data-toggle="modal" data-target="#CarModal"><i class="fa fa-plus" aria-hidden="true"></i> Car Owners</button>
							</div>
							<div class="card-body">
                            <table class="table table-bordered table-hover" id="tbl-students-data">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Slug</th>
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


<!-- Modal -->
<div class="modal fade" id="CarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Car Owners</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="CarBodies">
            <div class="form-group">
                <label for="exampleInputEmail1">Name<span style="color:red;">*</span></label>
                <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                <input type="hidden" name="id" class="id">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Slug<span style="color:red;">*</span></label>
                <input type="text" class="form-control" name="slug" id="exampleInputPassword1" placeholder="Enter Slug">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="submit"  class="btn btn-success CarBodiesSave">Save</button>
      </div>
    </div>
  </div>
</div>
<style>
    .swal2-popup {
  font-size: 0.8rem !important;
}
</style>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
  
  $(document).ready( function () {
   
    var CarTable = $('#tbl-students-data').DataTable({
        lengthMenu: [[ 10, 20,50,100], [ 10, 20, 50, 100]], // page length options
        bProcessing: true,
        serverSide: true,
        ajax: {
            url: "<?php echo base_url('public/admin/CarOwners_loaddata');?>", // json datasource
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

        $(document).on('click','.CarBodiesSave',function(){
            var name = $('input[name=name]').val();
            var slug = $('input[name=slug]').val();
            var id = $('.id').val();
            if(name != '' || slug != ''){
                $.ajax({
                    url: '<?php echo base_url('public/admin/CarOwners_Save');?>',
                    type: 'post',
                    data: {name: name, slug: slug, id: id},
                    dataType: 'json',
                    success: function(res){
                        if(res){
                            $('input[name=name]').val('');
                            $('input[name=slug]').val('');
                            $('.id').val('');
                            $('#CarModal').modal('hide');
                            $('.CarBodiesSave').text('Save');
                            CarTable.draw();
                            Swal.fire('Save And Update','Your form is submitted successfully !','success');
                           
                        }else{
                            alert('Some error please try again !');
                        }
                    }
                });
            }else{
                alert('Please fill in all the required fields.');
            }
            
            
        });
        
        //Delete
        $("#tbl-students-data tbody").on('click', '.delete', function() {
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
                            '<?php echo base_url('public/admin/CarOwnersDelete');?>',
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

        //update
        $("#tbl-students-data tbody").on('click', '.edit', function() {
			var id = $(this).attr('data-id');
            if(this.name == "edit") {
                $.post(
                    '<?php echo base_url('public/admin/CarOwnersEdit');?>',
                    {id: id}, 
                    function(result) {
                        var res = JSON.parse(result);
                        $('input[name=name]').val(res.name);
                        $('input[name=slug]').val(res.slug);
                        $('.id').val(res.id);
                        $('#CarModal').modal('show');
                        $('.CarBodiesSave').text('Update');
                    }
                );
			}
		});
        
    });
    
    
    </script>