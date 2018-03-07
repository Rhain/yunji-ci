var eyeglasses_js = eyeglasses_js || false;

var attachment_id = 0;
var input_id = 0;
var ignore_input = '';

$( "#sortable" ).sortable();
$( "#sortable" ).disableSelection();   
if( eyeglasses_js == false ){
    $( document ).on( 'click', '#btn-add-picture', function (e) {
            var fileInput = $( '<input>' ).attr({
                    type: 'file',
                    id: 'images' + input_id,
                    name: 'images[]',
                    multiple: 'true',
            })
            input_id++;
            fileInput.appendTo( '#new-input-file' );
            fileInput.click();
    });

    $( document ).on( 'change', 'input[type=file]', function() {
            var files = $( this )[0].files;
            if ( files ) {
                    var reader_id = attachment_id;
                    for ( i = 0; files[i]; i++ ) {
                            if ( $( this ).validate_file( files[i], $( this ).attr( 'id' ) ) ) {
                                    // Create preview element
                                    $( '#sortable' ).append( '\
                                            <div class="img-preview img-preview-gallery d-flex flex-column" data-image="raw_img_'+ files[i]['name'] +'">\
                                                    <img id="attachment-img' + attachment_id + '">\
                                                    <div class="del-attachment btn btn-sm" data-name="' + $( this ).attr( 'id' ) + files[i]['name'] + '">Delete</div>\
                                                    <input type="hidden" name="sorts[]" value="raw_img_'+ files[i]['name'] +'" />\
                                                    </div>\
                                            ');

                                    // Populate preview element (cannot use attachment_id because reader.onload is asyncronous)
                                    var reader = new FileReader();
                                    reader.onload = function (e) {
                                            $( '#attachment-img' + reader_id ).attr( 'src', e.target.result );
                                            reader_id++;
                                    }
                                    reader.readAsDataURL( files[i] );
                                    attachment_id++;
                            }
                    }
            }
    });
    /*
     * Delete picture
     * If picture was already is the mandate, get it's ID for deletion upon submit
     * If picture was added but not yet submited, ignore the input
     */
    jQuery( document ).on( 'click', '.del-attachment', function() {
            if ( jQuery( this ).data( 'id' ) ) {
                    var deleting = jQuery( '#delete-existing-file' ).val();
                    if ( deleting == '' ) {
                            jQuery( '#delete-existing-file' ).val( jQuery( this ).data( 'id' ) );
                    } else {
                            jQuery( '#delete-existing-file' ).val( deleting + ',' + jQuery( this ).data( 'id' ) );
                    }
            } else {
                    if ( ignore_input == '' ) {
                            ignore_input = jQuery( this ).data( 'name' );
                    } else {
                            ignore_input = ignore_input + ',' + jQuery( this ).data( 'name' );
                    }
            }
            jQuery( this ).parent().remove();
    });
 eyeglasses_js = true;
}
jQuery( '#form-edit-mandate' ).submit( function(e) {
        e.preventDefault();

        var formData = jQuery( this ).create_form_data();
        jQuery.ajax({
                url : 'admin/create_eyeglasses',
                type : 'post',
                data : formData,
                cache: false,
                contentType: false,
                processData: false,
                success : function(response) {
                        show_page_for_backend("admin/products");
                        alert("successfully!");
                }
        })
});
jQuery.fn.validate_file = function( file, id ) {
	if ( file['size'] > 300000 ) {
		alert("File is too big!!");
		if ( ignore_input == '' ) {
			ignore_input = id + file['name'];
		} else {
			ignore_input = ignore_input + ',' + id + file['name'];
		}
		return false;
	}
	return true;
}
jQuery.fn.create_form_data = function() {
	var formData = new FormData( jQuery( '#form-edit-mandate' )[0] );
	var ignored = ignore_input.split( ',' );

	for ( i = 0; i < input_id; i++ ) {
		if ( jQuery( '#images' + i ).length ) {
			var files = jQuery( '#images' + i )[0].files;
			if ( files ) {
				for ( j = 0; files[j]; j++ ) {
					var fileName = 'images' + i + files[j]['name'];
					if ( jQuery.inArray( fileName, ignored ) == -1 ) {
						formData.append( 'images[]', files[j], files[j]['name'] );
					}
				}
			}
		}
	}
	return formData;
}

function delete_item(pid){
    jQuery.ajax({
                url : 'admin/delete_eyeglasses?pid='+pid,
                type : 'get',
                cache: false,
                contentType: false,
                processData: false,
                success : function(response) {
                        show_page_for_backend("admin/products");
                        alert("successfully!");
                }
        })
}