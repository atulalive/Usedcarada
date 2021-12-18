(function ($) {
	"use strict";
    
})(jQuery);

function machine_name(scope, span_render_field, hidden_render_field){
    var this_val = $(scope).val().toLowerCase().replace(/[^\w\s]/gi, '').replace(/ /g,"_");
    $('#'+span_render_field).html(this_val);
    $('#'+hidden_render_field).val(this_val);
}