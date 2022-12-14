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
                    <h4 class="page-title">Cities</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('admin/master'); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cities</li>
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
                                                        <!--th>Image</th-->
                                                        <th>Country Name</th>
                                                        <th>State Name</th>
                                                        <th>City Name</th>
                                                        <th>Car Name</th>
                                                        <th>Created Date</th>
                                                        <th>updated Date</th>
                                                        <th>Action</th>

                                                    </tr>
                                                    
                                                                    
                                                   
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