<!--App-Content-->
<div class="app-content  my-3 my-md-5">
    <div class="side-app">
        <div class="page-header">
            <h4 class="page-title">Dashboard</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-12">
                <div class="card ">
                    <div class="card-body text-center">
                        <div class="counter-status dash3-counter">
                            <div class="counter-icon bg-primary text-primary">
                                <i class="icon icon-people text-white"></i>
                            </div>
                            <h5>Vendor</h5>
                            <h2 class="counter mb-0">10</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12">
                <div class="card ">
                    <div class="card-body text-center">
                        <div class="counter-status dash3-counter">
                            <div class="counter-icon bg-info text-info">
                                <i class="icon icon-rocket text-white"></i>
                            </div>
                            <h5>Total Cars</h5>
                            <h2 class="counter mb-0">100</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12">
                <div class="card ">
                    <div class="card-body text-center">
                        <div class="counter-status dash3-counter">
                            <div class="counter-icon bg-success text-success">
                                <i class="icon icon-docs text-white"></i>
                            </div>
                            <h5>Total Brands</h5>
                            <h2 class="counter mb-0">102</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!--div class="col-xl-3 col-lg-6 col-md-12">
                <div class="card ">
                    <div class="card-body text-center">
                        <div class="counter-status dash3-counter">
                            <div class="counter-icon bg-danger text-danger">
                                <i class="icon icon-emotsmile text-white"></i>
                            </div>
                            <h5>Happy Customers</h5>
                            <h2 class="counter mb-0">4388</h2>
                        </div>
                    </div>
                </div>
            </div-->
        </div>

        <!--div class="row">
            <div class="col-xl-4 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Finance State</h3>
                    </div>
                    <div class="card-body">
                        <canvas id="purchase" class=" chartjs-render-monitor chart-dropshadow2 h-220"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 col-md-12">
                <div class="card car-comparision">
                    <div class="item7-card-img d-flex">
                        <img src="../assets/images/admin-media/00-2.jpg" alt="img" class="cover-image w-50">
                        <img src="../assets/images/admin-media/photos/0-4.jpg" alt="img" class="cover-image w-50">
                    </div>
                    <div class="card-image-difference">Vs</div>
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col">
                                <h4>Interstate</h4>
                                <h6>$456-$987</h6>
                            </div>
                            <div class="col">
                                <h4>Quaerat</h4>
                                <h6>$785-$841</h6>
                            </div>
                        </div>
                        <a class="btn btn-primary btn-block mt-3" href="car-compare.html">Interstate Vs Quaerat</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-4 col-lg-6">
                <div class="card car-comparision">
                    <div class="item7-card-img d-flex">
                        <img src="../assets/images/admin-media/00-1.jpg" alt="img" class="cover-image w-50">
                        <img src="../assets/images/admin-media/photos/0-5.jpg" alt="img" class="cover-image w-50">
                    </div>
                    <div class="card-image-difference">Vs</div>
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col">
                                <h4>Millenium</h4>
                                <h6>$456-$987</h6>
                            </div>
                            <div class="col">
                                <h4>Quaerat</h4>
                                <h6>$785-$841</h6>
                            </div>
                        </div>
                        <a class="btn btn-primary btn-block mt-3" href="car-compare.html">Millenium Vs Quaerat</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="col-xl-4 col-lg-12">
                <div class="card ">
                    <div class="card-header">
                        <div class="card-title">Dailywise Feedback</div>
                    </div>
                    <div class="card-body">
                        <div id="echart5" class="chartsh"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Daily Analytics</div>
                    </div>
                    <div class="card-body overflow-hidden">
                        <div id="placeholder4" class="chartsh"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h5 class="card-title">Sales Summary</h5>
                    </div>
                    <div class="card-body">
                        <div class="clearfix row mb-4">
                            <div class="col">
                                <div class="float-left">
                                    <h5 class="mb-0"><strong>Total Revenue</strong></h5>
                                    <small class="text-muted">weekly profit</small>
                                </div>
                            </div>
                            <div class="col">
                                <div class="float-right">
                                    <h4 class="font-weight-bold mb-0 mt-2 text-primary">$15300</h4>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix row mb-4">
                            <div class="col">
                                <div class="float-left">
                                    <h5 class="mb-0"><strong>Total Tax</strong></h5>
                                    <small class="text-muted">weekly profit</small>
                                </div>
                            </div>
                            <div class="col">
                                <div class="float-right">
                                    <h4 class="font-weight-bold mt-2 mb-0 text-success">$1625</h4>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix row mb-4">
                            <div class="col">
                                <div class="float-left">
                                    <h5 class="mb-0"><strong>Total Income</strong></h5>
                                    <small class="text-muted">weekly profit</small>
                                </div>
                            </div>
                            <div class="col">
                                <div class="float-right">
                                    <h4 class="font-weight-bold mt-2 mb-0 text-warning">70%</h4>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix row mb-4">
                            <div class="col">
                                <div class="float-left">
                                    <h5 class="mb-0"><strong>Total Cars</strong></h5>
                                    <small class="text-muted">weekly Cars</small>
                                </div>
                            </div>
                            <div class="col">
                                <div class="float-right">
                                    <h4 class="font-weight-bold mt-2 mb-0 text-danger">5849</h4>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix row mb-0">
                            <div class="col">
                                <div class="float-left">
                                    <h5 class="mb-0"><strong>Total Loss</strong></h5>
                                    <small class="text-muted">weekly profit</small>
                                </div>
                            </div>
                            <div class="col">
                                <div class="float-right">
                                    <h4 class="font-weight-bold mt-2 mb-0 text-secondary">30%</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Car Sales List</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive border-top mb-0 ">
                            <table class="table table-bordered table-hover text-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Category</th>
                                        <th>Date</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#89345</td>
                                        <td>Blanditiis Venue</td>
                                        <td>07-12-2018</td>
                                        <td class="font-weight-semibold fs-16">$893</td>
                                        <td>
                                            <a href="#" class="badge badge-danger">Pending</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#39281</td>
                                        <td>Voluptates XUV300</td>
                                        <td>12-11-2018</td>
                                        <td class="font-weight-semibold fs-16">$254</td>
                                        <td>
                                            <a href="#" class="badge badge-primary">Completed</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#35825</td>
                                        <td>Chittenden</td>
                                        <td>15-11-2018</td>
                                        <td class="font-weight-semibold fs-16">$352</td>
                                        <td>
                                            <a href="#" class="badge badge-success">Activated</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#62391</td>
                                        <td>Possimus</td>
                                        <td>10-11-2018</td>
                                        <td class="font-weight-semibold fs-16">$643</td>
                                        <td>
                                            <a href="#" class="badge badge-danger">Pending</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#92481</td>
                                        <td>Jeep Compass</td>
                                        <td>07-11-2018</td>
                                        <td class="font-weight-semibold fs-16">$392</td>
                                        <td>
                                            <a href="#" class="badge badge-primary">Activated</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#29381</td>
                                        <td>Blanditiis Venue</td>
                                        <td>31-10-2018</td>
                                        <td class="font-weight-semibold fs-16">$295</td>
                                        <td>
                                            <a href="#" class="badge badge-danger">Pending</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div-->
    </div>
</div>
<!--App-Content-->