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
                                <h3 class="card-title">Car Sub Next Brands</h3>
                                <a href="<?php echo base_url('public/admin/CarSubNextBrandsList');?>" class="btn btn-success ml-auto"><i class="fa fa-arrow-left" aria-hidden="true"></i> Car Sub Next Brand List</a>
							</div>
							<div class="card-body">
                                <?php $validation = \Config\Services::validation(); ?>
                                <form method="post" action="<?php echo base_url('public/admin/AddCarSubNextBrand');?>" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Brand Name<span style="color:red;">*</span></label>
                                        <select name="brand_name" id="brand" class="form-control brand" onchange="myFunction(this.value)">
                                            <option value="">--Select One--</option>
                                            <?php
                                                if(isset($brand)){
                                                    foreach($brand as $val){
                                            ?>
                                                        <option value="<?php echo $val['id'];?>" <?php echo (isset($data) && $data['brand_id'] == $val['id'])? 'selected':'';?>><?php echo $val['name'];?></option>
                                            <?php
                                                    }
                                                }
                                            ?>
                                        </select>
                                        <?php if($validation->getError('brand_name')) { echo '<sapn style="color:red;">'.$validation->getError('brand_name').'</span>';}?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Sub Brand Name<span style="color:red;">*</span></label>
                                        <select name="brand_sub_name" id="nextbrand" class="form-control nextbrand">
                                            <option value="">--Select One--</option>
                                        </select>
                                        <?php if($validation->getError('brand_sub_name')) { echo '<sapn style="color:red;">'.$validation->getError('brand_sub_name').'</span>';}?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Sub Next Brand Name<span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" name="sub_next_brand_name" value="<?php echo (isset($data['name']) && $data['name'] != '')? $data['name'] : '' ;?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                                        <input type="hidden" name="id" class="id" value="<?php echo (isset($data['id']) && $data['id'] != '')? $data['id'] : '' ;?>">
                                        <?php if($validation->getError('sub_next_brand_name')) { echo '<sapn style="color:red;">'.$validation->getError('sub_next_brand_name').'</span>';}?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Slug<span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" name="slug" value="<?php echo (isset($data['slug']) && $data['slug'] != '')? $data['slug'] : '' ;?>" id="exampleInputPassword1" placeholder="Enter Slug">
                                        <?php if($validation->getError('slug')) { echo '<sapn style="color:red;">'.$validation->getError('slug').'</span>';}?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Image<span style="color:red;">*</span></label>
                                        <input type="file" class="form-control" name="image">
                                        <input type="hidden" name="old_image" value="<?php echo (isset($data['image']) && $data['image'] != '')? $data['image'] : '' ;?>">
                                        <?php if($validation->getError('image')) { echo '<sapn style="color:red;">'.$validation->getError('image').'</span>';}?>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success" name="submit" value="<?php echo (isset($data))? 'Update' : 'Save';?>">
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
<script>
    $(document).ready(function(){
        var success = '<?php echo ($session->getFlashdata('success') != '')? true : false;?>';
        var error = '<?php echo ($session->getFlashdata('error') != '')? true : false;?>';
        if(success){
            Swal.fire('Success !','<?php echo $session->getFlashdata('success');?>','success');
        }
        if(error){
            Swal.fire('Error !','<?php echo $session->getFlashdata('error');?>','error');
        }

        var CheckSubBrand = '<?php echo (isset($data))? $data['brand_id'] : '';?>';
        if(CheckSubBrand != ''){
            myFunction(CheckSubBrand);
        }
        
    })
    function myFunction(id){
        var sub_brand = '<?php echo (isset($data))? $data['sub_brand_id'] : '';?>';
        $.ajax({
            url: "<?php echo base_url('public/admin/FindSubBrandData');?>",
            dataType:"html",
            data:{id:id,sub_brand : sub_brand},
            type: "post",
            success: function(data){
                $('.nextbrand').html(data)
            }
        });
    }



</script>