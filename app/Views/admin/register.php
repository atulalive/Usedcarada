<?php echo view('admin/head.php'); ?>
<!--Page-->
<div class="page page-h">
    <div class="page-content z-index-10">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-12 col-md-12 d-block mx-auto">
                    <div class="card box-shadow-0 mb-xl-0">
                        <div class="card-header">
                            <h3 class="card-title">Register</h3>
                        </div>

                        <?php $validation =  \Config\Services::validation(); ?>

                        <form action="<?php echo base_url('admin/register'); ?>" method="post">
                            <?php echo csrf_field() ?>
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label text-dark">Name</label>
                                    <input type="text" required class="form-control <?php if ($validation->getError('name')) : ?>is-invalid<?php endif ?>" name="name" id="name" placeholder="Name" value="<?php echo set_value('name'); ?>" />
                                    <?php if ($validation->getError('name')) : ?>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('name') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label class="form-label text-dark">Email address</label>
                                    <input type="email" class="form-control <?php if ($validation->getError('email')) : ?>is-invalid<?php endif ?>" name="email" placeholder="Enter Email" value="<?php echo set_value('email'); ?>" />
                                    <?php if ($validation->getError('email')) : ?>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('email') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label class="form-label text-dark">Password</label>
                                    <input type="password" class="form-control <?php if ($validation->getError('password')) : ?>is-invalid <?php endif ?>" name="password" placeholder="Password" value="" />
                                    <?php if ($validation->getError('password')) : ?>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('password') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label text-dark">Agree the <a href="terms.html">terms and policy</a></span>
                                    </label>
                                </div>
                                <div class="form-footer mt-2">
                                    <button type="submit" class="btn btn-primary btn-block">Create New Account</button>
                                </div>
                                <div class="text-center  mt-3 text-dark">
                                    Already have account?<a href="<?php echo base_url('admin/login'); ?>">SignIn</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Page-->
<?php echo view('admin/footer.php'); ?>