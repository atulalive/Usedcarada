(function ($) {
    "use strict";


    String.prototype.replaceAll = function (search, replacement) {
        var target = this;
        return target.replace(new RegExp(search, 'g'), replacement);
    };

    $('input.Stylednumber').keyup(function () {
        var input = $(this).val().replaceAll(',', '');
        if (input.length <= 0)  
            $(this).val('0.00');
        else {
            var val = parseFloat(input);
            var formatted = inrFormat(input);
            if (formatted.indexOf('.') > 0) {
                var split = formatted.split('.');
                formatted = split[0] + '.' + split[1].substring(0, 2);
            }
            if(formatted !== NaN){
                $(this).val(formatted);
            }else {
                $(this).val('0.00');
            }
        }
    });


})(jQuery);

$(document).ready(function() {
    document.getElementById('product_multiple_image').addEventListener('change', readImage, false);
    
    $( ".preview-images-zone" ).sortable();
    
    $(document).on('click', '.image-cancel', function() {
        let no = $(this).data('no');
        $(".preview-image.preview-show-"+no).remove();
    });
});

function loadModelList(scope){
	var brandVal = $(scope).val();
	var base_url = window.location.origin;
    console.log(base_url);
    $('select[name="model"]').html('');
	
	// alert(brandVal);
	if((brandVal != 'undefined') && (brandVal.length != 0)){

		var request = $.ajax({
			url: base_url+"/for-model",
			dataType: "json",
			async: true,
            method: 'get',
			data: {id : brandVal, source:'cms'},
            success: function (response) {
				// console.log(response);
				if (response.ticket) {
                    if (response.succeed) {
                        $('select[name="model"]').append('<option value="null">Select Model</option>');
						$.each(response.data, function (i, value) {
							$('select[name="model"]').append($('<option>').text(value.name).attr('value', value.id));
                        });
					}
				}
			}  
		});
	}
}


var num = 4;
function readImage() {
    if (window.File && window.FileList && window.FileReader) {
        var files = event.target.files; //FileList object
        var output = $(".preview-images-zone");

        for (let i = 0; i < files.length; i++) {
            var file = files[i];
            if (!file.type.match('image')) continue;
            
            var picReader = new FileReader();
            
            picReader.addEventListener('load', function (event) {
                var picFile = event.target;
                var html =  '<div class="preview-image preview-show-' + num + '">' +
                            '<div class="image-cancel" data-no="' + num + '">x</div>' +
                            '<div class="image-zone"><img id="pro-img-' + num + '" src="' + picFile.result + '"></div>' +
                            '<div class="tools-edit-image"><a href="javascript:void(0)" data-no="' + num + '" class="btn btn-light btn-edit-image">edit</a></div>' +
                            '</div>';

                output.append(html);
                num = num + 1;
            });

            picReader.readAsDataURL(file);
        }
        $("#pro-image").val('');
    } else {
        console.log('Browser not support');
    }
}


function machine_name(scope, span_render_field, hidden_render_field) {
    var this_val = $(scope).val().toLowerCase().replace(/[^\w\s]/gi, '').replace(/ /g, "_");
    if(this_val.length > 0){
        $('#' + hidden_render_field).addClass('is-valid state-valid');
    }else{
        $('#' + hidden_render_field).removeClass('is-valid state-valid');
    }
    
    $('#' + span_render_field).val(this_val);
    $('#' + hidden_render_field).val(this_val);
}

function inrFormat(val) {
    var x = val;
    x = x.toString();
    var afterPoint = '';
    if (x.indexOf('.') > 0)
        afterPoint = x.substring(x.indexOf('.'), x.length);
    x = Math.floor(x);
    x = x.toString();
    var lastThree = x.substring(x.length - 3);
    var otherNumbers = x.substring(0, x.length - 3);
    if (otherNumbers != '')
        lastThree = ',' + lastThree;
    var res = otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree + afterPoint;
    return res;
}