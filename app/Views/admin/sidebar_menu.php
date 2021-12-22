<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar doc-sidebar">
     <div class="app-sidebar__user clearfix">
        <div class="dropdown user-pro-body">
            <div>
                <img src="../assets/images/users/male/25.jpg" alt="user-img" class="avatar avatar-lg brround">
                <!-- <a href="editprofile.html" class="profile-img">
                    <span class="fa fa-pencil" aria-hidden="true"></span>
                </a> -->
            </div>
            <div class="user-info">
                <h2><?php echo ucwords(session()->get('name')); ?></h2>
                <span><?php echo ucwords(session()->get('user_type_name')); ?></span>
            </div>
        </div>
    </div> 
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
                    <a href="<?php echo base_url(session()->get('user_type_name')."/carlist")?>" class="slide-item">List</a>
                </li>
                <li>
                    <a href="<?php echo base_url(session()->get('user_type_name')."/caradd")?>" class="slide-item">New</a>
                </li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-flag"></i><span class="side-menu__label">Brand</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">

            
            <li>
                    <a href="<?php echo base_url(session()->get('user_type_name').'/brandform') ?>" class="slide-item">Brand Add</a>
                </li>
                <li>
                    <a href="<?php echo base_url(session()->get('user_type_name').'/brandlist') ?>" class="slide-item">Brand List</a>
                </li>

            </ul>
        </li> 

        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-folder"></i><span class="side-menu__label">Model</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">

            
            <li>
                    <a href="<?php echo base_url(session()->get('user_type_name').'/modelform') ?>" class="slide-item">Model Add </a>
                </li>
                <li>
                    <a href="<?php echo base_url(session()->get('user_type_name').'/modelslist') ?>" class="slide-item">Model List </a>
                </li>

            </ul>
        </li> 

        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-folder"></i><span class="side-menu__label">Cities</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">

            
            <li>
                    <a href="<?php echo base_url(session()->get('user_type_name').'/citiesform') ?>" class="slide-item">Cities Add </a>
                </li>
                <li>
                    <a href="<?php echo base_url(session()->get('user_type_name').'/citieslist') ?>" class="slide-item">Cities List </a>
                </li>

            </ul>
        </li> 

    </ul>
</aside>
<!-- /Sidebar menu-->