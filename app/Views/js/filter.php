<script>

    var baseUrl = '<?php echo base_url();?>';
    var urlImageMedia = '<?php echo URL_IMAGES_MEDIA ?>';
    function shimmerEffects() 
    {
        return '<!DOCTYPE html>' +
                '<html lang="en">' +
                '<head>' +
                    '<meta charset="UTF-8">' +
                    '<title>Title</title>' +
                    '<link href="https://unpkg.com/shimmer-css@1.0.0/shimmer.css" rel="stylesheet">' +
                    
                '</head>' +
                '<body>' +
                '<div class="shimmer-wrapper">' +
                    '<div class="shimmer-circle shimmer-circle-md shimmer-animate"></div>' +
                    '<div class="shimmer-line shimmer-line-br shimmer-line-80 shimmer-animate"></div>' +
                    '<div class="divider"><hr/></div>' +
                    '<div class="shimmer-line shimmer-line-br shimmer-line-full shimmer-animate"></div>' +
                    '<div class="shimmer-line shimmer-line-br shimmer-line-full shimmer-animate"></div>' +
                    '<div class="shimmer-line shimmer-line-br shimmer-line-full shimmer-animate"></div>' +
                '</div>' +
                '<div class="shimmer-wrapper">' +
                    '<div class="shimmer-circle shimmer-circle-md shimmer-animate"></div>' +
                    '<div class="shimmer-line shimmer-line-br shimmer-line-80 shimmer-animate"></div>' +
                    '<div class="divider"><hr/></div>' +
                    '<div class="shimmer-line shimmer-line-br shimmer-line-full shimmer-animate"></div>' +
                    '<div class="shimmer-line shimmer-line-br shimmer-line-full shimmer-animate"></div>' +
                    '<div class="shimmer-line shimmer-line-br shimmer-line-full shimmer-animate"></div>' +
                '</div>' +
                '</body>' +
                '</html>' ;
    }
    
    function gridView(record = null)
    {
        return  '<div class="col-lg-6 col-md-12 col-xl-4"> '+
                    '<div class="card overflow-hidden">' +
                        '<div class="item-card9-img">' +
                            '<div class="arrow-ribbon bg-primary">' +
                                '<div class="arrow-ribbon bg-danger " style="margin-top:125%;"><i class="fa fa-eye"></i>7</div>' +
                                    '<p class="pb-0 pt-0 mb-1 mt-2"></i>' +
                                        ' ' + record.product_sell_price + ' INR ' +
                                    '</p>'+
                                '</div>' +
                                '<div class="item-card9-imgs">' +
                                    '<a class="link" href="cars.html"></a>' +
                                    '<a class="link" href="'+ baseUrl + '/cardetails/' + record.product_category + '/' + record.product_alias_name + ' "></a>' +
                                    '<img src="' + urlImageMedia + record.product_category + '/' + record.product_thumbnail + ' " alt="img" class="cover-image">' +
                                '</div>' +
                                '<div class="item-card9-icons">' +
                                    '<a href="" class="bg-white"><img src="'+ urlImageMedia + record.product_category + '/' + record.product_thumbnail + '" alt="img" class="mx-auto"></a>' +
                                    '</a>' +
                                '</div>' +
                            '</div>' +

                        '<div class="card border-0 mb-0 ">' +

                            '<div class="card-body  ">' +
                                '<div class="item-card9-img ">' +

                                    '<a href="'+ baseUrl + '/cardetails/' + record.product_category + '/' + record.product_alias_name + '" class="text-dark">' +
                                        '<h4 class="mb-0">' + record.product_name + '</h4>' +
                                        '<h4 class="mb-0">' + record.name + '</h4>' +
                                    '</a>' +
                                    '<div class=" mb-2"><br>' +
                                        '<b> <a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i><b>' + record.make_year + '</span></a></b>' +
                                    '<del> <a href="#" class="mr-4"style=padding-left:30%;><span class="">' +
                                            ' ' + record.product_sell_price + ' INR ' +
                                            '</span></a></b><del>' +
                                    '</div>' +
                                    '<div class="item-card9-desc mb-2">' +
                                        '<a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i>Mumbai</span></a>' +
                                        '<a href="#" class="mr-4"style=padding-left:5%;><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i> 2 days ago</span></a>' +
                                    '</div>' +
                                '</div>' +
                                '<div class="card-footer pt-4 pb-4 pr-4 pl-4">' +
                                    '<div class="item-card9-footer d-sm-flex">' +
                                        '<div class="ml-auto">' +
                                            '<a href="'+ baseUrl + '/cardetails/' + record.product_category + '/' + record.product_alias_name + '" class="text-dark">' +
                                                '<a href="#" class="w-50 mt-1 mb-1 float-left" title="Car type"><i class="fa fa-car  mr-1 text-muted"></i> ' + record.fuel + '</a>' +
                                                '<a href="#" class="w-50 mt-1 mb-1 float-left" title="Kilometrs"><i class="fa fa-road text-muted mr-1 "></i>' + record.kms_driven + '</a>' +
                                                '<a href="#" class="w-50 mt-1 mb-1 float-left" title="FuealType"><i class="fa fa-tachometer text-muted mr-1"></i>' + record.transmission + '</a>' +
                                        '</div>' +
                                    '</div>' +
                                '</div>' +
                            '</div>' +
                        '</div>' +
                    '</div>' +
                '</div>';
    }

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
            var ownerType = get_filter('owner-type');
            var transmissionType = get_filter('transmition-filter');
            var kiloMeter = $('.kilo-meter-filter').val();

            $('#hide-list-grid').hide();
            $('#product-filter').html(shimmerEffects());
            

            setTimeout(function(){
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
                        owner_type: ownerType,
                        transmisson_type: transmissionType,
                        kilo_meter: kiloMeter,
            
                    },
                    success: function(data){
                        if (data) {
                            $('#product-filter').empty();
                        
                            for (var item in data) {
                                record = data[item];
                                $('#product-filter').append(gridView(record));
                            }
                        } else {
                            $('#hide-list-grid').show();
                        }
                        
                    }
                });
            }, 500);

            
        });

        
    });

</script>