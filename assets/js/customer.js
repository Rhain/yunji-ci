var customer_js = customer_js || false;
var base_url = $("#base_url").val();

if( customer_js == false ){
    $( document ).ready( function() {
  
  
    });
    customer_js = true; 
}

$( '#form-customer' ).submit( function(e) {
        e.preventDefault();
        var ele = $(this);
        var formData = new FormData( $( '#form-customer' )[0] );
        $.ajax({
                url : 'customer/insert',
                type : 'post',
                data : formData,
                cache: false,
                contentType: false,
                processData: false,
                success : function(response) {
                        alert(response);
                        ele.each(function(){
                            this.reset();
                        });
                }
        })
});
