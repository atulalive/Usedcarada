<?php echo view('admin/head.php'); ?>
<?php $session = \Config\Services::session(); ?>
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
        <?php 
        $segment = explode('/', trim(PHP_SELF));
        unset($segment[0]);
        switch ($segment[3]) {
            case 'master':
                $page = 'dashboard';
                break;
            
            case 'carlist':
                $page = 'product_list';
                break;
            
            case 'newcar':
                $page = 'product_new';
                break;

            case 'brand':
                $page = 'brand';
                break;
                
             case 'addbrand':
                $page = 'brands_add';
                break;

             case 'model':
                 $page = 'model';
                 break;
                    
            case 'addmodel':
                $page = 'add_model';
                break;
            
            default:
                $page = 'dashboard';
                break;
        }
        echo view('cms/'.$page.'.php'); ?>
        <!--App-Content-->
    </div>

    <!--Footer-->
    <?php echo view('admin/page_footer.php');?>
    <!--/Footer-->
</div>
<!--/Page-->
<?php echo view('admin/footer.php'); ?>