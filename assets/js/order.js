var baseurl = $('#baseurl').val();
$( document ).on( 'keyup mouseup', 'input[name=count]', function() {
    var e = $(this) ;
    var price = $('.price').html();
    var total_amount = parseFloat(price)*parseInt(e.val());
    if(!$.isNumeric(total_amount))
    {
        total_amount = 0;
    }
    total_amount = total_amount.toFixed(2);
    $('#t_amt').val(total_amount);
    $('.total_amount').html(total_amount+'USD');
}); 

function makeorder(){
    var post_data = {
        count : $('#cnt').val(),
        total_amount : $('#t_amt').val()
    }
    console.log(post_data);
    jQuery.ajax({
        url : baseurl+'order/makeOrder',
        type : 'post',
        data : post_data,
        success : function(response) {
                console.log(response);
                if(response.orderid>0){
                    alert("make it:"+response.orderid);
                }
                else {
                    alert("wrong:"+response.orderid);
                }
        }
})
}