<!--Left Side Content-->
<div class="col-xl-3 col-lg-3 col-md-12">
    <div class="card">
        <div class="card-body"><br>
            <h5>Location</h5><br>
            <div class="input-group">
                <input type="text" class="form-control br-tl-3  br-bl-3" placeholder="Search">
                <div class="input-group-append ">
                    <button type="button" class="btn btn-primary br-tr-3  br-br-3">
                        Search
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="px-4 py-3 border-bottom border-top">
            <h4 class="mb-0">Price Range</h4>
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
        <div class="card-body">
            <h4 class="mb-2"style="padding-left:15%;">Categories</h4><hr>
        </div>
        <?php if (!empty($product_brands) && is_array($product_brands)) {
                foreach ($product_brands as $brand_val) {
        ?>
        <div class="">
            <div class="" id="">
                <div class="filter-product-checkboxs"style="padding-left:15%;">
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
        
        <div class="px-4 py-3 border-bottom border-top">
            <h4 class="mb-0">Year</h4>
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

        <div class="px-4 py-3 border-bottom border-top">
            <h4 class="mb-0">Fuel Type</h4>
        </div><br>
        <?php   
        if (!empty($fuel) && is_array($fuel)) {
            foreach ($fuel as $fuel_val) {       
        ?>
        <div class="">
            <div class="filter-product-checkboxs"style="padding-left:15%;">
                <label class="custom-control custom-checkbox mb-2">
                    <input type="checkbox" class="custom-control-input fuel"  value="<?php echo ucwords($fuel_val['fuel_type']); ?>">
                    <span class="custom-control-label">
                        <h5 class=""><?php echo ucwords($fuel_val['fuel_type']); ?></h5>
                    
                    </span>
                </label>
            </div>
        </div>
        <?php } } ?>
        <div class="px-4 py-3 border-bottom border-top">
            <h4 class="mb-0">Body Type</h4>
        </div>
        <br>

        <?php 
        if (!empty($body) && is_array($body)) {
            foreach ($body as $body_val) {      
        ?>
        <div class="">
            <div class="filter-product-checkboxs"style="padding-left:15%;">
                <label class="custom-control custom-checkbox mb-2">
                    <input type="checkbox" class="custom-control-input body-type" value="<?php echo ucwords($body_val['body_type']); ?>">
                    <span class="custom-control-label">
                    <h5 class=""><?php echo ucwords($body_val['body_type']); ?></h5>
                    </span>
                </label>
            </div>
        </div>
        <?php } } ?>
        <div class="px-4 py-3 border-bottom border-top">
            <h4 class="mb-0">Owner</h4>
        </div><br>
        <?php
            
        if (!empty($owner_filter) && is_array($owner_filter)) {
            foreach ($owner_filter as $owner_filter_val) {
        ?>
        <div class="">
            <div class="filter-product-checkboxs"style="padding-left:15%;">
                <label class="custom-control custom-checkbox mb-2">
                    <input type="checkbox" class="custom-control-input owner-type" value="<?= ucwords($owner_filter_val['owner_type']); ?>">
                    <span class="custom-control-label">
                    <h5 class=""><?= ucwords($owner_filter_val['owner_type']); ?></h5>
                    </span>
                </label>
            </div>
        </div>
        <?php } } ?> 
    </div>

</div>
<!--/Left Side Content-->