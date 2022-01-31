<script>

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
            var bodyType = get_filter('body-type');
            var price = $('.price-filter').val();
            
            $.ajax({
                type: "GET",
                url: '<?php echo base_url('/category');?>',
                data:{
                    brand: brand,
                    min_year: minYear,
                    max_year: maxYear,
                    fuel: fuel,
                    body_type: bodyType,
                    price: price,

                },
                success: function(data){
                    console.log(data);
                }
            });
        });

        
    });

</script>