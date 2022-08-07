<?php echo view('admin/head.php');?>
<!--Page-->
<div class="page page-h">
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-md-6 d-block mx-auto">
                    <div class="card box-shadow-0 mb-0">
                        
                        <div class=""style="padding-left: 32%;">
                        <br><img src="<?php echo URL_IMAGES_MEDIA; ?>logos/logo.png" class="header-brand-img text-center" alt="Claylist logo">
                        </div>
                        <div class=""style="padding-left: 32%;">
                        <br><h4 style="padding-left: 2%;">Admin Login</h4>
                     
                        </div>

                        <?php if (session()->getFlashdata('success')) : ?>
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="btn-close" data-bs-dismiss="alert">&times;</button>
                                <?php echo session()->getFlashdata('success') ?>
                            </div>
                        <?php elseif (session()->getFlashdata('failed')) : ?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="btn-close" data-bs-dismiss="alert">&times;</button>
                                <?php echo session()->getFlashdata('failed') ?>
                            </div>
                        <?php endif; ?>

                        <?php $validation =  \Config\Services::validation(); ?>
                        <form action="<?= base_url('admin/login') ?>" method="post">
                            <?= csrf_field() ?>
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label text-dark">Email address</label>
                                    <input type="email" class="form-control  <?php if ($validation->getError('email')) : ?>is-invalid<?php endif ?>" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>" />
                                </div>
                                <div class="form-group">
                                    <label class="form-label text-dark">Password</label>
                                    <input type="password" class="form-control <?php if ($validation->getError('password')) : ?>is-invalid <?php endif ?>" name="password" placeholder="Password" value="" />
                                </div>
                                <div class="form-group">
                                    <label class="custom-control custom-checkbox">
                                        <!-- <a href="forgot-password.html" class="float-right small text-dark mt-1">I forgot password</a> -->
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label text-dark">Remember me</span>
                                    </label>
                                </div>
                                <div class="form-footer mt-2">
                                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                </div>
                                <div class="text-center  mt-3 text-dark">
                                    Don't have account yet? <a href="<?php echo base_url('admin/register'); ?>">Sign Up</a>
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