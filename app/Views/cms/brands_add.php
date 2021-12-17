<!--App-Content-->
<div class="app-content  my-3 my-md-5">
    <div class="side-app">
        <div class="page-header">
            <h4 class="page-title">Cars</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/master'); ?>">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Brand</li>
            </ol>
        </div>
      
        <form class="form-horizontal" role="form" method="POST" style="background: #f9f9f9; padding:50px 25px 15px 20px">
               <div class="row">
                
                    <div class="col">
                    <label style="color: 	#008B8C;font-weight: 500;">Brand Name<span  style="color:red">*</span></label> 
                    <input class="form-control" id="brand_name" name="brand_name">
                    </div>
                
                    <div class="col">
                    <label style="color: 	#008B8C;font-weight: 500;"> Image Upload<span style="color:red">*</span></label> 
                    <input class="form-control form-control-sm" id="formFileSm" type="file">
                    </div>

                </div>
                <br><br>
                <div>
                  <button type="button" class="btn btn-success" type="submit" name="submit" value="Submit">submit</button>
                 </div>
          </form>

    </div>
</div>
<!--App-Content-->