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
								<h3 class="card-title">Cities</h3>
                                <button type="button" class="btn btn-success ml-auto" data-toggle="modal" data-target="#CarModal"><i class="fa fa-plus" aria-hidden="true"></i> Cities</button>
							</div>
							<div class="card-body">
                            <table class="table table-bordered table-hover" id="tbl-students-data">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Country Name</th>
                                        <th>State Name</th>
                                        <th>City</th>
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
        <h5 class="modal-title" id="exampleModalLabel"> Cities</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="CarBodies">
            <div class="form-group">
                <label for="exampleInputEmail1">Country Name<span style="color:red;">*</span></label>
                <select name="country_id" id="" class="form-control" >
                    <option value="">--Select One--</option>

                    <?php
                        if(isset($countary)){
                            foreach($countary as $val){
                        ?>
                            <option value="<?php echo $val['id'];?>"><?php echo $val['name'];?></option>
                    <?php
                            }
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">State Name<span style="color:red;">*</span></label>
                <select name="state_id" id="" class="form-control statename">
                    <option value="">--Select One--</option>
                </select>
            </div>
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
            url: "<?php echo base_url('public/admin/CarCities_loaddata');?>", // json datasource
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
            var country_id = $('select[name=country_id]').val();
            var name = $('input[name=name]').val();
            var slug = $('input[name=slug]').val();
            var state_id = $('select[name=state_id]').val();
            var id = $('.id').val();
            if(name != '' || slug != ''){
                $.ajax({
                    url: '<?php echo base_url('public/admin/CarCities_Save');?>',
                    type: 'post',
                    data: {country_id : country_id, name: name, slug: slug, state_id:state_id ,id: id},
                    dataType: 'json',
                    success: function(res){
                        if(res){
                            $('input[name=name]').val('');
                            $('input[name=slug]').val('');
                            $('select[name=state_id]').val('');
                            $('select[name=country_id]').val('');
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
                            '<?php echo base_url('public/admin/CarCitiesDelete');?>',
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
                    '<?php echo base_url('public/admin/CarCitiesEdit');?>',
                    {id: id}, 
                    function(result) {
                        var res = JSON.parse(result);
                        $('select[name=country_id]').val(res.country_id);
                        $('select[name=state_id]').val(res.state_id);
                        $('input[name=name]').val(res.name);
                        $('input[name=slug]').val(res.slug);
                        $('.id').val(res.id);
                        $('#CarModal').modal('show');
                        $('.CarBodiesSave').text('Update');
                        $('select[name=country_id]').trigger("change");
                        
                    }
                );
			}
		});

        $(document).on('change','select[name=country_id]',function(){
            var id = this.value;
            $.post(
                    '<?php echo base_url('public/admin/GetStates');?>',
                    {id: id}, 
                    function(result) {
                        $('.statename').html(result);
                    }
                );
            
        });
        
    });
    
    
   
    </script>