<script>

    var baseUrl = '<?php echo base_url();?>';
    var urlImageMedia = '<?php echo URL_IMAGES_MEDIA ?>';
    function listView(record = null)
    {
        return '<div class="card overflow-hidden">'  +
            '<div class="d-md-flex">' +
                '<div class="item-card9-img">' +
                    '<div class="arrow-ribbon bg-primary">Sale</div>'  +
                    '<div class="item-card9-imgs">' +
                        '<a class="link" href="'+ baseUrl + '/cardetails/' + record.product_category + '/' + record.product_alias_name + ' "></a>' +
                        '<img src="'+ urlImageMedia + record.product_category + '/' + record.product_thumbnail + ' " alt="img" class="cover-image">' +
                    '</div>' +
                    '<div class="item-card9-icons">' +
                        '<a href="#" class="item-card9-icons1 wishlist"> <i class="fa fa fa-heart-o"></i></a>' +
                    '</div>' +

                '</div>' +
                '<div class="card border-0 mb-0">' +
                    '<div class="card-body ">' +
                        '<div class="item-card9">' +
                            '<a href="'+ baseUrl + '/cardetails/' + record.product_category + '/' + record.product_alias_name + '" class="text-dark">' +
                                '<h4 class="mb-0">' + record.product_name + '</h4>' +
                            '</a>' +
                            '<div class="item-card9-desc mb-2">' +
                                '<a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i> USA</span></a>' +
                                '<a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i> 2 days ago</span></a>' +
                            '</div>' +

                        '</div>' +
                    '</div>' +
                    '<div class="card-footer pt-4 pb-4 pr-4 pl-4">' +
                        '<div class="item-card9-footer d-sm-flex">' +
                            '<div class="item-card9-cost">' +
                                '<p class="pb-0 pt-0 mb-2 mt-2"></i>' +
                                    '<?php
                                    // if (ACTIVE_MODE == MODE_DEVELOPMENT) {
                                    //     echo number_to_currency($value['product_sell_price'], 'INR', $locale = 1);
                                    // } else  if (ACTIVE_MODE == MODE_DEVELOPMENT) {
                                    //     echo $money_format('&#x20b9;%!n', $value['product_sell_price']);
                                    // }
                                    ?>' +
                                '</p>' +
                            '</div>' +
                            '<div class="ml-auto">' +
                                '<a href="'+ baseUrl + '/cardetails/' + record.product_category + '/' + record.product_alias_name + '" class="text-dark">' +
                                    '<a href="#" class="mr-2" title="Car type"><i class="fa fa-car  mr-1 text-muted"></i>' + record.fuel + '</a>' +
                                    '<a href="#" class="mr-2" title="Kilometrs"><i class="fa fa-road text-muted mr-1 "></i>' + record.kms_driven + '</a>' +
                                    '<a href="#" class="" title="FuealType"><i class="fa fa-tachometer text-muted mr-1"></i>' + record.transmission + '</a>' +
                            '</div>' +
                        '</div>' +
                    '</div>' +
                '</div>' +
            '</div>' +
        '</div>';
    }

    function get_filter(className) {

        var values = $('.' + className +':checked');
        var array = [];
        values.each(function(){
            array.push($(this).val());
        });
       return array;
    }
    
    $(document).ready(function(){
        
        Body.on('change', function(){
            var brand = get_filter('brand-name');
            var minYear = $('.min-year').val();
            var maxYear = $('.max-year').val();
            var fuel = get_filter('fuel');
            var vehicleType = get_filter('vehicle-type');
            var price = $('.price-filter').val();
            
            $.ajax({
                type: "GET",
                url: '<?php echo base_url('/category');?>',
                dataType: 'json',
                data:{
                    brand: brand,
                    min_year: minYear,
                    max_year: maxYear,
                    fuel: fuel,
                    vehicle_type: vehicleType,
                    price: price,

                },
                success: function(data){
                    
                    if (data) {
                        $('#hide-list-grid').hide();
                        $('#product-filter').empty();
                        for (var item in data) {
                            record = data[item];
                            $('#product-filter').append(listView(record));
                        }
                    } else {
                        $('#hide-list-grid').show();
                    }
                    
                }
            });
        });

        
    });

</script>