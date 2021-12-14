<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar doc-sidebar">
    <!-- <div class="app-sidebar__user clearfix">
        <div class="dropdown user-pro-body">
            <div>
                <img src="../assets/images/users/male/25.jpg" alt="user-img" class="avatar avatar-lg brround">
                <a href="editprofile.html" class="profile-img">
                    <span class="fa fa-pencil" aria-hidden="true"></span>
                </a>
            </div>
            <div class="user-info">
                <h2>Rubin Carmody</h2>
                <span>Web Designer</span>
            </div>
        </div>
    </div> -->
    <ul class="side-menu">
        <li class="slide">
            <a class="side-menu__item" href="widgets.html">
                <i class="side-menu__icon ti-package"></i><span class="side-menu__label">Dashboard</span>
            </a>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-car"></i><span class="side-menu__label">Car</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li>
                    <a href="<?php echo base_url('admin/carlist')?>" class="slide-item">List</a>
                </li>
                <li>
                    <a href="<?php echo base_url('admin/newcar')?>" class="slide-item">New</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
<!-- /Sidebar menu-->