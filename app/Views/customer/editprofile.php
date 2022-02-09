<?php echo view('header.php'); ?>
<?php echo view('topbar.php'); ?>

<br><br><br><br>
<?php echo view('customer/left-side-view.php'); ?>







<div class="col-xl-9 col-lg-12 col-md-12">

    <h4>Edit Profile</h4>
    <div class="card mb-0">
        <div class="card-header">

            <div class="card-body text-center item-user ">
                <div class="profile-pic">
                    <div class="profile-pic-img">
                        <span class="bg-success dots" data-toggle="tooltip" data-placement="top" title="online"></span>
                        <img src="../assets/images/users/male/m1.png" class="brround" alt="user">
                    </div>
                    <a href="userprofile.html" class="text-dark">
                        <h4 class="mt-3 mb-0 font-weight-semibold">Riyaz Khan</h4>
                    </a>
                </div>
            </div>


        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" placeholder="First Name">
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name">
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Phone Number</label>
                        <input type="text" class="form-control" placeholder="Number">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" placeholder="Vehicle Address">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="form-group">
                        <label class="form-label">City</label>
                        <input type="text" class="form-control" placeholder="City">
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="form-group">
                        <label class="form-label">Country</label>
                        <select class="form-control   " data-placeholder="Select">
                            <optgroup label="Categories">
                                <option>--Select--</option>
                                <option value="1">Germany</option>
                                <option value="2">Mercedes-Sapiente Swift</option>
                                <option value="3">Canada</option>
                                <option value="4">Usa</option>
                                <option value="5">Afghanistan</option>
                                <option value="6">Albania</option>
                                <option value="7">China</option>
                                <option value="8">Denmark</option>
                                <option value="9">Finland</option>
                                <option value="10">India</option>
                                <option value="11">Kiribati</option>
                                <option value="12">Kuwait</option>
                                <option value="13">Mexico</option>
                                <option value="14">Pakistan</option>
                            </optgroup>
                        </select>
                    </div>
                </div><br>




                <div class="col-md-12">
                    <div class="form-group mb-0">
                        <label class="form-label">Upload Image</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="example-file-input-custom">
                            <label class="custom-file-label">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success">Updated Profile</button>
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