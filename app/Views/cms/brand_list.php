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
        <div class="app-content  my-3 my-md-5">
            <div class="side-app">
                <div class="page-header">
                    <h4 class="page-title">Brand</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('admin/master'); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Brand</li>
                    </ol>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active " id="tab1">
                                        <div class="mail-option">




                                            <ul class="unstyled inbox-pagination">
                                                <li><span><strong>Total 12 items</strong></span></li>

                                            </ul>
                                        </div>
                                        <div class="table-responsive border-top">
                                            <table class="table card-table table-bordered table-hover table-vcenter text-nowrap">
                                                <tbody>
                                                    <tr>
                                                        <th class="w-1">Sr No.</th>
                                                        <th>Image</th>
                                                        <th>Brnd Name</th>
                                                        <th>Machine Name</th>
                                                        <th>Year</th>
                                                        <th>Created Date</th>
                                                        <th>updated Date</th>
                                                        <th>Action</th>

                                                    </tr>
                                                    

                                                        <?php
                                                        $i = 1;
                                                        foreach($brandList as $brandls){
                                                           $i++; 
                                                            ?>
                                                         <tr>   
                                                        <th><?php echo $i;?></th>
                                                        <td><img src="<?php echo URL_IMAGES_MEDIA . 'brands' . URL_SEPARATOR . strtolower($brandls['brand_thumbnail_image']); ?>" class="w-9" alt="image"> </td>
                                                        <td><?php echo $brandls['brand_name'];?></td>
                                                        <td><span><?php echo $brandls['machine_name'];?></span></td>
                                                        <td><?php echo $brandls['year'];?></td>
                                                        <td><?php echo  date_format(date_create($brandls['created_datetime']),"M d,Y");?></td>
                                                        <td><?php echo  date_format(date_create($brandls['updated_datetime']),"M d,Y");?></td>
                                                        <td><i style="color:blue;text-shadow:2px 2px 4px #000000;" class="side-menu__icon fa fa-edit"><?php $brandls['id'];?></i><i style="color:black;text-shadow:2px 2px 4px #000000;" class="side-menu__icon fa fa-trash"><?php $brandls['id'];?></i></td>
                                                        </tr>
                                                    <?php } ?>                
                                                   

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

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
<!--/Page-->
<?php echo view('admin/footer.php'); ?>