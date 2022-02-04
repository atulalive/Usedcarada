<!--Left Side Content-->
<div class="col-xl-3 col-lg-3 col-md-12">
    <div class="card">
        <div class="px-4 py-3 border-bottom border-top">
            <h4 class="mb-0"style="padding-left:10%;">Location</h4>
        </div><br>

        <div class="card-body">
            <div class="row">
                <div class="form-group col-md-12 mb-1">
                    <select class="form-control select2 price-filter">
                        <option value="">Select Location</option>
                    <?php 
                        foreach ($get_top_cities as $get_top_cities_val) {	
                    ?>
                        <option value="<?= $get_top_cities_val['city_name']; ?>">
                            <h5>
                                <?= $get_top_cities_val['city_name']; ?>
                            </h5>
                        </option>
                    <?php }?>	
                    </select>
                </div>
            </div>
        </div> 
    </div>  

    <div class="card">
        <div class="px-4 py-3 border-bottom border-top">
            <h4 class="mb-0"style="padding-left:10%;">Price Range</h4>
        </div><br>

        <div class="card-body">
            <div class="row">
                <div class="form-group col-md-12 mb-1">
                    <select class="form-control select2 price-filter">
                        <option value="">Select Price</option>
                    <?php 
                        foreach ($getBudegetPriceRange as $getBudegetPriceRange_val) {	
                    ?>
                        <option value="<?= $getBudegetPriceRange_val['product_price']; ?>">
                            <h5>
                                <?= $getBudegetPriceRange_val['display_price_range']; ?>
                            </h5>
                        </option>
                    <?php }?>	
                    </select>
                </div>
            </div>
        </div> 
    </div>  

    <div class="card overflow-hidden">
    <div class="px-4 py-3 border-bottom border-top">
            <h4 class="mb-0"style="padding-left:10%;">Brand Name</h4>
        </div><br>
        <?php if (!empty($product_brands) && is_array($product_brands)) {
                foreach ($product_brands as $brand_val) {
        ?>
        <div class="">
            <div class="" id="">
                <div class="filter-product-checkboxs"style="padding-left:10%;">
                    <label class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input brand-name" value="<?php echo strtolower($brand_val['brand_name'])?>">
                        <span class="custom-control-label">
                            <a href="<?php echo  base_url() .URL_SEPARATOR. 'brand'.URL_SEPARATOR.$brand_val['machine_name']; ?>"></a>
                            <h5 class=""><?php echo ucwords($brand_val['brand_name']); ?></h5>
                        </span>
                    </label>
                
                </div>
            </div>
        </div>
        <?php } } ?>

<!-- ---------------------------------------------------------------------------- -->
        <div class="px-4 py-3 border-bottom border-top">
            <h4 class="mb-0"style="padding-left:10%;">Year</h4>
        </div>

        <?php if (!empty($years) && is_array($years)) {?>
            
        <div class="card-body">
            <div class="row">
                <div class="form-group col-md-6 mb-0">
                    <label for="inputState1" class="col-form-label">Min</label>
                    <select class="form-control select2 min-year">
                    <?php 
                        foreach ($years as $year_val) {	
                    ?>
                        <option value="<?php echo ucwords($year_val['min']); ?>"><h5 class=""><?php echo ucwords($year_val['min']); ?></h5></option>
                    <?php }?>	
                    </select>
                </div>
                <div class="form-group col-md-6 mb-0">
                    <label for="inputState2" class="col-form-label">Max</label>
                    <select class="form-control select2 max-year">
                    <?php 
                        foreach ($years as $year_val) {	
                    ?>
                        <option value="<?php echo ucwords($year_val['max']); ?>"><h5 class=""><?php echo ucwords($year_val['max']); ?></h5></option>
                    <?php }?>
                        
                    </select>
                </div>
            </div>
        </div>
            
        <?php } ?>
<!-- ------------------------------------------------------------------- -->
        <div class="px-4 py-3 border-bottom border-top">
            <h4 class="mb-0"style="padding-left:10%;">Fuel Type</h4>
        </div><br>
        <?php   
        if (!empty($fuel) && is_array($fuel)) {
            foreach ($fuel as $fuel_val) {       
        ?>
        <div class="">
            <div class="filter-product-checkboxs"style="padding-left:10%;">
                <label class="custom-control custom-checkbox mb-2">
                    <input type="checkbox" class="custom-control-input fuel"  value="<?php echo ucwords($fuel_val['fuel_type']); ?>">
                    <span class="custom-control-label">
                        <h5 class=""><?php echo ucwords($fuel_val['fuel_type']); ?></h5>
                    
                    </span>
                </label>
            </div>
        </div>
        <?php } } ?>
<!-- --------------------------------------------------------------------- -->
        <div class="px-4 py-3 border-bottom border-top">
            <h4 class="mb-0"style="padding-left:10%;">Vehicle Type</h4>
        </div>
        <br>

        <?php 
        if (!empty($vehicleTypes) && is_array($vehicleTypes)) {
            foreach ($vehicleTypes as $vehicleType) {
        ?>
        <div class="">
            <div class="filter-product-checkboxs"style="padding-left:10%;">
                <label class="custom-control custom-checkbox mb-2">
                    <input type="checkbox" class="custom-control-input vehicle-type" value="<?php echo ucwords($vehicleType['sub_category_name']); ?>">
                    <span class="custom-control-label">
                    <h5 class=""><?php echo ucwords($vehicleType['sub_category_name']); ?></h5>
                    </span>
                </label>
            </div>
        </div>
        <?php } } ?>
<!-- ------------------------------------------------------------------ -->
        <div class="px-4 py-3 border-bottom border-top">
            <h4 class="mb-0"style="padding-left:10%;">Owner</h4>
        </div><br>
        <?php
           
        if (!empty($owners) && is_array($owners)) {
            foreach ($owners as $owner) {
        ?>
        <div class="">
            <div class="filter-product-checkboxs"style="padding-left:10%;">
                <label class="custom-control custom-checkbox mb-2">
                    <input type="checkbox" class="custom-control-input owner-type" value="<?= ucwords($owner['owner_type']); ?>">
                    <span class="custom-control-label">
                    <h5 class=""><?= ucwords($owner['owner_type']); ?></h5>
                    </span>
                </label>
            </div>
        </div>
        <?php } } ?> 
<!-- -------------------------------------------------------------------- -->
        <div class="px-4 py-3 border-bottom border-top">
            <h4 class="mb-0"style="padding-left:10%;">Transmition</h4>
        </div><br>
        <?php
        if (!empty($transmition) && is_array($transmition)) {
            foreach ($transmition as $transmition_val) {
        ?>
        <div class="">
            <div class="filter-product-checkboxs"style="padding-left:10%;">
                <label class="custom-control custom-checkbox mb-2">
                    <input type="checkbox" class="custom-control-input transmition-filter" value="<?= ucwords($transmition_val['transmition_name']); ?>">
                    <span class="custom-control-label">
                    <h5 class=""><?= ucwords($transmition_val['transmition_name']); ?></h5>
                    </span>
                </label>
            </div>
        </div>
        <?php } } ?> 
<!-- ------------------------------------------------------------- -->

        <div class="px-4 py-3 border-bottom border-top">
            <h4 class="mb-0"style="padding-left:10%;">Kilometer</h4>
        </div><br>
        <?php
        if (!empty($kilometers) && is_array($kilometers)) {
        ?>
        <div class="">
            <div class="form-group col-md-12 mb-1" style="padding-bottom:2pc;">
                <select class="form-control select2 kilo-meter-filter">
                    <option value="">Select Kilometer</option>
                    <?php
                        foreach ($kilometers as $kilometer) {
                    ?>
                            <option value="<?= $kilometer['distance']; ?>">
                                <h5>
                                    <?= $kilometer['distance']; ?>
                                </h5>
                            </option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <?php } ?> 

    </div>

</div>
<!--/Left Side Content-->