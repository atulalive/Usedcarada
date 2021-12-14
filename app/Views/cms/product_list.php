<!--App-Content-->
<div class="app-content  my-3 my-md-5">
    <div class="side-app">
        <div class="page-header">
            <h4 class="page-title">Cars</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/master'); ?>">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Car</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div>
                        <div class="user-tabs mb-4">
                            <!-- Tabs -->
                            <ul class="nav panel-tabs">
                                <li class=""><a href="#tab1" class="active" data-toggle="tab">All (12)</a></li>
                                <li><a href="#tab2" data-toggle="tab">Mine (12)</a></li>
                                <li><a href="#tab3" data-toggle="tab">Published (5)</a></li>
                                <li><a href="#tab5" data-toggle="tab">Trash (7)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active " id="tab1">
                                <div class="mail-option">
                                    
                                    <div class="chk-all">
                                        <div class="btn-group">
                                            <a data-toggle="dropdown" href="#" class="btn mini all" aria-expanded="false">
                                                All dates
                                                <i class="fa fa-angle-down "></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">January, 2021</a></li>
                                                <li><a href="#">December, 2021</a></li>
                                                <li><a href="#">November, 2021</a></li>
                                                <li><a href="#">October, 2021</a></li>
                                                <li><a href="#">September, 2021</a></li>
                                                <li><a href="#">August, 2021</a></li>
                                                <li><a href="#">July, 2021</a></li>
                                                <li><a href="#">June, 2021</a></li>
                                                <li><a href="#">May, 2021</a></li>
                                                <li><a href="#">April, 2021</a></li>
                                                <li><a href="#">March, 2021</a></li>
                                                <li><a href="#">February, 2021</a></li>
                                                <li><a href="#">January, 2022</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="btn-group hidden-phone">
                                        <a href="#" class="btn" aria-expanded="false">
                                            Apply
                                        </a>
                                    </div>
                                    <div class="btn-group hidden-phone">
                                        <a href="#" class="btn" aria-expanded="false">
                                            Filter
                                        </a>
                                    </div>
                                    <ul class="unstyled inbox-pagination">
                                        <li><span>1-10 of 12 items</span></li>
                                        <li>
                                            <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="table-responsive border-top">
                                    <table class="table card-table table-bordered table-hover table-vcenter text-nowrap">
                                        <tbody>
                                            <tr>
                                                <th class="w-1">Sr No.</th>
                                                <th>Image</th>
                                                <th class="w-1">Title</th>
                                                <th class="w-1">Vendor</th>
                                                <th class="w-1">Model</th>
                                                <th>Brand</th>
                                                <th>Price</th>
                                                <th>Publish Date</th>
                                                
                                            </tr>
                                            <tr>
                                                <th>1</th>
                                                <td><img src="../assets/images/photos/1.jpg" class="w-7 h-7" alt="image"> </td>
                                                <td><a href="#" class="btn-link">Honda Amaze</a>
                                                </td>
                                                <td><span>Vinayak Shelar</span></td>
                                                <td>SUV</td>
                                                <td>Honda</td>
                                                <td>5,40,000</td>
                                                <td>Jan 17,2019</td>
                                                
                                            </tr>
                                            <tr>
                                                <th>2</th>
                                                <td><img src="../assets/images/photos/2.jpg" class="w-7 h-7" alt="image"> </td>
                                                <td><a href="#" class="btn-link">Maruti Swift</a>
                                                </td>
                                                <td><span>Shivam Singh</span></td>
                                                <td>LXI</td>
                                                <td>Maruti Suzuki</td>
                                                <td>4,20,000</td>
                                                <td>Aug 30,2019</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <ul class="pagination mb-5">
                    <li class="page-item page-prev disabled">
                        <a class="page-link" href="#" tabindex="-1">Prev</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item page-next">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--App-Content-->