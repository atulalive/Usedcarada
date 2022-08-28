<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar doc-sidebar">
    <br>

    <ul class="side-menu">
        <li class="slide">
             <a class="side-menu__item " href="widgets.html">
                <i class="side-menu__icon ti-package"></i><span class="side-menu__label">Dashboard</span>
            </a>
            
        </li>
        <?php
            if (session()->get('user_type_name') === 'admin') {
         ?>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-user"></i><span class="side-menu__label">Vendor</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li>
                    <a href="<?php echo base_url(session()->get('user_type_name')."/vendorlist")?>" class="slide-item">List of Vendor</a>
                </li>
                <li>
                    <a href="<?php echo base_url(session()->get('user_type_name')."/vendorform")?>" class="slide-item">Add of Vendor</a>
                </li>
            </ul>
        </li><?php }?>
         <?php
            if (session()->get('user_type_name') === 'admin') {
         ?>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-users"></i><span class="side-menu__label">Customer</span><i class="angle fa fa-angle-right"></i></a>
                <ul class="slide-menu">
                    <li>
                        <a href="<?php echo base_url(session()->get('user_type_name')."/carlist")?>" class="slide-item">List of Registered Users</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(session()->get('user_type_name')."/customeradd")?>" class="slide-item">Add New User</a>
                    </li>
                </ul>
            </li>
         <?php }?>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-car"></i><span class="side-menu__label">Car</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li>
                    <a href="<?php echo base_url("public/admin/CarAddForm")?>" class="slide-item">New Car<a>
                    <!-- <a href="<?php echo base_url("public/master/CarAddForm")?>" class="slide-item">List</a> -->
                </li>
                <li>
                    <a href="#" class="slide-item">Features<a>
                    <!-- <a href="<?php echo base_url(session()->get('user_type_name')."/carlist")?>" class="slide-item">List</a> -->
                </li>
                <li>
                <a href="#" class="slide-item">Specifications<a>
                    <!-- <a href="<?php echo base_url(session()->get('user_type_name')."/caradd")?>" class="slide-item">New</a> -->
                </li>
            </ul>
        </li>
        <?php
            if (session()->get('user_type_name') === 'admin') {
         ?>
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
        <?php }?>
        <?php
            if (session()->get('user_type_name') === 'admin') {
         ?>
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
        <?php }?>
        <?php
            if (session()->get('user_type_name') === 'admin') {
         ?>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-folder"></i><span class="side-menu__label">Cities</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">

            <li>
                    <a href="<?php echo base_url(session()->get('user_type_name').'/countryform') ?>" class="slide-item">Country Add </a>
                </li>
                <li>
                    <a href="<?php echo base_url(session()->get('user_type_name').'/stateform') ?>" class="slide-item">State Add </a>
                </li>
            <li>
                    <a href="<?php echo base_url(session()->get('user_type_name').'/citiesform') ?>" class="slide-item">Cities Add </a>
                </li>
                <li>
                    <a href="<?php echo base_url(session()->get('user_type_name').'/citieslist') ?>" class="slide-item">Cities List </a>
                </li>

            </ul>
        </li>  <?php }?>
        <?php
            if (session()->get('user_type_name') === 'admin') {
         ?>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-car"></i><span class="side-menu__label">Compare Cars</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">

            
            <li>
                    <a href="<?php echo base_url(session()->get('user_type_name').'/citiesform') ?>" class="slide-item">Compare Car Add </a>
                </li>
                <li>
                    <a href="<?php echo base_url(session()->get('user_type_name').'/citieslist') ?>" class="slide-item">Compare Car List </a>
                </li>

            </ul>
        </li>  <?php }?>
         <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-bullhorn"></i><span class="side-menu__label">Advertise</span></a>
            <ul class="slide-menu">

            
            <!--<li>-->
            <!--        <a href="<?php echo base_url(session()->get('user_type_name').'/citiesform') ?>" class="slide-item">Compare Car Add </a>-->
            <!--    </li>-->
            <!--    <li>-->
            <!--        <a href="<?php echo base_url(session()->get('user_type_name').'/citieslist') ?>" class="slide-item">Compare Car List </a>-->
            <!--    </li>-->

            </ul>
        </li> 
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-calendar-check-o "></i><span class="side-menu__label">Bookings</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">

            
            <li>
                    <a href="<?php echo base_url(session()->get('user_type_name').'/citiesform') ?>" class="slide-item">Booking Add </a>
                </li>
                <li>
                    <a href="<?php echo base_url(session()->get('user_type_name').'/citieslist') ?>" class="slide-item">Booking List </a>
                </li>

            </ul>
        </li> 

        <!-- master -->
        <li class="slide">
            <a class="side-menu__item active" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-eye "></i><span class="side-menu__label">Master</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">

            
                <li>
                <a href="<?php echo base_url('public/admin/CarBodies');?>" class="slide-item">Car Bodies </a>
                    <!-- <a href="<?php echo base_url(session()->get('user_type_name').'/citiesform') ?>" class="slide-item">Booking Add </a> -->
                </li>
                <li>
                <a href="<?php echo base_url('public/admin/CarBrands');?>" class="slide-item">Car Brands </a>
                    <!-- <a href="<?php echo base_url(session()->get('user_type_name').'/citieslist') ?>" class="slide-item">Booking List </a> -->
                </li>

                <li>
                <a href="<?php echo base_url('public/admin/CarFeaturesList');?>" class="slide-item">Car Features </a>
                </li>

                <li>
                <a href="<?php echo base_url('public/admin/CarSpecificationsList');?>" class="slide-item">Car Specifications </a>
                </li>

                <li>
                <a href="<?php echo base_url('public/admin/CarSubBrandsList');?>" class="slide-item">Car Sub Brands </a>
                </li>

                <li>
                <a href="<?php echo base_url('public/admin/CarSubNextBrandsList');?>" class="slide-item">Car Sub Brand Model </a>
                </li>  
                
                <li>
                <a href="<?php echo base_url('public/admin/CarTypeList');?>" class="slide-item">Car Types </a>
                </li>

                <li>
                <a href="<?php echo base_url('public/admin/CarCitiesList');?>" class="slide-item"> Cities </a>
                </li>

                <li>
                <a href="<?php echo base_url('public/admin/CarCountriesList');?>" class="slide-item">Countries </a>
                </li>

                <li>
                <a href="<?php echo base_url('public/admin/CarFuleList');?>" class="slide-item">Fuels </a>
                </li>

                <li>
                <a href="<?php echo base_url('public/admin/CarKiloMetersList');?>" class="slide-item">Kilometers  </a>
                </li>

                <li>
                <a href="<?php echo base_url('public/admin/CarOwnersList');?>" class="slide-item">Owners</a>
                </li>

                <li>
                <a href="<?php echo base_url('public/admin/CarPricesList');?>" class="slide-item">Prices </a>
                </li>

                <li>
                <a href="<?php echo base_url('public/admin/CarStatesList');?>" class="slide-item">States </a>
                </li>

                <li>
                <a href="<?php echo base_url('public/admin/CarTransmitionsList');?>" class="slide-item">Transmitions </a>
                </li>

                
                <li>
                <a href="<?php echo base_url('public/admin/CarYearsList');?>" class="slide-item">Years</a>
                </li>

            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-user "></i><span class="side-menu__label">Profile Settings</span></a>
            <ul class="slide-menu">

            
            <!-- <li>
                    <a href="<?php echo base_url(session()->get('user_type_name').'/citiesform') ?>" class="slide-item">Booking Add </a>
                </li>
                <li>
                    <a href="<?php echo base_url(session()->get('user_type_name').'/citieslist') ?>" class="slide-item">Booking List </a>
                </li> -->

            </ul>
        </li> 
<!-- <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-calendar-check-o "></i><span class="side-menu__label">Bookings</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">

            
            <li>
                    <a href="<?php echo base_url(session()->get('user_type_name').'/citiesform') ?>" class="slide-item">Booking Add </a>
                </li>
                <li>
                    <a href="<?php echo base_url(session()->get('user_type_name').'/citieslist') ?>" class="slide-item">Booking List </a>
                </li>

            </ul>
        </li>  -->

    </ul>
</aside>
<!-- /Sidebar menu-->